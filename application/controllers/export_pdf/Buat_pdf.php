<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';
error_reporting(0);

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Buat_pdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'string');
        $this->load->library(['form_validation']);
        $this->load->model('Tagihan_kontrak_admin/Taggihan_kontrak_admin_model');
        $this->load->model('Tagihan_kontrak/Tagihan_kontrak_model');
        $this->load->model('Admin/Data_kontrak_model');
        $this->load->model('Admin/Data_excelisasi_model');
        $this->load->model('Auth_model');
        $this->load->model('Admin/M_analisis');
        $session = $this->session->userdata('id_pegawai');
        if (!$session) {
            redirect('auth');
        }
    }
    public function print_tagihan($id_detail_program_penyedia_jasa)
    {
        $get_pegawai = $this->Auth_model->get_pegawai();
        $data['id_departemen'] = $get_pegawai['id_departemen'];
        $data['id_area'] = $get_pegawai['id_area'];
        $data['id_sub_area'] = $get_pegawai['id_sub_area'];
        $data['row_kontrak'] = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $data['looping_adendum'] = $this->Taggihan_kontrak_admin_model->get_addendum($id_detail_program_penyedia_jasa);
        $data['title'] = 'Dashboard';
        // $this->load->view('template_stisla/header');
        // $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/print_report', $data);
        // $this->load->view('template_stisla/footer');
        // $this->load->view('admin/Tagihan_kontrak_admin/ajax', $data);
    }

    function print_kontrak()
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
        $data['get_sub_area'] = $this->Data_kontrak_model->get_sub_area($get_pegawai['id_sub_area']);

        $data['result_export_kontrak'] = $this->Data_kontrak_model->result_kontrak_export($get_pegawai['id_departemen'], $get_pegawai['id_area'], $get_pegawai['id_sub_area']);
        $this->load->view('admin/print_report_kontrak', $data);
    }
}
