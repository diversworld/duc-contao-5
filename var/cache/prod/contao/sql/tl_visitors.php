<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'sorting' => 'int(10) unsigned NOT NULL default \'0\'',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_name' => 'varchar(64) NOT NULL default \'\'',
  'visitors_startdate' => 'varchar(10) NOT NULL default \'\'',
  'visitors_visit_start' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_hit_start' => 'int(10) unsigned NOT NULL default \'0\'',
  'visitors_average' => 'char(1) NOT NULL default \'\'',
  'visitors_block_time' => 'int(10) unsigned NOT NULL default \'1800\'',
  'visitors_thousands_separator' => 'char(1) NOT NULL default \'\'',
  'visitors_statistic_days' => 'int(10) unsigned NOT NULL default \'14\'',
  'published' => 'char(1) NOT NULL default \'\'',
  'visitors_expert_debug_tag' => 'char(1) NOT NULL default \'\'',
  'visitors_expert_debug_checks' => 'char(1) NOT NULL default \'\'',
  'visitors_expert_debug_referrer' => 'char(1) NOT NULL default \'\'',
  'visitors_expert_debug_searchengine' => 'char(1) NOT NULL default \'\'',
  'visitors_expert_debug_screenresolutioncount' => 'char(1) NOT NULL default \'\'',
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
