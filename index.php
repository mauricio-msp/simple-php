<?php
    
    define('dir', [
        'root'        => '/../',  
        'app'         => __DIR__ . '/app/',
        'controllers' => __DIR__ . '/app/controllers/',
        'models'      => __DIR__ . '/app/models/',
        'views'       => __DIR__ . '/app/views/',
        'bootstrap'   => __DIR__ . '/bootstrap/',
        'config'      => __DIR__ . '/config/',
        'public'      => __DIR__ . '/public/',
        'routes'      => __DIR__ . '/routes/',
        'vendor'      => __DIR__ . '/vendor/'
    ]);
    
    
    /**
     * -------------------------------------------------------------------------
     * Requerindo carregamento da aplicação
     * -------------------------------------------------------------------------
     *
     * Irá carregar a aplicação para que possamos executá-la e enviar
     * as respostas de volta para o navegador.
     *
     */
   
     require dir['bootstrap'] . 'autoload.php';
    
    
     
