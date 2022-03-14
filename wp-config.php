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
define( 'DB_NAME', 'gunfan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'EZ[a9xbEqnX6W-yV#@9t9t&~p5VF9W?kHb-~6bWlF{g}i8s{}o5|46}20d6X:NQ+' );
define( 'SECURE_AUTH_KEY',  'QWGkl|M-lpi#TK3L:4(|`&O+`}:$R<{#Gs;1[1t=+GPiW;y<~tlJ?#m47l{Ti5V%' );
define( 'LOGGED_IN_KEY',    'w.eYfe7s-go+w[(#3]?w+m2pDu175ViF.2duUCJQP~.INU0$A*&$QgI+:ta^@?t3' );
define( 'NONCE_KEY',        '$h7X@A[Fw}dRMaI]|@r->?B+;{akRmqh4.NCUS9W[`PZ~z^-u+R+?RcMI5%#EYcT' );
define( 'AUTH_SALT',        'xYyyyMp$!W%gLn:F:=iML^yKq5fNYzA@PVk@}VR|qX;=GV5c+vw)$o~c7bNjW:9|' );
define( 'SECURE_AUTH_SALT', '.myHB>bMjZa?)#[Hx l|TnpIkFFa-b1j{UlTL1,BiGNhu>t`Na!f(ko+@}ga*z^i' );
define( 'LOGGED_IN_SALT',   'Y`[GRw?(~R9gmUYE5R1c)7T_a0i>hB/3gn0{Xh d!7U@Q_n>%H9aYOuZhI[!&_|_' );
define( 'NONCE_SALT',       '^$6lB?A|`}bJWOSR%/) SQQ6c |%b_~d,(LBy3]Y<qU%$-mM2A>2ojZWA.e9SOu(' );

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
