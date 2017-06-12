<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mastersaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_saran','saran');
		$this->load->model(array('m_dashboard'));
	}

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->saran->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $saran) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $saran->nama;
			$row[] = $saran->email;
			$row[] = $saran->message;
			$row[] = $saran->tanggal;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_saran('."'".$saran->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			// <a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_saran('."'".$saran->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_saran('."'".$saran->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->saran->count_all(),
						"recordsFiltered" => $this->saran->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_booking()
	{
		$list = $this->saran->get_datatables_booking();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $saran) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $saran->id_saran;
			$row[] = $saran->nomor_saran;
			$row[] = $saran->status;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_saran('."'".$saran->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			// <a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_saran('."'".$saran->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_saran('."'".$saran->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->saran->count_all(),
						"recordsFiltered" => $this->saran->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_isi()
	{
		$list = $this->saran->get_datatables_isi();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $saran) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $saran->id_saran;
			$row[] = $saran->nomor_saran;
			$row[] = $saran->status;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_saran('."'".$saran->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_saran('."'".$saran->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->saran->count_all(),
						"recordsFiltered" => $this->saran->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->saran->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_detail($id)
	{
		$data = $this->saran->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
                'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'message' => $this->input->post('message'),
			);
		$insert = $this->saran->save($data);
		echo json_encode(array("status" => TRUE));
		redirect('/contact');
	}

	public function ajax_update()
	{
		$data = array(
            	'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'message' => $this->input->post('message'),
			);
		$this->saran->update(array('id_booking' => $this->input->post('id_booking')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update_cekout()
	{
		$this->load->database();
		$this->load->model('M_formcekout'); //load model mkota yang berada di folder model
	    $this->load->model('m_dashboard');
	    $databooking = $this->M_formcekout->ambilbooking($this->input->post("kode"))->row();
	    $nomorsaran = $databooking->nomor_saran;
		$datasaran = array(
	    	'nomor_saran' => $nomorsaran,
	    	);
		$id = array(
	    	'id_booking' => $this->input->post("kode"),
	    	);
	    $dataupdate = array(
	    	'status' => "kosong",
	    	);
		$data = array(
                // 'tgl_keluar' => $this->input->post("tgl_keluar"),
				'status' => 'Check Out',
                'ket' => 'Lunas',
                'acc' => 'Resepsionis',
			);
		$this->m_dashboard->Update('saran',$dataupdate,$datasaran);
		$this->saran->Update('booking',$data,$id);
		redirect('dashboard/datasaran');
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update_ke_nite(){
		$this->load->database();
		$this->load->model('M_formcekout'); //load model mkota yang berada di folder model
	    $this->load->model('m_dashboard');
	    $acc = array(
	    	'acc' => 'Resepsionis',
	    	);
	    $data = array(
                'acc' => 'Nite Audit',
			);
		$this->saran->Update('booking',$data,$acc);
		redirect('dashboard/lapharian');
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->saran->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
