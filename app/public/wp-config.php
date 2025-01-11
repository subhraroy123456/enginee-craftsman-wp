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
define( 'AUTH_KEY',          'YMO$Bz:mS/W9R<c3f!*eSL%Vy+s~I!;L]F+OQBG8wgQ}p`$+mb$D%1&0yKF&,L)z' );
define( 'SECURE_AUTH_KEY',   'A@PYF(jie4[(oKe7;oyPM|jx~u-cJ1cN:N&43)jIa#F!<g4l9/a,W9VR^IXk{^L/' );
define( 'LOGGED_IN_KEY',     '#EnX/u%Jqb|o+0Bgqx7}A66%jM nf6vsG~2Y]IQu=ix(}o;1!rCx,APz|Uvn;2BL' );
define( 'NONCE_KEY',         '(Z6UBK7ify@UUcLA>J.2%w/^?`+w(&:a?ieNsfOtD]2D*S7}T?4XHna_G4_K[f?A' );
define( 'AUTH_SALT',         '(Geuq%=|b%rPJr?7H <C#HxR5Ym~q7=cqepJPq 8P-tQjgGG~J!Z0!+;IQg^:^_E' );
define( 'SECURE_AUTH_SALT',  'CO?Q2vveuca37((R]T5un-yTETFbwK?4QpIJ!PO)d3./(`RLibFh4&Io=Z(n4FyX' );
define( 'LOGGED_IN_SALT',    'u%[eu`:g-4}JQ(@ewUh-/T)b*PC*rN@>z`qq-HI{L5{qCb`qH>6IS)/7=J4U+uqX' );
define( 'NONCE_SALT',        'NlVS#]tm:x/feC3|I]Z&,gQjR,?Xiok38It;=GfH&xGj#ITRH~c@(]oiyFZUoew,' );
define( 'WP_CACHE_KEY_SALT', 'x)^:%iQnr!/h(83s5wejy}aT%Tvn9/P86QN X=blo- =Bd.gY$N1j%8Iwv!X&J_w' );


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
