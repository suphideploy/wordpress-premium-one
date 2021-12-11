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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_premium_one' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'QgukvsQA>{k#&1m%L@v]eLwfhyw2&F&2hpu=B5OhFirRI|a7!N@*|!i9>S,[Wv.(' );
define( 'SECURE_AUTH_KEY',  '<<@PYO w@$$}&~5^Z1[2R-;v<%|QEA9t1g)(rScsiQ9tB~=:_>Ax/3x<DvDr2}PO' );
define( 'LOGGED_IN_KEY',    'lH6Aa|jqsb;xzIGs1E5NX8pFM>2#lXVJ%Fb5wK*$%E$>I!(E6bA3|K AAN2/&:1|' );
define( 'NONCE_KEY',        'w^7u36U0%9RIF]Fzu?ZU&oEZNf,%XbG=j^uq^s_Ury7n!f)E{(WoSeZr!#uUj;N`' );
define( 'AUTH_SALT',        't84EXyt7Fm:%ALy*Z)lwQZF2(&V[%RtREcG{>Ze?;4`a%IA^&..,Zx1AufD1LyQM' );
define( 'SECURE_AUTH_SALT', 'X;~^=VB*-c5)wWn+VG]XX +we4%4ZRm8BA0(7.pZgspvP#i;:6)CodeSk*Bu/t<>' );
define( 'LOGGED_IN_SALT',   'p[^uTol0{~&J!^wlWkm/*VPI~?kqoLTHNFs`w|sq=}JNZ.cOO?AGa6lm rt5,:y-' );
define( 'NONCE_SALT',       'Ai{p%0Q@>dWXWYA6(wv:^z[AWI(#^&v^-`IHDVzS-} ~+(8T[f}vh+WVQy_lB@mw' );

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
