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
define('DB_NAME', 'underscores');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Eh@uv:fdc#NkhN6hjObXz=icBy9uz>L)[}!q>0N!DMos]gPwNXnAnx;M{B:orejW');
define('SECURE_AUTH_KEY',  '0mrcb*-oMHKeK!|VWC^[XxYSm:Eb.@ka&ZY:rxW|q4UOXP#;.2EG794Qe8QgBce:');
define('LOGGED_IN_KEY',    'Jo326(x2~uvEK*bhXk>i!=<?RdzvMCBY(|QB1eEWqk)mS7M-s1 E#;Ib^bA3d0pH');
define('NONCE_KEY',        'Ji1nW<,-p5u.$e{A+njTRl3+U%#_1yZV/0]3uj*vhy4Sg{Z- <V0${l)h=g,>e%0');
define('AUTH_SALT',        '9Ju<1 /`B0P}<*%*%KRT3S[yWX5`vgpq2i4=oc:uys  }-*%Y[k,]d,]>bY!>^Kh');
define('SECURE_AUTH_SALT', ';zZE~}Xo7ClrSB~6QyeU!]]*4z$iPBt n:3e);6[[oDw}yvAIh]e^R>ycho:7TR6');
define('LOGGED_IN_SALT',   'aD?#Y>XX#KfY+GkI!vt2wq/MsnG@|K>E2Th,4I*z0~_V-,8x%GOO*4M3du@9ELIL');
define('NONCE_SALT',       '%@V}-={+=mr;:<*%`D*Zv=EI1mRA+:k|rV+aoWW|ipLa2C:,1iquk&;&,Fmj;p1I');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
