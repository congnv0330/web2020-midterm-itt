<?php

class Loai_model extends CI_Model 
{
	protected $table = 'loai';

	public function getAll()
	{
		return $this->db->get($this->table)->result_array();
	}

	public function getById($MaLoai)
	{
		return $this->db->get_where($this->table, ['MaLoai' => $MaLoai])->row_array();
	}

	public function create($params)
    {
		$this->db->insert($this->table, $params);
		return $this->db->insert_id();
	}
	
    public function update($MaLoai, $params)
    {
		$this->db->where('MaLoai', $Maloai);
		return $this->db->update($this->table, $params);
	}
	
    public function delete($MaLoai)
    {
        return $this->db->delete($this->table, ['MaLoai'=> $MaLoai]);
    }
}
