<form action="<?= BASEURL ?>/orderrute/mobil" method="post">
    <label for="ID_RUTE">Rute:</label>
    <select name="ID_RUTE" id="" required>
        <?php foreach ($data['rute'] as $rute){ ?>
            <option value="<?= $rute['ID_RUTE'] ?>"><?= $rute['NAMA_RUTE'] ?></option>
        <?php  } ?>
    </select><br>
    <label for="TANGGAL_PERJALANAN">Tanggal Perjalanan:</label>
    <input type="date" name="TANGGAL_PERJALANAN" required><br>
    <button type="submit" >Selanjutnya</button>
</form>