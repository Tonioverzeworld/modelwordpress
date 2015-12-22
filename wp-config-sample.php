<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

//wp-content se trouve dans le même répertoire que wp-config.php
//Pour une compatibilité PHP5.2, je n'utilise pas __DIR__
define('WP_CONTENT_DIR', dirname(__FILE__).'/wp-content');
//L'URL doit être absolue vers le répertoire wp-content
define('WP_CONTENT_URL', 'http://www.ecuador-experience.com/wp-content');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ecuadore_xperience');

/** MySQL database username */
define('DB_USER', 'ecuadore_xperien');

/** MySQL database password */
define('DB_PASSWORD', 'pJpms*3=br;[');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6n2qmlaxhiosbdznvma24koycrmuxhsvjvwc3hvp8x4r4y2xu1lhjaoxxe9irsl8');
define('SECURE_AUTH_KEY',  'jo3uhhb2svjdr9lqukaqxdpnpuiykww9q0vld2fbvfr0kphxvgfglttxpee2bazi');
define('LOGGED_IN_KEY',    'okyvhwkclp800prk8knwg3pwihu6b4wmxsp1llgmapol27ag6y1gocei6tdi7kcg');
define('NONCE_KEY',        'avkayiyfz4k1k0j2f9rv3lf4qp7xsmropwus81atjnx3yanggqvjyjkrzqxl7s3h');
define('AUTH_SALT',        'upv6spolf113auhmf05qzwlgyuzy3hw7uavwwtafllbs015r0qy4z8unu2idgnzq');
define('SECURE_AUTH_SALT', 'oz0dr7gwwvmpymxnq3oj9rvfao4yqk4rwuovuqsgria7iryh1fsuec1i5bwndqui');
define('LOGGED_IN_SALT',   'hijipd8inomh2mlvilhfhfjaudkalhzebl8dcumihwjiisy7pjytzpga0uuwarlo');
define('NONCE_SALT',       'mjh6ejuk9aiunyjhxhxaqkzbzuzioivspqw57osnojelrjfh92knti5hq5xwuhor');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpEE_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
