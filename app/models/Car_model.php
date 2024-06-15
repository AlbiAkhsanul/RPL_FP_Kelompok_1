<?php

class Car_model
{
    private $table_name = 'mobil';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCars()
    {
        $this->db->query("SELECT * FROM {$this->table_name}");
        return $this->db->resultSet();
    }

    public function getAllActiveCars()
    {
        $this->db->query("SELECT * FROM {$this->table_name} WHERE STATUS_MOBIL = 1");
        return $this->db->resultSet();
    }

    public function createNewCar($data, $dataImg)
    {
        // $currentTime = date('Y-m-d H:i');
        $currentTime = date('Y-m-d');
        $carImg = $this->uploadCarImg($dataImg, $currentTime);
        $query = "INSERT INTO {$this->table_name} (JENIS_MOBIL,NOPOL,MERK,TAHUN,KAPASITAS_PENUMPANG,FOTO_MOBIL,STATUS_MOBIL) VALUES 
                  (:JENIS_MOBIL,:NOPOL,:MERK,:TAHUN,:KAPASITAS_PENUMPANG,:FOTO_MOBIL,:STATUS_MOBIL)";
        $this->db->query($query);
        $this->db->bind('JENIS_MOBIL', $data['JENIS_MOBIL']);
        $this->db->bind('NOPOL', $data['NOPOL']);
        $this->db->bind('MERK', $data['MERK']);
        $this->db->bind('TAHUN', $data['TAHUN']);
        $this->db->bind('KAPASITAS_PENUMPANG', $data['KAPASITAS_PENUMPANG']);
        $this->db->bind('FOTO_MOBIL', $carImg);
        $this->db->bind('STATUS_MOBIL', $data['STATUS_MOBIL']);

        $this->db->execute();
        return $this->db->affectedRowCount();
    }

    public function uploadCarImg($dataImg, $seconds)
    {
        $fileName = $dataImg['FOTO_MOBIL']['name'];
        $fileSize = $dataImg['FOTO_MOBIL']['size'];
        $fileError = $dataImg['FOTO_MOBIL']['error'];
        $fileTmpLocation = $dataImg['FOTO_MOBIL']['tmp_name'];

        // Cek apakah gambar ada yang diupload
        if ($fileError === 4) {
            echo "
            <script>
                alert('Pilih foto Untuk Mobil');
            </script>
        ";

            exit;
        }

        // Cek apakah yang dikirim merupakan gambar
        $validImagaeExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        // Mengambil bagian ekstensi gambar saja (.jpg dll)
        $imageExtension = strtolower(end($imageExtension)); //Diubah menjadi huruf kecil
        if (!in_array($imageExtension, $validImagaeExtension)) {
            echo "
            <script>
                alert('Gunakan Tipe File Yang Valid (jpg,jpeg,png) ');
            </script>
        ";

            exit;
        }

        // Cek ukuran
        if ($fileSize > 1500000) {
            echo "
            <script>
                alert('Ukuran foto Terlalu Besar');
            </script>
        ";

            exit;
        }

        // Gambar siap diupload
        // Generate nama baru
        $fileNameNew = explode('.', $fileName);
        $fileNameNew = $fileNameNew[0] . $seconds . rand(1, 9) . rand(1, 9) . rand(1, 9) . rand(1, 9) . rand(1, 9) . rand(1, 9) . rand(1, 9) . rand(1, 9) . '.' . end($fileNameNew);
        move_uploaded_file($fileTmpLocation, 'img/cars/' . $fileNameNew);
        return $fileNameNew;
    }

    public function getCarById($id)
    {
        $this->db->query("SELECT * FROM {$this->table_name} WHERE ID_MOBIL=:ID_MOBIL");
        // untuk menghindari sql injection
        $this->db->bind('ID_MOBIL', $id);
        return $this->db->single();
    }

    public function editCarById($data, $dataImg, $id)
    {
        if ($dataImg['FOTO_MOBIL']['error'] === 4) {
            $carImg = $data['OLD_FOTO_MOBIL'];
        } else {
            $currentTime = date('Y-m-d');
            $this->unlinkCarImg($id);
            $carImg = $this->uploadCarImg($dataImg, $currentTime);
        }

        $query = "UPDATE {$this->table_name} SET 
                  JENIS_MOBIL = :JENIS_MOBIL,
                  NOPOL = :NOPOL, 
                  MERK = :MERK,
                  TAHUN = :TAHUN,
                  KAPASITAS_PENUMPANG = :KAPASITAS_PENUMPANG,
                  FOTO_MOBIL = :FOTO_MOBIL,
                  STATUS_MOBIL = :STATUS_MOBIL
                  WHERE ID_MOBIL = :ID_MOBIL ";
        $this->db->query($query);
        $this->db->bind('JENIS_MOBIL', $data['JENIS_MOBIL']);
        $this->db->bind('NOPOL', $data['NOPOL']);
        $this->db->bind('MERK', $data['MERK']);
        $this->db->bind('TAHUN', $data['TAHUN']);
        $this->db->bind('KAPASITAS_PENUMPANG', $data['KAPASITAS_PENUMPANG']);
        $this->db->bind('FOTO_MOBIL', $carImg);
        $this->db->bind('STATUS_MOBIL', $data['STATUS_MOBIL']);
        $this->db->bind('ID_MOBIL', $id);

        $this->db->execute();

        return $this->db->affectedRowCount();
    }

    public function deleteCarById($id)
    {
        $this->unlinkCarImg($id);
        $query = "DELETE FROM {$this->table_name} WHERE ID_MOBIL = :ID_MOBIL";
        $this->db->query($query);
        $this->db->bind('ID_MOBIL', $id);

        $this->db->execute();

        return $this->db->affectedRowCount();
    }

    public function unlinkCarImg($id)
    {
        // Mencari Lokasi foto
        $query = "SELECT FOTO_MOBIL FROM {$this->table_name} WHERE ID_MOBIL = :ID_MOBIL";
        $this->db->query($query);
        $this->db->bind('ID_MOBIL', $id);

        $row = $this->db->single();
        $string = 'img/cars/' . $row['FOTO_MOBIL'];
        // Menghapus foto
        unlink($string);
    }
}
