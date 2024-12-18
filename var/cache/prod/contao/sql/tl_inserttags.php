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
    'unsigned' => true,
    'default' => 0,
  ),
  'tag' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'replacement' => 
  array (
    'type' => 'text',
    'notnull' => false,
  ),
  'replacementNot' => 
  array (
    'type' => 'text',
    'notnull' => false,
  ),
  'disableRTE' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'description' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'limitpages' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'pages' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
  'includesubpages' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'protected' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'groups' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
);

$this->arrUniqueFields = array (
  0 => 'tag',
);

$this->arrKeys = array (
  'id' => 'primary',
  'tag' => 'index',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
