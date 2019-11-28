<?php

class Mobil_model extends CI_Model {

    public function tampil_data() {
        $this->db->select('*');
        $this->db->from('tbl_mobil');
        $this->db->join('tbl_type_mobil', 'tbl_type_mobil.id_type = tbl_mobil.id_type');
        $this->db->order_by("id_mobil desc");
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

}
