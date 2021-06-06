<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $content_data['identities'] = $this->Main_model->get_all_identities(); //get_all_identities fonksiyonunu çağırıyoruz ve sonucu $content_data değişkenimize atıyoruz.
        $data['content'] = $this->load->view('dashboard', $content_data, TRUE); //content_data verilerini dashboard view'ına html formatında gönderme 
        $data['selected'] = "students";

        $this->load->view('includes/header');
        $this->load->view('includes/sidebar', $data);
        $this->load->view('includes/footer');
    }
}