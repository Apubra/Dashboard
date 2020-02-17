<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model');
		$this->load->library('session');
		$this->load->database();
	}

	public function index() {
		$this->load->view('admin_login');
	}

	function login_user() {
		$user_login = array(

			'user_email' => $this->input->post('user_email'),
			'user_password' => base64_encode($this->input->post('user_password')),

		);

		$data = $this->login_model->login_user($user_login['user_email'], $user_login['user_password']);
		if ($data) {
			$this->session->set_userdata('user_id', $data['id']);
			$this->session->set_userdata('user_email', $data['mail']);
			$this->session->set_userdata('user_name', $data['name']);
			$this->session->set_userdata('user_mobile', $data['mob']);
			$this->session->set_userdata('user_role', $data['user_role']);
			if ($data['user_role'] == 1) {
				
				redirect('Estate_dashboard/user_management');
			}

			if ($data['user_role'] == 2) {
				redirect('Estate_dashboard/user_management');
			}

			//$this->load->view('dashboard.php');

		} else {
			$this->session->set_flashdata('error', 'Your Account has been suspended, Please contact to Admin/Service provider');
			redirect('Login/');
		}

	}

	public function user_logout() {

		$this->session->sess_destroy();
		redirect('login', 'refresh');
	}

}