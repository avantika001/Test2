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
define('DB_NAME', 'Test2_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'JCK^H~H_m&A3KR3F]-!NT/C$b?4w&IJb-cFm8uNi|k3{+;`<.LoS_GJt2Bag.J3<');
define('SECURE_AUTH_KEY',  '`(*kx(wr`op0lf|GHi^r~>k=rpVC.Z]^&GA{9*z[6Q|c<QeL%J{{XdKkm;@)758*');
define('LOGGED_IN_KEY',    '}MHP?q~vbMo~_Q=Y~l^U$FM3(vKds =V(v7NasAE_D%Q1x&O@f:oH2i2$s6X[sTp');
define('NONCE_KEY',        '*r./|&DM58&W?*W>{`#dcW-OG4sF`k4 A5%)1e?m&,:<_| >iI=^ev[{J#`?-iz{');
define('AUTH_SALT',        '+I9c-oLP^IJ.iLP[MRH>vRxCXL{qivc3mgmC8ytdFZ0J_{!|*pLOp:XCBcmW,~=h');
define('SECURE_AUTH_SALT', 'i_g #g#(1&_v -dizEJ](`d^m*?O`gTJT+&<#dp?y4-uTrUCO*A-uKjCq+y8W2jJ');
define('LOGGED_IN_SALT',   'PjztiO*IU.:)1eXu_EoncC#%rNXUWgrw++d_0QO}R^KfJP%k>},E~MB}eAOnd |=');
define('NONCE_SALT',       'cOA:($&I_1-i3^sk l5xMX1|.jkn-g8AU$I={uoD!LxBo4z5ZdNtd35%O^SASc)V');

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
