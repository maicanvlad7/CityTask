<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->lang->load('auth');
    }
    
    function login()
    {
        //load header here;
        $this->load->view('user_actions/login');
        //load footer here;
    }
}