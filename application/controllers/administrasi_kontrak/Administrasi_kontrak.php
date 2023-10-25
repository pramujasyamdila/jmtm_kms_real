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
        $data['get_penyedia'] = $this->Data_kontrak_model->get_penyedia();
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
        $id_identitas_prusahaan =  $this->input->post('id_identitas_prusahaan');
        $row_penyedia = $this->Data_kontrak_model->get_row_penyedia($id_identitas_prusahaan);
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
        ];
        $data = [
            'id_identitas_prusahaan' => $id_identitas_prusahaan,
            'nama_penyedia' => $row_penyedia['nama_usaha'],
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
        $data['result_rekap_hps']  = $this->Data_kontrak_model->result_rekap_hps($id_detail_program_penyedia_jasa);
        $data['cek_rekap_kontrak_awal']  = $this->Data_kontrak_model->cek_rekap_kontrak_awal($id_detail_program_penyedia_jasa);
        $data['row_program_kontrak_detail']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);
        $data['adendum_result'] = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        $data['result_rekap_hps_addendum_1']  = $this->Data_kontrak_model->cek_rekap_kontrak_addendum_1($id_detail_program_penyedia_jasa);
        $data['result_rekap_hps_addendum_2']  = $this->Data_kontrak_model->cek_rekap_kontrak_addendum_2($id_detail_program_penyedia_jasa);
        $data['result_rekap_hps_addendum_3']  = $this->Data_kontrak_model->cek_rekap_kontrak_addendum_3($id_detail_program_penyedia_jasa);
        $data['result_rekap_hps_addendum_4']  = $this->Data_kontrak_model->cek_rekap_kontrak_addendum_4($id_detail_program_penyedia_jasa);
        $data['result_rekap_hps_addendum_5']  = $this->Data_kontrak_model->cek_rekap_kontrak_addendum_5($id_detail_program_penyedia_jasa);
        $data['result_rekap_hps_addendum_6']  = $this->Data_kontrak_model->cek_rekap_kontrak_addendum_6($id_detail_program_penyedia_jasa);
        $data['result_rekap_hps_addendum_7']  = $this->Data_kontrak_model->cek_rekap_kontrak_addendum_7($id_detail_program_penyedia_jasa);
        $data['result_rekap_hps_addendum_8']  = $this->Data_kontrak_model->cek_rekap_kontrak_addendum_8($id_detail_program_penyedia_jasa);
        $data['result_rekap_hps_addendum_9']  = $this->Data_kontrak_model->cek_rekap_kontrak_addendum_9($id_detail_program_penyedia_jasa);
        $data['result_rekap_hps_addendum_10']  = $this->Data_kontrak_model->cek_rekap_kontrak_addendum_10($id_detail_program_penyedia_jasa);
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

    public function tambah_hps_penyedia_kontrak_1()
    {
        $id_detail_sub_program_penyedia_jasa =  $this->input->post('id_detail_sub_program_penyedia_jasa');
        $id_where_detail_program = $this->input->post('id_detail_program_penyedia_jasa');
        $id_detail_program_penyedia_jasa = $this->Data_kontrak_model->get_sub_program_penyedia_jasa($id_detail_sub_program_penyedia_jasa);
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $tkdn =  $this->input->post('tkdn');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $hitung_harga_satuan_tkdn = $harga_satuan * ($tkdn / 100);
        $hasil_harga_satuan_tkdn = round($hitung_harga_satuan_tkdn, 2);
        $hitung_jumlah_harga_tkdn = $volume_hps * $hasil_harga_satuan_tkdn;
        $hasil_jumlah_harga_tkdn = round($hitung_jumlah_harga_tkdn, 2);
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_kontrak_1($id_where_detail_program, $id_detail_sub_program_penyedia_jasa);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_where_detail_program,
                'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa,
                'no_urut' => 1 . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'tkdn' => $tkdn,
                'harga_satuan_tkdn' => $hasil_harga_satuan_tkdn,
                'jumlah_harga_tkdn' => $hasil_jumlah_harga_tkdn,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_1($data);
        } else {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_where_detail_program,
                'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa,
                'no_urut' => 1 . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'tkdn' => $tkdn,
                'harga_satuan_tkdn' => $hasil_harga_satuan_tkdn,
                'jumlah_harga_tkdn' => $hasil_jumlah_harga_tkdn,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_1($data);
        }
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_1');
        $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $this->db->where('tbl_hps_penyedia_kontrak_1.harga_satuan_hps !=', null);
        $this->db->order_by('id_detail_sub_program_penyedia_jasa', 'ASC');
        $query_tbl_hps = $this->db->get();
        $total = 0;
        foreach ($query_tbl_hps->result_array() as $key => $dataku) {
            $total += $dataku['total_harga'];
        }
        $where = [
            'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa
        ];
        $data_update = [
            'nilai_sub_kontrak_penyedia' => $total
        ];
        $this->Data_kontrak_model->update_rup_ke_sub_detail_program_penyedia_jasa($where, $data_update);
        $id_where_detail_program = $id_detail_program_penyedia_jasa['id_detail_program_penyedia_jasa'];
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_where_detail_program);
        $query_tbl_hps_sub = $this->db->get();
        $total_sub_nilai_kontrak = 0;
        foreach ($query_tbl_hps_sub->result_array() as $key => $dataku_sub) {
            $total_sub_nilai_kontrak += $dataku_sub['nilai_sub_kontrak_penyedia'];
        }
        $where_sub = [
            'id_detail_program_penyedia_jasa' => $id_where_detail_program
        ];
        $data_update_sub = [
            'total_kontrak' => $total_sub_nilai_kontrak
        ];
        $this->Data_kontrak_model->update_rup($where_sub, $data_update_sub);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function edit_hps_penyedia_kontrak_1()
    {
        $id_hps_penyedia_kontrak_1 = $this->input->post('id_hps_penyedia_kontrak_1');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        $tkdn =  $this->input->post('tkdn');
        $hitung_harga_satuan_tkdn = $harga_satuan * ($tkdn / 100);
        $hasil_harga_satuan_tkdn = round($hitung_harga_satuan_tkdn, 2);
        $hitung_jumlah_harga_tkdn = $volume_hps * $hasil_harga_satuan_tkdn;
        $hasil_jumlah_harga_tkdn = round($hitung_jumlah_harga_tkdn, 2);
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_kontrak_1 = [
            'id_hps_penyedia_kontrak_1' => $id_hps_penyedia_kontrak_1
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga,
            'tkdn' => $tkdn,
            'harga_satuan_tkdn' => $hasil_harga_satuan_tkdn,
            'jumlah_harga_tkdn' => $hasil_jumlah_harga_tkdn,
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data, $id_where_hps_penyedia_kontrak_1);
        $id_where_hps_penyedia_kontrak_1 = [
            'id_refrence_hps' =>  $id_hps_penyedia_kontrak_1
        ];
        $data_nilai_kontrak = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'satuan_hps' => $satuan_hps,
            'volume_hps' => $volume_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga,
            'tkdn' => $tkdn,
            'harga_satuan_tkdn' => $hasil_harga_satuan_tkdn,
            'jumlah_harga_tkdn' => $hasil_jumlah_harga_tkdn,
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data_nilai_kontrak, $id_where_hps_penyedia_kontrak_1);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_hps_penyedia_kontrak_1($id_hps_penyedia_kontrak_1)
    {
        $id_where_hps_penyedia_kontrak_1 = [
            'id_hps_penyedia_kontrak_1' => $id_hps_penyedia_kontrak_1
        ];
        $data = [
            'uraian_hps' => '',
            'no_hps' => '',
            'volume_hps' => '',
            'satuan_hps' => '',
            'harga_satuan_hps' => '',
            'total_harga' => '',
            'tkdn' => '',
            'harga_satuan_tkdn' => '',
            'jumlah_harga_tkdn' => '',
            'item_baru' => '',
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data, $id_where_hps_penyedia_kontrak_1);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function insert_rekap_kontrak_awal()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $result_sub_program = $this->Data_kontrak_model->result_sub_program($id_detail_program_penyedia_jasa);
        $result_rekap = $this->Data_kontrak_model->cek_rekap($id_detail_program_penyedia_jasa);
        if ($result_rekap) {
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            foreach ($result_sub_program as $key => $value) {
                $data = [
                    'id_detail_program_penyedia_jasa' => $value['id_detail_program_penyedia_jasa'],
                    'id_detail_sub_program_penyedia_jasa' => $value['id_detail_sub_program_penyedia_jasa'],
                ];
                $this->Data_kontrak_model->create_tbl_rekap_hps($data);
            }
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }

    function simpan_master_pepenkon()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $nama_1_tingkat_pengguna_jasa_papenkon = $this->input->post('nama_1_tingkat_pengguna_jasa_papenkon');
        $jabatan_1_tingkat_pengguna_jasa_papenkon = $this->input->post('jabatan_1_tingkat_pengguna_jasa_papenkon');
        $nama_pengguna_jasa_papenkon = $this->input->post('nama_pengguna_jasa_papenkon');
        $jabatan_pengguna_jasa_papenkon = $this->input->post('jabatan_pengguna_jasa_papenkon');
        $nama_penyedia_jasa_papenkon = $this->input->post('nama_penyedia_jasa_papenkon');
        $jabatan_penyedia_jasa_papenkon = $this->input->post('jabatan_penyedia_jasa_papenkon');
        $nama_wakil_pengguna_jasa_papenkon = $this->input->post('nama_wakil_pengguna_jasa_papenkon');
        $jabatan_wakil_pengguna_jasa_papenkon = $this->input->post('jabatan_wakil_pengguna_jasa_papenkon');
        $nama_wakil_penyedia_jasa_papenkon = $this->input->post('nama_wakil_penyedia_jasa_papenkon');
        $jabatan_wakil_penyedia_jasa_papenkon = $this->input->post('jabatan_wakil_penyedia_jasa_papenkon');
        $nama_ketua_jasa_papenkon = $this->input->post('nama_ketua_jasa_papenkon');
        $jabatan_ketua_jasa_papenkon = $this->input->post('jabatan_ketua_jasa_papenkon');
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
        ];
        $data = [
            'nama_ketua_jasa_papenkon' => $nama_ketua_jasa_papenkon,
            'jabatan_ketua_jasa_papenkon' => $jabatan_ketua_jasa_papenkon,
            'nama_1_tingkat_pengguna_jasa_papenkon' => $nama_1_tingkat_pengguna_jasa_papenkon,
            'jabatan_1_tingkat_pengguna_jasa_papenkon' => $jabatan_1_tingkat_pengguna_jasa_papenkon,
            'nama_pengguna_jasa_papenkon' => $nama_pengguna_jasa_papenkon,
            'jabatan_pengguna_jasa_papenkon' => $jabatan_pengguna_jasa_papenkon,
            'nama_penyedia_jasa_papenkon' => $nama_penyedia_jasa_papenkon,
            'jabatan_penyedia_jasa_papenkon' => $jabatan_penyedia_jasa_papenkon,
            'nama_wakil_pengguna_jasa_papenkon' => $nama_wakil_pengguna_jasa_papenkon,
            'jabatan_wakil_pengguna_jasa_papenkon' => $jabatan_wakil_pengguna_jasa_papenkon,
            'nama_wakil_penyedia_jasa_papenkon' => $nama_wakil_penyedia_jasa_papenkon,
            'jabatan_wakil_penyedia_jasa_papenkon' => $jabatan_wakil_penyedia_jasa_papenkon,
        ];
        $this->Data_kontrak_model->update_rup($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    function simpan_flow_papenkon()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $row_program = $this->Administrasi_kontrak_model->get_by_program_penyedia($id_detail_program_penyedia_jasa);
        $addendum_flow = $this->input->post('addendum_flow');
        $flow_papenkon = $this->input->post('flow_papenkon');
        $cek_flow_sudah_ada = $this->Data_kontrak_model->cek_flow_papenkon($id_detail_program_penyedia_jasa, $addendum_flow, $flow_papenkon);
        if ($flow_papenkon == 'TANPA PAPENKON DAN < 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') {
            // 1.Permohonan Ijin Prinsip
            $data_1 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Permohonan Ijin Prinsip',
                'nama_dari' => $row_program['nama_wakil_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_wakil_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_pengguna_jasa_papenkon'],
            ];
            // 2.Persetujuan Ijin Prinsip
            $data_2 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Persetujuan Ijin Prinsip',
                'nama_dari' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_wakil_pengguna_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_wakil_pengguna_jasa_papenkon'],
            ];
            // 3.Undangan Evaluasi dan Negosiasi
            $data_3 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Undangan Evaluasi dan Negosiasi',
                'nama_dari' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_penyedia_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_penyedia_jasa_papenkon'],
            ];
            // 4.BA Evaluasi dan Negosiasi
            $data_4 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'BA Evaluasi dan Negosiasi',
                'nama_dari' => 'Pengguna dan Penyedia Jasa',
                'jabatan_dari' => NULL,
                'nama_ke' => 'Pengguna dan Penyedia Jasa',
                'jabatan_ke' => NULL,
            ];
            // 5.Addendum Kontrak
            $data_5 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Addendum Kontrak',
                'nama_dari' => 'Pengguna dan Penyedia Jasa',
                'jabatan_dari' => NULL,
                'nama_ke' => 'Pengguna dan Penyedia Jasa',
                'jabatan_ke' => NULL,
            ];
        } else  if ($flow_papenkon == 'TANPA PAPENKON DAN > 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') {
            // 1.Permohonan Ijin Prinsip
            $data_1 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Permohonan Ijin Prinsip',
                'nama_dari' => $row_program['nama_wakil_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_wakil_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_pengguna_jasa_papenkon'],
            ];
            // 6.Saran Teknis
            $data_6 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Saran Teknis',
                'nama_dari' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_1_tingkat_pengguna_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_1_tingkat_pengguna_jasa_papenkon'],
            ];
            // 2.Persetujuan Ijin Prinsip
            $data_2 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Persetujuan Ijin Prinsip',
                'nama_dari' => NULL,
                'jabatan_dari' => NULL,
                'nama_ke' => NULL,
                'jabatan_ke' => NULL,
            ];
            // 3.Undangan Evaluasi dan Negosiasi
            $data_3 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Undangan Evaluasi dan Negosiasi',
                'nama_dari' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_penyedia_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_penyedia_jasa_papenkon'],
            ];
            // 4.BA Evaluasi dan Negosiasi
            $data_4 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'BA Evaluasi dan Negosiasi',
                'nama_dari' => 'Pengguna dan Penyedia Jasa',
                'jabatan_dari' => NULL,
                'nama_ke' => 'Pengguna dan Penyedia Jasa',
                'jabatan_ke' => NULL,
            ];
            // 5.Addendum Kontrak
            $data_5 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Addendum Kontrak',
                'nama_dari' => 'Pengguna dan Penyedia Jasa',
                'jabatan_dari' => NULL,
                'nama_ke' => 'Pengguna dan Penyedia Jasa',
                'jabatan_ke' => NULL,
            ];
        } else  if ($flow_papenkon == 'DENGAN PAPENKON DAN < 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') {
            // 1.Permohonan Ijin Prinsip
            $data_1 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Permohonan Ijin Prinsip',
                'nama_dari' => $row_program['nama_wakil_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_wakil_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_pengguna_jasa_papenkon'],
            ];
            // 2.Persetujuan Ijin Prinsip
            $data_2 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Persetujuan Ijin Prinsip',
                'nama_dari' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_penyedia_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_penyedia_jasa_papenkon'],
            ];
            // 7.Undangan Permohonan ke Papenkon
            $data_7 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Undangan Permohonan ke Papenkon',
                'nama_dari' => $row_program['nama_wakil_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_wakil_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_ketua_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_ketua_jasa_papenkon'],
            ];

            // 8.Undangan Evaluasi dan Negosiasi Papenkon
            $data_8 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Undangan Evaluasi dan Negosiasi Papenkon',
                'nama_dari' => $row_program['nama_ketua_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_ketua_jasa_papenkon'],
                'nama_ke' => $row_program['nama_penyedia_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_penyedia_jasa_papenkon'],
            ];

            // 9.BA Evaluasi dan Negosiasi Papenkon
            $data_9 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'BA Evaluasi dan Negosiasi Papenkon',
                'nama_dari' => 'Papenkon dan Penyedia Jasa',
                'jabatan_dari' => NULL,
                'nama_ke' => 'Papenkon dan Penyedia Jasa',
                'jabatan_ke' =>  NULL,
            ];
            // 10.Permohonan Persetujuan BA Papenkon
            $data_10 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Permohonan Persetujuan BA Papenkon',
                'nama_dari' => $row_program['nama_ketua_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_ketua_jasa_papenkon'],
                'nama_ke' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_pengguna_jasa_papenkon'],
            ];
            // 11.Persetujuan BA Papenkon
            $data_11 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Persetujuan BA Papenkon',
                'nama_dari' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_ketua_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_ketua_jasa_papenkon'],
            ];
            // 5.Addendum Kontrak
            $data_5 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Addendum Kontrak',
                'nama_dari' => 'Pengguna dan Penyedia Jasa',
                'jabatan_dari' => NULL,
                'nama_ke' => 'Pengguna dan Penyedia Jasa',
                'jabatan_ke' => NULL,
            ];
        } else  if ($flow_papenkon == 'DENGAN PAPENKON DAN > 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') {
            // 1.Permohonan Ijin Prinsip
            $data_1 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Permohonan Ijin Prinsip',
                'nama_dari' => $row_program['nama_wakil_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_wakil_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_pengguna_jasa_papenkon'],
            ];

            // 6.Saran Teknis
            $data_6 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Saran Teknis',
                'nama_dari' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_1_tingkat_pengguna_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_1_tingkat_pengguna_jasa_papenkon'],
            ];

            // 2.Persetujuan Ijin Prinsip
            $data_2 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Persetujuan Ijin Prinsip',
                'nama_dari' => $row_program['nama_wakil_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_wakil_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_pengguna_jasa_papenkon'],
            ];

            // 7.Undangan Permohonan ke Papenkon
            $data_7 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Undangan Permohonan ke Papenkon',
                'nama_dari' => $row_program['nama_wakil_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_wakil_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_ketua_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_ketua_jasa_papenkon'],
            ];

            // 8.Undangan Evaluasi dan Negosiasi Papenkon
            $data_8 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Undangan Evaluasi dan Negosiasi Papenkon',
                'nama_dari' => $row_program['nama_ketua_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_ketua_jasa_papenkon'],
                'nama_ke' => $row_program['nama_penyedia_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_penyedia_jasa_papenkon'],
            ];
            // 9.BA Evaluasi dan Negosiasi Papenkon
            $data_9 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'BA Evaluasi dan Negosiasi Papenkon',
                'nama_dari' => 'Papenkon dan Penyedia Jasa',
                'jabatan_dari' => NULL,
                'nama_ke' => 'Papenkon dan Penyedia Jasa',
                'jabatan_ke' => NULL,
            ];
            // 10.Permohonan Persetujuan BA Papenkon
            $data_10 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Permohonan Persetujuan BA Papenkon',
                'nama_dari' => $row_program['nama_ketua_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_ketua_jasa_papenkon'],
                'nama_ke' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_pengguna_jasa_papenkon'],
            ];
            // 11.Persetujuan BA Papenkon
            $data_11 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Persetujuan BA Papenkon',
                'nama_dari' => $row_program['nama_pengguna_jasa_papenkon'],
                'jabatan_dari' => $row_program['jabatan_pengguna_jasa_papenkon'],
                'nama_ke' => $row_program['nama_ketua_jasa_papenkon'],
                'jabatan_ke' => $row_program['jabatan_ketua_jasa_papenkon'],
            ];

            // 5.Addendum Kontrak
            $data_5 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow' => $addendum_flow,
                'flow_papenkon' => $flow_papenkon,
                'nama_uraian' => 'Addendum Kontrak',
                'nama_dari' => 'Pengguna dan Penyedia Jasa',
                'jabatan_dari' => NULL,
                'nama_ke' => 'Pengguna dan Penyedia Jasa',
                'jabatan_ke' => NULL,
            ];
        } else {
        }
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
        ];
        $upload = [
            'flow_papenkon_addendum_' . $addendum_flow . '' => $flow_papenkon,
        ];
        $this->Data_kontrak_model->update_rup($where, $upload);
        if ($cek_flow_sudah_ada) {
            $this->output->set_content_type('application/json')->set_output(json_encode('sudah_ada'));
        } else {
            if ($flow_papenkon == 'TANPA PAPENKON DAN < 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') {
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_1);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_2);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_3);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_4);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_5);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else  if ($flow_papenkon == 'TANPA PAPENKON DAN > 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') {
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_1);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_6);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_2);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_3);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_4);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_5);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else  if ($flow_papenkon == 'DENGAN PAPENKON DAN < 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') {
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_1);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_2);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_7);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_8);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_9);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_10);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_11);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_5);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else  if ($flow_papenkon == 'DENGAN PAPENKON DAN > 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') {
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_1);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_6);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_2);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_7);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_8);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_9);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_10);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_11);
                $this->Data_kontrak_model->add_ke_tbl_flow_papenkon($data_5);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
            }
        }
    }


    public function udpate_flow()
    {
        $id_flow_papenkon = $this->input->post('id_flow_papenkon');
        $post_data = $this->input->post('post_data');
        $type = $this->input->post('type');
        $where = [
            'id_flow_papenkon' => $id_flow_papenkon
        ];
        $data = [
            $type => $post_data
        ];
        $this->Data_kontrak_model->update_flow($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function udpate_flow_tambahan()
    {
        $id_flow_papenkon_tambahan = $this->input->post('id_flow_papenkon_tambahan');
        $post_data = $this->input->post('post_data');
        $type = $this->input->post('type');
        $where = [
            'id_flow_papenkon_tambahan' => $id_flow_papenkon_tambahan
        ];
        $data = [
            $type => $post_data
        ];
        $this->Data_kontrak_model->update_flow_tambahan($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function update_tanggal_surat_flow()
    {
        $id_flow_papenkon = $this->input->post('id_flow_papenkon');
        $tanggal = $this->input->post('tanggal_surat');
        $where = [
            'id_flow_papenkon' => $id_flow_papenkon
        ];
        $data = [
            'tanggal' => $tanggal
        ];
        $this->Data_kontrak_model->update_flow($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function update_tanggal_surat_flow_tambahan()
    {
        $id_flow_papenkon_tambahan = $this->input->post('id_flow_papenkon_tambahan');
        $tanggal_tambahan = $this->input->post('tanggal_surat_tambahan');
        $where = [
            'id_flow_papenkon_tambahan' => $id_flow_papenkon_tambahan
        ];
        $data = [
            'tanggal_tambahan' => $tanggal_tambahan
        ];
        $this->Data_kontrak_model->update_flow_tambahan($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function update_dokumen_papenkon()
    {
        $id_flow_papenkon = $this->input->post('id_flow_papenkon_upload');
        $config['upload_path'] = './file_dokumen_papenkon/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 0;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_dokumen')) {
            $fileData = $this->upload->data();
            $upload = [
                'status_upload' => 1,
                'file_dokumen' => $fileData['file_name'],
            ];
            $where = [
                'id_flow_papenkon' => $id_flow_papenkon
            ];
            $this->Data_kontrak_model->update_flow($where, $upload);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('upload'));
        }
    }

    public function update_dokumen_papenkon_tambahan()
    {
        $id_flow_papenkon_tambahan = $this->input->post('id_flow_papenkon_tambahan_upload');
        $config['upload_path'] = './file_dokumen_papenkon/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 0;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_dokumen_tambahan')) {
            $fileData = $this->upload->data();
            $upload = [
                'status_upload_tambahan' => 1,
                'file_dokumen_tambahan' => $fileData['file_name'],
            ];
            $where = [
                'id_flow_papenkon_tambahan' => $id_flow_papenkon_tambahan
            ];
            $this->Data_kontrak_model->update_flow_tambahan($where, $upload);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('upload'));
        }
    }

    public function delete_flow_tambahan($id_flow_papenkon_tambahan)
    {
        $this->Data_kontrak_model->delete_flow_tambahan($id_flow_papenkon_tambahan);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    function simpan_flow_papenkon_tambahan()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa_tambah_data');
        $addendum_flow_tambahan = $this->input->post('addendum_flow_tambahan_tambah_data');
        $flow_papenkon_tambahan = $this->input->post('flow_papenkon_tambahan_tambah_data');
        $jumlah_row = $this->input->post('jumlah_row');
        for ($i = 0; $i < $jumlah_row; $i++) {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'addendum_flow_tambahan' => $addendum_flow_tambahan,
                'flow_papenkon_tambahan' => $flow_papenkon_tambahan,
            ];
            $this->Data_kontrak_model->add_ke_tbl_flow_papenkon_tambahan($data);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function clear_table_hps_penyedia_kontrak_1()
    {
        $id_detail_sub_program_penyedia_jasa =  $this->input->post('id_detail_sub_program_penyedia_jasa');
        $where = [
            'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa,
            'item_baru' => 'kosong',
        ];
        $this->Data_kontrak_model->clear_table_hps_penyedia_kontrak_1($where);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function clear_table_hps_penyedia_kontrak_addendum_1()
    {
        $id_detail_sub_program_penyedia_jasa =  $this->input->post('id_detail_sub_program_penyedia_jasa');
        $add =  $this->input->post('add');
        $where = [
            'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa,
            'item_baru' => '_addendum_' . $add . '',
        ];
        $this->Data_kontrak_model->clear_table_hps_penyedia_kontrak_1($where);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
}
