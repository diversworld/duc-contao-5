<?php

// vendor/contao/core-bundle/contao/languages/fr/explain.xlf
$GLOBALS['TL_LANG']['XPL']['insertTags']['0']['0'] = 'Éditeur de texte riche';
$GLOBALS['TL_LANG']['XPL']['insertTags']['0']['1'] = 'Pour plus d\'informations sur TinyMCE, voir <a href="https://www.tiny.cloud/tinymce/" target="_blank" rel="noreferrer noopener">https://www.tiny.cloud/tinymce/</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['1']['0'] = 'Balises d\'insertion';
$GLOBALS['TL_LANG']['XPL']['insertTags']['2']['0'] = 'Éditeur de code';
$GLOBALS['TL_LANG']['XPL']['insertTags']['2']['1'] = 'Pour plus d\'informations sur Ace, voir <a href="https://ace.c9.io" target="_blank" rel="noreferrer noopener">https://ace.c9.io</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['3']['0'] = 'Markdown';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['0']['0'] = 'colspan';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['0']['1'] = 'Contao supporte tous les formats de date et d\'heure qui peuvent être analysés avec la fonction PHP date(). Cependant, pour s\'assurer que toute entrée peut être transformée en un horodatage UNIX, vous ne pouvez utiliser que des formats numériques de date et d\'heure (j, d, m, n, y, Y, g, G, h, H, i, s) dans le back-end.<br><br><strong>Vous pouvez entrer différents formats frontaux dans les pages racine du site web.</strong><br><br><em>Voici quelques exemples de formats de date et d\'heure valides</em>:';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['1']['0'] = 'Y-m-d';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['1']['1'] = 'YYYY-MM-DD, norme internationale ISO-8601, ex. : 2005-01-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['2']['0'] = 'm/d/Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['2']['1'] = 'MM/ JJ/AAAA, format anglais, par exemple 01/28/2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['3']['0'] = 'd.m.Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['3']['1'] = 'JJ.MM.AAAA, format allemand, par exemple 28.01.2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['4']['0'] = 'y-n-j';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['4']['1'] = 'YY-M-D, sans le zéro des mois, ex. : 05-1-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['5']['0'] = 'Ymd';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['5']['1'] = 'YYYYMMDD, cachet horaire, ex. : 20050128';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['6']['0'] = 'H:i:s';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['6']['1'] = '24 heures, minutes et secondes, ex. : 20:36:59';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['7']['0'] = 'g:i';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['7']['1'] = '12 heures sans zéros initiaux ex. : 8:36';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['0']['0'] = 'Attribut tailles (sizes)';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['0']['1'] = 'L\'attribut HTML <code>sizes</code> définit la largeur prévue de l\'image, éventuellement combinée à une requête média. Vous pouvez utiliser n\'importe quelle valeur de longueur CSS dans cet attribut.<br><br>par exemple. <code>(max-width: 600px) 100vw, 50vw</code> signifie que la largeur de l\'image est égale à 100 % de la fenêtre d\'affichage pour les petits écrans et à 50 % de la fenêtre d\'affichage pour les écrans plus larges.<br><br>et <code>(max-width: 600px) calc(100vw - 20px), 500px</code> signifie que la largeur de l\'image est inférieure de 20px à la fenêtre d\'affichage pour les petits écrans et de 500px pour les écrans plus larges.<br><br>L\'attribut sizes ne doit pas nécessairement correspondre exactement à la largeur réelle de l\'image telle qu\'elle est spécifiée dans le CSS.<br><br>Pour plus d\'informations sur l\'attribut sizes, veuillez consulter le site <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-sizes" target="_blank" rel="noreferrer noopener">w3.org</a>.';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['1']['0'] = 'Densité de pixels/<br>facteurs d\'échelle';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['1']['1'] = 'Si l\'attribut sizes n\'est pas défini, ce paramètre définit simplement les densités de pixels que vous souhaitez prendre en charge. Les dimensions des images sont ajustées automatiquement. Par exemple, <code>1x, 1.5x, 2x</code> crée le code HTML suivant : <code>&lt;img srcset="img-a.jpg 1x, img-b.jpg 1.5x, img-c.jpg 2x"&gt;</code><br><br>Si l\'attribut sizes est défini, les mêmes tailles d\'image sont générées mais des valeurs de largeur sont utilisés pour l\'attribut srcset. Par exemple, une image de 200 pixels de large avec les densités <code>1x, 1.5x, 2x</code> crée le code HTML suivant : <code>&lt;img srcset="img-a.jpg 200w, img-b.jpg 300w, img-c.jpg 400w"&gt;</code><br><br>Pour plus d\'informations sur l\'attribut srcset, veuillez consulter le site <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-srcset" target="_blank" rel="noreferrer noopener">w3.org</a>.';

// vendor/oveleon/contao-cookiebar/contao/languages/fr/explain.xlf
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['0']['0'] = 'Versions Cookiebar';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['0']['1'] = 'Des versions peuvent être enregistrées pour chaque configuration de cookiebar. Chaque nouvelle version d\'une configuration force l\'affichage de la cookiebar au visiteur, qu\'elle ait déjà été acceptée ou non. De cette façon, les visiteurs peuvent être informés des nouveaux cookies et accorder ou refuser l\'autorisation. Tous les paramètres précédemment définis par le visiteur restent inchangés.';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['1']['0'] = 'Créer une nouvelle version';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['1']['1'] = 'Pour créer une nouvelle version, cochez la case <code>checkbox</code> pour <code>Update version</code> puis enregistrez. La version est automatiquement incrémentée. ';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['0']['0'] = 'Google Analytics';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['0']['1'] = 'Étendre la configuration standard de Google Analytics: <pre>

          window.dataLayer=window.dataLayer||[];
          function gtag(){dataLayer.push(arguments)}
          gtag(\'js\',new Date());
          gtag(\'config\',\'XXXXXX\' <code class="tl_red">[, Les paramètres sont placés ici]</code>)</pre>';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['1']['0'] = 'Google Consent Mode';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['1']['1'] = '<b>Remplacer</b>  la configuration par défaut du mode consentement de Google. Si vous ne saisissez pas votre propre configuration, le code suivant sera généré automatiquement : <pre>

          gtag(\'consent\', \'default\', {
          \'<code class="tl_red">Einwilligungsmodus</code>\': \'granted\'
          });
          </pre>

          Si une code spécifique est fourni pour la configuration, le code ci-dessus doit être intégré indépendamment ! Celui-ci peut être modifié si nécessaire.
          <br><br>
          Plus d\'informations:<br>
          https://developers.google.com/gtagjs/devguide/consent<br><br>
          <i>Ce type de cookie nécessite également une configuration globale du type "Google Tag Manager" avec le "Mode consentement Google" activé dans celui-ci.</i>
        ';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['2']['0'] = 'Matomo';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['2']['1'] = 'Étendre la configuration standard de Matomo: <pre>

          var _paq = window._paq = window._paq || [];

          (function() { var u=\'XXX/\';
          <code class="tl_red">Parameters are placed here</code>
          var d=document, g=d.createElement(\'script\'), s=d.getElementsByTagName(\'script\')[0];
          g.type=\'text/javascript\';
          g.async=true;
          g.src=u+\'matomo.js\';
          s.parentNode.insertBefore(g,s);})();
          </pre>
          Si aucun paramètre spécifique n\'est défini, les lignes suivantes sont ajoutées automatiquement :
          <pre>
          <code class="tl_red">_paq.push([\'trackPageView\']);</code>
          <code class="tl_red">_paq.push([\'enableLinkTracking\']);</code><pre>';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['1']['0'] = 'Google Tag Manager';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['1']['1'] = 'Active l\'intégration du Google Tag Manager. En outre, un script personnalisé peut être saisi. Veuillez noter que ces paramètres sont déjà mis en œuvre sans confirmation de cookibar dans le HEAD du site.';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['2']['0'] = 'Tag Manager + Mode Consentement Google';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['2']['1'] = 'Si vous ne définissez pas votre propre configuration pour le mode Consentement Google, les paramètres suivants sont définis automatiquement : <pre>

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

          Veuillez noter que vous devez saisir ce code vous-même si vous souhaitez créer votre propre configuration.
          L\'intégration de Google Tag Manager se fait automatiquement via le code suivant:

          <pre>

          (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
          new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
          \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,\'script\',\'dataLayer\',\'ID\');
          </pre>
        ';

// vendor/bugbuster/contao-visitors-bundle/src/Resources/contao/languages/fr/explain.xlf
$GLOBALS['TL_LANG']['XPL']['visitors_help']['0']['0'] = 'Nom';
$GLOBALS['TL_LANG']['XPL']['visitors_help']['1']['0'] = 'Date de départ';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['0']['0'] = 'HTTP_USER_AGENT identifiant partiel';
