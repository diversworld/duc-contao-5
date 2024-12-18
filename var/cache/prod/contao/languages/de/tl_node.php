<?php

$GLOBALS['TL_LANG']['tl_node']['name'] = ['Name', 'Bitte einen internen Namen des Nodes vergeben.'];
$GLOBALS['TL_LANG']['tl_node']['type'] = ['Typ', 'Hier können Sie den Typ des Nodes auswählen.'];
$GLOBALS['TL_LANG']['tl_node']['wrapper'] = ['Wrapper hinzufügen', 'Hier können Sie einen Wrapper um diesen Node ausgeben.'];
$GLOBALS['TL_LANG']['tl_node']['cssID'] = ['CSS-ID/Klasse', 'Hier können Sie eine ID und beliebig viele Klassen eingeben.'];
$GLOBALS['TL_LANG']['tl_node']['nodeTpl'] = ['Node-Template', 'Hier können Sie ein Node-Template auswählen.'];
$GLOBALS['TL_LANG']['tl_node']['languages'] = ['Sprachen', 'Hier können Sprachen für den Noden eingestellt werden, nach denen im Backend gefiltert werden kann.'];
$GLOBALS['TL_LANG']['tl_node']['tags'] = ['Tags', 'Hier können Sie Tags für den Node vergeben, nach denen Im Backend gefiltert werden kann.'];
$GLOBALS['TL_LANG']['tl_node']['pid'] = ['Parent node'];
$GLOBALS['TL_LANG']['tl_node']['tstamp'] = ['Revision date'];
$GLOBALS['TL_LANG']['tl_node']['protected'] = ['Node schützen', 'Den node nur bestimmten Mitgliedergruppen anzeigen.'];
$GLOBALS['TL_LANG']['tl_node']['groups'] = ['Erlaubte Mitgliedergruppen', 'Diese Gruppen können den Node sehen.'];
$GLOBALS['TL_LANG']['tl_node']['guests'] = ['Nur Gästen anzeigen', 'Den Node verstecken, sobald ein Mitglied angemeldet ist.'];
$GLOBALS['TL_LANG']['tl_node']['geoip_visibility'] = ['IP Geolokalisierung', 'Diesen Node für Besucher aus gewissen Ländern ein- oder ausblenden.'];
$GLOBALS['TL_LANG']['tl_node']['geoip_countries'] = ['Länder', 'Wählen Sie die Länder welche diesen Node (nicht) sehen dürfen.'];
/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_node']['name_legend'] = 'Name und Typ';
$GLOBALS['TL_LANG']['tl_node']['filter_legend'] = 'Filter Einstellungen';
$GLOBALS['TL_LANG']['tl_node']['wrapper_legend'] = 'Wrapper Einstellungen';
$GLOBALS['TL_LANG']['tl_node']['protected_legend'] = 'Zugriffsberechtigungen';
/*
 * Reference
 */
$GLOBALS['TL_LANG']['tl_node']['typeRef'] = [\Terminal42\NodeBundle\Model\NodeModel::TYPE_CONTENT => 'Inhalt', \Terminal42\NodeBundle\Model\NodeModel::TYPE_FOLDER => 'Ordner'];
/*
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_node']['new'] = ['Neuer Node', 'Neuen Node erzeugen'];
$GLOBALS['TL_LANG']['tl_node']['show'] = ['Node Details', 'Details des Node ID %s anzeigen'];
$GLOBALS['TL_LANG']['tl_node']['edit'] = ['Node bearbeiten', 'Node ID %s bearbeiten'];
$GLOBALS['TL_LANG']['tl_node']['editheader'] = ['Node Einstellungen bearbeiten', 'Die Node Einstellungen bearbeiten'];
$GLOBALS['TL_LANG']['tl_node']['cut'] = ['Node verschieben', 'Node ID %s verschieben'];
$GLOBALS['TL_LANG']['tl_node']['copy'] = ['Node duplizieren', 'Node ID %s duplizieren'];
$GLOBALS['TL_LANG']['tl_node']['copyChilds'] = ['Node mit Subnodes duplizieren', 'Node ID %s inklusive Subnodes duplizieren'];
$GLOBALS['TL_LANG']['tl_node']['delete'] = ['Node löschen', 'Node ID %s löschen'];
$GLOBALS['TL_LANG']['tl_node']['pasteafter'] = ['Einfügen in', 'Nach dem Node ID %s einfügen'];
$GLOBALS['TL_LANG']['tl_node']['pasteinto'] = ['Einfügen nach', 'In den Node ID %s einfügen'];
