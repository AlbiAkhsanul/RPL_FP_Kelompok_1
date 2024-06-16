<h1>Buat Driver</h1>

<form action="<?= BASEURL; ?>/driver/store" method="post">
    <ul>
        <li>
            <label for="NAMA">Nama Driver: </label>
            <input type="text" name="NAMA" id="NAMA" autofocus required>
        </li>
        <li>
            <label for="NO_TELP">No Telephon Driver: </label>
            <input type="number" name="NO_TELP" id="NO_TELP" required>
        </li>
        <li>
            <button type="submit" name="store">Buat Driver Baru</button>
        </li>
    </ul>
</form>