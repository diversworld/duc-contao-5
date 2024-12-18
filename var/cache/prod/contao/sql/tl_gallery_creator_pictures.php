<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'uuid' => 'binary(16) NULL',
  'sorting' => 'int(10) unsigned NOT NULL default 0',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'published' => 'char(1) NOT NULL default \'1\'',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'caption' => 'text NULL',
  'date' => 'int(10) unsigned NOT NULL default \'0\'',
  'cuser' => 'int(10) NOT NULL default 0',
  'addCustomThumb' => 'char(1) NOT NULL default \'\'',
  'customThumb' => 'blob NULL',
  'socialMediaSRC' => 'varchar(255) NOT NULL default \'\'',
  'localMediaSRC' => 'binary(16) NULL',
  'externalFile' => 'char(1) NOT NULL default \'\'',
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
    'table' => 'tl_gallery_creator_albums',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'cuser' => 
  array (
    'table' => 'tl_user',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
