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
define( 'DB_NAME', 'agency' );

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
define( 'AUTH_KEY',         '7^]z3NnfqB$A:p8]2v@#2B}mDVdI]B8q-Z`$c,a(CPi6rC$vBcjr04DRMeWFK/T#' );
define( 'SECURE_AUTH_KEY',  '0O+zy/skGDM(-E@RTh/Jg!3d)hKLqNsF/GwdF[i!bcPPG6jkh<vS%&tY+Edd1qbO' );
define( 'LOGGED_IN_KEY',    'JhHuJ-T=670t*0T;t&nrvfT(|#*@Q4S7G&+@ZN=Gt,1!@L6U]uM`wwOVKePe(+.!' );
define( 'NONCE_KEY',        'U4_BkUL%k~/yHGQCT]eK08gI/3kzpW?EZj*e~+d`)!:HsWa@MN(oR$5lv[<_1rk,' );
define( 'AUTH_SALT',        '|Y)/KAZxv._?4@gnR~k)C%o YUK)8f zjH0|sbEj:d~e[W/7e^bT81Iw-L$x9tVM' );
define( 'SECURE_AUTH_SALT', ';ChJMYP.P|~+^3~8LkYD*-Gk;IcAC[yV.]Hb?*U4#x?E<dp@tiIGyIMNe|CCBSn2' );
define( 'LOGGED_IN_SALT',   '1K>VZg}F-xBRU3$6{L#7}bX)fHsa x]bK}~9CdW4LYgf%;;nJ&,b/kc!d%4FF8H!' );
define( 'NONCE_SALT',       'T<qU:$j!I7+aMMe3.^J*Yn2!Iw<}5nyiK(ULi(%%5g(UGv+*k5oc}*JS}nS7=f1=' );

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
