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
define('DB_NAME', 'chuguo');

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
define('AUTH_KEY',         'F|) &UcdPp&,wl,z;s?8keP&u.pCzK^aeOcp:?9uiLVG43SsUe|V8#8[2,kYhOAD');
define('SECURE_AUTH_KEY',  '+<=wP]H{mEgowis;g<^6/Uwc~`5+c^|$E>$&x5-+RpD,IbH1WW/282tTIaU3l}qU');
define('LOGGED_IN_KEY',    '{O_-nT*`J.xVX8 HFdOF]6|+CH1%El>3`%M?3H0N7w)O*okHG3|i4CSQDX+V/%--');
define('NONCE_KEY',        'yG,63k.y|k;V`Vp%mL_D|5PQ4{l?g{o^kLya[{tp(!m==5 (hI9CWN@7<^K!#IwV');
define('AUTH_SALT',        'G*HDb:&|w?mzI;(d>60?_7+5E?_LHP5Xf0TVrf07t>)<|-dd3C-%8)v9kWHl*oL1');
define('SECURE_AUTH_SALT', '3dC-(}4YKSO$Asg2LOvGs)}{9!1],+a5?jH={uF{<Gq-Z#UUoO|tp/_Z&.Ynrn%W');
define('LOGGED_IN_SALT',   'av2>U2Z$(o*rI|QOw*zoQVY-8%!=h3jq&DJ0_Qd9hq ~B QN=C#cfl|b7*U2-)kK');
define('NONCE_SALT',       '2lsSN7gky->=%R%AxmFGOE-8O(OEu}?@v>|)f_8zPV}=C+_|mEIE%PZ~a}d&wz7_');

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
