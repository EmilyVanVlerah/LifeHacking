<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getPosts()
    {
        //get all entry
        $query1 = $this->db->get('entries');
        return $query1->result();


    }

    public function insert_file($filename){
        $data = array(
          'entry_pic' => $filename
        );

        $this->db->insert('entries',$data);
        return $this->db->insert_id();
    }

    function add_new_entry($title,$body,$date,$photo)
    {
        $data = array(
            'entry_title' => $title,
            'entry_body' => $body,
            'entry_date' => $date,
            'entry_pic' => $photo
        );
        $this->db->insert('entries',$data);
    }


    function register_user()
    {
        $data['name'] = $this->input->post('name');
        $data['username'] = $this->input->post('username');
        $data['password'] = md5($this->input->post('password'));
        $data['email'] = ($this->input->post('email'));
        $this->db->insert('users', $data);
    }

    public function login($data) {

        $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function verifyUser(){
        //getting parameters from view
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        $this->load->model('loginModel');
        $query = $this->loginModel->validate($data);

        if ($query){
            //if the user c validated
            //data variable is created becx we want to put username in session
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );

            $this->session->set_userdata($data);
            redirect('sessionController/dashboard_area');
        }
        else
        {
            $this->index();
        }
    }

    function getProfile(){
        $this->db->select("name,username,password,email");
        $query = $this->db->get('users');
        return $query->result_array();
    }

}



