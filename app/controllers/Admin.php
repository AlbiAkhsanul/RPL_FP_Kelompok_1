<?php
class Admin extends Controller
{
    public function dashboard()
    {
        if (!isset($_SESSION["login"])) {
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }

        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }

        $data['title'] = "Admin Page";
        $data['orders'] = $this->model('OrderRute_model')->getAllOrders();
        $data['cars'] = $this->model('Car_model')->getAllCars();
        $data['drivers'] = $this->model('Driver_model')->getAllDrivers();
        $this->view('templates/header', $data);
        $this->view('admin/dashboard', $data);
        $this->view('templates/footer');
    }

    public function orderRute()
    {
        if (!isset($_SESSION["login"])) {
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }

        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }

        $data['title'] = "Admin Page";
        $data['orderRute'] = $this->model('OrderRute_model')->getAllOrders();
        $this->view('templates/header', $data);
        $this->view('admin/ordersRute/index', $data);
        $this->view('templates/footer');
    }
    
    public function drivers()
    {
        if (!isset($_SESSION["login"])) {
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }

        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }

        $data['title'] = "Admin Page";
        $data['drivers'] = $this->model('Driver_model')->getAllDrivers();
        $this->view('templates/header', $data);
        $this->view('admin/drivers/index', $data);
        $this->view('templates/footer');
    }
    public function cars()
    {
        if (!isset($_SESSION["login"])) {
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }

        if ($_SESSION['is_admin'] !== 1) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }

        $data['title'] = "Admin Page";
        $data['cars'] = $this->model('Car_model')->getAllCars();
        $this->view('templates/header', $data);
        $this->view('admin/cars/index', $data);
        $this->view('templates/footer');
    }
}
