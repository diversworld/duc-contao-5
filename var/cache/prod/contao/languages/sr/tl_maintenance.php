<?php

// vendor/contao/core-bundle/contao/languages/sr/tl_maintenance.xlf
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables']['0'] = 'Очисти податке';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables']['1'] = 'Одаберите које податке желите очистити или поново креирати.';
$GLOBALS['TL_LANG']['tl_maintenance']['job'] = 'Задатак';
$GLOBALS['TL_LANG']['tl_maintenance']['description'] = 'Опис';
$GLOBALS['TL_LANG']['tl_maintenance']['clearCache'] = 'Очисти податке';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheCleared'] = 'Подаци су очишћени';
$GLOBALS['TL_LANG']['tl_maintenance']['updateHelp'] = 'Унесите ваш %s.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index']['0'] = 'Очисти индекс претраге';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index']['1'] = 'Пражњење табела <code>tl_search1</code>, <code>tl_search_index</code> и <code>tl_search_term</code>. Након овога ћете морати да поново генеришете индекс претраге (погледати изнад).';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo']['0'] = 'Очисти табелу претходних корака';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo']['1'] = 'Пражњење табеле <code>tl_undo</code> у којој су смештени подаци о брисању записа. Након овога, ти записи ће бити трајно обрисани.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions']['0'] = 'Очисти табелу верзионирања';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions']['1'] = 'Пражњење табеле <code>tl_version</code> у којој су смештени подаци о претходним верзијама записа. Након тога, ови записи ће бити трајно обрисани.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log']['0'] = 'Очисти системски дневник';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log']['1'] = 'Пражњење табеле <code>tl_log</code> у којој су смештени записи лога. Након тога, ови записи ће бити трајно обрисани.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue']['0'] = 'Очисти crawl ред';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue']['1'] = 'Пражњење табеле <code>tl_crawl_queue</code> у којој се налазе информације о crawl процесима.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images']['0'] = 'Обриши кеш слика';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images']['1'] = 'Уклањање аутоматски креираних слика и пражњење заједничког кеша, тако да након тога не постоје линкови према обрисаним ресурсима.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews']['0'] = 'Очисти кеш прегледа';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews']['1'] = 'Уклањање аутоматски генерисаних слика за преглед, након чега се чисти дељени кеш, тако да нема линкова према обрисаним ресурсима.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts']['0'] = 'Обриши кеш скрипти';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts']['1'] = 'Уклаљање аутоматски генерисаних <code>.css</code> и <code>.js</code> фајлова и чишћење дељеног кеша, тако да нема линкова према обрисаним ресурсима.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages']['0'] = 'Испразни заједнички кеш';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages']['1'] = 'Уклањање кешираних верзија ФронтЕнд страница.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp']['0'] = 'Очисти привремени фолдер';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp']['1'] = 'Укањање привремених фајлова.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml']['0'] = 'Поновно креирање XML фајлова';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks']['0'] = 'Поновно креирање symlink-ова';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks']['1'] = 'Поновно креирање symlink-ова у јавном фолдеру (почетни директоријум фајлова).';
$GLOBALS['TL_LANG']['tl_maintenance']['crawler'] = 'Crawler';
$GLOBALS['TL_LANG']['tl_maintenance']['startCrawling'] = 'Започни crawling';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers']['0'] = 'Омогућене функционалности';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers']['1'] = 'Crawler скенира и биљежи све URL-ове које нађе. Овде можете да одлучите шта да урадите са тим резултатима.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDepth']['0'] = 'Максимална дубина';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDepth']['1'] = 'Максимална дубина проучавања.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember']['0'] = 'Фронт Енд корисник';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember']['1'] = 'Аутоматски пријави ФронтЕнд корисника ради индексирања заштићених страница.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlHint'] = 'Ваш сајт се тренутно проучава са %d конкурентних захтева. Ако ваш сервер може да прихвати више од %1$dконкурентних захтева, питајте вашег системског администратора да повећа подешавање <code>%s</code>у системским подешавањима како би убрзао процес проучавања и анализе садржаја. Посетите <a href="%s" target="_blank" rel="noreferrer noopener">Contao приручник</a> да бисте добили више информација.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlWaitToBeFinished'] = 'Да бисте видели резултате, сачекајте да Crawler заврши свој посао.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLog'] = 'Debug log';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLogExplain'] = 'Ако су се десиле грешке или су неке странице прескочене, проверите debug log ради додатних информација.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDownloadLog'] = 'Лог преузимања';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['search-index'] = 'Ажурирај индекс претраге';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['broken-link-checker'] = 'Провери прекинуте линкове';