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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ')f80Q~q+}gQ<k!ik]%,I ^`H`DkL{BO7LmbhwBQSI :`I29^,tAAWqyY5^Bum]8n' );
define( 'SECURE_AUTH_KEY',  'kWF.zqxx`e,h<<Z(-t==XC(X@&#rUb;6e}?.~m`jV&%2LxmCNfg7Tq.JUxj@;_]A' );
define( 'LOGGED_IN_KEY',    'h>,:;&D>6o2,gUaSX}>x;AL?]Ia`Tp;XfHz]z>H,aW#^!4z=hLa>b,uhh^j^e,9T' );
define( 'NONCE_KEY',        '36/OdC7qF>Af@t_~EoDee>C.7s=7<xTE{LtT54ohCJ>a@f*9:jJ;^U[ONM9f ^&z' );
define( 'AUTH_SALT',        '22oD|!QhR1*1u0k~j~c$^s-?shykCe9+6^]ZzL} 7jr}mn}MWTCN[;.H0>>,>yH6' );
define( 'SECURE_AUTH_SALT', '6QQ|oIXz8;Ds4_D4|^*DOqDa6IBFRF<EIll%kJS_#HC$cSPRZ:f% fG:;_*dH4w$' );
define( 'LOGGED_IN_SALT',   'oa</jj<=|&c+d9g5-dE)kZUjUT@5+pN{S(+7cSUCc} $,_~Sb=u4L:rI5ca^s6QI' );
define( 'NONCE_SALT',       'i`S[s;5W`^C+(uV@}R2EOHUbZ;kPu<x4Nm,L4F%N)E~^x%lH4c ~.LF67@.%IS^-' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
