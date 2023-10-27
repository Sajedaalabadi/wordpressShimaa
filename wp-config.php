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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sajeda' );

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
define( 'AUTH_KEY',         'OSFI$WZu&NUQQL3vkCr=,ox`WbjE*SE}Tw@O3xG{|<1`{32,[<(9fB.C-|ux-<f;' );
define( 'SECURE_AUTH_KEY',  '7{CK90ZiI/YOfk{*=rma2FGkn0sd%IRJCTC J.*S[&)7(Si^Va@F&VD&8k4{HZ Y' );
define( 'LOGGED_IN_KEY',    '5Co/K%0GwJ BLkFtLNJu3P@v)$_sCk?h)98Mecs(7u#?Y:UeG+_#7S]TzI/)tQN.' );
define( 'NONCE_KEY',        'R3j+`{#tU=bar_O8EW0UM %ea?}p@Jjy?|PK+<D]KV]%![Gbd*o<MJ(n|bf^H/0S' );
define( 'AUTH_SALT',        '^#3@o,q|[d!>dw.ULKtkQrL4{Ww7C*,|58 M7>I3UWkWlaN= @<%_=|O%8f/xr/8' );
define( 'SECURE_AUTH_SALT', '{9V9>;8`Ch-73FXDsXOAzIA&bu+ =t5<3BkJIma=Z?^y:!fdW?nVslp%J>Vz:]5&' );
define( 'LOGGED_IN_SALT',   'Yb19FAbbhs$lQK^VH>nQUOzVWY>_+JF1,OcMuhZtL!Um9nK_8QRUXz_`?sP1S-!q' );
define( 'NONCE_SALT',       'g*a8L3oX)ESp6P?{z .2K*M1Lw-O;BT^n^t&g4ZF~kNz#k:~@sznr:1 d&S6bO-`' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
