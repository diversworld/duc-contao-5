<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'vid' => 'int(10) unsigned NOT NULL default \'0\'',
  'v_date' => 'date NOT NULL default \'1999-01-01\'',
  'v_s_w' => 'int(10) unsigned NOT NULL default \'0\'',
  'v_s_h' => 'int(10) unsigned NOT NULL default \'0\'',
  'v_s_iw' => 'int(10) unsigned NOT NULL default \'0\'',
  'v_s_ih' => 'int(10) unsigned NOT NULL default \'0\'',
  'v_screen_counter' => 'int(10) unsigned NOT NULL default \'0\'',
);

$this->arrUniqueFields = array (
  0 => 'vid,v_date,v_s_w,v_s_h,v_s_iw,v_s_ih',
);

$this->arrKeys = array (
  'id' => 'primary',
  'vid,v_date,v_s_w,v_s_h,v_s_iw,v_s_ih' => 'unique',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
