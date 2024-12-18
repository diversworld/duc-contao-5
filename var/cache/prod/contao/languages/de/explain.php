<?php

// vendor/contao/core-bundle/contao/languages/de/explain.xlf
$GLOBALS['TL_LANG']['XPL']['insertTags']['0']['0'] = 'Rich-Text-Editor';
$GLOBALS['TL_LANG']['XPL']['insertTags']['0']['1'] = 'Weitere Informationen zu TinyMCE finden Sie unter <a href="https://www.tiny.cloud/tinymce/" target="_blank" rel="noreferrer noopener">https://www.tiny.cloud/tinymce/</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['1']['0'] = 'Insert-Tags';
$GLOBALS['TL_LANG']['XPL']['insertTags']['1']['1'] = 'Weitere Informationen zu Insert-Tags finden Sie im <a href="https://to.contao.org/docs/insert-tags?lang=de" target="_blank" rel="noreferrer noopener">Contao-Handbuch</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['2']['0'] = 'Code-Editor';
$GLOBALS['TL_LANG']['XPL']['insertTags']['2']['1'] = 'Weitere Informationen zu Ace finden Sie unter <a href="https://ace.c9.io" target="_blank" rel="noreferrer noopener">https://ace.c9.io</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['3']['0'] = 'Markdown';
$GLOBALS['TL_LANG']['XPL']['insertTags']['3']['1'] = 'Weitere Informationen zu Markdown finden Sie im <a href="https://to.contao.org/docs/markdown?lang=de" target="_blank" rel="noreferrer noopener">Contao-Handbuch</a>. ';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['0']['0'] = 'colspan';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['0']['1'] = 'Contao unterstützt alle Datums- und Zeitformate, die mit der PHP-Funktion date() geparst werden können. Um alle Eingaben in einen UNIX-Zeitstempel umwandeln zu können, sind im Backend jedoch ausschließlich numerische Formate (j, d, m, n, y, Y, g, G, h, H, i, s) erlaubt.<br><br><strong>Abweichende Frontend-Formate können in den Website-Startpunkten erfasst werden.</strong><br><br><em>Hier sind einige Beispiele gültiger Datums- und Zeitangaben</em>:';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['1']['0'] = 'Y-m-d';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['1']['1'] = 'JJJJ-MM-TT, international ISO-8601, z. B. 2005-01-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['2']['0'] = 'm/d/Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['2']['1'] = 'MM/TT/JJJJ, Englisches Format, z. B. 01/28/2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['3']['0'] = 'd.m.Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['3']['1'] = 'TT.MM.JJJJ, Deutsches Format, z. B. 28.01.2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['4']['0'] = 'y-n-j';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['4']['1'] = 'JJ-M-T, ohne führende Nullen, z. B. 05-1-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['5']['0'] = 'Ymd';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['5']['1'] = 'JJJJMMTT, Zeitstempel, z. B. 20050128';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['6']['0'] = 'H:i:s';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['6']['1'] = '24 Stunden, Minuten und Sekunden, z. B. 20:36:59';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['7']['0'] = 'g:i';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['7']['1'] = '12 Stunden ohne führende Nullen sowie Minuten, z. B. 8:36';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['0']['0'] = 'Sizes-Attribut';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['0']['1'] = 'Das HTML-Attribut <code>sizes</code> definiert die gewünschte Layout-Breite des Bildes, optional in Kombination mit einem Media-Query. Sie können einen beliebigen CSS-Wert für die Breite verwenden.<br><br>Z. B. bedeutet <code>(max-width: 600px) 100vw, 50vw</code>, dass das Bild auf kleinen Bildschirmen 100% der Breite des Viewports einnimmt und auf großen Bildschirmen 50% der Breite des Viewports.<br><br>Und <code>(max-width: 600px) calc(100vw - 20px), 500px</code> bedeutet, dass das Bild auf kleinen Bildschirmen 20px schmaler ist als der Viewport und auf großen Bildschirmen 500px breit.<br><br>Das sizes-Attribut sollte nicht für das Styling verwendet werden; verwenden Sie dafür CSS. Das sizes-Attribut muss nicht unbedingt mit der per CSS definierten Bildbreite übereinstimmen.<br><br>Weitere Informationen zum sizes-Attribut finden Sie auf <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-sizes" target="_blank" rel="noreferrer noopener">w3.org</a>.';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['1']['0'] = 'Pixeldichte/<br>Skalierungsfaktor';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['1']['1'] = 'Ist das sizes-Attribut nicht definiert, legt diese Einstellung einfach die Pixeldichten fest, die unterstützt werden sollen. Die Bildgrößen werden automatisch angepasst. Z. B. generiert <code>1x, 1.5x, 2x</code> folgenden HTML-Code: <code>&lt;img srcset="img-a.jpg 1x, img-b.jpg 1.5x, img-c.jpg 2x"&gt;</code><br><br>Ist das sizes-Attribut definiert, werden dieselben Bildgrößen erstellt, jedoch werden für das srcset-Attribut Breitenbeschreibungen verwendet. Z. B. generiert ein 200 Pixel breites Bild mit den Pixeldichten <code>1x, 1.5x, 2x</code> folgenden HTML-Code: <code>&lt;img srcset="img-a.jpg 200w, img-b.jpg 300w, img-c.jpg 400w"&gt;</code><br><br>Weitere Informationen zum srcset-Attribut finden Sie auf <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-srcset" target="_blank" rel="noreferrer noopener">w3.org</a>.';

// vendor/oveleon/contao-cookiebar/contao/languages/de/explain.xlf
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['0']['0'] = 'Cookiebar Versionen';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['0']['1'] = 'Für jede Cookiebar-Konfiguration können Versionen gespeichert werden. Jede neue Version einer Konfiguration führt dazu, dass die Cookiebar dem Besucher erneut angezeigt wird, unabhängig davon, ob sie bereits akzeptiert wurde. Auf diese Weise können die Besucher über neue Cookies informiert werden und die Erlaubnis erteilen oder verweigern. Alle Einstellungen, die der Besucher zuvor vorgenommen hat, bleiben unverändert.';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['1']['0'] = 'Neue Version erstellen';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['1']['1'] = 'Um eine neue Version zu erstellen, wählen Sie die <code>Checkbox</code> bei <code>Version aktualisieren</code> und speichern Sie anschließend die Maske. Die Version wird automatisch hochgezählt.';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['0']['0'] = 'Google Analytics';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['0']['1'] = 'Erweitern Sie die Standard-Konfiguration von Google-Analytics: <pre>

         window.dataLayer=window.dataLayer||[];
         function gtag(){dataLayer.push(arguments)}
         gtag(\'js\',new Date());
         gtag(\'config\',\'XXXXXX\' <code class="tl_red">[, Parameters are placed here]</code>)</pre>';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['1']['0'] = 'Google Consent Mode';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['1']['1'] = '<b>Ersetzt</b> die Standard-Konfiguration von Google Consent Mode. Sollte keine eigene Konfiguration eingetragen werden, wird folgender Code automatisch erzeugt: <pre>

          gtag(\'consent\', \'default\', {
          \'<code class="tl_red">Einwilligungsmodus</code>\': \'granted\'
          });
          </pre>

          Sofern eigener Code für die Konfiguration bereitsgestellt wird, muss oben stehender Code selbstständig integriert werden! Dieser kann bei Bedarf abgewandelt werden.
          <br><br>
          Weitere Informationen:<br>
          https://developers.google.com/gtagjs/devguide/consent<br><br>
          <i>Dieser Cookie-Typ benötigt ausßerdem eine globale Konfiguration vom Typ "Google Tag Manager" mit darin aktivierten "Google Consent Mode".</i>
        ';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['2']['0'] = 'Matomo';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['2']['1'] = 'Erweitern Sie die Standard-Konfiguration von Matomo: <pre>

        var _paq = window._paq = window._paq || [];

        (function() { var u=\'XXX/\';
          <code class="tl_red">Parameters are placed here</code>
          var d=document, g=d.createElement(\'script\'), s=d.getElementsByTagName(\'script\')[0];
          g.type=\'text/javascript\';
          g.async=true;
          g.src=u+\'matomo.js\';
          s.parentNode.insertBefore(g,s);})();
          </pre>
          Sollten keine eigenen Parameter definiert wurden sein, werden folgende Zeilen automatisch hinzugefügt:
          <pre>
          <code class="tl_red">_paq.push([\'trackPageView\']);</code>
          <code class="tl_red">_paq.push([\'enableLinkTracking\']);</code><pre>';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['1']['0'] = 'Google Tag Manager';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['1']['1'] = 'Ermöglicht die Einbindung des Google Tag Managers. Zusätzlich kann ein benutzerdefiniertes Skript eingetragen werden. Bitte beachte, dass diese Einstellungen bereits ohne Bestätigung der Cookiebar im Kopfbereich der Website implementiert werden.';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['2']['0'] = 'Tag Manager + Google Consent Mode';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['2']['1'] = 'Sofern keine eigene Konfiguration für den Google Consent Mode hinterlegt wird, werden folgende Einstellungen automatisch gesetzt: <pre>

          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}

          gtag(\'consent\', \'default\', {
          \'ad_storage\': \'denied\',
          \'ad_user_data\': \'denied\',
          \'ad_personalization\': \'denied\',
          \'analytics_storage\': \'denied\',
          \'functionality_storage\': \'denied\',
          \'personalization_storage\': \'denied\',
          \'wait_for_update\': 500
          });

          gtag(\'js\', new Date());
          gtag(\'config\', \'<code class="tl_red">ID</code>\');
          </pre>

          Bitte beachte, dass dieser Code selber eingegeben werden muss, sofern eine eigene Konfiguration hinterlegt wird.
          Die Integration des Google Tag Managers erfolgt automatisch über folgenden Code:

          <pre>

          (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
          new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
          \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,\'script\',\'dataLayer\',\'ID\');
          </pre>
        ';

$GLOBALS['TL_LANG']['XPL']['customInsertTags'] = [['Evaluation tokens', 'These tokens can be used in conditional statements.'], ['<code>page.*</code>', 'Zugriff auf die Seiteneigenschaften. Beispiel: <code>page.id</code> oder <code>page.trail</code>.'], ['<code>member.*</code>', 'Zugriff auf die Mitglieder-Daten, falls eingeloggt. Beispiel: <code>member.id</code> or <code>member.firstname</code> or <code>member.groups</code>.'], ['Replacement tokens', 'These tokens can be used to output the data.'], ['<code>##member_*##</code>', 'Replace the current member tokens.'], ['<code>##page_*##</code>', 'Replace the current page tokens.'], ['', 'Sehen Sie sich die volle Dokumentation auf GitHub an. <a href="https://github.com/terminal42/contao-inserttags/blob/main/README.md" target="_blank" rel="noreferrer">Dokumentation ansehen</a>.']];

// vendor/bugbuster/contao-visitors-bundle/src/Resources/contao/languages/de/explain.xlf
$GLOBALS['TL_LANG']['XPL']['visitors_help']['0']['0'] = 'Name';
$GLOBALS['TL_LANG']['XPL']['visitors_help']['0']['1'] = 'Der Name wird im Frontend angezeigt als Überschrift.';
$GLOBALS['TL_LANG']['XPL']['visitors_help']['1']['0'] = 'Startdatum';
$GLOBALS['TL_LANG']['XPL']['visitors_help']['1']['1'] = 'Das Startdatum dient der reinen Information.<br>Es wird im Frontend angezeigt.<br>Es beeinflusst nicht den Beginn der Zählung!<br>Wird die Angabe leer gelassen, wird im Template die entsprechende Zeile ausgeblendet.';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['0']['0'] = 'HTTP_USER_AGENT Teilkennung';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['0']['1'] = 'Mit Änderung der Browser-Kennung durch ein eindeutigen String und Eintragung in dieses Feld kann verhindert werden, dass die eigenen Zugriffe mitgezählt werden.<br>Genaue Anleitung dazu sind im Wiki / Forum zu finden.';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['1']['0'] = 'Besuchervorlage';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['1']['1'] = 'Jedem Modul kann per Auswahl ein Template zugeordnet werden. Zur Auswahl stehen vier Templates. 
<br><strong>mod_visitors_fe_all</strong><br>&nbsp;&nbsp;&nbsp;Liefert alle Felder die möglich sind.
<br><strong>mod_visitors_fe_all_ajax</strong><br>&nbsp;&nbsp;&nbsp;Liefert alle Felder die möglich sind. (Ajax Refresh)
<br><strong>mod_visitors_fe_hits</strong><br>&nbsp;&nbsp;&nbsp;Hier wurden die beiden Besucherzeilen entfernt.
<br><strong>mod_visitors_fe_visits</strong><br>&nbsp;&nbsp;&nbsp;Hier wurden die beiden Zugriffszeilen entfernt.
<br><strong>mod_visitors_fe_invisible</strong><br>&nbsp;&nbsp;&nbsp;Hier wird nichts angezeigt. Dieses Template dient dadurch zur reinen Zählung.
';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['2']['0'] = 'Aktivierung der Zählung für Geräte-/Bildschirmauflösungen';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['2']['1'] = 'Das Modul kann die Geräte-/Bildschirmauflösung erkennen, zählen und in den Backend-Statistiken anzeigen.
<br>In Deutschland ist dies nach TDDDG §25 nur dann zulässig, wenn der Endnutzer auf der Grundlage klarer und umfassender Informationen eingewilligt hat.
<br>Hiervon gibt es Ausnahmen. Siehe: https://gesetz-tdddg.de/25-tdddg/
<br>
<br>In anderen Ländern sollte die Zulässigkeit der Erkennung der Geräte-/ Bildschirmauflösung vor der Aktivierung geprüft werden.
<br>
';
