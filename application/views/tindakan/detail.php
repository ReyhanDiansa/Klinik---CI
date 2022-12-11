<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>Detail Dokter</h1>
<div class="card text-center w-50 mb-3">
  <dl>

    <dt>No Reg</dt>
    <dd><?= $No_reg ?></dd>

    <dt>ID Dokter</dt>
    <dd><?= $ID_Dokter ?></dd>

    <dt>Jam</dt>
    <dd><?= $Jam ?></dd>

    <dt>Diagnosa</dt>
    <dd><?= $Diagnosa ?></dd>

    
    <dt>Diagnosa</dt>
    <dd><?= $Tindakan_Kedokteran ?></dd>

    
    <dt>No Ruang</dt>
    <dd><?= $No_Ruang ?></dd>

    
    <dt>Keterangan</dt>
    <dd><?= $Keterangan ?></dd>

    
    <dt>No_Rm</dt>
    <dd><?= $No_Rm?></dd>
  </dl>
</div>
<a href='#' onclick="history.back()" class="btn btn-primary mb-3">Back</a>
<?php
include APPPATH . 'views/fragment/footer.php';
?>