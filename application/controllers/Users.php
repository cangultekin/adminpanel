<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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

        $data_content['users'] = $this->Main_model->get_all_users(); //get_all_users fonksiyonunu çağırıyoruz ve sonucu $data değişkenimize atıyoruz.
        $data['content'] = $this->load->view('users', $data_content, true);
        $data['selected'] = 'users';

        $this->load->helper('url');
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar', $data);
        $this->load->view('includes/footer');
    }
}