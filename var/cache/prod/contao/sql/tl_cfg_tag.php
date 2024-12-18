<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'autoincrement' => true,
  ),
  'tstamp' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
  ),
  'name' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'source' => 
  array (
    'type' => 'string',
    'length' => 64,
    'notnull' => false,
  ),
  'alias' => 
  array (
    'type' => 'string',
    'length' => 128,
    'default' => '',
  ),
);

$this->arrUniqueFields = array (
  0 => 'name,source',
);

$this->arrKeys = array (
  'id' => 'primary',
  'alias' => 'index',
  'name,source' => 'unique',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
