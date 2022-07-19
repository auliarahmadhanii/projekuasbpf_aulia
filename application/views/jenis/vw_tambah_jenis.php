<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Jenis Obat
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="jenis_obat">Jenis Obat</label>
                            <input name="jenis_obat" type="text" value="<?= set_value('jenis_obat'); ?>" class="form-control" id="jenis_obat" placeholder="Jenis Obat">
                            <?= form_error('jenis_obat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Jenis Obat</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>