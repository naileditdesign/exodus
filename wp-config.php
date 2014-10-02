<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'H/hC|@t{dXL$Q)ml2Rx_$y?a}G]<MHw-@wLr&&P[7eRKfo81udDN- |C-!;:*X-A');
define('SECURE_AUTH_KEY',  '-h^|qL(|gLh%KR_|+SMzu]-amA%_.f-S/Ooa}Z}7p9I@zW:oy;+fON-eY#Y[Va+`');
define('LOGGED_IN_KEY',    'kTN/>$=YM]<aYqd$gT`^je:j8T{G94_{hjfu#ew%jj6hKE{yg_Ti{j|e~eGbBs;h');
define('NONCE_KEY',        '7fZK/YP7%inT O=Yb*@+Zxim8|0;F^BXvZXfmqa^ar+a3jvH-9|%1.hy77Y~`_9F');
define('AUTH_SALT',        '/yZu.CtPfW-/{Fw5NJA1@Z-2:H?d*$jV*j}VC[s&gNc4d[Tm}t+<7w|[t[DYdt78');
define('SECURE_AUTH_SALT', '7z565O),HWW~y:y;saFg zHg>;{i>m#=_1]ep+!E=8&tNRq&Q*o8v|v+%;lPl>ru');
define('LOGGED_IN_SALT',   'sI?aztQN*A_:{4jw}YEa_f.|*8m7sL6slk+m4*&7gS>Y%y/)Ld_`: sxsyK4vRiS');
define('NONCE_SALT',       'gHB<^r)vEjrDv0L6X8c:}N?%tnxrKby|Za:}{W<l$JfFWXo^saH#F2:-5*_zMcW$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'batman_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
