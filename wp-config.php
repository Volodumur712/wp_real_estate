<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'real' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'il/3pX/i^)^_>%>Wq@OU.K:F|p&qPR^k+}J|Vu^[msn#)%=66oQT9`{bi1I4dXSf' );
define( 'SECURE_AUTH_KEY',  '/Z:M6qBvd @iFyZ~K;bcr)Wc7E1QYd3gA@?^9KYWO&`91]ho?olI72[-[4yROw1k' );
define( 'LOGGED_IN_KEY',    '7<*K0;`X y>(FA~,#8^anw fftr=E^{YU@5:+/f6NZO]!(%ZM}PJTutbu`x`Smtb' );
define( 'NONCE_KEY',        ',>_en{/COSyhz6[+w)Ae9#e#?,cp:iVfI5C|(71j~se|M<!Y8{HrWDYh|xQ;Nrpg' );
define( 'AUTH_SALT',        '$20?JYCqn1kTgT-t>1`e{kiVvPM>zn|YkrURjr*P,PGzg80j?MN`PIl+|MLFsr~?' );
define( 'SECURE_AUTH_SALT', '@!hJK+12dOazOR6]YDfOo`Z*0hJbR14Z9;u9Gf]F1kHKxC}!phnufJJ22oU`?8LW' );
define( 'LOGGED_IN_SALT',   ';A$.Tq(!7w8T4<Wwwfw:HO:4bCSnBF5w}pixGqGJu*)#z|+8-_Q-tpG5$XXL]Czn' );
define( 'NONCE_SALT',       '{WVp=JuY>u@_./>oOSv,|AIQId?0VHw)Oje{lf}K]?PnU!6Xy[{L?pn1T?cugi?E' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
