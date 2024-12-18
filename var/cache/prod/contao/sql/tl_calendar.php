<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'jumpTo' => 'int(10) unsigned NOT NULL default 0',
  'protected' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'groups' => 'blob NULL',
  'bg_color' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'fg_color' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => '',
  ),
  'isHolidayCal' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'allowEvents' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'uniqueEvents' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'reg_confirm_page' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'reg_cancel_page' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'AllowEdit' => 'char(1) NOT NULL default \'\'',
  'caledit_onlyFuture' => 'char(1) NOT NULL default \'\'',
  'caledit_jumpTo' => 'int(10) unsigned NOT NULL default \'0\'',
  'caledit_loginRequired' => 'char(1) NOT NULL default \'1\'',
  'caledit_onlyUser' => 'char(1) NOT NULL default \'\'',
  'caledit_groups' => 'blob NULL',
  'caledit_adminGroup' => 'blob NULL',
  'allowComments' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'notify' => 'varchar(32) NOT NULL default \'notify_admin\'',
  'sortOrder' => 'varchar(32) NOT NULL default \'ascending\'',
  'perPage' => 'smallint(5) unsigned NOT NULL default 0',
  'moderate' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'bbcode' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'requireLogin' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'disableCaptcha' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'tstamp' => 'index',
);

$this->arrRelations = array (
  'jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'groups' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'reg_confirm_page' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'reg_cancel_page' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
