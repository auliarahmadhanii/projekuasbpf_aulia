<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row" style="justify-content: center">
        <div class="col-xl-8 col-md-8 mb-8" style="justify-content: center">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row kode-gutters align-items-center">
                        <div class="col-auto">
                            <img src="<?= base_url('assets/img/pembayaran/') . $pemesanan['gambar']; ?>" style="width:400px" class="img-thumbnail">

                        </div>
                        <div class="col mr-2">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="no_pemesanan">No Pemesanan</label>
                                        <input name="no_pemesanan" type="text" value="<?= $pemesanan['no_pemesanan'];?>" readonly class="form-control" id="no_pemesanan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelanggan">Pelanggan</label>
                                        <input name="pelanggan" value="<?= $pemesanan['nama']; ?>" type="text" readonly class="form-control" id="pelanggan">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input name="alamat" value="<?= $pemesanan['alamat']; ?>" type="text" readonly class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="total_bayar">Total Pembayaran</label>
                                        <input name="total_bayar" value="<?= $pemesanan['total_bayar']; ?>" type="text" readonly class="form-control" id="harga">

                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Pilih Status</option>
                                            <option value="Pengemasan">Pengemasan</option>
                                            <option value="Proses Pengiriman">Proses Pengiriman</option>
                                            <option value="Dikirm">Dikirim</option>
                                        </select>
                                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Ubah Status</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row " style="justify-content: center">
        <div class="col-md-8 col-md-8 mb-8" >
            <div class="card-body">
                <div class="card border-left-primary shadow h-100 py-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Pemesanan</td>
                                <td>Pelanggan</td>
                                <td>Obat</td>
                                <td>Jumlah</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($detail as $us) : ?>
                                <tr>
                                    <td> <?= $i; ?>.</td>
                                    <td><?= $us['no_pemesanan']; ?></td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['obat']; ?> </td>
                                    <td><?= $us['jumlah']; ?></td>
                                    <td><?= $us['total']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>