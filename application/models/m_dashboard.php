<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_dashboard extends CI_Model{
    var $table = 'buktibayar';
    public function getData($table){
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }

    public function save($databukti)
    {
        $this->db->insert($this->table, $databukti);
        return $this->db->insert_id();
        // $this->db->insert('buktibayar',$databukti);
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

    public function tampil_notif_resepsionis(){
        // return $this->db->get('berita_terbaru');
        // return $this->db->get('berita_terbaru')->order_by('id_berita', 'desc');
        $query = $this->db->query("SELECT * FROM notifikasi where untuk='Resepsionis' order by id desc");
            return $query;
    }

    public function tampil_notif_nite(){
        // return $this->db->get('berita_terbaru');
        // return $this->db->get('berita_terbaru')->order_by('id_berita', 'desc');
        $query = $this->db->query("SELECT * FROM notifikasi where untuk='Nite Audit' order by id desc");
            return $query;
    }

    public function tampil_dataTipeKamar(){
		return $this->db->get('tipe_kamar');
	}

    public function tampil_dataKamar(){
        return $this->db->get('tipe_kamar');
    }

    public function tampil_nomorKamar(){
        return $this->db->get('kamar');
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

    public function tampil_noKamar1(){
              return $this->db->get_where('kamar', array('status' => 'kosong','id_tipe_kamar' => '1'));
              // return $query->result_array();
    }

    public function tampil_noKamar2(){
              return $this->db->get_where('kamar', array('status' => 'kosong','id_tipe_kamar' => '2'));
              // return $query->result_array();
    }

    public function tampil_noKamar3(){
              return $this->db->get_where('kamar', array('status' => 'kosong','id_tipe_kamar' => '3'));
              // return $query->result_array();
    }

    public function tampil_noKamar4(){
              return $this->db->get_where('kamar', array('status' => 'kosong','id_tipe_kamar' => '4'));
              // return $query->result_array();
    }

    public function tampil_noKamar5(){
              return $this->db->get_where('kamar', array('status' => 'kosong','id_tipe_kamar' => '5'));
              // return $query->result_array();
    }

    public function tampil_noKamar6(){
              return $this->db->get_where('kamar', array('status' => 'kosong','id_tipe_kamar' => '6'));
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

    public function insertSementara($sementara){
        $this->db->insert('data_sementara',$sementara);
    }

    function ambilstatus(){
            $query = $this->db->query("select * from booking where (ket='Belum Upload Bukti Pembayaran') and (status = 'Booking')");
            return $query;
        }

    function caribooking(){
            $query = $this->db->query("select * from booking where ket='Belum Upload Bukti Pembayaran' and (status = 'Booking')");
            return $query;
        }
}
?>
