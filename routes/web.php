<?php

    /**
     * -------------------------------------------------------------------------
     * Web Routes
     * ------------------------------------------------- -----------------------
     *
     * Aqui é onde você pode registrar rotas da web para sua aplicação.
     */

     
     $simple->get('/', 'Welcome@view');
    
     
    /**
     * -------------------------------------------------------------------------
     * Web Route 404
     * -------------------------------------------------------------------------
     * 
     * A página de erro esta sempre sendo solicitada, então para evitar erros,
     * no final de qualquer requisição de páginas você deve usar o exit()
     */
     
     
     $simple->get('*', 'Erro@view');


