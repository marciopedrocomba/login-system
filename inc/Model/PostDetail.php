<?php

namespace Model;

use \Dao\Dbh;

class PostDetail extends Dbh {

    protected $user;
    protected $post;
    protected $date;
    protected $time;
    protected $timePosted;

    public function __construct($userId, $postId) {
        $this->user = $userId;
        $this->post = $postId;
    }

    public function getDate($date) {
        $this->date = $date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getTime($time) {
        $this->time = $time;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function getTimePosted($timePosted) {
        $this->timePosted = $timePosted;
    }

    public function setTimePosted($timePosted) {
        $this->timePosted = $timePosted;
    }

}