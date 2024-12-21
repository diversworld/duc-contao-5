<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'news' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'default' => 0,
  ),
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default 0',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'featured' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'alias' => 'varchar(255) BINARY NOT NULL default \'\'',
  'author' => 'int(10) unsigned NOT NULL default 0',
  'addTime' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'startTime' => 'bigint(20) NULL',
  'endTime' => 'bigint(20) NULL',
  'startDate' => 'bigint(20) NULL',
  'endDate' => 'bigint(20) NULL',
  'pageTitle' => 'varchar(255) NOT NULL default \'\'',
  'robots' => 'varchar(32) NOT NULL default \'\'',
  'description' => 'text NULL',
  'canonicalLink' => 'varchar(2048) NOT NULL default \'\'',
  'location' => 'varchar(255) NOT NULL default \'\'',
  'address' => 'varchar(255) NOT NULL default \'\'',
  'teaser' => 'text NULL',
  'addImage' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'overwriteMeta' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'singleSRC' => 'binary(16) NULL',
  'alt' => 'varchar(255) NOT NULL default \'\'',
  'imageTitle' => 'varchar(255) NOT NULL default \'\'',
  'size' => 'varchar(64) NOT NULL default \'\'',
  'imageUrl' => 'varchar(2048) NOT NULL default \'\'',
  'fullsize' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'caption' => 'varchar(255) NOT NULL default \'\'',
  'floating' => 'varchar(32) NOT NULL default \'above\'',
  'recurring' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'repeatEach' => 'varchar(64) NOT NULL default \'\'',
  'repeatEnd' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'default' => 0,
  ),
  'recurrences' => 
  array (
    'type' => 'smallint',
    'length' => 5,
    'unsigned' => true,
    'default' => 0,
  ),
  'addEnclosure' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'enclosure' => 'blob NULL',
  'source' => 'varchar(32) NOT NULL default \'default\'',
  'linkText' => 'varchar(255) NOT NULL default \'\'',
  'jumpTo' => 'int(10) unsigned NOT NULL default 0',
  'articleId' => 'int(10) unsigned NOT NULL default 0',
  'url' => 'varchar(2048) NOT NULL default \'\'',
  'target' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cssClass' => 'varchar(255) NOT NULL default \'\'',
  'published' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
  'repeatWeekday' => 
  array (
    'type' => 'string',
    'length' => 128,
    'default' => '',
  ),
  'repeatFixedDates' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'ignoreEndTime' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'useExceptions' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'showOnFreeDay' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'weekday' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'hideOnWeekend' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'recurringExt' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'location_name' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'location_str' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'location_plz' => 
  array (
    'type' => 'string',
    'length' => 10,
    'default' => '',
  ),
  'location_ort' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'location_link' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'location_contact' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'location_mail' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'repeatEachExt' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'repeatExceptions' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'repeatExceptionsInt' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'repeatExceptionsPer' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'allRecurrences' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'exceptionList' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'reg_enable' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'reg_form' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'reg_min' => 
  array (
    'type' => 'integer',
    'notnull' => false,
  ),
  'reg_max' => 
  array (
    'type' => 'integer',
    'notnull' => false,
  ),
  'reg_regEnd' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'notnull' => false,
  ),
  'reg_cancelEnd' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'notnull' => false,
  ),
  'reg_requireConfirm' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'reg_enableWaitingList' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'reg_waitingListAdvancementNotification' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'categories' => 'blob NULL',
  'fe_user' => 'int(10) unsigned NOT NULL default \'0\'',
  'disable_editing' => 'char(1) NOT NULL default \'\'',
  'noComments' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
);

$this->arrUniqueFields = array (
  0 => 'alias',
);

$this->arrKeys = array (
  'id' => 'primary',
  'tstamp' => 'index',
  'alias' => 'index',
  'pid,published,featured,start,stop' => 'index',
);

$this->arrRelations = array (
  'news' => 
  array (
    'table' => 'tl_news',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'pid' => 
  array (
    'table' => 'tl_calendar',
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
  'jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'articleId' => 
  array (
    'table' => 'tl_article',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'reg_waitingListAdvancementNotification' => 
  array (
    'table' => 'tl_nc_notification',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
