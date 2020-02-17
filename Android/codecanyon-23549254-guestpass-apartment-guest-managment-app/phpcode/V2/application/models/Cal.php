<?php
class Cal extends CI_Model
{

	function get($x)
	{
	

		$s= $this->db->get_where('estate_admin',array('day(date)'=>$x,'month(date)'=>date('m'),'year(date)'=>date('Y'),'status'=>'1'))->num_rows();
		if ($s!=0) {
			# code...
			return "Leads ".$s;
		}
	}
}


?>