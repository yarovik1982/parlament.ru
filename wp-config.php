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
define( 'DB_NAME', 'parlament.ru' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '(KDz~x]V4p CHh_)5b|Ww B4+G7T!OIs3zNRGuL]0U!BSk_yROP% 2NlgRPAP`K)' );
define( 'SECURE_AUTH_KEY',  'gu=P0l|Z^g9HVIO@LH|taRjf(uQ,wuf2;~|h5Djz/#HqRZDdu!P}NNwkB1n;:&WE' );
define( 'LOGGED_IN_KEY',    'u)G3rC6/5R<1^14^u|G8.V b@ErQc/.?Lm631Oim?%K,26r{a; `hHSzi&Z>Q(Pf' );
define( 'NONCE_KEY',        'kl3)?Yj;>FuEC8_H[SQra:2,q5t8&=9KzOp9v?4-jdioE(|:J<ha G-zL_E&p1HU' );
define( 'AUTH_SALT',        '[55Z??1Ovu}!48q#Qo}oh0eq~9Grtl9;.Gt^[,Oev1Tf9K`wGl]EX,_%!lr;q68%' );
define( 'SECURE_AUTH_SALT', 'Ess_Q>=r!X *chb]KXUyE{x/yrzV4|XW@0Is_j~r6YwBy5R+K9_^db<PyBM7l]lA' );
define( 'LOGGED_IN_SALT',   'Q~1V(g6pjX]U$&q9@|)jr7XW0VA`6Y4tO})dI-;Y}R!nNhPMw8#@TG>Hn0F3^4dJ' );
define( 'NONCE_SALT',       '545U6pR8HS@X$<0:haa@pV68O_C&HH0+^9g~(Kc.aA`@K;1w(7?+`;c}xd$lv5eY' );

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
