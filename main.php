<?php

namespace Database;

include_once "autoloader.php";

use \Database\Connection\View;

class Main
{
    public function __construct()
    {
        $printAllData = new View;
        $printAllData->shoAllDataRecord();
    }
}

new Main();
