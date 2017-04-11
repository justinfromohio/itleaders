<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'itleaderDBrf4ac');

/** MySQL database username */
define('DB_USER', 'itleaderDBrf4ac');

/** MySQL database password */
define('DB_PASSWORD', 'X7uzz4rwOU');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'd_t~th5[]~SH5H1peshR[~[-OC15|dSCOCwlzoc4[!}!vNCG4[dRdNC-o!znF4>4>');
define('SECURE_AUTH_KEY',  '{n3Im6ITy*<;QXf.{6Ejqy*IPX.]2Aiqx*DLT+.]2Tbiq;AHmu+.LTai;9Hlt+_KS');
define('LOGGED_IN_KEY',    'P.;6aiu+AHPX_]5ahpx5DKSx~]1PWem]29Hlt+DLSa#:5Cls-_GOVd_:5Sahp:9GO');
define('NONCE_KEY',        '5Sx_]HSai#;9elt+DLSa#:5dls-9GOW~|:5Sahp19Hlt-_GSZh:4CKo-!GNVd![4C');
define('AUTH_SALT',        'Bv^FMUf{3AImu^EMTb*<3AXfnu3BIQu^<MTbj;6IPu+.{Tbi<;6Ebiu$AIPX+.Tb');
define('SECURE_AUTH_SALT', 'qALTx*]2Wemt-_:SZhp:5CKpw_[HOWe_]19dlx5DKS~|:8dks-8GNV@|:KSZl[19G');
define('LOGGED_IN_SALT',   'Ro[19Gpw~CKWd_[19kw@CJRZ@[08cksz18Gow@|KRZk[08GNUck>3Bgnv@FMUcz!}');
define('NONCE_SALT',       'Z[4CJsz!FNVg}3BJnv^FMUc^>3BYgov4BJRz^>NUgnu$.{Tbj<6Ejq$.BIQY$,3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
