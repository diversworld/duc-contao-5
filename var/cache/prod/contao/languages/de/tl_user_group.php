<?php

// vendor/contao/core-bundle/contao/languages/de/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['name']['0'] = 'Titel';
$GLOBALS['TL_LANG']['tl_user_group']['name']['1'] = 'Bitte geben Sie den Titel der Gruppe ein.';
$GLOBALS['TL_LANG']['tl_user_group']['alexf']['0'] = 'Erlaubte Felder';
$GLOBALS['TL_LANG']['tl_user_group']['alexf']['1'] = 'Hier können Sie festlegen, welche Felder bearbeitet werden dürfen.';
$GLOBALS['TL_LANG']['tl_user_group']['disable']['0'] = 'Deaktivieren';
$GLOBALS['TL_LANG']['tl_user_group']['disable']['1'] = 'Die Gruppe vorübergehend deaktivieren.';
$GLOBALS['TL_LANG']['tl_user_group']['start']['0'] = 'Aktivieren am';
$GLOBALS['TL_LANG']['tl_user_group']['start']['1'] = 'Wenn Sie die Gruppe erst ab einem bestimmten Zeitpunkt aktivieren möchten, können Sie diesen hier eingeben. Andernfalls lassen Sie das Feld leer. ';
$GLOBALS['TL_LANG']['tl_user_group']['stop']['0'] = 'Deaktivieren am';
$GLOBALS['TL_LANG']['tl_user_group']['stop']['1'] = 'Wenn Sie die Gruppe nur bis zu einem bestimmten Zeitpunkt aktivieren möchten, können Sie diesen hier eingeben. Andernfalls lassen Sie das Feld leer. ';
$GLOBALS['TL_LANG']['tl_user_group']['title_legend'] = 'Titel';
$GLOBALS['TL_LANG']['tl_user_group']['modules_legend'] = 'Erlaubte Module';
$GLOBALS['TL_LANG']['tl_user_group']['elements_legend'] = 'Erlaubte Elemente';
$GLOBALS['TL_LANG']['tl_user_group']['pagemounts_legend'] = 'Pagemounts';
$GLOBALS['TL_LANG']['tl_user_group']['filemounts_legend'] = 'Filemounts';
$GLOBALS['TL_LANG']['tl_user_group']['imageSizes_legend'] = 'Bildgrößen';
$GLOBALS['TL_LANG']['tl_user_group']['forms_legend'] = 'Formular-Rechte';
$GLOBALS['TL_LANG']['tl_user_group']['amg_legend'] = 'Erlaubte Mitgliedergruppen';
$GLOBALS['TL_LANG']['tl_user_group']['alexf_legend'] = 'Erlaubte Felder';
$GLOBALS['TL_LANG']['tl_user_group']['account_legend'] = 'Gruppeneinstellungen';
$GLOBALS['TL_LANG']['tl_user_group']['new']['0'] = 'Neu';
$GLOBALS['TL_LANG']['tl_user_group']['new']['1'] = 'Eine neue Benutzergruppe anlegen';
$GLOBALS['TL_LANG']['tl_user_group']['show'] = 'Details der Benutzergruppe ID %s anzeigen';
$GLOBALS['TL_LANG']['tl_user_group']['edit'] = 'Benutzergruppe ID %s bearbeiten';
$GLOBALS['TL_LANG']['tl_user_group']['copy'] = 'Benutzergruppe ID %s duplizieren';
$GLOBALS['TL_LANG']['tl_user_group']['delete'] = 'Benutzergruppe ID %s löschen';
$GLOBALS['TL_LANG']['tl_user_group']['toggle']['0'] = 'Benutzergruppe aktivieren/deaktivieren';
$GLOBALS['TL_LANG']['tl_user_group']['toggle']['1'] = 'Benutzergruppe ID %s deaktivieren';
$GLOBALS['TL_LANG']['tl_user_group']['toggle']['2'] = 'Benutzergruppe ID %s aktivieren';

// vendor/contao/faq-bundle/contao/languages/de/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['faq_legend'] = 'FAQ-Rechte';

// vendor/contao/news-bundle/contao/languages/de/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['news_legend'] = 'Archivrechte';

// vendor/terminal42/contao-leads/contao/languages/de/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['leadp']['0'] = 'Anfragen-Rechte';
$GLOBALS['TL_LANG']['tl_user_group']['leadp']['1'] = 'Hier können Sie die Anfragenrechte festlegen.';
$GLOBALS['TL_LANG']['tl_user_group']['leadp']['edit'] = 'Anfrage-Daten bearbeiten';
$GLOBALS['TL_LANG']['tl_user_group']['leadp']['delete'] = 'Anfragen löschen';

// vendor/contao/calendar-bundle/contao/languages/de/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['calendars_legend'] = 'Events-Rechte';

// vendor/contao/newsletter-bundle/contao/languages/de/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['newsletter_legend'] = 'Newsletterrechte';

/*
 * Load tl_user language file.
 */
\Contao\System::loadLanguageFile('tl_user');
/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_user_group']['newsCategories_legend'] = $GLOBALS['TL_LANG']['tl_user']['newsCategories_legend'];

\Contao\System::loadLanguageFile('tl_user_group');
/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_user_group']['node_legend'] =& $GLOBALS['TL_LANG']['tl_user']['node_legend'];

/**
 * Load tl_user language file
 */
\Contao\System::loadLanguageFile('tl_user');
$GLOBALS['TL_LANG']['tl_user_group']['mae_evt_cat_legend'] = "Veranstaltungskategorien";
