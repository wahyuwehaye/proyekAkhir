<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterbukti extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bukti','bukti');
	}

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->bukti->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $bukti) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $bukti->bukti;
			$row[] = $bukti->tgl;

			//add html for action
			$row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Kirim" onclick="detail_bukti('."'".$bukti->id_bukti."'".')"><i class="glyphicon glyphicon-send"> Kirim</i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->bukti->count_all(),
						"recordsFiltered" => $this->bukti->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->bukti->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_detail($id)
	{
		$data = $this->bukti->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
                'bukti' => $this->input->post('bukti'),
				'tgl' => $this->input->post('tgl'),
				'id_transaksi' => $this->input->post('id_transaksi'),
			);
		$insert = $this->bukti->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
            'bukti' => $this->input->post('bukti'),
			'tgl' => $this->input->post('tgl'),
			'id_transaksi' => $this->input->post('id_transaksi'),
			);
		$this->bukti->update(array('id_bukti' => $this->input->post('id_bukti')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->bukti->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
