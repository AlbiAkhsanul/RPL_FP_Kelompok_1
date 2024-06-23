<?php
$rute = $data['rute'];
$cars = $data['mobil'];
$drivers = $data['supir'];
?>
    <div class="container mt-5">
    <a href="<?= BASEURL ?>/admin/orderRute/" class="btn btn-secondary">Kembali</a>
    </div>

    <div class="container mt-5">
    <h1>Buat Order Rute</h1>

    <form action="<?= BASEURL; ?>/OrderRute/store" method="post">
        <input type="hidden" name="TOTAL_HARGA" value="<?= $rute['HARGA']; ?>">
        <input type="hidden" name="TANGGAL_PERJALANAN" value="<?= $data['tanggal']; ?>">
        <input type="hidden" name="ID_RUTE" value="<?= $rute['ID_RUTE']; ?>">
        <div class="form-group">
            <label for="TOTAL_HARGA">Total Harga: </label>
            <input type="number" class="form-control" name="TOTAL_HARGA" id="TOTAL_HARGA" value="<?= $rute['HARGA']; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="ID_SUPIR">Supir: </label>
            <select id="ID_SUPIR" name="ID_SUPIR" class="form-control" required>
                <?php foreach ($drivers as $driver) : ?>
                    <option value="<?= $driver['ID_SUPIR'] ?>"><?= $driver['NAMA'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="ID_MOBIL">Mobil: </label>
            <select id="ID_MOBIL" name="ID_MOBIL" class="form-control" required>
                <?php foreach ($cars as $car) : ?>
                    <option value="<?= $car['ID_MOBIL'] ?>"><?= $car['NOPOL'] ?> | <?= $car['JENIS_MOBIL'] ?> | <?= $car['KAPASITAS_PENUMPANG'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <a href="<?= BASEURL ?>/orderRute/create/" class="btn btn-primary mt-3">Sebelumnya</a>
        <button type="submit" name="store" class="btn btn-success ml-3 mt-3">Buat Order Rute</button>
    </form>
    </div>

