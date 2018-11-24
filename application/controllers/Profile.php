<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('DB');
	}

	public function index()
	{
		//$this->load->view('welcome_message');
        $this->load->view('profile/layout');
	}
	
}
