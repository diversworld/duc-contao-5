<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'username' => 'varchar(64) BINARY NULL',
  'name' => 'varchar(255) NOT NULL default \'\'',
  'email' => 'varchar(255) NOT NULL default \'\'',
  'language' => 'varchar(64) NOT NULL default \'\'',
  'backendTheme' => 'varchar(32) NOT NULL default \'\'',
  'uploader' => 'varchar(32) NOT NULL default \'\'',
  'showHelp' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'thumbnails' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'useRTE' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'useCE' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'doNotCollapse' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'password' => 'varchar(255) NOT NULL default \'\'',
  'pwChange' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'admin' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'groups' => 'blob NULL',
  'inherit' => 'varchar(12) NOT NULL default \'group\'',
  'modules' => 'blob NULL',
  'themes' => 'blob NULL',
  'elements' => 'blob NULL',
  'fields' => 'blob NULL',
  'frontendModules' => 'blob NULL',
  'pagemounts' => 'blob NULL',
  'alpty' => 'blob NULL',
  'filemounts' => 'blob NULL',
  'fop' => 'blob NULL',
  'imageSizes' => 'blob NULL',
  'forms' => 'blob NULL',
  'formp' => 'blob NULL',
  'amg' => 'blob NULL',
  'disable' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
  'session' => 'blob NULL',
  'dateAdded' => 'int(10) unsigned NOT NULL default 0',
  'secret' => 'binary(128) NULL default NULL',
  'useTwoFactor' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'lastLogin' => 'int(10) unsigned NOT NULL default 0',
  'currentLogin' => 'int(10) unsigned NOT NULL default 0',
  'backupCodes' => 'text NULL',
  'trustedTokenVersion' => 'int(10) unsigned NOT NULL default 0',
  'gcImageResolution' => 'varchar(12) NOT NULL default \'no_scaling\'',
  'gcImageQuality' => 'smallint(3) unsigned NOT NULL default \'100\'',
  'faqs' => 'blob NULL',
  'faqp' => 'blob NULL',
  'pwResetToken' => 'varchar(256) NOT NULL default \'\'',
  'pwResetLifetime' => 'int(10) unsigned NOT NULL default 0',
  'news' => 'blob NULL',
  'newp' => 'blob NULL',
  'leadp' => 'blob NULL',
  'calendars' => 'blob NULL',
  'calendarp' => 'blob NULL',
  'calendarfeeds' => 'blob NULL',
  'calendarfeedp' => 'blob NULL',
  'newsletters' => 'blob NULL',
  'newsletterp' => 'blob NULL',
  'newscategories' => 
  array (
    'type' => 'string',
    'length' => 32,
    'default' => '',
  ),
  'newscategories_roots' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
  'newscategories_default' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
  'nodeMounts' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
  'nodePermissions' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
  'maeEventCat' => 'varchar(32) NOT NULL default \'\'',
  'maeEventCatDefault' => 'blob NULL',
);

$this->arrUniqueFields = array (
  0 => 'username',
  1 => 'email',
);

$this->arrKeys = array (
  'id' => 'primary',
  'tstamp' => 'index',
  'username' => 'unique',
  'email' => 'index',
);

$this->arrRelations = array (
  'groups' => 
  array (
    'table' => 'tl_user_group',
    'field' => 'id',
    'type' => 'belongsToMany',
    'load' => 'lazy',
  ),
  'pagemounts' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'forms' => 
  array (
    'table' => 'tl_form',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'amg' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'faqs' => 
  array (
    'table' => 'tl_faq_category',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'news' => 
  array (
    'table' => 'tl_news_archive',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'calendars' => 
  array (
    'table' => 'tl_calendar',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'calendarfeeds' => 
  array (
    'table' => 'tl_calendar_feed',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'newsletters' => 
  array (
    'table' => 'tl_newsletter_channel',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'newscategories_roots' => 
  array (
    'table' => 'tl_news_category',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'newscategories_default' => 
  array (
    'table' => 'tl_news_category',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;