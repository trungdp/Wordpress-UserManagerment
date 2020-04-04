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
define( 'DB_NAME', 'id13139092_dluninews_db' );

/** MySQL database username */
define( 'DB_USER', 'id13139092_root' );

/** MySQL database password */
define( 'DB_PASSWORD', '~WA1c]M5h7#<V5=x' );

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
define( 'AUTH_KEY',         'R[`#f89Zp,|@A1h.MWw7HRbS#}~$t[5}My4=k#_VDD]0nsqmM+&@Oru^;D]H55ZE' );
define( 'SECURE_AUTH_KEY',  '6G_Dnug&ba+$-K&A.Id].RLSxNMHo3+r<TK$c`KnlS7[GxccqsV[qbp7TUz1C|(x' );
define( 'LOGGED_IN_KEY',    'v3!5zQYboEJ;bb2HYVc7Af.b~JK3[tJ(=FMdj/ng<v=Uj52<acdSU^l]Y;A<B6w,' );
define( 'NONCE_KEY',        '-FqBVSdgAc;Zd[o7y8s@ ?TDtVd-PUsF*6LkI%~Ah6hH)IT ZE[sPAMd!Bi[6-Bj' );
define( 'AUTH_SALT',        'l5aLa&6DlI_l:zKh6^/4nv^/=|]vsCwC!rr9%I?K]2CqpyV+FLJ@H Mr:LJkedvv' );
define( 'SECURE_AUTH_SALT', '[9T^uDKF<)q{K6 +2E-J(!{L!v<e2[& R=Kp{H*&.@/%*MGZE^~^ffOv30vVD,6c' );
define( 'LOGGED_IN_SALT',   'hn!3X+H3Mj:JuFleQ^)hdp]0:*QLhAm9bf?>gn-0Zn3xhd{3x*M16$NzUG.D%w%6' );
define( 'NONCE_SALT',       '{%%!hCM~A8KSd(S%O>F7+ *}TRI;:UJAkobC+5#[M|X)f`(xJ|p@[4D/}|662j^P' );

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
