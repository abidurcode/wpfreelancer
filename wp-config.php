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
define( 'DB_NAME', 'wpfreelancer_db' );

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
define( 'AUTH_KEY',         'NLTx5<Q|@Ih`mn<P> 43r57pBDH>Csd:16 DNkiV3Euhjn-**0VgFot*aO]tK|2v' );
define( 'SECURE_AUTH_KEY',  'SKc;PXF$^E>3R!`.zEGvdk~{Aw57s4.&7`6<kpj=xM5n;&<U=#`K!y2dA,Q1lf1 ' );
define( 'LOGGED_IN_KEY',    'e!UA`?&%ps4mif>?eBO9kc#IVPTBc1t>C>Fe.Q>J$-%U^r}Xjby<h-j*g(YydM)L' );
define( 'NONCE_KEY',        'P>iUJ`obF[mw>lO|X)sR,yP+MzNYwi.wd5.C,rT2x1mL4d8N}oV(50-5?w{*%XB/' );
define( 'AUTH_SALT',        'sC]QI0!`mad@;Fgp]3T*Lka4]kY]w{N3=s, zAx?g20r&Mj}#D.(vR7B{>{WO8Vv' );
define( 'SECURE_AUTH_SALT', 'oLOB%vL]NVf{D5;fHrah!o9=Zy cjKKg<$$xAi1 /?xu4|5N(jY2.@.$#{<0r-;{' );
define( 'LOGGED_IN_SALT',   't:xVZjqLJR?),5p:~1]&&fx%oPSA!KLA*9!IQPua3ng?M/FCG:!YHsJT=cu41gD/' );
define( 'NONCE_SALT',       'uI*p(s+W![#_pEz]!-st-9(w}jsjX:u&wqe9<g09uz}liCthzQu-@36oQ1$(^vRx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gh_';

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
