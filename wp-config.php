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
define( 'DB_NAME', 'sc4egpf8307_pechlattcom' );
/** Database username */
define( 'DB_USER', 'sc4egpf8307_pechlattcom' );
/** Database password */
define( 'DB_PASSWORD', '&?fLFT&yQm4V' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** WP_HOME URL */
defined( 'WP_HOME' ) || define( 'WP_HOME', 'https://pech-latt.com' );

/** WP_SITEURL location */
defined( 'WP_SITEURL' ) || define( 'WP_SITEURL', WP_HOME . '/' );

define( 'SMTP_HOST', 'mail-eu.smtp2go.com' );
define( 'SMTP_PORT', 587 );
define( 'SMTP_USER', 'pech-latt.com' );
define( 'SMTP_PASS', 'kA22E2t4AuVfH6n9' );
define( 'SMTP_SECURE', 'tls' );
define( 'SMTP_FROM', 'email@pech-latt.com' );
define( 'SMTP_NAME', 'Chateau Pech-Latt' );


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
define('AUTH_KEY',         'zQ;E|CZ2U:A40I<}loG?<k?@oP_]D<=y1-Qu61F(]PW-p~6osrQKRrucDMv$^C80');
define('SECURE_AUTH_KEY',  '13@nCqr9;S!4O-<-PQ;n R~C@b*WSKz;7|WBxp},g$:a^,4OZCBga6Giw-]=op~X');
define('LOGGED_IN_KEY',    ';<U;zELZ.a8xm-`PREO+(,1Z|37)Kj5m[?;1//mQ5P&(1|6r1CHW8GEx0!jTAE0,');
define('NONCE_KEY',        ' Bi>[4+lWKJPqA<v:D<+5nN]g{1^8sk/zNvNKT_sWJ)K#LmEH#p3A1NJN^3)-!WQ');
define('AUTH_SALT',        '|6/@>(1|OT#^|<~M+Q[2>z6!8+e9S^ENVK+f9^+Q#a!|@>VfvX[xv^J?g?PeD^nu');
define('SECURE_AUTH_SALT', 'U*Mi|mz^5m|(K_nyrU)UKY(l-v(>U5/B!x>KHiW}W4%/R*DM;e7hGQj$2+t-Ywql');
define('LOGGED_IN_SALT',   '>q2B!WsMW5Hq~a[JA;5o,n:wz2iT+>mf_Ck-@25hH@t_Hb)g+N=I U0@9r,~nGOg');
define('NONCE_SALT',       '=S!3*OO4ePK(p_);>.5pJp62$Fc-ic2zf/4_.@r|yt60y[UM-p-%lB<B+vr$d?-B');
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '7ExqMi_';
/* Add any custom values between this line and the "stop editing" line. */
define('WP_ALLOW_MULTISITE', true);
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
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';