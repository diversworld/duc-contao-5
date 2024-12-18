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
  'pid' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'sorting' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'tstamp' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'title' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'frontendTitle' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'alias' => 
  array (
    'type' => 'binary',
    'length' => 128,
    'default' => '',
  ),
  'cssClass' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'description' => 
  array (
    'type' => 'text',
    'notnull' => false,
  ),
  'image' => 
  array (
    'type' => 'binary',
    'length' => 16,
    'notnull' => false,
  ),
  'hideInList' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'hideInReader' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'excludeInRelated' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'jumpTo' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'published' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
  'alias' => 'index',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
