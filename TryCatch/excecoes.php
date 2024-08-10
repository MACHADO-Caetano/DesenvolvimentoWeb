<?php

    //combo de conteúdos, como declarar funções e como tratar exceções

    function f1()
    {
        echo "função F1 está antes da exceção"."<br/>";
    }

    function f2($int)
    {
        if(!is_int($int))
        {
            throw new Exception("O argumento não é do tipo inteiro");
        }
        else
        {
            echo "A função F2 está na exceção"."<br/>";
        }

        f3();
    }

    function f3()
    {
        echo "A função F3 está depois da exceção"."<br/>";
    }

    f1();
    f2(
        int: 5 # aqui gera uma exceção, quando inicia com 5.5, quando troca para 5, não gera exceção
    );


    //Tratamento de exceções
    function divisao($dividendo, $divisor)
    {
        try{ #try tente executar a função
        if ($divisor == 0)
        {
            throw new RangeException("Não é possível dividir por zero");
        }
        else
        {
            echo $dividendo / $divisor;
        }
        }
        catch(Exception) #capturou a exceção, e gerou um retorno com alerta
        {
            echo "Erro: Não é possível dividir por zero";
        }
        finally{ #sempre será executado, independente de ter ou não exceção
            echo "<br/>"."Tratando exceção"."<br/>";
        }
    }

    divisao(10, 5);
    divisao(10, 0);

    

?>