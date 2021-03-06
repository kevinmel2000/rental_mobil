<?php

class Type_Mobil_Model extends CI_Model {

    public function tampil_data() {
        $this->db->order_by("id_type desc");
        return $this->db->get('tbl_type_mobil');
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
