<?php

namespace {
$GLOBALS['TL_DCA']['tl_module'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'ptable' => 'tl_theme', 'enableVersioning' => \true, 'markAsCopy' => 'name', 'onload_callback' => array(array('tl_module', 'addCustomLayoutSectionReferences')), 'sql' => array('keys' => array('id' => 'primary', 'tstamp' => 'index'))),
    // List
    'list' => array('sorting' => array('mode' => \Contao\DataContainer::MODE_PARENT, 'fields' => array('name'), 'panelLayout' => 'filter;sort,search,limit', 'defaultSearchField' => 'name', 'headerFields' => array('name', 'author', 'tstamp'), 'child_record_callback' => array('tl_module', 'listModule')), 'label' => array('group_callback' => array('tl_module', 'getGroupHeader'))),
    // Palettes
    'palettes' => array('__selector__' => array('type', 'defineRoot', 'protected', 'reg_assignDir', 'reg_activate'), 'default' => '{title_legend},name,type', 'navigation' => '{title_legend},name,headline,type;{nav_legend},levelOffset,showLevel,hardLimit,showProtected,showHidden;{reference_legend:hide},defineRoot;{template_legend:hide},customTpl,navigationTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'customnav' => '{title_legend},name,headline,type;{nav_legend},pages,showProtected;{template_legend:hide},customTpl,navigationTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'breadcrumb' => '{title_legend},name,headline,type;{nav_legend},showHidden;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'quicknav' => '{title_legend},name,headline,type;{label_legend},customLabel;{nav_legend},showLevel,hardLimit,showProtected,showHidden;{reference_legend:hide},rootPage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'quicklink' => '{title_legend},name,headline,type;{label_legend},customLabel;{nav_legend},pages,showProtected;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'booknav' => '{title_legend},name,headline,type;{nav_legend},showProtected,showHidden;{reference_legend:hide},rootPage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'articlenav' => '{title_legend},name,headline,type;{config_legend},loadFirst;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'sitemap' => '{title_legend},name,headline,type;{nav_legend},showProtected,showHidden;{reference_legend:hide},rootPage;{template_legend:hide},customTpl,navigationTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'login' => '{title_legend},name,headline,type;{config_legend},autologin,pwResetPage;{redirect_legend},jumpTo,redirectBack;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'logout' => '{title_legend},name,type;{redirect_legend},jumpTo,redirectBack;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'personalData' => '{title_legend},name,headline,type;{config_legend},editable,reqFullAuth;{redirect_legend},jumpTo;{template_legend:hide},memberTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'registration' => '{title_legend},name,headline,type;{config_legend},editable,newsletters,disableCaptcha;{account_legend},reg_groups,reg_allowLogin,reg_assignDir;{redirect_legend},jumpTo;{email_legend},reg_activate;{template_legend:hide},memberTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'changePassword' => '{title_legend},name,headline,type;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'lostPassword' => '{title_legend},name,headline,type;{config_legend},reg_skipName,disableCaptcha;{redirect_legend},jumpTo;{email_legend:hide},reg_jumpTo,reg_password;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'closeAccount' => '{title_legend},name,headline,type;{config_legend},reg_close,reg_deleteDir;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'form' => '{title_legend},name,headline,type;{include_legend},form;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'search' => '{title_legend},name,headline,type;{config_legend},queryType,fuzzy,contextLength,minKeywordLength,perPage,searchType;{redirect_legend:hide},jumpTo;{reference_legend:hide},pages;{template_legend:hide},searchTpl,customTpl;{image_legend},imgSize;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'articlelist' => '{title_legend},name,headline,type;{config_legend},skipFirst,inColumn;{reference_legend:hide},defineRoot;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'randomImage' => '{title_legend},name,headline,type;{source_legend},multiSRC,imgSize,fullsize,useCaption;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'html' => '{title_legend},name,type;{html_legend},html;{template_legend:hide},customTpl;{protected_legend:hide},protected', 'unfiltered_html' => '{title_legend},name,type;{html_legend},unfilteredHtml;{template_legend:hide},customTpl;{protected_legend:hide},protected', 'template' => '{title_legend},name,headline,type;{template_legend},data,customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'rssReader' => '{title_legend},name,headline,type;{config_legend},rss_feed,numberOfItems,perPage,skipFirst,rss_cache;{template_legend:hide},rss_template;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'feed_reader' => '{title_legend},name,headline,type;{config_legend},rss_feed,numberOfItems,perPage,skipFirst,rss_cache;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'two_factor' => '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'root_page_dependent_modules' => '{title_legend},name,type;{config_legend},rootPageDependentModules;{protected_legend:hide},protected'),
    // Sub-palettes
    'subpalettes' => array('defineRoot' => 'rootPage', 'protected' => 'groups', 'reg_assignDir' => 'reg_homeDir', 'reg_activate' => 'reg_jumpTo,reg_text'),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'pid' => array('foreignKey' => 'tl_theme.name', 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'belongsTo', 'load' => 'lazy')), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'name' => array('sorting' => \true, 'flag' => \Contao\DataContainer::SORT_INITIAL_LETTER_ASC, 'search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'headline' => array('search' => \true, 'inputType' => 'inputUnit', 'options' => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'), 'eval' => array('maxlength' => 200, 'tl_class' => 'w50 clr'), 'sql' => "varchar(255) NOT NULL default 'a:2:{s:5:\"value\";s:0:\"\";s:4:\"unit\";s:2:\"h2\";}'"), 'type' => array('sorting' => \true, 'flag' => \Contao\DataContainer::SORT_ASC, 'filter' => \true, 'inputType' => 'select', 'options_callback' => array('tl_module', 'getModules'), 'reference' => &$GLOBALS['TL_LANG']['FMD'], 'eval' => array('helpwizard' => \true, 'chosen' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default 'navigation'"), 'levelOffset' => array('inputType' => 'text', 'eval' => array('maxlength' => 5, 'rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'showLevel' => array('inputType' => 'text', 'eval' => array('maxlength' => 5, 'rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'hardLimit' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w25 clr'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'showProtected' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w25'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'defineRoot' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'rootPage' => array('inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio', 'tl_class' => 'clr'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'navigationTpl' => array('inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('nav_');
    }, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'customTpl' => array('inputType' => 'select', 'eval' => array('chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'pages' => array('inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('multiple' => \true, 'fieldType' => 'checkbox', 'isSortable' => \true, 'mandatory' => \true), 'load_callback' => array(array('tl_module', 'setPagesFlags')), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy')), 'showHidden' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w25'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'customLabel' => array('inputType' => 'text', 'eval' => array('maxlength' => 64, 'rgxp' => 'extnd', 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''"), 'autologin' => array('inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false)), 'jumpTo' => array('inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'overviewPage' => array('inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio', 'tl_class' => 'clr'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'redirectBack' => array('inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false)), 'pwResetPage' => array('inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'editable' => array('inputType' => 'checkboxWizard', 'options_callback' => array('tl_module', 'getEditableMemberProperties'), 'eval' => array('multiple' => \true), 'sql' => "blob NULL"), 'reqFullAuth' => array('inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false)), 'memberTpl' => array('inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('member_');
    }, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'form' => array('inputType' => 'select', 'foreignKey' => 'tl_form.title', 'options_callback' => array('tl_module', 'getForms'), 'eval' => array('chosen' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'queryType' => array('inputType' => 'select', 'options' => array('and', 'or'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('helpwizard' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(8) COLLATE ascii_bin NOT NULL default 'and'"), 'fuzzy' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'contextLength' => array('inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'rgxp' => 'natural', 'tl_class' => 'w50', 'placeholder' => array(48, 360)), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'minKeywordLength' => array('inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 4"), 'perPage' => array('inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'searchType' => array('inputType' => 'select', 'options' => array('simple', 'advanced'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('helpwizard' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'simple'"), 'searchTpl' => array('inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('search_');
    }, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'inColumn' => array('inputType' => 'select', 'options_callback' => array('tl_module', 'getLayoutSections'), 'reference' => &$GLOBALS['TL_LANG']['COLS'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'main'"), 'skipFirst' => array('inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'loadFirst' => array('inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false)), 'singleSRC' => array('inputType' => 'fileTree', 'eval' => array('fieldType' => 'radio', 'filesOnly' => \true, 'mandatory' => \true, 'tl_class' => 'clr'), 'sql' => "binary(16) NULL"), 'imgSize' => array('label' => &$GLOBALS['TL_LANG']['MSC']['imgSize'], 'inputType' => 'imageSize', 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('rgxp' => 'natural', 'includeBlankOption' => \true, 'nospace' => \true, 'helpwizard' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(128) COLLATE ascii_bin NOT NULL default ''"), 'useCaption' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'fullsize' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'multiSRC' => array('inputType' => 'fileTree', 'eval' => array('multiple' => \true, 'fieldType' => 'checkbox', 'isSortable' => \true, 'files' => \true, 'mandatory' => \true), 'load_callback' => array(array('tl_module', 'setMultiSrcFlags')), 'sql' => "blob NULL"), 'html' => array('search' => \true, 'inputType' => 'textarea', 'eval' => array('allowHtml' => \true, 'class' => 'monospace', 'rte' => 'ace|html', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "text NULL"), 'unfilteredHtml' => array('search' => \true, 'inputType' => 'textarea', 'eval' => array('useRawRequestData' => \true, 'class' => 'monospace', 'rte' => 'ace|html', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "mediumtext NULL"), 'rss_cache' => array('inputType' => 'select', 'options' => array(0, 5, 15, 30, 60, 300, 900, 1800, 3600, 10800, 21600, 43200, 86400), 'eval' => array('tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['CACHE'], 'sql' => "int(10) unsigned NOT NULL default 3600"), 'rss_feed' => array('inputType' => 'textarea', 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'style' => 'height:60px'), 'sql' => "text NULL"), 'rss_template' => array('inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('rss_');
    }, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'numberOfItems' => array('label' => &$GLOBALS['TL_LANG']['MSC']['numberOfItems'], 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 3"), 'disableCaptcha' => array('inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false)), 'reg_groups' => array('inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy')), 'reg_allowLogin' => array('inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false)), 'reg_skipName' => array('inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false)), 'reg_close' => array('inputType' => 'select', 'options' => array('close_deactivate', 'close_delete'), 'eval' => array('tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default ''"), 'reg_deleteDir' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'reg_assignDir' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'reg_homeDir' => array('inputType' => 'fileTree', 'eval' => array('fieldType' => 'radio', 'tl_class' => 'clr'), 'sql' => "binary(16) NULL"), 'reg_activate' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'reg_jumpTo' => array('inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'reg_text' => array('inputType' => 'textarea', 'eval' => array('style' => 'height:120px', 'decodeEntities' => \true, 'alwaysSave' => \true), 'load_callback' => array(array('tl_module', 'getActivationDefault')), 'sql' => "text NULL"), 'reg_password' => array('inputType' => 'textarea', 'eval' => array('style' => 'height:120px', 'decodeEntities' => \true, 'alwaysSave' => \true), 'load_callback' => array(array('tl_module', 'getPasswordDefault')), 'sql' => "text NULL"), 'data' => array('inputType' => 'keyValueWizard', 'sql' => "text NULL"), 'protected' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'groups' => array('inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('mandatory' => \true, 'multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy')), 'cssID' => array('inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'rootPageDependentModules' => array('inputType' => 'rootPageDependentSelect', 'eval' => array('submitOnChange' => \true, 'includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => 'blob NULL')),
);
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @internal
 */
class tl_module extends \Contao\Backend
{
    /**
     * Return all front end modules as array
     *
     * @return array
     */
    public function getModules()
    {
        $security = \Contao\System::getContainer()->get('security.helper');
        $groups = array();
        foreach ($GLOBALS['FE_MOD'] as $k => $v) {
            foreach (\array_keys($v) as $kk) {
                if ($security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_FRONTEND_MODULE_TYPE, $kk)) {
                    $groups[$k][] = $kk;
                }
            }
        }
        return $groups;
    }
    /**
     * Return all editable fields of table tl_member
     *
     * @return array
     */
    public function getEditableMemberProperties()
    {
        $return = array();
        \Contao\System::loadLanguageFile('tl_member');
        $this->loadDataContainer('tl_member');
        foreach ($GLOBALS['TL_DCA']['tl_member']['fields'] as $k => $v) {
            if ($v['eval']['feEditable'] ?? \null) {
                $return[$k] = $GLOBALS['TL_DCA']['tl_member']['fields'][$k]['label'][0];
            }
        }
        return $return;
    }
    /**
     * Get all forms and return them as array
     *
     * @return array
     */
    public function getForms()
    {
        $user = \Contao\BackendUser::getInstance();
        if (!$user->isAdmin && !\is_array($user->forms)) {
            return array();
        }
        $arrForms = array();
        $objForms = \Contao\Database::getInstance()->execute("SELECT id, title FROM tl_form ORDER BY title");
        $security = \Contao\System::getContainer()->get('security.helper');
        while ($objForms->next()) {
            if ($security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_EDIT_FORM, $objForms->id)) {
                $arrForms[$objForms->id] = $objForms->title;
            }
        }
        return $arrForms;
    }
    /**
     * Return all layout sections as array
     *
     * @return array
     */
    public function getLayoutSections()
    {
        $arrSections = array('header', 'left', 'right', 'main', 'footer');
        // Check for custom layout sections
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
        return \Contao\Backend::convertLayoutSectionIdsToAssociativeArray($arrSections);
    }
    /**
     * Use the module type as group header if sorted by type (see #8402)
     *
     * @param string $group
     * @param string $mode
     * @param string $field
     * @param array  $row
     *
     * @return string
     */
    public function getGroupHeader($group, $mode, $field, $row)
    {
        if ($field == 'type') {
            return $row['type'];
        }
        return $group;
    }
    /**
     * Load the default activation text
     *
     * @param mixed $varValue
     *
     * @return mixed
     */
    public function getActivationDefault($varValue)
    {
        if (\trim($varValue) === '') {
            $varValue = \is_array($GLOBALS['TL_LANG']['tl_module']['emailText'] ?? \null) ? $GLOBALS['TL_LANG']['tl_module']['emailText'][1] : $GLOBALS['TL_LANG']['tl_module']['emailText'] ?? \null;
        }
        return $varValue;
    }
    /**
     * Load the default password text
     *
     * @param mixed $varValue
     *
     * @return mixed
     */
    public function getPasswordDefault($varValue)
    {
        if (\trim($varValue) === '') {
            $varValue = \is_array($GLOBALS['TL_LANG']['tl_module']['passwordText'] ?? \null) ? $GLOBALS['TL_LANG']['tl_module']['passwordText'][1] : $GLOBALS['TL_LANG']['tl_module']['passwordText'] ?? \null;
        }
        return $varValue;
    }
    /**
     * List a front end module
     *
     * @param array $row
     *
     * @return string
     */
    public function listModule($row)
    {
        return '<div class="tl_content_left">' . $row['name'] . ' <span class="label-info">[' . ($GLOBALS['TL_LANG']['FMD'][$row['type']][0] ?? $row['type']) . ']</span></div>';
    }
    /**
     * Dynamically add flags to the "multiSRC" field
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function setMultiSrcFlags($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord && $dc->activeRecord->type == 'randomImage') {
            $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isGallery'] = \true;
            $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = '%contao.image.valid_extensions%';
        }
        return $varValue;
    }
    /**
     * Dynamically change attributes of the "pages" field
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function setPagesFlags($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord && $dc->activeRecord->type == 'search') {
            $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['mandatory'] = \false;
            unset($GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isSortable']);
        }
        return $varValue;
    }
}
}

namespace {
/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['ticker'] = 'name,headline,type;ticker_categories;guests,protected;align,space,cssID';
/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_categories'] = ['exclude' => \true, 'inputType' => 'checkbox', 'options_callback' => ['tl_module_ticker', 'getTicker'], 'eval' => ['mandatory' => \true, 'multiple' => \true], 'sql' => ['type' => 'string', 'length' => 255, 'default' => '']];
/**
 * Class tl_module_ticker
 */
class tl_module_ticker extends \Contao\Backend
{
    public function getTicker()
    {
        $arrTicker = [];
        $objTicker = $this->Database->prepare("SELECT id, title FROM tl_ticker_category ORDER BY title")->execute();
        while ($objTicker->next()) {
            $arrTicker[$objTicker->id] = $objTicker->title . ' (ID ' . $objTicker->id . ')';
        }
        return $arrTicker;
    }
}
}

namespace {
/**
 * This file is part of Oveleon Contao Cookiebar.
 *
 * @package     contao-cookiebar
 * @license     AGPL-3.0
 * @author      Daniele Sciannimanica <https://github.com/doishub>
 * @copyright   Oveleon <https://www.oveleon.de/>
 */
// Palette
$GLOBALS['TL_DCA']['tl_module']['palettes']['cookiebar_opener'] = '{title_legend},name,headline,type;{link_legend},linkTitle,titleText,prefillCookies;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
// Fields
$GLOBALS['TL_DCA']['tl_module']['fields']['titleText'] = ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 255, 'tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['linkTitle'] = ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 255, 'tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['prefillCookies'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12'], 'sql' => "char(1) NOT NULL default ''"];
}

namespace {
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqlist'] = '{title_legend},name,headline,type;{config_legend},faq_categories,faq_readerModule;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader'] = '{title_legend},name,headline,type;{config_legend},faq_categories,overviewPage,customLabel;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqpage'] = '{title_legend},name,headline,type;{config_legend},faq_categories;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['faq_categories'] = array('inputType' => 'checkboxWizard', 'foreignKey' => 'tl_faq_category.title', 'eval' => array('multiple' => \true, 'mandatory' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['faq_readerModule'] = array('inputType' => 'select', 'options_callback' => array('tl_module_faq', 'getReaderModules'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('table' => 'tl_module', 'type' => 'hasMany', 'load' => 'lazy'));
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @internal
 */
class tl_module_faq extends \Contao\Backend
{
    /**
     * Get all FAQ reader modules and return them as array
     *
     * @return array
     */
    public function getReaderModules()
    {
        $arrModules = array();
        $objModules = \Contao\Database::getInstance()->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='faqreader' ORDER BY t.name, m.name");
        while ($objModules->next()) {
            $arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
        }
        return $arrModules;
    }
}
}

namespace {
/**
 * Frontend modules
 */
$GLOBALS['TL_DCA']['tl_module']['palettes'][\Diversworld\ContaoCheckBundle\Controller\FrontendModule\CheckListingController::TYPE] = '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
}

namespace {
/*
 * This file is part of a BugBuster Contao Bundle.
 *
 * @copyright  Glen Langer 2024 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Contao Visitors Bundle
 * @link       https://github.com/BugBuster1701/contao-visitors-bundle
 *
 * @license    LGPL-3.0-or-later
 */
/*
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['visitors'] = '{title_legend},name,type,headline;{config_legend},visitors_categories,visitors_template,visitors_update;{protected_legend:hide},protected;{expert_legend:hide},visitors_screencount,visitors_useragent,guests,cssID';
/*
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['visitors_categories'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['visitors_categories'], 'exclude' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_visitors_category.title', 'sql' => "varchar(255) NOT NULL default ''", 'eval' => array('multiple' => \false, 'mandatory' => \true, 'tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_module']['fields']['visitors_template'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['visitors_template'], 'default' => 'mod_visitors_fe_invisible', 'exclude' => \true, 'inputType' => 'select', 'options_callback' => array('BugBuster\\Visitors\\DcaModuleVisitors', 'getVisitorsTemplates'), 'explanation' => 'visitors_help_module', 'sql' => "varchar(32) NOT NULL default ''", 'eval' => array('tl_class' => 'w50', 'helpwizard' => \true));
$GLOBALS['TL_DCA']['tl_module']['fields']['visitors_update'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['visitors_update'], 'inputType' => 'text', 'explanation' => 'visitors_help_module', 'sql' => "int(10) unsigned NOT NULL default '10'", 'eval' => array('mandatory' => \false, 'maxlength' => 10, 'rgxp' => 'natural', 'minval' => 1, 'helpwizard' => \false, 'tl_class' => 'w50 w50h'));
$GLOBALS['TL_DCA']['tl_module']['fields']['visitors_screencount'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['visitors_screencount'], 'inputType' => 'checkbox', 'explanation' => 'visitors_help_module', 'sql' => array('type' => 'boolean', 'default' => \false), 'eval' => array('mandatory' => \false, 'helpwizard' => \true));
$GLOBALS['TL_DCA']['tl_module']['fields']['visitors_useragent'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['visitors_useragent'], 'inputType' => 'text', 'search' => \true, 'explanation' => 'visitors_help_module', 'sql' => "varchar(64) NOT NULL default ''", 'eval' => array('mandatory' => \false, 'maxlength' => 64, 'helpwizard' => \true));
}

namespace {
// Add a palette selector
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'news_format';
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['newslist'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_readerModule,numberOfItems,news_featured,news_order,skipFirst,perPage;{template_legend:hide},news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_keepCanonical;{news_overview_legend},overviewPage,customLabel;{template_legend:hide},news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsarchive'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_readerModule,news_format,news_order,news_jumpToCurrent,perPage;{template_legend:hide},news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsmenu'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_showQuantity,news_format,news_order;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsmenunews_day'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_showQuantity,news_format,news_startDay;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['news_archives'] = array('inputType' => 'checkbox', 'options_callback' => array('tl_module_news', 'getNewsArchives'), 'eval' => array('multiple' => \true, 'mandatory' => \true), 'sql' => "blob NULL", 'relation' => array('table' => 'tl_news_archive', 'type' => 'hasMany', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['news_featured'] = array('inputType' => 'select', 'options' => array('all_items', 'featured', 'unfeatured', 'featured_first'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('tl_class' => 'w50 clr'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'all_items'");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_jumpToCurrent'] = array('inputType' => 'select', 'options' => array('hide_module', 'show_current', 'all_items'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_readerModule'] = array('inputType' => 'select', 'options_callback' => array('tl_module_news', 'getReaderModules'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_template'] = array('inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('news_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_format'] = array('inputType' => 'select', 'options' => array('news_day', 'news_month', 'news_year'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('tl_class' => 'w50 clr', 'submitOnChange' => \true), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'news_month'");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_startDay'] = array('inputType' => 'select', 'options' => array(0, 1, 2, 3, 4, 5, 6), 'reference' => &$GLOBALS['TL_LANG']['DAYS'], 'eval' => array('tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_order'] = array('inputType' => 'select', 'options_callback' => array('tl_module_news', 'getSortingOptions'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'order_date_desc'");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_showQuantity'] = array('inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_module']['fields']['news_keepCanonical'] = array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @internal
 */
class tl_module_news extends \Contao\Backend
{
    /**
     * Get all news archives and return them as array
     *
     * @return array
     */
    public function getNewsArchives()
    {
        $user = \Contao\BackendUser::getInstance();
        if (!$user->isAdmin && !\is_array($user->news)) {
            return array();
        }
        $arrArchives = array();
        $objArchives = \Contao\Database::getInstance()->execute("SELECT id, title FROM tl_news_archive ORDER BY title");
        $security = \Contao\System::getContainer()->get('security.helper');
        while ($objArchives->next()) {
            if ($security->isGranted(\Contao\NewsBundle\Security\ContaoNewsPermissions::USER_CAN_EDIT_ARCHIVE, $objArchives->id)) {
                $arrArchives[$objArchives->id] = $objArchives->title;
            }
        }
        return $arrArchives;
    }
    /**
     * Get all newsreader modules and return them as array
     *
     * @return array
     */
    public function getReaderModules()
    {
        $arrModules = array();
        $objModules = \Contao\Database::getInstance()->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='newsreader' ORDER BY t.name, m.name");
        while ($objModules->next()) {
            $arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
        }
        return $arrModules;
    }
    /**
     * Return the sorting options
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getSortingOptions(\Contao\DataContainer $dc)
    {
        if ($dc->activeRecord && $dc->activeRecord->type == 'newsmenu') {
            return array('order_date_asc', 'order_date_desc');
        }
        return array('order_date_asc', 'order_date_desc', 'order_headline_asc', 'order_headline_desc', 'order_random');
    }
}
}

namespace {
/**
 * Palettes.
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['pageimage'] = '{title_legend},name,headline,type;{config_legend},imgSize,inheritPageImage,levelOffset,randomPageImage,allPageImages;{reference_legend:hide},defineRoot;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['inheritPageImage'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12'], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['allPageImages'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['randomPageImage'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => "char(1) NOT NULL default ''"];
}

namespace {
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['listing'] = '{title_legend},name,headline,type;{config_legend},list_table,list_fields,list_where,list_search,list_sort,perPage,list_info,list_info_where;{template_legend:hide},list_layout,list_info_layout;{protected_legend:hide},protected;{expert_legend:hide},cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['list_table'] = array('inputType' => 'select', 'options_callback' => array('tl_module_listing', 'getAllTables'), 'eval' => array('chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_fields'] = array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_where'] = array('inputType' => 'text', 'eval' => array('preserveTags' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_search'] = array('inputType' => 'text', 'eval' => array('decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_sort'] = array('inputType' => 'text', 'eval' => array('decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_info'] = array('inputType' => 'text', 'eval' => array('decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_info_where'] = array('inputType' => 'text', 'eval' => array('preserveTags' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_layout'] = array('inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('list_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_info_layout'] = array('inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('info_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @internal
 */
class tl_module_listing extends \Contao\Backend
{
    /**
     * Get all tables and return them as array
     *
     * @return array
     */
    public function getAllTables()
    {
        $arrTables = \Contao\Database::getInstance()->listTables();
        $arrViews = \Contao\System::getContainer()->get('database_connection')->createSchemaManager()->listViews();
        if (!empty($arrViews)) {
            $arrTables = \array_merge($arrTables, \array_keys($arrViews));
            \natsort($arrTables);
        }
        return \array_values($arrTables);
    }
}
}

namespace {
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'nc_registration_auto_activate';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['nc_registration_auto_activate'] = 'reg_jumpTo,nc_activation_notification';
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_notification'] = ['exclude' => \true, 'inputType' => 'select', 'eval' => ['includeBlankOption' => \true, 'submitOnChange' => \true, 'chosen' => \true, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'integer', 'default' => 0, 'unsigned' => \true]];
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_activation_notification'] = ['exclude' => \true, 'inputType' => 'select', 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'integer', 'default' => 0, 'unsigned' => \true]];
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_registration_auto_activate'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['includeBlankOption' => \true, 'submitOnChange' => \true, 'chosen' => \true, 'tl_class' => 'clr'], 'sql' => ['type' => 'boolean', 'default' => \true]];
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_newsletter_activation_jumpTo'] = ['exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'relation' => ['type' => 'hasOne', 'load' => 'lazy'], 'eval' => ['fieldType' => 'radio'], 'sql' => ['type' => 'integer', 'default' => 0, 'unsigned' => \true]];
}

namespace {
// Add a palette selector
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'cal_format';
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['calendar'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_startDay,cal_featured;{redirect_legend},jumpTo;{template_legend:hide},cal_ctemplate,customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_format,cal_featured,cal_order,cal_readerModule,cal_limit,perPage,cal_ignoreDynamic,cal_hideRunning;{template_legend:hide},cal_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_hideRunning,cal_keepCanonical;{cal_overview_legend},overviewPage,customLabel;{template_legend:hide},cal_template,customTpl;{image_legend},imgSize;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventmenu'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_format,cal_featured,cal_order,cal_showQuantity;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventmenucal_day'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_format,cal_featured,cal_startDay,cal_showQuantity;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_calendar'] = array('inputType' => 'checkbox', 'options_callback' => array('tl_module_calendar', 'getCalendars'), 'eval' => array('mandatory' => \true, 'multiple' => \true), 'sql' => "blob NULL", 'relation' => array('table' => 'tl_calendar', 'type' => 'hasMany', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_noSpan'] = array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_hideRunning'] = array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_startDay'] = array('inputType' => 'select', 'options' => array(0, 1, 2, 3, 4, 5, 6), 'reference' => &$GLOBALS['TL_LANG']['DAYS'], 'eval' => array('tl_class' => 'w50 clr'), 'sql' => "smallint(5) unsigned NOT NULL default 1");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_format'] = array('inputType' => 'select', 'options_callback' => array('tl_module_calendar', 'getFormats'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('tl_class' => 'w50 clr', 'submitOnChange' => \true), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'cal_month'");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_ignoreDynamic'] = array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'clr w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_order'] = array('inputType' => 'select', 'options' => array('ascending', 'descending'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'ascending'");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_readerModule'] = array('inputType' => 'select', 'options_callback' => array('tl_module_calendar', 'getReaderModules'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('table' => 'tl_module', 'type' => 'hasOne', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_limit'] = array('inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_template'] = array('inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('event_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_ctemplate'] = array('inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('cal_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_showQuantity'] = array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_featured'] = array('inputType' => 'select', 'options' => array('all_items', 'featured', 'unfeatured'), 'reference' => &$GLOBALS['TL_LANG']['tl_module']['events'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'all_items'");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_keepCanonical'] = array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @internal
 */
class tl_module_calendar extends \Contao\Backend
{
    /**
     * Get all calendars and return them as array
     *
     * @return array
     */
    public function getCalendars()
    {
        $user = \Contao\BackendUser::getInstance();
        if (!$user->isAdmin && !\is_array($user->calendars)) {
            return array();
        }
        $arrCalendars = array();
        $objCalendars = \Contao\Database::getInstance()->execute("SELECT id, title FROM tl_calendar ORDER BY title");
        $security = \Contao\System::getContainer()->get('security.helper');
        while ($objCalendars->next()) {
            if ($security->isGranted(\Contao\CalendarBundle\Security\ContaoCalendarPermissions::USER_CAN_EDIT_CALENDAR, $objCalendars->id)) {
                $arrCalendars[$objCalendars->id] = $objCalendars->title;
            }
        }
        return $arrCalendars;
    }
    /**
     * Get all event reader modules and return them as array
     *
     * @return array
     */
    public function getReaderModules()
    {
        $arrModules = array();
        $objModules = \Contao\Database::getInstance()->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='eventreader' ORDER BY t.name, m.name");
        while ($objModules->next()) {
            $arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
        }
        return $arrModules;
    }
    /**
     * Return the calendar formats depending on the module type
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getFormats(\Contao\DataContainer $dc)
    {
        if ($dc->activeRecord->type == 'eventmenu') {
            return array('cal_day', 'cal_month', 'cal_year');
        }
        return array('cal_list' => array('cal_day', 'cal_month', 'cal_year', 'cal_all'), 'cal_upcoming' => array('next_7', 'next_14', 'next_30', 'next_90', 'next_180', 'next_365', 'next_two', 'next_cur_month', 'next_cur_year', 'next_next_month', 'next_next_year', 'next_all'), 'cal_past' => array('past_7', 'past_14', 'past_30', 'past_90', 'past_180', 'past_365', 'past_two', 'past_cur_month', 'past_cur_year', 'past_prev_month', 'past_prev_year', 'past_all'));
    }
}
}

namespace {
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['personalData'] = \str_replace(',editable', ',editable,newsletters', $GLOBALS['TL_DCA']['tl_module']['palettes']['personalData']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['subscribe'] = '{title_legend},name,headline,type;{config_legend},nl_channels,nl_hideChannels,disableCaptcha;{text_legend},nl_text;{redirect_legend},jumpTo;{email_legend:hide},nl_subscribe;{template_legend:hide},nl_template;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['unsubscribe'] = '{title_legend},name,headline,type;{config_legend},nl_channels,nl_hideChannels,disableCaptcha;{redirect_legend},jumpTo;{email_legend:hide},nl_unsubscribe;{template_legend:hide},nl_template;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsletterlist'] = '{title_legend},name,headline,type;{config_legend},nl_channels;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsletterreader'] = '{title_legend},name,headline,type;{config_legend},nl_channels,overviewPage,customLabel;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['newsletters'] = array('inputType' => 'checkbox', 'foreignKey' => 'tl_newsletter_channel.title', 'eval' => array('multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_channels'] = array('inputType' => 'checkbox', 'options_callback' => array('tl_module_newsletter', 'getChannels'), 'eval' => array('multiple' => \true, 'mandatory' => \true), 'sql' => "blob NULL", 'relation' => array('table' => 'tl_newsletter_channel', 'type' => 'hasMany', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_text'] = array('inputType' => 'textarea', 'eval' => array('rte' => 'tinyMCE', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_hideChannels'] = array('inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_subscribe'] = array('inputType' => 'textarea', 'eval' => array('style' => 'height:120px', 'decodeEntities' => \true, 'alwaysSave' => \true), 'load_callback' => array(array('tl_module_newsletter', 'getSubscribeDefault')), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_unsubscribe'] = array('inputType' => 'textarea', 'eval' => array('style' => 'height:120px', 'decodeEntities' => \true, 'alwaysSave' => \true), 'load_callback' => array(array('tl_module_newsletter', 'getUnsubscribeDefault')), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_template'] = array('inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('nl_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @internal
 */
class tl_module_newsletter extends \Contao\Backend
{
    /**
     * Load the default subscribe text
     *
     * @param mixed $varValue
     *
     * @return mixed
     */
    public function getSubscribeDefault($varValue)
    {
        if (\trim($varValue) === '') {
            $varValue = $GLOBALS['TL_LANG']['tl_module']['text_subscribe'][1];
        }
        return $varValue;
    }
    /**
     * Load the default unsubscribe text
     *
     * @param mixed $varValue
     *
     * @return mixed
     */
    public function getUnsubscribeDefault($varValue)
    {
        if (\trim($varValue) === '') {
            $varValue = $GLOBALS['TL_LANG']['tl_module']['text_unsubscribe'][1];
        }
        return $varValue;
    }
    /**
     * Get all channels and return them as array
     *
     * @return array
     */
    public function getChannels(\Contao\DataContainer $dc)
    {
        $user = \Contao\BackendUser::getInstance();
        if (!$user->isAdmin && !\is_array($user->newsletters)) {
            return array();
        }
        $strQuery = "SELECT id, title FROM tl_newsletter_channel";
        // Show only channels with a redirect page in the web modules
        if (\in_array($dc->activeRecord->type, array('newsletterlist', 'newsletterreader'))) {
            $strQuery .= " WHERE jumpTo>0";
        }
        $strQuery .= " ORDER BY title";
        $arrChannels = array();
        $objChannels = \Contao\Database::getInstance()->execute($strQuery);
        $security = \Contao\System::getContainer()->get('security.helper');
        while ($objChannels->next()) {
            if ($security->isGranted(\Contao\NewsletterBundle\Security\ContaoNewsletterPermissions::USER_CAN_EDIT_CHANNEL, $objChannels->id)) {
                $arrChannels[$objChannels->id] = $objChannels->title;
            }
        }
        return $arrChannels;
    }
}
}

namespace {
// Palette for calendar
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('hide_holiday', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('showOnlyNext', 'hide_holiday')->applyToPalette('calendar', 'tl_module');
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('filter_legend', 'template_legend')->addField('filter_fields', 'filter_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('calendar', 'tl_module');
// Palette for timetable
$GLOBALS['TL_DCA']['tl_module']['palettes']['timetable'] = $GLOBALS['TL_DCA']['tl_module']['palettes']['calendar'];
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('showDate', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('hideEmptyDays', 'showDate')->addField('use_navigation', 'hideEmptyDays')->addField('linkCurrent', 'use_navigation')->addField('cal_times', 'linkCurrent')->addField('cal_times_range', 'cal_times')->addField('cellheight', 'cal_times_range')->applyToPalette('timetable', 'tl_module');
// Palette for yearview
$GLOBALS['TL_DCA']['tl_module']['palettes']['yearview'] = $GLOBALS['TL_DCA']['tl_module']['palettes']['calendar'];
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('use_horizontal', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('use_navigation', 'use_horizontal')->addField('linkCurrent', 'use_navigation')->applyToPalette('yearview', 'tl_module');
// Palette for eventlist
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('hide_holiday', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('showOnlyNext', 'hide_holiday')->applyToPalette('eventlist', 'tl_module');
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('filter_legend', 'template_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)->addField('filter_fields', 'filter_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('eventlist', 'tl_module');
$GLOBALS['TL_DCA']['tl_module']['palettes']['fullcalendar'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_fcFormat,cal_ignoreDynamic;{template_legend:hide},cal_ctemplate,cal_startDay,weekNumbers,businessHours;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'businessHours';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['businessHours'] = 'businessDays,businessDayStart,businessDayEnd';
$GLOBALS['TL_DCA']['tl_module']['fields']['hide_holiday'] = ['default' => 0, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['showOnlyNext'] = ['default' => 0, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['use_horizontal'] = ['default' => 0, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['use_navigation'] = ['default' => 1, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['showDate'] = ['default' => 1, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['linkCurrent'] = ['default' => 1, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['hideEmptyDays'] = ['default' => 1, 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_times'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
// list of exceptions
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_times_range'] = ['exclude' => \true, 'inputType' => 'multiColumnWizard', 'eval' => ['tl_class' => 'clr w100', 'columnsCallback' => ['calendar_extended.module.callbacks', 'getTimeRange'], 'buttons' => ['up' => \false, 'down' => \false, 'copy' => \false]], 'sql' => ['type' => 'text', 'length' => 1000, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_module']['fields']['cellheight'] = ['default' => 60, 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'clr w50'], 'sql' => ['type' => 'string', 'length' => 10, 'default' => '']];
/*
 * Fullcalendar
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['businessHours'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'clr m12 w50', 'submitOnChange' => \true], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['weekNumbers'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'm12 w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['weekNumbersWithinDays'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'm12 w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_fcFormat'] = ['exclude' => \true, 'inputType' => 'select', 'options' => ['cal_fc_month', 'cal_fc_week', 'cal_fc_day', 'cal_fc_list'], 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => ['tl_class' => 'clr w50'], 'sql' => ['type' => 'string', 'length' => 32, 'default' => 'cal_fc_week', 'customSchemaOptions' => ['collation' => 'ascii_bin']]];
$GLOBALS['TL_DCA']['tl_module']['fields']['filter_fields'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'long', 'multiple' => \true], 'sql' => ['type' => 'text', 'length' => 1000, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_module']['fields']['businessDays'] = ['inputType' => 'checkbox', 'options' => [1, 2, 3, 4, 5, 6, 0], 'reference' => &$GLOBALS['TL_LANG']['DAYS'], 'eval' => ['multiple' => \true, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'text', 'length' => 1000, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_module']['fields']['businessDayStart'] = ['inputType' => 'text', 'eval' => ['rgxp' => 'time', 'mandatory' => \true, 'datepicker' => \true, 'tl_class' => 'clr w50 wizard'], 'sql' => ['type' => 'bigint', 'length' => 20, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_module']['fields']['businessDayEnd'] = ['inputType' => 'text', 'eval' => ['rgxp' => 'time', 'mandatory' => \true, 'datepicker' => \true, 'tl_class' => 'w50 wizard'], 'sql' => ['type' => 'bigint', 'length' => 20, 'notnull' => \false]];
}

namespace {
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'news_customCategories';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'news_relatedCategories';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newscategories'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_showQuantity,news_resetCategories,news_showEmptyCategories,news_enableCanonicalUrls,news_includeSubcategories,showLevel;{reference_legend:hide},news_categoriesRoot,news_customCategories;{redirect_legend:hide},news_forceCategoryUrl,jumpTo;{template_legend:hide},navigationTpl,customTpl;{image_legend:hide},news_categoryImgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newscategories_cumulative'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_showQuantity,news_resetCategories,news_enableCanonicalUrls,news_includeSubcategories,news_filterCategoriesUnion;{reference_legend:hide},news_categoriesRoot,news_customCategories;{redirect_legend:hide},jumpTo;{template_legend:hide},navigationTpl,customTpl;{image_legend:hide},news_categoryImgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newscategories_cumulativehierarchical'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_showQuantity,news_resetCategories,news_showEmptyCategories,news_enableCanonicalUrls,news_filterCategoriesUnion,news_includeSubcategories,showLevel;{reference_legend:hide},news_categoriesRoot,news_customCategories;{redirect_legend:hide},news_forceCategoryUrl,jumpTo;{template_legend:hide},navigationTpl,customTpl;{image_legend:hide},news_categoryImgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['news_customCategories'] = 'news_categories';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['news_relatedCategories'] = 'news_relatedCategoriesOrder,news_categoriesRoot';
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('redirect_legend', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)->addField('news_filterCategories', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_filterCategoriesCumulative', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_filterCategoriesUnion', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_relatedCategories', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_includeSubcategories', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_filterDefault', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_filterPreserve', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_categoryFilterPage', 'redirect_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_categoryImgSize', 'image_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('newslist', 'tl_module');
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('news_filterCategories', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_filterCategoriesCumulative', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_filterCategoriesUnion', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_includeSubcategories', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_filterDefault', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_filterPreserve', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_categoryImgSize', 'image_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('newsarchive', 'tl_module')->applyToPalette('newsmenu', 'tl_module');
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('redirect_legend', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)->addField('news_categoryFilterPage', 'redirect_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('newsarchive', 'tl_module');
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('redirect_legend', 'config_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)->addField('news_categoryFilterPage', 'redirect_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('news_categoryImgSize', 'image_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('newsreader', 'tl_module');
/*
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['news_categories'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_categories'], 'exclude' => \true, 'inputType' => 'picker', 'foreignKey' => 'tl_news_category.title', 'eval' => ['multiple' => \true, 'fieldType' => 'checkbox'], 'sql' => ['type' => 'blob', 'notnull' => \false], 'relation' => ['type' => 'hasMany', 'load' => 'lazy']];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_customCategories'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_customCategories'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['submitOnChange' => \true, 'tl_class' => 'clr'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_filterCategories'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_filterCategories'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_filterCategoriesCumulative'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_filterCategoriesCumulative'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'clr'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_relatedCategories'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_relatedCategories'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['submitOnChange' => \true, 'tl_class' => 'clr'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_relatedCategoriesOrder'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_relatedCategoriesOrder'], 'exclude' => \true, 'inputType' => 'select', 'options' => ['default', 'best_match'], 'reference' => &$GLOBALS['TL_LANG']['tl_module']['news_relatedCategoriesOrderRef'], 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 10, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_includeSubcategories'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_includeSubcategories'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'clr'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_filterCategoriesUnion'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_filterCategoriesUnion'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'clr'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_enableCanonicalUrls'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_enableCanonicalUrls'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_filterDefault'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_filterDefault'], 'exclude' => \true, 'inputType' => 'picker', 'foreignKey' => 'tl_news_category.title', 'eval' => ['multiple' => \true, 'fieldType' => 'checkbox', 'tl_class' => 'clr'], 'sql' => ['type' => 'blob', 'notnull' => \false], 'relation' => ['type' => 'hasMany', 'load' => 'lazy']];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_filterPreserve'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_filterPreserve'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'clr'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_resetCategories'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_resetCategories'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_showEmptyCategories'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_showEmptyCategories'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_forceCategoryUrl'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_forceCategoryUrl'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'clr'], 'sql' => ['type' => 'boolean', 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_categoriesRoot'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_categoriesRoot'], 'exclude' => \true, 'inputType' => 'picker', 'foreignKey' => 'tl_news_category.title', 'eval' => ['fieldType' => 'radio', 'tl_class' => 'clr'], 'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0], 'relation' => ['type' => 'hasMany', 'load' => 'lazy']];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_categoryFilterPage'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['news_categoryFilterPage'], 'exclude' => \true, 'inputType' => 'pageTree', 'eval' => ['fieldType' => 'radio', 'tl_class' => 'clr'], 'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_categoryImgSize'] = $GLOBALS['TL_DCA']['tl_module']['fields']['imgSize'];
unset($GLOBALS['TL_DCA']['tl_module']['fields']['news_categoryImgSize']['label']);
$GLOBALS['TL_DCA']['tl_module']['fields']['news_categoryImgSize']['label'] =& $GLOBALS['TL_LANG']['tl_module']['news_categoryImgSize'];
$GLOBALS['TL_DCA']['tl_module']['fields']['news_categoryImgSize']['options_callback'] = ['contao.listener.image_size_options', '__invoke'];
}

namespace {
// Palettes
$GLOBALS['TL_DCA']['tl_module']['palettes'][\Cgoit\LeadsOptinBundle\Controller\Module\LeadsOptInModule::TYPE] = '{title_legend},name,headline,type;{leadsoptin_legend},leadOptInSuccessType,leadOptInErrorMessage,leadOptInSuccessNotification,leadOptIndNeedsUserInteraction;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'leadOptInSuccessType';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'leadOptIndNeedsUserInteraction';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['leadOptIndNeedsUserInteraction'] = 'leadOptInUserInteractionMessage,leadOptInUserInteractionSubmit';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['leadOptInSuccessType_message'] = 'leadOptInSuccessMessage';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['leadOptInSuccessType_redirect'] = 'leadOptInSuccessJumpTo';
/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['leadOptInSuccessType'] = ['exclude' => \true, 'inputType' => 'select', 'options' => ['message', 'redirect'], 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => ['tl_class' => 'w50', 'submitOnChange' => \true], 'sql' => ['type' => 'string', 'length' => 8, 'default' => 'message']];
$GLOBALS['TL_DCA']['tl_module']['fields']['leadOptInSuccessMessage'] = ['exclude' => \true, 'inputType' => 'textarea', 'eval' => ['tl_class' => 'long', 'rte' => 'tinyMCE'], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_module']['fields']['leadOptInSuccessJumpTo'] = ['exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => ['fieldType' => 'radio', 'tl_class' => 'clr'], 'sql' => ['type' => 'integer', 'length' => 10, 'unsigned' => \true, 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['leadOptInErrorMessage'] = ['exclude' => \true, 'inputType' => 'textarea', 'eval' => ['tl_class' => 'clr long', 'rte' => 'tinyMCE'], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_module']['fields']['leadOptInSuccessNotification'] = ['exclude' => \true, 'inputType' => 'select', 'eval' => ['tl_class' => 'w50 m12', 'includeBlankOption' => \true, 'mandatory' => \false], 'sql' => ['type' => 'integer', 'length' => 10, 'unsigned' => \true, 'default' => 0]];
$GLOBALS['TL_DCA']['tl_module']['fields']['leadOptIndNeedsUserInteraction'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 clr', 'submitOnChange' => \true], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_module']['fields']['leadOptInUserInteractionMessage'] = ['exclude' => \true, 'inputType' => 'textarea', 'eval' => ['tl_class' => 'long', 'rte' => 'tinyMCE'], 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_module']['fields']['leadOptInUserInteractionSubmit'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 256, 'default' => '']];
}

namespace {
\Contao\Controller::loadDataContainer('tl_content');
\Contao\System::loadLanguageFile('tl_content');
/*
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'nodesWrapper';
$GLOBALS['TL_DCA']['tl_module']['palettes']['nodes'] = '{title_legend},name,type;{include_legend},nodes,nodesWrapper;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['nodesWrapper'] =& $GLOBALS['TL_DCA']['tl_content']['subpalettes']['nodesWrapper'];
/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['nodes'] =& $GLOBALS['TL_DCA']['tl_content']['fields']['nodes'];
$GLOBALS['TL_DCA']['tl_module']['fields']['nodesWrapper'] =& $GLOBALS['TL_DCA']['tl_content']['fields']['nodesWrapper'];
}

namespace {
$GLOBALS['TL_DCA']['tl_module']['palettes'][\InspiredMinds\ContaoEventRegistration\Controller\FrontendModule\EventRegistrationFormController::TYPE] = '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes'][\InspiredMinds\ContaoEventRegistration\Controller\FrontendModule\EventRegistrationConfirmController::TYPE] = '{title_legend},name,headline,type;{config_legend},nodes,nc_notification;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes'][\InspiredMinds\ContaoEventRegistration\Controller\FrontendModule\EventRegistrationCancelController::TYPE] = '{title_legend},name,headline,type;{config_legend},nodes,nc_notification;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes'][\InspiredMinds\ContaoEventRegistration\Controller\FrontendModule\EventRegistrationListController::TYPE] = '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
}

namespace {
/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['calendarEdit'] = $GLOBALS['TL_DCA']['tl_module']['palettes']['calendar'] . ';{edit_legend},caledit_add_jumpTo; {edit_holidays},cal_holidayCalendar';
$GLOBALS['TL_DCA']['tl_module']['palettes']['EventReaderEditLink'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,caledit_showDeleteLink,caledit_showCloneLink';
$GLOBALS['TL_DCA']['tl_module']['palettes']['EventHiddenList'] = $GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist'];
$GLOBALS['TL_DCA']['tl_module']['palettes']['EventEditor'] = '{title_legend},name,headline,type;{redirect_legend},jumpTo;' . '{config_legend},cal_calendar,caledit_mandatoryfields,caledit_alternateCSSLabel,caledit_usePredefinedCss;' . '{caledit_setting_publish},caledit_allowPublish,caledit_allowDelete,caledit_allowClone,caledit_sendMail;' . '{template_legend},caledit_template,caledit_delete_template, caledit_clone_template, caledit_tinMCEtemplate,' . 'caledit_useDatePicker ;' . '{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['caledit_usePredefinedCss'] = 'caledit_cssValues';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['caledit_sendMail'] = 'caledit_mailRecipient';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['cal_holidayCalendar'] = 'cal_holidayCalendar';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['caledit_useDatePicker'] = 'caledit_dateIncludeCSSTheme, caledit_dateImage, caledit_dateImageSRC,caledit_dateDirection ';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'caledit_usePredefinedCss';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'caledit_sendMail';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'cal_holidayCalendar';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'caledit_useDatePicker';
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_allowPublish'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_allowPublish'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_allowDelete'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_allowDelete'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_allowClone'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_allowClone'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_sendMail'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_sendMail'], 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'clr m12 w50'), 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_mailRecipient'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_mailRecipient'], 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_mandatoryfields'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_mandatoryfields'], 'inputType' => 'checkbox', 'options' => array('starttime', 'location', 'teaser', 'details', 'css'), 'reference' => &$GLOBALS['TL_LANG']['tl_caledit_mandatoryfields'], 'eval' => array('multiple' => \true, 'tl_class' => 'w100'), 'sql' => "blob NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_add_jumpTo'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_add_jumpTo'], 'inputType' => 'pageTree', 'eval' => array('fieldType' => 'radio'), 'sql' => "int(10) unsigned NOT NULL default '0'");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_template'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_template'], 'default' => 'eventEdit_default', 'exclude' => \true, 'inputType' => 'select', 'options_callback' => array('calendar_eventeditor', 'getEventEditTemplates'), 'eval' => array('tl_class' => 'clr w50'), 'sql' => "varchar(32) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_clone_template'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_clone_template'], 'default' => 'eventEdit_duplicate', 'exclude' => \true, 'inputType' => 'select', 'options_callback' => array('calendar_eventeditor', 'getEventEditTemplates'), 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_delete_template'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_delete_template'], 'default' => 'eventEdit_delete', 'exclude' => \true, 'inputType' => 'select', 'options_callback' => array('calendar_eventeditor', 'getEventEditTemplates'), 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_tinMCEtemplate'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_tinMCEtemplate'],
    //'default'                 => 'tinyFrontendMinimal',
    'default' => 'wuppdi',
    'inputType' => 'select',
    'options_callback' => array('calendar_eventeditor', 'getConfigFiles'),
    'eval' => array('includeBlankOption' => \true, 'tl_class' => 'w50'),
    'sql' => "varchar(32) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_alternateCSSLabel'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_alternateCSSLabel'], 'inputType' => 'text', 'eval' => array('maxlength' => 64, 'tl_class' => 'clr w50'), 'sql' => "varchar(64) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_usePredefinedCss'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_usePredefinedCss'], 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'clr w50'), 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_cssValues'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_cssValues'], 'inputType' => 'multiColumnWizard', 'eval' => array('tl_class' => 'w50', 'columnsCallback' => array('calendar_eventeditor', 'getCSSValues')), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_showDeleteLink'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_showDeleteLink'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_showCloneLink'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_showCloneLink'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_holidayCalendar'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_holidayCalendar'], 'exclude' => \true, 'inputType' => 'checkbox', 'options_callback' => array('calendar_eventeditor', 'getCalendars'), 'eval' => array('mandatory' => \false, 'multiple' => \true), 'sql' => "blob NULL");
// some settings for the CalendarField DatePicker (copied from the DCA there)
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_useDatePicker'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_useDatePicker'], 'inputType' => 'checkbox', 'default' => '1', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'clr m12 w50'), 'sql' => "char(1) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_dateDirection'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_dateDirection'], 'exclude' => \true, 'inputType' => 'select', 'options' => array('all', 'ltToday', 'leToday', 'geToday', 'gtToday'), 'reference' => &$GLOBALS['TL_LANG']['tl_module']['caledit_dateDirection_ref'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(10) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_dateIncludeCSSTheme'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_dateIncludeCSSTheme'], 'exclude' => \true, 'default' => 'smoothness', 'inputType' => 'select', 'options' => array("black-tie", "blitzer", "cupertino", "dark-hive", "dot-luv", "eggplant", "excite-bike", "flick", "hot-sneaks", "humanity", "le-frog", "mint-choc", "overcast", "pepper-grinder", "redmond", "smoothness", "south-street", "start", "sunny", "swanky-purse", "trontastic", "ui-darkness", "ui-lightness", "vader"), 'eval' => array('tl_class' => 'w50', 'includeBlankOption' => \true), 'sql' => "varchar(64) NOT NULL default 'smoothness'");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_dateImage'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_dateImage'], 'exclude' => \true, 'default' => '1', 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'clr'), 'sql' => "char(1) NOT NULL default '1'");
$GLOBALS['TL_DCA']['tl_module']['fields']['caledit_dateImageSRC'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['caledit_dateImageSRC'], 'exclude' => \true, 'inputType' => 'fileTree', 'eval' => array('files' => \true, 'fieldType' => 'radio', 'filesOnly' => \true, 'tl_class' => 'clr'), 'sql' => "binary(16) NULL");
//'caledit_dateDirection,
//caledit_dateIncludeCSS, caledit_dateIncludeCSSTheme,
//caledit_dateImage, caledit_dateImageSRC'
class calendar_eventeditor extends \Contao\Backend
{
    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Return all event templates as array
     * @param object
     * @return array
     */
    public function getEventEditTemplates()
    {
        return $this->getTemplateGroup('eventEdit_');
    }
    public function getCSSValues()
    {
        $columnFields = \null;
        $columnFields = array('label' => array('label' => &$GLOBALS['TL_LANG']['tl_module']['css_label'], 'mandatory' => \true, 'default' => \null, 'inputType' => 'text', 'eval' => array('style' => 'width:100px')), 'value' => array('label' => &$GLOBALS['TL_LANG']['tl_module']['css_value'], 'mandatory' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'alpha', 'style' => 'width:70px')));
        return $columnFields;
    }
    public function getCalendars()
    {
        if (\Contao\BackendUser::getInstance()->isAdmin) {
            return array('default', 'internal', 'article', 'external');
        }
        $arrOptions = [];
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
        $arrCalendars = [];
        $objCalendars = $this->Database->execute("SELECT id, title FROM tl_calendar ORDER BY title");
        while ($objCalendars->next()) {
            if ($this->User->hasAccess($objCalendars->id, 'calendars')) {
                $arrCalendars[$objCalendars->id] = $objCalendars->title;
            }
        }
        return $arrCalendars;
    }
    /**
     * Return a list of tinyMCE config files in this system.
     * copied from "FormRTE", @copyright  Andreas Schempp 2009
     */
    public function getConfigFiles()
    {
        $arrConfigs = array();
        //$arrFiles = scan(TL_ROOT . '/system/config/');
        $arrFiles = \scandir('../tinyMCE/');
        // . '/system/config/');
        foreach ($arrFiles as $file) {
            //if (substr($file, 0, 4) == 'tiny') {
            $arrConfigs[] = \basename($file, '.php');
            //}
        }
        return $arrConfigs;
    }
}
}

namespace {
// new categories blob field for use in standard eventlist module
if (isset($GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist'])) {
    $GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist'] = \str_replace(';{protected_legend:hide}', ';{event_cat_legend:hide},event_categories;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist']);
}
if (isset($GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist'])) {
    $GLOBALS['TL_DCA']['tl_module']['palettes']['calendar'] = \str_replace(';{protected_legend:hide}', ';{event_cat_legend:hide},event_categories;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['calendar']);
}
if (isset($GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist'])) {
    $GLOBALS['TL_DCA']['tl_module']['palettes']['eventmenu'] = \str_replace(';{protected_legend:hide}', ';{event_cat_legend:hide},event_categories;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['eventmenu']);
}
$GLOBALS['TL_DCA']['tl_module']['fields']['event_categories'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['event_categories'], 'exclude' => \true, 'inputType' => 'checkboxWizard', 'foreignKey' => 'tl_mae_event_cat.title', 'eval' => array('tl_class' => 'clr', 'multiple' => \true, 'fieldType' => 'checkbox', 'foreignTable' => 'tl_mae_event_cat', 'titleField' => 'title', 'searchField' => 'title'), 'sql' => "blob NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['mae_event_list'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mae_event_list'], 'exclude' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_module.name', 'eval' => array('chosen' => \true, 'tl_class' => 'w50', 'mandatory' => \false), 'sql' => "int(10) unsigned NOT NULL default '0'", 'relation' => array('type' => 'hasOne', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['mae_event_catname'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mae_event_catname'], 'exclude' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 50, 'tl_class' => 'w50', 'rgxp' => 'alias'), 'sql' => "varchar(50) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['mae_only_future_cat'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mae_only_future_cat'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'clr'), 'sql' => ['type' => 'boolean', 'default' => \false]);
$GLOBALS['TL_DCA']['tl_module']['palettes']['mae_event_filter'] = '{title_legend},name,type;{mae_setup_legend},mae_event_list,headline,mae_event_catname,mae_only_future_cat;{event_cat_legend:hide},event_categories';
}

namespace {
\Contao\System::loadLanguageFile('tl_content');
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['comments'] = '{title_legend},name,headline,type;{comment_legend},com_order,perPage,com_moderate,com_bbcode,com_protected,com_requireLogin,com_disableCaptcha;{template_legend:hide},com_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['com_order'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_order'], 'inputType' => 'select', 'options' => array('ascending', 'descending'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'ascending'");
$GLOBALS['TL_DCA']['tl_module']['fields']['com_moderate'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_moderate'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_module']['fields']['com_bbcode'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_bbcode'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_module']['fields']['com_requireLogin'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_requireLogin'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_module']['fields']['com_disableCaptcha'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_disableCaptcha'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_module']['fields']['com_template'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_template'], 'inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('com_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
}

namespace {
/*
 * This file is part of cgoit\contao-cmace-bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2024, cgoIT
 * @author     cgoIT <https://cgo-it.de>
 * @license    LGPL-3.0-or-later
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist_fixed_range'] = '{title_legend},name,headline,type;{config_legend},cmaceText,cal_calendar,cal_noSpan,cal_featured,cal_order,cal_readerModule,cal_limit,perPage,cal_hideRunning,cmaceEventsHeadline,cmaceEventsFrom,cmaceEventsUntil;{template_legend:hide},cal_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['fields'] = \array_merge(['cmaceText' => ['exclude' => \true, 'search' => \true, 'inputType' => 'textarea', 'eval' => ['mandatory' => \false, 'rte' => 'tinyMCE', 'tl_class' => 'w100'], 'explanation' => 'insertTags', 'sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]]], ['cmaceEventsHeadline' => ['label' => &$GLOBALS['TL_LANG']['tl_module']['cmaceEventsHeadline'], 'exclude' => \true, 'search' => \true, 'inputType' => 'inputUnit', 'options' => ['h3', 'h4', 'h5', 'h6'], 'eval' => ['maxlength' => 200, 'tl_class' => 'w50 clr'], 'sql' => ['type' => 'text', 'length' => 1000, 'default' => 'a:2:{s:5:"value";s:0:"";s:4:"unit";s:2:"h3";}']]], ['cmaceEventsFrom' => ['label' => &$GLOBALS['TL_LANG']['tl_module']['cmaceEventsFrom'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \true, 'rgxp' => 'date', 'doNotCopy' => \true, 'datepicker' => \true, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'bigint', 'length' => 20, 'notnull' => \false]]], ['cmaceEventsUntil' => ['label' => &$GLOBALS['TL_LANG']['tl_module']['cmaceEventsUntil'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \true, 'rgxp' => 'date', 'doNotCopy' => \true, 'datepicker' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'bigint', 'length' => 20, 'notnull' => \false]]], $GLOBALS['TL_DCA']['tl_module']['fields']);
}

namespace {
$GLOBALS['TL_DCA']['tl_module']['palettes']['ct_modal'] = '{title_legend},name,type;{modal_link_legend},modal_linkText,modal_linkClass;{modal_headline_legend},headline;{modal_text_legend},modal_text,modal_class;{template_legend:hide},modal_customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
/*
 * Add fields to tl_module
 */
/* Modal */
$GLOBALS['TL_DCA']['tl_module']['fields']['modal_linkText'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['modal_linkText'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['modal_linkClass'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['modal_linkClass'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['modal_text'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['modal_text'], 'exclude' => \true, 'search' => \true, 'inputType' => 'textarea', 'eval' => ['rte' => 'tinyMCE'], 'sql' => 'TEXT NULL'];
$GLOBALS['TL_DCA']['tl_module']['fields']['modal_customTpl'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['modal_customTpl'], 'exclude' => \true, 'inputType' => 'select', 'options_callback' => ['tl_module_cthemes', 'getModalTemplates'], 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'], 'sql' => "varchar(64) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['modal_class'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['modal_class'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
class tl_module_cthemes extends \Contao\Backend
{
    /**
     * Return all content element templates as array.
     *
     * @return array
     */
    public function getModalTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('mod_cthemes_modal');
    }
}
}

namespace {
/**
 * Add palette to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['mateNavbar'] = '{title_legend},name,headline,type;levelOffset,showLevel,hardLimit,showProtected,showHidden;{mateNavbarSettings},mateNavbar_customTpl,mateNavbarType,mateShowLogo,mateShowSearch,mateShowMobileMenu,mateIncludeHeadroom,mateNavbarStuck;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['mateModal'] = '{title_legend},name,type;{modal_link_legend},mateModal_linkText,mateModal_linkClass;{modal_headline_legend},headline;{modal_text_legend},mateModal_text,mateModal_class;{template_legend:hide},mateModal_customTpl;{expert_legend:hide},cssID,space';
if (isset($GLOBALS['TL_DCA']['tl_module']['palettes']['newslist'])) {
    $GLOBALS['TL_DCA']['tl_module']['palettes']['newslist'] = \str_replace('imgSize;', 'imgSize;{mate_slider_legend},mateSliderHeight,mateSliderInterval,mateSliderDuration,mateSliderIndicators;', $GLOBALS['TL_DCA']['tl_module']['palettes']['newslist']);
}
/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['mateNavbarType'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateNavbarType'], 'exclude' => \true, 'eval' => array('mandatory' => \true, 'multiple' => \false, 'maxlength' => 64, 'tl_class' => 'wizard w50'), 'inputType' => 'select', 'options' => array('type1', 'type2', 'type3', 'type5'), 'reference' => &$GLOBALS['TL_LANG']['tl_module']['mate_navbar'], 'sql' => "varchar(64) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['mateShowLogo'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateShowLogo'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 clr'), 'sql' => "int(1) NOT NULL default '1'");
$GLOBALS['TL_DCA']['tl_module']['fields']['mateShowSearch'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateShowSearch'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "int(1) NOT NULL default '1'");
$GLOBALS['TL_DCA']['tl_module']['fields']['mateShowMobileMenu'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateShowMobileMenu'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "int(1) NOT NULL default '1'");
$GLOBALS['TL_DCA']['tl_module']['fields']['mateIncludeHeadroom'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateIncludeHeadroom'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "int(1) NOT NULL default '1'");
$GLOBALS['TL_DCA']['tl_module']['fields']['mateNavbarStuck'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateNavbarStuck'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "int(1) NOT NULL default '1'");
/* ModalElement */
$GLOBALS['TL_DCA']['tl_module']['fields']['mateModal_linkText'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateModal_linkText'], 'exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['mateModal_linkClass'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateModal_linkClass'], 'exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['mateModal_text'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateModal_text'], 'exclude' => \true, 'search' => \true, 'inputType' => 'textarea', 'eval' => array('rte' => 'tinyMCE'), 'sql' => "TEXT NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['mateModal_customTpl'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateModal_customTpl'], 'exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_module_mate', 'getModalTemplates'), 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['mateModal_class'] = array('label' => &$GLOBALS['TL_LANG']['tl_module']['mateModal_class'], 'exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['mateNavbar_customTpl'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['mateNavbar_customTpl'], 'exclude' => \true, 'inputType' => 'select', 'options_callback' => ['tl_module_mate', 'getNavbarTemplates'], 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'], 'sql' => "varchar(64) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['mateSliderHeight'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['mateSliderHeight'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 5, 'tl_class' => 'w50'], 'sql' => "varchar(5) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['mateSliderInterval'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['mateSliderInterval'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 8, 'tl_class' => 'w50'], 'sql' => "varchar(8) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['mateSliderDuration'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['mateSliderDuration'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 8, 'tl_class' => 'w50'], 'sql' => "varchar(8) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_module']['fields']['mateSliderIndicators'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['mateSliderIndicators'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 clr'], 'sql' => "char(1) NOT NULL default '1'"];
class tl_module_mate extends \Contao\Backend
{
    /**
     * Return all content element templates as array
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getModalTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('mod_mate_modal');
    }
    public function getNavbarTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('mod_mate_navbar');
    }
}
}
