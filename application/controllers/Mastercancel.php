<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mastercancel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cancel','cancel');
	}

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->cancel->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $cancel) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $cancel->id_booking;
			$row[] = $cancel->tgl_input;
			$row[] = $cancel->nama;
            $row[] = $cancel->tipe_kamar;
			$row[] = $cancel->no_hp;
            $row[] = $cancel->alamat;
			$row[] = $cancel->tgl_masuk;
            $row[] = $cancel->tgl_keluar;
			$row[] = $cancel->status;
			$row[] = $cancel->no_kartu;
			$row[] = $cancel->ket;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_booking('."'".$cancel->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			// <a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_booking('."'".$cancel->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_booking('."'".$cancel->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->cancel->count_all(),
						"recordsFiltered" => $this->cancel->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_listbyTgl()
	{
		$list = $this->cancel->get_by_tgl();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $cancel) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $cancel->id_booking;
			$row[] = $cancel->tgl_input;
			$row[] = $cancel->nama;
            $row[] = $cancel->tipe_kamar;
			$row[] = $cancel->no_hp;
            $row[] = $cancel->alamat;
			$row[] = $cancel->tgl_masuk;
            $row[] = $cancel->tgl_keluar;
			$row[] = $cancel->status;
			$row[] = $cancel->no_kartu;
			$row[] = $cancel->ket;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_booking('."'".$cancel->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_booking('."'".$cancel->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->cancel->count_all(),
						"recordsFiltered" => $this->cancel->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->cancel->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_detail($id)
	{
		$data = $this->cancel->get_by_id($id);
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
				'nomor_kamar' => $this->input->post('nomor_kamar'),
				'jumlah_kamar' => $this->input->post('jumlah_kamar'),
				'metode_bayar' => $this->input->post('metode_bayar'),
				'harga' => $this->input->post('harga'),
				'dp' => $this->input->post('dp'),
				'total' => $this->input->post('total'),
				'no_kartu' => $this->input->post('no_kartu'),
                'status' => $this->input->post('status'),
                'ket' => $this->input->post('ket'),
			);
		$insert = $this->cancel->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->load->database();
	    $this->load->model('m_dashboard');
	    $jumkamar = $this->input->post("jumlah_kamar");
	    $nokamar = $this->input->post("nomor_kamar");
	    $nosatukamar = substr($nokamar,0,3);
	    for ($i=0; $i < $jumkamar; $i++) { 
	    	$datakamar = array(
		    	'nomor_kamar' => $nosatukamar,
		    );
	    	$dataupdate = array(
		    	'status' => $this->input->post('status'),
	    	);
	    	$this->m_dashboard->Update('kamar',$dataupdate,$datakamar);
	    	$nosatukamar=$nosatukamar+1;
	    }
		// $datakamar = array(
	 //    	'nomor_kamar' => $this->input->post("nomor_kamar"),
	 //    	);
	 //    $dataupdate = array(
	 //    	'status' => $this->input->post('status'),
	 //    	);
		$data = array(
            	'tgl_input' => $this->input->post('tgl_input'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
				'tgl_masuk' => $this->input->post('tgl_masuk'),
                'tgl_keluar' => $this->input->post('tgl_keluar'),
				'tipe_kamar' => $this->input->post('tipe_kamar'),
				'nomor_kamar' => $this->input->post('nomor_kamar'),
				'jumlah_kamar' => $this->input->post('jumlah_kamar'),
				'metode_bayar' => $this->input->post('metode_bayar'),
				'harga' => $this->input->post('harga'),
				'dp' => $this->input->post('dp'),
				'total' => $this->input->post('total'),
				'no_kartu' => $this->input->post('no_kartu'),
                'status' => $this->input->post('status'),
                'ket' => $this->input->post('ket'),
			);
		$this->cancel->update(array('id_booking' => $this->input->post('id_booking')), $data);
		// $this->m_dashboard->Update('kamar',$dataupdate,$datakamar);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->cancel->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
