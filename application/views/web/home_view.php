<?php $this->load->view('web/header_view') ?>
<!-- Portfolio Section -->
<h2>Daftar Mobil Rental</h2>

<div class="row">
    <?php
    foreach ($mobils as $mobil) {
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url() ?>assets/upload/mobil/<?= $mobil->foto ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">
                        <p style="text-align: center; font-size: 30px; font-weight: bold;"><?= ucfirst($mobil->merk_mobil); ?></p>
                    </h4>
                    <p class="card-text" style="text-align: center">
                        <span>Harga / Hari : <?= "Rp. " . number_format($mobil->harga_sewa, 0, ',', '.'); ?></span> <br>
                        <span>Driver : Ya</span> <br>
                        <span>BBM : Tidak</span> <br>
                        <span>Overtime : Rp. 30.000/jam</span>
                    </p>
                </div>
                <div class="card-footer">
                    <div class="text-center"> 
                        <a href="https://api.whatsapp.com/send?phone=6281386242812&text=Hello Admin&source=&data="><button class="btn btn-success">Pesan Sekarang</button></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php $this->load->view('web/footer_view') ?>
