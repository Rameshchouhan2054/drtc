<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter-HMVC
 *
 * @package    CodeIgniter-HMVC
 * @author     N3Cr0N (N3Cr0N@list.ru)
 * @copyright  2019 N3Cr0N
 * @license    https://opensource.org/licenses/MIT  MIT License
 * @link       <URI> (description)
 * @version    GIT: $Id$
 * @since      Version 0.0.1
 * @filesource
 *
 */

class Frontend extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('State_model');
    }

    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('index');
        $this->load->view('includes/footer');
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
    function customer_care()
    {
        $this->load->view('includes/header');
        $this->load->view('customer_care/index');
        $this->load->view('includes/footer');
    }
    function timeAndDistance()
    {
        $this->load->view('includes/header');
        $this->load->view('customer_care/timeAndDistance');
        $this->load->view('includes/footer');
    }
    function pickupRequest()
    {
        $this->load->view('includes/header');
        $this->load->view('customer_care/pickupRequest');
        $this->load->view('includes/footer');
    }
    function networkMap()
    {
        $this->load->view('networkMap');
    }
    function partnerUs()
    {
        $this->load->view('includes/header');
        $this->load->view('partnerUs/index');
        $this->load->view('includes/footer');
    }
    function associateUs()
    {
        $this->load->view('includes/header');
        $data['state'] = $this->State_model->fetch_state();
        $this->load->view('partnerUs/associateUs', $data);
        $this->load->view('includes/footer');
    }
    function attachVehicle()
    {
        $this->load->view('includes/header');
        $data['state'] = $this->State_model->fetch_state();
        $this->load->view('partnerUs/attachVehicle',$data);
        $this->load->view('includes/footer');
    }

    function career()
    {
        $this->load->view('includes/header');
        $data['state'] = $this->State_model->fetch_state();
        $this->load->view('partnerUs/career',$data);
        $this->load->view('includes/footer');
    }
    function contactUs()
    {
        $this->load->view('contactUs');
    }
}
