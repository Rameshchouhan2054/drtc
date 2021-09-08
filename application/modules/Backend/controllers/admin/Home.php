<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('Backend/admin/index.php');
    }

    public function RequestCallBack()
    {
        $this->form_validation->set_rules('fname', 'FName', 'trim|required');
        $this->form_validation->set_rules('lname', 'LName', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('country', 'Country', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('home/index.php');
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
            $this->HomeModel->Save($data);
        }
        redirect('home');
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
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
            );
            $this->HomeModel->Peckup_Request($data);
        }
        redirect('home');
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
            $this->load->view('home/index.php');
        } else {
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('Lname'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'city' => $this->input->post('city'),
                'country' => $this->input->post('country'),
                'help' => $this->input->post('help'),
            );
            $this->HomeModel->Message($data);
        }
        redirect('home');
    }

    public function Request()
    {
        $data['request'] = $this->HomeModel->Request_Call();
        $this->load->view('admin/request_call', $data);
    }
    public function Message_Request()
    {
        $data['message'] = $this->HomeModel->Message();
        $this->load->view('admin/message', $data);
    }
    public function Pickup_Request()
    {
        $data['pickup'] = $this->HomeModel->Pickup_Request();
        $this->load->view('admin/pickup_request', $data);
    }
}
