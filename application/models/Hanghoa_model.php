<?php

class Hanghoa_model extends CI_Model 
{
	protected $table = 'hanghoa';

	public function getAll()
	{
		return $this->db->get($this->table)->result_array();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->table, ['MaHH' => $id])->row_array();
	}

	public function create($params)
    {
		$this->db->insert($this->table, $params);
		return $this->db->insert_id();
	}
	
    public function update($id, $params)
    {
		$this->db->where('MaHH', $id);
		return $this->db->update($this->table, $params);
	}
	
    public function delete($id)
    {
        return $this->db->delete($this->table, ['MaHH'=> $id]);
    }
}
