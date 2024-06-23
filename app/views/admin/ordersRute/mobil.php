<form action="<?= BASEURL ?>/orderrute/store" method="post">
    <input type="hidden" name="ID_RUTE" value="<?= $data['rute']['ID_RUTE'] ?>">
    <input type="hidden" name="TANGGAL_PERJALANAN" value="<?= $data['rute']['TANGGAL_PERJALANAN'] ?>">
    <label for="ID_SUPIR">Supir:</label>
    <select name="ID_SUPIR">
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
    <button type="submit" >Submit</button>
</form>