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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',J]h)m`uAAzUm3etiCD7x}pDNACHMwWl**ef<;A>CY)b*_7%U|Ldxy)*kz !wZ5Y');
define('SECURE_AUTH_KEY',  'WC.vP5Ur(hW2hMyVJ U5RPD50R,b`z9!zRhZt$vBu(;_V!1{ofAv$L6`3:G1#ul)');
define('LOGGED_IN_KEY',    '<YvT#=7B!)VVqXBqW s?u|S24L28p$G6j>rxEA(@bw%-GG]!,jp!r`4_^s-HbJ3e');
define('NONCE_KEY',        'D{))`9?mcs]w(zf<ul-KB@[-;wak{cx9nb4N!+cHX}DLlGpSW7)Jh).+lKSd9#HT');
define('AUTH_SALT',        't^tTXfR&;tgSCv)`muNvq|k26eJT&17$v@Bm?`0{v^X8o6TbI6e$</o48!:/~+DY');
define('SECURE_AUTH_SALT', 'etBE,K*cB(c>XePy kh+?JH^).wN_{SU;MK);Hs[kKlJmwRyyy{N&PoM3/R|u;-s');
define('LOGGED_IN_SALT',   'runFz;%x)ZiUwb6:/LOs|G]8PtD?1MwK%;;&Gx0H>]wG[sN;{/c;OopvJ+S`?sFu');
define('NONCE_SALT',       'P*?W(E5K|QCpvl;r}GXa51]O2n 1JTuBu%[3YH<22!F*IdjUN5b.xKYB|h]m[t3r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
