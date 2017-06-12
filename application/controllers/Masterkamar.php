<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterkamar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kamar','kamar');
		$this->load->model(array('m_dashboard'));
	}

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->kamar->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $kamar) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $kamar->id_kamar;
			$row[] = $kamar->nomor_kamar;
			$row[] = $kamar->status;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_kamar('."'".$kamar->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			// <a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_kamar('."'".$kamar->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_kamar('."'".$kamar->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->kamar->count_all(),
						"recordsFiltered" => $this->kamar->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_booking()
	{
		$list = $this->kamar->get_datatables_booking();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $kamar) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $kamar->id_kamar;
			$row[] = $kamar->nomor_kamar;
			$row[] = $kamar->status;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_kamar('."'".$kamar->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			// <a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_kamar('."'".$kamar->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_kamar('."'".$kamar->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->kamar->count_all(),
						"recordsFiltered" => $this->kamar->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_isi()
	{
		$list = $this->kamar->get_datatables_isi();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $kamar) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $kamar->id_kamar;
			$row[] = $kamar->nomor_kamar;
			$row[] = $kamar->status;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_kamar('."'".$kamar->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_kamar('."'".$kamar->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->kamar->count_all(),
						"recordsFiltered" => $this->kamar->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->kamar->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_detail($id)
	{
		$data = $this->kamar->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
                'tgl_input' => $this->input->post('tgl_input'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
				'tgl_masuk' => $this->input->post('tgl_masuk'),
                'tgl_keluar' => $this->input->post('tgl_keluar'),
				'tipe_kamar' => $this->input->post('tipe_kamar'),
				'jumlah_kamar' => $this->input->post('jumlah_kamar'),
				'metode_bayar' => $this->input->post('metode_bayar'),
				'harga' => $this->input->post('harga'),
				'dp' => $this->input->post('dp'),
				'total' => $this->input->post('total'),
				'no_kartu' => $this->input->post('no_kartu'),
                'status' => $this->input->post('status'),
                'ket' => $this->input->post('ket'),
			);
		$insert = $this->kamar->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
            	'tgl_input' => $this->input->post('tgl_input'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
				'tgl_masuk' => $this->input->post('tgl_masuk'),
                'tgl_keluar' => $this->input->post('tgl_keluar'),
				'tipe_kamar' => $this->input->post('tipe_kamar'),
				'jumlah_kamar' => $this->input->post('jumlah_kamar'),
				'metode_bayar' => $this->input->post('metode_bayar'),
				'harga' => $this->input->post('harga'),
				'dp' => $this->input->post('dp'),
				'total' => $this->input->post('total'),
				'no_kartu' => $this->input->post('no_kartu'),
                'status' => $this->input->post('status'),
                'ket' => $this->input->post('ket'),
			);
		$this->kamar->update(array('id_booking' => $this->input->post('id_booking')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update_cekout()
	{
		$this->load->database();
		$this->load->model('M_formcekout'); //load model mkota yang berada di folder model
	    $this->load->model('m_dashboard');
	    $databooking = $this->M_formcekout->ambilbooking($this->input->post("kode"))->row();
	    $nomorkamar = $databooking->nomor_kamar;
		$datakamar = array(
	    	'nomor_kamar' => $nomorkamar,
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
		$this->m_dashboard->Update('kamar',$dataupdate,$datakamar);
		$this->kamar->Update('booking',$data,$id);
		redirect('dashboard/datakamar');
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
		$this->kamar->Update('booking',$data,$acc);
		redirect('dashboard/lapharian');
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->kamar->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
