<?php

// //este é um comentário de uma linha

// 	/*este é um comentário
// 	de várias linhas*/

// 	#este vai ser um comentário também

// 	$a = true;
// 	$b = "string";
// 	$c = 'string';
// 	$d = 1;

// 	echo var_dump($a), "\n";
// 	echo var_dump($b), "\n";
// 	echo var_dump($c), "\n";
// 	echo var_dump($d), "\n";

// 	/*a função var_dump, retorna o tipo de dado, e valor, atribuído às variáveis*/

// 	$var = NULL; //esta é uma variável de valor nulo
// 	echo var_dump($var);
// 	echo is_null($var);

// 	if(1 > 10)
// 	echo "é menor";

// $bool = true && false;
// var_dump($bool);

// $bool = true and false;
// var_dump($bool);

// $bool = (true and (true && false));
// var_dump($bool);


// echo $_POST['nome'];
// echo $_REQUEST['nome'];

function Calcular($numeroUm, $numeroDois, $operacao)
{
    try {
        if ($operacao === '' || $operacao === null) {
            echo "Você não inseriu uma operação, por favor, informe novamente.<br>";
        } else {
            switch ($operacao) {
                case '+':
                    $soma = $numeroUm + $numeroDois;
                    return "Resultado: " . $soma;
                    break;
                case '-':
                    $subtracao = $numeroUm - $numeroDois;
                    return "Resultado: " . $subtracao;
                    break;
                case '*':
                    $multiplicacao = $numeroUm * $numeroDois;
                    return "Resultado: " . $multiplicacao;
                    break;
                case '/':
                    if ($numeroDois == 0) {
                        echo "Impossível realizar divisão por zero.<br>";
                    } else {
                        $divisao = $numeroUm / $numeroDois;
                        return "Resultado: " . $divisao;
                    }
                    break;
            }
        }
    } catch (Exception) {
        echo "Valor(es) inválido(s), insira novamente.<br>";
    }
};

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroUm = $_POST['numero_um'];
    $numeroDois = $_POST['numero_dois'];
    $operacao = $_POST['operacao'];
    echo htmlspecialchars(Calcular($numeroUm, $numeroDois, $operacao));
}
