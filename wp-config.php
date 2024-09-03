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
define( 'DB_NAME', 'wordpress_theme' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin_1234' );

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
define( 'AUTH_KEY',         '+[7]T~JOcD}0Z$-n;J,d/{Vp.wQB$Biaz[9@hiN[G}I)h-p!rMJ4OEdq2rEm^ov7' );
define( 'SECURE_AUTH_KEY',  'x-X<G2/}+).S5D!A^7Rb_& eiZ]N5Y!>eDIN(VS+a(I+jY0,;oWHGJ7|9$G>Ie4{' );
define( 'LOGGED_IN_KEY',    '34O*xqLFQ*KL_72?ZZ6L]$oa@$:y)%CU/6ce8)6C%y2dK.B2@xFeVX!YWis<gwPq' );
define( 'NONCE_KEY',        '%9P<5G-QflOv^>`Y3KsG,Kz4KQM^gu{Nbc5C}^t+OeNp4N`eSB8x-(yeIhsAyRn,' );
define( 'AUTH_SALT',        'evUgCK9(j,=&vv~+M**JT)m32+j=WiaHRl[DNw`[a:=9=B2k(l[cP$6 ^=m.:6_$' );
define( 'SECURE_AUTH_SALT', 'U4JYm^RAwH@8vlUTf5>h@mdP7MfS@x::{:qqU/gs&d ;Y#pIXm-$H-q678KHc73U' );
define( 'LOGGED_IN_SALT',   '9`|JOMAc5>s%Or(l>,jlp`J>F:@&xxas.E/}7:RXyCwa83<I>SdHYSrYyF7e]I(&' );
define( 'NONCE_SALT',       '9NqS6B1N?V6}C^KUi&n/np7!}x=|e99UfQ|fzEWRpl=0*_$;$1=HJaDdR%cbrM@L' );

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
