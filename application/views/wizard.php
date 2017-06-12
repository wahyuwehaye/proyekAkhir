<?php
    $CI =& get_instance();
    $CI->load->model('m_dashboard');
    $CI->load->model('m_pesanan');  

$harganya = 0;
// $date = date('Y-m-d');
$date = $tglIn;
$timestamp = strtotime($date);
$weekday= date("l", $timestamp );
$normalized_weekday = strtolower($weekday);
// echo $normalized_weekday ;
if (($normalized_weekday == "saturday") || ($normalized_weekday == "sunday")) {
    $harganya = $harga_kamar_weekend;
} else {
    $harganya = $harga_kamar_weekday;
}

$start_date = new DateTime($tglIn);
$end_date = new DateTime($tglOut);
$interval = $start_date->diff($end_date);
// echo "$interval->days hari "; // hasil : 217 hari
$jumlahmalamnya = $interval->days;
// echo $jumlahmalamnya;

$total = ($harganya * $jumlahmalamnya)*$kamar;
// echo $total;

$gettipekamar = $CI->db->query('select id_tipe_kamar from tipe_kamar where nama_kamar="'.$nama_kamar.'"');
// $tipekamar = $gettipekamar->result_array();
foreach ($gettipekamar->result() as $row){
    $dapetid = $row->id_tipe_kamar;
    break;
}

$getnomorkamar =$CI->db->query('select nomor_kamar from kamar where id_tipe_kamar='.$dapetid.' and status = "kosong"');
// $nomorkamar=$getnomorkamar->result_array();
foreach ($getnomorkamar->result() as $row){
    $dapetnomor = $row->nomor_kamar;
    break;
}

 // echo $dapetnomor;
$datetidtrans="";
$getidtrans = $CI->db->query('SELECT * FROM booking ORDER BY id_booking DESC LIMIT 1');
foreach ($getidtrans->result() as $cari) {
    $datetidtrans = $cari->id_booking;
    break;
}
$idtransbaru = $datetidtrans+1;
// echo $idtransbaru;


?>

<!--features strat here-->
<div class="features">
	<div class="container">
		<div class="features-main">
			<div class="features-bottom wow slideInRight" data-wow-delay="0.3s">
				<div class="col-md-12 featur-grid">
					<h4>Data Pemesanan</h4>
					<ul>
						<li>Tanggal Check In <a href="#"><?php echo $tglIn; ?></a></li>
						<li>Tanggal Check Out <a href="#"><?php echo $tglOut; ?></a></li>
						<li>Jumlah Kamar <a href="#"><?php echo $kamar; ?></a></li>
						<li>Tipe Kamar <a href="#"><?php echo $nama_kamar; ?></a></li>
                        <li>Harga Kamar <a href="#"><?php echo $harganya; ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!--features end here-->
<!-- Top content -->
        <div class="top-content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" method="post" class="f1" action="<?php echo base_url()?>index.php/Dashboard/insertBooking">

                    		<h3>Pemesanan Hotel Cihampelas 2</h3>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Form Pemesanan</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-credit-card"></i></div>
                    				<p>Pembayaran</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-check-square"></i></div>
                    				<p>Konfirmasi Pembayaran</p>
                    			</div>
                                <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-list"></i></div>
                    				<p>Data Pemesanan</p>
                    			</div>
                    		</div>
                            <?php foreach($tamu->result_array() as $row) { ?>
                    		<fieldset>
                    		    <h4>Rincian Data Pemesanan</h4>
                    			<div class="form-group">
                    			    <label for="f1-first-name">Nama Lengkap</label>
                                    <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $row['nama'];?>" class="f1-first-name form-control" id="nama">
                                </div>
                                <div class="form-group">
                                    <label for="f1-last-name">Alamat</label>
                                    <input type="text" name="alamat" placeholder="Alamat" value="<?php echo $row['alamat'];?>" class="f1-last-name form-control" id="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="f1-about-yourself">ID Identitas</label>
                                    <input type="text" name="id_user" placeholder="ID Identitas" value="<?php echo $row['id_user'];?>" class="f1-last-name form-control" id="id_user">
                                </div>
                                <div class="form-group">
                                    <label for="f1-about-yourself">Nomor Telepon</label>
                                    <input type="text" name="no_hp" placeholder="Nomor Telepon" value="<?php echo $row['phone'];?>" class="f1-last-name form-control" id="no_hp">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
                            <?php }?>
                            <fieldset>
                                <h4>Metode Pembayaran</h4>
                                <div class="form-group">
                    			    <!-- <label for="f1-first-name">DP</label>
                                    <input type="text" name="dp" id="dp" placeholder="DP" class="f1-first-name form-control" id="dp"> -->
                                    <select onchange="cobaselect()" name="pembayaran" id="pembayaran" class="form-control">
                                        <option value="">- Pilih Salah Satu -</option>
                                        <option value="DP">DP</option>
                                        <option value="Lunas">Lunas</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="f1-last-name">Harga Per Malam</label>
                                    <input type="text" name="harga" placeholder="Harga Per Malam" value="<?php echo $harganya; ?>" class="f1-last-name form-control" id="harga">
                                </div>
                                <div class="form-group">
                                    <label for="f1-last-name">Jumlah Malam</label>
                                    <input type="text" name="jumlah_malam" placeholder="Harga Per Malam" value="<?php echo $jumlahmalamnya; ?>" class="f1-last-name form-control" id="jumlah_malam">
                                </div>
                                <div class="form-group">
                                    <label for="f1-last-name">Harga Total</label>
                                    <input type="text" name="total" placeholder="Harga Per Malam" value="<?php echo $total; ?>" class="f1-last-name form-control" id="total">
                                </div>
                                <div class="form-group">
                                    <label for="f1-last-name">Total Bayar</label>
                                    <input type="text" name="dp" placeholder="Total Bayar" value="" class="f1-last-name form-control" id="dp">
                                </div>
                                <h4>Transfer dapat dilakukan melalui Bank berikut :</h4>
                                <input type="radio" onclick="javascript:yesCheck1();" name="metode_bayar" id="bayar1" value="Transfer Ke Nomor Rekening BCA"/> BCA
                                <div id="debit1" style="visibility:hidden" class="form-group">
                                  <label for="debit">Silakan Transfer Ke Nomor Rekening BCA 1680-02-006244-1 an Ajeng Pursitasari</label>
                                  <!-- <input type="hidden" name="metode_bayar" value="Transfer Ke Nomor Rekening BCA"> -->
                                </div>
                                <input type="radio" onclick="javascript:yesCheck2();" name="metode_bayar" id="bayar2" value="Transfer Ke Nomor Rekening BRI"/> BRI
                                <div id="debit2" style="visibility:hidden" class="form-group">
                                  <label for="debit">Silakan Transfer Ke Nomor Rekening BRI 1680-02-006245-2 an Ajeng Pursitasari</label>
                                  <!-- <input type="hidden" name="metode_bayar" value="Transfer Ke Nomor Rekening BRI"> -->
                                </div>
                                <input type="radio" onclick="javascript:yesCheck3();" name="metode_bayar" id="bayar3" value="Transfer Ke Nomor Rekening BNI"/> BNI
                                <div id="debit3" style="visibility:hidden" class="form-group">
                                  <label for="debit">Silakan Transfer Ke Nomor Rekening BNI 1680-02-006246-3 an Ajeng Pursitasari</label>
                                  <!-- <input type="hidden" name="metode_bayar" value="Transfer Ke Nomor Rekening BNI"> -->
                                </div>
                                <input type="radio" onclick="javascript:yesCheck4();" name="metode_bayar" id="bayar4" value="Transfer Ke Nomor Rekening Mandiri"/> Mandiri
                                <div id="debit4" style="visibility:hidden" class="form-group">
                                  <label for="debit">Silakan Transfer Ke Nomor Rekening Mandiri 1680-02-006247-4 an Ajeng Pursitasari</label>
                                  <!-- <input type="hidden" name="metode_bayar" value="Transfer Ke Nomor Rekening Mandiri"> -->
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" onclick="bayardulu()" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Konfirmasi Pembayaran</h4>
                                <!-- <div class="form-group">
                                    <label class="sr-only" for="f1-facebook">Upload</label>
                                    <input type="file" name="photo" id="photo" placeholder="Upload" class="form-control">
                                </div> -->
                                <div class="dropzone">

                                  <div class="dz-message">
                                   <h3> Klik atau Drop Bukti Pembayaran disini</h3>

                                   <input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $idtransbaru; ?>">
                                  </div>


                                </div>
                                <h6>Format jpg, png, gif</h6>
                                <!-- <button type="button" class="btn btn-block btn-primary btn-sm">Primary</button> -->
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Rincian Data Pemesanan</h4
                                <div class="f1-buttons">
                                    <h5>ID Tamu : <?php echo $row['id_user'];?></h5>
                                    <h5>Nama : <?php echo $row['nama'];?></h5>
                                    <h5>Alamat : <?php echo $row['alamat'];?></h5>
                                    <h5>Nomor Telepon : <?php echo $row['phone'];?></h5>
                                    <h5>Tanggal Masuk : <?php echo $tglIn; ?></h5>
									<input type="hidden" name="tgl_input" value="<?php echo date('Y-m-d') ?>">
									<input type="hidden" name="tgl_masuk" value="<?php echo date('Y-m-d', strtotime($tglIn)); ?>">
									<input type="hidden" name="tgl_keluar" value="<?php echo date('Y-m-d', strtotime($tglOut)); ?>">
									<input type="hidden" name="jumlah_kamar" value="<?php echo $kamar; ?>">
                                    <input type="hidden" name="jumlah_malam" value="<?php echo $jumlahmalamnya; ?>">
									<input type="hidden" name="tipe_kamar" value="<?php echo $nama_kamar; ?>">
									<input type="hidden" name="harga" value="<?php echo $harganya; ?>">
                                    <input type="hidden" name="nomor_kamar" value="<?php echo $dapetnomor; ?>">
									<input type="hidden" name="status" value="Booking">
                                    <input type="hidden" name="no_kartu" value="">
                                    <input type="hidden" name="ket" value=" DP">
                                    <h5>Tanggal Keluar : <?php echo $tglOut; ?></h5>
                                    <h5>Jumlah Kamar : <?php echo $kamar; ?></h5>
                                    <h5>Tipe Kamar : <?php echo $nama_kamar; ?></h5>
                                    <h5>Harga Total : <?php echo $total; ?></h5>
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>

                    	</form>
                    </div>
                </div>

            </div>
        </div>
        <script src="<?php echo base_url()?>sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

function yesCheck1() {
    if (document.getElementById('bayar1').checked) {
        document.getElementById('debit1').style.visibility = 'visible';
        document.getElementById('debit2').style.visibility = 'hidden';
        document.getElementById('debit3').style.visibility = 'hidden';
        document.getElementById('debit4').style.visibility = 'hidden';
    } else {
        document.getElementById('debit2').style.visibility = 'hidden';
        document.getElementById('debit3').style.visibility = 'hidden';
        document.getElementById('debit4').style.visibility = 'hidden';
    }
}

function yesCheck2() {
    if (document.getElementById('bayar2').checked) {
        document.getElementById('debit2').style.visibility = 'visible';
        document.getElementById('debit1').style.visibility = 'hidden';
        document.getElementById('debit3').style.visibility = 'hidden';
        document.getElementById('debit4').style.visibility = 'hidden';
    } else {
        document.getElementById('debit1').style.visibility = 'hidden';
        document.getElementById('debit3').style.visibility = 'hidden';
        document.getElementById('debit4').style.visibility = 'hidden';
    }
}

function yesCheck3() {
    if (document.getElementById('bayar3').checked) {
        document.getElementById('debit3').style.visibility = 'visible';
        document.getElementById('debit1').style.visibility = 'hidden';
        document.getElementById('debit2').style.visibility = 'hidden';
        document.getElementById('debit4').style.visibility = 'hidden';
    } else {
        document.getElementById('debit1').style.visibility = 'hidden';
        document.getElementById('debit2').style.visibility = 'hidden';
        document.getElementById('debit4').style.visibility = 'hidden';
    }
}

function yesCheck4() {
    if (document.getElementById('bayar4').checked) {
        document.getElementById('debit4').style.visibility = 'visible';
        document.getElementById('debit1').style.visibility = 'hidden';
        document.getElementById('debit2').style.visibility = 'hidden';
        document.getElementById('debit3').style.visibility = 'hidden';
    } else {
        document.getElementById('debit1').style.visibility = 'hidden';
        document.getElementById('debit2').style.visibility = 'hidden';
        document.getElementById('debit3').style.visibility = 'hidden';
    }
}

function cobaselect(){
    // alert('wahyu');
    var total = $("#total").val();
    var pembayaran = $("#pembayaran").val();
    var hasil = 0;
    hasil = total /2;
    // alert(hasil);
    if (pembayaran=="DP") {
        $("#dp").val(hasil);
    }else{
        $("#dp").val(total);
    }
}

function bayardulu(){
    swal({
  title: "Transfer paling lambat dilakukan 1 jam setelah melakukan pemesanan ini!",
  text: "I will close in 2 minutes.",
  type: "warning",
  timer: 120000,
  showConfirmButton: true
});
}

</script>