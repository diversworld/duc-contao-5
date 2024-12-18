<?php

// vendor/contao/core-bundle/contao/languages/en/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['name']['0'] = 'Title';
$GLOBALS['TL_LANG']['tl_user_group']['name']['1'] = 'Please enter the group title.';
$GLOBALS['TL_LANG']['tl_user_group']['alexf']['0'] = 'Allowed fields';
$GLOBALS['TL_LANG']['tl_user_group']['alexf']['1'] = 'Here you can choose which fields will be editable.';
$GLOBALS['TL_LANG']['tl_user_group']['disable']['0'] = 'Deactivate';
$GLOBALS['TL_LANG']['tl_user_group']['disable']['1'] = 'Temporarily disable the group.';
$GLOBALS['TL_LANG']['tl_user_group']['start']['0'] = 'Activate on';
$GLOBALS['TL_LANG']['tl_user_group']['start']['1'] = 'If you want to prevent the group from being active before a certain date/time, you can enter it here. Otherwise, leave the field blank.';
$GLOBALS['TL_LANG']['tl_user_group']['stop']['0'] = 'Deactivate on';
$GLOBALS['TL_LANG']['tl_user_group']['stop']['1'] = 'If you want to prevent the group from being active after a certain date/time, you can enter it here. Otherwise, leave the field blank.';
$GLOBALS['TL_LANG']['tl_user_group']['title_legend'] = 'Title';
$GLOBALS['TL_LANG']['tl_user_group']['modules_legend'] = 'Allowed modules';
$GLOBALS['TL_LANG']['tl_user_group']['elements_legend'] = 'Allowed elements';
$GLOBALS['TL_LANG']['tl_user_group']['pagemounts_legend'] = 'Pagemounts';
$GLOBALS['TL_LANG']['tl_user_group']['filemounts_legend'] = 'Filemounts';
$GLOBALS['TL_LANG']['tl_user_group']['imageSizes_legend'] = 'Image sizes';
$GLOBALS['TL_LANG']['tl_user_group']['forms_legend'] = 'Form permissions';
$GLOBALS['TL_LANG']['tl_user_group']['amg_legend'] = 'Allowed member groups';
$GLOBALS['TL_LANG']['tl_user_group']['alexf_legend'] = 'Allowed fields';
$GLOBALS['TL_LANG']['tl_user_group']['account_legend'] = 'Group settings';
$GLOBALS['TL_LANG']['tl_user_group']['new']['0'] = 'New';
$GLOBALS['TL_LANG']['tl_user_group']['new']['1'] = 'Create a new user group';
$GLOBALS['TL_LANG']['tl_user_group']['show'] = 'Show the details of user group ID %s';
$GLOBALS['TL_LANG']['tl_user_group']['edit'] = 'Edit user group ID %s';
$GLOBALS['TL_LANG']['tl_user_group']['copy'] = 'Duplicate user group ID %s';
$GLOBALS['TL_LANG']['tl_user_group']['delete'] = 'Delete user group ID %s';
$GLOBALS['TL_LANG']['tl_user_group']['toggle']['0'] = 'Activate/deactivate user group';
$GLOBALS['TL_LANG']['tl_user_group']['toggle']['1'] = 'Deactivate user group ID %s';
$GLOBALS['TL_LANG']['tl_user_group']['toggle']['2'] = 'Activate user group ID %s';

// vendor/contao/faq-bundle/contao/languages/en/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['faq_legend'] = 'FAQ permissions';

// vendor/contao/news-bundle/contao/languages/en/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['news_legend'] = 'News permissions';

// vendor/terminal42/contao-leads/contao/languages/en/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['leadp']['0'] = 'Leads permissions';
$GLOBALS['TL_LANG']['tl_user_group']['leadp']['1'] = 'Here you can define the leads permissions.';
$GLOBALS['TL_LANG']['tl_user_group']['leadp']['edit'] = 'Edit leads data';
$GLOBALS['TL_LANG']['tl_user_group']['leadp']['delete'] = 'Delete leads';

// vendor/contao/calendar-bundle/contao/languages/en/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['calendars_legend'] = 'Events permissions';

// vendor/contao/newsletter-bundle/contao/languages/en/tl_user_group.xlf
$GLOBALS['TL_LANG']['tl_user_group']['newsletter_legend'] = 'Newsletter permissions';

/*
 * Load tl_user language file.
 */
\Contao\System::loadLanguageFile('tl_user');
/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_user_group']['newsCategories_legend'] = $GLOBALS['TL_LANG']['tl_user']['newsCategories_legend'];

\Contao\System::loadLanguageFile('tl_user_group');
/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_user_group']['node_legend'] =& $GLOBALS['TL_LANG']['tl_user']['node_legend'];

/**
 * Load tl_user language file
 */
\Contao\System::loadLanguageFile('tl_user');
$GLOBALS['TL_LANG']['tl_user_group']['mae_evt_cat_legend'] = "Event categories";
