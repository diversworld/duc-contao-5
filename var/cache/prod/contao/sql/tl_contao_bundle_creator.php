<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'bundlename' => 'varchar(255) NOT NULL default \'\'',
  'vendorname' => 'varchar(255) NOT NULL default \'\'',
  'repositoryname' => 'varchar(255) NOT NULL default \'\'',
  'overwriteexisting' => 'char(1) NOT NULL default \'\'',
  'composerdescription' => 'varchar(255) NOT NULL default \'\'',
  'composerpackageversion' => 'varchar(16) NOT NULL default \'\'',
  'composerlicense' => 'varchar(255) NOT NULL default \'\'',
  'composerauthorname' => 'varchar(255) NOT NULL default \'\'',
  'composerauthoremail' => 'varchar(255) NOT NULL default \'\'',
  'composerauthorwebsite' => 'varchar(255) NOT NULL default \'\'',
  'editRootComposer' => 'char(1) NOT NULL default \'\'',
  'rootcomposerextendrepositorieskey' => 'varchar(16) NOT NULL default \'\'',
  'addBackendModule' => 'char(1) NOT NULL default \'\'',
  'dcatable' => 'varchar(255) NOT NULL default \'\'',
  'backendmodulecategory' => 'varchar(255) NOT NULL default \'\'',
  'backendmodulecategorytrans' => 'varchar(255) NOT NULL default \'\'',
  'backendmoduletype' => 'varchar(255) NOT NULL default \'\'',
  'backendmoduletrans' => 'varchar(255) NOT NULL default \'\'',
  'addFrontendModule' => 'char(1) NOT NULL default \'\'',
  'frontendmodulecategory' => 'varchar(255) NOT NULL default \'\'',
  'frontendmodulecategorytrans' => 'varchar(255) NOT NULL default \'\'',
  'frontendmoduletype' => 'varchar(255) NOT NULL default \'\'',
  'frontendmoduletrans' => 'varchar(255) NOT NULL default \'\'',
  'addContentElement' => 'char(1) NOT NULL default \'\'',
  'contentelementcategory' => 'varchar(255) NOT NULL default \'\'',
  'contentelementcategorytrans' => 'varchar(255) NOT NULL default \'\'',
  'contentelementtype' => 'varchar(255) NOT NULL default \'\'',
  'contentelementtrans' => 'varchar(255) NOT NULL default \'\'',
  'addCustomRoute' => 'char(1) NOT NULL default \'\'',
  'addEasyCodingStandard' => 'char(1) NOT NULL default \'\'',
  'addSessionAttribute' => 'char(1) NOT NULL default \'\'',
  'addFriendlyConfiguration' => 'char(1) NOT NULL default \'\'',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
