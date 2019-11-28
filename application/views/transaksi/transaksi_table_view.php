<?php $this->load->view('layout/header_view') ?>
<h2>Data Transaksi</h2> <br>
<a href="<?= base_url('transaksi/tambah_form'); ?>" class="btn btn-primary">Tambah Data</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="top-campaign">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Code Transaksi</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($transaksi as $t) {
                            // mencari total
                            $harga__sewa_driver = $t->harga_driver * $t->qty_hari;
                            $harga_sewa_mobil = $t->harga_sewa * $t->qty_hari;
                            $denda = $t->denda;
                            $subtotal = $harga_sewa_mobil + $harga__sewa_driver + $denda;
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $t->tgl_transaksi ?></td>
                                <td><?= $t->code_transaksi ?></td>
                                <td><?= $t->status_transaksi ?></td>
                                <td>
                                    <?= "Rp. " . number_format($subtotal, 2, ',', '.'); ?>
                                </td>
                                <td class="process">
                                    <a href="<?= site_url('transaksi/detail/' . $t->id_transaksi) ?>">Detail</a> |
                                    <a href="<?= site_url('transaksi/edit_form/' . $t->id_transaksi) ?>">Edit</a> | 
                                    <a href="<?= site_url('transaksi/hapus/' . $t->id_transaksi) ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
<?php
$this->load->view('layout/footer_view')?>