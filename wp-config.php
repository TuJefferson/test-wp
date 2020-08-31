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
define( 'DB_NAME', 'capitanp_test_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'capitanp_perez' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EtPz*c4MDOXS' );

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
define( 'AUTH_KEY',         ']CaiqwaW$CID:6+$,O?^R;1>j.}Pyc%3&o/@oxa-W8jTkd(sSF?;X.ZYmNs}?Z]!' );
define( 'SECURE_AUTH_KEY',  'tV7Dhu#7hsM3N*WJolH}0,*j8Hx$;CIc5+ 7Z8!j>ooPC^m`F(%m1Z=#wLNapXN$' );
define( 'LOGGED_IN_KEY',    'e*^r%X,X{2:RauG-m6,diFpc:c}l_Dm8K#@b^TH#d>4Cy?Hom6*2C>GZ&t@ jM0!' );
define( 'NONCE_KEY',        '?aoMnRnN6jhScvy9]42}Zd^z@evNZXo$|]wB*bO O(dGlq5ND[7UyUWXpg_|/b>7' );
define( 'AUTH_SALT',        '^n%heX.#i38g#<Psd[,_Z#D]pI&vIHL^]auij7T.)T,?G)kR[)fM1<IdSI@}(o)J' );
define( 'SECURE_AUTH_SALT', '#,_4PWdAS$m[CFVnzJt52Kfh]nCEi31 l2x!Ct{rKuq!}1+OOJY=eHaNTe&ta9t(' );
define( 'LOGGED_IN_SALT',   '[LI<Cl~fdR]PqL:C{Cy-.a+QZ2-xIRh*L#LOc5w;}_+Uc:7aA={LkBE;R;ibg7#e' );
define( 'NONCE_SALT',       's>jZUK, Z.6=pD3SF!8Z8kKDX8{V-;7.{yy,D3bv0TmMWX0O(k jv2M33)}|9U1J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
