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
    'default' => 0,
    'unsigned' => true,
  ),
  'tstamp' => 
  array (
    'type' => 'integer',
    'default' => 0,
    'unsigned' => true,
  ),
  'title' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => NULL,
    'notnull' => false,
  ),
  'gateway' => 
  array (
    'type' => 'integer',
    'default' => 0,
    'unsigned' => true,
  ),
  'email_priority' => 
  array (
    'type' => 'smallint',
    'default' => 3,
    'unsigned' => true,
  ),
  'email_template' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => 'mail_default',
    'notnull' => false,
  ),
  'published' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'start' => 
  array (
    'type' => 'string',
    'length' => 10,
    'default' => '',
  ),
  'stop' => 
  array (
    'type' => 'string',
    'length' => 10,
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
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
