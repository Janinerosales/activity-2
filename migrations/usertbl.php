<?php
include '../database/db.php';
class Table extends Database
{
    public function Createtbl()
    {
        $tbl = $this->conn->query("CREATE TABLE IF NOT EXISTS users(
            id int auto_increment primary key,
            first_name varchar(255) not null,
            last_name varchar(255) not null,
            email varchar(100) not null UNIQUE,
            password varchar(100) not null
            )");
        
    }
}




?>