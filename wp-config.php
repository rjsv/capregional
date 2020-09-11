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
define( 'DB_NAME', 'bovvevum_capregionalarequipa' );

/** MySQL database username */
define( 'DB_USER', 'bovvevum_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'G4*Kiu^fOMkt' );

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
define( 'AUTH_KEY',         ';;qEioQ0_+IM@F}a^j]w&At{~>kAv0eR[SF[:782?`53YWa}LQ5d4)GMeosz]m)G' );
define( 'SECURE_AUTH_KEY',  'D&gT-aX`HGMyGC~5IA|#Cniq?kclftKt2WFmHPR_0NuH+#^@^KJHpb!c4iP@.!Ah' );
define( 'LOGGED_IN_KEY',    '#ww J1`}x8>}oEXj?yzl=U+u:6<Pj=d(u5q2_kM>IZn.N/nt:Id{_G 7*CG[:uvl' );
define( 'NONCE_KEY',        'TO8527$t0O<yO#N[/*z2o>kI<LZn|7cD}]{D`^-mg7FiP9[g9876NyT,hPM{E4CJ' );
define( 'AUTH_SALT',        '<N05?EuRX gk9={QU0~x{R%1E-ZJ1Br{{*,i>:Pf);w7l7L,CO ??Nn1{ACC#S/,' );
define( 'SECURE_AUTH_SALT', 'Qq/p%!#0t0`~98e>63oyonr{V :_*ah]=jV1$<mFCRTfk?NY=>Ta?)J-ECt<D6-}' );
define( 'LOGGED_IN_SALT',   '=o0xbhXQom4)2NQInTzs_bjuxeMBPy(5k/ZfjY}S#q2p4-nwi:]qm%ecNyI4*y_Y' );
define( 'NONCE_SALT',       'jieWMXOk{WK.eb3_S=@FzC=RxPT*{yK$$X<FL7*bPbpRb0x;w`L$@]RJP0vwH/Tn' );

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
