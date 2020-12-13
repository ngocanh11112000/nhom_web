<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
	}

	public function index()
	{
		 // phần thông tin shop như địa chỉ số điện thoại
    $dt['shop'] = $this->contact_model->get_all();
// mạng xã hội
		  $st['mangxh']= $this->contact_model->mangxh();
    $this->load->view('pages/header',$dt);
    $this->load->view('pages/Product-detail',$dt);
     $this->load->view('pages/footer',$dt);
	}

}

/* End of file Product-detail.php */
/* Location: ./application/controllers/Product-detail.php */