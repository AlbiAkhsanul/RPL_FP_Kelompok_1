<style>
    .homecont {
        overflow-x: hidden;
    }

    .nologin {
        background-color: rgb(255, 255, 255, 0.5);
        border-radius: 20px;
    }
</style>


<div class="homecont">
    <?php if (!isset($_SESSION['user_id'])) : ?>
        <img src="<?= BASEURL ?>/img/frontend/car_travels_bg.jpg" alt="">
    <?php else : ?>
        <img src="<?= BASEURL ?>/img/frontend/homepagebg1.jpg" alt="">
    <?php endif; ?>
    <div class="container nologin">
        <div class="jumbotron align-items-center">
            <?php if (!isset($_SESSION['user_id'])) : ?>
                <h1 class="display-4 fw-bold text-light">Travelku</h1>
                <h3 class="fw-light text-light">Website pelayanan travel murah dari Indonesia.</h3>
            <?php else : ?>
                <h1 class="display-4 fw-bold pt-3 px-3 text-center">Selamat Datang</h1>
                <br>
                <h4 class="fw-light pb-3">Selamat datang di Aplikasi Travel, solusi lengkap untuk semua kebutuhan perjalanan Anda! Kami hadir untuk memudahkan Anda dalam merencanakan, memesan, dan menikmati setiap momen perjalanan dengan berbagai fitur unggulan yang kami tawarkan.</h4>
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