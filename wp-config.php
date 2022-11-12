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
define( 'DB_NAME', 'word1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^/I$C=9Ban*z>!j{gQje<?;G)|J5p0+[yLDtK]afvz`SsL8J^gJ0La@%0F)kkifF' );
define( 'SECURE_AUTH_KEY',  'St{J2}^W01/i)tJ~F@[%qZttqP=D>EatHct%R`8FD<_Q^w[Vd%]}`mR @u=U/7Us' );
define( 'LOGGED_IN_KEY',    'B5SfgBzQ{acr{Q[%q=<C0!1I~p?}_(}[z*#|aC(|B Sa7^4I,T%x/7/%c263coQ ' );
define( 'NONCE_KEY',        'QfgW^Ud8G,)Axt+m7CDD9}i)S`oo]Dhe-nHa${dnEYuHdav*CC.K^AKv4$R*uM? ' );
define( 'AUTH_SALT',        '@2n_(>gMY<lC%8o`uc|6rGt(3YoE4Q1%-/gvPj$0jNk<~ :f3G`#3Tj&XX0Lm,FF' );
define( 'SECURE_AUTH_SALT', 'GIS@[)^N?`{wErCL LpW@FF>K3}u@v6:f8.k;$g6*e[W<g*Ci1*[xnkOG;v*=]Vf' );
define( 'LOGGED_IN_SALT',   'Hu.yVkU&RGw~:CS.H*Y8jww5Ih?o.8W8gDV,eP)~Z=er>L/&9^jc#+K+YwWpurcg' );
define( 'NONCE_SALT',       'D4l,>OP]/Y9s{-[SIxbzQ18G|w$KJ8FSF^nYfC}/XcClOmFv`;+H(-nBQf,$Jb-(' );

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
