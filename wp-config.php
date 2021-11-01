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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newsportal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[=(v) x9>``(o|d{P!#(=1E<:_%ej3mv.8;c3j2Tn*tdVu):M]d{-TF{5j[w3VHD' );
define( 'SECURE_AUTH_KEY',  'd@g4Y}Thw;<udYP*yw; 0{fmy,RuLpnzL!^GRHtv#NaSxz/%L%{s!VGe,8#QWVg>' );
define( 'LOGGED_IN_KEY',    'T<.<nPDaaJd~Sb-B100eeA.Q0T{/,v?GU)O}~|;;xQ,_GL_qb1=`1c.:{^niIYie' );
define( 'NONCE_KEY',        'XTD$Q9+jJ6hYeCmq`FD|#D/=oyUZ8ya[W{e=$y;1%u#Rf[efbO1l?|$oH$mBW/pg' );
define( 'AUTH_SALT',        '1;KfWm2l!e#vv]vyBhkd7v|=A~13| a:##Rgb7JosX`El_HriO^f+:i)snK5vw%B' );
define( 'SECURE_AUTH_SALT', '&KAV!z@`<YaL9`h WZuz~_PFo2bYtJDs%&z`vy@Xocl4FBH77Io-S V,vyV3!!:P' );
define( 'LOGGED_IN_SALT',   '&c%&SvH;q$&TE`F)[A7Su{5V&~g;!j@d|U$S: w&I]n;LASZOT_e4k,oid(dir1b' );
define( 'NONCE_SALT',       'q5Us$r|%^XqhEHR!/<^P;<]d#f[=5=ZV1Hy)P;cV6jME!K(W`lQpES$NQ>D`X>7n' );

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
