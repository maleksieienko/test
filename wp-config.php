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
define('DB_NAME', 'test_wp');

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
define('AUTH_KEY',         'a#|3I$j@{P`:$E=/X:D3+P=;MU[a<S6CBQ);_O4O9VDl#}^.(h=RZ;w{wZxSg@#{');
define('SECURE_AUTH_KEY',  'gb L`/pm%x/RX<7$YrT(![Cz=ZyW|tx}S8SbXj*$nS$2m/Q+E(-Ld;b,0kGG56Pu');
define('LOGGED_IN_KEY',    '~4F,l5L{KK i(FL1<SM^Qui:Mx+vGC*6_AoVmb1ckWH8ihj<C*0.Scn%G78x-~ZB');
define('NONCE_KEY',        'ji2u&%MIcI=+ vsP%Fy!RBwb~4CgC20!Qq*v7 %Reg!ed}!c?N_j$GiLx[5X%1`{');
define('AUTH_SALT',        '|Ka].uI@o*(V6yrK|f,S~?pVN bIg8e1w}]c`iI/g+aU4/T&!(R328@lc6oe:Xyr');
define('SECURE_AUTH_SALT', '(#vzd0{HitzD$b=*1bimG6<?cm1MJI4X;Y14sexM61O!(g]@1$_V]K}}A$da6!jK');
define('LOGGED_IN_SALT',   ' $&]yCMJxy7B=k~DTdFLRvHyX,y4dyCBb^iL~ZddDUxoim-u%G92CSpzvpo`Dt}3');
define('NONCE_SALT',       '1p_9pE0,agi+$hzS0 dz3DWeFg?i~+U:v|joQ51s@gg l-nt]c9FA=(slqpN_da@');

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
