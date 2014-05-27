<?php
class Appointmentdb extends CI_Model {

    public function __construct()
    {
        //echo "varsity";
    }


    public function addAppointment()
    {
        $data=array(
            'provider_id'=>$this->input->post('provider'),
            'patient_id'=>$this->input->post('patient'),
            'duration'=>$this->input->post('duration'),
            'start_date_time'=>$this->input->post('datetime'),
        );

        $status=$this->db->insert('appointments',$data);

        return $status;
    }
    public  function getAppointments($index=0,$limit=0)
    {
        $this->db->select('u1.user_id as pid,u2.user_id as did, u1.first_name as pfirst_name, u2.first_name as dfirst_name, u1.last_name as plast_name,u2.last_name as dlast_name, duration, status, start_date_time');
        $this->db->from('appointments');
        $this->db->join('users as u1','u1.user_id=appointments.patient_id');
        $this->db->join('users as u2','u2.user_id=appointments.provider_id');
        if(($limit!=0))
        {
            $this->db->limit($limit,$index);
        }
        $query =$this->db->get();
        return $query->result_array();
    }

}
?>