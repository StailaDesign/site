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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '8EpKu4*lZnP542JVeaq@r{Hu7M3Nx xh%JO@5DKDRS&FZ|>Vc_:BJ_066v5z#4-^' );
define( 'SECURE_AUTH_KEY',   'rtsoqmpUjLfh=ZNzITXr>lhiU4oprR|5{RM>Ufbic.`&0m[lOp}Qhqm_,(8d10xt' );
define( 'LOGGED_IN_KEY',     ']cvcml56>}*.X.hR#dfy%R;4qLXGC_521WX:vTTFaq=#( g8NhkApQVt^d=FlSuR' );
define( 'NONCE_KEY',         'urdAT/!qp~_<*v#7?pX+NdjfNLR2? g0s#_V9!L*{#L3-DimzQA/+?(,P>e^Ad&i' );
define( 'AUTH_SALT',         '=6!ds:2;g9aZEJu0Z>$`d*r@jZ1b%#Gx[sYBI$Rv?NsV~8iUai!iruG$oF{e+[zK' );
define( 'SECURE_AUTH_SALT',  'R.*DmymXQcNX;7k%Y[SbJjlcYrbdN$Tg$4WS(u>;z9R{(-bpnvWb<D~(se#dz%s1' );
define( 'LOGGED_IN_SALT',    '0B| ~}(7pPs5d[jQd:CI|5_{Up+X0%gR6:Q;R!Rt>in:SKQVu)We{*nZ>(mjr4i`' );
define( 'NONCE_SALT',        'HP4q$+RituQ<,F,^``6,njq5})Ez+ldS$S(8]e1:1b`,c.ZU>{Xn2~Cc,Gr>#|?@' );
define( 'WP_CACHE_KEY_SALT', '<G|YCr?08hRd<gvb:nj=Jm_[( ?]zm,Vt;Wi<&NdY4crI2?`Vx9x@{9{0++b*/XT' );


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
