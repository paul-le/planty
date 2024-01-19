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
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'vrOfORrNznULZYJ&Zf2_WO<?*Q>e?M(y5-5=-*R-Rsffui-f- hR_`XLh/`w!RVS' );
define( 'SECURE_AUTH_KEY',  'IYB|o+1D81BnRoN5?rP^hIQ_3^`ptowU~Sk~Z4gjy}AqC|ES!27kPDSm`ZU/q,J:' );
define( 'LOGGED_IN_KEY',    'N1r}Gq^t{bv(4+R];6|-/Gc[XcQ8ouU1;Cu/m5ZuTIk.qOaF-m[AkX[.?n0DlQL1' );
define( 'NONCE_KEY',        'OJ&,s-9YM7`uaBSp^[w(Y2}jYv)qFivZ +#pvUOX[/dBjx@62[_R&b|}@Cy(bbQd' );
define( 'AUTH_SALT',        ':*sh?0 !; %4)xyI.YS/mlKfu#s%eJBRdDWTmqK_[Q&adm=RA>Mc^,|$hwp^t):o' );
define( 'SECURE_AUTH_SALT', 'q5lG:d-M_8i[B9-)#6TV]XV95 S&d~f8^6l|o0ksR(7>xgX>pK~P[l&sb:j+xS/;' );
define( 'LOGGED_IN_SALT',   'VS+ gNIkRc,:55}p@x`1YL.6^INi6:&|:bj^fNwQ3yea6PUHij5eUnnR(YrdEll?' );
define( 'NONCE_SALT',       'x1a&6/ lXBc}Z7|a9`[7m7DP!RTd?%FK$xWT<uqTxEeY#M/INvH[wav/]vO^~e&{' );
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
