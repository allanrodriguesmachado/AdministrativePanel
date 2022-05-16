<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{

    private static function getHeader(): string
    {
        return View::render('pages/header');
    }

    private static function getFooter(): string
    {
        return View::render('pages/footer');
    }

    public function getPagination($request, $obPagination)
    {
        $pages = $obPagination->getPages();
        if (count($pages) <= 1) return '';
        $links = '';
        $url = $request->getRouter()->getCurrentUrl();
        $queryParams = $request->getQueryParams();

        foreach ($pages as $page) {
            $queryParams['page'] = $page['page'];
            $link = $url . '?' . http_build_query($queryParams);
            $links . View::render('pages/pagination/link', [
                'page' => $page['page'],
                'link' => $link

            ]);
        }

        return View::render('pages/pagination/link', [
            'page' => $page['page'],
            'link' => $link

        ]);
    }

    /**
     * Retorna o conteúdo (VIEW) da pagina
     * @param $title
     * @param $content
     * @return string
     */
    public static function getPage($title, $content): string
    {
        return View::render('pages/page',
            [
                'title' => $title,
                'header' => self::getHeader(),
                'content' => $content,
                'footer' => self::getFooter()
            ]);
    }
}