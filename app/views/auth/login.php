<h1>Halaman Login</h1>

<form action="<?= BASEURL; ?>/auth/authenticate" method="post">
    <ul>
        <li>
            <label for="EMAIL">Email: </label>
            <input type="text" name="EMAIL" id="EMAIL" autofocus required>
        </li>
        <li>
            <label for="PASSWORD">Password: </label>
            <input type="password" name="PASSWORD" id="PASSWORD" autocomplete="off" required>
        </li>
        <li>
            <input type="checkbox" name="remember">
            <label for="remember">Ingat saya</label>
        </li>
        <br>
        <li>
            <button type="submit" name="login">Login</button>
        </li>
    </ul>
</form>