<body>
    <div class="container mt-5">
        <h1 class="mb-4">Driver</h1>
        <hr>
        <a href="<?= BASEURL ?>/admin/dashboard" class="btn btn-secondary">
            Dashboard
        </a>
        <a href="<?= BASEURL ?>/driver/create" class="btn btn-success">Tambah Driver</a>
        <hr>

        <?php if (!$data['drivers']) : ?>
            <h5 class="mt-4">No Drivers Available</h5>
        <?php else : ?>
            <?php foreach ($data['drivers'] as $driver) : ?>
                <div class="mb-3">
                    <a href="<?= BASEURL ?>/driver/show/<?= $driver['ID_SUPIR'] ?>" class="btn btn-link">
                        <h5 class="d-inline"><?= $driver['NAMA'] ?></h5>
                    </a><br>
                    <a href="<?= BASEURL ?>/driver/edit/<?= $driver['ID_SUPIR'] ?>" class="btn btn-primary btn-sm">
                        Edit Driver
                    </a>
                    <a href="<?= BASEURL ?>/driver/delete/<?= $driver['ID_SUPIR'] ?>" class="btn btn-danger btn-sm">
                        Hapus Driver
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
