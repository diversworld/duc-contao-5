<?php

// vendor/contao/calendar-bundle/contao/languages/de/tl_calendar.xlf
$GLOBALS['TL_LANG']['tl_calendar']['title']['0'] = 'Titel';
$GLOBALS['TL_LANG']['tl_calendar']['title']['1'] = 'Bitte geben Sie den Kalender-Titel ein.';
$GLOBALS['TL_LANG']['tl_calendar']['jumpTo']['0'] = 'Weiterleitungsseite';
$GLOBALS['TL_LANG']['tl_calendar']['jumpTo']['1'] = 'Bitte wählen Sie die Eventleser-Seite aus, zu der Besucher weitergeleitet werden, wenn sie ein Event anklicken.';
$GLOBALS['TL_LANG']['tl_calendar']['protected']['0'] = 'Kalender schützen';
$GLOBALS['TL_LANG']['tl_calendar']['protected']['1'] = 'Events nur bestimmten Mitgliedergruppen anzeigen.';
$GLOBALS['TL_LANG']['tl_calendar']['groups']['0'] = 'Erlaubte Mitgliedergruppen';
$GLOBALS['TL_LANG']['tl_calendar']['groups']['1'] = 'Diese Mitgliedergruppen können die Events des Kalenders sehen.';
$GLOBALS['TL_LANG']['tl_calendar']['tstamp']['0'] = 'Änderungsdatum';
$GLOBALS['TL_LANG']['tl_calendar']['tstamp']['1'] = 'Datum und Uhrzeit der letzten Änderung';
$GLOBALS['TL_LANG']['tl_calendar']['title_legend'] = 'Titel und Weiterleitung';
$GLOBALS['TL_LANG']['tl_calendar']['protected_legend'] = 'Zugriffsschutz';
$GLOBALS['TL_LANG']['tl_calendar']['feed_legend'] = 'RSS/Atom-Feed';
$GLOBALS['TL_LANG']['tl_calendar']['notify_admin'] = 'Systemadministrator';
$GLOBALS['TL_LANG']['tl_calendar']['notify_author'] = 'Autor des Events';
$GLOBALS['TL_LANG']['tl_calendar']['notify_both'] = 'Autor und Systemadministrator';
$GLOBALS['TL_LANG']['tl_calendar']['source_teaser'] = 'Teasertexte';
$GLOBALS['TL_LANG']['tl_calendar']['source_text'] = 'Komplette Beiträge';
$GLOBALS['TL_LANG']['tl_calendar']['feeds']['0'] = 'Kalender-Feeds';
$GLOBALS['TL_LANG']['tl_calendar']['feeds']['1'] = 'Kalender-Feeds verwalten';
$GLOBALS['TL_LANG']['tl_calendar']['new']['0'] = 'Neu';
$GLOBALS['TL_LANG']['tl_calendar']['new']['1'] = 'Einen neuen Kalender erstellen';
$GLOBALS['TL_LANG']['tl_calendar']['show'] = 'Details des Kalenders ID %s anzeigen';
$GLOBALS['TL_LANG']['tl_calendar']['edit'] = 'Kalender ID %s bearbeiten';
$GLOBALS['TL_LANG']['tl_calendar']['children'] = 'Events des Kalenders ID %s bearbeiten';
$GLOBALS['TL_LANG']['tl_calendar']['copy'] = 'Kalender ID %s duplizieren';
$GLOBALS['TL_LANG']['tl_calendar']['delete'] = 'Kalender ID %s löschen';

/*
 * This file is part of cgoit\calendar-extended-bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) Kester Mielke
 * @copyright  Copyright (c) 2024, cgoIT
 * @author     Kester Mielke
 * @author     cgoIT <https://cgo-it.de>
 * @license    LGPL-3.0-or-later
 */
/*
 * Fields
 */
$GLOBALS['TL_LANG']['tl_calendar']['bg_color'] = ['Hintergrund und Deckkraft', 'Hier können Sie eine hexadezimale Hintergrundfarbe (z.B. ff0000 für rot) sowie optional die Deckkraft in Prozent (z.B. 75) eingeben.'];
$GLOBALS['TL_LANG']['tl_calendar']['fg_color'] = ['Vordergrund und Deckkraft', 'Hier können Sie eine hexadezimale Vordergrundfarbe (z.B. ff0000 für rot) sowie optional die Deckkraft in Prozent (z.B. 75) eingeben.'];
$GLOBALS['TL_LANG']['tl_calendar']['isHolidayCal'] = ['Ferienkalender', 'Kalender enthält Feiertage und/oder Ferien. Events werden an diesen Tage nicht angezeigt.'];
$GLOBALS['TL_LANG']['tl_calendar']['allowEvents'] = ['Events anzeigen', 'Bestimmte Events werden auch an den freien Tagen angezeigt. Dafür muss im Event die Option "Event immer anzeigen" aktiviert sein.'];
$GLOBALS['TL_LANG']['tl_calendar']['uniqueEvents'] = ['Eindeutige Events', 'Zeitüberschneidungen bei aktiven Events ohne Wiederholungen werden nicht erlaubt.'];
/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_calendar']['extended_legend'] = 'Farben und Deckkraft für die Events des Kalenders';
$GLOBALS['TL_LANG']['tl_calendar']['extended_type_legend'] = 'Kalender Typ';

/*
 * This file is part of the Contao Event Registration extension.
 *
 * (c) INSPIRED MINDS
 *
 * @license LGPL-3.0-or-later
 */
$GLOBALS['TL_LANG']['tl_calendar']['reg_legend'] = 'Registrierung';
$GLOBALS['TL_LANG']['tl_calendar']['reg_confirm_page'] = ['Weiterleitungsseite für Bestätigungen', 'Die Zielseite wo das Modul zur Verarbeitung von Bestätigungen für Registrierungen eingebunden ist. Andernfalls wird die Weiterleitungsseite des Kalenders benutzt.'];
$GLOBALS['TL_LANG']['tl_calendar']['reg_cancel_page'] = ['Weiterleitungsseite für Stornierungen', 'Die Zielseite wo das Modul zur Verarbeitung von Stornierungen für Registrierungen eingebunden ist. Andernfalls wird die Weiterleitungsseite des Kalenders benutzt.'];

$GLOBALS['TL_LANG']['tl_calendar']['categories_label'] = array('Kategorien', 'Kategorien bearbeiten');

$GLOBALS['TL_LANG']['tl_calendar']['AllowEdit'] = array('Bearbeitung im Frontend erlauben', 'Erlaubt Frontend-Usern das Hinzufügen und Bearbeiten von Terminen in diesem Kalender.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_onlyFuture'] = array('Nur zukünftige Events', 'Wenn aktiviert, ist die Bearbeitung nur für zukünftige Termine möglich.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_jumpTo'] = array('Weiterleitungsseite zum Bearbeiten', 'Bitte wählen Sie eine Seite mit dem Event-Editor, auf den der User bei einem Klick auf einen Bearbeiten-Link weitergeleitet wird.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_loginRequired'] = array('Login benötigt für die Bearbeitung (empfohlen)', 'Wenn aktiviert, können nur registrierte Nutzer (aus den gewählten Gruppen) Events bearbeiten/hinzufügen. Warnung: Sonst kann das JEDER Besucher der Seite.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_onlyUser'] = array('Bearbeiten nur für den Besitzer erlauben', 'Wenn dies aktiviert ist, darf nur der Ersteller eines Termins diesen später bearbeiten.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_groups'] = array('Erlaubte Mitgliedergruppen zum Bearbeiten', 'Wählen Sie die Gruppen aus, die Termine hinzufügen und bearbeiten dürfen.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_adminGroup'] = array('Frontend-Administratoren zum Bearbeiten', 'Frontend-Administratoren dürfen alle Termine bearbeiten, auch wenn nur-für-den-Besitzer aktiviert ist.');
$GLOBALS['TL_LANG']['tl_calendar']['edit_legend'] = 'Bearbeitung im Frontend';

// vendor/contao/comments-bundle/contao/languages/de/tl_calendar.xlf
$GLOBALS['TL_LANG']['tl_calendar']['allowComments']['0'] = 'Kommentare aktivieren';
$GLOBALS['TL_LANG']['tl_calendar']['allowComments']['1'] = 'Besuchern das Kommentieren von Events erlauben.';
$GLOBALS['TL_LANG']['tl_calendar']['notify']['0'] = 'Benachrichtigung an';
$GLOBALS['TL_LANG']['tl_calendar']['notify']['1'] = 'Bitte legen Sie fest, wer beim Hinzufügen neuer Kommentare benachrichtigt wird.';
$GLOBALS['TL_LANG']['tl_calendar']['sortOrder']['0'] = 'Sortierreihenfolge';
$GLOBALS['TL_LANG']['tl_calendar']['sortOrder']['1'] = 'Standardmäßig werden Kommentare aufsteigend sortiert, beginnend mit dem ältesten.';
$GLOBALS['TL_LANG']['tl_calendar']['perPage']['0'] = 'Kommentare pro Seite';
$GLOBALS['TL_LANG']['tl_calendar']['perPage']['1'] = 'Anzahl an Kommentaren pro Seite. Geben Sie 0 ein, um den automatischen Seitenumbruch zu deaktivieren.';
$GLOBALS['TL_LANG']['tl_calendar']['moderate']['0'] = 'Kommentare moderieren';
$GLOBALS['TL_LANG']['tl_calendar']['moderate']['1'] = 'Kommentare erst nach Bestätigung auf der Webseite veröffentlichen.';
$GLOBALS['TL_LANG']['tl_calendar']['bbcode']['0'] = 'BBCode erlauben';
$GLOBALS['TL_LANG']['tl_calendar']['bbcode']['1'] = 'Besuchern das Formatieren ihrer Kommentare mittels BBCode erlauben.';
$GLOBALS['TL_LANG']['tl_calendar']['requireLogin']['0'] = 'Login zum Kommentieren benötigt';
$GLOBALS['TL_LANG']['tl_calendar']['requireLogin']['1'] = 'Nur angemeldeten Mitgliedern das Erstellen von Kommentaren erlauben.';
$GLOBALS['TL_LANG']['tl_calendar']['disableCaptcha']['0'] = 'Spam-Schutz deaktivieren';
$GLOBALS['TL_LANG']['tl_calendar']['disableCaptcha']['1'] = 'Wählen Sie diese Option nur, wenn das Erstellen von Kommentaren auf authentifizierte Benutzer beschränkt ist.';
$GLOBALS['TL_LANG']['tl_calendar']['comments_legend'] = 'Kommentare';
