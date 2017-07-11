<?php
class M_formcekout extends CI_Model {
    var $tabel = 'booking';   //variabel tabelnya
 
    function __construct() {
        parent::__construct();
    }
 
    //fungsi untuk menampilkan semua data dari tabel database
    function get_alldata() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) { //jika ada maka jalankan
            return $query->result();
        }
    }

    // function ambilbooking($kode){
    //         $query = $this->db->query(
    //                 "SELECT * FROM booking WHERE id_booking =  '$kode'"
    //                 );
    //         return $query;
    // }

    function ambilbooking($kode){
            $query = $this->db->query("select * from booking where id_booking='$kode' and (status = 'Check In')");
            return $query;
        }

    function caribooking($kode){
            $query = $this->db->query("select * from booking where ket='Belum Upload Bukti Pembayaran' and (status = 'Booking')");
            return $query;
        }

    function hitungbooking($kode){
        $query = $this->db->query("select COUNT(id_booking) as jumlah from booking where id_booking='$kode' and (status = 'Check In')");
        return $query;
    }
}
?>