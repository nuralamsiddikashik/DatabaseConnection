<?php

namespace Database\Connection;

class View extends \Database\Connection\User
{
    public function shoAllDataRecord()
    {
        $datas = $this->getAllUser();

        foreach ($datas as $data) {
            echo $data['name'] . "\n";
            echo $data['email'] . "\n";
            echo $data['phone'] . "\n";
        }
    }
}
