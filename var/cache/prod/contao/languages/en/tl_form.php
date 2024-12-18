<?php

// vendor/contao/core-bundle/contao/languages/en/tl_form.xlf
$GLOBALS['TL_LANG']['tl_form']['title']['0'] = 'Title';
$GLOBALS['TL_LANG']['tl_form']['title']['1'] = 'Please enter the form title.';
$GLOBALS['TL_LANG']['tl_form']['alias']['0'] = 'Form alias';
$GLOBALS['TL_LANG']['tl_form']['alias']['1'] = 'The form alias is a unique reference to the form which can be called instead of its numeric ID.';
$GLOBALS['TL_LANG']['tl_form']['jumpTo']['0'] = 'Redirect page';
$GLOBALS['TL_LANG']['tl_form']['jumpTo']['1'] = 'Please choose the page to which visitors will be redirected after submitting the form.';
$GLOBALS['TL_LANG']['tl_form']['confirmation']['0'] = 'Confirmation message';
$GLOBALS['TL_LANG']['tl_form']['confirmation']['1'] = 'Here you can enter the confirmation message that will be displayed after submitting the form. You can use the submitted form data as simple tokens, e.g. <code>##field_name##</code>. The confirmation message is also available as <code>{{form_confirmation}}</code> insert tag.';
$GLOBALS['TL_LANG']['tl_form']['sendViaEmail']['0'] = 'Send form data via e-mail';
$GLOBALS['TL_LANG']['tl_form']['sendViaEmail']['1'] = 'Send the submitted data to an e-mail address.';
$GLOBALS['TL_LANG']['tl_form']['mailerTransport']['0'] = 'Mailer transport';
$GLOBALS['TL_LANG']['tl_form']['mailerTransport']['1'] = 'Here you can override the mailer transport used to send the form via e-mail.';
$GLOBALS['TL_LANG']['tl_form']['recipient']['0'] = 'Recipient address';
$GLOBALS['TL_LANG']['tl_form']['recipient']['1'] = 'Separate multiple e-mail addresses with comma.';
$GLOBALS['TL_LANG']['tl_form']['subject']['0'] = 'Subject';
$GLOBALS['TL_LANG']['tl_form']['subject']['1'] = 'Please enter the e-mail subject.';
$GLOBALS['TL_LANG']['tl_form']['format']['0'] = 'Data format';
$GLOBALS['TL_LANG']['tl_form']['format']['1'] = 'Defines how the form data will be forwarded.';
$GLOBALS['TL_LANG']['tl_form']['raw']['0'] = 'Raw data';
$GLOBALS['TL_LANG']['tl_form']['raw']['1'] = 'The form data will be sent as plain text message with each field in a new line.';
$GLOBALS['TL_LANG']['tl_form']['xml']['0'] = 'XML file';
$GLOBALS['TL_LANG']['tl_form']['xml']['1'] = 'The form data will be attached to the e-mail as an XML file.';
$GLOBALS['TL_LANG']['tl_form']['csv']['0'] = 'CSV file';
$GLOBALS['TL_LANG']['tl_form']['csv']['1'] = 'The form data will be attached to the e-mail as a CSV file.';
$GLOBALS['TL_LANG']['tl_form']['csv_excel']['0'] = 'CSV file (Microsoft Excel)';
$GLOBALS['TL_LANG']['tl_form']['csv_excel']['1'] = 'The form data will be attached to the e-mail as a CSV file readable by Microsoft Excel.';
$GLOBALS['TL_LANG']['tl_form']['skipEmpty']['0'] = 'Skip empty fields';
$GLOBALS['TL_LANG']['tl_form']['skipEmpty']['1'] = 'Do not include empty fields in the form data.';
$GLOBALS['TL_LANG']['tl_form']['email']['0'] = 'E-mail';
$GLOBALS['TL_LANG']['tl_form']['email']['1'] = 'Ignores all fields except <em>name</em>, <em>email</em>, <em>subject</em>, <em>message</em> and <em>cc</em> (carbon copy) and sends the form data like it had been sent from a mail client. File uploads are allowed.';
$GLOBALS['TL_LANG']['tl_form']['skipEmtpy']['0'] = 'Skip empty fields';
$GLOBALS['TL_LANG']['tl_form']['skipEmtpy']['1'] = 'Hide empty fields in the e-mail.';
$GLOBALS['TL_LANG']['tl_form']['storeValues']['0'] = 'Store data';
$GLOBALS['TL_LANG']['tl_form']['storeValues']['1'] = 'Store the submitted data in the database.';
$GLOBALS['TL_LANG']['tl_form']['customTpl']['0'] = 'Form template';
$GLOBALS['TL_LANG']['tl_form']['customTpl']['1'] = 'Here you can select the form template.';
$GLOBALS['TL_LANG']['tl_form']['targetTable']['0'] = 'Target table';
$GLOBALS['TL_LANG']['tl_form']['targetTable']['1'] = 'The target table must contain a column for every form field.';
$GLOBALS['TL_LANG']['tl_form']['method']['0'] = 'Submission method';
$GLOBALS['TL_LANG']['tl_form']['method']['1'] = 'The default form submission method is POST.';
$GLOBALS['TL_LANG']['tl_form']['novalidate']['0'] = 'Disable HTML5 validation';
$GLOBALS['TL_LANG']['tl_form']['novalidate']['1'] = 'Add the <em>novalidate</em> attribute to the form tag.';
$GLOBALS['TL_LANG']['tl_form']['attributes']['0'] = 'CSS ID/class';
$GLOBALS['TL_LANG']['tl_form']['attributes']['1'] = 'Here you can set an ID and one or more classes.';
$GLOBALS['TL_LANG']['tl_form']['formID']['0'] = 'Form ID';
$GLOBALS['TL_LANG']['tl_form']['formID']['1'] = 'The form ID is required to trigger a Contao module.';
$GLOBALS['TL_LANG']['tl_form']['allowTags']['0'] = 'Allow HTML tags';
$GLOBALS['TL_LANG']['tl_form']['allowTags']['1'] = 'Allow HTML tags in form fields.';
$GLOBALS['TL_LANG']['tl_form']['ajax']['0'] = 'Submit via Ajax';
$GLOBALS['TL_LANG']['tl_form']['ajax']['1'] = 'Submit the form via Ajax instead of reloading the page.';
$GLOBALS['TL_LANG']['tl_form']['tstamp']['0'] = 'Revision date';
$GLOBALS['TL_LANG']['tl_form']['tstamp']['1'] = 'Date and time of the latest revision';
$GLOBALS['TL_LANG']['tl_form']['title_legend'] = 'Title and redirect page';
$GLOBALS['TL_LANG']['tl_form']['email_legend'] = 'Send form data';
$GLOBALS['TL_LANG']['tl_form']['store_legend'] = 'Store form data';
$GLOBALS['TL_LANG']['tl_form']['expert_legend'] = 'Expert settings';
$GLOBALS['TL_LANG']['tl_form']['config_legend'] = 'Form configuration';
$GLOBALS['TL_LANG']['tl_form']['confirm_legend'] = 'Confirmation';
$GLOBALS['TL_LANG']['tl_form']['template_legend'] = 'Template settings';
$GLOBALS['TL_LANG']['tl_form']['new']['0'] = 'New';
$GLOBALS['TL_LANG']['tl_form']['new']['1'] = 'Create a new form';
$GLOBALS['TL_LANG']['tl_form']['show'] = 'Show the details of form ID %s';
$GLOBALS['TL_LANG']['tl_form']['edit'] = 'Edit form ID %s';
$GLOBALS['TL_LANG']['tl_form']['children'] = 'Edit the form fields of form ID %s';
$GLOBALS['TL_LANG']['tl_form']['copy'] = 'Duplicate form ID %s';
$GLOBALS['TL_LANG']['tl_form']['delete'] = 'Delete form ID %s';
$GLOBALS['TL_LANG']['tl_form']['targetTableMissingAllowlist'] = 'Define the available tables in the following DCA configuration: <code>%s</code>.';

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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form']['pdff_on'] = ['Fill PDF form', 'Filling out a PDF template'];
$GLOBALS['TL_LANG']['tl_form']['pdff_vorlage'] = ['PDF template file', 'Please select the PDF file as a template. You have the opportunity to make parts of submission dependent.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_handler'] = ['Further processing', 'What will happen next with the PDF'];
$GLOBALS['TL_LANG']['tl_form']['pdff_savepath'] = ['Directory for storing', 'Please select the directory where the PDF files should be saved. The directory can also be protected. When saving to home directory, it is fallback if no member is logged in.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_protect'] = ['Protect PDF', 'The PDF is provided with password protection'];
$GLOBALS['TL_LANG']['tl_form']['pdff_openpassword'] = ['PDF password for opening', 'Leave the field blank if open without a password should be possible.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_protectflags'] = ['Permissions', 'Select everything that should be possible without a password.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_password'] = ['PDF password for permissions', 'If this field is left blank, a random password is generated'];
$GLOBALS['TL_LANG']['tl_form']['pdff_allpages'] = ['Take all valid document pages', 'Applies also template pages without position entries in the PDF.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_offset'] = ['Basic offset', 'X and Y displacement in millimeters of all positions on the sides.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_textcolor'] = ['text color in PDF', 'Please select the pen color to fill in the entries'];
$GLOBALS['TL_LANG']['tl_form']['pdff_author'] = ['Author', 'Stated author in the PDF properties'];
$GLOBALS['TL_LANG']['tl_form']['pdff_title'] = ['Title', 'Title of PDF document'];
$GLOBALS['TL_LANG']['tl_form']['pdff_fileext'] = ['Expand file name', 'Expand the file name with InsertTags, e.g. {{date::ymd_His}} to make it unique.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_multiform'] = ['Multi-form template', 'If the template file contains different forms, applicable pages can be defined here, e.g. 1-4,7,10. Leave the fields blank to use all pages.'];
$GLOBALS['TL_LANG']['tl_form']['multiform_bedingung'] = ['Condition', 'If the condition is fulfilled, only the specified pages are used for the PDF output.'];
$GLOBALS['TL_LANG']['tl_form']['multiform_seiten'] = ['Pages from the PDF template', 'Specify a list of the corresponding pages separated by commas or as range specifications, e. g. 1-4,7,10'];
$GLOBALS['TL_LANG']['tl_form']['pdff_font'] = ['Custom font (regular)', 'Select your font file for the regular font or leave the field empty for the default font.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_fontb'] = ['Custom font (bold)', 'Select your font file for the bold font or leave the field empty for the default font.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_fonti'] = ['Custom font (italic)', 'Select your font file for the italic font or leave the field empty for the default font.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_fontbi'] = ['Custom font (bold+italic)', 'Select your font file for the bold italic font or leave the field empty for the default font.'];
$GLOBALS['TL_LANG']['tl_form']['pdff_userhome'] = ['Save in home directory', 'If the member is logged in, the PDF should be saved in their private directory.'];
/**
 * References
 */
$GLOBALS['TL_LANG']['tl_form']['pdff_handlers']['save'] = 'Save PDF file';
$GLOBALS['TL_LANG']['tl_form']['pdff_handlers']['email'] = 'Save PDF file and attach it to the email';
$GLOBALS['TL_LANG']['tl_form']['pdff_protectflag']['print'] = 'Print';
$GLOBALS['TL_LANG']['tl_form']['pdff_protectflag']['print-high'] = 'Print in high resolution';
$GLOBALS['TL_LANG']['tl_form']['pdff_protectflag']['modify'] = 'Modify the document';
$GLOBALS['TL_LANG']['tl_form']['pdff_protectflag']['assemble'] = 'Insert pages, rotate, delete, bookmarks';
$GLOBALS['TL_LANG']['tl_form']['pdff_protectflag']['copy'] = 'Copying content';
$GLOBALS['TL_LANG']['tl_form']['pdff_protectflag']['annot-forms'] = 'comment on';
$GLOBALS['TL_LANG']['tl_form']['pdff_protectflag']['extract'] = 'Remove pages';
$GLOBALS['TL_LANG']['tl_form']['pdff_protectflag']['fill-forms'] = 'Fill in form fields';
/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_form']['positions'] = ['Positions', 'Definition of text positions within the PDF'];
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form']['pdff_legend'] = 'Fill in PDF form';
$GLOBALS['TL_LANG']['tl_form']['pdff_fontlegend'] = 'Use your own fonts';

// vendor/terminal42/contao-leads/contao/languages/en/tl_form.xlf
$GLOBALS['TL_LANG']['tl_form']['leadEnabled']['0'] = 'Store leads';
$GLOBALS['TL_LANG']['tl_form']['leadEnabled']['1'] = 'Store submitted data from this form as leads.';
$GLOBALS['TL_LANG']['tl_form']['leadMain']['0'] = 'Main form';
$GLOBALS['TL_LANG']['tl_form']['leadMain']['1'] = 'Select if this is a main form or leads data should be stored to another form.';
$GLOBALS['TL_LANG']['tl_form']['leadMain']['2'] = 'This is a main form';
$GLOBALS['TL_LANG']['tl_form']['leadMenuLabel']['0'] = 'Navigation label';
$GLOBALS['TL_LANG']['tl_form']['leadMenuLabel']['1'] = 'Enter a custom label for the backend navigation. If you leave this field blank, the form name will be used.';
$GLOBALS['TL_LANG']['tl_form']['leadLabel']['0'] = 'Record label';
$GLOBALS['TL_LANG']['tl_form']['leadLabel']['1'] = 'Enter the names of the fields to be displayed in the back end list, surrounded by double hashes (##fieldname##). You can also use plain text. Use ##_created## to output the date and time of creation.';
$GLOBALS['TL_LANG']['tl_form']['leadPeriod']['0'] = 'Storage time for leads';
$GLOBALS['TL_LANG']['tl_form']['leadPeriod']['1'] = 'Here you can enter the storage time for lead records. 0 deactivates the automatic deletion.';
$GLOBALS['TL_LANG']['tl_form']['leadPeriod']['days'] = 'day(s)';
$GLOBALS['TL_LANG']['tl_form']['leadPeriod']['weeks'] = 'week(s)';
$GLOBALS['TL_LANG']['tl_form']['leadPeriod']['months'] = 'month(s)';
$GLOBALS['TL_LANG']['tl_form']['leadPeriod']['years'] = 'year(s)';
$GLOBALS['TL_LANG']['tl_form']['leadPurgeUploads']['0'] = 'Delete uploads of leads';
$GLOBALS['TL_LANG']['tl_form']['leadPurgeUploads']['1'] = 'When automatically deleting requests, the uploads should also be deleted.';

// vendor/terminal42/notification_center/contao/languages/en/tl_form.xlf
$GLOBALS['TL_LANG']['tl_form']['nc_notification']['0'] = 'Notification';
$GLOBALS['TL_LANG']['tl_form']['nc_notification']['1'] = 'Please select a notification.';

// vendor/contao-dd/advanced-classes-bundle/contao/languages/en/tl_form.xlf
$GLOBALS['TL_LANG']['tl_form']['ac_legend'] = 'Advanced CSS-Settings';
$GLOBALS['TL_LANG']['tl_form']['ac_set']['0'] = 'Advanced Classes Set';
$GLOBALS['TL_LANG']['tl_form']['ac_set']['1'] = 'Here you can select the available sets.';
$GLOBALS['TL_LANG']['tl_form']['ac_defaultColumnWidth']['0'] = 'Activate Default Column Width';
$GLOBALS['TL_LANG']['tl_form']['ac_defaultColumnWidth']['1'] = 'Activate Default Column Width';
$GLOBALS['TL_LANG']['tl_form']['ac_disableCSS']['0'] = 'Disable Module CSS';
$GLOBALS['TL_LANG']['tl_form']['ac_disableCSS']['1'] = 'Here you can disable the module\'s own CSS. Can be used to provide your own CSS.';

// vendor/cgoit/contao-leads-optin-bundle/contao/languages/en/tl_form.xlf
$GLOBALS['TL_LANG']['tl_form']['leadOptIn']['0'] = 'Save requests Opt-in';
$GLOBALS['TL_LANG']['tl_form']['leadOptIn']['1'] = 'Extends the <em>Save requests</em> feature with an additional opt-in.';
$GLOBALS['TL_LANG']['tl_form']['leadOptInNotification']['0'] = 'Opt-in notification';
$GLOBALS['TL_LANG']['tl_form']['leadOptInNotification']['1'] = 'Please select a notification that should be sent for the opt-in.';
$GLOBALS['TL_LANG']['tl_form']['leadOptInStoreIp']['0'] = 'Save Opt-in IP address';
$GLOBALS['TL_LANG']['tl_form']['leadOptInStoreIp']['1'] = 'Here you can select if the IP address of the opt-in should be saved.';
$GLOBALS['TL_LANG']['tl_form']['leadOptInTarget']['0'] = 'Opt-in destination page';
$GLOBALS['TL_LANG']['tl_form']['leadOptInTarget']['1'] = 'Here you can select a page that contains the opt-in module.';

/*
 * This file is part of cgoit\contao-form-fill-pdf-bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2024, cgoIT
 * @author     cgoIT <https://cgo-it.de>
 * @license    LGPL-3.0-or-later
 */
$GLOBALS['TL_LANG']['tl_form']['fp_legend'] = 'PDF Template';
$GLOBALS['TL_LANG']['tl_form']['fpFill']['0'] = 'Merge PDF template';
$GLOBALS['TL_LANG']['tl_form']['fpFill']['1'] = 'A PDF form is to be merged with the values entered in the form.';
$GLOBALS['TL_LANG']['tl_form']['fpConfigs']['0'] = 'Configuration';
$GLOBALS['TL_LANG']['tl_form']['fpConfigs']['1'] = 'One or more configurations for merging a PDF template.';
$GLOBALS['TL_LANG']['tl_form']['fpName']['0'] = 'Name';
$GLOBALS['TL_LANG']['tl_form']['fpName']['1'] = 'This name is used, among other things, to make the generated PDF usable as a SimpleToken. A name <code>merged</code> leads to a SimpleToken <code>##form_merged##</code>.';
$GLOBALS['TL_LANG']['tl_form']['fpTemplate']['0'] = 'PDF template';
$GLOBALS['TL_LANG']['tl_form']['fpTemplate']['1'] = 'The template to be filled.';
$GLOBALS['TL_LANG']['tl_form']['fpTargetFolder']['0'] = 'Storage location for merged PDF templates';
$GLOBALS['TL_LANG']['tl_form']['fpTargetFolder']['1'] = 'Path where the filled PDF files are to be stored.';
$GLOBALS['TL_LANG']['tl_form']['fpNameTemplate']['0'] = 'Template for file name of the merged PDF';
$GLOBALS['TL_LANG']['tl_form']['fpNameTemplate']['1'] = 'The merged PDF is created with this file name in the target folder. Insert tags and SimpleTokens (##form_*##, ##formconfig_*##) can be used as placeholders.';
$GLOBALS['TL_LANG']['tl_form']['fpDoNotOverwrite']['0'] = 'Preserve existing files';
$GLOBALS['TL_LANG']['tl_form']['fpDoNotOverwrite']['1'] = 'Add a numeric suffix to the new file if the file name already exists.';
$GLOBALS['TL_LANG']['tl_form']['fpInsertTagPrefix']['0'] = 'Insert tag prefix';
$GLOBALS['TL_LANG']['tl_form']['fpInsertTagPrefix']['1'] = 'Prefix for values that are to be resolved as insert tags on the server side. Default=[[';
$GLOBALS['TL_LANG']['tl_form']['fpInsertTagSuffix']['0'] = 'Insert tag suffix';
$GLOBALS['TL_LANG']['tl_form']['fpInsertTagSuffix']['1'] = 'Suffix for values that are to be resolved as insert tags on the server side. Default=]]';
$GLOBALS['TL_LANG']['tl_form']['fpFlatten']['0'] = 'Flatten form fields';
$GLOBALS['TL_LANG']['tl_form']['fpFlatten']['1'] = 'If activated, all form fields are flattened (removed) from the PDF after the merge.';
$GLOBALS['TL_LANG']['tl_form']['fpLeadStore']['0'] = 'Save in leads';
$GLOBALS['TL_LANG']['tl_form']['fpLeadStore']['1'] = 'Select if/where the field value should be saved. For linked forms, you must select the matching main form field.';
