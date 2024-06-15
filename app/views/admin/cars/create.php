<h1>Buat List Mobil Baru</h1>

<form action="<?= BASEURL; ?>/car/store" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="NOPOL">Nomor Polisi: </label>
            <input type="text" name="NOPOL" id="NOPOL" autofocus required>
        </li>
        <li>
            <label for="JENIS_MOBIL">Jenis Mobil: </label>
            <select id="JENIS_MOBIL" name="JENIS_MOBIL" required>
                <option value="MPV">MPV</option>
                <option value="SUV">SUV</option>
                <option value="Hatchback">Hatchback</option>
                <option value="LMPV">LMPV</option>
                <option value="Sedan">Sedan</option>
            </select>
        </li>
        <li>
            <label for="MERK">Merk Mobil: </label>
            <select id="MERK" name="MERK" required>
                <option value="Toyota">Toyota</option>
                <option value="Honda">Honda</option>
                <option value="Nissan">Nissan</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Daihatsu">Daihatsu</option>
            </select>
        </li>
        <li>
            <label for="TAHUN">Tahun Keluar: </label>
            <input type="number" name="TAHUN" id="TAHUN" required>
        </li>
        <li>
            <label for="KAPASITAS_PENUMPANG">Kapasitas Penumpang: </label>
            <input type="number" name="KAPASITAS_PENUMPANG" id="KAPASITAS_PENUMPANG" required>
        </li>
        <li>
            <label for="STATUS_MOBIL">Status Mobil: </label>
            <select id="STATUS_MOBIL" name="STATUS_MOBIL" required>
                <option value="1">Mobil Tersedia</option>
                <option value="0">Mobil Tidak Tersedia</option>
            </select>
        </li>
        <li>
            <label for="FOTO_MOBIL">Foto Mobil: </label>
            <input type="file" name="FOTO_MOBIL" id="FOTO_MOBIL" required>
        </li>
        <li>
            <button type="submit" name="store">Buat List Mobil</button>
        </li>
    </ul>
</form>