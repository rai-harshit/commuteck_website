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
define('DB_NAME', 'commuteck_blogs');

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
define('AUTH_KEY',         'D7W9d(4Z^[UZ}xu&_`~MtaDc=XHSNZ,]/yS}2q}{v*{2A#;~5[UC[a_Pm}pJ>3nz');
define('SECURE_AUTH_KEY',  '1 l9*0A=a`T3Hu7VKR~(*78+8g0t)-mUU$9Uuu#TXCdLu] C:,@b[2p7u@I6Zr|n');
define('LOGGED_IN_KEY',    'I@a&OI=9)24jaPS/;N5vVAGwsb^6(%Z;,QN[&e7-ij6Ec|&dAS30y DpPcAyO48)');
define('NONCE_KEY',        '`2oI%$ik9ZfKcbgkNq)7Vhu6<u>Nk*pXn}y p<x3^n~S@IFz{kbpt3K=Vb>zO;jv');
define('AUTH_SALT',        ';Sdbn3+l1O;gh,0yjo;pn>eRe/lzyF-Vi~=d`}>|*@AyZH~3~L*Xe^nH`QuJdBGO');
define('SECURE_AUTH_SALT', 'DM!60oqIo%Od<jB&H&?RdGF8v8#-ue361OZ2mb1^#}HAETz=JARU4X@gWISS|q,Q');
define('LOGGED_IN_SALT',   'WHJ[D(r_x;*aFj#5$$/wq<[[AIX{*Q>,][ L)b:KM99G~_>FvaJ^@-zDAZ!{zW)j');
define('NONCE_SALT',       'Q)3=d)&#Q5oW;Hy 9IMsPmO+K*hH1|<3%@ +xn35iS2N5-%mhLY6O&uOZyOPd%Lp');

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
