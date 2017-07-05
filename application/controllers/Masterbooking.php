<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterbooking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_booking','booking');
	}

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->booking->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $booking) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $booking->id_booking;
			$row[] = $booking->tgl_input;
			$row[] = $booking->nama;
            $row[] = $booking->tipe_kamar;
			$row[] = $booking->no_hp;
            $row[] = $booking->alamat;
			$row[] = $booking->tgl_masuk;
            $row[] = $booking->tgl_keluar;
			$row[] = $booking->status;
			$row[] = $booking->no_kartu;
			$row[] = $booking->ket;

			//add html for action
			$row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_booking('."'".$booking->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_booking('."'".$booking->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_booking('."'".$booking->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->booking->count_all(),
						"recordsFiltered" => $this->booking->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_listbyTgl()
	{
		$list = $this->booking->get_by_tgl();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $booking) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $booking->id_booking;
			$row[] = $booking->tgl_input;
			$row[] = $booking->nama;
            $row[] = $booking->tipe_kamar;
			$row[] = $booking->no_hp;
            $row[] = $booking->alamat;
			$row[] = $booking->tgl_masuk;
            $row[] = $booking->tgl_keluar;
			$row[] = $booking->status;
			$row[] = $booking->no_kartu;
			$row[] = $booking->ket;

			//add html for action
			$row[] = '<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_booking('."'".$booking->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_booking('."'".$booking->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->booking->count_all(),
						"recordsFiltered" => $this->booking->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->booking->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_detail($id)
	{
		$data = $this->booking->get_by_id($id);
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
		$insert = $this->booking->save($data);
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
		$this->booking->update(array('id_booking' => $this->input->post('id_booking')), $data);
		// $this->m_dashboard->Update('kamar',$dataupdate,$datakamar);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->booking->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
