<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
class Administrasi_penyedia extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Data_kontrak_model');
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
        $this->load->view('admin/kontrak_management_administrasi_penyedia/list_kontrak', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax_list_kontrak');
    }




    public function search($id_kontrak)
    {
        $keyword = $this->input->post('keyword');
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $keyword, $id_kontrak);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/kontrak_management_administrasi_penyedia/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
    }

    public function pdf_nota_dinas($id_detail_program_penyedia_jasa)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';

        $data['sub_program']  = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];

        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area);
        $this->load->view('admin/kontrak_management_administrasi_penyedia/pdf_nota_dinas', $data);
    }


    public function buat_hps($id_detail_program_penyedia_jasa)
    {
        $keyword = $this->input->post('keyword');
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['row_program']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program_by_id_detail_program($id_detail_program_penyedia_jasa);
        $id_departemen =  $data['row_program']['id_departemen'];
        $id_area =  $data['row_program']['id_area'];
        $id_sub_area =  $data['row_program']['id_sub_area'];
        $id_kontrak =  $data['row_program']['id_kontrak'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area, $keyword, $id_kontrak);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/kontrak_management_administrasi_penyedia/hps', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax_hps');
    }


    public function pdf_pip($id_detail_program_penyedia_jasa)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['sub_program']  = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];

        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area);
        $this->load->view('admin/kontrak_management_administrasi_penyedia/pdf_pip', $data);
    }

    public function pdf_hps($id_detail_program_penyedia_jasa)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['sub_program']  = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area);
        $this->load->view('admin/kontrak_management_administrasi_penyedia/pdf_hps', $data);
    }





    public function get_data()
    {
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $resultss = $this->Data_kontrak_model->getdatatable($id_departemen, $id_area, $id_sub_area);
        $data = [];
        $no = $_POST['start'];
        foreach ($resultss as $rs) {
            $row = array();
            $row[] = ++$no;
            $row[] = '<label data-toggle="tooltip" data-placement="bottom" title="' . $rs->nama_kontrak . '" style=" white-space: nowrap; width: 300px;overflow: hidden;text-overflow: ellipsis;">' . $rs->nama_kontrak . '</label>';
            $row[] = $rs->nama_departemen;
            $row[] = $rs->nama_area;
            $row[] = $rs->nama_sub_area;
            $row[] = $rs->no_kontrak;
            $row[] = $rs->tahun_kontrak;
            $row[] = $rs->tahun_anggaran;
            if ($rs->id_adendum == 0 || $rs->id_adendum == null) {
                $row[] = "Rp " . number_format($rs->nilai_kontrak_awal, 2, ',', '.');
                $row[] = $rs->tahun_kontrak;
                $row[] = 'Nilai Kontrak Awal';
            } else {
                if ($rs->add_ke == 1) {
                    $row[] = "Rp " . number_format($rs->nilai_add_I, 2, ',', '.');
                } else if ($rs->add_ke == 2) {
                    $row[] = "Rp " . number_format($rs->nilai_add_II, 2, ',', '.');
                } else if ($rs->add_ke == 3) {
                    $row[] = "Rp " . number_format($rs->nilai_add_III, 2, ',', '.');
                } else if ($rs->add_ke == 4) {
                    $row[] = "Rp " . number_format($rs->nilai_add_IV, 2, ',', '.');
                } else if ($rs->add_ke == 5) {
                    $row[] = "Rp " . number_format($rs->nilai_add_V, 2, ',', '.');
                } else if ($rs->add_ke == 6) {
                    $row[] = "Rp " . number_format($rs->nilai_add_VI, 2, ',', '.');
                } else if ($rs->add_ke == 7) {
                    $row[] = "Rp " . number_format($rs->nilai_add_VII, 2, ',', '.');
                } else if ($rs->add_ke == 8) {
                    $row[] = "Rp " . number_format($rs->nilai_add_VIII, 2, ',', '.');
                } else if ($rs->add_ke == 9) {
                    $row[] = "Rp " . number_format($rs->nilai_add_IX, 2, ',', '.');
                } else if ($rs->add_ke == 10) {
                    $row[] = "Rp " . number_format($rs->nilai_add_X, 2, ',', '.');
                } else if ($rs->add_ke == 11) {
                    $row[] = "Rp " . number_format($rs->nilai_add_XI, 2, ',', '.');
                } else if ($rs->add_ke == 12) {
                    $row[] = "Rp " . number_format($rs->nilai_add_XII, 2, ',', '.');
                } else if ($rs->add_ke == 13) {
                    $row[] = "Rp " . number_format($rs->nilai_add_XIII, 2, ',', '.');
                } else if ($rs->add_ke == 14) {
                    $row[] = "Rp " . number_format($rs->nilai_add_XIV, 2, ',', '.');
                } else if ($rs->add_ke == 15) {
                    $row[] = "Rp " . number_format($rs->nilai_add_XV, 2, ',', '.');
                } else {
                    $row[] = '';
                }
                $row[] = $rs->tanggal_add;
                $row[] = $rs->add_ke;
            }
            $row[] = $rs->jenis_kontrak;
            if ($rs->jenis_kontrak == 'Unit Price') {
                if ($rs->id_kontrak == 1) {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item " href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Program Pra</a>
                          
                         </div>
                         </div>';
                } else {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item "href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Program Pra</a>
                          
                         </div>
                         </div>';
                }
            } else {
                if ($rs->id_kontrak == 1) {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item " href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Program Pra</a>
                         
                         </div>
                         </div>';
                } else {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item "href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Program Pra</a>
                         
                         </div>
                         </div>';
                }
            }


            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_kontrak_model->count_all_data($id_departemen, $id_area, $id_sub_area),
            "recordsFiltered" => $this->Data_kontrak_model->count_filtered_data($id_departemen, $id_area, $id_sub_area),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }



    public function get_data_pasca()
    {
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $resultss = $this->Data_kontrak_model->getdatatable($id_departemen, $id_area, $id_sub_area);
        $data = [];
        $no = $_POST['start'];
        foreach ($resultss as $rs) {
            $row = array();
            $row[] = ++$no;
            $row[] = '<label data-toggle="tooltip" data-placement="bottom" title="' . $rs->nama_kontrak . '" style=" white-space: nowrap; width: 300px;overflow: hidden;text-overflow: ellipsis;">' . $rs->nama_kontrak . '</label>';
            $row[] = $rs->nama_departemen;
            $row[] = $rs->nama_area;
            $row[] = $rs->nama_sub_area;
            $row[] = $rs->no_kontrak;
            $row[] = $rs->tahun_kontrak;
            $row[] = $rs->tahun_anggaran;
            if ($rs->id_adendum == 0 || $rs->id_adendum == null) {
                $row[] = "Rp " . number_format($rs->nilai_kontrak_awal, 2, ',', '.');
                $row[] = $rs->tahun_kontrak;
                $row[] = 'Nilai Kontrak Awal';
            } else {
                $row[] = "Rp " . number_format($rs->nilai_add, 2, ',', '.');
                $row[] = $rs->tanggal_add;
                $row[] = $rs->add_ke;
            }
            $row[] = $rs->jenis_kontrak;
            if ($rs->jenis_kontrak == 'Unit Price') {
                if ($rs->id_kontrak == 1) {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item " href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Program Pasca</a>
                          
                         </div>
                         </div>';
                } else {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item "href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Program Pasca</a>
                          
                         </div>
                         </div>';
                }
            } else {
                if ($rs->id_kontrak == 1) {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item " href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Program Pasca</a>
                         
                         </div>
                         </div>';
                } else {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item "href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Program Pasca</a>
                         
                         </div>
                         </div>';
                }
            }


            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_kontrak_model->count_all_data($id_departemen, $id_area, $id_sub_area),
            "recordsFiltered" => $this->Data_kontrak_model->count_filtered_data($id_departemen, $id_area, $id_sub_area),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function get_data_taggihan()
    {
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $resultss = $this->Data_kontrak_model->getdatatable($id_departemen, $id_area, $id_sub_area);
        $data = [];
        $no = $_POST['start'];
        foreach ($resultss as $rs) {
            $row = array();
            $row[] = ++$no;
            $row[] = '<label data-toggle="tooltip" data-placement="bottom" title="' . $rs->nama_kontrak . '" style=" white-space: nowrap; width: 300px;overflow: hidden;text-overflow: ellipsis;">' . $rs->nama_kontrak . '</label>';
            $row[] = $rs->nama_departemen;
            $row[] = $rs->nama_area;
            $row[] = $rs->nama_sub_area;
            $row[] = $rs->no_kontrak;
            $row[] = $rs->tahun_kontrak;
            $row[] = $rs->tahun_anggaran;
            if ($rs->id_adendum == 0 || $rs->id_adendum == null) {
                $row[] = "Rp " . number_format($rs->nilai_kontrak_awal, 2, ',', '.');
                $row[] = $rs->tahun_kontrak;
                $row[] = 'Nilai Kontrak Awal';
            } else {
                $row[] = "Rp " . number_format($rs->nilai_add, 2, ',', '.');
                $row[] = $rs->tanggal_add;
                $row[] = $rs->add_ke;
            }
            $row[] = $rs->jenis_kontrak;
            if ($rs->jenis_kontrak == 'Unit Price') {
                if ($rs->id_kontrak == 1) {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item " href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Tagihan Program</a>
                          
                         </div>
                         </div>';
                } else {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item "href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Tagihan Program</a>
                          
                         </div>
                         </div>';
                }
            } else {
                if ($rs->id_kontrak == 1) {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item " href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Tagihan Program</a>
                         
                         </div>
                         </div>';
                } else {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item "href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','lihat_program'" . ')"><i class="fa fa-file-contract"></i> Kelola Tagihan Program</a>
                         
                         </div>
                         </div>';
                }
            }


            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_kontrak_model->count_all_data($id_departemen, $id_area, $id_sub_area),
            "recordsFiltered" => $this->Data_kontrak_model->count_filtered_data($id_departemen, $id_area, $id_sub_area),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    // BATAS UNIT PRICE
    public function by_id_unit_price($id_unit_price)
    {
        $row_unit_price = $this->Data_kontrak_model->by_id_unit_price($id_unit_price);
        $data = [
            'row_unit_price' => $row_unit_price
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function tambah_level_1_unit_price()
    {
        $id_kontrak = $this->input->post('id_kontrak');
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price($id_kontrak);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $count,
                'id_kontrak' => $id_kontrak,
            ];
            $this->Data_kontrak_model->tambah_ke_tbl_unit_price($data);
        } else {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $count,
                'id_kontrak' => $id_kontrak,
            ];
            $this->Data_kontrak_model->tambah_ke_tbl_unit_price($data);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function update_nilai_level_1_unit_price()
    {
        $id_unit_price = $this->input->post('id_unit_price');

        $where = [
            'id_unit_price' => $id_unit_price
        ];
        $data = [
            'satuan' => $this->input->post('satuan'),
            'kuantitas' => $this->input->post('kuantitas'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'total_harga' => $this->input->post('kuantitas') * $this->input->post('harga_satuan')
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function tambah_nama_uraian_level_1_unit_price()
    {
        $id_unit_price = $this->input->post('id_unit_price');
        $row_unit_price = $this->Data_kontrak_model->by_id_unit_price($id_unit_price);
        $row_no_urut = $row_unit_price['no_urut'];
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price_1($id_unit_price);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_unit_price' => $id_unit_price,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_unit_price' => $id_unit_price,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_unit_price_1($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_1_unit_price()
    {
        $id_unit_price = $this->input->post('id_unit_price');
        $row_unit_price = $this->Data_kontrak_model->by_id_unit_price($id_unit_price);
        if ($row_unit_price['no_urut'] == 1) {
            $where = [
                'id_unit_price' => $id_unit_price
            ];
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
            ];
            $this->Data_kontrak_model->update_ke_tbl_unit_price($where, $data);

            $where = [
                'id_kontrak' => $row_unit_price['id_kontrak']
            ];
            $data = [
                'nama_kontrak' => $this->input->post('nama_uraian'),
            ];
            $this->Data_kontrak_model->update_kontrak($where, $data);
        } else {
            $where = [
                'id_unit_price' => $id_unit_price
            ];
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
            ];
            $this->Data_kontrak_model->update_ke_tbl_unit_price($where, $data);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_induk_level_1_unit_price($id_unit_price)
    {
        $this->Data_kontrak_model->delete_murni_tbl_unit_price($id_unit_price);
        $id_kontrak = $this->input->post('id_kontrak');
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }



    // BATAS UNIT PRICE 1
    public function by_id_unit_price_1($id_unit_price_1)
    {
        $row_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);

        $data = [
            'row_unit_price_1' => $row_unit_price_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_2_unit_price()
    {
        $id_unit_price_1 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_1' => $id_unit_price_1
        ];
        $data = [
            'satuan' => $this->input->post('satuan'),
            'kuantitas' => $this->input->post('kuantitas'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'total_harga' => $this->input->post('kuantitas') * $this->input->post('harga_satuan')
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);

        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price__1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price__1['total_harga'];
        };
        // end ambil
        $where = [
            'id_unit_price' => $id_unit_price
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_1,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function tambah_nama_uraian_level_2_unit_price()
    {
        $id_unit_price_1 = $this->input->post('id_unit_price');
        $row_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $row_no_urut = $row_unit_price_1['no_urut'];
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price_2($id_unit_price_1);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_unit_price_1' => $id_unit_price_1,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_unit_price_1' => $id_unit_price_1,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_unit_price_2($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_2_unit_price()
    {
        $id_unit_price_1 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_1' => $id_unit_price_1
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_induk_level_2_unit_price($id_unit_price_1)
    {
        $this->Data_kontrak_model->delete_murni_tbl_unit_price_1($id_unit_price_1);
        $id_unit_price = $this->input->post('id_unit_price');
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
        };
        $where = [
            'id_unit_price' => $id_unit_price,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_1,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price($where, $data);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // administrasi data program konntrak

    public function add_sub_program()
    {
        // kondisi sudah di gunakan kontrakini
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $nama_kontrak_program =  $this->input->post('nama_kontrak_program');
        $data_kontrak = [
            'nama_kontrak_program' => $nama_kontrak_program,
            'id_detail_program_penyedia_jasa' =>  $id_detail_program_penyedia_jasa,
        ];
        $this->Data_kontrak_model->add_sub_program($data_kontrak);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function add_rup()
    {


        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $nama_kontrak_program =  $this->input->post('nama_kontrak_program');
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
        ];
        $data = [
            'nilai_rup' => $this->input->post('nilai_rup'),
            'jenis_pengadaan' => $this->input->post('jenis_pengadaan'),
        ];
        $this->Data_kontrak_model->update_rup($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // pip
    public function add_pip()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $no_surat_pip =  $this->input->post('no_surat_pip');
        $tgl_surat_pip =  $this->input->post('tgl_surat_pip');
        $lokasi_pekerjaan_pip =  $this->input->post('lokasi_pekerjaan_pip');
        $sasaran_pekerjaan_pip =  $this->input->post('sasaran_pekerjaan_pip');
        $biaya_rkap_pip =  $this->input->post('biaya_rkap_pip');
        $perkiraan_biaya_pip =  $this->input->post('perkiraan_biaya_pip');
        $waktu_pelaksanaan_pip =  $this->input->post('waktu_pelaksanaan_pip');
        $waktu_pemeliharaan_pip =  $this->input->post('waktu_pemeliharaan_pip');
        $pembebanan_biaya =  $this->input->post('pembebanan_biaya');
        $format_persetujuan_pip =  $this->input->post('format_persetujuan_pip');
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
        ];
        $data = [
            'jenis_pengadaan' => $this->input->post('jenis_pengadaan'),
            'no_surat_pip' => $no_surat_pip,
            'tgl_surat_pip' => $tgl_surat_pip,
            'lokasi_pekerjaan_pip' => $lokasi_pekerjaan_pip,
            'sasaran_pekerjaan_pip' => $sasaran_pekerjaan_pip,
            'biaya_rkap_pip' => $biaya_rkap_pip,
            'perkiraan_biaya_pip' => $perkiraan_biaya_pip,
            'waktu_pelaksanaan_pip' => $waktu_pelaksanaan_pip,
            'waktu_pemeliharaan_pip' => $waktu_pemeliharaan_pip,
            'pembebanan_biaya' => $pembebanan_biaya,
            'format_persetujuan_pip' => $format_persetujuan_pip,
        ];
        $this->Data_kontrak_model->update_rup($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // hps
    public function add_hps()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $no_surat_hps =  $this->input->post('no_surat_hps');
        $tgl_surat_hps =  $this->input->post('tgl_surat_hps');
        $format_persetujuan_hps =  $this->input->post('format_persetujuan_hps');
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
        ];
        $data = [
            'no_surat_hps' => $no_surat_hps,
            'tgl_surat_hps' => $tgl_surat_hps,
            'format_persetujuan_hps' => $format_persetujuan_hps,
        ];
        $this->Data_kontrak_model->update_rup($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // nota
    public function add_nota()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $no_surat_nota =  $this->input->post('no_surat_nota');
        $tgl_surat_nota =  $this->input->post('tgl_surat_nota');
        $format_persetujuan_nota =  $this->input->post('format_persetujuan_nota');
        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
        ];
        $data = [
            'no_surat_nota' => $no_surat_nota,
            'tgl_surat_nota' => $tgl_surat_nota,
            'format_persetujuan_nota' => $format_persetujuan_nota,
        ];
        $this->Data_kontrak_model->update_rup($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
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

    public function byid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa)
    {
        $row_detail = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $data_spm = $this->Data_kontrak_model->get_result_detail_smp($id_detail_program_penyedia_jasa);
        $data_multi_years = $this->Data_kontrak_model->get_result_detail_multiyears($id_detail_program_penyedia_jasa);
        $data_administrasi = $this->Data_kontrak_model->get_result_detail_administrasi($id_detail_program_penyedia_jasa);
        $data_teknis = $this->Data_kontrak_model->get_result_detail_teknis($id_detail_program_penyedia_jasa);
        $count_multi_yeras = $this->Data_kontrak_model->count_multi_yeras($id_detail_program_penyedia_jasa);
        $get_row_addendum_administrasi_terakhir = $this->Data_kontrak_model->get_row_addendum_administrasi_terakhir($id_detail_program_penyedia_jasa);
        $total_kontrak_addendum = $row_detail['total_kontrak_addendum_' . $get_row_addendum_administrasi_terakhir['no_addendum']];
        $flow = $row_detail['flow_pra_dokumen_kontrak'];
        $result_tbl_dokumen_surat_pra_pip = $this->Data_kontrak_model->cek_tbl_monitoring_pip($id_detail_program_penyedia_jasa, $flow);
        $result_tbl_dokumen_surat_pra_hps = $this->Data_kontrak_model->cek_tbl_monitoring_hps($id_detail_program_penyedia_jasa, $flow);
        $result_tbl_dokumen_surat_pra_nota_dinas = $this->Data_kontrak_model->cek_tbl_monitoring_nota_dinas($id_detail_program_penyedia_jasa, $flow);

        $result_tbl_dokumen_surat_pasca_gunning = $this->Data_kontrak_model->cek_tbl_monitoring_gunning($id_detail_program_penyedia_jasa);
        $result_tbl_dokumen_surat_pasca_loi = $this->Data_kontrak_model->cek_tbl_monitoring_loi($id_detail_program_penyedia_jasa);
        $result_tbl_dokumen_surat_pasca_sho = $this->Data_kontrak_model->cek_tbl_monitoring_sho($id_detail_program_penyedia_jasa);
        $result_tbl_dokumen_surat_pasca_spmk = $this->Data_kontrak_model->cek_tbl_monitoring_spmk($id_detail_program_penyedia_jasa);

        $data = [
            'row_program_detail' => $row_detail,
            'data_spm' => $data_spm,
            'data_multi_years' => $data_multi_years,
            'data_administrasi' => $data_administrasi,
            'data_teknis' => $data_teknis,
            'count_multi_yeras' => $count_multi_yeras,
            'row_administrasi_addedum' => $get_row_addendum_administrasi_terakhir,
            'total_kontrak_addendum' => $total_kontrak_addendum,
            'result_tbl_dokumen_surat_pra_pip' => $result_tbl_dokumen_surat_pra_pip,
            'result_tbl_dokumen_surat_pra_hps' => $result_tbl_dokumen_surat_pra_hps,
            'result_tbl_dokumen_surat_pra_nota_dinas' => $result_tbl_dokumen_surat_pra_nota_dinas,
            // pasca
            'result_tbl_dokumen_surat_pasca_gunning' => $result_tbl_dokumen_surat_pasca_gunning,
            'result_tbl_dokumen_surat_pasca_loi' => $result_tbl_dokumen_surat_pasca_loi,
            'result_tbl_dokumen_surat_pasca_sho' => $result_tbl_dokumen_surat_pasca_sho,
            'result_tbl_dokumen_surat_pasca_spmk' => $result_tbl_dokumen_surat_pasca_spmk
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function add_spm()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $id_spm =  $this->input->post('id_spm');
        $cek_spm_jika_sudah_ada = $this->Data_kontrak_model->get_detail_smp($id_detail_program_penyedia_jasa, $id_spm);
        if ($cek_spm_jika_sudah_ada || $id_spm == 0) {
            $this->output->set_content_type('application/json')->set_output(json_encode('sudah_ada'));
        } else {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'id_spm' => $id_spm
            ];
            $this->Data_kontrak_model->add_spm_detail($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }
    public function hapus_spm()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $id_spm =  $this->input->post('id_spm');
        $data = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'id_spm' => $id_spm
        ];
        $this->Data_kontrak_model->delete_spm($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_multiyears()
    {
        $id_multi_years =  $this->input->post('id_multi_years');
        $this->Data_kontrak_model->delete_by_id_multi_years_ke_tbl_multiyers($id_multi_years);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // hps_penyedia_1
    public function get_sub_program_penyedia()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $id_detail_sub_program_penyedia_jasa = $this->input->post('id_detail_sub_program_penyedia_jasa');
        $row_sub_program = $this->Data_kontrak_model->get_sub_program_penyedia_jasa($id_detail_sub_program_penyedia_jasa);
        $row_program = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $data = [
            'row_sub_program' => $row_sub_program,
            'row_program' => $row_program,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function get_hps_penyedia_1()
    {
        $id_hps_penyedia_1 = $this->input->post('id_hps_penyedia_1');
        $get_hps_penyedia_1 = $this->Data_kontrak_model->get_hps_penyedia_1($id_hps_penyedia_1);
        $id_detail_program_penyedia_jasa = $get_hps_penyedia_1['id_detail_program_penyedia_jasa'];
        $id_detail_sub_program_penyedia_jasa =  $get_hps_penyedia_1['id_detail_sub_program_penyedia_jasa'];
        $result_urutan_hps_penyedia_1 = $this->Data_kontrak_model->get_result_hps_penyedia_1($id_detail_program_penyedia_jasa, $id_detail_sub_program_penyedia_jasa);
        $data = [
            'get_hps_penyedia_1' => $get_hps_penyedia_1,
            'result_urutan_hps_penyedia_1' => $result_urutan_hps_penyedia_1,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function tambah_hps_penyedia_1()
    {
        $id_detail_sub_program_penyedia_jasa =  $this->input->post('id_detail_sub_program_penyedia_jasa');
        $id_where_detail_program = $this->input->post('id_detail_program_penyedia_jasa');
        $id_detail_program_penyedia_jasa = $this->Data_kontrak_model->get_sub_program_penyedia_jasa($id_detail_sub_program_penyedia_jasa);
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_1($id_where_detail_program, $id_detail_sub_program_penyedia_jasa);
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
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_1($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_detail_program_penyedia_jasa' => $id_where_detail_program,
                'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa,
                'no_urut' => 1 . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_1($data_nilai_kontrak);
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
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_1($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_detail_program_penyedia_jasa' => $id_where_detail_program,
                'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa,
                'no_urut' => 1 . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_1($data_nilai_kontrak);
        }
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_1');
        $this->db->where('tbl_hps_penyedia_1.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $this->db->where('tbl_hps_penyedia_1.harga_satuan_hps !=', null);
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
            'nilai_hps' => $total,
            'nilai_sub_kontrak_penyedia' => $total
        ];
        $this->Data_kontrak_model->update_rup_ke_sub_detail_program_penyedia_jasa($where, $data_update);
        $id_where_detail_program = $id_detail_program_penyedia_jasa['id_detail_program_penyedia_jasa'];
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_where_detail_program);
        $query_tbl_hps_sub = $this->db->get();
        $total_sub = 0;
        $total_sub_nilai_kontrak = 0;
        foreach ($query_tbl_hps_sub->result_array() as $key => $dataku_sub) {
            $total_sub += $dataku_sub['nilai_hps'];
            $total_sub_nilai_kontrak += $dataku_sub['nilai_sub_kontrak_penyedia'];
        }
        $where_sub = [
            'id_detail_program_penyedia_jasa' => $id_where_detail_program
        ];
        $data_update_sub = [
            'total_hps_mata_anggaran' => $total_sub,
            'total_kontrak' => $total_sub_nilai_kontrak
        ];
        $this->Data_kontrak_model->update_rup($where_sub, $data_update_sub);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function edit_hps_penyedia_1()
    {

        $id_hps_penyedia_1 = $this->input->post('id_hps_penyedia_1');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_1 = [
            'id_hps_penyedia_1' => $id_hps_penyedia_1
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_1($data, $id_where_hps_penyedia_1);
        $id_where_hps_penyedia_kontrak_1 = [
            'id_refrence_hps' =>  $id_hps_penyedia_1
        ];
        $data_nilai_kontrak = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'satuan_hps' => $satuan_hps,
            'volume_hps' => $volume_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data_nilai_kontrak, $id_where_hps_penyedia_kontrak_1);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_hps_penyedia_1()
    {
        // ini Untuk data logic 
        $data_logic['id_hps_penyedia_1'] = $this->input->post('id_hps_penyedia_1');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $id_hps_penyedia_1 =  $this->input->post('id_hps_penyedia_1');
        $this->Data_kontrak_model->delete_triger_hps_penyedia_1($id_hps_penyedia_1);
        // logika update ke hps_penyedia_1
        $this->load->view('hps_penyedia_level_logic/nilai_level_2', $data_logic);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // hps_penyedia_2
    public function get_hps_penyedia_2()
    {
        $id_hps_penyedia_2 = $this->input->post('id_hps_penyedia_2');
        $get_hps_penyedia_2 = $this->Data_kontrak_model->get_hps_penyedia_2($id_hps_penyedia_2);
        $data = [
            'get_hps_penyedia_2' => $get_hps_penyedia_2,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function tambah_hps_penyedia_2()
    {
        // ini Untuk data logic 
        $data_logic['id_hps_penyedia_1'] = $this->input->post('id_hps_penyedia_1');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $id_hps_penyedia_1 =  $this->input->post('id_hps_penyedia_1');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $no_urut = $this->Data_kontrak_model->get_hps_penyedia_1($id_hps_penyedia_1);
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_2($id_hps_penyedia_1);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_hps_penyedia_1' => $id_hps_penyedia_1,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_2($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_hps_penyedia_kontrak_1' => $id_hps_penyedia_1,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_2($data_nilai_kontrak);
            // logika update ke hps_penyedia_1
            $this->load->view('hps_penyedia_level_logic/nilai_level_2', $data_logic);
        } else {
            $data = [
                'id_hps_penyedia_1' => $id_hps_penyedia_1,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_2($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_hps_penyedia_kontrak_1' => $id_hps_penyedia_1,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_2($data_nilai_kontrak);
            // logika update ke hps_penyedia_1
            $this->load->view('hps_penyedia_level_logic/nilai_level_2', $data_logic);
        }
        $data_update = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
            'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function hapus_hps_penyedia_2()
    {
        $id_hps_penyedia_2 =  $this->input->post('id_hps_penyedia_2');
        // ini Untuk data logic 
        $data_logic['id_hps_penyedia_1'] = $this->input->post('id_hps_penyedia_1');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $this->Data_kontrak_model->delete_triger_hps_penyedia_2($id_hps_penyedia_2);
        // logika update ke hps_penyedia_2
        $this->load->view('hps_penyedia_level_logic/nilai_level_2', $data_logic);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function edit_hps_penyedia_2()
    {
        // _1
        // ini Untuk data logic 
        $data_logic['id_hps_penyedia_1'] = $this->input->post('id_hps_penyedia_1');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $id_hps_penyedia_1 = $this->input->post('id_hps_penyedia_1');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_1 = [
            'id_hps_penyedia_1' => $id_hps_penyedia_1
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_1($data, $id_where_hps_penyedia_1);
        $id_where_hps_penyedia_kontrak_1 = [
            'id_refrence_hps' =>  $id_hps_penyedia_1
        ];
        $data_nilai_kontrak = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'satuan_hps' => $satuan_hps,
            'volume_hps' => $volume_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data_nilai_kontrak, $id_where_hps_penyedia_kontrak_1);
        $data_update = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
            'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }


    // hps_penyedia_3
    // 3
    // 2
    public function get_hps_penyedia_3()
    {
        $id_hps_penyedia_3 = $this->input->post('id_hps_penyedia_3');
        $get_hps_penyedia_3 = $this->Data_kontrak_model->get_hps_penyedia_3($id_hps_penyedia_3);
        $data = [
            'get_hps_penyedia_3' => $get_hps_penyedia_3,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function tambah_hps_penyedia_3()
    {
        // ini Untuk data logic 
        $data_logic['id_hps_penyedia_2'] = $this->input->post('id_hps_penyedia_2');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $id_hps_penyedia_2 =  $this->input->post('id_hps_penyedia_2');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $no_urut = $this->Data_kontrak_model->get_hps_penyedia_2($id_hps_penyedia_2);
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_3($id_hps_penyedia_2);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_hps_penyedia_2' => $id_hps_penyedia_2,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_3($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_hps_penyedia_kontrak_2' => $id_hps_penyedia_2,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_3($data_nilai_kontrak);
            // logic update
        } else {
            $data = [
                'id_hps_penyedia_2' => $id_hps_penyedia_2,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_3($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_hps_penyedia_kontrak_2' => $id_hps_penyedia_2,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_3($data_nilai_kontrak);
        }
        $this->load->view('hps_penyedia_level_logic/nilai_level_3', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
            'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }
    public function hapus_hps_penyedia_3()
    {
        $id_hps_penyedia_3 =  $this->input->post('id_hps_penyedia_3');
        // ini Untuk data logic 
        $data_logic['id_hps_penyedia_2'] = $this->input->post('id_hps_penyedia_2');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $this->Data_kontrak_model->delete_triger_hps_penyedia_3($id_hps_penyedia_3);
        // logika update ke hps_penyedia_3
        $this->load->view('hps_penyedia_level_logic/nilai_level_3', $data_logic);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function edit_hps_penyedia_3()
    {
        // ini Untuk data logic 
        $data_logic['id_hps_penyedia_2'] = $this->input->post('id_hps_penyedia_2');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $id_hps_penyedia_2 = $this->input->post('id_hps_penyedia_2');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_2 = [
            'id_hps_penyedia_2' => $id_hps_penyedia_2
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_2($data, $id_where_hps_penyedia_2);
        $id_where_hps_penyedia_kontrak_2 = [
            'id_refrence_hps' =>  $id_hps_penyedia_2
        ];
        $data_nilai_kontrak = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'satuan_hps' => $satuan_hps,
            'volume_hps' => $volume_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_2($data_nilai_kontrak, $id_where_hps_penyedia_kontrak_2);
        $this->load->view('hps_penyedia_level_logic/nilai_level_3', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
            'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }
    // hps_penyedia_4
    // 4
    // 3
    public function get_hps_penyedia_4()
    {
        $id_hps_penyedia_4 = $this->input->post('id_hps_penyedia_4');
        $get_hps_penyedia_4 = $this->Data_kontrak_model->get_hps_penyedia_4($id_hps_penyedia_4);
        $data = [
            'get_hps_penyedia_4' => $get_hps_penyedia_4,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function tambah_hps_penyedia_4()
    {
        $data_logic['id_hps_penyedia_3'] = $this->input->post('id_hps_penyedia_3');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_3 =  $this->input->post('id_hps_penyedia_3');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $no_urut = $this->Data_kontrak_model->get_hps_penyedia_3($id_hps_penyedia_3);
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_4($id_hps_penyedia_3);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_hps_penyedia_3' => $id_hps_penyedia_3,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_4($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_hps_penyedia_kontrak_3' => $id_hps_penyedia_3,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_4($data_nilai_kontrak);
            $this->load->view('hps_penyedia_level_logic/nilai_level_4', $data_logic);
        } else {
            $data = [
                'id_hps_penyedia_3' => $id_hps_penyedia_3,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_4($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_hps_penyedia_kontrak_3' => $id_hps_penyedia_3,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_4($data_nilai_kontrak);
            $this->load->view('hps_penyedia_level_logic/nilai_level_4', $data_logic);
        }
        $data_update = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
            'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function edit_hps_penyedia_4()
    {
        // 3
        $data_logic['id_hps_penyedia_3'] = $this->input->post('id_hps_penyedia_3');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_3 = $this->input->post('id_hps_penyedia_3');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_3 = [
            'id_hps_penyedia_3' => $id_hps_penyedia_3
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_3($data, $id_where_hps_penyedia_3);
        $id_where_hps_penyedia_kontrak_3 = [
            'id_refrence_hps' =>  $id_hps_penyedia_3
        ];
        $data_nilai_kontrak = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'satuan_hps' => $satuan_hps,
            'volume_hps' => $volume_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_3($data_nilai_kontrak, $id_where_hps_penyedia_kontrak_3);
        $this->load->view('hps_penyedia_level_logic/nilai_level_4', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
            'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function hapus_hps_penyedia_4()
    {
        $id_hps_penyedia_4 =  $this->input->post('id_hps_penyedia_4');
        // ini Untuk data logic 
        $data_logic['id_hps_penyedia_3'] = $this->input->post('id_hps_penyedia_3');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $this->Data_kontrak_model->delete_triger_hps_penyedia_4($id_hps_penyedia_4);
        // logika update ke hps_penyedia_4
        $this->load->view('hps_penyedia_level_logic/nilai_level_4', $data_logic);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // _5
    // 4
    // hps_penyedia_5
    public function get_hps_penyedia_5()
    {
        $id_hps_penyedia_5 = $this->input->post('id_hps_penyedia_5');
        $get_hps_penyedia_5 = $this->Data_kontrak_model->get_hps_penyedia_5($id_hps_penyedia_5);
        $data = [
            'get_hps_penyedia_5' => $get_hps_penyedia_5,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function tambah_hps_penyedia_5()
    {
        $data_logic['id_hps_penyedia_4'] = $this->input->post('id_hps_penyedia_4');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $id_hps_penyedia_4 =  $this->input->post('id_hps_penyedia_4');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $no_urut = $this->Data_kontrak_model->get_hps_penyedia_4($id_hps_penyedia_4);
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_5($id_hps_penyedia_4);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_hps_penyedia_4' => $id_hps_penyedia_4,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_5($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_hps_penyedia_kontrak_4' => $id_hps_penyedia_4,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_5($data_nilai_kontrak);
            $this->load->view('hps_penyedia_level_logic/nilai_level_5', $data_logic);
        } else {
            $data = [
                'id_hps_penyedia_4' => $id_hps_penyedia_4,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_5($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_hps_penyedia_kontrak_4' => $id_hps_penyedia_4,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_5($data_nilai_kontrak);
            $this->load->view('hps_penyedia_level_logic/nilai_level_5', $data_logic);
        }
        $data_update = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
            'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function edit_hps_penyedia_5()
    {
        // 4
        $data_logic['id_hps_penyedia_4'] = $this->input->post('id_hps_penyedia_4');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $id_hps_penyedia_4 = $this->input->post('id_hps_penyedia_4');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_4 = [
            'id_hps_penyedia_4' => $id_hps_penyedia_4
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_4($data, $id_where_hps_penyedia_4);
        $id_where_hps_penyedia_kontrak_4 = [
            'id_refrence_hps' =>  $id_hps_penyedia_4
        ];
        $data_nilai_kontrak = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'satuan_hps' => $satuan_hps,
            'volume_hps' => $volume_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_4($data_nilai_kontrak, $id_where_hps_penyedia_kontrak_4);
        $this->load->view('hps_penyedia_level_logic/nilai_level_5', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
            'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function hapus_hps_penyedia_5()
    {
        $id_hps_penyedia_5 =  $this->input->post('id_hps_penyedia_5');
        // ini Untuk data logic 
        $data_logic['id_hps_penyedia_4'] = $this->input->post('id_hps_penyedia_4');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $this->Data_kontrak_model->delete_triger_hps_penyedia_5($id_hps_penyedia_5);
        // logika update ke hps_penyedia_5
        $this->load->view('hps_penyedia_level_logic/nilai_level_5', $data_logic);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // _6
    // 5
    // hps_penyedia_6
    public function get_hps_penyedia_6()
    {
        $id_hps_penyedia_6 = $this->input->post('id_hps_penyedia_6');
        $get_hps_penyedia_6 = $this->Data_kontrak_model->get_hps_penyedia_6($id_hps_penyedia_6);
        $data = [
            'get_hps_penyedia_6' => $get_hps_penyedia_6,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function tambah_hps_penyedia_6()
    {
        $id_hps_penyedia_5 =  $this->input->post('id_hps_penyedia_5');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $no_urut = $this->Data_kontrak_model->get_hps_penyedia_5($id_hps_penyedia_5);
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_6($id_hps_penyedia_5);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_hps_penyedia_5' => $id_hps_penyedia_5,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_6($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_hps_penyedia_kontrak_5' => $id_hps_penyedia_5,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_6($data_nilai_kontrak);
        } else {
            $data = [
                'id_hps_penyedia_5' => $id_hps_penyedia_5,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_6($data);
            $insert_id = $this->db->insert_id();
            $data_nilai_kontrak = [
                'id_hps_penyedia_kontrak_5' => $id_hps_penyedia_5,
                'no_urut' => $no_urut['no_urut'] . '.' . $count,
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'satuan_hps' => $satuan_hps,
                'volume_hps' => $volume_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga,
                'id_refrence_hps' => $insert_id,
                'item_baru' => 'kosong'
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_6($data_nilai_kontrak);
        }
        $data_update = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
            'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function edit_hps_penyedia_6()
    {
        // 5
        $id_hps_penyedia_5 = $this->input->post('id_hps_penyedia_5');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_5 = [
            'id_hps_penyedia_5' => $id_hps_penyedia_5
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_5($data, $id_where_hps_penyedia_5);
        $id_where_hps_penyedia_kontrak_5 = [
            'id_refrence_hps' =>  $id_hps_penyedia_5
        ];
        $data_nilai_kontrak = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'satuan_hps' => $satuan_hps,
            'volume_hps' => $volume_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_5($data_nilai_kontrak, $id_where_hps_penyedia_kontrak_5);
        $data_update = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
            'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function hapus_hps_penyedia_6()
    {
        $id_hps_penyedia_6 =  $this->input->post('id_hps_penyedia_6');
        // ini Untuk data logic 
        $data_logic['id_hps_penyedia_5'] = $this->input->post('id_hps_penyedia_5');
        $data_logic['type_add'] = $this->input->post('type_add');
        // batas data logic
        $this->Data_kontrak_model->delete_triger_hps_penyedia_6($id_hps_penyedia_6);
        // logika update ke hps_penyedia_6
        $this->load->view('hps_penyedia_level_logic/nilai_level_6', $data_logic);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function update_ke_sub_dan_detail_program()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $id_detail_sub_program_penyedia_jasa =  $this->input->post('id_detail_sub_program_penyedia_jasa');
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_1');
        $this->db->where('tbl_hps_penyedia_1.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $this->db->where('tbl_hps_penyedia_1.harga_satuan_hps !=', null);
        $query_tbl_hps = $this->db->get();
        $total_hps_penyedia_1 = 0;
        $total_hps_penyedia_2 = 0;
        $total_hps_penyedia_3 = 0;
        $total_hps_penyedia_4 = 0;
        $total_hps_penyedia_5 = 0;
        foreach ($query_tbl_hps->result_array() as $key => $value_hps_penyedia_1) {
            $total_hps_penyedia_1 += $value_hps_penyedia_1['total_harga'];
            $id_hps_penyedia_1 = $value_hps_penyedia_1['id_hps_penyedia_1'];
            // batas tbl_hps_penyedia_2
            $this->db->select('*');
            $this->db->from('tbl_hps_penyedia_2');
            $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_1', $id_hps_penyedia_1);
            $this->db->where('tbl_hps_penyedia_2.harga_satuan_hps !=', null);
            $query_tbl_hps_penyedia_2 = $this->db->get();
            foreach ($query_tbl_hps_penyedia_2->result_array() as $key => $value_hps_penyedia_2) {
                $total_hps_penyedia_2 += $value_hps_penyedia_2['total_harga'];
                $id_hps_penyedia_2 = $value_hps_penyedia_2['id_hps_penyedia_2'];
                // batas tbl_hps_penyedia_3
                $this->db->select('*');
                $this->db->from('tbl_hps_penyedia_3');
                $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_2', $id_hps_penyedia_2);
                $this->db->where('tbl_hps_penyedia_3.harga_satuan_hps !=', null);
                $query_tbl_hps_penyedia_3 = $this->db->get();
                foreach ($query_tbl_hps_penyedia_3->result_array() as $key => $value_hps_penyedia_3) {
                    $total_hps_penyedia_3 += $value_hps_penyedia_3['total_harga'];
                    $id_hps_penyedia_3 = $value_hps_penyedia_3['id_hps_penyedia_3'];
                    // batas tbl_hps_penyedia_4
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_4');
                    $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_3', $id_hps_penyedia_3);
                    $this->db->where('tbl_hps_penyedia_4.harga_satuan_hps !=', null);
                    $query_tbl_hps_penyedia_4 = $this->db->get();
                    foreach ($query_tbl_hps_penyedia_4->result_array() as $key => $value_hps_penyedia_4) {
                        $total_hps_penyedia_4 += $value_hps_penyedia_4['total_harga'];
                        $id_hps_penyedia_4 = $value_hps_penyedia_4['id_hps_penyedia_4'];
                        // batas tbl_hps_penyedia_5
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_5');
                        $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_4', $id_hps_penyedia_4);
                        $this->db->where('tbl_hps_penyedia_5.harga_satuan_hps !=', null);
                        $query_tbl_hps_penyedia_5 = $this->db->get();
                        foreach ($query_tbl_hps_penyedia_5->result_array() as $key => $value_hps_penyedia_5) {
                            $total_hps_penyedia_5 += $value_hps_penyedia_5['total_harga'];
                        }
                    }
                }
            }
        }
        $where = [
            'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa
        ];
        $data = [
            'nilai_hps' => $total_hps_penyedia_1,
            'nilai_sub_kontrak_penyedia' =>  $total_hps_penyedia_1,
        ];
        $this->Data_kontrak_model->update_rup_ke_sub_detail_program_penyedia_jasa($where, $data);
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query_tbl_hps_sub = $this->db->get();
        $total_sub = 0;
        $total_sub_nilai_kontrak = 0;
        foreach ($query_tbl_hps_sub->result_array() as $key => $dataku_sub) {
            $total_sub += $dataku_sub['nilai_hps'];
            $total_sub_nilai_kontrak += $dataku_sub['nilai_sub_kontrak_penyedia'];
        }
        $where_sub = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
        ];
        $data_update_sub = [
            'total_hps_mata_anggaran' => $total_sub,
            'total_kontrak' => $total_sub_nilai_kontrak
        ];
        $this->Data_kontrak_model->update_rup($where_sub, $data_update_sub);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function add_addendum()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $cek_no_add =  $this->input->post('no_addendum');
        $jika_ada_add = $this->Data_kontrak_model->get_addendum_by_id_penyedia_kontrak($id_detail_program_penyedia_jasa);
        $data_ke_logic['id_detail_program_penyedia_jasa'] = $this->input->post('id_detail_program_penyedia_jasa');
        $data_ke_logic['copy_add'] = $this->input->post('copy_add');
        if ($jika_ada_add) {
            $data = [
                'no_addendum' => $this->input->post('no_addendum'),
                'tanggal_addendum' => $this->input->post('tanggal_addendum'),
                'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            ];
            $this->Data_kontrak_model->add_addendum_penyedia_kontrak($data);
            if ($cek_no_add == 1) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_I', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 2) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_II', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 3) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_III', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 4) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_IV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 5) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_V', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 6) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_VI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 7) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_VII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 8) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_VIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 9) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_IX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 10) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_X', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 11) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 12) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 13) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 14) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XIV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 15) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 16) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XVI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 17) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XVII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 18) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XVIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 19) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XIX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 20) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 21) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XXI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 22) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XXII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 23) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XXIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 24) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XXIV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 25) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XXV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 26) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XXVI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 27) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XXVII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 28) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XXVIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 29) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XXIX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 30) {
                $this->load->view('cek_add_penyedia_kontrak/copy_add_XXX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            }
        } else {
            $data = [
                'no_addendum' => $this->input->post('no_addendum'),
                'tanggal_addendum' => $this->input->post('tanggal_addendum'),
                'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
            ];
            $this->Data_kontrak_model->add_addendum_penyedia_kontrak($data);
            if ($cek_no_add == 1) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_I', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 2) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_II', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 3) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_III', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 4) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_IV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 5) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_V', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 6) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_VI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 7) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_VII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 8) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_VIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 9) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_IX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 10) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_X', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 11) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 12) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 13) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 14) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XIV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 15) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 16) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XVI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 17) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XVII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 18) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XVIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 19) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XIX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 20) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 21) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XXI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 22) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XXII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 23) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XXIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 24) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XXIV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 25) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XXV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 26) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XXVI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 27) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XXVII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 28) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XXVIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 29) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XXIX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 30) {
                $this->load->view('tidak_ada_add_penyedia_kontrak/add_XXX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
            }
        }
    }


    // hps_penyedia_kontrak_1
    public function get_sub_program_penyedia_kontrak()
    {
        $id_detail_program_penyedia_kontrak_jasa = $this->input->post('id_detail_program_penyedia_kontrak_jasa');
        $id_detail_sub_program_penyedia_kontrak_jasa = $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa');
        $row_sub_program = $this->Data_kontrak_model->get_sub_program_penyedia_kontrak_jasa($id_detail_sub_program_penyedia_kontrak_jasa);
        $row_program = $this->Data_kontrak_model->getByid_detail_program_penyedia_kontrak_jasa($id_detail_program_penyedia_kontrak_jasa);
        $data = [
            'row_sub_program' => $row_sub_program,
            'row_program' => $row_program,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function get_hps_penyedia_kontrak_1()
    {
        $id_hps_penyedia_kontrak_1 = $this->input->post('id_hps_penyedia_kontrak_1');
        $get_hps_penyedia_kontrak_1 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_1($id_hps_penyedia_kontrak_1);
        $data = [
            'get_hps_penyedia_kontrak_1' => $get_hps_penyedia_kontrak_1,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function edit_hps_penyedia_kontrak_1()
    {
        $id_hps_penyedia_kontrak_1 = $this->input->post('id_hps_penyedia_kontrak_1');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
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
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data, $id_where_hps_penyedia_kontrak_1);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // hps_penyedia_kontrak_2
    public function get_hps_penyedia_kontrak_2()
    {
        $id_hps_penyedia_kontrak_2 = $this->input->post('id_hps_penyedia_kontrak_2');
        $get_hps_penyedia_kontrak_2 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_2($id_hps_penyedia_kontrak_2);
        $data = [
            'get_hps_penyedia_kontrak_2' => $get_hps_penyedia_kontrak_2,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function edit_hps_penyedia_kontrak_2()
    {
        // _1
        $data_logic['id_hps_penyedia_kontrak_1'] = $this->input->post('id_hps_penyedia_kontrak_1');
        $data_logic['type_add'] = $this->input->post('type_add');
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_2', $data_logic);
        $id_hps_penyedia_kontrak_1 = $this->input->post('id_hps_penyedia_kontrak_1');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = $volume_hps *  $harga_satuan;
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
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data, $id_where_hps_penyedia_kontrak_1);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function edit_hps_penyedia_kontrak_2_addendum()
    {
        // _1
        $data_logic['id_hps_penyedia_kontrak_1'] = $this->input->post('id_hps_penyedia_kontrak_1');
        $data_logic['type_add'] = $this->input->post('type_add');
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_2', $data_logic);
        $id_hps_penyedia_kontrak_1 = $this->input->post('id_hps_penyedia_kontrak_1');
        $add =  $this->input->post('type_add');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = $volume_hps *  $harga_satuan;
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_kontrak_1 = [
            'id_hps_penyedia_kontrak_1' => $id_hps_penyedia_kontrak_1
        ];
        $data = [
            'no_hps_addendum_' . $add . '' => $no_hps,
            'uraian_hps_addendum_' . $add . '' => $uraian_hps,
            'volume_hps_addendum_' . $add . '' => $volume_hps,
            'satuan_hps_addendum_' . $add . '' => $satuan_hps,
            'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
            'total_harga_addendum_' . $add . '' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data, $id_where_hps_penyedia_kontrak_1);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function tambah_hps_penyedia_kontrak_2_addendum()
    {
        // _1
        $id_hps_penyedia_kontrak_1 = $this->input->post('id_hps_penyedia_kontrak_1');
        $add =  $this->input->post('type_add');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        $no_urut = $this->Data_kontrak_model->get_hps_penyedia_kontrak_1($id_hps_penyedia_kontrak_1);
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_kontrak_2($id_hps_penyedia_kontrak_1);
        $count = $buat_no_urut + 2;
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $data = [
            'id_hps_penyedia_kontrak_1' => $id_hps_penyedia_kontrak_1,
            'no_urut' =>  $no_urut['no_urut'] . '.' . $count,
            'no_hps' => $no_hps,
            'uraian_hps_addendum_' . $add . '' => $uraian_hps,
            'volume_hps_addendum_' . $add . '' => $volume_hps,
            'satuan_hps_addendum_' . $add . '' => $satuan_hps,
            'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
            'total_harga_addendum_' . $add . '' => $total_harga
        ];
        $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_2($data);
        $insert_id = $this->db->insert_id();
        $data_logic['id_hps_penyedia_kontrak_2'] = $insert_id;
        $data_logic['type_add'] = $this->input->post('type_add');
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_3', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function tambah_hps_penyedia_kontrak_3_addendum()
    {
        // _1
        $id_hps_penyedia_kontrak_2 = $this->input->post('id_hps_penyedia_kontrak_2');
        $add =  $this->input->post('type_add');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        $no_urut = $this->Data_kontrak_model->get_hps_penyedia_kontrak_2($id_hps_penyedia_kontrak_2);
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_kontrak_3($id_hps_penyedia_kontrak_2);
        $count = $buat_no_urut + 2;
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $data = [
            'id_hps_penyedia_kontrak_2' => $id_hps_penyedia_kontrak_2,
            'no_urut' =>  $no_urut['no_urut'] . '.' . $count,
            'no_hps' => $no_hps,
            'uraian_hps_addendum_' . $add . '' => $uraian_hps,
            'volume_hps_addendum_' . $add . '' => $volume_hps,
            'satuan_hps_addendum_' . $add . '' => $satuan_hps,
            'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
            'total_harga_addendum_' . $add . '' => $total_harga
        ];
        $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_3($data);
        $insert_id = $this->db->insert_id();
        $data_logic['id_hps_penyedia_kontrak_3'] = $insert_id;
        $data_logic['type_add'] = $this->input->post('type_add');
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_4', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function tambah_hps_penyedia_kontrak_4_addendum()
    {
        // _1
        $id_hps_penyedia_kontrak_3 = $this->input->post('id_hps_penyedia_kontrak_3');
        $add =  $this->input->post('type_add');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        $no_urut = $this->Data_kontrak_model->get_hps_penyedia_kontrak_3($id_hps_penyedia_kontrak_3);
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_kontrak_4($id_hps_penyedia_kontrak_3);
        $count = $buat_no_urut + 2;
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $data = [
            'id_hps_penyedia_kontrak_3' => $id_hps_penyedia_kontrak_3,
            'no_urut' =>  $no_urut['no_urut'] . '.' . $count,
            'no_hps' => $no_hps,
            'uraian_hps_addendum_' . $add . '' => $uraian_hps,
            'volume_hps_addendum_' . $add . '' => $volume_hps,
            'satuan_hps_addendum_' . $add . '' => $satuan_hps,
            'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
            'total_harga_addendum_' . $add . '' => $total_harga
        ];
        $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_4($data);
        $insert_id = $this->db->insert_id();
        $data_logic['id_hps_penyedia_kontrak_4'] = $insert_id;
        $data_logic['type_add'] = $this->input->post('type_add');
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_5', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function tambah_hps_penyedia_kontrak_5_addendum()
    {
        // _1
        $id_hps_penyedia_kontrak_4 = $this->input->post('id_hps_penyedia_kontrak_4');
        $add =  $this->input->post('type_add');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        $no_urut = $this->Data_kontrak_model->get_hps_penyedia_kontrak_4($id_hps_penyedia_kontrak_4);
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_hps_penyedia_kontrak_5($id_hps_penyedia_kontrak_4);
        $count = $buat_no_urut + 2;
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $data = [
            'id_hps_penyedia_kontrak_4' => $id_hps_penyedia_kontrak_4,
            'no_urut' =>  $no_urut['no_urut'] . '.' . $count,
            'no_hps' => $no_hps,
            'uraian_hps_addendum_' . $add . '' => $uraian_hps,
            'volume_hps_addendum_' . $add . '' => $volume_hps,
            'satuan_hps_addendum_' . $add . '' => $satuan_hps,
            'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
            'total_harga_addendum_' . $add . '' => $total_harga
        ];
        $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_5($data);
        $insert_id = $this->db->insert_id();
        $data_logic['id_hps_penyedia_kontrak_5'] = $insert_id;
        $data_logic['type_add'] = $this->input->post('type_add');
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_6', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    // hps_penyedia_kontrak_3
    // 3
    // 2
    public function get_hps_penyedia_kontrak_3()
    {
        $id_hps_penyedia_kontrak_3 = $this->input->post('id_hps_penyedia_kontrak_3');
        $get_hps_penyedia_kontrak_3 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_3($id_hps_penyedia_kontrak_3);
        $data = [
            'get_hps_penyedia_kontrak_3' => $get_hps_penyedia_kontrak_3,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function edit_hps_penyedia_kontrak_3()
    {
        // 2
        $data_logic['id_hps_penyedia_kontrak_2'] = $this->input->post('id_hps_penyedia_kontrak_2');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_2 = $this->input->post('id_hps_penyedia_kontrak_2');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_kontrak_2 = [
            'id_hps_penyedia_kontrak_2' => $id_hps_penyedia_kontrak_2
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_2($data, $id_where_hps_penyedia_kontrak_2);
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_3', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function edit_hps_penyedia_kontrak_3_addendum()
    {
        // _2
        $data_logic['id_hps_penyedia_kontrak_2'] = $this->input->post('id_hps_penyedia_kontrak_2');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_2 = $this->input->post('id_hps_penyedia_kontrak_2');
        $add =  $this->input->post('type_add');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_kontrak_2 = [
            'id_hps_penyedia_kontrak_2' => $id_hps_penyedia_kontrak_2
        ];
        $data = [
            'no_hps_addendum_' . $add . '' => $no_hps,
            'uraian_hps_addendum_' . $add . '' => $uraian_hps,
            'volume_hps_addendum_' . $add . '' => $volume_hps,
            'satuan_hps_addendum_' . $add . '' => $satuan_hps,
            'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
            'total_harga_addendum_' . $add . '' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_2($data, $id_where_hps_penyedia_kontrak_2);
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_3', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }
    // hps_penyedia_kontrak_4
    // 4
    // 3
    public function get_hps_penyedia_kontrak_4()
    {
        $id_hps_penyedia_kontrak_4 = $this->input->post('id_hps_penyedia_kontrak_4');
        $get_hps_penyedia_kontrak_4 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_4($id_hps_penyedia_kontrak_4);
        $data = [
            'get_hps_penyedia_kontrak_4' => $get_hps_penyedia_kontrak_4,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function edit_hps_penyedia_kontrak_4()
    {
        // 3
        $data_logic['id_hps_penyedia_kontrak_3'] = $this->input->post('id_hps_penyedia_kontrak_3');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_3 = $this->input->post('id_hps_penyedia_kontrak_3');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }


        $id_where_hps_penyedia_kontrak_3 = [
            'id_hps_penyedia_kontrak_3' => $id_hps_penyedia_kontrak_3
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_3($data, $id_where_hps_penyedia_kontrak_3);
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_4', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function edit_hps_penyedia_kontrak_4_addendum()
    {
        // _3
        $data_logic['id_hps_penyedia_kontrak_3'] = $this->input->post('id_hps_penyedia_kontrak_3');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_3 = $this->input->post('id_hps_penyedia_kontrak_3');
        $add =  $this->input->post('type_add');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_kontrak_3 = [
            'id_hps_penyedia_kontrak_3' => $id_hps_penyedia_kontrak_3
        ];
        $data = [
            'no_hps_addendum_' . $add . '' => $no_hps,
            'uraian_hps_addendum_' . $add . '' => $uraian_hps,
            'volume_hps_addendum_' . $add . '' => $volume_hps,
            'satuan_hps_addendum_' . $add . '' => $satuan_hps,
            'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
            'total_harga_addendum_' . $add . '' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_3($data, $id_where_hps_penyedia_kontrak_3);
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_4', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }
    // _5
    // 4
    // hps_penyedia_kontrak_5
    public function get_hps_penyedia_kontrak_5()
    {
        $id_hps_penyedia_kontrak_5 = $this->input->post('id_hps_penyedia_kontrak_5');
        $get_hps_penyedia_kontrak_5 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_5($id_hps_penyedia_kontrak_5);
        $data = [
            'get_hps_penyedia_kontrak_5' => $get_hps_penyedia_kontrak_5,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function edit_hps_penyedia_kontrak_5()
    {
        // 4
        $data_logic['id_hps_penyedia_kontrak_4'] = $this->input->post('id_hps_penyedia_kontrak_4');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_4 = $this->input->post('id_hps_penyedia_kontrak_4');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_kontrak_4 = [
            'id_hps_penyedia_kontrak_4' => $id_hps_penyedia_kontrak_4
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_4($data, $id_where_hps_penyedia_kontrak_4);
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_5', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }
    public function edit_hps_penyedia_kontrak_5_addendum()
    {
        // _4
        $data_logic['id_hps_penyedia_kontrak_4'] = $this->input->post('id_hps_penyedia_kontrak_4');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_4 = $this->input->post('id_hps_penyedia_kontrak_4');
        $add =  $this->input->post('type_add');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_kontrak_4 = [
            'id_hps_penyedia_kontrak_4' => $id_hps_penyedia_kontrak_4
        ];
        $data = [
            'no_hps_addendum_' . $add . '' => $no_hps,
            'uraian_hps_addendum_' . $add . '' => $uraian_hps,
            'volume_hps_addendum_' . $add . '' => $volume_hps,
            'satuan_hps_addendum_' . $add . '' => $satuan_hps,
            'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
            'total_harga_addendum_' . $add . '' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_4($data, $id_where_hps_penyedia_kontrak_4);
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_5', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }
    // _6
    // 5
    // hps_penyedia_kontrak_6
    public function get_hps_penyedia_kontrak_6()
    {
        $id_hps_penyedia_kontrak_6 = $this->input->post('id_hps_penyedia_kontrak_6');
        $get_hps_penyedia_kontrak_6 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_6($id_hps_penyedia_kontrak_6);
        $data = [
            'get_hps_penyedia_kontrak_6' => $get_hps_penyedia_kontrak_6,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function edit_hps_penyedia_kontrak_6()
    {
        // 5
        $data_logic['id_hps_penyedia_kontrak_5'] = $this->input->post('id_hps_penyedia_kontrak_5');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_5 = $this->input->post('id_hps_penyedia_kontrak_5');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_kontrak_5 = [
            'id_hps_penyedia_kontrak_5' => $id_hps_penyedia_kontrak_5
        ];
        $data = [
            'uraian_hps' => $uraian_hps,
            'no_hps' => $no_hps,
            'volume_hps' => $volume_hps,
            'satuan_hps' => $satuan_hps,
            'harga_satuan_hps' => $harga_satuan,
            'total_harga' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_5($data, $id_where_hps_penyedia_kontrak_5);
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_6', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }
    public function edit_hps_penyedia_kontrak_6_addendum()
    {
        // _5
        $data_logic['id_hps_penyedia_kontrak_5'] = $this->input->post('id_hps_penyedia_kontrak_5');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_5 = $this->input->post('id_hps_penyedia_kontrak_5');
        $add =  $this->input->post('type_add');
        $no_hps =  $this->input->post('no_hps');
        $uraian_hps =  $this->input->post('uraian_hps');
        $satuan_hps =  $this->input->post('satuan_hps');
        $volume_hps =  $this->input->post('volume_hps');
        $harga_satuan =  $this->input->post('harga_satuan_hps');
        if ($harga_satuan == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_hps *  $harga_satuan;
        }
        $id_where_hps_penyedia_kontrak_5 = [
            'id_hps_penyedia_kontrak_5' => $id_hps_penyedia_kontrak_5
        ];
        $data = [
            'no_hps_addendum_' . $add . '' => $no_hps,
            'uraian_hps_addendum_' . $add . '' => $uraian_hps,
            'volume_hps_addendum_' . $add . '' => $volume_hps,
            'satuan_hps_addendum_' . $add . '' => $satuan_hps,
            'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
            'total_harga_addendum_' . $add . '' => $total_harga
        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_5($data, $id_where_hps_penyedia_kontrak_5);
        $this->load->view('hps_penyedia_kontrak_logic/nilai_level_6', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_jasa'),
            'id_detail_program_penyedia_kontrak_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    // update nilai kontrak dan addendum
    public function update_ke_sub_dan_detail_program_penyedia()
    {
        $id_detail_program_penyedia_jasa =  $this->input->post('id_detail_program_penyedia_jasa');
        $id_detail_sub_program_penyedia_jasa =  $this->input->post('id_detail_sub_program_penyedia_jasa');
        $type_add =  $this->input->post('type_add');
        if ($type_add == 0) {
            $this->db->select('*');
            $this->db->from('tbl_hps_penyedia_kontrak_1');
            $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
            $this->db->where('tbl_hps_penyedia_kontrak_1.harga_satuan_hps !=', null);
            $query_tbl_hps = $this->db->get();
            $total_hps_penyedia_kontrak_1 = 0;
            $total_hps_penyedia_kontrak_2 = 0;
            $total_hps_penyedia_kontrak_3 = 0;
            $total_hps_penyedia_kontrak_4 = 0;
            $total_hps_penyedia_kontrak_5 = 0;
            foreach ($query_tbl_hps->result_array() as $key => $value_hps_penyedia_kontrak_1) {
                $total_hps_penyedia_kontrak_1 += $value_hps_penyedia_kontrak_1['total_harga'];
                $id_hps_penyedia_kontrak_1 = $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'];
                // batas tbl_hps_penyedia_kontrak_2
                $this->db->select('*');
                $this->db->from('tbl_hps_penyedia_kontrak_2');
                $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);
                $this->db->where('tbl_hps_penyedia_kontrak_2.harga_satuan_hps !=', null);
                $query_tbl_hps_penyedia_kontrak_2 = $this->db->get();
                foreach ($query_tbl_hps_penyedia_kontrak_2->result_array() as $key => $value_hps_penyedia_kontrak_2) {
                    $total_hps_penyedia_kontrak_2 += $value_hps_penyedia_kontrak_2['total_harga'];
                    $id_hps_penyedia_kontrak_2 = $value_hps_penyedia_kontrak_2['id_hps_penyedia_kontrak_2'];
                    // batas tbl_hps_penyedia_kontrak_3
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_3');
                    $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
                    $this->db->where('tbl_hps_penyedia_kontrak_3.harga_satuan_hps !=', null);
                    $query_tbl_hps_penyedia_kontrak_3 = $this->db->get();
                    foreach ($query_tbl_hps_penyedia_kontrak_3->result_array() as $key => $value_hps_penyedia_kontrak_3) {
                        $total_hps_penyedia_kontrak_3 += $value_hps_penyedia_kontrak_3['total_harga'];
                        $id_hps_penyedia_kontrak_3 = $value_hps_penyedia_kontrak_3['id_hps_penyedia_kontrak_3'];
                        // batas tbl_hps_penyedia_kontrak_4
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_4');
                        $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
                        $this->db->where('tbl_hps_penyedia_kontrak_4.harga_satuan_hps !=', null);
                        $query_tbl_hps_penyedia_kontrak_4 = $this->db->get();
                        foreach ($query_tbl_hps_penyedia_kontrak_4->result_array() as $key => $value_hps_penyedia_kontrak_4) {
                            $total_hps_penyedia_kontrak_4 += $value_hps_penyedia_kontrak_4['total_harga'];
                            $id_hps_penyedia_kontrak_4 = $value_hps_penyedia_kontrak_4['id_hps_penyedia_kontrak_4'];
                            // batas tbl_hps_penyedia_kontrak_5
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_5');
                            $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
                            $this->db->where('tbl_hps_penyedia_kontrak_5.harga_satuan_hps !=', null);
                            $query_tbl_hps_penyedia_kontrak_5 = $this->db->get();
                            foreach ($query_tbl_hps_penyedia_kontrak_5->result_array() as $key => $value_hps_penyedia_kontrak_5) {
                                $total_hps_penyedia_kontrak_5 += $value_hps_penyedia_kontrak_5['total_harga'];
                            }
                        }
                    }
                }
            }
            $where = [
                'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa
            ];
            $data = [
                'nilai_sub_kontrak_penyedia' =>  $total_hps_penyedia_kontrak_1,
            ];
            $this->Data_kontrak_model->update_rup_ke_sub_detail_program_penyedia_jasa($where, $data);
            $this->db->select('*');
            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
            $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
            $query_tbl_hps_sub = $this->db->get();
            $total_sub_nilai_kontrak = 0;
            foreach ($query_tbl_hps_sub->result_array() as $key => $dataku_sub) {
                $total_sub_nilai_kontrak += $dataku_sub['nilai_sub_kontrak_penyedia'];
            }
            $where_sub = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
            ];
            $data_update_sub = [
                'total_kontrak' => $total_sub_nilai_kontrak
            ];
            $this->Data_kontrak_model->update_rup($where_sub, $data_update_sub);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $this->db->select('*');
            $this->db->from('tbl_hps_penyedia_kontrak_1');
            $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
            $query_tbl_hps = $this->db->get();
            $total_hps_penyedia_kontrak_1 = 0;
            $total_hps_penyedia_kontrak_2 = 0;
            $total_hps_penyedia_kontrak_3 = 0;
            $total_hps_penyedia_kontrak_4 = 0;
            $total_hps_penyedia_kontrak_5 = 0;
            foreach ($query_tbl_hps->result_array() as $key => $value_hps_penyedia_kontrak_1) {
                $total_hps_penyedia_kontrak_1 += $value_hps_penyedia_kontrak_1['total_harga_addendum_' . $type_add . ''];
                $id_hps_penyedia_kontrak_1 = $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'];
                // batas tbl_hps_penyedia_kontrak_2
                $this->db->select('*');
                $this->db->from('tbl_hps_penyedia_kontrak_2');
                $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);

                $query_tbl_hps_penyedia_kontrak_2 = $this->db->get();
                foreach ($query_tbl_hps_penyedia_kontrak_2->result_array() as $key => $value_hps_penyedia_kontrak_2) {
                    $total_hps_penyedia_kontrak_2 += $value_hps_penyedia_kontrak_2['total_harga_addendum_' . $type_add . ''];
                    $id_hps_penyedia_kontrak_2 = $value_hps_penyedia_kontrak_2['id_hps_penyedia_kontrak_2'];
                    // batas tbl_hps_penyedia_kontrak_3
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_3');
                    $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
                    $query_tbl_hps_penyedia_kontrak_3 = $this->db->get();
                    foreach ($query_tbl_hps_penyedia_kontrak_3->result_array() as $key => $value_hps_penyedia_kontrak_3) {
                        $total_hps_penyedia_kontrak_3 += $value_hps_penyedia_kontrak_3['total_harga_addendum_' . $type_add . ''];
                        $id_hps_penyedia_kontrak_3 = $value_hps_penyedia_kontrak_3['id_hps_penyedia_kontrak_3'];
                        // batas tbl_hps_penyedia_kontrak_4
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_4');
                        $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
                        $query_tbl_hps_penyedia_kontrak_4 = $this->db->get();
                        foreach ($query_tbl_hps_penyedia_kontrak_4->result_array() as $key => $value_hps_penyedia_kontrak_4) {
                            $total_hps_penyedia_kontrak_4 += $value_hps_penyedia_kontrak_4['total_harga_addendum_' . $type_add . ''];
                            $id_hps_penyedia_kontrak_4 = $value_hps_penyedia_kontrak_4['id_hps_penyedia_kontrak_4'];
                            // batas tbl_hps_penyedia_kontrak_5
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_5');
                            $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
                            $query_tbl_hps_penyedia_kontrak_5 = $this->db->get();
                            foreach ($query_tbl_hps_penyedia_kontrak_5->result_array() as $key => $value_hps_penyedia_kontrak_5) {
                                $total_hps_penyedia_kontrak_5 += $value_hps_penyedia_kontrak_5['total_harga_addendum_' . $type_add . ''];
                            }
                        }
                    }
                }
            }
            $where = [
                'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa
            ];
            $data = [
                'nilai_sub_kontrak_penyedia_addendum_' . $type_add . '' =>  $total_hps_penyedia_kontrak_1,
            ];
            $this->Data_kontrak_model->update_rup_ke_sub_detail_program_penyedia_jasa($where, $data);
            $this->db->select('*');
            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
            $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
            $query_tbl_hps_sub = $this->db->get();
            $total_sub_nilai_kontrak = 0;
            foreach ($query_tbl_hps_sub->result_array() as $key => $dataku_sub) {
                $total_sub_nilai_kontrak += $dataku_sub['nilai_sub_kontrak_penyedia_addendum_' . $type_add . ''];
            }
            $where_sub = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
            ];
            $data_update_sub = [
                'total_kontrak_addendum_' . $type_add . '' => $total_sub_nilai_kontrak
            ];
            $this->Data_kontrak_model->update_rup($where_sub, $data_update_sub);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }

    public function update_papenkon()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $papenkon = $this->input->post('papenkon');
        if ($papenkon == null) {
        } else {
            $where_sub = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
            ];
            $data_update_sub = [
                'papenkon' => $papenkon
            ];
            $this->Data_kontrak_model->update_rup($where_sub, $data_update_sub);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    public function dok_permohonan_evaluasi_dan_negosiasi($id_detail_program_penyedia_jasa)
    {

        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';

        $data['sub_program']  = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];

        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/dokumen_administrasi_addendum/dokumen_permohonan_evaluasi_dan_negosiasi', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/dokumen_administrasi_addendum/ajax');
    }

    public function dok_penandatanganan_undangan_evaluasi($id_detail_program_penyedia_jasa)
    {

        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';

        $data['sub_program']  = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];

        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/dokumen_administrasi_addendum/dokumen_penandatanganan_undangan_evaluasi', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/dokumen_administrasi_addendum/ajax');
    }


    public function dok_ba_evaluasi($id_detail_program_penyedia_jasa)
    {

        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';

        $data['sub_program']  = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];

        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/dokumen_administrasi_addendum/dokumen_ba_evaluasi', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/dokumen_administrasi_addendum/ajax');
    }

    public function dok_spp_ba_adddendum($id_detail_program_penyedia_jasa)
    {

        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';

        $data['sub_program']  = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];

        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/dokumen_administrasi_addendum/dokumen_spp_ba_adddendum', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/dokumen_administrasi_addendum/ajax');
    }


    public function dok_surat_persetujuan_addendum($id_detail_program_penyedia_jasa)
    {

        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';

        $data['sub_program']  = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];

        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/dokumen_administrasi_addendum/dokumen_surat_persetujuan_addendum', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/dokumen_administrasi_addendum/ajax');
    }

    public function dok_persetujuan_ip_add($id_detail_program_penyedia_jasa)
    {
        $keyword = $this->input->post('keyword');
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $data['row_program']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program_by_id_detail_program($id_detail_program_penyedia_jasa);
        $id_kontrak =  $data['row_program']['id_kontrak'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $keyword, $id_kontrak);
        $data['get_spm'] = $this->Data_kontrak_model->get_spm();
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/dokumen_administrasi_addendum/dokumen_persetujuan_ip_add', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/dokumen_administrasi_addendum/ajax');
    }

    public function dok_addendum_kontrak($id_detail_program_penyedia_jasa)
    {
        $keyword = $this->input->post('keyword');
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $data['row_program']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program_by_id_detail_program($id_detail_program_penyedia_jasa);
        $id_kontrak =  $data['row_program']['id_kontrak'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $keyword, $id_kontrak);
        $data['get_spm'] = $this->Data_kontrak_model->get_spm();
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/dokumen_administrasi_addendum/dokumen_addendum_kontrak', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/dokumen_administrasi_addendum/ajax');
    }



    public function add_sts_tahun_pembebanan()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $sts_tahun_pembebanan = $this->input->post('sts_tahun_pembebanan');
        $cek_ke_tbl_multiyers = $this->Data_kontrak_model->cek_ke_tbl_multiyers($id_detail_program_penyedia_jasa);
        $this->Data_kontrak_model->delete_ke_tbl_multiyers($id_detail_program_penyedia_jasa);
        $where_sub = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
        ];
        $data_update_sub = [
            'sts_tahun_pembebanan' => $sts_tahun_pembebanan
        ];
        $this->Data_kontrak_model->update_rup($where_sub, $data_update_sub);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }



    public function add_multi_years()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $tahun_multiyers = $this->input->post('tahun_multiyers');
        $cek_multiyears = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $sts_tahun_pembebanan = $cek_multiyears['sts_tahun_pembebanan'];
        $cek_ke_tbl_multiyers = $this->Data_kontrak_model->cek_ke_tbl_multiyers($id_detail_program_penyedia_jasa);
        if ($sts_tahun_pembebanan == 'single_years') {
            if ($cek_ke_tbl_multiyers) {
                $where_sub = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
                ];
                $data_update_sub = [
                    'tahun_multiyers' => $tahun_multiyers
                ];
                $this->Data_kontrak_model->update_ke_tbl_multiyers($where_sub, $data_update_sub);
            } else {
                $data = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'tahun_multiyers' => $tahun_multiyers
                ];
                $this->Data_kontrak_model->add_ke_tbl_multiyers($data);
            }
        } else {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'tahun_multiyers' => $tahun_multiyers
            ];
            $this->Data_kontrak_model->add_ke_tbl_multiyers($data);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function add_alasan()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $type = $this->input->post('type');
        $nama_alasan_administrasi = $this->input->post('nama_alasan_administrasi');
        $nama_alasan_teknis = $this->input->post('nama_alasan_teknis');
        if ($type == 'teknis') {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'nama_alasan' => $nama_alasan_teknis
            ];
            $this->Data_kontrak_model->add_ke_tbl_alasan_teknis_pip($data);
        } else {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'nama_alasan' => $nama_alasan_administrasi
            ];
            $this->Data_kontrak_model->add_ke_tbl_alasan_administrasi_pip($data);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function delete_alasan()
    {
        $id = $this->input->post('id');
        $type = $this->input->post('type');
        if ($type == 'teknis') {
            $this->Data_kontrak_model->delete_ke_tbl_alasan_teknis_pip($id);
        } else {
            $this->Data_kontrak_model->delete_ke_tbl_alasan_administrasi_pip($id);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function kelola_format_surat_pasca($id_detail_program_penyedia_jasa)
    {
        $keyword = $this->input->post('keyword');
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        // $get_pegawai = $this->Auth_model->get_pegawai();
        // $id_departemen = $get_pegawai['id_departemen'];
        // $id_area = $get_pegawai['id_area'];
        // $id_sub_area = $get_pegawai['id_sub_area'];
        // $data['row_program']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program_by_id_detail_program($id_detail_program_penyedia_jasa);
        $data['row_program']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $id_departemen =  $data['row_program']['id_departemen'];
        $id_area =  $data['row_program']['id_area'];
        $id_sub_area =  $data['row_program']['id_sub_area'];
        $id_kontrak =  $data['row_program']['id_kontrak'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area, $keyword, $id_kontrak);
        $data['get_spm'] = $this->Data_kontrak_model->get_spm();

        $get_flow = $this->db->query("SELECT flow_pra_dokumen_kontrak FROM tbl_detail_program_penyedia_jasa WHERE id_detail_program_penyedia_jasa = $id_detail_program_penyedia_jasa")->row();

        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);

        if ($get_flow->flow_pra_dokumen_kontrak == 'Flow 1') {
            $this->load->view('admin/kontrak_management_administrasi_penyedia/kelola_format_surat', $data);
        } else {
            $this->load->view('admin/kontrak_management_administrasi_penyedia/kelola_format_surat2', $data);
        }
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
    }

    public function get_ip()
    {
        $keyword = $this->input->post('keyword');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $flow_1_ip = $this->input->post('flow_1_ip');
        $flow_2_ip = $this->input->post('flow_2_ip');
        // $get_pegawai = $this->Auth_model->get_pegawai();
        // $id_departemen = $get_pegawai['id_departemen'];
        // $id_area = $get_pegawai['id_area'];
        $data['row_program']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $id_departemen =  $data['row_program']['id_departemen'];
        $id_area =  $data['row_program']['id_area'];
        $id_sub_area =  $data['row_program']['id_sub_area'];
        $id_kontrak =  $data['row_program']['id_kontrak'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area, $keyword, $id_kontrak);
        
        // $data['row_program']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program_by_id_detail_program($id_detail_program_penyedia_jasa);
        // $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $keyword, $data['row_program']['id_kontrak']);
        $data['get_spm'] = $this->Data_kontrak_model->get_spm();

        if ($flow_1_ip) {
            if ($flow_1_ip == 1) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_1_ip1', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_1_ip == 2) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_1_ip2', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_1_ip == 3) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_1_ip3', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            }
        } else {
            if ($flow_2_ip == 1) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_2_ip1', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_2_ip == 2) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_2_ip2', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_2_ip == 3) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_2_ip3', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_2_ip == 4) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_2_ip4', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            }
        }
    }


    public function get_hps()
    {
        $keyword = $this->input->post('keyword');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $flow_1_hps = $this->input->post('flow_1_hps');
        $flow_2_hps = $this->input->post('flow_2_hps');
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program_by_id_detail_program($id_detail_program_penyedia_jasa);
        $data['get_spm'] = $this->Data_kontrak_model->get_spm();
        $data['row_program']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $id_departemen =  $data['row_program']['id_departemen'];
        $id_area =  $data['row_program']['id_area'];
        $id_sub_area =  $data['row_program']['id_sub_area'];
        $id_kontrak =  $data['row_program']['id_kontrak'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area, $keyword, $id_kontrak);
        
        if ($flow_1_hps) {
            if ($flow_1_hps == 1) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_1_hps1', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_1_hps == 2) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_1_hps2', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_1_hps == 3) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_1_hps3', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_1_hps == 4) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_1_hps4', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            }
        } else {
            if ($flow_2_hps == 1) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_2_hps1', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_2_hps == 2) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_2_hps2', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_2_hps == 3) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_2_hps3', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            } else if ($flow_2_hps == 4) {
                $this->load->view('admin/kontrak_management_administrasi_penyedia/flow_2_hps4', $data);
                $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
            }
        }
        // komit
    }



    public function simpan_global_kelola_surat()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $type = $this->input->post('type');
        $type_pip_number = $this->input->post('type_pip_number');
        $type_hps_number = $this->input->post('type_hps_number');
        $jenis_pengadaan = $this->input->post('jenis_pengadaan');
        $pagu_biaya = $this->input->post('pagu_biaya');
        $waktu_pelaksanaan_pip = $this->input->post('waktu_pelaksanaan_pip');
        $waktu_pemeliharaan_pip = $this->input->post('waktu_pemeliharaan_pip');

        // ttd
        $nama_ca_ke_gm = $this->input->post('nama_ca_ke_gm');
        $nama_gm_ke_dirops = $this->input->post('nama_gm_ke_dirops');
        $nama_dirops_ke_dirut = $this->input->post('nama_dirops_ke_dirut');

        // ttd_pra
        $nama_dirut_pra = $this->input->post('nama_dirut_pra');
        $nama_dirops_pra = $this->input->post('nama_dirops_pra');
        // pip
        // persetujuan
        $no_surat_persetujuan_pip_dirops_ke_dirut = $this->input->post('no_surat_persetujuan_pip_dirops_ke_dirut');
        $tgl_surat_persetujuan_pip_dirops_ke_dirut = $this->input->post('tgl_surat_persetujuan_pip_dirops_ke_dirut');
        $nama_persetujuan_pip_dirops_ke_dirut = $this->input->post('nama_persetujuan_pip_dirops_ke_dirut');

        $tgl_surat_pip_ca_ke_gm = $this->input->post('tgl_surat_pip_ca_ke_gm');
        $no_surat_pip_ca_ke_gm = $this->input->post('no_surat_pip_ca_ke_gm');
        $lampiran_pip_ca_ke_gm = $this->input->post('lampiran_pip_ca_ke_gm');

        $tgl_surat_pip_gm_ke_dirops = $this->input->post('tgl_surat_pip_gm_ke_dirops');
        $no_surat_pip_gm_ke_dirops = $this->input->post('no_surat_pip_gm_ke_dirops');
        $lampiran_pip_gm_ke_dirops = $this->input->post('lampiran_pip_gm_ke_dirops');

        $tgl_surat_pip_dirops_ke_dirut = $this->input->post('tgl_surat_pip_dirops_ke_dirut');
        $no_surat_pip_dirops_ke_dirut = $this->input->post('no_surat_pip_dirops_ke_dirut');
        $lampiran_pip_dirops_ke_dirut = $this->input->post('lampiran_pip_dirops_ke_dirut');

        // hps
        // ttd
        $nama_hps_ca_ke_gm = $this->input->post('nama_hps_ca_ke_gm');
        $nama_hps_gm_ke_dirops = $this->input->post('nama_hps_gm_ke_dirops');
        $nama_hps_dirops_ke_dirut = $this->input->post('nama_hps_dirops_ke_dirut');

        // persetujuan hps
        $no_surat_persetujuan_hps_dirops_ke_dirut = $this->input->post('no_surat_persetujuan_hps_dirops_ke_dirut');
        $tgl_surat_persetujuan_hps_dirops_ke_dirut = $this->input->post('tgl_surat_persetujuan_hps_dirops_ke_dirut');
        $nama_persetujuan_hps_dirops_ke_dirut = $this->input->post('nama_persetujuan_hps_dirops_ke_dirut');

        $tgl_surat_hps_ca_ke_gm = $this->input->post('tgl_surat_hps_ca_ke_gm');
        $no_surat_hps_ca_ke_gm = $this->input->post('no_surat_hps_ca_ke_gm');
        $lampiran_hps_ca_ke_gm = $this->input->post('lampiran_hps_ca_ke_gm');

        $tgl_surat_hps_gm_ke_dirops = $this->input->post('tgl_surat_hps_gm_ke_dirops');
        $no_surat_hps_gm_ke_dirops = $this->input->post('no_surat_hps_gm_ke_dirops');
        $lampiran_hps_gm_ke_dirops = $this->input->post('lampiran_hps_gm_ke_dirops');

        $tgl_surat_hps_dirops_ke_dirut = $this->input->post('tgl_surat_hps_dirops_ke_dirut');
        $no_surat_hps_dirops_ke_dirut = $this->input->post('no_surat_hps_dirops_ke_dirut');
        $lampiran_hps_dirops_ke_dirut = $this->input->post('lampiran_hps_dirops_ke_dirut');

        // nota dinas
        $nama_nota_dinas = $this->input->post('nama_nota_dinas');
        $no_surat_nota = $this->input->post('no_surat_nota');
        $tgl_surat_nota = $this->input->post('tgl_surat_nota');
        $lampiran_nota = $this->input->post('lampiran_nota');

        // gunning
        $tgl_surat_gunning = $this->input->post('tgl_surat_gunning');
        $no_surat_gunning = $this->input->post('no_surat_gunning');
        $lampiran_gunning = $this->input->post('lampiran_gunning');
        $tkdn_gunning = $this->input->post('tkdn_gunning');

        // loi
        $tgl_surat_loi = $this->input->post('tgl_surat_loi');
        $no_surat_loi = $this->input->post('no_surat_loi');
        $lampiran_loi = $this->input->post('lampiran_loi');
        $no_surat_penunjukan_loi = $this->input->post('no_surat_penunjukan_loi');

        // smk
        $tgl_surat_smk = $this->input->post('tgl_surat_smk');
        $no_surat_smk = $this->input->post('no_surat_smk');
        $lampiran_smk = $this->input->post('lampiran_smk');
        // sho
        $tgl_surat_sho = $this->input->post('tgl_surat_sho');
        $no_surat_sho = $this->input->post('no_surat_sho');

        if ($type == 'pip') {
            $where = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
            ];
            if ($type_pip_number == 1) {
                $data = [
                    // pip
                    'nama_ca_ke_gm' => $nama_ca_ke_gm,
                    'tgl_surat_pip_ca_ke_gm' => $tgl_surat_pip_ca_ke_gm,
                    'no_surat_pip_ca_ke_gm' => $no_surat_pip_ca_ke_gm,
                    'lampiran_pip_ca_ke_gm' => $lampiran_pip_ca_ke_gm,
                    'jenis_pengadaan' => $jenis_pengadaan,
                    'pagu_biaya' => $pagu_biaya,
                    'waktu_pelaksanaan_pip' => $waktu_pelaksanaan_pip,
                    'waktu_pemeliharaan_pip' => $waktu_pemeliharaan_pip,
                ];
            } else if ($type_pip_number == 2) {
                $data = [
                    // pip
                    'nama_gm_ke_dirops' => $nama_gm_ke_dirops,
                    'tgl_surat_pip_gm_ke_dirops' => $tgl_surat_pip_gm_ke_dirops,
                    'no_surat_pip_gm_ke_dirops' => $no_surat_pip_gm_ke_dirops,
                    'lampiran_pip_gm_ke_dirops' => $lampiran_pip_gm_ke_dirops,
                    'jenis_pengadaan' => $jenis_pengadaan,
                    'pagu_biaya' => $pagu_biaya,
                    'waktu_pelaksanaan_pip' => $waktu_pelaksanaan_pip,
                    'waktu_pemeliharaan_pip' => $waktu_pemeliharaan_pip,
                ];
            } else if ($type_pip_number == 3) {
                $data = [
                    // pip
                    'nama_dirops_ke_dirut' => $nama_dirops_ke_dirut,
                    'tgl_surat_pip_dirops_ke_dirut' => $tgl_surat_pip_dirops_ke_dirut,
                    'no_surat_pip_dirops_ke_dirut' => $no_surat_pip_dirops_ke_dirut,
                    'lampiran_pip_dirops_ke_dirut' => $lampiran_pip_dirops_ke_dirut,
                    'jenis_pengadaan' => $jenis_pengadaan,
                    'pagu_biaya' => $pagu_biaya,
                    'waktu_pelaksanaan_pip' => $waktu_pelaksanaan_pip,
                    'waktu_pemeliharaan_pip' => $waktu_pemeliharaan_pip,
                ];
            } else {
                $data = [
                    // pip
                    'no_surat_persetujuan_pip_dirops_ke_dirut' => $no_surat_persetujuan_pip_dirops_ke_dirut,
                    'tgl_surat_persetujuan_pip_dirops_ke_dirut' => $tgl_surat_persetujuan_pip_dirops_ke_dirut,
                    'nama_persetujuan_pip_dirops_ke_dirut' => $nama_persetujuan_pip_dirops_ke_dirut,
                ];
            }
            $this->Data_kontrak_model->update_rup($where, $data);
        } else if ($type == 'phps') {
            $where = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
            ];
            if ($type_hps_number == 1) {
                $data = [
                    // hps
                    'nama_hps_ca_ke_gm' => $nama_hps_ca_ke_gm,
                    'tgl_surat_hps_ca_ke_gm' => $tgl_surat_hps_ca_ke_gm,
                    'no_surat_hps_ca_ke_gm' => $no_surat_hps_ca_ke_gm,
                    'lampiran_hps_ca_ke_gm' => $lampiran_hps_ca_ke_gm,
                ];
            } else if ($type_hps_number == 2) {
                $data = [
                    // hps
                    'nama_hps_gm_ke_dirops' => $nama_hps_gm_ke_dirops,
                    'tgl_surat_hps_gm_ke_dirops' => $tgl_surat_hps_gm_ke_dirops,
                    'no_surat_hps_gm_ke_dirops' => $no_surat_hps_gm_ke_dirops,
                    'lampiran_hps_gm_ke_dirops' => $lampiran_hps_gm_ke_dirops,
                ];
            } else if ($type_hps_number == 3) {
                $data = [
                    // hps
                    'nama_hps_dirops_ke_dirut' => $nama_hps_dirops_ke_dirut,
                    'tgl_surat_hps_dirops_ke_dirut' => $tgl_surat_hps_dirops_ke_dirut,
                    'no_surat_hps_dirops_ke_dirut' => $no_surat_hps_dirops_ke_dirut,
                    'lampiran_hps_dirops_ke_dirut' => $lampiran_hps_dirops_ke_dirut,
                ];
            } else {
                $data = [
                    // hps
                    'no_surat_persetujuan_hps_dirops_ke_dirut' => $no_surat_persetujuan_hps_dirops_ke_dirut,
                    'tgl_surat_persetujuan_hps_dirops_ke_dirut' => $tgl_surat_persetujuan_hps_dirops_ke_dirut,
                    'nama_persetujuan_hps_dirops_ke_dirut' => $nama_persetujuan_hps_dirops_ke_dirut,
                ];
            }
            $this->Data_kontrak_model->update_rup($where, $data);
        } else if ($type == 'nota') {
            $where = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
            ];
            $data = [
                // nota
                'nama_nota_dinas' => $nama_nota_dinas,
                'no_surat_nota' => $no_surat_nota,
                'tgl_surat_nota' => $tgl_surat_nota,
                'lampiran_nota' => $lampiran_nota,
            ];
            $this->Data_kontrak_model->update_rup($where, $data);
        } else if ($type == 'gunning') {
            $where = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
            ];
            $data = [
                'nama_dirops_pra' => $nama_dirops_pra,
                'nama_dirut_pra' => $nama_dirut_pra,
                'tanggal_gunning' => $tgl_surat_gunning,
                'no_surat_gunning' => $no_surat_gunning,
                'lampiran_gunning' => $lampiran_gunning,
                'tkdn_gunning' => $tkdn_gunning,
            ];
            $this->Data_kontrak_model->update_rup($where, $data);
        } else if ($type == 'loi') {
            $where = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
            ];
            $data = [
                'nama_dirops_pra' => $nama_dirops_pra,
                'nama_dirut_pra' => $nama_dirut_pra,
                'tanggal_loi' => $tgl_surat_loi,
                'no_surat_loi' => $no_surat_loi,
                'lampiran_loi' => $lampiran_loi,
                'no_surat_penunjukan_loi' => $no_surat_penunjukan_loi,
            ];
            $this->Data_kontrak_model->update_rup($where, $data);
        } else if ($type == 'sho') {
            $where = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
            ];
            $data = [
                'nama_dirops_pra' => $nama_dirops_pra,
                'nama_dirut_pra' => $nama_dirut_pra,
                'tanggal_sho' => $tgl_surat_sho,
                'no_surat_sho' => $no_surat_sho,
            ];
            $this->Data_kontrak_model->update_rup($where, $data);
        } else if ($type == 'smk') {
            $where = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
            ];
            $data = [
                'nama_dirops_pra' => $nama_dirops_pra,
                'nama_dirut_pra' => $nama_dirut_pra,
                'tanggal_smk' => $tgl_surat_smk,
                'no_surat_smk' => $no_surat_smk,
                'lampiran_smk' => $lampiran_smk,
            ];
            $this->Data_kontrak_model->update_rup($where, $data);
        } else {
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function kelola_format_surat_pra($id_detail_program_penyedia_jasa)
    {
        $keyword = $this->input->post('keyword');
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program_by_id_detail_program($id_detail_program_penyedia_jasa);
        $data['row_program']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $id_departemen =  $data['row_program']['id_departemen'];
        $id_area =  $data['row_program']['id_area'];
        $id_sub_area =  $data['row_program']['id_sub_area'];
        $id_kontrak =  $data['row_program']['id_kontrak'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $id_sub_area, $keyword, $id_kontrak);
        $data['get_spm'] = $this->Data_kontrak_model->get_spm();
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/kontrak_management_administrasi_penyedia/kelola_format_surat_pra', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
    }

    function dok_dengan_papenkon($id_detail_program_penyedia_jasa)
    {
        $keyword = $this->input->post('keyword');
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $data['row_program']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['result_sub_program']  = $this->Data_kontrak_model->get_sub_program_by_id_detail_program($id_detail_program_penyedia_jasa);
        $id_kontrak =  $data['row_program']['id_kontrak'];
        $data['get_mata_anggaran']  = $this->Data_kontrak_model->get_mata_anggaran($id_departemen, $id_area, $keyword, $id_kontrak);
        $data['get_spm'] = $this->Data_kontrak_model->get_spm();
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/dokumen_administrasi_addendum/dokumen_dengan_papenkon', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/dokumen_administrasi_addendum/ajax');
    }

    // Update FLOW


    public function update_flow_detail_program_penyedia()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $flow_pra_dokumen_kontrak = $this->input->post('flow_pra_dokumen_kontrak');
        $where =  [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
        ];
        $data = [
            'flow_pra_dokumen_kontrak' => $flow_pra_dokumen_kontrak
        ];
        $this->Data_kontrak_model->update_rup($where, $data);
        $row_program  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $response = [
            'row_program' => $row_program
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
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
        $this->load->view('admin/kontrak_management_administrasi_penyedia/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management_administrasi_penyedia/ajax');
    }

    // formating pdf
    public function cetak_pip1($id_detail_program_penyedia_jasa)
    {
        $data['id_detail_program_penyedia_jasa'] = $id_detail_program_penyedia_jasa;
        $row_detail = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $data_spm = $this->Data_kontrak_model->get_result_detail_smp($id_detail_program_penyedia_jasa);
        $data_multi_years = $this->Data_kontrak_model->get_result_detail_multiyears($id_detail_program_penyedia_jasa);
        $data_administrasi = $this->Data_kontrak_model->get_result_detail_administrasi($id_detail_program_penyedia_jasa);
        $data_teknis = $this->Data_kontrak_model->get_result_detail_teknis($id_detail_program_penyedia_jasa);
        $count_multi_yeras = $this->Data_kontrak_model->count_multi_yeras($id_detail_program_penyedia_jasa);
        $get_row_addendum_administrasi_terakhir = $this->Data_kontrak_model->get_row_addendum_administrasi_terakhir($id_detail_program_penyedia_jasa);
        $total_kontrak_addendum = $row_detail['total_kontrak_addendum_' . $get_row_addendum_administrasi_terakhir['no_addendum']];
        $data = [
            'row_program_detail' => $row_detail,
            'data_spm' => $data_spm,
            'data_multi_years' => $data_multi_years,
            'data_administrasi' => $data_administrasi,
            'data_teknis' => $data_teknis,
            'count_multi_yeras' => $count_multi_yeras,
            'row_administrasi_addedum' => $get_row_addendum_administrasi_terakhir,
            'total_kontrak_addendum' => $total_kontrak_addendum
        ];
        $this->load->view('admin/print/cetak_pip1', $data);
    }


    public function cetak_pip2($id_detail_program_penyedia_jasa)
    {
        $data['id_detail_program_penyedia_jasa'] = $id_detail_program_penyedia_jasa;
        $row_detail = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $data_spm = $this->Data_kontrak_model->get_result_detail_smp($id_detail_program_penyedia_jasa);
        $data_multi_years = $this->Data_kontrak_model->get_result_detail_multiyears($id_detail_program_penyedia_jasa);
        $data_administrasi = $this->Data_kontrak_model->get_result_detail_administrasi($id_detail_program_penyedia_jasa);
        $data_teknis = $this->Data_kontrak_model->get_result_detail_teknis($id_detail_program_penyedia_jasa);
        $count_multi_yeras = $this->Data_kontrak_model->count_multi_yeras($id_detail_program_penyedia_jasa);
        $get_row_addendum_administrasi_terakhir = $this->Data_kontrak_model->get_row_addendum_administrasi_terakhir($id_detail_program_penyedia_jasa);
        $total_kontrak_addendum = $row_detail['total_kontrak_addendum_' . $get_row_addendum_administrasi_terakhir['no_addendum']];
        $data = [
            'row_program_detail' => $row_detail,
            'data_spm' => $data_spm,
            'data_multi_years' => $data_multi_years,
            'data_administrasi' => $data_administrasi,
            'data_teknis' => $data_teknis,
            'count_multi_yeras' => $count_multi_yeras,
            'row_administrasi_addedum' => $get_row_addendum_administrasi_terakhir,
            'total_kontrak_addendum' => $total_kontrak_addendum
        ];
        $this->load->view('admin/print/cetak_pip2', $data);
    }

    public function cetak_pip_persejutuan($id_detail_program_penyedia_jasa)
    {
        $data['id_detail_program_penyedia_jasa'] = $id_detail_program_penyedia_jasa;
        $row_detail = $this->Data_kontrak_model->getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa);
        $data_spm = $this->Data_kontrak_model->get_result_detail_smp($id_detail_program_penyedia_jasa);
        $data_multi_years = $this->Data_kontrak_model->get_result_detail_multiyears($id_detail_program_penyedia_jasa);
        $data_administrasi = $this->Data_kontrak_model->get_result_detail_administrasi($id_detail_program_penyedia_jasa);
        $data_teknis = $this->Data_kontrak_model->get_result_detail_teknis($id_detail_program_penyedia_jasa);
        $count_multi_yeras = $this->Data_kontrak_model->count_multi_yeras($id_detail_program_penyedia_jasa);
        $get_row_addendum_administrasi_terakhir = $this->Data_kontrak_model->get_row_addendum_administrasi_terakhir($id_detail_program_penyedia_jasa);
        $total_kontrak_addendum = $row_detail['total_kontrak_addendum_' . $get_row_addendum_administrasi_terakhir['no_addendum']];
        $data = [
            'row_program_detail' => $row_detail,
            'data_spm' => $data_spm,
            'data_multi_years' => $data_multi_years,
            'data_administrasi' => $data_administrasi,
            'data_teknis' => $data_teknis,
            'count_multi_yeras' => $count_multi_yeras,
            'row_administrasi_addedum' => $get_row_addendum_administrasi_terakhir,
            'total_kontrak_addendum' => $total_kontrak_addendum
        ];
        $this->load->view('admin/print/cetak_pip_persetujuan', $data);
    }

    public function generate_upload_surat()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $row_program  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $flow = $row_program['flow_pra_dokumen_kontrak'];
        $cek_tbl_monitoring = $this->Data_kontrak_model->cek_tbl_monitoring($id_detail_program_penyedia_jasa, $flow);
        if ($cek_tbl_monitoring) {
        } else {
            if ($flow == 'Flow 1') {
                $this->Data_kontrak_model->delete_flow_2($id_detail_program_penyedia_jasa);
            } else {
                $this->Data_kontrak_model->delete_flow_1($id_detail_program_penyedia_jasa);
            }
            if ($row_program['flow_pra_dokumen_kontrak'] == 'Flow 1') {
                $data_1 = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Permohonan Ip Ca Ke Gm',
                    'jenis' => 'Ip',
                    'flow' => 'Flow 1'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_1);
                $data_2 = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Permohonan Ip Gm Ke Dirops',
                    'jenis' => 'Ip',
                    'flow' => 'Flow 1'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_2);
                $data_4 = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Persetujuan Ip Dirops Ke Dirut',
                    'jenis' => 'Ip',
                    'flow' => 'Flow 1'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_4);

                // _hps
                $data_1_hps = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Permohonan Hps Ca Ke Gm',
                    'jenis' => 'Hps',
                    'flow' => 'Flow 1'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_1_hps);
                $data_2_hps = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Permohonan Hps Gm Ke Dirops',
                    'jenis' => 'Hps',
                    'flow' => 'Flow 1'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_2_hps);
                $data_4_hps = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Persetujuan Hps Dirops Ke Dirut',
                    'jenis' => 'Hps',
                    'flow' => 'Flow 1'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_4_hps);

                // Nota Dinas
                $data_1_nota = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Nota Dinas',
                    'jenis' => 'Nota Dinas',
                    'flow' => 'Flow 1'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_1_nota);
            } else {
                $data_1 = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Permohonan Ip Ca Ke Gm',
                    'jenis' => 'Ip',
                    'flow' => 'Flow 2'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_1);
                $data_2 = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Permohonan Ip Gm Ke Dirops',
                    'jenis' => 'Ip',
                    'flow' => 'Flow 2'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_2);
                $data_3 = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Permohonan Ip Dirops Ke Dirut',
                    'jenis' => 'Ip',
                    'flow' => 'Flow 2'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_3);
                $data_4 = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Persetujuan Ip Dirops Ke Dirut',
                    'jenis' => 'Ip',
                    'flow' => 'Flow 2'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_4);
                // hps
                $data_1_hps = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Permohonan Hps Ca Ke Gm',
                    'jenis' => 'Hps',
                    'flow' => 'Flow 2'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_1_hps);
                $data_2_hps = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Permohonan Hps Gm Ke Dirops',
                    'jenis' => 'Hps',
                    'flow' => 'Flow 2'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_2_hps);
                $data_3_hps = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Permohonan Hps Dirops Ke Dirut',
                    'jenis' => 'Hps',
                    'flow' => 'Flow 2'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_3_hps);
                $data_4_hps = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Persetujuan Hps Dirops Ke Dirut',
                    'jenis' => 'Hps',
                    'flow' => 'Flow 2'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_4_hps);

                // Nota Dinas
                $data_1_nota = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'nama_file' => 'Nota Dinas',
                    'jenis' => 'Nota Dinas',
                    'flow' => 'Flow 2'
                ];
                $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pra($data_1_nota);
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    // 
    public function by_id_dokumen_pra_pengadaan($id_dokumen_surat_pra)
    {
        $row_id_dokumen_surat_pra = $this->Data_kontrak_model->get_row_id_dokumen_surat_pra($id_dokumen_surat_pra);
        $data = [
            'row_id_dokumen_surat_pra' => $row_id_dokumen_surat_pra,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function update_dokumen_surat_prakualifikasi()
    {
        $id_dokumen_surat_pra = $this->input->post('id_dokumen_surat_pra');
        $config['upload_path'] = './file_surat_prakualifikasi/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            $fileData = $this->upload->data();
            $where = [
                'id_dokumen_surat_pra' => $id_dokumen_surat_pra
            ];
            $upload = [
                'status' => 1,
                'file' => $fileData['file_name'],
            ];
            $this->Data_kontrak_model->update_ke_tbl_dokumen_surat_pra($where, $upload);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('upload'));
        }
    }
    public function generate_upload_surat_pasca()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $cek_tbl_dokumen_surat_pasca = $this->Data_kontrak_model->cek_tbl_dokumen_surat_pasca($id_detail_program_penyedia_jasa);
        if ($cek_tbl_dokumen_surat_pasca) {
        } else {
            $data_1 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'nama_file' => 'Gunning',
            ];
            $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pasca($data_1);
            $data_2 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'nama_file' => 'Loi',
            ];
            $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pasca($data_2);
            $data_3 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'nama_file' => 'Sho',
            ];
            $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pasca($data_3);
            $data_4 = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'nama_file' => 'Spmk',
            ];
            $this->Data_kontrak_model->insert_ke_tbl_dokumen_surat_pasca($data_4);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function by_id_dokumen_pasca_pengadaan($id_dokumen_surat_pasca)
    {
        $row_id_dokumen_surat_pasca = $this->Data_kontrak_model->get_row_id_dokumen_surat_pasca($id_dokumen_surat_pasca);
        $data = [
            'row_id_dokumen_surat_pasca' => $row_id_dokumen_surat_pasca,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function update_dokumen_surat_pascakualifikasi()
    {
        $id_dokumen_surat_pasca = $this->input->post('id_dokumen_surat_pasca');
        $config['upload_path'] = './file_surat_pascakualifikasi/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            $fileData = $this->upload->data();
            $where = [
                'id_dokumen_surat_pasca' => $id_dokumen_surat_pasca
            ];
            $upload = [
                'status' => 1,
                'file' => $fileData['file_name'],
            ];
            $this->Data_kontrak_model->update_ke_tbl_dokumen_surat_pasca($where, $upload);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('upload'));
        }
    }

    function upload_kontrak_dan_hps()
    {
        $sts_file = $this->input->post('sts_dokumen');
        $config['upload_path'] = './file_kontrak/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('nama_file')) {
            $fileData = $this->upload->data();
            if ($sts_file == 1) {
                $data = [
                    'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
                    'sts_file' => $sts_file,
                    'nama_file' => $fileData['file_name'],
                ];
                $this->db->insert('tbl_dokumen_kontrak_hps', $data);
            } else {
                $data = [
                    'id_detail_program_penyedia_jasa' => $this->input->post('id_detail_program_penyedia_jasa'),
                    'sts_file' => $sts_file,
                    'nama_file' => $fileData['file_name'],
                ];
                $this->db->insert('tbl_dokumen_kontrak_hps', $data);
            }
        }
    }

    function get_kontrak_dan_hps($id_detail_program_penyedia_jasa)
    {
        $query = $this->db->query("SELECT * FROM tbl_dokumen_kontrak_hps WHERE id_detail_program_penyedia_jasa = $id_detail_program_penyedia_jasa AND sts_file = 1")->result();
        echo json_encode($query);
    }

    function get_kontrak_dan_hps2($id_detail_program_penyedia_jasa)
    {
        $query = $this->db->query("SELECT * FROM tbl_dokumen_kontrak_hps WHERE id_detail_program_penyedia_jasa = $id_detail_program_penyedia_jasa AND sts_file = 2")->result();
        echo json_encode($query);
    }


    public function get_detail_program($id_detail_program_penyedia_jasa)
    {
        $row_program = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data = [
            'program' => $row_program,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_program()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');

        $where = [
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa
        ];
        $data = [
            'nama_pekerjaan_program_mata_anggaran' => $this->input->post('nama_pekerjaan_program_mata_anggaran'),
        ];
        $this->Data_kontrak_model->udpate_ke_tbl_program($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function hapus_detail_program($id_detail_program_penyedia_jasa)
    {
        $this->Data_kontrak_model->delete_program($id_detail_program_penyedia_jasa);
        $this->Data_kontrak_model->delete_sub_program($id_detail_program_penyedia_jasa);
        $this->Data_kontrak_model->delete_mc($id_detail_program_penyedia_jasa);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function pindahkan_turunan()
    {
        $type = $this->input->post('type');
        $no_urut_ubah = $this->input->post('no_urut_ubah');
        if ($type == 1.1) {
            $id_hps_penyedia_1 = $this->input->post('id_ubah');
            $where = [
                'id_hps_penyedia_1' => $id_hps_penyedia_1
            ];
            $data = [
                'no_urut' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_hps_penyedia_1($where, $data);

            $where2 = [
                'id_refrence_hps' => $id_hps_penyedia_1
            ];
            $data2 = [
                'no_urut' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_hps_penyedia_kontrak_1($where2, $data2);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 1.2) {
            $id_detail_capex_1 = $this->input->post('id_ubah');
            $where = [
                'id_detail_capex_1' => $id_detail_capex_1
            ];
            $data = [
                'no_urut_1_capex' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_capex_1($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 1.3) {
            $id_detail_capex_2 = $this->input->post('id_ubah');
            $where = [
                'id_detail_capex_2' => $id_detail_capex_2
            ];
            $data = [
                'no_urut_2_capex' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_capex_2($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 1.4) {
            $id_detail_capex_3 = $this->input->post('id_ubah');
            $where = [
                'id_detail_capex_3' => $id_detail_capex_3
            ];
            $data = [
                'no_urut_3_capex' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_capex_3($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 1.5) {
            $id_detail_capex_4 = $this->input->post('id_ubah');
            $where = [
                'id_detail_capex_4' => $id_detail_capex_4
            ];
            $data = [
                'no_urut_4_capex' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_capex_4($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 1.6) {
            $id_detail_capex_5 = $this->input->post('id_ubah');
            $where = [
                'id_detail_capex_5' => $id_detail_capex_5
            ];
            $data = [
                'no_urut_5_capex' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_capex_5($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
        }
    }

    public function get_detail_sub_program($id_detail_sub_program_penyedia_jasa)
    {
        $row_sub_program = $this->Data_kontrak_model->get_sub_program_penyedia_jasa($id_detail_sub_program_penyedia_jasa);
        $data = [
            'row_sub_program' => $row_sub_program,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_pagu()
    {
        $id_detail_sub_program_penyedia_jasa = $this->input->post('id_detail_sub_program_penyedia_jasa');

        $where = [
            'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa
        ];
        $data = [
            'nilai_program_mata_anggran' => $this->input->post('nilai_program_mata_anggran'),
        ];
        $this->Data_kontrak_model->update_rup_ke_sub_detail_program_penyedia_jasa($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
}
