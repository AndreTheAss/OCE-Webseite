<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

define('DB_NAME', 'appdb');
define('DB_USER', 'appuser');
define('DB_PASSWORD', 'BitteAendern123!');
define('DB_HOST', 'dbwp');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
/* Optional: Direktes Schreiben für Updates/Plugins */
define('FS_METHOD', 'direct');


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
define('AUTH_KEY',         'Ccm]esT^#9O_Z]stt-5pzM>->y0o~.sB]p<ZT C[+pSsUH-!bqb;R/0-WYD#TcFn');
define('SECURE_AUTH_KEY',  '@9)Gy;2L-|it&Mg=E+~,.*!*e!pK3h#Fy_NVK,7g+mwD@{lh&?N-E^|9:Kd^k$#A');
define('LOGGED_IN_KEY',    ';Dbm/ ZJf^O_v(-M&gdd:w K^P1[S,s*912!c}alef!%D^yT&8snt8q+1_#-+38k');
define('NONCE_KEY',        'iEcg8-|;e4U|z~}MHCh=wkPNC+le7tsp:9D@Jb__hfP;bMzf!UhYs)-u0;Yn&6Ai');
define('AUTH_SALT',        'mt4[T}V>/[Pq4Lw=p-8f-3(ZAqkvC9Ph_pg];>j<j[%,.oS@(xr.)--B+Nbb8&~u');
define('SECURE_AUTH_SALT', 't+TBW_snT1w;u!OKz6xh1n?X[F:7|,gp~9%yD5B*uA@%pR=NPNV>T4#f{4^M(.!g');
define('LOGGED_IN_SALT',   'Q&hQgYqH]f*j}R$FMr-+Y+VAf p.QE(,=D6o-e7)GNS.@m.<E)_j0K!HdmvtJiwP');
define('NONCE_SALT',       'jk=<M:t68y<44%yjV8{L0_+giRD,sC!LO~vqz$|N|O[aLE0B>^3Kg>91!zljKH}l');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
