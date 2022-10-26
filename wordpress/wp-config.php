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
define( 'DB_NAME', 'htztechnology' );

/** Database username */
define( 'DB_USER', 'htztech' );

/** Database password */
define( 'DB_PASSWORD', 'htz123' );

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
define( 'AUTH_KEY',         'mTn+pCVVW@>B?Y[-JC$rb=mhE}KsLq/zs/QCK,k_.kYy_{THpi=Zh.kNn~uxX92$' );
define( 'SECURE_AUTH_KEY',  'Dx,%c/Pla|CL7Hsc9;%U,8xMSZ}luU? J2P{~l/KT3GCYmNQ_MLIv>RjLvZ!Bw]@' );
define( 'LOGGED_IN_KEY',    '~,Gj.(}(*U?aj thC Ov>{>s*kv_BN07rSW_XF9(3Un~PLYX1K(zhs^?.fuOOU;H' );
define( 'NONCE_KEY',        '(5mm{s)eT~g}#CBu!=#~tg} Pz_f#P6%Rv_85f>0k8*):fttvp;`1o!tQ;Z`*.=k' );
define( 'AUTH_SALT',        'hfq-n-sKc2vOFuAY8zz*LW-w}vt2Nm]M7G-iNpJ]lP5t<D,[kuX!PL<J_/4=JJyW' );
define( 'SECURE_AUTH_SALT', 'JG!/Vu!lw/LE8R-51r*`e.,_-Yn`UX6Vf+w7_QYD*l(jld>Y0w1.P!+]F66#bpx7' );
define( 'LOGGED_IN_SALT',   'bA(0k[vLQ].!&d}YHT2_X:b@H);fU._7w/E.)g4hT:U09e8SX`+C|0FIdit BC~Z' );
define( 'NONCE_SALT',       '<RAU|)BD{crSA`txgk?-r`>2W9m?*MWcm0Tb@U!.v0b4|Ci1x[_~QVv_ y:*P8fY' );

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
