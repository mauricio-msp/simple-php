<?php

    /**
     * -------------------------------------------------------------------------
     * Web Routes
     * ------------------------------------------------- -----------------------
     *
     * Aqui é onde você pode registrar rotas da web para sua aplicação. Essas
     * rotas são carregadas pelo ServiceProvider.
     */

     
     $klein->respond('GET', '/', function() {
        include dir['views'] . 'template/welcome.twig';
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
               include dir['views'] . 'template/erro.twig';
            break;
        endswitch;
     });
