<?php

class Type_mobil extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model("Type_Mobil_Model");
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    function index() {
        $data['types'] = $this->Type_Mobil_Model->tampil_data()->result();
        $this->load->view('type_mobil/type_table_view', $data);
    }

    public function tambah_form() {
        $this->load->view('type_mobil/type_form_view');
    }

    public function simpan_form() {

        $nama_type = $this->input->post('nama_type');

        $data = array(
            'nama_type' => $nama_type
        );

        $this->Type_Mobil_Model->simpan_data($data, 'tbl_type_mobil');
        redirect('type_mobil');
    }

    public function edit_form($id) {
        $where = array('id_type' => $id);
        $data['types'] = $this->Type_Mobil_Model->edit_data($where, 'tbl_type_mobil')->result();
        $this->load->view('type_mobil/type_edit_view', $data);
    }

    public function update_form() {

        $id_type = $this->input->post('id_type');
        $nama_type = $this->input->post('nama_type');

        $data = array(
            'id_type' => $id_type,
            'nama_type' => $nama_type
        );

        $where = array(
            'id_type' => $id_type
        );

        $this->Type_Mobil_Model->update_data($where, $data, 'tbl_type_mobil');
        redirect('type_mobil');
    }

    public function hapus($id_type) {
        $where = array('id_type' => $id_type);
        $this->Type_Mobil_Model->hapus_data($where, 'tbl_type_mobil');
        redirect('type_mobil');
    }

}
