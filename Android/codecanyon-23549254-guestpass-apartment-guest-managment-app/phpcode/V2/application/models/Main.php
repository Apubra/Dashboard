<?php
class Main extends CI_Model
{
	public function insert($fname)
	{
		$this->db->where('id','1');
$this->db->update("splash",$fname);
	}
}
?>