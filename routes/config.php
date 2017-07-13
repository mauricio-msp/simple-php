<?php
    
    /**
     * -------------------------------------------------------------------------
     * Dependências/Configurações
     * -------------------------------------------------------------------------
     * 
     * Aqui se encontram todas as dependências/configurações que podem ser 
     * utilizadas pelas "views".
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
      * Aqui você irá setar/adicionar configurações globais, no qual todas as 
      * views(páginas) da aplicação que irão ter acesso a tal recurso.
      * 
      * EX: Todas as views agora serão renderizadas usando o Twig Template.
      *  
      */
     
     $app->render->setAsGlobal([
        'twig' => $container->twig
     ]);

