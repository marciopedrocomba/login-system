<?php

namespace Model;

use \Dao\Dbh;

class Post extends Dbh {

    protected $message;


    public function getMessage($message) {
        $this->message = $message;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

}