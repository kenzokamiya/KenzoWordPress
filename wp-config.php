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
define( 'DB_NAME', 'kenzowordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'i~a@S 4{|,-|:8j,lLhn7Db6W ,q>n;jDiRat@ANXq6a9,441g/z4$=eu+-ALNjD' );
define( 'SECURE_AUTH_KEY',  'Gh}Q67w3M93N=Xf8yqa-S#>S/0D>eQM</{0QYSh}2$W8u@Tm##$4;IFe n^7p^MO' );
define( 'LOGGED_IN_KEY',    'uC5p_X6P1`Pyn~v|xku5=}{,6Z!;^F/Hn-z &35_Bt$),{;PrM+mW/k1:,sYO>?2' );
define( 'NONCE_KEY',        'h>.aPyvIJ7FxrDDaC5<N$CydLd({cy_sv>rP.,$d:ax7w%dx;)bTaj*7EM=`oM%?' );
define( 'AUTH_SALT',        '|@?L|8.Yr<:n;@hLr[Y+s(5;+1tX%@eV`LqTZx(y$06WuG.Z?p+QC9dgjo*[?IIH' );
define( 'SECURE_AUTH_SALT', 'qVX)FZ<L=RA}mn2~*>w?$I>]uBb!ct]^-ONh:,i#p%jo#qB,#T{C2F%i$g+Tsg0d' );
define( 'LOGGED_IN_SALT',   'co]Lll;~4!~N6EW|Xv?7!S8Lru5oo0WJ>R<Lqm{k;U7X:)6IqFsYP,RyTgZQ9W,`' );
define( 'NONCE_SALT',       'V>lzIg19&Sqe?_Sznrthf+w>%3xRVS?leTDZ:b B(cBZCk%az3`NYJb5 YDw)wmn' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
