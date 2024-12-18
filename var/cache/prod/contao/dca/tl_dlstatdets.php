<?php

namespace {
/*
 * Table tl_dlstatdets
 */
$GLOBALS['TL_DCA']['tl_dlstatdets'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'ptable' => 'tl_dlstats', 'closed' => \true, 'notEditable' => \true, 'sql' => array('keys' => array('id' => 'primary', 'pid' => 'index'))),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'pid' => array('sql' => "int(10) unsigned NOT NULL default '0'"), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default '0'"), 'ip' => array('sql' => "varchar(64) NOT NULL default ''"), 'username' => array('sql' => "varchar(64) NOT NULL default ''"), 'domain' => array('sql' => "varchar(64) NOT NULL default ''"), 'page_host' => array('sql' => "varchar(255) NOT NULL default ''"), 'page_id' => array('sql' => "int(10) unsigned NOT NULL default '0'"), 'browser_lang' => array('sql' => "varchar(10) NOT NULL default ''")),
);
}
