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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '9CNfcjv10OgHgUTMzl59oTsIcdH7gRMIdWESu5AdsNE5o7kmsZPD0cpK7OBke9CUVutvrhg7C3vP3ofoKutpjA==');
define('SECURE_AUTH_KEY',  'jAiQmuSS/0gKWkRxNVgHjZuJTeib/BJh0JskDwjpkR2JThr8mo9qbZgTbQbZlCVnpMTkVG5XpGyZWiZTTcD7rQ==');
define('LOGGED_IN_KEY',    'KtMncCbpBmNEiAMcTz/50bv+pGocDNBDlhk5G/AbqvveW9aXT6ZOnY1LchOz2ygeQoMa8ogYgexOcjsqA4fi3g==');
define('NONCE_KEY',        'Wf/ADffb6pk22ub+wNlSJ14oH75lMrfDen+RCMxNNkFad/xDptOYdAw/IuSNq+bujf2VT7Sqn1+c4tlzrrk5sA==');
define('AUTH_SALT',        'yeGhG1bdkqbRN7NFK8OoGDE1dhz6EBpEXBw7E3k/MmnVgsw3k05xF9B0Bjb9a3Rw1GS0MGD2OXTBttxvRWAZhw==');
define('SECURE_AUTH_SALT', 'vZ6qy6SocWUJIcUN+La89h3pp96joHsr9jTwWDf1oll0SypSrLzdpK86bsE4EzoWpG3M0R3W35W5nCAKZKlvFA==');
define('LOGGED_IN_SALT',   'v6zMhm5wSHcCW9qOy5BTEO6KuwgH7Tr0s6GJOtJmWn0+hbV9hxemNgpo2Ov3BpWefEDrMjUXGEPzRP2J20jqjg==');
define('NONCE_SALT',       '1f4Zs/jhjifm5cMrlz2VffahLWtAR0on6m9kSJyy5u1xKHWqnLe+5JBK/ueSd/Qz5NAoZa1hpl71oiFL/n3vbA==');

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
