<?php
$rute = $data['rute'];
$cars = $data['mobil'];
$drivers = $data['supir'];
?>

<h1>Buat Order Rute</h1>

<form action="<?= BASEURL; ?>/OrderRute/store" method="post">
    <input type="hidden" name="TOTAL_HARGA" value="<?= $rute['HARGA']; ?>">
    <input type="hidden" name="TANGGAL_PERJALANAN" value="<?= $data['tanggal']; ?>">
    <input type="hidden" name="ID_RUTE" value="<?= $rute['ID_RUTE']; ?>">
    <ul>
        <li>
            <label for="TOTAL_HARGA">Total Harga: </label>
            <input type="number" name="TOTAL_HARGA" id="TOTAL_HARGA" value="<?= $rute['HARGA']; ?>" disabled>
        </li>
        <li>
            <label for=" ID_SUPIR">Supir: </label>
            <select id="ID_SUPIR" name="ID_SUPIR" required>
                <?php foreach ($drivers as $driver) : ?>
                    <option value="<?= $driver['ID_SUPIR'] ?>"><?= $driver['NAMA'] ?></option>
                <?php endforeach; ?>
            </select>
        </li>
        <li>
            <label for="ID_MOBIL">Mobil: </label>
            <select id="ID_MOBIL" name="ID_MOBIL" required>
                <?php foreach ($cars as $car) : ?>
                    <option value="<?= $car['ID_MOBIL'] ?>"><?= $car['NOPOL'] ?> | <?= $car['JENIS_MOBIL'] ?> | <?= $car['KAPASITAS_PENUMPANG'] ?></option>
                <?php endforeach; ?>
            </select>
        </li>
        <li>
            <button type="submit" name="store">Buat Order Rute</button>
        </li>
    </ul>
</form>