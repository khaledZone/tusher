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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zl8NG;[Z1A?11.D:oAx]5,PahUDM0=$*;2>KRw*G* v^fg  ^$ahHwda3 0Xc@VA' );
define( 'SECURE_AUTH_KEY',  'r*{#|s&YtHApsFX@_0F}/nrS-n%BbaC3wmi%NfX7k0RuM@`hS3O>34>Cd!hVbH1&' );
define( 'LOGGED_IN_KEY',    '$bz*hyZc@a+/p jvw}__M7q_gXp$c>FOb|)J2t-zsD$D!0rO<B*O>.`Zs&}`=A=.' );
define( 'NONCE_KEY',        'T48yBdpe.B(or&+I;/k}[[QK|UD}8fbxp-}v#h~2]MWn6wrY:kH.RZv,075<0w0&' );
define( 'AUTH_SALT',        'CB?dc79AW9tg6&.Q]+W|tOdfplqvLQK V~iQ]Wz*3ZS.EJ$&q`!R56u)8./g(3.&' );
define( 'SECURE_AUTH_SALT', '!.A(-V2I?T1fNk!_hSwXq+ecLS=n+tjdC_&v15tV&UZf)2 f>da5Hf`KJ,(2GrIj' );
define( 'LOGGED_IN_SALT',   '0+f=SWCM%:hh1Ke-1UApB=bC640aYC4Q<R^BkEXgc6xq]0Gzh9ILxeKu0ftiXNz-' );
define( 'NONCE_SALT',       'vQs!)tw3_c)[}gR*tpo6WWC<*j^`!5lqPS=vdYxGI-Nz?ms#A:+^2?-s5Ly|0o-^' );

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
