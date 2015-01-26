<?php
class Gayatin_appointment_model extends CI_Model{

	public function add_appointment_queue($data){
		$this->db->insert('appointment_queue',$data);
	}

	public function get_pending_appointment(){
		$this->db->distinct();
		$this->db->select('date');
		$q = $this->db->get('appointment_queue');
		return $q->result();
	}

	public function get_pending_appointment_time($date){
		$this->db->where('date',$date);
		$q = $this->db->get('appointment_queue');
		return $q->result();
	}

}