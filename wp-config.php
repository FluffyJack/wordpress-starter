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

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
  include( dirname( __FILE__ ) . '/local-config.php' );
}
else {
  define('DB_NAME', 'YOURDBNAME');
  define('DB_USER', 'YOURDBUSER');
  define('DB_PASSWORD', 'YOURDBPASSWORD');
  define('DB_HOST', 'YOURDBHOSTNAME');
}

/** Database Charset to use in creating database tables. */
define('WP_CACHE', true); //Added by WP-Cache Manager
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
define('AUTH_KEY',         'h?-Y}`i$!8^I7%+<JL`a]bV%RBDF`t,%p~kZtKVUy-Ne>Dn{vzMM^-=h/5eF,;Yj');
define('SECURE_AUTH_KEY',  '+&kE#)N5`dwdLNCR^$]R-+=7f7+LW5@L2rY<m;=IEm_+s&,^#Ym2}(Lyyxe&gEcU');
define('LOGGED_IN_KEY',    'Eu3L;K-jz{3 LM:6X*c6:d|0W>y6*7>HZP(SMGk Hr Dma#)l/M)b?w6mDyP|N{=');
define('NONCE_KEY',        '_r[z*-R__F&x?^p[a1CxMw+-+e)TOtW4qW!LR<bR#N?LhRl4iC <WuM!<+~3|WYE');
define('AUTH_SALT',        'Sz]F*L^-EJgANB#]zl%=P>Dq>c![<|;/1Qx&h;4P7OqVTwu7&p3K5b-+iQ0HFT:%');
define('SECURE_AUTH_SALT', '}y~WRD]Me?/t~ ^-K(<JOgQ*SPPo(&%Tu7g=x:5-Ou|K0gk%s,Z&IS)]!x!<|+6B');
define('LOGGED_IN_SALT',   '-@+1zvOT}^`SX=J*r2sG%mYC9#RY09)K8+ln:+F#*-;|G&kfc)Q<nO V0|jot=Z1');
define('NONCE_SALT',       'cRBkqRJN/tkun5UYpw*C-,M=WNr>xyP8hDV*QtaQi?if?9h>IpuxS?NN|}vi^@07');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
