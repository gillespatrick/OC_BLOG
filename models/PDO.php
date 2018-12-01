<?php

namespace OC_BLOG\models;

// Manager for connect to database
class PDO
{
    protected function DBconnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'gilles', 'gillespatr9ck');
        return $db;
    }
}