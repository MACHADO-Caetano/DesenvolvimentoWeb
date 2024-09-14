<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula4_Criar</title>
</head>
<body>
    <form action="ClienteController.php">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
        <br><br>
        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf">
        <br><br>
        <label for="nomeDaMae">Nome Mãe: </label>
        <input type="text" name="nomeMae" id="nomeMae">
        <br><br>
        <label for="nomeDoPai">Nome Pai: </label>
        <input type="text" name="nomePai" id="nomePai">
        <br><br>
        <label for="saldoDevedor">Saldo: </label>
        <input type="number" name="saldoDevedor" id="saldoDevedor">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>