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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '=zOVsB`wHS4srJfCTYP]G7}8p>p@$xg5iz!qhox]2SOTTl*=>Xp>2N w;J*&80JD' );
define( 'SECURE_AUTH_KEY',   'AU8*,8R(DR$8~h+5sC>bk.>ztIxhL(B&RblST_cxvqep~;IDB&)ax4MzjP,zaLV@' );
define( 'LOGGED_IN_KEY',     'Q-!BMf$Iz>+gaywtF2`gofRLP^tNP^u!gC~#qML6>an5g.j@f h^r9j4>BB1N-CK' );
define( 'NONCE_KEY',         'IIQL*{O0xDv]6xI3L+|`mTu!d&l&Arf@:0D|mNm/<Q^ipuXc7s6U,F-G%y5@NYEo' );
define( 'AUTH_SALT',         '2#1!nTSfHTlmH|Hg(FV}[9>MYg*q<2DZqz^Pfp_duF;&pE{h+}NGB`g(sA~:`]dv' );
define( 'SECURE_AUTH_SALT',  'tL1V,1Q)yMN$48/Hf ;){>~ s~IR6[?34^YI,[wnd_z[5N+2M;XRUcC6)I7-.l|k' );
define( 'LOGGED_IN_SALT',    'LKHpLlG?%.-idOaPi{xUV`)/Myp,!!OZRi9][JV/vRbNF;:@,+)(C)<2!%j-EB<,' );
define( 'NONCE_SALT',        'MK):V5n>s37;=1`UGd9WjNrnv,mC};]LFnI-bO|73Smh@#B^I/|POJFA/CC53CJz' );
define( 'WP_CACHE_KEY_SALT', 'k`$N`1k4yp7$V2xCCisQRhrM|#gSZF*!&J1@5GYD%Ve]tC1JN2I|Z$X!vxfdwpaU' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
