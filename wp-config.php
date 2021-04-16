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
define( 'DB_NAME', 'labb1-linnalessandra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'PF9ZH^vp~V7^lz:Z:N(z3#[CgLN&#sd3B?H;t*<Qj$-PzVGYPccUPrs^c|P4hA<f' );
define( 'SECURE_AUTH_KEY',  'ls /no-2wT@<| ]eiY-!RSO+guOmWSf9|7r.B:4o9> _fbe#=YrC9.mW__gs2j^0' );
define( 'LOGGED_IN_KEY',    'MGSThtrtfEqIjSB.gCv5{;ql./;XqYzO^/)+?i)vP%[QSS{R}jCR^8E+a4W$b$y[' );
define( 'NONCE_KEY',        ',[OZknarCyEQ7Bu3cJ8ofl<ypV=?y{[]1>N-pvuq%TP!Qz-gppV)ZCWlcSx4)(Gw' );
define( 'AUTH_SALT',        '*y5iQSao_2ud43,9=`.[7WB8gIUH0|l^~zbkdaFw?9.c(LsJkmm!7lEcZNJ7?R]i' );
define( 'SECURE_AUTH_SALT', ';WDCP8|muM[+_=c*;@;IFt(f0oMq8a>PMZPf15O~J]G+[;[/g)d4oBT%H9 E?N9>' );
define( 'LOGGED_IN_SALT',   'mLD^~M`h*n>{s9QTZ~)J tv`;:# HP%Ry%P?a? RG:|=K[9_5TQb|.Qd<$75j5o%' );
define( 'NONCE_SALT',       'bcd1E&2+CIO7i.0_(R1-SqbR` >)_#Y/GIH[`%F2FhjvV.U_xD61{gG(e3N`Oepz' );

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
