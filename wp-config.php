<?php
define('WP_HOME','http://swych.blenddev.com');
define('WP_SITEURL','http://swych.blenddev.com');

ini_set('max_input_vars', 20000);

define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_mu5oi' );

/** MySQL database username */
define( 'DB_USER', 'wp_20rzx' );

/** MySQL database password */
define('DB_PASSWORD', '4y3zk!TQJ5');

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Y55Y88UL68zPny@rxO)8:%CJ2Xb8(yn:3y6:#8@6)B69@5[t70p|KpuVy1-P0-[:');
define('SECURE_AUTH_KEY', 'zLg]o3Eq~J*-mPkHB7BXIBleZbq4xl);a0DI7Aw&3~37Y*A8D~lUe3_h6_3vnL;B');
define('LOGGED_IN_KEY', 'IG;|%X@r|vI4h8z2&CH~2PN5k&69(&aa(/G/F%&Ug;4W3%LY97:]~C@T))E5J5jC');
define('NONCE_KEY', ';Ln24:2-*:ug&H[1ei73e:0j8pJ482fhO1mCG_2kzOa7#_(+Lb_N2F0_(Hau0#5x');
define('AUTH_SALT', '9FKEXEX%93E9Bk6e1~!QB3R)738F6!MghTJ:26zkqH]KLe_rf2HYiLu+/H820Q70');
define('SECURE_AUTH_SALT', 'bDB86H]M4qV15:&b5~u30y0L5S%#CM@#s3c6824@5@L|]13pVX*A_|*fO7V-5pL0');
define('LOGGED_IN_SALT', 'HdTJ4w06P3!2Re8(|Gv9pp5HDVWX-B6*5wF(9FIW[zn/T(01M8]Y@6R8N+F&Lnf9');
define('NONCE_SALT', 'hE|3]5O290mO-#@/U;C6A:hbQJ~zR[#c6(1l33+n4:%J;9sjm9j2IIZ1X6*~g4h_');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'I6jbs_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

