<?php

class Pages {
    public function __construct() {

    }

    public function index() {
        echo 'This is index!';
    }

    public function about() {
        echo 'This is about!';
    }

    public function edit($id = 0) {
        if ($id == 0){
            echo 'To edit, pass a valid id';
        }else {
            echo 'This is edit of page: ' . $id;
        }
    }
}