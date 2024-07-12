<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
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
            background-color: #f2f2f2; /* Cor de fundo suave */
            color: #333333; /* Cor do texto principal */
            margin: 0;
            padding: 30px;
        }

        /* Estilos para cabeçalhos */
        h1 {
            color: #0d47a1; /* Azul marinho para cabeçalhos */
            margin-bottom: 20px;
            text-align: center;
        }

        /* Estilo para o menu de navegação */
        

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
            margin: 0 10px;
        }

        /* Estilo para os botões dentro da div */
        .button-container {
            margin-top: 50px;
            text-align: center;
        }

        .button-container a {
            text-decoration: none;
            color: #ffffff; /* Texto branco */
            padding: 12px 24px;
            background-color: #2196f3; /* Azul mais claro para botões */
            border-radius: 5px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Transições suaves */
            font-size: 16px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Sombra sutil */
        }

        .button-container a:hover {
            background-color: #1976d2; /* Azul mais escuro ao passar o mouse */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra mais intensa ao passar o mouse */
        }
    </style>
</head>
<body>
    
    <main>
        <h1>Simple MVC System</h1>
        <div class="button-container">
            <a href="/">Página inicial</a>
            <a href="/pessoa">Pessoas cadastradas</a>
            <a href="/pessoa/form">Formulário de Pessoas</a>
            <a href="/produto">Produtos Cadastrados</a>
            <a href="/produto/form">Formulário de Produto</a>
        </div>
    </main>
</body>
</html>
