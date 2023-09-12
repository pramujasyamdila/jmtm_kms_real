<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Traking_hps extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Data_kontrak_model');
        $this->load->model('Auth_model');
        $this->load->model('Admin/M_analisis');
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
        $data['get_all_hps'] = $this->M_analisis->result_hps_uraian();
        $data['get_all_hps_kontrak'] = $this->M_analisis->result_hps_uraian_kontrak();
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

    public function get_uraian_hps()
    {
        $resultss = $this->M_analisis->getdatatbl_hps();
        $no = $_POST['start'];
        // $total = 0;
        $data = [];
        foreach ($resultss as $angga) {
            $row = array();
            $row[] = ++$no;
            $row[] = $angga->uraian_hps;
            $row[] = $angga->nama_departemen;
            $row[] = $angga->nama_area;
            $row[] = $angga->nama_sub_area;
            $row[] =  "Rp " . number_format($angga->harga_satuan_hps, 2, ',', '.');
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_analisis->count_all_data_hps(),
            "recordsFiltered" => $this->M_analisis->count_filtered_data_hps(),
            "data" => $data,
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function get_uraian_hps_kontrak()
    {
        $resultss = $this->M_analisis->getdatatbl_hps_kontrak();
        $no = $_POST['start'];
        // $total = 0;
        $data = [];
        foreach ($resultss as $angga) {
            $row = array();
            $row[] = ++$no;
            $row[] = $angga->uraian_hps;
            $row[] = $angga->nama_departemen;
            $row[] = $angga->nama_area;
            $row[] = $angga->nama_sub_area;
            $row[] =  "Rp " . number_format($angga->harga_satuan_hps, 2, ',', '.');
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_analisis->count_all_data_hps_kontrak(),
            "recordsFiltered" => $this->M_analisis->count_filtered_data_hps_kontrak(),
            "data" => $data,
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
}
