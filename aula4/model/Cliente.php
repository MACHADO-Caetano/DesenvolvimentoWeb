<?php

class Cliente{
    public string $nome;
    public string $cpf;
    public string $nomeMae;
    public string $nomePai;
    public float $saldoDevedor;

    public function __contruct(string $nome, string $cpf, string $nomeMae, string $nomePai, float $saldoDevedor)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nomeMae = $nomeMae;
        $this->nomePai = $nomePai;
        $this->saldoDevedor = $saldoDevedor; 
    }

    public function salvarCliente()
    {
        echo "Salvar cliente";
    }

    public function listarCliente()
    {
        echo "Listar cliente";

    }
};