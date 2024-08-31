<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .formulario{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        input{
            margin: 5px auto;

        }
    </style>

    <title>Teste CRUD PHP</title>
</head>
<body>
    <form class="formulario" action="index.php" method="get">
        <input class="produto" type="text" name="id" placeholder="Id"/>
        <input class="produto" type="text" name="descricao" placeholder="Descricao"/>
        <br><br>
        <input type="submit" name="submit" value="Listar Produtos"/>
        <input type="submit" name="submit" value="Inserir Produto"/>
        <input type="submit" name="submit" value="Atualizar Produto"/>
        <input type="submit" name="submit" value="Deletar Produto"/>
    </form>
<br><br><br>

    <form action="index.php" method="get">
        <input type="submit" name="submit" value="Resetar Tabela" />
    </form>

    <?php
    echo "<pre>";
    require "produto.php";
    $produto = new Produto();
    switch ($_GET["submit"]) {
        case "Inserir Produto":
            $status = $produto->Insert($_GET["descricao"]);
            if ($status!=1) {
                echo "Não foi possível realizar a operação";
                return false;
            }
            echo "Registro inserido com sucesso";
            break;
        case "Atualizar Produto":
            $status = $produto->Update($_GET["descricao"], $_GET["id"]);
            if ($status!=1)
            {
                echo "Não foi possível realizar a operação";
                return false;
            }
            echo "Registro atualizado com sucesso";
            break;

        case "Deletar Produto":
            $status = $produto->Delete($_GET["id"]);
            if ($status!=1)
            {
                echo "Não foi possível realizar a operação";
                return false;
            }
            echo "Registro deletado com sucesso";
            break;

        case "Listar Produtos":

            echo '<h3>Produtos</h3>';
            echo '<ul>';
            foreach ($produto->List() as $value) {
                echo '<li>' . $value['id'] . ' ' . $value['descricao'] . '</li>';
            }
            break;

        case "Resetar Tabela":
            $produto->resetTable();

    }
    ?>
</body>
</html>