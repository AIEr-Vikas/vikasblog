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
define( 'DB_NAME', 'vikasblog' );

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
define( 'AUTH_KEY',         'GK>%}YYDB7Tt>lz.o:w({>Uu(r?*~*FJqG0,(;:{5gK=q0}(0~_,0H|imZB?n,Xn' );
define( 'SECURE_AUTH_KEY',  '(#)Ad7d^nb.H%3xN331p2&s^NRee=9bB<ZCsR~n~qTj{amz&jjh}<NE}+VTij(|-' );
define( 'LOGGED_IN_KEY',    'k>cQx2_A!~W<8lo4iW#5r{T>DQ1@+u<bjVmnYvYf@BaQrb[$C;Pszeg7T@24&I|j' );
define( 'NONCE_KEY',        'N@7G2(k+X!Ccu*z;lpm(h4NE~M4qe`F;,!UCPw&L87KV|@k`] [qsUe@afchJG/7' );
define( 'AUTH_SALT',        'ZyOPvpFP[sqi/Io8=iGvcZOMwT?4{mQ@)GbN=9s`2OF)K,#Bg#DCtt=#Wj@)O<ta' );
define( 'SECURE_AUTH_SALT', 'HS;1aj+I*zm>pi?KRb3;*[A[]e:xa*2Tg }aR!b-Qi?r%FM9b ^zE/lIcS3+0x+s' );
define( 'LOGGED_IN_SALT',   'Gy^H*boV#.w,S_Wb;dUV{]sLMDs&jAR3X;Hi[i5>0kYo]qp(?G*mNw~#_eA,m[uu' );
define( 'NONCE_SALT',       '8cl@#syVLy|5!`Ae)yJ&q3yBu/Ic8q<`)Ms)3_+*IeO^5&ZN,15Y$A[Fp}b,d3)Y' );

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
