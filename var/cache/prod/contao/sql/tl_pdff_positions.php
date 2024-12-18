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
  'pid' => 
  array (
    'type' => 'integer',
    'notnull' => false,
    'unsigned' => true,
    'default' => '0',
  ),
  'sorting' => 
  array (
    'type' => 'integer',
    'notnull' => false,
    'unsigned' => true,
    'default' => '0',
  ),
  'tstamp' => 
  array (
    'type' => 'integer',
    'notnull' => false,
    'unsigned' => true,
    'default' => '0',
  ),
  'type' => 
  array (
    'type' => 'string',
    'length' => 8,
    'default' => 'text',
  ),
  'bartype' => 
  array (
    'type' => 'string',
    'length' => 12,
    'default' => 'QRCODE,Q',
  ),
  'textitems' => 'mediumtext NULL',
  'notice' => 'text NULL',
  'noblanks' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'page' => 
  array (
    'type' => 'integer',
    'notnull' => false,
    'unsigned' => true,
    'default' => '1',
  ),
  'posxy' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'picsize' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'borderright' => 
  array (
    'type' => 'string',
    'length' => 16,
    'default' => '',
  ),
  'align' => 
  array (
    'type' => 'string',
    'length' => 32,
    'default' => '',
  ),
  'fontsize' => 
  array (
    'type' => 'string',
    'length' => 16,
    'default' => '11',
  ),
  'textcolor' => 
  array (
    'type' => 'string',
    'length' => 8,
    'default' => '',
  ),
  'fontstyle' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'texttransform' => 
  array (
    'type' => 'string',
    'length' => 32,
    'default' => '',
  ),
  'pictype' => 
  array (
    'type' => 'string',
    'length' => 8,
    'default' => 'file',
  ),
  'picture' => 
  array (
    'type' => 'binary',
    'length' => 16,
    'fixed' => true,
    'notnull' => false,
  ),
  'pictag' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => 'file',
  ),
  'qrsize' => 
  array (
    'type' => 'string',
    'length' => 2,
    'default' => '2',
  ),
  'bedingung' => 
  array (
    'type' => 'string',
    'length' => 80,
    'default' => '',
  ),
  'invert' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'published' => 
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
    'table' => 'tl_form',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
