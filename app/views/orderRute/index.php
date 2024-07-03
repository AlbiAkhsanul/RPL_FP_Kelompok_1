<?php
$orders = $data['orderRute'];
$routes = $data['rute'];
?>

<div class="table-responsive orderrouteindex">
    <h3 class="mb-4">List Order Rute</h3>

    <table class="table table-striped table-bordered shadow-sm">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Rute Perjalanan</th>
                <th>Tanggal Perjalanan</th>
                <th>Jumlah Penumpang</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) : ?>
                <tr>
                    <td><?= $order['ID_PESANAN_RUTE'] ?></td>
                    <td>
                        <?php foreach ($routes as $route) : ?>
                            <?php if ($order['ID_RUTE'] === $route['ID_RUTE']) : ?>
                                <?= $route['NAMA_RUTE'] ?>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </td>
                    <td><?= $order['TANGGAL_PERJALANAN'] ?></td>
                    <td><?= $order['JUMLAH_PENUMPANG'] ?></td>
                    <td>
                        <a href="<?= BASEURL ?>/orderRute/show/<?= $order['ID_PESANAN_RUTE'] ?>" class="btn btn-dark btn-sm">View</a>
                        <a href="<?= BASEURL ?>/order/create/<?= $order['ID_PESANAN_RUTE'] ?>" class="btn btn-success btn-sm">Buat Pesanan</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
