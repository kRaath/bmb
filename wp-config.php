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
define('DB_NAME', 'bmb_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'raath');

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
define('AUTH_KEY',         'mA8>W+.EY}*}H80{6b@14f{qw}N3lqZjJmNAE9Rd_VgZdFaa8!n#7PEb4QgntDSi');
define('SECURE_AUTH_KEY',  '%lC)a4K:UJ?~u4L/X!f&%dv}j#QPJuByISXWJB}:IljK+;&Dc<Z&>Z@OoL/@V(6A');
define('LOGGED_IN_KEY',    'k0U=G)XFS}ayDM_+y%`bH@!+Y2Nt|p~@xALfyv)FIHK+Tk9dcP`7Naa[lO7!bB1v');
define('NONCE_KEY',        '.AKJE+|bQ8nnl}8To=DX ^EO||hgrkqG>Px;ZGv.yz@0Qb^U(su&m 03e,Bb+8+a');
define('AUTH_SALT',        'sfC#wnJ;Y]I{+z=j^/5ruc[-~_Q)XoWCz<)&*87w^&|+Djh?Mf0ggr}<DD)MFe[3');
define('SECURE_AUTH_SALT', '*=%AR/&`-h||4ODa^@Go}G6<Ra(|n6`y~Hj|fif~96ds}F+sP+FrCN0-jOnRPdNi');
define('LOGGED_IN_SALT',   'MbEQtY#`$<g8wc3Dst_axqxT;sh$bU2hj6-$vh6<+-L[*ngsH_4]Kp_@0(Ke~0|9');
define('NONCE_SALT',       'i<+5oB+&;BHJ^;j>m:i]ekgqo87+F2E&OXY.Z9*~_Wh<z99R60WEf&MpK--w@jO$');

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
