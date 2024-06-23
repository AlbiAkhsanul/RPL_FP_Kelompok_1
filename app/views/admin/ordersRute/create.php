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
                    <option value="<?= $route['ID_RUTE'] ?>">MPV</option>
                <?php endforeach; ?>
            </select>
        </li>
    </ul>
</form>