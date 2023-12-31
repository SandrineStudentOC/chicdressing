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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\MAMP\htdocs\chic_dressing\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'chic_dressing' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YiJdKWxB+9AV$I<1[,>7/ziO?0-,Y2.D)=3`jYhpA[qfH/0mJG3`J,r@MrkCKVFP' );
define( 'SECURE_AUTH_KEY',  'mwgg+1Ys c>b:aP??fOYSu$2,y[UnUu}[zzx/s5an5>U!ha*YZ+dwv GT=5N`nMp' );
define( 'LOGGED_IN_KEY',    'BCNosE.?0x/r,wl]I3MCNOBZMw@pZ7FE4_sS)]x<zF]C7wuTxJUg>fi8kkKj!+20' );
define( 'NONCE_KEY',        ',k.bJp+%ur:p{;Ay{?*nSClB$$#nNmbo68<16LP8-S{JLyM&CTmQ0@LL(O:]Zz&&' );
define( 'AUTH_SALT',        '-iq!OI ;6@X>:<;;)K}IThE9 ;X6CG_iky<2)LgrWj42)QWmDuC$_[5!daAbTPhk' );
define( 'SECURE_AUTH_SALT', 'W0@?}tT*M!%.&A5.5%6U%iDY$GFbBg9pGdfXmbK[6a!J)04)[g3!w}KdcA8t_)6^' );
define( 'LOGGED_IN_SALT',   'w^ujVEtd:@BWPL/[3S-RLu;eFk?aox./}YEqZ**mi0Gq,/yQxn&m.HYY%lqe[!CM' );
define( 'NONCE_SALT',       'l.~X4OGc?..@]gj=wi2@mM0-e1O&};yN~|<wL5_~y3QLPtcFx,u]&[SH5x?uf5yl' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
