<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

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
        $total_users=$this->userdb->viewUser();
        $config['base_url'] = base_url().'account/index/';
        $config['total_rows'] =count($total_users);
        //$config['per_page'] = '3';
        $config['per_page'] = count($total_users);

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

        $Users=$this->userdb->viewAllUser($this->uri->segment('3'),$config['per_page']);


        $data['users']=$Users;

        $data['title'] = TITLE;
        $data['navbar']='includes/navbar_logged.php';
        $data['body'] = 'account/index.php';
        $this->load->view('template', $data);;

	}

    public function MakeInactiveUser($Page,$UserId)
    {
        $this->admindb->MakeInactiveUser($UserId);
        //redirect(base_url()."admin/ViewAllUser/".$Page."/");
    }
    public function MakeActiveUser($Page, $UserId)
    {
        $this->admindb->MakeActiveUser($UserId);
        //redirect(base_url()."admin/ViewAllUser/".$Page."/");
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
    public function GetUser()
    {
        $UserId=$this->input->get('user');
        $data['user']=$this->userdb->getUserInformationByID($UserId);

        echo json_encode($data);
    }
    public function SaveUser()
    {
        $data=array();
        $action=$this->input->post('action');
        if($action=='update')
        {
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|matches[passwordc]');
            $this->form_validation->set_rules('passwordc', 'Password Confirmation', 'trim');
            $this->form_validation->set_rules('phone', 'Phone', 'trim');
            $this->form_validation->set_rules('acceptMsg', 'Accept Text Messages', 'trim');
            $this->form_validation->set_rules('role', 'Role', 'trim|required');
            $this->form_validation->set_rules('dob', 'Date of birth', 'trim');
            $this->form_validation->set_rules('record_num', 'Record Number', 'trim|alpha_numeric');

            if ($this->form_validation->run() == FALSE)
            {
                $data['errors']=validation_errors();
            }
            else
            {
                $UserId=$this->input->post('user_id');
                $data['user']=$this->userdb->saveChangedInfo($UserId);
                $data['success']="";

            }

        }
        else if($action=='create')
        {
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');;
            $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passwordc]');
            $this->form_validation->set_rules('passwordc', 'Password Confirmation', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone', 'trim');
            $this->form_validation->set_rules('acceptMsg', 'Accept Text Messages', 'trim');
            $this->form_validation->set_rules('role', 'Role', 'trim|required');
            $this->form_validation->set_rules('dob', 'Date of birth', 'trim');
            $this->form_validation->set_rules('record_num', 'Record Number', 'trim|alpha_numeric');

            if ($this->form_validation->run() == FALSE)
            {
                $data['errors']=validation_errors();
            }
            else
            {
                $data['user']=$this->userdb->saveUser();
            }

        }
        echo json_encode($data);
    }
    public function Activity()
    {
        $UserId=$this->input->post('user');
        $action=$this->input->post('action');
        if($action=='active')
        {
            $this->userdb->MakeActiveUser($UserId);
        }
        else if($action=='remove')
        {
            $this->userdb->MakeInactiveUser($UserId);
        }
        $data['user_id']=$UserId;
        echo json_encode($data);
    }
    public function test()
    {

       $data['id']=$this->input->post('user');
       echo json_encode($data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */