<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'vid' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_browser' => 'varchar(60) NOT NULL default \'Unknown\'',
  'visitors_os' => 'varchar(60) NOT NULL default \'Unknown\'',
  'visitors_lang' => 'varchar(10) NOT NULL default \'Unknown\'',
  'visitors_counter' => 'int(10) unsigned NOT NULL default \'0\'',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'vid' => 'index',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
