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
  'description' => 'mediumtext NULL',
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
    'table' => 'tl_cookiebar',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;