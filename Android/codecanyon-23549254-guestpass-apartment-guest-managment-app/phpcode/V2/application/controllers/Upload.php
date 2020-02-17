<?php
class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function Do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 5464;
                $config['max_height']           = 3640;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('splash', $error);
                }
                else
                {
                        $data =$this->upload->data();
                        $data=array('image'=>$data['file_name']);
                        
$this->load->model('main');
$this->main->insert($data);
                        $this->load->view('splash', $data);
                }
        }

}
?>