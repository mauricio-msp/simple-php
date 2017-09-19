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

