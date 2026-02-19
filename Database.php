<?php

class Database {

    public $connection;
    public $statement;

    public function __construct($config, $personname = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $personname, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => pdo::FETCH_ASSOC    
        ]);
    }
} 