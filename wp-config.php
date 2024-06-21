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
define( 'DB_NAME', 'fashionshop' );

/** Database username */
define( 'DB_USER', 'sa' );

/** Database password */
define( 'DB_PASSWORD', '1' );

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
define( 'AUTH_KEY',         '^2AXgFfn?+9{<8YPaAI|oV Jf{<,`n?kY[MCH7/=TCEYB!`%TQHa78[!:Ux|u_tl' );
define( 'SECURE_AUTH_KEY',  '!7;$Si0Y#{Qyq*(00fAIIUM<hG3K6>nkPyanu,![bYTTL,B(B0m^1g=<Lqik?/[]' );
define( 'LOGGED_IN_KEY',    'gN)*!;F|mXtjB&ve 46?Xt|l<l(93E!F$.?#S-aEtYHcUfEo4q;@# `ZuLHu/Q*7' );
define( 'NONCE_KEY',        '%4HWov4aSkO?cH =m|5PnLfatNV;Hh,wNgNd3tiq%iCAwY5RwmsM61T;N!](02^i' );
define( 'AUTH_SALT',        'F3Mv&Q[eU3q*0UM.Q^QMO(-ixOWq7D_O+J/g/[MXe{-UG<t`0I2?X:n7y/]_jTd6' );
define( 'SECURE_AUTH_SALT', 'A ]S8:+M=cnrhwSaN;=G]4OI%37x]Q[qxu,zzq@mZ(LIq!g(o=ZnMD%1:]HQ~YK|' );
define( 'LOGGED_IN_SALT',   'vGV&Lsa7?<G%a~79d>z]s1y ZDbu$ROdbI-`gy.^HF^L7$ay3mOgR3Zs<K)z)sF<' );
define( 'NONCE_SALT',       'Ra_{(3F~N!ul&04yCxSxZ`.hEZ|PF61d>OVYjyac@tlbGT$+=dqk$ENb&;RhS*2@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
