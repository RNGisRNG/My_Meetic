<?php

class dataBase
{
    public function ddb_connection()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=mymeetic;charset=utf8', 'root', 'root');
        } catch (PDOException $e) {
            die('Error : ' . $e->getMessage());
        }

        return $db;
    }

    public function ddb_query($sqlQuery)
    {
        $db = $this->ddb_connection();

        $statement = $db->prepare($sqlQuery);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function sign_up($sqlQuery)
    {
        $db = $this->ddb_connection();

        $cinemaStmt = $db->prepare($sqlQuery);
        $cinemaStmt->execute();
    }
}

$hobbies = new dataBase;
$signUp = new dataBase;
$login = new dataBase;

