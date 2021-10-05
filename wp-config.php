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
define( 'DB_NAME', 'heroku_47c0de2f1ced341' );

/** MySQL database username */
define( 'DB_USER', 'be20878ace2b6b' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c1c32c35' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-04.cleardb.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

//WordPressのデータをサーバからローカル環境に移し、ログインをするために必要で、WordPressのURLを変更する
define('RELOCATE', true);

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';s+L.)M+bz=TZQ#&ZQ*Nn=R?hj=SO&pQuL4m#{~6g%G+$l/mlX.|4[P*i8K%L!=-');
define('SECURE_AUTH_KEY',  'n+LE2h5Uu,P1fH&e~tCw*<`Lc^Xz^9f|;B`Ddb?Ua:#I12 ODV>rPOs2aTucNr0V');
define('LOGGED_IN_KEY',    'i~UHo,B+uEJfF.ax2}EZJua=+8E,<<Y.l^iDy ^*&{2jeM}j1F7JG}:f+_v:L+.d');
define('NONCE_KEY',        ' 335f=;A%;4Img4^NC4maBloV0o3&OBzv%xd2P0s3-Xl-wnZ^{0c!_|?|M-35qy/');
define('AUTH_SALT',        '-:@ q%%9b=!9!i(vI% LuYJC63|#*mkjA8(9_y@mdzvaep-S=dd@mOU+`dUmtGvp');
define('SECURE_AUTH_SALT', '-|+^8Dhw~sUA`H*;:?MnV|^q^w*&&pe@s=<|QzP?vJ16v!=MDh+=ZNxNmR1}y,lE');
define('LOGGED_IN_SALT',   'E[}zgHq5Q`bL47 0lIn1H#Un|x%tlo_9A?&0DB=Crowhtp+eA|LQl&to-`/^8tg$');
define('NONCE_SALT',       '|h?=yX4ZIcjbP+G>HG;o^VD8^p+HmG:]#Y>5^F<]4w.n+M/CpW&-9x:(.5;cM@4<');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
