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

	public function get_upcoming_appointment_timeslots($date){
		$this->db->where('date',$date);
		$q = $this->db->get('appointment');
		return $q->result();
	}

	public function get_upcoming_appointments(){
		$this->db->distinct();
		$this->db->select('date');
		$q = $this->db->get('appointment');
		return $q->result();
	}

	public function get_appointment_data($id){
		$this->db->where('id',$id);
		$q = $this->db->get('appointment_queue');
		return $q->result_array();
	}

	public function add_appointment($id){
		$this->db->where('id',$id);
		$q = $this->db->get('appointment_queue');
		foreach ($q->result_array() as $row)
		{
		   $fname=$row['firstname'];
		   $lname=$row['lastname'];
		   $mname=$row['middlename'];
		   $conno=$row['contactno'];
		   $ptype=$row['patienttype'];
		   $date=$row['date'];
		   $time=$row['time'];
		}
		$info = array('firstname'=>$fname,
					  'lastname'=>$lname,
					  'middlename'=>$mname,
					  'contactno'=>$conno,
					  'patienttype'=>$ptype,
					  'date'=>$date,
					  'time'=>$time);
		$this->db->insert('appointment',$info);
		$this->db->where('date',$date);
		$this->db->delete('appointment_queue');
	}

	public function remove_pending_appointment($id){
		$this->db->where('id',$id);
		$this->db->delete('appointment_queue');
	}

}