<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/just_paint/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'just_paint' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BpF]GN|q^[lqn.r[r+ZLwT=l?n:r5a2;0#UVg1I*1;4/-P%jUxdo7MLpl9e@F39o' );
define( 'SECURE_AUTH_KEY',  '}L3sC:n%R$2nJbKbsFc&ou1ft>1,IW4`N5@??399QBo5;GA+*|M/cZVMS2e2TA;>' );
define( 'LOGGED_IN_KEY',    'z6WRM$N*w7wOpwmlh=S)n#E`zjcSlcO%Q@|EmYZdO%uaKW>bi5Zh0?Pk>c)$Me68' );
define( 'NONCE_KEY',        'opKo@skOOh-]3fqX.HOeKM)Cp`M2?a).2Xgw7#G+WV^#~vF]=Q<9i8%~^h_keuD>' );
define( 'AUTH_SALT',        '=w[%}]]QWKE(k_gZxY2}da #RB_dJiX=_ ~BAObwS,Ws{RA[nxj51bII=Q4?Pcsz' );
define( 'SECURE_AUTH_SALT', ',[)=,G3|r%7MQ6;4o.E>#uCJy`%e3ya{_B4P4lZ4$uJNlYl$^gp^Ery{DY9h$G*?' );
define( 'LOGGED_IN_SALT',   'l{FUWEOE*Ja2i+A+Lx3bgxR95]:Bob>*vKBra8, mjB$GT&Q]PU|tkP4%? 7AL1P' );
define( 'NONCE_SALT',       '[tDt-=mNN@vAC-&)S&k)Z,,oA9fpax)iv)eS[z0^}6P1(*W3Cc>[?rO~eN|Vx0|T' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
