<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '7}s3 y2-Ri]2rIlTF,Z<PDBgd3dC915uk`u|jQ{vQ>:@TRKa(zNih[bD[h*oFi!7' );
define( 'SECURE_AUTH_KEY',  'LM!1yipoG9FdYiy3]Q<NtHu6rT#,B1$t2zfj@I;p=8sMq<-].)de2W@KX=87TiZl' );
define( 'LOGGED_IN_KEY',    'ZpY)>Y27@nHU,Qh&ef>w+Bz(3=t-Fx3D2cn)ou9V]$LoLE5-.F?# jj?S0jn PRl' );
define( 'NONCE_KEY',        'w1?X3U{(!KDFlhcB3#P?G,Y^nyD3*|U>FLJ<~pRObFFxN+2M-8:pBc.20Xf?1pt{' );
define( 'AUTH_SALT',        '):0sbx:IkLVolyTx:;4b%^8GM?CPnkJ&+w88fF7$>v4,[%~kIV=@Q;WqznYyY}i0' );
define( 'SECURE_AUTH_SALT', 'in(3s|.~PG!bDfJ-^yB|Mq??[/,]yP]cvgkE4&B=3)?D_i(BrlwOWa!r,e&SnxnJ' );
define( 'LOGGED_IN_SALT',   'Ww81i&%`PDMnmDd1Z*;$qfxY a6SCM*j$XpcSIn8~g`pY847ddMe*o#E6lu8]obT' );
define( 'NONCE_SALT',       'LBf0R6b9v4pR{4]0hC2p)&!TI`</ uvYV.<UY%hL^~Qo7n]wEx,=xp0[H:=J2PRN' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
