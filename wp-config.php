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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'infinityexpeditions' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '~l<xk9/mnGtxfR!*W:Wb:kC$5,%3kj;^6FL^IG(ASR%bt_I`s1tofW)hnlZivr%h' );
define( 'SECURE_AUTH_KEY',  'J4q:Fhf+RQV_4@UWGPZ9Jjg;uOC<CAQuNv`C#A>[ybw0C!,)pqj-CtyP2:GRP=td' );
define( 'LOGGED_IN_KEY',    'qs`poU{CtV/9vG.AmP,n(_T(X!_cv]K:9]mz/nD40`G$koh)i Q9jc?wK>Rj-9N~' );
define( 'NONCE_KEY',        'pqV)LAHrg,]graIwV%#VKHO`h^K!J?M0CG,BAsH%tBuhThgL/#tL>5[_HkL@W3pu' );
define( 'AUTH_SALT',        '^{ds`S)m&3Vjn}dSEjQu &IaGKrT1A-W/J}>uA}%%7F{C|miIU TlB~vh4u:;H(Q' );
define( 'SECURE_AUTH_SALT', '-9papG{UNB{rLwp z%q)F]6gY^`4ac[DIDs4^-B.Tnr50Z?:AM/u1oLO3gO`+ti(' );
define( 'LOGGED_IN_SALT',   '{gCfJtySRV8q|7LRW8keDW~E:Rnbey{? amaVaJc7,XH%^6HL_<!@QaqXSp`D+ir' );
define( 'NONCE_SALT',       'OeEjQAx}ahk,e7j1Gr2$yT8#@X?&qR<^0JTH%jb|`a(KVKUaCvJP0#Q2`Ui+h5qn' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
