<?php
$this->title = 'Siswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h2>Halaman detil siswa dengan id: <?= $id;?></h2>
    <p>Nama Lengkap: <?= $siswa->namaLengkap; ?></p>
    <p>NISN: <?= $siswa->nisn; ?></p>
    <p>Jenis Kelamin: <?= $siswa->jenisKelamin; ?></p>
    <p>URL: <?= $link;?></p>
</div>