<div class="container mt-5">
    <a href="<?= BASEURL ?>/admin/cars" class="btn btn-secondary mt-3 ml-3">Kembali</a>

    <h1 class="mb-4">Buat List Mobil Baru</h1>

    <form action="<?= BASEURL; ?>/car/store" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="NOPOL">Nomor Polisi:</label>
            <input type="text" class="form-control" name="NOPOL" id="NOPOL" autofocus required>
        </div>
        <div class="form-group">
            <label for="JENIS_MOBIL">Jenis Mobil:</label>
            <select id="JENIS_MOBIL" class="form-control" name="JENIS_MOBIL" required>
                <option value="MPV">MPV</option>
                <option value="SUV">SUV</option>
                <option value="Hatchback">Hatchback</option>
                <option value="LMPV">LMPV</option>
                <option value="Sedan">Sedan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="MERK">Merk Mobil:</label>
            <select id="MERK" class="form-control" name="MERK" required>
                <option value="Toyota">Toyota</option>
                <option value="Honda">Honda</option>
                <option value="Nissan">Nissan</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Daihatsu">Daihatsu</option>
            </select>
        </div>
        <div class="form-group">
            <label for="TAHUN">Tahun Keluar:</label>
            <input type="number" class="form-control" name="TAHUN" id="TAHUN" required>
        </div>
        <div class="form-group">
            <label for="KAPASITAS_PENUMPANG">Kapasitas Penumpang:</label>
            <input type="number" class="form-control" name="KAPASITAS_PENUMPANG" id="KAPASITAS_PENUMPANG" required>
        </div>
        <div class="form-group mt-2">
            <label for="FOTO_MOBIL">Foto Mobil:</label>
            <input type="file" class="form-control-file" name="FOTO_MOBIL" id="FOTO_MOBIL" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3" name="store">Buat List Mobil</button>
    </form>
</div>