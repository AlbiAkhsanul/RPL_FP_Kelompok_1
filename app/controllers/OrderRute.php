<?php

class OrderRute extends Controller
{
    public function rute()
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        $data['rute'] = $this->model('Rute_model')->getAllRute();
        $data['title'] = 'Tambah Pesanan Rute';
        $this->view('templates/header', $data);
        $this->view('admin/ordersRute/rute', $data);
        $this->view('templates/footer');
    }

    public function mobil()
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        $data['supir'] = $this->model('Driver_model')->getAllDrivers();
        $data['mobil'] = $this->model('Car_model')->getAllCars();
        $data['title'] = 'Tambah Pesanan Rute';
        $this->view('templates/header', $data);
        $this->view('admin/ordersRute/mobil', $data);
        $this->view('templates/footer');

    }

    public function store()
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($this->model('OrderRute_model')->createNewOrderRute($_POST) > 0)
        {
            FlashMsg::setFlash('Succesfully', 'Created', 'success');
            header('Location: ' . BASEURL . '/order');
            exit;
        } else {
            FlashMsg::setFlash('Unsuccesfully', 'Created', 'danger');
            header('Location: ' . BASEURL . '/order');
            exit;

        }
    }
}