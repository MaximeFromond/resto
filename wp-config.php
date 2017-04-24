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
define('DB_NAME', 'resto');

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
define('AUTH_KEY',         'G>,s|&]|Rx,0n+#>7ZNJk*=M8$>(v&T^w=c#^<Q=6~=.bu^j6dCgn_=jlArA<&Sd');
define('SECURE_AUTH_KEY',  'CgU]m%[Dl)D*}yT`w(%`6$8m;}EQQi6_uSP6iAyO$xHNp)yym?A1q]`qCEK~#T/k');
define('LOGGED_IN_KEY',    'E8[+$wK.O2@w5*&;@YM!:uRLcC#aD6TROVY>9~^;H6Ut#6%2.8lw5/^=OEZF*17K');
define('NONCE_KEY',        '&(=Q[teHfPfY?4*&;9vi7<|4nfi/*m/^,@0[;HKPaG0BMYje<i5CZn*pDg6&0!H|');
define('AUTH_SALT',        '[,E*DY$:+J$Su~4tdLTneG8$<dTS~sgpyjF~=3&}8s<l>tCw^2 B]( WrzPO%0}d');
define('SECURE_AUTH_SALT', '|eGwFg/^7#k<CFsFNzR?cz`^34m1Tcn%|bV[s3ouNc-Hf);2|n1IkCO=Zd{hhG}>');
define('LOGGED_IN_SALT',   '8.}l8Y>kfv({(qZOK_D.Nml)Znp<*KR+hL..<tXfy:L^t:f#s8M0$:uK[c3,jekA');
define('NONCE_SALT',       '%ETx5Km7$}Yx]cx^.>^wmUa<:}Irn5yX+d}=0gINZP@VA5m+[K(V#~=SV59NkX:f');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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