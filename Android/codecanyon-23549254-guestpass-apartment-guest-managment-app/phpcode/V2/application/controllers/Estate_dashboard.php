<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Estate_dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Estate_model');
		$this->load->model('Constant_model');
		date_default_timezone_set('Asia/Calcutta');
		error_reporting(0);

		$user_role = $this->session->userdata('user_role');

		if ($user_role != 2) {

			redirect('login');
		}
	}
	function index() {
		$this->load->view('estate_dashboard1');
	}

	function insert1() {
		$q=$this->db->get_where('estate_user',array('admin_id'=>$this->session->userdata('user_id')))->num_rows();
		$updateData=array("total_users"=>$q+1);
		

		$created_date_time = date("Y-m-d");
		$table = "estate_user";
		$data = array(
			'name' => $this->input->post('name'),
			'mob' => $this->input->post('mob'),
			'addr' => $this->input->post('addr'),
			'mail' => $this->input->post('mail'),
			'pin' => base64_encode($this->input->post('passd')),
			'status' => '1',
			'date' => $created_date_time,
			'admin_id'=>$this->session->userdata('user_id')
		);

		$insert_id = $this->Constant_model->insertDataReturnLastId($table, $data);
		if ($insert_id >= 1) {
			$this->db->where('id',$this->session->userdata('user_id'));
			$this->db->update("estate_admin",$updateData);


			$message = '<html><body><br>';
/*  $message .= '<img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />'; */
			$message .= 'Dear ' . strip_tags($_REQUEST['name']);
			$message .= '<br><br>';
			$message .= 'You are successfully register and your credential details are as follows - <br>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_REQUEST['name']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Mobile:</strong> </td><td>" . strip_tags($_REQUEST['mob']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Packages:</strong> </td><td>" . strip_tags($_REQUEST['pack']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_REQUEST['mail']) . "</td></tr>";
			$message .= "<tr><td><strong>Password:</strong> </td><td>" . strip_tags($_REQUEST['passd']) . "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";

			$to = $this->input->post('mail');

			$subject = 'NEW Registration Details';

			$headers = "From: Axspass\r\n";
			$headers .= "Reply-To:sample@gmail.com \r\n"; // . strip_tags($_REQUEST['req-email']) .
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			mail($to, $subject, $message, $headers);
/*
if (mail($to, $subject, $message, $headers)) {
echo "Success Send Mail!";
// exit(json_encode(array("status" => "1", "msg" => "Insert Records Successfully.")));
} else {

echo "Try again ! Error Occur.";
//exit(json_encode(array("status" => "0", "msg" => 'There was a problem sending the email.')));

} */

			$this->session->set_flashdata('success', 'Success message.');

		} else {
			$this->session->set_flashdata('error', 'Error message.');
		}
		redirect("Estate_dashboard/customers_management");
	}

	function user_management() {
		$this->load->view('estate_user');
	}
	public function view_profile4(){
		$this->load->view("user_pending_request");
	}
	function property_management()
	{
$this->load->view('flat_prop');
	}	
	function product_data() {
		$data = $this->Estate_model->product_list();
	
		echo json_encode($data);
	}
	function product_data4() {
		$data = $this->Estate_model->product_list4();
		echo json_encode($data);
	}

	function save() {
		$data = $this->Estate_model->save_product();
		echo json_encode($data);
	}

	function update() {
		$data = $this->Estate_model->update_product();
		echo json_encode($data);
	}

	function update_status() {
		$data = $this->Estate_model->update_product_status();
		echo json_encode($data);
		
	}

	function delete() {
		$data = $this->Estate_model->delete_product();
		$q=$this->db->get_where('estate_admin',array('id'=>$this->session->userdata('user_id')));
		$q=$q->row()->total_users;
		$updateData=array("total_users"=>$q-1);
		$this->db->where('id',$this->session->userdata('user_id'));
			$this->db->update("estate_admin",$updateData);
		echo json_encode($data);
	}

	function manage_guard() {
		$this->load->view('estate_guard');
	}


	function insert2() {

$q=$this->db->get_where('estate_guard',array('user_id'=>$this->session->userdata('user_id')))->num_rows();
		$updateData=array("total_guard"=>$q+1);
		

		$created_date_time = date("Y-m-d");

		$tmp_file = $_FILES['img']['tmp_name'];
		$file = $_FILES['img']['name'];

		if (!empty($file)) {
			$sec = rand(1000, 9999);
			$file_name = $sec . '_' . $file;
			$save_path = base_url() . 'assets/images/' . $file_name;
			$path = $_SERVER['DOCUMENT_ROOT'] . '/guestpass/assets/images/' . $file_name;
			//$path = base_url() . 'assets/images/' . $file_name;
			move_uploaded_file($tmp_file, $path);
		} else {
			$save_path = base_url() . 'assets/images/' . 'no-img.png';
		}

		$table = "estate_guard";
		$data = array(
			'user_id'=>$this->session->userdata('user_id'),
			'name' => $this->input->post('name'),
			'agency_name' => $this->input->post('agency_name'),
			'addr' => $this->input->post('addr'),
			'mail' => $this->input->post('mail'),
			'mob' => $this->input->post('mob'),
			'pin' =>base64_encode($this->input->post('pin')),
			'img' => $save_path,
			'date' => $created_date_time,
		);

		$insert_id = $this->Constant_model->insertDataReturnLastId($table, $data);
		if ($insert_id >= 1) {

			$this->db->where('id',$this->session->userdata('user_id'));
			$this->db->update("estate_admin",$updateData);

			$this->session->set_flashdata('success', 'Success message.');
		} else {
			$this->session->set_flashdata('error', 'Error message.');
		}
		
		redirect("Estate_dashboard/manage_guard");
	}

	function product_data2() {
		$data = $this->Estate_model->product_list2();
		echo json_encode($data);
	}

	function delete2() {
		$data = $this->Estate_model->delete_product2();

		$q=$this->db->get_where('estate_admin',array('id'=>$this->session->userdata('user_id')));
		$q=$q->row()->total_guard;
		$updateData=array("total_guard"=>$q-1);
		$this->db->where('id',$this->session->userdata('user_id'));
			$this->db->update("estate_admin",$updateData);

		echo json_encode($data);
	}

	function update2() {
		$data = $this->Estate_model->update_product2();
		echo json_encode($data);
	}


	function insert_prop()
	{
		$created_date_time = date("Y-m-d");
		$table = "flat/property";
		$data = array(
			'admin_id'=>$this->session->userdata('user_id'),
			'date' => $created_date_time,
			'prop_name' => $this->input->post('propName'),
			'prop_owner_name' => $this->input->post('propOwnerName'),
			'description' => $this->input->post('propDesc')
			
			
		);

		$insert_id = $this->Constant_model->insertDataReturnLastId($table, $data);
		if ($insert_id >= 1)
		 {

	$this->session->set_flashdata('Successfully Added');

		} else {
			$this->session->set_flashdata('error', 'Error message.');
		}
		redirect("Estate_dashboard/property_management");
	}

	function product_data3() {
		$data = $this->Estate_model->product_list3();
		echo json_encode($data);
	}

	function update3() {
		$data = $this->Estate_model->update_product3();
		echo json_encode($data);
	}

		function delete3() {
		$data = $this->Estate_model->delete_product3();
		echo json_encode($data);
	}


	function product_data5() {
		$data = $this->Estate_model->product_list5();
		echo json_encode($data);
	}
		function guest_list() {
		    	$this->load->view('estate_guest');
		    
	}
		function guest_list1() {
		$data = $this->Estate_model->guest_lists();
	//	print_r($data);
		echo json_encode($data);
	}
}

