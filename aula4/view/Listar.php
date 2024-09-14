<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula04_Listar</title>
</head>

<body>
    Listar Clientes
    <table>
        <tr>
            <td>Nome</td>
            <td>CPF</td>
        </tr>
        <?php
        // $aa = [
        //     [
        //         "nome"=> "Caetano Teste",
        //         "cpf"=> "000.000.000-01"
        //     ],
        //     [
        //         "nome"=> "Caetano Teste 2",
        //         "cpf"=> "000.000.000-02"
        //     ]
        // ];
        foreach($listaCliente as $cliente):
        ?>
        <tr>
            <td><?php echo $cliente["nome"]?></td>
            <td><?php echo $cliente["cpf"]?></td>
        </tr>
        <?php
            endforeach;
        ?>
    </table>
</body>

</html>