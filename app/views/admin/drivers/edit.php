<?php
$driver = $data['driver'];
?>
<h1>Edit Driver</h1>

<form action="<?= BASEURL; ?>/driver/update/<?= $driver['ID_SUPIR'] ?>" method="post">
    <ul>
        <li>
            <label for="NAMA">Nama Driver: </label>
            <input type="text" name="NAMA" id="NAMA" value="<?= $driver['NAMA']; ?>" autofocus required>
        </li>
        <li>
            <label for="NO_TELP">No Telephon Driver: </label>
            <input type="number" name="NO_TELP" id="NO_TELP" value="<?= $driver['NO_TELP']; ?>" required>
        </li>
        <li>
            <button type="submit" name="store">Update Driver</button>
        </li>
    </ul>
</form>