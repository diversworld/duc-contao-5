<?php

namespace {
\Contao\System::loadLanguageFile('tl_content');
$GLOBALS['TL_DCA']['tl_calendar_events'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'ptable' => 'tl_calendar', 'ctable' => array('tl_content'), 'switchToEdit' => \true, 'enableVersioning' => \true, 'markAsCopy' => 'title', 'onload_callback' => array(array('tl_calendar_events', 'generateFeed')), 'oncut_callback' => array(array('tl_calendar_events', 'scheduleUpdate')), 'ondelete_callback' => array(array('tl_calendar_events', 'scheduleUpdate')), 'onsubmit_callback' => array(array('tl_calendar_events', 'adjustTime'), array('tl_calendar_events', 'scheduleUpdate')), 'oninvalidate_cache_tags_callback' => array(array('tl_calendar_events', 'addSitemapCacheInvalidationTag')), 'sql' => array('keys' => array('id' => 'primary', 'tstamp' => 'index', 'alias' => 'index', 'pid,published,featured,start,stop' => 'index'))),
    // List
    'list' => array('sorting' => array('mode' => \Contao\DataContainer::MODE_PARENT, 'fields' => array('startTime DESC'), 'headerFields' => array('title', 'jumpTo', 'tstamp', 'protected'), 'panelLayout' => 'filter;sort,search,limit', 'defaultSearchField' => 'title', 'child_record_callback' => array('tl_calendar_events', 'listEvents')), 'operations' => array('edit', 'children', 'copy', 'cut', 'delete', 'toggle' => array('href' => 'act=toggle&amp;field=published', 'icon' => 'visible.svg', 'showInHeader' => \true), 'feature' => array('href' => 'act=toggle&amp;field=featured', 'icon' => 'featured.svg'), 'show')),
    // Palettes
    'palettes' => array('__selector__' => array('source', 'addTime', 'addImage', 'recurring', 'addEnclosure', 'overwriteMeta'), 'default' => '{title_legend},title,featured,alias,author;{date_legend},addTime,startDate,endDate;{source_legend},source,linkText,canonicalLink;{meta_legend},pageTitle,robots,description,serpPreview;{details_legend},location,address,teaser;{image_legend},addImage;{recurring_legend},recurring;{enclosure_legend:hide},addEnclosure;{expert_legend:hide},cssClass;{publish_legend},published,start,stop', 'internal' => '{title_legend},title,featured,alias,author;{date_legend},addTime,startDate,endDate;{source_legend},source,jumpTo,linkText;{details_legend},location,address,teaser;{image_legend},addImage;{recurring_legend},recurring;{enclosure_legend:hide},addEnclosure;{expert_legend:hide},cssClass;{publish_legend},published,start,stop', 'article' => '{title_legend},title,featured,alias,author;{date_legend},addTime,startDate,endDate;{source_legend},source,articleId,linkText;{details_legend},location,address,teaser;{image_legend},addImage;{recurring_legend},recurring;{enclosure_legend:hide},addEnclosure;{expert_legend:hide},cssClass;{publish_legend},published,start,stop', 'external' => '{title_legend},title,featured,alias,author;{date_legend},addTime,startDate,endDate;{source_legend},source,url,target,linkText;{details_legend},location,address,teaser;{image_legend},addImage;{recurring_legend},recurring;{enclosure_legend:hide},addEnclosure;{expert_legend:hide},cssClass;{publish_legend},published,start,stop'),
    // Sub-palettes
    'subpalettes' => array('addTime' => 'startTime,endTime', 'addImage' => 'singleSRC,fullsize,size,floating,overwriteMeta', 'recurring' => 'repeatEach,recurrences', 'addEnclosure' => 'enclosure', 'overwriteMeta' => 'alt,imageTitle,imageUrl,caption'),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'pid' => array('foreignKey' => 'tl_calendar.title', 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'belongsTo', 'load' => 'lazy')), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'title' => array('search' => \true, 'sorting' => \true, 'flag' => \Contao\DataContainer::SORT_INITIAL_LETTER_ASC, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'basicEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'featured' => array('toggle' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'alias' => array('search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'alias', 'doNotCopy' => \true, 'unique' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'save_callback' => array(array('tl_calendar_events', 'generateAlias')), 'sql' => "varchar(255) BINARY NOT NULL default ''"), 'author' => array('default' => static fn() => \Contao\BackendUser::getInstance()->id, 'search' => \true, 'filter' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_user.name', 'eval' => array('doNotCopy' => \true, 'chosen' => \true, 'mandatory' => \true, 'includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'addTime' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'doNotCopy' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'startTime' => array('default' => \time(), 'filter' => \true, 'sorting' => \true, 'flag' => \Contao\DataContainer::SORT_MONTH_BOTH, 'inputType' => 'text', 'eval' => array('rgxp' => 'time', 'mandatory' => \true, 'doNotCopy' => \true, 'tl_class' => 'w50'), 'load_callback' => array(array('tl_calendar_events', 'loadTime')), 'sql' => "bigint(20) NULL"), 'endTime' => array('default' => \time(), 'inputType' => 'text', 'eval' => array('rgxp' => 'time', 'doNotCopy' => \true, 'tl_class' => 'w50'), 'load_callback' => array(array('tl_calendar_events', 'loadEndTime')), 'save_callback' => array(array('tl_calendar_events', 'setEmptyEndTime')), 'sql' => "bigint(20) NULL"), 'startDate' => array('inputType' => 'text', 'eval' => array('rgxp' => 'date', 'mandatory' => \true, 'doNotCopy' => \true, 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "bigint(20) NULL"), 'endDate' => array('inputType' => 'text', 'eval' => array('rgxp' => 'date', 'doNotCopy' => \true, 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "bigint(20) NULL"), 'pageTitle' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'robots' => array('search' => \true, 'inputType' => 'select', 'options' => array('index,follow', 'index,nofollow', 'noindex,follow', 'noindex,nofollow'), 'eval' => array('tl_class' => 'w50', 'includeBlankOption' => \true), 'sql' => "varchar(32) NOT NULL default ''"), 'description' => array('search' => \true, 'inputType' => 'textarea', 'eval' => array('style' => 'height:60px', 'decodeEntities' => \true, 'tl_class' => 'clr'), 'sql' => "text NULL"), 'serpPreview' => array('label' => &$GLOBALS['TL_LANG']['MSC']['serpPreview'], 'inputType' => 'serpPreview', 'eval' => array('title_tag_callback' => array('tl_calendar_events', 'getTitleTag'), 'titleFields' => array('pageTitle', 'title'), 'descriptionFields' => array('description', 'teaser')), 'sql' => \null), 'canonicalLink' => array('search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 2048, 'dcaPicker' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(2048) NOT NULL default ''"), 'location' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'address' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'teaser' => array('search' => \true, 'inputType' => 'textarea', 'eval' => array('rte' => 'tinyMCE', 'basicEntities' => \true, 'tl_class' => 'clr'), 'sql' => "text NULL"), 'addImage' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'overwriteMeta' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['overwriteMeta'], 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'w50 clr'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'singleSRC' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['singleSRC'], 'inputType' => 'fileTree', 'eval' => array('filesOnly' => \true, 'fieldType' => 'radio', 'extensions' => '%contao.image.valid_extensions%', 'mandatory' => \true), 'sql' => "binary(16) NULL"), 'alt' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['alt'], 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'imageTitle' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['imageTitle'], 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'size' => array('label' => &$GLOBALS['TL_LANG']['MSC']['imgSize'], 'inputType' => 'imageSize', 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('rgxp' => 'natural', 'includeBlankOption' => \true, 'nospace' => \true, 'helpwizard' => \true, 'tl_class' => 'w50 clr'), 'options_callback' => static function () {
        return \Contao\System::getContainer()->get('contao.image.sizes')->getOptionsForUser(\Contao\BackendUser::getInstance());
    }, 'sql' => "varchar(64) NOT NULL default ''"), 'imageUrl' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['imageUrl'], 'search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 2048, 'dcaPicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(2048) NOT NULL default ''"), 'fullsize' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['fullsize'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'caption' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['caption'], 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'allowHtml' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'floating' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['floating'], 'inputType' => 'radioTable', 'options' => array('above', 'left', 'right', 'below'), 'eval' => array('cols' => 4, 'tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'sql' => "varchar(32) NOT NULL default 'above'"), 'recurring' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'repeatEach' => array('inputType' => 'timePeriod', 'options' => array('days', 'weeks', 'months', 'years'), 'reference' => &$GLOBALS['TL_LANG']['tl_calendar_events'], 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'minval' => 1, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''"), 'repeatEnd' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'recurrences' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'addEnclosure' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'enclosure' => array('inputType' => 'fileTree', 'eval' => array('multiple' => \true, 'fieldType' => 'checkbox', 'filesOnly' => \true, 'isDownloads' => \true, 'extensions' => \Contao\Config::get('allowedDownload'), 'mandatory' => \true, 'isSortable' => \true), 'sql' => "blob NULL"), 'source' => array('filter' => \true, 'inputType' => 'radio', 'options_callback' => array('tl_calendar_events', 'getSourceOptions'), 'reference' => &$GLOBALS['TL_LANG']['tl_calendar_events'], 'eval' => array('submitOnChange' => \true, 'helpwizard' => \true), 'sql' => "varchar(32) NOT NULL default 'default'"), 'linkText' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'jumpTo' => array('inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('mandatory' => \true, 'fieldType' => 'radio'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'belongsTo', 'load' => 'lazy')), 'articleId' => array('inputType' => 'picker', 'foreignKey' => 'tl_article.title', 'eval' => array('mandatory' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'url' => array('label' => &$GLOBALS['TL_LANG']['MSC']['url'], 'search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 2048, 'dcaPicker' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(2048) NOT NULL default ''"), 'target' => array('label' => &$GLOBALS['TL_LANG']['MSC']['target'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'cssClass' => array('inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'published' => array('toggle' => \true, 'filter' => \true, 'flag' => \Contao\DataContainer::SORT_INITIAL_LETTER_DESC, 'inputType' => 'checkbox', 'eval' => array('doNotCopy' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'start' => array('inputType' => 'text', 'eval' => array('rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(10) NOT NULL default ''"), 'stop' => array('inputType' => 'text', 'eval' => array('rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(10) NOT NULL default ''")),
);
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @property Calendar $Calendar
 *
 * @internal
 */
class tl_calendar_events extends \Contao\Backend
{
    /**
     * Auto-generate the event alias if it has not been set yet
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function generateAlias($varValue, \Contao\DataContainer $dc)
    {
        $aliasExists = static function (string $alias) use($dc) : bool {
            $result = \Contao\Database::getInstance()->prepare("SELECT id FROM tl_calendar_events WHERE alias=? AND id!=?")->execute($alias, $dc->id);
            return $result->numRows > 0;
        };
        // Generate the alias if there is none
        if (!$varValue) {
            $varValue = \Contao\System::getContainer()->get('contao.slug')->generate($dc->activeRecord->title, \Contao\CalendarModel::findById($dc->activeRecord->pid)->jumpTo, $aliasExists);
        } elseif (\preg_match('/^[1-9]\\d*$/', $varValue)) {
            throw new \Exception(\sprintf($GLOBALS['TL_LANG']['ERR']['aliasNumeric'], $varValue));
        } elseif ($aliasExists($varValue)) {
            throw new \Exception(\sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
        }
        return $varValue;
    }
    /**
     * Set the timestamp to 1970-01-01 (see #26)
     *
     * @param integer $value
     *
     * @return integer
     */
    public function loadTime($value)
    {
        return \strtotime('1970-01-01 ' . \date('H:i:s', $value));
    }
    /**
     * Set the end time to an empty string (see #23)
     *
     * @param integer       $value
     * @param DataContainer $dc
     *
     * @return integer
     */
    public function loadEndTime($value, \Contao\DataContainer $dc)
    {
        $return = \strtotime('1970-01-01 ' . \date('H:i:s', $value));
        // Return an empty string if the start time is the same as the end time (see #23)
        if ($dc->activeRecord && $return == $dc->activeRecord->startTime) {
            return '';
        }
        // Return an empty string if no time has been set yet
        if ($dc->activeRecord && $return - $dc->activeRecord->startTime == 86399) {
            return '';
        }
        return \strtotime('1970-01-01 ' . \date('H:i:s', $value));
    }
    /**
     * Automatically set the end time if not set
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return string
     */
    public function setEmptyEndTime($varValue, \Contao\DataContainer $dc)
    {
        if ($varValue === \null) {
            $varValue = $dc->activeRecord->startTime;
        }
        return $varValue;
    }
    /**
     * Return the title tag from the associated page layout
     *
     * @param CalendarEventsModel $model
     *
     * @return string
     */
    public function getTitleTag(\Contao\CalendarEventsModel $model)
    {
        if (!($calendar = \Contao\CalendarModel::findById($model->pid))) {
            return '';
        }
        if (!($page = \Contao\PageModel::findById($calendar->jumpTo))) {
            return '';
        }
        $page->loadDetails();
        if (!($layout = \Contao\LayoutModel::findById($page->layout))) {
            return '';
        }
        $origObjPage = $GLOBALS['objPage'] ?? \null;
        // Override the global page object, so we can replace the insert tags
        $GLOBALS['objPage'] = $page;
        $title = \implode('%s', \array_map(static function ($strVal) {
            return \str_replace('%', '%%', \Contao\System::getContainer()->get('contao.insert_tag.parser')->replaceInline($strVal));
        }, \explode('{{page::pageTitle}}', $layout->titleTag ?: '{{page::pageTitle}} - {{page::rootPageTitle}}', 2)));
        $GLOBALS['objPage'] = $origObjPage;
        return $title;
    }
    /**
     * Add the type of input field
     *
     * @param array $arrRow
     *
     * @return string
     */
    public function listEvents($arrRow)
    {
        $span = \Contao\Calendar::calculateSpan($arrRow['startTime'], $arrRow['endTime']);
        if ($span > 0) {
            $date = \Contao\Date::parse(\Contao\Config::get($arrRow['addTime'] ? 'datimFormat' : 'dateFormat'), $arrRow['startTime']) . $GLOBALS['TL_LANG']['MSC']['cal_timeSeparator'] . \Contao\Date::parse(\Contao\Config::get($arrRow['addTime'] ? 'datimFormat' : 'dateFormat'), $arrRow['endTime']);
        } elseif ($arrRow['startTime'] == $arrRow['endTime']) {
            $date = \Contao\Date::parse(\Contao\Config::get('dateFormat'), $arrRow['startTime']) . ($arrRow['addTime'] ? ' ' . \Contao\Date::parse(\Contao\Config::get('timeFormat'), $arrRow['startTime']) : '');
        } else {
            $date = \Contao\Date::parse(\Contao\Config::get('dateFormat'), $arrRow['startTime']) . ($arrRow['addTime'] ? ' ' . \Contao\Date::parse(\Contao\Config::get('timeFormat'), $arrRow['startTime']) . $GLOBALS['TL_LANG']['MSC']['cal_timeSeparator'] . \Contao\Date::parse(\Contao\Config::get('timeFormat'), $arrRow['endTime']) : '');
        }
        return '<div class="tl_content_left">' . $arrRow['title'] . ' <span class="label-info">[' . $date . ']</span></div>';
    }
    /**
     * Add the source options depending on the allowed fields (see #5498)
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getSourceOptions(\Contao\DataContainer $dc)
    {
        if (\Contao\BackendUser::getInstance()->isAdmin) {
            return array('default', 'internal', 'article', 'external');
        }
        $arrOptions = array('default');
        $security = \Contao\System::getContainer()->get('security.helper');
        // Add the "internal" option
        if ($security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_EDIT_FIELD_OF_TABLE, 'tl_calendar_events::jumpTo') && $security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_MODULE, 'page')) {
            $arrOptions[] = 'internal';
        }
        // Add the "article" option
        if ($security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_EDIT_FIELD_OF_TABLE, 'tl_calendar_events::articleId') && $security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_MODULE, 'article')) {
            $arrOptions[] = 'article';
        }
        // Add the "external" option
        if ($security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_EDIT_FIELD_OF_TABLE, 'tl_calendar_events::url')) {
            $arrOptions[] = 'external';
        }
        // Add the option currently set
        if ($dc->activeRecord?->source) {
            $arrOptions[] = $dc->activeRecord->source;
            $arrOptions = \array_unique($arrOptions);
        }
        return $arrOptions;
    }
    /**
     * Adjust the start and end time of the event based on date, span, startTime and endTime
     *
     * @param DataContainer $dc
     */
    public function adjustTime(\Contao\DataContainer $dc)
    {
        // Return if there is no active record (override all) or no start date has been set yet
        if (!$dc->activeRecord?->startDate) {
            return;
        }
        $arrSet['startTime'] = $dc->activeRecord->startDate;
        $arrSet['endTime'] = $dc->activeRecord->startDate;
        // Set end date
        if ($dc->activeRecord->endDate) {
            if ($dc->activeRecord->endDate > $dc->activeRecord->startDate) {
                $arrSet['endDate'] = $dc->activeRecord->endDate;
                $arrSet['endTime'] = $dc->activeRecord->endDate;
            } else {
                $arrSet['endDate'] = $dc->activeRecord->startDate;
                $arrSet['endTime'] = $dc->activeRecord->startDate;
            }
        }
        // Add time
        if ($dc->activeRecord->addTime) {
            $arrSet['startTime'] = \strtotime(\date('Y-m-d', $arrSet['startTime']) . ' ' . \date('H:i:s', $dc->activeRecord->startTime));
            $arrSet['endTime'] = \strtotime(\date('Y-m-d', $arrSet['endTime']) . ' ' . \date('H:i:s', '' !== (string) $dc->activeRecord->endTime ? $dc->activeRecord->endTime : $dc->activeRecord->startTime));
        } elseif ($dc->activeRecord->endDate && $arrSet['endDate'] == $arrSet['endTime'] || $arrSet['startTime'] == $arrSet['endTime']) {
            $arrSet['endTime'] = \strtotime('+ 1 day', $arrSet['endTime']) - 1;
        }
        $arrSet['repeatEnd'] = 0;
        // Recurring events
        if ($dc->activeRecord->recurring) {
            // Unlimited recurrences end on 2106-02-07 07:28:15 (see #4862 and #510)
            if ($dc->activeRecord->recurrences == 0) {
                $arrSet['repeatEnd'] = \min(4294967295, \PHP_INT_MAX);
            } else {
                $arrRange = \Contao\StringUtil::deserialize($dc->activeRecord->repeatEach);
                if (isset($arrRange['unit'], $arrRange['value'])) {
                    $arg = $arrRange['value'] * $dc->activeRecord->recurrences;
                    $unit = $arrRange['unit'];
                    $strtotime = '+ ' . $arg . ' ' . $unit;
                    $arrSet['repeatEnd'] = \strtotime($strtotime, $arrSet['endTime']);
                }
            }
        }
        \Contao\Database::getInstance()->prepare("UPDATE tl_calendar_events %s WHERE id=?")->set($arrSet)->execute($dc->id);
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
     * This method is triggered when a single event or multiple events are
     * modified (edit/editAll), moved (cut/cutAll) or deleted (delete/deleteAll).
     * Since duplicated events are unpublished by default, it is not necessary
     * to schedule updates on copyAll as well.
     *
     * @param DataContainer $dc
     */
    public function scheduleUpdate(\Contao\DataContainer $dc)
    {
        // Return if there is no ID
        if (!$dc->activeRecord?->pid || \Contao\Input::get('act') == 'copy') {
            return;
        }
        $objSession = \Contao\System::getContainer()->get('request_stack')->getSession();
        // Store the ID in the session
        $session = $objSession->get('calendar_feed_updater');
        $session[] = $dc->activeRecord->pid;
        $objSession->set('calendar_feed_updater', \array_unique($session));
    }
    /**
     * @param DataContainer $dc
     *
     * @return array
     */
    public function addSitemapCacheInvalidationTag($dc, array $tags)
    {
        $calendar = \Contao\CalendarModel::findById($dc->activeRecord->pid);
        if ($calendar === \null) {
            return $tags;
        }
        $pageModel = \Contao\PageModel::findWithDetails($calendar->jumpTo);
        if ($pageModel === \null) {
            return $tags;
        }
        return \array_merge($tags, array('contao.sitemap.' . $pageModel->rootId));
    }
}
}

namespace {
foreach ($GLOBALS['TL_DCA']['tl_calendar_events']['palettes'] as $name => $palette) {
    if (!\is_string($palette)) {
        continue;
    }
    \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('hideOnWeekend', 'endDate')->applyToPalette($name, 'tl_calendar_events');
}
foreach (['default', 'article', 'internal', 'external'] as $palette) {
    \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('showOnFreeDay', 'addTime', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE)->applyToPalette((string) $palette, 'tl_calendar_events');
    \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('contact_legend', 'recurring_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE)->addField('location_link', 'contact_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('location_contact', 'location_link')->addField('location_mail', 'location_contact')->applyToPalette((string) $palette, 'tl_calendar_events');
    \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('location_legend', 'contact_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE)->addField('location_name', 'location_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('location_str', 'location_name')->addField('location_ort', 'location_str')->applyToPalette((string) $palette, 'tl_calendar_events');
    \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('recurring_legend_ext', 'recurring_legend')->addField('recurringExt', 'recurring_legend_ext', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette((string) $palette, 'tl_calendar_events');
    \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('repeatFixedDates_legend', 'recurring_legend_ext')->addField('repeatFixedDates', 'repeatFixedDates_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette((string) $palette, 'tl_calendar_events');
    \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('exception_legend', 'repeatFixedDates_legend')->addField('useExceptions', 'exception_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette((string) $palette, 'tl_calendar_events');
}
$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['__selector__'] = \array_merge(['recurringExt', 'useExceptions'], $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['__selector__']);
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('repeatWeekday', 'recurring', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('repeatEnd', 'repeatWeekday')->applyToSubpalette('recurring', 'tl_calendar_events');
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('ignoreEndTime', 'startTime', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE)->applyToSubpalette('addTime', 'tl_calendar_events');
$GLOBALS['TL_DCA']['tl_calendar_events']['subpalettes']['recurringExt'] = 'repeatEachExt,recurrences,repeatEnd';
$GLOBALS['TL_DCA']['tl_calendar_events']['subpalettes']['useExceptions'] = 'repeatExceptionsInt,repeatExceptionsPer,repeatExceptions';
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['repeatWeekday'] = ['exclude' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'options' => [1, 2, 3, 4, 5, 6, 0], 'reference' => &$GLOBALS['TL_LANG']['DAYS'], 'eval' => ['multiple' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 128, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['repeatFixedDates'] = ['exclude' => \true, 'inputType' => 'multiColumnWizard', 'eval' => ['columnsCallback' => ['calendar_extended.mcw.callbacks', 'listFixedDates'], 'buttons' => ['up' => \false, 'down' => \false, 'move' => \false], 'minCount' => 0], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['ignoreEndTime'] = ['default' => 0, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'long clr'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['useExceptions'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['submitOnChange' => \true, 'tl_class' => 'long clr'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['showOnFreeDay'] = ['exclude' => \true, 'filter' => \false, 'inputType' => 'checkbox', 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['weekday'] = ['exclude' => \true, 'filter' => \true, 'inputType' => 'select', 'options' => [0, 1, 2, 3, 4, 5, 6], 'reference' => &$GLOBALS['TL_LANG']['DAYS'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['hideOnWeekend'] = ['exclude' => \true, 'filter' => \false, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['recurringExt'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['submitOnChange' => \true, 'tl_class' => 'long clr'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['location_name'] = ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 255, 'tl_class' => 'w50'], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['location_str'] = ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 255, 'tl_class' => 'w50'], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['location_plz'] = ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'digit', 'maxlength' => 10, 'tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 10, 'default' => '']];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['location_ort'] = ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 255, 'tl_class' => 'w50'], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['location_link'] = ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'url', 'maxlength' => 255, 'tl_class' => 'long'], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['location_contact'] = ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 255, 'tl_class' => 'w50'], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['location_mail'] = ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'email', 'maxlength' => 255, 'decodeEntities' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
// new repeat options for events
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['repeatEachExt'] = ['exclude' => \true, 'inputType' => 'timePeriodExt', 'options' => [['first', 'second', 'third', 'fourth', 'fifth', 'last'], ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']], 'reference' => &$GLOBALS['TL_LANG']['tl_calendar_events'], 'eval' => ['mandatory' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
// added submitOnChange to recurrences
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['recurrences'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \true, 'rgxp' => 'digit', 'submitOnChange' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'smallint', 'length' => 5, 'unsigned' => \true, 'default' => 0]];
// list of exceptions
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['repeatExceptions'] = ['exclude' => \true, 'inputType' => 'multiColumnWizard', 'eval' => ['columnsCallback' => ['calendar_extended.mcw.callbacks', 'listMultiExceptions'], 'buttons' => ['up' => \false, 'down' => \false]], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
// list of exceptions
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['repeatExceptionsInt'] = ['exclude' => \true, 'inputType' => 'multiColumnWizard', 'eval' => ['columnsCallback' => ['calendar_extended.mcw.callbacks', 'listMultiExceptions'], 'buttons' => ['up' => \false, 'down' => \false]], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
// list of exceptions
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['repeatExceptionsPer'] = ['exclude' => \true, 'inputType' => 'multiColumnWizard', 'eval' => ['columnsCallback' => ['calendar_extended.mcw.callbacks', 'listMultiExceptions'], 'buttons' => ['up' => \false, 'down' => \false]], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['allRecurrences'] = ['sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['exceptionList'] = ['sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
// display the end of the recurrences (read only)
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['repeatEnd'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['readonly' => \true, 'rgxp' => 'date', 'tl_class' => 'clr'], 'sql' => ['type' => 'integer', 'length' => 10, 'unsigned' => \true, 'default' => 0]];
}

namespace {
\Contao\Controller::loadDataContainer('tl_content');
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['reg_enable'] = ['inputType' => 'checkbox', 'exclude' => \true, 'eval' => ['submitOnChange' => \true], 'sql' => ['type' => 'boolean', 'default' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['reg_form'] = ['exclude' => \true, 'inputType' => 'select', 'eval' => ['mandatory' => \true, 'chosen' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50 wizard'], 'wizard' => [['tl_content', 'editForm']], 'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['reg_min'] = ['inputType' => 'text', 'exclude' => \true, 'eval' => ['rgxp' => 'digit', 'maxlength' => 255, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'integer', 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['reg_max'] = ['inputType' => 'text', 'exclude' => \true, 'eval' => ['rgxp' => 'digit', 'maxlength' => 255, 'tl_class' => 'w50'], 'sql' => ['type' => 'integer', 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['reg_regEnd'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'], 'sql' => ['type' => 'integer', 'unsigned' => \true, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['reg_cancelEnd'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'], 'sql' => ['type' => 'integer', 'unsigned' => \true, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['reg_requireConfirm'] = ['inputType' => 'checkbox', 'exclude' => \true, 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'boolean', 'default' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['reg_enableWaitingList'] = ['inputType' => 'checkbox', 'exclude' => \true, 'eval' => ['tl_class' => 'clr w50', 'submitOnChange' => \true], 'sql' => ['type' => 'boolean', 'default' => \false]];
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['reg_waitingListAdvancementNotification'] = ['exclude' => \true, 'inputType' => 'select', 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0], 'relation' => ['type' => 'hasOne', 'load' => 'lazy', 'table' => 'tl_nc_notification']];
$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['__selector__'][] = 'reg_enable';
$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['__selector__'][] = 'reg_enableWaitingList';
$GLOBALS['TL_DCA']['tl_calendar_events']['subpalettes']['reg_enable'] = 'reg_form,reg_min,reg_max,reg_regEnd,reg_cancelEnd,reg_requireConfirm,reg_enableWaitingList';
$GLOBALS['TL_DCA']['tl_calendar_events']['subpalettes']['reg_enableWaitingList'] = 'reg_waitingListAdvancementNotification';
foreach ($GLOBALS['TL_DCA']['tl_calendar_events']['palettes'] as $name => $palette) {
    if (!\is_string($palette)) {
        continue;
    }
    \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('reg_legend', \null, \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER, \true)->addField('reg_enable', 'reg_legend')->applyToPalette($name, 'tl_calendar_events');
}
$GLOBALS['TL_DCA']['tl_calendar_events']['config']['ctable'][] = 'tl_event_registration';
$GLOBALS['TL_DCA']['tl_calendar_events']['list']['operations'] = \array_slice($GLOBALS['TL_DCA']['tl_calendar_events']['list']['operations'], 0, 6, \true) + ['registrations' => ['href' => 'table=tl_event_registration', 'icon' => 'mgroup.svg']] + \array_slice($GLOBALS['TL_DCA']['tl_calendar_events']['list']['operations'], 6, \count($GLOBALS['TL_DCA']['tl_calendar_events']['list']['operations']) - 1, \true);
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
$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] .= ';{edit_legend},fe_user, disable_editing';
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['fe_user'] = array('label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['fe_user'], 'inputType' => 'select', 'exclude' => \true, 'foreignKey' => 'tl_member.username', 'eval' => array('includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default '0'");
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['disable_editing'] = array('label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['disable_editing'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) NOT NULL default ''");
}

namespace {
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('categories', 'title_legend', 'append')->applyToPalette('default', 'tl_calendar_events')->applyToPalette('internal', 'tl_calendar_events')->applyToPalette('article', 'tl_calendar_events')->applyToPalette('external', 'tl_calendar_events');
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['categories'] = array('label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['categories'], 'exclude' => \true, 'filter' => \true, 'inputType' => 'checkboxWizard', 'foreignKey' => 'tl_mae_event_cat.title', 'eval' => array('tl_class' => 'clr', 'multiple' => \true, 'fieldType' => 'checkbox', 'foreignTable' => 'tl_mae_event_cat', 'titleField' => 'title', 'searchField' => 'title'), 'sql' => "blob NULL");
}

namespace {
/*
 * Extend palettes
 */
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('news_legend', 'enclosure_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)->addField('news', 'news_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('default', 'tl_calendar_events');
/*
 * Table tl_calendar_events
 */
$GLOBALS['TL_DCA']['tl_calendar_events']['fields'] = \array_merge(['news' => ['label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['news'], 'inputType' => 'picker', 'filter' => \false, 'exclude' => \true, 'search' => \false, 'relation' => ['type' => 'hasOne', 'load' => 'lazy', 'table' => 'tl_news'], 'eval' => ['mandatory' => \false, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'integer', 'length' => 10, 'unsigned' => \true, 'default' => 0]]], $GLOBALS['TL_DCA']['tl_calendar_events']['fields'] ?? []);
}
