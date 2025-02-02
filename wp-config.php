<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'VNEWd3GbdFCZ9l43qmoHkulIyhaPLM5dTVCvaX2thBCOkJ1PjIAFldnoaIG0Mb9y');
//END Really Simple Security key
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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fai_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'q9zC<)}H9]nzJEO/QGROQ{1fz$N-%#fhWXXZklg!CWbno+XY`3f(C@et$M8gz^{.' );
define( 'SECURE_AUTH_KEY',  '~wM.U^&zGr<$#)WZqmT&A2$_kE9*ptO%i}@x5oPO+3cMk=I^O+L5yN>3Wd-Q27v*' );
define( 'LOGGED_IN_KEY',    'eZ-Y+R>^G67vxb+CUQp5.DJ;9,(aWFH!^B)$?R3d^K{n%BmP#KS;`:hyGk&&N1}W' );
define( 'NONCE_KEY',        'Qr92RG}+zd4FHl6YP,gcvj%k!Oyk`-ed@M*Z:KjtaUDmLp]$ZNI)}&iG-]Df)WA5' );
define( 'AUTH_SALT',        'HusMaRl5745^?/GD`l_v)k0M~67*~U:{TVs^>}j0%(d$Lyk4h(4 m@m48yk|1vg(' );
define( 'SECURE_AUTH_SALT', 'mRalXE584 9^VW$EZ77a!!/d-K`gh/u|K(joi<4vgkp*3e$0(OPVGXux:|Pt9bS&' );
define( 'LOGGED_IN_SALT',   'Uf|rIywCYtFngo6%12!):8[;V$xQKgK~Nsuv$)tPg}JZu.K.DtU&iQ%H3stULJrm' );
define( 'NONCE_SALT',       'u<u>HM#v+tqjnO.UE_ijO[BE)zA~SbGB;G1~Xq~8L ^v)$UW&W%K/;m}Qnb>lK:r' );

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
