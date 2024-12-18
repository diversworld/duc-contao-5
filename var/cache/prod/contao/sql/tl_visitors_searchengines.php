<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'vid' => 'int(10) unsigned NOT NULL default \'0\'',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_searchengine' => 'varchar(60) NOT NULL default \'Unknown\'',
  'visitors_keywords' => 'varchar(255) NOT NULL default \'Unknown\'',
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
