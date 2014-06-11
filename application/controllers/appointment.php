<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointment extends CI_Controller {

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
    $data['Providers']=$this->userdb->getProvider();
    $data['Patients']=$this->userdb->getPatient();

/*
    $total=$this->appointmentdb->getAppointments();
    $config['base_url'] = base_url().'appointment/index/';
    $config['total_rows'] =count($total); //echo count($total);;
    //$config['per_page'] = '1';
    $config['per_page'] = count($total);


    $config['num_links'] = count($total);

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

    $this->pagination->initialize($config);*/

    //load the model and get results

    $data['Appointments']=$this->appointmentdb->getAppointments();

    $data['title'] = TITLE;
    $data['menu']="appointment";
    $data['navbar']='includes/navbar_logged.php';
    $data['body'] = 'appointment/index.php';
    $this->load->view('template', $data);;
}
    public function user()
    {
        $role_id=$this->input->get('role_id',true);
        $user_id=$this->input->get('user_id', true);

        $data['Providers']=$this->userdb->getProvider();
        $data['Patients']=$this->userdb->getPatient();
        /*
        $total=$this->appointmentdb->getAppointments($user_id);
        $config['base_url'] = base_url().'appointment/user/'.$user_id;
        $config['total_rows'] =count($total); //echo count($total);;
        //$config['per_page'] = '1';
        $config['per_page'] = count($total);


        $config['num_links'] = count($total);

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

        $this->pagination->initialize($config);*/

        //load the model and get results

        $data['Appointments']=$this->appointmentdb->getAppointments($role_id, $user_id);

        $data['title'] = TITLE;
        $data['menu']="appointment";
        $data['navbar']='includes/navbar_logged.php';
        $data['body'] = 'appointment/index.php';
        $this->load->view('template', $data);;
    }
    public function add()
    {
        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules('provider', 'Provider ', 'trim|required');
        $this->form_validation->set_rules('patient', 'Patient ', 'trim|required');
        $this->form_validation->set_rules('duration', 'Duration ', 'trim|required');
        $this->form_validation->set_rules('datetime', 'Date/Time ', 'trim|required');


        if ($this->form_validation->run() == FALSE)
        {
            $response=array();
            $response['success']=false;
            $response['message']=validation_errors();
            echo json_encode($response);
        }
        else
        {
            $status=$this->appointmentdb->addAppointment();
            $response=array();
            if($status){
                $response['success']=true;
                $response['message']="Added Successfully";
            }
            else
            {
                $response['success']=false;
                $response['message']="Can not add successfully for unknown reason.";
            }

            echo json_encode($response);
        }
    }
    public function create_session()
    {

        $this->form_validation->set_rules('provider', 'Provider ', 'trim|required');
        $this->form_validation->set_rules('patient', 'Patient ', 'trim|required');
        $this->form_validation->set_rules('duration', 'Duration ', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['Providers']=$this->userdb->getProvider();
            $data['Patients']=$this->userdb->getPatient();
            $data['title'] = 'Create Sessions';
            $data['menu']="current_session";
            $data['navbar']='includes/navbar_logged.php';
            $data['body'] = 'appointment/create_session.php';
            $this->load->view('template', $data);

        }
        else
        {
            $status=$this->appointmentdb->addAppointment();
            redirect( base_url()."appointment/current_session");
        }

    }
    public function current_session()
    {
        $data['title'] = 'Current Session';
        $data['menu']="appointment";
        $data['navbar']='includes/navbar_logged.php';
        $data['page_description']="This page is for current session";
        $data['body'] = 'includes/blank_page.php';
        $this->load->view('template', $data);
    }

        /* Ajax functionality*/
    public  function deleteAppointment()
    {
        $appointmentId=$this->input->post('appointment_id');
        $success=$this->appointmentdb->deleteAppointment($appointmentId);

        $response=array();
        $response['success']=$success;
        if($success)
            $response['message']="Appointment deleted successfully";
        else
            $response['message']="Error in deleting appointment";

        echo json_encode($response);

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */