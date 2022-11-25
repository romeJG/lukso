<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        //never load libraries or models in here.
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['title'] = "Lukso Wands";
        $data['active'] = "home";
        $this->load->view('include/header_view', $data);
        $this->load->view('include/navbar_view', $data);
        $this->load->view('home_view');
    }
}