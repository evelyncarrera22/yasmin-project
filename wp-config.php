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
define('DB_NAME', 'yasmin_project');

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
define('AUTH_KEY',         'aqPcSmNe~7>=-s`yNbH0xRNC&:3/RF2M)$Wk`JXb!#^Uz:.`E2zn8keB?WH&(ma7');
define('SECURE_AUTH_KEY',  '%6B@~u$}!&+!;^d%hVTK$QVFcCEv!fC 8Rx,FIDKf%-@kL:F2S<4kkB@+?Ai~,|A');
define('LOGGED_IN_KEY',    'bprRFAU RS*Ef(@Z1K=fmBN]6FBUtrQa+:o2sGv_]K<j5!qGg{#Huh.W5b !lq7,');
define('NONCE_KEY',        '>#|Er(LOz~h0M9fX@d(5=|P6C3f>!6YcOB_?(vEj$cwFLd4D8cCDBgmwBTQ4[pkI');
define('AUTH_SALT',        'cV}~N5s9j+X0_4z;w_Y9@bO#Dmam_)Fh,qanI;ufiHchKYuJ|kWvRsk(TU9Eb+iq');
define('SECURE_AUTH_SALT', 'l,wCjpN|6L9X9C>FJqg4^pHdAC{$AqYJgHo`VJJSlam_,zSCb(gRQm5[4;]%qF<$');
define('LOGGED_IN_SALT',   'WiJ1^G,AsKdc;c4?m7Wy5<&otYrwz**Lyr8N%t($O8pS/K)J$urN;(r N+.})*;M');
define('NONCE_SALT',       '8]kl^;u&CC8-+0)wQm/3[xwb4<zjk)$!@G{%:h6DuVB:~@B;R/E=fsfc*bwBMe;`');

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
