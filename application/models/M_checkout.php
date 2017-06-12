<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_checkout extends CI_Model {

	var $table = 'booking';
	var $table1 = 'notifikasi';
	var $column_order = array('tgl_input','nama','tipe_kamar','no_hp','alamat','tgl_masuk','tgl_keluar','status','no_kartu','ket',null); //set column field database for datatable orderable
	var $column_search = array('tgl_input','nama','tipe_kamar','no_hp','alamat','tgl_masuk','tgl_keluar','status','no_kartu','ket'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id_booking' => 'desc'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

// untuk tabel checkout
	private function _get_datatables_query()
	{

		$this->db->from($this->table);
		$this->db->where('status','Check Out');

		$i = 0;

		foreach ($this->column_search as $item) // loop column
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{

				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	// untuk tabel laporan harian
	private function _get_datatables_query_harian()
	{

		$this->db->from($this->table);
		$this->db->where('status','Check Out');
		$this->db->where('acc','Resepsionis');

		$i = 0;

		foreach ($this->column_search as $item) // loop column
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{

				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables_harian()
	{
		$this->_get_datatables_query_harian();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_booking',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_by_tgl()
	{
		$date = new DateTime("now");

		 $curr_date = $date->format('Y-m-d ');

		 $this->db->select('*');
		 $this->db->from('id_booking');
		 $this->db->where((date('Y-m-d', 'tgl_input')),$curr_date);//use date function
		 $query = $this->db->get();
		    return $query->result();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function saveNotif($data)
	{
		$this->db->insert($this->table1, $data);
		return $this->db->insert_id();
	}

	// public function update($where, $data)
	// {
	// 	$this->db->update($this->table, $data, $where);
	// 	return $this->db->affected_rows();
	// }

	public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }

	public function delete_by_id($id)
	{
		$this->db->where('id_booking', $id);
		$this->db->delete($this->table);
	}


}
