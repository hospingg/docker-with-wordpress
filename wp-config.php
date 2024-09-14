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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mybb' );

/** Database username */
define( 'DB_USER', 'mybb' );

/** Database password */
define( 'DB_PASSWORD', 'changeme' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '_[}b_skA`7v*{L,+$|S5:{Y}%]bkg2QY<<Ig&T`A9Gt{mxO6ym0r=k^ReJLmSr1G' );
define( 'SECURE_AUTH_KEY',  'jo<jisFd6;nIjS_NvM3*S@$(fJzo?rzsEH[t<]Ob3WOH0IeF5E1[);-[edbt[oKR' );
define( 'LOGGED_IN_KEY',    '<Ba}IUsaW<:&?k{0-`,N1ETV:p}b]E7y7?[1@Pvyh<7[CJ;t8O!U*bl1N|/0E5Av' );
define( 'NONCE_KEY',        'v3rK}ghN~^8xckhS-/iD<?bD4YuEA0MnWaW5} 7udxV~nR*)9=DExe9M)M~!HZ6[' );
define( 'AUTH_SALT',        ')h<kgkTJNyho`gL) qL:Y]Qi5Q73FrY$Dw6.9g<w0!5zK:Z^ q#I~I}c:6*B_%L~' );
define( 'SECURE_AUTH_SALT', 'L)16L?4~(&.tQ|EC)E!)9>%*d2*::gkq!UFL?[[g[o0,kK$:bp.4DG=n<ys{(4a!' );
define( 'LOGGED_IN_SALT',   'd9;o)(C&y3h7FQHM6miCsk_{o*HI_1y~MgA_b,Gz)Q%e#coi,#:sjQ&.O>R1uf0U' );
define( 'NONCE_SALT',       'r3F4|F%*A)LqqFfc!HG#.e`*y;s@NC%6Lb6(#!W%~+R.z*Ds.-`*}<1GPk=I?C4E' );

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
