<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    function index()
    {
        $this->load->view('index');
    }

    function aboutUs()
    {
        $this->load->view('aboutUs');
    }

    function our_services()
    {
        $this->load->helper('url');

        $this->load->view('our_services');
    }

    function timeAndDistance()
    {
        $this->load->view('customer_care/timeAndDistance');
    }
    function pickupRequest()
    {
        $this->load->view('customer_care/pickupRequest');
    }
}
