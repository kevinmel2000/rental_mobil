<?php

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('web/contact_view');
    }

}
