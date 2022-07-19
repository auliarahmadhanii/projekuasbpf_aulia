<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    Form Edit Jenis Obat
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_jenis_obat" value="<?= $jenis['id_jenis_obat']; ?>">
                        <div class="form-group">
                            <label for="jenis_obat">Jenis Obat</label>
                            <input name="jenis_obat" value="<?= $jenis['jenis_obat']; ?>" type="text" class="form-control" id="jenis_obat" placeholder="Pegawai">
                            <?= form_error('jenis_obat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Jenis Obat</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
