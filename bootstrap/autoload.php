<?php
    
    /**
     * -------------------------------------------------------------------------
     * Registrar o Composer Auto Loader
     * -------------------------------------------------------------------------
     *
     * Composer fornece um carregador de classe conveniente e gerado automaticamente
     * para nossa aplicação, assim não temos que nos preocupar com o 
     * carregamento de qualquer classe "manualmente".
     *
     */


     require dir['vendor'] . 'autoload.php';
    
     
    /**
     * -------------------------------------------------------------------------
     * PHP Dotenv
     * -------------------------------------------------------------------------
     * 
     * Carrega variavéis do ambiente de desenvolvimento com valores que só o 
     * prório desenvolvedor tenha acesso.
     * 
     */
    
    
     $env = new \Dotenv\Dotenv(dir['bootstrap'] . dir['raiz'], '.env');
     $env->load();
    
    
    /**
     * -------------------------------------------------------------------------
     * PHP ActiveRecord
     * -------------------------------------------------------------------------
     * 
     * PHP ActiveRecord é um (orm) com padrão de projeto encontrado em softwares 
     * que armazenam seus dados em Banco de dados relacionais.
     * 
     */ 
     
    
     $db = require dir['config'] . 'database.php';

     $cfg = \ActiveRecord\Config::instance();
     $cfg->set_model_directory(dir['models']);
     $cfg->set_connections(['development' => 
       $db['mysql']['driver']   . '://' . 
       $db['mysql']['username'] . ':' . 
       $db['mysql']['password'] . '@' . 
       $db['mysql']['host']     . '/' . 
       $db['mysql']['database'] . '?charset=' . 
       $db['mysql']['charset']
     ]);
     
    
    /**
     * -------------------------------------------------------------------------
     * Klein | Twig Template PHP
     * -------------------------------------------------------------------------
     * 
     * Klein é um gerenciador de rotas fácil e flexível
     * 
     * Twig é um motor de template para a linguagem de programação PHP. 
     * 
     * -------------------------------------------------------------------------
     * Vamos integrar o Twig ao Klein para que possa renderizar nossas páginas
     * com o método do Twig e usando o roteamento do Klein.
     */
     
     
     $base  = dirname(filter_input(INPUT_SERVER,'PHP_SELF'));

     if(ltrim($base, '/')):
        $_SERVER['REQUEST_URI'] = substr(filter_input(INPUT_SERVER, 'REQUEST_URI'), strlen($base));
     endif;

     $klein = new \Klein\Klein();
     
     $klein->respond(function($request, $response, $service, $app){
        $app->register('twig', function(){
           $load = new \Twig_Loader_Filesystem(dir['views']);
           return new \Twig_Environment($load);
        });
     });

    
    /**
     * -------------------------------------------------------------------------
     * Registrando Renderização
     * -------------------------------------------------------------------------
     * 
     * Require as páginas que são configuradas em routes/web.php para serem 
     * renderizadas com Twig Template E roteadas com o Klein
     */
    
     
     require dir['routes'] . 'web.php';
    
     
    /**
     * -------------------------------------------------------------------------
     * Dispatch
     * ------------------------------------------------------------------------- 
     * 
     * Despacha as rotas criadas em routes/web.php
     */
     
     
     $klein->dispatch();
    