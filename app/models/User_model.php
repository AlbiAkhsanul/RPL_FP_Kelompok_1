<?php

class User_model
{
    private $table_name = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    function addUser($data)
    {
        $nama = ucwords(htmlspecialchars($data['NAMA']));
        $email = strtolower(htmlspecialchars($data['EMAIL_USER']));
        $password = $data['PASSWORD'];
        $passwordConfirm = $data['PASSWORD_CONFIRM'];
        $no_telp = $data['NO_TELP'];
        // Cek email sudah ada apa belum
        $query = "SELECT EMAIL_USER FROM {$this->table_name} WHERE EMAIL_USER = :EMAIL_USER";
        $this->db->query($query);
        $this->db->bind('EMAIL_USER', $email);

        if ($this->db->resultSet()) {
            echo "
            <script>
                alert('Email Telah Dipakai, Coba Email Lain!');
                
            </script>
        ";
            exit;;
        }

        // cek konfirmasi pass
        if ($password !== $passwordConfirm) {
            echo "
            <script>
                alert('Konfirmasi Password Tidak Sesuai!');
                
            </script>
        ";
            exit;;
        }
        // Enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Memasukan kedalam database
        $query = "INSERT INTO {$this->table_name} (NAMA,EMAIL_USER,PASSWORD,NO_TELP,IS_ADMIN) VALUES 
                  (:NAMA,:EMAIL_USER,:PASSWORD,:NO_TELP,:IS_ADMIN)";
        $this->db->query($query);
        $this->db->bind('NAMA', $nama);
        $this->db->bind('EMAIL_USER', $email);
        $this->db->bind('PASSWORD', $password);
        $this->db->bind('NO_TELP', $no_telp);
        $this->db->bind('IS_ADMIN', false);

        $this->db->execute();

        return $this->db->affectedRowCount();
    }

    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM {$this->table_name} WHERE ID_USER=:ID_USER");
        // untuk menghindari sql injection
        $this->db->bind('ID_USER', $id);
        return $this->db->single();
    }
}
