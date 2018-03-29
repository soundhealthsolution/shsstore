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
define('DB_NAME', 'shsblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '7F9.%nvsP$@en-gxE]%P0hQUcn+cegyBhwD cA ~VPM96Y}`N$.F,#I2rZX=Qs#F');
define('SECURE_AUTH_KEY',  '$h4%Rgy 0r*J3+ MIpM/$Rf0Ul_3t4-?H?{9~,QUG2[K!VEK|QQtbu#j8ZTIYihm');
define('LOGGED_IN_KEY',    '$+-e`?Pf!-8yK@)dpvUpS3|pUD*M!gIr(W84+p[2|CA=GuEv y|#y_Bpwg<@hn!9');
define('NONCE_KEY',        '5Dq*VyWc# PqQgQzn/P9I|!!YaKg>v%8~<)?jd2 -;_iIU@Qd*TTEbSp`Or&g2yb');
define('AUTH_SALT',        'O-!<<xRp&.eLO7Y%N(;tn7|X2^OnR3Ifl5?+K8V&ch iV->2w3X!/i0Ua$,UOe*L');
define('SECURE_AUTH_SALT', '=nr_h|-+/F/)m69a@X7_8N.OR<{DV3Ea;jlFXkK/pjG@ j9_Os-DZX~.<I8KNTou');
define('LOGGED_IN_SALT',   'rX>U`LiL-&f.{h~Upurb)+6Q;C[|Gu-,UDabti^- xAibCi-mk^LH]t:9 %(HmEs');
define('NONCE_SALT',       '-G>/Y$~a8vys+05_#bEB10J}d#~&S{K71rIl=G>&VqsZ_IZnp=V)I;hw2+l1[zXp');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 's1';

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
