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
define('DB_NAME', 'bs-shopping');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`YHz8o6R3Es~NTdAM,v2dCJb-S!GYfmsJ{D^ya_f&CWd&@jol|A$a!G/UbLVOX@Y');
define('SECURE_AUTH_KEY',  'j+,Cp?a>LEq}c rkIzd[C6T68`_:hrWFNI`s@1Oo=y*wkaTCPgychUj#`/@]%`X.');
define('LOGGED_IN_KEY',    '} :f?x|HU8aqtio):q0Hp2{tLPt=)8+S]3im ,0gJ/ZFx9?s3`s16fk {rWX{d7Z');
define('NONCE_KEY',        'Rs6Y1,k}RPHR>m_dU<[K-0&SS w9wgw|+!Dt*inTn9<B.KBkGe%qdftEiP.|h26m');
define('AUTH_SALT',        '#ZwOw[:@[|;M;99j4l<UO+1GYr9$nlU2u>uR<2nY8i.@%s/D{+~=Q]<vSHTZiJ{z');
define('SECURE_AUTH_SALT', 'oR{}iY3{wb[g2P>x)[?by&O:.}prf1YS)d<srEm;:/S0;*y,/>O$Wh2MTU~Xuy$T');
define('LOGGED_IN_SALT',   'N}pSi}5(S`0P$[b+d>G/t{|bA~35OcJjt7:$Oq*O[;4F*.Vg!L}wF2=1;rfOnil+');
define('NONCE_SALT',       'rKs(XF;QyysPCo+t/Ao4deTUp?2v&4zJ[Yqzro{SrDk?|e5+CQ0{`RA>)XM@EQYE');
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