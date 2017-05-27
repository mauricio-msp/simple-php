<?php

    /**
     * -------------------------------------------------------------------------
     * Web Routes
     * ------------------------------------------------- -----------------------
     *
     * Aqui é onde você pode registrar rotas da web para sua aplicação. Essas
     * rotas são carregadas pelo ServiceProvider.
     */

     
     $klein->respond('GET', '/', function($request, $response, $service, $app) {
        echo $app->twig->render('template/welcome.html', [
            'ano' => date('Y'),
        ]);
     });
     
     
    /**
     * -------------------------------------------------------------------------
     * Web Route 404
     * -------------------------------------------------------------------------
     * 
     * Em caso de requisição de uma url inválida, inexistente ou ser 
     * direcionado para um lugar que não exista, a página de erro será solicitada.
     */
     
     
     $klein->onHttpError(function($code){
        switch ($code):
            case 404:
               include dir['views'] . 'template/error.html';
            break;
        endswitch;
     });
