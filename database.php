<?php

class database{
    public $db;

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_password = "";
    private $db_name = "testdb";

    public function connect()
    {
        $this->db = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_password);

        if(!$this->db){
            die("Failed to connect");
        }
    }
}

