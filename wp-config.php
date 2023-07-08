<?php
define( 'WP_CACHE', true ); 
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
define( 'DB_NAME', 'e_commerce_wordpress' );
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
define( 'AUTH_KEY',         '3>kC;q<T,Q{ I{leaURIJa-xa-D3tqgz#_$)$7{(~WQ^FK3KEGqmLU[c~;,s:S(D' );
define( 'SECURE_AUTH_KEY',  'ic O$4SIpwT6oON8Tan@PKKS4w*>^Adm0#_~oL[df527r/8kEy1r(S`kdRKLkii?' );
define( 'LOGGED_IN_KEY',    ')B)Yso2HyFodUkT!1$c|];=)8A8{|-yJnuekMxWX4-@|ULm76ZST0A^T/FmfXj_)' );
define( 'NONCE_KEY',        '#OaPw~LnR+}cJ>5e|azy-:Zb8w5t^<Czpr5>A;z,V+e/iR/JYLocDnl]7n !yi@!' );
define( 'AUTH_SALT',        '>Pq0U^59tPuYga1AZni*<gbm8e*}arzY5e-U$_r+JC{~UWft#Hr[&Fg749cf>z%<' );
define( 'SECURE_AUTH_SALT', '%d&`-9j!oN~&h)j0Kh8 *(I_;~G:8]bG><jcZOD(#,/T6n@abA> UNtVxEDJ:a++' );
define( 'LOGGED_IN_SALT',   '0ZZ-Q8$a}/#R0_mCCQk;n#zoOOCY;=o8Vig#/R*_T^U7eZH4ZMr+w_U%~wj?k1cy' );
define( 'NONCE_SALT',       ']~]qfYQA:-9QT,F9.H+ay0!LUX<pk%cM4EOQCukFG>:4_^D,d8M.x&v8Y}DZkF}(' );
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