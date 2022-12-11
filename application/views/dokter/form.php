<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('dokter/save') ?>">
<input type="hidden" name="ID_Dokter" value="<?= isset($ID_Dokter) ? $ID_Dokter : '' ?>"/>
<div>
    <label></label>
    <div>
    <h3>Tambah/Ubah Dokter</h3>
    </div>
</div>
<div class="row mb-3">
    <label class="form-label">Departemen</label>
    <div class="col-sm-6">
        <input class="form-control" type="text" name="ID_Departemen" id="ID_Departemen" value="<?= $ID_Departemen ?>" required/>
    </div>
</div>


<div class="row mb-3">
    <label class="form-label">Nama</label>
    <div class="col-sm-6">
        <input class="form-control" type="text" name="Nama" id="Nama" value="<?= $Nama ?>" required/>
    </div>
</div>

<div class="row mb-3">
    <label class="form-label">Alamat</label>
    <div class="col-sm-6">
    <textarea class="form-control" name="Alamat" id="Alamat"><?= $Alamat ?></textarea>
    </div>
</div>

<div class="row mb-3">
    <label class="form-label">Tanggal Lahir</label>
    <div class="col-sm-6">
        <input class="form-control" type="date" name="Tgl_Lahir" id="Tgl_Lahir" value="<?= $Tgl_Lahir ?>" required/>
    </div>
</div>

<div class="mb-3">
    <input class="btn btn-warning btn-sm" type="button" value="Cancel" onclick="history.back()" />
    <input class="btn btn-success btn-sm" type="submit" value="Simpan" />
</div>

</form>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>