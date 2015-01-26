<?php
class Appointment extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('gayatin_appointment_model');
	}

	public function new_appointment(){
		if($this->session->userdata('username')){
			$this->load->view('appointment/appointment_issue');
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function add_appointment(){
		if($this->session->userdata('username')&&$this->input->post('fname')!=""){
			$data = array('firstname' =>  mysql_real_escape_string($this->input->post('fname')),
						  'lastname' => mysql_real_escape_string($this->input->post('lname')),
						  'middlename' => mysql_real_escape_string($this->input->post('mname')),
						  'contactno' => mysql_real_escape_string($this->input->post('cnum')),
						  'patienttype' => mysql_real_escape_string($this->input->post('ptype')),
						  'date' => mysql_real_escape_string($this->input->post('date')),
						  'time' => mysql_real_escape_string($this->input->post('time')));
			
			$today = strtotime(date("Y-m-d"));
			$adate = strtotime($this->input->post('date'));
			if($adate>$today){
			//DO TEXT
			$this->gayatin_appointment_model->add_appointment_queue($data);
			echo "<script>alert('Successfully added to queue.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../appointment/view_appointment_queue>";
			}
			else{
				echo "<script>alert('Scheduled appointment should be a day prior to the schedule.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}
		else if($this->session->userdata('username')&&$this->input->post('fname')==""){
			redirect('appointment/new_appointment');
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function view_appointment_queue(){
		if($this->session->userdata('username')){
			$data['dates'] = $this->gayatin_appointment_model->get_pending_appointment();
			$this->load->view('appointment/appointment_queue',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function view_appointment_queue_time($date){
		if($this->session->userdata('username')){
			$data['time_reservations'] = $this->gayatin_appointment_model->get_pending_appointment_time($date);
			$this->load->view('appointment/appointment_queue_time',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

}
