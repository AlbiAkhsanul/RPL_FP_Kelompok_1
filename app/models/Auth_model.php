<?php

class Auth_model
{
    private $table_name = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function verify($data)
    {
        $email = strtolower(stripcslashes($data['email']));
        $password = $data['PASSWORD'];
        $query = "SELECT * FROM {$this->table_name} WHERE EMAIL_USER = :EMAIL_USER";

        $this->db->query($query);
        $this->db->bind('EMAIL_USER', $email);

        $row = $this->db->single();

        // cek email
        if (!is_null($row)) {
            // cek password
            if (password_verify($password, $row['PASSWORD'])) {
                // cek session
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $row['ID_USER'];
                $_SESSION['is_admin'] = $row['IS_ADMIN'];
                var_dump($_SESSION);
                // cek remember me 
                if (isset($data['remember'])) {
                    // buat cookie
                    setcookie('num', $row['ID_USER'] + 7, time() + 3600, '/'); //samaran untuk cookie id
                    setcookie('key', hash('sha256', $row['ID_USER'] . $row['EMAIL_USER'] . $row['ID_USER']), time() + 3600, '/'); //samaran untuk cookie email
                }
                // Pindah ke main page
                header("Location:" . BASEURL . "/home/index");
                exit;
            }
        }
        header("Location:" . BASEURL . "/auth/login");
        echo "
                <script>
                    alert('Konfirmasi Password Tidak Sesuai!');

                </script>
            ";
        exit;
        // Nanti pasang flasher
    }
}
