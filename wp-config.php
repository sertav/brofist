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
define( 'DB_NAME', 'admin_brofist' );

/** MySQL database username */
define( 'DB_USER', 'admin_brofist' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XOJCcTGNLB' );

/** MySQL hostname */
define( 'DB_HOST', '178.62.28.49' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ($_SERVER[ 'HTTP_HOST' ] !== 'brofist') {
    if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
        $_SERVER['HTTPS'] = 'on';
    }

    define( 'WP_HOME', 'https://'.$_SERVER[ 'HTTP_HOST' ] );
    define( 'WP_SITEURL', 'https://'.$_SERVER[ 'HTTP_HOST' ] );

} else {
    define( 'WP_HOME', 'http://brofist/' );
    define( 'WP_SITEURL', 'http://brofist/');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MbY0RI}^z5t.k8Z}hw/XW_Q5aNv(55WQSL0xC8O1q#YD2-^j,$I/ogw{>>[g;B7u' );
define( 'SECURE_AUTH_KEY',  '/_G$.5&}S7 <X?:l9XY-9?u7j&m)TxMi+;J(yQumf{In7-~LS/-]u/Mq4D?IcVS1' );
define( 'LOGGED_IN_KEY',    'Wp-g!OYzT!fT163=0IDJ8Et?|f._O>7$Z{fcug!3;aDLz>d,<&G:o4[pmS{`v,OE' );
define( 'NONCE_KEY',        '~sLmf5Gu5<6}h[oZmXp%*Hr|]r*{fqoQjfvac(9JVsQbSP() Ts>m@L`&Z 3(1^O' );
define( 'AUTH_SALT',        '{!e a:{|)3,m/(?e*&@@Q~:,V GDXO|HQqi;HFB Zb{,%3!beq><SCLWk?pB6l+>' );
define( 'SECURE_AUTH_SALT', 'Eol@I+wA l!;szJ~!]~yVD4|_ltr!]6muD0H rpyI{ygO(G-j[a2>;Fi]f!B/0Fo' );
define( 'LOGGED_IN_SALT',   '2_<DtUIQi:NyXM)6Fkc;tT1`O=${vLYxADT2cR-wjQ|Ls/1Ll(fy)Gw$]g-0__jA' );
define( 'NONCE_SALT',       'P>I>ndLzjt!J3O*~AGqsJ_bFv8g&ydt0pq[UyO<tO.cac1MQ0w0_,B^N/~(n:g[3' );

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
define( 'WP_DEBUG', true );
define( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
