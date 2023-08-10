<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekapitulasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'string');
        $this->load->library(['form_validation']);
        $this->load->model('Tagihan_kontrak_admin/Taggihan_kontrak_admin_model');
        $this->load->model('Tagihan_kontrak/Tagihan_kontrak_model');
        $this->load->model('Admin/Data_kontrak_model');
        $this->load->model('Admin/Data_excelisasi_model');
        $this->load->model('Auth_model');
    }
    public function index()
    {
        $get_pegawai = $this->Auth_model->get_pegawai();
        $data['id_departemen'] = $get_pegawai['id_departemen'];
        $data['id_area'] = $get_pegawai['id_area'];
        $data['id_sub_area'] = $get_pegawai['id_sub_area'];
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        // other admin
        $data['get_departemen'] = $this->Data_kontrak_model->get_departemen($get_pegawai['id_departemen']);
        $data['get_area'] = $this->Data_kontrak_model->get_area($get_pegawai['id_area']);
        $data['get_sub_area'] = $this->Data_kontrak_model->get_sub_area($get_pegawai['id_sub_area']);

        $data['get_program'] = $this->Data_kontrak_model->get_mata_anggaran_analisis_data($data['id_departemen'], $data['id_area'],  $data['id_sub_area']);

        // var_dump($data['get_program']); die;
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('rekapitulasi/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('rekapitulasi/ajax');
    }

    public function search()
    {
        $filter_departemen = $this->input->post('id_departemen');
        $filter_area = $this->input->post('id_area');
        $filter_sub_area = $this->input->post('id_sub_area');
        $get_pegawai = $this->Auth_model->get_pegawai();
        $data['id_departemen'] = $get_pegawai['id_departemen'];
        $data['id_area'] = $get_pegawai['id_area'];
        $data['id_sub_area'] = $get_pegawai['id_sub_area'];
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        // other admin
        $data['get_departemen'] = $this->Data_kontrak_model->get_departemen($get_pegawai['id_departemen']);
        $data['get_area'] = $this->Data_kontrak_model->get_area($get_pegawai['id_area']);
        $data['get_sub_area'] = $this->Data_kontrak_model->get_sub_area($get_pegawai['id_sub_area']);

        $data['get_program'] = $this->Data_kontrak_model->get_mata_anggaran_filter($filter_departemen, $filter_area,  $filter_sub_area);
        // var_dump($data['get_program']); die;
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('rekapitulasi/search', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('rekapitulasi/ajax');
    }

    
}
