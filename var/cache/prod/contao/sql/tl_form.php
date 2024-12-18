<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'fpFill' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'fpConfigs' => 
  array (
    'type' => 'blob',
    'length' => 65535,
    'notnull' => false,
  ),
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'alias' => 'varchar(255) BINARY NOT NULL default \'\'',
  'jumpTo' => 'int(10) unsigned NOT NULL default 0',
  'confirmation' => 'text NULL',
  'sendViaEmail' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'mailerTransport' => 'varchar(255) NOT NULL default \'\'',
  'recipient' => 'varchar(1022) NOT NULL default \'\'',
  'subject' => 'varchar(255) NOT NULL default \'\'',
  'format' => 'varchar(12) NOT NULL default \'raw\'',
  'skipEmpty' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'storeValues' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'targetTable' => 'varchar(64) NOT NULL default \'\'',
  'customTpl' => 'varchar(64) NOT NULL default \'\'',
  'method' => 'varchar(12) NOT NULL default \'POST\'',
  'novalidate' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'attributes' => 'varchar(255) NOT NULL default \'\'',
  'formID' => 'varchar(64) NOT NULL default \'\'',
  'ajax' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'allowTags' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pdff_on' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'pdff_vorlage' => 
  array (
    'type' => 'binary',
    'length' => 16,
    'fixed' => true,
    'notnull' => false,
  ),
  'pdff_handler' => 
  array (
    'type' => 'string',
    'length' => 5,
    'default' => '',
  ),
  'pdff_savepath' => 
  array (
    'type' => 'binary',
    'length' => 16,
    'fixed' => true,
    'notnull' => false,
  ),
  'pdff_userhome' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'pdff_fileext' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '_{{date::ymd_His}}',
  ),
  'pdff_allpages' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'pdff_offset' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'pdff_textcolor' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'pdff_title' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'pdff_author' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'pdff_protect' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'pdff_openpassword' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'pdff_password' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'pdff_protectflags' => 'blob NULL',
  'pdff_multiform' => 'mediumtext NULL',
  'pdff_font' => 
  array (
    'type' => 'binary',
    'length' => 16,
    'fixed' => true,
    'notnull' => false,
  ),
  'pdff_fontb' => 
  array (
    'type' => 'binary',
    'length' => 16,
    'fixed' => true,
    'notnull' => false,
  ),
  'pdff_fonti' => 
  array (
    'type' => 'binary',
    'length' => 16,
    'fixed' => true,
    'notnull' => false,
  ),
  'pdff_fontbi' => 
  array (
    'type' => 'binary',
    'length' => 16,
    'fixed' => true,
    'notnull' => false,
  ),
  'leadEnabled' => 'char(1) NOT NULL default \'\'',
  'leadMain' => 'int(10) unsigned NOT NULL default 0',
  'leadMenuLabel' => 'varchar(64) NOT NULL default \'\'',
  'leadLabel' => 'text NULL',
  'leadPeriod' => 'varchar(64) NOT NULL default \'\'',
  'leadPurgeUploads' => 'char(1) NOT NULL default \'\'',
  'nc_notification' => 
  array (
    'type' => 'integer',
    'default' => 0,
    'unsigned' => true,
  ),
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
  'leadOptIn' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'leadOptInStoreIp' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'leadOptInNotification' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'default' => 0,
  ),
  'leadOptInTarget' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'default' => 0,
  ),
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'tstamp' => 'index',
  'alias' => 'index',
  'leadEnabled,leadMain' => 'index',
);

$this->arrRelations = array (
  'jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'leadOptInTarget' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'eager',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
