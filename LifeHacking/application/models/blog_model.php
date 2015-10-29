<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //Add Hacks Get to display
    function getPosts()
    {
        //get all entry
        $query1 = $this->db->get('entries');
        return $query1->result();
    }

    //Add Hacks Photo
    public function insert_file($filename){
        $data = array(
          'entry_pic' => $filename
        );

        $this->db->insert('entries',$data);
        return $this->db->insert_id();
    }

    //Adding Hacks to db
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

    //adding user to db
    function register_user()
    {
        $data['name'] = $this->input->post('name');
        $data['username'] = $this->input->post('username');
        $data['password'] = md5($this->input->post('password'));
        $data['email'] = ($this->input->post('email'));
        $this->db->insert('users', $data);
    }

    //Getting users from db to login
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


    //getting users from db to display
    function getProfile()
    {
        //get all entry
        $query = $this->db->get('users');
        return $query->result();


    }

}



