<?php

namespace {
$GLOBALS['TL_DCA']['tl_cookie_log'] = [
    // Palettes
    'palettes' => ['default' => '{log_legend},cid,version,tstamp,domain,url,ip,config'],
    // Fields
    'fields' => ['id' => ['sorting' => \true, 'sql' => "int(10) unsigned NOT NULL auto_increment"], 'cid' => ['sql' => "int(10) unsigned NOT NULL default 0"], 'version' => ['sorting' => \true, 'sql' => "int(10) unsigned NOT NULL default 0"], 'tstamp' => ['filter' => \true, 'sorting' => \true, 'flag' => 6, 'sql' => "int(10) unsigned NOT NULL default 0"], 'domain' => ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'sql' => "varchar(255) NOT NULL default ''"], 'url' => ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'sql' => "varchar(255) NOT NULL default ''"], 'ip' => ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'sql' => "varchar(255) NOT NULL default ''"], 'config' => ['exclude' => \true, 'search' => \true, 'inputType' => 'text', 'sql' => "text NULL"]],
    // Config
    'config' => ['dataContainer' => \Contao\DC_Table::class, 'notCopyable' => \true, 'notEditable' => \true, 'notCreatable' => \true, 'sql' => ['keys' => ['id' => 'primary', 'cid' => 'index']]],
    // List
    'list' => ['sorting' => ['mode' => \Contao\DataContainer::MODE_SORTABLE, 'flag' => \Contao\DataContainer::SORT_INITIAL_LETTER_DESC, 'fields' => ['tstamp'], 'panelLayout' => 'filter;sort,search,limit'], 'label' => ['fields' => ['id', 'cid', 'version', 'domain', 'url', 'ip', 'tstamp'], 'showColumns' => \true], 'global_operations' => ['all', 'export' => ['href' => 'key=export', 'icon' => 'theme_export.svg']], 'operations' => ['delete', 'show']],
];
}