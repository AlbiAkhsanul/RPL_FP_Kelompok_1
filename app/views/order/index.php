<?php
$orders = $data['orders'];
$routes = $data['rute'];
?>

<div class="table-responsive orderrouteindex">
    <h3>List Order User <?= $_SESSION['nama'] ?></h3>

    <table class="table table-striped table-bordered shadow-sm">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Tanggal Perjalananr</th>
                <th>Rute</th>
                <th>Total Harga</th>
                <th>Status Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) : ?>
                <tr>
                    <td><?= $order['ID_PESANAN_RUTE'] ?></td>
                    <td><?= $order['TANGGAL_PERJALANAN'] ?></td>
                    <td>
                        <?php foreach ($routes as $route) : ?>
                            <?php if ($order['ID_RUTE'] === $route['ID_RUTE']) : ?>
                                <?= $route['NAMA_RUTE'] ?>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </td>
                    <td><?= $order['TOTAL_HARGA'] ?></td>
                    <td><?= $order['STATUS_PESANAN_USER'] ?></td>
                    <td>
                        <a href="<?= BASEURL ?>/orderRute/show/<?= $order['ID_PESANAN_RUTE'] ?>" class="btn btn-dark btn-sm">View</a>
                        <a href="<?= BASEURL ?>/orderRute/close/<?= $order['ID_PESANAN_RUTE'] ?>" class="btn btn-dark btn-sm">Close Order</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>