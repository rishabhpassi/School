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
define( 'DB_NAME', 'u351156024_School' );

/** Database username */
define( 'DB_USER', 'u351156024_Rishabhpassi' );

/** Database password */
define( 'DB_PASSWORD', '0QM0ZA1:|mP:' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '_z!dE?}kVY;-|l?1t|@b)7S7ZNW|iU`]bwlvF`-`m0XOFk*s)$9MYuTPcDE gv^/');
define('SECURE_AUTH_KEY',  'rS1fk%m[zth8)pfCUmgrgdq}I,?&%UZ{m`0s3Rl5;1+J4`) 1L+J7Q);Ly?OZOe^');
define('LOGGED_IN_KEY',    'RmeZ6[7U%vgxykj_e6$wRmCM8,6/kL.)YbHB*13bP#3WwTv3XQ1mQ|V3mno|jO=]');
define('NONCE_KEY',        '|dcdAnq? _5V8s2o+Y$^#xU:+gu#@nU^;||+7l5+=]BB~)?P~]X_-c3HqDynct*G');
define('AUTH_SALT',        'K%yH{G;C,nQ4 JagJh<D(s-,^4n$p|xCcYC^H_I3Z[30`E1=!p*VF{eKgs5@l};l');
define('SECURE_AUTH_SALT', '_ij eI_Ivr3{[9,F,-f0YR IZRM(Xw9oUQZ#m(SP6I.;.G&[zrfB tqls%n)g s|');
define('LOGGED_IN_SALT',   '37R!z95Tla@~^-ut!HgRgS=O5Ho?P^]R~XqYwk1{v:Zr0sb%GDN&Z,=n*e;8<HO+');
define('NONCE_SALT',       '2)A1D0~vM;S}6nS/xBzF`.PYfqzQ}S|Je:!+/T@&!Uibg|FBW$X&DQs[G|K.A4C+');

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
