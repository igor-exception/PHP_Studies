<?php

namespace App\Database;

class Database {
    const HOST='localhost';
    const DBNAME='my_db';
    const USER='root';
    const PASSWD='';

    private \PDO $db;

    public function connect()
    {
        try{
            $this->db = new \PDO('mysql:host='. self::HOST. ';dbname='. self::DBNAME, self::USER, self::PASSWD);
        }catch(\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function insert($name, $email)
    {
        try{
            $this->connect();
            $query = 'INSERT INTO users (name, email) VALUES (:name, :email)';
            $stmt = $this->db->prepare($query);
            $stmt->bindValue('name', $name);
            $stmt->bindValue('email', $email);
            $stmt->execute();
        }catch(\PDOException $e){
            return false;
        }
        return true;
    }
}