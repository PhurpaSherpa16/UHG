<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Navigation extends CI_Controller
{
	
	public function index(){
		$this->load->view('index');
	}

	public function nav(){
		$this->load->view('sidenavbar');
	}
	public function signUp(){
		$this->load->view('signup');
	}
	public function register(){
		$this->load->view('register');
	}
}

?>