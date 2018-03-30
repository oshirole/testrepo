<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    private $layout, $data;

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->layout = $this->config->item("default_layout");
    }

    public function index() {
        $this->data['main_content'] = "site/dashboard";
        $this->load->view($this->layout, $this->data);
    }

    public function demo() {
        $this->data['main_content'] = "site/demo1";
        $this->load->view($this->layout, $this->data);
    }

}
