<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>


    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos gerais para o corpo do documento */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            /* Cor de fundo suave */
            color: #333333;
            /* Cor do texto principal */
            margin: 0;
            padding: 0;
        }

        /* Estilos para cabeçalhos */
        h1,
        h2,
        h3 {
            color: #21b4e1;
            /* Azul marinho para cabeçalhos */
            margin-bottom: 20px;
        }

        /* Estilização para links */
        a {
            color: #21b4e1;
            /* Azul marinho para links */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
            /* Sublinhado ao passar o mouse */
        }

        /* Estilos para formulários */
        form {
            width: 100%;
            /* Ou o valor desejado para a largura do formulário */
            max-width: 700px;
            /* Largura máxima do formulário */
            margin: 30px auto;
            /* Centralizar o formulário na página com margem no topo */
            padding: 20px;
            background-color: #ffffff;
            /* Fundo branco */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Sombra suave */
            border-radius: 8px;
            /* Cantos arredondados */
        }



        form legend {
            font-size: 1.5rem;
            margin-bottom: 20px;
            font-weight: bold;
            /* Adicionando negrito */
            text-align: center;
            /* Centralizando texto */
        }

        form label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="email"],
        form input[type="password"],
        form input[type="varchar"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        form input[type="checkbox"] {
            margin-right: 10px;
        }

        form button[type="submit"],
        form button[type="button"] {
            background-color: #21b4e1;
            /* Azul marinho */
            color: #ffffff;
            /* Texto branco */
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 1rem;
            border-radius: 4px;
        }

        form button[type="submit"]:hover,
        form button[type="button"]:hover {
            background-color: #21b4e1;
            /* Azul marinho mais escuro ao passar o mouse */
        }

        /* Estilos para tabelas */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #21b4e1;
            /* Azul marinho */
            color: #ffffff;
            /* Texto branco */
        }

        /* Media Queries para responsividade */

        /* Tablets e dispositivos menores */
        @media (max-width: 768px) {
            form {
                padding: 10px;
                /* Reduz padding do formulário */
                max-width: 100%;
                /* Remove largura máxima para ocupar toda a largura disponível */
            }
        }

        /* Dispositivos móveis */
        @media (max-width: 480px) {

            form button[type="submit"],
            form button[type="button"] {
                padding: 10px 15px;
                /* Reduz padding dos botões */
                font-size: 0.9rem;
                /* Reduz tamanho da fonte dos botões */
            }
        }

        /* Estilos específicos para páginas */

        /* Página de Cadastro de Pessoas */
        body.page-pessoa {
            background-color: #f9f9f9;
            /* Fundo mais claro para página de pessoas */
        }

        /* Página de Listagem de Pessoas */
        body.page-lista-pessoa {
            background-color: #f5f5f5;
            /* Fundo ainda mais claro para lista de pessoas */
        }

        /* Página de Cadastro de Produtos */
        body.page-produto {
            background-color: #fcfcfc;
            /* Fundo mais claro para página de produtos */
        }

        /* Página de Listagem de Produtos */
        body.page-lista-produto {
            background-color: #fafafa;
            /* Fundo ainda mais claro para lista de produtos */
        }
    </style>





</head>
<body class="page-pessoa">
   

        <form method="post" action="/pessoa/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome Completo:</label>
            <input id="nome" name="nome" value="<?= $model->Nome ?>" type="text" />

            <label for="email">Email:</label>
            <input id="email" name="email" value="<?= $model->Email ?>" type="text" />

            <label for="endereco">Endereco:</label>
            <input id="endereco" name="endereco" value="<?= $model->Endereco ?>" type="text" />

            <label for="rg">RG:</label>
            <input id="rg" name="rg" value="<?= $model->RG ?>" type="number" />

            <label for="cpf">CPF:</label>
            <input id="cpf" name="cpf" value="<?= $model->CPF ?>" type="number" />

            <label for="cel">Cel:</label>
            <input id="cel" name="cel" value="<?= $model->Cel ?>" type="number" />
            

            <label for="Tipo_Pessoa">Tipo Pessoa:</label><br>

            <input type="checkbox" id="cliente" name="tipo_pessoa[]" value="cliente">
            <label for="cliente">Cliente</label><br>

            <input type="checkbox" id="fornecedor" name="tipo_pessoa[]" value="fornecedor">
            <label for="fornecedor">Fornecedor</label><br>

            <input type="checkbox" id="vendedor" name="tipo_pessoa[]" value="vendedor">
            <label for="vendedor">Vendedor</label><br>
            
            
            <button type="submit">Salvar</button>
        </form>
    

    
</class=>
</html>