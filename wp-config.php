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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7vfop0Bxt91UelfQolTbrz4sfYBpuUIhgyOqLrNpiLyIFQ8owDry/98BruqyHKnf/Agy/+QuT81xErsthmK2fg==');
define('SECURE_AUTH_KEY',  'RGgX784Z53AS+z42/aKMQaItAS4pzDLwMXXeRM7FIQeHu+ZPhESPHRD8mtHiEE/6R1zRRo28pdXDG4Q8s7Ilvw==');
define('LOGGED_IN_KEY',    'L8nsrZEuIR+cU+EzbmjZ2dXki0PT5uBRQYNKvnEGrigwzqia1PbDqw3VJmcY5y7uKO4W9AvekBTHbraV8N2KsQ==');
define('NONCE_KEY',        'vgTynaGdSF91cUwly5b7w1wgr6ZatEvGn8S6oTmB13MaOSqQbVgfXHNoaoDXg2ua/4LqSN8rwx90puqDxWZ7vw==');
define('AUTH_SALT',        'VFROV8MWnTaYOMpLLWL+b9KBsSJHOyuEUf0byToUYCPYSFWeUmZb+ac0hn8I+iZRPGPlG8X+ncmON10P93Mxcg==');
define('SECURE_AUTH_SALT', 'b8zs1a3m0pxWxadUF58EVXf9UXOsIHPINxfx3e2rGeJTP+wOeY5F47XFdY1JiyBeW76Hboq300FVQvXSTosDAA==');
define('LOGGED_IN_SALT',   'BuH8tfaoTZuTWKH/cdjv7CDItHiwuH/t7BhxTZ1dcxE5BHxW+lMC+fFdTYfHiAAd0Rx1oDV4zhUDLhhMYoK7ow==');
define('NONCE_SALT',       'sKoGg3KCJKVxmHOT7VRa3JQlZJWyN2FE9gNX57GpARNHpShIkjvwScI887rn+KSNie/OounS3D34lijW0rL7UQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
