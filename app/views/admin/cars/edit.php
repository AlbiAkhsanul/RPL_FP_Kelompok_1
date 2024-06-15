<?php $car = $data['car'] ?>
<h1>Edit List Mobil</h1>

<form action="<?= BASEURL; ?>/car/update/<?= $car['ID_MOBIL']; ?>" method="post" enctype="multipart/form-data">
    <ul>
        <input type="hidden" name="OLD_FOTO_MOBIL" id="foto" value="<?= $car['FOTO_MOBIL']; ?>">
        <li>
            <label for="NOPOL">Nomor Polisi: </label>
            <input type="text" name="NOPOL" id="NOPOL" value="<?= $car['NOPOL']; ?>" required>
        </li>
        <li>
            <label for="JENIS_MOBIL">Jenis Mobil: </label>
            <select id="JENIS_MOBIL" name="JENIS_MOBIL" required>
                <option value="MPV" <?= $car['JENIS_MOBIL'] === 'MPV' ? 'selected' : '' ?>>MPV</option>
                <option value="SUV" <?= $car['JENIS_MOBIL'] === 'SUV' ? 'selected' : '' ?>>SUV</option>
                <option value="Hatchback" <?= $car['JENIS_MOBIL'] === 'Hatchback' ? 'selected' : '' ?>>Hatchback</option>
                <option value="LMPV" <?= $car['JENIS_MOBIL'] === 'LMPV' ? 'selected' : '' ?>>LMPV</option>
                <option value="Sedan" <?= $car['JENIS_MOBIL'] === 'Sedan' ? 'selected' : '' ?>>Sedan</option>
            </select>
        </li>
        <li>
            <label for="MERK">Merk Mobil: </label>
            <select id="MERK" name="MERK" required>
                <option value="Toyota" <?= $car['MERK'] === 'Toyota' ? 'selected' : '' ?>>Toyota</option>
                <option value="Honda" <?= $car['MERK'] === 'Honda' ? 'selected' : '' ?>>Honda</option>
                <option value="Nissan" <?= $car['MERK'] === 'Nissan' ? 'selected' : '' ?>>Nissan</option>
                <option value="Suzuki" <?= $car['MERK'] === 'Suzuki' ? 'selected' : '' ?>>Suzuki</option>
                <option value="Daihatsu" <?= $car['MERK'] === 'Daihatsu' ? 'selected' : '' ?>>Daihatsu</option>
            </select>
        </li>
        <li>
            <label for="TAHUN">Tahun Keluar: </label>
            <input type="number" name="TAHUN" id="TAHUN" value="<?= $car['TAHUN']; ?>" required>
        </li>
        <li>
            <label for="KAPASITAS_PENUMPANG">Kapasitas Penumpang: </label>
            <input type="number" name="KAPASITAS_PENUMPANG" id="KAPASITAS_PENUMPANG" value="<?= $car['KAPASITAS_PENUMPANG']; ?>" required>
        </li>
        <li>
            <label for="STATUS_MOBIL">Status Mobil: </label>
            <select id="STATUS_MOBIL" name="STATUS_MOBIL" required>
                <option value="1" <?= $car['STATUS_MOBIL'] == '1' ? 'selected' : '' ?>>Mobil Tersedia</option>
                <option value="0" <?= $car['STATUS_MOBIL'] == '0' ? 'selected' : '' ?>>Mobil Tidak Tersedia</option>
            </select>
        </li>
        <li>
            <label for="FOTO_MOBIL">Foto Mobil: </label>
            <input type="file" name="FOTO_MOBIL" id="FOTO_MOBIL">
            <img src="<?= BASEURL ?>/img/cars/<?= $car["FOTO_MOBIL"]; ?>" alt="FotoMobil">
        </li>
        <li>
            <button type="submit" name="store">Update List Mobil</button>
        </li>
    </ul>
</form>