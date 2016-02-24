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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'qvgk1vybx4sgsfw6bxxrmk0hbua3fqdqypuvvnddvuz5cpprvtkufi44nzqcmwyr');
define('SECURE_AUTH_KEY',  'saxb9dsua4bx4rpi19aqijs30wfpe2abnnx9aeg6rpqrbr4phtmof5ay1usyhhvz');
define('LOGGED_IN_KEY',    'ztv6bjuye6kobnbhlb4fvo0cb0drkejbmxwobfbwk9vgbnmlmsqctd9gysaao4ah');
define('NONCE_KEY',        'nnf5f31n3izctnca8depagqfmhwxqvkueyo3cts51gv7b0hrxlsbg2c54yceqpnv');
define('AUTH_SALT',        'ziurukex967phlenazwp7ytaju117cuyaa8vz6efayga8a2jro1vwjqcis38ff5v');
define('SECURE_AUTH_SALT', 'czzey1yclhq74gyunsollvps5g9knnlgxxnbx09lx8tmx56seoa1t1em61uaemgw');
define('LOGGED_IN_SALT',   'c343ikkfcgjefwio1e2o8cs9q7ak0renvi747vcby9kasf3imbdo4comwr2ih7yp');
define('NONCE_SALT',       'uutgzmz6jmrcm7aipyustroxnfru4u6uxwo6qmvbcqrmt5oheook4htzsnwr3sxn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppu_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
