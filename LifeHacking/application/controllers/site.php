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

    public function homeuser()
    {
        $this->load->view('view_homeuser');
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
                $this->load->view('site/userhome');
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
                $result = $this->login_database->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->user_email,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('view_homeuser');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('view_homeuser', $data);
            }
        }
    }

    public function logout() {
        $data = ['id_user', 'username'];
        $this->session->unset_userdata($data);

        redirect('site/homepage');
    }


    public function register()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
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

    public function add_hacks()
    {
        /*$data['entries'] = $this->model_function->get_posts(40, 0);*/

        //this function will retrive all entry in the database
        $data['query'] = $this->blog_model->get_all_posts();
        $this->load->view('view_addhacks',$data);
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
            $this->blog_model->add_new_entry($title,$body,$date);
            $this->session->set_flashdata('message', '1 new entry added!');
            redirect('site/add_hacks');
        }
    }

    public function selectedhack()//login page
    {
        $this->load->view('view_selectedhack');
    }

    public function profile()//login page
    {
        $this->load->view('view_profile');
    }

    public function editprofile()//login page
    {
        $this->load->view('view_editprofile');
    }

    public function bookmark()//login page
    {
        $this->load->view('view_bookmark');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */