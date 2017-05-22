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
define('DB_NAME', 'Project');

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
define('AUTH_KEY',         '3iBP/<|4[[Y7;]4Ti%;s*8zl}%uR0?tGs:|n# vheWjc%+;i[~Vk|o%QkEh9vB]+');
define('SECURE_AUTH_KEY',  '{-2]@rqN:&8)`D2EWzC&mN]OOpru/}Rpa@aOg=cP} ~al:~is^owgkK|sHyr8qgc');
define('LOGGED_IN_KEY',    '1T|/zt1E= $9M.K2uUTi&j=nEoV+7iQ<) Sax>l?6Pjrsfou7xl>&wGl&_xF:Qo+');
define('NONCE_KEY',        'j1N]hQ9wxtVTs7CxP1h6}jT>}8E)^yI.VPeR`;{X2LdY|*;Jt!p9O@E%g?wfS ^.');
define('AUTH_SALT',        '?pEET]Kg~%w;r]C2yF0lKu:]RRRgiVm=k:-4;/tQ.6i%YNT9|7mh^Rk7x]N:Nm*i');
define('SECURE_AUTH_SALT', '0sXr46nr=*dXN#ib0.j:Jeq#g;$u__RP`M)+$q1maemA|,6?&FZ(Sx)BT)zthC5b');
define('LOGGED_IN_SALT',   'R;Tt{>kvg Oyo5HZNI;]2IC$niB=?^d7{2ac#Fs9?!W;C+P=7k6lh{0rtl,3/NQj');
define('NONCE_SALT',       '~Z%nnfW,oo0e`.$a+67(*j(=knwY9>0ZJ~)sY?D,T}_4,#]c$:Je_Zwsj@b;5~,7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'PJ_';

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
