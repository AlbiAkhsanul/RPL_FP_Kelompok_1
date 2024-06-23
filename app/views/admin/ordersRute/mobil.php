<form action="<?= BASEURL ?>/orderrute/store" method="post">
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
    <button type="submit" >Submit</button>
</form>