<?php
defined('BASEPATH') or exit('No direct script access allowed');

class arsip extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('arsip_model');
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $data['arsip'] = $this->arsip_model->getAllarsip();
        if ($this->input->post('keyword')) {
            $data['arsip'] = $this->arsip_model->cariDataArsip();
        }
        $this->load->view('template/header', $data);
        $this->load->view('arsip/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Arsip Surat';
        $this->load->view('template/header', $data);
        $this->load->view('arsip/tambah', $data);
        $this->load->view('template/footer');
    }


    public function proses_arsip()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filesurat')) {
            $this->session->set_flashdata('flash-data', 'Format data salah');
            redirect('arsip/tambah');
        } else {
            $upload_data = $this->upload->data();
            $nomorsurat = $this->input->post('nomorsurat');
            $kategori = $this->input->post('kategori');
            $judul = $this->input->post('judul');

            $insert = array(
                'nomorsurat' => $nomorsurat,
                'kategori' => $kategori,
                'judul' => $judul,
                'filesurat' => $upload_data['file_name'],
            );
            $this->session->set_flashdata('flash-data', 'Data Arsip berhasil disimpan');
            $this->arsip_model->tambahdataarsip($insert);
            redirect('arsip/tambah', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->arsip_model->hapusdata($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('arsip', 'refresh');
    }

    public function download($filesurat)
    {
        force_download('.uploads/' . $filesurat, NULL);
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Arsip';
        $data['arsip'] = $this->arsip_model->getarsipByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('arsip/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Arsip';
        $data['arsip'] = $this->arsip_model->getdatarsipByID($id);
        $data['kategori'] = ['Undangan', 'Pengumuman', 'Nota Dinas', 'Pemberitahuan'];

        //$this->form_validation->set_rules('fieldname', 'fieldlabel', 'trim|requied|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('nomorsurat', 'Nomor Surat', 'required');
        $this->form_validation->set_rules('judul', 'Kategori', 'required');
        $this->form_validation->set_rules('filesurat', 'File Surat', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('arsip/edit', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->arsip_model->ubahdataarsip();
            //untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flasdatanya)
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('arsip', 'refresh');
        }
    }
}
 
 /* End of file Controllername.php */
