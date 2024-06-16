<h1>Halaman Registration</h1>

<form action="<?= BASEURL; ?>/auth/store" method="post">
    <ul>
        <li>
            <label for="NAMA">Nama: </label>
            <input type="text" name="NAMA" id="NAMA" autocomplete="off" autofocus required>
        </li>
        <li>
            <label for="EMAIL_USER">Email: </label>
            <input type="text" name="EMAIL_USER" id="EMAIL_USER" autocomplete="off" autofocus required>
        </li>
        <li>
            <label for="PASSWORD">Password: </label>
            <input type="password" name="PASSWORD" id="PASSWORD" autocomplete="off" required>
        </li>
        <li>
            <label for="PASSWORD_CONFIRM">Konfirmasi Password : </label>
            <input type="password" name="PASSWORD_CONFIRM" id="PASSWORD_CONFIRM" autocomplete="off" required>
        </li>
        <li>
            <label for="NO_TELP">No Telp : </label>
            <input type="number" name="NO_TELP" id="NO_TELP" autocomplete="off" required>
        </li>
        <li>
            <button type="submit" name="SignUp">Sign Up</button>
        </li>
    </ul>
</form>

<a href="<?= BASEURL ?>/public/">home</a>