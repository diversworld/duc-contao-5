<?php

namespace {
$GLOBALS['TL_DCA']['tl_page'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'ctable' => array('tl_article'), 'enableVersioning' => \true, 'markAsCopy' => 'title', 'onload_callback' => array(array('tl_page', 'adjustDca'), array('tl_page', 'addBreadcrumb'), array('tl_page', 'setRootType'), array('tl_page', 'showFallbackWarning')), 'oncut_callback' => array(array('tl_page', 'scheduleUpdate')), 'ondelete_callback' => array(array('tl_page', 'scheduleUpdate')), 'onsubmit_callback' => array(array('tl_page', 'scheduleUpdate')), 'oninvalidate_cache_tags_callback' => array(array('tl_page', 'addSitemapCacheInvalidationTag')), 'sql' => array('keys' => array('id' => 'primary', 'tstamp' => 'index', 'alias' => 'index', 'type,dns,fallback,published,start,stop' => 'index', 'pid,published,type,start,stop' => 'index'))),
    // List
    'list' => array('sorting' => array('mode' => \Contao\DataContainer::MODE_TREE, 'rootPaste' => \true, 'showRootTrails' => \true, 'icon' => 'pagemounts.svg', 'panelLayout' => 'filter;search', 'defaultSearchField' => 'pageTitle'), 'label' => array('fields' => array('title'), 'format' => '%s', 'label_callback' => array('tl_page', 'addIcon')), 'operations' => array('articles' => array('href' => 'do=article', 'icon' => 'article.svg'))),
    // Select
    'select' => array('buttons_callback' => array(array('tl_page', 'addAliasButton'))),
    // Palettes
    'palettes' => array('__selector__' => array('type', 'fallback', 'autoforward', 'protected', 'includeLayout', 'includeCache', 'includeChmod', 'enforceTwoFactor', 'enableCsp'), 'default' => '{title_legend},title,type', 'regular' => '{title_legend},title,type;{routing_legend},alias,requireItem,routePath,routePriority,routeConflicts;{meta_legend},pageTitle,robots,description,serpPreview;{canonical_legend:hide},canonicalLink,canonicalKeepParams;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass,sitemap,hide,noSearch;{tabnav_legend:hide},accesskey;{publish_legend},published,start,stop', 'forward' => '{title_legend},title,type;{routing_legend},alias,routePath,routePriority,routeConflicts;{meta_legend},pageTitle,robots;{redirect_legend},jumpTo,redirect,alwaysForward;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass,sitemap,hide;{tabnav_legend:hide},accesskey;{publish_legend},published,start,stop', 'redirect' => '{title_legend},title,type;{routing_legend},alias,routePath,routePriority,routeConflicts;{meta_legend},pageTitle,robots;{redirect_legend},redirect,url,target;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass,sitemap,hide;{tabnav_legend:hide},accesskey;{publish_legend},published,start,stop', 'root' => '{title_legend},title,type;{routing_legend},alias;{meta_legend},pageTitle;{url_legend},dns,useSSL,urlPrefix,urlSuffix,validAliasCharacters,useFolderUrl;{language_legend},language,fallback,disableLanguageRedirect;{website_legend:hide},maintenanceMode;{csp_legend},enableCsp;{global_legend:hide},mailerTransport,enableCanonical,adminEmail,dateFormat,timeFormat,datimFormat,staticFiles,staticPlugins;{protected_legend:hide},protected;{layout_legend},includeLayout;{twoFactor_legend:hide},enforceTwoFactor;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{publish_legend},published,start,stop', 'rootfallback' => '{title_legend},title,type;{routing_legend},alias;{meta_legend},pageTitle;{url_legend},dns,useSSL,urlPrefix,urlSuffix,validAliasCharacters,useFolderUrl;{language_legend},language,fallback,disableLanguageRedirect;{website_legend:hide},favicon,robotsTxt,maintenanceMode;{csp_legend},enableCsp;{global_legend:hide},mailerTransport,enableCanonical,adminEmail,dateFormat,timeFormat,datimFormat,staticFiles,staticPlugins;{protected_legend:hide},protected;{layout_legend},includeLayout;{twoFactor_legend:hide},enforceTwoFactor;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{publish_legend},published,start,stop', 'logout' => '{title_legend},title,type;{routing_legend},alias,routePath,routePriority,routeConflicts;{forward_legend},jumpTo,redirectBack;{protected_legend:hide},protected;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass,sitemap,hide;{tabnav_legend:hide},accesskey;{publish_legend},published,start,stop', 'error_401' => '{title_legend},title,type;{meta_legend},pageTitle,robots,description;{forward_legend},autoforward;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass;{publish_legend},published,start,stop', 'error_403' => '{title_legend},title,type;{meta_legend},pageTitle,robots,description;{forward_legend},autoforward;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass;{publish_legend},published,start,stop', 'error_404' => '{title_legend},title,type;{meta_legend},pageTitle,robots,description;{forward_legend},autoforward;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass;{publish_legend},published,start,stop', 'error_503' => '{title_legend},title,type;{meta_legend},pageTitle,robots,description;{forward_legend},autoforward;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass;{publish_legend},published,start,stop'),
    // Sub-palettes
    'subpalettes' => array('autoforward' => 'jumpTo', 'protected' => 'groups', 'includeLayout' => 'layout,subpageLayout', 'includeCache' => 'clientCache,cache,alwaysLoadFromCache', 'includeChmod' => 'cuser,cgroup,chmod', 'enforceTwoFactor' => 'twoFactorJumpTo', 'enableCsp' => 'csp,cspReportOnly,cspReportLog'),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'pid' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'sorting' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'title' => array('search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'basicEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'type' => array('filter' => \true, 'inputType' => 'select', 'eval' => array('helpwizard' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['PTY'], 'sql' => "varchar(64) NOT NULL default 'regular'"), 'alias' => array('search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'folderalias', 'doNotCopy' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) BINARY NOT NULL default ''"), 'requireItem' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'routePath' => array(), 'routePriority' => array('inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "int(10) NOT NULL default 0"), 'routeConflicts' => array(), 'pageTitle' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'basicEntities' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'language' => array('search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'maxlength' => 64, 'nospace' => \true, 'decodeEntities' => \true, 'doNotCopy' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''", 'save_callback' => array(static function ($value) {
        // Make sure there is at least a basic language
        if (!\preg_match('/^[a-z]{2,}/i', $value)) {
            throw new \RuntimeException($GLOBALS['TL_LANG']['ERR']['language']);
        }
        return \Contao\CoreBundle\Util\LocaleUtil::canonicalize($value);
    })), 'robots' => array('search' => \true, 'inputType' => 'select', 'options' => array('index,follow', 'index,nofollow', 'noindex,follow', 'noindex,nofollow'), 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) NOT NULL default ''"), 'description' => array('search' => \true, 'inputType' => 'textarea', 'eval' => array('style' => 'height:60px', 'decodeEntities' => \true, 'tl_class' => 'clr'), 'sql' => "text NULL"), 'serpPreview' => array('label' => &$GLOBALS['TL_LANG']['MSC']['serpPreview'], 'inputType' => 'serpPreview', 'eval' => array('title_tag_callback' => array('tl_page', 'getTitleTag'), 'titleFields' => array('pageTitle', 'title'), 'tl_class' => 'clr'), 'sql' => \null), 'redirect' => array('inputType' => 'select', 'options' => array('permanent', 'temporary'), 'eval' => array('tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['tl_page'], 'sql' => "varchar(32) NOT NULL default 'permanent'"), 'alwaysForward' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'jumpTo' => array(
        'inputType' => 'pageTree',
        'foreignKey' => 'tl_page.title',
        'eval' => array('fieldType' => 'radio'),
        // do not set mandatory (see #5453)
        'save_callback' => array(array('tl_page', 'checkJumpTo')),
        'sql' => "int(10) unsigned NOT NULL default 0",
        'relation' => array('type' => 'hasOne', 'load' => 'lazy'),
    ), 'redirectBack' => array('inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false)), 'url' => array('label' => &$GLOBALS['TL_LANG']['MSC']['url'], 'search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 2048, 'dcaPicker' => \true, 'tl_class' => 'w50 clr'), 'sql' => "varchar(2048) NOT NULL default ''"), 'target' => array('label' => &$GLOBALS['TL_LANG']['MSC']['target'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'dns' => array('search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'load_callback' => array(array('tl_page', 'loadDns')), 'save_callback' => array(array('tl_page', 'checkDns')), 'sql' => "varchar(255) NOT NULL default ''"), 'staticFiles' => array('search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'url', 'trailingSlash' => \false, 'tl_class' => 'w50'), 'save_callback' => array(array('tl_page', 'checkStaticUrl')), 'sql' => "varchar(255) NOT NULL default ''"), 'staticPlugins' => array('search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'url', 'trailingSlash' => \false, 'tl_class' => 'w50'), 'save_callback' => array(array('tl_page', 'checkStaticUrl')), 'sql' => "varchar(255) NOT NULL default ''"), 'fallback' => array('inputType' => 'checkbox', 'eval' => array('doNotCopy' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50 clr'), 'save_callback' => array(array('tl_page', 'checkFallback')), 'sql' => array('type' => 'boolean', 'default' => \false)), 'disableLanguageRedirect' => array('inputType' => 'checkbox', 'eval' => array('doNotCopy' => \true, 'tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'favicon' => array('inputType' => 'fileTree', 'eval' => array('filesOnly' => \true, 'fieldType' => 'radio', 'extensions' => 'ico,svg,png'), 'sql' => "binary(16) NULL"), 'robotsTxt' => array('inputType' => 'textarea', 'eval' => array('doNotCopy' => \true, 'decodeEntities' => \true), 'sql' => "text NULL"), 'maintenanceMode' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'mailerTransport' => array('inputType' => 'select', 'eval' => array('tl_class' => 'w50', 'includeBlankOption' => \true), 'sql' => "varchar(255) NOT NULL default ''"), 'enableCanonical' => array('inputType' => 'checkbox', 'default' => \true, 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'canonicalLink' => array('search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 2048, 'dcaPicker' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(2048) NOT NULL default ''"), 'canonicalKeepParams' => array('inputType' => 'text', 'eval' => array('decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'adminEmail' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'rgxp' => 'friendly', 'decodeEntities' => \true, 'placeholder' => \Contao\Config::get('adminEmail'), 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'dateFormat' => array('search' => \true, 'inputType' => 'text', 'eval' => array('helpwizard' => \true, 'decodeEntities' => \true, 'placeholder' => \Contao\Config::get('dateFormat'), 'tl_class' => 'w50'), 'explanation' => 'dateFormat', 'sql' => "varchar(32) NOT NULL default ''"), 'timeFormat' => array('search' => \true, 'inputType' => 'text', 'eval' => array('decodeEntities' => \true, 'placeholder' => \Contao\Config::get('timeFormat'), 'tl_class' => 'w50'), 'sql' => "varchar(32) NOT NULL default ''"), 'datimFormat' => array('search' => \true, 'inputType' => 'text', 'eval' => array('decodeEntities' => \true, 'placeholder' => \Contao\Config::get('datimFormat'), 'tl_class' => 'w50'), 'sql' => "varchar(32) NOT NULL default ''"), 'validAliasCharacters' => array('inputType' => 'select', 'options_callback' => static function () {
        return \Contao\System::getContainer()->get('contao.slug.valid_characters')->getOptions();
    }, 'eval' => array('includeBlankOption' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'useFolderUrl' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'urlPrefix' => array('inputType' => 'text', 'eval' => array('rgxp' => 'folderalias', 'doNotCopy' => \true, 'maxlength' => 128, 'tl_class' => 'w50'), 'sql' => "varchar(128) BINARY NOT NULL default ''"), 'urlSuffix' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('nospace' => 'true', 'maxlength' => 16, 'tl_class' => 'w50'), 'sql' => "varchar(16) NOT NULL default ''"), 'useSSL' => array('inputType' => 'select', 'options' => array('http://', 'https://'), 'eval' => array('tl_class' => 'w50', 'isAssociative' => \true), 'sql' => array('type' => 'boolean', 'default' => \true)), 'autoforward' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'protected' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'groups' => array('filter' => \true, 'inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('mandatory' => \true, 'multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy')), 'includeLayout' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'layout' => array('search' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_layout.name', 'eval' => array('chosen' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'subpageLayout' => array('search' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_layout.name', 'eval' => array('chosen' => \true, 'tl_class' => 'w50', 'includeBlankOption' => \true, 'blankOptionLabel' => &$GLOBALS['TL_LANG']['tl_page']['layout_inherit']), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'includeCache' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'cache' => array('search' => \true, 'inputType' => 'select', 'options' => array(0, 5, 15, 30, 60, 300, 900, 1800, 3600, 10800, 21600, 43200, 86400, 259200, 604800, 2592000, 7776000, 15552000, 31536000), 'reference' => &$GLOBALS['TL_LANG']['CACHE'], 'eval' => array('tl_class' => 'w50 clr'), 'sql' => "int(10) unsigned NOT NULL default 0"), 'alwaysLoadFromCache' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'clientCache' => array('search' => \true, 'inputType' => 'select', 'options' => array(0, 5, 15, 30, 60, 300, 900, 1800, 3600, 10800, 21600, 43200, 86400, 259200, 604800, 2592000), 'reference' => &$GLOBALS['TL_LANG']['CACHE'], 'eval' => array('tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0"), 'includeChmod' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'cuser' => array('default' => (int) \Contao\Config::get('defaultUser'), 'search' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_user.name', 'eval' => array('mandatory' => \true, 'chosen' => \true, 'includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'cgroup' => array('default' => (int) \Contao\Config::get('defaultGroup'), 'search' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_user_group.name', 'eval' => array('mandatory' => \true, 'chosen' => \true, 'includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'chmod' => array('default' => \Contao\Config::get('defaultChmod'), 'inputType' => 'chmod', 'eval' => array('tl_class' => 'clr'), 'sql' => "varchar(255) NOT NULL default ''"), 'noSearch' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'cssClass' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 64, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''"), 'sitemap' => array('inputType' => 'select', 'options' => array('map_default', 'map_always', 'map_never'), 'eval' => array('maxlength' => 32, 'tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['tl_page'], 'sql' => "varchar(32) NOT NULL default ''"), 'hide' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'accesskey' => array('search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'alnum', 'maxlength' => 1, 'tl_class' => 'w50'), 'sql' => "char(1) NOT NULL default ''"), 'published' => array('toggle' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'eval' => array('doNotCopy' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'start' => array('inputType' => 'text', 'eval' => array('rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(10) NOT NULL default ''"), 'stop' => array('inputType' => 'text', 'eval' => array('rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(10) NOT NULL default ''"), 'enforceTwoFactor' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'twoFactorJumpTo' => array('inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio', 'mandatory' => \true), 'save_callback' => array(array('tl_page', 'checkJumpTo')), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'enableCsp' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'csp' => array('inputType' => 'textarea', 'default' => "default-src 'self'", 'eval' => array('mandatory' => \true, 'decodeEntities' => \true), 'sql' => array('type' => 'text', 'notnull' => \false)), 'cspReportOnly' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'cspReportLog' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false))),
);
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @internal
 */
class tl_page extends \Contao\Backend
{
    /**
     * Check permissions to edit table tl_page
     *
     * @throws AccessDeniedException
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
            $root = array(0);
        } else {
            $root = $user->pagemounts;
        }
        $GLOBALS['TL_DCA']['tl_page']['list']['sorting']['rootPaste'] = \false;
        $GLOBALS['TL_DCA']['tl_page']['list']['sorting']['root'] = $root;
    }
    /**
     * Add the breadcrumb menu
     */
    public function addBreadcrumb()
    {
        \Contao\Backend::addPagesBreadcrumb();
    }
    /**
     * Make new top-level pages root pages
     *
     * @param DataContainer $dc
     */
    public function setRootType(\Contao\DataContainer $dc)
    {
        if (\Contao\Input::get('act') != 'create') {
            return;
        }
        // Insert into
        if (\Contao\Input::get('pid') == 0) {
            $GLOBALS['TL_DCA']['tl_page']['fields']['type']['default'] = 'root';
        } elseif (\Contao\Input::get('mode') == 1) {
            $objPage = \Contao\Database::getInstance()->prepare("SELECT * FROM " . $dc->table . " WHERE id=?")->limit(1)->execute(\Contao\Input::get('pid'));
            if ($objPage->pid == 0) {
                $GLOBALS['TL_DCA']['tl_page']['fields']['type']['default'] = 'root';
            }
        }
    }
    /**
     * Return the title tag from the associated page layout
     *
     * @param PageModel $page
     *
     * @return string
     */
    public function getTitleTag(\Contao\PageModel $page)
    {
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
     * Show a warning if there is no language fallback page
     */
    public function showFallbackWarning()
    {
        if (\in_array(\Contao\Input::get('act'), array('paste', 'select', \null))) {
            $messages = new \Contao\Messages();
            \Contao\Message::addRaw($messages->languageFallback());
        }
    }
    /**
     * Schedule a sitemap update
     *
     * This method is triggered when a single page or multiple pages are
     * modified (edit/editAll), moved (cut/cutAll) or deleted
     * (delete/deleteAll). Since duplicated pages are unpublished by default,
     * it is not necessary to schedule updates on copyAll as well.
     *
     * @param DataContainer $dc
     */
    public function scheduleUpdate(\Contao\DataContainer $dc)
    {
        // Return if there is no ID
        if (!$dc->activeRecord?->id || \Contao\Input::get('act') == 'copy') {
            return;
        }
        $objSession = \Contao\System::getContainer()->get('request_stack')->getSession();
        // Store the ID in the session
        $session = $objSession->get('sitemap_updater');
        $session[] = \Contao\PageModel::findWithDetails($dc->activeRecord->id)->rootId;
        $objSession->set('sitemap_updater', \array_unique($session));
    }
    /**
     * Check the sitemap alias
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function checkFeedAlias($varValue, \Contao\DataContainer $dc)
    {
        // No change or empty value
        if (!$varValue || $varValue == $dc->value) {
            return $varValue;
        }
        $varValue = \Contao\StringUtil::standardize($varValue);
        // see #5096
        $arrFeeds = (new \Contao\Automator())->purgeXmlFiles(\true);
        // Alias exists
        if (\in_array($varValue, $arrFeeds)) {
            throw new \Exception(\sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
        }
        return $varValue;
    }
    /**
     * Prevent circular references
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function checkJumpTo($varValue, \Contao\DataContainer $dc)
    {
        if ($varValue == $dc->id) {
            throw new \Exception($GLOBALS['TL_LANG']['ERR']['circularReference']);
        }
        return $varValue;
    }
    /**
     * Load the DNS settings
     *
     * @param string $varValue
     *
     * @return string
     */
    public function loadDns($varValue)
    {
        return \Contao\Idna::decode($varValue);
    }
    /**
     * Check the DNS settings
     *
     * @param string $varValue
     *
     * @return string
     */
    public function checkDns($varValue)
    {
        if (!$varValue) {
            return '';
        }
        // The first part will match IPv6 addresses in square brackets. The
        // second part will match domain names and IPv4 addresses.
        \preg_match('#^(?:[a-z]+://)?(\\[[0-9a-f:]+]|[\\pN\\pL._-]*)#ui', $varValue, $matches);
        return \Contao\Idna::encode($matches[1]);
    }
    /**
     * Make sure there is only one fallback per domain (thanks to Andreas Schempp)
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function checkFallback($varValue, \Contao\DataContainer $dc)
    {
        if (!$varValue) {
            return '';
        }
        $objPage = \Contao\Database::getInstance()->prepare("SELECT id FROM tl_page WHERE type='root' AND fallback=1 AND dns=? AND id!=?")->execute($dc->activeRecord->dns, $dc->activeRecord->id);
        if ($objPage->numRows) {
            throw new \Exception($GLOBALS['TL_LANG']['ERR']['multipleFallback']);
        }
        return $varValue;
    }
    /**
     * Check a static URL
     *
     * @param mixed $varValue
     *
     * @return mixed
     */
    public function checkStaticUrl($varValue)
    {
        if ($varValue) {
            $varValue = \preg_replace('@https?://@', '', $varValue);
        }
        return $varValue;
    }
    /**
     * Add an image to each page in the tree
     *
     * @param array         $row
     * @param string        $label
     * @param DataContainer $dc
     * @param string        $imageAttribute
     * @param boolean       $blnReturnImage
     * @param boolean       $blnProtected
     * @param boolean       $isVisibleRootTrailPage
     *
     * @return string
     */
    public function addIcon($row, $label, \Contao\DataContainer|null $dc = \null, $imageAttribute = '', $blnReturnImage = \false, $blnProtected = \false, $isVisibleRootTrailPage = \false)
    {
        return \Contao\Backend::addPageIcon($row, $label, $dc, $imageAttribute, $blnReturnImage, $blnProtected, $isVisibleRootTrailPage);
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
        if (!$security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_EDIT_FIELD_OF_TABLE, 'tl_page::alias')) {
            return $arrButtons;
        }
        // Generate the aliases
        if (\Contao\Input::post('alias') !== \null && \Contao\Input::post('FORM_SUBMIT') == 'tl_select') {
            $router = \Contao\System::getContainer()->get('router');
            $objSession = \Contao\System::getContainer()->get('request_stack')->getSession();
            $session = $objSession->all();
            $ids = $session['CURRENT']['IDS'] ?? array();
            foreach ($ids as $id) {
                $objPage = \Contao\PageModel::findWithDetails($id);
                if ($objPage === \null) {
                    continue;
                }
                $dc->id = $id;
                $dc->activeRecord = $objPage;
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
                if ($strAlias == $objPage->alias) {
                    continue;
                }
                if (!$security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::DC_PREFIX . 'tl_article', new \Contao\CoreBundle\Security\DataContainer\UpdateAction('tl_page', $objPage->row(), array('alias' => $strAlias)))) {
                    continue;
                }
                // Initialize the version manager
                $objVersions = new \Contao\Versions('tl_page', $id);
                $objVersions->setEditUrl($router->generate('contao_backend', array('do' => 'page', 'act' => 'edit', 'id' => $id, 'rt' => '1')));
                $objVersions->initialize();
                // Store the new alias
                \Contao\Database::getInstance()->prepare("UPDATE tl_page SET alias=? WHERE id=?")->execute($strAlias, $id);
                // Create a new version
                $objVersions->create();
                // Update the record stored in the page registry (see #6542)
                \Contao\PageModel::findById($id)->alias = $strAlias;
            }
            $this->redirect($this->getReferer());
        }
        // Add the button
        $arrButtons['alias'] = '<button type="submit" name="alias" id="alias" class="tl_submit" accesskey="a">' . $GLOBALS['TL_LANG']['MSC']['aliasSelected'] . '</button> ';
        return $arrButtons;
    }
    /**
     * @param DataContainer $dc
     *
     * @return array
     */
    public function addSitemapCacheInvalidationTag($dc, array $tags)
    {
        $pageModel = \Contao\PageModel::findWithDetails($dc->id);
        if ($pageModel === \null) {
            return $tags;
        }
        return \array_merge($tags, array('contao.sitemap.' . $pageModel->rootId));
    }
}
}

namespace {
/*
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['folder'] = '{title_legend},title,type;{meta_legend},pageTitle;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass,sitemap,hide,guests;{publish_legend},published';
/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['hide']['eval']['tl_class'] = 'clr w50';
}

namespace {
\Contao\System::loadLanguageFile('tl_cookiebar');
// Palettes
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'activateCookiebar';
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'overwriteCookiebarMeta';
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'triggerCookiebar';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['activateCookiebar'] = 'cookiebarConfig,overwriteCookiebarMeta';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['overwriteCookiebarMeta'] = 'cookiebarDescription,cookiebarInfoDescription,cookiebarAlignment,cookiebarButtonColorScheme,cookiebarBlocking,cookiebarHideOnInit,cookiebarInfoUrls,cookiebarExcludePages,cookiebarTemplate';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['triggerCookiebar'] = 'prefillCookies';
// Overwrite cssClass eval
$GLOBALS['TL_DCA']['tl_page']['fields']['cssClass']['eval']['alwaysSave'] = \true;
// Fields
$GLOBALS['TL_DCA']['tl_page']['fields']['activateCookiebar'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50', 'submitOnChange' => \true], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['triggerCookiebar'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50', 'submitOnChange' => \true], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['prefillCookies'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['overwriteCookiebarMeta'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12', 'submitOnChange' => \true], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebarConfig'] = ['exclude' => \true, 'inputType' => 'select', 'eval' => ['mandatory' => \true, 'tl_class' => 'w50'], 'sql' => "varchar(64) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebarDescription'] = ['exclude' => \true, 'inputType' => 'textarea', 'eval' => ['rte' => 'tinyMCE', 'helpwizard' => \true, 'tl_class' => 'w50'], 'explanation' => 'insertTags', 'sql' => "mediumtext NULL"];
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebarInfoDescription'] = ['exclude' => \true, 'inputType' => 'textarea', 'eval' => ['rte' => 'tinyMCE', 'helpwizard' => \true, 'tl_class' => 'w50'], 'explanation' => 'insertTags', 'sql' => "mediumtext NULL"];
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebarInfoUrls'] = ['exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => ['multiple' => \true, 'fieldType' => 'checkbox', 'tl_class' => 'w50 clr'], 'relation' => ['type' => 'hasOne', 'load' => 'lazy'], 'sql' => "blob NULL"];
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebarExcludePages'] = ['exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => ['multiple' => \true, 'fieldType' => 'checkbox', 'tl_class' => 'w50'], 'relation' => ['type' => 'hasOne', 'load' => 'lazy'], 'sql' => "blob NULL"];
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebarTemplate'] = ['exclude' => \true, 'inputType' => 'select', 'eval' => ['tl_class' => 'w50'], 'sql' => "varchar(64) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebarButtonColorScheme'] = ['exclude' => \true, 'inputType' => 'select', 'options' => ['grayscale', 'highlight'], 'reference' => $GLOBALS['TL_LANG']['tl_cookiebar'], 'eval' => ['includeBlankOption' => \true, 'blankOptionLabel' => $GLOBALS['TL_LANG']['tl_cookiebar']['neutral'], 'tl_class' => 'w50'], 'sql' => "varchar(32) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebarAlignment'] = ['exclude' => \true, 'inputType' => 'select', 'options' => ['cc-top' => 'align-top', 'cc-top cc-left' => 'align-top-left', 'cc-top cc-right' => 'align-top-right', 'cc-middle' => 'align-middle', 'cc-bottom' => 'align-bottom', 'cc-bottom cc-left' => 'align-bottom-left', 'cc-bottom cc-right' => 'align-bottom-right'], 'reference' => $GLOBALS['TL_LANG']['tl_cookiebar'], 'eval' => ['tl_class' => 'w50 clr'], 'sql' => "varchar(32) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebarBlocking'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 clr'], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebarHideOnInit'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => "char(1) NOT NULL default ''"];
// Extend the default palettes
$objPaletteManipulator = \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('cookiebar_legend', 'global_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER, \true)->addField(['activateCookiebar'], 'cookiebar_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('root', 'tl_page');
if (\array_key_exists('rootfallback', $GLOBALS['TL_DCA']['tl_page']['palettes'])) {
    $objPaletteManipulator->applyToPalette('rootfallback', 'tl_page');
}
$objPaletteManipulator = \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('cookiebar_legend', 'redirect_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER, \true)->addField(['triggerCookiebar'], 'cookiebar_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('forward', 'tl_page');
}

namespace {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['news_feed'] = '{title_legend},title,type;{routing_legend},alias,routePath,routePriority,routeConflicts;{archives_legend},newsArchives;{feed_legend},feedFormat,feedSource,maxFeedItems,feedFeatured,feedDescription;{image_legend},imgSize;{cache_legend:hide},includeCache;{expert_legend:hide},cssClass,sitemap,hide,noSearch;{publish_legend},published,start,stop';
$GLOBALS['TL_DCA']['tl_page']['fields']['newsArchives'] = array('exclude' => \true, 'search' => \true, 'inputType' => 'checkbox', 'eval' => array('multiple' => \true, 'mandatory' => \true), 'sql' => "blob NULL");
$GLOBALS['TL_DCA']['tl_page']['fields']['feedFormat'] = array('exclude' => \true, 'filter' => \true, 'inputType' => 'select', 'options' => array('rss' => 'RSS 2.0', 'atom' => 'Atom', 'json' => 'JSON'), 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'rss'");
$GLOBALS['TL_DCA']['tl_page']['fields']['feedSource'] = array('exclude' => \true, 'inputType' => 'select', 'options' => array('source_teaser', 'source_text'), 'reference' => &$GLOBALS['TL_LANG']['tl_page'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'source_teaser'");
$GLOBALS['TL_DCA']['tl_page']['fields']['maxFeedItems'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 25");
$GLOBALS['TL_DCA']['tl_page']['fields']['feedFeatured'] = array('exclude' => \true, 'inputType' => 'select', 'options' => array('all_items', 'featured', 'unfeatured'), 'reference' => &$GLOBALS['TL_LANG']['tl_page'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'all_items'");
$GLOBALS['TL_DCA']['tl_page']['fields']['feedDescription'] = array('exclude' => \true, 'inputType' => 'textarea', 'eval' => array('style' => 'height:60px', 'tl_class' => 'clr'), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_page']['fields']['imgSize'] = array('label' => &$GLOBALS['TL_LANG']['MSC']['imgSize'], 'exclude' => \true, 'inputType' => 'imageSize', 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('rgxp' => 'natural', 'includeBlankOption' => \true, 'nospace' => \true, 'helpwizard' => \true, 'tl_class' => 'w50'), 'options_callback' => array('contao.listener.image_size_options', '__invoke'), 'sql' => "varchar(255) NOT NULL default ''");
}

namespace {
$pm = \Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('image_legend', 'meta_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE, \true)->addField(['pageImage', 'pageImageOverwriteMeta'], 'image_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND);
foreach ($GLOBALS['TL_DCA']['tl_page']['palettes'] as $name => $palette) {
    if (\in_array($name, ['__selector__', 'news_feed'], \true)) {
        continue;
    }
    $pm->applyToPalette($name, 'tl_page');
    $GLOBALS['TL_DCA']['tl_page']['fields']['type']['eval']['gallery_types'][] = $name;
}
unset($name, $palette, $pm);
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'pageImageOverwriteMeta';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['pageImageOverwriteMeta'] = 'pageImageUrl,pageImageTitle,pageImageAlt';
/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['pageImage'] = ['label' => &$GLOBALS['TL_LANG']['tl_page']['pageImage'], 'inputType' => 'fileTree', 'exclude' => \true, 'eval' => ['fieldType' => 'checkbox', 'orderField' => 'pageImageOrder', 'multiple' => \true, 'files' => \true, 'filesOnly' => \true, 'extensions' => \Contao\Config::get('validImageTypes'), 'isGallery' => \true], 'sql' => 'blob NULL'];
// field is used to store the order of the list of images in pageImage
$GLOBALS['TL_DCA']['tl_page']['fields']['pageImageOrder'] = ['eval' => ['doNotShow' => \true], 'sql' => 'blob NULL'];
$GLOBALS['TL_DCA']['tl_page']['fields']['pageImageUrl'] = ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 255, 'dcaPicker' => \true, 'addWizardClass' => \false, 'tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['pageImageOverwriteMeta'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['submitOnChange' => \true, 'tl_class' => 'w50 clr'], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['pageImageAlt'] = ['inputType' => 'text', 'exclude' => \true, 'eval' => ['maxlength' => 255, 'tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['pageImageTitle'] = ['inputType' => 'text', 'exclude' => \true, 'eval' => ['maxlength' => 255, 'tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
}

namespace {
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('ac_legend', 'layout_legend')->addField('ac_set', 'ac_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('ac_defaultColumnWidth', 'ac_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('ac_disableCSS', 'ac_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('root', 'tl_page')->applyToPalette('rootfallback', 'tl_page');
$GLOBALS['TL_DCA']['tl_page']['fields']['ac_set'] = ['inputType' => 'select', 'reference' => &$GLOBALS['TL_LANG']['tl_page'], 'eval' => ['tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_page']['fields']['ac_defaultColumnWidth'] = ['inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 clr'], 'sql' => ['type' => 'boolean', 'default' => \false]];
$GLOBALS['TL_DCA']['tl_page']['fields']['ac_disableCSS'] = ['inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'boolean', 'default' => \false]];
}

namespace {
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('newsCategories_legend', 'global_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER, \true)->addField('newsCategories_param', 'newsCategories_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('root', 'tl_page')->applyToPalette('rootfallback', 'tl_page');
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField(['newsCategories', 'newsCategories_show'], 'newsArchives')->applyToPalette('news_feed', 'tl_page');
/*
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['newsCategories_param'] = ['label' => &$GLOBALS['TL_LANG']['tl_page']['newsCategories_param'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 64, 'rgxp' => 'alias', 'tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 64, 'default' => '']];
$GLOBALS['TL_DCA']['tl_page']['fields']['newsCategories'] = ['exclude' => \true, 'filter' => \true, 'inputType' => 'picker', 'foreignKey' => 'tl_news_category.title', 'eval' => ['multiple' => \true, 'fieldType' => 'checkbox'], 'sql' => ['type' => 'blob', 'notnull' => \false], 'relation' => ['type' => 'hasMany', 'load' => 'lazy']];
$GLOBALS['TL_DCA']['tl_page']['fields']['newsCategories_show'] = ['exclude' => \true, 'filter' => \true, 'inputType' => 'select', 'options' => ['title', 'text_before', 'text_after'], 'reference' => &$GLOBALS['TL_LANG']['tl_page']['newsCategories_show'], 'eval' => ['includeBlankOption' => \true, 'blankOptionLabel' => $GLOBALS['TL_LANG']['tl_page']['newsCategories_show']['empty'] ?? \null, 'tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 16, 'default' => '']];
}

namespace {
/**
 *  apply new field for the root page
 */
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('wcag_legend', 'publish_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE)->addField('enable_high_contrast', 'wcag_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('enable_font_size', 'wcag_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('enable_font_size_switcher', 'wcag_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('font_size_comment_page', 'wcag_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('rootfallback', 'tl_page');
/*
 * Add fields to tl_page
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['enable_high_contrast'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'boolean', 'default' => \true]];
$GLOBALS['TL_DCA']['tl_page']['fields']['enable_font_size'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'boolean', 'default' => \true]];
$GLOBALS['TL_DCA']['tl_page']['fields']['enable_font_size_switcher'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'boolean', 'default' => \true]];
$GLOBALS['TL_DCA']['tl_page']['fields']['font_size_comment_page'] = ['exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => ['multiple' => \false, 'fieldType' => 'radio', 'tl_class' => 'clr'], 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')];
}
