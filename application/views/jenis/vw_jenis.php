<div class="container-fluid">
    <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url() ?>Obat/tambah" class="btn btn-info mb-2">Tambah
                Obat</a>
        </div> -->
    <?= $this->session->flashdata('message') ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url() ?>JenisObat/tambah" class="btn btn-primary mb-2">Tambah Jenis
                Obat</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacinf="0">
                    <thead>
                    <tr>
                        <td>No</td>
                        <td>Jenis Obat</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($JenisObat as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['jenis_obat']; ?></td>
                            <td>
                                <a href="<?= base_url('JenisObat/hapus/') . $us['id_jenis_obat']; ?>" class="badge badge-dark">Hapus</a>
                                <a href="<?= base_url('JenisObat/edit/') . $us['id_jenis_obat']; ?>" class="badge badge-warning">Edit</a>
                                </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>