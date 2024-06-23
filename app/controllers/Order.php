<?php

class Order extends Controller
{
    public function index()
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        $data['title'] = 'Order List';
        $data['orders'] = $this->model('OrderUser_model')->getAllOrderUser();
        $this->view('templates/header', $data);
        $this->view('order/index', $data);
        $this->view('templates/footer');
    }

    public function create($id)
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }

        $data['title'] = 'Create Order';
        $data['order_rute'] = $this->model('OrderRute_model')->getOrderRuteById($id);
        $rute_id = $data['order_rute']['ID_PESANAN_RUTE'];
        $car_id = $data['order_rute']['ID_MOBIL'];
        $data['rute'] = $this->model('Rute_model')->getRuteById($rute_id);
        $data['mobil'] = $this->model('Car_model')->getCarById($car_id);
        $data['transaksi'] = $this->model('Method_model')->getAllTransaksi();
        $this->view('templates/header', $data);
        $this->view('order/create', $data);
        $this->view('templates/footer');
    }

    public function store($id)
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if (empty($_POST)) {
            header('Location: ' . BASEURL . '/order/create/' . $id);
            exit;
        }
        if ($this->model('OrderUser_model')->createNewOrderUser($_POST) > 0) {
            FlashMsg::setFlash('Succesfully', 'Created', 'success');
            header('Location: ' . BASEURL . '/order');
            exit;
        } else {
            FlashMsg::setFlash('Unsuccesfully', 'Created', 'danger');
            header('Location: ' . BASEURL . '/order');
            exit;
        }
    }

    public function show($id)
    {
        $data['title'] = 'Order Details';
        $data['order'] = $this->model('Order_model')->getOrderById($id);
        if (!$data['order']) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        $data['penalties'] = $this->model('Penalty_model')->getPenaltiesyByOrderId($id);
        $this->view('templates/header', $data);
        $this->view('order/details', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        $data['title'] = 'Edit Order';
        $data['order'] = $this->model('Order_model')->getOrderById($id);

        if (!$data['order']) {
            header('Location: ' . BASEURL . '/admin/orders');
            exit;
        }

        $data['drivers'] = $this->model('Driver_model')->getAllDrivers();
        $data['cars'] = $this->model('Car_model')->getAllCars();
        $car_id = $data['order']['car_id'];
        $data['old_car'] = $this->model('Car_model')->getCarById($car_id);
        $this->view('templates/header', $data);
        $this->view('admin/orders/edit', $data);
        $this->view('templates/footer');
    }

    public function update($id)
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        if ($this->model('Order_model')->editOrderById($_POST, $id) > 0) {
            FlashMsg::setFlash('Succesfully', 'Edited', 'success');
            header('Location: ' . BASEURL . '/admin/orders');
            exit;
        } else {
            FlashMsg::setFlash('Unsuccesfully', 'Edited', 'danger');
            header('Location: ' . BASEURL . '/admin/orders');
            exit;
        }
    }

    public function action($id)
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        $data['title'] = 'Order Action';
        $data['order'] = $this->model('Order_model')->getOrderById($id);

        if (!$data['order']) {
            header('Location: ' . BASEURL . '/admin/penalties');
            exit;
        }

        $user_id = $data['order']['user_id'];
        $data['user'] = $this->model('User_model')->getUserById($user_id);
        $car_id = $data['order']['car_id'];
        $data['car'] = $this->model('Car_model')->getCarById($car_id);
        $this->view('templates/header', $data);
        $this->view('admin/orders/action', $data);
        $this->view('templates/footer');
    }

    public function accept($id)
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($_SESSION["is_admin"] !== 1) {
            header("Location: " . BASEURL . "/home");
            exit;
        }
        if ($this->model('Order_model')->acceptOrder($id) > 0) {
            FlashMsg::setFlash('Succesfully', 'Accept', 'success');
            header('Location: ' . BASEURL . '/admin/orders');
            exit;
        } else {
            FlashMsg::setFlash('Unsuccesfully', 'Accept', 'danger');
            header('Location: ' . BASEURL . '/admin/orders');
            exit;
        }
    }

    public function reject($id)
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($_SESSION["is_admin"] !== 1) {
            header("Location: " . BASEURL . "/home");
            exit;
        }
        if ($this->model('Order_model')->rejectOrder($id) > 0) {
            FlashMsg::setFlash('Succesfully', 'Reject', 'success');
            header('Location: ' . BASEURL . '/admin/orders');
            exit;
        } else {
            FlashMsg::setFlash('Unsuccesfully', 'Reject', 'danger');
            header('Location: ' . BASEURL . '/admin/orders');
            exit;
        }
    }

    public function close($id)
    {
        if (!isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
        if ($_SESSION["is_admin"] !== 1) {
            header("Location: " . BASEURL . "/home");
            exit;
        }
        if ($this->model('Order_model')->closeOrder($id) > 0) {
            FlashMsg::setFlash('Succesfully', 'Reject', 'success');
            header('Location: ' . BASEURL . '/admin/orders');
            exit;
        } else {
            FlashMsg::setFlash('Unsuccesfully', 'Reject', 'danger');
            header('Location: ' . BASEURL . '/admin/orders');
            exit;
        }
    }
}
