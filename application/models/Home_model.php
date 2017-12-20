<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	
	 function __construct()
    {
        parent::__construct();
    }

	public function get_all()
	{
		$this->db->order_by('tanggal', 'DESC');
		$this->db->limit(10);
		$this->db->where('aktif',1);
		return $this->db->get('artikel')->result();
	}	

	public function populer()
	{
		$this->db->order_by('lihat', 'DESC');
		$this->db->limit(2);
		$this->db->where('aktif',1);
		return $this->db->get('artikel')->result();
	}
	public function terbaru()
	{
		$this->db->order_by('tanggal', 'DESC');
		$this->db->limit(3);
		$this->db->where('aktif',1);
		return $this->db->get('artikel')->result();
	}
	public function random()
	{
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$this->db->where('aktif',1);
		return $this->db->get('artikel')->result();
	}

	public function read($check)
	{	
		$this->db->like('title', $check);
		$query = $this->db->get('artikel');
		return $query->result();

		
	}
	public function random2()
	{
		$this->db->order_by('rand()');
		$this->db->limit(3);
		$this->db->where('aktif',1);
		return $this->db->get('artikel')->result();
	}

	public function iklan()
	{
		$this->db->get('iklan')->result();
	}
	public function itung($nilai,$id){
		$this->db->where($id);
		$this->db->set($nilai);
		$this->db->update('artikel');
	}

	public function session_view($id)
	{	
		
		$this->db->set('lihat', 'lihat+1', FALSE);
		$this->db->like('title', $id);
		$this->db->update('artikel');
	}
}
/* Location: ./application/models/Home_model.php */

/* End of file Home_model.php */