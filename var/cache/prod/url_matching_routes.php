<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/filemanager/files' => [[['_route' => 'files', '_controller' => 'Sineos\\FileManagerBundle\\Controller\\FileUsage::getFileIds'], null, ['GET' => 0], null, false, false, null]],
        '/_contao_altcha_challenge' => [[['_route' => 'Markocupic\\ContaoAltchaAntispam\\Controller\\AltchaController', '_controller' => 'Markocupic\\ContaoAltchaAntispam\\Controller\\AltchaController'], null, null, null, false, false, null]],
        '/_backend_password_recovery/confirm' => [[['_route' => 'backend_password_recovery.send_email_confirm', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Markocupic\\BackendPasswordRecoveryBundle\\Controller\\SendEmailConfirmController'], null, null, null, false, false, null]],
        '/_backend_password_recovery/form' => [[['_route' => 'backend_password_recovery.user_identifier_form', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Markocupic\\BackendPasswordRecoveryBundle\\Controller\\UserIdentifierFormController'], null, null, null, false, false, null]],
        '/BackupDB/autobackup' => [[['_route' => 'backupdb_autobackup', '_controller' => 'Softleister\\BackupDbBundle\\Controller\\BackupDbController::autoBackupAction'], null, null, null, false, false, null]],
        '/my_custom' => [
            [['_route' => 'Diversworld\\ContaoDucappBundle\\Controller\\MyCustomController', '_scope' => 'frontend', '_token_check' => true, '_controller' => 'Diversworld\\ContaoDucappBundle\\Controller\\MyCustomController'], null, null, null, false, false, null],
            [['_route' => 'Diversworld\\ContaoCheckBundle\\Controller\\MyCustomController', '_scope' => 'frontend', '_token_check' => true, '_controller' => 'Diversworld\\ContaoCheckBundle\\Controller\\MyCustomController'], null, null, null, false, false, null],
        ],
        '/contao' => [
            [['_route' => 'contao_backend', '_scope' => 'backend', '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::mainAction'], null, null, null, false, false, null],
            [['_route' => 'contao_backend_redirect', '_scope' => 'backend', '_store_referrer' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'contao_backend', 'permanent' => true], null, null, null, true, false, null],
        ],
        '/contao/login' => [[['_route' => 'contao_backend_login', '_scope' => 'backend', '_store_referer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::loginAction'], null, null, null, false, false, null]],
        '/contao/login-link' => [[['_route' => 'contao_backend_login_link', '_scope' => 'backend', '_store_referer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::loginAction'], null, null, null, false, false, null]],
        '/contao/logout' => [[['_route' => 'contao_backend_logout', '_scope' => 'backend', '_store_referer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::logoutAction'], null, null, null, false, false, null]],
        '/contao/password' => [[['_route' => 'contao_backend_password', '_scope' => 'backend', '_store_referer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::passwordAction'], null, null, null, false, false, null]],
        '/contao/confirm' => [[['_route' => 'contao_backend_confirm', '_scope' => 'backend', '_store_referer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::confirmAction'], null, null, null, false, false, null]],
        '/contao/help' => [[['_route' => 'contao_backend_help', '_scope' => 'backend', '_store_referer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::helpAction'], null, null, null, false, false, null]],
        '/contao/popup' => [[['_route' => 'contao_backend_popup', '_scope' => 'backend', '_store_referer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::popupAction'], null, null, null, false, false, null]],
        '/contao/alerts' => [[['_route' => 'contao_backend_alerts', '_scope' => 'backend', '_store_referer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::alertsAction'], null, null, null, false, false, null]],
        '/contao/picker' => [[['_route' => 'contao_backend_picker', '_scope' => 'backend', '_store_referer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::pickerAction'], null, null, null, false, false, null]],
        '/contao/preview' => [[['_route' => 'contao_backend_preview', '_scope' => 'backend', '_allow_preview' => true, '_store_referrer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendPreviewController'], null, null, null, false, false, null]],
        '/contao/preview_switch' => [[['_route' => 'contao_backend_switch', '_scope' => 'backend', '_allow_preview' => true, '_store_referrer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendPreviewSwitchController'], null, null, null, false, false, null]],
        '/favicon.ico' => [[['_route' => 'contao_core_favicon__invoke', '_scope' => 'frontend', '_controller' => 'Contao\\CoreBundle\\Controller\\FaviconController'], null, null, null, false, false, null]],
        '/_contao/cron' => [[['_route' => 'contao_frontend_cron', '_scope' => 'frontend', '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::cronAction'], null, null, null, false, false, null]],
        '/_contao/share' => [[['_route' => 'contao_frontend_share', '_scope' => 'frontend', '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::shareAction'], null, null, null, false, false, null]],
        '/_contao/logout' => [[['_route' => 'contao_frontend_logout', '_scope' => 'frontend', '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::logoutAction'], null, null, null, false, false, null]],
        '/_contao/check_cookies' => [[['_route' => 'contao_frontend_check_cookies', '_scope' => 'frontend', '_token_check' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::checkCookiesAction'], null, null, null, false, false, null]],
        '/_contao/request_token_script' => [[['_route' => 'contao_frontend_request_token_script', '_scope' => 'frontend', '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::requestTokenScriptAction'], null, null, null, false, false, null]],
        '/robots.txt' => [[['_route' => 'contao_core_robotstxt__invoke', '_scope' => 'frontend', '_controller' => 'Contao\\CoreBundle\\Controller\\RobotsTxtController'], null, null, null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'contao_core_sitemap__invoke', '_scope' => 'frontend', '_controller' => 'Contao\\CoreBundle\\Controller\\SitemapController'], null, null, null, false, false, null]],
        '/visitors/details' => [[['_route' => 'visitors_backend_details', '_scope' => 'backend', '_token_check' => true, '_controller' => 'BugBuster\\VisitorsBundle\\Controller\\VisitorsController::detailsAction'], null, null, null, false, false, null]],
        '/visitors/scco' => [[['_route' => 'visitors_frontend_screencount', '_scope' => 'frontend', '_token_check' => false, '_controller' => 'BugBuster\\VisitorsBundle\\Controller\\VisitorsFeController::sccoAction'], null, null, null, false, false, null]],
        '/dlstats/details' => [[['_route' => 'dlstats_backend_details', '_scope' => 'backend', '_token_check' => true, '_controller' => 'BugBuster\\DlstatsBundle\\Controller\\DlstatsController::detailsAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/notifications/download/(\\d{8}/[a-f0-9]{8}-[a-f0-9]{4}-4[a-f0-9]{3}-[89ab][a-f0-9]{3}-[a-f0-9]{12})(*:106)'
                .'|/co(?'
                    .'|ntao/(?'
                        .'|leads\\-export/(\\d+)(*:147)'
                        .'|eventregistration/export/([^/]++)(*:188)'
                        .'|dlstats/export/([^/]++)/([^/]++)/([^/]++)(*:237)'
                        .'|(.*)(*:249)'
                    .')'
                    .'|okiebar/(?'
                        .'|block/([^/]++)/([^/]++)(*:292)'
                        .'|([^/]++)(*:308)'
                    .')'
                .')'
                .'|/a(?'
                    .'|pi/filemanager/(?'
                        .'|usage/([^/]++)(*:355)'
                        .'|file/([^/]++)(*:376)'
                    .')'
                    .'|ssets/images/(.+)(*:402)'
                .')'
                .'|/_(?'
                    .'|gallery_creator/get_image(?'
                        .'|/([^/]++)/([^/]++)(*:462)'
                        .'|s_by_pid/([^/]++)/([^/]++)(*:496)'
                    .')'
                    .'|backend_password_recovery/reset_verify/([^/]++)(*:552)'
                    .'|contao/(?'
                        .'|c(?'
                            .'|aptcha/([^/]++)(*:589)'
                            .'|sp/report/([^/]++)(*:615)'
                        .')'
                        .'|preview/(\\d+)(*:637)'
                    .')'
                .')'
                .'|/fullcalendar/fetchEvents/([^/]++)(*:681)'
                .'|/visitors/coval/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:749)'
                .'|/botdetection/manualtests(?:/(\\d+))?(*:793)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        106 => [[['_route' => 'nc_bulky_item_download', '_controller' => 'Terminal42\\NotificationCenterBundle\\Controller\\DownloadBulkyItemController'], ['voucher'], null, null, false, true, null]],
        147 => [[['_route' => 'terminal42_leads_export', '_scope' => 'backend', '_controller' => 'Terminal42\\LeadsBundle\\Controller\\LeadsExportController'], ['id'], null, null, false, true, null]],
        188 => [[['_route' => 'InspiredMinds\\ContaoEventRegistration\\Controller\\EventRegistrationExportController', '_controller' => 'InspiredMinds\\ContaoEventRegistration\\Controller\\EventRegistrationExportController', '_scope' => 'backend'], ['eventId'], null, null, false, true, null]],
        237 => [[['_route' => 'bugbuster_dlstats_export', '_scope' => 'backend', '_token_check' => true, '_controller' => 'BugBuster\\DlstatsExportBundle\\Controller\\ExportController::onExport'], ['year', 'month', 'format'], null, null, false, true, null]],
        249 => [[['_route' => 'contao_backend_fallback', '_scope' => 'backend', '_store_referer' => false, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::backendFallback'], ['parameters'], null, null, false, true, null]],
        292 => [[['_route' => 'cookiebar_block', '_scope' => 'frontend', '_controller' => 'Oveleon\\ContaoCookiebar\\Controller\\CookiebarController::block'], ['locale', 'id'], null, null, false, true, null]],
        308 => [[['_route' => 'cookiebar_prepare', '_scope' => 'frontend', '_token_check' => false, '_controller' => 'Oveleon\\ContaoCookiebar\\Controller\\CookiebarController::execute'], ['module'], null, null, false, true, null]],
        355 => [[['_route' => 'usage', '_controller' => 'Sineos\\FileManagerBundle\\Controller\\FileUsage::usage'], ['id'], ['GET' => 0], null, false, true, null]],
        376 => [[['_route' => 'deletefile', '_controller' => 'Sineos\\FileManagerBundle\\Controller\\FileUsage::deletefile'], ['id'], ['DELETE' => 0], null, false, true, null]],
        402 => [[['_route' => 'contao_images', '_controller' => 'Contao\\CoreBundle\\Controller\\ImagesController', '_bypass_maintenance' => true], ['path'], null, null, false, true, null]],
        462 => [[['_route' => 'Markocupic\\GalleryCreatorBundle\\Controller\\Ajax\\GalleryCreatorAjax\\getImage', 'scope' => 'frontend', '_controller' => 'Markocupic\\GalleryCreatorBundle\\Controller\\Ajax\\GalleryCreatorAjax::getImage'], ['pictureId', 'contentId'], null, null, false, true, null]],
        496 => [[['_route' => 'Markocupic\\GalleryCreatorBundle\\Controller\\Ajax\\GalleryCreatorAjax\\getImagesByPid', 'scope' => 'frontend', '_controller' => 'Markocupic\\GalleryCreatorBundle\\Controller\\Ajax\\GalleryCreatorAjax::getImagesByPid'], ['pid', 'contentId'], null, null, false, true, null]],
        552 => [[['_route' => 'backend_password_recovery.reset_verify', '_scope' => 'backend', '_controller' => 'Markocupic\\BackendPasswordRecoveryBundle\\Controller\\ResetVerifyController'], ['_token'], null, null, false, true, null]],
        589 => [[['_route' => 'contao_frontend_captcha', '_scope' => 'frontend', '_controller' => 'Contao\\CoreBundle\\Controller\\CaptchaController'], ['_locale'], null, null, false, true, null]],
        615 => [[['_route' => 'contao_core_cspreporter__invoke', '_controller' => 'Contao\\CoreBundle\\Controller\\CspReporterController'], ['page'], ['POST' => 0], null, false, true, null]],
        637 => [[['_route' => 'contao_preview_link', '_scope' => 'frontend', '_allow_preview' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\PreviewLinkController'], ['id'], null, null, false, true, null]],
        681 => [[['_route' => 'Cgoit\\CalendarExtendedBundle\\Controller\\Ajax\\FetchEventsController', '_scope' => 'frontend', '_token_check' => true, '_controller' => 'Cgoit\\CalendarExtendedBundle\\Controller\\Ajax\\FetchEventsController'], ['moduleId'], ['POST' => 0], null, false, true, null]],
        749 => [[['_route' => 'visitors_frontend_countervalues', '_scope' => 'frontend', '_token_check' => false, '_controller' => 'BugBuster\\VisitorsBundle\\Controller\\VisitorsFeAjaxController'], ['vc', 'pid', 'protected', 'pagetype', 'specialid'], null, null, false, true, null]],
        793 => [
            [['_route' => 'bugbuster_botdetection_main', '_controller' => 'BugBuster\\BotdetectionBundle\\Controller\\FrontendController::manualtestsAction', '_scope' => 'frontend', '_token_check' => false, 'token' => 0], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
