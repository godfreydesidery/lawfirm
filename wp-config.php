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
define( 'DB_NAME', 'lawfirm_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '}R1nSQqsQ_([}{Q=U|>d43b_p>-HoC]p9tEi}.bVaZSoCLvIOWu-nYkGu{amdd1n' );
define( 'SECURE_AUTH_KEY',  'qM`J;5xAKcc<?TV}9L)JxN lSxBBLa)P6FqHB<7o*5V:0_@d.BOf1@Uvp=!6fEsu' );
define( 'LOGGED_IN_KEY',    'sdV_- NYp)ElmC{pCyHUR[HtEt/*W7{GlH7C/i#@@HbLjOB`&zN2 nO(Lhyt2R.f' );
define( 'NONCE_KEY',        ' s){Ut]%$-9tXG;DLOLi]E;33`{ :Zl6G-70TP/2DPCk~@}nrhxl,=~veLoRIX7z' );
define( 'AUTH_SALT',        'AfFiIB$ZVh<koCsS^1U>kt{MV:9o9X,`{f;4r@7/*B/GkDDumLliu(/Y<Z(K94HD' );
define( 'SECURE_AUTH_SALT', '4Z/!=Fv?+&f30T^%e1~m[Y.1^[_W)VX/ 9IE7qzGD[:xRAAOq,_!@A4=tluH~rDm' );
define( 'LOGGED_IN_SALT',   'S5W_YN$SVq4}^Av3i+?@]xX~In4`U68Qn3o%fR28//[?eM-A9 )YhM!1ZI)$2eB`' );
define( 'NONCE_SALT',       '@|{S{4(w`rg#1J+$<b?Om0K 7kiyGKZ8QM:7eU}KdfJP&*64%o;F+7gHYTa-V7=6' );

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
