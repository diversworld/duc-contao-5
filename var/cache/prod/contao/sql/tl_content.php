<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'cmaceEventsHeadline' => 
  array (
    'type' => 'text',
    'length' => 1000,
    'default' => 'a:2:{s:5:"value";s:0:"";s:4:"unit";s:2:"h3";}',
  ),
  'cal_calendar' => 
  array (
    'type' => 'blob',
    'length' => 65535,
    'notnull' => false,
  ),
  'cal_noSpan' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'cal_hideRunning' => 
  array (
    'type' => 'string',
    'length' => 1,
    'fixed' => true,
    'default' => '',
  ),
  'cal_order' => 
  array (
    'type' => 'string',
    'length' => 16,
    'default' => 'ascending',
  ),
  'cal_readerModule' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'unsigned' => true,
    'default' => 0,
  ),
  'cal_limit' => 
  array (
    'type' => 'smallint',
    'length' => 5,
    'unsigned' => true,
    'default' => 0,
  ),
  'perPage' => 'smallint(5) unsigned NOT NULL default 0',
  'cal_template' => 
  array (
    'type' => 'string',
    'length' => 256,
    'default' => '',
  ),
  'cal_featured' => 
  array (
    'type' => 'string',
    'length' => 16,
    'default' => 'all_items',
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
  'cmaceEvents' => 
  array (
    'type' => 'blob',
    'length' => 65535,
    'notnull' => false,
  ),
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default 0',
  'ptable' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'tl_article\'',
  'sorting' => 'int(10) unsigned NOT NULL default 0',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'type' => 
  array (
    'name' => 'type',
    'type' => 'string',
    'length' => 64,
    'default' => 'text',
    'customSchemaOptions' => 
    array (
      'collation' => 'ascii_bin',
    ),
  ),
  'headline' => 'varchar(255) NOT NULL default \'a:2:{s:5:"value";s:0:"";s:4:"unit";s:2:"h2";}\'',
  'sectionHeadline' => 'varchar(255) NOT NULL default \'a:2:{s:5:"value";s:0:"";s:4:"unit";s:2:"h2";}\'',
  'text' => 'mediumtext NULL',
  'addImage' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'showPreview' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'inline' => 
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
  'size' => 'varchar(128) COLLATE ascii_bin NOT NULL default \'\'',
  'imageUrl' => 'text NULL',
  'fullsize' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'caption' => 'varchar(255) NOT NULL default \'\'',
  'floating' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'above\'',
  'html' => 'mediumtext NULL',
  'unfilteredHtml' => 'mediumtext NULL',
  'listtype' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'\'',
  'listitems' => 'blob NULL',
  'tableitems' => 'mediumblob NULL',
  'summary' => 'varchar(255) NOT NULL default \'\'',
  'thead' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'tfoot' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'tleft' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'sortable' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'sortIndex' => 'smallint(5) unsigned NOT NULL default 0',
  'sortOrder' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'ascending\'',
  'closeSections' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'mooHeadline' => 'varchar(255) NOT NULL default \'\'',
  'mooStyle' => 'varchar(255) NOT NULL default \'\'',
  'mooClasses' => 'varchar(255) NOT NULL default \'\'',
  'highlight' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'\'',
  'markdownSource' => 'varchar(12) COLLATE ascii_bin NOT NULL default \'sourceText\'',
  'code' => 'text NULL',
  'url' => 'text NULL',
  'target' => 'char(1) NOT NULL default \'\'',
  'overwriteLink' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'titleText' => 'varchar(255) NOT NULL default \'\'',
  'linkTitle' => 'varchar(255) NOT NULL default \'\'',
  'embed' => 'varchar(255) NOT NULL default \'\'',
  'rel' => 'varchar(64) NOT NULL default \'\'',
  'useImage' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'multiSRC' => 'blob NULL',
  'useHomeDir' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'perRow' => 'smallint(5) unsigned NOT NULL default 4',
  'numberOfItems' => 'smallint(5) unsigned NOT NULL default 0',
  'sortBy' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'\'',
  'metaIgnore' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'galleryTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'customTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'playerSRC' => 'blob NULL',
  'youtube' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'\'',
  'vimeo' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'posterSRC' => 'binary(16) NULL',
  'playerSize' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'playerOptions' => 'text NULL',
  'playerStart' => 'varchar(16) NOT NULL default \'\'',
  'playerStop' => 'varchar(16) NOT NULL default \'\'',
  'playerCaption' => 'varchar(255) NOT NULL default \'\'',
  'playerAspect' => 'varchar(8) COLLATE ascii_bin NOT NULL default \'\'',
  'splashImage' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'playerPreload' => 'varchar(8) COLLATE ascii_bin NOT NULL default \'\'',
  'playerColor' => 'varchar(6) COLLATE ascii_bin NOT NULL default \'\'',
  'youtubeOptions' => 'text NULL',
  'vimeoOptions' => 'text NULL',
  'sliderDelay' => 'int(10) unsigned NOT NULL default 0',
  'sliderSpeed' => 'int(10) unsigned NOT NULL default 300',
  'sliderStartSlide' => 'smallint(5) unsigned NOT NULL default 0',
  'sliderContinuous' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'data' => 'text NULL',
  'cteAlias' => 'int(10) unsigned NOT NULL default 0',
  'articleAlias' => 'int(10) unsigned NOT NULL default 0',
  'article' => 'int(10) unsigned NOT NULL default 0',
  'form' => 'int(10) unsigned NOT NULL default 0',
  'module' => 'int(10) unsigned NOT NULL default 0',
  'protected' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'groups' => 'blob NULL',
  'cssID' => 'varchar(255) NOT NULL default \'\'',
  'invisible' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'start' => 'varchar(10) COLLATE ascii_bin NOT NULL default \'\'',
  'stop' => 'varchar(10) COLLATE ascii_bin NOT NULL default \'\'',
  'prefillCookies' => 'char(1) NOT NULL default \'\'',
  'gcSorting' => 'varchar(64) NOT NULL default \'date\'',
  'gcSortingDirection' => 'varchar(64) NOT NULL default \'\'',
  'gcPictureSorting' => 'varchar(64) NOT NULL default \'date\'',
  'gcPictureSortingDirection' => 'varchar(64) NOT NULL default \'DESC\'',
  'gcAlbumsPerPage' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'gcSizeAlbumListing' => 'varchar(255) NOT NULL default \'\'',
  'gcSizeDetailView' => 'varchar(255) NOT NULL default \'\'',
  'gcFullSize' => 'char(1) NOT NULL default \'\'',
  'gcThumbsPerPage' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'gcShowAlbumSelection' => 'char(1) NOT NULL default \'\'',
  'gcAlbumSelection' => 'blob NULL',
  'gcPublishSingleAlbum' => 'blob NULL',
  'gcAddBreadcrumb' => 'char(1) NOT NULL default \'\'',
  'remark_icon' => 'varchar(16) NOT NULL default \'show\'',
  'advancedCss' => 'varchar(255) NOT NULL default \'\'',
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
  'news_filterCategories' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_relatedCategories' => 
  array (
    'type' => 'boolean',
    'default' => 0,
  ),
  'news_includeSubcategories' => 
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
  'news_categoryFilterPage' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'news_categoryImgSize' => 'varchar(128) COLLATE ascii_bin NOT NULL default \'\'',
  'news_module' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'com_order' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'ascending\'',
  'com_perPage' => 'smallint(5) unsigned NOT NULL default 0',
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
  'com_disableCaptcha' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'com_requireLogin' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'com_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'subline' => 'text NULL',
  'headline_inline' => 'char(1) NOT NULL default \'\'',
  'subheadline' => 'char(1) NOT NULL default \'\'',
  'ct_contentBox_page' => 'text NULL',
  'ct_contentBox_pageText' => 'text NULL',
  'ct_contentBox_pageTitle' => 'text NULL',
  'ct_contentBox_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'ct_featureIcon' => 'varchar(64) NOT NULL default \'\'',
  'ct_iconLink' => 'text NULL',
  'ct_featureElement_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'ct_price' => 'varchar(20) NOT NULL default \'\'',
  'ct_priceLabel' => 'varchar(50) NOT NULL default \'\'',
  'ct_priceBox_link1' => 'text NULL',
  'ct_priceBox_linkText1' => 'text NULL',
  'ct_priceBox_link2' => 'text NULL',
  'ct_priceBox_linkText2' => 'text NULL',
  'ct_popularPriceBox' => 'varchar(50) NOT NULL default \'\'',
  'ct_priceBox_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'ct_teaserBox_page' => 'text NULL',
  'ct_teaserBox_pageText' => 'text NULL',
  'ct_teaserBox_pageTitle' => 'text NULL',
  'ct_teaserBox_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'ct_wrapper_name' => 'text NULL',
  'ct_sliderElement_page' => 'varchar(255) NOT NULL default \'\'',
  'ct_sliderElement_linkText' => 'varchar(255) NOT NULL default \'\'',
  'ct_sliderElement_target' => 'char(1) NOT NULL default \'\'',
  'ct_sliderElement_subHeadline' => 'varchar(255) NOT NULL default \'\'',
  'ct_sliderElement_playerSRC' => 'blob NULL',
  'mateTeaserBox_page' => 'text NULL',
  'mateTeaserBox_pageText' => 'text NULL',
  'mateContentBox_page' => 'text NULL',
  'mateContentBox_pageText' => 'text NULL',
  'mateContentBox_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'mateTeaserBox_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'mateTeaserbox_subHeadline' => 'text NULL',
  'mateParallaxElement_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'mateParallaxElement_text' => 'TEXT NULL',
  'mateParallaxElement_height' => 'varchar(5) NOT NULL default \'\'',
  'mate_background_image' => 'binary(16) NULL',
  'mateTextBackgroundElement_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'mateModal_linkText' => 'text NULL',
  'mateModal_linkClass' => 'text NULL',
  'mateModal_text' => 'TEXT NULL',
  'mateModal_customTpl' => 'varchar(64) NOT NULL default \'\'',
  'mateModal_class' => 'text NULL',
  'mateTeaserBox_class' => 'text NULL',
  'mateTeaserBoxPlus' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'mateTeaserBoxPlus_bg' => 'text NULL',
  'mateTeaserBoxPlus_bgHover' => 'text NULL',
  'mateTeaserBoxPlus_text' => 'text NULL',
  'mateTeaserBoxPlus_color' => 'text NULL',
  'mateTeaserBoxPlus_colorHover' => 'text NULL',
  'mateTeaserBoxPlus_size' => 'varchar(64) NOT NULL default \'normal\'',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'tstamp' => 'index',
  'ptable,pid,invisible,start,stop' => 'index',
  'type' => 'index',
);

$this->arrRelations = array (
  'cmaceEvents' => 
  array (
    'table' => 'tl_calendar_events',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'cteAlias' => 
  array (
    'table' => 'tl_content',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'articleAlias' => 
  array (
    'table' => 'tl_article',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'article' => 
  array (
    'table' => 'tl_article',
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
  'module' => 
  array (
    'table' => 'tl_module',
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
  'news_filterDefault' => 
  array (
    'table' => 'tl_news_category',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
