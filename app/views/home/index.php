<a href="<?= BASEURL ?>/auth/login">login</a>
<a href="<?= BASEURL ?>/auth/register">register</a>
<?= isset($_SESSION['user_id']) ? "<a href='" . BASEURL . "/auth/logout'>logout</a>" : '' ?>



<div class="container mt-3">
    <div class="jumbotron">
        <h1 class="display-4">Halaman Utama</h1>
        <p class="lead">
        <h3>Ini Halaman Awal</h3>
        <h1>
            Halo <?= isset($_SESSION['user_id']) ? $data['user']['NAMA'] : '' ?> !
        </h1>
    </div>
</div>