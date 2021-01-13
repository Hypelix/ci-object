<?php
class Test_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	public function TestRegister($data)
	{
		$this->db->insert('tbl_test',$data);
		return true;
	}

	public function TestUpdate($data)
	{

		$updatedata = array('test1' => $data['test1'],
					'test2' => $data['test2'],
					'test3' => $data['test3'],
					'test4' => $data['test4']			
			);
		$this->db->set($updatedata);
		$this->db->where('test_id',$data['test_id']);
		$this->db->update('tbl_test');				
	
	}

	public function getTest()
	{
		$this->db->select('*');
        $this->db->from('tbl_test');
		$query = $this->db->get();
		return $query->result();
	}

		public function getTestbyId($id)
	{
		$this->db->select('*');
        $this->db->from('tbl_test');
        $this->db->where('test_id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	
	function delete_test($test_id) {
		$this->db->where('test_id', $test_id);
		$this->db->delete('tbl_test');
	}



	



}
