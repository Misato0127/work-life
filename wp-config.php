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
define( 'DB_NAME', 'Work' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'se@e<Ut/@DrmfqbTn@leL~f}V/5`?jO1@A+x4#7cBPp]8g)N{$`qM%U^lr/T>[My' );
define( 'SECURE_AUTH_KEY',  '(+nQ^^9oDvb/q3@C:vPaBm`:%a++9-^HQLP3NjZ#%p<s9cVMK29YC36okhz5gRYz' );
define( 'LOGGED_IN_KEY',    '80 G{c]`MbYYgiGpDhm;Lc`u#&w4M/**IiV8#;DzM% V:MLJ8g%neD_DVIvkRPi5' );
define( 'NONCE_KEY',        '@>v]g|PRLgQ0,g.Gs~809wA8yRm9hhD]v!.yg8WMgV$Z/-yYFuNadm460b=;Ocv#' );
define( 'AUTH_SALT',        'ZqjJLZkg1r-z6=Y<a3@.65kaqAt9/p<w}~rZqbtH RA44*O4/:oXNI+mGcyM:~w)' );
define( 'SECURE_AUTH_SALT', 'edrEngz69 S$|`{*7_g4wxA$./LdQ(mE@KuQZ+ij<b19}W9By.)5u|Zj56~R3)#g' );
define( 'LOGGED_IN_SALT',   'd*0mYS@7!3}Q,x=7ucGTmsSk+#V_)j+E?VnKry2<;[|sF_=cow7Tv%-jqfMN?wWu' );
define( 'NONCE_SALT',       '4VRPV:bdacmfeQh~h W3O!L8B%SFhZ}pv_Fb5EVex<3aDCWg)aeB$6*[,)*@C2:C' );

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
