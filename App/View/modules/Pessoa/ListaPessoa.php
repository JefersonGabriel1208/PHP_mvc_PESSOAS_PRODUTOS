<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoas</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="page-lista-pessoa">

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereco</th>
            <th>RG</th>
            <th>CPF</th>
            <th>Cel</th>
            <th>Tipo_Pessoa</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/pessoa/delete?id=<?= $item->id ?>"> Excluir  </a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->Nome ?></a>
            </td>

            <td><?= $item->Email ?></td>
            <td><?= $item->Endereco ?></td>
            <td><?= $item->RG ?></td>
            <td><?= $item->CPF ?></td>
            <td><?= $item->Cel ?></td>
            <td><?= $item->Tipo_Pessoa ?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>