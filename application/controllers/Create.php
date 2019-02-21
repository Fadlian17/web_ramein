<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ev_model');
	}

	public function index()
	{

		$this->load->view('create');
	}

	public function add()
	{
		$ev_title=htmlspecialchars($this->input->post('ev_title',TRUE),ENT_QUOTES);
		$ev_add=htmlspecialchars($this->input->post('us_email',TRUE),ENT_QUOTES);
        $ev_datest=htmlspecialchars($this->input->post('ev_datest',TRUE,'Y-m-d'),ENT_QUOTES);
        $ev_dateend=htmlspecialchars($this->input->post('ev_dateend',TRUE,'Y-m-d'),ENT_QUOTES);
		$ev_desc=htmlspecialchars($this->input->post('ev_desc',TRUE),ENT_QUOTES);

        		$user = $this->ev_model;
        		$validation = $this->form_validation;
        		$validation->set_rules($user->rules());
 					
 					if($validation->run()){
 						$user->save();
 						$this->session->set_flashdata('success','Success to Saving');
 					}
                   redirect('Welcome/browse');
		
	}
}

/* End of file Create.php */
/* Location: ./application/controllers/Create.php */