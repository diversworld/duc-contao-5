<?php

// vendor/contao/core-bundle/contao/languages/sk/tl_maintenance.xlf
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables']['0'] = 'Vyprázdniť dáta';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables']['1'] = 'Prosím vyberte cache pamäťové zdroje, ktoré chcete vyprázdniť.';
$GLOBALS['TL_LANG']['tl_maintenance']['job'] = 'Úlohy';
$GLOBALS['TL_LANG']['tl_maintenance']['description'] = 'Popis';
$GLOBALS['TL_LANG']['tl_maintenance']['clearCache'] = 'Vyprázdniť dáta';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheCleared'] = 'Bude vyčistená cache pamäť';
$GLOBALS['TL_LANG']['tl_maintenance']['updateHelp'] = 'Prosím tu zadajte Vašu %s.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index']['0'] = 'Vyprázdniť index vyhľadávania';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index']['1'] = 'Skráti tabuľky <code>tl_search</code>, <code>tl_search_index</code> a <code>tl_search_term</code>. Potom musíte znova vytvoriť index vyhľadávania (pozri vyššie).';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo']['0'] = 'Vyprázdniť tabuľku histórie';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo']['1'] = 'Vyprázdniť tabuľku <code>tl_undo</code>, v ktorej sa ukladajú odstránené záznamy. Tento krok navždy odstráni dané záznamy.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions']['0'] = 'Vyprázdniť tabuľku verzií';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions']['1'] = 'Vyprázdniť tabuľku <code>tl_version</code>, v ktorej sa ukladajú predošlé verzie záznamov. Tento krok navždy odstráni dané záznamy.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log']['0'] = 'Vyprázdniť systémové správy';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log']['1'] = 'Vyprázdniť tabuľku <code>tl_log</code>, ktorá zaznamenáva správy systému. Tento krok navždy odstráni súčasné záznamy z danej tabuľky. ';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue']['0'] = 'Vyčistite zoznam indexového prehľadávania';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue']['1'] = 'Skráti <code>tl_crawl_queue</code> tabuľka, ktorá ukladá všetky informácie o fronte z procesov prehľadávania.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images']['0'] = 'Vyprázdniť dočasné úložisko obrázkov';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images']['1'] = 'Odstráni automaticky vytvorené obrázky a potom vyprázdni dočasné úložisko stránok. Týmto krokom zaniknú odkazy k odstráneným zdrojom.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews']['0'] = 'Vyčistite vyrovnávaciu pamäť ukážky';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews']['1'] = 'Odstráni automaticky vytvorené obrázky a potom vyprázdni dočasné úložisko stránok. Týmto krokom zaniknú odkazy k odstráneným zdrojom.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts']['0'] = 'Vyprázdniť dočasné úložisko skriptov';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts']['1'] = 'Odstráni automaticky generované <code>.css</code> a<code>.js</code> súbory a potom vyčistí zdieľanú vyrovnávaciu pamäť, takže neexistujú žiadne odkazy na odstránené zdroje.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages']['0'] = 'Vyčistite zdieľanú vyrovnávaciu pamäť';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages']['1'] = 'Odstráni dočasne uložené verzie frontendových stránok.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp']['0'] = 'Vyprázdniť priečinok s dočasnými súbormi';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp']['1'] = 'Odstráni dočasné súbory.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml']['0'] = 'Znovu vytvorí XML súbory';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks']['0'] = 'Znovu vytvorí symlinks';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks']['1'] = 'Znovu vytvorí symbolické odkazy vo verejnom priečinku (koreň dokumentu).';
$GLOBALS['TL_LANG']['tl_maintenance']['crawler'] = 'Crawler';
$GLOBALS['TL_LANG']['tl_maintenance']['startCrawling'] = 'Spustiť crawling';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers']['0'] = 'Povolené funkcie';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers']['1'] = 'Prehľadávač prehľadáva všetky adresy URL, ktoré nájde. Tu sa môžete rozhodnúť, čo s týmito výsledkami urobíte.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDepth']['0'] = 'Maximálna hĺbka';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDepth']['1'] = 'Maximálna hĺbka na prehľadávanie.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember']['0'] = 'Front end člen';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember']['1'] = 'K indexovaniu chránených stránok je potrebné vytvoriť frontend používateľa, ktorý má oprávnenie pristupovať k týmto stránkam.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlHint'] = 'Your website is currently crawled with %d concurrent requests. If your server can handle more than %1$d concurrent requests, ask your system administrator to increase the <code>%s</code> setting in the system configuration to speed up the crawling process. Refer to the <a href="%s" target="_blank" rel="noreferrer noopener">Contao manual</a> for more information.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlWaitToBeFinished'] = 'Prehľadávač momentálne funguje. Počkajte na dokončenie, aby ste videli výsledky.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLog'] = 'Debug log';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLogExplain'] = 'Ak sa vyskytli chyby alebo boli preskočené stránky, ďalšie informácie nájdete v debug logu.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDownloadLog'] = 'Stiahnuť log';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['search-index'] = 'Aktualizovať index vyhľadávania';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['broken-link-checker'] = 'Skontrolovať poškodené odkazy';