<?php

class Database {
    private $host;
    private $username;
    private $password;
    private $database;

    protected function connect() {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "Kaas@360!420";
        $this->database = "stagelogboek";

        $connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if($connection->connect_error) {
            die("Connection error!");
        } else {
            return $connection;
        }
    }
}
?>
