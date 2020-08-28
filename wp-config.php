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
define( 'DB_NAME', 'profile-domingoec_db' );

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
define( 'AUTH_KEY',         'DF9(I1Zlif%+Pz2.&{!*z(3S0F9l9*S,2Y[j>UC0Hf{B@J g9mFIU&xK{4Pn7hu;' );
define( 'SECURE_AUTH_KEY',  'mW|a<HXdwlw 3t0Eb&s-:o4Vt_(Rt/RdV0;* rtK;kv1s<]8|T7PDy!:6:xv`rb1' );
define( 'LOGGED_IN_KEY',    'm^?}S2l?mQ_2*.9t2=~sY7b@9e:g={7otL|Eu2$SW^o1NXc8ZxU_Fr]KwFpt4rZq' );
define( 'NONCE_KEY',        'Nc7hDg3(IUx<(.-j.A+4egY];OgOau3qt~@B!&`,tK !)evxar4~|pMI+OBZ5J4f' );
define( 'AUTH_SALT',        'f%$X)3`;DR,YT=cd-6*4_yaV$`{vyJ2>vhx%KOQj?Juxkm5,dt 73K({Wt!)94*T' );
define( 'SECURE_AUTH_SALT', 'Iwq32wt2p&93D^3E,94_`VSsga?GA4C4YNH^]eZbHXusLV%Kmi}}tCEKfF[a]T;~' );
define( 'LOGGED_IN_SALT',   ':q[#d(h+{g6@B>dS(|0E!%0!{ohQ;P5.2!aiI1Dt>*8$+?p)[Pc.SO]cJ>HiJ)q]' );
define( 'NONCE_SALT',       '=N^ T&?:=#ODKX=S_JRipx$OFBu`ebO8>(4XI:Gw_dUzJ9y|;p>^)}<(1:^%^&S6' );

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
