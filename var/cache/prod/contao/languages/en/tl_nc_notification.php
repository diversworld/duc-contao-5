<?php

// vendor/terminal42/notification_center/contao/languages/en/tl_nc_notification.xlf
$GLOBALS['TL_LANG']['tl_nc_notification']['title']['0'] = 'Title';
$GLOBALS['TL_LANG']['tl_nc_notification']['title']['1'] = 'Please enter a title for this notification.';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['0'] = 'Type';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['1'] = 'Please select a type for this notification.';
$GLOBALS['TL_LANG']['tl_nc_notification']['new']['0'] = 'New notification';
$GLOBALS['TL_LANG']['tl_nc_notification']['new']['1'] = 'Create a new notification.';
$GLOBALS['TL_LANG']['tl_nc_notification']['edit']['0'] = 'Edit notification';
$GLOBALS['TL_LANG']['tl_nc_notification']['edit']['1'] = 'Edit notification ID %s.';
$GLOBALS['TL_LANG']['tl_nc_notification']['children']['0'] = 'Manage notifications';
$GLOBALS['TL_LANG']['tl_nc_notification']['children']['1'] = 'Manage messages for notification ID %s.';
$GLOBALS['TL_LANG']['tl_nc_notification']['copy']['0'] = 'Copy notification';
$GLOBALS['TL_LANG']['tl_nc_notification']['copy']['1'] = 'Copy notification ID %s.';
$GLOBALS['TL_LANG']['tl_nc_notification']['delete']['0'] = 'Delete notification';
$GLOBALS['TL_LANG']['tl_nc_notification']['delete']['1'] = 'Delete notification ID %s.';
$GLOBALS['TL_LANG']['tl_nc_notification']['show']['0'] = 'Notification details';
$GLOBALS['TL_LANG']['tl_nc_notification']['show']['1'] = 'Show details for notification ID %s.';
$GLOBALS['TL_LANG']['tl_nc_notification']['title_legend'] = 'Title & type';
$GLOBALS['TL_LANG']['tl_nc_notification']['config_legend'] = 'Configuration';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['core_form']['0'] = 'Contao form generator submission';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['core_form']['1'] = 'This notification type can be sent when the form is submitted.';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['member_password']['0'] = 'Contao member lost password';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['member_activation']['0'] = 'Contao member activation';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['member_registration']['0'] = 'Contao member registration';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['member_personaldata']['0'] = 'Contao member personal data';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['newsletter_subscribe']['0'] = 'Contao newsletter subscribed';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['newsletter_activate']['0'] = 'Contao newsletter activation';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['newsletter_unsubscribe']['0'] = 'Contao newsletter unsubscribed';

// vendor/cgoit/contao-leads-optin-bundle/contao/languages/en/tl_nc_notification.xlf
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['leads_optin'] = 'Save requests';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['leads_optin_notification']['0'] = 'Opt-in';
$GLOBALS['TL_LANG']['tl_nc_notification']['type']['leads_optin_success_notification']['0'] = 'Opt-in confirmation';

$GLOBALS['TL_LANG']['tl_nc_notification']['type']['event_registration'] = 'Event registration';
$GLOBALS['TL_LANG']['tl_nc_notification']['type'][\InspiredMinds\ContaoEventRegistration\NotificationTypes::CONFIRM] = ['Confirm registration', 'This notification type can be sent when an event registration is confirmed.'];
$GLOBALS['TL_LANG']['tl_nc_notification']['type'][\InspiredMinds\ContaoEventRegistration\NotificationTypes::CANCEL] = ['Cancel registration', 'This notification type can be sent when an event registration is cancelled.'];
$GLOBALS['TL_LANG']['tl_nc_notification']['type'][\InspiredMinds\ContaoEventRegistration\NotificationTypes::WAITING_LIST_ADVANCEMENT] = ['Advancement from waiting list', 'This notification type can be sent when an event registration is cancelled.'];

$GLOBALS['TL_LANG']['tl_nc_notification']['type']['news_newsletter'] = ['News newsletter', 'This notification type can be sent when the news article is published.'];
