<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
		var_dump($this->session->userdata('hanghoas'));return;
		$this->load->model('Hanghoa_model');
		$hanghoas = $this->Hanghoa_model->getAll();
		$this->load->view('index', [
			'hanghoas' => $hanghoas
		]);
	}

	public function hoadon($id)
	{
		$this->load->model('Hanghoa_model');
		$hanghoa = $this->Hanghoa_model->getById($id);
		$this->load->view('hoadon', [
			'hanghoa' => $hanghoa
		]);
	}

	public function storeHH($id)
	{
		$old = $this->session->has_userdata('hanghoas') ? explode(',', $this->session->userdata('hanghoas')) : [];
		$old[] = $id;
		$this->session->set_userdata('hanghoas', implode(',' , $old));
		redirect(base_url());
	}

	public function confirm()
	{
		$this->load->model('Hoadon_model');
		$this->load->model('Chitiethoadon_model');

		$tenKH = $this->input->post('TenKH');
		$MaHH = $this->input->post('MaHH');

		$donGia = $this->input->post('DonGia');
		$tong = 0;

		$MaHH = array_count_values($MaHH);

		foreach ($donGia as $gia) {
			$tong += $gia;
		}

		$id = $this->Hoadon_model->create(['TenKH' => $tenKH, 'TongTien' => $tong]);

		foreach ($MaHH as $key => $count) {
			$this->Chitiethoadon_model->create(['MaHD' => $id, 'MaHH' => $key, 'SoLuong' => $count]);
		}

		redirect(base_url());
	}
}
