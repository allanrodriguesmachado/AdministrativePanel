<?php

namespace App\Controller\Pages;

use App\Model\Entity\Organization;
use App\Utils\View;

class ConsultScheduling extends Page
{
    public static function getConsultScheduling(): string
    {
        $obOrganization = new Organization;

        $content = View::render('pages/consultar_produto',
            [

            ]);

        return parent::getPage('Consultar Produto', $content);
    }
}