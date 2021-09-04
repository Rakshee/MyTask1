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
define( 'DB_NAME', 'mytask' );

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
define( 'AUTH_KEY',         'BGe^@*qtr#8Bg5Y-3A;r.by<r#?f:sA,3_7ohn@8Fj8~j88BjX-Upr|AO[Mj2Wmk' );
define( 'SECURE_AUTH_KEY',  '5R>7C-R5ZeB$RBn5zUvQCZNDaF&3_$G~}+W;lbG#63(A{<4*ZSkz%L9UkD0=N:Q1' );
define( 'LOGGED_IN_KEY',    'h1^u=}-&Z+%d0nS y,w=ZCUY$=p;[{Lq!@aM<c_0Dx-(`#{CX`8&kVN;j,:Y]5Or' );
define( 'NONCE_KEY',        'rq `d2g<rh<[$eA9e2Ka;<$g 4k%Tl^w?r}cb~Lg@i,rA!p:IjSFM)]o}aBNZ?n$' );
define( 'AUTH_SALT',        'D[ce~c]oIEpW]Nh%Y^8sk;3qi&]%mXKarHMO0e)_?}v+|9I4k|{QkBb;yH_R&}mr' );
define( 'SECURE_AUTH_SALT', '(qhZl)YG7H[e`+@%+u?Iq8eHZqItY9qbwX-`A4fNcvjDe79c*U{=9$L}U:<JHnN|' );
define( 'LOGGED_IN_SALT',   '>3VgHx>]mV;Zib)O?!.>6` |2AARA-}6h!yd.bD`$;1-hmJ00v_r.M#pxu2[4Ilq' );
define( 'NONCE_SALT',       'pZZCF,G;:<(B})Ho-W#/_U[N-5.RO=!fH>*~kH|4,x-.d1-G& bYf}o!e5ajNu%^' );

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
