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
  'name' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'type' => 
  array (
    'type' => 'string',
    'length' => 7,
    'default' => '',
  ),
  'wrapper' => 
  array (
    'type' => 'string',
    'length' => 1,
    'default' => '',
  ),
  'nodeTpl' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'cssID' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'languages' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'protected' => 'char(1) NOT NULL default \'\'',
  'groups' => 'blob NULL',
  'guests' => 'char(1) NOT NULL default \'\'',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid,type,languages' => 'index',
);

$this->arrRelations = array (
  'tags' => 
  array (
    'table' => 'tl_cfg_tag',
    'field' => 'id',
    'type' => 'haste-ManyToMany',
    'load' => 'lazy',
  ),
  'groups' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
