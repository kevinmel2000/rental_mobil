<?php

class Driver extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model("Driver_Model");

        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    public function index() {
        $data['drivers'] = $this->Driver_Model->tampil_data()->result();
        $this->load->view('driver/driver_table_view', $data);
    }

    public function tambah_form() {
        $this->load->view('driver/driver_form_view');
    }

    public function simpan_form() {

        $nik = $this->input->post('nik');
        $nama_driver = $this->input->post('nama_driver');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_telp = $this->input->post('no_telepon');
        $harga_driver = $this->input->post('harga_driver');

        $data = array(
            'nik' => $nik,
            'nama_driver' => $nama_driver,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telepon' => $no_telp,
            'harga_driver' => $harga_driver
        );

        $this->Driver_Model->simpan_data($data, 'tbl_driver');
        redirect('driver');
    }

    public function edit_form($id) {
        $where = array('id_driver' => $id);
        $data['drivers'] = $this->Driver_Model->edit_data($where, 'tbl_driver')->result();
        $this->load->view('driver/driver_edit_view', $data);
    }

    public function update_form() {

        $id_driver = $this->input->post('id_driver');
        $nik = $this->input->post('nik');
        $nama_driver = $this->input->post('nama_driver');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_telp = $this->input->post('no_telepon');
        $harga_driver = $this->input->post('harga_driver');

        $data = array(
            'nik' => $nik,
            'nama_driver' => $nama_driver,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telepon' => $no_telp,
            'harga_driver' => $harga_driver
        );

        $where = array(
            'id_driver' => $id_driver
        );

        $this->Driver_Model->update_data($where, $data, 'tbl_driver');
        redirect('driver');
    }

    public function hapus($id_driver) {
        $where = array('id_driver' => $id_driver);
        $this->Driver_Model->hapus_data($where, 'tbl_driver');
        redirect('driver');
    }

}
