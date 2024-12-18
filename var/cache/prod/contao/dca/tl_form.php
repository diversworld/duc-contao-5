<?php

namespace {
$GLOBALS['TL_DCA']['tl_form'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'switchToEdit' => \true, 'enableVersioning' => \true, 'ctable' => array('tl_form_field'), 'markAsCopy' => 'title', 'onload_callback' => array(array('tl_form', 'adjustDca')), 'oncreate_callback' => array(array('tl_form', 'adjustPermissions')), 'oncopy_callback' => array(array('tl_form', 'adjustPermissions')), 'sql' => array('keys' => array('id' => 'primary', 'tstamp' => 'index', 'alias' => 'index'))),
    // List
    'list' => array('sorting' => array('mode' => \Contao\DataContainer::MODE_SORTED, 'fields' => array('title'), 'flag' => \Contao\DataContainer::SORT_INITIAL_LETTER_ASC, 'panelLayout' => 'filter;search,limit', 'defaultSearchField' => 'title'), 'label' => array('fields' => array('title', 'formID'), 'format' => '%s <span class="label-info">[%s]</span>')),
    // Palettes
    'palettes' => array('__selector__' => array('sendViaEmail', 'storeValues'), 'default' => '{title_legend},title,alias,jumpTo;{config_legend},ajax,allowTags;{confirm_legend},confirmation;{email_legend},sendViaEmail;{store_legend:hide},storeValues;{template_legend:hide},customTpl;{expert_legend:hide},method,novalidate,attributes,formID'),
    // Sub-palettes
    'subpalettes' => array('sendViaEmail' => 'mailerTransport,recipient,subject,format,skipEmpty', 'storeValues' => 'targetTable'),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'title' => array('search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'alias' => array('inputType' => 'text', 'eval' => array('rgxp' => 'alias', 'doNotCopy' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'save_callback' => array(array('tl_form', 'generateAlias')), 'sql' => "varchar(255) BINARY NOT NULL default ''"), 'jumpTo' => array('inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio', 'tl_class' => 'clr'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'confirmation' => array('search' => \true, 'inputType' => 'textarea', 'eval' => array('rte' => 'tinyMCE', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "text NULL"), 'sendViaEmail' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'mailerTransport' => array('inputType' => 'select', 'eval' => array('tl_class' => 'w50', 'includeBlankOption' => \true), 'sql' => "varchar(255) NOT NULL default ''"), 'recipient' => array('search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'maxlength' => 1022, 'rgxp' => 'emails', 'tl_class' => 'w50 clr'), 'sql' => "varchar(1022) NOT NULL default ''"), 'subject' => array('search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'maxlength' => 255, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'format' => array('inputType' => 'select', 'options' => array('raw', 'xml', 'csv', 'csv_excel', 'email'), 'reference' => &$GLOBALS['TL_LANG']['tl_form'], 'eval' => array('helpwizard' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(12) NOT NULL default 'raw'"), 'skipEmpty' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'storeValues' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => array('type' => 'boolean', 'default' => \false)), 'targetTable' => array('search' => \true, 'inputType' => 'select', 'options_callback' => array('tl_form', 'getAllTables'), 'eval' => array('chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''"), 'customTpl' => array('inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('form_wrapper_', array(), 'form_wrapper');
    }, 'eval' => array('chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''"), 'method' => array('filter' => \true, 'inputType' => 'select', 'options' => array('POST', 'GET'), 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(12) NOT NULL default 'POST'"), 'novalidate' => array('inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'attributes' => array('inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'formID' => array('search' => \true, 'inputType' => 'text', 'eval' => array('nospace' => \true, 'doNotCopy' => \true, 'maxlength' => 64, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''"), 'ajax' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false)), 'allowTags' => array('filter' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => array('type' => 'boolean', 'default' => \false))),
);
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @internal
 */
class tl_form extends \Contao\Backend
{
    /**
     *  Set the root IDs.
     */
    public function adjustDca()
    {
        $user = \Contao\BackendUser::getInstance();
        if ($user->isAdmin) {
            return;
        }
        // Set root IDs
        if (empty($user->forms) || !\is_array($user->forms)) {
            $root = array(0);
        } else {
            $root = $user->forms;
        }
        $GLOBALS['TL_DCA']['tl_form']['list']['sorting']['root'] = $root;
    }
    /**
     * Add the new form to the permissions
     *
     * @param string|int $insertId
     */
    public function adjustPermissions($insertId)
    {
        // The oncreate_callback passes $insertId as second argument
        if (\func_num_args() == 4) {
            $insertId = \func_get_arg(1);
        }
        $user = \Contao\BackendUser::getInstance();
        if ($user->isAdmin) {
            return;
        }
        // Set root IDs
        if (empty($user->forms) || !\is_array($user->forms)) {
            $root = array(0);
        } else {
            $root = $user->forms;
        }
        // The form is enabled already
        if (\in_array($insertId, $root)) {
            return;
        }
        $objSessionBag = \Contao\System::getContainer()->get('request_stack')->getSession()->getBag('contao_backend');
        $arrNew = $objSessionBag->get('new_records');
        if (\is_array($arrNew['tl_form']) && \in_array($insertId, $arrNew['tl_form'])) {
            $db = \Contao\Database::getInstance();
            // Add the permissions on group level
            if ($user->inherit != 'custom') {
                $objGroup = $db->execute("SELECT id, forms, formp FROM tl_user_group WHERE id IN(" . \implode(',', \array_map('\\intval', $user->groups)) . ")");
                while ($objGroup->next()) {
                    $arrFormp = \Contao\StringUtil::deserialize($objGroup->formp);
                    if (\is_array($arrFormp) && \in_array('create', $arrFormp)) {
                        $arrForms = \Contao\StringUtil::deserialize($objGroup->forms, \true);
                        $arrForms[] = $insertId;
                        $db->prepare("UPDATE tl_user_group SET forms=? WHERE id=?")->execute(\serialize($arrForms), $objGroup->id);
                    }
                }
            }
            // Add the permissions on user level
            if ($user->inherit != 'group') {
                $objUser = $db->prepare("SELECT forms, formp FROM tl_user WHERE id=?")->limit(1)->execute($user->id);
                $arrFormp = \Contao\StringUtil::deserialize($objUser->formp);
                if (\is_array($arrFormp) && \in_array('create', $arrFormp)) {
                    $arrForms = \Contao\StringUtil::deserialize($objUser->forms, \true);
                    $arrForms[] = $insertId;
                    $db->prepare("UPDATE tl_user SET forms=? WHERE id=?")->execute(\serialize($arrForms), $user->id);
                }
            }
            // Add the new element to the user object
            $root[] = $insertId;
            $user->forms = $root;
        }
    }
    /**
     * Auto-generate a form alias if it has not been set yet
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function generateAlias($varValue, \Contao\DataContainer $dc)
    {
        $aliasExists = static function (string $alias) use($dc) : bool {
            $result = \Contao\Database::getInstance()->prepare("SELECT id FROM tl_form WHERE alias=? AND id!=?")->execute($alias, $dc->id);
            return $result->numRows > 0;
        };
        // Generate an alias if there is none
        if (!$varValue) {
            $varValue = \Contao\System::getContainer()->get('contao.slug')->generate((string) $dc->activeRecord->title, (int) (\Contao\Input::post('jumpTo') ?: $dc->activeRecord->jumpTo), $aliasExists);
        } elseif (\preg_match('/^[1-9]\\d*$/', $varValue)) {
            throw new \Exception(\sprintf($GLOBALS['TL_LANG']['ERR']['aliasNumeric'], $varValue));
        } elseif ($aliasExists($varValue)) {
            throw new \Exception(\sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
        }
        return $varValue;
    }
    /**
     * Get all tables and return them as array
     *
     * @return array
     */
    public function getAllTables()
    {
        // Return allowlisted tables if defined
        if (!empty($GLOBALS['TL_DCA']['tl_form']['fields']['targetTable']['options'])) {
            return $GLOBALS['TL_DCA']['tl_form']['fields']['targetTable']['options'];
        }
        $GLOBALS['TL_DCA']['tl_form']['fields']['targetTable']['label'][1] = '<span class="tl_red">' . \sprintf($GLOBALS['TL_LANG']['tl_form']['targetTableMissingAllowlist'], "\$GLOBALS['TL_DCA']['tl_form']['fields']['targetTable']['options']") . '</span>';
        if (!\Contao\BackendUser::getInstance()->isAdmin) {
            return array();
        }
        $arrTables = \Contao\Database::getInstance()->listTables();
        $arrViews = \Contao\System::getContainer()->get('database_connection')->createSchemaManager()->listViews();
        if (!empty($arrViews)) {
            $arrTables = \array_merge($arrTables, \array_keys($arrViews));
            \natsort($arrTables);
        }
        return \array_values($arrTables);
    }
}
}

namespace {
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('pdff_legend', 'confirm_legend')->addField('pdff_on', 'pdff_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('default', 'tl_form');
// Subpalette hinzufügen
$GLOBALS['TL_DCA']['tl_form']['subpalettes']['pdff_on'] = 'pdff_vorlage,pdff_handler,pdff_savepath,pdff_userhome,pdff_fileext,pdff_multiform,pdff_allpages,pdff_offset,pdff_textcolor,pdff_title,pdff_author,pdff_protect,pdff_password,pdff_openpassword,pdff_protectflags,pdff_font,pdff_fontb,pdff_fonti,pdff_fontbi';
// Selector hinzufügen
$GLOBALS['TL_DCA']['tl_form']['palettes']['__selector__'][] = 'pdff_on';
// Positions-Icon hinzufügen
$GLOBALS['TL_DCA']['tl_form']['list']['operations']['positions'] = ['href' => 'table=tl_pdff_positions', 'icon' => 'iconPDF.svg'];
// Kopplung mit weiterer Child-Tabelle aufbauen
$GLOBALS['TL_DCA']['tl_form']['config']['ctable'][] = 'tl_pdff_positions';
// Neue Felder hinzufügen
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_on'] = array('exclude' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'eval' => ['submitOnChange' => \true], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_vorlage'] = array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => ['filesOnly' => \true, 'fieldType' => 'radio', 'mandatory' => \true, 'tl_class' => 'clr w50', 'extensions' => 'pdf'], 'sql' => ['type' => 'binary', 'length' => 16, 'fixed' => \true, 'notnull' => \false]);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_handler'] = array('default' => 'save', 'exclude' => \true, 'inputType' => 'select', 'options' => ['save', 'email'], 'reference' => &$GLOBALS['TL_LANG']['tl_form']['pdff_handlers'], 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 5, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_savepath'] = array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => ['files' => \false, 'fieldType' => 'radio', 'tl_class' => 'clr w50'], 'sql' => ['type' => 'binary', 'length' => 16, 'fixed' => \true, 'notnull' => \false]);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_userhome'] = array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'm12 w50'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_fileext'] = array('default' => '_{{date::ymd_His}}', 'exclude' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 255, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'string', 'length' => 255, 'default' => '_{{date::ymd_His}}']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_allpages'] = array('default' => '1', 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'clr'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_offset'] = array('default' => \serialize(['0', '0']), 'exclude' => \true, 'inputType' => 'text', 'eval' => ['multiple' => \true, 'size' => 2, 'rgxp' => 'digit', 'nospace' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 64, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_textcolor'] = array('default' => '000ac0', 'inputType' => 'text', 'eval' => ['maxlength' => 6, 'colorpicker' => \true, 'isHexColor' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50 wizard', 'style' => 'width:138px'], 'sql' => ['type' => 'string', 'length' => 64, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_title'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 255, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'string', 'length' => 255, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_author'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 255, 'tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 255, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_protect'] = array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'clr w50 m12'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_openpassword'] = array('exclude' => \true, 'inputType' => 'text', 'load_callback' => [['Softleister\\PdfformsBundle\\PdfformsHelper', 'decrypt']], 'save_callback' => [['Softleister\\PdfformsBundle\\PdfformsHelper', 'encrypt']], 'eval' => ['preserveTags' => \true, 'tl_class' => 'w50'], 'sql' => ['type' => 'string', 'length' => 255, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_password'] = array('exclude' => \true, 'inputType' => 'text', 'load_callback' => [['Softleister\\PdfformsBundle\\PdfformsHelper', 'decrypt']], 'save_callback' => [['Softleister\\PdfformsBundle\\PdfformsHelper', 'encrypt']], 'eval' => ['preserveTags' => \true, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'string', 'length' => 255, 'default' => '']);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_protectflags'] = array('exclude' => \true, 'inputType' => 'checkbox', 'options' => ['print', 'print-high', 'modify', 'assemble', 'extract', 'copy', 'annot-forms', 'fill-forms'], 'reference' => &$GLOBALS['TL_LANG']['tl_form']['pdff_protectflag'], 'eval' => ['multiple' => \true, 'tl_class' => 'clr w50'], 'sql' => "blob NULL");
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_multiform'] = array('exclude' => \true, 'inputType' => 'multiColumnWizard', 'eval' => array('tl_class' => 'clr', 'columnFields' => array('bedingung' => array('label' => &$GLOBALS['TL_LANG']['tl_form']['multiform_bedingung'], 'exclude' => \true, 'inputType' => 'select', 'eval' => ['style' => 'width:235px', 'chosen' => \true, 'includeBlankOption' => \true], 'options_callback' => ['tl_pdff_form', 'getFelder']), 'seiten' => array('label' => &$GLOBALS['TL_LANG']['tl_form']['multiform_seiten'], 'default' => '', 'exclude' => \true, 'inputType' => 'text', 'eval' => ['allowHtml' => \true, 'style' => 'width:265px']))), 'sql' => "mediumtext NULL");
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_font'] = array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => ['filesOnly' => \true, 'fieldType' => 'radio', 'tl_class' => 'clr w50', 'extensions' => 'ttf,otf'], 'sql' => ['type' => 'binary', 'length' => 16, 'fixed' => \true, 'notnull' => \false]);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_fontb'] = array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => ['filesOnly' => \true, 'fieldType' => 'radio', 'tl_class' => 'w50', 'extensions' => 'ttf,otf'], 'sql' => ['type' => 'binary', 'length' => 16, 'fixed' => \true, 'notnull' => \false]);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_fonti'] = array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => ['filesOnly' => \true, 'fieldType' => 'radio', 'tl_class' => 'w50', 'extensions' => 'ttf,otf'], 'sql' => ['type' => 'binary', 'length' => 16, 'fixed' => \true, 'notnull' => \false]);
$GLOBALS['TL_DCA']['tl_form']['fields']['pdff_fontbi'] = array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => ['filesOnly' => \true, 'fieldType' => 'radio', 'tl_class' => 'w50', 'extensions' => 'ttf,otf'], 'sql' => ['type' => 'binary', 'length' => 16, 'fixed' => \true, 'notnull' => \false]);
class tl_pdff_form extends \tl_form
{
    //-----------------------------------------------------------------
    //  Erstellt eine Liste der Formularfelder
    //  $dc->currentRecord   ist die ID des tl_pdff_positions
    //-----------------------------------------------------------------
    public function getFelder($dc)
    {
        return \Softleister\PdfformsBundle\PdfformsHelper::getFormFields($dc->currentRecord);
    }
}
}

namespace {
$GLOBALS['TL_DCA']['tl_form']['config']['sql']['keys']['leadEnabled,leadMain'] = 'index';
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('leadEnabled', 'storeValues')->applyToPalette('default', 'tl_form');
$GLOBALS['TL_DCA']['tl_form']['palettes']['__selector__'][] = 'leadEnabled';
$GLOBALS['TL_DCA']['tl_form']['subpalettes']['leadEnabled'] = 'leadMain';
$GLOBALS['TL_DCA']['tl_form']['fields']['leadEnabled'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'clr', 'submitOnChange' => \true], 'sql' => "char(1) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_form']['fields']['leadMain'] = ['exclude' => \true, 'inputType' => 'select', 'eval' => ['submitOnChange' => \true, 'includeBlankOption' => \true, 'blankOptionLabel' => &$GLOBALS['TL_LANG']['tl_form']['leadMain'][2], 'tl_class' => 'w50'], 'sql' => 'int(10) unsigned NOT NULL default 0'];
$GLOBALS['TL_DCA']['tl_form']['fields']['leadMenuLabel'] = ['exclude' => \true, 'inputType' => 'text', 'eval' => ['maxlength' => 64, 'tl_class' => 'w50', 'decodeEntities' => \true], 'sql' => "varchar(64) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_form']['fields']['leadLabel'] = ['exclude' => \true, 'inputType' => 'textarea', 'eval' => ['mandatory' => \true, 'decodeEntities' => \true, 'allowHtml' => \true, 'tl_class' => 'clr'], 'sql' => 'text NULL'];
$GLOBALS['TL_DCA']['tl_form']['fields']['leadPeriod'] = ['label' => &$GLOBALS['TL_LANG']['tl_form']['leadPeriod'], 'exclude' => \true, 'inputType' => 'timePeriod', 'options' => ['days', 'weeks', 'months', 'years'], 'reference' => &$GLOBALS['TL_LANG']['tl_form']['leadPeriod'], 'eval' => ['rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w50'], 'sql' => "varchar(64) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_form']['fields']['leadPurgeUploads'] = ['label' => &$GLOBALS['TL_LANG']['tl_form']['leadPurgeUploads'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12'], 'sql' => "char(1) NOT NULL default ''"];
}

namespace {
/*
 * Palettes
 */
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField('nc_notification', 'sendViaEmail')->applyToPalette('default', 'tl_form');
/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form']['fields']['nc_notification'] = ['exclude' => \true, 'filter' => \true, 'inputType' => 'select', 'eval' => ['includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'clr w50'], 'sql' => ['type' => 'integer', 'default' => 0, 'unsigned' => \true]];
$GLOBALS['TL_DCA']['tl_form']['fields']['sendViaEmail']['eval']['tl_class'] = 'clr w50';
}

namespace {
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('ac_legend', 'formID')->addField('ac_set', 'ac_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('ac_defaultColumnWidth', 'ac_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->addField('ac_disableCSS', 'ac_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('default', 'tl_form');
$GLOBALS['TL_DCA']['tl_form']['fields']['ac_set'] = ['inputType' => 'select', 'reference' => &$GLOBALS['TL_LANG']['tl_form'], 'eval' => ['tl_class' => 'w50'], 'sql' => "varchar(255) NOT NULL default ''"];
$GLOBALS['TL_DCA']['tl_form']['fields']['ac_defaultColumnWidth'] = ['inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 clr'], 'sql' => ['type' => 'boolean', 'default' => \false]];
$GLOBALS['TL_DCA']['tl_form']['fields']['ac_disableCSS'] = ['inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'], 'sql' => ['type' => 'boolean', 'default' => \false]];
}

namespace {
/*
 * This file is part of cgoit\contao-leads-optin-bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2024, cgoIT
 * @author     cgoIT <https://cgo-it.de>
 * @author     Christopher Bölter
 * @license    LGPL-3.0-or-later
 */
// Palettes
$GLOBALS['TL_DCA']['tl_form']['palettes']['__selector__'][] = 'leadOptIn';
$GLOBALS['TL_DCA']['tl_form']['subpalettes']['leadOptIn'] = 'leadOptInNotification,leadOptInStoreIp,leadOptInTarget';
$GLOBALS['TL_DCA']['tl_form']['fields']['leadOptIn'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12', 'submitOnChange' => \true], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_form']['fields']['leadOptInStoreIp'] = ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12'], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']];
$GLOBALS['TL_DCA']['tl_form']['fields']['leadOptInNotification'] = ['exclude' => \true, 'inputType' => 'select', 'eval' => ['tl_class' => 'w50', 'includeBlankOption' => \true, 'mandatory' => \true], 'sql' => ['type' => 'integer', 'length' => 10, 'unsigned' => \true, 'default' => 0]];
$GLOBALS['TL_DCA']['tl_form']['fields']['leadOptInTarget'] = ['exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => ['fieldType' => 'radio', 'tl_class' => 'w50'], 'sql' => ['type' => 'integer', 'length' => 10, 'unsigned' => \true, 'default' => 0], 'relation' => ['type' => 'hasOne', 'load' => 'eager']];
}

namespace {
// Palettes
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addLegend('fp_legend', 'store_legend')->addField('fpFill', 'fp_legend', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)->applyToPalette('default', 'tl_form');
$GLOBALS['TL_DCA']['tl_form']['palettes']['__selector__'][] = 'fpFill';
$GLOBALS['TL_DCA']['tl_form']['subpalettes']['fpFill'] = 'fpConfigs';
// Fields
$GLOBALS['TL_DCA']['tl_form']['fields'] = \array_merge(['fpFill' => ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12', 'submitOnChange' => \true], 'sql' => ['type' => 'string', 'length' => 1, 'fixed' => \true, 'default' => '']]], ['fpLeadStore' => ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['mandatory' => \false, 'tl_class' => 'w50']]], ['fpConfigs' => ['exclude' => \true, 'inputType' => 'group', 'min' => 1, 'order' => \false, 'palette' => ['fpName', 'fpTemplate', 'fpTargetFolder', 'fpNameTemplate', 'fpDoNotOverwrite', 'fpInsertTagPrefix', 'fpInsertTagSuffix', 'fpFlatten'], 'fields' => ['fpName' => ['exclude' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \true, 'maxlength' => 50, 'doNotCopy' => \true, 'tl_class' => 'w50']], 'fpTemplate' => ['exclude' => \true, 'inputType' => 'fileTree', 'eval' => ['mandatory' => \true, 'fieldType' => 'radio', 'extensions' => 'pdf', 'filesOnly' => \true, 'doNotCopy' => \true, 'tl_class' => 'clr w50']], 'fpTargetFolder' => ['exclude' => \true, 'inputType' => 'fileTree', 'eval' => ['mandatory' => \true, 'fieldType' => 'radio', 'files' => \false, 'doNotCopy' => \true, 'tl_class' => 'clr w50']], 'fpNameTemplate' => ['exclude' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \false, 'maxlength' => 255, 'tl_class' => 'clr w50']], 'fpDoNotOverwrite' => ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12']], 'fpInsertTagPrefix' => ['exclude' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \false, 'maxlength' => 5, 'tl_class' => 'w50']], 'fpInsertTagSuffix' => ['exclude' => \true, 'inputType' => 'text', 'eval' => ['mandatory' => \false, 'maxlength' => 5, 'tl_class' => 'w50']], 'fpFlatten' => ['exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['mandatory' => \false, 'tl_class' => 'w50']]], 'sql' => ['type' => 'blob', 'length' => 65535, 'notnull' => \false]]], $GLOBALS['TL_DCA']['tl_form']['fields']);
}
