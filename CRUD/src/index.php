<?php
declare(strict_types=1);

require 'produto.php';

$produto = new Produto();
$operacao = $_GET['operacao'];

switch($operacao)
{
    case 'list':
        echo '<h3>Produtos</h3>';
        echo '<ul>';
        foreach ($produto->List() as $value) {
            echo '<li>' . $value['descricao'] . '</li>';
        }
        echo '</ul>';
        $produto->List();
        break;

    case 'insert':
        $status = $produto->Insert('Produto teste caetano');
        if (!$status) {
            echo 'Não foi possível executar a operação!';
            return false;
        }
        echo 'Registro inserido com sucesso!';
        break;

    case 'update':
        $status = $produto->Update('Produto teste caetano atualizado', 0);
        if (!$status) {
            echo 'Não foi possível executar a operação!';
            return false;
        }
        echo 'Registro atualizado com sucesso!';
        break;

    case 'delete':
        $status = $produto->Delete(1);
        if (!$status) {
            echo 'Não foi possível executar a operação!';
            return false;
        }
        echo 'Registro deletado com sucesso!';
        break;  
}