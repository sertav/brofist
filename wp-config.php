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
define( 'DB_PASSWORD', '9TQN4twEXz' );

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
define('AUTH_KEY',         '.soq^&>2Q_-MGv^}v}-UVW%Z(rg$l&yb4A_?D_~/@[>]OsM/sIn~_d*L32]`]iir');
define('SECURE_AUTH_KEY',  '-J$IKUkS38h0uG-cM^DQs1Z<?PF~s%,+7xUK^mrHu]ya|:=IyU+M-zuq,ig:oO#7');
define('LOGGED_IN_KEY',    ')V:K?dp=!mdyQen4Ea1QAq/Rm<mM.s5&x*{ aQ[I6lQ^fpOymbpQxTMClY:^)3m}');
define('NONCE_KEY',        '[MSI=4|]I4]m%|yo|((fz3q$Pw:Fp~x5+UZa)IYy6f!Q{W%SK}Z90ad/=bNmPW<6');
define('AUTH_SALT',        '47J+-0^n-W]uMw/urO,!.RhWc0+Fz}r,rtu.m+4TbXR|R|Kbr)mQvHr89C@|+TC3');
define('SECURE_AUTH_SALT', 'uHs!{Zc3f#,S#+da2r@!-Y XBAc|N6N;&88vIUo^.IRnFmq|/9h#83T+a-7tuv:m');
define('LOGGED_IN_SALT',   'Hd+V`5IXViMh0?r1/u,j{2:JeOO3N)Rk!sbqjX^*4wRshSm>mUnj[u?E1_p+A*ec');
define('NONCE_SALT',       '%FS.Wb-^:W)hoN]b-j:N!,#8Z2T#AE[Ml@RiRa%xm|GN[Q-@U[U1*(P<5R!Z4wgb');

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
//define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
