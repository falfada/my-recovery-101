<?php

/**
 * WordPress Website configuration bootstrap.
 */

/** Environment configuration loaded. */
$config = require_once dirname(__DIR__) . '/config/site-config.php';

/** Sets up WordPress variables with the config variables. */
$vars_to_load = [
  'CORE_UPGRADE_SKIP_NEW_BUNDLED',
  'DB_CHARSET',
  'DB_COLLATE',
  'DB_HOST',
  'DB_NAME',
  'DB_PASSWORD',
  'DB_TABLE_PREFIX',
  'DB_USER',
  'SITE_EXCERPT_LENGTH',
  'SITE_POSTS_PER_PAGE',
  'SMTP_AUTH',
  'WP_DEBUG',
  'WP_DEBUG_DISPLAY',
  'WP_DEBUG_LOG',
  'WP_DEFAULT_THEME',
  'WP_ENVIRONMENT_TYPE',
  'WP_HOME',
  'WP_MEMORY_LIMIT',
  'WP_POST_REVISIONS',
  'WP_SITEURL',
];

foreach ($vars_to_load as $global_var) {
  defined($global_var) or define($global_var, $config[$global_var]);
}

unset($vars_to_load);

/** SMTP configuration. */
// if (SMTP_AUTH) {
//   define('SMTP_HOST', $config['SMTP_HOST']);
//   define('SMTP_FROM', $config['SMTP_FROM']);
//   define('SMTP_FROM_NAME', $config['SMTP_FROM_NAME']);
//   define('SMTP_PASSWORD', $config['SMTP_PASSWORD']);
//   define('SMTP_PORT', $config['SMTP_PORT']);
//   define('SMTP_SECURE', $config['SMTP_SECURE']);
//   define('SMTP_USERNAME', $config['SMTP_USERNAME']);
// }

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = $config['DB_TABLE_PREFIX'];

/** Disable file editor in admin. */
define('DISALLOW_FILE_EDIT', true);


/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y~}[63sVc%p&xwcF-cIsR~X-dOK3oI3)zzi.S|t3myD=I_ |:X<$5u+{#?|`|5_q');
define('SECURE_AUTH_KEY',  'uSpWv|||UKpAGm;IgZMnC >k72 -uDM;OpWNv:EZ8nXXH&9~EC77+M-7]7LlH[]Q');
define('LOGGED_IN_KEY',    'Eac|0q!~qE0FilCfl..(~.ARN+o$:J5rxeQ;N!JL|I8;gI!u}EXE2x,Dt@>6 >}:');
define('NONCE_KEY',        'd<Yb;)zHN9>E*<mI=V?`Wojz%r)YSQa^3yd~VndD24 2lzR+JnEk-+)$j=)]qtju');
define('AUTH_SALT',        'c]rrA;vc15|4ig&G>LmrHP+!riVpL2W5H!O{.Pl;}gL-Xa`BWDsyykor%m7{+^?z');
define('SECURE_AUTH_SALT', 'ghuW8Iz)M^|:UiXo(@qa(/wOT4-V)sp*t^wh+(7y3rvpL/>aS*nI(OS-14U|=*1M');
define('LOGGED_IN_SALT',   'l;:97 bXAf,C(JxSr7/+_qC>b-hRBn|8[CB09um~vu{Wk2(@l@HEE`--aA+aE?h*');
define('NONCE_SALT',       'P%RQxP!m?!}@>-KVZ9:-7M/Dg E+qi2K.@c)Je20EwIv#bN&_mI`wCJdb;,lF|.-');
/**#@-*/

/** WordPress absolute path to the Wordpress directory. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
