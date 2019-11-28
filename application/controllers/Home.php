<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Mobil_Model");
    }

    function index() {
        $data['mobils'] = $this->Mobil_Model->tampil_data()->result();
        $this->load->view('web/home_view', $data);
    }

}
