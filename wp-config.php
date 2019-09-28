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
define( 'DB_NAME', 'danetyk_db' );

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
define( 'AUTH_KEY',         'q;Q06m7O_;ijiasvKEh>fb4/Yq[kf|.F{<pcXZ](%$|DhAfK~sNk>yT>yCdAH;@3' );
define( 'SECURE_AUTH_KEY',  'OFphgev?WV1&Ysr>_cb586ea%@rX]1KT@`tZJG 1COO^g$jBxPxA0T-j3dSK6?hP' );
define( 'LOGGED_IN_KEY',    '9~o}~XR+3De|CJNJl.jC{3Q+x =Jba/,AFrq/`2FhREcT$B7|Co_y}#<c:&Z<Mf`' );
define( 'NONCE_KEY',        'E),B;%L@$Zfm/0ZkZ&ygEU8zK4GCmPxfYrkyOLA>LB53R|S$zpYb$xUm|$wZ)8@N' );
define( 'AUTH_SALT',        '35ho %vb:BI#!_)t!O =$zyz%`t;C8{i!s//n0C,xME7G/o#%-W^Cq%&e%$b[|PG' );
define( 'SECURE_AUTH_SALT', 'vnF-EaLj#q>=aIP*{#$)pAzjhzWrD?|CdQvt d&^n>]yv~T-;GwxR:3&;uI:|89.' );
define( 'LOGGED_IN_SALT',   'YoEUIeP:v1;XtkYK+Vy5|pnJYbI-yM9%jt{-KYy*B8;U/&Xp9ASYGsdYv>^+g;yU' );
define( 'NONCE_SALT',       'OH~MrV19<fdPLPb8NJ{&XE8nQY^hk$t^ESa#bh>en+PgZ;/6Y)]/eMKc,zd3n}jw' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
