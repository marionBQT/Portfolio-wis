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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_user' );

/** Database username */
define( 'DB_USER', 'portfolio_user' );

/** Database password */
define( 'DB_PASSWORD', 'portfolio_mdp' );

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
define( 'AUTH_KEY',         'JVX52#wqh#pHJgC$K-Ssagzf<_RG,/?$M`4HAG@%E.Yoy>s%> <xcS<UF#$n84]d' );
define( 'SECURE_AUTH_KEY',  '+c|L<ez E8DQB;c$;RhTBAk/QVgt}Y1TpI%];g<mqlT;W=El pf$%SheR6FwEwCp' );
define( 'LOGGED_IN_KEY',    'P~#H3PNZf-5L!9a D]LU<=vh?o=d(Fp4@X?t0nq4g?K,qa]^UfwbkWjZ !O|as2n' );
define( 'NONCE_KEY',        'S|bdf{aWi!X2^V@3B3Bai^cSofG1T},|b=2us;5#NL`NP>Q@hh9A]b|3p*JsTtEb' );
define( 'AUTH_SALT',        '9v{LW&+h7R<4L|M-4JtS)ft1jL= n6at{y075Pprc}klj.|C2W5x?wIzkSTZBkV:' );
define( 'SECURE_AUTH_SALT', '2]>3kCiaSASCA(?9($ r8!23iI_7[ aGG`qLNc<!7}k/]`g97b_iaoS}+o=lMRF|' );
define( 'LOGGED_IN_SALT',   '1)62d3!NM[MiLgd1^*Ox@gjlICnW} GG^|88x#=nAZDH,a}j!~8r{~zUd6r?LA{n' );
define( 'NONCE_SALT',       'twCo:$~eP,BCI.>[=.B1{.eo,#<Jh^zZu>eNPC{j$?1JP$r<6YY&{(l=[<*>X<>/' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
