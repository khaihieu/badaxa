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
define( 'DB_NAME', 'data2' );

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
define( 'AUTH_KEY',         'V%Ccr41Trl&bnSSg3:`b=V2p@Z0o^RwR2_k=#FZbzt5yF{)dhsqS>c4%NoLEKkOT' );
define( 'SECURE_AUTH_KEY',  '.o-fI&`L[A_7n{5rKfyr#~9ULBK49-D!C6i-UboB7Ve`)Z4u7S~:2cJ4rp0;#dpm' );
define( 'LOGGED_IN_KEY',    '4T&-rH2}H2G;[rXmR~h@@.-yP7b?@ua/kMjt;a.O-~k.ld@.MUmzac_}t:2+d=|u' );
define( 'NONCE_KEY',        '.?V6jevOnY,Bwymp.=@v$<=pTE@EGqp`2=sjcOJ.lw?~}a++@*T%3bR>*&0dds I' );
define( 'AUTH_SALT',        'vpgLGf=Q)b1zC`|<M?.0kN5[uvM[s7TJ4Vg?2&PTDh(l(MqvYON(/Ug~rA0Nm$zi' );
define( 'SECURE_AUTH_SALT', 'DZ<V=uqD1Oy6l[#}Y5phQCx8:Bl.!nr gfB7XN3:WMt`VBg!2;+ZU7{+8iT2SXfJ' );
define( 'LOGGED_IN_SALT',   'B7ZfLr,Y*YULh/4JJZos}>VE.DyjhEA^u2T;C2g!c!%3%cZl9t+39gE;c()rn-_v' );
define( 'NONCE_SALT',       'UGF00XKJ#U%X~2.*[l!H]EvCdN,&w%0Ry8Hy|)L*x:W,gq7/XLJC_piO0c!X7g7j' );

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
