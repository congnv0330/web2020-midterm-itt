<?php

class Chitiethoadon_model extends CI_Model 
{
	protected $table = 'chitiethoadon';

	public function getAll()
	{
		return $this->db->get($this->table)->result_array();
	}

	public function getByMaCTHD($MaCTHD)
	{
		return $this->db->get_where($this->table, ['MaCTHD' => $MaCTHD])->row_array();
	}

	public function create($params)
    {
		$this->db->insert($this->table, $params);
		return $this->db->insert_MaCTHD();
	}
	
    public function update($MaCTHD, $params)
    {
		$this->db->where('MaCTHD', $MaCTHD);
		return $this->db->update($this->table, $params);
	}
	
    public function delete($MaCTHD)
    {
        return $this->db->delete($this->table, ['MaCTHD'=> $MaCTHD]);
    }
}
