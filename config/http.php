<?php

    /**
     * -------------------------------------------------------------------------
     * Estrutura URL
     * -------------------------------------------------------------------------
     * 
     * Monta a estrutura da URL utilizando como parâmetros o protocolo, o host,
     * a porta(caso exista) e nome do projeto do desenvolvedor.
     *  
     * @param type $redirect 
     */


    function url($redirect = NULL) : string {
        
        // SERVER_PROTOCOL | http
        $server_protocol = strtolower(preg_replace('/[^a-zA-Z\$]/', '', filter_input(INPUT_SERVER, 'SERVER_PROTOCOL')));
        
        // SERVER_NAME | localhost ou 127.0.0.1
        $server_name     = filter_input(INPUT_SERVER, 'SERVER_NAME');
        
        // SERVER_PORT | :8080 ou :80
        $server_port     = filter_input(INPUT_SERVER, 'SERVER_PORT') === '80' ? '' : ':' . filter_input(INPUT_SERVER, 'SERVER_PORT'); 
        
        // SCRIPT_NAME | nome do diretório do projeto
        $script_name     = str_replace('/index.php', '', filter_input(INPUT_SERVER, 'SCRIPT_NAME'));
        
        // Estrutura da URL
        return "{$server_protocol}://{$server_name}{$server_port}{$script_name}{$redirect}";
    }
    
    
