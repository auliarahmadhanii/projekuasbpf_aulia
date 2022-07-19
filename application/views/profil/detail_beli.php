<div class="container-fluid">
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1 class="h3 mb-4 text-gray-800" style="text-align: center"><?php echo $judul; ?></h1>
    <div class="row" style="justify-content: center">
        <div class="col-md-8" style="justify-content: center">
            <?= $this->session->flashdata('message');?>
            </div>
        <div class="col-md-7" style="justify-content: center;background-color:#FDF5E6;">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>>
                        <td>No Pembelian</td>
                        <td>Tanggal</td>
                        <td>Total</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pembelian as $us) : ?>
                        <tr>
                            <td> <?= $i; ?>.</td>
                            <td><?= $us['no_pemesanan']; ?></td>
                            <td><?= $us['tanggal']; ?></td>
                            <td><?= $us['total_bayar']; ?></td>
                            <td><?= $us['status']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
        </div>
        <form action="" method="POST">
            <div class="col-md-8" style="justify-content: center">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Obat</td>
                            <td>Jumlah</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($detailbeli as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                
                                <td><?= $us['nama_obat']; ?></td>
                                <td><?= $us['jumlah']; ?></td>
                                <td><?= $us['total']; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php foreach ($pembelian as $us) : ?>  

            <div class="col-md-8" style="justify-content: center">
                <input type="hidden" name="no_pemesanan" value="<?= $us['no_pemesanan']; ?>">
                <table class="table">
                    <tr>
                        <td>Apakah Pesanan Sudah Anda Terima ?</td>
                        <td>
                            <select name="status" id="status" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="Diterima">Sudah</option>
                                <option value="Gagal">Belum</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;&nbsp;Ubah

                                Status</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
</div>
