<?php

namespace Database\Connection;

class User extends \Database\Connection\Config
{
    protected function getAllUser()
    {
        $sql     = "SELECT * FROM oopdatabase";
        $result  = $this->DatabaseConnect()->query($sql);
        $numRows = $result->num_rows;

        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

    }
}
