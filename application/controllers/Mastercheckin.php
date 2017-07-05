<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mastercheckin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_checkin','checkin');
	}

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->checkin->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $checkin) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $checkin->id_booking;
			$row[] = $checkin->tgl_input;
			$row[] = $checkin->nama;
            $row[] = $checkin->tipe_kamar;
			$row[] = $checkin->no_hp;
            $row[] = $checkin->alamat;
			$row[] = $checkin->tgl_masuk;
            $row[] = $checkin->tgl_keluar;
			$row[] = $checkin->status;
			$row[] = $checkin->no_kartu;
			$row[] = $checkin->ket;

			//add html for action
			$row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Detail" onclick="detail_checkin('."'".$checkin->id_booking."'".')"><i class="glyphicon glyphicon-info-sign"></i></a>
			<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_checkin('."'".$checkin->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_checkin('."'".$checkin->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->checkin->count_all(),
						"recordsFiltered" => $this->checkin->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_listbyTgl()
	{
		$list = $this->checkin->get_by_tgl();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $checkin) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $checkin->id_booking;
			$row[] = $checkin->tgl_input;
			$row[] = $checkin->nama;
            $row[] = $checkin->tipe_kamar;
			$row[] = $checkin->no_hp;
            $row[] = $checkin->alamat;
			$row[] = $checkin->tgl_masuk;
            $row[] = $checkin->tgl_keluar;
			$row[] = $checkin->status;
			$row[] = $checkin->no_kartu;
			$row[] = $checkin->ket;

			//add html for action
			$row[] = '<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_checkin('."'".$checkin->id_booking."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_checkin('."'".$checkin->id_booking."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->checkin->count_all(),
						"recordsFiltered" => $this->checkin->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->checkin->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_detail($id)
	{
		$data = $this->checkin->get_by_id($id);
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
		$insert = $this->checkin->save($data);
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
		$this->checkin->update(array('id_booking' => $this->input->post('id_booking')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->checkin->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
