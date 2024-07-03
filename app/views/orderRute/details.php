<?php
$order = $data['orderRute'];
?>
<!-- <h1>
    Ini Halaman Detail Orders
</h1> -->

<section class="p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-12">
                <div class="card border-light-subtle shadow-sm align-items-center">
                    <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                        <div class="col-12 col-lg-11 col-xl-10">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <h4 class="text-center">Order Rute Details</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12 d-flex justify-content-between">
                                        <label for="nama_mobil">Tanggal Perjalanan :</label>
                                        <div class="ms-auto">
                                            <?= $order['TANGGAL_PERJALANAN'] ?>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <label for="jenis_mobil">Rute:</label>
                                        <div class="ms-auto">
                                            <?= $data['rute']['NAMA_RUTE'] ?>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <label for="tipe_transmisi">Asal</label>
                                        <div class="ms-auto">
                                            <?= $data['rute']['ASAL'] ?>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <label for="total_harga">Tujuan:</label>
                                        <div class="ms-auto">
                                            <?= $data['rute']['TUJUAN'] ?>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <label for="tanggal_sewa">Supir:</label>
                                        <div class="ms-auto">
                                            <?= $data['supir']['NAMA'] ?>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <label for="tanggal_kembali">Nopol Kendaraan:</label>
                                        <div class="ms-auto">
                                            <?= $data['mobil']['NOPOL'] ?>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <label for="durasi_sewa">Kapasitas Penumpang:</label>
                                        <div class="ms-auto">
                                            <?= $data['mobil']['KAPASITAS_PENUMPANG'] ?> Orang
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <label for="durasi_sewa">Total Harga:</label>
                                        <div class="ms-auto">
                                            Rp <?= $order['TOTAL_HARGA'] ?>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <label for="durasi_sewa">Status Order:</label>
                                        <div class="ms-auto">
                                            <?= $order['STATUS_PESANAN_RUTE'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>