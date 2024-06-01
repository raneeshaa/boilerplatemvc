<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title"><?= $data['krw']['nama']; ?></h5>
    <h6 class="card-subtittle mb-2 text-muted"><?= $data['krw']['id'];?></h6>
    <p class="card-text"><?= $data['krw']['nip'];?></p>
    <p class="card-text"><?= $data['krw']['nik'];?></p>
    <p class="card-text"><?= $data['krw']['jenis_kelamin'];?></p>
    <p class="card-text"><?= $data['krw']['tempat_lahir'];?></p>
    <p class="card-text"><?= $data['krw']['tanggal_lahir'];?></p>
    <p class="card-text"><?= $data['krw']['whatsapp'];?></p>
    <p class="card-text"><?= $data['krw']['alamat'];?></p>
    <p class="card-text"><?= $data['krw']['golongan_id'];?></p>
    <a href="<?= BASEURL; ?>/karyawan" class="card-link">Kembali</a>
  </div>
    </div>
</div>