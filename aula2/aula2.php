<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Profissão</th>
        </tr>

        <?php
            $array_pessoas = [
                [
                    "Nome" => "Paulo",
                    "Idade" => 21,
                    "Profissão" => "Desenvolvedor"
                ],
                [
                    "Nome" => "Luan",
                    "Idade" => 35,
                    "Profissão" => "Analista de Sistemas"
                ]
            ];

            foreach ($array_pessoas as $key => $pessoa)
            {

            

        ?>

        <tr>
            <td><?php echo $pessoa["Nome"]; ?></td>
            <td><?php echo $pessoa["Idade"]; ?></td>
            <td><?php echo $pessoa["Profissão"]; ?></td>
        </tr>

        <?php 
            };
            #ou, utilizar o endforeach, funciona da mesma forma!
        ?>
    </table>
</body>

</html>