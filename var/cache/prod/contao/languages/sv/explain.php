<?php

// vendor/contao/core-bundle/contao/languages/sv/explain.xlf
$GLOBALS['TL_LANG']['XPL']['insertTags']['0']['0'] = 'Rich text editor';
$GLOBALS['TL_LANG']['XPL']['insertTags']['0']['1'] = 'För mer information om TinyMCE, se <a href="https://www.tiny.cloud/tinymce/" target="_blank" rel="noreferrer noopener">https://www.tiny.cloud/tinymce/</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['1']['0'] = 'Insert taggar';
$GLOBALS['TL_LANG']['XPL']['insertTags']['1']['1'] = 'Mer information om insert tags finns i <a href="https://to.contao.org/docs/insert-tags?lang=en" target="_blank" rel="noreferrer noopener">Contao-handboken</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['2']['0'] = 'Kodredigerare';
$GLOBALS['TL_LANG']['XPL']['insertTags']['2']['1'] = 'För mer information om Ace, se <a href="https://ace.c9.io" target="_blank" rel="noreferrer noopener">https://ace.c9.io</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['3']['0'] = 'Markdown';
$GLOBALS['TL_LANG']['XPL']['insertTags']['3']['1'] = 'För att lära dig mer om markdown, se <a href="https://to.contao.org/docs/markdown?lang=en" target="_blank" rel="noreferrer noopener">Contaos manual</a>.';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['0']['0'] = 'colspan';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['0']['1'] = 'Contao stöder alla datum- och tidsformat som kan tolkas med PHP-funktionen date(). Men för att säkerställa att alla indata kan omvandlas till en UNIX-tidsstämpel kan du bara använda numeriska datum- och tidsformat (j, d, m, n, y, Y, g, G, h, H, i, s) i back-end-sidan. <br><br><strong>Du kan ange olika front-end-format på webbplatsens rotsidor.</strong><br><br><em> Här är några exempel på giltiga datum- och tidsformat</em>:';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['1']['0'] = 'Y-m-d';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['1']['1'] = 'YYYY-MM-DD, internationell ISO 8601, t.ex. 2005-01-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['2']['0'] = 'm/d/Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['2']['1'] = 'MM/DD/YYYY, Engelskt format, t.ex. 01/28/2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['3']['0'] = 'd.m.Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['3']['1'] = 'DD.MM.YYYY, Tyskt format, t.ex. 28.01.2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['4']['0'] = 'y-n-j';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['4']['1'] = 'YY-M-D, utan inledande nollor, t.ex. 05-1-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['5']['0'] = 'Ymd';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['5']['1'] = 'YYYYMMDD, tidsstämpel, t.ex. 20050128';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['6']['0'] = 'H:i:s';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['6']['1'] = '24 timmar, minuter och sekunder, t.ex. 20:36:59';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['7']['0'] = 'g:i';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['7']['1'] = '12 timmar utan inledande nollor och med minuter, t.ex. 8:36';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['0']['0'] = 'Storleksattribut';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['0']['1'] = 'HTML-attribut <code>storlekarna</code> definierar bildens avsedda layoutbredd, eventuellt i kombination med en mediefråga. Du kan använda vilket CSS-längdvärde som helst i det här attributet,<br><br> t.ex. <code>(max-width: 600px) 100vw, 50vw</code> betyder att bildens bredd är 100% av visningsporten för små skärmar och 50% av visningsporten för större skärmar. <br><br>Och <code>(max-width: 600px) calc(100vw - 20px), 500px</code> betyder att bildens bredd är 20px mindre än viewporten för små skärmar och 500px för större skärmar.<br><br>Storleksattributet ska inte användas för styling, använd CSS istället. Storleksattributet behöver inte nödvändigtvis matcha den faktiska bildbredden som anges i CSS.<br><br> För mer information om storleksattributet besök <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-sizes" target="_blank" rel="noreferrer noopener">w3.org</a>.';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['1']['0'] = 'Pixel-täthet/<br>skalningsfaktorer';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['1']['1'] = 'Om storleksattributet inte är definierat, definierar den här inställningen helt enkelt de pixeltätheter som du vill stödja. Måtten på bilderna justeras automatiskt. T.ex. <code>1x, 1,5x, 2x</code> skapar följande HTML-kod: <code>&lt;img srcset="img-a.jpg 1x, img-b.jpg 1,5x, img-c.jpg 2x"&gt;</code><br><br>Om storleksattributet är definierat, samma bildstorlekar genereras men width ddeskriptorer används för srcset-attributet. T.ex. en 200 pixel bred bild med tätheterna <code>1x, 1,5x, 2x</code> skapar följande HTML-kod: <code>&lt;img srcset="img-a.jpg 200w, img-b.jpg 300w, img-c.jpg 400w"&gt;</code><br><br>För mer information om srcset-attributet besök <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-srcset" target="_blank" rel="noreferrer noopener">w3.org</a>.';

// vendor/oveleon/contao-cookiebar/contao/languages/sv/explain.xlf
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['0']['0'] = 'Cookiebox Versioner';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['0']['1'] = 'Versioner kan lagras för varje cookiebox-konfiguration. För varje nyskapad version av en konfiguration tvingas den att visas för besökaren, oavsett om och när den redan har accepterats. Detta gör det möjligt för besökare att meddelas om nya cookies och bevilja eller avvisa deras tillstånd. De inställningar som tidigare gjorts av besökaren antas.';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['1']['0'] = 'Skapa en ny version';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['1']['1'] = 'För att skapa en ny version, välj <code>Checkbox</code> för <code>uppdatera version</code> och spara sedan inmatningsmasken. Versionen ökas automatiskt. ';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['0']['0'] = 'Google Analytics';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['0']['1'] = 'Utöka standardkonfigurationen för Google Analytics: <pre>

         window.dataLayer=window.dataLayer||[];
         function gtag(){dataLayer.push(arguments)}
         gtag(\'js\',new Date());
         gtag(\'config\',\'XXXXXX\' <code class="tl_red">[, Parameters are placed here]</code>)</pre>';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['1']['0'] = 'Google Consent Mode';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['1']['1'] = '<b>Ersätter</b> standardkonfigurationen för Google Consent Mode. Om du inte anger din egen konfiguration genereras följande kod automatiskt: <pre>

          gtag(\'consent\', \'default\', {
          \'<code class="tl_red">Läge för samtycke</code>\': \'granted\'
          });
          </pre>

          Om din egen kod tillhandahålls för konfigurationen måste ovanstående kod integreras oberoende av varandra! Detta kan ändras vid behov.
          <br><br>
          Mer information:<br>
          https://developers.google.com/gtagjs/devguide/consent<br><br>
          <i>Den här cookietypen kräver också en global konfiguration av typen "Google Tag Manager" med "Google Consent Mode" aktiverat.</i>
        ';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['2']['0'] = 'Matomo';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['2']['1'] = 'Utöka standardkonfigurationen för Matomo: <pre>

        var _paq = window._paq = window._paq || [];

        (function() { var u=\'XXX/\';
          <code class="tl_red">Parameters are placed here</code>
          var d=document, g=d.createElement(\'script\'), s=d.getElementsByTagName(\'script\')[0];
          g.type=\'text/javascript\';
          g.async=true;
          g.src=u+\'matomo.js\';
          s.parentNode.insertBefore(g,s);})();
          </pre>
          Om inga anpassade parametrar har definierats läggs följande rader till automatiskt:
          <pre>
          <code class="tl_red">_paq.push([\'trackPageView\']);</code>
          <code class="tl_red">_paq.push([\'enableLinkTracking\']);</code><pre>';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['1']['0'] = 'Google Tag Manager';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['1']['1'] = 'Möjliggör integrering av Google Tag Manager. Ett användardefinierat skript kan också anges. Observera att dessa inställningar redan är implementerade utan bekräftelse av cookiefältet i sidhuvudet på webbplatsen.';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['2']['0'] = 'Tag Manager + Google Consent Mode';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['2']['1'] = 'Om ingen anpassad konfiguration har sparats för Google Consent Mode, ställs följande inställningar in automatiskt: <pre>

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
          gtag(\'config\', \'<code class="tl_red">CONTAINER ID</code>\');
          </pre>

          Observera att du måste ange denna kod själv om du har lagrat din egen konfiguration.';
