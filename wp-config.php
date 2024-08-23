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
define( 'DB_NAME', 'mohammedwordpress' );

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
define( 'AUTH_KEY',         '~;h^G]?L[paLcm ok[;{1MLO5R9!{7K/7;%8Xzxq74=9puoKu3aS9SgH)nmJ3uby' );
define( 'SECURE_AUTH_KEY',  '30Gx?JS_9CtrOOu/WGMAvQ_Ag&OlFdqsmck0oe~!=Wy%d7u&m{%R||wdy+TF{IQc' );
define( 'LOGGED_IN_KEY',    '^ `@l=V:h]1=Y/#I@n>Uy&&cITS/NHYv3L@efEWP~x:!I(vX^%4Fb!}UrEG;+&MK' );
define( 'NONCE_KEY',        'okDXZp!}5hm)~(1p^`3%:H0YM4C^1$/C|{eLo&Yyo2hq~V95GAlfGeYodA4Kbo}5' );
define( 'AUTH_SALT',        '1K CwPhq8I1p=5-F:dy@}EJ0g0Fe?7ZN@Z_)&Sgwu<ol0Hdk]Y7OBj{{Y]2L59}3' );
define( 'SECURE_AUTH_SALT', 'R/?omZ60-d78}IfFq3KmCfLPNr+|x%X>?Kx2#V_n&{!tYq-)p)EFo$uF?lx^TMze' );
define( 'LOGGED_IN_SALT',   'Geuv]*%OYU&Av[w]`veJI2pB4u`NBvl_k1YU8xwZ(_~8Zwr:eepm&j2%colg6=~v' );
define( 'NONCE_SALT',       '3g|crc&4ON|nOQ,sW)0ic>[3ySVj!v;#]8S@;ZOnI-@)@.&BdSaDs1~^?JhE*zFv' );

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
