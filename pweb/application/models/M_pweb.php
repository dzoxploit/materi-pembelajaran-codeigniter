<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pweb extends CI_Model {
    function read(){
        $this->db->order_by('nama_mahasiswa','desc');
        return $this->db->get('tbl_nilai')->result_array();
    }
    function create(){
        $nilai1 = $this->input->post('n_pert1');
        $nilai2 = $this->input->post('n_pert2');
        $nilai3 = $this->input->post('n_pert3');
        $nilai4 = $this->input->post('n_pert4');
        $rata = ($nilai1 + $nilai2 + $nilai3 + $nilai4) / 4;

        if($rata <= 75) {
            $keterangan = "Tidak Lulus";
        }elseif($rata >= 75){
            $keterangan = "Lulus";
        }else{
            $keterangan = "Nilai Tidak Valid";
        }

        $data = [
            'nama_mahasiswa' => $this->input->post('nama_mhs'),
            'nilai1' => $nilai1,
            'nilai2' => $nilai2,
            'nilai3' => $nilai3,
            'nilai4' => $nilai4,
            'rata' => $rata,
            'keterangan' => $keterangan
        ];

        $this->db->insert('tbl_nilai', $data);

        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan', 'Ditambah');
            redirect('pweb', 'refresh');
        }
    }


    function edit($id){
        return $this->db->get_where('tbl_nilai', ["id_nilai" => $id])->row();
    }

    function update($id){
        $nilai1 = $this->input->post('n_pert1');
        $nilai2 = $this->input->post('n_pert2');
        $nilai3 = $this->input->post('n_pert3');
        $nilai4 = $this->input->post('n_pert4');
        $rata = ($nilai1 + $nilai2 + $nilai3 + $nilai4) / 4;

        if($rata <= 75) {
            $keterangan = "Tidak Lulus";
        }elseif($rata >= 75){
            $keterangan = "Lulus";
        }else{
            $keterangan = "Nilai Tidak Valid";
        }

        $data = [
            'nama_mahasiswa' => $this->input->post('nama_mhs'),
            'nilai1' => $nilai1,
            'nilai2' => $nilai2,
            'nilai3' => $nilai3,
            'nilai4' => $nilai4,
            'rata' => $rata,
            'keterangan' => $keterangan
        ];

        $this->db->update('tbl_nilai', $data, array('id_nilai' => $id));

        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan', 'Diupdate');
            redirect('pweb', 'refresh');
        }   
    }

    function delete($id){
        
        $this->db->delete('tbl_nilai', array('id_nilai' => $id));

        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan', 'Dihapus');
            redirect('pweb', 'refresh');
        }   
    }

}