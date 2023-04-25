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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp4dev_exam' );

/** Database username */
define( 'DB_USER', 'ohrYDmeqOsAyeaNj' );

/** Database password */
define( 'DB_PASSWORD', 'Si9a1zydoUcZQQ8y' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '=O-{#_$f?S=b.)~xv|E#7Uf+;SY$uaWz|T~&Sm <zA$qwg9B.+>K8cCBtz>)p=q_' );
define( 'SECURE_AUTH_KEY',   'C><AY`^5nVRmb+E,aIPy<Vb0TVw]#-1g,ZGSlvE$MhZ!^)MhdjFi;&t&)Oc`<@n_' );
define( 'LOGGED_IN_KEY',     'T}zglrls[$U]6$d};I=0aZ.lfa*fTKIv5h2+1KGj]dwsUyV$( r:3t?)t1Qec5{<' );
define( 'NONCE_KEY',         '`wev+p0@aASMzBVu?*B7Stc8u2.W5KysoJzY_UNX2:sn[.~F4zZ%7%UO[ tq697=' );
define( 'AUTH_SALT',         'dXT$.`AW|o6r,M$Y)hw^Sv#{LK1V;@:7[^RR^T jK4T6<2.1s=Q2UQ)H]zyz$;WT' );
define( 'SECURE_AUTH_SALT',  '_b#XAcv)2-%N%EgwvT:{K  12q(V]C2fp/#O#|:kI|k,MfhKNU7v~=W{?MSJ~y9#' );
define( 'LOGGED_IN_SALT',    'jJTG)M~YF* {=Pn;[B7_,m=}tsL=-o%40,{peWZDp28L)6lgvJTwU)ii0KV#8JNv' );
define( 'NONCE_SALT',        '~!zOz5yv?Ee^h)EY@N9L_XDP[f>sscxUk.gg_cjG<t`SGg,g`*yT]-]~SYgopNl,' );
define( 'WP_CACHE_KEY_SALT', 'i=yHN<&+nOFM2 SbYkjr<@5xsEa/F|`2w2~CT,YwLqU}3J*ob[J%tq0:+b:amn9g' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_SCRIPT', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
