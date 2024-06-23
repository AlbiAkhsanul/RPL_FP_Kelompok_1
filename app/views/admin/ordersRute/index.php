<?php
$orders = $data['orderRute']
?>

<div class="container mt-5">
        <h1>Daftar Order Rute</h1>
        <a href="<?= BASEURL ?>/orderRute/create/" class="btn btn-success mt-3 mb-3">Tambah Order Rute</a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Tanggal Perjalanan</th>
                        <th>Jumlah Penumpang</th>
                        <th>Status Order</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td><?= $order['ID_PESANAN_RUTE'] ?></td>
                            <td><?= $order['TANGGAL_PERJALANAN'] ?></td>
                            <td><?= $order['JUMLAH_PENUMPANG'] ?></td>
                            <td><?= $order['STATUS_PESANAN_RUTE'] ?></td>
                            <td>
                                <a href="<?= BASEURL ?>/orderRute/show/<?= $order['ID_PESANAN_RUTE'] ?>" class="btn btn-dark btn-sm">View</a>
                                <a href="<?= BASEURL ?>/orderRute/close/<?= $order['ID_PESANAN_RUTE'] ?>" class="btn btn-dark btn-sm">Close Order</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
