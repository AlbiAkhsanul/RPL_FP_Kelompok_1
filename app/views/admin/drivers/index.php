<?php
$drivers = $data['drivers'];
?>
<h1>
    Ini Halaman Driver Admin
</h1>
<hr>
<a href="<?= BASEURL ?>/admin/dashboard">
    <button>Dashboard</button>
</a>
<hr>

<?php if (!$drivers) : ?>
        <h5>
            Tidak Ada Driver Saat Ini
        </h5>
<?php else : ?>
    <?php foreach ($drivers as $driver) : ?>
        <a href="<?= BASEURL ?>/driver/show/<?= $driver['ID_SUPIR'] ?>">
            <h5>
                >> [<?= $driver['ID_SUPIR'] ?>] <?= $driver['NAMA'] ?>
            </h5>
        </a>
        <a href="<?= BASEURL ?>/driver/edit/<?= $driver['ID_SUPIR'] ?>">
            <button>Edit Driver</button>
        </a>
        <a href="<?= BASEURL ?>/driver/delete/<?= $driver['ID_SUPIR'] ?>">
            <button>Hapus Driver</button>
        </a>
    <?php endforeach; ?>
<?php endif ?>