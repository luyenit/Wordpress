<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress-project-one' );

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
define( 'AUTH_KEY',         'w}FYzUj2`UXT|>4@Li>38w) Xo?0%>D9F$R&Y<KKx=yR2oW^thXw]F,J)8UVYs~j' );
define( 'SECURE_AUTH_KEY',  't?DGH#$TiG%x!;<eM$N}DiR(q]!X>1~~E$?DOa+f8UF[<?6BvMWI%8(8Wck@Wm0I' );
define( 'LOGGED_IN_KEY',    'H$qKk][3-N<s~!C[0T|$Tdt|hK6ye:e*T,auM}`8V1_-y6f^wgi}ji,I[LMzKEeJ' );
define( 'NONCE_KEY',        'Oz?8jM<i?pKAOvLASy}mO_oMq:EN;OA9ijqgSJ9z20[o&;<SNInqV=fvXYW)h`Ng' );
define( 'AUTH_SALT',        'L<CGDp&vW)_Q)52%&2+:5Q OVJKoYr.UV%W+UH;m4!{[)mu,1R:h:yW+n]99VlC,' );
define( 'SECURE_AUTH_SALT', 'N6<<O?RO|}Pf}5n-sL*xy0R-z4v&{jXTKT,A5BaalSD6okR4yoxd3&yx]I.26OS&' );
define( 'LOGGED_IN_SALT',   'L* VrQu/mW]5%1+&8ys]psDPpqtLf:Q.P7G2PFwFUCbd/AeImMxji[ED6(y[8j l' );
define( 'NONCE_SALT',       'WF`+a8/{^g{+vCVOkrgNhii86S]_K&1udTYMW+.|VM-a96LT7Rvo.b)m%XlD66Ex' );

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
