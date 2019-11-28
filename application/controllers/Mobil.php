<?php

class Mobil extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model("Mobil_Model");
        $this->load->model("Type_Mobil_Model");
        $this->load->library('upload');

        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    function index() {
        $data['mobils'] = $this->Mobil_Model->tampil_data()->result();
        $this->load->view('mobil/mobil_table_view', $data);
    }

    public function tambah_form() {

        $data['types'] = $this->Type_Mobil_Model->tampil_data()->result();
        $this->load->view('mobil/mobil_form_view', $data);
    }

    public function simpan_form() {
        $merk_mobil = $this->input->post('merk_mobil');
        $id_type = $this->input->post('id_type');
        $plat_nomor = $this->input->post('plat_nomor');
        $warna_mobil = $this->input->post('warna_mobil');
        $tahun_pembuatan = $this->input->post('tahun_pembuatan');
        $harga_sewa = $this->input->post('harga_sewa');
        // get foto
        $config['upload_path'] = './assets/upload/mobil';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];
        $this->upload->initialize($config);
        if (!empty($_FILES['fotopost']['name'])) {
            if ($this->upload->do_upload('fotopost')) {
                $foto = $this->upload->data();

                $data = array(
                    'merk_mobil' => $merk_mobil,
                    'id_type' => $id_type,
                    'plat_nomor' => $plat_nomor,
                    'warna_mobil' => $warna_mobil,
                    'tahun_pembuatan' => $tahun_pembuatan,
                    'harga_sewa' => $harga_sewa,
                    'foto' => $foto['file_name']
                );

                $this->Mobil_Model->simpan_data($data, 'tbl_mobil');
                redirect('mobil');
            } else {
                die("gagal upload");
            }
        } else {
            echo "tidak masuk";
        }
    }

    public function edit_form($id) {

        $where = array('id_mobil' => $id);
        $data['mobils'] = $this->Mobil_Model->edit_data($where, 'tbl_mobil')->result();
        $data['types'] = $this->Type_Mobil_Model->tampil_data()->result();

        $this->load->view('mobil/mobil_edit_view', $data);
    }

    public function hapus($id_mobil, $foto) {
        $path = './assets/upload/mobil/';
        @unlink($path . $foto);
        $where = array('id_mobil' => $id_mobil);
        $this->Mobil_Model->hapus_data($where, 'tbl_mobil');
        return redirect('mobil');
    }

    public function update_form() {
        $id_mobil = $this->input->post('id_mobil');
        $merk_mobil = $this->input->post('merk_mobil');
        $id_type = $this->input->post('id_type');
        $plat_nomor = $this->input->post('plat_nomor');
        $warna_mobil = $this->input->post('warna_mobil');
        $tahun_pembuatan = $this->input->post('tahun_pembuatan');
        $harga_sewa = $this->input->post('harga_sewa');
        $path = './assets/upload/mobil/';
        $where = array(
            'id_mobil' => $id_mobil
        );
        // get foto
        $config['upload_path'] = './assets/upload/mobil';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        // cek file foto yg akan di upload
        $this->upload->initialize($config);
        if (!empty($_FILES['fotopost']['name'])) {
            if ($this->upload->do_upload('fotopost')) {
                $foto = $this->upload->data();
                $data = array(
                    'merk_mobil' => $merk_mobil,
                    'id_type' => $id_type,
                    'plat_nomor' => $plat_nomor,
                    'warna_mobil' => $warna_mobil,
                    'tahun_pembuatan' => $tahun_pembuatan,
                    'harga_sewa' => $harga_sewa,
                    'foto' => $foto['file_name']
                );

                // hapus foto yang lama pada direktori
                @unlink($path . $this->input->post('filelama'));
                $this->Mobil_Model->update_data($where, $data, 'tbl_mobil');
                redirect('mobil');
            } else {
                die("gagal update");
            }
        } else {
            echo "tidak masuk";
        }
    }

}
