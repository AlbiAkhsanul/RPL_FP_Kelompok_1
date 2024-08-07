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
        $data['rute'] = $this->model('Rute_model')->getAllRute();
        $this->view('templates/header', $data);
        $this->view('orderRute/index', $data);
        $this->view('templates/footer');
    }

    public function admin()
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }

        $data['title'] = 'List Pesanan Rute';
        $data['orderRute'] = $this->model('OrderRute_model')->getAllOrders();
        $this->view('templates/header', $data);
        $this->view('admin/ordersRute/index', $data);
        $this->view('templates/footer');
    }

    public function show($id)
    {
        $data['title'] = 'Order Details';
        $data['orderRute'] = $this->model('OrderRute_model')->getOrderRuteById($id);
        if (!$data['orderRute']) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        $rute_id = $data['orderRute']['ID_RUTE'];
        $supir_id = $data['orderRute']['ID_SUPIR'];
        $mobil_id = $data['orderRute']['ID_MOBIL'];
        $data['rute'] = $this->model('Rute_model')->getRuteById($rute_id);
        $data['supir'] = $this->model('Driver_model')->getDriverById($supir_id);
        $data['mobil'] = $this->model('Car_model')->getCarById($mobil_id);
        $this->view('templates/header', $data);
        $this->view('orderRute/details', $data);
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
        $this->view('admin/ordersRute/create', $data);
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
        $rute_id = $_POST['ID_RUTE'];
        $tanggal_perjalanan = $_POST['TANGGAL_PERJALANAN'];
        $data['tanggal'] = $_POST['TANGGAL_PERJALANAN'];
        $data['rute'] = $this->model('Rute_model')->getRuteById($rute_id);
        $data['title'] = 'ListPesanan Rute';
        $data['supir'] = $this->model('Driver_model')->getAllAvailableDrivers($tanggal_perjalanan);
        $data['mobil'] = $this->model('Car_model')->getAllAvailableCars($tanggal_perjalanan);
        $this->view('templates/header', $data);
        $this->view('admin/ordersRute/confirm', $data);
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
        $car = $this->model('Car_model')->getCarById($_POST['ID_MOBIL']);
        $_POST['JUMLAH_PENUMPANG'] = $car['KAPASITAS_PENUMPANG'];
        if ($this->model('OrderRute_model')->createNewOrderRute($_POST) > 0) {
            FlashMsg::setFlash('Succesfully', 'Created', 'success');
            header('Location: ' . BASEURL . '/orderRute/admin');
            exit;
        } else {
            FlashMsg::setFlash('Unsuccesfully', 'Created', 'danger');
            header('Location: ' . BASEURL . '/orderRute/admin');
            exit;
        }
    }
}
