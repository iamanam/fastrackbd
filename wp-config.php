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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'an!($+!ms=qXfVh^I5Hel+*rc-C^kgZ!Dd[eRwQ>K$(8lW|z;(KmU=,?1q}(Z#(b');
define('SECURE_AUTH_KEY',  'yP,9k@i#EjC=y#WG`%^[+&`r%=&Q6$uKXHM_u4~t#T>|!*}Ci:ct:*}|.U7fY+Lu');
define('LOGGED_IN_KEY',    '#Q]e!S4g @O*ap@DS^8uhHg/Ndk}V_n*#2^/bD[0VHsvt0&/z|G}C~;9suu/Iyi4');
define('NONCE_KEY',        '^>2ljO*O>66{q&8)*<t8y(Pe$Cuo[8#axs:NrupA=@zdrQ0@3,KK>N]NEKXj1k{.');
define('AUTH_SALT',        'a>kW1h&3]i=>_Q0}-?Kw+6;5mg1dF;:0/=fe/#jU!F)p#va[KgE[%pJ@a3/W@,Ay');
define('SECURE_AUTH_SALT', '7lbh@ERvJ-KIuU<vT!Y~S`8Fqo_%:PgF<.F<Fh@RcYU@sOTJ+LhosY%#F3<#+bgP');
define('LOGGED_IN_SALT',   'k_orYZDr34H+E`rMI&Xhk}!cS^pQ#gW$::xiH9o}=MQa<*R=Z*7n8,1ohQ5gAw4Q');
define('NONCE_SALT',       '(9+dR.^;PeGgm+,5w#g7(:GcYeB@UfRV9BDk0:j5o:a1x!)GX?:?=>o~tmkZoYC8');

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
