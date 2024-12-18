<?php

namespace {
/*
 * Table tl_dlstats
 */
$GLOBALS['TL_DCA']['tl_dlstats'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'ctable' => array('tl_dlstatdets'), 'closed' => \true, 'sql' => array('keys' => array('id' => 'primary', 'filename' => 'index'))),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default '0'"), 'filename' => array('sql' => "varchar(255) NOT NULL default ''"), 'downloads' => array('sql' => "int(10) unsigned NOT NULL default '0'")),
);
}
