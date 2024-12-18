<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'name' => 'varchar(255) NOT NULL default \'\'',
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
  'alexf' => 'blob NULL',
  'disable' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
  'faqs' => 'blob NULL',
  'faqp' => 'blob NULL',
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
  'newscategories_default' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
  'newscategories_roots' => 
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
  0 => 'name',
);

$this->arrKeys = array (
  'id' => 'primary',
  'tstamp' => 'index',
);

$this->arrRelations = array (
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
  'newscategories_default' => 
  array (
    'table' => 'tl_news_category',
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
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
