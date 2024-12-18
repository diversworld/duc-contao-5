<?php

// vendor/contao/core-bundle/contao/languages/en/explain.xlf
$GLOBALS['TL_LANG']['XPL']['insertTags']['0']['0'] = 'Rich text editor';
$GLOBALS['TL_LANG']['XPL']['insertTags']['0']['1'] = 'For more information about TinyMCE, see <a href="https://www.tiny.cloud/tinymce/" target="_blank" rel="noreferrer noopener">https://www.tiny.cloud/tinymce/</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['1']['0'] = 'Insert tags';
$GLOBALS['TL_LANG']['XPL']['insertTags']['1']['1'] = 'For more information about insert tags, see the <a href="https://to.contao.org/docs/insert-tags?lang=en" target="_blank" rel="noreferrer noopener">Contao manual</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['2']['0'] = 'Code editor';
$GLOBALS['TL_LANG']['XPL']['insertTags']['2']['1'] = 'For more information about Ace, see <a href="https://ace.c9.io" target="_blank" rel="noreferrer noopener">https://ace.c9.io</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags']['3']['0'] = 'Markdown';
$GLOBALS['TL_LANG']['XPL']['insertTags']['3']['1'] = 'To learn more about markdown, see the <a href="https://to.contao.org/docs/markdown?lang=en" target="_blank" rel="noreferrer noopener">Contao manual</a>.';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['0']['0'] = 'colspan';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['0']['1'] = 'Contao supports all date and time formats that can be parsed with the PHP date() function. However, to ensure that any input can be transformed into a UNIX timestamp, you can only use numeric date and time formats (j, d, m, n, y, Y, g, G, h, H, i, s) in the back end.<br><br><strong>You can enter different front end formats in the website root pages.</strong><br><br><em>Here are some examples of valid date and time formats</em>:';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['1']['0'] = 'Y-m-d';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['1']['1'] = 'YYYY-MM-DD, international ISO-8601, e.g. 2005-01-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['2']['0'] = 'm/d/Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['2']['1'] = 'MM/DD/YYYY, English format, e.g. 01/28/2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['3']['0'] = 'd.m.Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['3']['1'] = 'DD.MM.YYYY, German format, e.g. 28.01.2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['4']['0'] = 'y-n-j';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['4']['1'] = 'YY-M-D, without leading zeros, e.g. 05-1-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['5']['0'] = 'Ymd';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['5']['1'] = 'YYYYMMDD, timestamp, e.g. 20050128';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['6']['0'] = 'H:i:s';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['6']['1'] = '24 hours, minutes and seconds, e.g. 20:36:59';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['7']['0'] = 'g:i';
$GLOBALS['TL_LANG']['XPL']['dateFormat']['7']['1'] = '12 hours without leading zeros and minutes, e.g. 8:36';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['0']['0'] = 'Sizes attribute';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['0']['1'] = 'The HTML attribute <code>sizes</code> defines the intended layout width of the image, optionally combined with a media query. You can use any CSS length value in this attribute.<br><br>E.g. <code>(max-width: 600px) 100vw, 50vw</code> means the image‘s width is 100% of the viewport for small screens and 50% of the viewport for larger screens.<br><br>And <code>(max-width: 600px) calc(100vw - 20px), 500px</code> means the image‘s width is 20px smaller than the viewport for small screens and 500px for larger screens.<br><br>The sizes attribute shouldn’t be used for styling, use CSS instead. The sizes attribute does not necessarily have to match up exactly with the actual image width as specified in the CSS.<br><br>For more information about the sizes attribute please visit <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-sizes" target="_blank" rel="noreferrer noopener">w3.org</a>.';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['1']['0'] = 'Pixel densities/<br>scale factors';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities']['1']['1'] = 'If the sizes attribute is not defined, this setting simply defines the pixel densities you want to support. The dimensions of the images are adjusted automatically. E.g. <code>1x, 1.5x, 2x</code> creates the following HTML code: <code>&lt;img srcset="img-a.jpg 1x, img-b.jpg 1.5x, img-c.jpg 2x"&gt;</code><br><br>If the sizes attribute is defined, the same image sizes are generated but width descriptors are used for the srcset attribute. E.g. a 200 pixel wide image with the densities <code>1x, 1.5x, 2x</code> creates the following HTML code: <code>&lt;img srcset="img-a.jpg 200w, img-b.jpg 300w, img-c.jpg 400w"&gt;</code><br><br>For more information about the srcset attribute please visit <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-srcset" target="_blank" rel="noreferrer noopener">w3.org</a>.';

// vendor/oveleon/contao-cookiebar/contao/languages/en/explain.xlf
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['0']['0'] = 'Cookiebar versions';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['0']['1'] = 'Versions can be stored for each cookiebar configuration. Every new version of a configuration forces the cookiebar to be displayed to the visitor, regardless of whether it has already been accepted. This way, visitors can be notified about new cookies and grant or deny permission. Any settings previously set by the visitor remain unchanged.';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['1']['0'] = 'Create new version';
$GLOBALS['TL_LANG']['XPL']['cookiebarVersion']['1']['1'] = 'To create a new version, select the <code>checkbox</code> for <code>Update version</code> and then save the mask. The version is automatically incremented.';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['0']['0'] = 'Google Analytics';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['0']['1'] = 'Extend the standard configuration of Google Analytics: <pre>

         window.dataLayer=window.dataLayer||[];
         function gtag(){dataLayer.push(arguments)}
         gtag(\'js\',new Date());
         gtag(\'config\',\'XXXXXX\' <code class="tl_red">[, Parameters are placed here]</code>)</pre>';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['1']['0'] = 'Google Consent Mode';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['1']['1'] = '<b>Replace</b> the default configuration of Google Consent Mode. If you do not enter your own configuration, the following code will be generated automatically: <pre>

          gtag(\'consent\', \'default\', {
          \'<code class="tl_red">consent mode</code>\': \'granted\'
          });
          </pre>

          If own code is provided for the configuration, the above code must be integrated independently! This can be modified if necessary.
          <br><br>
          Further information:<br>
          https://developers.google.com/gtagjs/devguide/consent<br><br>
          <i>This cookie type also requires a global configuration of the type "Google Tag Manager" with "Google Consent Mode" activated therein.</i>
        ';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['2']['0'] = 'Matomo';
$GLOBALS['TL_LANG']['XPL']['cookiebarScriptConfig']['2']['1'] = 'Extend the standard configuration of Matomo: <pre>

        var _paq = window._paq = window._paq || [];

        (function() { var u=\'XXX/\';
          <code class="tl_red">Parameters are placed here</code>
          var d=document, g=d.createElement(\'script\'), s=d.getElementsByTagName(\'script\')[0];
          g.type=\'text/javascript\';
          g.async=true;
          g.src=u+\'matomo.js\';
          s.parentNode.insertBefore(g,s);})();
          </pre>
          If no own parameters are defined, the following lines are added automatically:
          <pre>
          <code class="tl_red">_paq.push([\'trackPageView\']);</code>
          <code class="tl_red">_paq.push([\'enableLinkTracking\']);</code><pre>';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['1']['0'] = 'Google Tag Manager';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['1']['1'] = 'Enables the integration of the Google Tag Manager. Additionally, a custom script can be entered. Please note that these settings are already implemented without confirmation of the cookiebar in the HEAD of the website.';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['2']['0'] = 'Tag Manager + Google Consent Mode';
$GLOBALS['TL_LANG']['XPL']['configurationScriptConfig']['2']['1'] = 'If you do not define your own configuration for Google Consent Mode, the following settings are set automatically: <pre>

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

          Please note that you have to enter this code yourself if you want to create your own configuration.
          The integration of the Google Tag Manager is done automatically via the following code:

          <pre>

          (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
          new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
          \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,\'script\',\'dataLayer\',\'ID\');
          </pre>
        ';

$GLOBALS['TL_LANG']['XPL']['customInsertTags'] = [['Evaluation tokens', 'These tokens can be used in conditional statements.'], ['<code>member.*</code>', 'Evaluate the current member tokens, if logged in.<br>Example: <code>member.id</code> or <code>member.firstname</code> or <code>member.groups</code>.'], ['<code>page.*</code>', 'Evaluate the page tokens.<br>Example: <code>page.id</code> or <code>page.trail</code>.'], ['Replacement tokens', 'These tokens can be used to output the data.'], ['<code>##member_*##</code>', 'Replace the current member tokens.'], ['<code>##page_*##</code>', 'Replace the current page tokens.'], ['', 'View the full documentation at Github. <a href="https://github.com/terminal42/contao-inserttags/blob/main/README.md" target="_blank" rel="noreferrer">View the documentation</a>.']];

// vendor/bugbuster/contao-visitors-bundle/src/Resources/contao/languages/en/explain.xlf
$GLOBALS['TL_LANG']['XPL']['visitors_help']['0']['0'] = 'Name';
$GLOBALS['TL_LANG']['XPL']['visitors_help']['0']['1'] = 'The name appears as a headline in the frontend.';
$GLOBALS['TL_LANG']['XPL']['visitors_help']['1']['0'] = 'Start date';
$GLOBALS['TL_LANG']['XPL']['visitors_help']['1']['1'] = 'The start date is used for pure information.<br>In the frontend this date will be displayed<br>It does not affect the start of counting!<br>When the field left blank will hide the row in frontend.';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['0']['0'] = 'HTTP_USER_AGENT partial identifier';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['0']['1'] = 'With the change of a user agent with a unique string and entry in this field can be prevented, that will count your own requests.<br>Detailed instructions, can be found in the Wiki.';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['1']['0'] = 'Counter template';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['1']['1'] = 'Each module can be assigned its own Template. Four different templates are included.
<br><strong>mod_visitors_fe_all</strong><br>&nbsp;&nbsp;&nbsp;All fields are included.
<br><strong>mod_visitors_fe_all_ajax</strong><br>&nbsp;&nbsp;&nbsp;All fields are included. (Ajax Refresh)
<br><strong>mod_visitors_fe_hits</strong><br>&nbsp;&nbsp;&nbsp;Here the visit rows were removed.
<br><strong>mod_visitors_fe_visits</strong><br>&nbsp;&nbsp;&nbsp;Here the hit rows were removed.
<br><strong>mod_visitors_fe_invisible</strong><br>&nbsp;&nbsp;&nbsp;Here, nothing is displayed. This template is used for a pure counting.
';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['2']['0'] = 'Count the device/screen resolution';
$GLOBALS['TL_LANG']['XPL']['visitors_help_module']['2']['1'] = 'The module can detect and count the device/screen resolution and display it in the backend statistics.
<br>In Germany, according to TDDDG §25, this is only permitted if the end user has consented on the basis of clear and comprehensive information.
<br>There are exceptions to this. See: https://gesetz-tdddg.de/25-tdddg/
<br>
<br>In other countries, the lawfulness of detecting the device/screen resolution should be checked before activation.
<br>
';
