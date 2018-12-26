<?php 

class Registers extends CI_Model
{
	public function create($firstname,$lastname,$email,$password,$gender,$phonenumber,$country,$city){
			$data = array(
				'firstname' => $firstname,
				'lastname' =>$lastname,
				'email'=>$email,
				'password'=>$password,
				'phonenumber'=>$phonenumber,
				'country'=>$country,
				'city'=>$city,
				'usertype'=>'normal',
				'profilepicture'=>'profilepicture.jpg',
				'gender'=>$gender
			);
			$insert=$this->db->insert('user',$data);
			if ($insert>0) {
				return "User Succesfully Register";
			}
			return "User Creation Failed";
			}

	public function getUser($email=''){
			$this->db->where('email',$email);
			$query=$this->db->get('user');
			$data=$query->row();
			return $data;
	}
}	
?>