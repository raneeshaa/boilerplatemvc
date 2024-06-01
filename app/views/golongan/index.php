<div class="container mt-3">
    <div class="row mb-3">
    <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data Golongan</button>      
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/golongan/cari" method="post" class="d-flex" role="search">
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

                        <form action="golongan/tambah" method="post">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Id : </label>
                                    <input type="text" name="id" class="form-control" id="id">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Golongan : </label>
                                    <select name="nama_golongan" class="form-control" id="nama_golongan">
                                        <option value="A">Golongan A</option>
                                        <option value="B">Golongan B</option>
                                        <option value="C">Golongan C</option>
                                        <option value="D">Golongan D</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Gaji Pokok</label>
                                    <select name="gaji_pokok" class="form-control"  id="gaji_pokok">
                                        <option value="1.000.000">1.000.000</option>
                                        <option value="2.000.000">2.000.000</option>
                                        <option value="3.000.000">3.000.000</option>
                                        <option value="4.000.000">4.000.000</option>
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
        <h3>Daftar Golongan</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Golongan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($data['gol'] as $gol) : ?>
        <tr>
            <td><?= $gol['nama_golongan']; ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="<?= BASEURL; ?>/golongan/detail/<?= $gol['id']; ?>" class="btn btn-primary me-2">Detail</a>
                    <a href=""  class="btn btn-success me-2 tampilModalUbah" data-id="<?= $gol['id']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Ubah</a>
                    <a href="<?= BASEURL; ?>/golongan/hapus/<?= $gol['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Hapus</a>
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