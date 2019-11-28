<?php

class Transaksi_Model extends CI_Model {

    public function tampil_data() {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->join('tbl_customer', 'tbl_customer.id_customer = tbl_transaksi.id_customer');
        $this->db->join('tbl_mobil', 'tbl_mobil.id_mobil = tbl_transaksi.id_mobil', 'inner');
        $this->db->join('tbl_driver', 'tbl_driver.id_driver = tbl_transaksi.id_driver', 'inner');
        $this->db->order_by("id_transaksi desc");
        $query = $this->db->get();
        return $query;
    }

    public function simpan_data($data, $table) {
        $this->db->insert($table, $data);
    }

    public function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data($id_transaksi) {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->join('tbl_customer', 'tbl_customer.id_customer = tbl_transaksi.id_customer');
        $this->db->join('tbl_mobil', 'tbl_mobil.id_mobil = tbl_transaksi.id_mobil', 'inner');
        $this->db->join('tbl_driver', 'tbl_driver.id_driver = tbl_transaksi.id_driver', 'inner');
        $this->db->where('id_transaksi', $id_transaksi);
        $query = $this->db->get();
        return $query;
    }

}
