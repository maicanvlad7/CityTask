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
        $this->load->view('loginHeader');//load header here;
        $this->load->view('user/login');
        $this->load->view('loginFooter');//load footer here;
    }

    function register()
    {
        $this->load->view('registerHeader');//load header here;
        $this->load->view('user/register');
        $this->load->view('registerFooter');//load footer here;
    }
}