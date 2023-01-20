<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite' );

/** Database username */
define( 'DB_USER', 'mysql' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G=*W33 2;y~;NPInJ4N&Bxp%GRCranme_OjfZ|5+;x2M?6>NEYK%+.kl KKgKnOo' );
define( 'SECURE_AUTH_KEY',  'PY!oNl!Dt&NO_WJyGufqKQ<(myM[_=Lq^UK>ae=CGM,e~56,+R^6f>97VeJ!GM:X' );
define( 'LOGGED_IN_KEY',    '}svLAhHc)z^,fMRJ{716NF6V]oL1iVVAI#,OXjQuW|bX#UhbvY2G>~]dc-OW}>Hh' );
define( 'NONCE_KEY',        '`Kb;R!IQs-|lu&?QgWyMwb#<HYt6pt!VO4ql<FJyq3j%q4x6nv7EhS@N/eJ*=n+w' );
define( 'AUTH_SALT',        '{No{%Ohy>`]3u9=[^Ijy7Fiddc}&3d:lUc&qO,C*{O5bLawS8P+n]gzI,p,)@#-Q' );
define( 'SECURE_AUTH_SALT', 'YM<|gmM$k+GT[}}od{Ue7(sE*qG>h{I$yF?L](qyqp!);TCu``qE^0]nwExE*lv1' );
define( 'LOGGED_IN_SALT',   '9KD|PSoJ,U469K5!7@ct1W<1$;oV=Gv=ZUq!+UYx-#]/k8mV#9*9CDA|%*XVcA`v' );
define( 'NONCE_SALT',       '&2(<E|]pq-#IV*>*Z*q/)f/M9!*@c&|1-ATa(P}HCIqhLz@Z~Dm8IK*BR>/=t.B@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
