<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'vid' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_tstamp' => 'timestamp NULL',
  'visitors_ip' => 'varchar(40) NOT NULL default \'0.0.0.0\'',
  'visitors_type' => 'char(1) NOT NULL default \'v\'',
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
