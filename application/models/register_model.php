<?php
class register_model extends CI_Model{
public function __construct(){
parent::__construct();
}
public function index(){


	$data= array( 
		' firstname'=>$this->input->post('firstname'),
		' lastname'=>$this->input->post('lastname'),

		'email'=>($this->input->post('email')),
		'mobile'=>$this->input->post('mobile'),
		
		'password'=>($this->input->post('password'))
	);
 

$this->db->insert('dangnhap',$data);
$userid=$this->db->insert_id();//Lấy ID vừa insert được chính là user id.
return $userid;

}

public function check_email($email){
	$email=($this->input->post('email'));
	$condition = "email =" . "'" . $email ."'";
		$this->db->select('*');
		$this->db->from('dangnhap');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
		return true;
		} else {
		return false;
		}
		}
 //trả về số dòng của kết quả truy vấn


}
?>

