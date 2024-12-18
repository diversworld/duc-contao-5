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
  'uuid' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'created' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'form' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'member' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'amount' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 1,
  ),
  'confirmed' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cancelled' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'waiting' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'form_data' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
  'uuid' => 'index',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_calendar_events',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'form' => 
  array (
    'table' => 'tl_form',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'member' => 
  array (
    'table' => 'tl_member',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
