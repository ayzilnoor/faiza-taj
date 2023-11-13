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
define( 'DB_NAME', 'faizatajwp' );

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
define( 'AUTH_KEY',         'n.yvWienTEi&4HFIW 4l(VM}-gJ&h>JSGuS{ddHEAD<_yU)W$oEgT+z@*{bO:hrE' );
define( 'SECURE_AUTH_KEY',  'W!I=q9-_O{@!.kE@4BP]]+|T`&_q$K]U9ti},-mP=)SR)heXV4w&mRn.XyAuP.,x' );
define( 'LOGGED_IN_KEY',    'V{r-+<Q7rUrx3jVyk~|69y8T;SVhH.(l84lM;.Vk4).Ln_jeYDk(&4b(?$Q4pz@6' );
define( 'NONCE_KEY',        '23dqdW<Ejv`|D?#mt?t_L3=bogt:gC.hs[,vxi{+T.VI+95>y>[>UP)qWzB,/wx*' );
define( 'AUTH_SALT',        '`.I@-sLt3Rwc)e+Ojh|D+]~N_Qn.;pFS{`Wpx%i/kAlbIoj;Gh93z1ELq/WD2/20' );
define( 'SECURE_AUTH_SALT', '7JV-Q/1Q V .7?dO^=p&ac~HZ1?T]SJ V`Hr;w3lKHgaXIj[RuVfRa)MN+(+E>kR' );
define( 'LOGGED_IN_SALT',   '+Mm0I#v*lnKp-Q)|73oRiAsd_}AdaBG];1xd+grk7)HncW-P]`e%vIKvAW43fmme' );
define( 'NONCE_SALT',       'wqk,b.V,s]asUJpC)U;*3QD5leYWJBU5yJypm0]!k2WhXc41rwskTDkaoXTY)(Em' );

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
