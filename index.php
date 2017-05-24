<?php
    
    define('dir', [
        'raiz'      => '/../',
        'app'       => __DIR__ . '/app/',
        'models'    => __DIR__ . '/app/models/',
        'views'     => __DIR__ . '/app/views/',
        'bootstrap' => __DIR__ . '/bootstrap/',
        'config'    => __DIR__ . '/config/',
        'public'    => __DIR__ . '/public/',
        'twig'      => __DIR__ . '/twig/',
        'vendor'    => __DIR__ . '/vendor/'
    ]);
    
    
    /**
     * -------------------------------------------------------------------------
     * Requerindo carregamento da aplicação
     * -------------------------------------------------------------------------
     *
     * Irá carregar a aplicação para que possamos executá-lo e enviar
     * As respostas de volta para o navegador.
     *
     */
   
     require dir['bootstrap'] . 'autoload.php';
    
    
     
