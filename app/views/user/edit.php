<a href="<?= BASEURL . "/user/details/" . $data['user']['ID_USER'] ?>">Kembali</a>
<form action="<?= BASEURL . "/user/update/" . $data['user']['ID_USER'] ?>" method="post">
    <label for="NAMA">Nama:</label>
    <input type="text" name="NAMA" value="<?= $data['user']['NAMA'] ?>" id=""><br>
    <label for="NO_TELP">Nomor Telepon:</label>
    <input type="text" name="NO_TELP" value="<?= $data['user']['NO_TELP'] ?>" id=""><br>
    <label for="EMAIL_USER">Email:</label>
    <input type="text" name="EMAIL_USER" value="<?= $data['user']['EMAIL_USER'] ?>" id=""><br>
    <label for="PASSWORD_BARU">Password Baru:</label>
    <input type="password" name="PASSWORD_BARU" id=""><br>
    <label for="KONFIRMASI_PASSWORD_BARU">Konfirmasi Password Baru:</label>
    <input type="password" name="KONFIRMASI_PASSWORD_BARU" id=""><br>
    <label for="PASSWORD_LAMA">Password:</label>
    <input type="password" name="PASSWORD_LAMA" id=""><br>
    <button type="submit" name="edit">Submit</button>
</form>