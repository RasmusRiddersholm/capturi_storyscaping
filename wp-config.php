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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rasmusriddersholm_dk' );

/** MySQL database username */
define( 'DB_USER', 'rasmusriddersholm_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'KN8ydxQG8CtghTY4DZVmcy5w' );

/** MySQL hostname */
define( 'DB_HOST', 'rasmusriddersholm.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DAs1NViPal@RRUET^)9utiO*M|LMq?1+T7;OE#LmADQa{ba+%5Uba9y?h#*5@48)' );
define( 'SECURE_AUTH_KEY',  'Kg h1GCNT kRz7i>5T<+GN9_mIy4xk^+~TovdaA-kzXxo;U^w}L~6L~4WV60w1;j' );
define( 'LOGGED_IN_KEY',    'Xx6mKml@a$#l:rp<%-rq!`F8.s,~ OI?^mvcXoUX~9.$m<-$$q =/2lK?yM4GzVy' );
define( 'NONCE_KEY',        ' Vly)IRZ3{= V9`@WE6!_dBR@7V2VCk&$6A~L]xAi[&$73wJu[F34<W/Nnvci,A>' );
define( 'AUTH_SALT',        'D3W`t/V0b&9|sU(X:)x;KK$Z#GE%D(o6ti}S1Aw/`*vx6D/l:#2=1S#.dcrVBseh' );
define( 'SECURE_AUTH_SALT', 'NEq@8<o$49fk#X8/Jlclq{U>:8JyOwa?P#7e:*;sJ]8[U@CW0.+N|,0^#0--kR1$' );
define( 'LOGGED_IN_SALT',   'wW7CxpIw0 /DthA!D]GJn]$,YlMwR1ApXqdq3e]Mb*|&P|D>6~yEboVTda31zRz`' );
define( 'NONCE_SALT',       'rMwc}sNPdYTn F=Ae:7S]/w<I2%<o-(d,lR060k<rifWv_iTI<,C-$db:ml2N%k]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'capturi_storyscapingwp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
