<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pegawai
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input name="nama_pegawai" type="text" value="<?= set_value('nama_pegawai'); ?>" class="form-control" id="nama_pegawai" placeholder="Nama Pegawai">
                            <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp_pegawai">No Hp Pegawai</label>
                            <input name="no_hp_pegawai" type="text" class="form-control" value="<?= set_value('no_hp_pegawai'); ?>" id="no_hp_pegawai" placeholder="No Hp Pegawai">
                            <?= form_error('no_hp_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Pegawai</button>
                    </form>
                </div>
            </div>

        