<?php

class Hoadon_model extends CI_Model 
{
	protected $table = 'hoadon';

	public function getAll()
	{
		return $this->db->get($this->table)->result_array();
	}

	public function getByMaHD($MaHD)
	{
		return $this->db->get_where($this->table, ['MaHD' => $MaHD])->row_array();
	}

	public function create($params)
    {
		$this->db->insert($this->table, $params);
		return $this->db->insert_MaHD();
	}
	
    public function update($MaHD, $params)
    {
		$this->db->where('MaHD', $MaHD);
		return $this->db->update($this->table, $params);
	}
	
    public function delete($MaHD)
    {
        return $this->db->delete($this->table, ['MaHD'=> $MaHD]);
    }
}
