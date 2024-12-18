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
  'main_id' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'form_id' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'language' => 
  array (
    'type' => 'string',
    'length' => 5,
    'default' => '',
  ),
  'created' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'member_id' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'post_data' => 
  array (
    'type' => 'blob',
    'length' => 16777215,
    'notnull' => false,
  ),
  'optin_token' => 
  array (
    'type' => 'string',
    'length' => 32,
    'default' => '',
  ),
  'optin_tstamp' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'default' => 0,
  ),
  'optin_files' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'optin_labels' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'optin_ip' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'optin_notification_tstamp' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'default' => 0,
  ),
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'main_id' => 'index',
  'optin_token' => 'index',
  'post_data' => 'index',
);

$this->arrRelations = array (
  'main_id' => 
  array (
    'table' => 'tl_form',
    'field' => 'id',
    'type' => 'hasOne',
  ),
  'form_id' => 
  array (
    'table' => 'tl_form',
    'field' => 'id',
    'type' => 'hasOne',
  ),
  'member_id' => 
  array (
    'table' => 'tl_member',
    'field' => 'id',
    'type' => 'hasOne',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
