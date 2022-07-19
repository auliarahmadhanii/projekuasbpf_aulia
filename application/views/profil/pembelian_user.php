<br>
    <br>
    <br>
    <br>
    <br>


<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" style="text-align: center"><?php echo $judul; ?></h1>
    <div class="row" style="justify-content: center">
        <div class="col-md-7" style="justify-content: center;background-color:#FDF5E6;">
            <?= $this->session->flashdata('message');
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <td style="color: #8B0000;">No</td>
                        <td style="color: #8B0000;">No Pembelian</td>
                        <td style="color: #8B0000;">Tanggal</td>
                        <td style="color: #8B0000;">Total</td>
                        <td style="color: #8B0000;">Status</td>
                        <td style="color: #8B0000;">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pembelian as $us) : ?>
                        <tr>
                            <td> <?= $i; ?>.</td>
                            <td><?= $us['no_pemesanan']; ?></td>
                            <td><?= $us['tanggal']; ?></td>
                            <td><?= $us['total_bayar']; ?></td>
                            <td><?= $us['status']; ?></td>
                            <td>

                                <a href="<?= base_url('Profil/statusbeli/') . $us['no_pemesanan']; ?>" class="badge badge-warning">Detail</a>

                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>