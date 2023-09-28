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
define( 'DB_NAME', 'static-wp' );

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
define( 'AUTH_KEY',         'ZQ{}CLZO0u+s=dUk|*nM]9FAKUQqBPyvT)n_$UFq=!.^V}vCoN=#A/Q6RaSydP?0' );
define( 'SECURE_AUTH_KEY',  'S=J?>&8C%Ec-T!n2gq #yEaP.?.W{^~k{~A5pkpd6i/qi5X.?k~Op,F_)MRX>i#{' );
define( 'LOGGED_IN_KEY',    'S[IRi~Xs@Z8[AAP5cJW}82yhp#gV!yM<N}=<?j[,Cw%8.jGwqn1pzO70U{O,#7T,' );
define( 'NONCE_KEY',        'p)FjNB|c6vf}EN@>T+3[9T Td~iyKv;vJh_y@Fa3[-9b%Y]THC!e5Qm!yib&J7(*' );
define( 'AUTH_SALT',        'Y-+ADpB96EJ{w&juR1JZ-KL5Y|x9t?6&Y@6bkJ_$I04SQPutQ2]y42,5Ar58eBc-' );
define( 'SECURE_AUTH_SALT', '8ZcpX^AYn*+~pl~PIA-5_xywA,(a3(22MPP!b)J/L;klaD2L1Znr><YgU~*D :eJ' );
define( 'LOGGED_IN_SALT',   'uMn6vzCd}N0#kb6cMd;7?N,?KEQB0&K{3^k;xwX&!%#JP87Cr#JUE6`fzO$f[?T_' );
define( 'NONCE_SALT',       'fiS0uvG1k=kS]Jd9Y/VTgF89*IO}vn]T(CY#O7bTrt|xUu4NTCXouJinNL=${J|Z' );

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
