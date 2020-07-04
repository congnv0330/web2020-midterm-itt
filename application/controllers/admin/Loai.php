<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loai extends CI_Controller 
{
	public function index()
	{
		$this->load->model('Loai_model');
		$loai = $this->Loai_model->getAll();
		$this->load->view('admin/Loai/index', [
			'loais'=> $loai
		]);
  }
    
  public function create()
	{
		$this->load->view('admin/Loai/create');
	}
	
	
  public function edit()
	{
		$this->load->view('admin/Loai/edit');
  }
}





