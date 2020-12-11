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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'testewp_db' );

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
define( 'AUTH_KEY',         ',+gohrf?+=li#o`Ef@49B5+-]v0q-+2ZfIsQ^H37=**oayW@eG6[+9hp`3BA2X4h' );
define( 'SECURE_AUTH_KEY',  'qNX/1ZqYh$7mWQkQHzJ4@L=; t!(}^ozq]^&%/dY3oO(mxdBO~rAHq<9!WJHmbai' );
define( 'LOGGED_IN_KEY',    'h@K,2H@JN4qw,Z!PI.9:SmBjO1aZ=Ct[7ZwD6pt=bD:z[=H)Xdo4b$SQE5_he}4g' );
define( 'NONCE_KEY',        '>@,jT^iMD? ?r~U&ks,(y>EU#Spf}P4Y UpRcD22H#yRoK*f9lR>4+!s_jK5i@*?' );
define( 'AUTH_SALT',        ':NUY2K t9<7AofL@I2>L#eMd &>f2A.dDUgQ.{#w$j1:dWfjsYrX01mg,$}S,#~Y' );
define( 'SECURE_AUTH_SALT', 'jyE.|/;+oU`v&V!>LeLH]`<SQ%u,Q3SuKzJtOXt0OJl-}L|9`TvSQ:{T/B9c;I)8' );
define( 'LOGGED_IN_SALT',   '[v~XNb O<JJDKff[DL~qT~;](hx-#BWR$%O!O]{GP&0e!.t}A62+u.mKv]ud=0NG' );
define( 'NONCE_SALT',       '7$^y,v6Hk@(nHDY|6g^A2xEzq/UuI1y^>AW*#l$&vG[NHinLKidTPAL[P6&{8js$' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
