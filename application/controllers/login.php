<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library('upload');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('table');
        $this->load->library('form_validation');
        $this->load->library('email');

    }

    public function Index()
    {
        $data['title'] = TITLE.' | Log In';
        $data['navbar']='includes/navbar.php';
        $data['body']='login/index.php';


        $username=mysql_real_escape_string($this->input->post('username'));
        $this->form_validation->set_rules('username', 'Email', 'trim|required|max_length[30]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            $post=$this->input->post('post');

            if($post!="false")
                $data['message']="false";
            else
                $data['message']="";

            $data['main_content'] = 'login/index';
            $this->load->view('template', $data);
        }
        else
        {
            $status=$this->userdb->loginCheck();
            if($status==true)
            {
                $user=$this->userdb->getUserInformationByEmail($username);
                $role_id=$user->role;
                if($role_id==4)
                    redirect(base_url()."account/");
                else
                    redirect(base_url()."appointment/");
            }
            else
            {

                $data['message']="";
                $data['main_content'] = 'login/index';
                $data['error_message']="Invalid Username and Password";
                $this->load->view('template', $data);
            }
        }
    }
    public function RequestPassword()
    {

        $this->form_validation->set_rules('username', 'Email', 'trim|required|valid_email|callback_email_check');

        if ($this->form_validation->run() == FALSE)
        {

            $data['title'] = TITLE.' | Recover Password';
            $data['navbar']='includes/navbar.php';
            $data['body']='login/forgot_password.php';

            $post=$this->input->post('post');

            if($post!="false")
                $data['message']="false";
            else
                $data['message']="";


            $this->load->view('template', $data);
        }
        else
        {
            $data['success']=true;
            $email=$this->input->post('email');

            $this->email->from('sharif.cse.08@gmail.com', 'Patient Management System');
            $this->email->to(trim($email));

            //echo trim($email);
            $password=substr(md5(rand()),0,6);




            $mail_to_send="Your New Password is: ".$password;
            $mail_to_send.="\r\n \r\n \r\n Please change the password after login";
            $mail_to_send.="\r\n \r\n \r\nThanks";

            $this->email->subject('New Password Request');
            $this->email->message($mail_to_send);
            if($this->email->send())
            {
                $this->userdb->updatePasswordByEmail($email,$password);
                $data['message']='Your Password is successfully changed. Please check your mail.';
                $data['success']=true;
            }
            else
            {
                $data['message']='Sorry !! There are some server problem. Please try latter.';
            }

            $data['title'] = TITLE.' | Recover Password';
            $data['navbar']='includes/navbar.php';
            $data['body']='login/mail_sent.php';
            $this->load->view('template', $data);

        }


    }
    public function email_check($email)
    {
        $flag=$this->userdb->existingCheck($email);
        if($flag==true)
        {
            return $flag;
        }
        else
        {
            $this->form_validation->set_message('email_check', 'No user for this Email.');
            return $flag;
        }

    }
    public function test()
    {
        $this->load->view('login/index.php');

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */