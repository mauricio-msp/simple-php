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
        echo $app->twig->render('template/welcome.twig', [
            'title' => 'simple-php',
            'data'  => date('Y'),
            'asset' => url('/public')
        ]);
        
        die(); 
     });
     
     
    /**
     * -------------------------------------------------------------------------
     * Web Route 404
     * -------------------------------------------------------------------------
     * 
     * A página de erro esta sempre sendo solicitada, então para evitar erros,
     * no final de qualquer requisição de páginas você deve usar o die() como
     * no exemplo acima. OK!
     */
     
     
     $klein->respond(function($request, $response, $service, $app){
        echo $app->twig->render('template/erro.twig', [
            'title' => 'Erro 404',
            'data'  => date('Y'),
            'asset' => url('/public'),
            'base'  => url()
        ]); 
     });
