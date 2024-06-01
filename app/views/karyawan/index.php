<div class="container mt-3">
    <div class="row mb-3">
    <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data Karyawan</button>      
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/karyawan/cari" method="post" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" name="keyword" id="keyword">
                <button class="btn btn-primary me-2 " type="submit" id="cari">Search</button>
            </form>
        </div>
    </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Inputkan Data Yang Diminta</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="karyawan/tambah" method="post">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Id : </label>
                                    <input type="text" name="id" class="form-control" id="id">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">NIP : </label>
                                    <input type="text" name="nip" class="form-control" id="nip">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">NIK :</label>
                                    <input type="text" name="nik" class="form-control" id="nik">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Lengkap:</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Jenis Kelamin:</label>
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        <option value="Laki-laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tanggal Lahir:</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Whatsapp:</label>
                                    <input type="text" name="whatsapp" class="form-control" id="whatsapp">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat:</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Golongan id:</label>                                    <select class="form-control" name="golongan_id" id="golongan_id">
                                    <select class="form-control" name="golongan_id" id="golongan_id">
                                        <?php foreach ($data['krw'] as $item): ?>
                                        <option value="<?= $item["id"] ?>"><?= $item["nama_golongan"] ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    <?php
        Flasher::flash();
    ?>

   <div class="row">
    <div class="col-lg-6">
        <h3>Daftar Karyawan</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($data['krw'] as $gol) : ?>
        <tr>
            <td><?= $gol['nama_golongan']; ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="<?= BASEURL; ?>/karyawan/detail/<?= $krw['id']; ?>" class="btn btn-primary me-2">Detail</a>
                    <a href=""  class="btn btn-success me-2 tampilModalUbah" data-id="<?= $krw['id']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Ubah</a>
                    <a href="<?= BASEURL; ?>/karyawan/hapus/<?= $krw['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Hapus</a>
                </div>
           </td>
        </tr>
    <?php endforeach; ?>
</tbody>

        </table>
    </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="http://localhost/boilerplatemvc/public/sweetalert/sweetalert2.min.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>