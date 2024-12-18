<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'cmaceText' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'cmaceEventsHeadline' => 
  array (
    'type' => 'text',
    'length' => 1000,
    'default' => 'a:2:{s:5:"value";s:0:"";s:4:"unit";s:2:"h3";}',
  ),
  'cmaceEventsFrom' => 
  array (
    'type' => 'bigint',
    'length' => 20,
    'notnull' => false,
  ),
  'cmaceEventsUntil' => 
  array (
    'type' => 'bigint',
    'length' => 20,
    'notnull' => false,
  ),
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default 0',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'name' => 'varchar(255) NOT NULL default \'\'',
  'headline' => 'varchar(255) NOT NULL default \'a:2:{s:5:"value";s:0:"";s:4:"unit";s:2:"h2";}\'',
  'type' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'navigation\'',
  'levelOffset' => 'smallint(5) unsigned NOT NULL default 0',
  'showLevel' => 'smallint(5) unsigned NOT NULL default 0',
  'hardLimit' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'showProtected' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'defineRoot' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'rootPage' => 'int(10) unsigned NOT NULL default 0',
  'navigationTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'customTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'pages' => 'blob NULL',
  'showHidden' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'customLabel' => 'varchar(64) NOT NULL default \'\'',
  'autologin' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'jumpTo' => 'int(10) unsigned NOT NULL default 0',
  'overviewPage' => 'int(10) unsigned NOT NULL default 0',
  'redirectBack' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pwResetPage' => 'int(10) unsigned NOT NULL default 0',
  'editable' => 'blob NULL',
  'reqFullAuth' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'memberTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'form' => 'int(10) unsigned NOT NULL default 0',
  'queryType' => 'varchar(8) COLLATE ascii_bin NOT NULL default \'and\'',
  'fuzzy' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'contextLength' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'minKeywordLength' => 'smallint(5) unsigned NOT NULL default 4',
  'perPage' => 'smallint(5) unsigned NOT NULL default 0',
  'searchType' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'simple\'',
  'searchTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'inColumn' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'main\'',
  'skipFirst' => 'smallint(5) unsigned NOT NULL default 0',
  'loadFirst' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'singleSRC' => 'binary(16) NULL',
  'imgSize' => 'varchar(128) COLLATE ascii_bin NOT NULL default \'\'',
  'useCaption' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'fullsize' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'multiSRC' => 'blob NULL',
  'html' => 'text NULL',
  'unfilteredHtml' => 'mediumtext NULL',
  'rss_cache' => 'int(10) unsigned NOT NULL default 3600',
  'rss_feed' => 'text NULL',
  'rss_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'numberOfItems' => 'smallint(5) unsigned NOT NULL default 3',
  'disableCaptcha' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'reg_groups' => 'blob NULL',
  'reg_allowLogin' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'reg_skipName' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'reg_close' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'\'',
  'reg_deleteDir' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'reg_assignDir' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'reg_homeDir' => 'binary(16) NULL',
  'reg_activate' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'reg_jumpTo' => 'int(10) unsigned NOT NULL default 0',
  'reg_text' => 'text NULL',
  'reg_password' => 'text NULL',
  'data' => 'text NULL',
  'protected' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'groups' => 'blob NULL',
  'cssID' => 'varchar(255) NOT NULL default \'\'',
  'rootPageDependentModules' => 'blob NULL',
  'ticker_categories' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'titleText' => 'varchar(255) NOT NULL default \'\'',
  'linkTitle' => 'varchar(255) NOT NULL default \'\'',
  'prefillCookies' => 'char(1) NOT NULL default \'\'',
  'faq_categories' => 'blob NULL',
  'faq_readerModule' => 'int(10) unsigned NOT NULL default 0',
  'visitors_categories' => 'varchar(255) NOT NULL default \'\'',
  'visitors_template' => 'varchar(32) NOT NULL default \'\'',
  'visitors_update' => 'int(10) unsigned NOT NULL default \'10\'',
  'visitors_screencount' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'visitors_useragent' => 'varchar(64) NOT NULL default \'\'',
  'news_archives' => 'blob NULL',
  'news_featured' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'all_items\'',
  'news_jumpToCurrent' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'\'',
  'news_readerModule' => 'int(10) unsigned NOT NULL default 0',
  'news_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'news_format' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'news_month\'',
  'news_startDay' => 'smallint(5) unsigned NOT NULL default 0',
  'news_order' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'order_date_desc\'',
  'news_showQuantity' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'news_keepCanonical' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'inheritPageImage' => 'char(1) NOT NULL default \'\'',
  'allPageImages' => 'char(1) NOT NULL default \'\'',
  'randomPageImage' => 'char(1) NOT NULL default \'\'',
  'list_table' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'list_fields' => 'tinytext NULL',
  'list_where' => 'tinytext NULL',
  'list_search' => 'tinytext NULL',
  'list_sort' => 'tinytext NULL',
  'list_info' => 'tinytext NULL',
  'list_info_where' => 'tinytext NULL',
  'list_layout' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'list_info_layout' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'nc_notification' => 
  array (
    'type' => 'integer',
    'default' => 0,
    'unsigned' => true,
  ),
  'nc_activation_notification' => 
  array (
    'type' => 'integer',
    'default' => 0,
    'unsigned' => true,
  ),
  'nc_registration_auto_activate' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'nc_newsletter_activation_jumpTo' => 
  array (
    'type' => 'integer',
    'default' => 0,
    'unsigned' => true,
  ),
  'cal_calendar' => 'blob NULL',
  'cal_noSpan' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cal_hideRunning' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cal_startDay' => 'smallint(5) unsigned NOT NULL default 1',
  'cal_format' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'cal_month\'',
  'cal_ignoreDynamic' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cal_order' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'ascending\'',
  'cal_readerModule' => 'int(10) unsigned NOT NULL default 0',
  'cal_limit' => 'smallint(5) unsigned NOT NULL default 0',
  'cal_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'cal_ctemplate' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'cal_showQuantity' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cal_featured' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'all_items\'',
  'cal_keepCanonical' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'newsletters' => 'blob NULL',
  'nl_channels' => 'blob NULL',
  'nl_text' => 'text NULL',
  'nl_hideChannels' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'nl_subscribe' => 'text NULL',
  'nl_unsubscribe' => 'text NULL',
  'nl_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'hide_holiday' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'showOnlyNext' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'use_horizontal' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'use_navigation' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'showDate' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'linkCurrent' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'hideEmptyDays' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'cal_times' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'cal_times_range' => 
  array (
    'type' => 'text',
    'length' => 1000,
    'notnull' => false,
  ),
  'cellheight' => 
  array (
    'type' => 'string',
    'length' => 10,
    'default' => '',
  ),
  'businessHours' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'weekNumbers' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'weekNumbersWithinDays' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'cal_fcFormat' => 
  array (
    'type' => 'string',
    'length' => 32,
    'default' => 'cal_fc_week',
    'customSchemaOptions' => 
    array (
      'collation' => 'ascii_bin',
    ),
  ),
  'filter_fields' => 
  array (
    'type' => 'text',
    'length' => 1000,
    'notnull' => false,
  ),
  'businessDays' => 
  array (
    'type' => 'text',
    'length' => 1000,
    'notnull' => false,
  ),
  'businessDayStart' => 
  array (
    'type' => 'bigint',
    'length' => 20,
    'notnull' => false,
  ),
  'businessDayEnd' => 
  array (
    'type' => 'bigint',
    'length' => 20,
    'notnull' => false,
  ),
  'news_categories' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
  'news_customCategories' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_filterCategories' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_filterCategoriesCumulative' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_relatedCategories' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_relatedCategoriesOrder' => 
  array (
    'type' => 'string',
    'length' => 10,
    'default' => '',
  ),
  'news_includeSubcategories' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_filterCategoriesUnion' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_enableCanonicalUrls' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_filterDefault' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
  'news_filterPreserve' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_resetCategories' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_showEmptyCategories' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_forceCategoryUrl' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_categoriesRoot' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'news_categoryFilterPage' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'news_categoryImgSize' => 'varchar(128) COLLATE ascii_bin NOT NULL default \'\'',
  'leadOptInSuccessType' => 
  array (
    'type' => 'string',
    'length' => 8,
    'default' => 'message',
  ),
  'leadOptInSuccessMessage' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'leadOptInSuccessJumpTo' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'default' => 0,
  ),
  'leadOptInErrorMessage' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'leadOptInSuccessNotification' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'default' => 0,
  ),
  'leadOptIndNeedsUserInteraction' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'leadOptInUserInteractionMessage' => 
  array (
    'type' => 'text',
    'length' => 65535,
    'notnull' => false,
  ),
  'leadOptInUserInteractionSubmit' => 
  array (
    'type' => 'string',
    'length' => 256,
    'default' => '',
  ),
  'nodes' => 
  array (
    'type' => 'blob',
    'notnull' => false,
  ),
  'nodesWrapper' => 
  array (
    'type' => 'string',
    'length' => 1,
    'default' => '',
  ),
  'caledit_allowPublish' => 'char(1) NOT NULL default \'\'',
  'caledit_allowDelete' => 'char(1) NOT NULL default \'\'',
  'caledit_allowClone' => 'char(1) NOT NULL default \'\'',
  'caledit_sendMail' => 'char(1) NOT NULL default \'\'',
  'caledit_mailRecipient' => 'varchar(255) NOT NULL default \'\'',
  'caledit_mandatoryfields' => 'blob NULL',
  'caledit_add_jumpTo' => 'int(10) unsigned NOT NULL default \'0\'',
  'caledit_template' => 'varchar(32) NOT NULL default \'\'',
  'caledit_clone_template' => 'varchar(32) NOT NULL default \'\'',
  'caledit_delete_template' => 'varchar(32) NOT NULL default \'\'',
  'caledit_tinMCEtemplate' => 'varchar(32) NOT NULL default \'\'',
  'caledit_alternateCSSLabel' => 'varchar(64) NOT NULL default \'\'',
  'caledit_usePredefinedCss' => 'char(1) NOT NULL default \'\'',
  'caledit_cssValues' => 'text NULL',
  'caledit_showDeleteLink' => 'char(1) NOT NULL default \'\'',
  'caledit_showCloneLink' => 'char(1) NOT NULL default \'\'',
  'cal_holidayCalendar' => 'blob NULL',
  'caledit_useDatePicker' => 'char(1) NOT NULL default \'\'',
  'caledit_dateDirection' => 'varchar(10) NOT NULL default \'\'',
  'caledit_dateIncludeCSSTheme' => 'varchar(64) NOT NULL default \'smoothness\'',
  'caledit_dateImage' => 'char(1) NOT NULL default \'1\'',
  'caledit_dateImageSRC' => 'binary(16) NULL',
  'event_categories' => 'blob NULL',
  'mae_event_list' => 'int(10) unsigned NOT NULL default \'0\'',
  'mae_event_catname' => 'varchar(50) NOT NULL default \'\'',
  'mae_only_future_cat' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'com_order' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'ascending\'',
  'com_moderate' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'com_bbcode' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'com_requireLogin' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'com_disableCaptcha' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'com_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'modal_linkText' => 'varchar(255) NOT NULL default \'\'',
  'modal_linkClass' => 'varchar(255) NOT NULL default \'\'',
  'modal_text' => 'TEXT NULL',
  'modal_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'modal_class' => 'varchar(255) NOT NULL default \'\'',
  'mateNavbarType' => 'varchar(64) NOT NULL default \'\'',
  'mateShowLogo' => 'int(1) NOT NULL default \'1\'',
  'mateShowSearch' => 'int(1) NOT NULL default \'1\'',
  'mateShowMobileMenu' => 'int(1) NOT NULL default \'1\'',
  'mateIncludeHeadroom' => 'int(1) NOT NULL default \'1\'',
  'mateNavbarStuck' => 'int(1) NOT NULL default \'1\'',
  'mateModal_linkText' => 'text NULL',
  'mateModal_linkClass' => 'text NULL',
  'mateModal_text' => 'TEXT NULL',
  'mateModal_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'mateModal_class' => 'text NULL',
  'mateNavbar_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'mateSliderHeight' => 'varchar(5) NOT NULL default \'\'',
  'mateSliderInterval' => 'varchar(8) NOT NULL default \'\'',
  'mateSliderDuration' => 'varchar(8) NOT NULL default \'\'',
  'mateSliderIndicators' => 'char(1) NOT NULL default \'1\'',
  'ic_folder' => 'binary(16) NULL',
  'ic_order' => 'text NULL',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'tstamp' => 'index',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_theme',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'rootPage' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'pages' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'overviewPage' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'pwResetPage' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'form' => 
  array (
    'table' => 'tl_form',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'reg_groups' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'reg_jumpTo' => 
  array (
    'table' => 'tl_page',
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
  'faq_categories' => 
  array (
    'table' => 'tl_faq_category',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'faq_readerModule' => 
  array (
    'table' => 'tl_module',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'news_archives' => 
  array (
    'table' => 'tl_news_archive',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'nc_newsletter_activation_jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'cal_calendar' => 
  array (
    'table' => 'tl_calendar',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'cal_readerModule' => 
  array (
    'table' => 'tl_module',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'newsletters' => 
  array (
    'table' => 'tl_newsletter_channel',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'nl_channels' => 
  array (
    'table' => 'tl_newsletter_channel',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'news_categories' => 
  array (
    'table' => 'tl_news_category',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'news_filterDefault' => 
  array (
    'table' => 'tl_news_category',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'news_categoriesRoot' => 
  array (
    'table' => 'tl_news_category',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'mae_event_list' => 
  array (
    'table' => 'tl_module',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
