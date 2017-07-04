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
            $row[] = $bukti->id_transaksi;
			// $row[] = $bukti->photo;
			if($bukti->photo)
				$row[] = '<a href="'.base_url('upload-foto/'.$bukti->photo).'" target="_blank"><img src="'.base_url('upload-foto/'.$bukti->photo).'" class="img-responsive" /></a>';
			else
				$row[] = '(No photo)';
			$row[] = $bukti->tgl;

			//add html for action
			// $row[] = '<a class="btn btn-xs btn-success" href="javascript:void(0)" title="Konfirmasi" onclick="edit_bukti('."'".$bukti->id_transaksi."'".')"><i class="glyphicon glyphicon-send"> Konfirmasi</i></a>';
			$row[] = '<form method="post" class="f1" action="Mastersms/ajax_konfirm">
				<input type="hidden" class="form-control" id="DestinationNumber" name="DestinationNumber" value=".$bukti->id_transaksi." placeholder="Nomor Handphone">
				<input type="hidden" class="form-control" id="DestinationNumber" name="DestinationNumber" value="081312555467" placeholder="Nomor Handphone">
				<input type="hidden" class="form-control" id="TextDecoded" value="coba" name="TextDecoded" placeholder="Nomor Handphone">
				<input type="hidden" class="form-control" id="CreatorID" name="CreatorID" value="Admin" placeholder="Pengirim">
				<button class="btn btn-xs btn-success" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"> Konfirmasi</i></button>
			</form';

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

	public function ajax_sendsms(){
		$idBooking = $this->db->query("select no_hp from booking where id_booking='1'")->row();
                $idBooking = $idBooking->no_hp;
		// $idbooking = $this->input->post('id_transaksi');
		// $idnya = $this->db->query("select no_hp from booking where id_booking='1'");
  //       foreach($idnya->result() as $row) {
  //           $id =  $row->no_hp;
  //       }
		$data = array(
                'DestinationNumber' => $idBooking,
				'TextDecoded' => $this->input->post('TextDecoded'),
				'CreatorID' => $this->input->post('CreatorID'),
			);
		$insert = $this->sms->save($data);
		echo json_encode(array("status" => TRUE));
		redirect('dashboard/daftarsms');
	}

	public function ajax_delete($id)
	{
		$this->bukti->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
