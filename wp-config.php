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
define( 'DB_NAME', 'waj-bi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0)Anmui5jd!s%]M?F(|Xr{l!w|k1m}h)`m|rxbh-KWQxE!Z?st)PLaILi}8Pqx+$' );
define( 'SECURE_AUTH_KEY',  'qa#s%JqDj@Kmi64Ai`zTD N]DeHPOrxsDe$lL|>;=$- B~9a@{6[S}$g[%v^aOPF' );
define( 'LOGGED_IN_KEY',    '!7E%v[*S10ced)kgN0 ISf#e%33@jU/z%bvJ}xx&wFDkHd#~UvOd#7t2!sx[/9]d' );
define( 'NONCE_KEY',        'iwmcPIb/70LPYC$W~d?qwVg[=DPZQS%wcLJcv*^4?7<+ UAOTQGnmcW1bIOeKB<H' );
define( 'AUTH_SALT',        '!X#Tcr_G/5z`1j#OSXFP.(q$zdg9^~qfs9$mQ<WDdz7.o^;o6fp^O_{@[2~f_4_@' );
define( 'SECURE_AUTH_SALT', '<Ve2falzn8/B5/|d4}B(`284t:*1o;@f}rax-ok[L;mP.%Xp?=j}c8~Zs`zM@:r~' );
define( 'LOGGED_IN_SALT',   '<,ez{/mtydj?KF8<Z1/SP.U;O,--q-+rtZk`3drT)@dWPb5CQ53?zb`p8ISkH&3:' );
define( 'NONCE_SALT',       'VAy[byWqmI<-0h>!I,Gnm|tT->/yMr?[d7^  .ZnmfG5(Oh?ZZ-9f{ZKjJZZt@#*' );

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
