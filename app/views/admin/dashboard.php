<?php
$cars = $data['cars'];
$orders = $data['orders'];
$drivers = $data['drivers'];
?>
<h1>
    Ini Halaman Dashboard Admin
</h1>

<ul>
    <a href="<?= BASEURL ?>/orderrute/index">
        <h3>
            Orders
        </h3>
    </a>
    <a href="<?= BASEURL ?>/admin/drivers/index">
        <h3>
            Drivers
        </h3>
    </a>
    <a href="<?= BASEURL ?>/admin/cars/index">
        <h3>
            Cars
        </h3>
    </a>
</ul>