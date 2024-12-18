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
  'identifier' => 'varchar(255) NOT NULL default \'\'',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'token' => 'varchar(255) NOT NULL default \'\'',
  'showTokens' => 'char(1) NOT NULL default \'\'',
  'expireTime' => 'varchar(255) NOT NULL default \'\'',
  'showExpireTime' => 'char(1) NOT NULL default \'1\'',
  'provider' => 'varchar(255) NOT NULL default \'\'',
  'showProvider' => 'char(1) NOT NULL default \'1\'',
  'type' => 
  array (
    'name' => 'type',
    'type' => 'string',
    'length' => 64,
    'default' => 'text',
  ),
  'iframeType' => 
  array (
    'name' => 'iframeType',
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'blockTemplate' => 'varchar(64) NOT NULL default \'\'',
  'scriptTemplate' => 'varchar(64) NOT NULL default \'\'',
  'vendorId' => 'varchar(255) NOT NULL default \'\'',
  'vendorUrl' => 'varchar(255) NOT NULL default \'\'',
  'description' => 'mediumtext NULL',
  'detailDescription' => 'mediumtext NULL',
  'blockDescription' => 'mediumtext NULL',
  'sourceUrl' => 'varchar(255) NOT NULL default \'\'',
  'sourceLoadingMode' => 'char(1) NOT NULL default \'\'',
  'sourceUrlParameter' => 'varchar(255) NOT NULL default \'\'',
  'sourceVersioning' => 'char(1) NOT NULL default \'\'',
  'scriptConfirmed' => 'text NULL',
  'scriptUnconfirmed' => 'text NULL',
  'scriptPosition' => 'varchar(32) NOT NULL default \'\'',
  'scriptConfig' => 'text NULL',
  'globalConfig' => 'int(10) unsigned NOT NULL default 0',
  'gcmMode' => 'varchar(255) NOT NULL default \'\'',
  'alwaysLoadTagJS' => 'char(1) NOT NULL default \'\'',
  'disabled' => 'char(1) NOT NULL default \'\'',
  'priority' => 'int(10) NOT NULL default 0',
  'checked' => 'char(1) NOT NULL default \'\'',
  'blockCookies' => 'char(1) NOT NULL default \'\'',
  'published' => 'char(1) NOT NULL default \'\'',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid,published' => 'index',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_cookie_group',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'globalConfig' => 
  array (
    'table' => 'tl_cookie_config',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
