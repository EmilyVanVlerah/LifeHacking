<?php
    class Model_function extends CI_Model{

    public function can_log_in(){

        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));

        $query = $this->db->get('users');

        if($query->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }


    public function add_temp_users($key)
    {

        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'key' => $key

        );

        $query = $this->db->insert('temp_user', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function is_key_valid($key){
        $this->db->where('key', $key);
        $query = $this->db->get('temp_user');

        if ($query->num_rows() == 1){
            return true;
        } else {
            return false;
        }

    }

    public function add_user($key){

        $this->db->where('key', $key);
        $temp_user = $this->db->get('temp_user');

        if ($temp_user){
            $row = $temp_user->row();

            $data = array(
                'username' => $row->username,
                'email' => $row->email,
                'password' => $row->password
            );

            $did_add_user = $this->db->insert('user', $data);

        }

        if($did_add_user){
            $this->db->where('key', $key);
            $this->db->delete('temp_user');
            return $data['email'];
        } return false;

    }

//site code below



        public function login_validation(){//login validation function

            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');

            $this->form_validation->set_rules('password', 'Password', 'required|md5');

            if($this->form_valdation->run()){

                $data = array(
                    'email' => $this->input->post('email'),
                    'is_logged_in' => 1
                );


                $this->session->set_userdata($data);

                redirect('index.php/site/profile');
            }else{
                $this->load->view('logsign');
            }
        }

        public function signup_validation(){

            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean|is_unique[users.username]');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');

            $this->form_validation->set_message('is_unique[users.username]', 'That email address already exists.');

            $this->form_validation->set_message('is_unique[users.email]', 'That email address already exists.');

            if ($this->form_validation->run()){

                //generate a random key
                $key = md5(uniqid());

                //load library for email
                $this->load->library('email', array('mailtype'=>'html'));

                //load model for adding users to DB
                $this->load->model('model_sitefunction');

                //write the email
                $this->email->from('confirm@hackinlife.com', "Hackin' Life");
                $this->email->to($this->input->post('email'));
                $this->email->subject("Confirm your account.");
                $message = "<p>Thank you for signing up for Life Hacking. We are glad to have you as a member. Please click the link below to confirm your Account.</p>";
                $message .= "<p><a href='".base_url()."index.php/site/logsign/$key'>Confirm here!</a></p>";

                $this->email->message($message);

                //send an email to the user
                if ($this->model_sitefunction->add_temp_users($key)) {
                    if ($this->email->send()) {
                        echo "The email has been sent.";
                    } else echo "Could not send the email.";
                } else echo "Problem adding to database";



            } else {
                $this->load->view('view_logsign');
            }
        }

        public function validate_credentials(){//validate credentials function
            $this->load->model('model_sitefunction');

            if($this->model_sitefunction->can_log_in()){
                return true;
            }else{
                $this->form_validation->set_message('validate_credentials', 'Incorrect username/password.');
                return false;
            }
        }

        public function logout(){//logout button funtion
            $this->session->sess_destroy();
            redirect('index.php/site/logsign');
        }

        public function register_user($key)
        {
            $this->load->model('model_sitefunction');

            if ($this->model_sitefunction->is_key_valid($key)) {
                if ($newemail = $this->model_sitefunction->add_user($key)) {

                    $data = array(
                        'email' => $newemail,
                        'is_logged_in' => 1
                    );

                    $this->session->set_userdata($data);
                    redirect('index.php/site/profile');

                } else echo "failed to add user, please try again.";
            } else echo "invalid key";

        }