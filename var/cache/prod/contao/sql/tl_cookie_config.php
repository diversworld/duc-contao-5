<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'type' => 
  array (
    'name' => 'type',
    'type' => 'string',
    'length' => 64,
    'default' => 'text',
  ),
  'vendorId' => 'varchar(255) NOT NULL default \'\'',
  'sourceUrl' => 'varchar(255) NOT NULL default \'\'',
  'sourceLoadingMode' => 'char(1) NOT NULL default \'\'',
  'sourceUrlParameter' => 'varchar(255) NOT NULL default \'\'',
  'scriptPosition' => 'varchar(32) NOT NULL default \'\'',
  'scriptLoadingMode' => 'char(1) NOT NULL default \'\'',
  'scriptConfig' => 'text NULL',
  'googleConsentMode' => 'char(1) NOT NULL default \'\'',
  'published' => 'char(1) NOT NULL default \'1\'',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'published' => 'index',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
