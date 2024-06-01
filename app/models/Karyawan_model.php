<?php 

class Karyawan_model {
    private $table = 'karyawan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKaryawan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKaryawanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataKaryawan($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                    VALUES
                  ('', :nip, :nik, :nama, :jenis_kelamin, :tempat_lahir, :tanggal_lahir, :whatsapp, :alamat, :golongan_id)";
        
        $this->db->query($query);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('whatsapp', $data['whatsapp']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('golongan_id', $data['golongan_id']);
        $this->db->bind('id', $data['id']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKaryawan($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataKaryawan($data)
    {
        $query = "UPDATE " . $this->table . " SET
                    nip = :nip,
                    nik = :nik,
                    nama = :nama,
                    jenis_kelamin = :jenis_kelamin,
                    tempat_lahir = :tempat_lahir,
                    whatsapp = :whatsapp,
                    alamat = :alamat,
                    golongan_id = :golongan_id
                  WHERE id = :id";
        
                  $this->db->query($query);
                  $this->db->bind('nip', $data['nip']);
                  $this->db->bind('nik', $data['nik']);
                  $this->db->bind('nama', $data['nama']);
                  $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
                  $this->db->bind('tempat_lahir', $data['tempat_lahir']);
                  $this->db->bind('whatsapp', $data['whatsapp']);
                  $this->db->bind('alamat', $data['alamat']);
                  $this->db->bind('golongan_id', $data['golongan_id']);
                  $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataKaryawan()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}