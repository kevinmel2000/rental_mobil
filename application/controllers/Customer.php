<?php

class Customer extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model("Customer_Model");
        $this->load->model("Mobil_Model");

        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    public function index() {
        $data['customers'] = $this->Customer_Model->tampil_data()->result();
        $this->load->view('customer/customer_table_view', $data);
    }

    public function tambah_form() {
        $this->load->view('customer/customer_form_view');
    }

    public function simpan_form() {

        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_telp = $this->input->post('no_telp');

        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telp' => $no_telp
        );

        $this->Customer_Model->simpan_data($data, 'tbl_customer');
        redirect('customer');
    }

    public function edit_form($id) {
        $where = array('id_customer' => $id);
        $data['customers'] = $this->Customer_Model->edit_data($where, 'tbl_customer')->result();
        $this->load->view('customer/customer_edit_view', $data);
    }

    public function update_form() {

        $id_customer = $this->input->post('id_customer');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_telp = $this->input->post('no_telp');

        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telp' => $no_telp
        );

        $where = array(
            'id_customer' => $id_customer
        );

        $this->Customer_Model->update_data($where, $data, 'tbl_customer');
        redirect('customer');
    }

    public function hapus($id_customer) {
        $where = array('id_customer' => $id_customer);
        $this->Customer_Model->hapus_data($where, 'tbl_customer');
        redirect('customer');
    }

}
