<?php
class Appointmentdb extends CI_Model {

    public function __construct()
    {
        //echo "varsity";
    }


    public function addAppointment()
    {
        $datetime=$this->input->post('datetime');
        if($datetime=="")
        {
            $datetime =date('Y-m-d H:i:s');
        }
        $tokenid=uniqid(md5(rand()),true);
        $data=array(
            'provider_id'=>$this->input->post('provider'),
            'patient_id'=>$this->input->post('patient'),
            'duration'=>$this->input->post('duration'),
            'start_date_time'=>$datetime,
            'meeting_token'=>$tokenid
        );

        $status=$this->db->insert('appointments',$data);

        return $status;
    }
    public  function getAppointments($role_id=0, $user_id=0)
    {
        $this->db->select('appointment_id, u1.user_id as pid,u2.user_id as did, u1.first_name as pfirst_name, u2.first_name as dfirst_name, u1.last_name as plast_name,u2.last_name as dlast_name, duration, status, start_date_time');
        $this->db->from('appointments');
        $this->db->join('users as u1','u1.user_id=appointments.patient_id');
        $this->db->join('users as u2','u2.user_id=appointments.provider_id');
        if(($role_id==1))
        {
            $this->db->where('provider_id',$user_id);
        }
        else if(($role_id==2))
        {
            $this->db->where('patient_id',$user_id);
        }
        else
        {

        }

        $this->db->order_by('start_date_time','desc');
        $query =$this->db->get();
        return $query->result_array();
    }
    public  function getMeetinginfo($meetingID=0)
    {
        $userdata=$this->session->all_userdata();

        $this->db->select('appointment_id as meetingID, meeting_token as meetingToken, u1.user_id as patient_id,u2.user_id as provider_id, u1.first_name as providerName, u2.first_name as patientName, duration');
        $this->db->from('appointments');
        $this->db->join('users as u1','u1.user_id=appointments.patient_id');
        $this->db->join('users as u2','u2.user_id=appointments.provider_id');
        if($meetingID!=0)
        {
            $this->db->where('appointment_id',$meetingID);
        }
        if(($userdata['role_id']==1))
        {
            $this->db->where('provider_id',$userdata['user_id']);
        }
        else if(($userdata['role_id']==2))
        {
            $this->db->where('patient_id',$userdata['user_id']);
        }
        else{}


        $this->db->order_by('start_date_time','desc');
        $query =$this->db->get();
        return $query->result_array();
    }
    public function deleteAppointment($appointmentId)
    {
        $this->db->where('appointment_id',$appointmentId);
        $success=$this->db->delete('appointments');

        return $success;
    }
}
?>