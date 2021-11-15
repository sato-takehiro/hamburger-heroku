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
define( 'DB_NAME', 'heroku_20cfe2c083438bb' );

/** MySQL database username */
define( 'DB_USER', 'bcf2f5faf22dd6' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b89c41fd' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-04.cleardb.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Wi++_>LiW.i KQzAbRrd{w7oTr4-W`:vJD|oRO6817-f3SS)+4BsXKXYNQ>-J3as');
define('SECURE_AUTH_KEY',  'lAYr931sc)E@Et.QED=c.Cxo@,_UZNw,J0!(=hxD];_=ek)A^A9Ns$o6IvKdZw@e');
define('LOGGED_IN_KEY',    '`rE4no]}EA*+T0?ty?;*TUkHiRd`QI@_m;n#SI4CxsNL##;}I1i5H(lU.3CaE[|$');
define('NONCE_KEY',        'CON`TH}c`}MRhf+d-j$n|}.w&BXXKZ+hm82fohX=(SpttWa-JC;b+!~V+LWO_V7w');
define('AUTH_SALT',        '01ozRcNmblAgvN~-S8HWiy3!2x3;=B$kgAz=6HjE$jM#%7)Lm$s9+f_ GTUq`8aA');
define('SECURE_AUTH_SALT', 'vt_7xf&[mN6b#zYoz/ZOz7|}wA_$ag=Lka3+3[W|DSE)Zx|pcZVRK}%.&_#lyO{]');
define('LOGGED_IN_SALT',   '6<adid4EJ+;..|aNY42gTDrpmNp]rYVZ1$pP_fg-R-W@45Q]n}_DVW~]3o-L+S(S');
define('NONCE_SALT',       '=mLJ;?]HRCl_[UliFb}SRCb$Pl.-P9KWe}-qnN)9+_`nN nTkv3<hd?o#e[J_f>`');

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
