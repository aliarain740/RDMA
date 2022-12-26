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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rdma' );

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
define( 'AUTH_KEY',         'zhSOvqz`MU%8^]1yXSuUC3Qg-|hFfoa#g#jn;kM^5-f1I1q?&.?S8-. .IeDIXz.' );
define( 'SECURE_AUTH_KEY',  'zpL<%LaW}E^]M*_0F%f+&sue`6H2X-#,ep=BN;,+3Uty23<x*Z<|1s.O7oDG?R#0' );
define( 'LOGGED_IN_KEY',    'n49XY9|Rp)eYjaqi0ht7Diz{~5rYFkQw5D5)y;eXn8DyJc`;[WT3:;8(6Y3]alYy' );
define( 'NONCE_KEY',        ')P(><`T!n>sTvB5x9fXP#V7ny~wIF-#va/%4&i@If%lo9ht8Q>c7]*I8[hAa5FwJ' );
define( 'AUTH_SALT',        'ow2zK6s[C<AOb&{8c5JUcq}w^4J;HZ&A*c3~YtL4[&q1O0jRn@{{(In:  IA:fHv' );
define( 'SECURE_AUTH_SALT', 'X1%CZlT#T/.ywH/IG1S<q)I+m<p}K|b$M[#zz6y|on W~YB3kPhZ|ZK>4Hdt3-nR' );
define( 'LOGGED_IN_SALT',   'FXB7Uy^{Yps;[BSev=xO(!?Lv8ng/5wx8o}sk?z|`Rp~&Ow,jQAx`>abYDV]{jH_' );
define( 'NONCE_SALT',       '+rt;{|]tjr1x t-*0sI#=T7<hZG(nNB1?zE#DU</Z2xrrSL7%$kRYA:Per>T` 51' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
