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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kamieniarstwo' );

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
define( 'AUTH_KEY',         '>?>!kQc1(+<f2[KWwqg;7bY,:&t p9W.Fo{FQ(~9CrR}NnaUO#By r-DlWH-a3}A' );
define( 'SECURE_AUTH_KEY',  'T57@z>)Tl@e!Ow[PhkPks;Z.54Cx;||~;]0ln8P9)f^o?Wgd+s)W/~CEfKau%9f:' );
define( 'LOGGED_IN_KEY',    '+mjSF_3%CZ`DAfQ2lB#S8A]hCO4g/9+MDs;>aj4{BC@s<lQ!.o=NmBY<W!?#weMy' );
define( 'NONCE_KEY',        'J@>7sFW<Aoi6N0>Ymcyy*E=&g/L.F&o4J7k7*A:wf(K`.7RBnt 4Gr2&2Cpoul./' );
define( 'AUTH_SALT',        'yDl1$JCjI:8sattw~>NSBYSjh5qmg]GEk^#g{viWb$0>gm{-kp15cP3,$L{X4QU-' );
define( 'SECURE_AUTH_SALT', 'dhQ^J}xr(XUu>;zxmaC^QDU<N`3%=zzG[~r~JH)mw7}4s+%3)=J,$$RNahs>m2CI' );
define( 'LOGGED_IN_SALT',   'U*&PN:Q)Gv5U1D6aa_pnC]3i6c(7D/Z6.*HRfuY-i3zF*p!,uzSn]GaIh_Dg_PYf' );
define( 'NONCE_SALT',       '+TobSX ~[`u6/vL]~XIm:q>?|0Gq!l]]3S(5nAe_/J ARWW50fvbE{50vIB*)Vv%' );

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
