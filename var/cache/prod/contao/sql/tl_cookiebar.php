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
  'description' => 'mediumtext NULL',
  'infoDescription' => 'mediumtext NULL',
  'version' => 'int(10) unsigned NOT NULL default 1',
  'updateVersion' => 'char(1) NOT NULL default \'\'',
  'infoUrls' => 'blob NULL',
  'excludePages' => 'blob NULL',
  'template' => 'varchar(64) NOT NULL default \'cookiebar_default_deny\'',
  'alignment' => 'varchar(32) NOT NULL default \'\'',
  'buttonColorScheme' => 'varchar(32) NOT NULL default \'highlight\'',
  'blocking' => 'char(1) NOT NULL default \'\'',
  'hideOnInit' => 'char(1) NOT NULL default \'\'',
  'essentialCookieLanguage' => 'varchar(2) NOT NULL default \'\'',
  'scriptPosition' => 'varchar(32) NOT NULL default \'\'',
  'position' => 'varchar(32) NOT NULL default \'\'',
  'cssID' => 'varchar(255) NOT NULL default \'\'',
  'disableTrackingWhileLoggedIn' => 'char(1) NOT NULL default \'\'',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
  'infoUrls' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'excludePages' => 
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
