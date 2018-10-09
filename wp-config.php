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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'b%OIk)m0o@N~p^h^d8mm3bT,lRSm-:E@;Nyow+ZbsoL>1G.WjZmV-o;{RI)2a?`)');
define('SECURE_AUTH_KEY',  'g?}v?Cf2z%i,nyqo]P-: (Cwv$XqkIy,+WF13cuXR&Oh0;NTJ[4-!pdag9 Pq5ix');
define('LOGGED_IN_KEY',    'u3W?qZY8gk-||a&s(k;CpZNdKf i3EV|}zt{S*<.MGt$GlPN@~,_$)(qdUF`<S|&');
define('NONCE_KEY',        'qo-u5sct3m&W2|?wVUUb|%PwU|Xls<a2&m,R4,:g{.nzS,.^?r^XLl`3v&4sfS&`');
define('AUTH_SALT',        '^)_]?T;)Eo=)xS(-3MH!_a|a4Tjl$/bli0;0YG9hQi`j6Nx6ccUJxjNUVa2)^+[C');
define('SECURE_AUTH_SALT', 'yQTnZ,``3(zmKkJ%*QJ$)i5!X+.4p]r1_.N&C~3:v0|A}HiElQl(;g.a6WVMK.r{');
define('LOGGED_IN_SALT',   '^4@TG^NwCxx(l#cWeiZ ZRE:-=Jl]Cx0R%2gR<qvW4_w~!FI|fCB.n}A!{]??QXD');
define('NONCE_SALT',       '&3uW~|&r<xOMb<t3*j_2mC2Z>#(WzX!zElC_%Rog`<&cN 10HIQ**kNCIj6FJ>t_');

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
