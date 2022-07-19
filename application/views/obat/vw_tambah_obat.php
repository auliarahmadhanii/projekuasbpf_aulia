<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Obat
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="id_pegawai">Pegawai</label>
                        <select name="id_pegawai" value="<?= set_value('id_pegawai'); ?>" id="id_pegawai" class="form-control">
                                <option value="">Pegawai</option>
                                <?php foreach ($pegawai as $p) : ?>
                                    <option value="<?= $p['id_pegawai']; ?>"><?= $p['nama_pegawai']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('id_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                        <label for="kode_obat">Kode Obat</label>
                        <input name="kode_obat" type="text" value="<?= set_value('kode_obat'); ?>" class="form-control" id="kode_obat" placeholder="Kode obat">
                            <?= form_error('kode_obat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_obat">Nama Obat</label>
                            <input name="nama_obat" type="text" value="<?= set_value('nama_obat'); ?>" class="form-control" id="nama_obat" placeholder="Nama obat">
                            <?= form_error('nama_obat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="id_jenis_obat">Jenis Obat</label>
                            <select name="id_jenis_obat" value="<?= set_value('id_jenis_obat'); ?>" id="prodi" class="form-control">
                                <option value="">Jenis Obat</option>
                                <?php foreach ($JenisObat as $p) : ?>
                                    <option value="<?= $p['id_jenis_obat']; ?>"><?= $p['jenis_obat']; ?></option>
                                <?php endforeach; ?>
                            </select>
                           
                            <?= form_error('id_jenis_obat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tgl_kadaluarsa">Tgl Kadaluarsa</label>
                            <input name="tgl_kadaluarsa" type="text" value="<?= set_value('tgl_kadaluarsa'); ?>" class="form-control" id="tgl_kadaluarsa" placeholder="Tgl Kadaluarsa">
                            <?= form_error('tgl_kadaluarsa', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kegunaan">Kegunaan</label>
                            <input name="kegunaan" type="text" value="<?= set_value('kegunaan'); ?>" class="form-control" id="kegunaan" placeholder="Kegunaan">
                            <?= form_error('kegunaan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="efek_samping">Efek Samping</label>
                            <input name="efek_samping" type="text" value="<?= set_value('efek_samping'); ?>" class="form-control" id="efek_samping" placeholder="Efek samping">
                            <?= form_error('efek_samping', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stok_obat">Stok Obat</label>
                            <input name="stok_obat" type="text" value="<?= set_value('stok_obat'); ?>" class="form-control" id="stok_obat" placeholder="Stok obat">
                            <?= form_error('stok_obat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="harga_obat">Harga Obat</label>
                            <input name="harga_obat" type="text" value="<?= set_value('harga_obat'); ?>" class="form-control" id="harga_obat" placeholder="Harga obat">
                            <?= form_error('harga_obat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Obat</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>