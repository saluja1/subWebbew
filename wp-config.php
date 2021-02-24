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
define( 'DB_NAME', 'webbewi1_webbewNewdb' );

/** MySQL database username */
define( 'DB_USER', 'webbewi1_webbewNewUser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'webbewNewUser123@@' );

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
define( 'AUTH_KEY',         '5&zW5k(J8#JWj4uzYNw>@==?!Pbi`Y~; e.V*6X.PxteG|dsfd)t52Sll2N?7Wp,' );
define( 'SECURE_AUTH_KEY',  'w,(p3#ALE.,UdDuNe9j3T7?]m@ZoQ GSH;GZKT.dtdio)PIXod/SO>epj14_(Kr#' );
define( 'LOGGED_IN_KEY',    'NB s~~%uh?_u*^r-w`TS^oqFDB=ZXU#Zc[e5rZKO@Hyl_6qBQF0Ccj`L[*(n~#K>' );
define( 'NONCE_KEY',        '%^#`)%sjHEu[&M6cq7czt_`^!b@;~,e<eX>cRO,A]_qxTK47S^5xaHLf>&xST-po' );
define( 'AUTH_SALT',        'ag9YV1tccBs2D`JD%}2W5wr/-rCYJfP:eH%`0wd,CwHu!k338+[7qL#/Fb~`}=@`' );
define( 'SECURE_AUTH_SALT', '%g[`6sRbux-0$1j:FJC&d98i4sY,(gj(}EiisRRf44`Rxr3&8R7d`}Ur^N(`v_U_' );
define( 'LOGGED_IN_SALT',   '@_|[+UGOvqzre!Ly7`|j+j(e0s/_kfR4WLw.BpA;Uf83&j  5#K29|V.YO!Bof6P' );
define( 'NONCE_SALT',       '[^}~OF+u`Y1,ZUnY_O8rup4KC-j>}BGzOb@?YeXPan5&WHe%wG@r5-v{~9+0xf#g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpab_';

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
