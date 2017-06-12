<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mastersms extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_sms','sms');
		$this->load->model(array('m_dashboard'));
	}

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->sms->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $sms) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $sms->DestinationNumber;
			$row[] = $sms->TextDecoded;
			$row[] = $sms->CreatorID;
			$row[] = $sms->SendingDateTime;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_sms('."'".$sms->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			// <a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_sms('."'".$sms->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_sms('."'".$sms->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->sms->count_all(),
						"recordsFiltered" => $this->sms->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_booking()
	{
		$list = $this->sms->get_datatables_booking();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $sms) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $sms->id_sms;
			$row[] = $sms->nomor_sms;
			$row[] = $sms->status;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_sms('."'".$sms->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			// <a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_sms('."'".$sms->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_sms('."'".$sms->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->sms->count_all(),
						"recordsFiltered" => $this->sms->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_isi()
	{
		$list = $this->sms->get_datatables_isi();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $sms) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $sms->id_sms;
			$row[] = $sms->nomor_sms;
			$row[] = $sms->status;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_sms('."'".$sms->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_sms('."'".$sms->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->sms->count_all(),
						"recordsFiltered" => $this->sms->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->sms->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_detail($id)
	{
		$data = $this->sms->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
                'DestinationNumber' => $this->input->post('DestinationNumber'),
				'TextDecoded' => $this->input->post('TextDecoded'),
				'CreatorID' => $this->input->post('CreatorID'),
			);
		$insert = $this->sms->save($data);
		echo json_encode(array("status" => TRUE));
		redirect('dashboard/daftarsms');
	}

	public function ajax_update()
	{
		$data = array(
            	'DestinationNumber' => $this->input->post('DestinationNumber'),
				'TextDecoded' => $this->input->post('TextDecoded'),
				'CreatorID' => $this->input->post('CreatorID'),
			);
		$this->sms->update(array('id_booking' => $this->input->post('id_booking')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update_cekout()
	{
		$this->load->database();
		$this->load->model('M_formcekout'); //load model mkota yang berada di folder model
	    $this->load->model('m_dashboard');
	    $databooking = $this->M_formcekout->ambilbooking($this->input->post("kode"))->row();
	    $nomorsms = $databooking->nomor_sms;
		$datasms = array(
	    	'nomor_sms' => $nomorsms,
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
		$this->m_dashboard->Update('sms',$dataupdate,$datasms);
		$this->sms->Update('booking',$data,$id);
		redirect('dashboard/datasms');
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
		$this->sms->Update('booking',$data,$acc);
		redirect('dashboard/lapharian');
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->sms->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
