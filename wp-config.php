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
define( 'DB_NAME', 'webfriendy' );

/** MySQL database username */
define( 'DB_USER', 'webfriendy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'webfriendy321@@#' );

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
define( 'AUTH_KEY',         'lVo&;LG.N{IZ(vCgb*Oh:NA/6?B@v(03|6. 0`W3%tpqZ)`ugcLC%.Af|r[E$;j(' );
define( 'SECURE_AUTH_KEY',  ';Fo`aeQR3+NI-pU5eC]*(jC=Atz5~6I_4`HM|C$(AL^$G3(nzcv:p9y0vHPIlC?=' );
define( 'LOGGED_IN_KEY',    'msXrbpMU9aWp3XhorM6<6kG(Zp(*Fe*hNt1]<[&H*tMvhQ|=dPfrZ; 9A$SRI`xP' );
define( 'NONCE_KEY',        'k@^<z$d(q(vuB T@4j.*m5IoykKl=Z#XWx@z^HgGi5Gl%W>`uAk y-jnL,bne,XZ' );
define( 'AUTH_SALT',        'DCe1,NI;LQg?9P9,UGI)-GZ5xY KYW]y22=kj(o^g*G#j*+HaI(qB.j=Oo d?H/^' );
define( 'SECURE_AUTH_SALT', 'Am|1,~aPzNt#Rf9z*q}sQViMJwW2=zTx71Huj?K2+p^#f:nD-=~m_L1XU_&6HCDT' );
define( 'LOGGED_IN_SALT',   'ClCBSz]_R7b*X1a5S9NN[?fLt*M0}}%C)AhV=&$ea@Cy ?&>]{Z-{Ly?.cG-xROd' );
define( 'NONCE_SALT',       '2Tc# Y=N@015exx[dz!i]/PF (EqA>bGho5gOso]Mpm38zs>9_Q!Iy)M}K@9@Ul3' );

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
