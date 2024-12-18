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
  'sorting' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'main_id' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'field_id' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'name' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'value' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'label' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
  'main_id' => 'index',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_lead',
    'field' => 'id',
    'type' => 'belongsTo',
  ),
  'main_id' => 
  array (
    'table' => 'tl_form_field',
    'field' => 'id',
    'type' => 'hasOne',
  ),
  'field_id' => 
  array (
    'table' => 'tl_form_field',
    'field' => 'id',
    'type' => 'hasOne',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
