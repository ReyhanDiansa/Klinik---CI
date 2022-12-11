<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>

<form method="get" action="<?= base_url('welcome/index') ?>">
  <div class="row mb-3">
    <input class="form-control" placeholder="cari nama pasien & rekam medisnya " type="text" name="search" id="search" />
  </div>
</form>
<?php
if (isset($search)) {
  echo "<h4 class='alert alert-success'>Hasil pencarian untuk : " . $search . "</h4>";
}
?>
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
        </tr>
    <?php
    }
    ?>
</table>
<?php
if (isset($links)) {
  echo $links;
}
include APPPATH . 'views/fragment/footer.php';
?>
