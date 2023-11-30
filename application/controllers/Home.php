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
        $this->load->model('Admin/M_analisis');
        // if (!$session) {
        // 	redirect('auth');
        // }
    }

    public function index()
    {
        $data['title'] = 'Admin/Dashboard';

        $data['m1_dok_selesai'] = $this->M_analisis->m1_dok_selesai();
        $data['m1_dok_progres'] = $this->M_analisis->m1_dok_progres();
        $data['m1_dok_progres2'] = $data['m1_dok_progres'] - $data['m1_dok_selesai'];


        $data['m2_dok_selesai'] = $this->M_analisis->m2_dok_selesai();
        $data['m2_dok_progres'] = $this->M_analisis->m2_dok_progres();

        $data['m2_dok_selesai_pasca'] = $this->M_analisis->m2_dok_selesai_pasca();
        $data['m2_dok_progres_pasca'] = $this->M_analisis->m2_dok_progres_pasca();


        $data['m2_dok_selesai_pasca_kontrak'] = $this->M_analisis->m2_dok_selesai_pasca_kontrak();
        $data['m2_dok_progres_pasca_kontrak'] = $this->M_analisis->m2_dok_progres_pasca_kontrak();


        $data['m2_dok_selesai_pasca_final'] = $data['m2_dok_selesai_pasca'] + $data['m2_dok_selesai_pasca_kontrak'];
        $data['m2_dok_progres_pasca_final'] = $data['m2_dok_progres_pasca'] + $data['m2_dok_progres_pasca_kontrak'] + 1;
        $data['m2_final_pasca'] = $data['m2_dok_progres_pasca_final'] - $data['m2_dok_selesai_pasca_final'];

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
        $this->load->view('template_stisla/header', $data);
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template_stisla/footer',);
        $this->load->view('admin/dashboard/ajax');
    }
}
