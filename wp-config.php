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
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'demo' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '>L+$Fwg>@fnJ+FVlh9fU#cM,94vnbsu/g3vWA(pdZ?RY+!j}!UlO&]:0x|([li/y' );
define( 'SECURE_AUTH_KEY',  '<<5OP0xn#eFElKt*6NKGKU`S:4Nbt?)CH*JW V--6xCRQ`#huhEwHuTf$89NpL|7' );
define( 'LOGGED_IN_KEY',    '4Aj*B2Dwmq7biHqk8J{c7jj}/#f[8o[UA*M*rQf!md`~_M76}E`Td#pfheYO?R:,' );
define( 'NONCE_KEY',        'jq=q(%7$!ta0_)mN^WU{jUVKJ{02mDCDST=k.UQozAZ?uoo}{T7O*m{?K~t{6L/5' );
define( 'AUTH_SALT',        'JvD;2WZe?L-OFLA8(mYif}2s1y`d{q^+rjxlTU:lqQp9PB){k{=FxFB`whkWyNa0' );
define( 'SECURE_AUTH_SALT', 'LM wK,.&%{K<I4*&LjV#mVtO=Q$C=vM(78Up(weZO{+n^xlsX4R^sa:SxJu+q*xs' );
define( 'LOGGED_IN_SALT',   ' e}*M-8/9I!I-(]4fSM<O;*#c,4+DVYz*X`f4H)g`FuMGs{5^ |lv`A!IOvwD!^o' );
define( 'NONCE_SALT',       '%DSy+cC?/ejauisWA@JX>+).N9-6WzJ@2]Sr~{SMngKd>;jKCWpRq{9&!}I(j^mk' );

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
