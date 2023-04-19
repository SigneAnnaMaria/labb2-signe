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
define( 'DB_NAME', 'labb2-signe' );

/** Database username */
define( 'DB_USER', 'labb2-signe' );

/** Database password */
define( 'DB_PASSWORD', 'Dededo57!' );

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
define( 'AUTH_KEY',         '_5!:Ns$wNX!!>huDCJ=we&;|Is/z<u/+&}DeFCm=tp-&Ae=@PvLzek%E+j@Uu/Il' );
define( 'SECURE_AUTH_KEY',  'iKRmf!Wv+{;l0TdHkhAV*sr6+El+`Fo{]<KxnicOi$qPYqOAD{e5 ywsg&kIDIfL' );
define( 'LOGGED_IN_KEY',    'vd)$%38#_4E>;$$MRy5Jh5@m(#7H7F a,D2vU_Mj3)}.paXf%#j`U(:rJ3zap/.A' );
define( 'NONCE_KEY',        'z$?_(K`iL%^y.082fzXX|Pe_ ;wmLtyXI?<AT,2i}.>-7W>5llR`11g~*G?v1^]b' );
define( 'AUTH_SALT',        '?{NYWmy>U-nGGBNh51xEr;+5v?{&3<=,;)W&ed<o$HUVydGP;S07,w! !)C02K`=' );
define( 'SECURE_AUTH_SALT', 'k7<?-zn:|_:{8[7,c^ZFIoCvoqEvh CAMfr_Vku8f7*;12;.&F2PFP/nmz>(SehC' );
define( 'LOGGED_IN_SALT',   'qA;5lI{&gRB:nVpiP:gVd*yaOYDd,We#4 4wWECbpKmv+*5{875c^`kIRI9cP}/1' );
define( 'NONCE_SALT',       'w{/ED~!3P]mn};/po+eYyWj_mo+tmXFfsaBKeNbZ%Q+Kl?|1vmK-#u4,L@[u}oV7' );

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
