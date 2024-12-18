<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default 0',
  'sorting' => 'int(10) unsigned NOT NULL default 0',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'alias' => 'varchar(255) BINARY NOT NULL default \'\'',
  'author' => 'int(10) unsigned NOT NULL default 0',
  'inColumn' => 'varchar(32) NOT NULL default \'main\'',
  'showTeaser' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'teaserCssID' => 'varchar(255) NOT NULL default \'\'',
  'teaser' => 'text NULL',
  'printable' => 'varchar(255) NOT NULL default \'\'',
  'customTpl' => 'varchar(64) NOT NULL default \'\'',
  'protected' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'groups' => 'blob NULL',
  'cssID' => 'varchar(255) NOT NULL default \'\'',
  'published' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
  'pdir_th_tag' => 'varchar(64) NOT NULL default \'\'',
  'pdir_th_domain' => 'varchar(64) NOT NULL default \'\'',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'tstamp' => 'index',
  'alias' => 'index',
  'pid,published,inColumn,start,stop' => 'index',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'author' => 
  array (
    'table' => 'tl_user',
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
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
