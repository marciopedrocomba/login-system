<?php

namespace Dao;

use PDO;

class Dbh {

    private $hostname;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    protected function connect() {

        try {

            $this->hostname = "localhost";
            $this->username = "marciopedrocomba";
            $this->password = "Delfinapedro1";
            $this->dbname = "loginsystem";
            $this->charset = "UTF8";

            $dns = "mysql:host=".$this->hostname.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dns, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        }catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }

    }

}