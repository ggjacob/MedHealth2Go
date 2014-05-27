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
    public function index()
    {
        $data['Providers']=$this->userdb->getProvider();
        $data['Patients']=$this->userdb->getPatient();


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

        $this->pagination->initialize($config);

        //load the model and get results

        $data['Appointments']=$this->appointmentdb->getAppointments($this->uri->segment('3'),$config['per_page']);

        $data['title'] = TITLE;
        $data['navbar']='includes/navbar_logged.php';
        $data['body'] = 'appointment/index.php';
        $this->load->view('template', $data);;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */