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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nistech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '75-`@[iYm5_v2]7:rcM17ecw6JE4d2?hYj(u<0@7 %1IR<Nn6CYl,r;!c]~A0?;:' );
define( 'SECURE_AUTH_KEY',  '+I&/cv;F-GI7~dnnF~ x}H(%mDx29,[w:j|B6 xA/6}+QHuCvzoK}n1(AHGgI4yO' );
define( 'LOGGED_IN_KEY',    'YLk7OpRA#>gBs,~Brh%|A~e`,_3Dld[aA+ui*z3u8cq>t}SIQ]Bhr~i{Ap>5)zlp' );
define( 'NONCE_KEY',        '3;TzR9R;n-Zo^Oy^n3ql,nw10k8$?Vo);9%hn]Iz?g@%}NX[|m/$5Tfjv44XC:?B' );
define( 'AUTH_SALT',        '6c7_a5%J6x5XiL(j3X[pZLsal[pC|yU.Y6GM:GizKiUADHedtSrETaeo}]#nH$-W' );
define( 'SECURE_AUTH_SALT', 'OVuBfoTw}}kCM=)KA2#YaROpEtqeM6J]i}#SieQ@8Pu3,Yz,*2f6rW ^,r)*Z*K!' );
define( 'LOGGED_IN_SALT',   'er64BDznIPP~Pi{a)~aohgQRcs[-R1C~ocosc+i:a]4n4BKcI6(V?J,)dyp/<]8<' );
define( 'NONCE_SALT',       'JwNA3R8f5Qg$s7i=OE qxN@;EU/t(q 9+bB$]whetS2YiytQ>o Tt&oAbg$_]b%Z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
