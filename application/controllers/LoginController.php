<?php 

class LoginController extends CI_Controller
{
	public function index(){
		$this->load->view('index');
	}

	public function userLogin(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run()){
			$email=$this->input->post('email');
			$password=$this->input->post('password');

			$this->load->model('Registers');
			$dataemail=$this->Registers->getUser($email);

			if ($dataemail==null) {
				$this->session->set_flashdata('message','Email did not exits');
				redirect(base_url().'Navigation/signUp','refresh');
				//echo "error 1";
			}
			else{
				if ($dataemail->password==$password){
					$session_data=array('email'=>$dataemail->email,'usertype'=>$dataemail->usertype);
					$this->session->set_userdata($session_data);

					if ($dataemail->usertype=='normal') {
						redirect(base_url().'Normalcontroller/');
						//echo "error 2";
					}
					else if($dataemail->usertype=='admin'){
						redirect(base_url().'Admincontroller');
						//echo "error 3";
					}
				}
				else{
					$this->session->set_flashdata('message','Password did not match');
					redirect(base_url().'Navigation/signUp','refresh');
					//echo "error 4";
				}
			}
		}
		else{
			//echo "error 5 ";
			redirect(base_url().'Navigation','refresh');
		}
	}

}
?>