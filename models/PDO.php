<?php

namespace models;

// Manager for connect to database
class PDO
{
    protected function DBconnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'gilles', 'gillespatr9ck',
        array(PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}