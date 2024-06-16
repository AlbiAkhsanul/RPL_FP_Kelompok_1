<div class="login_con">
    <div class="title_login">
        <h1>LOGIN</h1>
    </div>

    <form action="<?= BASEURL; ?>/auth/authenticate" method="post">
        <div class="mail_input">
            <label for="EMAIL">Email </label>
            <input type="text" name="EMAIL" id="EMAIL" autofocus required>
        </div>

        <div class="password_input">
            <label for="PASSWORD">Password </label>
            <input type="password" name="PASSWORD" id="PASSWORD" autocomplete="off" required>
        </div>

        <div class="rm_dan_ca">
            <label class="container_remeber_me">
                <input type="checkbox" name="remember">
                Ingat saya
            </label>

            <a href="<?= BASEURL ?>/auth/register">Belum mempunyai akun?</a>
        </div>

        <div class="login_submit_btn">
            <button type="submit" name="login">Login</button>
        </div>
    </form>
</div>
<a href="<?= BASEURL ?>">home</a>