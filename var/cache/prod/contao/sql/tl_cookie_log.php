<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'cid' => 'int(10) unsigned NOT NULL default 0',
  'version' => 'int(10) unsigned NOT NULL default 0',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'domain' => 'varchar(255) NOT NULL default \'\'',
  'url' => 'varchar(255) NOT NULL default \'\'',
  'ip' => 'varchar(255) NOT NULL default \'\'',
  'config' => 'text NULL',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'cid' => 'index',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
