<?php

class Siswa_model extends CI_Model
{
    public function getsiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function getsiswabyid($nis = null)
    {
        if ($nis == null){
            return $this->db->get('siswa')->result_array();
        } else {
            return $this->db->get_where('siswa', ['nis' => $nis])->row_array();
        }
    }

    public function JoinSiswaKelas($nis = null)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', 'LEFT');
        $this->db->join('status', 'status.id = siswa.status_id', 'LEFT');
        $query= $this->db->get();
        return $query->result_array();
        

    }
    public function JoinSiswaKelasA1($kelas= 1)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', );
        $this->db->join('status', 'status.id = siswa.status_id', 'LEFT');
        $query= $this->db->where('kelas_id',$kelas);
        $query= $this->db->get();
        return $query->result_array();
        

    }
    public function JoinSiswaKelasA2($kelas= 2)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', );
        $this->db->join('status', 'status.id = siswa.status_id', 'LEFT');
        $query= $this->db->where('kelas_id',$kelas);
        $query= $this->db->get();
        return $query->result_array();
        

    }
    public function JoinSiswaKelasA3($kelas= 3)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', );
        $this->db->join('status', 'status.id = siswa.status_id', 'LEFT');
        $query= $this->db->where('kelas_id',$kelas);
        $query= $this->db->get();
        return $query->result_array();
        

    }
    public function JoinSiswaKelasA4($kelas= 4)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', );
        $this->db->join('status', 'status.id = siswa.status_id', 'LEFT');
        $query= $this->db->where('kelas_id',$kelas);
        $query= $this->db->get();
        return $query->result_array();
        

    }
    public function JoinSiswaKelasA5($kelas= 5)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', );
        $this->db->join('status', 'status.id = siswa.status_id', 'LEFT');
        $query= $this->db->where('kelas_id',$kelas);
        $query= $this->db->get();
        return $query->result_array();
        

    }
    public function JoinSiswaKelasS1($kelas= 6)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', );
        $this->db->join('status', 'status.id = siswa.status_id', 'LEFT');
        $query= $this->db->where('kelas_id',$kelas);
        $query= $this->db->get();
        return $query->result_array();
        

    }
    public function JoinSiswaKelasS2($kelas= 7)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', );
        $this->db->join('status', 'status.id = siswa.status_id', 'LEFT');
        $query= $this->db->where('kelas_id',$kelas);
        $query= $this->db->get();
        return $query->result_array();
        

    }
    public function JoinSiswaKelasS3($kelas= 8)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', );
        $this->db->join('status', 'status.id = siswa.status_id', 'LEFT');
        $query= $this->db->where('kelas_id',$kelas);
        $query= $this->db->get();
        return $query->result_array();
        

    }

    public function tambah()
    {
        $data = [
            'nis' => htmlspecialchars($this->input->post('nis')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'kelas_id' => htmlspecialchars($this->input->post('kelas_id')),
            'status_id' => null,
            'time' => date('Y-m-d H:i:s')
        ];
    }

    
    
}
