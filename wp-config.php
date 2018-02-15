<?php

// This loads and composer packages
require dirname( __FILE__ ) . '/vendor/autoload.php';

// This lets us use our .env file
$dotenv = new Dotenv\Dotenv( __DIR__ );
$dotenv->load();
/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY',         '?/o5a$S.1#j/{El+|y_,eq,.yG$]{u)y,GSl{|mB{+l&B|=abt0 C(zG!?G=z*YA');
define('SECURE_AUTH_KEY',  ':Z[*tF@#G2EyvJ7Wbb/LmKs5Uo/hdIt|bKol@9gl>WF8Ag9+[W^jd<WPr!#w=B82');
define('LOGGED_IN_KEY',    ' R.O)-/V+R)QLs`NxocFUUm]ls^M 1^S!l%1x4<K$!s/5J1yX^7y( !4wh;-oO+a');
define('NONCE_KEY',        'L!@zE< {cP8$Op8o|<x>:;~Kq;Sg@gKC[~Gk)OZJYr_JZ{UUNGS$|BPmW:XGoB2Q');
define('AUTH_SALT',        '}K8=~hb__F.nc_F{|k/N2Y03$|XQ*-Q+;aW,`FPdY| K k$+g]ap>#d-hb#Q&I>&');
define('SECURE_AUTH_SALT', 'GcSm*:&u>>as!:UqT+<.i]SRP4]p0!gfPx+Er`;|;aR>btKjSzLVM?cL|(|Pq/Ka');
define('LOGGED_IN_SALT',   'G+CUBv1|=_H@<*#>]!EQYsm>H)<j6*7|I/Px>a9i{M`|ZFJQ]r~TO]0y^^+;Z}Wd');
define('NONCE_SALT',       'n|iW?Sg}Y+J9*uUtY_a?kJY5GB8ORP%RbiiX^lw3]6MCwtgM(5S#%>GU!_>ad_(q');
/**#@-*/

/*
* Environment Variable Definitions
*/
define('DB_NAME', getenv("DB_NAME"));
define('DB_USER', getenv("DB_USER"));
define('DB_PASSWORD', getenv("DB_PASSWORD"));
define('DB_HOST', getenv("DB_HOST"));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('table_prefix');

if( getenv("environment") == 'development' || getenv("environment") == 'staging' ){
	define('WP_DEBUG', true);
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', false);
} else {
	define('WP_DEBUG', false);
}

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL','http://'.$_SERVER['HTTP_HOST'].'/wp-content' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
