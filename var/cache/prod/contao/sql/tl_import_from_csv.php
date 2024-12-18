<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'importTable' => 'varchar(255) NOT NULL default \'\'',
  'fieldSeparator' => 'varchar(255) NOT NULL default \';\'',
  'fieldEnclosure' => 'varchar(255) NOT NULL default \'"\'',
  'importMode' => 'varchar(255) NOT NULL default \'\'',
  'selectedFields' => 'blob NULL',
  'skipValidationFields' => 'blob NULL',
  'fileSRC' => 'binary(16) NULL',
  'offset' => 'smallint(5) unsigned NOT NULL default 0',
  'limit' => 'smallint(5) unsigned NOT NULL default 0',
  'enableCron' => 'char(1) NOT NULL default \'\'',
  'cronLevel' => 'varchar(255) NOT NULL default \'\'',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
