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
define('DB_NAME', 'mimart5_wp701');

/** MySQL database username */
define('DB_USER', 'mimart5_wp701');

/** MySQL database password */
define('DB_PASSWORD', 'Xp@S910C9(');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'hqhgfsbrayiyhfg5lovl8kxls4zopqunvb1rvhqnf9ey6jw0bwy4uliqi0701sks');
define('SECURE_AUTH_KEY',  'n4bcvdul97wc6zpiihgy29ldgzozkxawmjy3ssddtrrkkn5w0qjb5yrjuzfsrpiv');
define('LOGGED_IN_KEY',    'pctnqeqvbhf2dcwqdp802dklv9mavoeovxcpxfkdhwmncjwepvxir0muvekdudjr');
define('NONCE_KEY',        'ivaeltlf2jmunj7ojsvkrz4seh3l7gr8ecd8rhnrzgkhwbq23ssjzskunj6kkas2');
define('AUTH_SALT',        'xx9dptfxo8dkf9fpothqteoptcolbefjozjn1yadptwe4xq6gpedb9ytl5vmniwt');
define('SECURE_AUTH_SALT', 'ij6xxhr5fpsyoukoak5v9rh7yqne7yzydd2e9zzlmiuwmbphplnbyeklxlnjypci');
define('LOGGED_IN_SALT',   'vtlgutlrw6lxlvhcob4mfokz3lmj99gof0cjw72lw5bzrffnokqodk608lq0nfzd');
define('NONCE_SALT',       'fezznxkdo8caqerbnzffuc0hbuvmubs4gz7jvxyvmkowgx9xw04vfadggwjevqz1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1o_';

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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
