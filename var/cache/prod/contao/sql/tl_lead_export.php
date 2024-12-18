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
  'tstamp' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'name' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'type' => 
  array (
    'type' => 'string',
    'length' => 32,
    'default' => '',
  ),
  'filename' => 
  array (
    'type' => 'string',
    'length' => 128,
    'default' => '',
  ),
  'headerFields' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'export' => 
  array (
    'type' => 'string',
    'length' => 8,
    'default' => 'all',
  ),
  'output' => 
  array (
    'type' => 'string',
    'length' => 8,
    'default' => 'both',
  ),
  'fields' => 
  array (
    'type' => 'blob',
    'length' => 16777215,
    'notnull' => false,
  ),
  'tokenFields' => 
  array (
    'type' => 'blob',
    'length' => 16777215,
    'notnull' => false,
  ),
  'csvSeparator' => 
  array (
    'type' => 'string',
    'length' => 4,
    'default' => ',',
  ),
  'csvEnclosure' => 
  array (
    'type' => 'string',
    'length' => 4,
    'default' => '"',
  ),
  'csvEscape' => 
  array (
    'type' => 'string',
    'length' => 4,
    'default' => '\\',
  ),
  'eol' => 
  array (
    'type' => 'string',
    'length' => 2,
    'default' => '',
  ),
  'useTemplate' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'template' => 'binary(16) NULL',
  'startIndex' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'sheetIndex' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'expression' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'lastRun' => 
  array (
    'type' => 'integer',
    'notnull' => false,
  ),
  'skipLastRun' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_lead',
    'field' => 'id',
    'type' => 'belongsTo',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
