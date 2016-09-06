<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Site_model');
    }

    public function index() {
        echo "This is home page";
    }
 

}
