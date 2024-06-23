<?php

class Driver_model
{
    private $table_name = 'supir';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDrivers()
    {
        $this->db->query("SELECT * FROM {$this->table_name}");
        return $this->db->resultSet();
    }

    public function createNewDriver($data)
    {
        // $currentTime = date('Y-m-d H:i');
        $query = "INSERT INTO {$this->table_name} (NAMA, NO_TELP) VALUES 
                  (:NAMA, :NO_TELP)";
        $this->db->query($query);
        $this->db->bind('NAMA', $data['NAMA']);
        $this->db->bind('NO_TELP', $data['NO_TELP']);

        $this->db->execute();
        return $this->db->affectedRowCount();
    }

    public function getDriverById($id)
    {
        $this->db->query("SELECT * FROM {$this->table_name} WHERE ID_SUPIR=:ID_SUPIR");
        // untuk menghindari sql injection
        $this->db->bind('ID_SUPIR', $id);
        return $this->db->single();
    }

    public function editDriverById($data, $id)
    {
        $query = "UPDATE {$this->table_name} SET 
                  NAMA = :NAMA,
                  NO_TELP = :NO_TELP,
                  WHERE ID_SUPIR = :ID_SUPIR ";
        $this->db->query($query);
        $this->db->bind('NAMA', $data['NAMA']);
        $this->db->bind('NO_TELP', $data['NO_TELP']);
        $this->db->bind('ID_SUPIR', $id);

        $this->db->execute();

        return $this->db->affectedRowCount();
    }

    public function deleteDriverById($id)
    {
        $query = "DELETE FROM {$this->table_name} WHERE ID_SUPIR = :ID_SUPIR";
        $this->db->query($query);
        $this->db->bind('ID_SUPIR', $id);

        $this->db->execute();

        return $this->db->affectedRowCount();
    }

    public function getAllAvailableDrivers($tanggal)
    {
        $query = 
        "SELECT s.*
        FROM supir s
        WHERE s.ID_SUPIR NOT IN (
            SELECT p.ID_SUPIR
            FROM pesanan_rute p
            WHERE p.TANGGAL_PERJALANAN = :TANGGAL_PERJALANAN
        )";
        
        $this->db->query($query);
        $this->db->bind('TANGGAL_PERJALANAN', $tanggal);
        return $this->db->resultSet();
    }
}