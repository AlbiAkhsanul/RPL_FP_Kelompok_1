<?php

class OrderRute extends Controller
{
    public function index() {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        $data['title'] = 'Tambah Pesanan Rute';
        $data['rute'] = $this->model('Rute_model')->getAllRute();
        $data['supir'] = $this->model('Driver_model')->getAllDrivers();
        $data['mobil'] = $this->model('Car_model')->getAllCars();
        $data['orderRute'] = $this->model('OrderRute_model')->getAllOrders();
        $this->view('templates/header', $data);
        $this->view('admin/ordersRute/index', $data);
        $this->view('templates/footer');
    }

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
        $data['rute'] = $_POST;
        $data['supir'] = $this->model('Driver_model')->getAllAvailableDrivers($data['rute']['TANGGAL_PERJALANAN']);
        $data['mobil'] = $this->model('Car_model')->getAllAvailableCars($data['rute']['TANGGAL_PERJALANAN']);
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
        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        $car = $this->model('Car_model')->getCarById($_POST['ID_SUPIR']);
        $_POST['JUMLAH_PENUMPANG'] = $car['KAPASITAS_PENUMPANG'];
        if ($this->model('OrderRute_model')->createNewOrderRute($_POST) > 0)
        {
            FlashMsg::setFlash('Succesfully', 'Created', 'success');
            header('Location: ' . BASEURL . '/orderRute/index');
            exit;
        } else {
            FlashMsg::setFlash('Unsuccesfully', 'Created', 'danger');
            header('Location: ' . BASEURL . '/orderRute/index');
            exit;
        }
    }
}