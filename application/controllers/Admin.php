<?php

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Admin_Model");

        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    public function index() {
        if ($this->session->userdata('level') === '1') {
            $data['admins'] = $this->Admin_Model->tampil_data()->result();
            $this->load->view('admin/admin_table_view', $data);
        } else {
            echo "Access Denied";
        }
    }

    public function tambah_form() {
        if ($this->session->userdata('level') === '1') {
            $this->load->view('admin/admin_form_view');
        } else {
            echo "Access Denied";
        }
    }

    public function edit_form($id) {
        if ($this->session->userdata('level') === '1') {
            $where = array('user_id' => $id);
            $data['admins'] = $this->Admin_Model->edit_data($where, 'tbl_users')->result();
            $this->load->view('admin/admin_edit_view', $data);
        } else {
            echo "Access Denied";
        }
    }

    public function edit_password_form($id) {
        if ($this->session->userdata('level') === '1') {
            $where = array('user_id' => $id);
            $data['admins'] = $this->Admin_Model->edit_data($where, 'tbl_users')->result();
            $this->load->view('admin/admin_edit_password_view', $data);
        } else {
            echo "Access Denied";
        }
    }

    public function simpan_form() {
        if ($this->session->userdata('level') === '1') {
            $user_name = $this->input->post('user_name');
            $user_email = $this->input->post('user_email');
            $user_password = $this->input->post('user_password');
            $user_level = $this->input->post('user_level');

            $data = array(
                'user_name' => $user_name,
                'user_email' => $user_email,
                'user_password' => md5($user_password),
                'user_level' => $user_level
            );

            $this->Admin_Model->simpan_data($data, 'tbl_users');
            redirect('admin');
        } else {
            echo "Access Denied";
        }
    }

    public function update_form() {
        if ($this->session->userdata('level') === '1') {

            $user_id = $this->input->post('user_id');
            $user_name = $this->input->post('user_name');
            $user_email = $this->input->post('user_email');
            $user_level = $this->input->post('user_level');

            $data = array(
                'user_id' => $user_id,
                'user_name' => $user_name,
                'user_email' => $user_email,
                'user_level' => $user_level
            );

            $where = array(
                'user_id' => $user_id
            );

            $this->Admin_Model->update_data($where, $data, 'tbl_users');
            redirect('admin');
        } else {
            echo "Access Denied";
        }
    }

    public function update_password_form() {
        if ($this->session->userdata('level') === '1') {
            $user_id = $this->input->post('user_id');
            $user_password = $this->input->post('user_password');

            $data = array(
                'user_id' => $user_id,
                'user_password' => md5($user_password)
            );

            $where = array(
                'user_id' => $user_id
            );

            $this->Admin_Model->update_data($where, $data, 'tbl_users');
            redirect('admin');
        } else {
            echo "Access Denied";
        }
    }

    public function hapus($user_id) {
        if ($this->session->userdata('level') === '1') {
            $where = array('user_id' => $user_id);
            $this->Admin_Model->hapus_data($where, 'tbl_users');
            redirect('admin');
        } else {
            echo "Access Denied";
        }
    }

}
