<?php

namespace {
$GLOBALS['TL_DCA']['tl_content'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'enableVersioning' => \true, 'ctable' => array('tl_content'), 'dynamicPtable' => \true, 'markAsCopy' => 'headline', 'onload_callback' => array(array('tl_content', 'adjustDcaByType'), array('tl_content', 'showJsLibraryHint')), 'sql' => array('keys' => array('id' => 'primary', 'tstamp' => 'index', 'ptable,pid,invisible,start,stop' => 'index', 'type' => 'index'))),
    // List
    'list' => array('sorting' => array('mode' => \Contao\DataContainer::MODE_PARENT, 'fields' => array('sorting'), 'panelLayout' => 'filter;search,limit', 'defaultSearchField' => 'text', 'headerFields' => array('title', 'type', 'author', 'tstamp', 'start', 'stop'), 'child_record_callback' => array('tl_content', 'addCteType'), 'renderAsGrid' => \true, 'limitHeight' => 160)),
    // Palettes
    'palettes' => array('__selector__' => array('type', 'addImage', 'sortable', 'useImage', 'overwriteMeta', 'overwriteLink', 'protected', 'splashImage', 'markdownSource', 'showPreview'), 'default' => '{type_legend},type', 'headline' => '{type_legend},type,headline;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'text' => '{type_legend},type,headline;{text_legend},text;{image_legend},addImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'html' => '{type_legend},type;{text_legend},html;{template_legend:hide},customTpl;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop', 'unfiltered_html' => '{type_legend},type;{text_legend},unfilteredHtml;{template_legend:hide},customTpl;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop', 'list' => '{type_legend},type,headline;{list_legend},listtype,listitems;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'description_list' => '{type_legend},type,headline;{list_legend},data;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'table' => '{type_legend},type,headline;{table_legend},tableitems;{tconfig_legend},summary,thead,tfoot,tleft;{sortable_legend:hide},sortable;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'accordion' => '{type_legend},type,headline;{accordion_legend},closeSections;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'element_group' => '{type_legend},type,headline;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'accordionStart' => '{type_legend},type;{moo_legend},mooHeadline,mooStyle,mooClasses;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'accordionStop' => '{type_legend},type;{moo_legend},mooClasses;{template_legend:hide},customTpl;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop', 'accordionSingle' => '{type_legend},type;{moo_legend},mooHeadline,mooStyle,mooClasses;{text_legend},text;{image_legend},addImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'swiper' => '{type_legend},type,headline;{slider_legend},sliderDelay,sliderSpeed,sliderStartSlide,sliderContinuous;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'sliderStart' => '{type_legend},type,headline;{slider_legend},sliderDelay,sliderSpeed,sliderStartSlide,sliderContinuous;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'sliderStop' => '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop', 'code' => '{type_legend},type,headline;{text_legend},highlight,code;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'markdown' => '{type_legend},type,headline;{text_legend},markdownSource;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'template' => '{type_legend},type,headline;{template_legend},data,customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'hyperlink' => '{type_legend},type,headline;{link_legend},url,target,linkTitle,embed,titleText,rel;{imglink_legend:hide},useImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'toplink' => '{type_legend},type;{link_legend},linkTitle;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'image' => '{type_legend},type,headline;{source_legend},singleSRC,size,fullsize,overwriteMeta;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'gallery' => '{type_legend},type,headline;{source_legend},multiSRC,useHomeDir,sortBy,metaIgnore;{image_legend},size,perRow,perPage,numberOfItems,fullsize;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'player' => '{type_legend},type,headline;{source_legend},playerSRC;{player_legend},playerOptions,playerSize,playerPreload,playerCaption,playerStart,playerStop;{poster_legend:hide},posterSRC;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'youtube' => '{type_legend},type,headline;{source_legend},youtube;{player_legend},youtubeOptions,playerSize,playerAspect,playerCaption,playerStart,playerStop;{splash_legend},splashImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'vimeo' => '{type_legend},type,headline;{source_legend},vimeo;{player_legend},vimeoOptions,playerSize,playerAspect,playerCaption,playerStart,playerColor;{splash_legend},splashImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'download' => '{type_legend},type,headline;{source_legend},singleSRC;{download_legend},inline,overwriteLink;{preview_legend},showPreview;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'downloads' => '{type_legend},type,headline;{source_legend},multiSRC,useHomeDir;{download_legend},inline,sortBy,metaIgnore;{preview_legend},showPreview;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'alias' => '{type_legend},type;{include_legend},cteAlias;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'article' => '{type_legend},type;{include_legend},articleAlias;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop', 'teaser' => '{type_legend},type;{include_legend},article;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'form' => '{type_legend},type,headline;{include_legend},form;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop', 'module' => '{type_legend},type;{include_legend},module;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop'),
    // Sub-palettes
    'subpalettes' => array('addImage' => 'singleSRC,fullsize,size,floating,overwriteMeta', 'sortable' => 'sortIndex,sortOrder', 'useImage' => 'singleSRC,size,overwriteMeta', 'overwriteMeta' => 'alt,imageTitle,imageUrl,caption', 'overwriteLink' => 'linkTitle,titleText', 'protected' => 'groups', 'splashImage' => 'singleSRC,size', 'markdownSource_sourceText' => 'code', 'markdownSource_sourceFile' => 'singleSRC', 'showPreview' => 'size,fullsize,numberOfItems'),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'pid' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'ptable' => array('sql' => "varchar(64) COLLATE ascii_bin NOT NULL default 'tl_article'"), 'sorting' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'type' => array('filter' => \true, 'inputType' => 'select', 'reference' => &$GLOBALS['TL_LANG']['CTE'], 'eval' => array('helpwizard' => \true, 'chosen' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50'), 'sql' => array('name' => 'type', 'type' => 'string', 'length' => 64, 'default' => 'text', 'customSchemaOptions' => array('collation' => 'ascii_bin'))), 'headline' => array('search' => \true, 'inputType' => 'inputUnit', 'options' => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'), 'eval' => array('maxlength' => 200, 'basicEntities' => \true, 'tl_class' => 'w50 clr'), 'sql' => "varchar(255) NOT NULL default 'a:2:{s:5:\"value\";s:0:\"\";s:4:\"unit\";s:2:\"h2\";}'"), 'sectionHeadline' => array('search' => \true, 'inputType' => 'inputUnit', 'options' => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'), 'eval' => array('maxlength' => 255, 'basicEntities' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default 'a:2:{s:5:\"value\";s:0:\"\";s:4:\"unit\";s:2:\"h2\";}'"), 'text' => array('search' => \true, 'inputType' => 'textarea', 'eval' => array('mandatory' => \true, 'basicEntities' => \true, 'rte' => 'tinyMCE', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "mediumtext NULL"), 'addImage' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'showPreview' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'clr'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'inline' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'overwriteMeta' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'w50 clr'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'singleSRC' => array('inputType' => 'fileTree', 'eval' => array('filesOnly' => \true, 'fieldType' => 'radio', 'mandatory' => \true, 'tl_class' => 'clr'), 'load_callback' => array(array('tl_content', 'setSingleSrcFlags')), 'sql' => "binary(16) NULL"), 'alt' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'imageTitle' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'size' => array('label' => &$GLOBALS['TL_LANG']['MSC']['imgSize'], 'inputType' => 'imageSize', 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('rgxp' => 'natural', 'includeBlankOption' => \true, 'nospace' => \true, 'helpwizard' => \true, 'tl_class' => 'w50 clr'), 'sql' => "varchar(128) COLLATE ascii_bin NOT NULL default ''"), 'imageUrl' => array('search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 2048, 'dcaPicker' => \true, 'tl_class' => 'w50'), 'sql' => "text NULL"), 'fullsize' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'caption' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'allowHtml' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'floating' => array('inputType' => 'radioTable', 'options' => array('above', 'left', 'right', 'below'), 'eval' => array('cols' => 4, 'tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'above'"), 'html' => array('search' => \true, 'inputType' => 'textarea', 'eval' => array('allowHtml' => \true, 'class' => 'monospace', 'rte' => 'ace|html', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "mediumtext NULL"), 'unfilteredHtml' => array('search' => \true, 'inputType' => 'textarea', 'eval' => array('useRawRequestData' => \true, 'class' => 'monospace', 'rte' => 'ace|html', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "mediumtext NULL"), 'listtype' => array('inputType' => 'select', 'options' => array('ordered', 'unordered'), 'eval' => array('tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['tl_content'], 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default ''"), 'listitems' => array('inputType' => 'listWizard', 'eval' => array('multiple' => \true, 'allowHtml' => \true, 'tl_class' => 'clr'), 'xlabel' => array(array('tl_content', 'listImportWizard')), 'sql' => "blob NULL"), 'tableitems' => array('inputType' => 'tableWizard', 'eval' => array('multiple' => \true, 'allowHtml' => \true, 'doNotSaveEmpty' => \true, 'style' => 'width:142px;height:66px'), 'xlabel' => array(array('tl_content', 'tableImportWizard')), 'sql' => "mediumblob NULL"), 'summary' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'thead' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w25 clr'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'tfoot' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w25'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'tleft' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w25'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'sortable' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'sortIndex' => array('inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'sortOrder' => array('inputType' => 'select', 'options' => array('ascending', 'descending'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'ascending'"), 'closeSections' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'mooHeadline' => array('inputType' => 'text', 'eval' => array('maxlength' => 255, 'allowHtml' => \true, 'tl_class' => 'long'), 'sql' => "varchar(255) NOT NULL default ''"), 'mooStyle' => array('inputType' => 'text', 'eval' => array('maxlength' => 255, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'mooClasses' => array('search' => \true, 'inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'rgxp' => 'alnum', 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'highlight' => array('inputType' => 'select', 'options' => array('Apache', 'Bash', 'C#', 'C++', 'CSS', 'Diff', 'HTML', 'HTTP', 'Ini', 'JSON', 'Java', 'JavaScript', 'Markdown', 'Nginx', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'SCSS', 'SQL', 'Twig', 'YAML', 'XML'), 'eval' => array('includeBlankOption' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default ''"), 'markdownSource' => array('inputType' => 'select', 'options' => array('sourceText', 'sourceFile'), 'reference' => &$GLOBALS['TL_LANG']['tl_content']['markdownSource'], 'eval' => array('submitOnChange' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(12) COLLATE ascii_bin NOT NULL default 'sourceText'"), 'code' => array('search' => \true, 'inputType' => 'textarea', 'eval' => array('mandatory' => \true, 'preserveTags' => \true, 'decodeEntities' => \true, 'class' => 'monospace', 'rte' => 'ace', 'helpwizard' => \true, 'tl_class' => 'clr'), 'explanation' => 'insertTags', 'load_callback' => array(array('tl_content', 'setRteSyntax')), 'sql' => "text NULL"), 'url' => array('label' => &$GLOBALS['TL_LANG']['MSC']['url'], 'search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 2048, 'dcaPicker' => \true, 'tl_class' => 'w50'), 'sql' => "text NULL"), 'target' => array('label' => &$GLOBALS['TL_LANG']['MSC']['target'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'overwriteLink' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'w50 clr'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'titleText' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'linkTitle' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'embed' => array('inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'rel' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 64, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''"), 'useImage' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'multiSRC' => array('inputType' => 'fileTree', 'eval' => array('multiple' => \true, 'fieldType' => 'checkbox', 'isSortable' => \true, 'files' => \true), 'sql' => "blob NULL", 'load_callback' => array(array('tl_content', 'setMultiSrcFlags'))), 'useHomeDir' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'perRow' => array('inputType' => 'select', 'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12), 'eval' => array('tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 4"), 'perPage' => array('inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'numberOfItems' => array('label' => &$GLOBALS['TL_LANG']['MSC']['numberOfItems'], 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'sortBy' => array('inputType' => 'select', 'options' => array('custom', 'name_asc', 'name_desc', 'date_asc', 'date_desc', 'random'), 'reference' => &$GLOBALS['TL_LANG']['tl_content'], 'eval' => array('tl_class' => 'w50 clr'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default ''"), 'metaIgnore' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'galleryTpl' => array('inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('gallery_');
    }, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'customTpl' => array('inputType' => 'select', 'eval' => array('chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'playerSRC' => array('inputType' => 'fileTree', 'eval' => array('multiple' => \true, 'fieldType' => 'checkbox', 'files' => \true, 'mandatory' => \true), 'sql' => "blob NULL"), 'youtube' => array('search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'save_callback' => array(array('tl_content', 'extractYouTubeId')), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default ''"), 'vimeo' => array('search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'save_callback' => array(array('tl_content', 'extractVimeoId')), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'posterSRC' => array('inputType' => 'fileTree', 'eval' => array('filesOnly' => \true, 'fieldType' => 'radio'), 'sql' => "binary(16) NULL"), 'playerSize' => array('inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'playerOptions' => array('inputType' => 'checkbox', 'options' => array('player_autoplay', 'player_nocontrols', 'player_loop', 'player_playsinline', 'player_muted'), 'reference' => &$GLOBALS['TL_LANG']['tl_content'], 'eval' => array('multiple' => \true, 'tl_class' => 'clr'), 'sql' => "text NULL"), 'playerStart' => array('inputType' => 'text', 'eval' => array('maxlength' => 16, 'nospace' => \true, 'tl_class' => 'w25'), 'sql' => "varchar(16) NOT NULL default ''"), 'playerStop' => array('inputType' => 'text', 'eval' => array('maxlength' => 16, 'nospace' => \true, 'tl_class' => 'w25'), 'sql' => "varchar(16) NOT NULL default ''"), 'playerCaption' => array('inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'playerAspect' => array('inputType' => 'select', 'options' => array('16:9', '16:10', '21:9', '4:3', '3:2'), 'reference' => &$GLOBALS['TL_LANG']['tl_content']['player_aspect'], 'eval' => array('includeBlankOption' => \true, 'nospace' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(8) COLLATE ascii_bin NOT NULL default ''"), 'splashImage' => array('inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'playerPreload' => array('inputType' => 'select', 'options' => array('auto', 'metadata', 'none'), 'reference' => &$GLOBALS['TL_LANG']['tl_content']['player_preload'], 'eval' => array('includeBlankOption' => \true, 'nospace' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(8) COLLATE ascii_bin NOT NULL default ''"), 'playerColor' => array('search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 6, 'colorpicker' => \true, 'isHexColor' => \true, 'decodeEntities' => \true, 'tl_class' => 'w25 wizard'), 'sql' => "varchar(6) COLLATE ascii_bin NOT NULL default ''"), 'youtubeOptions' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['playerOptions'], 'inputType' => 'checkbox', 'options' => array('youtube_autoplay', 'youtube_controls', 'youtube_cc_load_policy', 'youtube_fs', 'youtube_hl', 'youtube_iv_load_policy', 'youtube_modestbranding', 'youtube_rel', 'youtube_nocookie', 'youtube_loop'), 'reference' => &$GLOBALS['TL_LANG']['tl_content'], 'eval' => array('multiple' => \true, 'tl_class' => 'clr'), 'sql' => "text NULL"), 'vimeoOptions' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['playerOptions'], 'inputType' => 'checkbox', 'options' => array('vimeo_autoplay', 'vimeo_loop', 'vimeo_portrait', 'vimeo_title', 'vimeo_byline', 'vimeo_dnt'), 'reference' => &$GLOBALS['TL_LANG']['tl_content'], 'eval' => array('multiple' => \true, 'tl_class' => 'clr'), 'sql' => "text NULL"), 'sliderDelay' => array('search' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w25'), 'sql' => "int(10) unsigned NOT NULL default 0"), 'sliderSpeed' => array('search' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w25'), 'sql' => "int(10) unsigned NOT NULL default 300"), 'sliderStartSlide' => array('inputType' => 'text', 'eval' => array('tl_class' => 'w25'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'sliderContinuous' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w25 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'data' => array('inputType' => 'keyValueWizard', 'sql' => "text NULL"), 'cteAlias' => array('inputType' => 'picker', 'eval' => array('mandatory' => \true, 'tl_class' => 'clr'), 'save_callback' => array(array('tl_content', 'saveAlias')), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy', 'table' => 'tl_content')), 'articleAlias' => array('inputType' => 'picker', 'foreignKey' => 'tl_article.title', 'eval' => array('mandatory' => \true, 'tl_class' => 'clr'), 'save_callback' => array(array('tl_content', 'saveArticleAlias')), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'article' => array('inputType' => 'picker', 'foreignKey' => 'tl_article.title', 'eval' => array('mandatory' => \true, 'tl_class' => 'clr'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'form' => array('inputType' => 'select', 'foreignKey' => 'tl_form.title', 'options_callback' => array('tl_content', 'getForms'), 'eval' => array('mandatory' => \true, 'includeBlankOption' => \true, 'chosen' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50 wizard'), 'wizard' => array(array('tl_content', 'editForm')), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'module' => array('inputType' => 'select', 'foreignKey' => 'tl_module.name', 'eval' => array('mandatory' => \true, 'includeBlankOption' => \true, 'chosen' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50 wizard'), 'wizard' => array(array('tl_content', 'editModule')), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'protected' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'groups' => array('filter' => \true, 'inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('mandatory' => \true, 'multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy')), 'cssID' => array('inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'tl_class' => 'w50 clr'), 'sql' => "varchar(255) NOT NULL default ''"), 'invisible' => array('reverseToggle' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'sql' => array('type' => 'boolean', 'default' => \false)), 'start' => array('inputType' => 'text', 'eval' => array('rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(10) COLLATE ascii_bin NOT NULL default ''"), 'stop' => array('inputType' => 'text', 'eval' => array('rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(10) COLLATE ascii_bin NOT NULL default ''")),
);
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @internal
 */
class tl_content extends \Contao\Backend
{
    /**
     * Return the group of a content element
     *
     * @param string $element
     *
     * @return string
     */
    public function getContentElementGroup($element)
    {
        foreach ($GLOBALS['TL_CTE'] as $k => $v) {
            if (\array_key_exists($element, $v)) {
                return $k;
            }
        }
        return \null;
    }
    /**
     * Adjust the DCA by type
     *
     * @param object $dc
     */
    public function adjustDcaByType($dc)
    {
        $objCte = \Contao\ContentModel::findById($dc->id);
        if ($objCte === \null) {
            return;
        }
        switch ($objCte->type) {
            case 'hyperlink':
                unset($GLOBALS['TL_DCA']['tl_content']['fields']['imageUrl']);
                break;
            case 'image':
                $GLOBALS['TL_DCA']['tl_content']['fields']['fullsize']['eval']['tl_class'] .= ' m12';
                break;
            case 'download':
            case 'downloads':
                $GLOBALS['TL_DCA']['tl_content']['fields']['size']['eval']['mandatory'] = \true;
                $GLOBALS['TL_DCA']['tl_content']['fields']['fullsize']['eval']['tl_class'] .= ' m12';
                break;
        }
        if (\Contao\System::getContainer()->get('contao.fragment.compositor')->supportsNesting('contao.content_element.' . $objCte->type)) {
            $GLOBALS['TL_DCA']['tl_content']['config']['switchToEdit'] = \true;
        }
    }
    /**
     * Show a hint if a JavaScript library needs to be included in the page layout
     *
     * @param object $dc
     */
    public function showJsLibraryHint($dc)
    {
        if (\Contao\Input::isPost() || \Contao\Input::get('act') != 'edit') {
            return;
        }
        $security = \Contao\System::getContainer()->get('security.helper');
        // Return if the user cannot access the layout module (see #6190)
        if (!$security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_MODULE, 'themes') || !$security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_LAYOUTS)) {
            return;
        }
        $objCte = \Contao\ContentModel::findById($dc->id);
        if ($objCte === \null) {
            return;
        }
        switch ($objCte->type) {
            case 'gallery':
                \Contao\Message::addInfo(\sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplates'], 'moo_mediabox', 'j_colorbox'));
                break;
            case 'sliderStart':
            case 'sliderStop':
                \Contao\Message::addInfo(\sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplate'], 'js_slider'));
                break;
            case 'accordionSingle':
            case 'accordionStart':
            case 'accordionStop':
                \Contao\Message::addInfo(\sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplates'], 'moo_accordion', 'j_accordion'));
                break;
            case 'table':
                if ($objCte->sortable && ($GLOBALS['TL_CTE']['texts']['table'] ?? \null) === \Contao\ContentTable::class) {
                    \Contao\Message::addInfo(\sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplates'], 'moo_tablesort', 'j_tablesort'));
                }
                break;
        }
    }
    /**
     * Add the type of content element
     *
     * @param array $arrRow
     *
     * @return string
     */
    public function addCteType($arrRow)
    {
        $key = $arrRow['invisible'] ? 'unpublished' : 'published';
        $type = $GLOBALS['TL_LANG']['CTE'][$arrRow['type']][0] ?? $arrRow['type'];
        // Remove the class if it is a wrapper element
        if (\in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['start']) || \in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['separator']) || \in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['stop'])) {
            if (($group = $this->getContentElementGroup($arrRow['type'])) !== \null) {
                $type = ($GLOBALS['TL_LANG']['CTE'][$group] ?? $group) . ' (' . $type . ')';
            }
        } elseif (\in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['single'])) {
            if (($group = $this->getContentElementGroup($arrRow['type'])) !== \null) {
                $type = ($GLOBALS['TL_LANG']['CTE'][$group] ?? $group) . ' (' . $type . ')';
            }
        }
        // Add the ID of the aliased element
        if ($arrRow['type'] == 'alias') {
            $type .= ' ID ' . $arrRow['cteAlias'];
        }
        // Add the protection status
        if ($arrRow['protected'] ?? \null) {
            $groupIds = \Contao\StringUtil::deserialize($arrRow['groups'], \true);
            $groupNames = array();
            if (!empty($groupIds)) {
                if (\in_array(-1, \array_map('intval', $groupIds), \true)) {
                    $groupNames[] = $GLOBALS['TL_LANG']['MSC']['guests'];
                }
                if (\null !== ($groups = \Contao\MemberGroupModel::findMultipleByIds($groupIds))) {
                    $groupNames += $groups->fetchEach('name');
                }
            }
            $key .= ' icon-protected';
            $type .= ' (' . $GLOBALS['TL_LANG']['MSC']['protected'] . ($groupNames ? ': ' . \implode(', ', $groupNames) : '') . ')';
        }
        // Add the headline level (see #5858)
        if ($arrRow['type'] == 'headline' && \is_array($headline = \Contao\StringUtil::deserialize($arrRow['headline']))) {
            $type .= ' (' . $headline['unit'] . ')';
        }
        if ($arrRow['start'] && $arrRow['stop']) {
            $type .= ' <span class="visibility">(' . \sprintf($GLOBALS['TL_LANG']['MSC']['showFromTo'], \Contao\Date::parse(\Contao\Config::get('datimFormat'), $arrRow['start']), \Contao\Date::parse(\Contao\Config::get('datimFormat'), $arrRow['stop'])) . ')</span>';
        } elseif ($arrRow['start']) {
            $type .= ' <span class="visibility">(' . \sprintf($GLOBALS['TL_LANG']['MSC']['showFrom'], \Contao\Date::parse(\Contao\Config::get('datimFormat'), $arrRow['start'])) . ')</span>';
        } elseif ($arrRow['stop']) {
            $type .= ' <span class="visibility">(' . \sprintf($GLOBALS['TL_LANG']['MSC']['showTo'], \Contao\Date::parse(\Contao\Config::get('datimFormat'), $arrRow['stop'])) . ')</span>';
        }
        $objModel = new \Contao\ContentModel();
        $objModel->setRow($arrRow);
        $class = 'cte_preview';
        $preview = \Contao\StringUtil::insertTagToSrc($this->getContentElement($objModel));
        if (!empty($arrRow['sectionHeadline'])) {
            $sectionHeadline = \Contao\StringUtil::deserialize($arrRow['sectionHeadline'], \true);
            if (!empty($sectionHeadline['value']) && !empty($sectionHeadline['unit'])) {
                $preview = '<' . $sectionHeadline['unit'] . '>' . $sectionHeadline['value'] . '</' . $sectionHeadline['unit'] . '>' . $preview;
            }
        }
        // Strip HTML comments to check if the preview is empty
        if (\trim(\preg_replace('/<!--(.|\\s)*?-->/', '', $preview)) == '') {
            $class .= ' empty';
        }
        return '
<div class="cte_type ' . $key . '">' . $type . '</div>
<div class="' . $class . '">' . $preview . '</div>';
    }
    /**
     * Throw an exception if the current article is selected (circular reference)
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function saveArticleAlias($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord && $dc->activeRecord->pid == $varValue) {
            throw new \RuntimeException($GLOBALS['TL_LANG']['ERR']['circularPicker']);
        }
        return $varValue;
    }
    /**
     * Throw an exception if the current content element is selected (circular reference)
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function saveAlias($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord && $dc->activeRecord->id == $varValue) {
            throw new \RuntimeException($GLOBALS['TL_LANG']['ERR']['circularPicker']);
        }
        return $varValue;
    }
    /**
     * Return the edit form wizard
     *
     * @param DataContainer $dc
     *
     * @return string
     */
    public function editForm(\Contao\DataContainer $dc)
    {
        if ($dc->value < 1) {
            return '';
        }
        $title = \sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'], $dc->value);
        $href = \Contao\System::getContainer()->get('router')->generate('contao_backend', array('do' => 'form', 'table' => 'tl_form_field', 'id' => $dc->value, 'popup' => '1', 'nb' => '1'));
        return ' <a href="' . \Contao\StringUtil::specialcharsUrl($href) . '" title="' . \Contao\StringUtil::specialchars($title) . '" onclick="Backend.openModalIframe({\'title\':\'' . \Contao\StringUtil::specialchars(\str_replace("'", "\\'", $title)) . '\',\'url\':this.href});return false">' . \Contao\Image::getHtml('alias.svg', $title) . '</a>';
    }
    /**
     * Get all forms and return them as array
     *
     * @return array
     */
    public function getForms()
    {
        $user = \Contao\BackendUser::getInstance();
        if (!$user->isAdmin && !\is_array($user->forms)) {
            return array();
        }
        $arrForms = array();
        $objForms = \Contao\Database::getInstance()->execute("SELECT id, title FROM tl_form ORDER BY title");
        $security = \Contao\System::getContainer()->get('security.helper');
        while ($objForms->next()) {
            if ($security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_EDIT_FORM, $objForms->id)) {
                $arrForms[$objForms->id] = $objForms->title . ' (ID ' . $objForms->id . ')';
            }
        }
        return $arrForms;
    }
    /**
     * Return the edit module wizard
     *
     * @param DataContainer $dc
     *
     * @return string
     */
    public function editModule(\Contao\DataContainer $dc)
    {
        if ($dc->value < 1) {
            return '';
        }
        // DataContainer::getCurrentRecord() will check permission on the record
        try {
            $module = $dc->getCurrentRecord($dc->value, 'tl_module');
        } catch (\Contao\CoreBundle\Exception\AccessDeniedException) {
            return '';
        }
        $title = \sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'], $module['id']);
        $href = \Contao\System::getContainer()->get('router')->generate('contao_backend', array('do' => 'themes', 'table' => 'tl_module', 'act' => 'edit', 'id' => $module['id'], 'popup' => '1', 'nb' => '1'));
        return ' <a href="' . \Contao\StringUtil::specialcharsUrl($href) . '" title="' . \Contao\StringUtil::specialchars($title) . '" onclick="Backend.openModalIframe({\'title\':\'' . \Contao\StringUtil::specialchars(\str_replace("'", "\\'", $title)) . '\',\'url\':this.href});return false">' . \Contao\Image::getHtml('alias.svg', $title) . '</a>';
    }
    /**
     * Dynamically set the ace syntax
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return string
     */
    public function setRteSyntax($varValue, \Contao\DataContainer $dc)
    {
        switch ($dc->activeRecord->highlight) {
            case 'C':
            case 'CSharp':
                $syntax = 'c_cpp';
                break;
            case 'CSS':
            case 'Diff':
            case 'Groovy':
            case 'HTML':
            case 'Java':
            case 'JavaScript':
            case 'Perl':
            case 'PHP':
            case 'PowerShell':
            case 'Python':
            case 'Ruby':
            case 'Scala':
            case 'SQL':
            case 'Text':
            case 'Twig':
            case 'YAML':
                $syntax = \strtolower($dc->activeRecord->highlight);
                break;
            case 'VB':
                $syntax = 'vbscript';
                break;
            case 'XML':
            case 'XHTML':
                $syntax = 'xml';
                break;
            default:
                $syntax = 'text';
                break;
        }
        if ($dc->activeRecord->type == 'markdown') {
            $syntax = 'markdown';
        }
        $GLOBALS['TL_DCA']['tl_content']['fields']['code']['eval']['rte'] = 'ace|' . $syntax;
        return $varValue;
    }
    /**
     * Add a link to the list items import wizard
     *
     * @return string
     */
    public function listImportWizard()
    {
        return ' <a href="' . $this->addToUrl('key=list') . '" title="' . \Contao\StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['lw_import'][1]) . '" data-action="contao--scroll-offset#store">' . \Contao\Image::getHtml('tablewizard.svg', $GLOBALS['TL_LANG']['MSC']['tw_import'][0]) . '</a>';
    }
    /**
     * Add a link to the table items import wizard
     *
     * @return string
     */
    public function tableImportWizard()
    {
        return ' <a href="' . $this->addToUrl('key=table') . '" title="' . \Contao\StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_import'][1]) . '" data-action="contao--scroll-offset#store">' . \Contao\Image::getHtml('tablewizard.svg', $GLOBALS['TL_LANG']['MSC']['tw_import'][0]) . '</a> ' . \Contao\Image::getHtml('demagnify.svg', '', 'title="' . \Contao\StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_shrink']) . '" style="cursor:pointer" onclick="Backend.tableWizardResize(0.9)"') . \Contao\Image::getHtml('magnify.svg', '', 'title="' . \Contao\StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_expand']) . '" style="cursor:pointer" onclick="Backend.tableWizardResize(1.1)"');
    }
    /**
     * Dynamically add flags to the "singleSRC" field
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function setSingleSrcFlags($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord) {
            switch ($dc->activeRecord->type) {
                case 'text':
                case 'hyperlink':
                case 'image':
                case 'accordionSingle':
                case 'youtube':
                case 'vimeo':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = '%contao.image.valid_extensions%';
                    break;
                case 'download':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = \Contao\Config::get('allowedDownload');
                    break;
                case 'markdown':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = 'md';
                    break;
            }
        }
        return $varValue;
    }
    /**
     * Dynamically add flags to the "multiSRC" field
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function setMultiSrcFlags($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord) {
            switch ($dc->activeRecord->type) {
                case 'gallery':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isGallery'] = \true;
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = '%contao.image.valid_extensions%';
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['mandatory'] = !$dc->activeRecord->useHomeDir;
                    break;
                case 'downloads':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isDownloads'] = \true;
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = \Contao\Config::get('allowedDownload');
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['mandatory'] = !$dc->activeRecord->useHomeDir;
                    break;
            }
        }
        return $varValue;
    }
    /**
     * Extract the YouTube ID from a URL
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function extractYouTubeId($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord->youtube != $varValue) {
            $matches = array();
            if (\preg_match('%(?:youtube(?:-nocookie)?\\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\\.be/)([^"&?/ ]{11})%i', $varValue, $matches)) {
                $varValue = $matches[1];
            }
        }
        return $varValue;
    }
    /**
     * Extract the Vimeo ID from a URL
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function extractVimeoId($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord->vimeo != $varValue) {
            $matches = array();
            if (\preg_match('%vimeo\\.com/(?:channels/(?:\\w+/)?|groups/(?:[^/]+)/videos/|album/(?:\\d+)/video/|video/)?(\\d+)(?:$|/|\\?)%i', $varValue, $matches)) {
                // Unlisted video privacy hash
                if (\preg_match('%[?&]h=([0-9a-z]+)%i', $varValue, $matchesHash)) {
                    $varValue = $matches[1] . '?h=' . $matchesHash[1];
                } else {
                    $varValue = $matches[1];
                }
            }
        }
        return $varValue;
    }
}
}

namespace {
/**
 * This file is part of Oveleon Contao Cookiebar.
 *
 * @package     contao-cookiebar
 * @license     AGPL-3.0
 * @author      Daniele Sciannimanica <https://github.com/doishub>
 * @copyright   Oveleon <https://www.oveleon.de/>
 */
// Palette
$GLOBALS['TL_DCA']['tl_content']['palettes']['cookiebar_opener'] = '{type_legend},type,headline;{link_legend},linkTitle,titleText,prefillCookies;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
// Fields
$GLOBALS['TL_DCA']['tl_content']['fields']['prefillCookies'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12'], 'sql' => "char(1) NOT NULL default ''"];
}

namespace {
// Selectors
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'gcShowAlbumSelection';
// Palettes
$GLOBALS['TL_DCA']['tl_content']['palettes'][\Markocupic\GalleryCreatorBundle\Controller\ContentElement\GalleryCreatorController::TYPE] = 'name,type,headline;
{miscellaneous_legend},gcAddBreadcrumb;
{album_selection_legend},gcShowAlbumSelection;
{pagination_legend},gcAlbumsPerPage,gcThumbsPerPage,gcRootAlbum;
{album_listing_legend},gcSorting,gcSortingDirection,gcSizeAlbumListing;
{picture_listing_legend},gcFullSize,gcPictureSorting,gcPictureSortingDirection,gcSizeDetailView;
{template_legend:hide},customTpl;
{protected_legend:hide},protected;
{expert_legend:hide},align,space,cssID';
$GLOBALS['TL_DCA']['tl_content']['palettes'][\Markocupic\GalleryCreatorBundle\Controller\ContentElement\GalleryCreatorNewsController::TYPE] = 'name,type,headline;
{album_listing_legend},gcPublishSingleAlbum;
{pagination_legend},gcThumbsPerPage;
{picture_listing_legend},gcFullSize,gcPictureSorting,gcPictureSortingDirection,gcSizeDetailView;
{template_legend:hide},customTpl;
{protected_legend:hide},protected;
{expert_legend:hide},align,space,cssID';
// Subpalettes
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['gcShowAlbumSelection'] = 'gcAlbumSelection';
$GLOBALS['TL_DCA']['tl_content']['fields']['gcSorting'] = ['eval' => ['tl_class' => 'w50', 'submitOnChange' => \true], 'exclude' => \true, 'inputType' => 'select', 'options' => ['date', 'sorting', 'id', 'tstamp', 'name', 'alias', 'caption', 'visitors'], 'reference' => &$GLOBALS['TL_LANG']['tl_content']['gcSortingField'], 'sql' => "varchar(64) NOT NULL default 'date'"];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcSortingDirection'] = ['eval' => ['tl_class' => 'w50', 'submitOnChange' => \true], 'exclude' => \true, 'inputType' => 'select', 'options' => ['DESC', 'ASC'], 'reference' => &$GLOBALS['TL_LANG']['tl_content']['gcSortingDirection'], 'sql' => "varchar(64) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcPictureSorting'] = ['eval' => ['tl_class' => 'w50', 'submitOnChange' => \false], 'exclude' => \true, 'inputType' => 'select', 'options' => ['sorting', 'id', 'date', 'name', 'cuser', 'caption', 'title'], 'reference' => &$GLOBALS['TL_LANG']['tl_content']['gcSortingField'], 'sql' => "varchar(64) NOT NULL default 'date'"];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcPictureSortingDirection'] = ['eval' => ['tl_class' => 'w50', 'submitOnChange' => \false], 'exclude' => \true, 'inputType' => 'select', 'options' => ['DESC', 'ASC'], 'reference' => &$GLOBALS['TL_LANG']['tl_content']['gcSortingDirection'], 'sql' => "varchar(64) NOT NULL default 'DESC'"];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcAlbumsPerPage'] = ['eval' => ['rgxp' => 'digit', 'tl_class' => 'clr'], 'exclude' => \true, 'inputType' => 'text', 'sql' => "smallint(5) unsigned NOT NULL default '0'"];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcSizeAlbumListing'] = ['eval' => ['rgxp' => 'natural', 'includeBlankOption' => \true, 'nospace' => \true, 'helpwizard' => \true, 'tl_class' => 'w50'], 'exclude' => \true, 'inputType' => 'imageSize', 'options_callback' => static fn() => \Contao\System::getContainer()->get('contao.image.sizes')->getOptionsForUser(\Contao\BackendUser::getInstance()), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcSizeDetailView'] = ['eval' => ['rgxp' => 'natural', 'includeBlankOption' => \true, 'nospace' => \true, 'helpwizard' => \true, 'tl_class' => 'w50'], 'exclude' => \true, 'inputType' => 'imageSize', 'options_callback' => static fn() => \Contao\System::getContainer()->get('contao.image.sizes')->getOptionsForUser(\Contao\BackendUser::getInstance()), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcFullSize'] = ['eval' => ['isBoolean' => \true, 'tl_class' => 'clr'], 'exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcThumbsPerPage'] = ['eval' => ['rgxp' => 'digit', 'tl_class' => 'clr'], 'exclude' => \true, 'inputType' => 'text', 'sql' => "smallint(5) unsigned NOT NULL default '0'"];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcShowAlbumSelection'] = ['eval' => ['submitOnChange' => \true, 'isBoolean' => \true, 'tl_class' => 'clr'], 'exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcAlbumSelection'] = ['eval' => ['mandatory' => \true, 'multiple' => \true, 'tl_class' => 'w50 clr'], 'exclude' => \true, 'inputType' => 'gcAlbumTree', 'sql' => 'blob NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcPublishSingleAlbum'] = ['eval' => ['mandatory' => \false, 'tl_class' => 'clr'], 'exclude' => \true, 'inputType' => 'radio', 'sql' => 'blob NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['gcAddBreadcrumb'] = ['eval' => ['isBoolean' => \true, 'tl_class' => 'clr'], 'exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) NOT NULL default ''"];
}

namespace {
/**
 * @copyright  Softleister 2010-2024
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see        https://github.com/do-while/contao-ce_be_remarks
 *
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['be_remarks'] = '{type_legend},type,headline;{text_legend},remark_icon,text;{fe_legend:hide},html;';
$GLOBALS['TL_DCA']['tl_content']['fields']['remark_icon'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['remark_icon'], 'default' => 'show', 'exclude' => \true, 'inputType' => 'radioTable', 'options' => ['show', 'help', 'important', 'stop', 'error', 'edit', 'ok', 'delete', 'new', 'visible', 'featured', 'lock-locked'], 'eval' => ['cols' => 12], 'reference' => &$GLOBALS['TL_LANG']['tl_content']['be_remark'], 'sql' => "varchar(16) NOT NULL default 'show'");
}

namespace {
// Dynamically add the permission check and other callbacks
if (\Contao\Input::get('do') == 'calendar') {
    \Contao\System::loadLanguageFile('tl_calendar_events');
    $GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_calendar', 'generateFeed');
}
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @property Calendar $Calendar
 *
 * @internal
 */
class tl_content_calendar extends \Contao\Backend
{
    /**
     * Check for modified calendar feeds and update the XML files if necessary
     */
    public function generateFeed()
    {
        $objSession = \Contao\System::getContainer()->get('request_stack')->getSession();
        $session = $objSession->get('calendar_feed_updater');
        if (empty($session) || !\is_array($session)) {
            return;
        }
        $request = \Contao\System::getContainer()->get('request_stack')->getCurrentRequest();
        if ($request) {
            $origScope = $request->attributes->get('_scope');
            $request->attributes->set('_scope', 'frontend');
        }
        $calendar = new \Contao\Calendar();
        foreach ($session as $id) {
            $calendar->generateFeedsByCalendar($id);
        }
        if ($request) {
            $request->attributes->set('_scope', $origScope);
        }
        $objSession->set('calendar_feed_updater', \null);
    }
}
}

namespace {
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2022 Contao Stammtisch Dresden
 * @package advanced-classes
 * @author Mathias Arzberger <develop@pdir.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['advancedCss'] = ['exclude' => \true, 'search' => \false, 'inputType' => 'text', 'eval' => ['maxlength' => 255], 'sql' => "varchar(255) NOT NULL default ''"];
}

namespace {
\Contao\Controller::loadDataContainer('tl_module');
\Contao\System::loadLanguageFile('tl_module');
/*
 * Add palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['newsfilter'] = '{type_legend},type,headline;{include_legend},news_module,news_filterCategories,news_relatedCategories,news_filterDefault,news_filterPreserve;{link_legend:hide},news_categoryFilterPage;{image_legend:hide},news_categoryImgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
/*
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['news_filterCategories'] =& $GLOBALS['TL_DCA']['tl_module']['fields']['news_filterCategories'];
$GLOBALS['TL_DCA']['tl_content']['fields']['news_relatedCategories'] =& $GLOBALS['TL_DCA']['tl_module']['fields']['news_relatedCategories'];
$GLOBALS['TL_DCA']['tl_content']['fields']['news_includeSubcategories'] =& $GLOBALS['TL_DCA']['tl_module']['fields']['news_includeSubcategories'];
$GLOBALS['TL_DCA']['tl_content']['fields']['news_filterDefault'] =& $GLOBALS['TL_DCA']['tl_module']['fields']['news_filterDefault'];
$GLOBALS['TL_DCA']['tl_content']['fields']['news_filterPreserve'] =& $GLOBALS['TL_DCA']['tl_module']['fields']['news_filterPreserve'];
$GLOBALS['TL_DCA']['tl_content']['fields']['news_categoryFilterPage'] =& $GLOBALS['TL_DCA']['tl_module']['fields']['news_categoryFilterPage'];
$GLOBALS['TL_DCA']['tl_content']['fields']['news_categoryImgSize'] =& $GLOBALS['TL_DCA']['tl_module']['fields']['news_categoryImgSize'];
$GLOBALS['TL_DCA']['tl_content']['fields']['news_module'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['module'],
    'exclude' => \true,
    'inputType' => 'select',
    // 'options_callback' => ContentNewsModuleOptionsListener
    'eval' => ['mandatory' => \true, 'chosen' => \true, 'submitOnChange' => \true],
    'wizard' => [['tl_content', 'editModule']],
    'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0],
];
}

namespace {
if ('nodes' === \Contao\Input::get('do')) {
    $GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_node';
    $GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = ['terminal42_node.listener.content', 'onLoadCallback'];
    $GLOBALS['TL_DCA']['tl_content']['list']['sorting']['headerFields'] = ['pid', 'name', 'tstamp'];
}
/*
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'nodesWrapper';
$GLOBALS['TL_DCA']['tl_content']['palettes']['nodes'] = '{type_legend},type;{include_legend},nodes,nodesWrapper;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['nodesWrapper'] = 'cssID';
/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['nodes'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['nodes'], 'exclude' => \true, 'inputType' => 'nodePicker', 'eval' => ['mandatory' => \true, 'multiple' => \true, 'fieldType' => 'checkbox', 'tl_class' => 'clr'], 'sql' => ['type' => 'blob', 'notnull' => \false], 'save_callback' => [['terminal42_node.listener.content', 'onNodesSaveCallback']]];
$GLOBALS['TL_DCA']['tl_content']['fields']['nodesWrapper'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['nodesWrapper'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['submitOnChange' => \true, 'tl_class' => 'clr'], 'sql' => ['type' => 'string', 'length' => 1, 'default' => '']];
}

namespace {
// Add palette to tl_content
$GLOBALS['TL_DCA']['tl_content']['palettes']['comments'] = '{type_legend},type,headline;{comment_legend},com_order,com_perPage,com_moderate,com_bbcode,com_requireLogin,com_disableCaptcha;{template_legend:hide},com_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop';
// Add fields to tl_content
$GLOBALS['TL_DCA']['tl_content']['fields']['com_order'] = array('inputType' => 'select', 'options' => array('ascending', 'descending'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'ascending'");
$GLOBALS['TL_DCA']['tl_content']['fields']['com_perPage'] = array('inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0");
$GLOBALS['TL_DCA']['tl_content']['fields']['com_moderate'] = array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_content']['fields']['com_bbcode'] = array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_content']['fields']['com_disableCaptcha'] = array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_content']['fields']['com_requireLogin'] = array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false));
$GLOBALS['TL_DCA']['tl_content']['fields']['com_template'] = array('inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('com_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
}

namespace {
\Contao\System::loadLanguageFile('tl_module');
$GLOBALS['TL_DCA']['tl_content']['palettes']['eventlist_fixed_range'] = '{type_legend},type,headline;{cmace_legend},text,cal_calendar,cal_noSpan,cal_featured,cal_order,cal_readerModule,cal_limit,perPage,cal_hideRunning,cmaceEventsHeadline,cmaceEventsFrom,cmaceEventsUntil;{template_legend:hide},cal_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_content']['fields'] = \array_merge(['cmaceEventsHeadline' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cmaceEventsHeadline'], 'exclude' => \true, 'search' => \true, 'inputType' => 'inputUnit', 'options' => ['h3', 'h4', 'h5', 'h6'], 'eval' => ['maxlength' => 200, 'tl_class' => 'w50 clr'], 'sql' => ['type' => 'text', 'length' => 1000, 'default' => 'a:2:{s:5:"value";s:0:"";s:4:"unit";s:2:"h3";}']]], ['cal_calendar' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cal_calendar'], 'exclude' => \true, 'search' => \true, 'inputType' => 'checkbox', 'eval' => ['mandatory' => \false, 'multiple' => \true, 'tl_class' => 'w100'], 'sql' => ['type' => 'blob', 'length' => 65535, 'notnull' => \false]]], ['cal_noSpan' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cal_noSpan'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'clr w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']]], ['cal_hideRunning' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cal_hideRunning'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']]], ['cal_order' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cal_order'], 'exclude' => \true, 'inputType' => 'select', 'options' => ['ascending', 'descending'], 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 16, 'default' => 'ascending']]], ['cal_readerModule' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cal_readerModule'], 'exclude' => \true, 'inputType' => 'select', 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => ['includeBlankOption' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'integer', 'length' => 10, 'unsigned' => \true, 'default' => 0]]], ['cal_limit' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cal_limit'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'natural', 'tl_class' => 'w50'], 'sql' => ['type' => 'smallint', 'length' => 5, 'unsigned' => \true, 'default' => 0]]], ['perPage' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['perPage'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'natural', 'tl_class' => 'w50'], 'sql' => ['type' => 'smallint', 'length' => 5, 'unsigned' => \true, 'default' => 0]]], ['cal_template' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cal_template'], 'exclude' => \true, 'inputType' => 'select', 'options_callback' => static fn() => \Contao\Controller::getTemplateGroup('event_'), 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 256, 'default' => '']]], ['cal_featured' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cal_featured'], 'exclude' => \true, 'inputType' => 'select', 'options' => ['all_items', 'featured', 'unfeatured'], 'reference' => &$GLOBALS['TL_LANG']['tl_module']['events'], 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 16, 'default' => 'all_items']]], ['cmaceEventsFrom' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cmaceEventsFrom'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'date', 'doNotCopy' => \true, 'datepicker' => \true, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'bigint', 'length' => 20, 'notnull' => \false]]], ['cmaceEventsUntil' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cmaceEventsUntil'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'date', 'doNotCopy' => \true, 'datepicker' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'bigint', 'length' => 20, 'notnull' => \false]]], ['cmaceEvents' => ['label' => &$GLOBALS['TL_LANG']['tl_content']['cmaceEvents'], 'exclude' => \true, 'search' => \true, 'inputType' => 'picker', 'relation' => ['type' => 'hasMany', 'load' => 'lazy', 'table' => 'tl_calendar_events'], 'eval' => ['mandatory' => \false, 'multiple' => \true, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'blob', 'length' => 65535, 'notnull' => \false]]], $GLOBALS['TL_DCA']['tl_content']['fields']);
}

namespace {
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('subline', 'headline')->addField('headline_inline', 'subline')->addField('subheadline', 'headline_inline')->applyToPalette('headline', 'tl_content')->applyToPalette('text', 'tl_content');
$GLOBALS['TL_DCA']['tl_content']['palettes']['ct_contentBox'] = '{type_legend},type,headline,subline,headline_inline;{text_legend},text;{ct_contentBox_settings},ct_contentBox_page,target,ct_contentBox_pageText,ct_contentBox_pageTitle;{template_legend:hide},ct_contentBox_customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA']['tl_content']['palettes']['ct_featureElement'] = '{type_legend},type,headline;{text_legend},text,ct_featureIcon,ct_iconLink,target,titleText;{template_legend:hide},ct_featureElement_customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA']['tl_content']['palettes']['ct_priceBox'] = '{type_legend},type,headline;{text_legend},text,ct_price,ct_priceLabel,ct_priceBox_link1,ct_priceBox_linkText1,ct_priceBox_link2,ct_priceBox_linkText2,ct_popularPriceBox;{template_legend:hide},ct_priceBox_customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['ct_teaserBox'] = '{type_legend},type,headline,subline,headline_inline;{text_legend},text;{ct_teaserBox_settings},ct_teaserBox_page,target,ct_teaserBox_pageText,ct_teaserBox_pageTitle;{image_legend},addImage;{template_legend:hide},ct_teaserBox_customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA']['tl_content']['palettes']['ct_wrapperStart'] = '{type_legend},type,ct_wrapper_name;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['ct_wrapperStop'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['ct_sliderElement'] = '{type_legend},type,headline,ct_sliderElement_subHeadline;{text_legend},text,ct_sliderElement_page,ct_sliderElement_target,ct_sliderElement_linkText;{image_legend},addImage;{video_legend},ct_sliderElement_playerSRC;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';
/*
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['subline'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['subline'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['headline_inline'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['headline_inline'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 clr'], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['subheadline'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['subheadline'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => "char(1) NOT NULL default ''"];
/* Content Box */
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_contentBox_page'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_contentBox_page'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \false, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 255, 'dcaPicker' => \true, 'addWizardClass' => \false, 'tl_class' => 'w50'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['target'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['target'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12'], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_contentBox_pageText'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_contentBox_pageText'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'reference' => &$GLOBALS['TL_LANG']['tl_content']['ct_ContentBox_pageText'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_contentBox_pageTitle'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_contentBox_pageTitle'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'reference' => &$GLOBALS['TL_LANG']['tl_content']['ct_contentBox_pageTitle'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_contentBox_customTpl'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_contentBox_customTpl'], 'exclude' => \true, 'inputType' => 'select', 'options_callback' => ['tl_content_ct', 'getContentBoxTemplates'], 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'], 'sql' => "varchar(64) NOT NULL default ''"];
/* Feature Element */
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_featureIcon'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_featureIcon'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50 clr'], 'sql' => "varchar(64) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_iconLink'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_iconLink'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \false, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 255, 'dcaPicker' => \true, 'addWizardClass' => \false, 'tl_class' => 'w50 clr'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_featureElement_customTpl'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_featureElement_customTpl'], 'exclude' => \true, 'inputType' => 'select', 'options_callback' => ['tl_content_ct', 'getFeatureElementTemplates'], 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'], 'sql' => "varchar(64) NOT NULL default ''"];
/* Price Box */
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_price'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_price'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50 clr'], 'sql' => "varchar(20) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_priceLabel'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_priceLabel'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => "varchar(50) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_priceBox_link1'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_priceBox_link1'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \false, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 255, 'dcaPicker' => \true, 'addWizardClass' => \false, 'tl_class' => 'w50 clr'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_priceBox_linkText1'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_priceBox_linkText1'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_priceBox_link2'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_priceBox_link2'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \false, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 255, 'dcaPicker' => \true, 'addWizardClass' => \false, 'tl_class' => 'w50 clr'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_priceBox_linkText2'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_priceBox_linkText2'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_popularPriceBox'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_popularPriceBox'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50 clr'], 'sql' => "varchar(50) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_priceBox_customTpl'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_priceBox_customTpl'], 'exclude' => \true, 'inputType' => 'select', 'options_callback' => ['tl_content_ct', 'getPriceBoxTemplates'], 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'], 'sql' => "varchar(64) NOT NULL default ''"];
/* Teaserbox */
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_teaserBox_page'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_teaserBox_page'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \false, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 255, 'dcaPicker' => \true, 'addWizardClass' => \false, 'tl_class' => 'w50'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_teaserBox_pageText'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_teaserBox_pageText'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_teaserBox_pageTitle'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_teaserBox_pageTitle'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_teaserBox_customTpl'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_teaserBox_customTpl'], 'exclude' => \true, 'inputType' => 'select', 'options_callback' => ['tl_content_ct', 'getTeaserBoxTemplates'], 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'], 'sql' => "varchar(64) NOT NULL default ''"];
/* Wrapper */
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_wrapper_name'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_wrapper_name'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => 'text NULL'];
/* Slider Element */
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_sliderElement_page'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_sliderElement_page'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \false, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 255, 'dcaPicker' => \true, 'addWizardClass' => \false, 'tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_sliderElement_linkText'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_sliderElement_linkText'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_sliderElement_target'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_sliderElement_target'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12'], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_sliderElement_subHeadline'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_sliderElement_subHeadline'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_content']['fields']['ct_sliderElement_playerSRC'] = ['label' => &$GLOBALS['TL_LANG']['tl_content']['ct_sliderElement_playerSRC'], 'exclude' => \true, 'inputType' => 'fileTree', 'eval' => ['tl_class' => 'w50', 'fieldType' => 'radio', 'files' => \true], 'sql' => 'blob NULL'];
class tl_content_ct extends \Contao\Backend
{
    /**
     * Return all content element templates as array.
     *
     * @return array
     */
    public function getContentBoxTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_cthemes_contentbox');
    }
    public function getFeatureElementTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_cthemes_feature_element');
    }
    public function getPriceBoxTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_cthemes_pricebox');
    }
    public function getTeaserBoxTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_cthemes_teaserbox');
    }
    public function getWrapperTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_cthemes_wrapper');
    }
}
}

namespace {
/**
 * Add palette to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['mateTeaserBox'] = '{type_legend},type,headline;{text_legend},text,mateTeaserbox_subHeadline;{image_legend},addImage;{mateTeaserBoxSettings},mateTeaserBox_page,mateTeaserBox_pageText,mateTeaserBox_class;{mateTeaserBoxPlus_legend},mateTeaserBoxPlus;{template_legend:hide},mateTeaserBox_customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['mateContentBox'] = '{type_legend},type,headline;{text_legend},text;{image_legend},addImage;{mateContentBoxSettings},mateContentBox_page,mateContentBox_pageText;{template_legend:hide},mateContentBox_customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['mateParallaxElement'] = '{type_legend},type,headline;{mateParallaxElementSettings},mateParallaxElement_text,mateParallaxElement_height,mateTeaserBox_page,mateTeaserBox_pageText;{image_legend},addImage;{template_legend:hide},mateParallaxElement_customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['mateTextBackgroundElement'] = '{type_legend},type,headline;{text_legend},text;{image_legend},addImage;{mateTextBackground_settings},mate_background_image;{template_legend:hide},mateTextBackgroundElement_customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['mateModal'] = '{type_legend},type;{modal_link_legend},mateModal_linkText,mateModal_linkClass;{modal_headline_legend},headline;{modal_text_legend},mateModal_text,mateModal_class;{template_legend:hide},mateModal_customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'mateTeaserBoxPlus';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['mateTeaserBoxPlus'] = 'mateTeaserBoxPlus_text,mateTeaserBoxPlus_color,mateTeaserBoxPlus_bg,mateTeaserBoxPlus_colorHover,mateTeaserBoxPlus_bgHover,mateTeaserBoxPlus_size';
/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBox_page'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'url', 'decodeEntities' => \true, 'tl_class' => 'w50 wizard', 'dcaPicker' => \true), 'reference' => &$GLOBALS['TL_LANG']['tl_content']['mateTeaserBox_page'], 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBox_pageText'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['tl_content']['mateTeaserBox_pageText'], 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateContentBox_page'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'url', 'decodeEntities' => \true, 'tl_class' => 'w50 wizard', 'dcaPicker' => \true), 'reference' => &$GLOBALS['TL_LANG']['tl_content']['mateContentBox_page'], 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateContentBox_pageText'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['tl_content']['mateContentBox_pageText'], 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateContentBox_customTpl'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_content_mate', 'getContentBoxTemplates'), 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBox_customTpl'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_content_mate', 'getTeaserBoxTemplates'), 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserbox_subHeadline'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50 clr'), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateParallaxElement_customTpl'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_content_mate', 'getParallaxElementTemplates'), 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateParallaxElement_text'] = array('exclude' => \true, 'search' => \true, 'inputType' => 'textarea', 'eval' => array('tl_class' => 'clr', 'rte' => 'tinyMCE'), 'sql' => "TEXT NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateParallaxElement_height'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50 clr'), 'sql' => "varchar(5) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_content']['fields']['mate_background_image'] = array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => array('filesOnly' => \true, 'fieldType' => 'radio', 'feEditable' => \true, 'feViewable' => \true, 'feGroup' => 'personal', 'tl_class' => 'w50 autoheight'), 'load_callback' => array(array('tl_content_mate', 'setSingleSrcFlags')), 'sql' => "binary(16) NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTextBackgroundElement_customTpl'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_content_mate', 'getTextBackgroundElementTemplates'), 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''");
/* ModalElement */
$GLOBALS['TL_DCA']['tl_content']['fields']['mateModal_linkText'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateModal_linkClass'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateModal_text'] = array('exclude' => \true, 'search' => \true, 'inputType' => 'textarea', 'eval' => array('rte' => 'tinyMCE'), 'sql' => "TEXT NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateModal_customTpl'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_content_mate', 'getModalTemplates'), 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateModal_class'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBox_class'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'], 'sql' => "text NULL"];
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBoxPlus'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 clr', 'submitOnChange' => \true], 'sql' => ['type' => 'boolean', 'default' => \false]];
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBoxPlus_bg'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w33'], 'sql' => "text NULL"];
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBoxPlus_bgHover'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w33'], 'sql' => "text NULL"];
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBoxPlus_text'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w33'], 'sql' => "text NULL"];
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBoxPlus_color'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w33'], 'sql' => "text NULL"];
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBoxPlus_colorHover'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['tl_class' => 'w33'], 'sql' => "text NULL"];
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBoxPlus_size'] = ['exclude' => \true, 'inputType' => 'select', 'options' => &$GLOBALS['TL_LANG']['tl_content']['mateTeaserBoxPlus_size']['options'], 'eval' => ['chosen' => \true, 'tl_class' => 'w33'], 'sql' => "varchar(64) NOT NULL default 'normal'"];
class tl_content_mate extends \Contao\Backend
{
    /**
     * Return all content element templates as array
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getContentBoxTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_mate_contentbox');
    }
    public function getTeaserBoxTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_mate_teaserbox');
    }
    public function getParallaxElementTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_mate_parallax');
    }
    public function getTextBackgroundElementTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_mate_text_with_background');
    }
    public function getModalTemplates(\Contao\DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_mate_modal');
    }
    /**
     * Dynamically add flags to the "singleSRC" field
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function setSingleSrcFlags($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord) {
            switch ($dc->activeRecord->type) {
                case 'text':
                case 'hyperlink':
                case 'image':
                case 'accordionSingle':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = \Contao\Config::get('validImageTypes');
                    break;
                case 'download':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = \Contao\Config::get('allowedDownload');
                    break;
            }
        }
        return $varValue;
    }
}
}
