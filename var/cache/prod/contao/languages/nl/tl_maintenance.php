<?php

// vendor/contao/core-bundle/contao/languages/nl/tl_maintenance.xlf
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables']['0'] = 'Verwijder sessiegegevens';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables']['1'] = 'Selecteer de gegevens die u wilt opschonen.';
$GLOBALS['TL_LANG']['tl_maintenance']['job'] = 'Taak';
$GLOBALS['TL_LANG']['tl_maintenance']['description'] = 'Omschrijving';
$GLOBALS['TL_LANG']['tl_maintenance']['clearCache'] = 'Verwijder sessiegegevens';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheCleared'] = 'De cache is opgeschoond';
$GLOBALS['TL_LANG']['tl_maintenance']['updateHelp'] = 'Vul uw %s hier in.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index']['0'] = 'Zoekindex opschonen';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index']['1'] = 'Kort de tabellen <code>tl_search</code>, <code>tl_search_index</code> en <code>tl_search_term</code> in. Daarna moet u de zoekindex opnieuw opbouwen (zie hierboven).';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo']['0'] = 'Opschonen van de undo tabel';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo']['1'] = 'Kort de <code>tl_undo</code> tabel in welke de verwijderde records bevat. Deze actie zal de records permanent verwijderen.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions']['0'] = 'Opschonen versie tabel';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions']['1'] = 'Kort de <code>tl_version</ code> tabel in welke de vorige versies van een opgeslagen record bevat. Deze actie zal de records permanent verwijderen.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log']['0'] = 'Opschonen systeem log';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log']['1'] = 'Kort de <code>tl_log</code> tabel in welke de systeem log vermeldingen bevat. Deze actie zal de records permanent verwijderen.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue']['0'] = 'Verwijder de crawl-wachtrij';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue']['1'] = 'Kapt de <code>tl_crawl_queue</code> tabel af, die alle wachtrijinformatie van crawlprocessen opslaat.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images']['0'] = 'Opschonen afbeelding cache';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images']['1'] = 'Verwijdert automatisch gegenereerde beelden en schoont de pagina cache op, opdat er geen links naar verwijderde bronnen zijn.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews']['0'] = 'De preview-cache leegmaken';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews']['1'] = 'Verwijdert de automatisch gegenereerde voorbeeldafbeeldingen en zuivert vervolgens de gedeelde cache, zodat er geen links naar verwijderde bronnen zijn.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts']['0'] = 'Opschonen script cache';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts']['1'] = 'Verwijdert de automatisch gegenereerde <code>.css</code> en <code>.js</code> bestanden en zuivert vervolgens de gedeelde cache, zodat er geen links zijn naar verwijderde bronnen.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages']['0'] = 'Opschonen gedeelde cache';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages']['1'] = 'Verwijdert de gecachte versies van de front-end pagina`s.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp']['0'] = 'Opschonen temp map';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp']['1'] = 'Verwijdert tijdelijke bestanden';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml']['0'] = 'XML bestanden opnieuw opbouwen';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml']['1'] = 'Maakt de XML-bestanden opnieuw aan in de <code>gedeelde</code> map en verwijdert vervolgens de gedeelde cache, zodat er geen koppelingen zijn naar verwijderde bronnen.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks']['0'] = 'Symlinks opnieuw opbouwen';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks']['1'] = 'Maakt de symbolische koppelingen opnieuw aan in de openbare map (document root).';
$GLOBALS['TL_LANG']['tl_maintenance']['crawler'] = 'Crawler';
$GLOBALS['TL_LANG']['tl_maintenance']['startCrawling'] = 'Begin met crawlen';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers']['0'] = 'Ingeschakelde functies';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers']['1'] = 'De crawler crawlt alle gevonden URL\'s. Hier kunt u beslissen wat u met deze resultaten wilt doen.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDepth']['0'] = 'Maximale diepte';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDepth']['1'] = 'De maximale diepte om te crawlen.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember']['0'] = 'Front-end lid';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember']['1'] = 'Automatisch inloggen van front-end member om beveiligde pagina\'s te indexeren.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlHint'] = 'Uw website wordt momenteel gecrawld met %d gelijktijdige verzoeken. Als uw server meer dan %1$d gelijktijdige verzoeken kan verwerken, vraag dan uw systeembeheerder om de <code>%s</code> instelling in de systeemconfiguratie te verhogen om het crawlproces te versnellen. Raadpleeg de <a href="%s" target="_blank" rel="noreferrer noopener">Contao-handleiding</a> voor meer informatie.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlWaitToBeFinished'] = 'De crawler werkt momenteel. Wacht tot het klaar is om de resultaten te zien.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLog'] = 'Debug log';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLogExplain'] = 'Als er fouten zijn opgetreden of pagina\'s zijn overgeslagen, raadpleegt u de debug log voor meer informatie.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDownloadLog'] = 'Download log';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['search-index'] = 'Update de zoekindex';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['broken-link-checker'] = 'Controleer op gebroken links';