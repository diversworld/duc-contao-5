<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'title' => 'varchar(60) NOT NULL default \'\'',
  'visitors_stat_protected' => 'char(1) NOT NULL default \'\'',
  'visitors_stat_groups' => 'varchar(255) NOT NULL default \'\'',
  'visitors_statreset_protected' => 'char(1) NOT NULL default \'\'',
  'visitors_statreset_groups' => 'varchar(255) NOT NULL default \'\'',
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
