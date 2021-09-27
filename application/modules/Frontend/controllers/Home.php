<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('HomeModel');
        $this->load->model('State_model');
       
    }
    public function RequestCallBack()
    {
        $this->form_validation->set_rules('fname', 'FirstName', 'trim|required');
        $this->form_validation->set_rules('lname', 'LastName', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('country', 'Country', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');
        if ($this->form_validation->run() == false) {   
            $this->load->view('Frontend/index.php');
        } else {
           
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'city' => $this->input->post('city'),
                'country' => $this->input->post('country'),
                'message' => $this->input->post('message'),
            );
            $this->HomeModel->RequestCallBack($data);
                $data['message'] = "Data SuccessFully Saved"; 
                $this->load->view('index',$data);
        }
    }
    public function Peckup_Request_Form()
    {
        $this->form_validation->set_rules('source_station', 'Source_Station', 'trim|required');
        $this->form_validation->set_rules('destination', 'Destination', 'trim|required');
        $this->form_validation->set_rules('pickup_date_time', 'pickup_date_time', 'trim|required');
        $this->form_validation->set_rules('collection_point_address', 'collection_point_address', 'trim|required');
        $this->form_validation->set_rules('weight', 'Weight', 'trim|required');
        $this->form_validation->set_rules('articles_number', 'Articles_Number', 'trim|required');
        $this->form_validation->set_rules('company_name', 'Company_Name', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('fname', 'Fname', 'trim|required');
        $this->form_validation->set_rules('lname', 'Lname', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
        if ($this->form_validation->run() == false) {
            $this->load->view('home/index.php');
        } else {
            $data = array(
                'source_station' => $this->input->post('source_station'),
                'destination' => $this->input->post('destination'),
                'pickup_date_time' => $this->input->post('pickup_date_time'),
                'collection_point_address' => $this->input->post('collection_point_address'),
                'weight' => $this->input->post('weight'),
                'articles_number' => $this->input->post('articles_number'),
                'company_name' => $this->input->post('company_name'),
                'address' => $this->input->post('address'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
            );
            $this->HomeModel->Pickup_Request($data);
            redirect('pickupRequest');
        }
    }
    public function Message()
    {
        $this->form_validation->set_rules('fname', 'Fname', 'trim|required');
        $this->form_validation->set_rules('lname', 'Lname', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('country', 'Country', 'trim|required');
        $this->form_validation->set_rules('help', 'Help', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('Frontend/contactUs');
        } else {
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'city' => $this->input->post('city'),
                'country' => $this->input->post('country'),
                'help' => $this->input->post('help'),
            );
            $this->HomeModel->Message($data);
            redirect('contactUs');
        }
       
    }
    public function AssociateUs()
    {
        $this->form_validation->set_rules('fname', 'Fname', 'trim|required');
        $this->form_validation->set_rules('lname', 'Lname', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
        $this->form_validation->set_rules('brief_profile', 'Brief_profile', 'trim|required');
        if ($this->form_validation->run() == false) {
            // $this->load->view('partnerUs/associateUs');
            $this->load->view('includes/header');
            $data['state'] = $this->State_model->fetch_state();
            $this->load->view('partnerUs/associateUs',$data);
            $this->load->view('includes/footer');
        } else {
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'pincode' => $this->input->post('pincode'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'brief_profile' => $this->input->post('brief_profile'),
            );
            $this->HomeModel->AssociateUs($data);
            redirect('associateUs');
        }
       
    }
    public function AssociateVehicle()
    {
        $this->form_validation->set_rules('fname', 'Fname', 'trim|required');
        $this->form_validation->set_rules('lname', 'Lname', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
        $this->form_validation->set_rules('brief_profile', 'Brief_profile', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('Frontend/contactUs');
        } else {
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'address' => $this->input->post('address'),
                'type_owned' => $this->input->post('type_owned'),
                'no_of_truck' => $this->input->post('no_of_truck'),
                'preferred_route' => $this->input->post('preferred_route'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'pincode' => $this->input->post('pincode'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'brief_profile' => $this->input->post('brief_profile'),
            );
            $this->HomeModel->AssociateVehicle($data);
            redirect('attachVehicle');
        }
        
    }
    public function Career()
    {
        $this->form_validation->set_rules('fname', 'Fname', 'trim|required');
        $this->form_validation->set_rules('lname', 'Lname', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
        $this->form_validation->set_rules('job_profile', 'Job_profile', 'trim|required');
        if ($this->form_validation->run() == false) {
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'pincode' => $this->input->post('pincode'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'job_profile' => $this->input->post('job_profile'),
                'experience' => $this->input->post('experience'),
                'job_location1' => $this->input->post('job_location1'),
                'job_location2' => $this->input->post('job_location2'),
                'job_location3' => $this->input->post('job_location3'),
                'salary_expected' => $this->input->post('salary_expected'),
            );
            $this->HomeModel->Career($data);
            redirect($_SERVER['HTTP_REFERER']);
        }
       
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
