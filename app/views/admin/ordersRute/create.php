<form action="<?= BASEURL ?>/orderrute/store" method="post">
    <label for="ID_RUTE">Rute:</label>
    <select name="ID_RUTE" id="">
        <?php foreach ($data['rute'] as $rute){ ?>
            <option value="<?= $rute['ID_RUTE'] ?>"><?= $rute['NAMA_RUTE'] ?></option>
        <?php  } ?>
    </select><br>
    <label for="ID_SUPIR">Supir:</label>
    <select name="ID_SUPIR" id="">
        <?php foreach ($data['supir'] as $supir){ ?>
            <option value="<?= $supir['ID_SUPIR'] ?>"><?= $supir['NAMA'] ?></option>
        <?php  } ?>
    </select><br>
    <label for="ID_MOBIL">Mobil:</label>
    <select name="ID_MOBIL" id="">
        <?php foreach ($data['mobil'] as $mobil){ ?>
            <option value="<?= $mobil['ID_MOBIL'] ?>"><?= $mobil['NOPOL'] ?></option>
        <?php  } ?>
    </select><br>
    <label for="TANGGAL_PERJALANAN">Tanggal Perjalanan:</label>
    <input type="date" name="TANGGAL_PERJALANAN"><br>
    <label for="JUMLAH_PENUMPANG">Jumlah Penumpang:</label>
    <input type="number" name="JUMLAH_PENUMPANG"><br>
    <button type="submit" >Submit</button>
</form>