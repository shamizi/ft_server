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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '$HVP$iCB7&bQ+>qfe|z|&xK7zgPD6Ue-pYY[,,C);}fUVf/OuLwY-8-deb+q]iG2');
define('SECURE_AUTH_KEY',  'v/lZ@dMA3W|$tZF/sER_~uG+ztNq}z0a%CB.U#o`mWUz8FEPeCg|_Xbib&:hS}8]');
define('LOGGED_IN_KEY',    '9GP]cypt.FN7<:KZUTzG&O2qJ-%(&G8<)PQ}&|vAf#~:V6DCvjg-H*O}pp ;E594');
define('NONCE_KEY',        '< ^;Li!=ELq<t|JZk,w6v,d?y(t$e:h-QU_,5mH}{bxExY[bnFY=]+D+tT!H-}uS');
define('AUTH_SALT',        'bcjwqQ|T.LYN5b+XtOk8lrYc#S>.,FgD@uw$r@+ZNOA*TeaF)7X[Js  kQXji[uV');
define('SECURE_AUTH_SALT', '7]g!L)2}|q]K*u~;3mme:DI44`xAF-c11K*<eR.Sg?xNPlsf2CDVLyOmp||LdaBd');
define('LOGGED_IN_SALT',   '%#OW?:xZWhDzTQQYB<!LO|Jmh-dm_c*CzA,81I-tQ8`%J;Xe}C.<x<EQDcBf{ub ');
define('NONCE_SALT',       'bhSscEIz)#B2~9Ga0UjhZ,CiF-8|6@0qE7/O6*eu<E|(U;E^U1CvD<Z`y$UT)_#b');

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
