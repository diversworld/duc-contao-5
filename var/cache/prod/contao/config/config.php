<?php

namespace {
// Back end modules
$GLOBALS['BE_MOD'] = array(
    // Content modules
    'content' => array('page' => array('tables' => array('tl_page')), 'article' => array('tables' => array('tl_article', 'tl_content'), 'table' => array(\Contao\CoreBundle\Controller\BackendCsvImportController::class, 'importTableWizardAction'), 'list' => array(\Contao\CoreBundle\Controller\BackendCsvImportController::class, 'importListWizardAction')), 'files' => array('tables' => array('tl_files')), 'form' => array('tables' => array('tl_form', 'tl_form_field'), 'option' => array(\Contao\CoreBundle\Controller\BackendCsvImportController::class, 'importOptionWizardAction'))),
    // Design modules
    'design' => array('themes' => array('tables' => array('tl_theme', 'tl_module', 'tl_layout', 'tl_image_size', 'tl_image_size_item'), 'importTheme' => array(\Contao\Theme::class, 'importTheme'), 'exportTheme' => array(\Contao\Theme::class, 'exportTheme')), 'tpl_editor' => array('tables' => array('tl_templates'), 'new_tpl' => array('tl_templates', 'addNewTemplate'), 'compare' => array('tl_templates', 'compareTemplate'))),
    // Account modules
    'accounts' => array('member' => array('tables' => array('tl_member')), 'mgroup' => array('tables' => array('tl_member_group')), 'user' => array('tables' => array('tl_user')), 'group' => array('tables' => array('tl_user_group')), 'login' => array('tables' => array('tl_user'), 'hideInNavigation' => \true, 'disablePermissionChecks' => \true), 'security' => array('callback' => \Contao\ModuleTwoFactor::class, 'hideInNavigation' => \true, 'disablePermissionChecks' => \true), 'favorites' => array('tables' => array('tl_favorites'), 'hideInNavigation' => \true, 'disablePermissionChecks' => \true)),
    // System modules
    'system' => array('settings' => array('tables' => array('tl_settings')), 'maintenance' => array('callback' => \Contao\ModuleMaintenance::class), 'log' => array('tables' => array('tl_log')), 'preview_link' => array('tables' => array('tl_preview_link')), 'opt_in' => array('tables' => array('tl_opt_in'), 'resend' => array('tl_opt_in', 'resendToken')), 'undo' => array('tables' => array('tl_undo'), 'disablePermissionChecks' => \true)),
);
// Front end modules
$GLOBALS['FE_MOD'] = array('navigationMenu' => array('navigation' => \Contao\ModuleNavigation::class, 'customnav' => \Contao\ModuleCustomnav::class, 'breadcrumb' => \Contao\ModuleBreadcrumb::class, 'quicknav' => \Contao\ModuleQuicknav::class, 'quicklink' => \Contao\ModuleQuicklink::class, 'booknav' => \Contao\ModuleBooknav::class, 'articlenav' => \Contao\ModuleArticlenav::class, 'sitemap' => \Contao\ModuleSitemap::class), 'user' => array('login' => \Contao\ModuleLogin::class, 'personalData' => \Contao\ModulePersonalData::class, 'registration' => \Contao\ModuleRegistration::class, 'changePassword' => \Contao\ModuleChangePassword::class, 'lostPassword' => \Contao\ModuleLostPassword::class, 'closeAccount' => \Contao\ModuleCloseAccount::class), 'application' => array('form' => \Contao\Form::class, 'search' => \Contao\ModuleSearch::class), 'miscellaneous' => array('articlelist' => \Contao\ModuleArticleList::class, 'randomImage' => \Contao\ModuleRandomImage::class, 'html' => \Contao\ModuleHtml::class, 'rssReader' => \Contao\ModuleRssReader::class));
// Content elements
$GLOBALS['TL_CTE'] = array('texts' => array(), 'links' => array(), 'files' => array(), 'media' => array(), 'miscellaneous' => array(), 'includes' => array('article' => \Contao\ContentArticle::class, 'alias' => \Contao\ContentAlias::class, 'form' => \Contao\Form::class, 'module' => \Contao\ContentModule::class), 'legacy' => array('accordionSingle' => \Contao\ContentAccordion::class, 'accordionStart' => \Contao\ContentAccordionStart::class, 'accordionStop' => \Contao\ContentAccordionStop::class, 'sliderStart' => \Contao\ContentSliderStart::class, 'sliderStop' => \Contao\ContentSliderStop::class));
// Back end form fields
$GLOBALS['BE_FFL'] = array('text' => \Contao\TextField::class, 'password' => \Contao\Password::class, 'textarea' => \Contao\TextArea::class, 'select' => \Contao\SelectMenu::class, 'checkbox' => \Contao\CheckBox::class, 'checkboxWizard' => \Contao\CheckBoxWizard::class, 'radio' => \Contao\RadioButton::class, 'radioTable' => \Contao\RadioTable::class, 'inputUnit' => \Contao\InputUnit::class, 'trbl' => \Contao\TrblField::class, 'chmod' => \Contao\ChmodTable::class, 'picker' => \Contao\Picker::class, 'pageTree' => \Contao\PageTree::class, 'fileTree' => \Contao\FileTree::class, 'fileUpload' => \Contao\Upload::class, 'tableWizard' => \Contao\TableWizard::class, 'listWizard' => \Contao\ListWizard::class, 'optionWizard' => \Contao\OptionWizard::class, 'moduleWizard' => \Contao\ModuleWizard::class, 'keyValueWizard' => \Contao\KeyValueWizard::class, 'imageSize' => \Contao\ImageSize::class, 'timePeriod' => \Contao\TimePeriod::class, 'metaWizard' => \Contao\MetaWizard::class, 'sectionWizard' => \Contao\SectionWizard::class, 'serpPreview' => \Contao\SerpPreview::class, 'rootPageDependentSelect' => \Contao\RootPageDependentSelect::class);
// Front end form fields
$GLOBALS['TL_FFL'] = array('explanation' => \Contao\FormExplanation::class, 'html' => \Contao\FormHtml::class, 'fieldsetStart' => \Contao\FormFieldsetStart::class, 'fieldsetStop' => \Contao\FormFieldsetStop::class, 'text' => \Contao\FormText::class, 'password' => \Contao\FormPassword::class, 'textarea' => \Contao\FormTextarea::class, 'select' => \Contao\FormSelect::class, 'radio' => \Contao\FormRadio::class, 'checkbox' => \Contao\FormCheckbox::class, 'upload' => \Contao\FormUpload::class, 'range' => \Contao\FormRange::class, 'hidden' => \Contao\FormHidden::class, 'captcha' => \Contao\FormCaptcha::class, 'submit' => \Contao\FormSubmit::class);
// Page types
$GLOBALS['TL_PTY'] = array('regular' => \Contao\PageRegular::class, 'forward' => \Contao\PageForward::class, 'redirect' => \Contao\PageRedirect::class, 'logout' => \Contao\PageLogout::class, 'error_401' => \Contao\PageError401::class, 'error_403' => \Contao\PageError403::class, 'error_404' => \Contao\PageError404::class);
// Maintenance
$GLOBALS['TL_MAINTENANCE'] = array(\Contao\Crawl::class, \Contao\PurgeData::class);
// Purge jobs
$GLOBALS['TL_PURGE'] = array('tables' => array('index' => array('callback' => array(\Contao\Automator::class, 'purgeSearchTables'), 'affected' => array('tl_search', 'tl_search_index', 'tl_search_term')), 'undo' => array('callback' => array(\Contao\Automator::class, 'purgeUndoTable'), 'affected' => array('tl_undo')), 'versions' => array('callback' => array(\Contao\Automator::class, 'purgeVersionTable'), 'affected' => array('tl_version')), 'log' => array('callback' => array(\Contao\Automator::class, 'purgeSystemLog'), 'affected' => array('tl_log')), 'crawl_queue' => array('callback' => array(\Contao\Automator::class, 'purgeCrawlQueue'), 'affected' => array('tl_crawl_queue'))), 'folders' => array('images' => array('callback' => array(\Contao\Automator::class, 'purgeImageCache'), 'affected' => array(\Contao\StringUtil::stripRootDir(\Contao\System::getContainer()->getParameter('contao.image.target_dir')))), 'previews' => array('callback' => array(\Contao\Automator::class, 'purgePreviewCache'), 'affected' => array(\Contao\StringUtil::stripRootDir(\Contao\System::getContainer()->getParameter('contao.image.preview.target_dir')))), 'scripts' => array('callback' => array(\Contao\Automator::class, 'purgeScriptCache'), 'affected' => array('assets/js', 'assets/css')), 'temp' => array('callback' => array(\Contao\Automator::class, 'purgeTempFolder'), 'affected' => array('system/tmp'))), 'custom' => array('pages' => array('callback' => array(\Contao\Automator::class, 'purgePageCache')), 'xml' => array('callback' => array(\Contao\Automator::class, 'generateXmlFiles')), 'symlinks' => array('callback' => array(\Contao\Automator::class, 'generateSymlinks'))));
// Hooks
$GLOBALS['TL_HOOKS'] = array('getSystemMessages' => array(array(\Contao\Messages::class, 'languageFallback')));
// Wrapper elements
$GLOBALS['TL_WRAPPERS'] = array('start' => array('accordionStart', 'sliderStart', 'fieldsetStart'), 'stop' => array('accordionStop', 'sliderStop', 'fieldsetStop'), 'single' => array('accordionSingle'), 'separator' => array());
// Models
$GLOBALS['TL_MODELS'] = array('tl_article' => \Contao\ArticleModel::class, 'tl_content' => \Contao\ContentModel::class, 'tl_files' => \Contao\FilesModel::class, 'tl_form_field' => \Contao\FormFieldModel::class, 'tl_form' => \Contao\FormModel::class, 'tl_image_size_item' => \Contao\ImageSizeItemModel::class, 'tl_image_size' => \Contao\ImageSizeModel::class, 'tl_layout' => \Contao\LayoutModel::class, 'tl_member_group' => \Contao\MemberGroupModel::class, 'tl_member' => \Contao\MemberModel::class, 'tl_module' => \Contao\ModuleModel::class, 'tl_opt_in' => \Contao\OptInModel::class, 'tl_page' => \Contao\PageModel::class, 'tl_theme' => \Contao\ThemeModel::class, 'tl_user_group' => \Contao\UserGroupModel::class, 'tl_user' => \Contao\UserModel::class);
// Other global arrays
$GLOBALS['TL_PERMISSIONS'] = array();
}

namespace {
// Back end modules
$GLOBALS['BE_MOD']['accounts']['debug'] = array('enable' => array(\Contao\ManagerBundle\Controller\DebugController::class, 'enableAction'), 'disable' => array(\Contao\ManagerBundle\Controller\DebugController::class, 'disableAction'), 'hideInNavigation' => \true, 'disablePermissionChecks' => \true);
}

namespace {
$GLOBALS['TL_HEAD'][] = '<link rel="preload" href="/bundles/heimseitencontaogooglefontsroboto/css/contao-google-fonts-roboto-bundle.css" as="style" onload="this.onload=null; this.rel=\'stylesheet\';">';
}

namespace {
/**
 * BACK END MODULES
 */
$GLOBALS['BE_MOD']['content']['ticker'] = ['tables' => ['tl_ticker_category', 'tl_ticker']];
/**
 * FRONT END MODULES
 */
$GLOBALS['FE_MOD']['miscellaneous']['ticker'] = \Softleister\TickerBundle\ModuleTicker::class;
}

namespace {
// Back end modules
$GLOBALS['BE_MOD']['system']['cookiebar'] = ['tables' => ['tl_cookiebar', 'tl_cookie_log', 'tl_cookie_group', 'tl_cookie', 'tl_cookie_config'], 'export' => [\Oveleon\ContaoCookiebar\Export\LogExport::class, 'export']];
// Models
$GLOBALS['TL_MODELS']['tl_cookiebar'] = \Oveleon\ContaoCookiebar\Model\CookiebarModel::class;
$GLOBALS['TL_MODELS']['tl_cookie_log'] = \Oveleon\ContaoCookiebar\Model\CookieLogModel::class;
$GLOBALS['TL_MODELS']['tl_cookie_group'] = \Oveleon\ContaoCookiebar\Model\CookieGroupModel::class;
$GLOBALS['TL_MODELS']['tl_cookie'] = \Oveleon\ContaoCookiebar\Model\CookieModel::class;
$GLOBALS['TL_MODELS']['tl_cookie_config'] = \Oveleon\ContaoCookiebar\Model\GlobalConfigModel::class;
}

namespace {
$GLOBALS['BE_FFL']['multiColumnWizard'] = \MenAtWork\MultiColumnWizardBundle\Contao\Widgets\MultiColumnWizard::class;
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = [\MenAtWork\MultiColumnWizardBundle\EventListener\Contao\LoadDataContainer::class, 'supportModalSelector'];
$GLOBALS['TL_HOOKS']['initializeSystem'][] = [\MenAtWork\MultiColumnWizardBundle\EventListener\Contao\InitializeSystem::class, 'addSystemNecessaryThings'];
$GLOBALS['TL_HOOKS']['initializeSystem'][] = [\MenAtWork\MultiColumnWizardBundle\EventListener\Contao\InitializeSystem::class, 'changeAjaxPostActions'];
$GLOBALS['TL_HOOKS']['executePostActions'][] = [\MenAtWork\MultiColumnWizardBundle\EventListener\Contao\ExecutePostActions::class, 'executePostActions'];
$GLOBALS['TL_HOOKS']['executePostActions'][] = [\MenAtWork\MultiColumnWizardBundle\EventListener\Contao\ExecutePostActions::class, 'handleRowCreation'];
/*
 * All Hooks for the BE are moved to the following function:
 * \MenAtWork\MultiColumnWizardBundle\EventListener\Contao\InitializeSystem::addSystemNecessaryThings
 */
}

namespace {
// Backend modules
$GLOBALS['BE_MOD']['content']['inserttags'] = ['tables' => ['tl_inserttags']];
}

namespace {
/*
 * Material Icons Inserttag Bundle for Contao Open Source CMS
 *
 * Copyright (c) 2019 pdir / digital agentur // pdir GmbH
 * @package    material-icons-inserttag
 * @link       https://github.com/contao-themes-net/material-icons-inserttag
 * @author     Philipp Seibt <develop@pdir.de>
 * @license    LGPL-3.0-or-later
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['ctn.materialiconsinserttag.listener.hooks', 'onReplaceInsertTags'];
}

namespace {
$GLOBALS['TL_HEAD'][] = '<link rel="preload" href="/bundles/heimseitencontaogooglefontsopensans/css/contao-google-fonts-open-sans-bundle.css" as="style" onload="this.onload=null; this.rel=\'stylesheet\';">';
}

namespace {
if (\version_compare(\Contao\CoreBundle\ContaoCoreBundle::getVersion(), '5.0', '>=')) {
    $GLOBALS['BE_MOD']['content']['files']['usage'] = array(\Sineos\FileManagerBundle\Modules\Usage::class, 'showUsage');
    $GLOBALS['BE_MOD']['content']['files']['nousage'] = array(\Sineos\FileManagerBundle\Modules\NoUsage::class, 'showNoUsage');
} else {
    $GLOBALS['BE_MOD']['system']['files']['usage'] = array(\Sineos\FileManagerBundle\Modules\Usage::class, 'showUsage');
    $GLOBALS['BE_MOD']['system']['files']['nousage'] = array(\Sineos\FileManagerBundle\Modules\NoUsage::class, 'showNoUsage');
}
}

namespace {
/**
 * Extension for Contao 5
 *
 * @copyright  Softleister 2014-2024
 * @author     Softleister <info@softleister.de>
 * @package    contao-pdfforms-bundle
 * @licence    LGPL
 * @see	       https://github.com/do-while/contao-pdfforms-bundle
 */
/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['form']['tables'][] = 'tl_pdff_positions';
$GLOBALS['BE_MOD']['content']['form']['stylesheet'] = 'bundles/softleisterpdfforms/styles.css';
$GLOBALS['BE_MOD']['content']['form']['testpdf'] = ['Softleister\\PdfformsBundle\\PdfformsTestPdf', 'testpdf'];
}

namespace {
/*
 * Backend modules
 */
$GLOBALS['BE_MOD']['dev_tools']['contao_bundle_creator'] = ['tables' => ['tl_contao_bundle_creator']];
/*
 * Models
 */
$GLOBALS['TL_MODELS']['tl_contao_bundle_creator'] = \Markocupic\ContaoBundleCreatorBundle\Model\ContaoBundleCreatorModel::class;
/*
 * Licenses
 *
 * @see https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 */
$GLOBALS['contao_bundle_creator']['licenses'] = ['AFL-3.0' => 'Academic Free License v3.0', 'APACHE-2.0' => 'Apache license 2.0', 'ARTISTIC-2.0' => 'Artistic license 2.0', 'BSL-1.0' => 'Boost Software License 1.0', 'BSD-2-CLAUSE' => 'BSD 2-clause "Simplified" license', 'BSD-3-CLAUSE' => 'BSD 3-clause "New" or "Revised" license', 'BSD-3-CLAUSE-CLEAR' => 'BSD 3-clause Clear license', 'CC' => 'Creative Commons license family', 'CC0-1.0' => 'Creative Commons Zero v1.0 Universal', 'CC-BY-4.0' => 'Creative Commons Attribution 4.0', 'CC-BY-SA-4.0' => 'Creative Commons Attribution Share Alike 4.0', 'WTFPL' => 'Do What The F*ck You Want To Public License', 'ECL-2.0' => 'Educational Community License v2.0', 'EPL-1.0' => 'Eclipse Public License 1.0', 'EUPL-1.1' => 'European Union Public License 1.1', 'AGPL-3.0' => 'GNU Affero General Public License v3.0', 'GPL' => 'GNU General Public License family', 'GPL-2.0' => 'GNU General Public License v2.0', 'GPL-3.0' => 'GNU General Public License v3.0', 'GPL-3.0-or-later' => 'GNU General Public License v3.0 or later', 'LGPL' => 'GNU Lesser General Public License family', 'LGPL-2.1' => 'GNU Lesser General Public License v2.1', 'LGPL-3.0' => 'GNU Lesser General Public License v3.0', 'LGPL-3.0-or-later' => 'GNU Lesser General Public License v3.0 or later', 'ISC' => 'ISC', 'LPPL-1.3C' => 'LaTeX Project Public License v1.3c', 'MS-PL' => 'Microsoft Public License', 'MIT' => 'MIT', 'MPL-2.0' => 'Mozilla Public License 2.0', 'OSL-3.0' => 'Open Software License 3.0', 'POSTGRESQL' => 'PostgreSQL License', 'OFL-1.1' => 'SIL Open Font License 1.1', 'NCSA' => 'University of Illinois/NCSA Open Source License', 'UNLICENSE' => 'The Unlicense', 'ZLIB' => 'zLib License'];
}

namespace {
/*
 * This file is part of a BugBuster Contao Bundle (Resources\contao)
 *
 * @copyright  Glen Langer 2023 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Contao BotDetection Bundle
 * @license    LGPL-3.0-or-later
 * @see        https://github.com/BugBuster1701/contao-botdetection-bundle
 */
/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 *
 * List all fontend modules and their class names.
 * 
 *   $GLOBALS['FE_MOD'] = array
 *   (
 *       'group_1' => array
 *       (
 *           'module_1' => 'Contentlass',
 *           'module_2' => 'Contentlass'
 *       )
 *   );
 */
$GLOBALS['FE_MOD']['BotDetectionDemo'] = array('botdetection1' => 'BugBuster\\BotDetection\\ModuleFrontendDemo1', 'botdetection2' => 'BugBuster\\BotDetection\\ModuleFrontendDemo2');
}

namespace {
/*
 * Back end module
 */
$GLOBALS['BE_MOD']['content']['gallery_creator'] = ['icon' => 'bundles/markocupicgallerycreator/images/picture.png', 'tables' => ['tl_gallery_creator_albums', 'tl_gallery_creator_pictures']];
// Register contao models
$GLOBALS['TL_MODELS']['tl_gallery_creator_albums'] = \Markocupic\GalleryCreatorBundle\Model\GalleryCreatorAlbumsModel::class;
$GLOBALS['TL_MODELS']['tl_gallery_creator_pictures'] = \Markocupic\GalleryCreatorBundle\Model\GalleryCreatorPicturesModel::class;
// Backend widgets
$GLOBALS['BE_FFL'][\Markocupic\GalleryCreatorBundle\Widget\Backend\AlbumTreeWidget::NAME] = \Markocupic\GalleryCreatorBundle\Widget\Backend\AlbumTreeWidget::class;
$GLOBALS['BE_FFL'][\Markocupic\GalleryCreatorBundle\Widget\Backend\ChmodTable::NAME] = \Markocupic\GalleryCreatorBundle\Widget\Backend\ChmodTable::class;
/*
 * Default chmod
 */
$GLOBALS['TL_CONFIG']['gcDefaultChmod'] = ['u1', 'u2', 'u3', 'u4', 'u5', 'u6', 'u7'];
}

namespace {
// Add back end modules
$GLOBALS['BE_MOD']['content']['faq'] = array('tables' => array('tl_faq_category', 'tl_faq'));
// Front end modules
$GLOBALS['FE_MOD']['faq'] = array('faqlist' => \Contao\ModuleFaqList::class, 'faqreader' => \Contao\ModuleFaqReader::class, 'faqpage' => \Contao\ModuleFaqPage::class);
// Style sheet
if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    $GLOBALS['TL_CSS'][] = 'bundles/contaofaq/faq.min.css|static';
}
// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'faqs';
$GLOBALS['TL_PERMISSIONS'][] = 'faqp';
// Models
$GLOBALS['TL_MODELS']['tl_faq_category'] = \Contao\FaqCategoryModel::class;
$GLOBALS['TL_MODELS']['tl_faq'] = \Contao\FaqModel::class;
}

namespace {
/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['check_modules']['check_collection'] = array('tables' => array('tl_dw_check'));
/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_dw_check'] = \Diversworld\ContaoCheckBundle\Model\DwCheckModel::class;
}

namespace {
/*
 * This file is part of a BugBuster Contao Bundle.
 *
 * @copyright  Glen Langer 2024 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Contao Visitors Bundle
 * @link       https://github.com/BugBuster1701/contao-visitors-bundle
 *
 * @license    LGPL-3.0-or-later
 */
\define('VISITORS_VERSION', '1.14');
\define('VISITORS_BUILD', '3');
/*
 * Backend css version number are added to style sheets files to make
 * the web browser reload those resources after a Visitors update.
 */
\define('VISITORS_BE_CSS', '1.2.3');
/*
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */
$GLOBALS['BE_MOD']['content']['visitors'] = array('tables' => array('tl_visitors_category', 'tl_visitors'), 'icon' => 'bundles/bugbustervisitors/iconVisitor.png', 'stylesheet' => 'bundles/bugbustervisitors/mod_visitors_be_' . \VISITORS_BE_CSS . '.css');
$GLOBALS['BE_MOD']['system']['visitorstat'] = array('callback' => 'BugBuster\\Visitors\\ModuleVisitorStat', 'icon' => 'bundles/bugbustervisitors/iconVisitor.png', 'stylesheet' => 'bundles/bugbustervisitors/mod_visitors_be_' . \VISITORS_BE_CSS . '.css');
if (!\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    $GLOBALS['TL_CSS'][] = 'bundles/bugbustervisitors/mod_visitors_basic.css|static';
}
/*
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('BugBuster\\Visitors\\ModuleVisitorsTag', 'replaceInsertTagsVisitors');
}

namespace {
// Add the "haste_undo" operation to "undo" module
$GLOBALS['BE_MOD']['system']['undo']['haste_undo'] = [\Codefog\HasteBundle\UndoManager::class, 'onUndoCallback'];
}

namespace {
/**
 * Add beckend style sheet
 *
 */
$request = \Contao\System::getContainer()->get('request_stack')->getCurrentRequest();
$isBackend = $request && \Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request);
if ($isBackend) {
    $GLOBALS['TL_CSS'][] = 'bundles/softleisterce_be_remarks/remarkstyles.css';
}
/**
 * Content elements
 */
$GLOBALS['TL_CTE']['texts']['be_remarks'] = 'Softleister\\Ce_be_remarks\\ContentBeRemarks';
/**
 * Form fields
 */
$GLOBALS['TL_FFL']['be_remarks'] = 'Softleister\\Ce_be_remarks\\FormBeRemarks';
}

namespace {
if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    $GLOBALS['TL_CSS'][] = 'bundles/heimseitencontaostickyfooterbackend/contao-sticky-footer-backend-bundle.scss|static';
    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/heimseitencontaostickyfooterbackend/contao-sticky-footer-backend-bundle.js';
}
}

namespace {
/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['duc_modules']['duc_collection'] = array('tables' => array('tl_duc_tanks'));
/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_duc_tanks'] = \Diversworld\ContaoDucappBundle\Model\DucTanksModel::class;
}

namespace {
$GLOBALS['BE_FFL']['dcaWizard'] = \Terminal42\DcawizardBundle\Widget\DcaWizard::class;
$GLOBALS['BE_FFL']['dcaWizardMultilingual'] = \Terminal42\DcawizardBundle\Widget\DcaWizardMultilingual::class;
}

namespace {
$GLOBALS['BE_FFL']['multiColumnEditor'] = \HeimrichHannot\MultiColumnEditorBundle\Widget\MultiColumnEditor::class;
/**
 * Frontend form fields
 */
$GLOBALS['TL_FFL']['multiColumnEditor'] = \HeimrichHannot\MultiColumnEditorBundle\Form\FormMultiColumnEditor::class;
/**
 * RSCE
 */
$GLOBALS['MULTI_COLUMN_EDITOR']['rsce_fields'] = [];
/**
 * Ajax
 */
$GLOBALS['AJAX'][\HeimrichHannot\MultiColumnEditorBundle\Widget\MultiColumnEditor::NAME] = ['actions' => [\HeimrichHannot\MultiColumnEditorBundle\Widget\MultiColumnEditor::ACTION_ADD_ROW => ['arguments' => ['row', 'field', 'table'], 'optional' => []], \HeimrichHannot\MultiColumnEditorBundle\Widget\MultiColumnEditor::ACTION_DELETE_ROW => ['arguments' => ['row', 'field', 'table'], 'optional' => []], \HeimrichHannot\MultiColumnEditorBundle\Widget\MultiColumnEditor::ACTION_SORT_ROWS => ['arguments' => ['field', 'table'], 'optional' => []], \HeimrichHannot\MultiColumnEditorBundle\Widget\MultiColumnEditor::ACTION_UPDATE_ROWS => ['arguments' => ['row', 'field', 'table'], 'optional' => []]]];
}

namespace {
/*
 * Back end modules
 */
$GLOBALS['BE_MOD']['system']['import_from_csv'] = [
    'tables' => ['tl_import_from_csv'],
    // Add custom controllers
    'renderAppAction' => [\Markocupic\ImportFromCsvBundle\Contao\Controller\RenderBackendAppController::class, 'renderAppAction'],
    'appMountAction' => [\Markocupic\ImportFromCsvBundle\Contao\Controller\MountAppAjaxController::class, 'appMountAction'],
    'importAction' => [\Markocupic\ImportFromCsvBundle\Contao\Controller\ImportAjaxController::class, 'importAction'],
    'javascript' => ['bundles/markocupicimportfromcsv/js/vue@3.2.47_global.prod.min.js', 'bundles/markocupicimportfromcsv/js/importFromCsvApp.js?version=5.3.6'],
    'stylesheet' => ['bundles/markocupicimportfromcsv/css/importFromCsvApp.css', 'bundles/markocupicimportfromcsv/css/loader.css'],
];
/*
 * Models
 */
$GLOBALS['TL_MODELS']['tl_import_from_csv'] = \Markocupic\ImportFromCsvBundle\Model\ImportFromCsvModel::class;
}

namespace {
\define('DLSTATS_VERSION', '1.5');
\define('DLSTATS_BUILD', '0');
/*
 * Defaults, you can overwrite this in Backend -> System -> Settings
 */
$GLOBALS['TL_CONFIG']['dlstatTopDownloads'] = 20;
$GLOBALS['TL_CONFIG']['dlstatLastDownloads'] = 20;
/*
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */
$GLOBALS['BE_MOD']['system']['dlstats'] = array('callback' => 'BugBuster\\DLStats\\ModuleDlstatsStatistics', 'icon' => 'bundles/bugbusterdlstats/icon.png', 'stylesheet' => 'bundles/bugbusterdlstats/mod_dlstatsstatistics_be.css');
/*
 * CSS
 */
if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    $GLOBALS['TL_CSS'][] = 'bundles/bugbusterdlstats/dlstatssystem_be.css';
}
}

namespace {
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2016 Heimrich & Hannot GmbH
 *
 * @author  Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */
/**
 * Ajax Actions
 */
if (!isset($GLOBALS['AJAX'])) {
    $GLOBALS['AJAX'] = [];
}
}

namespace {
/**
 * Backend Modules
 */
if (!isset($GLOBALS['BE_MOD']['contaoThemesNet'])) {
    $GLOBALS['BE_MOD']['contaoThemesNet'] = [];
}
$GLOBALS['BE_MOD']['contaoThemesNet']['thLicence'] = ['callback' => 'Pdir\\ThemeHelperBundle\\Backend\\Licence', 'tables' => []];
/**
 * Javascript for Backend
 */
if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    if (!isset($GLOBALS['TL_CSS'])) {
        $GLOBALS['TL_CSS'] = [];
    }
    $GLOBALS['TL_CSS'][] = 'bundles/themehelper/sass/th_check_domain.css||static';
}
}

namespace {
$GLOBALS['TL_HOOKS']['parseBackendTemplate'][] = [\Pdir\ContaoStickyFooterBundle\EventListener\ParseBackendTemplateListener::class, '__invoke'];
if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    $GLOBALS['TL_CSS'][] = 'bundles/pdircontaostickyfooter/sticky-footer.css|static';
}
}

namespace {
// Back end modules
$GLOBALS['BE_MOD']['content']['news'] = array('tables' => array('tl_news_archive', 'tl_news', 'tl_content'), 'table' => array(\Contao\CoreBundle\Controller\BackendCsvImportController::class, 'importTableWizardAction'), 'list' => array(\Contao\CoreBundle\Controller\BackendCsvImportController::class, 'importListWizardAction'));
// Front end modules
$GLOBALS['FE_MOD']['news'] = array('newslist' => \Contao\ModuleNewsList::class, 'newsreader' => \Contao\ModuleNewsReader::class, 'newsarchive' => \Contao\ModuleNewsArchive::class, 'newsmenu' => \Contao\ModuleNewsMenu::class);
// Style sheet
if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    $GLOBALS['TL_CSS'][] = 'bundles/contaonews/news.min.css|static';
}
// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'news';
$GLOBALS['TL_PERMISSIONS'][] = 'newp';
// Models
$GLOBALS['TL_MODELS']['tl_news_archive'] = \Contao\NewsArchiveModel::class;
$GLOBALS['TL_MODELS']['tl_news'] = \Contao\NewsModel::class;
}

namespace {
$GLOBALS['BE_FFL']['conditionalselect'] = \Terminal42\ConditionalSelectMenuBundle\Widget\BackendWidget::class;
$GLOBALS['TL_FFL']['conditionalselect'] = \Terminal42\ConditionalSelectMenuBundle\Widget\FrontendWidget::class;
}

namespace {
\Contao\ArrayUtil::arrayInsert($GLOBALS['BE_MOD'], 1, ['leads' => ['lead' => ['tables' => ['tl_lead', 'tl_lead_data']]]]);
$GLOBALS['BE_MOD']['content']['form']['tables'][] = 'tl_lead_export';
$GLOBALS['TL_PERMISSIONS'][] = 'leadp';
}

namespace {
// Front end module
$GLOBALS['FE_MOD']['application']['listing'] = \Contao\ModuleListing::class;
}

namespace {
/*
 * Web-Tools Bundle for Contao Open Source CMS
 *
 * Copyright (c) 2022 pdir / digital agentur // pdir GmbH
 *
 * @package    webtools-bundle
 * @link       https://pdir.de/contao-webtools/
 * @license    LGPL-3.0-or-later
 * @author     Mathias Arzberger <develop@pdir.de>
 * @author     Christian Mette <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    $GLOBALS['TL_CSS'][] = 'bundles/pdircontaowebtools/scss/backend.css|static';
}
}

namespace {
$GLOBALS['BE_MOD']['notification_center'] = ['nc_notifications' => ['tables' => ['tl_nc_notification', 'tl_nc_message', 'tl_nc_language']], 'nc_gateways' => ['tables' => ['tl_nc_gateway']]];
}

namespace {
// Back end modules
$GLOBALS['BE_MOD']['content']['calendar'] = array('tables' => array('tl_calendar', 'tl_calendar_events', 'tl_calendar_feed', 'tl_content'), 'table' => array(\Contao\CoreBundle\Controller\BackendCsvImportController::class, 'importTableWizardAction'), 'list' => array(\Contao\CoreBundle\Controller\BackendCsvImportController::class, 'importListWizardAction'));
// Front end modules
$GLOBALS['FE_MOD']['events'] = array('calendar' => \Contao\ModuleCalendar::class, 'eventreader' => \Contao\ModuleEventReader::class, 'eventlist' => \Contao\ModuleEventlist::class, 'eventmenu' => \Contao\ModuleEventMenu::class);
// Style sheet
if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    $GLOBALS['TL_CSS'][] = 'bundles/contaocalendar/calendar.min.css|static';
}
// Register hooks
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array(\Contao\Calendar::class, 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array(\Contao\Calendar::class, 'generateFeeds');
// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'calendars';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarp';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeedp';
// Models
$GLOBALS['TL_MODELS']['tl_calendar_events'] = \Contao\CalendarEventsModel::class;
$GLOBALS['TL_MODELS']['tl_calendar_feed'] = \Contao\CalendarFeedModel::class;
$GLOBALS['TL_MODELS']['tl_calendar'] = \Contao\CalendarModel::class;
}

namespace {
$GLOBALS['TL_FFL']['altcha_hidden'] = \Markocupic\ContaoAltchaAntispam\Widget\Frontend\FormAltchaHidden::class;
}

namespace {
// Back end modules
$GLOBALS['BE_MOD']['content']['newsletter'] = array('tables' => array('tl_newsletter_channel', 'tl_newsletter', 'tl_newsletter_recipients'), 'send' => array(\Contao\Newsletter::class, 'send'), 'import' => array(\Contao\Newsletter::class, 'importRecipients'), 'stylesheet' => 'bundles/contaonewsletter/newsletter.min.css');
// Front end modules
$GLOBALS['FE_MOD']['newsletter'] = array('subscribe' => \Contao\ModuleSubscribe::class, 'unsubscribe' => \Contao\ModuleUnsubscribe::class, 'newsletterlist' => \Contao\ModuleNewsletterList::class, 'newsletterreader' => \Contao\ModuleNewsletterReader::class);
// Register hooks
$GLOBALS['TL_HOOKS']['createNewUser'][] = array(\Contao\Newsletter::class, 'createNewUser');
$GLOBALS['TL_HOOKS']['activateAccount'][] = array(\Contao\Newsletter::class, 'activateAccount');
$GLOBALS['TL_HOOKS']['closeAccount'][] = array(\Contao\Newsletter::class, 'removeSubscriptions');
// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'newsletters';
$GLOBALS['TL_PERMISSIONS'][] = 'newsletterp';
// Models
$GLOBALS['TL_MODELS']['tl_newsletter_channel'] = \Contao\NewsletterChannelModel::class;
$GLOBALS['TL_MODELS']['tl_newsletter_deny_list'] = \Contao\NewsletterDenyListModel::class;
$GLOBALS['TL_MODELS']['tl_newsletter'] = \Contao\NewsletterModel::class;
$GLOBALS['TL_MODELS']['tl_newsletter_recipients'] = \Contao\NewsletterRecipientsModel::class;
}

namespace {
/**
 * @copyright  Softleister 2007-2024
 * @author     Softleister <info@softleister.de>
 * @package    BackupDB - Database backup
 * @license    LGPL
 * @see	       https://github.com/do-while/contao-BackupDB
 */
\define('BACKUPDB_RUN_LAST', 'RunBackupDB.last');
\define('BACKUPDB_CRON_LAST', 'AutoBackupDB.last');
/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */
$GLOBALS['BE_MOD']['system']['BackupDB'] = array('callback' => 'Softleister\\BackupDB\\ModuleBackupDB', 'stylesheet' => 'bundles/softleisterbackupdb/styles.min.css');
}

namespace {
$GLOBALS['FE_MOD']['events']['timetable'] = \Cgoit\CalendarExtendedBundle\Controller\Module\ModuleTimeTable::class;
$GLOBALS['FE_MOD']['events']['yearview'] = \Cgoit\CalendarExtendedBundle\Controller\Module\ModuleYearView::class;
$GLOBALS['FE_MOD']['events']['fullcalendar'] = \Cgoit\CalendarExtendedBundle\Controller\Module\ModuleFullCalendar::class;
$GLOBALS['BE_FFL']['timePeriodExt'] = \Cgoit\CalendarExtendedBundle\Widget\TimePeriodExt::class;
}

namespace {
/**
 * Backend Javascript
 */
if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    if (!isset($GLOBALS['TL_JAVASCRIPT']['jquery'])) {
        $GLOBALS['TL_JAVASCRIPT']['jquery'] = 'assets/jquery/js/jquery.min.js|static';
    }
    if (!isset($GLOBALS['TL_JAVASCRIPT']['jquery-noconflict'])) {
        $GLOBALS['TL_JAVASCRIPT']['jquery-noconflict'] = 'bundles/contaoddadvancedclasses/js/jquery.noconflict.js|static';
    }
    $GLOBALS['TL_JAVASCRIPT']['advanced_classes'] = 'bundles/contaoddadvancedclasses/js/jquery.advanced_classes.js|static';
}
$GLOBALS['TL_PERMISSIONS'][] = 'advancedCss';
}

namespace {
$GLOBALS['BE_MOD']['content']['news']['tables'][] = 'tl_news_category';
/*
 * Front end modules
 */
$GLOBALS['FE_MOD']['news']['newsarchive'] = \Codefog\NewsCategoriesBundle\FrontendModule\NewsArchiveModule::class;
$GLOBALS['FE_MOD']['news']['newscategories'] = \Codefog\NewsCategoriesBundle\FrontendModule\NewsCategoriesModule::class;
$GLOBALS['FE_MOD']['news']['newscategories_cumulative'] = \Codefog\NewsCategoriesBundle\FrontendModule\CumulativeFilterModule::class;
$GLOBALS['FE_MOD']['news']['newscategories_cumulativehierarchical'] = \Codefog\NewsCategoriesBundle\FrontendModule\CumulativeHierarchicalFilterModule::class;
$GLOBALS['FE_MOD']['news']['newslist'] = \Codefog\NewsCategoriesBundle\FrontendModule\NewsListModule::class;
$GLOBALS['FE_MOD']['news']['newsmenu'] = \Codefog\NewsCategoriesBundle\FrontendModule\NewsMenuModule::class;
/*
 * Content elements
 */
$GLOBALS['TL_CTE']['includes']['newsfilter'] = \Codefog\NewsCategoriesBundle\ContentElement\NewsFilterElement::class;
/*
 * Models
 */
$GLOBALS['TL_MODELS']['tl_news_category'] = \Codefog\NewsCategoriesBundle\Model\NewsCategoryModel::class;
/*
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'newscategories';
$GLOBALS['TL_PERMISSIONS'][] = 'newscategories_default';
$GLOBALS['TL_PERMISSIONS'][] = 'newscategories_roots';
}

namespace {
// Backend styles
if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
    $GLOBALS['TL_CSS']['leads_optin'] = 'bundles/cgoitleadsoptin/css/leads-optin.css|static';
}
}

namespace {
/*
 * Backend modules
 */
$GLOBALS['BE_MOD']['content']['nodes'] = ['tables' => \array_values(\array_unique(\array_merge(['tl_node', 'tl_content'], $GLOBALS['BE_MOD']['content']['article']['tables'] ?? []))), 'table' => &$GLOBALS['BE_MOD']['content']['article']['table'], 'list' => &$GLOBALS['BE_MOD']['content']['article']['list']];
/*
 * Back end form fields
 */
$GLOBALS['BE_FFL']['nodePicker'] = \Terminal42\NodeBundle\Widget\NodePickerWidget::class;
/*
 * Frontend modules
 */
$GLOBALS['FE_MOD']['miscellaneous']['nodes'] = \Terminal42\NodeBundle\FrontendModule\NodesModule::class;
/*
 * Content elements
 */
$GLOBALS['TL_CTE']['includes']['nodes'] = \Terminal42\NodeBundle\ContentElement\NodesContentElement::class;
/*
 * Models
 */
$GLOBALS['TL_MODELS']['tl_node'] = \Terminal42\NodeBundle\Model\NodeModel::class;
/*
 * Hooks
 */
$GLOBALS['TL_HOOKS']['executePostActions'][] = ['terminal42_node.listener.data_container', 'onExecutePostActions'];
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['terminal42_node.listener.insert_tags', 'onReplace'];
/*
 * User permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'nodeMounts';
$GLOBALS['TL_PERMISSIONS'][] = 'nodePermissions';
}

namespace {
$GLOBALS['TL_MODELS']['tl_event_registration'] = \InspiredMinds\ContaoEventRegistration\Model\EventRegistrationModel::class;
$GLOBALS['BE_MOD']['content']['calendar']['tables'][] = 'tl_event_registration';
}

namespace {
$GLOBALS['FE_MOD']['events']['calendarEdit'] = \DanielGausi\CalendarEditorBundle\Modules\ModuleCalendarEdit::class;
$GLOBALS['FE_MOD']['events']['EventEditor'] = \DanielGausi\CalendarEditorBundle\Modules\ModuleEventEditor::class;
$GLOBALS['FE_MOD']['events']['EventReaderEditLink'] = \DanielGausi\CalendarEditorBundle\Modules\ModuleEventReaderEdit::class;
$GLOBALS['FE_MOD']['events']['EventHiddenList'] = \DanielGausi\CalendarEditorBundle\Modules\ModuleHiddenEventlist::class;
$GLOBALS['FE_MOD']['calendar']['calendar_editor'] = \DanielGausi\CalendarEditorBundle\Modules\CalendarEditorModule::class;
//$GLOBALS['TL_HOOKS']['getAllEvents'][] = [ListAllEventsHook::class, 'updateAllEvents'];
}

namespace {
/*
 * This file is part of a BugBuster Contao Bundle.
 *
 * @copyright  Glen Langer 2024 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @author     Alexander Kehr (Kehr-Solutions)
 * @package    Contao Download Statistics Bundle (Dlstats) Add-on: Statistic Export
 * @link       https://github.com/BugBuster1701/contao-dlstats-statistic-export-bundle
 *
 * @license    LGPL-3.0-or-later
 */
$GLOBALS['TL_DLSTATS_HOOKS']['addStatisticPanelLine'][] = array('bugbuster.dlstatsexport.listener.panel', 'onGetPanelLine');
}

namespace {
/*
 * Tags Bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2020, Codefog
 * @author     Codefog <https://codefog.pl>
 * @license    MIT
 */
$GLOBALS['BE_MOD']['content']['cfg_tags'] = ['tables' => ['tl_cfg_tag']];
/*
 * Backend widgets
 */
$GLOBALS['BE_FFL']['cfgTags'] = \Codefog\TagsBundle\Widget\TagsWidget::class;
/*
 * Models
 */
$GLOBALS['TL_MODELS']['tl_cfg_tag'] = \Codefog\TagsBundle\Model\TagModel::class;
/*
 * Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['codefog_tags.listener.insert_tags', 'onReplaceInsertTags'];
if (\is_array($GLOBALS['TL_HOOKS']['loadDataContainer'] ?? \null)) {
    \array_unshift($GLOBALS['TL_HOOKS']['loadDataContainer'], ['codefog_tags.listener.tag_manager', 'onLoadDataContainer']);
} else {
    $GLOBALS['TL_HOOKS']['loadDataContainer'][] = ['codefog_tags.listener.tag_manager', 'onLoadDataContainer'];
}
}

namespace {
/*
 * MODULES
 */
/* -- check in, if you want a separate module
$eventModAr = array (
    'MaeEventCat' => array (
        'tables' => array('tl_mae_event_cat'),
        'icon' => 'system/modules/mae_event_categories/assets/cat_icon.png'
    )
);
array_insert($GLOBALS['BE_MOD']['content'], 2, $eventModAr);
*/
// allow categories table in calendar module
$GLOBALS['BE_MOD']['content']['calendar']['tables'][] = 'tl_mae_event_cat';
/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'maeEventCat';
$GLOBALS['TL_PERMISSIONS'][] = 'maeEventCatDefault';
/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['events']['mae_event_filter'] = \Pdir\MaeEventCategoriesBundle\Controller\FrontendModule\ModuleFilter::class;
/*
 * Models
 */
$GLOBALS['TL_MODELS']['tl_mae_event_cat'] = \Pdir\MaeEventCategoriesBundle\Model\MaeEventCatModel::class;
}

namespace {
// Add content element
$GLOBALS['TL_CTE']['includes']['comments'] = \Contao\ContentComments::class;
// Front end modules
$GLOBALS['FE_MOD']['application']['comments'] = \Contao\ModuleComments::class;
// Back end modules
$GLOBALS['BE_MOD']['content']['comments'] = array('tables' => array('tl_comments'), 'stylesheet' => 'bundles/contaocomments/comments.min.css');
// Models
$GLOBALS['TL_MODELS']['tl_comments'] = \Contao\CommentsModel::class;
$GLOBALS['TL_MODELS']['tl_comments_notify'] = \Contao\CommentsNotifyModel::class;
}

namespace {
$GLOBALS['TL_FFL'][\Cgoit\FormFillPdfBundle\Widget\GeneratePdf::TYPE] = \Cgoit\FormFillPdfBundle\Widget\GeneratePdf::class;
}

namespace {
$GLOBALS['TL_CTE']['events'] = [];
/*
 * Content elements
 */
$GLOBALS['TL_CTE']['events'] = ['eventlist_fixed_range' => \Cgoit\CmaceBundle\Controller\ContentElement\CEEventlistFixedRange::class];
// Front end modules
$GLOBALS['FE_MOD']['events']['eventlist_fixed_range'] = \Cgoit\CmaceBundle\Controller\Module\ModuleEventlistFixedRange::class;
}

namespace {
// Insert the mate theme category
if (!isset($GLOBALS['TL_CTE']['contaoThemesNet'])) {
    $GLOBALS['TL_CTE']['contaoThemesNet'] = [];
}
/*
 * Add content element
 */
$GLOBALS['TL_CTE']['contaoThemesNet']['ct_contentBox'] = \ContaoThemesNet\ThemeComponentsBundle\Element\ContentBoxElement::class;
$GLOBALS['TL_CTE']['contaoThemesNet']['ct_featureElement'] = \ContaoThemesNet\ThemeComponentsBundle\Element\FeatureElement::class;
$GLOBALS['TL_CTE']['contaoThemesNet']['ct_priceBox'] = \ContaoThemesNet\ThemeComponentsBundle\Element\PriceBoxElement::class;
$GLOBALS['TL_CTE']['contaoThemesNet']['ct_sliderElement'] = \ContaoThemesNet\ThemeComponentsBundle\Element\SliderElement::class;
$GLOBALS['TL_CTE']['contaoThemesNet']['ct_teaserBox'] = \ContaoThemesNet\ThemeComponentsBundle\Element\TeaserBoxElement::class;
$GLOBALS['TL_CTE']['contaoThemesNet']['ct_wrapperStart'] = \ContaoThemesNet\ThemeComponentsBundle\Element\WrapperStartElement::class;
$GLOBALS['TL_CTE']['contaoThemesNet']['ct_wrapperStop'] = \ContaoThemesNet\ThemeComponentsBundle\Element\WrapperStopElement::class;
/*
 * Add modules
 */
$GLOBALS['FE_MOD']['contaoThemesNet']['ct_modal'] = \ContaoThemesNet\ThemeComponentsBundle\Module\ModalModule::class;
/*
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS']['start'][] = 'ct_wrapperStart';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'ct_wrapperStop';
}

namespace {
\Contao\ArrayUtil::arrayInsert($GLOBALS['TL_CTE'], 1, ['mateTheme' => []]);
\Contao\ArrayUtil::arrayInsert($GLOBALS['FE_MOD'], 1, ['mateTheme' => []]);
\Contao\ArrayUtil::arrayInsert($GLOBALS['BE_MOD'], 1, ['mateTheme' => []]);
/*
 * Add frontend element
 */
$GLOBALS['FE_MOD']['mateTheme']['mateNavbar'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\NavBarModule';
$GLOBALS['FE_MOD']['mateTheme']['mateModal'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\ModalModule';
if (isset($GLOBALS['FE_MOD']['news']['newslist'])) {
    if (!empty($GLOBALS['BE_MOD']['pdir']['socialFeed'])) {
        $GLOBALS['FE_MOD']['news']['newslist'] = 'ContaoThemesNet\\MateThemeBundle\\Module\\ModuleNewsListMateSocialFeed';
    } else {
        $GLOBALS['FE_MOD']['news']['newslist'] = 'ContaoThemesNet\\MateThemeBundle\\Module\\ModuleNewsListMate';
    }
}
/*
 * Add content element
 */
$GLOBALS['TL_CTE']['mateTheme']['mateTeaserBox'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\TeaserBox';
$GLOBALS['TL_CTE']['mateTheme']['mateContentBox'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\ContentBox';
$GLOBALS['TL_CTE']['mateTheme']['mateParallaxElement'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\ParallaxElement';
$GLOBALS['TL_CTE']['mateTheme']['mateTextBackgroundElement'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\TextBackgroundElement';
$GLOBALS['TL_CTE']['mateTheme']['mateModal'] = 'ContaoThemesNet\\MateThemeBundle\\Element\\ModalElement';
/*
 * Available tags for MATE theme
 */
if (empty($GLOBALS['tl_config']['theme_tags'])) {
    $GLOBALS['tl_config']['theme_tags'] = [];
    $GLOBALS['tl_config']['theme_tags'][] = '-';
}
if (!empty($GLOBALS['tl_config']['theme_tags']) && \is_array($GLOBALS['tl_config']['theme_tags'])) {
    $GLOBALS['tl_config']['theme_tags'] = \array_merge($GLOBALS['tl_config']['theme_tags'], ['MATE01/01', 'MATE01/02', 'MATE01/03', 'MATE01/04', 'MATE01/05', 'MATE01/06', 'MATE01/07', 'MATE01/08', 'MATE01/09', 'MATE01/10', 'MATE02/01', 'MATE02/02', 'MATE02/03', 'MATE02/04', 'MATE02/05', 'MATE02/06', 'MATE02/07', 'MATE02/08', 'MATE02/09', 'MATE02/10', 'MATE05/01', 'MATE05/02', 'MATE05/03', 'MATE05/04', 'MATE05/05', 'MATE05/06', 'MATE05/07', 'MATE05/08', 'MATE05/09', 'MATE05/10']);
}
/*
 * Backend Modules
 */
\Contao\ArrayUtil::arrayInsert($GLOBALS['BE_MOD']['contaoThemesNet'], 1, ['mateThemeSetup' => ['callback' => \ContaoThemesNet\MateThemeBundle\Module\MateThemeSetup::class, 'tables' => [], 'stylesheet' => 'bundles/contaothemesnetmatetheme/sass/backend.css']]);
}
