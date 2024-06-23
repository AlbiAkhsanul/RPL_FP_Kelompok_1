<div class="container mt-5">
        <h1 class="mb-4">Tambah Driver</h1>

        <form action="<?= BASEURL; ?>/driver/store" method="post">
            <div class="form-group">
                <label for="NAMA">Nama Driver: </label>
                <input type="text" class="form-control" name="NAMA" id="NAMA" autofocus required>
            </div>
            <div class="form-group">
                <label for="NO_TELP">No Telepon Driver: </label>
                <input type="number" class="form-control" name="NO_TELP" id="NO_TELP" required>
            </div>
            <button type="submit" name="store" class="btn btn-primary mt-3">Buat Driver Baru</button>
        </form>
    </div>
