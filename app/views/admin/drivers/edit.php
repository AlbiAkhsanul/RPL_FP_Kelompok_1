<?php
$driver = $data['driver'];
?>
        <a href="<?= BASEURL ?>/admin/drivers/index" class="btn btn-secondary mt-3 ml-3">
            Kembali
        </a>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Driver</h1>

        <form action="<?= BASEURL; ?>/driver/update/<?= $driver['ID_SUPIR'] ?>" method="post">
            <div class="form-group">
                <label for="NAMA">Nama Driver: </label>
                <input type="text" class="form-control" name="NAMA" id="NAMA" value="<?= $driver['NAMA']; ?>" autofocus required>
            </div>
            <div class="form-group">
                <label for="NO_TELP">No Telepon Driver: </label>
                <input type="number" class="form-control" name="NO_TELP" id="NO_TELP" value="<?= $driver['NO_TELP']; ?>" required>
            </div>
            <button type="submit" name="store" class="btn btn-primary mt-3">Update Driver</button>
        </form>
    </div>
