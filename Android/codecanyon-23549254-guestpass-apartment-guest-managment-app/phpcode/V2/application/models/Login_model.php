<?php
class Login_model extends CI_model {

	public function login_user($email, $pass) {

		$this->db->select('*');
		$this->db->from('estate_admin');
		$this->db->where('mail', $email);
		$this->db->where('passd', $pass);
		$this->db->where('status', "1");

		if ($query = $this->db->get()) {
			return $query->row_array();
		} else {
			return false;
		}

	}

}
?>