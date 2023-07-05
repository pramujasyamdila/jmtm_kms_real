<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Traking_hps extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Data_kontrak_model');
        $this->load->model('Auth_model');
    }
    public function index()
    {
        $data['id_departemen_filter'] = $this->input->post('id_departemen');
        $data['id_area_filter'] = $this->input->post('id_area');
        $data['id_sub_area_filter'] = $this->input->post('id_sub_area');
        $data['uraian_filter'] = $this->input->post('uraian');
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $get_pegawai = $this->Auth_model->get_pegawai();
        $data['id_departemen'] = $get_pegawai['id_departemen'];
        $data['id_area'] = $get_pegawai['id_area'];
        $data['id_sub_area'] = $get_pegawai['id_sub_area'];
        // admin
        $data['get_departemen_all'] = $this->Data_kontrak_model->get_departemen_all();
        // other admin
        $data['get_departemen'] = $this->Data_kontrak_model->get_departemen($get_pegawai['id_departemen']);
        $data['get_area'] = $this->Data_kontrak_model->get_area($get_pegawai['id_area']);
        $data['get_sub_area'] = $this->Data_kontrak_model->get_hps_traking($get_pegawai['id_sub_area']);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('traking_hps/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('traking_hps/ajax');
    }

    public function search()
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $get_pegawai = $this->Auth_model->get_pegawai();
        $data['id_departemen'] = $get_pegawai['id_departemen'];
        $data['id_area'] = $get_pegawai['id_area'];
        $data['id_sub_area'] = $get_pegawai['id_sub_area'];
        // admin
        $data['get_departemen_all'] = $this->Data_kontrak_model->get_departemen_all();
        // other admin
        $data['get_departemen'] = $this->Data_kontrak_model->get_departemen($get_pegawai['id_departemen']);
        $data['get_area'] = $this->Data_kontrak_model->get_area($get_pegawai['id_area']);
        $data['get_sub_area'] = $this->Data_kontrak_model->get_hps_traking($get_pegawai['id_sub_area']);
        // filter data
        $data['id_departemen_filter'] = $this->input->post('id_departemen');
        $data['id_area_filter'] = $this->input->post('id_area');
        $data['id_sub_area_filter'] = $this->input->post('id_sub_area');
        $data['uraian_filter'] = $this->input->post('uraian');
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('traking_hps/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('traking_hps/ajax');
    }
}
