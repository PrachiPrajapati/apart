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
define( 'DB_NAME', 'apart' );

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
define( 'AUTH_KEY',         '6vYS3GNrTq{^pF)IkzM7RUG,h)QEOrLPKR@Y7Yo}{OQQXMVEUaiV#=xUok^I*8]e' );
define( 'SECURE_AUTH_KEY',  'n-5+uwk&Q6ZS{*8A}d+Xd&:dbH`G:K)Fa>{gT$roFK-u0s5YD&>PATA/;tOOMWw7' );
define( 'LOGGED_IN_KEY',    'I{s2cVfZBD_Z:?#tKz2O=Km=8/u.G_[*-&1y/Z2A*)UQ:Z0K+>QA!tv5.k o2aB&' );
define( 'NONCE_KEY',        ';!iJNS&t4G(HiF_mv]3$31A>v2.!h}SL$tS ]Mxl;t6~}nAB@d149=6h ]eF#ciz' );
define( 'AUTH_SALT',        '(6X>DzI?]M(>>.?3hfy1m T i+z}U ~pZi+5iZkxPk@}8z=jJ^<`t`%{lB1LTW;n' );
define( 'SECURE_AUTH_SALT', 'w@_ZN2*R?X,-pef&;,rq5-O7/b9`z,=8(}O}v|X%UEj}1ZM`A2xMxY n1M(0Xhex' );
define( 'LOGGED_IN_SALT',   '&oP>xcUE E!~K^a6Y!;TOXawNOGzfMMb(;9uIJdb1Ok]G>A*_OALr<t]s?R?T@is' );
define( 'NONCE_SALT',       ':TE{<:^K3H~NdT$DB==VGzjYA=dF%5<n8]>LBi6h!1(*^-kUKJ}sbGQb|Y4T#Jz#' );

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
