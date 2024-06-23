<?php
$order_rute = $data['order_rute'];
$car = $data['mobil'];
$rute = $data['rute'];
$methods = $data['transaksi'];
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Order Details</h4>
        </div>
        <div class="card-body">
            <ul class="list-group mb-4">
                <li class="list-group-item">
                    <strong>Perjalanan : </strong><?= $rute['NAMA_RUTE'] ?>
                </li class="list-group-item">
                <li class="list-group-item">
                    <strong>Tanggal Perjalanan : </strong><?= $order_rute['TANGGAL_PERJALANAN'] ?>
                </li class="list-group-item">
                <li class="list-group-item">
                    <strong>Kapasitas Penumpang : </strong><?= $order_rute['JUMLAH_PENUMPANG'] ?>
                </li class="list-group-item">
                <li class="list-group-item">
                    <strong>Mobil : </strong>[<?= $car['NOPOL'] ?>] <?= $car['JENIS_MOBIL'] ?> <?= $car['MERK'] ?>
                </li class="list-group-item">
                <li class="list-group-item">
                    <strong>Harga : </strong><?= $order_rute['TOTAL_HARGA'] ?>
                </li class="list-group-item">
            </ul>
            <form action="<?= BASEURL; ?>/order/store/<?= $order_rute['ID_PESANAN_RUTE'] ?>" method="post">
            <input type="hidden" name="ID_PESANAN_RUTE" value="<?= $order_rute['ID_PESANAN_RUTE']; ?>">
            <input type="hidden" name="ID_USER" value="<?= $_SESSION['user_id']; ?>">
            <input type="hidden" name="ID_RUTE" value="<?= $rute['ID_RUTE']; ?>">
            <input type="hidden" name="TANGGAL_PERJALANAN" value="<?= $order_rute['TANGGAL_PERJALANAN']; ?>">
            <input type="hidden" name="TOTAL_HARGA" value="<?= $order_rute['TOTAL_HARGA']; ?>">
            <div class="mb-3">
                <label for="ALAMAT_PENJEMPUTAN" class="form-label">Alamat Penjemputan: </label>
                <textarea name="ALAMAT_PENJEMPUTAN" id="ALAMAT_PENJEMPUTAN" class="form-control" rows="2" cols="40"></textarea>
            </div>
            <div class="mb-3">
                <label for="ALAMAT_PENURUNAN" class="form-label">Alamat Penurunan: </label>
                <textarea name="ALAMAT_PENURUNAN" id="ALAMAT_PENURUNAN" class="form-control" rows="2" cols="40"></textarea>
            </div>
            <div class="mb-3">
                <label for=" ID_METODE" class="form-label">Metode Pembayaran: </label>
                <select id="ID_METODE" name="ID_METODE" class="form-select" required>
                    <?php foreach ($methods as $method) : ?>
                        <option value="<?= $method['ID_METODE'] ?>"><?= $method['NAMA_METODE'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
                <button type="submit" name="store" class="btn btn-primary">Buat Pesanan User</button>
            </form>
        </div>
    </div>
</div>