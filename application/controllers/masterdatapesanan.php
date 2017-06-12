<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterdatapesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pesanan','pesanan');
	}

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->pesanan->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $pesanan) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $pesanan->id_booking;
			$row[] = $pesanan->tgl_input;
			$row[] = $pesanan->nama;
            $row[] = $pesanan->tipe_kamar;
			$row[] = $pesanan->no_hp;
            $row[] = $pesanan->alamat;
			$row[] = $pesanan->tgl_masuk;
            $row[] = $pesanan->tgl_keluar;
			$row[] = $pesanan->status;
			$row[] = $pesanan->no_kartu;
			$row[] = $pesanan->ket;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_pesanan('."'".$pesanan->id_tamu."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			// <a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_pesanan('."'".$pesanan->id_tamu."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_pesanan('."'".$pesanan->id_tamu."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->pesanan->count_all(),
						"recordsFiltered" => $this->pesanan->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_saran()
	{
		$list = $this->pesanan->get_datatables_saran();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $pesanan) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $pesanan->nama;
			$row[] = $pesanan->email;
            $row[] = $pesanan->message;
            $row[] = $pesanan->tanggal;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_pesanan('."'".$pesanan->id_tamu."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			// <a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_pesanan('."'".$pesanan->id_tamu."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_pesanan('."'".$pesanan->id_tamu."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->pesanan->count_all(),
						"recordsFiltered" => $this->pesanan->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_listbyTgl()
	{
		$list = $this->pesanan->get_by_tgl();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $pesanan) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $pesanan->tgl_input;
			$row[] = $pesanan->nama_tamu;
            $row[] = $pesanan->tipe_kamar;
			$row[] = $pesanan->no_hp;
            $row[] = $pesanan->alamat_tamu;
			$row[] = $pesanan->tgl_masuk;
            $row[] = $pesanan->tgl_keluar;
			$row[] = $pesanan->status;

			//add html for action
			$row[] = '<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_pesanan('."'".$pesanan->id_tamu."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_pesanan('."'".$pesanan->id_tamu."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->pesanan->count_all(),
						"recordsFiltered" => $this->pesanan->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->pesanan->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_detail($id)
	{
		$data = $this->pesanan->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
                'tgl_input' => $this->input->post('tgl_input'),
				'nama_tamu' => $this->input->post('nama_tamu'),
				'alamat_tamu' => $this->input->post('alamat_tamu'),
                'no_hp' => $this->input->post('no_hp'),
				'tgl_masuk' => $this->input->post('tgl_masuk'),
                'tgl_keluar' => $this->input->post('tgl_keluar'),
				'tipe_kamar' => $this->input->post('tipe_kamar'),
                'harga_kamar' => $this->input->post('harga_kamar'),
				'jumlah_kamar' => $this->input->post('jumlah_kamar'),
                'status' => $this->input->post('status'),
			);
		$insert = $this->pesanan->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
            'tgl_input' => $this->input->post('tgl_input'),
            'nama_tamu' => $this->input->post('nama_tamu'),
            'alamat_tamu' => $this->input->post('alamat_tamu'),
            'no_hp' => $this->input->post('no_hp'),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'tgl_keluar' => $this->input->post('tgl_keluar'),
            'tipe_kamar' => $this->input->post('tipe_kamar'),
            'harga_kamar' => $this->input->post('harga_kamar'),
            'jumlah_kamar' => $this->input->post('jumlah_kamar'),
            'status' => $this->input->post('status'),
			);
		$this->pesanan->update(array('id_tamu' => $this->input->post('id_tamu')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->pesanan->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
