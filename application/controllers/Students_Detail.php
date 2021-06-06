<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students_Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }

    public function index()
    {
        $student_id = 1;
        if (@$_GET["student_id"]) {
            $student_id = $_GET["student_id"];
        }

        $data = array();
        $data_content = array();

        $data_content['student_info'] = $this->Main_model->get_students_detail($student_id); //get_students_detail fonksiyonunu çağırıyoruz ve sonucu $data değişkenimize atıyoruz.
        $data_content['lessons'] = $this->Main_model->get_all_lessons(); //get_all_lessons fonksiyonunu çağırıyoruz ve sonucu $data değişkenimize atıyoruz.  

        $data['content'] = $this->load->view('students_detail', $data_content, true);
        $data['selected'] = 'students';

        $this->load->helper('url');
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar', $data);
        $this->load->view('includes/footer');
    }
}