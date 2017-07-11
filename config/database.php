<?php

return [
    
    /**
     * ------------------------------------------------- -----------------------
     * Conexão com o banco de dados
     * ------------------------------------------------- -----------------------
     *
     * Aqui esta definido os valores para a conexão com o seu banco de dados.
     * OBS: Os valores são definidos no arquivo ".env".
     * 
     */

    'dev' => [
        'driver'   => getenv('DB_DRIVER'),
        'host'     => getenv('DB_HOST'),
        'port'     => getenv('DB_PORT'),  
        'database' => getenv('DB_DATABASE'),  
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
        'charset'  => getenv('DB_ENCODE')
    ],
    
];

