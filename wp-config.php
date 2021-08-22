<?php
define( 'WP_CACHE', true );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'u760242800_ad4' );
/** MySQL database username */
define( 'DB_USER', 'u760242800_ad4' );
/** MySQL database password */
define( 'DB_PASSWORD', 'Kobeforce2431!' );
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
define( 'AUTH_KEY',         '2YQS,9G~f+;=2R}!J]/Pzey1*Y2pIrD-_QX!*oaFNnz=g*6[2]1uhE7CtMF[(MKB' );
define( 'SECURE_AUTH_KEY',  '{^g}@d(e&c3)ZB)<3!lQ&`mOup181D_)[f?j{-a@6_HKHX$Zc5?2:0$2/P;TRCw9' );
define( 'LOGGED_IN_KEY',    'a<VNPN]&J+y8eaLzb;t/X}MM_`{goW[ZH!7yv{;It:*N`v-*zl53(zH1uP B5q9K' );
define( 'NONCE_KEY',        'RSv4#l PA-&VE,L0!*&y5CLxio6DN&o#aJH?5N4$1E`iGG*R70d:K*7a2D[Crn8k' );
define( 'AUTH_SALT',        '#vT{]/R$b{k5e)^T[={e9vPDDtTo%0:y<0cAho31me-R<,+Lm],e_#7oj-jXw,,@' );
define( 'SECURE_AUTH_SALT', '*5F[7N;o;>k;.EzW-N;c_D/3K}0SemY+ eM.B>TzN`ne^1%F#>$:+Riu?pW?(R*L' );
define( 'LOGGED_IN_SALT',   'iz8B>rC4/i9do@6%tZrEa; ZHCwCp5iX!luq6q;=?QT*)krg%5s@n%`Zr4fbyP:S' );
define( 'NONCE_SALT',       'wXB<?-iY-WPjpY%8FfyIj3MjDvUW>3~gUeaKqSitjl]PnUJ,uJ]iJYa5B4[HQIF|' );
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
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
