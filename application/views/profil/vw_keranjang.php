<br>
<br>
<br>
<br>
<br>



<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" style="text-align: center;" ><?php echo $judul; ?></h1>
    <div class="row" style="justify-content: center">
        <div class="col-xl-7 col-md-7 mb-7" >
            <div class="card border-left-primary shadow h-100 py-2" style="background-color:#E9967A ;">
                <div class="card-body" style="background-color:#E9967A ;">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <img src="<?= base_url('assets/img/obat/') . $obat['gambar']; ?>" style="width:400px" class="img-thumbnail">
                        </div>
                        <div class="col mr-3">
                            <div class="card-body"  >
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?= $obat['id']; ?>">
                                    <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                                    <input type="hidden" name="stok_obat" value="<?= $obat['stok_obat'] ?>">
                                    <div class="form-group">
                                        <label for="nama_obat" style="color: #8B0000;">Nama obat</label>
                                        <input name="nama_obat" type="text" value="<?= $obat['nama_obat']; ?>" readonly class="form-control" id="nama_obat">
                                    </div>
                                    <div class="form-group">
                                        <label for="stok_obat" style="color: #8B0000;">Stok</label>
                                        <input name="stok_obat" value="<?= $obat['stok_obat']; ?>" type="text" readonly class="form-control" id="stok_obat">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_obat"style="color: #8B0000;">Harga</label>
                                        <input name="harga_obat" value="<?= $obat['harga_obat']; ?>" type="text" readonly class="form-control" id="harga_obat">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah"style="color: #8B0000;">Jumlah</label>
                                        <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
                                        <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="total"style="color: #8B0000;">Total Harga</label>
                                        <input type="text" name="total" id="total" readonly class="form-control">
                                    </div>
                                    <button type="submit" id="tambah" name="tambah" class="btn btn-danger float-right">Tambah Ke Keranjang</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>