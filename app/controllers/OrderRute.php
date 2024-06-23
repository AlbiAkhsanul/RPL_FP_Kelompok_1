<?php

class OrderRute extends Controller
{
    public function index()
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        $data['title'] = 'List Pesanan Rute';
        $data['orderRute'] = $this->model('OrderRute_model')->getAllOrders();
        $this->view('templates/header', $data);
        $this->view('orderRute/index', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        $data['title'] = 'Buat Pesanan Rute';
        $data['rute'] = $this->model('Rute_model')->getAllRute();
        $this->view('templates/header', $data);
        $this->view('orderRute/create', $data);
        $this->view('templates/footer');
    }

    public function confirmation()
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        $data['title'] = 'ListPesanan Rute';
        $data['supir'] = $this->model('Driver_model')->getAllAvailableDrivers();
        $data['mobil'] = $this->model('Car_model')->getAllAvailableCars();
        $this->view('templates/header', $data);
        $this->view('orderRute/confirm', $data);
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
        if ($this->model('OrderRute_model')->createNewOrderRute($_POST) > 0) {
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
