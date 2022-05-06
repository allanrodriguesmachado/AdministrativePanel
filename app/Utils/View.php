<?php

namespace App\Utils;

class View
{
    /**
     * Retornar o conteudo da view
     * @param string $view
     * @return string
     */
    private static function getContentView(string $view): string
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Retorna o conteúdo renderizado da view
     * @param string $view
     * @return string
     */
    public static function render(string $view, $vars = []): string
    {
        //Chaves dos array de variaveis
        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);

//        echo "<pre>";
//        print_r($keys);
//        echo "</pre>", exit;

        //Conteudo da view
        return str_replace($keys, array_values($vars), self::getContentView($view));
    }
}