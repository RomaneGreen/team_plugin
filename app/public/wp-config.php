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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'gbnCn6f0VmfP2C2SwzLsYIlElv5KRmLvODGXuA3BUC0UwIpptAq1/afqq68a+byK6F+TPOfYBx7A6chexN8nMQ==');
define('SECURE_AUTH_KEY',  'maaydb/OWKtEOK0x5cOkKKTUfznQvLLCKDHePKvk09D7LBxFvGxfnfM3fWQ0n0/ZDshWllyXvoTnq+etbSRhSg==');
define('LOGGED_IN_KEY',    'tvDhVBZejFX7CMi00bLc/hWxd2kFcNGq8/npEOCMgbDCl1vTiJLCgQdMecFXdUckWS5JbsAuV2N0c1mqf/8wFQ==');
define('NONCE_KEY',        'EXZjb0OSrZi0z7AURfVUbbwe7QGeWiBV8dU0Wp+P2xD3WQisM4Pa+PlwEFut3sjeJcsrCUJzwQEFkCZETAmhvw==');
define('AUTH_SALT',        'Tw5DauMWA/6MNd9bX4bGZPPxjzpEUUp2tO7f1HSNhwbEf6y9A4Fq3DI2xO2JrKKJtE8PjnYy0noLIYSgWRmMTw==');
define('SECURE_AUTH_SALT', 'zbbIyfuswcStTh0Y6jANHItzgza2IO9fSjo0lDybhD0dMS1P4tJXQqLS/f/J3N5jQh8gZhvMEUBoSUjR8cfm+w==');
define('LOGGED_IN_SALT',   '7do95xC5hEi89c/daIs3G2oTmHrXp1cbxeZJAI09Hi1ICHjuPMlsXsjTX8sYqomaYT6zIOrQZga5ycDmujx+5w==');
define('NONCE_SALT',       'KtS8QSgbZCUxQlyWnX0aqS70sXhUSXk7ZGNNuj1er7FBlnTJ0cOBv09m/80TT+9xiLgoSWT1/EpoJoeCQkZW2Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
