<?php

namespace CloudDatabase\Connection;

class User extends \CloudDatabase\Connection\Config{

    protected function getAllUserData(){
        $sql     = "SELECT * FROM data";
        $result  = $this->ConnectDatabase()->query($sql);
        $numRows = $result->num_rows;
        
        if($numRows > 0 ) {
            while($row = $result->fetch_assoc()){
                $data[] = $row; 

            }
            return $data; 
        }
    }
}