<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tagihan_kontrak_admin/Taggihan_kontrak_admin_model');
        $this->load->model('Admin/Data_kontrak_model');
        $this->load->model('Auth_model');
        $session = $this->session->userdata('id_pegawai');
        // if (!$session) {
        // 	redirect('auth');
        // }
    }

    public function index()
    {
        $data['title'] = 'Admin/Dashboard';
        // januari
        $id_kontrak = $this->session->userdata('id_kontrak');
        $get_pegawai = $this->Auth_model->get_pegawai();
        $data['id_departemen'] = $get_pegawai['id_departemen'];
        $data['id_area'] = $get_pegawai['id_area'];
        $data['id_sub_area'] = $get_pegawai['id_sub_area'];
        $data['get_departemen'] = $this->Data_kontrak_model->get_departemen($get_pegawai['id_departemen']);
        $data['get_area'] = $this->Data_kontrak_model->get_area($get_pegawai['id_area']);
        $data['get_sub_area'] = $this->Data_kontrak_model->get_sub_area($get_pegawai['id_sub_area']);
        $data['kontrak'] =  $this->Data_kontrak_model->get_row_kontrak($id_kontrak);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template_stisla/footer',);
        $this->load->view('admin/dashboard/ajax');
    }
}
