<?php
    
    define('dir', [
        'raiz'      => '/../',
        'app'       => __DIR__ . '/app/',
        'models'    => __DIR__ . '/app/models/',
        'views'     => __DIR__ . '/app/views/',
        'bootstrap' => __DIR__ . '/bootstrap/',
        'config'    => __DIR__ . '/config/',
        'public'    => __DIR__ . '/public/',
        'bower'     => __DIR__ . '/public/bower_components/',
        'css'       => __DIR__ . '/public/css/',
        'img'       => __DIR__ . '/public/img/',
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
    
    
     
