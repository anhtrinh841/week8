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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '_(j0zP&t_T!3;i}+4v.:Z dPi%iUFgun%MT6{wDrbTd-#@iM]p$Fvn8}^jGY(0:Y' );
define( 'SECURE_AUTH_KEY',  'S$uA>]TN?bq9Ae]KkhYtN{[8+ji|Z+L,qMrwB0u!c[9I7j+_<-o!.BjR-ul&6BO$' );
define( 'LOGGED_IN_KEY',    '~4]n7`{[lb|y>Uq)QZ~ae:hAt}q(;UD{D8V@;Jo^F_7QDT|$TS%Yua!B; ,[Bck`' );
define( 'NONCE_KEY',        '`e32m4qc^?{8[>FaZ=D|/{}gQIT*- KYr.9;QghmEx0U>p!4?$|/~-%d!.72`CuK' );
define( 'AUTH_SALT',        'hw]1I 1k a~/%tzfRWAbk}{8ONJYBv7I9>5Cr[Mh-+l77,[1g)H_1R:7>Z&+E*78' );
define( 'SECURE_AUTH_SALT', 'OH2({p>uQUYFAZ|*s?k#zWilk}L(RnTByt#^74{kr(EVN,`<p>/4Vq,zBFoplL{z' );
define( 'LOGGED_IN_SALT',   'f7l%Y8JzI#RCl8Etu[)tA_TJ!vp}mp5YVvFE:*FxDTVs[;fTMKw~scrP}/4bvjW3' );
define( 'NONCE_SALT',       'fbcsTdj7;u<[NMvewq+5Fc,3m]~XR#7ddJt?wco` [p /z/3xA4NH5^*devxSE4v' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
