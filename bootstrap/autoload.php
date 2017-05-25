<?php
    
    /**
     * -------------------------------------------------------------------------
     * Registrar o Composer Auto Loader
     * -------------------------------------------------------------------------
     *
     * Composer fornece um carregador de classe conveniente e gerado automaticamente
     * Para nossa aplicação. Para que não tenhamos que se preoucpar com o 
     * carregamento de qualquer das nossas classes "manualmente".
     *
     */


     require dir['vendor'] . 'autoload.php';
    
     
     $url = new \Src\Url\Url();
     $url->load();
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
     * Twig Template PHP
     * -------------------------------------------------------------------------
     * 
     * Twig é um motor de template para a linguagem de programação PHP. Onde
     * podemos tratar dados em uma página de uma maneira melhor e mais otimizada,
     * além de padronizar o template.
     */
     
     
     $load   = new \Twig_Loader_Filesystem(dir['views']);
     $twig   = new \Twig_Environment($load);

    
    /**
     * -------------------------------------------------------------------------
     * Registrando Renderização
     * -------------------------------------------------------------------------
     * 
     * Require as páginas que são configuradas em views_c/web/view.php para serem 
     * renderizadas com Twig Template
     */
    
     
     require dir['web'] . 'view.php';
    
    