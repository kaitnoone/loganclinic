<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db225516_loganclinic');

/** MySQL database username */
define('DB_USER', 'db225516_knoone');

/** MySQL database password */
define('DB_PASSWORD', 'Pickle1973!');

/** MySQL hostname */
define('DB_HOST', $_ENV{DATABASE_SERVER});

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
define('AUTH_KEY', 'xXOwMN0rEDrIhEyCUGLTbLMgfD0m4Avog8QaimzdlsCaNiIUzstVe3qQxcSr01Ez');
define('SECURE_AUTH_KEY', 'MHkIUIWDZSgQxoA2CX3m3c74xb30yvDNODoozV10n3nUkqxrmkXhBW1wyFf3oUkH');
define('LOGGED_IN_KEY', 'HIXtvlb0Y9ofgIrow0ua4vZsbBTdDfyvEhDtlhT6FUolaSGqiXCT1ItkWIyHeEBl');
define('NONCE_KEY', 'yVS4r9pjvGGtO0TKWEqWolCwloXH1jVToRGHhx4IAZ30cDVwxheVsUBGpUe3PbTD');
define('AUTH_SALT', 'eYk1MkIBJbaBCWD9hm5dT8zkYkGDi1C41k9I8OnP4JA0PqPeZDwufKPh8ltx0W6L');
define('SECURE_AUTH_SALT', 'QmkpqZqdlr55ina1SzKj6PAKqwEp6qZVVkb4FM0Xk2kyakCZH8LKfIiX09P0pJ85');
define('LOGGED_IN_SALT', 'VBziN5iaJE5lIivca4fVtxuPlfFTsahhMDC3azq2qbvwZaERoCVmCrPdHcoUMsPp');
define('NONCE_SALT', 'ZzZsx0ta6KKs5UCZnZSNNKiiE7Kq4p6BMJj57qwu5N9LQGFovqWHzvm8pNhqgLv8');

/**
 * Other customizations.
 */
define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', 0755);
define('FS_CHMOD_FILE', 0644);
define('WP_TEMP_DIR', dirname(__FILE__) . '/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tqrf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';