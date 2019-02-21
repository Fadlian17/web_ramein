<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class us_model extends CI_Model{

	private $_table = "user";

	public function rules()
	{
		return[
			['field' => 'us_username',
            'label' => 'Username',
            'rules' => 'required'],

			['field' => 'us_email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'us_password',
            'label' => 'Password',
            'rules' => 'required'],
		];
	}
	
	public function getAll()
	{
		$hasil = $this->db->query("SELECT * FROM user");
		return $hasil;
	}

	public function getById()
	{
		return $this->session->userdata('user');
	}

	public function save()
	{

		$post = $this->input->post();
		$this->us_username = $post["us_username"];
		$this->us_email = $post["us_email"];
		$this->us_password = ($post["us_password"]);
		$this->db->insert($this->_table ,$this); 
	}

	public function update($id,$username,$password)
	{
		$hasil = $this->db->query("UPDATE user SET us_username='$username', us_password='$password' WHERE us_id='$id'");
		return $hasil;
	}

	public function delete($id){
		$hasil = $this->db->query("DELETE FROM user WHERE us_id='$id'");
		return $hasil;
	}

	public function cek_login($user, $us_username, $us_password){		
		$this->db->select('*');
        $this->db->from($user);
        $this->db->where($us_username);
        $this->db->where($us_password);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}
