<?php

return [
    
    /**
     * ------------------------------------------------- -----------------------
     * Conexões de banco de dados
     * ------------------------------------------------- -----------------------
     *
     * Aqui estão cada uma das conexões de banco de dados, configuradas para seu 
     * aplicativo. Estes são exemplos de configuração de cada plataforma de 
     * banco de dados.
     */

    'mysql' => [
        'driver'   => getenv('DB_DRIVER'),
        'host'     => getenv('DB_HOST'),
        'port'     => getenv('DB_PORT'),  
        'database' => getenv('DB_DATABASE'),  
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
        'charset'  => getenv('DB_ENCODE')
    ],
        
    'pgsql' => [
        'driver'   => getenv('DB_DRIVER'),
        'host'     => getenv('DB_HOST'),
        'port'     => getenv('DB_PORT'),  
        'database' => getenv('DB_DATABASE'),  
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
        'charset'  => getenv('DB_ENCODE')
    ]
    
];

