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
    define( 'DB_NAME', 'wordpress' );

    /** MySQL database username */
    define( 'DB_USER', 'root' );

    /** MySQL hostname */
    define( 'DB_HOST', 'localhost' );

    define('WP_ALLOW_REPAIR', true);

    /** Database Charset to use in creating database tables. */
    define( 'DB_CHARSET', 'utf8' );

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
    define('AUTH_KEY',         '8TV79ulMN-*3o4R/yUY|*+eM1oK>!sE8K<8<YDTn|@9Y$%,xm/TeD;+8%@4GGc,>');
    define('SECURE_AUTH_KEY',  '2*!!QsU*v|)|_z=|`0J.3gdY|tb4VoYT,?(j-[$?}yENB,J-f*Qg?A`TVFrhwxsV');
    define('LOGGED_IN_KEY',    '+#-7(d7OvB]IL!59WlzN2OI)I%uJaTs<(v7;q{{lTB -|DL=_Z2|4UsdeUpVa5ZF');
    define('NONCE_KEY',        '&4O-XMNNTK0[+!s5UF:~Vkz8jrpy4((CcE6+F@58DH,oD7ak?kM!ohem=(Hq!2:2');
    define('AUTH_SALT',        '9hGI6b|pkXSE7 DF,S#49cytj+*SHo~EN=g+(KM-ke6{h}O1h>Fsg&{n=N*sQ]0$');
    define('SECURE_AUTH_SALT', 'R1EFikChzE=yo]~p3(9Zzg>o*2U@p!`Q?`+s(:<c |I0oj;`b>6R^Ep*6e><% Ji');
    define('LOGGED_IN_SALT',   ';Jt0O_7qLyU@V O!+{kPA-|k&z)mn&XseH=ur;~5xiD2{XNIUx-V^l0%@*U6 8?!');
    define('NONCE_SALT',       ')|t.e`i+HUX;dDy0c(r*u X$)G,v+luu0k]9w-;oy-~U4#J-(a9|k[r<e,Q.ur@&');


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