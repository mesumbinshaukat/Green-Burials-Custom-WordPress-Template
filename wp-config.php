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
define( 'DB_NAME', 'custom-theme-template' );

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
define( 'AUTH_KEY',         '71#F(^HKwf5*Q9aLI4pz:4f<)tzFHz7=bkb7A:wUC:rWy)( v)bg,b#DU13*up4o' );
define( 'SECURE_AUTH_KEY',  'W#MfEQ+|K/%2D{]fNYKi(5S[>LDHwR|fG7e;hZYfavl!T+*fC9+.sk.OGMACM8];' );
define( 'LOGGED_IN_KEY',    '~p%R6bng~P%T],|nvUX~/Z/]:vg ;;e2KVcnG+<agIc(tb-qA(;@Mu)k?;a?^)8F' );
define( 'NONCE_KEY',        'PN7@_0*xWa8pcE1D1s6_1%rok}5n+D3eT5_UDju4qssZO4!!l,k=;?66?rA};~=R' );
define( 'AUTH_SALT',        'j->o(,VD:co|Okt?G-KNJm;W]jG@s3Cp~mI%GXgEE)(K|m})6c Kq)A#kwcb[%$9' );
define( 'SECURE_AUTH_SALT', 'vX[r3xoBot=huhK(`eQx80;v.*T>8iVg>LsiP1}gq;}+e+cbho%+`72=.Y&7iI#l' );
define( 'LOGGED_IN_SALT',   '`|YNz]^#_}F:mdtNC-jrr/&YT.7ld= LVw+JNv]XVaVX:G_P;j6<*Y=EbC/*uN3P' );
define( 'NONCE_SALT',       'd6q8~%]uS^rbNxze-+0?oXD0=ivgDs2ky1rUg/7,ge7H}ta2r68=i=/()bwJE0/r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
