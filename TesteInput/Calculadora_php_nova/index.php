<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form action="index.php" method="post">
        <label for="numero_um">Insira um primeiro número:</label>
        <input type="text" id="numero_um" name="numero_um"><br>
        <label for="numero_dois">Insira um segundo número:</label>
        <input type="text" id="numero_dois" name="numero_dois">
        <label for="calcular">Defina a operação matemática</label>
        <select name="calcular" id="calcular">
            <option value="+">Soma</option>
            <option value="-">Subtração</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
        </select>
        <input type="submit" value="Calcular">

        <?php
        function calcular($numero_um, $numero_dois, $calcular)
        {
            switch ($calcular) {
                case '+':
                    return $numero_um + $numero_dois;
                case '-':
                    return $numero_um - $numero_dois;
                case '*':
                    return $numero_um * $numero_dois;
                case '/':
                    if ($numero_dois == 0) {
                        echo "Erro: Não é possível dividir por zero";
                        return false;
                    } else {
                        return $numero_um / $numero_dois;
                    }
            }
        };
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numeroUm = $_POST['numero_um'];
            $numeroDois = $_POST['numero_dois'];
            $calcular = $_POST['calcular'];
            $operacao = calcular($numeroUm, $numeroDois, $calcular);
            echo "<p>Resultado: $operacao</p>";
        }
        ?>
    </form>
</body>

</html>