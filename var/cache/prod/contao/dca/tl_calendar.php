<?php

namespace {
$GLOBALS['TL_DCA']['tl_calendar'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'ctable' => array('tl_calendar_events'), 'switchToEdit' => \true, 'enableVersioning' => \true, 'markAsCopy' => 'title', 'onload_callback' => array(array('tl_calendar', 'adjustDca'), array('tl_calendar', 'generateFeed')), 'oncreate_callback' => array(array('tl_calendar', 'adjustPermissions')), 'oncopy_callback' => array(array('tl_calendar', 'adjustPermissions')), 'onsubmit_callback' => array(array('tl_calendar', 'scheduleUpdate')), 'oninvalidate_cache_tags_callback' => array(array('tl_calendar', 'addSitemapCacheInvalidationTag')), 'sql' => array('keys' => array('id' => 'primary', 'tstamp' => 'index'))),
    // List
    'list' => array('sorting' => array('mode' => \Contao\DataContainer::MODE_SORTED, 'fields' => array('title'), 'flag' => \Contao\DataContainer::SORT_INITIAL_LETTER_ASC, 'panelLayout' => 'filter;search,limit', 'defaultSearchField' => 'title'), 'label' => array('fields' => array('title'), 'format' => '%s'), 'global_operations' => array('feeds' => array('href' => 'table=tl_calendar_feed', 'class' => 'header_rss', 'button_callback' => array('tl_calendar', 'manageFeeds')))),
    // Palettes
    'palettes' => array('__selector__' => array('protected'), 'default' => '{title_legend},title,jumpTo;{protected_legend:hide},protected'),
    // Sub-palettes
    'subpalettes' => array('protected' => 'groups'),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'title' => array('search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'basicEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'jumpTo' => array('inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('mandatory' => \true, 'fieldType' => 'radio', 'tl_class' => 'clr'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'protected' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'groups' => array('inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('mandatory' => \true, 'multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy'))),
);
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @property Calendar $Calendar
 *
 * @internal
 */
class tl_calendar extends \Contao\Backend
{
    /**
     * Set the root IDs.
     */
    public function adjustDca()
    {
        $user = \Contao\BackendUser::getInstance();
        if ($user->isAdmin) {
            return;
        }
        // Set root IDs
        if (empty($user->calendars) || !\is_array($user->calendars)) {
            $root = array(0);
        } else {
            $root = $user->calendars;
        }
        $GLOBALS['TL_DCA']['tl_calendar']['list']['sorting']['root'] = $root;
    }
    /**
     * Add the new calendar to the permissions
     *
     * @param string|int $insertId
     */
    public function adjustPermissions($insertId)
    {
        // The oncreate_callback passes $insertId as second argument
        if (\func_num_args() == 4) {
            $insertId = \func_get_arg(1);
        }
        $user = \Contao\BackendUser::getInstance();
        if ($user->isAdmin) {
            return;
        }
        // Set root IDs
        if (empty($user->calendars) || !\is_array($user->calendars)) {
            $root = array(0);
        } else {
            $root = $user->calendars;
        }
        // The calendar is enabled already
        if (\in_array($insertId, $root)) {
            return;
        }
        $objSessionBag = \Contao\System::getContainer()->get('request_stack')->getSession()->getBag('contao_backend');
        $arrNew = $objSessionBag->get('new_records');
        if (\is_array($arrNew['tl_calendar']) && \in_array($insertId, $arrNew['tl_calendar'])) {
            $db = \Contao\Database::getInstance();
            // Add the permissions on group level
            if ($user->inherit != 'custom') {
                $objGroup = $db->execute("SELECT id, calendars, calendarp FROM tl_user_group WHERE id IN(" . \implode(',', \array_map('\\intval', $user->groups)) . ")");
                while ($objGroup->next()) {
                    $arrCalendarp = \Contao\StringUtil::deserialize($objGroup->calendarp);
                    if (\is_array($arrCalendarp) && \in_array('create', $arrCalendarp)) {
                        $arrCalendars = \Contao\StringUtil::deserialize($objGroup->calendars, \true);
                        $arrCalendars[] = $insertId;
                        $db->prepare("UPDATE tl_user_group SET calendars=? WHERE id=?")->execute(\serialize($arrCalendars), $objGroup->id);
                    }
                }
            }
            // Add the permissions on user level
            if ($user->inherit != 'group') {
                $objUser = $db->prepare("SELECT calendars, calendarp FROM tl_user WHERE id=?")->limit(1)->execute($user->id);
                $arrCalendarp = \Contao\StringUtil::deserialize($objUser->calendarp);
                if (\is_array($arrCalendarp) && \in_array('create', $arrCalendarp)) {
                    $arrCalendars = \Contao\StringUtil::deserialize($objUser->calendars, \true);
                    $arrCalendars[] = $insertId;
                    $db->prepare("UPDATE tl_user SET calendars=? WHERE id=?")->execute(\serialize($arrCalendars), $user->id);
                }
            }
            // Add the new element to the user object
            $root[] = $insertId;
            $user->calendars = $root;
        }
    }
    /**
     * Check for modified calendar feeds and update the XML files if necessary
     */
    public function generateFeed()
    {
        $objSession = \Contao\System::getContainer()->get('request_stack')->getSession();
        $session = $objSession->get('calendar_feed_updater');
        if (empty($session) || !\is_array($session)) {
            return;
        }
        $request = \Contao\System::getContainer()->get('request_stack')->getCurrentRequest();
        if ($request) {
            $origScope = $request->attributes->get('_scope');
            $request->attributes->set('_scope', 'frontend');
        }
        $calendar = new \Contao\Calendar();
        foreach ($session as $id) {
            $calendar->generateFeedsByCalendar($id);
        }
        if ($request) {
            $request->attributes->set('_scope', $origScope);
        }
        $objSession->set('calendar_feed_updater', \null);
    }
    /**
     * Schedule a calendar feed update
     *
     * This method is triggered when a single calendar or multiple calendars
     * are modified (edit/editAll).
     *
     * @param DataContainer $dc
     */
    public function scheduleUpdate(\Contao\DataContainer $dc)
    {
        // Return if there is no ID
        if (!$dc->id) {
            return;
        }
        $objSession = \Contao\System::getContainer()->get('request_stack')->getSession();
        // Store the ID in the session
        $session = $objSession->get('calendar_feed_updater');
        $session[] = $dc->id;
        $objSession->set('calendar_feed_updater', \array_unique($session));
    }
    /**
     * Return the manage feeds button
     *
     * @param string $href
     * @param string $label
     * @param string $title
     * @param string $class
     * @param string $attributes
     *
     * @return string
     */
    public function manageFeeds($href, $label, $title, $class, $attributes)
    {
        $user = \Contao\BackendUser::getInstance();
        return $user->isAdmin || !empty($user->calendarfeeds) || !empty($user->calendarfeedp) ? '<a href="' . $this->addToUrl($href) . '" class="' . $class . '" title="' . \Contao\StringUtil::specialchars($title) . '"' . $attributes . '>' . $label . '</a> ' : '';
    }
    /**
     * @param DataContainer $dc
     *
     * @return array
     */
    public function addSitemapCacheInvalidationTag($dc, array $tags)
    {
        $pageModel = \Contao\PageModel::findWithDetails($dc->activeRecord->jumpTo);
        if ($pageModel === \null) {
            return $tags;
        }
        return \array_merge($tags, array('contao.sitemap.' . $pageModel->rootId));
    }
}
}

namespace {
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('uniqueEvents', 'jumpTo')->applyToPalette('default', 'tl_calendar');
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('extended_type_legend', 'title_legend')->addField('isHolidayCal', 'extended_type_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('default', 'tl_calendar');
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('extended_legend', 'extended_type_legend')->addField('fg_color', 'extended_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('bg_color', 'extended_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('default', 'tl_calendar');
$GLOBALS['TL_DCA']['tl_calendar']['palettes']['__selector__'] = \array_merge(['isHolidayCal'], $GLOBALS['TL_DCA']['tl_calendar']['palettes']['__selector__']);
$GLOBALS['TL_DCA']['tl_calendar']['subpalettes']['isHolidayCal'] = 'allowEvents';
// Hinzufügen der Feld-Konfiguration
$GLOBALS['TL_DCA']['tl_calendar']['fields']['bg_color'] = ['inputType' => 'text', 'exclude' => \true, 'eval' => ['maxlength' => 6, 'multiple' => \true, 'size' => 2, 'colorpicker' => \true, 'isHexColor' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50 wizard'], 'sql' => ['type' => 'string', 'length' => 64, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar']['fields']['fg_color'] = ['inputType' => 'text', 'exclude' => \true, 'eval' => ['maxlength' => 6, 'multiple' => \true, 'size' => 2, 'colorpicker' => \true, 'isHexColor' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50 wizard'], 'sql' => ['type' => 'string', 'length' => 64, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar']['fields']['isHolidayCal'] = ['default' => 0, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['submitOnChange' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar']['fields']['allowEvents'] = ['default' => 0, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar']['fields']['uniqueEvents'] = ['default' => 0, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
}

namespace {
$GLOBALS['TL_DCA']['tl_calendar']['fields']['reg_confirm_page'] = ['exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => ['fieldType' => 'radio', 'tl_class' => 'clr'], 'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0], 'relation' => ['type' => 'hasOne', 'load' => 'lazy']];
$GLOBALS['TL_DCA']['tl_calendar']['fields']['reg_cancel_page'] = ['exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => ['fieldType' => 'radio', 'tl_class' => 'clr'], 'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0], 'relation' => ['type' => 'hasOne', 'load' => 'lazy']];
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('reg_legend', \null)->addField('reg_confirm_page', 'reg_legend')->addField('reg_cancel_page', 'reg_legend')->applyToPalette('default', 'tl_calendar');
}

namespace {
/**
 * This file is part of
 *
 * CalendarEditorBundle
 * @copyright  Daniel Gaußmann 2018
 * @author     Daniel Gaußmann (Gausi)
 * @package    Calendar_Editor
 * @license    LGPL-3.0-or-later
 * @see        https://github.com/DanielGausi/Contao-CalendarEditor
 *
 * an extension for
 * Contao Open Source CMS
 * (c) Leo Feyer, LGPL-3.0-or-later
 *
 */
/**
 * Add palettes to tl_calendar
 */
$GLOBALS['TL_DCA']['tl_calendar']['palettes']['default'] .= ';{edit_legend},AllowEdit';
$GLOBALS['TL_DCA']['tl_calendar']['palettes']['__selector__'][] = 'AllowEdit';
$GLOBALS['TL_DCA']['tl_calendar']['subpalettes']['AllowEdit'] = 'caledit_onlyFuture, caledit_jumpTo, caledit_loginRequired, caledit_onlyUser, caledit_groups, caledit_adminGroup';
$GLOBALS['TL_DCA']['tl_calendar']['fields']['AllowEdit'] = array('label' => &$GLOBALS['TL_LANG']['tl_calendar']['AllowEdit'], 'exclude' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_calendar']['fields']['caledit_onlyFuture'] = array('label' => &$GLOBALS['TL_LANG']['tl_calendar']['caledit_onlyFuture'], 'inputType' => 'checkbox', 'eval' => array('default' => 'true'), 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_calendar']['fields']['caledit_jumpTo'] = array('label' => &$GLOBALS['TL_LANG']['tl_calendar']['caledit_jumpTo'], 'exclude' => \true, 'inputType' => 'pageTree', 'eval' => array('fieldType' => 'radio'), 'sql' => "int(10) unsigned NOT NULL default '0'");
$GLOBALS['TL_DCA']['tl_calendar']['fields']['caledit_loginRequired'] = array('label' => &$GLOBALS['TL_LANG']['tl_calendar']['caledit_loginRequired'], 'inputType' => 'checkbox', 'eval' => array('default' => 'true'), 'sql' => "char(1) NOT NULL default '1'");
$GLOBALS['TL_DCA']['tl_calendar']['fields']['caledit_onlyUser'] = array('label' => &$GLOBALS['TL_LANG']['tl_calendar']['caledit_onlyUser'], 'exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_calendar']['fields']['caledit_groups'] = array('label' => &$GLOBALS['TL_LANG']['tl_calendar']['caledit_groups'], 'inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('multiple' => \true), 'sql' => "blob NULL");
$GLOBALS['TL_DCA']['tl_calendar']['fields']['caledit_adminGroup'] = array('label' => &$GLOBALS['TL_LANG']['tl_calendar']['caledit_adminGroup'], 'inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('mandatory' => \false, 'multiple' => \true), 'sql' => "blob NULL");
}

namespace {
// new global operation calls categories from within calendar module (therefor the categories table has to be added to the calendar module in config.php)
\Contao\ArrayUtil::arrayInsert($GLOBALS['TL_DCA']['tl_calendar']['list']['global_operations'], 1, array('mae_categories' => array('label' => &$GLOBALS['TL_LANG']['tl_calendar']['categories_label'], 'href' => 'do=calendar&table=tl_mae_event_cat', 'class' => 'header_new', 'attributes' => 'onclick="Backend.getScrollOffset()" style="padding-left: 22px;background-image: url(\'bundles/pdirmaeeventcategories/cat_icon.png\')"', 'button_callback' => array('tl_calendar_categories', 'buttonCategories'))));
class tl_calendar_categories extends \Contao\Backend
{
    /**
     * paint the categories global OP button
     */
    public function buttonCategories($href, $label, $title, $class, $attributes)
    {
        $this->import('Contao\\BackendUser', 'User');
        if (!$this->User->isAdmin && !$this->User->maeEventCat) {
            return "";
        } else {
            return '<a href="' . $this->addToUrl($href) . '" class="' . $class . '" title="' . \Contao\StringUtil::specialchars($title) . '"' . $attributes . '>' . $label . '</a> ';
        }
    }
}
}
