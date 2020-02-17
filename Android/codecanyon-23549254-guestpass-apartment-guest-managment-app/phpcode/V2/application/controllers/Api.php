<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Aug 2018 05:00:00 GMT"); // Date in the past
header("Cache-Control: max-age=2592000, must-revalidate");
header("Cache-Control: public, max-age=2592000");
header("Content-Type: application/json");

class Api extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('product_model');

		date_default_timezone_set('Asia/Calcutta');
		error_reporting(0);


if(!empty($_REQUEST['user_id']))
{
$query=$this->db->get_where('estate_user',array('id'=>$_REQUEST['user_id']));
$query2=$this->db->get_where('estate_admin',array('id'=>$query->row()->admin_id));
if($query->row()->status=='0'||$query2->row()->status=='0')
	{
		$result->status='400';
		$result->messege='Your Account has been suspended, please contact to Admin/Service provider';
		echo json_encode($result);
    	exit();
    	
	}
}

if(!empty($_REQUEST['admin_id']))
{

$query=$this->db->get_where('estate_admin',array('id'=>$_REQUEST['admin_id']));
if($query->row()->status=='0')
	{
		$result->status='400';
		$result->messege='Your Account has been suspended, please contact to Admin/Service provider';
		echo json_encode($result);
    	exit();
	}
}

if(!empty($_REQUEST['guard_id']))
{

$query=$this->db->get_where('estate_guard',array('id'=>$_REQUEST['guard_id']));
	$query2=$this->db->get_where('estate_admin',array('id'=>$query->row()->user_id));
if($query->row()->status=='0'||$query2->row()->status=='0')
	{
		$result->status='400';
		$result->messege='Your Account has been suspended, please contact to Admin/Service provider';
		echo json_encode($result);
    	exit();
	}
}



		//checking key
		$key=$this->input->get_request_header('apikey', TRUE);
		if($key=='d29985af97d29a80e40cd81016d939af') 
		{
			$x="0";
		}else{
    	$x="1";
    }



if($x=="1")
{
	
    	$obj->status="0";
    	$obj->message="invalid api key ";
    	echo json_encode($obj);
    	exit();
    
}


	}

	function index() {
		// $this->load->view('Horizontal/user_list');
	}

	public function add_user() {

		$insert_id = '';
		if (!empty($_REQUEST)) {

			$created_date_time = date("Y-m-d h:i:sa");
			$person_image = '';
			if ($_REQUEST['img'] != '') {
				$person_image = time() . '.png';
				$img = str_replace('data:image/png;base64,', '', $_REQUEST['img']);
				$img = str_replace(' ', '+', $img);
				$data = base64_decode($img);
				file_put_contents(getcwd() . "/assets/images/users/" . $person_image, $data);
			}
			$input = array(
				'user' => $_REQUEST['user'] ? $_REQUEST['user'] : '',
				'mob' => $_REQUEST['mob'] ? $_REQUEST['mob'] : '',
				'email' => $_REQUEST['email'] ? $_REQUEST['email'] : '',
				'address' => $_REQUEST['address'] ? $_REQUEST['address'] : '',
				'city' => $_REQUEST['city'] ? $_REQUEST['city'] : '',
				'img' => $person_image ? $person_image : '',
				'date' => $created_date_time,
			);
			$this->db->insert('app_user_tbl', $input);
			$insert_id = $this->db->insert_id();
		} else {
			$result = array('status' => FALSE, 'msg' => 'Error While Inserting');
		}

		if ($insert_id) {
			$result = array('status' => true, 'msg' => 'You have insert visitor.');
		} else {
			$result = array('status' => FALSE, 'msg' => 'Error While Inserting');
		}

		echo json_encode($result);
		exit;
	}


 function user_login() //user Login
{
	if(!empty($_REQUEST['mobile']&&$_REQUEST['pin']))
	{
	$mobile=$_REQUEST['mobile'];
	$pin=base64_encode($_REQUEST['pin']);

	$query = $this->db->get_where('estate_user', array('mob' => $mobile,'pin'=>$pin));
	$query2=$this->db->get_where('estate_admin',array('id'=>$query->row()->admin_id));
	$query3=$this->db->get_where('flat/property',array('admin_id'=>$query2->row()->id));
	$appartment=$query2->row()->name;
	$flat_name=$query3->row()->prop_name;
	$prop_code=$query2->row()->ref_code;
	if($query->row()->status=='0'||$query2->row()->status=='0')
	{
		$result->status='400';
		$result->messege='Your Account has been suspended, please contact to Admin/Service provider';
	}else
	if ($query->num_rows()=='1')
	 {
		foreach($query->result_array() as $x)
		{
		$result=array('status'=>'1','Name'=>$x['name'],'Mobile no'=>$x['mob'],'Email id'=>$x['mail'],'user_id'=>$x['id'],'admin_id'=>$x['admin_id'],'flat_id'=>$x['flat_id'],'appartment'=>$appartment,'prop_code'=>$prop_code,'flat_name'=>$flat_name,'message'=>'login Succesfull' );
		}
	}
	else
	{
		$result=array('status'=>'0','message'=>'Invalid mobile no or pin');
	}
	echo json_encode($result);
}else
 {
 	echo "All fields are required";
 }
}

function property_details() 
{
$prop_code=$_REQUEST['prop_code'];
$this->db->select('*');
$this->db->from('flat/property');
$this->db->where('id',$prop_code);
$query=$this->db->get();
$q=$query->row_array();
if ($q) 
{
$result=array('Property Id'=> $q['id'],'Property Name'=> $q['prop_name'],'Property Owner Name'=> $q['prop_owner_name'],'Property Description'=> $q['description']);
echo json_encode($result);
}else
{
	echo json_encode('Invalid Property Id');
}
}


function signup()
{
	if(!empty($_REQUEST['mobile']&&$_REQUEST['pin']&&$_REQUEST['email']&&$_REQUEST['ref_code']&&$_REQUEST['flat_id']))
	{
$data=array('name'=>$_REQUEST['name'],
	'mob'=>$_REQUEST['mobile'],
	'mail'=>$_REQUEST['email'],
	'pin'=>base64_encode($_REQUEST['pin']),
	'ref_code'=>strtoupper($_REQUEST['ref_code']),
	'flat_id'=>$_REQUEST['flat_id'],
	'date'=>date("Y-m-d"),
	'admin_id'=>$_REQUEST['admin_id'],
	'status'=>'0'
);

$q0=$this->db->get_where('estate_user',array('mob'=>$_REQUEST['mobile']));
if($q0->num_rows()>0)
{
	$obj->status='0';
	$obj->Warning='This Mobile No Is already registered';
	echo json_encode($obj);
}else{

$q=$this->db->get_where('estate_user',array('mail'=>$_REQUEST['email']));
if($q->num_rows()>0)
{
	$obj->status='0';
	$obj->Warning='This eMail Is already registered';
	echo json_encode($obj);
}else{
if(base64_encode($_REQUEST['pin'])!=base64_encode($_REQUEST['conf_pin']))
{   
	$obj->status='1';
	$obj->Warning='Pin does not matched';
	echo json_encode($obj);
}else
{
$this->db->insert('estate_user',$data);
$obj->status='1';
$obj->message='you are registered Succesfully';
	echo json_encode($obj);
}
}
}
}else
 {
 	echo "All fields are required";
 }
}

function fetch_user_details()
{
	$ref_code=$_REQUEST['ref_code'];
	$query=$this->db->get_where('estate_admin',array('ref_code'=>$ref_code));
	$q=$query->row_array();

	$admin_id=$q['id'];
	$estate_name=$q['name'];

	$query1=$this->db->get_where('flat/property',array('admin_id'=>$admin_id));

	foreach($query1->result() as $x)
	{
$json_array[]=array('flat_id'=>$x->id,'flat_name'=>$x->prop_name,'flat_owner_name'=>$x->prop_owner_name,'description'=>$x->description);
}
if($json_array)
{
	$json=array('status'=>'1','admin_id'=>$admin_id,'appartment'=>$estate_name,$estate_name=>$json_array);
	echo json_encode($json);
}else
{
	$json=array('status'=>'0','warning'=>'invalid ref_code/no record found');
	echo json_encode($json);
}

}

function add_guest()
{
	
	$this->db->select_max('guest_id');
		$query=$this->db->get('guest');
		$this->load->helper('text');
		$response=substr(date('is').$query->row()->guest_id.'9',0,5); //creating response code
if($_REQUEST['status']==null)
{
$status='0';
}else
{
$status=$_REQUEST['status'];	
}

	$i=$this->db->get_where('guest',array('response'=>$response,'flat_id'=>$_REQUEST['flat_id'])); //checking response code
		if ($i->num_rows()==1) 
		{
			$obj->messege="please try again";
			echo json_encode($obj);
		}
	else
		{
$data=array('estate_admin'=>$_REQUEST['admin_id'],
			'estate_user'=>$_REQUEST['user_id'],
			'flat_id'=>$_REQUEST['flat_id'],
			'mobile'=>$_REQUEST['mobile'],
			'guest_role'=>$_REQUEST['guest_role'],
			'total_guest'=>$_REQUEST['total_guest'],
			'a_date'=>date('Y-m-d',strtotime($_REQUEST['date'])),
			'time'=>date('H:i:s',strtotime($_REQUEST['time'])),
			'name'=>$_REQUEST['name'],
			'address'=>$_REQUEST['address'],
			'purpose'=>$_REQUEST['purpose'],
			'response'=>$response,
			'status'=>$status
		);
			$this->db->insert('guest',$data);
$obj->status='1';
$obj->response=$response;
echo json_encode($obj);
}

}

function fetch_guest()
{
	if(!empty($_REQUEST['user_id']&&$_REQUEST['mobile']))
	{
	$q=$this->db->get_where('guest',array('estate_user'=>$_REQUEST['user_id'],'mobile'=>$_REQUEST['mobile']))->row();
if ($q==0) 
{
	$obj->status='0';
	$obj->messege='mobile No. not found';
	echo json_encode($obj);
}else
{
	$json=array('status'=>'1','guest name'=>$q->name,'guest address'=>$q->address,'guest role'=>$q->guest_role,'guest_purpose'=>$q->purpose);
	echo json_encode($json);
}
 }else
 {
 	echo "All fields are required";
 }
}


function check_code()
{
	if(!empty($_REQUEST['guard_id']&&$_REQUEST['response_code']))
	{
	$q=$this->db->get_where('estate_guard',array('id'=>$_REQUEST['guard_id']))->row();
	$adminx=$q->user_id;
	$response=$_REQUEST['response_code'];
	$q1=$this->db->get_where('guest',array('estate_admin'=>$adminx,'response'=>$response));
	if($q1->num_rows()==1)
	{ 
		if(date('Y-m-d')<date('Y-m-d',strtotime($q1->row()->a_date)))
		{
$obj->status="3";
			$obj->messege="Early Access Denied!!!";
			echo json_encode($obj);
		}else
		{
		$from = strtotime($q1->row()->a_date.''.$q1->row()->time); 
		$to = strtotime(date('Y-m-d H:i:s'));
		$minutes= round(abs($to - $from) / 60,2);
		$hrs= floor($minutes / 60);

		if($hrs<24&&$q1->row()->status=="0"||$hrs<24&& $q1->row()->status=="1")
		{
			
			//getting flat/property information
			$q2=$this->db->get_where('estate_user',array('admin_id'=>$adminx,'flat_id'=>$q1->row()->flat_id));
			$q3=$this->db->get_where('flat/property',array('admin_id'=>$adminx,'id'=>$q1->row()->flat_id));
			$data=array(
			'guest_id'=>$q1->row()->guest_id,	
			'flat_user'=>$q2->row()->name,
			'flat_name'=>$q3->row()->prop_name,
			'flat_user_mob'=>$q2->row()->mob,
			'guest_role'=>$q1->row()->guest_role,
			'total_guest'=>$q1->row()->total_guest,
			'guest_date'=>date('d-M-y',strtotime($q1->row()->a_date)),
			'time'=>date('h:iA', strtotime($q1->row()->time)),
			'guest_name'=>$q1->row()->name,
			'purpose'=>$q1->row()->purpose,
			'guest_mobile'=>$q1->row()->mobile,
			'status'=>"1"
		);


			$updateData=array("status"=>"1");
				$this->db->where("estate_admin",$q1->row()->estate_admin);
				$this->db->where("response",$_REQUEST['response_code']);
				$this->db->update("guest",$updateData);
				echo json_encode($data);
		}
		else
		{
			$obj->status='2';
					$obj->messege='code is expired';
					echo json_encode($obj);	
		}
		
			}  //else is closed
	}
	else
	{
		$obj->status='0';
		$obj->messege='invalid code';
		echo json_encode($obj);
	}
}
else
 {
 	echo "All fields are required";
 }
}

function guard_login() //guard Login
{
	if(!empty($_REQUEST['mobile']&&$_REQUEST['pin']))
	{
	$mobile=$_REQUEST['mobile'];
	$pin=base64_encode($_REQUEST['pin']);

	$query = $this->db->get_where('estate_guard', array('mob' => $mobile,'pin'=>$pin,'status'=>"1"));
	$q1=$this->db->get_where('estate_admin',array('id'=>$query->row()->user_id))->row();
	if ($query->num_rows()>0)
	 {
		$result=array('status'=>'1','guard_name'=>$query->row()->name,'property'=>$q1->name,'guard_id'=>$query->row()->id,'mobile_no'=>$query->row()->mob);
	}
	else
	{
		$result=array('status'=>'0','result'=>'Invalid mobile no or pin');
	}
	echo json_encode($result);
}else
 {
 	echo "All fields are required";
 }
}

function total_visitors() //guard Login
{
	if(!empty($_REQUEST['guard_id']))
	{
	
	$query = $this->db->get_where('estate_guard', array('id'=>$_REQUEST['guard_id'],'status'=>"1"));
	$q1=$this->db->get_where('estate_admin',array('id'=>$query->row()->user_id))->row();
	$q2=$this->db->get_where('guest',array('guard_id'=>$_REQUEST['guard_id'],'estate_admin'=>$q1->id,'status'=>'3','date(checkin_time)'=>date('Y-m-d')))->num_rows();
	if ($query->num_rows()>0)
	 {
		$result=array('status'=>'1','guard_name'=>$query->row()->name,'apartment'=>$q1->name,'total_visitors'=>$q2,'guard_id'=>$query->row()->id);
	}
	else
	{
		$result=array('status'=>'0','result'=>'Invalid guard_id');
	}
	echo json_encode($result);
}else
 {
 	echo "All fields are required";
 }
}


function guest_checkin()
{
	if(!empty($_REQUEST['guard_id']&&$_REQUEST['guest_id']&&$_REQUEST['checkin_guests']))
	{
	    $gx=$this->db->get_where('guest',array('guest_id'=>$_REQUEST['guest_id']))->row()->guest_role;
            	if($_REQUEST['image'] == '0'&&$gx=="2"||$_REQUEST['docimage'] == '0'&&$gx=="2")
			{
		
			    if($_REQUEST['image'] == '0')
			    {
			        $obj->status="0";
			        $obj->messege="please pick your photo";
			        echo json_encode($obj);
			    }
			     if($_REQUEST['docimage'] == '0')
			    {
			        $obj->status="0";
			        $obj->messege="please pick your Document";
			        echo json_encode($obj);
			    }
			}else{
		$q=$this->db->get_where('estate_guard',array('id'=>$_REQUEST['guard_id']))->row()->user_id;//admin id
		$q1=$this->db->get_where('guest',array('estate_admin'=>$q,'status'=>'1','guest_id'=>$_REQUEST['guest_id']))->row()->name;//guest_name
		$q0=$this->db->get_where('guest',array('estate_admin'=>$q,'status'=>'1','guest_id'=>$_REQUEST['guest_id']))->row()->response;
		$qx=$this->db->get_where('guest',array('estate_admin'=>$q,'guest_id'=>$_REQUEST['guest_id']))->row();
		if($q1!=null)
		{		

			//UPLOADING GUEST IMAGE
		
			if ($_REQUEST['image'] != '0') {
				$person_image = uniqid() . '.jpg';
				$img = str_replace('data:image/jpg;base64,', '', $_REQUEST['image']);
				$img = str_replace(' ', '+', $img);
				$data = base64_decode($img);
				file_put_contents(getcwd() . "/uploads/guestImages/" . $person_image, $data);
				$image=base_url()."/uploads/guestImages/" . $person_image;
			}else{$image="0";}

			if ($_REQUEST['docimage'] != '0') {
				$person_image1 = uniqid() . '.jpg';
				$img1 = str_replace('data:image/jpg;base64,', '', $_REQUEST['docimage']);
				$img1 = str_replace(' ', '+', $img1);
				$data1 = base64_decode($img1);
				file_put_contents(getcwd() . "/uploads/guestImages/" . $person_image1, $data1);
				$docimage=base_url()."/uploads/guestImages/" . $person_image1;
			}else{$docimage="0";}



			   
			
			
		$updateData=array('status'=>'3','checkin_time'=>date('Y-m-d H:i:s'),'checkin_guests'=>$_REQUEST['checkin_guests'],'image'=>$image,'docimage'=>$docimage,'guard_id'=>$_REQUEST['guard_id']);
		$this->db->where('estate_admin',$q);
		$this->db->where('status','1');
		$this->db->update('guest',$updateData);

		//preparing for printing..
		$admin_idx=$this->db->get_where('estate_guard',array('id'=>$_REQUEST['guard_id']))->row()->user_id;
		$qx1=$this->db->get_where('estate_admin',array('id'=>$admin_idx));
		$appartment=$qx1->row()->name;
			$address=$qx1->row()->addr;

		$flat_name=$this->db->get_where('flat/property',array('admin_id'=>$admin_idx))->row()->prop_name;
		$invited_date=$qx->a_date;
		$invited_time=$qx->time;
		$guest_type=$qx->guest_role;
		$total_guest=$_REQUEST['checkin_guests'];
		$checkin_at=$qx->checkin_time;
		$ch1=date('d-m-Y',strtotime($checkin_at))." ".date('h:i A',strtotime($checkin_at));
		
		$obj->status="1";
		$obj->guest_name=$q1;
		$obj->appartment=$appartment;
		$obj->flat_name=$flat_name;
		$obj->address=$address;
		$obj->invited_date=date('d-m-Y',strtotime($invited_date));
		$obj->invited_time=date('h:i A',strtotime($invited_time));
		$obj->guest_type=$guest_type;
		$obj->total_guests=$total_guest;
		$obj->checkin_at=$ch1;
		$obj->response_code=$q0;
		echo json_encode($obj);
		}
		else
		{
			$obj->status="0";
			if($qx->status=='3')
			{
				$obj->messege="code is expired";
			}else if($qx->status=='0')
			{$obj->messege="illegal request please scan/enter response code first.";
		}else{$obj->messege="early access denied.";
		}
			
		
		echo json_encode($obj);	
		}
			}
	}else
	{
		$obj->status="2";
	$obj->messege="all feilds are required";
	echo json_encode($obj);	
	}
}

function todays_guest()
{
	if(!empty($_REQUEST['user_id']))
	{
		$q=$this->db->get_where('guest',array('estate_user'=>$_REQUEST['user_id'],'a_date'=>date('Y-m-d')));
		foreach($q->result() as $x)
		{
			if($x->checkin_time=="0000-00-00 00:00:00")
			{
				$checkin="00:00";
			}else
			{
				$checkin=date('h:iA', strtotime($x->checkin_time)); //checkin time
			}

			if(date('Y-m-d', strtotime($x->time))<date('Y-m-d')&&$x->checkin_time=="0000-00-00 00:00:00")
			{
					$status="2";
			}
			else
			{
				$status=$x->status;
			}
			$json_array[]=array('guest_id'=>$x->guest_id,'guest_name'=>$x->name,'mobile'=>$x->mobile,'guest_role'=>$x->guest_role,'guest_status'=>$status,'total_guest'=>$x->total_guest,'visit_time'=>date('h:i A', strtotime($x->time)),'checkin_time'=>$checkin,'visit_purpose'=>$x->purpose,'visit_date'=>date('d/m/y',strtotime($x->a_date)));
		}

		if($q->num_rows()==0)
		{
		$json->status="0";
		$json->messege="no data found";	
		}
		else
		{
			$json=array('status'=>'1','message'=>'succesfull','todays_guests'=>$json_array);
		}
			echo json_encode($json);
	}
}

function upcoming_guest()
{
	if(!empty($_REQUEST['user_id']))
	{
		$q=$this->db->get_where('guest',array('estate_user'=>$_REQUEST['user_id'],'a_date >'=>date('Y-m-d')));
		
		foreach($q->result() as $x)
		{			
			$json_array[]=array('guest_id'=>$x->guest_id,'guest_name'=>$x->name,'mobile'=>$x->mobile,'guest_role'=>$x->guest_role,'visit_time'=>date('h:i A', strtotime($x->time)),'total_guest'=>$x->total_guest,'visit_date'=>date('d/m/y',strtotime($x->a_date)),'visit_purpose'=>$x->purpose);			
			
		}
		if($q->num_rows()==0)
		{
		$json->status="0";
		$json->messege="no data found";	
		}
		else
		{
			$json=array('status'=>'1','message'=>'succesfull','Upcoming_guests'=>$json_array);
		}
			echo json_encode($json);
	}
}

function home_list()
{
	if(!empty($_REQUEST['user_id']))
	{
		$q=$this->db->get_where('guest',array('estate_user'=>$_REQUEST['user_id'],'a_date'=>date('Y-m-d')));
		$q1=$this->db->get_where('guest',array('estate_user'=>$_REQUEST['user_id'],'a_date >'=>date('Y-m-d')));

		foreach($q->result() as $x)
		{
			if($x->checkin_time=="0000-00-00 00:00:00")
			{
				$checkin="00:00";
			}else
			{
				$checkin=date('h:iA', strtotime($x->checkin_time));
			}

			if(date('Y-m-d', strtotime($x->time))<date('Y-m-d')&&$x->checkin_time=="0000-00-00 00:00:00")
			{
					$status="2"; //expiry status
			}
			else
			{
				$status=$x->status;
			}


			if($status=="2"||$status=="3")
			{
			$json_array[]=array('guest_id'=>$x->guest_id,'guest_name'=>$x->name,'mobile'=>$x->mobile,'guest_role'=>$x->guest_role,'guest_status'=>$status,'total_guest'=>$x->total_guest,'visit_time'=>date('h:i A', strtotime($x->time)),'checkin_time'=>$checkin,'visit_purpose'=>$x->purpose,'visit_date'=>date('d/m/y',strtotime($x->a_date)));
			}	
		}

		if($q->num_rows()==0||$json_array==null)
		{
		$json->status="0";
		$json->todays_guests=$q->num_rows();
		$json->upcoming_guests=$q1->num_rows();
		$json->messege="no data found";	
		}
		else
		{
			$json=array('status'=>'0','message'=>'succesfull','todays_guests'=>$q->num_rows(),'upcoming_guests'=>$q1->num_rows(),'guest_list'=>$json_array);
		}
			echo json_encode($json);
	}
}


function cancel()
{
	if(!empty($_REQUEST['user_id']&&$_REQUEST['guest_id']))
	{
		$q=$this->db->get_where("guest",array('status'=>'0','estate_user'=>$_REQUEST['user_id'],'guest_id'=>$_REQUEST['guest_id']))->num_rows();
		
		if($q=='1')
		{
		$this->db->where('estate_user',$_REQUEST['user_id']);
		$this->db->where('guest_id',$_REQUEST['guest_id']);
		$this->db->delete('guest');
		$obj->status="1";
		$obj->messege="canceled Succesfully";
		echo json_encode($obj);
		}else{
			$obj->status="0";
		$obj->messege="invald guest";
		echo json_encode($obj);
		}
	}else{$obj->status="2";
		$obj->messege="all feilds required";
		echo json_encode($obj);}
}

function splash()
{
	$img=$this->db->get_where('splash',array('id'=>'1'))->row()->image;
	if($img!=null)
	{
	$obj->status="1";
	$obj->image_path=base_url().'uploads/'.$img;
	echo json_encode($obj);
	}else{
		$obj->status="0";
	$obj->messege="image not found";
	echo json_encode($obj);
	}

}

function help()
{
	if(!empty($_REQUEST['user_id']))
	{
		$admin_id=$this->db->get_where('estate_user',array('id'=>$_REQUEST['user_id']))->row()->admin_id;
		$q=$this->db->get_where('estate_admin',array('id'=>$admin_id))->row();
		$obj->status="1";
		$obj->appartment=$q->name;
		$obj->contact_person_name=$q->cp_name;
		$obj->contact_person_mobile=$q->cp_mobile;
		echo json_encode($obj);
	}else{
		echo json_encode('userid is required');
	}
}
}
