<?php 

namespace CloudDatabase\Connection;

class View extends \CloudDatabase\Connection\User{
    public function showAllDatabase(){
        $datas = $this->getAllUserData(); 

        foreach($datas as $data){
            echo $data['title'] . "<br>";
            echo $data['name'] . "<br>"; 
        }
    }
}