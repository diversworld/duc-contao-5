<?php

namespace {
$this->loadDataContainer('tl_page');
$GLOBALS['TL_DCA']['tl_article'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'ptable' => 'tl_page', 'ctable' => array('tl_content'), 'switchToEdit' => \true, 'enableVersioning' => \true, 'markAsCopy' => 'title', 'onload_callback' => array(array('tl_article', 'adjustDca'), array('tl_article', 'addCustomLayoutSectionReferences'), array('tl_page', 'addBreadcrumb')), 'sql' => array('keys' => array('id' => 'primary', 'tstamp' => 'index', 'alias' => 'index', 'pid,published,inColumn,start,stop' => 'index'))),
    // List
    'list' => array('sorting' => array('mode' => \Contao\DataContainer::MODE_TREE_EXTENDED, 'panelLayout' => 'filter;search', 'defaultSearchField' => 'title'), 'label' => array('fields' => array('title', 'inColumn'), 'format' => '%s <span class="label-info">[%s]</span>', 'label_callback' => array('tl_article', 'addIcon'))),
    // Select
    'select' => array('buttons_callback' => array(array('tl_article', 'addAliasButton'))),
    // Palettes
    'palettes' => array('__selector__' => array('protected'), 'default' => '{title_legend},title,alias,author;{layout_legend},inColumn;{teaser_legend:hide},teaserCssID,showTeaser,teaser;{syndication_legend},printable;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{publish_legend},published,start,stop'),
    // Sub-palettes
    'subpalettes' => array('protected' => 'groups'),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'pid' => array('foreignKey' => 'tl_page.title', 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'belongsTo', 'load' => 'lazy')), 'sorting' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'title' => array('inputType' => 'text', 'search' => \true, 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'alias' => array('inputType' => 'text', 'search' => \true, 'eval' => array('rgxp' => 'alias', 'doNotCopy' => \true, 'maxlength' => 255, 'tl_class' => 'w50 clr'), 'save_callback' => array(array('tl_article', 'generateAlias')), 'sql' => "varchar(255) BINARY NOT NULL default ''"), 'author' => array('default' => static fn() => \Contao\BackendUser::getInstance()->id, 'search' => \true, 'filter' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_user.name', 'eval' => array('doNotCopy' => \true, 'mandatory' => \true, 'chosen' => \true, 'includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'inColumn' => array('filter' => \true, 'inputType' => 'select', 'options_callback' => array('tl_article', 'getActiveLayoutSections'), 'eval' => array('mandatory' => \true, 'tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['COLS'], 'sql' => "varchar(32) NOT NULL default 'main'"), 'showTeaser' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'teaserCssID' => array('inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'teaser' => array('inputType' => 'textarea', 'search' => \true, 'eval' => array('rte' => 'tinyMCE', 'tl_class' => 'clr'), 'sql' => "text NULL"), 'printable' => array('inputType' => 'checkbox', 'options' => array('print', 'facebook', 'twitter'), 'eval' => array('multiple' => \true), 'reference' => &$GLOBALS['TL_LANG']['tl_article'], 'sql' => "varchar(255) NOT NULL default ''"), 'customTpl' => array('inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('mod_article_', array(), 'mod_article');
    }, 'eval' => array('chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''"), 'protected' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'groups' => array('filter' => \true, 'inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('mandatory' => \true, 'multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy')), 'cssID' => array('inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'tl_class' => 'w50 clr'), 'sql' => "varchar(255) NOT NULL default ''"), 'published' => array('toggle' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'eval' => array('doNotCopy' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'start' => array('inputType' => 'text', 'eval' => array('rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(10) NOT NULL default ''"), 'stop' => array('inputType' => 'text', 'eval' => array('rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(10) NOT NULL default ''")),
);
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @internal
 */
class tl_article extends \Contao\Backend
{
    /**
     * Check permissions to edit table tl_page
     */
    public function adjustDca()
    {
        $user = \Contao\BackendUser::getInstance();
        if ($user->isAdmin) {
            return;
        }
        // Set the default page user and group
        $GLOBALS['TL_DCA']['tl_page']['fields']['cuser']['default'] = (int) \Contao\Config::get('defaultUser') ?: $user->id;
        $GLOBALS['TL_DCA']['tl_page']['fields']['cgroup']['default'] = (int) \Contao\Config::get('defaultGroup') ?: (int) ($user->groups[0] ?? 0);
        // Restrict the page tree
        if (empty($user->pagemounts) || !\is_array($user->pagemounts)) {
            $GLOBALS['TL_DCA']['tl_page']['list']['sorting']['root'] = array(0);
        } else {
            $GLOBALS['TL_DCA']['tl_page']['list']['sorting']['root'] = $user->pagemounts;
        }
    }
    /**
     * Add an image to each page in the tree
     *
     * @param array  $row
     * @param string $label
     *
     * @return string
     */
    public function addIcon($row, $label)
    {
        $sub = 0;
        $unpublished = $row['start'] && $row['start'] > \time() || $row['stop'] && $row['stop'] <= \time();
        if ($unpublished || !$row['published']) {
            ++$sub;
        }
        if ($row['protected']) {
            $sub += 2;
        }
        $image = 'articles.svg';
        if ($sub > 0) {
            $image = 'articles_' . $sub . '.svg';
        }
        $attributes = \sprintf('data-icon="%s" data-icon-disabled="%s"', $row['protected'] ? 'articles_2.svg' : 'articles.svg', $row['protected'] ? 'articles_3.svg' : 'articles_1.svg');
        $href = \Contao\System::getContainer()->get('router')->generate('contao_backend_preview', array('page' => $row['pid'], 'article' => $row['alias'] ?: $row['id']));
        return '<a href="' . \Contao\StringUtil::specialcharsUrl($href) . '" title="' . \Contao\StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['view']) . '" target="_blank">' . \Contao\Image::getHtml($image, '', $attributes) . '</a> ' . $label;
    }
    /**
     * Auto-generate an article alias if it has not been set yet
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return string
     *
     * @throws Exception
     */
    public function generateAlias($varValue, \Contao\DataContainer $dc)
    {
        $aliasExists = static function (string $alias) use($dc) : bool {
            if (\in_array($alias, array('top', 'wrapper', 'header', 'container', 'main', 'left', 'right', 'footer'), \true)) {
                return \true;
            }
            return \Contao\Database::getInstance()->prepare("SELECT id FROM tl_article WHERE alias=? AND id!=?")->execute($alias, $dc->id)->numRows > 0;
        };
        // Generate an alias if there is none
        if (!$varValue) {
            $varValue = \Contao\System::getContainer()->get('contao.slug')->generate((string) $dc->activeRecord->title, (int) $dc->activeRecord->pid, $aliasExists);
        } elseif (\preg_match('/^[1-9]\\d*$/', $varValue)) {
            throw new \Exception(\sprintf($GLOBALS['TL_LANG']['ERR']['aliasNumeric'], $varValue));
        } elseif ($aliasExists($varValue)) {
            throw new \Exception(\sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
        }
        return $varValue;
    }
    /**
     * Return all active layout sections as array
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getActiveLayoutSections(\Contao\DataContainer $dc)
    {
        // Show only active sections
        if ($dc->activeRecord->pid ?? \null) {
            $arrSections = array();
            $objPage = \Contao\PageModel::findWithDetails($dc->activeRecord->pid);
            // Get the layout sections
            if ($objPage->layout) {
                $objLayout = \Contao\LayoutModel::findById($objPage->layout);
                if ($objLayout === \null) {
                    return array();
                }
                $arrModules = \Contao\StringUtil::deserialize($objLayout->modules);
                if (empty($arrModules) || !\is_array($arrModules)) {
                    return array();
                }
                // Find all sections with an article module (see #6094)
                foreach ($arrModules as $arrModule) {
                    if ($arrModule['mod'] == 0 && ($arrModule['enable'] ?? \null)) {
                        $arrSections[] = $arrModule['col'];
                    }
                }
            }
        } else {
            $arrSections = array('header', 'left', 'right', 'main', 'footer');
            $objLayout = \Contao\Database::getInstance()->query("SELECT sections FROM tl_layout WHERE sections!=''");
            while ($objLayout->next()) {
                $arrCustom = \Contao\StringUtil::deserialize($objLayout->sections);
                // Add the custom layout sections
                if (!empty($arrCustom) && \is_array($arrCustom)) {
                    foreach ($arrCustom as $v) {
                        if (!empty($v['id'])) {
                            $arrSections[] = $v['id'];
                        }
                    }
                }
            }
        }
        return \Contao\Backend::convertLayoutSectionIdsToAssociativeArray($arrSections);
    }
    /**
     * Automatically generate the folder URL aliases
     *
     * @param array         $arrButtons
     * @param DataContainer $dc
     *
     * @return array
     */
    public function addAliasButton($arrButtons, \Contao\DataContainer $dc)
    {
        $security = \Contao\System::getContainer()->get('security.helper');
        if (!$security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_EDIT_FIELD_OF_TABLE, 'tl_article::alias')) {
            return $arrButtons;
        }
        // Generate the aliases
        if (\Contao\Input::post('alias') !== \null && \Contao\Input::post('FORM_SUBMIT') == 'tl_select') {
            $router = \Contao\System::getContainer()->get('router');
            $objSession = \Contao\System::getContainer()->get('request_stack')->getSession();
            $session = $objSession->all();
            $ids = $session['CURRENT']['IDS'] ?? array();
            foreach ($ids as $id) {
                $objArticle = \Contao\ArticleModel::findById($id);
                if ($objArticle === \null) {
                    continue;
                }
                $dc->id = $id;
                $dc->activeRecord = $objArticle;
                $strAlias = '';
                // Generate new alias through save callbacks
                if (\is_array($GLOBALS['TL_DCA'][$dc->table]['fields']['alias']['save_callback'] ?? \null)) {
                    foreach ($GLOBALS['TL_DCA'][$dc->table]['fields']['alias']['save_callback'] as $callback) {
                        if (\is_array($callback)) {
                            $strAlias = \Contao\System::importStatic($callback[0])->{$callback[1]}($strAlias, $dc);
                        } elseif (\is_callable($callback)) {
                            $strAlias = $callback($strAlias, $dc);
                        }
                    }
                }
                // The alias has not changed
                if ($strAlias == $objArticle->alias) {
                    continue;
                }
                if (!$security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::DC_PREFIX . 'tl_article', new \Contao\CoreBundle\Security\DataContainer\UpdateAction('tl_article', $objArticle->row(), array('alias' => $strAlias)))) {
                    continue;
                }
                // Initialize the version manager
                $objVersions = new \Contao\Versions('tl_article', $id);
                $objVersions->setEditUrl($router->generate('contao_backend', array('do' => 'article', 'act' => 'edit', 'id' => $id, 'rt' => '1')));
                $objVersions->initialize();
                // Store the new alias
                \Contao\Database::getInstance()->prepare("UPDATE tl_article SET alias=? WHERE id=?")->execute($strAlias, $id);
                // Create a new version
                $objVersions->create();
            }
            $this->redirect($this->getReferer());
        }
        // Add the button
        $arrButtons['alias'] = '<button type="submit" name="alias" id="alias" class="tl_submit" accesskey="a">' . $GLOBALS['TL_LANG']['MSC']['aliasSelected'] . '</button> ';
        return $arrButtons;
    }
}
}

namespace {
/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = \str_replace('customTpl', 'customTpl,pdir_th_tag,pdir_th_domain', $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);
/**
 * Add fields to tl_article
 */
$GLOBALS['TL_DCA']['tl_article']['fields']['pdir_th_tag'] = array('label' => &$GLOBALS['TL_LANG']['tl_article']['pdir_th_tag'], 'inputType' => 'select', 'search' => \true, 'options' => $GLOBALS['tl_config']['theme_tags'] ?? [], 'reference' => &$GLOBALS['TL_LANG']['tl_article']['th_tags'], 'eval' => array('mandatory' => \false, 'maxlength' => 64, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(64) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_article']['fields']['pdir_th_domain'] = array('label' => &$GLOBALS['TL_LANG']['tl_article']['pdir_th_domain'], 'inputType' => 'select', 'search' => \true, 'options_callback' => array('tl_article_themeHelper', 'findAllRootPages'), 'reference' => &$GLOBALS['TL_LANG']['tl_article']['th_tags'], 'eval' => array('mandatory' => \false, 'maxlength' => 64, 'tl_class' => 'w50 wizard', 'includeBlankOption' => \true), 'sql' => "varchar(64) NOT NULL default ''");
class tl_article_themeHelper extends \Contao\Backend
{
    public static function findAllRootPages()
    {
        $t = 'tl_page';
        $arrColumns = array("{$t}.type=?");
        $arrValues = array('root');
        $arrOptions = array('order' => "{$t}.sorting ASC");
        $objPages = \Contao\PageModel::findBy($arrColumns, $arrValues, $arrOptions);
        $domains = array();
        while ($objPages->next()) {
            if ($objPages->current()->title != "") {
                $domains[$objPages->current()->id] = $objPages->current()->title;
            }
        }
        return $domains;
    }
}
}