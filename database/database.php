<?php
class Database {
    private $connection;


    public function __construct($server, $login, $password, $database)
    {
        $this->connection = mysqli_connect($server, $login, $password, $database);
    }
    
}