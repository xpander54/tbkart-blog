<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'tbkart_blog2');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'hd1412');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.z$>DaOl6P+GlDr0a:=iXU,m/2upp.?@sgKkBzR/;oja*/c_Ys15|i!l}~|l+Jx8');
define('SECURE_AUTH_KEY',  'wUR/c4iut&91i<+}+(cEBgQJ)yN%t-#oJnK+@d)os|,K=ZZ8u%j =s$*@:HW@yd{');
define('LOGGED_IN_KEY',    ' *~[g6L<CBV#~8=N[nGhlU|F%)wvc65Ua6RCsRzB8m)x`yaJ*rU#]gC(%0Cl [It');
define('NONCE_KEY',        ' dB3-)wna*H1$VN]$T,EBB0k?mozKkEYn-,)C*h0Nk.US!eFjfXm_tn-9AU-cX,M');
define('AUTH_SALT',        '}F!~3`+MXLQ1XGS3V{xJB1Z-{t<]:9RfD#:5`U)hkVEYJE>@2c.xQv[n}Oq?:CcF');
define('SECURE_AUTH_SALT', 'A9ji/`?_&/7H^bP0F0EI*`(Gv/H1T9jwzF:9Y)>eV*]TAOR>p<Yx}y);)!ts~rVO');
define('LOGGED_IN_SALT',   '0L7s:<I-iCZ-o<sZYd7|;cHzgmYBQ5NiZ;+G{#~NC27DiHv;+M(&+GR-PPBM KfY');
define('NONCE_SALT',       'z:%xmA+HyY|63l^~h77D#X0XUv`WxR-[f47WERgY1Pbei`~X>h+Vh;,O_QXZ__4:');

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

