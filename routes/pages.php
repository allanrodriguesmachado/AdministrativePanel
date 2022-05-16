<?php

use App\Http\Response;
use App\Controller\Pages;

$obRouter->get('/',
    [
        function () {
            return new Response(200, Pages\Home::getHome());
        }
    ]);

$obRouter->get('/consultar_produto',
    [
        function () {
            return new Response(200, Pages\ConsultScheduling::getConsultScheduling());
        }
    ]);


$obRouter->get('/depoimentos',
    [
        function ($request) {
            return new Response(200, Pages\Testimony::getTestimonies($request));
        }
    ]);

$obRouter->post('/depoimentos',
    [
        function ($request) {
            return new Response(200, Pages\Testimony::insertTestimony($request));
        }
    ]);