<?php 

class Golongan_model {
    private $table = 'golongan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGolongan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getGolonganById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataGolongan($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                    VALUES
                  ('', :nama_golongan, :gaji_pokok)";
        
        $this->db->query($query);
        $this->db->bind('nama_golongan', $data['nama_golongan']);
        $this->db->bind('gaji_pokok', $data['gaji_pokok']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataGolongan($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataGolongan($data)
    {
        $query = "UPDATE " . $this->table . " SET
                    nama_golongan = :nama_golongan,
                    gaji_pokok = :gaji_pokok
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama_golongan', $data['nama_golongan']);
        $this->db->bind('golongan', $data['golongan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataGolongan()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE nama_golongan LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}