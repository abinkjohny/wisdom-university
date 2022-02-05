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
define('AUTH_KEY',         'ScnFF6HNsywDOS2ybu7DFCjW2Tr4VbLXnRabBmvIQjhQNtXEj92Jv+z97gV0cfkbqxpC9WGrNgamfZGsb6gEvg==');
define('SECURE_AUTH_KEY',  '3zqPxkmcUYCIlYnXY/UpDbXTfLpzp/fH3ghhjXtjYkhU/QMW44Qg/R2mUpEu8fOguLGz1A18XKji+Q1b5QrxHA==');
define('LOGGED_IN_KEY',    'Mn1MvPLH6tFyCEybuwxVj6OKPIA2CtZTdyhJ8+1VTOsUh9spC3tevHVzqJd9Jrr+oHSFa/ma4MDNwbjo8comlQ==');
define('NONCE_KEY',        'IbUc5D1Yc1Y8pOiQpXg+xjpVys36m5BVCbSNFEOeT4Ap2hi1vw1azK7ac/UfJ6ix5as4iblIZxDGCWQz6q5qsg==');
define('AUTH_SALT',        'Wc9oICykOHReNcDZeDX4rB6hdpSdaC+iSFyR84JOMd0gbQU7nM+ZSshmfWPJltDBNebboIjN7WOGVeYNg7u6VQ==');
define('SECURE_AUTH_SALT', 'zV/QtiiiiV9Rx914EW1xU8e/nfufQNkJXotVM89JEZYv69xEVIukLty6bw4vPVAql/3c8TeWm5JRxynkEX0toA==');
define('LOGGED_IN_SALT',   'fl4k3aFzLXw/qGNmuOO8lv4rCMLr3U/rb4D+JvOlFJYnI83+Qm2MgVChiMX2h7Dopz6ue5DUImST60FwmJUl9g==');
define('NONCE_SALT',       'MoblEiEzFg04qZUcorbOHS+7yVGTqK2SqJeqANK0e/gdNpVNsZ40pKx41rHikQ9Y5fms96htfPqIaSve7uZwqw==');

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
