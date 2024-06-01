<?php 

class Golongan extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Golongan';
        $data['gol'] = $this->model('Golongan_model')->getAllGolongan();
        $this->view('templates/header', $data);
        $this->view('golongan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Golongan';
        $data['gol'] = $this->model('Golongan_model')->getGolonganById($id);
        $this->view('templates/header', $data);
        $this->view('golongan/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Golongan_model')->tambahDataGolongan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/golongan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/golongan');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Golongan_model')->hapusDataGolongan($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/golongan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/golongan');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Golongan_model')->getGolonganById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Golongan_model')->ubahDataGolongan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/golongan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/golongan');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Golongan';
        $data['gol'] = $this->model('Golongan_model')->cariDataGolongan();
        $this->view('templates/header', $data);
        $this->view('golongan/index', $data);
        $this->view('templates/footer');
    }

}