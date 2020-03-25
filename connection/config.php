<?php

namespace Database\Connection;

class Config
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function DatabaseConnect()
    {
        $this->servername = 'localhost';
        $this->username   = 'root';
        $this->password   = '';
        $this->dbname     = 'system_controller';

        $connection = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        return $connection;
    }
}
