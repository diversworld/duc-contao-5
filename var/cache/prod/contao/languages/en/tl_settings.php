<?php

// vendor/contao/core-bundle/contao/languages/en/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['adminEmail']['0'] = 'E-mail address of the system administrator';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail']['1'] = 'This e-mail address will be used to send and receive system messages.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat']['0'] = 'Date format';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat']['1'] = 'The date format string will be parsed with the PHP date() function.';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat']['0'] = 'Time format';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat']['1'] = 'The time format string will be parsed with the PHP date() function.';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat']['0'] = 'Date and time format';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat']['1'] = 'The date and time format string will be parsed with the PHP date() function.';
$GLOBALS['TL_LANG']['tl_settings']['timeZone']['0'] = 'Time zone';
$GLOBALS['TL_LANG']['tl_settings']['timeZone']['1'] = 'Please select the server time zone.';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage']['0'] = 'Items per page';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage']['1'] = 'Here you can define the number of items per page in the back end.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage']['0'] = 'Maximum items per page';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage']['1'] = 'This overall limit takes effect if a user chooses the "show all records" option.';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags']['0'] = 'Allowed HTML tags';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags']['1'] = 'Here you can enter a list of allowed HTML tags that will not be stripped.';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributes']['0'] = 'Allowed HTML attributes';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributes']['1'] = 'List of allowed HTML attributes that will not be stripped. The tag or attribute name <code>*</code> stands for all tags or attributes. Wildcards can be used for attributes with dashes like <code>data-*</code>.';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributesWarning'] = 'Allowing <code>*</code> attributes can be exploited for XSS attacks. Only do this if all backend users are trusted!';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload']['0'] = 'Download file types';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload']['1'] = 'Here you can enter a comma separated list of downloadable file types.';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes']['0'] = 'Upload file types';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes']['1'] = 'Here you can enter a comma separated list of uploadable file types.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize']['0'] = 'Maximum upload file size';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize']['1'] = 'Here you can enter the maximum upload file size in bytes (1 MB = 1000 kB = 1000000 byte).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth']['0'] = 'Maximum image width';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth']['1'] = 'Here you can enter the maximum width for image uploads in pixels.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight']['0'] = 'Maximum image height';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight']['1'] = 'Here you can enter the maximum height for image uploads in pixels.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod']['0'] = 'Storage time for undo steps';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod']['1'] = 'Here you can enter the storage time for undo steps in seconds (24 hours = 86400 seconds).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod']['0'] = 'Storage time for versions';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod']['1'] = 'Here you can enter the storage time for different versions of a record in seconds (90 days = 7776000 seconds).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod']['0'] = 'Storage time for log entries';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod']['1'] = 'Here you can enter the storage time for log entries in seconds (14 days = 1209600 seconds).';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser']['0'] = 'Default page owner';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser']['1'] = 'Here you can select a user as the default owner of a page.';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup']['0'] = 'Default page group';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup']['1'] = 'Here you can select a user group as the default owner of a page.';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod']['0'] = 'Default access rights';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod']['1'] = 'Please assign the default access rights for pages and articles.';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Date and time';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Global configuration';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Back end configuration';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Security settings';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Files and images';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Upload settings';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Timeout values';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Default access rights';
$GLOBALS['TL_LANG']['tl_settings']['configuredInApp'] = 'This setting has been defined in the app configuration and cannot be changed here anymore.';

/*
 * This file is part of Gallery Creator Bundle.
 *
 * (c) Marko Cupic 2024 <m.cupic@gmx.ch>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/gallery-creator-bundle
 */
/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_settings']['gallery_creator_chmod_legend'] = 'Gallery Creator default access rights';
/*
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['gcDefaultUser'] = ['Default album owner', 'Here you can select a user as the default owner of an album. If you keep the field empty, the currently logged in backend user will become the album owner.'];
$GLOBALS['TL_LANG']['tl_settings']['gcDefaultGroup'] = ['Default album user group', 'Here you can select a user group as the default owner of an album.'];
$GLOBALS['TL_LANG']['tl_settings']['gcDefaultChmod'] = ['Gallery Creator default access rights', 'Please select the default access rights for albums and child albums.'];

// vendor/markocupic/gallery-creator-bundle/contao/languages/en/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['gallery_creator_chmod_legend'] = 'Gallery Creator default access rights';
$GLOBALS['TL_LANG']['tl_settings']['gcDefaultUser']['0'] = 'Default album owner';
$GLOBALS['TL_LANG']['tl_settings']['gcDefaultUser']['1'] = 'Here you can select a user as the default owner of an album. If you keep the field empty, the currently logged in backend user will become the album owner.';
$GLOBALS['TL_LANG']['tl_settings']['gcDefaultGroup']['0'] = 'Default album user group';
$GLOBALS['TL_LANG']['tl_settings']['gcDefaultGroup']['1'] = 'Here you can select a user group as the default owner of an album.';
$GLOBALS['TL_LANG']['tl_settings']['gcDefaultChmod']['0'] = 'Gallery Creator default access rights';
$GLOBALS['TL_LANG']['tl_settings']['gcDefaultChmod']['1'] = 'Please select the default access rights for albums and child albums.';

// vendor/bugbuster/contao-dlstats-bundle/src/Resources/contao/languages/en/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['dlstatAnonymizeIP4']['0'] = 'Anonymization level for IPv4';
$GLOBALS['TL_LANG']['tl_settings']['dlstatAnonymizeIP4']['1'] = 'Here, you can change the level of anonymization for IPv4.';
$GLOBALS['TL_LANG']['tl_settings']['dlstatAnonymizeIP6']['0'] = 'Anonymization level for IPv6';
$GLOBALS['TL_LANG']['tl_settings']['dlstatAnonymizeIP6']['1'] = 'Here, you can change the level of anonymization for IPv6.';
$GLOBALS['TL_LANG']['tl_settings']['dlstatDisableBotdetection']['0'] = 'Disable Bot Detection filtering';
$GLOBALS['TL_LANG']['tl_settings']['dlstatDisableBotdetection']['1'] = 'Disable the filtering of counting by the extension Bot Detection';
$GLOBALS['TL_LANG']['tl_settings']['dlstatLastDownloads']['0'] = 'Number of items for the last downloads';
$GLOBALS['TL_LANG']['tl_settings']['dlstatLastDownloads']['1'] = 'In the statistic the number of items for the last downloads';
$GLOBALS['TL_LANG']['tl_settings']['dlstatTopDownloads']['0'] = 'Number of items for the TOP downloads';
$GLOBALS['TL_LANG']['tl_settings']['dlstatTopDownloads']['1'] = 'In the statistic the number of items for the TOP downloads';
$GLOBALS['TL_LANG']['tl_settings']['dlstatdets']['0'] = 'Enable detailed logging and statistic';
$GLOBALS['TL_LANG']['tl_settings']['dlstatdets']['1'] = 'Activate to additional logging for IP, Domain and Member name.';
$GLOBALS['TL_LANG']['tl_settings']['dlstats']['0'] = 'Enable counting';
$GLOBALS['TL_LANG']['tl_settings']['dlstats']['1'] = 'Activate to counting of downloads.';
$GLOBALS['TL_LANG']['tl_settings']['dlstats']['anonip4']['1'] = 'Octets: 1 (Contao Default)';
$GLOBALS['TL_LANG']['tl_settings']['dlstats']['anonip4']['2'] = 'Octets: 2';
$GLOBALS['TL_LANG']['tl_settings']['dlstats']['anonip6']['2'] = 'Groups: 2 (Contao Default)';
$GLOBALS['TL_LANG']['tl_settings']['dlstats']['anonip6']['3'] = 'Groups: 3';
$GLOBALS['TL_LANG']['tl_settings']['dlstats']['anonip6']['4'] = 'Groups: 4';
$GLOBALS['TL_LANG']['tl_settings']['dlstats_legend'] = 'Download statistics';
$GLOBALS['TL_LANG']['tl_settings']['dlstatStatresetProtected']['0'] = 'Activation of the protection against the statistic reset';
$GLOBALS['TL_LANG']['tl_settings']['dlstatStatresetProtected']['1'] = 'Allow resetting the download statistic only certain user groups only.';
$GLOBALS['TL_LANG']['tl_settings']['dlstatStatresetAdmins']['0'] = 'Administrators';
$GLOBALS['TL_LANG']['tl_settings']['dlstatStatresetAdmins']['1'] = 'Administrators have unlimited access to the download statistic.';
$GLOBALS['TL_LANG']['tl_settings']['dlstatStatresetGroups']['0'] = 'Allowed user groups';
$GLOBALS['TL_LANG']['tl_settings']['dlstatStatresetGroups']['1'] = 'Here you can choose which groups will be allowed to resetting the download statistic.';

// vendor/numero2/contao-proper-filenames/src/Resources/contao/languages/en/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['checkFilenames']['0'] = 'Check filenames';
$GLOBALS['TL_LANG']['tl_settings']['checkFilenames']['1'] = 'Checks filenames after uploading and replaces any forbidden special characters';
$GLOBALS['TL_LANG']['tl_settings']['doNotTrimFilenames']['0'] = 'Do not trim filenames';
$GLOBALS['TL_LANG']['tl_settings']['doNotTrimFilenames']['1'] = 'By default all renamed files with be trimmed to 32 characters.';
$GLOBALS['TL_LANG']['tl_settings']['filenameValidCharacters']['0'] = 'Valid filename characters';
$GLOBALS['TL_LANG']['tl_settings']['filenameValidCharacters']['1'] = 'Here you can select a custom character set for automatically renamed files.';
$GLOBALS['TL_LANG']['tl_settings']['filenameValidCharactersLocale']['0'] = 'Conversion locale';
$GLOBALS['TL_LANG']['tl_settings']['filenameValidCharactersLocale']['1'] = 'Here you can define a specific locale for the automatically renamed files. For example, selecting German will convert \'ö\' to \'oe\' instead of \'o\'.';
$GLOBALS['TL_LANG']['tl_settings']['excludeFileExtensions']['0'] = 'Exclude files by extensions';
$GLOBALS['TL_LANG']['tl_settings']['excludeFileExtensions']['1'] = 'Here you can define a comma seperated list of file extensions that won\'t be renamed.';

/**
 * @copyright  Softleister 2007-2024
 * @author     Softleister <info@softleister.de>
 * @package    BackupDB - Database backup
 * @license    LGPL
 * @see	       https://github.com/do-while/contao-BackupDB
 */
/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['backupdb_saveddb'] = array('Data tables in website template', 'Enter a comma-separated list of table prefixes or tables to be included in the website template. All tables of the Contao core start with <em>tl_</em>, catalog tables may have the prefix <em>cat_</em>.');
$GLOBALS['TL_LANG']['tl_settings']['AutoBackupCount'] = array('Number of backups at AutoBackupDB', 'Number of backup files that are created by AutoBackupDB, the default is 3. The most recent backup is always in the file <em>AutoBackupDB-1.sql</em>.');
$GLOBALS['TL_LANG']['tl_settings']['WsTemplatePath'] = array('Alternative path for website templates', 'Default path is <em>templates</em>. You can specify a different directory where the website templates ar stored.');
$GLOBALS['TL_LANG']['tl_settings']['backupdb_blacklist'] = array('Blacklist for backups', 'Comma-separated list of tables for which the data is NOT being backed up. For example <em>tl_lock, tl_log, tl_search, tl_search_index, tl_session, tl_undo, tl_version</em> are not essential for recovery.');
$GLOBALS['TL_LANG']['tl_settings']['backupdb_sendmail'] = array('E-mail notification after AutoBackup', 'Sends a mail after a successful backup to the administrator.');
$GLOBALS['TL_LANG']['tl_settings']['backupdb_attmail'] = array('Append AutoBackup file', 'Append the backup file to the notification e-mail.');
$GLOBALS['TL_LANG']['tl_settings']['backupdb_zip'] = array('Compress backup with restore informations', 'The ZIP file also contains the <em>composer.json</em>, <em>composer.lock</em> and a PHP script for the restore of symlinks.');
$GLOBALS['TL_LANG']['tl_settings']['backupdb_var'] = array('Individual call parameter', 'To protect the AutoBackup call from spamming, a variable can be specified here. If the variable is not included in the call, no backup takes place. Call with variable transfer: www.domain.tld/BackupDB/autobackup?variable');
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_settings']['backupdb_legend'] = 'BackupDB settings';

\Contao\System::loadLanguageFile('tl_page');
$GLOBALS['TL_LANG']['tl_settings']['news_categories_legend'] = 'News categories';
$GLOBALS['TL_LANG']['tl_settings']['news_categorySlugSetting'] =& $GLOBALS['TL_LANG']['tl_page']['validAliasCharacters'];
