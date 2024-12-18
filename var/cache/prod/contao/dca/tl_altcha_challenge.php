<?php

namespace {
$GLOBALS['TL_DCA']['tl_altcha_challenge'] = ['config' => ['dataContainer' => \Contao\DC_Table::class, 'sql' => ['keys' => ['id' => 'primary']]], 'fields' => ['id' => ['sql' => ['type' => \Doctrine\DBAL\Types\Types::INTEGER, 'length' => 10, 'unsigned' => \true, 'notnull' => \true, 'autoincrement' => \true]], 'tstamp' => ['sql' => ['type' => \Doctrine\DBAL\Types\Types::INTEGER, 'length' => 10, 'unsigned' => \true, 'notnull' => \true, 'default' => 0]], 'challenge' => ['sql' => ['type' => \Doctrine\DBAL\Types\Types::STRING, 'length' => 1024, 'notnull' => \true, 'default' => '']], 'solved' => ['sql' => ['type' => \Doctrine\DBAL\Types\Types::STRING, 'length' => 1, 'fixed' => \true, 'notnull' => \true, 'default' => '']], 'expires' => ['sql' => ['type' => \Doctrine\DBAL\Types\Types::INTEGER, 'length' => 10, 'unsigned' => \true, 'notnull' => \true, 'default' => 0]]]];
}
