<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'sorting' => 'int(10) unsigned NOT NULL default \'0\'',
  'published' => 'char(1) NOT NULL default \'1\'',
  'name' => 'varchar(255) NOT NULL default \'\'',
  'alias' => 'varchar(255) NOT NULL default \'\'',
  'pageTitle' => 'varchar(255) NOT NULL default \'\'',
  'robots' => 'varchar(32) NOT NULL default \'\'',
  'description' => 'text NULL',
  'date' => 'int(10) unsigned NOT NULL default \'0\'',
  'location' => 'varchar(255) NOT NULL default \'\'',
  'photographer' => 'varchar(255) NOT NULL default \'\'',
  'visitors' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitorsDetails' => 'blob NULL',
  'teaser' => 'text NULL',
  'captionType' => 'varchar(64) NOT NULL default \'text\'',
  'caption' => 'text NULL',
  'markdownCaption' => 'text NULL',
  'sortBy' => 'varchar(32) NOT NULL default \'\'',
  'filePrefix' => 'varchar(32) NOT NULL default \'\'',
  'thumb' => 'int(10) unsigned NOT NULL default \'0\'',
  'includeChmod' => 'char(1) NOT NULL default \'\'',
  'cuser' => 'int(10) unsigned NOT NULL default 0',
  'cgroup' => 'int(10) unsigned NOT NULL default 0',
  'chmod' => 'varchar(255) NOT NULL default \'\'',
  'insertArticlePre' => 'int(10) unsigned NOT NULL default \'0\'',
  'insertArticlePost' => 'int(10) unsigned NOT NULL default \'0\'',
  'protected' => 'char(1) NOT NULL default \'\'',
  'groups' => 'blob NULL',
  'imageResolution' => 'smallint(5) unsigned NOT NULL default \'1600\'',
  'preserveFilename' => 'char(1) NOT NULL default \'1\'',
  'multiSRC' => 'blob NULL',
  'assignedDir' => 'blob NULL',
);

$this->arrUniqueFields = array (
  0 => 'alias',
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
  'alias' => 'index',
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
  'cgroup' => 
  array (
    'table' => 'tl_user_group',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
