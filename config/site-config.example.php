<?php

/**
 * SITE CONFIGURATION.
 * 
 * @see https://developer.wordpress.org/apis/wp-config-php/
 * @see https://wordpress.org/documentation/article/debugging-in-wordpress/
 * @see https://wordpress.org/documentation/article/revisions/
 */
return [
    /** THEME SETTINGS. */
    'SITE_EXCERPT_LENGTH' => 40,
    'SITE_POSTS_PER_PAGE' => 6,

    /** WORDPRESS SETTINGS. */
    /** Skips the copy of new bundled plugins & themes. */
    'CORE_UPGRADE_SKIP_NEW_BUNDLED' => true,
    /** Database. */
    'DB_CHARSET' => 'utf8mb4',
    'DB_COLLATE' => 'utf8mb4_general_ci',
    'DB_HOST' => '127.0.0.1',
    'DB_NAME' => 'myrecovery101_local',
    'DB_PASSWORD' => 'root',
    'DB_TABLE_PREFIX' => 'cms_',
    'DB_USER' => 'root',
    /** SMTP. */
    'SMTP_AUTH' => false,
    'SMTP_HOST' => '',
    'SMTP_FROM' => '',
    'SMTP_FROM_NAME' => '',
    'SMTP_PORT' => '',
    'SMTP_PASSWORD' => '',
    'SMTP_SECURE' => '',
    'SMTP_USERNAME' => '',
    /** Debug. */
    'WP_DEBUG' => false,
    'WP_DEBUG_DISPLAY' => false,
    'WP_DEBUG_LOG' => false,
    /** Default Theme. */
    'WP_DEFAULT_THEME' => 'myrecovery101',
    /** Environment. */
    'WP_ENVIRONMENT_TYPE' => 'development',
    /** Site URL with trailing slash. */
    'WP_HOME' => "http://myrecovery101.test/",
    /** PHP memory limit. */
    'WP_MEMORY_LIMIT' => '256M',
    /** Limit the number of posts revisions that WordPress stores in the database. */
    'WP_POST_REVISIONS' => 3,
    /** CMS URL without trailing slash. */
    'WP_SITEURL' => "http://myrecovery101.test/cms",
];
