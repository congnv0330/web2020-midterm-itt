<?php

class Khachhang_model extends CI_Model 
{
	protected $table = 'KhachHang';

	public function getAll()
	{
		return $this->db->get($this->$table)->result_array();
	}

	public function getByMaKH($MaKH)
	{
		return $this->db->get_where($this->table, ['MaKH' => $MaKH])->row_array();
	}

	public function create($params)
    {
		$this->db->insert($this->table, $params);
		return $this->db->insert_id();
	}
	
    public function update($MaKH, $params)
    {
		$this->db->where('MaKH', $MaKH);
		return $this->db->update($this->table, $params);
	}
	
    public function delete($MaKH)
    {
        return $this->db->delete($this->table, ['MaKH'=> $MaKH]);
    }
}
