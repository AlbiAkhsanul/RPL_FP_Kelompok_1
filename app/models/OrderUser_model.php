<?php

class OrderUser_model
{
    private $table_name = 'pesanan_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllOrders()
    {
        $this->db->query("SELECT * FROM {$this->table_name}");
        return $this->db->resultSet();
    }

    public function createNewOrder($data)
    {
        $currentTime = date('Y-m-d H:i');

        $query = "INSERT INTO {$this->table_name} (ID_PESANAN_RUTE,ID_METODE,ID_RUTE,ID_USER,TANGGAL_PESANAN_USER,TANGGAL_PERJALANAN,TANGGAL_TRANSAKSI,TOTAL_HARGA,STATUS_TRANSAKSI,ALAMAT_PENJEMPUTAN,ALAMAT_PENURUNAN,STATUS_PESANAN_USER) VALUES (:ID_PESANAN_RUTE,:ID_METODE,:ID_RUTE,:ID_USER,:TANGGAL_PESANAN_USER,:TANGGAL_PERJALANAN,:TANGGAL_TRANSAKSI,:TOTAL_HARGA,:STATUS_TRANSAKSI,:ALAMAT_PENJEMPUTAN,:ALAMAT_PENURUNAN,:STATUS_PESANAN_USER)";
        $this->db->query($query);
        $this->db->bind('ID_PESANAN_RUTE', $data['ID_PESANAN_RUTE']);
        $this->db->bind('ID_METODE', $data['ID_METODE']);
        $this->db->bind('ID_RUTE', $data['ID_RUTE']);
        $this->db->bind('ID_USER', $data['ID_USER']);
        $this->db->bind('TANGGAL_PESANAN_USER',  $currentTime);
        $this->db->bind('TANGGAL_PERJALANAN', $data['TANGGAL_PERJALANAN']);
        $this->db->bind('TANGGAL_TRANSAKSI', $currentTime);
        $this->db->bind('TOTAL_HARGA', $data['TOTAL_HARGA']);
        $this->db->bind('STATUS_TRANSAKSI', $data['STATUS_TRANSAKSI']);
        $this->db->bind('ALAMAT_PENJEMPUTAN', $data['ALAMAT_PENJEMPUTAN']);
        $this->db->bind('ALAMAT_PENURUNAN', $data['ALAMAT_PENURUNAN']);
        $this->db->bind('STATUS_PESANAN_USER', $data['STATUS_PESANAN_USER']);

        $this->db->execute();
        return $this->db->affectedRowCount();
    }

    public function getOrderById($id)
    {
        $this->db->query("SELECT * FROM {$this->table_name} WHERE ID_PESANAN_USER=:ID_PESANAN_USER");
        $this->db->bind('ID_PESANAN_USER', $id);
        return $this->db->single();
    }

    // public function editOrderById($data, $id)
    // {

    //     $query = "UPDATE {$this->table_name} SET 
    //               driver_id = :driver_id, 
    //               car_id = :car_id,
    //               tanggal_sewa = :tanggal_sewa
    //               WHERE order_id = :order_id ";
    //     $this->db->query($query);
    //     $this->db->bind('driver_id', $data['driver_id']);
    //     $this->db->bind('car_id', $data['car_id']);
    //     $this->db->bind('tanggal_sewa', $data['tanggal_sewa']);
    //     $this->db->bind('order_id', $id);

    //     $this->db->execute();

    //     return $this->db->affectedRowCount();
    // }

    public function changeOrderStatus($id, $status)
    {
        $query = "UPDATE {$this->table_name} SET 
                  STATUS_PESANAN_USER = :STATUS_PESANAN_USER 
                  WHERE ID_PESANAN_USER = :ID_PESANAN_USER ";
        $this->db->query($query);
        $this->db->bind('STATUS_PESANAN_USER', $status);
        $this->db->bind('ID_PESANAN_USER', $id);
        $this->db->execute();
    }
}
