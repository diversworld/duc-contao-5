<?php

// vendor/terminal42/notification_center/contao/languages/de/tl_nc_notification.xlf
$GLOBALS['TL_LANG']['tl_nc_notification']['title']['0'] = 'Titel';
$GLOBALS['TL_LANG']['tl_nc_notification']['title']['1'] = 'Bitte geben Sie einen Namen für diese Benachrichtigung ein.';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['0'] = 'Benachrichtigungstyp';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['1'] = 'Bitte wählen Sie einen Benachrichtigungstypen aus.';
$GLOBALS['TL_LANG']['tl_nc_notification']['new']['0'] = 'Neue Benachrichtigung';
$GLOBALS['TL_LANG']['tl_nc_notification']['new']['1'] = 'Neue Benachrichtigung erstellen.';
$GLOBALS['TL_LANG']['tl_nc_notification']['edit']['0'] = 'Benachrichtigung editieren';
$GLOBALS['TL_LANG']['tl_nc_notification']['edit']['1'] = 'Benachrichtigung ID %s editieren.';
$GLOBALS['TL_LANG']['tl_nc_notification']['children']['0'] = 'Nachrichten bearbeiten';
$GLOBALS['TL_LANG']['tl_nc_notification']['children']['1'] = 'Nachrichten der Benachrichtigung ID %s editieren.';
$GLOBALS['TL_LANG']['tl_nc_notification']['copy']['0'] = 'Benachrichtigung kopieren';
$GLOBALS['TL_LANG']['tl_nc_notification']['copy']['1'] = 'Benachrichtigung ID %s kopieren.';
$GLOBALS['TL_LANG']['tl_nc_notification']['delete']['0'] = 'Benachrichtigung löschen';
$GLOBALS['TL_LANG']['tl_nc_notification']['delete']['1'] = 'Benachrichtigung ID %s löschen.';
$GLOBALS['TL_LANG']['tl_nc_notification']['show']['0'] = 'Benachrichtigungsdetails';
$GLOBALS['TL_LANG']['tl_nc_notification']['show']['1'] = 'Details für Benachrichtigung ID %s anzeigen.';
$GLOBALS['TL_LANG']['tl_nc_notification']['title_legend'] = 'Titel & Benachrichtigungstyp';
$GLOBALS['TL_LANG']['tl_nc_notification']['config_legend'] = 'Konfiguration';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['core_form']['0'] = 'Contao Formulargenerator-Übertragungen';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['core_form']['1'] = 'Dieser Benachrichtigungstyp wird nach erfolgreicher Formularübertragung versendet.';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['member_password']['0'] = 'Mitglied: Passwort vergessen';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['member_activation']['0'] = 'Mitglied: Aktivierung';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['member_registration']['0'] = 'Mitglied: Registrierung';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['member_personaldata']['0'] = 'Mitglied: Persönliche Daten';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['newsletter_subscribe']['0'] = 'Newsletter abonniert';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['newsletter_activate']['0'] = 'Newsletter aktiviert';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['newsletter_unsubscribe']['0'] = 'Newsletter gekündigt';

// vendor/cgoit/contao-leads-optin-bundle/contao/languages/de/tl_nc_notification.xlf
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['leads_optin'] = 'Anfragen speichern';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['leads_optin_notification']['0'] = 'Opt-in';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['leads_optin_success_notification']['0'] = 'Opt-in Bestätigung';

$GLOBALS['TL_LANG']['tl_nc_notification']['type']['event_registration'] = 'Event Registrierung';
$GLOBALS['TL_LANG']['tl_nc_notification']['type'][\InspiredMinds\ContaoEventRegistration\NotificationTypes::CONFIRM] = ['Registrierung bestätigen', 'Diese Benachrichtigung wird gesendet, wenn eine Registrierung für ein Event bestätigt wurde.'];
$GLOBALS['TL_LANG']['tl_nc_notification']['type'][\InspiredMinds\ContaoEventRegistration\NotificationTypes::CANCEL] = ['Registrierung stornieren', 'Diese Benachrichtigung wird gesendet, wenn eine Registrierung für ein Event storniert wurde.'];
$GLOBALS['TL_LANG']['tl_nc_notification']['type'][\InspiredMinds\ContaoEventRegistration\NotificationTypes::WAITING_LIST_ADVANCEMENT] = ['Aufstieg von Warteliste', 'Diese Benachrichtigung wird gesendet, wenn eine Registrierung von der Warteliste auf die normale Liste kommt.'];

$GLOBALS['TL_LANG']['tl_nc_notification']['type']['news_newsletter'] = ['News Newsletter', 'Dieser Benachrichtigungstyp kann für Newsletter bei Veröffentlichung eines News-Beitrags verwendet werden.'];
