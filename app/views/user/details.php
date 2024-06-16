<h1>Profil</h1>
<h4>Nama:</h4>
<p><?= $data['user']['NAMA'] ?></p><br>
<h4>Email:</h4>
<p><?= $data['user']['EMAIL_USER'] ?></p><br>
<h4>No. Telp:</h4>
<p><?= $data['user']['NO_TELP'] ?></p><br>

<a href="<?= BASEURL . "/user/edit/" . $data['user']['ID_USER'] ?>">Edit Profil</a>