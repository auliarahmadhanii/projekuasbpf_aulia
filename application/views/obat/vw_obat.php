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
            <a href="<?= base_url() ?>Obat/tambah" class="btn btn-primary mb-2">Tambah
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
                        <td>Kode Obat</td>
                        <td>Nama Obat</td>
                        <td>Jenis Obat</td>
                        <td>Stok</td>
                        <td>Harga</td>
                        <td>Gambar</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($obat as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['kode_obat'] ?></td>
                            <td><?= $us['nama_obat'] ?></td>
                            <td><?= $us['jenis_obat'] ?></td>
                            <td><?= $us['stok_obat'] ?></td>
                            <td><?= $us['harga_obat'] ?></td>
                           
                            <td><img src="<?= base_url('assets/img/obat/') . $us['gambar']; ?>"  >
                            <td>
                                <a href="<?= base_url('Obat/hapus/') . $us['id']; ?>" class="badge badge-dark">Hapus</a>
                                <a href="<?= base_url('Obat/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                <a href="<?= base_url('Obat/detail/') . $us['id']; ?>" class="badge badge-info link">Detail</a>
                                
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