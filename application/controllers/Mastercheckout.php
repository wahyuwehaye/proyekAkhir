<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mastercheckout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_checkout','checkout');
	}

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->checkout->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $checkout) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $checkout->tgl_input;
			$row[] = $checkout->nama;
            $row[] = $checkout->tipe_kamar;
			$row[] = $checkout->no_hp;
            $row[] = $checkout->alamat;
			$row[] = $checkout->tgl_masuk;
            $row[] = $checkout->tgl_keluar;
			$row[] = $checkout->status;
			$row[] = $checkout->no_kartu;
			$row[] = $checkout->ket;

			//add html for action
			$row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_checkout('."'".$checkout->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_checkout('."'".$checkout->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_checkout('."'".$checkout->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->checkout->count_all(),
						"recordsFiltered" => $this->checkout->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_listHarian()
	{
		$list = $this->checkout->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $checkout) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $checkout->tgl_input;
			$row[] = $checkout->nama;
            $row[] = $checkout->tipe_kamar;
			$row[] = $checkout->no_hp;
            $row[] = $checkout->alamat;
			$row[] = $checkout->tgl_masuk;
            $row[] = $checkout->tgl_keluar;
			$row[] = $checkout->status;
			$row[] = $checkout->no_kartu;
			$row[] = $checkout->ket;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_checkout('."'".$checkout->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			// <a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_checkout('."'".$checkout->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_checkout('."'".$checkout->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->checkout->count_all(),
						"recordsFiltered" => $this->checkout->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_listbyTgl()
	{
		$list = $this->checkout->get_by_tgl();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $checkout) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $checkout->tgl_input;
			$row[] = $checkout->nama;
            $row[] = $checkout->tipe_kamar;
			$row[] = $checkout->no_hp;
            $row[] = $checkout->alamat;
			$row[] = $checkout->tgl_masuk;
            $row[] = $checkout->tgl_keluar;
			$row[] = $checkout->status;
			$row[] = $checkout->no_kartu;
			$row[] = $checkout->ket;

			//add html for action
			$row[] = '<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_checkout('."'".$checkout->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_checkout('."'".$checkout->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->checkout->count_all(),
						"recordsFiltered" => $this->checkout->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->checkout->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_detail($id)
	{
		$data = $this->checkout->get_by_id($id);
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
		$insert = $this->checkout->save($data);
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
		$this->checkout->update(array('id_booking' => $this->input->post('id_booking')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->checkout->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
