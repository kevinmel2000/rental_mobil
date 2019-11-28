<?php

class Transaksi extends CI_Controller {

    function __construct() {
        parent::__construct();

        // memanggil model yang di butuhkan
        $this->load->model("Customer_Model");
        $this->load->model("Mobil_Model");
        $this->load->model("Transaksi_Model");
        $this->load->model("Driver_Model");

        // pengecekan user yang sudah login atau belum
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    function index() {
        // menampilkan tabel view transaksi
        $data['transaksi'] = $this->Transaksi_Model->tampil_data()->result();
        $this->load->view('transaksi/transaksi_table_view', $data);
    }

    public function tambah_form() {
        // looping data customer di dalam form tambah data di transaksi
        $data['customers'] = $this->Customer_Model->tampil_data()->result();

        // looping data mobil di dalam form tambah data di transaksi
        $data['mobils'] = $this->Mobil_Model->tampil_data()->result();

        $data['drivers'] = $this->Driver_Model->tampil_data()->result();

        $this->load->view('transaksi/transaksi_form_view', $data);
    }

    public function simpan_form() {

        // mengambil nilai dari form input untuk di kirim ke model dan di save ke database
        $id_transaksi = uniqid(); // generate id_transaksi dengan uniqid secara random
        $id_customer = $this->input->post('id_customer');
        $id_mobil = $this->input->post('id_mobil');
        $id_driver = $this->input->post('id_driver');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_kembali = $this->input->post('tanggal_kembali');
        $qty_hari = $this->input->post('qty_hari');
        $denda = $this->input->post('denda');
        $status_transaksi = $this->input->post('status_transaksi');
        $jaminan = $this->input->post('jaminan');
        $tgl_transaksi = date("Y/m/d");
        $code_transaksi = "#" . rand();

        $data = array(
            'id_transaksi' => $id_transaksi,
            'id_customer' => $id_customer,
            'id_mobil' => $id_mobil,
            'id_driver' => $id_driver,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_kembali' => $tanggal_kembali,
            'qty_hari' => $qty_hari,
            'denda' => $denda,
            'status_transaksi' => $status_transaksi,
            'jaminan' => $jaminan,
            'tgl_transaksi' => $tgl_transaksi,
            'code_transaksi' => $code_transaksi
        );

        $this->Transaksi_Model->simpan_data($data, 'tbl_transaksi');

        // setelah proses menyimpan berhasil langsung di arahkan ke detail beserta mengirim parameter id_transaksi
        redirect(base_url() . "transaksi/detail/" . $id_transaksi);
    }

    public function edit_form($id) {
        $where = array('id_transaksi' => $id);
        $data['transaksi'] = $this->Transaksi_Model->edit_data($where, 'tbl_transaksi')->result();
        $data['customers'] = $this->Customer_Model->tampil_data()->result();
        $data['mobils'] = $this->Mobil_Model->tampil_data()->result();

        $this->load->view('transaksi/transaksi_edit_view', $data);
    }

    public function detail($id_transaksi) {
        // menampilkan data detail transaksi berdasarkan id_customer
        $data['transaksi'] = $this->Transaksi_Model->detail_data($id_transaksi)->result();
        $this->load->view('transaksi/transaksi_detail_view', $data);
    }

    public function update_form() {

        $id_transaksi = $this->input->post('id_transaksi');
        $id_customer = $this->input->post('id_customer');
        $id_mobil = $this->input->post('id_mobil');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_kembali = $this->input->post('tanggal_kembali');
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $qty_hari = $this->input->post('qty_hari');
        $denda = $this->input->post('denda');
        $status_transaksi = $this->input->post('status_transaksi');
        $jaminan = $this->input->post('jaminan');
        $code_transaksi = $this->input->post('code_transaksi');

        $data = array(
            'id_transaksi' => $id_transaksi,
            'id_customer' => $id_customer,
            'id_mobil' => $id_mobil,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_kembali' => $tanggal_kembali,
            'tgl_transaksi' => $tgl_transaksi,
            'qty_hari' => $qty_hari,
            'denda' => $denda,
            'status_transaksi' => $status_transaksi,
            'jaminan' => $jaminan,
            'code_transaksi' => $code_transaksi
        );

        $where = array(
            'id_transaksi' => $id_transaksi
        );

        $this->Transaksi_Model->update_data($where, $data, 'tbl_transaksi');
        redirect(base_url() . "transaksi/detail/" . $id_transaksi);
    }

    public function hapus($id_transaksi) {
        $where = array('id_transaksi' => $id_transaksi);
        $this->Transaksi_Model->hapus_data($where, 'tbl_transaksi');
        redirect('transaksi');
    }

}
