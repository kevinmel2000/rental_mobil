<?php $this->load->view('layout/header_view') ?>
<h2>Detail Transaksi</h2>
<div class="row m-t-30">
    <div class="col-lg-12">
        <!-- TOP CAMPAIGN-->
        <div class="top-campaign">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Customer</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Mobil</th>
                            <th scope="col">Tgl Mulai</th>
                            <th scope="col">Tgl Kembali</th>
                            <th scope="col">Qty Hari</th>
                            <th scope="col">Jaminan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($transaksi as $t) {
                            // mencari total
                            $harga__sewa_driver = $t->harga_driver * $t->qty_hari;
                            $harga_sewa_mobil = $t->harga_sewa * $t->qty_hari;
                            $denda = $t->denda;
                            $subtotal = $harga_sewa_mobil + $harga__sewa_driver + $denda;


                            $id_transaksi = $t->id_transaksi;
                            $status = $t->status_transaksi;
                            $mobil = $t->harga_sewa;
                            $harga_driver = $t->harga_driver;
                            $code_transaksi = $t->code_transaksi;
                            $tgl_transaksi = $t->tgl_transaksi;
                            ?>
                            <tr>
                                <td><?= $t->nama ?></td>
                                <td><?= $t->no_telp ?></td>
                                <td><?= $t->merk_mobil ?></td>
                                <td><?= $t->tanggal_mulai ?></td>
                                <td><?= $t->tanggal_kembali ?></td>
                                <td><?= $t->qty_hari ?></td>
                                <td><?= $t->jaminan ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="6" style="text-align: right">Harga Sewa Mobil :</td>
                            <td><?= "Rp. " . number_format($mobil, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td colspan="6" style="text-align: right">Driver :</td>
                            <td><?= "Rp. " . number_format($harga_driver, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td colspan="6" style="text-align: right">Denda :</td>
                            <td><?= "Rp. " . number_format($denda, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <th colspan="6" style="text-align: right">Subtotal :</th>
                            <td><b><?= "Rp. " . number_format($subtotal, 2, ',', '.'); ?></b></td>
                        </tr>
                        <tr>
                            <td colspan="7" style="text-align: center">Code Transaksi : <?= $code_transaksi; ?></td>
                        </tr>
                        <tr>
                            <td colspan="7" style="text-align: center">Tanggal Transaksi : <?= $tgl_transaksi; ?></td>
                        </tr>
                        <tr>
                            <td colspan="7" style="text-align: center">Status Transaksi : <b><?= $status; ?></b></td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?= base_url('transaksi'); ?>" class="btn btn-primary btn-sm" style="margin-top: 20px;">Kembali</a>
                <a href="<?= site_url('transaksi/edit_form/' . $id_transaksi) ?>" class="btn btn-primary btn-sm" style="margin-top: 20px;">Edit</a>
            </div>
        </div>
        <!--  END TOP CAMPAIGN-->
    </div>
</div>
<?php
$this->load->view('layout/footer_view')?>