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
    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
    public function index()
    {
        $this->load->view('index');
        //$this->load->view('frontend/dashboard');
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
}
