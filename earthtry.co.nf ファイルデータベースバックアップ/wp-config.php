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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk4/2746511/www/earthtry.co.nf/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', '2746511_wpress3b6311f5');

/** MySQL database username */
define('DB_USER', '2746511_wpress3b6311f5');

/** MySQL database password */
define('DB_PASSWORD', 'q44vtzarSSRARrAMR0ai80IPFJVwghIO');

/** MySQL hostname */
define('DB_HOST', 'fdb20.runhosting.com');

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
define('AUTH_KEY',         'r&bY.eGD _b~m,e^]0z7M2ch=G|,uf i$>$K6DwyV/Q^6GCG*MQ]2;.oEtbK1fO*');
define('SECURE_AUTH_KEY',  '%Va<m^jv4`2ctYB$+eq0h7%4@Js//]f:e,.e*YR[F#SGf)]weAB|jFCg.8GD5GK8');
define('LOGGED_IN_KEY',    'B7WJs(%X<FIR!ZMwTPZ2,8,^3r9A`y+K].QsA$21v{NLjRYvqf]@8V=_I&.J>q!)');
define('NONCE_KEY',        'bKt&]NMG*1JL,kuld3Eu$B.5dL|SAC_@Qfy58!bpYE}Q}Z(-VOW%VNqi$,n3_qTm');
define('AUTH_SALT',        'XN?I+r_NeHPkX4XKwn-kgB(.iW/pvK>#lw*21?rh[S1Yz? &&4/prO->Y=H CWVS');
define('SECURE_AUTH_SALT', 'KC2,qKWPrU!qv(Ak;If()RFq)A]0BGwTnK^VGpnK8[jn&71gUe5@K3r%K_2GyUk#');
define('LOGGED_IN_SALT',   '}n,pKekEN.s;>C9, Cx0USqNom(D7X6A+SXrRa2-9Z~z}ZDdFi#K=[jP>db4BlE4');
define('NONCE_SALT',       '3%D^QT+ARv*XaoFMwj)a_u,mP_^_;ry(#Dd/:RErC5U3k$0(z nb$II2?eq`VXO/');

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
