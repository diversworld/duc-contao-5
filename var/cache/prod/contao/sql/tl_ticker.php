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
  'sorting' => 
  array (
    'type' => 'integer',
    'notnull' => false,
    'unsigned' => true,
    'default' => '0',
  ),
  'pid' => 
  array (
    'type' => 'integer',
    'notnull' => false,
    'unsigned' => true,
    'default' => '0',
  ),
  'tickertext' => 'text NULL',
  'color' => 
  array (
    'type' => 'string',
    'length' => 32,
    'default' => 'msg-white',
  ),
  'url' => 'text NULL',
  'target' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'linktitle' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'published' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'start' => 'varchar(10) COLLATE ascii_bin NOT NULL default \'\'',
  'stop' => 'varchar(10) COLLATE ascii_bin NOT NULL default \'\'',
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
    'table' => 'tl_ticker_category',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'eager',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
