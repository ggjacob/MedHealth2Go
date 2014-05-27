<?php
class Userdb extends CI_Model {

    public function __construct()
    {

    }

    public function loginCheck()
    {
        $email=$this->input->post('username');
        $email=mysql_real_escape_string($email);
        $password=$this->input->post('password');

        $query = $this->db->get_where('users', array('email' => $email, 'password' =>  $password,'active'=>1));

        if($query->row_array()==null)
        {
            return false;
        }
        else
        {
            $user_data=$query->row();
            $role=$user_data->role;
            $session_data=array('logged_in'=>true,'email'=>$email, 'role_id'=>$role,'user_id'=>$user_data->user_id);
            $this->session->set_userdata($session_data);
            return true;
        }

    }
    public function getUserInformationByID($user_id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $this->db->join('user_role','users.role=user_role.role_id');
        $this->db->limit(1);
        $this->db->order_by('user_id','desc');
        $query=$this->db->get();
        return $query->row();
    }
    public function getUserInformationByEmail($email)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('user_role','users.role=user_role.role_id');
        $this->db->where('email',$email);
        $this->db->limit(1);
        $this->db->order_by('user_id','desc');
        $query=$this->db->get();
        return $query->row();
    }
    public function updatePasswordByEmail($email,$password)
    {
        $data=array(
            'password'=>$password
        );
        $this->db->where('email',$email);
        $this->db->update('users',$data);
    }
    public function getProvider()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('user_role','users.role=user_role.role_id');
        $this->db->where('user_role.role_id',1);
        $query =$this->db->get();
        return $query->result_array();
    }
    public function getPatient()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('user_role','users.role=user_role.role_id');
        $this->db->where('user_role.role_id',2);
        $query =$this->db->get();
        return $query->result_array();
    }
    public function saveUser()
    {
        $userdata=array(
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'email'=>$this->input->post('email'),
            'record_num'=>$this->input->post('record_num'),
            'phone'=>$this->input->post('phone'),
            'role'=>$this->input->post('role'),
            'password'=>$this->input->post('password'),
            'dob'=>$this->input->post('dob'),
            'acceptMsg'=>$this->input->post('acceptMsg'),
            'active'=>$this->input->post('active')
        );
        $this->db->insert('users',$userdata);

        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('user_role','users.role=user_role.role_id');
        $this->db->limit(1);
        $this->db->order_by('user_id','desc');
        $query=$this->db->get();
        return $query->row();
    }
    public function saveChangedInfo($user_id)
    {
        $userdata=array(
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'email'=>$this->input->post('email'),
            'record_num'=>$this->input->post('record_num'),
            'phone'=>$this->input->post('phone'),
            'role'=>$this->input->post('role'),
            'dob'=>$this->input->post('dob'),
            'acceptMsg'=>$this->input->post('acceptMsg'),
            'active'=>$this->input->post('active')
        );

        if(isset($_POST['changePasswd']))
            $userdata['password']=$this->input->post('password');
        $this->db->where('user_id',$user_id);
        $this->db->update('users',$userdata);

        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('user_role','users.role=user_role.role_id');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get();
        return $query->row();
    }
    public function viewUser($user_id=0)
    {
        $this->db->select('*');
        $this->db->from('users');
        if($user_id!=0)
            $this->db->where('user_id',$user_id);
        $query=$this->db->get();
        if($user_id!=0)
            return $query->row();
        else
            return $query->result_array();
    }
    public function viewAllUser($index, $limit)
    {
        $this->db->select('user_id,users.role,users.email, users.active, users.first_name, users.last_name, user_role.role_id,user_role.role_name');
        $this->db->from('users');
        $this->db->join('user_role','users.role=user_role.role_id');
        $this->db->limit($limit,$index);
        $this->db->order_by('user_id','asc');
        $query=$this->db->get();
        return $query->result_array();
    }
    public function MakeInactiveUser($UserId)
    {
        $this->db->where('user_id',$UserId);
        $this->db->update('users',array('active'=>0));
    }
    public function MakeActiveUser($UserId)
    {
        $this->db->where('user_id',$UserId);
        $this->db->update('users',array('active'=>1));
    }
    public function getRoles()
    {
        $this->db->select('*');
        $this->db->from('user_role');
        $query=$this->db->get();
        return $query->result_array();
    }
    public function existingCheck($email)
    {
        $query = $this->db->get_where('users', array('email' => $email,'active'=>1));

        if($query->row_array()==null)
        {
            return false;
        }
        else
        {
            return true;
        }

    }

}
?>