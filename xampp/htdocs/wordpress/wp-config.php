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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8(CHciUt#(yTf@lkL7oC=7g+LsSp!1z]ox&>%=5K*5U2nI(S0ej YHj~/0fn=PIS' );
define( 'SECURE_AUTH_KEY',  '.3l>9DBN9sd/H2#RdD+wrCy8Db){f_~64+&]8;&NFc@_;<lXvf17:`#2D^`Add?U' );
define( 'LOGGED_IN_KEY',    '4eF+{?|`^/e6 qRoyzz/|Nxz@q]`zX!uTg#jQw*Xl6,_qgv{i?wc?GZ8+(aF<Q k' );
define( 'NONCE_KEY',        '6AvC)TOa{aI~kcE-/i:`&TF1Fqle;+rT>{WIx2h1<5S.1i2qnklR2%iidR_c0}mW' );
define( 'AUTH_SALT',        '*s/DQIXDNu`IaLA+nMH}b>k,,O23zUSsCChJB46^&:rC`XIoe1.+x*~`j&4S;YkY' );
define( 'SECURE_AUTH_SALT', 'nV>2A8n:g;x7fg8da/*IKojn#%~pO_#tX_4{Y_`LA0/L@D:q5Z%{D*!R/s}30z,6' );
define( 'LOGGED_IN_SALT',   '{IZd-#R#2@JOy!uZ>yl8.LA6dB~k3O>wz.NgFd X<OQ<vxg]V>X2[cYEh`#w.{bV' );
define( 'NONCE_SALT',       'e{sLoU/Znu2,jH{nHQrxR}<n$8S&?;_G<MI+gZwR_E>o?{#m^I=n2s/CCyC.WZBO' );

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
