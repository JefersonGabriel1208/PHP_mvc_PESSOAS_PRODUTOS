<?php

use App\Controller\PessoaController;

use App\Controller\ProdutoController;

// Para saber mais sobre a função parse_url: https://www.php.net/manual/pt_BR/function.parse-url.php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Para saber mais estrutura switch, leia: https://www.php.net/manual/pt_BR/control-structures.switch.php
switch ($url) {
    case '/':
        echo "";
        break;

        //rotas form pessoa
    case '/pessoa':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
        PessoaController::index();
        break;

    case '/pessoa/form':
        PessoaController::form();
        break;

    case '/pessoa/form/save':
        PessoaController::save();
        break;

    case '/pessoa/delete':
        PessoaController::delete();
        break;


        //rotas form produto
    case '/produto':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
        ProdutoController::index();
        break;

    case '/produto/form':
        ProdutoController::form();
        break;

    case '/produto/form/save':
        ProdutoController::save();
        break;

    case '/produto/delete':
        ProdutoController::delete();
        break;

    default:
        echo "Erro 404";
        break;
}
