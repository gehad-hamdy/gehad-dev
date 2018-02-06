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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Q})AiE9cZ266Va9CL%d`8W4<O~6yMmQ~.g]p3c3GN%;>bAtU|=:,fihzX4yYy{7w');
define('SECURE_AUTH_KEY',  ')+rZC/1dny|K;zqEhomcYvo]$O3PINT am?~Z0-d:?m@mn,(1Q~GQSDU&T`5pM&6');
define('LOGGED_IN_KEY',    ';]E;Cz?<5#o[ ,r(m:}}V>hGF(w=UiUt_jYt]T}N|C7?07fo&N@`7jGivi6O_kDv');
define('NONCE_KEY',        '%`[l4}S),s*:^NTvCXdn>Kb4DDxKr@p,3(qh~?P!CE~.IG]65*,*=}//!e.L1yGl');
define('AUTH_SALT',        'B4.}!UrbpZxK2E4jI0]R<P s BqPawNi:oXzA^pppG#aQ$&CcM[TY6}G*! /j l1');
define('SECURE_AUTH_SALT', '()z`O{q3?$DH*a88*gNw<44%Lm$/K1.R3k,2g(d?v,NuU_x~eBHV+_Ea^UoKjttD');
define('LOGGED_IN_SALT',   'aY5PfR4ZNzJNB3jH6V|.6TcQ@RbCM_.$@8z(TmXKDEtXf~rD)[B=d#]uTSar6#f=');
define('NONCE_SALT',       '2/?A@^8]&j/^u=1[3h5.335?G;]K1)nzQ+)#wb{.-D 6[hfUY6hCbb!lh)@Ew@Tw');

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

@ini_set( ‘upload_max_size’ , ‘100M’ );