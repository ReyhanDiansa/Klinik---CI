<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>Detail Dokter</h1>
<div class="card text-center w-50 mb-3">
  <dl>

    
    <dt>Nama</dt>
    <dd><?= $Nama ?></dd>
    
    <dt>Alamat</dt>
    <dd><?= $Alamat ?></dd>
    
    <dt>Tanggal Lahir</dt>
    <dd><?= $Tgl_Lahir ?></dd>
    
    <dt>Jenis Kelamin</dt>
    <dd><?= $Jenis_Kelamin ?></dd>

    <dt>Pekerjaan</dt>
    <dd><?= $Pekerjaan ?></dd
  </dl>
</div>
<a href='#' onclick="history.back()" class="btn btn-primary mb-3">Back</a>
<?php
include APPPATH . 'views/fragment/footer.php';
?>