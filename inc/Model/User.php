<?php

namespace Model;

use \Dao\Dbh;

class User extends Dbh {

    protected $firstname;
    protected $lastname;
    protected $email;
    protected $password;


    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

}