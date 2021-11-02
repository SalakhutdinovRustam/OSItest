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
define('AUTH_KEY',         'ByFeTww45LGOYAR3dItWmQHzaW8H5LjxK6b5Yd3Fpv7Kq6RVQ675gUBd/aGApxRokeetQ4pABoLsXeBHZIn3dA==');
define('SECURE_AUTH_KEY',  'GasYnA/5ZP2GN56UF1PA4BWu2HJ25+bYSybvJ0W6i11PwG1yJKbzsSJzHR4H/HRUpvqhcPpECjRGz4Vzoi75Fg==');
define('LOGGED_IN_KEY',    'dTrkUPqKrcUtSHirQfXlLj1pXMuxbR70huFw9ZddBbzDyPohWXTuLFpNrCNC0EJvOIUnab8+QYhAvApbOEFCJg==');
define('NONCE_KEY',        'MQ3uBMWkoAFueNVzZnmRko/i5T3RIdRw4fQQC34DZtAhDm7yWGXaSlGB5t9WVoETgR/iTQLy9LZfC3u9GZsyEw==');
define('AUTH_SALT',        'aZn+XS3itRdYXi83OfSygMVUIHdMms+BA4Csr3k9zr2wdAlOorDQJa0JN00dOzS9JFfAEAwXmnozyYsfwwfgyg==');
define('SECURE_AUTH_SALT', 'fn6jAxzzx5slZHnVPpRAHFo8bPMRDZzglMJ1N/2cOaObVDlKBEzG9HbhqPTr94RBJCa1XfYfUfgWyXhhOEFrpw==');
define('LOGGED_IN_SALT',   'hwM+yEWrGwMQyKHZfpZ3++pz/K3BUwu8sqYGfrK6KVsoE3LTn2EGRhdnI5W7yKhqOXjB8/DojCWEiV708z5n6A==');
define('NONCE_SALT',       'RqINhz7nGufbUOyXkwzbJllgISSJ/td8rQ2OBUk6y381ir0r+NCnqg27yXczbuuN+QB2x/6/EtmGkk8koIx3nA==');

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
