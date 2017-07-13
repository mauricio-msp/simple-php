<?php

    /**
     * -------------------------------------------------------------------------
     * Web Routes
     * ------------------------------------------------- -----------------------
     *
     * Aqui é onde você registra todas as rotas da web para sua aplicação.
     * 
     */

     
     $app->get('/', 'app\controllers\WelcomeController:view')->setName('welcome');
    
     
    /**
     * -------------------------------------------------------------------------
     * Web Route 404
     * -------------------------------------------------------------------------
     * 
     * Página de erro404(personalizada). A página irá ser solicitada caso o 
     * endereço acessado esteja incorreto ou não exista.
     * 
     */
     
     
     $app->notFound(function(){
        include dir['views'] . 'exception/erro.html';
     });


