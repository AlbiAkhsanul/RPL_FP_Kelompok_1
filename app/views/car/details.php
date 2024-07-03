<div class="container mt-5">
    <a href="<?= BASEURL ?>/admin/cars" class="btn btn-secondary mt-3 ml-3">Kembali</a>

    <h1 class="mb-4">Detail Mobil</h1>
    <hr>
    <div class="card">
        <img src="<?= BASEURL ?>/img/cars/<?= $data['car']['FOTO_MOBIL'] ?>" class="card-img-top img-fluid w-25 m-3" alt="Foto Mobil">
        <div class="card-body">
            <p class="card-text"><strong>Jenis Mobil:</strong> <?= $data['car']['JENIS_MOBIL'] ?></p>
            <p class="card-text"><strong>Nopol:</strong> <?= $data['car']['NOPOL'] ?></p>
            <p class="card-text"><strong>Merk:</strong> <?= $data['car']['MERK'] ?></p>
            <p class="card-text"><strong>Tahun:</strong> <?= $data['car']['TAHUN'] ?></p>
            <p class="card-text"><strong>Kapasitas Penumpang:</strong> <?= $data['car']['KAPASITAS_PENUMPANG'] ?></p>
        </div>
    </div>
</div>