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
define( 'DB_NAME', 'cnyzavin_legarden' );

/** MySQL database username */
define( 'DB_USER', 'cnyzavin_legarden' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kimthao1234' );

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
define( 'AUTH_KEY',         'g^<(8#nZM^%2Cg}-+GTdu1TUhR}*gx{bZZxF(EJRA|f;DBr1:/_o3S4AhQuWH:P3' );
define( 'SECURE_AUTH_KEY',  'Cs,jPC`pENN2FoPeLo25oH`PYJv4k;ozPo[-&7TW;Mwvd|Pl6np*[y_^y!i!Og`g' );
define( 'LOGGED_IN_KEY',    'iN95r}i5/<vPk}afM40Zsz%J`N-l2*65*6ihr~_OiM(S1X^hh%wesL2-.>-I}XRl' );
define( 'NONCE_KEY',        '9QbVM%d-VH$s2/ yJbJ#|l(V^u.AmD]q+ymlj<uB&,s5{qp?[&%*pc!rlI!OdvF;' );
define( 'AUTH_SALT',        'oZqziA}QIeoF&sSLZW%=dU9+u#@%>X?!mRv,}(WZ.Rrl#map)I`,YvLZ@<~S^Y$}' );
define( 'SECURE_AUTH_SALT', 'qRHE=4fP,l,FOX.ari1`;26L}5fmfC7|5*kd2NjGS$f/}McH)g*Mzk~_K7, o`X/' );
define( 'LOGGED_IN_SALT',   'sm}C@V5QkdS:_;;c!3d_Hn^5p9QX!5?bjyH[@J<v4V9Fv!H:5-#S}O<#eVEN_Gm<' );
define( 'NONCE_SALT',       '&0?W,Ch_(4s476-f/4/B#?}Ji-uv[7Fod-W6)tw(OS{8ew(J^KWvOP;uU=EPbi=V' );

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
