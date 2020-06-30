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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Read MySQL service properties from _ENV['VCAP_SERVICES']
$services = json_decode($_ENV['VCAP_SERVICES'], true);
$service = $services['mysql'][0]; // pick the first MySQL service

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $service['credentials']['name']);

/** MySQL database username */
define('DB_USER', $service['credentials']['username']);

/** MySQL database password */
define('DB_PASSWORD', $service['credentials']['password']);

/** MySQL hostname */
define('DB_HOST', $service['credentials']['host'] . ':' . $service['credentials']['port']);


define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);
define('MYSQL_SSL_CAPATH', "/etc/ssl/certs");
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         '+uVxa-tiP^9iJDK{2<^)*`(^cYv//}xW%I~kdxnUbC 4NUKO<iX{Gja1E-@|t:1 ');
define('SECURE_AUTH_KEY',  'VYi&OoG$ |NFhpEU*ik?33-s-c?Q^$L7AL@oCV9,X$L:OP+Y4%zR:/f*d@|=4zN%');
define('LOGGED_IN_KEY',    'OfW|$+ dxo!jNF/>4C;zU`B&7A-LSSuk!?&q61Z#w|J|_) 6i@l3[Q7aoR}_<CE3');
define('NONCE_KEY',        ',zTrT~-tG)BdDOcgl*yA]!,OiO=!b/Acx?VY3vuPrn|p5B(Knm57r5U*Qf]WH&X:');
define('AUTH_SALT',        '.K)q$h:la(~I)F90iBOdMO HLLI/{N_mf+|Z&5j[r* Y%k~H0[zpe6-Wi+6ykkkT');
define('SECURE_AUTH_SALT', '%oWj}@F|R/3*?AxjmFSm`-d-AYJu*swpl{Oh*+!j?wQ8sXl}g3^. ^nr}xKy7+qC');
define('LOGGED_IN_SALT',   'd;*+zT)k:k~+!7X7Xpcb~D{~JmfZ7zbl9{jJXaB4g=or)r:pBFAT9%TWKt} .{iL');
define('NONCE_SALT',       '2x,|x>C=A/gCDu[!5-&0(4+::H-P8Hj,9]Q|bke[#mEL.(| n4[JX?<4VY#X4tzD');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
