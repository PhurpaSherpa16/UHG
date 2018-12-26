<?php 
class Registercontroller extends  CI_Controller
{
	
	public function userRegister()
	{
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$gender=$this->input->post('gender');
		$phonenumber=$this->input->post('phonenumber');
		$country=$this->input->post('country');
		$city=$this->input->post('city');

		$this->load->model('Registers');
		$message=$this->Registers->create($firstname,$lastname,$email,$password,$gender,$phonenumber,$country,$city);
		$data['message']=$message;
		$this->load->view("index",$data);

	}
}
?>