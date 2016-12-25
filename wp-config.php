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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'regentspark');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '38>1d0*05FK{j!u +N#PWJ@uuCKEy$=%$0%NZJ.rR~R%XB4EnxwBs.4bbm)+:H&p');
define('SECURE_AUTH_KEY',  'cxNOx,#RtP3`9Y:){7LUca*;J,23]-C<#b(RWPDh|! %<9rU_z*_K$imW,0<wm([');
define('LOGGED_IN_KEY',    ' jf2)e%k$Z/T;_g<d8~DjfArS:!RbQYb[xN9|8d#rpCHiMHZ#T>>yPUL7%H?68rQ');
define('NONCE_KEY',        'l$9GD@bCa+5cNO8RR^$A]JoEj][J-{ICBhxT)hz~O8W`Pj@`s6.$.GzhBN=tB<e&');
define('AUTH_SALT',        'q/+g]`~3Y?rOoe3]&8wq+2%&|XM~WmyetVQ*5J`ga/9S_borw|54ga>)bU!Gx11M');
define('SECURE_AUTH_SALT', 'abJx&a~q%amCda{k/tt>4^p(H=4Gn5fa{l#UPOv<[E9gGBv/bnD5don7PW=[  98');
define('LOGGED_IN_SALT',   '$EB(v>CrP0:sWp5+}4VK$h$@#iPRWOqkM;jc&K8R ge,Q[qT5NmOWoZ}q(m)@u35');
define('NONCE_SALT',       'm+Y2E.dDjm!EK&eJ34^^B;f~Bi:g}I||bho!K&IQ(aA/~HLUH^?0p^2agG3}F317');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
