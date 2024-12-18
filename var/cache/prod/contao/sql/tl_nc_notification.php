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
    'default' => 0,
    'unsigned' => true,
  ),
  'title' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => NULL,
    'notnull' => false,
  ),
  'type' => 
  array (
    'type' => 'string',
    'length' => 128,
    'default' => NULL,
    'notnull' => false,
  ),
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
