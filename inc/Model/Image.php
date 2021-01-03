<?php

namespace Model;

use \Dao\Dbh;
use \Model\Post;

class Image extends Dbh {

    protected $image;
    protected $post;

    public function __construct($postId) {
        $this->post = $postId;
    }

    public function getImage($image) {
        $this->image = $image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

}