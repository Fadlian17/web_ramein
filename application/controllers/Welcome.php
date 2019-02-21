<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function create()
	{	
		$this->load->view('create');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function browse()
	{
		$this->load->view('browse');
	}
	public function join()
	{
		$this->load->view('join');
	}

	public function send()
	{
		$this->load->view('send');
	}

}
