<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wibusid_wp315' );
/** MySQL database username */
define( 'DB_USER', 'wibusid_wp315' );
/** MySQL database password */
define( 'DB_PASSWORD', 'J46p((yfS6' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ulcuzxnqm989atqm0gaycnpaf04tx94cx73qizshgkdt2os3w8g7z5sptm9fncdx' );
define( 'SECURE_AUTH_KEY',  'uvf81gp8jktvydya47eg7ibi68uprsitx6urperspoi8b8auc9e5gq3acudeyu7l' );
define( 'LOGGED_IN_KEY',    'voz9qjtwwqcytrghco92knnt6z132qd6bwjosi7s2kwt4nnhbnje2btcfewto4t8' );
define( 'NONCE_KEY',        'xoq5btb6lwscapq7ibsuyoopuuwcuagoaxleihaj2oqut01jynnwtpt9attu7ctd' );
define( 'AUTH_SALT',        '79iucrws0prvoq2vhhtdrmvwbflfh05iixofpv6giyexvkhgganawnybahc7brfp' );
define( 'SECURE_AUTH_SALT', 'tpcnkqj3dvjyvyc6sjze6axh6kexlac7ff6u1aw83am5ggnwjm07guzfmtfgkfm6' );
define( 'LOGGED_IN_SALT',   '5kupb2e3ymnqiqyopjxg4ttq8dzyxmcva4krtfsc7tzkqmnogn5gfbibvda8yebv' );
define( 'NONCE_SALT',       'z1qyewzczdjynki8tpo1sbhubf0ghhlqjszupnngarlwryyrync8dcgscsfsokj4' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpt0_';
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
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
