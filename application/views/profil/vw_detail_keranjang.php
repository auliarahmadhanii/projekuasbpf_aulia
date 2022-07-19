<br>
    <br>
    <br>
    <br>
    <br>
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800" style="text-align: center"><?php echo $judul; ?></h1>
    <div class="row" style="justify-content: center; " >
        <div class="col-md-7" style="justify-content: center;">
            <?= $this->session->flashdata('message');?>
        </div>
        <div class="col-md-7" style="justify-content: center;background-color:#FDF5E6;">
            <table class="table">
                <thead>
                    <tr>
                        <td style="color: #8B0000;">Tanggal</td>
                        <td style="color: #8B0000;">Nama Obat</td>
                        <td style="color: #8B0000;">Harga</td>
                        <td style="color: #8B0000;">Jumlah</td>
                        <td style="color: #8B0000;">Total</td>
                        <td style="color: #8B0000;">Aksi</td>  
                    </tr>
                </thead>
                <tbody>
                    <form action="<?= base_url('Profil/pesan'); ?>" method="POST" enctype="multipart/form-data">
                        <?php
                        function rupiah($angka)
                        {
                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                        $i = 1;
                        $total_bayar = 0;
                        $total_p = 0; ?>
                        <?php foreach ($keranjang as $us) :
                            $total_bayar += $us['total'];
                        ?>
                            <tr>
                                <td><?= $us['tanggal']; ?></td>
                                <td><?= $us['nama_obat']; ?></td>
                                <td><?= $us['harga_obat']; ?></td>
                                <td><?= $us['jumlah']; ?></td>
                                <td><?= $us['total']; ?></td>
                                <td><a href="<?= base_url('profil/delkeranjang/') . $us['kode_keranjang']; ?>" class="btn btn-danger"><i class="fa fa-trash"></a></td>
                            </tr>
                            <input type="hidden" name="obat[]" value="<?= $us['id_obat']; ?>">
                            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                            <input type="hidden" name="harga_obat" value="<?= $us['harga_obat']; ?>">
                            <input type="hidden" name="jumlah_p[]" value="<?= $us['jumlah']; ?>">
                            <input type="hidden" name="total_p[]" value="<?= $us['total']; ?>">
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>Alamat Pengiriman</td>
                            <td colspan="5"><input name="alamat" type="text" class="form-control" id="alamat"></td>
                        </tr>
                        <tr>
                            <td>Pembayaran</td>
                            <td colspan="5">
                                <select name="pembayaran" id="pembayaran" class="form-control">
                                    <option value="">Pilih Bank</option>
                                    <option value="BRI">BRI - 1111-11111-11111-1111</option>
                                    <option value="MANDIRI">MANDIRI - 2222-2222-2222</option>
                                    <option value="BNI">BNI - 3333-3333-3333</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Bukti Transfer</td>
                            <td colspan="5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td colspan="5"><input name="keterangan" type="text" class="form-control" id="keterangan"></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right"><strong>Total : </strong></td>
                            <td><?= rupiah($total_bayar); ?></td>
                            <td>
                                <input type="hidden" name="no_pemesanan" value="PJ<?= time() ?>" readonly class="form-control">
                                <input type="hidden" name="bayar" value="<?= $total_bayar; ?>">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i>&nbsp;&nbsp;Pesan</button>
                            </td>
                        </tr>
                    </form>
                </tbody>

            </table>
        </div>
    </div>





    
</div>