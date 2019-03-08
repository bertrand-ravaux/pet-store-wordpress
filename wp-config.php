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
define('DB_NAME', 'p1ravaux');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'p1ravaux');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'p1ravaux');

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
define('AUTH_KEY',         'V^YoU|rO,~c( /cfjVBe?+vEx*x0u|LW:<?98#p6M#?EM[MhuF{8pB;G8zv~BY#E');
define('SECURE_AUTH_KEY',  '/;s*&&eir+C+X_A2FrpMbA%?8Qpy$h_~I 4e[Azh?l7:-S<GT?&|1;(E6=k+**S*');
define('LOGGED_IN_KEY',    'Q=/Fu8GU`x5vr}z?|GOMrxp)s4s>vaUuGIyJV F8LCwjmN=3.ED^&6^gd!&tl|fm');
define('NONCE_KEY',        'Eg_x{U~FIy)wLh9T3I`zs/U-KbnF[P[9mY!N22nLUqhR_%<>=C4BYmXTL|$;h(,j');
define('AUTH_SALT',        '191a4gv~`R[st @?dJ@%X0hVG}A~@e,z@sz+Ljb%AZlk`!TiovQa%o<r*qUdCSnC');
define('SECURE_AUTH_SALT', '[lIztUi+2gW H0%_jt$9>r28~KJ^J4wuL!*`D4?mi^j(zMz4,QHLz91AZy2R@cJm');
define('LOGGED_IN_SALT',   '+U<AfU:c-A83ol<CK<Y#`10leD,kmWeUhJ&Sx-%`=HB=3rT}KYOj^5O2viL$z1=F');
define('NONCE_SALT',       ':ITu/{5B_| lQN5~%7JP]u<o1X:i^D^&:Lzp_h)Uz|E[4.jJ3@+J=jIzoLUud]oB');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
