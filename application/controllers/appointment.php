<?php
class Appointment extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('gayatin_appointment_model');
	}

	public function new_appointment(){
		$data['val']=0;
		$this->load->view('appointment/appointment_issue',$data);
	}

	public function add_appointment(){
		if($this->input->post('fname')!=""){
			$data = array('firstname' =>  mysql_real_escape_string($this->input->post('fname')),
						  'lastname' => mysql_real_escape_string($this->input->post('lname')),
						  'middlename' => mysql_real_escape_string($this->input->post('mname')),
						  'mobileno' => mysql_real_escape_string($this->input->post('cnum')),
						  'telno' => mysql_real_escape_string($this->input->post('tnum')),
						  'patienttype' => mysql_real_escape_string($this->input->post('ptype')),
						  'date' => mysql_real_escape_string($this->input->post('date')),
						  'time' => mysql_real_escape_string($this->input->post('time')));
			
			$today = strtotime(date("Y-m-d"));
			$adate = strtotime($this->input->post('date'));
			if($adate>$today){
			//DO TEXT
				$chk = $this->gayatin_appointment_model->check_scheduled_appointment($data);
				if($chk == 0){
					$this->gayatin_appointment_model->add_appointment_queue($data);
					echo "<script>alert('Successfully added to queue.');</script>";
					if($this->session->userdata('username')){
						echo "<meta http-equiv=Refresh content=0;url=../appointment/view_appointment_queue>";
					}
					else{
						$data['val'] = 1;
						$this->load->view('appointment/appointment_issue',$data);
					}
				}
				else{
					echo "<script>alert('Scheduled time for the picked date is already taken. Please pick another time/date.');</script>";
					echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
				}
			}
			else{
				echo "<script>alert('Scheduled appointment should be at least a day prior to the schedule.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}
		else 
			redirect('appointment/new_appointment');
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
			$data['date']=$date;
			$this->load->view('appointment/appointment_queue_time',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function view_upcoming_appointments_timeslots($date){
		if($this->session->userdata('username')){
			$data['time_reservations'] = $this->gayatin_appointment_model->get_upcoming_appointment_timeslots($date);
			$data['date']=$date;
			$this->load->view('appointment/appointment_upcoming_timeslots',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function accept_appointment($id){
		if($this->session->userdata('username')){
			$this->gayatin_appointment_model->add_appointment($id);
			echo "<script>alert('Appointment successfully updated.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../view_upcoming_appointments>";
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function remove_pending_appointment($date,$id){
		if($this->session->userdata('username')){
			$this->gayatin_appointment_model->remove_pending_appointment($id);
			echo "<script>alert('Appointment request successfully removed.');</script>";
			redirect('appointment/view_appointment_queue_time/'.$date);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function view_upcoming_appointments(){
		if($this->session->userdata('username')){
			$data['dates'] = $this->gayatin_appointment_model->get_upcoming_appointments();
			$this->load->view('appointment/appointment_upcoming',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}		
	}
}
