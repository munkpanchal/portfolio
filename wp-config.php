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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u384055928_8JdFM' );

/** Database username */
define( 'DB_USER', 'u384055928_T8ciX' );

/** Database password */
define( 'DB_PASSWORD', 'Hzn9wLIXoc' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'L6;Ya^RR^l0CcoNzT{LKya{|;YxE|m^)HNc2bHMa]z_ZBG)^52Jm!P`61Y5K3Wz7' );
define( 'SECURE_AUTH_KEY',   '.(|:^`)<y!u35~@EytqHgdPAneAR>GOFJtP/sv,{JM [X]tid/gph1;w]hTzm{Ag' );
define( 'LOGGED_IN_KEY',     'd]w&ef`gB!;k!SEc)Z=<ND,wCT=IZ<OO]W4^0sI-rpc]/5Cw>r7@8w7DBxLJsn(&' );
define( 'NONCE_KEY',         'Fb8_}f0c&k]QCqQ~zJQY:>6._qaxTH#_W<KP@G+M*JM4ovH)iWh<3>mOmPcWZ[c2' );
define( 'AUTH_SALT',         'n,AHANz,Q-0N!*&+OP^eA6ic1~gULa3gati~5I=h FVX)3?^ezAD(*&Lb jJCS~Y' );
define( 'SECURE_AUTH_SALT',  '_rCWuui9&In,mmea,CQFqN}SkNsA<)1_X9*GG^vW{*H/Byr1JC7<mM3OaJJoWxrc' );
define( 'LOGGED_IN_SALT',    'jy!~J+p*ZVOHGR{98#EP!.MffNntM+@|bhtO}I +oz=sF[]D#GM]^]-irf?9ZlY=' );
define( 'NONCE_SALT',        'Kl`$kobc_rpS<.8v3L-7_v^2HUYD.QBmpU,9iV3>#AAq:Wm>Ebl.6 AH?(2LQr t' );
define( 'WP_CACHE_KEY_SALT', 'e`2Egy k4Vi-o3yY:qK+_^4Z!3JT=n~&utvk<#6GsvaK*dO)lVC(,za>a*]ahqi&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
