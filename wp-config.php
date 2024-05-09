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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>H{*4)fWyKUT?V`OlHunc&BO pfOQe ZbZFwipth!~>-`bWTBs` R1cZq)0!Q*>n' );
define( 'SECURE_AUTH_KEY',   '463i<BB|bfV[!?~*i=w$Fk<8/+y;f-s0JSw,BMAidf0sNXwtPE@fGQbu-qVTLXjP' );
define( 'LOGGED_IN_KEY',     'tyS%j3L194iCQo.oqcOld:pHnC/~JW>_pa$Q<;pUiiG~j%s;7f1x-My5+c|%g;L[' );
define( 'NONCE_KEY',         ' >sf#lALZ075Jg)wm-j^TnAfXOr7]H`Gyv/~7b@EXUzxGPng]ul9J^Xv3T9J-Orw' );
define( 'AUTH_SALT',         'laDgWgh=(qAYS6;1SPSUu#~1~Y`TGxRJ 9|dakJgue G}[ Z=N~{j6Ughib_WVs`' );
define( 'SECURE_AUTH_SALT',  '^bLD7z.,{}_A{Yq -C95JO$Dx*Ro>efh:5+fKYHu,W-v*.67[-Y+ ]3CUAD&A/6u' );
define( 'LOGGED_IN_SALT',    '7FIot]}weD^;PjpW3,6d5js#`FwAQN92mlr>ks^%31rwvBw|>gif5~3qu]B##HNs' );
define( 'NONCE_SALT',        'zPSIiz4yEk-A3_.<PVp|F6uR{@ieSc1@od0p9W&Wj5mf>Hz`+T22o25h!DIf)v=G' );
define( 'WP_CACHE_KEY_SALT', '%oca$,$!l9eF5v`t{0;Q8aBkz+dTF$W*#jA:bn4Z=jB,;j ,[/p1z]}7Qw-VH2i~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
