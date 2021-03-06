<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('main/header');
		$this->load->view('home');
		$this->load->view('main/footer');
	}

	public function fasilities(){
		$this->load->view('main/header');
		$this->load->view('fasilities');
		$this->load->view('main/footer');
	}

	public function rooms(){
		$this->load->model('m_dashboard');
		$this->load->view('main/header');
		$data['tglIn'] = $this->input->post('tanggalIn');
		$data['tglOut'] = $this->input->post('tanggalOut');
		$data['kamar'] = $this->input->post('kamar');
		$data['available'] = $this->m_dashboard->tampil_dataKamar()->result();
		$this->load->view('rooms',$data);
		$this->load->view('main/footer');
	}

	public function contact(){
		$this->load->view('main/header');
		$this->load->view('contact');
		$this->load->view('main/footer');
	}

	public function soon(){
		$this->load->view('soon');
	}
}
