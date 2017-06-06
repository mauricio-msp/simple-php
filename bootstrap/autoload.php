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
     * próprio desenvolvedor tenha acesso.
     * 
     */
    
    
     $env = new \Dotenv\Dotenv(dir['bootstrap'] . dir['raiz'], '.env');
     $env->load();
    
    
    /**
     * -------------------------------------------------------------------------
     * PHP ActiveRecord
     * -------------------------------------------------------------------------
     * 
     * PHP ActiveRecord é um ORM(Object-relational mapping) com  padrão de 
     * projeto encontrado em softwares que armazenam seus dados em Banco de 
     * dados relacionais.
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
     * Route extends Klein.php(Klein é um gerenciador de rotas fácil e flexível)
     * -------------------------------------------------------------------------
     * 
     * Rota que adapta o modo de chamada do controller usando o gerenciador de 
     * rotas Klein. Há duas maneiras: 
     * 
     * - Modo adaptado: 'HomeController@action'.
     * - Modo padrão: function() { // trecho de código }.
     * 
     * -------------------------------------------------------------------------
     */
     
     
     $base  = dirname(filter_input(INPUT_SERVER,'PHP_SELF'));

     if(ltrim($base, '/')):
        $_SERVER['REQUEST_URI'] = substr(filter_input(INPUT_SERVER, 'REQUEST_URI'), strlen($base));
     endif;

     $simple = new \Src\Routing\Route();

    
    /**
     * -------------------------------------------------------------------------
     * Registrando Renderização
     * -------------------------------------------------------------------------
     * 
     * Require as páginas que são configuradas em routes/web.php para serem 
     * renderizadas com Twig Template e roteadas com o Klein
     */
    
     
     require dir['routes'] . 'web.php';
    
     
    /**
     * -------------------------------------------------------------------------
     * Dispatch
     * ------------------------------------------------------------------------- 
     * 
     * Despacha as rotas criadas em routes/web.php
     */
     
     
     $simple->dispatch();
    