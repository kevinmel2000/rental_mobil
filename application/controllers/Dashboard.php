<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    function index() {
        $this->load->view('dashboard/dashboard_view');
    }

}
