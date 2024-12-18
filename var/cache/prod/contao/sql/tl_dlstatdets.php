<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'ip' => 'varchar(64) NOT NULL default \'\'',
  'username' => 'varchar(64) NOT NULL default \'\'',
  'domain' => 'varchar(64) NOT NULL default \'\'',
  'page_host' => 'varchar(255) NOT NULL default \'\'',
  'page_id' => 'int(10) unsigned NOT NULL default \'0\'',
  'browser_lang' => 'varchar(10) NOT NULL default \'\'',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
