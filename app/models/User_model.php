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

    public function editUserById($data, $id)
    {
        $userData = $this->getUserById($id);
        if (!password_verify($data['PASSWORD_LAMA'], $userData['PASSWORD'])) {
            echo "
            <script>
                alert('Password Lama tidak sesuai!');
                window.history.go(-1);
            </script>
            ";
            exit;
        }
        if (!empty($data['PASSWORD_BARU']) && $data['PASSWORD_BARU'] !== $data['KONFIRMASI_PASSWORD_BARU']) {
            echo "
            <script>
                alert('Konfirmasi Password tidak sesuai!');
                window.history.go(-1);
            </script>
            ";
            exit;
        }
        if ($userData['EMAIL_USER'] !== $data['EMAIL_USER']) {
            if ($this->getEmail($data['EMAIL_USER'])) {
                echo "
                <script>
                    alert('Email Telah Dipakai, Coba Email Lain!');
                    window.history.go(-1);
                </script>
                ";
                exit;
            }
        }
        $password = $data['PASSWORD_BARU'] === '' ? $userData['PASSWORD'] : password_hash($data['PASSWORD_BARU'], PASSWORD_DEFAULT);
        $query = "UPDATE {$this->table_name} SET 
                NAMA = :NAMA, 
                NO_TELP = :NO_TELP, 
                EMAIL_USER = :EMAIL_USER, 
                PASSWORD = :PASSWORD 
                WHERE ID_USER = :ID_USER";

        $this->db->query($query);
        $this->db->bind('NAMA', $data['NAMA']);
        $this->db->bind('NO_TELP', $data['NO_TELP']);
        $this->db->bind('EMAIL_USER', $data['EMAIL_USER']);
        $this->db->bind('PASSWORD', $password);
        $this->db->bind('ID_USER', $id);
        $this->db->execute();

        return $this->db->affectedRowCount();
    }

    public function getEmail($email)
    {
        $query = "SELECT EMAIL_USER FROM {$this->table_name} WHERE EMAIL_USER = :EMAIL_USER";
        $this->db->query($query);
        $this->db->bind('EMAIL_USER', $email);

        return $this->db->single();
    }
}
