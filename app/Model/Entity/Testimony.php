<?php

namespace App\Model\Entity;

use WilliamCosta\DatabaseManager\Database;

class Testimony
{
    public int $id;
    public string $nome;
    public string $mensagem;
    public string $data;

    public function cadastar()
    {
        $this->data = date('Y-m-d H:i:s');
        $this->id = (new Database('depoimentos'))->insert([
            'nome' => $this->nome,
            'mensagem' => $this->mensagem,
            'data' => $this->data
        ]);
        return true;
    }

    public static function getTestimonies($where = null, $order = null, $limit = null, $field = '*'): \PDOStatement
    {
        return (new Database('depoimentos'))->select($where, $order, $limit, $field);
    }
}