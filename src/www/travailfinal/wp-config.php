<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'ccis');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/pGRlVxoUN#Ykx^-v+i-UHc;AECOIE*vk2(jXVr~t5uVWghln}%OlS,at}5Y+TuI');
define('SECURE_AUTH_KEY',  'jk2A9Ebfuo-xB?4~lt&}^kPQ14C9qDUO5oq~9;Tfe8qm[/y,c1,C;#6,>]1z}XHU');
define('LOGGED_IN_KEY',    '5<>TKkND1ZoT`_}?Swm]dtInJ%U Je$8~irIw^%adj}qRJ*yKuo}{y@ZON-,XnJ)');
define('NONCE_KEY',        ':@&3R5O1kiqn*r[<h.ur!}TANfUzQdE]mQ&d/[> uWrC}}<OOn|>~!I@Ip<u(0>%');
define('AUTH_SALT',        '.]yWt59b$fcd<WeoN$S2mxE<d0@Y+:&hmqE0R@F4^L0*oT;NpS@tlfOHoRC1l=o}');
define('SECURE_AUTH_SALT', 'r?>0*OD 9(AA(oo]^,bBf5Dm=A.Wb=M.Xgef99C=BW%v?n/(akU-KfvjyRm@]Hxb');
define('LOGGED_IN_SALT',   'aCE?L`2JU|%Z%uY cUW!H2= EzWt9!.G5=B3xg2ODzcnYB1Kp%BKkvY1L;R84E;_');
define('NONCE_SALT',       'xd1J%2wOlO?^]szv9d:CO]mG_bw)Bj3C_G+A[`m}.o@62jCCfYAN/g>: :ug.y37');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ccis_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');