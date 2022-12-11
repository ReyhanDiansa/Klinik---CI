<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>Administrasi</h1>
<div class="d-flex justify-content-start mb-3">
    <a class="btn btn-success btn-sm" href="<?= base_url("tindakan/form") ?>">Tambah</a>
</div>
<table class="table table-striped">
    <tr>
        <th>No_Rm</th>
        <th>Nama_Pasien</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>ID_Dokter</th>
        <th>Departemen</th>
        <th>Diagnosa</th>
        <th>No_Ruang</th>

        <th>Aksi</th>
    </tr>
    <?php
    foreach ($records as $idx => $data) {
    ?>
        <tr>
            <td><?= $data['No_Rm'] ?></td>
            <td><?= $data['Nama'] ?></td>
            <td><?= $data['Alamat'] ?></td>
            <td><?= $data['Jenis_Kelamin'] ?></td>
            <td><?= $data['Tgl_Lahir'] ?></td>
            <td><?= $data['ID_Dokter'] ?></td>
            <td><?= $data['ID_Departemen'] ?></td>
            <td><?= $data['Diagnosa'] ?></td>
            <td><?= $data['No_Ruang'] ?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-primary btn-sm" href="<?= base_url("tindakan/detail/{$data['No_reg']}") ?>">Detail</a>
                </div>
                <div class="btn-group">

                    <a class="btn btn-warning btn-sm" href="<?= base_url("tindakan/form/{$data['No_reg']}") ?>">Edit</a>
                </div>
                <div class="btn-group">

                    <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("tindakan/hapus/{$data['No_reg']}") ?>">Hapus</a>
                    </a>
                </div>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php';
?>