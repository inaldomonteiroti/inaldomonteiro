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
define( 'DB_NAME', 'wp_wccurso' );

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
define( 'AUTH_KEY',         'T&EA[)9tnbK._sEkVp3hN3Bgh7<U~7NVH.5[g^;p&R+bw/}GXQ/8R 2dpmY$^5j+' );
define( 'SECURE_AUTH_KEY',  'V_G954M?q:b}e.3;b)bS_>=;V%[15OQSlVpqzq:h,3(_5{Q{!C=HsQ?xAIL([3u%' );
define( 'LOGGED_IN_KEY',    '*A;DZ p;:P[S>@7zRWHm0C2r1uDlwnd;4wU6hj>=Dj~kv*:+JQENA+KbFzX,gAUL' );
define( 'NONCE_KEY',        'G?r~8E~-95-[S[BY]:otsX4}z#MY! ;[(H1xZ_eK*2,OMuD^x>7V#OJZ77s~oPua' );
define( 'AUTH_SALT',        '.99Rc9s=&`,cn=6| E.@QFzC&lh6C9u+>i~ZHzbTl>pG@ Or1i,yC04QYrXX`rdF' );
define( 'SECURE_AUTH_SALT', 'gWao2[[)f(rzU^+D ,lWi}RpirQ1~8CP)eP<a;{=m2#9LG/IC+dJ48_k6dBTt`A9' );
define( 'LOGGED_IN_SALT',   'h8n(a<Ye G;(`+)`[_:=nvixB2v(X0o(h jfh,[#[#&vrfony|TjLN~4Y3=mt[<f' );
define( 'NONCE_SALT',       '?$8jS|G}5/rl]+vuJ;(NbdLEE<Z`i^Rkqz]c<(#CQ9of1j6|Wh%5(3tpKN7yvln(' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wcc_';

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
define( 'WP_DEBUG', true );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
