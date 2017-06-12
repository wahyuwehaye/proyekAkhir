<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class FormCekout extends CI_Controller
{
 
    public function __construct() {
        parent::__construct();
        $this->load->model('M_formcekout'); //load model mkota yang berada di folder model
        $this->load->helper(array('url')); //load helper url
 
    }
 
    public function index()
    {
        // $data['titel']='Multiple Output Autocomplete Jquery UI + CodeIgniter'; //varibel title
        // $this->load->view('vkota',$data); //tampilan awal ketika controller kota di akses
    }
 
    public function get_alldata() {
        $kode = $this->input->post('kode',TRUE); //variabel kunci yang di bawa dari input text id kode
        $query = $this->M_formcekout->get_alldata(); //query model
 
        $databooking       =  array();
        foreach ($query as $d) {
            $databooking[]     = array(
                'id_booking' => $d->id_booking, //variabel array yg dibawa ke label ketikan kunci
                'tgl_input' => $d->tgl_input , //variabel yg dibawa ke id nama
                'nama' => $d->nama, //variabel yang dibawa ke id ibukota
                'tipe_kamar' => $d->tipe_kamar, //variabel yang dibawa ke id keterangan
                'no_hp' => $d->no_hp,
                'alamat' => $d->alamat,
                'tgl_masuk' => $d->tgl_masuk,
                'tgl_keluar' => $d->tgl_keluar,
                'jumlah_kamar' => $d->jumlah_kamar,
                'jumlah_malam' => $d->jumlah_malam,
                'nomor_kamar' => $d->nomor_kamar,
                'harga' => $d->harga,
                'dp' => $d->dp,
                'total' => $d->total,
                'metode_bayar' => $d->metode_bayar,
                'status' => $d->status,
                'no_kartu' => $d->no_kartu,
                'ket' => $d->ket,
                'id_user' => $d->id_user
            );
        }
        echo json_encode($databooking);      //data array yang telah kota deklarasikan dibawa menggunakan json
    }

    public function cobacek($kode){
        // $data = $this->M_formcekout->ambilbooking($idanggota);
        $jumlahbooking = $this->M_formcekout->hitungbooking($kode)->row();
        $jumlahbookingnya = $jumlahbooking->jumlah;
        if ($jumlahbookingnya>=1) {
            $databooking = $this->M_formcekout->ambilbooking($kode)->row();
        echo '<div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" disabled placeholder="Nama Lengkap" value="'.$databooking->nama.'">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" disabled placeholder="Alamat" value="'.$databooking->alamat.'">
                </div>
                <div class="form-group">
                  <label for="id_booking">ID Identitas</label>
                  <input type="text" class="form-control" id="id_booking" name="id_booking" disabled placeholder="ID Identitas" value="'.$databooking->id_booking.'">
                </div>
                <div class="form-group">
                  <label for="no_hp">Nomor HP</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" disabled placeholder="Nomor HP" value="'.$databooking->no_hp.'">
                </div>
                <div class="form-group">
                  <label for="tgl_masuk">Tanggal Check In</label>
                  <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk" disabled placeholder="Tanggal Check In" value="'.$databooking->tgl_masuk.'">
                </div>
                <div class="form-group">
                  <label for="jumlah_malam">Total Malam</label>
                  <input type="text" class="form-control" id="jumlah_malam" name="jumlah_malam" disabled placeholder="Total Malam" value="'.$databooking->jumlah_malam.'">
                </div>
                <div class="form-group">
                  <label for="nomor_kamar">Nomor Kamar</label>
                  <input type="text" class="form-control" id="nomor_kamar" name="nomor_kamar" disabled placeholder="Nomor Kamar" value="'.$databooking->nomor_kamar.'">
                </div>
                <div class="form-group">
                    <label for="harga">Harga Sewa Kamar</label>
                    <input type="text" class="form-control" id="harga" name="harga" disabled placeholder="Harga Kamar"value="Rp. '.number_format($databooking->harga, 1, ",", ".").'">
                </div>';
        }else{
            echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                ID Booking yang anda masukkan tidak ada dalam data Check In, Silakan cek terlebih dahulu Pada Data Check In lalu kemudian lakukan kembali untuk pengisian Form Check Out nya. (Hanya Data dengan Status Check In yang bisa di proses pada Form Check Out ini.)
              </div>';
        }
        
    }

    public function gettotalnya($kode,$extra_bed,$restaurant,$lain2){
        $databooking = $this->M_formcekout->ambilbooking($kode)->row();

        $total = $databooking->total;
        $totalsemua = $extra_bed + $restaurant + $lain2 + $total;
        echo '<div class="form-group col-md-2">
                  <label for="total">Subtotal</label>
                  <input type="text" class="form-control" id="total" name="total" disabled placeholder="Subtotal" value="'.$totalsemua.'">
              </div>
              <div class="col-md-7">
              </div>
              <div class="form-group form-horizontal">
                  <label for="total" class="col-md-2 control-label">Total</label>

                  <div class="col-md-3">
                    <input type="text" class="form-control" id="totalall" disabled placeholder="Total" value="Rp. '.number_format($totalsemua, 1, ",", ".").'">
                  </div>
              </div>';
    }

    public function totaldue($kode,$paid,$total){
        $databooking = $this->M_formcekout->ambilbooking($kode)->row();

        $totalbook = $databooking->total;
        $totalsemua = $total;
        $totaldue = $paid - $totalsemua;

        echo '<div class="form-group form-horizontal">
                  <label for="total_due" class="col-md-2 control-label">Kembalian</label>

                  <div class="col-md-3">
                    <input type="text" class="form-control" id="total_due" disabled placeholder="Total Due" value="Rp. '.number_format($totaldue, 1, ",", ".").'">
                  </div>
              </div>';
    }
}
 
/* End of file kota.php */
/* Location: ./application/controllers/FormCekout.php */
// - See more at: http://fabernainggolan.net/input-dinamis-autocomplete-pada-codeignitermysql-dengan-jquer#sthash.X5a3zWkM.dpuf