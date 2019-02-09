<?php

class Pages extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    public function index() {

        $posts = $this->postModel->getPosts();

        $data = [
            'page_title' => 'Pages',
            'title'      => 'Welcome',
            'posts'      => $posts
        ];

        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'page_title' => 'Pages > About',
            'title' => 'Hey!'
        ];

        $this->view('pages/about', $data);
    }

    public function edit($id = 0) {
        if ($id == 0){
            echo 'To edit, pass a valid id';
        }else {
            echo 'This is edit of page: ' . $id;
        }
    }
}