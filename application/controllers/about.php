<?php
defined('BASEPATH') or exit('No direct script access allowed');

class about extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'About';
        $this->load->view('template/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('template/footer');
    }
}
 
 /* End of file Controllername.php */
