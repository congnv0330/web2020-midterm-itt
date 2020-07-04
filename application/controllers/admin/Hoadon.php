<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hoadon extends CI_Controller 
{
	public function index()
	{
		$this->load->view('admin/Hoadon/index');
  }
 
  public function create()
	{
		$this->load->view('admin/Hoadon/create');
	}
	
	
  public function edit()
	{
		$this->load->view('admin/Hoadon/edit');
  }
}





