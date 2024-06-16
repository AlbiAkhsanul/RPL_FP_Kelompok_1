<?php
$car = $data['car'];
var_dump($data);
?>
<h1>Buat Order Baru</h1>

<form action="<?= BASEURL; ?>/order/confirm/<?= $car['car_id'] ?>" method="post">
    <input type="hidden" name="harga_sewa" value="<?= $car['harga_sewa']; ?>">
    <input type="hidden" name="car_id" value="<?= $car['car_id']; ?>">
    <li>
        <label for="tanggal_sewa">Tanggal Sewa: </label>
        <input type="date" name="tanggal_sewa" id="tanggal_sewa" required>
    </li>
    <li>
        <label for="durasi_sewa">Durasi Sewa [Dalam Hari]: </label>
        <input type="number" name="durasi_sewa" id="durasi_sewa" value="3" required min="3" oninput="validateDurasiSewa()">
        <span id="durasi_sewa_error" style="color:red; display:none;">Durasi sewa minimal 3 hari</span>
    </li>
    <?php if ($data['is_driver'] === 0) : ?>
        <li>
            <input type="hidden" name="jenis_sewa" value="0">
            <label for="jenis_sewa_dummy">Jenis Sewa : </label>
            <select id="jenis_sewa_dummy" name="jenis_sewa_dummy" required disabled>
                <option value="0">Sewa Mobil Tanpa Supir</option>
            </select>
            <p style="color:red;">[Sewa Mobil Dengan Supir Sedang Tidak Tersedia Karena Tidak Ada Supir Yang Tersedia Saat ini]</p>
        </li>
    <?php else : ?>
        <li>
            <label for="jenis_sewa">Jenis Sewa : </label>
            <select id="jenis_sewa" name="jenis_sewa" required>
                <option value="0">Sewa Mobil Tanpa Supir</option>
                <option value="1">Sewa Mobil Dengan Supir</option>
            </select>
            <p style="color:red;">[Sewa Dengan Supir Akan Menambah Biaya Sewa Sebesar Rp 100.000 / Hari]</p>
        </li>
    <?php endif ?>
    <li>
        <button type="submit" name="store">Buat Order</button>
    </li>
</form>

<script>
    function validateDurasiSewa() {
        const durasiSewaInput = document.getElementById('durasi_sewa');
        const durasiSewaError = document.getElementById('durasi_sewa_error');

        if (durasiSewaInput.value < 3) {
            durasiSewaError.style.display = 'inline';
        } else {
            durasiSewaError.style.display = 'none';
        }
    }
</script>