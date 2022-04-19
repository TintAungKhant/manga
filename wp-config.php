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
define( 'DB_NAME', 'manga' );

/** Database username */
define( 'DB_USER', 'tintaungkhant' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '0y]h/-2!6tBy?jg!DKqr@5+B})mf!ZBZv>%},K<Uh$R.kjklGv;/K>3lg5N!sEy(' );
define( 'SECURE_AUTH_KEY',  'FD,5fn8^1a5,4crS+.LjFm|6wEB16*8:W?$sj(JX.|TDKD-n&/%SF0,|~cJ(e{a=' );
define( 'LOGGED_IN_KEY',    'sE9=buhzo7n4>03]4b59gkiZpcLx}C]A*1e@6i#jh+NJ63^sY}5Uvg4poB7*65En' );
define( 'NONCE_KEY',        'LZK,QyzVhsA,.ITsi^l@H$F.rhba[Iii+/lQ{u3XDlm~&Hz@Ju@dM#94(RF2pQ$Z' );
define( 'AUTH_SALT',        '~NZ`G2R5K/c3mZ@UE[5,+h]6v@|4zNI31pGR#oHX7DjJ.j#<)HcuOxL.%((kcpc~' );
define( 'SECURE_AUTH_SALT', 'c#~B#vn(S8`B )A2c67~,$3}@im=/(z4dWEk;E#uh8_24j1}?U(%/h4;S*Su0VXY' );
define( 'LOGGED_IN_SALT',   'cuT`UILlwEZ[^4+B#v+0b2Lh%/m~9F:QH(7`s]:xGn`[:cdH&!?h)lbQP7-Uqa(g' );
define( 'NONCE_SALT',       'z]`eK62DIdS<9R1uRR+hy:Z&qtkXW]*hZ6+MK4~;tM8lO@SlBT7W0OEXwIY{S|tk' );

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
