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
define( 'DB_NAME', 'projet_wordpress' );

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
define( 'AUTH_KEY',         '-KisaJY3qS^S|Ton kJ8Dftv]>orqgja*cS=k:.B@B(` 8e8EWa<F3Oy8>LaLdf_' );
define( 'SECURE_AUTH_KEY',  'Fy./xw?<NA41i:Pt%MbS=b*<Z~q2R{Sx<ZZH&KzTB0epwA{kpq{DWyBSAK-M2[br' );
define( 'LOGGED_IN_KEY',    'XLZU_c4Qmtg;p$.C|Q CnKF2$0AWE[nc<}u[@e/LugIr1rVmb}Z{S~YB;/KVx8#2' );
define( 'NONCE_KEY',        'T<Hui(4e.AR/sCRg`>nclW5Ko$f&/~:F/3Ic=b!=>l% M]s/o8ZQ$%D^bX^2ys-@' );
define( 'AUTH_SALT',        'NXDHR1b<SPofu4v!4(iIR(jUw_z_i,;Jzw_p|e(QRvJXJCe1$kaDOg;UP@ThN6>k' );
define( 'SECURE_AUTH_SALT', 'de(n^.Z%B&H}pdqaG1Q7OLa,Y-95dT+HDRE`K?iEFtSfOi2Hh%jdAMcQW/:75Sj#' );
define( 'LOGGED_IN_SALT',   '250BocTY2NeW`#HA=z[Ja;(9ftiH&wB]ZW$gBcSaHHx,Ef-V|F(T.#ollVC4`a8N' );
define( 'NONCE_SALT',       '`{$#JGqE9w,JEGi-/bJWK/leJP3lPVq2<la5},LYp{@<,~[m!%R>z!uraq4`wh`|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
