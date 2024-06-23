<?php

class Rute_model
{
    private $table_name = 'rute';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRute()
    {
        $this->db->query("SELECT * FROM {$this->table_name}");
        return $this->db->resultSet();
    }
}