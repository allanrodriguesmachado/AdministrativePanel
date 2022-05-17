<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;
use PDOStatement;

/**
 * Class Vaga
 * @package App\Entity
 */
class Vaga
{
    public string $id;

    /**
     * Descrição sobre a vaga
     * @var string
     */
    public $titulo;

    /**
     * @var string
     */
    public $descricao;

    /**
     * Define se a vaga esta ativa
     * @var string(s/n)
     */
    public $ativo;

    /**
     * Data de publicação da vaga
     * @var string
     */
    public $data;


    /**
     * Método responsável por cadastrar uma nova vaga
     * @return bool
     */
    public function cadastrar(): bool
    {
        $this->data = date('Y-m-d H:i:s');
        $obDatabase = new Database('vagas');
        $this->id = $obDatabase->insert([
            'titulo'    => $this->titulo,
            'descricao' => $this->descricao,
            'ativo'     => $this->ativo,
            'data'      => $this->data
        ]);
        return true;
    }

    /**
     * Método responsavel para atualizar data no banco
     */
    public function atualizar()
    {
        return (new Database('vagas'))->update('id = '.$this->id,[
            'titulo'    => $this->titulo,
            'descricao' => $this->descricao,
            'ativo'     => $this->ativo,
            'data'      => $this->data
        ]);
    }

    /**
     *Método responsavel por excluir a vaga do banco
     * @return bool
     */
    public function excluir(): bool
    {
        return (new Database('vagas'))->delete('id = ' . $this->id);
    }

    /**
     * Método responsavel por obter vagas do banco de dados
     * @param null $where
     * @param null $order
     * @param null $limit
     * @return  array
     */
    public static function getVagas($where = null , $order = null, $limit = null)
    {
        return (new Database('vagas'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * @param $id
     * @return PDOStatement|void
     */
    public static function getVaga($id){
        return (new Database('vagas'))->select('id = '.$id)->fetchObject(self::class);
    }
}