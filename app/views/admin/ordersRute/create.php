<?php
$routes = $data['rute']
?>
    <div class="container mt-5">
    <a href="<?= BASEURL ?>/admin/orderRute/" class="btn btn-secondary">Kembali</a>
    </div>
    <div class="container mt-5">
        <h1>Buat Order Rute</h1>

        <form action="<?= BASEURL; ?>/OrderRute/confirmation" method="post">
            <div class="form-group">
                <label for="ID_RUTE">Rute Perjalanan: </label>
                <select id="ID_RUTE" name="ID_RUTE" class="form-control" required>
                    <?php foreach ($routes as $route) : ?>
                        <option value="<?= $route['ID_RUTE'] ?>"><?= $route['NAMA_RUTE'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="TANGGAL_PERJALANAN">Tanggal Perjalanan: </label>
                <input type="date" class="form-control" name="TANGGAL_PERJALANAN" id="TANGGAL_PERJALANAN" required>
            </div>
            <button type="submit" name="store" class="btn btn-primary mt-3">Selanjutnya</button>
        </form>
    </div>
