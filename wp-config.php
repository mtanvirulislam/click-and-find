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
define( 'DB_NAME', 'click_and_find' );

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
define( 'AUTH_KEY',         ':VXXPPN~me}k`$F_g/Pb@8JLJbS$%g,,%|xFE1]2$ffA,Ssosi=MSmo}mDOD!(9J' );
define( 'SECURE_AUTH_KEY',  'm-m~7.=S`A@pzAGB`/0DetR$S?j|s%f]Q]1jFCM4RQu=-$}I|TnNb61C=[ FL:nU' );
define( 'LOGGED_IN_KEY',    '|kkdugW3ry!MkGs(eaMz(u&)[D`x9HQqjRa%}4cG~#BM}tS5bj,BOUgDYTH1:)JQ' );
define( 'NONCE_KEY',        'kJ?N^:4~RZl$$P:R=De=d %xV81:|=2WO8ccPnmoM,j;lT]% hw-9$ew_c;;sMu(' );
define( 'AUTH_SALT',        'GGYXpx^U.~k~fa[+oOfg ~,6QNOBXe6Xh6TU2]5iiPcAqIADv~JSH58p6SX_6|$=' );
define( 'SECURE_AUTH_SALT', 'U#E?$J/JASw=WTM;,>Ne:[;L*SD`),4 ;sU3Qp1%88,~(~;)0|L.tqOPnHhN/ lw' );
define( 'LOGGED_IN_SALT',   '>3:w?wJt.&>)2gJlSk#viIB*mV2c;V/CC~j.j<jwxr[np]@xF;. AA^fVw o[DEk' );
define( 'NONCE_SALT',       '~(c17t :2Ce=B/;F;ce;K?mmk@kshe]+1zK<VHDQ]>@-jYjyBl4cdqC+K]7?Ce-&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cf_';

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
