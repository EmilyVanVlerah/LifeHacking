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