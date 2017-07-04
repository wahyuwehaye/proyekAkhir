<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

     public function __construct()
    {
     parent::__construct();
     $this->load->model('m_login');
	 $this->load->model(array('m_dashboard'));
     //session_start();
    }

	public function index()
	{
        if(isset($_SESSION['logged_in']))
		{
        $this->load->view('home');
        }else{
        $this->load->view('login');
    }
	}

    public function login()
	{
		$data['tglIn'] = $this->input->post('tglIn');
		$data['tglOut'] = $this->input->post('tglOut');
		$data['kamar'] = $this->input->post('kamar');
		$data['nama_kamar'] = $this->input->post('nama_kamar');
		$data['harga_kamar_weekday'] = $this->input->post('harga_kamar_weekday');
		$data['harga_kamar_weekend'] = $this->input->post('harga_kamar_weekend');
        $this->load->view('login',$data);
	}

	public function loginAdmin(){
/*
        $login = $this->m_login->actLogin();
        if($login == true){
            $data = array(
              'id_admin' => $login->id_admin,
              'username' => $login->username,
              'password' => $login->password
            );
            $this->session->set_userdata($data);
            redirect('dashboard/index');
        }else{
            redirect('dashboard/login');
        }*/
		//redirect('dashboard/index');
        $this->load->library('session');
		$this->load->model('m_login');
				$data=$this->m_login->checkLogin();
				if (($this->input->post('nama_kamar'))!==""){
					$this->datasementara();
					if($data>0){
					$sessionData=$this->m_login->findByDynamicColumn(array('username'=> $_POST['username'],'password'=> md5($_POST['password'])));

					$newdata = array(
						'username'  => $_POST['username'],
						'logged_in' => TRUE,
						// 'name'		=> $sessionData[0]['name'],
						// 'id_session'=> $sessionData[0]['id']
					);

					$this->session->set_userdata($newdata);
//					print_r($_SESSION);
					//echo $_SESSION['logged_in']." asdfasdf";
					//die();
                    if($_POST['username']=='admin'){
                    	if (($this->input->post('nama_kamar'))=="") {
                    		redirect('main/index');
                    	}else{
                    		$this->wizard();
                    	}
                        
                    }else if ($_POST['username']=='niteaudit') {
                        redirect('dashboard/niteaudit');
                    }else if ($_POST['username']=='keuangan') {
                        redirect('dashboard/keuangan');
                    }elseif ($_POST['username']=='resepsionis') {
                        redirect('dashboard/onsite');
                    }else {
                    	if (($this->input->post('nama_kamar'))=="") {
                    		redirect('main/index');
                    	}else{
                    		$this->wizard();
                    	}
                    }
                    }else{
						$_SESSION['error'] = '';
						redirect('Dashboard/login');
					}
				}else{
					if($data>0){
					$sessionData=$this->m_login->findByDynamicColumn(array('username'=> $_POST['username'],'password'=> md5($_POST['password'])));

					$newdata = array(
						'username'  => $_POST['username'],
						'logged_in' => TRUE,
						'name'		=> $sessionData[0]['name'],
						'id_session'=> $sessionData[0]['id']
					);

					$this->session->set_userdata($newdata);
//					print_r($_SESSION);
					//echo $_SESSION['logged_in']." asdfasdf";
					//die();
                    if($_POST['username']=='admin'){
                    	redirect('main/index');
                    }else if ($_POST['username']=='niteaudit') {
                        redirect('dashboard/niteaudit');
                    }else if ($_POST['username']=='keuangan') {
                        redirect('dashboard/keuangan');
                    }elseif ($_POST['username']=='resepsionis') {
                        redirect('dashboard/onsite');
                    }else {
                    	redirect('main/index');
                    }

					}else{
						$_SESSION['error'] = '';
						redirect('Dashboard/login');
					}
				}
				
    }

    public function datasementara(){
    	$this->load->database();
	    $this->load->model('m_dashboard');
	    $sementara = array(
			'tglIn' => $this->input->post('tglIn'),
			'tglOut' => $this->input->post('tglOut'),
			'kamar' => $this->input->post('kamar'),
			'nama_kamar' => $this->input->post('nama_kamar'),
			'harga_kamar_weekday' => $this->input->post('harga_kamar_weekday'),
			'harga_kamar_weekend' => $this->input->post('harga_kamar_weekend'),
			'user' => $this->input->post('username'),
			);
	    $this->m_dashboard->insertSementara($sementara);
    }

	public function logOut() {
/*
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->sess_destroy();
        $this->load->view('main/index');
*/
		//redirect('main/index');
        $this->session->sess_destroy();
		redirect('main/index');
    }

	public function notLoggedIn(){
		$this->load->view('lockscreen');
	}

	public function cekUser(){
		$this->load->library('session');
		$this->load->model('m_login');
				$data1=$this->m_login->checkLogin();
				$data2=$this->m_login->cekNoHpUser();
				if($data1>0){
					$_SESSION['adaadmin'] = '';
					redirect('dashboard/login');
				}elseif ($data2>0) {
					$_SESSION['adaphone'] = '';
					redirect('dashboard/login');
				}else{
					$this->insert();
				}
	}

    public function niteaudit(){
    	$data['notif'] = $this->m_dashboard->tampil_notif_nite()->result();
        $this->load->view('niteaudit',$data);
    }

    public function keuangan(){
		//$data['tipe_kamar'] = //$this->m_dashboard->tampil_dataTipeKamar()->result();
		// $this->load->view('keuangan',$data);
		$this->load->view('keuangan');
    }

    public function resepsionis(){
        $this->load->view('resepsionis');
    }

    public function kritiksaran(){
        $this->load->view('kritiksaran');
    }

    public function databooking(){
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('databooking',$data);
    }

    public function datacheckin(){
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('datacheckin',$data);
    }

    public function datacheckout(){
    	$this->load->model('m_dashboard');
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('datacheckout',$data);
    }

    public function formcheckout(){
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('formcheckout',$data);
    }

	public function onsite(){
		$this->load->model('m_dashboard');
		$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
		$data['available'] = $this->m_dashboard->tampil_dataKamar()->result();
		$data['tampilnokamar'] = $this->m_dashboard->tampil_nomorKamar()->result();
		$data['kamarkosong'] = $this->m_dashboard->tampil_noKamar()->result();
		$data['kamarkosong1'] = $this->m_dashboard->tampil_noKamar1()->result();
		$data['kamarkosong2'] = $this->m_dashboard->tampil_noKamar2()->result();
		$data['kamarkosong3'] = $this->m_dashboard->tampil_noKamar3()->result();
		$data['kamarkosong4'] = $this->m_dashboard->tampil_noKamar4()->result();
		$data['kamarkosong5'] = $this->m_dashboard->tampil_noKamar5()->result();
		$data['kamarkosong6'] = $this->m_dashboard->tampil_noKamar6()->result();
        $this->load->view('onsite',$data);
    }

	public function lapharian(){
		$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('lapharian',$data);
    }

    public function lapbulanan(){
    	$this->load->model('mread');
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
    	$data['report'] = $this->mread->report();
        $this->load->view('lapbulanan', $data);
    }

    public function buktibayar(){
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('buktibayar',$data);
    }

    public function sendsms(){
    	$this->load->model('m_dashboard');
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('sendsms',$data);
    }

    public function daftarsms(){
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('daftarsms',$data);
    }

    public function promosi(){
    	$data['tipe_kamar'] = $this->db->query("select * from tipe_kamar");
        $this->load->view('promosi',$data);
    }

    public function laporharian(){
        $this->load->view('laporharian');
    }

    public function kamarkosong(){
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('kamarkosong',$data);
    }

    public function kamarbooking(){
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('kamarbooking',$data);
    }

    public function kamarisi(){
    	$data['notif'] = $this->m_dashboard->tampil_notif_resepsionis()->result();
        $this->load->view('kamarisi',$data);
    }

    public function laporbulanan(){
    	$this->load->model('mread');
    	$data['report'] = $this->mread->report();
        $this->load->view('laporbulanan', $data);
    }

    public function dataonsite(){
    	$data['tglIn'] = $this->input->post('tglIn');
		$data['tglOut'] = $this->input->post('tglOut');
		$data['kamar'] = $this->input->post('kamar');
		$data['nama_kamar'] = $this->input->post('nama_kamar');
		$data['tipe_kamar'] = $this->input->post('tipe_kamar');
		$data['harga_kamar_weekday'] = $this->input->post('harga_kamar_weekday');
		$data['harga_kamar_weekend'] = $this->input->post('harga_kamar_weekend');
		$data['harga_kamar'] = $this->input->post('harga_kamar');
        $this->load->view('dataonsite',$data);
    }

    public function detailonsite(){
        $this->load->view('detailonsite');
    }

	public function wizard(){
		$this->load->view('main/header1');
		$data['tglIn'] = $this->input->post('tglIn');
		$data['tglOut'] = $this->input->post('tglOut');
		$data['kamar'] = $this->input->post('kamar');
		$data['nama_kamar'] = $this->input->post('nama_kamar');
		$data['harga_kamar_weekday'] = $this->input->post('harga_kamar_weekday');
		$data['harga_kamar_weekend'] = $this->input->post('harga_kamar_weekend');
		$data['tamu'] = $this->m_dashboard->tampil_dataTamu(($_SESSION['username']));
		// $data['available'] = $this->m_dashboard->tampil_dataKamar()->result();
		$this->load->view('wizard',$data);
		$this->load->view('main/footer1');
	}

	private function _do_upload()
	{
		$config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000; //set max size allowed in Kilobyte
        $config['max_width']            = 100000; // set max width image allowed
        $config['max_height']           = 100000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('photo')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
			$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		return $this->upload->data('file_name');
	}

	public function insert(){
		$this->load->database();
	    $this->load->model('m_dashboard');
	    $dataUser = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('username'),
	        'username' => $this->input->post('username'),
	        'password' => md5($this->input->post("password")),
			);
		$dataPelanggan = array(
	 		'alamat' => $this->input->post('alamat'),
	 		'phone' => $this->input->post('phone')
	 	    );
	    $this->m_dashboard->insertPelanggan($dataUser, $dataPelanggan);
	    $_SESSION['suksesinput'] = '';
	    redirect('dashboard/login');
		// echo json_encode(array("status" => TRUE));
		// echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	public function insertBook(){
		$this->load->database();
	    $this->load->model('m_dashboard');
	    $dataTamu = array(
			'tgl_input' => $this->input->post("tgl_input"),
			'nama_tamu' => $this->input->post('nama_tamu'),
			'alamat_tamu' => $this->input->post('alamat_tamu'),
	        'no_hp' => $this->input->post('no_hp'),
	        'tgl_masuk' => $this->input->post("tgl_masuk"),
			'tgl_keluar' => $this->input->post("tgl_keluar"),
			'tipe_kamar' => $this->input->post("tipe_kamar"),
			'harga_kamar' => $this->input->post("harga_kamar"),
			'jumlah_kamar' => $this->input->post("jumlah_kamar"),
			'status' => $this->input->post("status"),
			);
		// $dataPelanggan = array(
	 // 		'alamat' => $this->input->post('alamat'),
	 // 		'phone' => $this->input->post('phone')
	 	  //   );
	    // $this->m_dashboard->insertTamu($dataTamu, $dataPelanggan);
		$this->m_dashboard->insertTamu($dataTamu);
	    redirect('/');
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	public function insertBookOnsite(){
		$this->load->database();
	    $this->load->model('m_dashboard');
	    $dataTamu = array(
			'tgl_input' => $this->input->post("tgl_input"),
			'nama_tamu' => $this->input->post('nama_tamu'),
			'alamat_tamu' => $this->input->post('alamat_tamu'),
	        'no_hp' => $this->input->post('no_hp'),
	        'tgl_masuk' => $this->input->post("tgl_masuk"),
			'tgl_keluar' => $this->input->post("tgl_keluar"),
			'tipe_kamar' => $this->input->post("tipe_kamar"),
			'harga_kamar' => $this->input->post("harga_kamar"),
			'jumlah_kamar' => $this->input->post("jumlah_kamar"),
			'status' => $this->input->post("status"),
			);
		// $dataPelanggan = array(
	 // 		'alamat' => $this->input->post('alamat'),
	 // 		'phone' => $this->input->post('phone')
	 	  //   );
	    // $this->m_dashboard->insertTamu($dataTamu, $dataPelanggan);
		$this->m_dashboard->insertTamu($dataTamu);
	    redirect('/Dashboard/detailonsite');
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	public function insertBooking(){
		$this->load->database();
	    $this->load->model('m_dashboard');
	    $datakamar = array(
	    	'nomor_kamar' => $this->input->post("nomor_kamar"),
	    	);
	    $dataupdate = array(
	    	'status' => "Booking",
	    	);
	    $keterangan="";
	    if (($this->input->post("dp"))>=($this->input->post("total"))) {
				$keterangan = "Lunas";
			}else{
				$keterangan = "DP";
			}
	    $dataTamu = array(
			'tgl_input' => $this->input->post("tgl_input"),
			'nama' => $this->input->post("nama"),
			'alamat' => $this->input->post("alamat"),
	        'no_hp' => $this->input->post("no_hp"),
	        'tgl_masuk' => $this->input->post("tgl_masuk"),
			'tgl_keluar' => $this->input->post("tgl_keluar"),
			'tipe_kamar' => $this->input->post("tipe_kamar"),
			'jumlah_kamar' => $this->input->post("jumlah_kamar"),
			'jumlah_malam' => $this->input->post("jumlah_malam"),
			'nomor_kamar' => $this->input->post("nomor_kamar"),
			'harga' => $this->input->post("harga"),
			'dp' => $this->input->post("dp"),
			'total' => $this->input->post("total"),
			'metode_bayar' => $this->input->post("metode_bayar"),
			'status' => $this->input->post("status"),
			'no_kartu' => $this->input->post("no_kartu"),
			'ket' => $keterangan,
			// $namakamar = $this->input->post("tipe_kamar");
			// $tipekamar=$this->db->query('select id_tipe_kamar')
			// $nomorkamar=$this->db->get_where('kamar',array('token'=>$token));
			);
		// $dataPelanggan = array(
	 // 		'alamat' => $this->input->post('alamat'),
	 // 		'phone' => $this->input->post('phone')
	 	  //   );
	    // $this->m_dashboard->insertTamu($dataTamu, $dataPelanggan);
	    $databukti = array(
	    	'id_transaksi' => "123",
	    	);
	    if(!empty($_FILES['photo']['name']))
		{
			$upload = $this->_do_upload();
			$databukti['photo'] = $upload;
		}
		$this->m_dashboard->insertTamu($dataTamu);
		$this->m_dashboard->Update('kamar',$dataupdate,$datakamar);
		// $insert = $this->m_dashboard->save($databukti);
	    redirect('/');
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	public function insertOnsite(){
		$this->load->database();
	    $this->load->model('m_dashboard');
	    $datakamar = array(
	    	'nomor_kamar' => $this->input->post("nomor_kamar"),
	    	);
	    $dataupdate = array(
	    	'status' => "Check In",
	    	);
	    $keterangan="Lunas";
	  //   if (($this->input->post("dp"))===($this->input->post("total"))) {
			// 	$keterangan = "Lunas";
			// }else{
			// 	$keterangan = "DP";
			// }
	    $dataTamu = array(
			'tgl_input' => $this->input->post("tgl_input"),
			'nama' => $this->input->post("nama"),
			'alamat' => $this->input->post("alamat"),
	        'no_hp' => $this->input->post("no_hp"),
	        'tgl_masuk' => $this->input->post("tgl_masuk"),
			'tgl_keluar' => $this->input->post("tgl_keluar"),
			'tipe_kamar' => $this->input->post("tipe_kamar"),
			'jumlah_kamar' => $this->input->post("jumlah_kamar"),
			'jumlah_malam' => $this->input->post("jumlah_malam"),
			'nomor_kamar' => $this->input->post("nomor_kamar"),
			'harga' => $this->input->post("harga"),
			'dp' => $this->input->post("dp"),
			'total' => $this->input->post("total"),
			'metode_bayar' => $this->input->post("metode_bayar"),
			'status' => $this->input->post("status"),
			'no_kartu' => $this->input->post("no_kartu"),
			'ket' => $keterangan,
			// $namakamar = $this->input->post("tipe_kamar");
			// $tipekamar=$this->db->query('select id_tipe_kamar')
			// $nomorkamar=$this->db->get_where('kamar',array('token'=>$token));
			);
		// $dataPelanggan = array(
	 // 		'alamat' => $this->input->post('alamat'),
	 // 		'phone' => $this->input->post('phone')
	 	  //   );
	    // $this->m_dashboard->insertTamu($dataTamu, $dataPelanggan);
		$this->m_dashboard->insertTamu($dataTamu);
		$this->m_dashboard->Update('kamar',$dataupdate,$datakamar);
	    redirect('dashboard/detailonsite');
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	// untuk promosi

	public function promosi()
	{
		$this->_validate();
		
		$data = array(
				'tipe_kamar' => $this->input->post('tipe_kamar'),
				'penjelasan' => $this->input->post('penjelasan'),
				'tgl_post' => date('Y-m-d H:i:s'),
			);

		if(!empty($_FILES['logo']['name']))
		{
			$upload = $this->_do_uploaded();
			$data['logo'] = $upload;
		}

		$insert = $this->channel->save($data);

		echo json_encode(array("status" => TRUE));
	}

	private function _do_uploaded()
	{
		$config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000; //set max size allowed in Kilobyte
        $config['max_width']            = 10000; // set max width image allowed
        $config['max_height']           = 10000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('logo')) //upload and validate
        {
            $data['inputerror'][] = 'logo';
			$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		return $this->upload->data('file_name');
	}
}
