<?php if (!isset($_SESSION['user_id'])) : ?>
    <a href="<?= BASEURL ?>/auth/login">login</a>
    <a href="<?= BASEURL ?>/auth/register">register</a>
<?php else : ?>
    <h1>Welcome <?= $data['user']['NAMA'] ?></h1>
    <a href='<?= BASEURL ?>/auth/logout'>logout</a>
<?php endif; ?>

<div class="container mt-3">
    <div class="jumbotron">
        <h1 class="display-4">Halaman Utama</h1>
        <p class="lead">
        <h3>Ini Halaman Awal</h3>
    </div>
</div>