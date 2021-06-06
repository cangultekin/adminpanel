<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_all_identities()
    {
        $query = $this->db->get('identity'); //identity tablosundaki bütün verileri çekiyoruz.
        return $query->result(); //sonucu return ediyoruz.
    }

    function get_all_lessons()
    {
        $query = $this->db->get('lessons'); //lessons tablosundaki bütün verileri çekiyoruz.
        return $query->result(); //sonucu return ediyoruz.
    }

    function get_all_users()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    function get_user($user_id)
    {
        $query = $this->db->select("*")->where("id", $user_id)->get('identity');
        return $query->result();
    }


    function get_students_detail($id)
    {
        $query_string = "SELECT * FROM `identity` WHERE identity.id=" . $id;
        $query = $this->db->query($query_string);
        return $query->result();
    }
}