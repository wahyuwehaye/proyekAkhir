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
                        redirect('dashboard/resepsionis');
                    }

				}else{
					redirect('Dashboard/login');
					echo "
					<script>
					swal({
					  title: 'Error!',
					  text: 'Here my error message!',
					  type: 'error',
					  confirmButtonText: 'Cool'
					});
					</script>";
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
        $this->load->view('keuangan');
    }

    public function resepsionis(){
        $this->load->view('resepsionis');
    }
}
