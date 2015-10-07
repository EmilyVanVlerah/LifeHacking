<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {


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

    public function allhacks()//login page
    {
        $this->load->view('view_allhacks');
    }

    public function addhacks()//login page
    {
        $this->load->view('view_addhacks');
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