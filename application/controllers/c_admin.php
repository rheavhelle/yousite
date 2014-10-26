<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('m_login','',TRUE);
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
    }

    function admin() {
        $this->load->view('admin');
    }
 
    function index() {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $this->load->view('admin', $data);
        } else {
        //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
    }
 
    function logout() {
         //remove all session data
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect(base_url(''), 'refresh');
     }
 
}