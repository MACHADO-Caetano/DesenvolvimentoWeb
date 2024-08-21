<?php

class Filme
{
    public int $id;
    public string $titulo;
    public string $diretor;
    public int $classificacao;
    public int $quantidade;

    public function __construct(
        string $titulo,
        string $diretor,
        int $classificacao,
        int $quantidade
    ) {
        $this->titulo = $titulo;
        $this->diretor = $diretor;
        $this->classificacao = $classificacao;
        $this->quantidade = $quantidade;
    }
}

class Cliente
{
    public int $id;
    public string $nome;
    public string $telefone;
    public string $cpf;
    public float $saldo_devedor;
    public string $endereco;

    public function __construct(
        string $nome,
        string $telefone,
        string $cpf,
        float $saldo_devedor,
        string $endereco
    ) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->saldo_devedor = $saldo_devedor;
        $this->endereco = $endereco;
    }
}

class Locacao
{
    public int $id;
    public string $data_locacao;
    public string $data_devolucao;
    public float $valor;
    public int $id_cliente;

    public function __construct(
        string $data_locacao,
        string $data_devolucao,
        float $valor,
        int $id_cliente
    ) {
        $this->data_locacao = $data_locacao;
        $this->data_devolucao = $data_devolucao;
        $this->valor = $valor;
        $this->id_cliente = $id_cliente;
    }
}

class Filme_Locacao
{
    public int $id_filme;
    public int $id_locacao;

    public function __construct(
        int $id_filme,
        int $id_locacao
    ) {
        $this->id_filme = $id_filme;
        $this->id_locacao = $id_locacao;
    }
}

echo "<pre>";
$filme = new Filme('Vingadores', 'Joss Whedon', 12, 10);
$cliente = new Cliente('João', '99999999', '123456789', 0, 'Rua A');
$locacao = new Locacao('2021-01-01', '2021-01-02', 10, 1);
var_dump($filme);
var_dump($cliente);
var_dump($locacao);
