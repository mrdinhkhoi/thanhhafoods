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
define('DB_NAME', 'tpsach');

/** MySQL database username */
define('DB_USER', 'tpsach');

/** MySQL database password */
define('DB_PASSWORD', 'kochodau1');

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
define('AUTH_KEY',         'Q|g9>-ErTz)6bjc}/v`y`N<]SKGHyN$SoyWgc:1BqTflCAZp/6CFQ?VEKlBUAhr/');
define('SECURE_AUTH_KEY',  '|WYLMFBFmJG4]fkOs:~65j8qQoZxp0a$sy@U24M%X7tyd~L2#J1SECe Q9]qf4DQ');
define('LOGGED_IN_KEY',    '7H8GaXu/;D`1#x{*O`;/cB;.{@.zNq%_rAV9x^ERD}h.IC<7h-8vfL)w20-<`c4B');
define('NONCE_KEY',        '$&$#U.OXHeSCmYH:3<8l%c/UF#kNRQ!I0!ZsD|DS.guA^ovym[ivghCwx3g@Vtuq');
define('AUTH_SALT',        '38^YBYO=$bCp!nr*x8Gm8&^,!):9NLSQ6`x9/]+.vVTNzv6*(n0-L!?pUh;AN;u7');
define('SECURE_AUTH_SALT', '(6y, )v9htups^kzb];tTu@?m6#v[P`I5p4N[u8%x]x6d>u89OayI`T8&JN9cbzK');
define('LOGGED_IN_SALT',   '^_ pe6G=u1OW-$<JzUe#XD|v?CGFkr9xxCFxO0 1N>J#5hX+!kto#y6G72GF>7H=');
define('NONCE_SALT',       '!&+3Iq{dp/7m,=yO~iu3E<EujV%DF81-|cZ0~W:8K_,%0)Ebb6HKzXnMG_(TQaRi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
