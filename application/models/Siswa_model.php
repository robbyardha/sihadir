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

    public function JoinSiswaKelas()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', 'LEFT');
        $this->db->join('status', 'status.id = siswa.status_id', 'LEFT');
        $query= $this->db->get();
        return $query->result_array();
        

    }
}
?>