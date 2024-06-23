<?php var_dump($data['supir']);
exit;
foreach ($data['orderRute'] as $orderRute) { ?>
    <p><?= $data['rute'][$orderRute['ID_RUTE']]['NAMA_RUTE'] ?></p>
    <p><?= $data['supir'][$orderRute['ID_SUPIR']]['NAMA'] ?></p>
    <p><?= $data['mobil'][$orderRute['ID_MOBIL']]['NOPOL'] ?></p>
    <p><?= $orderRute['TANGGAL_PESANAN_RUTE'] ?></p>
    <p><?= $orderRute['TANGGAL_PERJALANAN'] ?></p>
    <p><?= $orderRute['JUMLAH_PENUMPANG'] ?></p>
    <p><?= $orderRute['STATUS_PESANAN_RUTE'] ?></p>
<?php } ?>
