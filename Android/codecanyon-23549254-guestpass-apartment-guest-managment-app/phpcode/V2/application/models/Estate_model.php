<?php
class Estate_model extends CI_Model {

	function product_list() {
		
//$hasil = $this->db->get('estate_user');
$this->db->select('*,estate_user.id as id');
$this->db->from('estate_user');
$this->db->join('flat/property as b', 'b.id = estate_user.flat_id');

$hasil = $this->db->get();

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
		//	'addr' => $this->input->post('address'),
			'pin' => base64_encode($this->input->post('passd')),
		);

		$this->db->set($data);
		$this->db->where('id', $this->input->post('id'));
		$result = $this->db->update('estate_user');
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
		$result = $this->db->update('estate_user');
		return $result;
	}

	function delete_product() {
		$product_code = $this->input->post('product_code');
		$this->db->where('id', $product_code);
		$result = $this->db->delete('estate_user');
		return $result;
	}

	function product_list2() {
		$hasil = $this->db->get('estate_guard');
		return $hasil->result();
	}
	function product_list4() {
		$hasil = $this->db->get('estate_user');
		return $hasil->result();
	}

	function delete_product2() {
		$product_code = $this->input->post('product_code');
		$this->db->where('id', $product_code);
		$result = $this->db->delete('estate_guard');
		return $result;
	}

	function update_product2() {

		$data = array(
			'name' => $this->input->post('user'),
			'agency_name' => $this->input->post('agency_name'),
			'mob' => $this->input->post('mob'),
			'addr' => $this->input->post('addr'),
			'pin' =>  base64_encode($this->input->post('pin')),
			'mail' => $this->input->post('mail'),
		);

		$this->db->set($data);
		$this->db->where('id', $this->input->post('id'));
		$result = $this->db->update('estate_guard');
		return $result;
	}

		function product_list3() 
		{
		$hasil = $this->db->get('flat/property');
		return $hasil->result();
		}

		function update_product3() {

		$data = array(
			'prop_name' => $this->input->post('prop_name'),
			'prop_owner_name' => $this->input->post('prop_owner_name'),
			'description' => $this->input->post('description'),
		);

		$this->db->set($data);
		$this->db->where('id', $this->input->post('id'));
		$result = $this->db->update('flat/property');
		return $result;
	}

	function delete_product3() {
		$product_code = $this->input->post('product_code');
		$this->db->where('id', $product_code);
		$result = $this->db->delete('flat/property');
		return $result;
	}

	function guest_lists() {
	//	$hasil = $this->db->get('guest');
    //  	$this->db->select('*,b.name as name1');
    //     $this->db->from('guest,b');
    //     $this->db->join('flat/property as b', 'b.id = guest.flat_id');
    //     $hasil = $this->db->get();

$q=$this->db->query("select * from guest ORDER BY guest_id DESC")->result();
foreach($q as $r)
{
    $estate_user=$this->db->where('id',$r->estate_user)->get('estate_user')->row()->name;
    $estate_admin=$this->db->where('id',$r->estate_admin)->get('estate_admin')->row()->name;
    $flat_name=$this->db->where('id',$r->flat_id)->get('flat/property')->row()->prop_name;
     $guard_name=$this->db->where('id',$r->guard_id)->get('estate_guard')->row()->name;
     if(empty($r->image)){
         $image=base_url()."assets/images/boy.png";
     }else{
        $image =$r->image;
     }
     if(empty($r->docimage)){
          $docimage=base_url()."assets/images/doc.png";
     }else{
          $docimage =$r->docimage;
     }
     if($r->guest_role==1){
     $guest_role = 'Known';
     }else{
         $guest_role ='Unknown';
     }
     if($r->status==0){
         $status = 'Pending';
     }else if($r->status==1){
         $status ='Valid';
     }else if($r->status==2){
          $status ='Expired';
     }else if($r->status==3){
         $status = 'Checked In';
     }
     
    $hasil[]=array('name'=>$r->name,'estate_user'=>$estate_user,'estate_admin'=>$estate_admin,'flat_id'=>$flat_name,'guard_id'=>$guard_name,'guest_id'=>$r->guest_id,'response'=>$r->response,'mobile'=>$r->mobile,'guest_role'=>$guest_role,'total_guest'=>$r->total_guest,'a_date'=>$r->a_date,'time'=>$r->time,'address'=>$r->address,'purpose'=>$r->purpose,'checkin_time'=>$r->checkin_time,'image'=>$image,'docimage'=>$docimage,'checkin_guests'=>$r->checkin_guests,'status'=>$status);
}
	return $hasil;
	
	}


}