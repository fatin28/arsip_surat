<?php
defined('BASEPATH') or exit('No direct script access allowed');

class arsip_model extends CI_Model
{

    public function getAllarsip()
    {
        $query = $this->db->get('arsip');
        return $query->result_array();
    }

    public function tambahdataarsip($insert)
    {
        return $this->db->insert('arsip', $insert);
    }

    public function ubahdataarsip()
    {
        $data = [
            "nomorsurat" => $this->input->post('nomorsurat', true), // ini sama dengan htmlspecialchars($_POST['nama])
            "kategori" => $this->input->post('kategori', true),
            "judul" => $this->input->post('judul', true),
            "filesurat" => $this->input->post('filesurat', true)
        ];
        //$this->db->insert('Table', $object);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('arsip', $data);
    }

    public function hapusdata($id)
    {
        $this->db->where('id', $id);
         $this->db->delete('arsip');
    }
    
    public function getarsipByID($id)
    {
        return $this->db->get_where('arsip', ['id' => $id])->row_array();
    }

    public function cariDataArsip()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('judul', $keyword);
        return $this->db->get('arsip')->result_array();
    }

    public function datatabels()
    {
        $query = $this->db->order_by('id', 'DESC')->get('arsip');
        return $query->result();
    }
}

 /* End of file Controllername.php */
