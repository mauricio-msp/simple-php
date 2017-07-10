<?php
    
    /**
     * -------------------------------------------------------------------------
     * Dependências/Configurações
     * -------------------------------------------------------------------------
     * 
     * Aqui se encontram todas as dependências/configurações que será utilizada 
     * no simple-php usando o DRouter. 
     * 
     */
    

     $container = $app->getContainer();
    
     $container->twig = $container->shared(function(){
        $loader = new \Twig_Loader_Filesystem(dir['views']);
        return new \Twig_Environment($loader);
     });
     
     
     /**
      * ------------------------------------------------------------------------
      * Configurações Globais
      * ------------------------------------------------------------------------
      * 
      * Aqui você irá setar/adicionar configurações globais, no qual você deseja
      * que a "view" ou página da aplicação tenha acesso a tal recurso.
      * 
      */
     
     $app->render->setAsGlobal([
        'twig' => $container->twig
     ]);

