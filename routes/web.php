<?php

    /**
     * -------------------------------------------------------------------------
     * Web Routes
     * ------------------------------------------------- -----------------------
     *
     * Aqui é onde você pode registrar rotas da web para sua aplicação.
     */

     
     $simple->map('GET', '/', 'HomeController@view');
    
     
    /**
     * -------------------------------------------------------------------------
     * Web Route 404
     * -------------------------------------------------------------------------
     * 
     * A página de erro esta sempre sendo solicitada, então para evitar erros,
     * no final de qualquer requisição de páginas você deve usar o exit()
     */
     
     
     $simple->map('GET', '*', 'ErroController@view');
