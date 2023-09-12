<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracker extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tagihan_kontrak_admin/Taggihan_kontrak_admin_model');
        $this->load->model('Admin/Data_kontrak_model');
        $this->load->model('Admin/M_analisis');
        $this->load->model('Auth_model');
        $session = $this->session->userdata('id_pegawai');
    }

    function index()
    {
        $data['title'] = 'Admin/Dashboard';
        // januari
        $get_pegawai = $this->Auth_model->get_pegawai();
        $data['id_departemen'] = $get_pegawai['id_departemen'];
        $data['id_area'] = $get_pegawai['id_area'];
        $data['id_sub_area'] = $get_pegawai['id_sub_area'];
        $data['get_departemen'] = $this->Data_kontrak_model->get_departemen($get_pegawai['id_departemen']);
        $data['get_area'] = $this->Data_kontrak_model->get_area($get_pegawai['id_area']);
        $data['get_sub_area'] = $this->Data_kontrak_model->get_sub_area($get_pegawai['id_sub_area']);
        $data['detail_program'] = $this->M_analisis->get_all_detail_program();
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/tracker/index', $data);
        $this->load->view('template_stisla/footer',);
        $this->load->view('admin/tracker/ajax');
    }

    public function get_data_pekerjaan_vendor()
    {
        $resultss = $this->M_analisis->getdatatbl_detail_program();
        $no = $_POST['start'];
        // $total = 0;
        $data = [];
        foreach ($resultss as $angga) {
            $row = array();
            $row[] = ++$no;
            $row[] = $angga->nama_pekerjaan_program_mata_anggaran;
            $row[] = '<a href="javascript:;" class="btn btn-sm text-white" style="background-color: #302B63;" onClick="byid(' . "'" . $angga->id_detail_program_penyedia_jasa . "','lihat_detail'" . ')"> <i class="fas fa fa-eye"></i> Lihat Detail</a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_analisis->count_all_data_detail_program(),
            "recordsFiltered" => $this->M_analisis->count_filtered_data_detail_program(),
            "data" => $data,
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    function by_id_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa)
    {
        $row_program = $this->M_analisis->get_row_detail_program($id_detail_program_penyedia_jasa);
        $result_mc = $this->M_analisis->get_result_mc($id_detail_program_penyedia_jasa);
        $result_tracking_mc = $this->M_analisis->result_tracking_mc($id_detail_program_penyedia_jasa, $result_mc);
        $average_mc = $this->M_analisis->result_average_tracking_mc($id_detail_program_penyedia_jasa, $result_mc);
        $data = [
            'row_program' => $row_program,
            'average_mc' => $average_mc,
            'result_tracking_mc' => $result_tracking_mc
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function by_id_detail_program_penyedia_jasa_nama_penyedia()
    {
        $cari_nama_penyedia = $this->input->post('cari_nama_penyedia');
        $average_mc = $this->M_analisis->result_average_tracking_mc_all($cari_nama_penyedia);
        $data = [
            'average_mc_all' => $average_mc,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
}
