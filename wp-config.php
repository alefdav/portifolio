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
define( 'DB_NAME', 'portifolio' );

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
define( 'AUTH_KEY',         '95pu]<Zqliz*iDlLBU:!X]&rxUek}Si;P&DB<z4GINRySA(c`FXoW&6~Oh1g0)` ' );
define( 'SECURE_AUTH_KEY',  '!{-h,O.%Ybo*)Hi5A_xk,p*xJ`a!TT<~4O]%qz}7(;2kjC?.<(Z]>tMLISVR7;p*' );
define( 'LOGGED_IN_KEY',    ')XU%mgv~Ff?+c<&]L?r)^>79=R|e2z.]O&Pd/IO:M>!qn5?e7m#cARM%Y8;Kei5s' );
define( 'NONCE_KEY',        '9C_9{}(%oN0*SAhV-7RHl[NA8rsiL&r`zMxQ{2I`R26cQ1.P-haz5tunh|Cc=Ama' );
define( 'AUTH_SALT',        'k5?{:zjGJBRKx98wT4FG)=qcy/,%h2G?OG>G4~pV0x|$*W6Rd1 =1]r>s#RA`Sjq' );
define( 'SECURE_AUTH_SALT', 'g^JyuAltaaX5FzpCKxmik5jI:5Q[;Zt_1%{ 7UUqy|?h&_Cdw|V~HVir].wM3zv*' );
define( 'LOGGED_IN_SALT',   'sr*1cxu~V$lhZcnx{qSqJ){Lv*xwt)B-+Vp09TO6GBN7PtH%?Q(i?`9.u>3M.dps' );
define( 'NONCE_SALT',       'f!wHWjOWdK!Hj;@5G1.oMT({cl*N.2Us_J26F`P5Dgwx4T-=OQa/`.#;WN!E9UV^' );

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
