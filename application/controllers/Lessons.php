<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lessons extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }

    public function index()
    {
        $data = array();
        $data_content = array();

        $data_content['lessons'] = $this->Main_model->get_all_lessons(); //get_all_lessons fonksiyonunu çağırıyoruz ve sonucu $data değişkenimize atıyoruz.
        $data['content'] = $this->load->view('lessons', $data_content, true);
        $data['selected'] = 'lessons';

        $this->load->helper('url');
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar', $data);
        $this->load->view('includes/footer');
    }
}