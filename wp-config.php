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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'C8.McL5h}e |- L_McFiBHlm)pt`Pc]VJ{}>_Z+pt4d?0.E/)<7n; f~vg/qmeqQ');
define('SECURE_AUTH_KEY',  'e{?;;1ffzj&&HDUlmRIZ7Ao]F0>KJ{oF4CUDQSWkio>{.TE/pr-tGGSIhsv+tm`-');
define('LOGGED_IN_KEY',    'oML&IOR:c:0DK_QAG]K,>wieFU|z)YqbA0M:SMTfuC{V9+my/z$egX(Zsn^}VLKQ');
define('NONCE_KEY',        '[+3Ic3tNCOs:$ (eh4XY/lz`#.xVsyDgZ+lu.CS!LYui-gZu/a:+xGP[K7s5SG+E');
define('AUTH_SALT',        'r+I|Z6}ZR-m<OY}EA__^+rLpKZ_V0|VDA!YXE{P{92XIiLq| q(5UE!8]|O&9+|#');
define('SECURE_AUTH_SALT', 'FcSqK2Q zx>^ArAR=[;Mh iA P+9@]%Gy[J=/M6qW]Kiuuj7q1ny,HNiv3O||)>y');
define('LOGGED_IN_SALT',   'n<_*2Ev*>}N3>tqY*EnHSXn (]9x:*Y]*i1uuMSr#a=QTR!BVr+Su/y/}^[lIZG9');
define('NONCE_SALT',       'L*ro0K&X,i+~n%_jDsq=J9TKI/CLImpwYFj94;(KA^6Cto<&-Q+?q[r3]uPg/-2w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xyz77_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
