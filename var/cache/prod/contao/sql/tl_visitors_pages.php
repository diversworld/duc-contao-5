<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'vid' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_page_date' => 'date NOT NULL default \'1999-01-01\'',
  'visitors_page_id' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_page_pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_page_type' => 'tinyint(1) NOT NULL default \'0\'',
  'visitors_page_visit' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_page_hit' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_page_lang' => 'varchar(5) NOT NULL default \'\'',
);

$this->arrUniqueFields = array (
  0 => 'vid,visitors_page_date,visitors_page_id,visitors_page_type',
);

$this->arrKeys = array (
  'id' => 'primary',
  'vid,visitors_page_date,visitors_page_id,visitors_page_type' => 'unique',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
