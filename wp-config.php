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
define( 'DB_NAME', 'sekul' );

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
define( 'AUTH_KEY',         '](rKP+E8Yd~/@<A-wozJenBo/{<$D2a*PE):U1^N(5Hya#coQHIzYkp+J0@OFla,' );
define( 'SECURE_AUTH_KEY',  '(5_.4i&j0nO&[6[>Zggiq{,h`xUv,CLa*]]l~=84b*S/1X&O/Si#xwdqQ>K} 9c.' );
define( 'LOGGED_IN_KEY',    'cWrHA>0&=oTj;4,?DR_gI)!r-6:SQ80S;Enb$n0yFjy4Nsf.MTP2445(h9+({q1{' );
define( 'NONCE_KEY',        'C~Ls_Rx]jIW t=hoQY7-n*U<OnvD8l-x>*HkMN2Fyk-&_.%|@-wI(+IZmmCMEKf2' );
define( 'AUTH_SALT',        'cZ6&v*2ADVmw86e FpPC;I/|U,$ s:u?/qFC9:8;vn$<9C3iY`MzQGV#F.epO./?' );
define( 'SECURE_AUTH_SALT', 'kUo3t R@kVx>4n1t%u)*~Dn>l>CGrL#[J%RJxyA/l45gNgIjtWQOIoaheFO_Q}H9' );
define( 'LOGGED_IN_SALT',   'Y8Q<m_$<AM~SdNGn_.gkjrE l^sM!3Z}A)`EY`Q>XxGA@|T[.u1&?(+)<LI=qj2/' );
define( 'NONCE_SALT',       'y8&/4lljGN({;jI,U)vS.TZBa=N_@/[(GH1f+:0OF#y0x>$0 R2[wL~Ov-p7},oa' );

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
