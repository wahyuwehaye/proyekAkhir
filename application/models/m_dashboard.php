<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_dashboard extends CI_Model{
    public function getData($table){
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }

    public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }

    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }

    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }

    public function tampil_dataTipeKamar(){
		return $this->db->get('tipe_kamar');
	}

    public function tampil_dataKamar(){
        return $this->db->get('tipe_kamar');
    }

    // public function tampil_noKamar(){
    //     return $this->db->get('kamar');
    // }

    // public function tampil_noKamar()
    // {
    //     $this->db->from($this->kamar);
    //     $this->db->where('status','kosong');
    //     $query = $this->db->get();

    //     return $query->row();
    // }

    public function tampil_noKamar(){
              return $this->db->get_where('kamar', array('status' => 'kosong'));
              // return $query->result_array();
    }

    public function tampil_dataTamu($tamu){
            $query = $this->db->query("SELECT *
                                    FROM pelanggan
                                    JOIN user
                                    USING ( id_user )
                                    where ( username = '$tamu') ");
            return $query;
    }

    public function insertPelanggan($dataUser, $dataPelanggan){
        $this->db->insert('user',$dataUser);
        $dataPelanggan['id_user'] = $this->db->insert_id();
        $this->db->insert('pelanggan', $dataPelanggan);
    }

    public function insertTamu($dataTamu){
        $this->db->insert('booking',$dataTamu);
        // $dataPelanggan['id_user'] = $this->db->insert_id();
        // $this->db->insert('pelanggan', $dataPelanggan);
    }
}
?>
