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
        $this->load->view('login');
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

    public function niteaudit(){
        $this->load->view('niteaudit');
    }

    public function keuangan(){
		//$data['tipe_kamar'] = //$this->m_dashboard->tampil_dataTipeKamar()->result();
		// $this->load->view('keuangan',$data);
		$this->load->view('keuangan');
    }

    public function resepsionis(){
        $this->load->view('resepsionis');
    }

    public function databooking(){
        $this->load->view('databooking');
    }

    public function datacheckin(){
        $this->load->view('datacheckin');
    }

    public function datacheckout(){
        $this->load->view('datacheckout');
    }

    public function formcheckout(){
        $this->load->view('formcheckout');
    }

	public function onsite(){
		$this->load->model('m_dashboard');
		$data['available'] = $this->m_dashboard->tampil_dataKamar()->result();
        $this->load->view('onsite',$data);
    }

	public function lapharian(){
        $this->load->view('lapharian');
    }

    public function lapbulanan(){
    	$this->load->model('mread');
    	$data['report'] = $this->mread->report();
        $this->load->view('lapbulanan', $data);
    }

    public function buktibayar(){
        $this->load->view('buktibayar');
    }

    public function sendsms(){
        $this->load->view('sendsms');
    }

    public function daftarsms(){
        $this->load->view('daftarsms');
    }

    public function promosi(){
        $this->load->view('promosi');
    }

    public function laporharian(){
        $this->load->view('laporharian');
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
		$data['tipe_kamar'] = $this->input->post('tipe_kamar');
		$data['harga_kamar_weekday'] = $this->input->post('harga_kamar_weekday');
		$data['harga_kamar_weekend'] = $this->input->post('harga_kamar_weekend');
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
	    redirect('dashboard/login');
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
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
	    if (($this->input->post("dp"))===($this->input->post("total"))) {
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
		$this->m_dashboard->insertTamu($dataTamu);
		$this->m_dashboard->Update('kamar',$dataupdate,$datakamar);
	    redirect('/');
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}
}
