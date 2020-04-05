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
define( 'DB_NAME', 'L1zgAXxaFJ' );

/** MySQL database username */
define( 'DB_USER', 'L1zgAXxaFJ' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FcBOubpAzM' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'Q{Fvr1?>:EvC$[=J46tO?.cHLq8#B)MY4oQ=fb.Gx)N+D7l1r7LK[YhidY%|zDyS' );
define( 'SECURE_AUTH_KEY',  '1[u6OC&/]7<AJX[r:m3vN>q;@0-^2CXg)WsJJ&gpf3xdlXl]P@?;C?RxNY:?wAd{' );
define( 'LOGGED_IN_KEY',    'Ea?(qMY*{t.z72O-.*TeBI9}^!u4&MlLGVyf)fq+N~/fGxnW&~<j}T%PrP@isV0U' );
define( 'NONCE_KEY',        '(-kNi5LQ`H`3G:A%>8sBj+,iht_2MT9bfib>7hefN_T3tI|U HaFVXQX0T8K3%tp' );
define( 'AUTH_SALT',        'H)nT$J*lu.zv^oRWq3F*1@YI3.r6 $@z:RSY/}F.-;[IP=uB+11,&e}OM@yY%<^L' );
define( 'SECURE_AUTH_SALT', 'o(QR~4!OyO(S@fmpUWneDPQCwxxP)K?iY+kNxM787-HqEzR_FID|d4PF$:zV*.h?' );
define( 'LOGGED_IN_SALT',   'JW_n|=^r!gAj ^(O}L2I:{P!/pK4|0H^oOZH1;+76,6`1B}m}&h:]P%)O+NgjZ3D' );
define( 'NONCE_SALT',       '}c_TO^9&uM;}R[yU|IL,yIh.WWJn![N6QH;|K#B Q@?rC3Q$j}t(lohtx]|v@-%J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
