<?php

// vendor/contao/calendar-bundle/contao/languages/en/tl_calendar.xlf
$GLOBALS['TL_LANG']['tl_calendar']['title']['0'] = 'Title';
$GLOBALS['TL_LANG']['tl_calendar']['title']['1'] = 'Please enter the calendar title.';
$GLOBALS['TL_LANG']['tl_calendar']['jumpTo']['0'] = 'Redirect page';
$GLOBALS['TL_LANG']['tl_calendar']['jumpTo']['1'] = 'Please choose the event reader page to which visitors will be redirected when clicking an event.';
$GLOBALS['TL_LANG']['tl_calendar']['protected']['0'] = 'Protect calendar';
$GLOBALS['TL_LANG']['tl_calendar']['protected']['1'] = 'Show events to certain member groups only.';
$GLOBALS['TL_LANG']['tl_calendar']['groups']['0'] = 'Allowed member groups';
$GLOBALS['TL_LANG']['tl_calendar']['groups']['1'] = 'These groups will be able to see the events in this calendar.';
$GLOBALS['TL_LANG']['tl_calendar']['tstamp']['0'] = 'Revision date';
$GLOBALS['TL_LANG']['tl_calendar']['tstamp']['1'] = 'Date and time of the latest revision';
$GLOBALS['TL_LANG']['tl_calendar']['title_legend'] = 'Title and redirect page';
$GLOBALS['TL_LANG']['tl_calendar']['protected_legend'] = 'Access protection';
$GLOBALS['TL_LANG']['tl_calendar']['feed_legend'] = 'RSS/Atom feed';
$GLOBALS['TL_LANG']['tl_calendar']['notify_admin'] = 'System administrator';
$GLOBALS['TL_LANG']['tl_calendar']['notify_author'] = 'Author of the event';
$GLOBALS['TL_LANG']['tl_calendar']['notify_both'] = 'Author and system administrator';
$GLOBALS['TL_LANG']['tl_calendar']['source_teaser'] = 'Event teasers';
$GLOBALS['TL_LANG']['tl_calendar']['source_text'] = 'Full articles';
$GLOBALS['TL_LANG']['tl_calendar']['feeds']['0'] = 'Calendar feeds';
$GLOBALS['TL_LANG']['tl_calendar']['feeds']['1'] = 'Manage calendar feeds';
$GLOBALS['TL_LANG']['tl_calendar']['new']['0'] = 'New';
$GLOBALS['TL_LANG']['tl_calendar']['new']['1'] = 'Create a new calendar';
$GLOBALS['TL_LANG']['tl_calendar']['show'] = 'Show the details of calendar ID %s';
$GLOBALS['TL_LANG']['tl_calendar']['edit'] = 'Edit calendar ID %s';
$GLOBALS['TL_LANG']['tl_calendar']['children'] = 'Edit the events of calendar ID %s';
$GLOBALS['TL_LANG']['tl_calendar']['copy'] = 'Duplicate calendar ID %s';
$GLOBALS['TL_LANG']['tl_calendar']['delete'] = 'Delete calendar ID %s';

/*
 * This file is part of cgoit\calendar-extended-bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) Kester Mielke
 * @copyright  Copyright (c) 2024, cgoIT
 * @author     Kester Mielke
 * @author     cgoIT <https://cgo-it.de>
 * @license    LGPL-3.0-or-later
 */
/*
 * Fields
 */
$GLOBALS['TL_LANG']['tl_calendar']['bg_color'] = ['Background color and opacity', 'Here you can enter a hexadecimal background color (e.g. ff0000 for red) and an optional opacity in percent (e.g. 75).'];
$GLOBALS['TL_LANG']['tl_calendar']['fg_color'] = ['Foreground color and opacity', 'Here you can enter a hexadecimal foreground color (e.g. ff0000 for red) and an optional opacity in percent (e.g. 75).'];
$GLOBALS['TL_LANG']['tl_calendar']['isHolidayCal'] = ['Holiday calender', 'Calendar holds holidays only. No events are displayed at these days.'];
$GLOBALS['TL_LANG']['tl_calendar']['allowEvents'] = ['Show events', 'Defined events will be displayed if the event option "Show Event always" is active.'];
$GLOBALS['TL_LANG']['tl_calendar']['uniqueEvents'] = ['Unique events', 'Overlapping times are not allowed for active non recurring events.'];
/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_calendar']['extended_legend'] = 'Color and opacity for the events of this calendar';
$GLOBALS['TL_LANG']['tl_calendar']['extended_type_legend'] = 'Calendar Type';

/*
 * This file is part of the Contao Event Registration extension.
 *
 * (c) INSPIRED MINDS
 *
 * @license LGPL-3.0-or-later
 */
$GLOBALS['TL_LANG']['tl_calendar']['reg_legend'] = 'Registration';
$GLOBALS['TL_LANG']['tl_calendar']['reg_confirm_page'] = ['Redirect page for confirmation', 'The target page where the event registration confirmation module is integrated. If no page is defined, the redirect page of the calendar is used.'];
$GLOBALS['TL_LANG']['tl_calendar']['reg_cancel_page'] = ['Redirect page for cancellation', 'The target page where the event registration cancellation module is integrated. If no page is defined, the redirect page of the calendar is used.'];

$GLOBALS['TL_LANG']['tl_calendar']['categories_label'] = array('Categories', 'edit categories');

/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['tl_calendar']['AllowEdit'] = array('Enable Frontend editing', 'Allow Frontend-Users to add and edit events in this calendar.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_onlyFuture'] = array('Only future events', 'Allow editing only for future events.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_jumpTo'] = array('Redirect page for editing', 'Please choose the event editor page to which the user will be redirected when clicking an edit link.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_loginRequired'] = array('Login required for Frontend editing (strongly recommended)', 'If this is checked, only registered user (from the groups below) are allowed to add/edit events. WARNING: Otherwise EVERYBODY can add/edit events.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_onlyUser'] = array('Allow editing only for owner', 'If this is checked, only the creator of an event will be able to edit it later. NOTE: If this is checked, and an unregistered user creates an event, only Frontend-Admins can edit this event.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_groups'] = array('Allowed member groups for editing', 'These groups will be able to add (and edit) events into this calendar.');
$GLOBALS['TL_LANG']['tl_calendar']['caledit_adminGroup'] = array('Frontend-Admins for editing', 'Frontend-Admins can edit all events, even if "only user" is checked.');
$GLOBALS['TL_LANG']['tl_calendar']['edit_legend'] = 'Frontend editing';

// vendor/contao/comments-bundle/contao/languages/en/tl_calendar.xlf
$GLOBALS['TL_LANG']['tl_calendar']['allowComments']['0'] = 'Enable comments';
$GLOBALS['TL_LANG']['tl_calendar']['allowComments']['1'] = 'Allow visitors to comment events.';
$GLOBALS['TL_LANG']['tl_calendar']['notify']['0'] = 'Notify';
$GLOBALS['TL_LANG']['tl_calendar']['notify']['1'] = 'Please choose who to notify when comments are added.';
$GLOBALS['TL_LANG']['tl_calendar']['sortOrder']['0'] = 'Sort order';
$GLOBALS['TL_LANG']['tl_calendar']['sortOrder']['1'] = 'By default, comments are sorted ascending, starting with the oldest one.';
$GLOBALS['TL_LANG']['tl_calendar']['perPage']['0'] = 'Comments per page';
$GLOBALS['TL_LANG']['tl_calendar']['perPage']['1'] = 'Number of comments per page. Set to 0 to disable pagination.';
$GLOBALS['TL_LANG']['tl_calendar']['moderate']['0'] = 'Moderate comments';
$GLOBALS['TL_LANG']['tl_calendar']['moderate']['1'] = 'Approve comments before they are published on the website.';
$GLOBALS['TL_LANG']['tl_calendar']['bbcode']['0'] = 'Allow BBCode';
$GLOBALS['TL_LANG']['tl_calendar']['bbcode']['1'] = 'Allow visitors to format their comments with BBCode.';
$GLOBALS['TL_LANG']['tl_calendar']['requireLogin']['0'] = 'Require login to comment';
$GLOBALS['TL_LANG']['tl_calendar']['requireLogin']['1'] = 'Allow only authenticated members to create comments.';
$GLOBALS['TL_LANG']['tl_calendar']['disableCaptcha']['0'] = 'Disable spam protection';
$GLOBALS['TL_LANG']['tl_calendar']['disableCaptcha']['1'] = 'Use this option only if you have limited comments to authenticated users.';
$GLOBALS['TL_LANG']['tl_calendar']['comments_legend'] = 'Comments';
