<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_all_posts()
    {
        //get all entry
        $query = $this->db->get('entries');
        return $query->result();
    }

    function add_new_entry($title,$body,$date)
    {
        $data = array(
            'entry_title' => $title,
            'entry_body' => $body,
            'entry_date' => $date
        );
        $this->db->insert('entries',$data);
    }

}

