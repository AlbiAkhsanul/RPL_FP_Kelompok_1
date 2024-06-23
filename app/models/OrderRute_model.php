<?php

class OrderRute_model
{
    private $table_name = 'pesanan_rute';
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

    public function calculateTotalHarga($data)
    {
        $data['total_harga'] = $data['harga_sewa'] * $data['durasi_sewa'];

        if ($data['jenis_sewa'] != 0) {
            $data['total_harga'] += 100000 * $data['durasi_sewa'];
        }

        return $data;
    }

    public function createNewOrderRute($data)
    {
        $currentTime = date('Y-m-d H:i');
        $query = "INSERT INTO {$this->table_name} 
        (ID_RUTE,ID_SUPIR,ID_MOBIL,TANGGAL_PESANAN_RUTE,TANGGAL_PERJALANAN,JUMLAH_PENUMPANG,TOTAL_HARGA,STATUS_PESANAN_RUTE) VALUES (:ID_RUTE,:ID_SUPIR,:ID_MOBIL,:TANGGAL_PESANAN_RUTE,:TANGGAL_PERJALANAN,:JUMLAH_PENUMPANG,:TOTAL_HARGA,:STATUS_PESANAN_RUTE)";
        $this->db->query($query);
        $this->db->bind("ID_RUTE", $data['ID_RUTE']);
        $this->db->bind("ID_SUPIR", $data['ID_SUPIR']);
        $this->db->bind("ID_MOBIL", $data['ID_MOBIL']);
        $this->db->bind("TANGGAL_PESANAN_RUTE", $currentTime);
        $this->db->bind("TANGGAL_PERJALANAN", $data['TANGGAL_PERJALANAN']);
        $this->db->bind("JUMLAH_PENUMPANG", $data['JUMLAH_PENUMPANG']);
        $this->db->bind("TOTAL_HARGA", $data['TOTAL_HARGA']);
        $this->db->bind("STATUS_PESANAN_RUTE", "Pending");
        $this->db->execute();

        return $this->db->affectedRowCount();
    }

    public function getOrderRuteById($id)
    {
        $this->db->query("SELECT * FROM {$this->table_name} WHERE ID_PESANAN_RUTE=:ID_PESANAN_RUTE");
        // untuk menghindari sql injection
        $this->db->bind('ID_PESANAN_RUTE', $id);
        return $this->db->single();
    }

    public function changeOrderRuteStatus($id, $status)
    {
        $query = "UPDATE {$this->table_name} SET 
                  STATUS_PESANAN_RUTE = :STATUS_PESANAN_RUTE 
                  WHERE order_id = :order_id ";
        $this->db->query($query);
        $this->db->bind('STATUS_PESANAN_RUTE', $status);
        $this->db->bind('ID_PESANAN_RUTE', $id);

        $this->db->execute();

        return $this->db->affectedRowCount();
    }

    public function closeOrderRute($id)
    {
        $query = "UPDATE {$this->table_name} SET 
                  STATUS_PESANAN_RUTE = :STATUS_PESANAN_RUTE 
                  WHERE ID_PESANAN_RUTE = :ID_PESANAN_RUTE ";
        $this->db->query($query);
        $this->db->bind('STATUS_PESANAN_RUTE', "Closed");
        $this->db->bind('ID_PESANAN_RUTE', $id);

        $this->db->execute();

        return $this->db->affectedRowCount();
    }
}
