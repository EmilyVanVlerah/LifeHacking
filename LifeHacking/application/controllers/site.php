<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
        $this->load->helper(array('form', 'url'));

    }

    public function index()//homepage
    {
        $this->homepage();
    }

    public function homepage()//homepage
    {
        $this->load->view('view_homepage');
    }

    public function about()//login page
    {
        $this->load->view('view_about');
    }

    public function contact()//login page
    {
        $this->load->view('view_contact');
    }

    public function job()//login page
    {
        $this->load->view('view_job');
    }




    public function sign()//login page
    {
        $this->load->view('view_sign');
    }

    public function register()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        $this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[12]|trim');
        $this->form_validation->set_rules('username', 'username', 'required|min_length[3]|max_length[12]|trim');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[2]|md5');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|trim');

        if(!$this->form_validation->run() == FALSE)
        {
            $this->load->view('view_logsign');
        }
        else
        {
            $this->blog_model->register_user();

            $this->load->view('view_homepage');
        }
    }

    function send_confirmation() {

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);


        $name = $this->input->post('name');
        $email = $this->input->post('email');

        $this->load->library('email');  	//load email library
        $this->email->from('admin@lifehacking.com', 'Life Hacking'); //sender's email
        $address = $email;	//receiver's email
        $subject="Welcome to Life Hacking!";	//subject
        $message= /*-----------email body starts-----------*/
            'Thanks for signing up, '.$name.'!

        Your email has been stored and you will be getting you newsletters.

        Thank you for signing up.

        Please click this link to browse Life Hacking.

        ' . base_url() . 'index.php/site' ;
        /*-----------email body ends-----------*/
        $this->email->to($address);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }



    public function hack_insert(){
        $this->load->helper('form');
        $this->load->library(array('form_validation','session'));

        //set validation rules
        $this->form_validation->set_rules('entry_title', 'Title', 'required|xss_clean|max_length[200]');
        $this->form_validation->set_rules('entry_body', 'Body', 'required|xss_clean');
        $this->form_validation->set_rules('entry_date', 'Date', 'required|xss_clean|max_length[200]');

        if ($this->form_validation->run() == FALSE)
        {
            //if not valid
            $this->load->view('view_addhacks');
        }
        else
        {
            //if valid
            $title = $this->input->post('entry_title');
            $body = $this->input->post('entry_body');
            $date = $this->input->post('entry_date');
            $photo = $this->input->post('entry_pic');
            $this->blog_model->add_new_entry($title,$body,$date,$photo);
            $this->session->set_flashdata('message', '1 new entry added!');
            redirect('site/add_hacks');
        }
    }

    public function upload_file() {

        $status = "";
        $msg = "";
        $filename = 'entry_pic';

        if(empty($_POST['title'])){
            $status = "error";
            $msg = "Please Enter Title";
        }

        if ($status != "error"){
            $config['upload_path'] = APPPATH . 'file/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload($filename)){
                $status = 'error';
                $msg = $this->upload->display_errors('','');
            }else{
                $this->load->model('blog_model');
                $data = $this->upload->data();
                $file_id= $this->blog_model->insert_file($data['file_name']);
                if($file_id){
                    redirect('site/add_hacks');
                }else{
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Please try again";
                }
            }

            @unlink($_FILES[$filename]);
        }

        echo jason_encode(array('status'=>$status, 'msg'=>$msg));
    }

    public function add_hacks()
    {
        //this function will retrive all entry in the database
        $data['query1'] = $this->blog_model->getPosts();
        $this->load->view('view_addhacks',$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */