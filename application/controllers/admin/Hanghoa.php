<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HangHoa extends CI_Controller 
{
	public function index()
	{
		$this->load->view('admin/Hanghoa/index');
  }
 
  public function create()
	{
		$this->load->view('admin/Hanghoa/create');
	}
	
	
  public function edit()
	{
		$this->load->view('admin/Hanghoa/edit');
  }
}





