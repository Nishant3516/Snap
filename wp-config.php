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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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

define('ALLOW_UNFILTERED_UPLOADS', true);


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
define( 'AUTH_KEY',         'Bn+{(cyS]oN3$!WK]+]:+z rx+sUe!>5xHM:R,`o8{uHP]Xkvf]o/ktayF@b&9hM' );
define( 'SECURE_AUTH_KEY',  'J#~qF4clpUN!g#RZ<{q*1V.IcMlL$g@j$jz|nqyK^{-P{^PTl)%D%Ywj=p[9pQd}' );
define( 'LOGGED_IN_KEY',    'JHaK#RAJg7Cp4i}&_M|aQQ>TD^g-lyzXI;yMGfwNS{p<q1(vfx5*4&B]5Y<v( ;K' );
define( 'NONCE_KEY',        'z@,WLS5dz]Ni:WC 2{0*IGkm6~_pH8b5wz<<#gB8@XM>k]>cCdLSkQGlAHR_|`zx' );
define( 'AUTH_SALT',        '5.Y=0fYZoX76LFrTfwVwVfWI<+l-:VT3fOZ~ter>/EwvtG6M374 ,s9F8scU%]}p' );
define( 'SECURE_AUTH_SALT', '0nV.6j;ow<416W7!4@>cj,0{r_X?Gy35bNkFQ  imLSr^!da4:|-q1*aRTs(&r2Z' );
define( 'LOGGED_IN_SALT',   '`_.cBS;!J^B)@L.nx$8mm[y7><,Xx|)Tpyj63_gt14fHJ48Io.XX7ezmj7NBJGky' );
define( 'NONCE_SALT',       'zhkKZMJgEBN|_m&!8/pwIaM!f7tJQEZZr*Y?sctxMuwUDGbQFH~8^sTf1Zc--k%S' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
