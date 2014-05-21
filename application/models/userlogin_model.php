<?php if( !defined('BASEPATH')) exit('No direct script access allowed');
class Userlogin_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function login($uname,$pwd){
		$this->db->where("username",$uname);
		$this->db->where("password",$pwd);
		$query=$this->db->get("login");
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $rows) 
			{
				$newdata = array(
								'user_name' => $rows->username,
								'logged_in'=>TRUE,
							);
			}
		$this->session->set_userdata($newdata);
		return true;
		}
		return false;
	}

// function encryptIt( $q ) {
//     $cryptKey  = '5745b2d9552457192ccbfe3ebc53d491';
//     $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
//     return( $qEncoded );
// }	
}
?>