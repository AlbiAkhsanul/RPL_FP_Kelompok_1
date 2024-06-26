<div class="homecont">
    <img src="<?= BASEURL ?>/img/frontend/car_travels_bg.jpg" alt="">
    <div class="auth_con">
        <form class="shadow" action="<?= BASEURL; ?>/auth/store" method="post">
                <div class="auth_title">
                    <h1>REGISTER</h1>
                </div>

                <div class="basic_auth_field">
                    <label for="NAMA">Nama</label>
                    <input type="text" name="NAMA" id="NAMA" autocomplete="off" autofocus required>
                </div>

                <div class="basic_auth_field">
                    <label for="EMAIL_USER">Email</label>
                    <input type="text" name="EMAIL_USER" id="EMAIL_USER" autocomplete="off" autofocus required>
                </div>

                <div class="basic_auth_field">
                    <label for="PASSWORD">Password</label>
                    <input type="password" name="PASSWORD" id="PASSWORD" autocomplete="off" required>
                </div>

                <div class="basic_auth_field">
                    <label for="PASSWORD_CONFIRM">Konfirmasi Password</label>
                    <input type="password" name="PASSWORD_CONFIRM" id="PASSWORD_CONFIRM" autocomplete="off" required>
                </div>

                <div class="basic_auth_field">
                    <label for="NO_TELP">No Telp</label>
                    <input type="number" name="NO_TELP" id="NO_TELP" autocomplete="off" required>
                </div>

                <div class="sdhpnyakn">
                    <a href="<?= BASEURL ?>/auth/login">Sudah mempunyai akun?</a>
                </div>
                
                <div class="submit_btn">
                    <button type="submit" name="SignUp">Sign Up</button>
                </div>
        </form>

        <div class="backhome">
            <a class="btn btn-primary shadow" href="<?= BASEURL ?>" role="button">Back to Home</a>
        </div>
    </div>
</div>