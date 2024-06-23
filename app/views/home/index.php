<div class="homecont">
    <?php if (!isset($_SESSION['user_id'])) : ?>
        <img src="<?= BASEURL ?>/img/frontend/car_travels_bg.jpg" alt="">
    <?php endif; ?>
    <div class="container nologin">
        <div class="jumbotron">
            <?php if (!isset($_SESSION['user_id'])) : ?>
                <h1 class="display-4 fw-bold text-light">Travelku</h1>
                <h3 class="fw-light text-light">Website pelayanan travel murah dari Indonesia.</h3>
            <?php else : ?>
                <h1 class="display-4 fw-bold">Selamat Datang</h1>
                <h3 class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit suscipit esse ab ea ut et? Tempore sed dolores nobis quidem. Explicabo ducimus fugiat, laudantium quam quisquam ipsam minus quod nulla.</h3>
            <?php endif; ?>
        </div>

        <div class="nonlogin_login_reg">
            <?php if (!isset($_SESSION['user_id'])) : ?>
                <a class="btn btn-primary shadow-sm" href="<?= BASEURL ?>/auth/login" role="button">Login</a>
                <a class="btn btn-primary shadow-sm" href="<?= BASEURL ?>/auth/register" role="button">Register</a>
            <?php endif; ?>
        </div>
    </div>
</div>