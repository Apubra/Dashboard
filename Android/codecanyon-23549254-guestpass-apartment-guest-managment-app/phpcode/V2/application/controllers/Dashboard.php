<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('product_model');
		$this->load->model('Constant_model');
		date_default_timezone_set('Asia/Calcutta');
		error_reporting(0);

		$user_role = $this->session->userdata('user_role');

		if ($user_role != 1) {

			redirect('login');
		}
	}
	function index() 
	{
 			//$start_date=date('Y-m-d');
            //$date =  date('Y-m-d', strtotime('today - 30 days'));// Y-m-d
                               

             //$this->db->select('count(*)');
             //$this->db->where('status', '1');
             //$this->db->where('date',$start_date);
             //$query115 = $this->db->get('estate_user');
             //$cnt115 = $query115->row_array();
             //$tot_ctn115=$cnt115['count(*)'];
       

                               

/* data(events news and evnts) you want to show in calendar date */
$this->load->model('cal');
	$data['data']=array(
1=>$this->cal->get('1'),
2=>$this->cal->get('2'),
3=>$this->cal->get('3'),
4=>$this->cal->get('4'),
5=>$this->cal->get('5'),
6=>$this->cal->get('6'),
7=>$this->cal->get('7'),
8=>$this->cal->get('8'),
9=>$this->cal->get('9'),
10=>$this->cal->get('10'),
11=>$this->cal->get('11'),
12=>$this->cal->get('12'),
13=>$this->cal->get('13'),
14=>$this->cal->get('14'),
15=>$this->cal->get('15'),
16=>$this->cal->get('16'),
17=>$this->cal->get('17'),
18=>$this->cal->get('18'),
19=>$this->cal->get('19'),
20=>$this->cal->get('20'),
21=>$this->cal->get('21'),
22=>$this->cal->get('22'),
23=>$this->cal->get('23'),
24=>$this->cal->get('24'),
25=>$this->cal->get('25'),
26=>$this->cal->get('26'),
27=>$this->cal->get('27'),
28=>$this->cal->get('28'),
29=>$this->cal->get('29'),
30=>$this->cal->get('30'),
31=>$this->cal->get('31')
	);

/* Days name format */
$config['day_type'] = 'short'; /* x: Monday */
 
/* Template configuration for Calendar */
$config['template'] = '
{table_open}<table class="calendar">{/table_open}
{week_day_cell}<th class="dayHeader">{week_day}</th>{/week_day_cell}
{cal_cell_content}<span class="dayListing">{day}</span>&nbsp;{content}&nbsp;{/cal_cell_content}
{cal_cell_content_today}<div class="today"><span class="dayListing">{day}</span> {content}</div>{/cal_cell_content_today}
{cal_cell_no_content}<span class="dayListing">{day}</span>&nbsp;{/cal_cell_no_content}
{cal_cell_no_content_today}<div class="today"><span class="dayListing">{day}</span></div>{/cal_cell_no_content_today}
';
 
/* Load the Library with configuration */
//$this->load->library('calendar', $config);
$this->load->library('calendar', $config);
$this->load->view('estate_dashboard',$data);
    
	}

	function insert1() {

		$catData1 = $this->Constant_model->getDataOneColumn('package', 'name', $this->input->post('pack'));

		for ($ct = 0; $ct < count($catData1); ++$ct) {
			$id = $catData1[$ct]->id;
			$period = $catData1[$ct]->period;
		}
		$date_period = '+' . $period . ' days';
		$expire_date = date('Y-m-d', strtotime($date_period));

		$created_date_time = date("Y-m-d");
		$table = "estate_admin";
		$this->db->select_max('id');
		$ref_code="AXS0".$this->db->get('estate_admin')->row()->id;
		$data = array(
			'name' => $this->input->post('appartment'),
			'mob' => $this->input->post('mob'),
			'addr' => $this->input->post('addr'),
			'pack' => $this->input->post('pack'),
			'mail' => $this->input->post('mail'),
			'passd' => base64_encode($this->input->post('passd')),
			'status' => '1',
			'date' => $created_date_time,
			'pin' => $this->input->post('pin'),
			'user_role' => "2",
			'expire_date' => $expire_date,
			'city' => $this->input->post('city'),
			'cp_name' => $this->input->post('name'),
			'cp_mobile' => $this->input->post('mob'),
			'ref_code'=>$ref_code

		);

		$insert_id = $this->Constant_model->insertDataReturnLastId($table, $data);
		$refcode=$this->db->get_where("estate_admin",array('id'=>$insert_id))->row()->ref_code;
		if ($insert_id >= 1) {

			$message = '<html><body><br>';
/*  $message .= '<img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />'; */
		
			 $message.='<head>
      <style>
         .banner-color {
         background-color: #eb681f;
         }
         .title-color {
         color: #0066cc;
         }
         .button-color {
         background-color: #0066cc;
         }
         @media screen and (min-width: 500px) {
         .banner-color {
         background-color: #0066cc;
         }
         .title-color {
         color: #eb681f;
         }
         .button-color {
         background-color: #eb681f;
         }
         }
      </style>
   </head>
   <body>
      <div style="background-color:#ececec;padding:0;margin:0 auto;font-weight:200;width:100%!important">
         <table align="center" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed;font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
            <tbody>
               <tr>
                  <td align="center">
                     <center style="width:100%">
                        <table  border="0" cellspacing="0" cellpadding="0" style="margin:0 auto;max-width:512px;font-weight:200;width:inherit;font-family:Helvetica,Arial,sans-serif" width="512">
                           <tbody>
                              <tr>
                                 <td  width="100%" style="background-color:#212529;padding:12px;border-bottom:1px solid #ececec">
                                    <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;width:100%!important;font-family:Helvetica,Arial,sans-serif;min-width:100%!important" width="100%">
                                       <tbody>
                                          <tr tyle="background-color:#212529;">
                                             <td tyle="background-color:#2b3d51;" align="left" valign="middle" width="50%" ><img style="background-color:#212529;" src="http://sagarfoundation.org.in/newaxspass/assets/logo.png" style="height:50px; width:80px; float:left;"></td>
                                             <td valign="middle" width="50%" align="right" style="padding:0 0 0 10px"><span style="margin:0;color:#4c4c4c;white-space:normal;display:inline-block;text-decoration:none;font-size:12px;line-height:20px">'.date("Y-m-d H:i:s").'</span></td>
                                             <td width="1">&nbsp;</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                              <tr>
                                 <td align="left">
                                    <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                       <tbody>
                                          <tr>
                                             <td width="100%">
                                                <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                   <tbody>
                                                      <tr>
                                                         <td align="center" bgcolor="#8BC34A" style="padding:20px 48px;color:#ffffff" class="banner-color">
                                                            <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                               <tbody>
                                                                  <tr>
                                                                     <td align="center" width="100%">
                                                                        <h1 style="padding:0;margin:0;color:#ffffff;font-weight:500;font-size:20px;line-height:24px">Welcome to "AXS"</h1>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td align="center" style="padding:20px 0 10px 0">
                                                            <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                               <tbody>
                                                                  <tr>
                                                                     <td align="center" width="100%" style="padding: 0 15px;text-align: justify;color: rgb(76, 76, 76);font-size: 12px;line-height: 18px;">
                                                                        
                                                                        <h3 style="font-weight: 600; padding: 0px; margin: 0px; font-size: 16px; line-height: 24px; text-align: left;" class="title-color">
                                                                            Estate Code:'.$refcode.'<br>
                                                                            Username:'.strip_tags($_POST['Mob']) .' <br>
                                                                            Password:'.base64_decode($passd).' <br>
                                                                            Pin: '.strip_tags($_POST['RegisterPin']).'<br>
                                                                        </h3>
                                                                        <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: center;">You are successfully register! Login with above credential details and Manage Account. <b>Login now</b>!</p>
                                                                        <div style="font-weight: 200; text-align: center; margin: 25px;"><a href="'. base_url() .'account/login" style="padding:0.6em 1em;border-radius:600px;color:#ffffff;font-size:14px;text-decoration:none;font-weight:bold" class="button-color">Login</a></div>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                      </tr>
                                                      <tr>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                              <tr>
                                 <td align="left">
                                    <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" style="padding:0 24px;color:#999999;font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                       <tbody>
                                          <tr>
                                             <td align="center" width="100%">
                                                <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                   <tbody>
                                                      <tr>
                                                         <td align="center" valign="middle" width="100%" style="border-top:1px solid #d9d9d9;padding:12px 0px 20px 0px;text-align:center;color:#4c4c4c;font-weight:200;font-size:12px;line-height:18px">Thanks & Regards,
                                                            <br><b>HRudi Apparels</b>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td align="center" width="100%">
                                                <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                   <tbody>
                                                      <tr>
                                                         <td align="center" style="padding:0 0 8px 0" width="100%"></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </center>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </body>
</html>';
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
		redirect("Dashboard/customers_management");
	}

	function customers_management() {
		$this->load->view('estate_admin'); 
	}
	public function view_profile4(){
		$this->load->view("user_pending_request");
	}
	function product_data4() {
		$data = $this->product_model->product_list4();
		echo json_encode($data);
	}

	function product_data() {
		$data = $this->product_model->product_list();
		echo json_encode($data);
	}

	function save() {
		$data = $this->product_model->save_product();
		echo json_encode($data);
	}

	function update() {
		$data = $this->product_model->update_product();
		echo json_encode($data);
	}

	function update_status() {
		$data = $this->product_model->update_product_status();
		echo json_encode($data);
	}

function update_status2() {
		$data = $this->product_model->update_product_status2();
		echo json_encode($data);
	}

	function delete() {
		$data = $this->product_model->delete_product();
		echo json_encode($data);
	}

	function packages() {
		$this->load->view('packages');
	}

	function insert2() {
		$created_date_time = date("Y-m-d h:i:sa");
		$table = "package";
		$data = array(
			'name' => $this->input->post('name'),
			'amount' => $this->input->post('amount'),
			'info' => $this->input->post('info'),
			'date' => $created_date_time,
			'period' => $this->input->post('period'),
		);

		$insert_id = $this->Constant_model->insertDataReturnLastId($table, $data);
		if ($insert_id >= 1) {
			$this->session->set_flashdata('success', 'Success message.');
		} else {
			$this->session->set_flashdata('error', 'Error message.');
		}
		redirect("Dashboard/packages");
	}

	function product_data2() {
		$data = $this->product_model->product_list2();
		echo json_encode($data);
	}

	function delete2() {
		$data = $this->product_model->delete_product2();
		echo json_encode($data);
	}

	function update2() {
		$data = $this->product_model->update_product2();
		echo json_encode($data);
	}

function product_data3() {
		$data = $this->product_model->product_list3();
		echo json_encode($data);
	}


function insert3() {

	
		

		$created_date_time = date("Y-m-d");
		$table = "package";
		$data = array(
			'name' => $this->input->post('name'),
			'amount' => $this->input->post('ammount'),
			'info' => $this->input->post('info'),
			
			'user_limit' => $this->input->post('user_limit'),
			'status' => '1',
			'date' => $created_date_time,
		);

		$insert_id = $this->Constant_model->insertDataReturnLastId($table, $data);
		if ($insert_id >= 1) {

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
		redirect("Dashboard/packages");
	}

function splash()
{
	$this->load->view('splash');
}
}
