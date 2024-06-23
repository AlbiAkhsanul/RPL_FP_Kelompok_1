<?php
$order_rute = $data['order_rute'];
$car = $data['mobil'];
$rute = $data['rute'];
$methods = $data['transaksi'];
?>

<ul>
    <li>
        Rute Perjalanan : <?= $rute['NAMA_RUTE'] ?>
    </li>
    <li>
        Tanggal Perjalanan : <?= $order_rute['TANGGAL_PERJALANAN'] ?>
    </li>
    <li>
        Kapasitas Penumpang : <?= $order_rute['JUMLAH_PENUMPANG'] ?>
    </li>
    <li>
        Mobil : [<?= $car['NOPOL'] ?>] <?= $car['JENIS_MOBIL'] ?> <?= $car['MERK'] ?>
    </li>
    <li>
        Harga : <?= $order_rute['TOTAL_HARGA'] ?>
    </li>
</ul>

<form action="<?= BASEURL; ?>/order/store/<?= $order_rute['ID_PESANAN_RUTE'] ?>" method="post">
    <input type="hidden" name="ID_PESANAN_RUTE" value="<?= $order_rute['ID_PESANAN_RUTE']; ?>">
    <input type="hidden" name="ID_USER" value="<?= $_SESSION['user_id']; ?>">
    <input type="hidden" name="ID_RUTE" value="<?= $rute['ID_RUTE']; ?>">
    <input type="hidden" name="TANGGAL_PERJALANAN" value="<?= $order_rute['TANGGAL_PERJALANAN']; ?>">
    <input type="hidden" name="TOTAL_HARGA" value="<?= $order_rute['TOTAL_HARGA']; ?>">
    <ul>
        <li>
            <label for="ALAMAT_PENJEMPUTAN">Alamat Penjemputan: </label>
            <textarea name="ALAMAT_PENJEMPUTAN" id="ALAMAT_PENJEMPUTAN" rows="2" cols="40"></textarea>
        </li>
        <li>
            <label for="ALAMAT_PENURUNAN">Alamat Penurunan: </label>
            <textarea name="ALAMAT_PENURUNAN" id="ALAMAT_PENURUNAN" rows="2" cols="40"></textarea>
        </li>
        <li>
            <label for=" ID_METODE">Metode Pembayaran: </label>
            <select id="ID_METODE" name="ID_METODE" required>
                <?php foreach ($methods as $method) : ?>
                    <option value="<?= $method['ID_METODE'] ?>"><?= $method['NAMA_METODE'] ?></option>
                <?php endforeach; ?>
            </select>
        </li>
        <li>
            <button type="submit" name="store">Buat Pesanan User</button>
        </li>
    </ul>
</form>