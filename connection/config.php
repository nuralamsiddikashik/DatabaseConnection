<?php 

namespace CloudDatabase\Connection;

class Config{

    private $servername; 
    private $username; 
    private $password; 
    private $dbname; 

    protected function ConnectDatabase(){
       
        $this->servername = "localhost";
        $this->username   = "root";
        $this->password   = "";
        $this->dbname     = "oopdatabase";

        $conn = mysqli_connect($this->servername, $this->username,$this->password, $this->dbname); 

        return $conn; 
    }
}