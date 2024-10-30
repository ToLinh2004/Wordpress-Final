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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '!|@ T<|gSL(CpWe0{Jq1r<:n]+m$9Nh$%R,Swf^va<n7?a]8r-?L~5Z#!>;<t,jb' );
define( 'SECURE_AUTH_KEY',  '`5o;I4Y!Q^L _7:UlgEAV!)lf=.D}cWMQv3u:>E? 2p:,/SqG#5[oocR`~J;]:]<' );
define( 'LOGGED_IN_KEY',    'ZTE=fMZ5Vb4o0E=gNN3u9<htMLb+4SFi{qG5b;v}Yi{pT;/?kZU%V]5p0F3s1Wxi' );
define( 'NONCE_KEY',        ';CgI#EjHc{t9tE4H+LQ*-}2_vh @1.&g%P?]cGwfcid/D2iuI3-K_a,g-[fs0P[]' );
define( 'AUTH_SALT',        'ESw898[d7V~tgRgSP^pO]Ox<[lhrJXQ[*%U#8f)XqA^L=6cvmu0N]9jvC)8J&}1w' );
define( 'SECURE_AUTH_SALT', '7b[mc.h<T6n-=MH5}C:i0R--$g(Nn+e)PkJre]uF(3?FvWs#3#|D7>eJXi@.5*Xb' );
define( 'LOGGED_IN_SALT',   'j~#WcJAcz7kdO)20M`(j]CmNbzJEQ k*-}UP]%r!#V2RR[8K4M<!Bq &3Ai_62F-' );
define( 'NONCE_SALT',       '[LFY~ f6t}7#}G&$|tnp*S]7#FNIITum[JgJ!PuL#[Xc.?RIyg{kH73R)HD_8#}x' );

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
