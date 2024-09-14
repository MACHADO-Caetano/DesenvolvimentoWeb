<?php

class ClienteController
{
    public function salvarCliente()
    {

    }

    public function listarCliente()
    {
        $listaCliente = [
            [
                "nome"=> "Caetano Teste",
                "cpf"=> "000.000.000-01"
            ],
            [
                "nome"=> "Caetano Teste 2",
                "cpf"=> "000.000.000-02"
            ],
            [
                "nome"=> "Caetano Teste 3",
                "cpf"=> "000.000.000-03"
            ]
        ];

        $pagina = require_once("../view/Listar.php");
    
        return $pagina;
    }
}
$clientecontroller = new ClienteController();

$clientecontroller -> listarCliente();
