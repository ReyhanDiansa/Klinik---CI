<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>List Pasien</h1>
<div class="d-flex justify-content-start">
	<a class="btn btn-success btn-sm" href="<?= base_url("pasien/form")?>">Tambah</a>
</div>
<br/>
<table class="table table-striped" style="width: 75%;"> 
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Pekerjaan</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['Nama'] ?></td>
            <td><?= $data['Alamat'] ?></td>
            <td><?= $data['Tgl_Lahir'] ?></td>
            <td><?= $data['Jenis_Kelamin'] ?></td>
            <td><?= $data['Pekerjaan'] ?></td>
            <td>
			<div class="btn-group">
                <a class="btn btn-primary btn-sm" href="<?= base_url("pasien/detail/{$data['No_Rm']}")?>">Detail</a>
    </div>
			<div class="btn-group">

                <a class="btn btn-warning btn-sm" href="<?= base_url("pasien/form/{$data['No_Rm']}")?>">Edit</a>

    </div>
			<div class="btn-group">

                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("pasien/hapus/{$data['No_Rm']}")?>">Hapus</a>
			</div>
			</div>
			</td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>
