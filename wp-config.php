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
define( 'DB_NAME', 'biblio' );

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
define( 'AUTH_KEY',         'Fy}s}Q|!R:83`+:clQ;QZ#[66O9y/P5mE8o(!xUph*S?$l]{(eW))|wMp#?/pb~-' );
define( 'SECURE_AUTH_KEY',  'df`n1{3>5G]YWE,O3WF!f+EhZ,GnV6eTmJrN-o-`!L-n`@q.[Uf&Uu&83-*!hVE:' );
define( 'LOGGED_IN_KEY',    'rCB%nX.IqHI,*K?oEc8m/GM^u{:x|3lH?YiusD;x}_n?rx7Ux$S:VfZty}|v%AZ-' );
define( 'NONCE_KEY',        'DgzBB#X6{}79_}SSKEHz7+<yM)$pl`z?eR_VJNi,%)IOce!W gGCC;D9@3oOD_/T' );
define( 'AUTH_SALT',        'a.ena&I|mn}-9Ng:>Xn9}>u@kS_*QhUa@&f*FdrCg<>bqmpexFij?$&cBB2*9yiS' );
define( 'SECURE_AUTH_SALT', 'LVHVz*?8QexP%hpM+*r0R=dmXh5<JnU8x#N-n{[v9!B&0Q[9yP&i&AoNlRBQM$VO' );
define( 'LOGGED_IN_SALT',   'vAz{B&?[6?$S+~?}[T][N-[U+pftOzml{diW<l^KsRhJCMreX495f^fz?z;cH.Ia' );
define( 'NONCE_SALT',       'TRbEHkG#$ApF]32:$s+&pt- ^w2oQuphUi]xR@u@P-u<w{U9j>$~IK&~auE<owaC' );

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
