<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterdatanite extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_niteaudit','nite');
	}

	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('keuangan');
	}

	public function ajax_list()
	{
		$list = $this->nite->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $nite) {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $nite->id_booking;
			$row[] = $nite->tgl_input;
			$row[] = $nite->nama;
            $row[] = $nite->tipe_kamar;
			$row[] = $nite->no_hp;
            $row[] = $nite->alamat;
			$row[] = $nite->tgl_masuk;
            $row[] = $nite->tgl_keluar;
			$row[] = $nite->status;
			$row[] = $nite->no_kartu;
			$row[] = $nite->ket;
			// $row[] = $nite->status;
            //
			// //add html for action
			// $row[] = '<a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_nite('."'".$nite->id_tamu."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
			// 	  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_nite('."'".$nite->id_tamu."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->nite->count_all(),
						"recordsFiltered" => $this->nite->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->nite->get_by_id($id);
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
                // 'status' => $this->input->post('status'),
			);
		$insert = $this->nite->save($data);
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
            // 'status' => $this->input->post('status'),
			);
		$this->nite->update(array('id_tamu' => $this->input->post('id_tamu')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update_ke_resepsionis(){
		$this->load->database();
		$this->load->model('M_formcekout'); //load model mkota yang berada di folder model
	    $this->load->model('m_dashboard');
	    $acc = array(
	    	'acc' => 'Nite Audit',
	    	);
	    $data = array(
                'acc' => 'Resepsionis',
			);
		$this->nite->UpdateNite('booking',$data,$acc);
		redirect('dashboard/niteaudit');
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update_ke_keuangan(){
		$this->load->database();
		$this->load->model('M_formcekout'); //load model mkota yang berada di folder model
	    $this->load->model('m_dashboard');
	    $acc = array(
	    	'acc' => 'Nite Audit',
	    	);
	    $data = array(
                'acc' => 'Keuangan',
			);
		$this->nite->UpdateNite('booking',$data,$acc);
		redirect('dashboard/niteaudit');
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->nite->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
