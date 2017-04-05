<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterdatatipekamar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_tipekamar','tipe_kamar');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->tipe_kamar->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $tipe_kamar) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $tipe_kamar->nama_kamar;
			$row[] = $tipe_kamar->harga_kamar_weekday;
            $row[] = $tipe_kamar->harga_kamar_weekend;
			$row[] = $tipe_kamar->penjelasan;

			//add html for action
			$row[] = '<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_tipe_kamar('."'".$tipe_kamar->id_tipe_kamar."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_tipe_kamar('."'".$tipe_kamar->id_tipe_kamar."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->tipe_kamar->count_all(),
						"recordsFiltered" => $this->tipe_kamar->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->tipe_kamar->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'nama_kamar' => $this->input->post('nama_kamar'),
				'harga_kamar_weekday' => $this->input->post('harga_kamar_weekday'),
                'harga_kamar_weekend' => $this->input->post('harga_kamar_weekend'),
				'penjelasan' => $this->input->post('penjelasan'),
			);
		$insert = $this->tipe_kamar->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
            'nama_kamar' => $this->input->post('nama_kamar'),
            'harga_kamar_weekday' => $this->input->post('harga_kamar_weekday'),
            'harga_kamar_weekend' => $this->input->post('harga_kamar_weekend'),
			'penjelasan' => $this->input->post('penjelasan'),
			);
		$this->tipe_kamar->update(array('id_tipe_kamar' => $this->input->post('id_tipe_kamar')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->tipe_kamar->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
