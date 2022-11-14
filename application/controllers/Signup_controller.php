<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup_controller extends CI_Controller
{
    public function __construct()
    {
        //never load libraries or models in here.
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['title'] = "Sign Up | Lukso";
        $data['active'] = "signup";
        $this->load->view('include/header_view', $data);
        $this->load->view('include/navbar_view', $data);
        $this->load->view('signup_view');
    }
}
