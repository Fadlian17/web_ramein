<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('us_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function auth(){
			if($this->us_model->getById())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect('index.php/Welcome/');

            }else{

                //jika session belum terdaftar
                //set form validation
                $this->form_validation->set_rules('us_username', 'Username', 'required');
                $this->form_validation->set_rules('us_password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $us_username = $this->input->post("us_username", TRUE);
                $us_password = $this->input->post('us_password', TRUE);

                //checking data via model
                $checking = $this->us_model->cek_login('user', array('us_username' => $us_username), array('us_password' => $us_password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'us_id'   => $apps->us_id,
                            'us_username' => $apps->us_username,
                            'us_password' => $apps->us_password,
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('Welcome/');

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login', $data);
                }

            }else{

                $this->load->view('login');
            }
            }

        }

	public function add(){
		$us_username=htmlspecialchars($this->input->post('us_username',TRUE),ENT_QUOTES);
		$us_email=htmlspecialchars($this->input->post('us_email',TRUE),ENT_QUOTES);
        $us_password=htmlspecialchars($this->input->post('us_password',TRUE),ENT_QUOTES);

        		$user = $this->us_model;
        		$validation = $this->form_validation;
        		$validation->set_rules($user->rules());
 					
 					if($validation->run()){
 						$user->save();
 						$this->session->set_flashdata('success','Success to Saving');
 					}
                   redirect('Welcome/login');
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('info',"Anda telah Keluar");
		redirect(base_url('Welcome/login'));
		redirect($url);
	}
}
