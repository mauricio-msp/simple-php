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
       $db['dev']['driver']   . '://' . 
       $db['dev']['username'] . ':' . 
       $db['dev']['password'] . '@' . 
       $db['dev']['host']     . '/' . 
       $db['dev']['database'] . '?charset=' . 
       $db['dev']['charset']
     ]);
     
    
    /**
     * -------------------------------------------------------------------------
     * DRouter
     * -------------------------------------------------------------------------
     * 
     * DRouter é um gerenciador de rotas fácil, simples e flexível, com o 
     * intuito de ser utilizado em aplicações web pequenas, como a nossa.
     * 
     */
    

     $app = new \DRouter\App();
     
     
    /**
     * -------------------------------------------------------------------------
     * Requerindo Configurações do Roteamento
     * ------------------------------------------------------------------------- 
     * 
     * Require as configurações setadas em routes/config.php, onde as "views"
     * irão ter acessos as configurações setadas no arquivo.
     * 
     */
     
     
     require dir['routes'] . 'config.php';
    
     
    /**
     * -------------------------------------------------------------------------
     * Registrando Renderização
     * -------------------------------------------------------------------------
     * 
     * Require as páginas que são configuradas em routes/web.php para serem 
     * renderizadas com Twig Template e roteadas com o DRouter.
     * 
     */
    
     
     require dir['routes'] . 'web.php';
    
     
    /**
     * -------------------------------------------------------------------------
     * Run
     * ------------------------------------------------------------------------- 
     * 
     * Executa todas as rotas criadas em routes/web.php
     * 
     */
     
     
     $app->run();
    