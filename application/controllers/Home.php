<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
		$this->load->model('Hanghoa_model');
		$hanghoas = $this->Hanghoa_model->getAll();
		$this->load->view('index', [
			'hanghoas' => $hanghoas
		]);
	}

	public function hoadon()
	{
		$this->load->view('hoadon');
	}
}
