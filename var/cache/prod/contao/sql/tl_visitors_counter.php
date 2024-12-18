<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'vid' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_date' => 'date NOT NULL default \'1999-01-01\'',
  'visitors_visit' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_hit' => 'int(10) unsigned NOT NULL default \'0\'',
);

$this->arrUniqueFields = array (
  0 => 'vid,visitors_date',
);

$this->arrKeys = array (
  'id' => 'primary',
  'vid,visitors_date' => 'unique',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
