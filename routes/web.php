<?php

    /**
     * -------------------------------------------------------------------------
     * Web Routes
     * ------------------------------------------------- -----------------------
     *
     * Aqui é onde você pode registrar rotas da web para sua aplicação.
     * 
     */

     
     $app->get('/', 'app\controllers\WelcomeController:view')->setName('welcome');
    
     
    /**
     * -------------------------------------------------------------------------
     * Web Route 404
     * -------------------------------------------------------------------------
     * 
     * Página de erro404(personalizada).
     * 
     */
     
     
     $app->notFound(function(){
        include dir['views'] . 'exception/erro.html';
     });


