<?php
class Admindb extends CI_Model {

    public function __construct()
    {
        //echo "varsity";
    }


    public  function saveUser()
    {
        $userdata=array(
            'first_name'=>$this->input->post('fname'),
            'last_name'=>$this->input->post('lname'),
            'password'=>$this->input->post('password'),
            'email'=>$this->input->post('email'),
            'gender'=>$this->input->post('gender'),
            'contact_number'=>$this->input->post('phone'),
            'role'=>$this->input->post('role'),
            'address'=>$this->input->post('address')
        );
        $this->db->insert('users',$userdata);

        $this->db->select('*');
        $this->db->from('users');
        $this->db->limit(1);
        $this->db->order_by('user_id','desc');
        $query=$this->db->get();
        return $query->row();
    }
    public  function saveChangedInfo($user_id)
    {
        $userdata=array(
            'first_name'=>$this->input->post('fname'),
            'last_name'=>$this->input->post('lname'),
            'password'=>$this->input->post('password'),
            'gender'=>$this->input->post('gender'),
            'contact_number'=>$this->input->post('phone'),
            'role'=>$this->input->post('role'),
            'address'=>$this->input->post('address')
        );
        $this->db->where('user_id',$user_id);
        $this->db->update('users',$userdata);
    }
    public  function viewUser($user_id=0)
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
    public  function viewAllUser($index, $limit)
    {
        $this->db->select('user_id,users.role,users.email, users.is_active, users.first_name, users.last_name, user_role.role_id,user_role.role_name');
        $this->db->from('users');
        $this->db->join('user_role','users.role=user_role.role_id');
        $this->db->limit($limit,$index);
        $this->db->order_by('role','asc');
        $query=$this->db->get();
        return $query->result_array();
    }
    public function MakeInactiveUser($UserId)
    {
        $this->db->where('user_id',$UserId);
        $this->db->update('users',array('is_active'=>0));
    }
    public function MakeActiveUser($UserId)
    {
        $this->db->where('user_id',$UserId);
        $this->db->update('users',array('is_active'=>1));
    }

    public  function getRoles()
    {
        $this->db->select('*');
        $this->db->from('user_role');
        $query=$this->db->get();
        return $query->result_array();
    }
}
?>