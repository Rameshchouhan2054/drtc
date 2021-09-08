<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        if (!$this->session->logged_in) {
            redirect(base_url('login'));
        }

        $this->load->model('HomeModel');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['request'] = $this->HomeModel->Request_Call();
        $data['message'] = $this->HomeModel->Message();
        $data['pickup'] = $this->HomeModel->Pickup_Request();
        $this->load->view('Backend/admin/index.php' ,$data);
    }
}
