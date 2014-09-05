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
define('DB_NAME', 'IEEEevent');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pr0cess');

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
define('AUTH_KEY',         'zmU ,CnS:HWo i?+=IzzPBF6O>Eq+:Ql)Uq+(Z+KpEyB:VF1h,U|s8%({Bif=*E>');
define('SECURE_AUTH_KEY',  '9UdwBq]A0 (xFT!ZyX@B,|SOr/.kmdSBjAKPREs!~|f!/&+m9&[Lw>NDO<t+-~ej');
define('LOGGED_IN_KEY',    '_*)A!5(XBewJ|@$LVR C7da!Vul;7|e8Ec_<p $v18GvsPwKnYu<=V@.^c`,+f;7');
define('NONCE_KEY',        '8_!4}_!.IPX/oybBK:BPm &wE[-_k*n/dyC:S}ty7FqoC~?^*+Vh;U,c+P;+rJEQ');
define('AUTH_SALT',        '4_0;hRe.)R:=*+o5lQ]-_<{=c,IoKQF(kqx9%MdaSZ9k(Az}a|@]%a0m,xBnu-Fk');
define('SECURE_AUTH_SALT', 'E g<vBY1qZ/aS2!%yU@P:5j*:qovs_e06K`|c[D:gT{|P/I?Xum-Fzot}@j$.e5f');
define('LOGGED_IN_SALT',   '<K~Ek^iiiD/4^w*)UgW_U`jzl.VqCUGJ/0R2dl:U)O$m9}ie4`u3ztUEonm4T{0Q');
define('NONCE_SALT',       'wJH<Q}g#.w`d4lWIxix]RGj)igP9LhUI7&gPa./-b}!x+f1d9v`!V/K>^1O#&EGd');

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
