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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nishanthapa_db' );

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
define( 'AUTH_KEY',         'u25`(^zE}5K[WJI*GJRk<nH01NkYls~Dxmc$<`eWGvj%nuXnNs1+!Vx|inwv@vVp' );
define( 'SECURE_AUTH_KEY',  'Co|;ZHR2*Pd4pO$L5TTkmDw3>QOpvy~sf~_{Cjxr6r{S]y-rA{I{o,oa9TzV6kns' );
define( 'LOGGED_IN_KEY',    '4$uB&b[q7)|W i[9%0|:Cdvhk^=)v9u#?47j}wGkm>dfkwi$JAhK.viI%Z9{1HjO' );
define( 'NONCE_KEY',        'QAVLyx<QWhiK` .$-kw>c~)WOO)USJ>xgYg6qZC2!||ga; <kdc^T-?5]P>-sHrI' );
define( 'AUTH_SALT',        'sjUGTMl{(9.t@b&K1W1q!qeuu#m7UgP%M;s!L!U9aT3/8IzD-]x[CN>I&,r.M^1]' );
define( 'SECURE_AUTH_SALT', 'h5d6UH=kg1P63|9aPfP3`^3bkjn w[N+OkE-Q3t?Ej2S{`qu~}Mf!nU4.[=y%~ws' );
define( 'LOGGED_IN_SALT',   'w{{jUo3 K>xFl>}i@q:r]R{Uf9B3Gu2!75P IT}!!0K0D1`N)-nh*wrR6[l{$|m#' );
define( 'NONCE_SALT',       'ZlmFRHYj#hCuC5Nd*GnG,m/mJkx<|KE>*A+T^DE><$2-k)E]ev5qr@D0GBqk++A-' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
