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
    'notnull' => false,
    'unsigned' => true,
    'autoincrement' => true,
  ),
  'tstamp' => 
  array (
    'type' => 'integer',
    'notnull' => false,
    'unsigned' => true,
    'default' => '0',
  ),
  'title' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'parameter' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'duration' => 
  array (
    'type' => 'integer',
    'notnull' => false,
    'unsigned' => true,
    'default' => '200',
  ),
  'direction' => 
  array (
    'type' => 'string',
    'length' => 8,
    'default' => 'normal',
  ),
  'timing' => 
  array (
    'type' => 'string',
    'length' => 16,
    'default' => 'linear',
  ),
  'pauseOnHover' => 
  array (
    'type' => 'boolean',
    'default' => false,
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
