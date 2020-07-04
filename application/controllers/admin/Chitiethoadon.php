<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chitiethoadon extends CI_Controller 
{
	public function index()
	{
		$this->load->view('admin/Chitiethoadon/index');
  }
 
  public function create()
	{
		$this->load->view('admin/Chitiethoadon/create');
	}
	
	
  public function edit()
	{
		$this->load->view('admin/Chitiethoadon/edit');
  }
}





