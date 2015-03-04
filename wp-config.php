<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'durian_wp');

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
define('AUTH_KEY',         'EX1,jA}51Z>^b~|zMdGsG|qKyJaabyvfBD+SNZ>ueW*r;[W=Hnp&]#9U4w-kq%ux');
define('SECURE_AUTH_KEY',  '!~=*Y[:  k7!TUUMC9O-vHF+k@tk{_`<ajQ(^fTOPewE5g1vHF6i f1^m<omeO$*');
define('LOGGED_IN_KEY',    ']W`7r}2F^1bG7W x)fNH@<d%V]lF7B,~5GPe%<yQOQ%sfFaS*F(B%)07=K2j7 h@');
define('NONCE_KEY',        'G7m*ho;3?|J-Z0gk+4J[kp}A;yyi#9F$-3*7%%%=z=-H[0iQ(9#Xw-.h~:Id9H9V');
define('AUTH_SALT',        'BN|*!g8yc~|YI!ba.&iwe,/Q$|,_%m*KN5T)T6{&54zq@|z/C-SmKt$V({3bV5TH');
define('SECURE_AUTH_SALT', 'G=(>_pL ]SboZjHlB &,FHVBi+5VwSoe9,7#~jQJ|{l+LER nfjQJt^+cZ`1-(Jk');
define('LOGGED_IN_SALT',   'R&-I~1N)s~|>#&*3,{}Aq9aP0S20h~8;pxcq[.-3r-~EK^1b}6Ptq=b|QkA~G+EL');
define('NONCE_SALT',       '2^1hov,|j8Z2I.y5a#j+6gU*Um2r|BdGZu|%NYDee]+U4~[1`CMgiO9Mc_(tfL-b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
