<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'labb2' );

/** Databasens användarnamn */
define( 'DB_USER', 'root' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'root' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^ki}.MnBUJvZ4y a-4t1L|{9G3b1W=$=D!c97ujUw}$aC2m`V0qj[TFCGzXCb*Un' );
define( 'SECURE_AUTH_KEY',  'OSg8l;^V]^oaMN`3!W)J~Y<l?oHtyBru1u(e}Z )cPFcF2nbnyASYAuiI(pM;kEU' );
define( 'LOGGED_IN_KEY',    'xo2w9JZ0Om1Y*Q~#XvnXXy@fq)FKMR4Ap/71eSWFh8BWKqnt@5k88y:dKT~;nEmI' );
define( 'NONCE_KEY',        'J#:i[sja1:I+pZ<SO`wA)c@am334_dg@lw+IB[SnELVd2=GD;4E?<da{OQ2@Zr5M' );
define( 'AUTH_SALT',        'W+Ys>IqY7Csj;@Oh6=u,C)%Wz(xsZj|jM.Z46o%1%<30L@( 8YlrAD%xg$E[8_Jo' );
define( 'SECURE_AUTH_SALT', '-|<#JI-85BG/a&&%*UXrESu&#[eKU+P;q{okiUS?<0:g[d_<,0WcSa6n5oV3y#o)' );
define( 'LOGGED_IN_SALT',   'RBqqqvxi(inn.*yqu1oHo!Tcz`pCRU]Xi$E9}V5oqFxln/LLD=j6l*(O=e`>|yri' );
define( 'NONCE_SALT',       'i!CHVs8W!>$r>:9!Dw,YgnsJ]L5 w#$kV_@cdg4a}v+&#wS>H#Y2(`PcJcIJ|~N<' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');