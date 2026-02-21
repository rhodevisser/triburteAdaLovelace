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

    public function query($query, $params = []) 
    {
    $this->statement = $this->connection->prepare($query);

    $this->statement->execute($params);

    return $this;
    }

    public function get(){
        return $this->statement->fetchAll();
    }


} 