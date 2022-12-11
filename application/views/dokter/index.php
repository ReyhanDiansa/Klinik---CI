<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>List Dokter</h1>
<div class="d-flex justify-content-start">
	<a class="btn btn-success btn-sm" href="<?= base_url("dokter/form")?>">Tambah</a>
</div>
<br/>
<table class="table table-striped" style="width: 75%;"> 
    <tr>
        <th>ID Departemen</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['ID_Departemen'] ?></td>
            <td><?= $data['Nama'] ?></td>
            <td><?= $data['Alamat'] ?></td>
            <td><?= $data['Tgl_Lahir'] ?></td>
            <td>
			<div class="btn-group">
                <a class="btn btn-primary btn-sm" href="<?= base_url("dokter/detail/{$data['ID_Dokter']}")?>">Detail</a>
    </div>
			<div class="btn-group">

                <a class="btn btn-warning btn-sm" href="<?= base_url("dokter/form/{$data['ID_Dokter']}")?>">Edit</a>

    </div>
			<div class="btn-group">

                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("dokter/hapus/{$data['ID_Dokter']}")?>">Hapus</a>
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
