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
define('DB_NAME', 'everywhere');

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
define('AUTH_KEY',         'cu!Fbs[@I[b}H]Dd7Zslki~ #1ArW^^d>/:FkQJg1m?n%N1yD c EtCiMrWD4|;s');
define('SECURE_AUTH_KEY',  'YA3k*d(~~JydjhpJks0?YLnRL+&1zS8%3_;dLL&/vJWB.R/<9-qiHDNNrDVQw<<(');
define('LOGGED_IN_KEY',    'zGbO&&GPT.}x/.n0$Y8{6DqhBVIM!Xrd8ZRKT4@$O1i(q2C^-8![km97I~(Qp`^#');
define('NONCE_KEY',        '*0mq*2#3ENAG`#o|W;Cc)XG1qM;Ah<JoS;3|)-y)x7T LEL.=PiH{+3}59Em6v0U');
define('AUTH_SALT',        '|cTF7|=z-^/3FNU+n7-0d&6OWHBkBOR>B^]9kyW.z[ay2Vjx-b>XGxcAhY0{^=9 ');
define('SECURE_AUTH_SALT', ';gZEUv~)GH (fh?dBLzqh<d$OqKUm;)Ne1PqK^;D$9mW+Jw$%#WG_K[_QW)*Uo2?');
define('LOGGED_IN_SALT',   'Q(3,:.Qs^+?Jg/#iiSBKpC+=Zh 2~9zy)G#Bgpa-#Hc)bYDBw@k,RgE^9j#bC`1O');
define('NONCE_SALT',       'pk^NrEge |T2[ognmHPtd#]v<l>X7@e<A4X=n0X5OlA|z},sZl)[WdmjrH7;LmE6');

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
