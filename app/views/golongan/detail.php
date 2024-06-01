<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title"><?= $data['gol']['nama_golongan']; ?></h5>
    <h6 class="card-subtittle mb-2 text-muted"><?= $data['gol']['id'];?></h6>
    <p class="card-text"><?= $data['gol']['gaji_pokok'];?></p>
    <a href="<?= BASEURL; ?>/golongan" class="card-link">Kembali</a>
  </div>
    </div>
</div>