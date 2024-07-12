<?php

/**
 * Caminhos de Diretório
 * A função define() serve para definir uma constante do PHP (sem o cifrão
 * e sempre escritas em maiúsculo). As constantes conterão caminhos absolutos
 * de diretórios até os arquivos, para iso usamos a função dirname que retorna
 * o caminho absoluto até um determinado arquivo e usamos como base o próprio arquivo,
 * com o uso da constante do PHP chamada __FILE__ Para ver o caminho completo
 * contido dentro de cada função, dê um echo na constante.
 * 
 * Leituras complementares sobre:
 * Função define => https://www.php.net/manual/pt_BR/function.define.php
 * Função dirname => https://www.php.net/manual/pt_BR/function.dirname.php
 * Constante Mágica __FILE__ => https://www.php.net/manual/pt_BR/language.constants.magic.php
 * 
 */

 /**BASEDIR: Esta constante é definida usando a função dirname(__FILE__, 2). Isso pega o diretório do arquivo atual
  *  (__FILE__) e retorna o diretório pai dele, repetido duas vezes (2). 
  * Isso significa que BASEDIR será definido como o diretório dois níveis acima do diretório do arquivo atual. 
  * Isso é útil para obter o diretório raiz do seu projeto, que é muitas vezes usado como ponto de referência para 
  * incluir arquivos, carregar recursos, etc.

  *  VIEWS: Esta constante é definida concatenando BASEDIR com o caminho '/App/View/modules/'.
  * Isso cria o caminho completo para o diretório onde estão localizados os arquivos de visualização do seu aplicativo.
  * Geralmente, em uma estrutura MVC (Model-View-Controller), os arquivos de visualização são armazenados em um diretório
  *específico separado dos controladores e modelos. O uso dessa constante permite que você se refira a esse diretório
  * de forma consistente em todo o seu código, sem precisar escrever o caminho completo toda vez.
 */

define('BASEDIR', dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/App/View/modules/');


/**
 * Dados de conexão ao Banco de Dados
 * As variáveis de ambiente (environment) contém informações sobre o ambiente
 * em que o sistema/site/app está executando. Aqui nós estamos add as informações
 * do banco de dados. Como se trata de uma variável super global, esses dados estão 
 * disponíveis em toda aplicação, até chegar no momento da conexão com o db.
 * ( será que isso é seguro?)
 * 
 * Leia mais em: https://www.php.net/manual/pt_BR/reserved.variables.environment.php
 */
$_ENV['db']['host'] = 'localhost:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = '';
$_ENV['db']['database'] = 'cadastros';

/**
 * $_ENV é uma superglobal no PHP que contém variáveis de ambiente disponíveis para o script em execução. 
 * As variáveis de ambiente são definidas fora do PHP, geralmente pelo sistema operacional ou pelo servidor da web, 
 * e podem ser usadas para passar informações específicas do ambiente para o script PHP.
 * Por exemplo, se você definir uma variável de ambiente chamada DATABASE_URL com a URL de 
 * conexão do banco de dados, você poderá acessá-la em seu script PHP usando $_ENV['DATABASE_URL'].
 * Essa superglobal é útil para acessar configurações específicas do ambiente, como informações de conexão com o 
 * banco de dados, chaves de API, configurações de servidor.
 * */