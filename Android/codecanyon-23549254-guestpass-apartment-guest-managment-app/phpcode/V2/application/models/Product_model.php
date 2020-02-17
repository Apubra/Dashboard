<?php
class Product_model extends CI_Model {

	function product_list() {
		
		$this->db->where('user_role','2');
		$hasil = $this->db->get('estate_admin');
		return $hasil->result();
	}

	function save_product() {
		$data = array(
			'product_code' => $this->input->post('product_code'),
			'product_name' => $this->input->post('product_name'),
			'product_price' => $this->input->post('price'),
		);
		$result = $this->db->insert('product', $data);
		return $result;
	}

	function update_product() {

		$data = array(
			'name' => $this->input->post('user'),
			'mob' => $this->input->post('mob'),
			'mail' => $this->input->post('email'),
			'addr' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'pack' => $this->input->post('pack'),
			'cp_name' => $this->input->post('cp_name'),
			'cp_mobile' => $this->input->post('cp_mobile'),
			'passd' => base64_encode($this->input->post('passd')),
		);

		$this->db->set($data);
		$this->db->where('id', $this->input->post('id'));
		$result = $this->db->update('estate_admin');
		return $result;
	}

	function update_product_status() {

		$status = $this->input->post('status');
		if ($status == 0) {$change = 1;}
		if ($status == 1) {$change = 0;}
		$data = array(

			'status' => $change,
		);

		$this->db->set($data);
		$this->db->where('id', $this->input->post('id'));
		$result = $this->db->update('estate_admin');
		return $result;
	}

function update_product_status2() {

		$status = $this->input->post('status');
		if ($status == 0) {$change = 1;}
		if ($status == 1) {$change = 0;}
		$data = array(

			'status' => $change,
		);

		$this->db->set($data);
		$this->db->where('id', $this->input->post('id'));
		$result = $this->db->update('package');
		return $result;
	}

	function delete_product() {
		$product_code = $this->input->post('product_code');
		$this->db->where('id', $product_code);
		$result = $this->db->delete('estate_admin');
		return $result;
	}

	function product_list2() {
		$hasil = $this->db->get('package');
		return $hasil->result();
	}
	function product_list4() {
		$data = $this->db->get_where('estate_user',array('status'=>'0'));
		return $data->result_array();
	}

	function delete_product2() {
		$product_code = $this->input->post('product_code');
		$this->db->where('id', $product_code);
		$result = $this->db->delete('package');
		return $result;
	}

	function update_product2() {

		$data = array(
			'name' => $this->input->post('name'),
			'amount' => $this->input->post('amount'),
			'info' => $this->input->post('info'),
			'user_limit'=>$this->input->post('user_limit')
		);

		$this->db->set($data);
		$this->db->where('id', $this->input->post('id'));
		$result = $this->db->update('package');
		return $result;
	}


	function product_list3() {
		$data= $this->db->get('package');
		return $data->result();
	}

}