<?php
class Profile_model extends CI_Model {
function update_product3() {

		$data = array(
			'name' => $this->input->post('name'),
			'mob' => $this->input->post('mob'),
			'mail' => $this->input->post('mail'),
		);

		$this->db->set($data);
		$this->db->where('id', $this->input->post('id'));
		$result = $this->db->update('estate_admin');
		return $result;
	}
}
?>