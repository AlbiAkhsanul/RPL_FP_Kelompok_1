<?php
$routes = $data['rute']
?>

<h1>Buat Order Rute</h1>

<form action="<?= BASEURL; ?>/OrderRute/confirmation" method="post">
    <ul>
        <li>
            <label for="ID_RUTE">Rute Perjalanan: </label>
            <select id="ID_RUTE" name="ID_RUTE" required>
                <?php foreach ($routes as $route) : ?>
                    <option value="<?= $route['ID_RUTE'] ?>"><?= $route['NAMA_RUTE'] ?></option>
                <?php endforeach; ?>
            </select>
        </li>
        <li>
            <label for="TANGGAL_PERJALANAN">Tanggal Perjalanan: </label>
            <input type="date" name="TANGGAL_PERJALANAN" id="TANGGAL_PERJALANAN" required>
        </li>
        <li>
            <button type="submit" name="store">Next</button>
        </li>
    </ul>
</form>