<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Site_model');
    }

    public function index() {
        $this->template->load('site/template/template_site', 'site/home');
    }

    public function emp_login() {
        $this->load->view('login');
    }

    public function profile() {
        $emp_name = $this->input->post('emp_name');
        $emp_pin = $this->input->post('emp_pin');
        
        $data = $this->Site_model->get_emp($emp_name, $emp_pin);
        $this->template->load('site/template/template_site', 'site/profile',$this->data);
    }

}
