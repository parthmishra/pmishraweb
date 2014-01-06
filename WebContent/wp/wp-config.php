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
define('DB_NAME', 'pmishraweb');

/** MySQL database username */
define('DB_USER', 'pmishraweb');

/** MySQL database password */
define('DB_PASSWORD', '2od10c74gw1wteoivopt50f35');

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
define('AUTH_KEY',         'n=7`=+9,v<1viTU.B=8SEs8 HC;]S:rVFB.D_GzKH)rkq>fTi/J+/rbR(R(LSP+Z');
define('SECURE_AUTH_KEY',  'h-<oVDjvy8{:!o-WD`[Tjln@<z+_U;k:G.+A6OA,b&M[D$Eeu:sVo&`.dJ,*|iOx');
define('LOGGED_IN_KEY',    'vP_E#co5&-b7IaO.ZQ81ftZ.h+_3k o, s9Sgb//X9K-xF-XjwgcKVy5V%|k#jVp');
define('NONCE_KEY',        'JOzTfP#<&pi3|pmm4HtVs<Mb|`%+-S>1Vj,4C]P%5_$K66,K%G-24hRuqN*&DD[~');
define('AUTH_SALT',        'BXU]#yf[t|C9>Rg4&-+@n*haFZJgVJm*EW#%*xG9.&kkW;&ehOp9>jIsDUb&3B-i');
define('SECURE_AUTH_SALT', '=d&+.1nsWFQ_|y2bp`y}W^L~xcuyBP>b_mS)6/a`Fpn4|^Gd7&,b#0HV$<9Y|%?@');
define('LOGGED_IN_SALT',   'F}AJy48>/eDn9Ik1~6E/Xl{O%^EF~={)Zl{f_=z$JzF7>-1b%kT@q|,:PG,ML#R6');
define('NONCE_SALT',       'f`=sf;@%lbHV)UgBdSvBu]pfk~~Y);2Nl@W0Gzf?@56u3f4Ib+ISLmb{Al+@X_c9');

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
