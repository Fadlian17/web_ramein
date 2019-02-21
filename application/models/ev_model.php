<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ev_model extends CI_Model {

	private $_table = "event";

	public function rules()
	{
		return[
			['field' => 'ev_title',
            'label' => 'Event Title',
            'rules' => 'required'],

			['field' => 'ev_add',
            'label' => 'Event Address',
            'rules' => 'required'],

            ['field' => 'ev_datest',
            'label' => 'Date Start',
            'rules' => 'required'],

            ['field' => 'ev_dateend',
            'label' => 'Date End',
            'rules' => 'required'],

            ['field' => 'ev_desc',
            'label' => 'Event Description',
            'rules' => 'required'],
		];
	}
	
	public function getAll()
	{
		$hasil = $this->db->query("SELECT * FROM event");
		return $hasil;
	}

	public function getById()
	{
		return $this->session->userdata('event');
	}

	public function save()
	{

		$post = $this->input->post();
		$this->ev_title = $post["ev_title"];
		$this->ev_add = $post["ev_add"];
		$this->ev_datest = ($post["ev_datest"]);
		$this->ev_dateend = ($post["ev_dateend"]);
		$this->ev_desc = ($post["ev_desc"]);
		$this->db->insert($this->_table ,$this); 
	}

	public function update($id,$username,$password)
	{
		$hasil = $this->db->query("UPDATE event SET us_username='$username', us_password='$password' WHERE us_id='$id'");
		return $hasil;
	}

	public function delete($id){
		$hasil = $this->db->query("DELETE FROM event WHERE _id='$id'");
		return $hasil;
	}

	public function cek_login($table,$field1,$field2){		
		$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
	}
}

/* End of file ev_model.php */
/* Location: ./application/models/ev_model.php */