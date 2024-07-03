<?php
$cars = $data['cars'];
?>
<div class="container mt-5">
    <h1 class="mb-4">Mobil</h1>
    <hr>
    <div class="mb-3">
        <a href="<?= BASEURL ?>/admin/dashboard" class="btn btn-secondary">Dashboard</a>
        <a href="<?= BASEURL ?>/car/create" class="btn btn-success">Tambah Mobil</a>
    </div>
    <hr>

    <?php if (!$cars) : ?>
        <div class="alert alert-warning" role="alert">
            Tidak Ada Mobil Saat Ini
        </div>
    <?php else : ?>
        <div class="list-group">
            <?php foreach ($cars as $car) : ?>
                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <a href="<?= BASEURL ?>/car/show/<?= $car['ID_MOBIL'] ?>" class="text-dark">
                        [<?= $car['NOPOL'] ?>][<?= $car['JENIS_MOBIL'] ?>] <?= $car['MERK'] ?>
                    </a>
                    <div>
                        <a href="<?= BASEURL ?>/car/edit/<?= $car['ID_MOBIL'] ?>" class="btn btn-sm btn-primary">Edit Mobil</a>
                        <a href="<?= BASEURL ?>/car/delete/<?= $car['ID_MOBIL'] ?>" class="btn btn-sm btn-danger">Delete Mobil</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif ?>
</div>