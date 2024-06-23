<?php 
$ruteMap = [];
foreach ($data['rute'] as $rute) {
    $ruteMap[$rute['ID_RUTE']] = $rute;
}

$supirMap = [];
foreach ($data['supir'] as $supir) {
    $supirMap[$supir['ID_SUPIR']] = $supir;
}

$mobilMap = [];
foreach ($data['mobil'] as $mobil) {
    $mobilMap[$mobil['ID_MOBIL']] = $mobil;
}

// Menampilkan data
foreach ($data['orderRute'] as $orderRute) {
    ?>
    <p><?= $ruteMap[$orderRute['ID_RUTE']]['NAMA_RUTE'] ?? 'Rute tidak ditemukan' ?></p>
    <p><?= $supirMap[$orderRute['ID_SUPIR']]['NAMA'] ?? 'Supir tidak ditemukan' ?></p>
    <p><?= $mobilMap[$orderRute['ID_MOBIL']]['NOPOL'] ?? 'Mobil tidak ditemukan' ?></p>
    <p><?= $orderRute['TANGGAL_PESANAN_RUTE'] ?></p>
    <p><?= $orderRute['TANGGAL_PERJALANAN'] ?></p>
    <p><?= $orderRute['JUMLAH_PENUMPANG'] ?></p>
    <p><?= $orderRute['STATUS_PESANAN_RUTE'] ?></p>
    <?php 
}
?>
