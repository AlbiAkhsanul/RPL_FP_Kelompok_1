<?php

class Home extends Controller
{
    public function index()
    {
        if (isset($_SESSION['user_id'])) {
            $data['user'] = $this->model('User_model')->getUserById($_SESSION['user_id']);
        }
        $data['title'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
