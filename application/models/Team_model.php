<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_model extends CI_Model
{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_data($id, $select = NULL){
		if(!empty($select)){
			$this->db->select($select);
		}
		$this->db->from("team");
		$this->db->where("member_id",$id);
		return $this->db->get();
	}

	public function insert($data){
		$this->db->insert("team",$data);
	}

	public function update($id, $data){
		$this->db->where("member_id",$id);
		$this->db->update("team", $data);
	}

	public function delete($id){
		$this->db->where("member_id",$id);
		$this->db->delete("team");
	}

	public function is_duplicated($field,$value, $id = NULL){
		if(!empty($id)){
			$this->db->where("member_id <>",$id);
		}
		$this->db->from("team");
		$this->db->where($field,$value);

		return $this->get()->num_rows() > 0;
	}
}