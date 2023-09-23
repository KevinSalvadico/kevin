<?php
class Allmodel extends CI_Model {
    public function FetchData($table,$where)
	{
		$this->db->select('*');//ito yung select
		$this->db->from($table);//then from table name
		$this->db->where($where);//where if meron kabang i filter like WHERE id = 1
		$query = $this->db->get();//ito sya iipunan nya lahat ng results base dun sa SELECT mo
		$data = $query->result_array();//ito sya katumbas nya nito is yung mysqli_fetch_array()
		return $data;//ito sya ireturn nya para ma display mo na sa view mo

	}

}