<?php
$folder = $this->uri->segment(1);
?>
<nav class="navbar navbar-dark navbar-expand-lg " style="background-color: green; color:white;" >
 <div class="container-fluid">
  <a class="navbar-brand" href="#">RSUD Dr.Chasbullah Abdul Majid</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-left: 800px ; gap:30px;">
    <li class="nav-item">
    <a class="nav-link <?= $folder == 'welcome' ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>welcome">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link <?= $folder == 'dokter' ? 'active' : '' ?>" href="<?= base_url() ?>dokter">Dokter</a></li>
    <a class="nav-link <?= $folder == 'pasien' ? 'active' : '' ?>" href="<?= base_url() ?>pasien">Pasien</a></li>
    <a class="nav-link <?= $folder == 'tindakan' ? 'active' : '' ?>" href="<?= base_url() ?>tindakan">Administrasi</a></li>

    </li>
   </ul>
  </div>
 </div>
</nav>
<div class="container">
 <p></p>
