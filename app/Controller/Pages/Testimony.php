<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Testimony as EntityTestimony;
use WilliamCosta\DatabaseManager\Pagination;

class Testimony extends Page
{
    private static function getTestimonyItems($request)
    {
        $itens = '';

//        $quantidadeTotal = EntityTestimony::getTestimonies(null, null, null, 'COUNT(*) as qtd')->fetchObject()->qtd;
//        $queryParams = $request->getQueryParams();
//        $paginaAtual = $queryParams['page'] ?? 4;
//        $obPagination = new Pagination($quantidadeTotal, $paginaAtual, 3);
        $results = EntityTestimony::getTestimonies(null, 'id DESC');
//
//        while ($obTestimony = $results->fetchObject(EntityTestimony::class)) {
//            $content .= View::render('pages/testimony/items', [
//                'nome' => $obTestimony->nome,
//                'mensagem' => $obTestimony->mensagem,
//                'data' => date('d/m/Y H:i:s', strtotime($obTestimony->data)),
//            ]);
//        }

        return $itens;
    }

    public static function getTestimonies($request): string
    {
        $content = View::render('pages/testimonies',
            [
                'itens' => self::getTestimonyItems($request),
            ]);

        return parent::getPage('Depoimentos', $content);
    }

    public static function insertTestimony($request)
    {
        $postVars = $request->getPostVars();
        $obTestimony = new EntityTestimony();
        $obTestimony->nome = $postVars ['nome'];
        $obTestimony->mensagem = $postVars ['mensagem'];
        $obTestimony->cadastar();
        return self::getTestimonies($request);
    }

}