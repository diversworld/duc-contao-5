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
    'length' => 10,
    'unsigned' => true,
    'notnull' => true,
    'autoincrement' => true,
  ),
  'tstamp' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'notnull' => true,
    'default' => 0,
  ),
  'challenge' => 
  array (
    'type' => 'string',
    'length' => 1024,
    'notnull' => true,
    'default' => '',
  ),
  'solved' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'notnull' => true,
    'default' => '',
  ),
  'expires' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'notnull' => true,
    'default' => 0,
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
