<style>
    .homecont {
        overflow-x: hidden;
    }

    .nologin {
        background-color: rgb(255, 255, 255, 0.5);
        border-radius: 20px;
    }
</style>


<div class="homecont d-flex align-items-center justify-content-center">
    <?php if (!isset($_SESSION['user_id'])) : ?>
        <img src="<?= BASEURL ?>/img/frontend/car_travels_bg.jpg" alt="">
    <?php else : ?>
        <img src="<?= BASEURL ?>/img/frontend/homepagebg1.jpg" alt="">
    <?php endif; ?>
    <div class="container nologin p-4">
        <div class="jumbotron">
            <?php if (!isset($_SESSION['user_id'])) : ?>
                <h1 class="display-4 fw-bold text-black">Travelku</h1>
                <h3 class="fw-light text-black">Travelku adalah website pelayanan travel murah dari Indonesia yang menyediakan berbagai pilihan perjalanan dengan harga terjangkau. Dirancang untuk memenuhi kebutuhan wisatawan domestik dan internasional, Travelku menawarkan beragam layanan seperti tiket pesawat, pemesanan hotel, paket wisata, dan transportasi darat. Dengan antarmuka yang mudah digunakan dan berbagai promo menarik, Travelku membantu pelanggan merencanakan perjalanan mereka dengan lebih mudah dan ekonomis. Nikmati kenyamanan dan kemudahan dalam merencanakan perjalanan Anda dengan Travelku, solusi travel murah dari Indonesia.</h3>
            <?php else : ?>
                <h1 class="display-4 fw-bold pt-3 px-3 text-center text-black">Selamat Datang</h1>
                <br>
                <h4 class="fw-light pb-3 text-black">Selamat datang di Aplikasi Travel, solusi lengkap untuk semua kebutuhan perjalanan Anda! Kami hadir untuk memudahkan Anda dalam merencanakan, memesan, dan menikmati setiap momen perjalanan dengan berbagai fitur unggulan yang kami tawarkan.</h4>
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