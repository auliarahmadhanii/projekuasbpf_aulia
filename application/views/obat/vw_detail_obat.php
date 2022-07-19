<!--Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Obat
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $obat['nama_obat']; ?></h2>
                    
                    <div class="row">
                        <div class="col-md-4">Kode Obat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $obat['kode_obat']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Nama Pegawai</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $obat['nama_pegawai']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Jenis Obat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $obat['jenis_obat']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tgl Kadaluarsa</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $obat['tgl_kadaluarsa']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Kegunaan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $obat['kegunaan']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Efek Samping</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $obat['efek_samping']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Stok Obat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $obat['stok_obat']; ?></div>
                </div>
                <div class="row">
                        <div class="col-md-4">Harga Obat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $obat['harga_obat']; ?></div>
                    <br>   
                    <br> 
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Obat') ?>" class="btn btn-primary">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>