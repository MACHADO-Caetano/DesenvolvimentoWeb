<?php

declare(strict_types=1);

class Produto
{
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = mysqli_connect("localhost", "root", "", "phpbd");

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function List():array
    {
        $sql = 'select * from produtos';

        $produtos = [];

        foreach ($this->connection->query($sql) as $value) {
            $produtos[] = $value;
        }
        return $produtos;
    }

    public function Insert(string $desc):int
    {

        $sql = 'insert into produtos(descricao) values (?)';

        $prepare = $this->connection->prepare($sql);
        $prepare->bind_param('s', $desc);

        $prepare->execute();

        return $prepare->affected_rows;
    }

    public function Update(string $descricao, int $id):int
    {
        $sql = 'update produtos set descricao = (?) where id = (?)';

        $prepare = $this->connection->prepare($sql);

        $prepare->bind_param('si',$descricao, $id);
        //$prepare->bind_param('s', $descricao);

        $prepare->execute();

        return $prepare->affected_rows;
    }

    public function Delete(int $id):int
    {
        $sql = 'delete from produtos where id = ?';

        $prepare = $this->connection->prepare($sql);

        $prepare->bind_param('i', $id);
        $prepare->execute();

        return $prepare->affected_rows;
    }

    public function resetTable():int
    {
        $sql = 'alter table produtos AUTO_INCREMENT = 1;';

        $prepare = $this->connection->prepare($sql);
        $prepare->execute();

        return $prepare->affected_rows;
    }
}
