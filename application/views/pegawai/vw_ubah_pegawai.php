<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    Form Edit Pegawai
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai']; ?>">
                        <div class="form-group">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input name="nama_pegawai" value="<?= $pegawai['nama_pegawai']; ?>" type="text" class="form-control" id="nama_pegawai" placeholder="Pegawai">
                            <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp_pegawai">No Hp Pegawai</label>
                            <input name="no_hp_pegawai" value="<?= $pegawai['no_hp_pegawai']; ?>" type="text" class="form-control" id="no_hp_pegawai" placeholder="No Hp Pegawai">
                            <?= form_error('no_hp_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Pegawai</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>


        