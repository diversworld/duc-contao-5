<?php

namespace {
$GLOBALS['TL_DCA']['tl_lead'] = ['config' => ['dataContainer' => \Contao\DC_Table::class, 'enableVersioning' => \true, 'closed' => \true, 'notEditable' => \true, 'notCopyable' => \true, 'ctable' => ['tl_lead_data'], 'sql' => ['keys' => ['id' => 'primary', 'main_id' => 'index']]], 'list' => ['sorting' => ['mode' => 2, 'fields' => ['created DESC'], 'flag' => 8, 'panelLayout' => 'filter;data_search,sort,limit'], 'label' => ['fields' => ['created'], 'format' => &$GLOBALS['TL_LANG']['tl_lead']['label_format']], 'global_operations' => ['all' => ['href' => 'act=select', 'class' => 'header_edit_all', 'attributes' => 'onclick="Backend.getScrollOffset();" accesskey="e"']], 'operations' => ['delete' => ['href' => 'act=delete', 'icon' => 'delete.svg', 'attributes' => 'onclick="if (!confirm(\'' . ($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? '') . '\')) return false; Backend.getScrollOffset();"'], 'show' => ['href' => 'act=show', 'icon' => 'show.svg']]], 'fields' => ['id' => ['sql' => ['type' => 'integer', 'unsigned' => \true, 'autoincrement' => \true]], 'tstamp' => ['sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0]], 'main_id' => ['foreignKey' => "tl_form.CONCAT(title, ' (ID ', id, ')')", 'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0], 'relation' => ['table' => 'tl_form', 'type' => 'hasOne']], 'form_id' => ['filter' => \true, 'sorting' => \true, 'foreignKey' => "tl_form.CONCAT(title, ' (ID ', id, ')')", 'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0], 'relation' => ['table' => 'tl_form', 'type' => 'hasOne']], 'language' => ['filter' => \true, 'sorting' => \true, 'sql' => ['type' => 'string', 'length' => 5, 'default' => '']], 'created' => ['sorting' => \true, 'flag' => 8, 'eval' => ['rgxp' => 'datim'], 'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0]], 'member_id' => ['filter' => \true, 'sorting' => \true, 'flag' => 12, 'foreignKey' => "tl_member.CONCAT(lastname, ' ', firstname)", 'sql' => ['type' => 'integer', 'unsigned' => \true, 'default' => 0], 'relation' => ['table' => 'tl_member', 'type' => 'hasOne']], 'post_data' => ['eval' => ['doNotShow' => \true], 'sql' => ['type' => 'blob', 'length' => \Doctrine\DBAL\Platforms\AbstractMySQLPlatform::LENGTH_LIMIT_MEDIUMBLOB, 'notnull' => \false]]]];
}

namespace {
/*
 * This file is part of cgoit\contao-leads-optin-bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2024, cgoIT
 * @author     cgoIT <https://cgo-it.de>
 * @author     Christopher Bölter
 * @license    LGPL-3.0-or-later
 */
// Keys
$GLOBALS['TL_DCA']['tl_lead']['config']['sql']['keys']['optin_token'] = 'index';
$GLOBALS['TL_DCA']['tl_lead']['config']['sql']['keys']['post_data'] = 'index';
// Operations
$GLOBALS['TL_DCA']['tl_lead']['list']['operations']['leadsoptin'] = ['icon' => 'member.svg'];
// Fields
$GLOBALS['TL_DCA']['tl_lead']['fields']['optin_token'] = ['sql' => ['type' => 'string', 'length' => 32, 'default' => '']];
$GLOBALS['TL_DCA']['tl_lead']['fields']['optin_tstamp'] = ['sql' => ['type' => 'integer', 'length' => 10, 'unsigned' => \true, 'default' => 0]];
$GLOBALS['TL_DCA']['tl_lead']['fields']['optin_files'] = ['sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_lead']['fields']['optin_labels'] = ['sql' => ['type' => 'text', 'length' => 65535, 'notnull' => \false]];
$GLOBALS['TL_DCA']['tl_lead']['fields']['optin_ip'] = ['sql' => ['type' => 'string', 'length' => 64, 'default' => '']];
$GLOBALS['TL_DCA']['tl_lead']['fields']['optin_notification_tstamp'] = ['sql' => ['type' => 'integer', 'length' => 10, 'unsigned' => \true, 'default' => 0]];
}
