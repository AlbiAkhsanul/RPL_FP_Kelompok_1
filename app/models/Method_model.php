<?php

class Method_model
{
    private $table_name = 'metode_transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTransaksi()
    {
        $this->db->query("SELECT * FROM {$this->table_name}");
        return $this->db->resultSet();
    }

    // public function getRuteById($id)
    // {
    //     $this->db->query("SELECT * FROM {$this->table_name} WHERE ID_RUTE=:ID_RUTE");
    //     $this->db->bind('ID_RUTE', $id);
    //     return $this->db->single();
    // }
}
