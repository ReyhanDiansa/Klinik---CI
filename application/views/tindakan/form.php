<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>Tambah/Ubah Administrasi</h1>

<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" action="<?= base_url('tindakan/save') ?>">
    <input type="hidden" name="No_reg" value="<?= isset($No_reg) ? $No_reg : '' ?>" />

    <div class="row mb-3">
        <label class="form-label">Dokter</label>
        <div class="col-sm-6">
            <select name="ID_Dokter" id="ID_Dokter" class="form-select" aria-label="Default select example">
                <?php
                $query = $this->db->get('tabel_dokter');

                foreach ($query->result_array() as $row) {
                    echo '<option value="' . $row['ID_Dokter'] . '">' . $row['Nama'] . '</option>';
                }
                ?>
            </select>
        </div>


    </div>


    <div class="row mb-3">
        <label class="form-label">Diagnosa</label>
        <div class="col-sm-6">
            <textarea class="form-control" name="Diagnosa" id="Diagnosa"><?= $Diagnosa ?></textarea>
        </div>
    </div>



    <div class="row mb-3">
        <label class="form-label">Tindakan Kedokteran</label>
        <div class="col-sm-6">
            <textarea class="form-control" name="Tindakan_Kedokteran" id="Tindakan_Kedokteran"><?= $Tindakan_Kedokteran ?></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label class="form-label">No Ruang</label>
        <div class="col-sm-6">
            <input type="text" name="No_Ruang" id="No_Ruang" value="<?= $No_Ruang ?>" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <label class="form-label">Keterangan</label>
        <div class="col-sm-6">
            <textarea class="form-control" name="Keterangan" id="Keterangan"><?= $Keterangan ?></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label class="form-label">Pasien</label>
        <div class="col-sm-6">
            <select name="No_Rm" id="No_Rm" class="form-select" aria-label="Default select example">
                <?php
                $query = $this->db->get('tabel_pasien');

                foreach ($query->result_array() as $row) {
                    echo '<option value="' . $row['No_Rm'] . '">' . $row['Nama'] . '</option>';
                }
                ?>
            </select>
        </div>
    </div>


    <div class="mb-3">
    <input class="btn btn-warning btn-sm" type="button" value="Cancel" onclick="history.back()" />
    <input class="btn btn-success btn-sm" type="submit" value="Simpan" />
</div>

</form>

<script>
    var loadFile = function(event) {
        var image = document.getElementById('preview');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
<?php
include APPPATH . 'views/fragment/footer.php';
?>