<?php

$CONFIG = array(


'instanceid' => 'oc_^^random(14)^^',
'passwordsalt' => '_^^random(14)^^',

'trusted_domains' =>
  array (
   0 => '^^domain.fqdn^^',
   2 => 'localhost',
  ),

'datadirectory' => '/var/www/data',
'version' => '',
'dbtype' => 'mysql',
'dbhost' => '^^mariadb.hostname^^',
'dbuser' => '^^mariadb.username^^',
'dbname' => '^^mariadb.database_name^^',
'dbpassword' => '^^mariadb.password^^',
'dbtableprefix' => '',
'installed' => false,
'default_language' => 'en',
'defaultapp' => 'files',
'knowledgebaseenabled' => true,
'enable_avatars' => true,
'allow_user_to_change_display_name' => true,
'remember_login_cookie_lifetime' => 60*60*24*15,
'session_lifetime' => 60 * 60 * 24,
'session_keepalive' => true,
'skeletondirectory' => '',
'mail_domain' => '_^^domain.identifier^^',
'mail_from_address' => 'owncloud@^^domain.identifier^^',
'mail_smtpdebug' => false,
'mail_smtpmode' => 'smtp',
'mail_smtphost' => '^^smtp_host^^',
'mail_smtpport' => 25,
'mail_smtptimeout' => 10,
'mail_smtpsecure' => false,
'mail_smtpauth' => false,
'mail_smtpauthtype' => 'LOGIN',
'mail_smtpname' => '',
'mail_smtppassword' => '',
'overwritehost' => '',

'overwriteprotocol' => '',

'overwritewebroot' => '',
'overwritecondaddr' => '',
'overwrite.cli.url' => '',
'trashbin_retention_obligation' => 30,


'trashbin_auto_expire' => true,
'appcodechecker' => false,
'updatechecker' => true,
'has_internet_connection' => true,
'check_for_working_webdav' => true,
'check_for_working_htaccess' => true,
'log_type' => 'owncloud',
'logfile' => '/var/log/owncloud.log',
'loglevel' => 1,
'logdateformat' => 'F d, Y H:i:s',

/**
 * The default timezone for logfiles is UTC. You may change this; see
 * http://php.net/manual/en/timezones.php
 */
'logtimezone' => '^^owncloud.timezone_country_city^^',

/**
 * Append all database queries and parameters to the log file. Use this only for
 * debugging, as your logfile will become huge.
 */
'log_query' => false,

/**
 * Log successful cron runs.
 */
'cron_log' => true,
'log_rotate_size' => false,
'3rdpartyroot' => '',
'3rdpartyurl' => '',

'customclient_desktop' =>
        'http://owncloud.org/sync-clients/',
'customclient_android' =>
        'https://play.google.com/store/apps/details?id=com.owncloud.android',
'customclient_ios' =>
        'https://itunes.apple.com/us/app/owncloud/id543672169?mt=8',
'apps_paths' => array(
        array(
                'path'=> '/var/www/owncloud/apps',
                'url' => '/apps',
                'writable' => true,
        ),
),

'enable_previews' => true,
'preview_max_x' => null,
'preview_max_y' => null,
'preview_max_scale_factor' => 10,
'preview_libreoffice_path' =>  '/usr/lib/libreoffice/program/soffice',
/**
 * Use this if LibreOffice/OpenOffice requires additional arguments.
 */
'preview_office_cl_parameters' =>
        ' --headless --nologo --nofirststartwizard --invisible --norestore '.
        '-convert-to pdf -outdir ',
'enabledPreviewProviders' => array(
        'OCPreviewImage',
        'OCPreviewMP3',
        'OCPreviewTXT',
        'OCPreviewMarkDown'
),
'maintenance' => false,
'singleuser' => false,
'forcessl' => false,
'blacklisted_files' => array('.htaccess'),
'share_folder' => '/',
'theme' => '',
'xframe_restriction' => true,
'cipher' => 'AES-256-CFB',

'cache_path' => '',
'quota_include_external_storage' => false,
'filesystem_check_changes' => 1,
'asset-pipeline.enabled' => false,
'mount_file' => 'data/mount.json',
'filesystem_cache_readonly' => false,

'custom_csp_policy' =>
        "default-src 'self'; script-src 'self' 'unsafe-eval'; ".
        "style-src 'self' 'unsafe-inline'; frame-src *; img-src *; ".
        "font-src 'self' data:; media-src *",
'secret' => '^^random(32)^^',

);
