<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
class Administrasi_kontrak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Data_kontrak_model');
        $this->load->model('Admin/Administrasi_kontrak_model');
        $this->load->model('Auth_model');
        $session = $this->session->userdata('id_pegawai');
        if (!$session) {
            redirect('auth');
        }
    }

    public function index()
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
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/administrasi_kontrak/list_kontrak_taggihan', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/administrasi_kontrak/ajax_list_kontrak_taggihan');
    }


    public function list_program_taggihan($id_kontrak)
    {
        $keyword = $this->input->post('keyword');
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $row_kontrak =  $this->Data_kontrak_model->get_row_kontrak($id_kontrak);
        $id_departemen = $row_kontrak['id_departemen'];
        $id_area = $row_kontrak['id_area'];
        $id_sub_area = $row_kontrak['id_sub_area'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area, $keyword, $id_kontrak);
        $data['get_spm'] = $this->Data_kontrak_model->get_spm();
        $data['id_kontrak'] = $id_kontrak;
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/administrasi_kontrak/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/administrasi_kontrak/ajax');
    }

    public function buat_tagihan($id_detail_program_penyedia_jasa)
    {
        $data['active_kontrak'] = 'active';
    }


    public function get_data_hps($id_detail_sub_program_penyedia_jasa)
    {
        $resultss = $this->Data_kontrak_model->getdatatable_hps($id_detail_sub_program_penyedia_jasa);
        $data = [];
        $no = $_POST['start'];
        foreach ($resultss as $rs) {
            $row = array();
            $row[] = $rs->no_hps;
            $row[] = $rs->uraian_hps;
            $row[] = $rs->satuan_hps;
            if ($rs->harga_satuan_hps == null) {
                $row[] =  "";
                $row[] =  "";
                $row[] =  "";
            } else {
                $row[] =  $rs->volume_hps;
                $row[] =  "Rp " . number_format($rs->harga_satuan_hps, 2, ',', '.');
                $row[] =  "Rp " . number_format($rs->total_harga, 2, ',', '.');
            }

            $row[] = '<a href="javascript:;" class="btn btn-danger btn-sm" onClick="byid_detail_sub_program_penyedia_jasa(' . "'" . $rs->id_hps_kontrak_penyedia_jasa . "','hapus'" . ')"><i class="fas fa fa-trash"></i> hapus</a><a href="javascript:;" class="btn btn-warning btn-sm" onClick="byid_hps_kontrak_penyedia_jasa(' . "'" . $rs->id_hps_kontrak_penyedia_jasa . "','edit'" . ')"><i class="fas fa fa-edit"></i> Edit</a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_kontrak_model->count_all_datahps($id_detail_sub_program_penyedia_jasa),
            "recordsFiltered" => $this->Data_kontrak_model->count_filtered_datahps($id_detail_sub_program_penyedia_jasa),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }


    public function pasca_pengadaan()
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
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/administrasi_kontrak/list_kontrak', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/administrasi_kontrak/ajax_list_kontrak');
    }


    public function list_program($id_kontrak)
    {
        $keyword = $this->input->post('keyword');
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $row_kontrak =  $this->Data_kontrak_model->get_row_kontrak($id_kontrak);
        $id_departemen = $row_kontrak['id_departemen'];
        $id_area = $row_kontrak['id_area'];
        $id_sub_area = $row_kontrak['id_sub_area'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area, $keyword, $id_kontrak);
        $data['get_spm'] = $this->Data_kontrak_model->get_spm();
        $data['id_kontrak'] = $id_kontrak;
        $data['nama_kontrak'] = $row_kontrak['nama_kontrak'];
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/administrasi_kontrak/pasca_pengadaan', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/administrasi_kontrak/ajax');
    }
    public function search($id_kontrak)
    {
        $keyword = $this->input->post('keyword');
        $data['active_kontrak'] = 'active';
        $data['id_kontrak'] = $id_kontrak;
        $data['menu_open_kontrak'] = 'menu-open';
        $row_kontrak =  $this->Data_kontrak_model->get_row_kontrak($id_kontrak);
        $id_departemen = $row_kontrak['id_departemen'];
        $id_area = $row_kontrak['id_area'];
        $id_sub_area = $row_kontrak['id_sub_area'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area, $keyword, $id_kontrak);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/administrasi_kontrak/pasca_pengadaan', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/administrasi_kontrak/ajax');
    }
    // public function addendum_kontrak($id_detail_program_penyedia_jasa)
    // {
    //     $data['active_kontrak'] = 'active';
    //     $data['menu_open_kontrak'] = 'menu-open';
    //     $get_pegawai = $this->Auth_model->get_pegawai();
    //     $id_departemen = $get_pegawai['id_departemen'];
    //     $id_area = $get_pegawai['id_area'];
    //     $id_sub_area = $get_pegawai['id_sub_area'];
    //     $keyword = $this->input->post('keyword');
    //     $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $keyword, $data['row_program']['id_kontrak']);
    //     $data['row_program_kontrak_detail']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);

    //     $this->load->view('template_stisla/header');
    //     $this->load->view('template_stisla/sidebar', $data);
    //     $this->load->view('admin/administrasi_kontrak/addendum_kontrak', $data);
    //     $this->load->view('template_stisla/footer');
    //     $this->load->view('admin/administrasi_kontrak/ajax');
    // }






    public function get_data_addendum($id_detail_program_penyedia_jasa)
    {

        $resultss = $this->Data_kontrak_model->getdatatable__addendum_kontrak_penyedia_jasa($id_detail_program_penyedia_jasa);
        $data = [];
        $no = $_POST['start'];
        foreach ($resultss as $rs) {
            $row = array();
            $row[] = ++$no;
            $row[] = $rs->no_addendum;
            $row[] = $rs->nama_addendum;
            $row[] = $rs->tanggal_addendum;
            $row[] =  "Rp " . number_format($rs->nilai_addendum, 2, ',', '.');
            $row[] = '<a href="javascript:;" title="Hapus Addendum" class="mr-2 btn btn-danger btn-sm" onClick="byid_detail_program_penyedia_jasa(' . "'" . $rs->id_detail_program_penyedia_jasa . "','hapus'" . ')"><i class="fas fa fa-trash"></i></a><a title="Edit Addendum" href="javascript:;" class="btn btn-warning btn-sm" onClick="byid_detail_program_penyedia_jasa(' . "'" . $rs->id_detail_program_penyedia_jasa . "','edit'" . ')"><i class="fas fa fa-edit"></i></a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_kontrak_model->count_all_data_addendum_kontrak_penyedia_jasa($id_detail_program_penyedia_jasa),
            "recordsFiltered" => $this->Data_kontrak_model->count_filtered_data_addendum_kontrak_penyedia_jasa($id_detail_program_penyedia_jasa),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function save_addendum()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $nama_addendum =  $this->input->post('nama_addendum');
        $nilai_addendum =  $this->input->post('nilai_addendum');
        $tanggal_addendum =  $this->input->post('tanggal_addendum');
        $no_addendum =  $this->input->post('no_addendum');
        $data = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'nama_addendum' => $nama_addendum,
            'nilai_addendum' => $nilai_addendum,
            'tanggal_addendum' => $tanggal_addendum,
            'no_addendum' => $no_addendum,
        ];
        $this->Data_kontrak_model->tambah_addendum_kontrak_penyedia_jasa($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // gunning
    public function upload_gunning($id_detail_program_penyedia_jasa)
    {


        $no_gunning = $this->input->post('no_gunning');
        $tanggal_gunning = $this->input->post('tanggal_gunning');
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
        ];
        $upload = [
            'no_gunning' => $no_gunning,
            'tanggal_gunning' => $tanggal_gunning,
        ];
        $this->Data_kontrak_model->update_rup($where, $upload);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // sho
    public function upload_sho($id_detail_program_penyedia_jasa)
    {


        $no_sho = $this->input->post('no_sho');
        $tanggal_sho = $this->input->post('tanggal_sho');
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
        ];
        $upload = [
            'no_sho' => $no_sho,
            'tanggal_sho' => $tanggal_sho,
        ];
        $this->Data_kontrak_model->update_rup($where, $upload);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // smk
    public function upload_smk($id_detail_program_penyedia_jasa)
    {


        $no_smk = $this->input->post('no_smk');
        $tanggal_smk = $this->input->post('tanggal_smk');
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
        ];
        $upload = [
            'no_smk' => $no_smk,
            'tanggal_smk' => $tanggal_smk,
        ];
        $this->Data_kontrak_model->update_rup($where, $upload);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function simpan_penyedia()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $nama_penyedia =  $this->input->post('nama_penyedia');
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
        ];
        $data = [
            'nama_penyedia' => $nama_penyedia,
        ];
        $this->Data_kontrak_model->update_rup($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function simpan_data_no_kontrak()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $no_kontrak_penyedia =  $this->input->post('no_kontrak_penyedia');
        $tahun_kontrak_program =  $this->input->post('tahun_kontrak_program');
        $tanggal_kontrak_program =  $this->input->post('tanggal_kontrak_program');
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
        ];
        $data = [
            'no_kontrak_penyedia' => $no_kontrak_penyedia,
            'tahun_kontrak_program' => $tahun_kontrak_program,
            'tanggal_kontrak_program' => $tanggal_kontrak_program,
        ];
        $this->Data_kontrak_model->update_rup($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function byid_program_penyedia_jasa($id_detail_program_penyedia_jasa)
    {
        $response = [
            'row_program_penyedia_jasa' => $this->Administrasi_kontrak_model->get_by_program_penyedia($id_detail_program_penyedia_jasa),
            'bapp_row' => $this->Data_kontrak_model->table_row_bapp($id_detail_program_penyedia_jasa),
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }


    public function simpan_bapp($id_detail_program_penyedia_jasa)
    {
        // No Surat
        $nomor_bapp =  $this->input->post('nomor_bapp');
        $tanggal_bapp =  $this->input->post('tanggal_bapp');
        // kontrak_pekerjaan
        $no_pekerjaan_bapp =  $this->input->post('no_pekerjaan_bapp');
        $tanggal_pekerjaan_bapp =  $this->input->post('tanggal_pekerjaan_bapp');
        // surat perintah kerja
        $no_pekerjaan_spmk =  $this->input->post('no_pekerjaan_spmk');
        $tanggal_pekerjaan_spmk =  $this->input->post('tanggal_pekerjaan_spmk');
        // surat perintah kerja
        $no_pekerjaan_ppp_pihak_kedua =  $this->input->post('no_pekerjaan_ppp_pihak_kedua');
        $tanggal_pekerjaan_ppp_pihak_kedua =  $this->input->post('tanggal_pekerjaan_ppp_pihak_kedua');

        $cek_bapp_table = $this->Data_kontrak_model->table_result_bapp($id_detail_program_penyedia_jasa);
        if ($cek_bapp_table) {
            $where = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            ];
            $data = [
                'nomor_bapp' => $nomor_bapp,
                'tanggal_bapp' => $tanggal_bapp,
                'no_pekerjaan_bapp' => $no_pekerjaan_bapp,
                'tanggal_pekerjaan_bapp' => $tanggal_pekerjaan_bapp,
                'no_pekerjaan_spmk' => $no_pekerjaan_spmk,
                'tanggal_pekerjaan_spmk' => $tanggal_pekerjaan_spmk,
                'no_pekerjaan_ppp_pihak_kedua' => $no_pekerjaan_ppp_pihak_kedua,
                'tanggal_pekerjaan_ppp_pihak_kedua' => $tanggal_pekerjaan_ppp_pihak_kedua,
            ];
            $this->Data_kontrak_model->update_bapp($where, $data);
        } else {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'nomor_bapp' => $nomor_bapp,
                'tanggal_bapp' => $tanggal_bapp,
                'no_pekerjaan_bapp' => $no_pekerjaan_bapp,
                'tanggal_pekerjaan_bapp' => $tanggal_pekerjaan_bapp,
                'no_pekerjaan_spmk' => $no_pekerjaan_spmk,
                'tanggal_pekerjaan_spmk' => $tanggal_pekerjaan_spmk,
                'no_pekerjaan_ppp_pihak_kedua' => $no_pekerjaan_ppp_pihak_kedua,
                'tanggal_pekerjaan_ppp_pihak_kedua' => $tanggal_pekerjaan_ppp_pihak_kedua,
            ];
            $this->Data_kontrak_model->tambah_bapp($data);
        }

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function view_dokumen_8($id_detail_program_penyedia_jasa)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];

        $keyword = $this->input->post('keyword');
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $keyword, $data['row_program']['id_kontrak']);
        $data['row_program_kontrak_detail']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['bapp_row'] = $this->Data_kontrak_model->table_row_bapp($id_detail_program_penyedia_jasa);
        $data['row_mc'] = $this->Data_kontrak_model->row_mc($id_detail_program_penyedia_jasa);
        $this->load->view('admin/administrasi_kontrak/dokumen_administrasi_kontrak/pdf_dokumen_8', $data);
    }


    public function addendum_kontrak_sub_program($id_detail_sub_program_penyedia_jasa)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $keyword = $this->input->post('keyword');
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $keyword, $data['row_program']['id_kontrak']);
        $data['row_sub_program']  = $this->Data_kontrak_model->get_row_sub_program($id_detail_sub_program_penyedia_jasa);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/administrasi_kontrak/addendum_fq', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/administrasi_kontrak/ajax');
    }
    public function get_data_addendum_pq($id_detail_sub_program_penyedia_jasa)
    {

        $resultss = $this->Data_kontrak_model->getdatatable__addendum_kontrak_penyedia_jasa_pq($id_detail_sub_program_penyedia_jasa);
        $data = [];
        $no = $_POST['start'];
        foreach ($resultss as $rs) {
            $row = array();
            $row[] = ++$no;
            $row[] = $rs->no_addendum;
            $row[] = $rs->nama_addendum;
            $row[] = $rs->tanggal_addendum;
            $row[] =  "Rp " . number_format($rs->nilai_addendum, 2, ',', '.');
            $row[] = '<a href="javascript:;" title="Hapus Addendum" class="mr-2 btn btn-danger btn-sm" onClick="byid_detail_sub_program_penyedia_jasa(' . "'" . $rs->id_detail_sub_program_penyedia_jasa . "','hapus'" . ')"><i class="fas fa fa-trash"></i></a><a title="Edit Addendum" href="javascript:;" class="btn btn-warning btn-sm" onClick="byid_detail_sub_program_penyedia_jasa(' . "'" . $rs->id_detail_sub_program_penyedia_jasa . "','edit'" . ')"><i class="fas fa fa-edit"></i></a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_kontrak_model->count_all_data_addendum_kontrak_penyedia_jasa_pq($id_detail_sub_program_penyedia_jasa),
            "recordsFiltered" => $this->Data_kontrak_model->count_filtered_data_addendum_kontrak_penyedia_jasa_pq($id_detail_sub_program_penyedia_jasa),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function save_addendum_pq()
    {
        $id_detail_sub_program_penyedia_jasa =  $this->input->post('id_detail_sub_program_penyedia_jasa');
        $nama_addendum =  $this->input->post('nama_addendum');
        $nilai_addendum =  $this->input->post('nilai_addendum');
        $tanggal_addendum =  $this->input->post('tanggal_addendum');
        $no_addendum =  $this->input->post('no_addendum');
        $data = [
            'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa,
            'nama_addendum' => $nama_addendum,
            'nilai_addendum' => $nilai_addendum,
            'tanggal_addendum' => $tanggal_addendum,
            'no_addendum' => $no_addendum,
        ];
        $where = [
            'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa,
        ];
        $data_where = [
            'nilai_addendum_terakhir_fq' => $nilai_addendum,
        ];
        $this->Data_kontrak_model->save_addendum_pq($data);
        $this->Data_kontrak_model->update_ke_sub_program($where, $data_where);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function kelola_nilai_kontrak_penyedia($id_detail_program_penyedia_jasa)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['row_program_kontrak_detail']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);
        $data['adendum_result'] = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/administrasi_kontrak/kelola_nilai_kontrak_penyedia', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/administrasi_kontrak/ajax');
    }

    public function administrasi_addendum($id_detail_program_penyedia_jasa)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['row_program_kontrak_detail']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);
        $data['adendum_result'] = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/administrasi_kontrak/administrasi_addendum', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/administrasi_kontrak/ajax');
    }


    public function by_id_nilai_kontrak($id_nilai_kontrak_penyedia)
    {
        $response = [
            'row_nilai_kontrak' => $this->Data_kontrak_model->by_id_nilai_kontrak($id_nilai_kontrak_penyedia),
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function save_nilai_kontrak()
    {

        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $id_detail_sub_program_penyedia_jasa =  $this->input->post('id_detail_sub_program_penyedia_jasa');
        $id_nilai_kontrak_penyedia =  $this->input->post('id_nilai_kontrak_penyedia');
        $no_nilai_kontrak =  $this->input->post('no_nilai_kontrak');
        $uraian_nilai_kontrak =  $this->input->post('uraian_nilai_kontrak');
        $satuan_nilai_kontrak =  $this->input->post('satuan_nilai_kontrak');
        $volume_nilai_kontrak =  $this->input->post('volume_nilai_kontrak');
        $harga_satuan_nilai_kontrak =  $this->input->post('harga_satuan_nilai_kontrak');
        if ($harga_satuan_nilai_kontrak == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_nilai_kontrak *  $harga_satuan_nilai_kontrak;
        }
        $where = [
            'id_nilai_kontrak_penyedia' => $id_nilai_kontrak_penyedia,
        ];
        $data_nilai_kontrak = [
            'no_nilai_kontrak' => $no_nilai_kontrak,
            'uraian_nilai_kontrak' => $uraian_nilai_kontrak,
            'volume_nilai_kontrak' => $volume_nilai_kontrak,
            'satuan_nilai_kontrak' => $satuan_nilai_kontrak,
            'harga_satuan_nilai_kontrak' => $harga_satuan_nilai_kontrak,
            'total_satuan_nilai_kontrak' => $total_harga,
        ];
        $this->Data_kontrak_model->update_nilai_kontrak_penyedia_jasa($where, $data_nilai_kontrak);
        $this->db->select('*');
        $this->db->from('tbl_nilai_kontrak_penyedia');
        $this->db->where('tbl_nilai_kontrak_penyedia.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $this->db->where('tbl_nilai_kontrak_penyedia.harga_satuan_nilai_kontrak !=', null);
        $this->db->order_by('id_detail_sub_program_penyedia_jasa', 'ASC');
        $query_tbl_hps = $this->db->get();
        $total = 0;
        foreach ($query_tbl_hps->result_array() as $key => $dataku) {
            $total += $dataku['total_satuan_nilai_kontrak'];
        }
        $where = [
            'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa
        ];
        $data_update = [
            'nilai_sub_kontrak_penyedia' => $total
        ];
        $this->Data_kontrak_model->update_rup_ke_sub_detail_program_penyedia_jasa($where, $data_update);
        $id_where_detail_program = $id_detail_program_penyedia_jasa;
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_where_detail_program);
        $query_tbl_hps_sub = $this->db->get();
        $total_sub = 0;
        foreach ($query_tbl_hps_sub->result_array() as $key => $dataku_sub) {
            $total_sub += $dataku_sub['nilai_sub_kontrak_penyedia'];
        }
        $where_sub = [
            'id_detail_program_penyedia_jasa' => $id_where_detail_program
        ];
        $data_update_sub = [
            'total_kontrak' => $total_sub,
        ];
        $this->Data_kontrak_model->update_rup($where_sub, $data_update_sub);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function administrasi_dokumen()
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $keyword = $this->input->post('keyword');
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $keyword, $data['row_program']['id_kontrak']);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/administrasi_kontrak/administrasi_dokumen', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/administrasi_kontrak/ajax');
    }

    public function kelola_format_dokumen($id_mc)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['row_mc'] = $this->Data_kontrak_model->row_mc($id_mc);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/tagihan_kontrak_admin/kelola_format_dokumen', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/administrasi_kontrak/ajax');
    }
}
