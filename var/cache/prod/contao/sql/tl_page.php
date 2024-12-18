<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default 0',
  'sorting' => 'int(10) unsigned NOT NULL default 0',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'type' => 'varchar(64) NOT NULL default \'regular\'',
  'alias' => 'varchar(255) BINARY NOT NULL default \'\'',
  'requireItem' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'routePriority' => 'int(10) NOT NULL default 0',
  'pageTitle' => 'varchar(255) NOT NULL default \'\'',
  'language' => 'varchar(64) NOT NULL default \'\'',
  'robots' => 'varchar(32) NOT NULL default \'\'',
  'description' => 'text NULL',
  'redirect' => 'varchar(32) NOT NULL default \'permanent\'',
  'alwaysForward' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'jumpTo' => 'int(10) unsigned NOT NULL default 0',
  'redirectBack' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'url' => 'varchar(2048) NOT NULL default \'\'',
  'target' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'dns' => 'varchar(255) NOT NULL default \'\'',
  'staticFiles' => 'varchar(255) NOT NULL default \'\'',
  'staticPlugins' => 'varchar(255) NOT NULL default \'\'',
  'fallback' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'disableLanguageRedirect' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'favicon' => 'binary(16) NULL',
  'robotsTxt' => 'text NULL',
  'maintenanceMode' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'mailerTransport' => 'varchar(255) NOT NULL default \'\'',
  'enableCanonical' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'canonicalLink' => 'varchar(2048) NOT NULL default \'\'',
  'canonicalKeepParams' => 'varchar(255) NOT NULL default \'\'',
  'adminEmail' => 'varchar(255) NOT NULL default \'\'',
  'dateFormat' => 'varchar(32) NOT NULL default \'\'',
  'timeFormat' => 'varchar(32) NOT NULL default \'\'',
  'datimFormat' => 'varchar(32) NOT NULL default \'\'',
  'validAliasCharacters' => 'varchar(255) NOT NULL default \'\'',
  'useFolderUrl' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'urlPrefix' => 'varchar(128) BINARY NOT NULL default \'\'',
  'urlSuffix' => 'varchar(16) NOT NULL default \'\'',
  'useSSL' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'autoforward' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'protected' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'groups' => 'blob NULL',
  'includeLayout' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'layout' => 'int(10) unsigned NOT NULL default 0',
  'subpageLayout' => 'int(10) unsigned NOT NULL default 0',
  'includeCache' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cache' => 'int(10) unsigned NOT NULL default 0',
  'alwaysLoadFromCache' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'clientCache' => 'int(10) unsigned NOT NULL default 0',
  'includeChmod' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cuser' => 'int(10) unsigned NOT NULL default 0',
  'cgroup' => 'int(10) unsigned NOT NULL default 0',
  'chmod' => 'varchar(255) NOT NULL default \'\'',
  'noSearch' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cssClass' => 'varchar(64) NOT NULL default \'\'',
  'sitemap' => 'varchar(32) NOT NULL default \'\'',
  'hide' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'accesskey' => 'char(1) NOT NULL default \'\'',
  'published' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
  'enforceTwoFactor' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'twoFactorJumpTo' => 'int(10) unsigned NOT NULL default 0',
  'enableCsp' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'csp' => 
  array (
    'type' => 'text',
    'notnull' => false,
  ),
  'cspReportOnly' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cspReportLog' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'activateCookiebar' => 'char(1) NOT NULL default \'\'',
  'triggerCookiebar' => 'char(1) NOT NULL default \'\'',
  'prefillCookies' => 'char(1) NOT NULL default \'\'',
  'overwriteCookiebarMeta' => 'char(1) NOT NULL default \'\'',
  'cookiebarConfig' => 'varchar(64) NOT NULL default \'\'',
  'cookiebarDescription' => 'mediumtext NULL',
  'cookiebarInfoDescription' => 'mediumtext NULL',
  'cookiebarInfoUrls' => 'blob NULL',
  'cookiebarExcludePages' => 'blob NULL',
  'cookiebarTemplate' => 'varchar(64) NOT NULL default \'\'',
  'cookiebarButtonColorScheme' => 'varchar(32) NOT NULL default \'\'',
  'cookiebarAlignment' => 'varchar(32) NOT NULL default \'\'',
  'cookiebarBlocking' => 'char(1) NOT NULL default \'\'',
  'cookiebarHideOnInit' => 'char(1) NOT NULL default \'\'',
  'newsArchives' => 'blob NULL',
  'feedFormat' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'rss\'',
  'feedSource' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'source_teaser\'',
  'maxFeedItems' => 'smallint(5) unsigned NOT NULL default 25',
  'feedFeatured' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'all_items\'',
  'feedDescription' => 'text NULL',
  'imgSize' => 'varchar(255) NOT NULL default \'\'',
  'pageImage' => 'blob NULL',
  'pageImageOrder' => 'blob NULL',
  'pageImageUrl' => 'varchar(255) NOT NULL default \'\'',
  'pageImageOverwriteMeta' => 'char(1) NOT NULL default \'\'',
  'pageImageAlt' => 'varchar(255) NOT NULL default \'\'',
  'pageImageTitle' => 'varchar(255) NOT NULL default \'\'',
  'ac_set' => 'varchar(255) NOT NULL default \'\'',
  'ac_defaultColumnWidth' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'ac_disableCSS' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'newsCategories_param' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'newsCategories' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
  'newsCategories_show' => 
  array (
    'type' => 'string',
    'length' => 16,
    'default' => '',
  ),
  'enable_high_contrast' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'enable_font_size' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'enable_font_size_switcher' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'font_size_comment_page' => 'int(10) unsigned NOT NULL default 0',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'tstamp' => 'index',
  'alias' => 'index',
  'type,dns,fallback,published,start,stop' => 'index',
  'pid,published,type,start,stop' => 'index',
);

$this->arrRelations = array (
  'jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'groups' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'layout' => 
  array (
    'table' => 'tl_layout',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'subpageLayout' => 
  array (
    'table' => 'tl_layout',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'cuser' => 
  array (
    'table' => 'tl_user',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'cgroup' => 
  array (
    'table' => 'tl_user_group',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'twoFactorJumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'cookiebarInfoUrls' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'cookiebarExcludePages' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'newsCategories' => 
  array (
    'table' => 'tl_news_category',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'font_size_comment_page' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
