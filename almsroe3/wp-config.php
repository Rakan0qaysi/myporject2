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
define( 'DB_NAME', 'almsroe3' );

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
define( 'AUTH_KEY',         '}M%wA.*YD~2YU}0R4SqL^jZxV8!%@AiL{#ENs3ME&_TN-.^.j|uH:o^#+wl!;|f6' );
define( 'SECURE_AUTH_KEY',  '5^Laa<n9]gAxC5!-q+alDq:gNh?bJTcrsG6p<8QX{gVL:]H+aB6/*&S&]gA:U(Z[' );
define( 'LOGGED_IN_KEY',    'n,T)/xnA]_25fPp0~I9?>lsz#t$bn-QzV{ww65iAHd*cZLA_s6sS*.$y!#r*yTd)' );
define( 'NONCE_KEY',        'tX{(_xaBa*${X2%!}Y0 Ec_CUk-]mm(Fn@wMSwB;h1f:Kp_P o;Qb+e o+xRI~G;' );
define( 'AUTH_SALT',        '[O}|]F&8vVY><t)U$1-H6<uHYa.s(Lo^1tkv~I1_bPA!aBp,p}ZbhexWt9JHIpH@' );
define( 'SECURE_AUTH_SALT', ',q.Ih`PD^Kw9Cwy.T%&#YSpmtvq,/;F&C xE^{hz_[_^r`X#Ly}HjVoaI,W!Mt2v' );
define( 'LOGGED_IN_SALT',   ']/B|pL?}i8=0L3H)AK}Tz2lPqki1&>HKCe8aMSU:ukd+V#A[N_;T$@Yk~yAJt&B ' );
define( 'NONCE_SALT',       '%}B8)DxIKOwdN.;JiZ=3uCx/uRF(ZZ8%x@=7_;~bWhyX1?/kd<A=K`:,D|M[feTh' );

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
