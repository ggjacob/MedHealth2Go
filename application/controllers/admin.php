<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function index()
	{
        $data['title'] = 'Patient Management System - '.Date('Y').' >>Sign in';
        $data['navbar']='includes/navbar_admin.php';
        $data['body'] = 'admin/index.php';
        $this->load->view('template', $data);
	}
    public function Create()
    {
        $data['roles']=$this->admindb->getRoles();
        $data['title'] = 'Patient Management System - '.Date('Y').' >>Sign in';
        $data['navbar']='includes/navbar_admin.php';
        $data['body'] = 'admin/create_user.php';
        $data['message']=false;
        $this->load->view('template', $data);
    }
    public function CreateUser()
    {
        $data['roles']=$this->admindb->getRoles();

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required');
        $this->form_validation->set_rules('phone', 'Contact Number', 'trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = 'Patient Management System - '.Date('Y').' >>Sign in';
            $data['navbar']='includes/navbar_admin.php';
            $data['body'] = 'admin/create_user.php';
            $data['message']="validate_error";
            $this->load->view('template', $data);
        }
        else
        {
            $UserData=$this->admindb->saveUser();
            $data['title'] = 'Patient Management System - '.Date('Y').' >>Create New User';
            $data['navbar']='includes/navbar_admin.php';
            $data['body'] = 'admin/edit_user.php';
            $data['userInfo']=$UserData;
            $data['message']="New account is successfully created !!! Please check the stored information below.";
            $data['success']=true;
            $this->load->view('template', $data);

            //redirect(base_url()."Admin/ViewUser/".$UserData->user_id."/".$data['message']);
        }

    }
    public function ViewAllUser()
    {
        $total_users=$this->admindb->viewUser();
        $config['base_url'] = base_url().'admin/ViewAllUser/';
        $config['total_rows'] =count($total_users);
        $config['per_page'] = '4';

        $config['num_links'] = count($total_users);

        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        //load the model and get results

        $Users=$this->admindb->viewAllUser($this->uri->segment('3'),$config['per_page']);


        $data['title'] = 'Patient Management System - '.Date('Y').' >>View All Users';
        $data['navbar']='includes/navbar_admin.php';
        $data['body'] = 'admin/view_all_user.php';

        $data['users']=$Users;
        //print_r($Users);
        $this->load->view('template', $data);
    }
    public function ViewUser($UserId,$message="",$success=false)
    {
        $data['title'] = 'Patient Management System - '.Date('Y').' >>Sign in';
        $data['navbar']='includes/navbar_admin.php';
        $data['body'] = 'admin/edit_user.php';
        $data['message']=$message;
        $data['success']=$success;
        $data['userInfo']=$this->admindb->viewUser($UserId);

        $this->load->view('template', $data);
    }
    public function Edit($UserId)
    {
        $data['roles']=$this->admindb->getRoles();

        $data['title'] = 'Patient Management System - '.Date('Y').' >>Edit User';
        $data['navbar']='includes/navbar_admin.php';
        $data['body'] = 'admin/edit_user.php';
        $data['message']=false;
        $data['userInfo']=$this->admindb->viewUser($UserId);

        $this->load->view('template', $data);
    }
    public function EditUser($UserId)
    {
        $data['roles']=$this->admindb->getRoles();

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        //$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required');
        $this->form_validation->set_rules('phone', 'Contact Number', 'trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = 'Patient Management System - '.Date('Y').' >>Edit User';
            $data['navbar']='includes/navbar_admin.php';
            $data['body'] = 'admin/edit_user.php';
            $data['message']="validate_error";
            $data['userInfo']=$this->admindb->viewUser($UserId);

            $this->load->view('template', $data);
        }
        else
        {
            $UserData=$this->admindb->saveChangedInfo($UserId);
            $data['title'] = 'Patient Management System - '.Date('Y').' >>Sign in';
            $data['navbar']='includes/navbar_admin.php';
            $data['body'] = 'admin/edit_user.php';
            $data['userInfo']=$this->admindb->viewUser($UserId);
            $data['message']="Updated Successfully !!! Please check the stored information below.";
            $data['success']=true;

            $this->load->view('template', $data);
            //redirect(base_url()."Admin/ViewUser/".$UserData->user_id."/".$data['message']."/".$data['success']);
        }
    }
    public function MakeInactiveUser($Page,$UserId)
    {
        $this->admindb->MakeInactiveUser($UserId);
        redirect(base_url()."admin/ViewAllUser/".$Page."/");
    }
    public function MakeActiveUser($Page, $UserId)
    {
        $this->admindb->MakeActiveUser($UserId);
        redirect(base_url()."admin/ViewAllUser/".$Page."/");
    }
    public function email_check($email)
    {
        $flag=$this->userDB->existingCheck($email);
        echo $flag;
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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */