<?php

class Siswa_model extends CI_Model
{
    public function getsiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function getsiswabyid()
    {
        if ($nis == null){
            return $this->db->get('siswa')->result_array();
        } else {
            return $this->db->get_where('siswa', ['nis' => $nis])->row_array();
        }
    }
}
?>