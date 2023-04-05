<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db-multisite' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|>yi0a ],Qm+Dc})5.cjR:vF9:m8 @),i47pZ!+c{kSezHcMp  9oBJZKy[qem$t' );
define( 'SECURE_AUTH_KEY',  ':6un2Sm WdPI@tgaiH?M<[V~q+<ALL`el5!^phOWx2_0&{`.Smvh>*[8^DA:I{z*' );
define( 'LOGGED_IN_KEY',    'aquz,L,tLalB/h2{HYRm,/G_=:%MkGEsX/f:iFJcCw,6#Sc!!d;LV6k{GuP]&EH%' );
define( 'NONCE_KEY',        'l}< LI;<26h6oc=)Sbi3``&$< J7T{M5)K83-&#[Jriq9Aj}V,-IVKOCw;Be(P$U' );
define( 'AUTH_SALT',        'i]}1YXfp4 ,W|6g!RrP(P=6[%a$H<c)AkLNt6[3>NDzo{`gnuQG,nbTcTpwqq$Nq' );
define( 'SECURE_AUTH_SALT', ';R+agXIyMGw}.N||[4)SH]R?*b4oT,5~Zl*tV_9d1$JZd3DuZkbn38bI)cCX-4)6' );
define( 'LOGGED_IN_SALT',   '2tc.G_#pcT5R8W8^>2IW&^6Gbu5_TIY|`[{K)%%h0i11)%7QJ/Q(BFC~%Vi>km;`' );
define( 'NONCE_SALT',       '%!v3P[d60EJ^Muq1-Xo)<t_D(67q5Bk>RLE(EzmKj>We(_|w~uu[~^Eo2ww)Tf+V' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */

define('WP_ALLOW_MULTISITE', true);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/multisite.mobspot.com.br/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
