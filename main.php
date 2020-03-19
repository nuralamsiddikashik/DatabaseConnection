<?php 

namespace CloudDatabase; 

include_once "autoloader.php";

 use \CloudDatabase\Connection\Config; 
 use \CloudDatabase\Connection\User; 
 use \CloudDatabase\Connection\View; 

class Main{

    public function __construct(){
        $printData = new View(); 
        echo $printData->showAllDatabase(); 
    }
    
}
new Main(); 