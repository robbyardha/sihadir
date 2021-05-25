<?php

class Acara_model extends CI_Model
{
    public function getAcara()
    {
        return $this->db->get('acara')->result_array();
    }

    public function getAcaraById($id = null)
    {
        if ($id == null) {
            return $this->db->get('acara')->result_array();
        } else {
            return $this->db->get_where('acara', ['id' => $id])->row_array();
        }
    }

    public function tambah()
    {
        $data = [
            'nama_acara' => htmlspecialchars($this->input->post('nama_acara', true))
        ];
        // var_dump($data);
        // die;
        $this->db->insert('acara', $data);
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id', true));
        $data = [
            'nama_acara' => htmlspecialchars($this->input->post('nama_acara', true))
        ];
        $this->db->where('id', $id);
        $this->db->update('acara', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('acara');
    }
}
