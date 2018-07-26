<?php
	class Frontmodel extends CI_model{
	    
		function dologin($uname,$pass){
			//$query = $this->db->query('SELECT * FROM lp_users WHERE email = "'.$uname.'" AND password = "'.$pass.'"');
            $this->db->select('*');
            $this->db->from('lp_users');
            $this->db->where('email',$uname);
            $this->db->where('password',$pass);
            $this->db->where('active_status',1);
            $this->db->where('user_type',0);
			//$this->db->last_query();
            $query = $this->db->get();
			return $query->row(); 
		}
		function getuser($table,$condition){
			$this->db->select("*");
			$this->db->from($table);
			$this->db->where($condition);
			$query = $this->db->get()->row();
			return $query;
		}
		
		function adduser($data=array())
        {			
			$this->db->insert('lp_users', $data);
			$insert_id = $this->db->insert_id();
			return  $insert_id;
		}

		public function forgotpassword($email)
		{
			$this->db->select('*');
			$this->db->from('lp_users');
			$this->db->where('email', $email);
			$query=$this->db->get();
			return $query->row();
		}
		
	public function sendpassword($data)
    {
       
    }

    public function auth_token($user_id=0, $email_verification='')
    {
       $this->db->select('*');
       $this->db->from('lp_users');
       $this->db->where('id',$user_id);
       $this->db->where('email_varification',$email_verification);

       $query = $this->db->get();
       return $query->row();
    }

    public function active_user($user_id = 0)
    {
        $this->db->set('active_status',1);
        $this->db->where('id',$user_id);
        return $this->db->update('lp_users');
    }

    public function resetPassword($user_id=0,$password='')
    {
        $this->db->set('password',$password);
        $this->db->where('id',$user_id);
        return $this->db->update('lp_users');
    }

    public function checkUniqueEmail($email = '')
    {
    	$this->db->select('*');
    	$this->db->from('lp_users');
    	$this->db->where('email',$email);

    	$query = $this->db->get();
    	return $query->row();
    }

    public function getuserByID($userId=0)
    {
        $this->db->select('*');
        $this->db->from('lp_users');
        $this->db->where('id',$userId);

        $query = $this->db->get();
        return $query->row();
    }
		
	}
	
?>