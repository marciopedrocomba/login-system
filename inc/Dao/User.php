<?php

namespace Dao;

use \Model\User as MUser;

class User extends MUser {

    static function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /");
    }

    public function login() {
        if(empty($this->email) || empty($this->password)) {
            header("Location: /?error=empty&email=$this->email");
            exit;
        }else {
            
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                header("Location: /?error=invalidmail");
                exit;
            }else {

                $sql = "select * from users where email = ?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$this->email]);

                if($stmt->rowCount() > 0) {
                    
                    if($row = $stmt->fetch()) {

                        $hashed = password_verify($this->password, $row['password']);

                        if($hashed == false) {
                            header("Location: /?error=wrongpassword&email=$this->email");
                            exit;
                        }else if($hashed == true) {
                            session_start();
                            $_SESSION['ibox_user_id'] = $row['id'];
                            $_SESSION['ibox_user_firstname'] = $row['firstname']; 
                            $_SESSION['ibox_user_lastname'] = $row['lastname']; 
                            $_SESSION['ibox_user_email'] = $row['email']; 

                            header("Location: /home");
                            exit;

                        }

                    }

                } else {
                    header("Location: /?error=userNotfound&email=$this->email");
                    exit;
                }

            }
        
        }
    }

    public function register() {

        if(empty($this->firstname) || empty($this->lastname) || empty($this->email) || empty($this->password)) {
            header("Location: /register?error=empty&firstname=$this->firstname&lastname=$this->lastname&email=$this->email");
            exit;
        }else {
            
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                header("Location: /register?error=invalidmail&firstname=$this->firstname&lastname=$this->lastname");
                exit;
            }else {

                $sql = "select * from users where email = ?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$this->email]);

                if($stmt->rowCount() > 0) {
                    header("Location: /register?error=existentUser&firstname=$this->firstname&lastname=$this->lastname");
                    exit;
                }else {

                    $hashed = password_hash($this->password, PASSWORD_DEFAULT);
                    $sql = "insert into users(firstname, lastname, email, password) values(?, ?, ?, ?)";
                    $stmt = $this->connect()->prepare($sql);
                    $stmt->execute([$this->firstname, $this->lastname, $this->email, $hashed]);

                    header("Location: /register?success");

                }

            }
        
        }
    }

}