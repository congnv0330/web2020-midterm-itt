<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HangHoa extends CI_Controller 
{
	public function index()
	{
		$this->load->model('Hanghoa_model');
		$hanghoa = $this->Hanghoa_model->getAll();
		$this->load->view('admin/Hanghoa/index', [
			'hanghoa'=> $hanghoa
		]);
  }
 
  public function create()
	{
		$this->load->model('Loai_model');
		$loais = $this->Loai_model->getAll();
		$this->load->view('admin/Hanghoa/create',[
			'loais'=> $loais
		]);
	}
	
	
  public function edit($MaHH)
	{
		$this->load->model('Hanghoa_model');
		$this->load->model('Loai_model');
		$hanghoa = $this->Hanghoa_model->getById($MaHH);
		$loais = $this->Loai_model->getAll();
		$this->load->view('admin/Hanghoa/edit',[
			'hanghoa'=> $hanghoa,
			'loais'=> $loais
		]);
	}
	
	public function store(){
		$params = $this->input->post();
		$this->load->model('Hanghoa_model');
		$this->Hanghoa_model->create($params);
		redirect(base_url('index.php/admin/Hanghoa/index'));
	}

	public function update($MaHH){
		$params = $this->input->post();
		$this->load->model('Hanghoa_model');
		$this->Hanghoa_model->update($MaHH,$params);
		redirect(base_url('index.php/admin/Hanghoa/index'));
	}

	public function delete($MaHH){
		$this->load->model('Hanghoa_model');
		$this->Hanghoa_model->delete($MaHH);
		redirect(base_url('index.php/admin/Hanghoa/index'));
	}
}





