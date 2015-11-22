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

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),

        );

        $query = $this->db->insert('users', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }


}



