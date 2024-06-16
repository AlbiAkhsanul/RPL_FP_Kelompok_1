<?php

class User extends Controller 
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function details($id)
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        $data['user'] = $this->model('User_model')->getUserById($id);
        $data['title'] = "Lihat Profil";
        $this->view('templates/header', $data);
        $this->view('user/details', $data);
        $this->view('templates/footer');
    }

    public function edit($id) 
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        $data['user'] = $this->model('User_model')->getUserById($id);
        $data['title'] = "Edit Profil";
        $this->view('templates/header', $data);
        $this->view('user/edit', $data);
        $this->view('templates/footer');
    }

    public function update($id) 
    {
        if($this->model('User_model')->editUserById($_POST, $id) > 0)
        {
            FlashMsg::setFlash('Succesfully', 'Updated', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            FlashMsg::setFlash('Unsuccesfully', 'Updated', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

}