<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->lang->load('auth');
    }
	
	public function index()
	{
		$this->load->view('landingHeader');//load header here;
        $this->load->view('landing');
        $this->load->view('loginFooter');//load footer here;
	}
}
