<div class="login_con">
    <h1>Login</h1>
    <form action="<?= BASEURL; ?>/auth/authenticate" method="post">
        <div class="mail_input">
            <label for="EMAIL">Email </label>
            <input type="text" name="EMAIL" id="EMAIL" autofocus required>
        </div>

        <div class="password_input">
            <label for="PASSWORD">Password </label>
            <input type="password" name="PASSWORD" id="PASSWORD" autocomplete="off" required>
        </div>

        <div class="remember_me">
            <input type="checkbox" name="remember">
            <label for="remember">Ingat saya</label>
        </div>

        <button type="submit" name="login">Login</button>
    </form>
</div>
<a href="<?= BASEURL ?>/public/">home</a>