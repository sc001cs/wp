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
define('DB_NAME', 'wordpress_wp');

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
define('AUTH_KEY',         'Erd{dLY@V+8WRfGcJ`KP%Qa;U|m6:a,LH#)LH+er _TB#ag<1#AQ)q0`zKz[ZYDo');
define('SECURE_AUTH_KEY',  'N|PqQTAj:su_?!7 mf6XV=9z=/rUQHl;p3dD-`~Tx5W{<(J=%p2^(S]Lfgh=ZJP0');
define('LOGGED_IN_KEY',    'TV7+Ap/ BFBQib.|N;cO(Z!]=L:Q7M`FmpbDG:b*ACw)G]e~=fzsWWX5ddx?f?p7');
define('NONCE_KEY',        'n~/-~*%OgGHfw}<lL}UB/5EIH?pXRwW!,xIaaxpMM]e8z3>}^f0U+OD`|IEIs6E`');
define('AUTH_SALT',        '7Z~DUA#E?qG+.hg_?0%@[>qT6ikF_qOaeMOS92&PfO]lM5qT;GrCH2`ap+%JlmN^');
define('SECURE_AUTH_SALT', 'GCFT?pev^# _brd7S^OO,g=#U9Oy-j9EVBLPSmST:#G{R_!ECnv9-2:cm(6o}/F:');
define('LOGGED_IN_SALT',   '$<QpH*N,%H#o7pZ=kbvw-u(sbk]p$b.=W#vjVde0}CdM)nAL6E|G$dssh-]%3(EK');
define('NONCE_SALT',       'K+7bQTh}zOk;30$LK*d t3D}*=m6tGd9Ny}3&c-{xsK-iJ;kL}M!?waor16Qm@iw');

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
