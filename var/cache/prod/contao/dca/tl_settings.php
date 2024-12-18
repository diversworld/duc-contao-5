<?php

namespace {
$GLOBALS['TL_DCA']['tl_settings'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_File::class, 'closed' => \true),
    // Palettes
    'palettes' => array('default' => '{global_legend},adminEmail;{date_legend},dateFormat,timeFormat,datimFormat,timeZone;{backend_legend:hide},resultsPerPage,maxResultsPerPage;{security_legend:hide},allowedTags,allowedAttributes;{files_legend:hide},allowedDownload;{uploads_legend:hide},uploadTypes,maxFileSize,imageWidth,imageHeight;{timeout_legend:hide},undoPeriod,versionPeriod,logPeriod;{chmod_legend},defaultUser,defaultGroup,defaultChmod'),
    // Fields
    'fields' => array('dateFormat' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'helpwizard' => \true, 'decodeEntities' => \true, 'tl_class' => 'w25'), 'explanation' => 'dateFormat'), 'timeFormat' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'tl_class' => 'w25')), 'datimFormat' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'tl_class' => 'w25')), 'timeZone' => array('inputType' => 'select', 'options_callback' => static function () {
        return \array_values(\DateTimeZone::listIdentifiers());
    }, 'eval' => array('chosen' => \true, 'tl_class' => 'w25')), 'adminEmail' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'friendly', 'decodeEntities' => \true, 'tl_class' => 'w50')), 'resultsPerPage' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'minval' => 1, 'nospace' => \true, 'tl_class' => 'w50 clr')), 'maxResultsPerPage' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w50')), 'allowedTags' => array('inputType' => 'text', 'eval' => array('useRawRequestData' => \true, 'tl_class' => 'long')), 'allowedAttributes' => array('label' => &$GLOBALS['TL_LANG']['tl_settings']['allowedAttributes'], 'inputType' => 'keyValueWizard', 'eval' => array('tl_class' => 'clr'), 'load_callback' => array(static function ($varValue) {
        $showWarning = \false;
        foreach (\Contao\StringUtil::deserialize($varValue, \true) as $row) {
            if (\in_array('*', \Contao\StringUtil::trimsplit(',', $row['value']), \true)) {
                $showWarning = \true;
                break;
            }
        }
        if ($showWarning) {
            $GLOBALS['TL_DCA']['tl_settings']['fields']['allowedAttributes']['label'][1] = '<span class="tl_red">' . $GLOBALS['TL_LANG']['tl_settings']['allowedAttributesWarning'] . '</span>';
        }
        return $varValue;
    }), 'save_callback' => array(static function ($strValue) {
        $arrValue = \Contao\StringUtil::deserialize($strValue, \true);
        $arrAllowedAttributes = array();
        foreach ($arrValue as $arrRow) {
            foreach (\Contao\StringUtil::trimsplit(',', \strtolower($arrRow['key'])) as $strKey) {
                $arrAllowedAttributes[$strKey] = \array_merge($arrAllowedAttributes[$strKey] ?? array(), \Contao\StringUtil::trimsplit(',', \strtolower($arrRow['value'])));
                $arrAllowedAttributes[$strKey] = \array_filter(\array_unique($arrAllowedAttributes[$strKey]));
                \sort($arrAllowedAttributes[$strKey]);
            }
        }
        \ksort($arrAllowedAttributes);
        $arrValue = array();
        foreach ($arrAllowedAttributes as $strTag => $arrAttributes) {
            $arrValue[] = array('key' => $strTag, 'value' => \implode(',', $arrAttributes));
        }
        return \serialize($arrValue);
    })), 'allowedDownload' => array('inputType' => 'text', 'eval' => array('tl_class' => 'w50')), 'uploadTypes' => array('inputType' => 'text', 'eval' => array('tl_class' => 'w50')), 'maxFileSize' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w50')), 'imageWidth' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w50')), 'imageHeight' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w50')), 'undoPeriod' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w33')), 'versionPeriod' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w33')), 'logPeriod' => array('inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w33')), 'defaultUser' => array('inputType' => 'select', 'foreignKey' => 'tl_user.username', 'eval' => array('chosen' => \true, 'includeBlankOption' => \true, 'tl_class' => 'w50')), 'defaultGroup' => array('inputType' => 'select', 'foreignKey' => 'tl_user_group.name', 'eval' => array('chosen' => \true, 'includeBlankOption' => \true, 'tl_class' => 'w50')), 'defaultChmod' => array('inputType' => 'chmod', 'eval' => array('tl_class' => 'clr'))),
);
}

namespace {
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{sineos_filemanager_license_legend:hide},sineos_filemanager_license';
$GLOBALS['TL_DCA']['tl_settings']['fields']['sineos_filemanager_license'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['sineos_filemanager_license'], 'inputType' => 'text', 'save_callback' => array(array(\Sineos\FileManagerBundle\LicenseHelper::class, 'licenseSaveCallback')));
}

namespace {
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('gallery_creator_chmod_legend', 'chmod_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)->addField(['gcDefaultUser', 'gcDefaultGroup', 'gcDefaultChmod'], 'gallery_creator_chmod_legend')->applyToPalette('default', 'tl_settings');
// Fields
$GLOBALS['TL_DCA']['tl_settings']['fields']['gcDefaultUser'] = ['inputType' => 'select', 'foreignKey' => 'tl_user.username', 'eval' => ['chosen' => \true, 'includeBlankOption' => \true, 'tl_class' => 'w50']];
$GLOBALS['TL_DCA']['tl_settings']['fields']['gcDefaultGroup'] = ['inputType' => 'select', 'foreignKey' => 'tl_user_group.name', 'eval' => ['chosen' => \true, 'includeBlankOption' => \true, 'tl_class' => 'w50']];
$GLOBALS['TL_DCA']['tl_settings']['fields']['gcDefaultChmod'] = ['inputType' => \Markocupic\GalleryCreatorBundle\Widget\Backend\ChmodTable::NAME, 'eval' => ['tl_class' => 'clr']];
}

namespace {
/*
 * This file is part of a BugBuster Contao Bundle.
 *
 * @copyright  Glen Langer 2023 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Contao Download Statistics Bundle (Dlstats)
 * @link       https://github.com/BugBuster1701/contao-dlstats-bundle
 *
 * @license    LGPL-3.0-or-later
 */
/*
 * Add to palette
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'dlstats';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{dlstats_legend},dlstats';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['dlstats'] = 'dlstatdets,dlstatDisableBotdetection
                                                                    ,dlstatAnonymizeIP4,dlstatAnonymizeIP6
                                                                    ,dlstatTopDownloads,dlstatLastDownloads
                                                                    ,dlstatStatresetProtected
                                                                    ,dlstatStatresetGroups,dlstatStatresetAdmins
                                                                    ';
/*
 * Add field
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['dlstats'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['dlstats'], 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true));
$GLOBALS['TL_DCA']['tl_settings']['fields']['dlstatdets'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['dlstatdets'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['dlstatDisableBotdetection'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['dlstatDisableBotdetection'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['dlstatAnonymizeIP4'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['dlstatAnonymizeIP4'], 'inputType' => 'select', 'default' => 1, 'options' => array(1, 2), 'reference' => &$GLOBALS['TL_LANG']['tl_settings']['dlstats']['anonip4'], 'eval' => array('tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['dlstatAnonymizeIP6'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['dlstatAnonymizeIP6'], 'inputType' => 'select', 'default' => 2, 'options' => array(2, 3, 4), 'reference' => &$GLOBALS['TL_LANG']['tl_settings']['dlstats']['anonip6'], 'eval' => array('tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['dlstatTopDownloads'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['dlstatTopDownloads'], 'inputType' => 'text', 'default' => '20', 'eval' => array('mandatory' => \true, 'rgxp' => 'digit', 'nospace' => \true, 'tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['dlstatLastDownloads'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['dlstatLastDownloads'], 'inputType' => 'text', 'default' => '20', 'eval' => array('mandatory' => \true, 'rgxp' => 'digit', 'nospace' => \true, 'tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['dlstatStatresetProtected'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['dlstatStatresetProtected'], 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'clr'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['dlstatStatresetGroups'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['dlstatStatresetGroups'], 'inputType' => 'checkbox', 'foreignKey' => 'tl_user_group.name', 'eval' => array('multiple' => \true, 'tl_class' => 'dlstats_left20'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['dlstatStatresetAdmins'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['dlstatStatresetAdmins'], 'inputType' => 'checkbox', 'eval' => array('disabled' => \true, 'tl_class' => 'dlstats_left20'), 'load_callback' => array(static function ($data) {
    return '1';
}));
}

namespace {
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2022 Leo Feyer
 *
 * @package   ProperFilenames
 * @author    Benny Born <benny.born@numero2.de>
 * @author    Michael Bösherz <michael.boesherz@numero2.de>
 * @license   LGPL
 * @copyright 2022 numero2 - Agentur für digitales Marketing GbR
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['checkFilenames'] = ['inputType' => 'checkbox', 'eval' => ['submitOnChange' => \true, 'tl_class' => 'w50 cbx']];
$GLOBALS['TL_DCA']['tl_settings']['fields']['filenameValidCharacters'] = ['inputType' => 'select', 'reference' => &$GLOBALS['TL_LANG']['MSC']['validCharacters'], 'eval' => ['mandatory' => \true, 'includeBlankOption' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50']];
$GLOBALS['TL_DCA']['tl_settings']['fields']['filenameValidCharactersLocale'] = ['inputType' => 'select', 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50']];
$GLOBALS['TL_DCA']['tl_settings']['fields']['excludeFileExtensions'] = ['inputType' => 'text', 'eval' => ['useRawRequestData' => \true, 'tl_class' => 'clr long']];
$GLOBALS['TL_DCA']['tl_settings']['fields']['doNotTrimFilenames'] = ['inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 cbx']];
}

namespace {
/**
 * @copyright  Softleister 2007-2024
 * @author     Softleister <info@softleister.de>
 * @package    BackupDB - Database backup
 * @license    LGPL
 * @see	       https://github.com/do-while/contao-BackupDB
 */
/**
 * System configuration
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['backupdb_saveddb'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['backupdb_saveddb'], 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['AutoBackupCount'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['AutoBackupCount'], 'inputType' => 'text', 'eval' => array('rgxp' => 'digit', 'nospace' => \true, 'tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['WsTemplatePath'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['WsTemplatePath'], 'inputType' => 'text', 'eval' => array('nospace' => 'true', 'trailingSlash' => \false, 'tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['backupdb_blacklist'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['backupdb_blacklist'], 'inputType' => 'text', 'eval' => array('tl_class' => 'long'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['backupdb_sendmail'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['backupdb_sendmail'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 clr'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['backupdb_attmail'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['backupdb_attmail'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['backupdb_zip'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['backupdb_zip'], 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'));
$GLOBALS['TL_DCA']['tl_settings']['fields']['backupdb_var'] = array('label' => &$GLOBALS['TL_LANG']['tl_settings']['backupdb_var'], 'inputType' => 'text', 'eval' => array('rgxp' => 'alias', 'maxlength' => 128, 'tl_class' => 'w50 clr'));
/**
 * Modify palette
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{backupdb_legend:hide},backupdb_blacklist,backupdb_saveddb,WsTemplatePath,backupdb_zip,backupdb_var,AutoBackupCount,backupdb_sendmail,backupdb_attmail';
}

namespace {
$GLOBALS['TL_DCA']['tl_settings']['fields']['news_categorySlugSetting'] = ['inputType' => 'select', 'eval' => ['tl_class' => 'w50', 'includeBlankOption' => \true, 'decodeEntities' => \true]];
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('news_categories_legend', \null, \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER, \true)->addField('news_categorySlugSetting', 'news_categories_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('default', 'tl_settings');
}
