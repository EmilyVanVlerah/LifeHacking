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

    public function logsign()//login page
    {
        $this->load->view('view_logsign');
    }

    public function user_login() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                $this->load->view('site/profile');
            }else{
                $this->load->view('site/logsign');
            }
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->blog_model->login($data);
            if ($result == TRUE) {

                $username = $this->input->post('username');
                $result = $this->blog_model->validate_user($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->user_email,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('view_profile');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('view_profile', $data);
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('site/homepage');
    }


    public function register()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        $this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[12]|trim');
        $this->form_validation->set_rules('username', 'username', 'required|min_length[3]|max_length[12]|trim');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[2]|md5');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|trim');
        if(!$this->form_validation->run())
        {
            $this->load->view('view_logsign');
        }
        else
        {
            $this->blog_model->register_user();
            $this->load->view('view_homepage');
        }
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






    public function profile()//login page
    {
        $this->load->view('view_profile');
    }

    function user_profile()
    {
        $data['query'] = $this->blog_model->getProfile();
        $this->load->view('view_profile',$data);
    }

    public function editprofile()//login page
    {
        $this->load->view('view_editprofile');
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */