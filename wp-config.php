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
define( 'DB_NAME', 'mywebsite' );

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
define( 'AUTH_KEY',         '53iNqDeD`]<}9*54Ql^Kag_8wFDELyLQIVYcNTPeO)&2bBvc1BNS#_aMrY[|O(y(' );
define( 'SECURE_AUTH_KEY',  'FmEHw!p1RG?tl=DqB,.q!T`NMBuB#rm1nF$hwJH@y`*I!P,,x,Npy_d0x82!;.W ' );
define( 'LOGGED_IN_KEY',    '%$kg /$-iqT(L<W5nCi2,PN.wVY7x,;%nc#pU9g6]*JHbkD+{5,[F19H(MkG `To' );
define( 'NONCE_KEY',        '.qTOFFifq`:&$eYkh{qV>mD6)bWZGDc(8._aCAZV@(ZmhHDLzS00 kw*;!i27MQ[' );
define( 'AUTH_SALT',        '`{Y>c+Uzod^oLFTts$NeZe)!9<aO-<[WQQ9wrF)?/y b!6{8[U1*RieyY8>1:rH(' );
define( 'SECURE_AUTH_SALT', 'IBx<Z`l@pn>?{/k>V^P/g>lsQQ`Ne2:I%p*v~1i&6iJdS2jy:wH0,13B{MTD*:*6' );
define( 'LOGGED_IN_SALT',   'I8-f8=0vt88)#rviCQzJ?Ht6NJ%/,_6PEDk!j6Q^!8!Biu!ION:2LN]SRrg5$)lP' );
define( 'NONCE_SALT',       'w93R^:r4>:gg~EPhpXrM<utS}vzI-e1#2$LW#rJuXey#`{J#Cr/ f7#I;2FH[O%4' );

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
