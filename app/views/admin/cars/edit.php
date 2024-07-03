<?php $car = $data['car'] ?>
<div class="container mt-5">
    <a href="<?= BASEURL ?>/admin/cars" class="btn btn-secondary mt-3 ml-3">Kembali</a>

    <h1 class="mb-4">Edit List Mobil</h1>

    <form action="<?= BASEURL; ?>/car/update/<?= $car['ID_MOBIL']; ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="OLD_FOTO_MOBIL" id="foto" value="<?= $car['FOTO_MOBIL']; ?>">

        <div class="form-group">
            <label for="NOPOL">Nomor Polisi:</label>
            <input type="text" class="form-control" name="NOPOL" id="NOPOL" value="<?= $car['NOPOL']; ?>" required>
        </div>

        <div class="form-group">
            <label for="JENIS_MOBIL">Jenis Mobil:</label>
            <select id="JENIS_MOBIL" class="form-control" name="JENIS_MOBIL" required>
                <option value="MPV" <?= $car['JENIS_MOBIL'] === 'MPV' ? 'selected' : '' ?>>MPV</option>
                <option value="SUV" <?= $car['JENIS_MOBIL'] === 'SUV' ? 'selected' : '' ?>>SUV</option>
                <option value="Hatchback" <?= $car['JENIS_MOBIL'] === 'Hatchback' ? 'selected' : '' ?>>Hatchback</option>
                <option value="LMPV" <?= $car['JENIS_MOBIL'] === 'LMPV' ? 'selected' : '' ?>>LMPV</option>
                <option value="Sedan" <?= $car['JENIS_MOBIL'] === 'Sedan' ? 'selected' : '' ?>>Sedan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="MERK">Merk Mobil:</label>
            <select id="MERK" class="form-control" name="MERK" required>
                <option value="Toyota" <?= $car['MERK'] === 'Toyota' ? 'selected' : '' ?>>Toyota</option>
                <option value="Honda" <?= $car['MERK'] === 'Honda' ? 'selected' : '' ?>>Honda</option>
                <option value="Nissan" <?= $car['MERK'] === 'Nissan' ? 'selected' : '' ?>>Nissan</option>
                <option value="Suzuki" <?= $car['MERK'] === 'Suzuki' ? 'selected' : '' ?>>Suzuki</option>
                <option value="Daihatsu" <?= $car['MERK'] === 'Daihatsu' ? 'selected' : '' ?>>Daihatsu</option>
            </select>
        </div>

        <div class="form-group">
            <label for="TAHUN">Tahun Keluar:</label>
            <input type="number" class="form-control" name="TAHUN" id="TAHUN" value="<?= $car['TAHUN']; ?>" required>
        </div>

        <div class="form-group">
            <label for="KAPASITAS_PENUMPANG">Kapasitas Penumpang:</label>
            <input type="number" class="form-control" name="KAPASITAS_PENUMPANG" id="KAPASITAS_PENUMPANG" value="<?= $car['KAPASITAS_PENUMPANG']; ?>" required>
        </div>

        <div class="form-group">
            <label for="FOTO_MOBIL">Foto Mobil:</label>
            <input type="file" class="form-control-file" name="FOTO_MOBIL" id="FOTO_MOBIL">
            <img src="<?= BASEURL ?>/img/cars/<?= $car["FOTO_MOBIL"]; ?>" alt="Foto Mobil" class="img-fluid mt-2 w-25">
        </div>

        <button type="submit" class="btn btn-primary mt-3" name="store">Update List Mobil</button>
    </form>
</div>