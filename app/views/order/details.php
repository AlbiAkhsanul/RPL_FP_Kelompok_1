<?php
$order = $data['order'];
?>
<!-- <h1>
    Ini Halaman Detail Orders
</h1> -->

<section class="p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-12">
                <div class="card border-light-subtle shadow-sm align-items-center">
                    <div class="col-12 col-md-8 d-flex align-items-center justify-content-center">
                        <div class="col-12 col-lg-11 col-xl-10">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <h4 class="text-center">Order Details</h4>
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
                                        <label for="durasi_sewa">Alamat Penjemputan:</label>
                                        <div class="ms-auto">
                                            <?= $order['ALAMAT_PENJEMPUTAN'] ?>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <label for="durasi_sewa">Alamat Penurunan:</label>
                                        <div class="ms-auto">
                                            <?= $order['ALAMAT_PENURUNAN'] ?>
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
                                            <?= $order['STATUS_PESANAN_USER'] ?>
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