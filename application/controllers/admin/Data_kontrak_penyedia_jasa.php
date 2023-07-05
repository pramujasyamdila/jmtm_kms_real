<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
class Data_kontrak_penyedia_jasa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Data_kontrak_model');
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
        $this->load->view('admin/kontrak_management_jasa/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management_jasa/ajax');
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
                $row[] = "Rp " . number_format($rs->nilai_kontrak_awal, 2, ',', '.');;
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
                         <a class="dropdown-item " href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','kelola_level_unit_price'" . ')"><i class="fa fa-file-contract"></i> Buat Mata Anggaran</a>
                          
                         </div>
                         </div>';
                } else {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item "href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','kelola_level_unit_price'" . ')"><i class="fa fa-file-contract"></i> Buat Mata Anggaran</a>
                          
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
                         <a class="dropdown-item " href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','kelola_level'" . ')"><i class="fa fa-file-contract"></i> Buat Mata Anggaran</a>
                         
                         </div>
                         </div>';
                } else {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a class="dropdown-item "href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','kelola_level'" . ')"><i class="fa fa-file-contract"></i> Buat Mata Anggaran</a>
                         
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

    public function byid($id_program)
    {
        $data = $this->Data_kontrak_model->getByid($id_program);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function add_kontrak()
    {

        // kondisi sudah di gunakan kontrakini
        $no_kontrak =  $this->input->post('no_kontrak');
        $tahun_anggaran =  $this->input->post('tahun_anggaran');
        $cek_no_kontrak_sudah_ada = $this->Data_kontrak_model->cek_no_kontrak_sudah_ada($no_kontrak, $tahun_anggaran);
        if ($cek_no_kontrak_sudah_ada) {
            $this->output->set_content_type('application/json')->set_output(json_encode('sudah_ada'));
        } else {
            if ($this->input->post('jenis_kontrak') == 'Unit Price') {
                $data_kontrak = [
                    'nama_kontrak' => $this->input->post('nama_kontrak'),
                    'tahun_kontrak' =>  $this->input->post('tahun_kontrak'),
                    'id_detail_role' => $this->input->post('id_detail_role'),
                    'no_kontrak' => $this->input->post('no_kontrak'),
                    'jenis_kontrak' => $this->input->post('jenis_kontrak'),
                    'status' => 1,
                    'tahun_anggaran' => $this->input->post('tahun_anggaran')
                ];
                $this->Data_kontrak_model->add($data_kontrak);
                $id_kontrak = $this->db->insert_id();
                $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price($id_kontrak);
                $count = $buat_no_urut + 1;
                if ($buat_no_urut == 0) {
                    $data = [
                        'nama_uraian' => $this->input->post('nama_kontrak'),
                        'no_urut' => $count,
                        'id_kontrak' => $id_kontrak,
                    ];
                    $this->Data_kontrak_model->tambah_ke_tbl_unit_price($data);
                } else {
                    $data = [
                        'nama_uraian' => $this->input->post('nama_kontrak'),
                        'no_urut' => $count,
                        'id_kontrak' => $id_kontrak,
                    ];
                    $this->Data_kontrak_model->tambah_ke_tbl_unit_price($data);
                }
            } else {
                $data_kontrak = [
                    'nama_kontrak' => $this->input->post('nama_kontrak'),
                    'tahun_kontrak' =>  $this->input->post('tahun_kontrak'),
                    'id_detail_role' => $this->input->post('id_detail_role'),
                    'no_kontrak' => $this->input->post('no_kontrak'),
                    'jenis_kontrak' => $this->input->post('jenis_kontrak'),
                    'status' => 1,
                    'tahun_anggaran' => $this->input->post('tahun_anggaran')
                ];
                $this->Data_kontrak_model->add($data_kontrak);
                $id_kontrak = $this->db->insert_id();
                $data = [
                    'nama_uraian' => 'Capex',
                    'no_urut' => 1.1,
                    'id_kontrak' => $id_kontrak,
                ];
                $this->Data_kontrak_model->tambah_ke_tbl_capex($data);
                $data = [
                    'nama_uraian' => 'Opex',
                    'no_urut' => 1.2,
                    'id_kontrak' => $id_kontrak,
                ];
                $this->Data_kontrak_model->tambah_ke_tbl_opex($data);
                $data = [
                    'nama_uraian' => 'Bua',
                    'no_urut' => 1.3,
                    'id_kontrak' => $id_kontrak,
                ];
                $this->Data_kontrak_model->tambah_ke_tbl_bua($data);
                $data = [
                    'nama_uraian' => 'Sdm',
                    'no_urut' => 1.4,
                    'id_kontrak' => $id_kontrak,
                ];
                $this->Data_kontrak_model->tambah_ke_tbl_sdm($data);
                // ke add
                if ($this->input->post('no_adendum_post_kontrak') == 'Kontrak Awal') {
                } else {
                    $data = [
                        'no_adendum' => $this->input->post('no_adendum_post_kontrak'),
                        'tanggal' => $this->input->post('tanggal_adendum_post_kontrak'),
                        'id_kontrak' => $id_kontrak,
                    ];
                    $this->Data_kontrak_model->add_addendum($data);
                    $id_addendum = $this->db->insert_id();
                    $whwre = [
                        'id_kontrak' => $id_kontrak
                    ];
                    $update = [
                        'id_adendum' => $id_addendum,
                        'add_ke' => $this->input->post('no_adendum_post_kontrak'),
                        'tanggal_add' => $this->input->post('tanggal_adendum_post_kontrak'),
                    ];
                    $this->Data_kontrak_model->update_kontrak($whwre, $update);
                }
            }
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }

    public function detail_kontrak($id_kontrak)
    {
        $data['title'] = 'Dashboard';
        $data['kontrak'] = $this->Data_kontrak_model->get_by_id_join($id_kontrak);
        if (!$data['kontrak']) {
            redirect('admin/data_kontrak');
        }

        $this->load->view('template_stisla/header', $data);
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/kontrak_management/detail_kontrak', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management/ajax_detail', $data);
    }

    public function kelola_level($id_kontrak)
    {
        // $data['title'] = 'Dashboard';
        $data['adendum'] = $this->Data_kontrak_model->get_addendum_by_id($id_kontrak);
        $data['adendum_result'] = $this->Data_kontrak_model->get_addendum_by_result($id_kontrak);
        $data['result_add'] = $this->Data_kontrak_model->get_addendum_by_result($id_kontrak);
        // $data['adendum_trakhir'] = $this->Data_kontrak_model->get_max_addendum_by_id($id_program);

        $data['row_kontrak'] = $this->Data_kontrak_model->get_by_id_join($id_kontrak);
        // CAPEX
        $data['row_capex'] = $this->Data_kontrak_model->row_capex_by_kontrak($id_kontrak);
        $id_capex = $data['row_capex']['id_capex'];
        $data['row_detail_capex'] = $this->Data_kontrak_model->row_detail_capex_by_id_capex($id_capex);
        // OPEX
        $data['row_opex'] = $this->Data_kontrak_model->row_opex_by_kontrak($id_kontrak);
        $id_opex = $data['row_opex']['id_opex'];
        $data['row_detail_opex'] = $this->Data_kontrak_model->row_detail_opex_by_id_opex($id_opex);

        // BUA
        $data['row_bua'] = $this->Data_kontrak_model->row_bua_by_kontrak($id_kontrak);
        $id_bua = $data['row_bua']['id_bua'];
        $data['row_detail_bua'] = $this->Data_kontrak_model->row_detail_bua_by_id_bua($id_bua);

        // SDM
        $data['row_sdm'] = $this->Data_kontrak_model->row_sdm_by_kontrak($id_kontrak);
        $id_sdm = $data['row_sdm']['id_sdm'];
        $data['row_detail_sdm'] = $this->Data_kontrak_model->row_detail_sdm_by_id_sdm($id_sdm);

        $this->load->view('template_stisla/header', $data);
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/kontrak_management_jasa/kelola_level', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management_jasa/ajax_kelola_level', $data);
    }

    public function tambah_mata_anggran_addendum()
    {
        $id_kontrak = $this->uri->segment(4);
        $addendum = $this->uri->segment(5);
        $id_detail_program_penyedia_jasa = $this->uri->segment(6);
        $data['row_program_kontrak_detail']  = $this->Data_kontrak_model->get_mata_anggaran_row($id_detail_program_penyedia_jasa);
        $data['title_addendum']  = $addendum;
        $data['id_detail_program_penyedia_jasa']  = $id_detail_program_penyedia_jasa;
        // $data['title'] = 'Dashboard';
        $data['adendum'] = $this->Data_kontrak_model->get_addendum_by_id($id_kontrak);
        $data['adendum_result'] = $this->Data_kontrak_model->get_addendum_by_result($id_kontrak);
        $data['result_add'] = $this->Data_kontrak_model->get_addendum_by_result($id_kontrak);
        // $data['adendum_trakhir'] = $this->Data_kontrak_model->get_max_addendum_by_id($id_program);

        $data['row_kontrak'] = $this->Data_kontrak_model->get_by_id_join($id_kontrak);
        // CAPEX
        $data['row_capex'] = $this->Data_kontrak_model->row_capex_by_kontrak($id_kontrak);
        $id_capex = $data['row_capex']['id_capex'];
        $data['row_detail_capex'] = $this->Data_kontrak_model->row_detail_capex_by_id_capex($id_capex);
        // OPEX
        $data['row_opex'] = $this->Data_kontrak_model->row_opex_by_kontrak($id_kontrak);
        $id_opex = $data['row_opex']['id_opex'];
        $data['row_detail_opex'] = $this->Data_kontrak_model->row_detail_opex_by_id_opex($id_opex);

        // BUA
        $data['row_bua'] = $this->Data_kontrak_model->row_bua_by_kontrak($id_kontrak);
        $id_bua = $data['row_bua']['id_bua'];
        $data['row_detail_bua'] = $this->Data_kontrak_model->row_detail_bua_by_id_bua($id_bua);

        // SDM
        $data['row_sdm'] = $this->Data_kontrak_model->row_sdm_by_kontrak($id_kontrak);
        $id_sdm = $data['row_sdm']['id_sdm'];
        $data['row_detail_sdm'] = $this->Data_kontrak_model->row_detail_sdm_by_id_sdm($id_sdm);

        $this->load->view('template_stisla/header', $data);
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/kontrak_management_jasa/tambah_mata_anggran_addendum', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management_jasa/ajax_tambah_mata_anggran_addendum', $data);
    }

    public function kelola_level_unit_price($id_kontrak)
    {
        $data['title'] = 'Dashboard';
        $data['row_kontrak'] = $this->Data_kontrak_model->get_by_id_join($id_kontrak);
        $this->load->view('template_stisla/header', $data);
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/kontrak_management_jasa/kelola_level_unit_price', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management_jasa/ajax_kelola_level_unit_price', $data);
    }


    // NE BANGET
    public function by_id_kontrak_get_detail_capex($id_kontrak)
    {
        $cek_row_kontrak = $this->Data_kontrak_model->result_cek_id_kontrak_di_tbl_capex($id_kontrak);
        $data = [
            'row_kontrak' => $cek_row_kontrak,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }



    public function status_control($id_program)
    {
        $where = [
            'id_program' => $id_program
        ];

        $status = $this->input->post('status');

        if ($status == 1) {
            $data = [
                'status' =>  1
            ];
        } else {
            $data = [
                'status' =>  0
            ];
        }
        // var_dump($data);
        $this->Data_kontrak_model->update($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }



    public function simpan_nilai_kontrak_leve_1()
    {
        $id_kontrak = [
            'id_kontrak' => $this->input->post('id_kontrak_level_1')
        ];
        $update = [
            'nilai_kontrak_awal' => $this->input->post('nilai_kontrak_awal'),
        ];
        $this->Data_kontrak_model->update_kontrak($id_kontrak, $update);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function reset_nilai_kontrak_leve_1()
    {
        $id_kontrak = [
            'id_kontrak' => $this->input->post('id_kontrak_level_1')
        ];
        $update = [
            'nilai_kontrak_awal' => 0,
        ];
        $this->Data_kontrak_model->update_kontrak($id_kontrak, $update);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // INI UNTUK LEVEL @ PEMEILIHAN CAPEX OPEX BUA DAN SDM

    public function simpan_level_2()
    {
        $id_kontrak =  $this->input->post('id_kontrak_level_2');
        $pilih_level2 = $this->input->post('pilih_level2');
        $simpan_no_urut_level_2 = $this->input->post('simpan_no_urut_level_2');
        if ($pilih_level2 == 'Capex') {
            $data = [
                'nama_uraian' => $pilih_level2,
                'no_urut' => 1.1,
                'id_kontrak' => $id_kontrak,
            ];
            $this->Data_kontrak_model->tambah_ke_tbl_capex($data);
        } else  if ($pilih_level2 == 'Opex') {
            $data = [
                'nama_uraian' => $pilih_level2,
                'no_urut' => 1.2,
                'id_kontrak' => $id_kontrak,
            ];
            $this->Data_kontrak_model->tambah_ke_tbl_opex($data);
        } else  if ($pilih_level2 == 'Sdm') {
            $data = [
                'nama_uraian' => $pilih_level2,
                'no_urut' => 1.3,
                'id_kontrak' => $id_kontrak,
            ];
            $this->Data_kontrak_model->tambah_ke_tbl_sdm($data);
        } else {
            $data = [
                'nama_uraian' => $pilih_level2,
                'no_urut' => 1.4,
                'id_kontrak' => $id_kontrak,
            ];
            $this->Data_kontrak_model->tambah_ke_tbl_bua($data);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function by_id_capex($id_capex)
    {
        $cek_row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
        $data = [
            'row_capex' => $cek_row_capex
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


    // INI UNTUK LEVEL 2 CAPEX

    public function simpan_nilai_level_2()
    {
        $id_kontrak_global =  $this->input->post('id_kontrak_capex');

        $id_capex = [
            'id_capex' => $this->input->post('id_capex_level_2')
        ];
        $update_capex = [
            'nilai_capex' => $this->input->post('nilai_capex'),
        ];
        $this->Data_kontrak_model->update_tbl_capex($id_capex, $update_capex);

        // Capex 
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak_global);
        $query0 = $this->db->get()->result_array();
        $total_capex = 0;
        foreach ($query0 as $key => $value_capex) {
            $total_capex +=  $value_capex['nilai_capex'];
        };

        // Opex 
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $id_kontrak_global);
        $query1opex = $this->db->get()->result_array();
        $total_opex = 0;
        foreach ($query1opex as $key => $value_opex) {
            $total_opex +=  $value_opex['nilai_opex'];
        };
        $total_semua_induk = $total_capex + $total_opex;

        $id_kontrak = [
            'id_kontrak' => $this->input->post('id_kontrak_capex')
        ];
        $update = [
            'nilai_kontrak_awal' => $total_semua_induk,
        ];
        $this->Data_kontrak_model->update_kontrak($id_kontrak, $update);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function reset_nilai_level_2()
    {
        $id_capex = [
            'id_capex' => $this->input->post('id_capex_level_2')
        ];
        $update_capex = [
            'nilai_capex' => 0,
        ];
        $this->Data_kontrak_model->update_tbl_capex($id_capex, $update_capex);

        $id_kontrak = [
            'id_kontrak' => $this->input->post('id_kontrak_capex')
        ];
        $update = [
            'nilai_kontrak_awal' => 0,
        ];
        $this->Data_kontrak_model->update_kontrak($id_kontrak, $update);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function update_row_detail_capex()
    {
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // INI UNTUK LEVEL 3 CAPEX
    public function simpan_level_3()
    {
        $id_capex =  $this->input->post('id_capex_lv3');
        $nama_uraian_lv3 = $this->input->post('nama_uraian_lv3');
        $simpan_no_urut_level_3 = $this->input->post('simpan_no_urut_level_3');
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_capex_detail($id_capex);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian' => $nama_uraian_lv3,
                'no_urut' => $simpan_no_urut_level_3 . '.' . $count,
                'id_capex' => $id_capex,
            ];
        } else {
            $data = [
                'nama_uraian' => $nama_uraian_lv3,
                'no_urut' => $simpan_no_urut_level_3 . '.' . $count,
                'id_capex' => $id_capex,
            ];
        }

        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // level_4_1 capex

    public function by_id_capex_detail($id_capex_detail)
    {
        $cek_row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
        $id_capex = $cek_row_capex_detail['id_capex'];
        $result_capex = $this->Data_kontrak_model->result_detail_capex_by_id_capex($id_capex);
        $data = [
            'row_capex_detail' => $cek_row_capex_detail,
            'result_capex' => $result_capex
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function simpan_nilai_level_3()
    {

        $id_capex_detail = [
            'id_capex_detail' => $this->input->post('id_capex_detail')
        ];
        $update_capex_detail = [
            'nilai_detail_capex' => $this->input->post('nilai_detail_capex'),
        ];
        $capex_level_3 = $this->Data_kontrak_model->update_tbl_capex_detail($id_capex_detail, $update_capex_detail);
        $id_capex = $capex_level_3['id_capex'];
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        $query1 = $this->db->get()->result_array();
        $nilai_detail_capex = 0;
        foreach ($query1 as $key => $value) {
            $nilai_detail_capex +=  $value['nilai_detail_capex'];
        };
        $where_capex = [
            'id_capex' => $id_capex
        ];
        $data_capex = [
            'nilai_capex' => $nilai_detail_capex
        ];
        $row_capex = $this->Data_kontrak_model->update_tbl_capex($where_capex, $data_capex);
        $id_kontrak = $row_capex['id_kontrak'];
        // Capex 
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $query0 = $this->db->get()->result_array();
        $total_capex = 0;
        foreach ($query0 as $key => $value_capex) {
            $total_capex +=  $value_capex['nilai_capex'];
        };

        // Opex 
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $id_kontrak);
        $query1opex = $this->db->get()->result_array();
        $total_opex = 0;
        foreach ($query1opex as $key => $value_opex) {
            $total_opex +=  $value_opex['nilai_opex'];
        };
        $total_semua_induk = $total_capex + $total_opex;
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $total_semua_induk,
        ];
        $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function reset_nilai_level_3()
    {
        $id_capex_detail = [
            'id_capex_detail' => $this->input->post('id_capex_detail')
        ];
        $update_capex_detail = [
            'nilai_detail_capex' => 0,
        ];
        $capex_level_3 = $this->Data_kontrak_model->update_tbl_capex_detail($id_capex_detail, $update_capex_detail);
        $id_capex = $capex_level_3['id_capex'];
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        $query1 = $this->db->get()->result_array();
        $nilai_detail_capex = 0;
        foreach ($query1 as $key => $value) {
            $nilai_detail_capex +=  $value['nilai_detail_capex'];
        };
        $where_capex = [
            'id_capex' => $id_capex
        ];
        $data_capex = [
            'nilai_capex' => $nilai_detail_capex
        ];
        $row_capex = $this->Data_kontrak_model->update_tbl_capex($where_capex, $data_capex);
        $id_kontrak = $row_capex['id_kontrak'];
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $query0 = $this->db->get()->result_array();
        $total_capex = 0;
        foreach ($query0 as $key => $value_capex) {
            $total_capex +=  $value_capex['nilai_capex'];
        };
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $total_capex,
        ];
        $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function simpan_level_4()
    {
        $id_capex_detail =  $this->input->post('id_capex_detail');
        $nama_uraian_1_capex = $this->input->post('nama_uraian_1_capex');
        $simpan_no_urut_level_4 = $this->input->post('simpan_no_urut_level_4');
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_capex_detail_1($id_capex_detail);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_capex_detail' => $id_capex_detail,
                'nama_uraian_1_capex' => $nama_uraian_1_capex,
                'no_urut_1_capex' => $simpan_no_urut_level_4 . '.' . $count,
                'date_created' => date('Y-m-d H:i')
            ];
        } else {
            $data = [
                'id_capex_detail' => $id_capex_detail,
                'nama_uraian_1_capex' => $nama_uraian_1_capex,
                'no_urut_1_capex' => $simpan_no_urut_level_4 . '.' . $count,
                'date_created' => date('Y-m-d H:i')
            ];
        }

        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_1($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // level_4__2 capex

    public function by_id_detail_capex_4_1($id_detail_capex_1)
    {
        $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_4_1($id_detail_capex_1);
        $data = [
            'row_capex_detail_1' => $row_capex_detail_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function simpan_nilai_level_4_1()
    {

        // BATASSSSSS
        $id_detail_capex_1 = [
            'id_detail_capex_1' => $this->input->post('id_detail_capex_1')
        ];
        $update_capex_detail = [
            'nilai_capex_detail_1' => $this->input->post('nilai_capex_detail_1'),
        ];
        $data_detail_capex_1 = $this->Data_kontrak_model->update_tbl_detail_capex_1($id_detail_capex_1, $update_capex_detail);
        $id_capex_detail = $data_detail_capex_1['id_capex_detail'];
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_1');
        $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
        $query_capex_detail_1 = $this->db->get()->result_array();
        $nilai_capex_detail_1 = 0;
        foreach ($query_capex_detail_1 as $key => $value) {
            $nilai_capex_detail_1 +=  $value['nilai_capex_detail_1'];
        };
        $where_capex_detail = [
            'id_capex_detail' => $id_capex_detail
        ];
        $update_capex_detail = [
            'nilai_detail_capex' => $nilai_capex_detail_1,
        ];
        $datata_detail_capex = $this->Data_kontrak_model->update_tbl_capex_detail($where_capex_detail, $update_capex_detail);
        // BATASSSSSS
        $id_capex = $datata_detail_capex['id_capex'];
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        $query1 = $this->db->get()->result_array();
        $nilai_detail_capex = 0;
        foreach ($query1 as $key => $value) {
            $nilai_detail_capex +=  $value['nilai_detail_capex'];
        };
        $where_capex = [
            'id_capex' => $id_capex
        ];
        $data_capex = [
            'nilai_capex' => $nilai_detail_capex
        ];
        $row_capex = $this->Data_kontrak_model->update_tbl_capex($where_capex, $data_capex);
        $id_kontrak = $row_capex['id_kontrak'];
        // BATASSSSSS
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $query0 = $this->db->get()->result_array();
        $total_capex = 0;
        foreach ($query0 as $key => $value_capex) {
            $total_capex +=  $value_capex['nilai_capex'];
        };
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $total_capex,
        ];
        $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function reset_nilai_level_4_1()
    {
        $id_detail_capex_1 = [
            'id_detail_capex_1' => $this->input->post('id_detail_capex_1')
        ];
        $update_capex_detail = [
            'nilai_capex_detail_1' => 0,
        ];
        $data_detail_capex_1 = $this->Data_kontrak_model->update_tbl_detail_capex_1($id_detail_capex_1, $update_capex_detail);
        $id_capex_detail = $data_detail_capex_1['id_capex_detail'];
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_1');
        $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
        $query_capex_detail_1 = $this->db->get()->result_array();
        $nilai_capex_detail_1 = 0;
        foreach ($query_capex_detail_1 as $key => $value) {
            $nilai_capex_detail_1 +=  $value['nilai_capex_detail_1'];
        };
        $where_capex_detail = [
            'id_capex_detail' => $id_capex_detail
        ];
        $update_capex_detail = [
            'nilai_detail_capex' => $nilai_capex_detail_1,
        ];
        $datata_detail_capex = $this->Data_kontrak_model->update_tbl_capex_detail($where_capex_detail, $update_capex_detail);
        // BATASSSSSS
        $id_capex = $datata_detail_capex['id_capex'];
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        $query1 = $this->db->get()->result_array();
        $nilai_detail_capex = 0;
        foreach ($query1 as $key => $value) {
            $nilai_detail_capex +=  $value['nilai_detail_capex'];
        };
        $where_capex = [
            'id_capex' => $id_capex
        ];
        $data_capex = [
            'nilai_capex' => $nilai_detail_capex
        ];
        $row_capex = $this->Data_kontrak_model->update_tbl_capex($where_capex, $data_capex);
        $id_kontrak = $row_capex['id_kontrak'];
        // BATASSSSSS
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $query0 = $this->db->get()->result_array();
        $total_capex = 0;
        foreach ($query0 as $key => $value_capex) {
            $total_capex +=  $value_capex['nilai_capex'];
        };
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $total_capex,
        ];
        $datata_detail_capex = $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function simpan_level_4_2()
    {

        $data = [
            'id_detail_capex_1' => $this->input->post('id_detail_capex_1'),
            'nama_uraian_2_capex' => $this->input->post('nama_uraian_2_capex'),
            'date_created' => date('Y-m-d H:i')
        ];
        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_2($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }



    // level_4__3 capex

    public function by_id_detail_capex_4_2($id_detail_capex_1)
    {
        $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_4_2($id_detail_capex_1);
        $data = [
            'row_capex_detail_2' => $row_capex_detail_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function simpan_nilai_level_4_2()
    {
        $id_detail_capex_2 = [
            'id_detail_capex_2' => $this->input->post('id_detail_capex_2')
        ];
        $update_capex_detail = [
            'nilai_capex_detail_2' => $this->input->post('nilai_capex_detail_2'),
        ];
        $data_detail_capex_2 = $this->Data_kontrak_model->update_tbl_detail_capex_2($id_detail_capex_2, $update_capex_detail);
        $id_detail_capex_1 = $data_detail_capex_2['id_detail_capex_1'];
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_2');
        $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
        $query_capex_detail_2 = $this->db->get()->result_array();
        $nilai_capex_detail_2 = 0;
        foreach ($query_capex_detail_2 as $key => $value) {
            $nilai_capex_detail_2 +=  $value['nilai_capex_detail_2'];
        };
        $id_detail_capex_1 = [
            'id_detail_capex_1' => $id_detail_capex_1
        ];
        $update_capex_detail = [
            'nilai_capex_detail_1' => $nilai_capex_detail_2,
        ];
        $data_detail_capex_1 = $this->Data_kontrak_model->update_tbl_detail_capex_1($id_detail_capex_1, $update_capex_detail);
        $id_capex_detail = $data_detail_capex_1['id_capex_detail'];
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_1');
        $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
        $query_capex_detail_1 = $this->db->get()->result_array();
        $nilai_capex_detail_1 = 0;
        foreach ($query_capex_detail_1 as $key => $value) {
            $nilai_capex_detail_1 +=  $value['nilai_capex_detail_1'];
        };
        $where_capex_detail = [
            'id_capex_detail' => $id_capex_detail
        ];
        $update_capex_detail = [
            'nilai_detail_capex' => $nilai_capex_detail_1,
        ];
        $datata_detail_capex = $this->Data_kontrak_model->update_tbl_capex_detail($where_capex_detail, $update_capex_detail);
        // BATASSSSSS
        $id_capex = $datata_detail_capex['id_capex'];
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        $query1 = $this->db->get()->result_array();
        $nilai_detail_capex = 0;
        foreach ($query1 as $key => $value) {
            $nilai_detail_capex +=  $value['nilai_detail_capex'];
        };
        $where_capex = [
            'id_capex' => $id_capex
        ];
        $data_capex = [
            'nilai_capex' => $nilai_detail_capex
        ];
        $row_capex = $this->Data_kontrak_model->update_tbl_capex($where_capex, $data_capex);
        $id_kontrak = $row_capex['id_kontrak'];
        // BATASSSSSS
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $query0 = $this->db->get()->result_array();
        $total_capex = 0;
        foreach ($query0 as $key => $value_capex) {
            $total_capex +=  $value_capex['nilai_capex'];
        };
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $total_capex,
        ];
        $datata_detail_capex = $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function reset_nilai_level_4_2()
    {
        $id_detail_capex_2 = [
            'id_detail_capex_2' => $this->input->post('id_detail_capex_2')
        ];
        $update_capex_detail = [
            'nilai_capex_detail_2' => 0,
        ];
        $this->Data_kontrak_model->update_tbl_detail_capex_2($id_detail_capex_2, $update_capex_detail);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function simpan_level_4_3()
    {
        $data = [
            'id_detail_capex_2' => $this->input->post('id_detail_capex_2'),
            'nama_uraian_3_capex' => $this->input->post('nama_uraian_3_capex'),
            'date_created' => date('Y-m-d H:i')
        ];
        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_3($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // OPEX BATAS
    public function by_id_opex($id_opex)
    {
        $cek_row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);
        $data = [
            'row_opex' => $cek_row_opex
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


    // INI UNTUK LEVEL 2 opex

    public function simpan_nilai_level_2_opex()
    {
        $id_opex = [
            'id_opex' => $this->input->post('id_opex_level_2')
        ];
        $update_opex = [
            'nilai_opex' => $this->input->post('nilai_opex'),
        ];
        $this->Data_kontrak_model->update_tbl_opex($id_opex, $update_opex);

        $id_kontrak = [
            'id_kontrak' => $this->input->post('id_kontrak_opex')
        ];
        $update = [
            'nilai_kontrak_awal' => $this->input->post('nilai_opex'),
        ];
        $this->Data_kontrak_model->update_kontrak($id_kontrak, $update);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function reset_nilai_level_2_opex()
    {
        $id_opex = [
            'id_opex' => $this->input->post('id_opex_level_2')
        ];
        $update_opex = [
            'nilai_opex' => 0,
        ];
        $this->Data_kontrak_model->update_tbl_opex($id_opex, $update_opex);

        $id_kontrak = [
            'id_kontrak' => $this->input->post('id_kontrak_opex')
        ];
        $update = [
            'nilai_kontrak_awal' => 0,
        ];
        $this->Data_kontrak_model->update_kontrak($id_kontrak, $update);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // INI UNTUK LEVEL 3 opex
    public function simpan_level_3_opex()
    {
        $id_opex =  $this->input->post('id_opex_lv3');
        $nama_uraian_lv3 = $this->input->post('nama_uraian_lv3');
        $simpan_no_urut_level_3 = $this->input->post('simpan_no_urut_level_3');
        $data = [
            'nama_uraian' => $nama_uraian_lv3,
            'no_urut' => $simpan_no_urut_level_3,
            'id_opex' => $id_opex,
        ];
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // level_4_1 opex

    public function by_id_opex_detail($id_opex_detail)
    {
        $cek_row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

        $data = [
            'row_opex_detail' => $cek_row_opex_detail,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


    public function by_id_bua_detail($id_bua_detail)
    {
        $cek_row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
        $data = [
            'row_bua_detail' => $cek_row_bua_detail,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function by_id_sdm_detail($id_sdm_detail)
    {
        $cek_row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
        $data = [
            'row_sdm_detail' => $cek_row_sdm_detail,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function simpan_nilai_level_3_opex()
    {

        $id_opex_detail = [
            'id_opex_detail' => $this->input->post('id_opex_detail')
        ];
        $update_opex_detail = [
            'nilai_detail_opex' => $this->input->post('nilai_detail_opex'),
        ];
        $datata_detail_opex = $this->Data_kontrak_model->update_tbl_opex_detail($id_opex_detail, $update_opex_detail);
        $id_opex = $datata_detail_opex['id_opex'];
        $this->db->select('*');
        $this->db->from('tbl_opex_detail');
        $this->db->where('tbl_opex_detail.id_opex', $id_opex);
        $query1 = $this->db->get()->result_array();
        $nilai_detail_opex = 0;
        foreach ($query1 as $key => $value) {
            $nilai_detail_opex +=  $value['nilai_detail_opex'];
        };
        $where_opex = [
            'id_opex' => $id_opex
        ];
        $data_opex = [
            'nilai_opex' => $nilai_detail_opex
        ];
        $row_opex = $this->Data_kontrak_model->update_tbl_opex($where_opex, $data_opex);
        $id_kontrak = $row_opex['id_kontrak'];
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $id_kontrak);
        $query0 = $this->db->get()->result_array();
        $total_opex = 0;
        foreach ($query0 as $key => $value_opex) {
            $total_opex +=  $value_opex['nilai_opex'];
        };
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $total_opex,
        ];
        $datata_detail_opex = $this->Data_kontrak_model->update_kontrak($where, $data);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function reset_nilai_level_3_opex()
    {
        $id_opex_detail = [
            'id_opex_detail' => $this->input->post('id_opex_detail')
        ];
        $update_opex_detail = [
            'nilai_detail_opex' => 0,
        ];
        $datata_detail_opex = $this->Data_kontrak_model->update_tbl_opex_detail($id_opex_detail, $update_opex_detail);
        $id_opex = $datata_detail_opex['id_opex'];
        $this->db->select('*');
        $this->db->from('tbl_opex_detail');
        $this->db->where('tbl_opex_detail.id_opex', $id_opex);
        $query1 = $this->db->get()->result_array();
        $nilai_detail_opex = 0;
        foreach ($query1 as $key => $value) {
            $nilai_detail_opex +=  $value['nilai_detail_opex'];
        };
        $where_opex = [
            'id_opex' => $id_opex
        ];
        $data_opex = [
            'nilai_opex' => $nilai_detail_opex
        ];
        $row_opex = $this->Data_kontrak_model->update_tbl_opex($where_opex, $data_opex);
        $id_kontrak = $row_opex['id_kontrak'];
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $id_kontrak);
        $query0 = $this->db->get()->result_array();
        $total_opex = 0;
        foreach ($query0 as $key => $value_opex) {
            $total_opex +=  $value_opex['nilai_opex'];
        };
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $total_opex,
        ];
        $datata_detail_opex = $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // level_4__2 opex

    public function by_id_detail_opex_4_1($id_detail_opex_1)
    {
        $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_4_1($id_detail_opex_1);
        $data = [
            'row_opex_detail_1' => $row_opex_detail_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function simpan_level_4_opex()
    {
        $data = [
            'id_opex_detail' => $this->input->post('id_opex_detail'),
            'nama_uraian_1_opex' => $this->input->post('nama_uraian_1_opex'),
            'no_urut_1_opex' => $this->input->post('simpan_no_urut_level_4_opex'),
            'date_created' => date('Y-m-d H:i')
        ];
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_1($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function simpan_nilai_level_4_1_opex()
    {

        // BATASSSSSS
        $id_detail_opex_1 = [
            'id_detail_opex_1' => $this->input->post('id_detail_opex_1')
        ];
        $update_opex_detail = [
            'nilai_opex_detail_1' => $this->input->post('nilai_opex_detail_1'),
        ];
        $data_detail_opex_1 = $this->Data_kontrak_model->update_tbl_detail_opex_1($id_detail_opex_1, $update_opex_detail);
        $id_opex_detail = $data_detail_opex_1['id_opex_detail'];
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_1');
        $this->db->where('tbl_detail_opex_1.id_opex_detail', $id_opex_detail);
        $query_opex_detail_1 = $this->db->get()->result_array();
        $nilai_opex_detail_1 = 0;
        foreach ($query_opex_detail_1 as $key => $value) {
            $nilai_opex_detail_1 +=  $value['nilai_opex_detail_1'];
        };
        $where_opex_detail = [
            'id_opex_detail' => $id_opex_detail
        ];
        $update_opex_detail = [
            'nilai_detail_opex' => $nilai_opex_detail_1,
        ];
        $datata_detail_opex = $this->Data_kontrak_model->update_tbl_opex_detail($where_opex_detail, $update_opex_detail);
        // BATASSSSSS
        $id_opex = $datata_detail_opex['id_opex'];
        $this->db->select('*');
        $this->db->from('tbl_opex_detail');
        $this->db->where('tbl_opex_detail.id_opex', $id_opex);
        $query1 = $this->db->get()->result_array();
        $nilai_detail_opex = 0;
        foreach ($query1 as $key => $value) {
            $nilai_detail_opex +=  $value['nilai_detail_opex'];
        };
        $where_opex = [
            'id_opex' => $id_opex
        ];
        $data_opex = [
            'nilai_opex' => $nilai_detail_opex
        ];
        $row_opex = $this->Data_kontrak_model->update_tbl_opex($where_opex, $data_opex);
        $id_kontrak = $row_opex['id_kontrak'];
        // BATASSSSSS
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $id_kontrak);
        $query0 = $this->db->get()->result_array();
        $total_opex = 0;
        foreach ($query0 as $key => $value_opex) {
            $total_opex +=  $value_opex['nilai_opex'];
        };
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $total_opex,
        ];
        $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function reset_nilai_level_4_1_opex()
    {
        $id_detail_opex_1 = [
            'id_detail_opex_1' => $this->input->post('id_detail_opex_1')
        ];
        $update_opex_detail = [
            'nilai_opex_detail_1' => 0,
        ];
        $data_detail_opex_1 =  $this->Data_kontrak_model->update_tbl_detail_opex_1($id_detail_opex_1, $update_opex_detail);
        $id_opex_detail = $data_detail_opex_1['id_opex_detail'];
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_1');
        $this->db->where('tbl_detail_opex_1.id_opex_detail', $id_opex_detail);
        $query_opex_detail_1 = $this->db->get()->result_array();
        $nilai_opex_detail_1 = 0;
        foreach ($query_opex_detail_1 as $key => $value) {
            $nilai_opex_detail_1 +=  $value['nilai_opex_detail_1'];
        };
        $where_opex_detail = [
            'id_opex_detail' => $id_opex_detail
        ];
        $update_opex_detail = [
            'nilai_detail_opex' => $nilai_opex_detail_1,
        ];
        $datata_detail_opex = $this->Data_kontrak_model->update_tbl_opex_detail($where_opex_detail, $update_opex_detail);
        // BATASSSSSS
        $id_opex = $datata_detail_opex['id_opex'];
        $this->db->select('*');
        $this->db->from('tbl_opex_detail');
        $this->db->where('tbl_opex_detail.id_opex', $id_opex);
        $query1 = $this->db->get()->result_array();
        $nilai_detail_opex = 0;
        foreach ($query1 as $key => $value) {
            $nilai_detail_opex +=  $value['nilai_detail_opex'];
        };
        $where_opex = [
            'id_opex' => $id_opex
        ];
        $data_opex = [
            'nilai_opex' => $nilai_detail_opex
        ];
        $row_opex = $this->Data_kontrak_model->update_tbl_opex($where_opex, $data_opex);
        $id_kontrak = $row_opex['id_kontrak'];
        // BATASSSSSS
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $id_kontrak);
        $query0 = $this->db->get()->result_array();
        $total_opex = 0;
        foreach ($query0 as $key => $value_opex) {
            $total_opex +=  $value_opex['nilai_opex'];
        };
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $total_opex,
        ];
        $datata_detail_opex = $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function simpan_level_4_2_opex()
    {

        $data = [
            'id_detail_opex_1' => $this->input->post('id_detail_opex_1'),
            'nama_uraian_2_opex' => $this->input->post('nama_uraian_2_opex'),
            'date_created' => date('Y-m-d H:i')
        ];
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_2($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }



    // level_4__3 opex

    public function by_id_detail_opex_4_2($id_detail_opex_1)
    {
        $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_4_2($id_detail_opex_1);
        $data = [
            'row_opex_detail_2' => $row_opex_detail_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function simpan_nilai_level_4_2_opex()
    {
        $id_detail_opex_2 = [
            'id_detail_opex_2' => $this->input->post('id_detail_opex_2')
        ];
        $update_opex_detail = [
            'nilai_opex_detail_2' => $this->input->post('nilai_opex_detail_2'),
        ];
        $data_detail_opex_2 = $this->Data_kontrak_model->update_tbl_detail_opex_2($id_detail_opex_2, $update_opex_detail);
        $id_detail_opex_1 = $data_detail_opex_2['id_detail_opex_1'];
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_2');
        $this->db->where('tbl_detail_opex_2.id_detail_opex_1', $id_detail_opex_1);
        $query_opex_detail_2 = $this->db->get()->result_array();
        $nilai_opex_detail_2 = 0;
        foreach ($query_opex_detail_2 as $key => $value) {
            $nilai_opex_detail_2 +=  $value['nilai_opex_detail_2'];
        };
        $id_detail_opex_1 = [
            'id_detail_opex_1' => $id_detail_opex_1
        ];
        $update_opex_detail = [
            'nilai_opex_detail_1' => $nilai_opex_detail_2,
        ];
        $data_detail_opex_1 = $this->Data_kontrak_model->update_tbl_detail_opex_1($id_detail_opex_1, $update_opex_detail);
        $id_opex_detail = $data_detail_opex_1['id_opex_detail'];
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_1');
        $this->db->where('tbl_detail_opex_1.id_opex_detail', $id_opex_detail);
        $query_opex_detail_1 = $this->db->get()->result_array();
        $nilai_opex_detail_1 = 0;
        foreach ($query_opex_detail_1 as $key => $value) {
            $nilai_opex_detail_1 +=  $value['nilai_opex_detail_1'];
        };
        $where_opex_detail = [
            'id_opex_detail' => $id_opex_detail
        ];
        $update_opex_detail = [
            'nilai_detail_opex' => $nilai_opex_detail_1,
        ];
        $datata_detail_opex = $this->Data_kontrak_model->update_tbl_opex_detail($where_opex_detail, $update_opex_detail);
        // BATASSSSSS
        $id_opex = $datata_detail_opex['id_opex'];
        $this->db->select('*');
        $this->db->from('tbl_opex_detail');
        $this->db->where('tbl_opex_detail.id_opex', $id_opex);
        $query1 = $this->db->get()->result_array();
        $nilai_detail_opex = 0;
        foreach ($query1 as $key => $value) {
            $nilai_detail_opex +=  $value['nilai_detail_opex'];
        };
        $where_opex = [
            'id_opex' => $id_opex
        ];
        $data_opex = [
            'nilai_opex' => $nilai_detail_opex
        ];
        $row_opex = $this->Data_kontrak_model->update_tbl_opex($where_opex, $data_opex);
        $id_kontrak = $row_opex['id_kontrak'];
        // BATASSSSSS
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $id_kontrak);
        $query0 = $this->db->get()->result_array();
        $total_opex = 0;
        foreach ($query0 as $key => $value_opex) {
            $total_opex +=  $value_opex['nilai_opex'];
        };
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $total_opex,
        ];
        $datata_detail_opex = $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function reset_nilai_level_4_2_opex()
    {
        $id_detail_opex_2 = [
            'id_detail_opex_2' => $this->input->post('id_detail_opex_2')
        ];
        $update_opex_detail = [
            'nilai_opex_detail_2' => 0,
        ];
        $this->Data_kontrak_model->update_tbl_detail_opex_2($id_detail_opex_2, $update_opex_detail);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function simpan_level_4_3_opex()
    {
        $data = [
            'id_detail_opex_2' => $this->input->post('id_detail_opex_2'),
            'nama_uraian_3_opex' => $this->input->post('nama_uraian_3_opex'),
            'date_created' => date('Y-m-d H:i')
        ];
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_3($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // cek_jumlah_isi_level_3


    // INI UNTUK ADDENDUM
    public function addendum()
    {
        $id_program = $this->uri->segment(4);
        $id_kontrak = $this->uri->segment(5);
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['program'] = $this->Data_kontrak_model->get_by_id_program($id_program);
        $data['id_kontrak'] = $id_kontrak;
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/addendum/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/addendum/ajax');
    }

    public function get_addendum($id_program)
    {
        $resultss = $this->Data_kontrak_model->getdatatable_addendum($id_program);
        $data = [];
        $no = $_POST['start'];
        foreach ($resultss as $rs) {
            $row = array();
            $row[] = ++$no;
            $row[] = $rs->no_adendum;
            $row[] = $rs->jumlah;
            $row[] = $rs->tanggal;
            $row[] = '<a href="javascript:;" class="btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_adendum . "','edit'" . ')"> <i class="bi bi-pencil-square"></i> Edit</a> <a href="javascript:;" class="btn btn-danger btn-sm" onClick="byid(' . "'" . $rs->id_adendum . "','hapus'" . ')"><i class="bi bi-x-circle"></i> Non-Aktifkan</a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_kontrak_model->count_all_data_addendum($id_program),
            "recordsFiltered" => $this->Data_kontrak_model->count_filtered_data_addendum($id_program),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function add_addendum()
    {
        $id_kontrak = $this->input->post('id_kontrak_adendum');
        $cek_no_add =  $this->input->post('no_adendum');
        $jika_ada_add = $this->Data_kontrak_model->get_addendum_by_id($id_kontrak);
        $data_ke_logic['id_kontrak'] = $this->input->post('id_kontrak_adendum');
        $data_ke_logic['copy_add'] = $this->input->post('copy_add');
        if ($jika_ada_add) {
            $data = [
                'no_adendum' => $this->input->post('no_adendum'),
                'tanggal' => $this->input->post('tanggal'),
                'id_kontrak' => $this->input->post('id_kontrak_adendum'),
            ];
            $this->Data_kontrak_model->add_addendum($data);
            if ($cek_no_add == 1) {
                $this->load->view('cek_add/copy_add_I', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 2) {
                $this->load->view('cek_add/copy_add_II', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 3) {
                $this->load->view('cek_add/copy_add_III', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 4) {
                $this->load->view('cek_add/copy_add_IV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 5) {
                $this->load->view('cek_add/copy_add_V', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 6) {
                $this->load->view('cek_add/copy_add_VI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 7) {
                $this->load->view('cek_add/copy_add_VII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 8) {
                $this->load->view('cek_add/copy_add_VIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 9) {
                $this->load->view('cek_add/copy_add_IX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 10) {
                $this->load->view('cek_add/copy_add_X', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 11) {
                $this->load->view('cek_add/copy_add_XI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 12) {
                $this->load->view('cek_add/copy_add_XII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 13) {
                $this->load->view('cek_add/copy_add_XIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 14) {
            } else if ($cek_no_add == 15) {
            } else if ($cek_no_add == 16) {
            } else if ($cek_no_add == 17) {
            } else if ($cek_no_add == 18) {
            } else if ($cek_no_add == 19) {
            } else if ($cek_no_add == 20) {
            } else if ($cek_no_add == 21) {
            } else if ($cek_no_add == 22) {
            } else if ($cek_no_add == 23) {
            } else if ($cek_no_add == 24) {
            } else if ($cek_no_add == 25) {
            } else if ($cek_no_add == 26) {
            } else if ($cek_no_add == 27) {
            } else if ($cek_no_add == 28) {
            } else if ($cek_no_add == 29) {
            } else if ($cek_no_add == 30) {
            }
        } else {
            if ($cek_no_add == 1) {
                $this->load->view('tidak_ada_add/add_I', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 2) {
                var_dump('angga2');
                die;
                $this->load->view('tidak_ada_add/add_II', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 3) {
                $this->load->view('tidak_ada_add/add_III', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 4) {
                $this->load->view('tidak_ada_add/add_IV', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 5) {
                $this->load->view('tidak_ada_add/add_V', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 6) {
                $this->load->view('tidak_ada_add/add_VI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 7) {
                $this->load->view('tidak_ada_add/add_VII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 8) {
                $this->load->view('tidak_ada_add/add_VIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 9) {
                $this->load->view('tidak_ada_add/add_IX', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 10) {
                $this->load->view('tidak_ada_add/add_X', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 11) {
                $this->load->view('tidak_ada_add/add_XI', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 12) {
                $this->load->view('tidak_ada_add/add_XII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else if ($cek_no_add == 13) {
                $this->load->view('tidak_ada_add/add_XIII', $data_ke_logic);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            }
        }
    }






    // SIMPAN NILAI ANAK CAPEX DAN DETAIL CAPEX DAN SUM ALL ANAK CAPEX

    public function simpan_capex_dan_detail_capex($id_kontrak)
    {
        $cek_capex_by_id_kontrak = $this->Data_kontrak_model->result_cek_id_kontrak_di_tbl_capex($id_kontrak);
        // jika ada capex
        if ($cek_capex_by_id_kontrak) {
            $row_capex = $this->Data_kontrak_model->row_cek_id_kontrak_di_tbl_capex($id_kontrak);
            $id_capex = $row_capex['id_capex'];
            $where = [
                'id_capex' => $id_capex
            ];
            $update_capex = [
                'nilai_capex' => $this->input->post('nilai_capex_sum'),
            ];
            $this->Data_kontrak_model->update_tbl_capex($where, $update_capex);
            $nilai_detail_capex = $this->input->post('nilai_detail_kedua');
            $nama_uraian = $this->input->post('nama_uraian_kedua');
            $result = array();
            foreach ($nama_uraian as $key => $val) {
                $result[] = array(
                    'id_capex' => $id_capex,
                    'nama_uraian' => $nama_uraian[$key],
                    'nilai_detail_capex' => $nilai_detail_capex[$key],
                );
            }
            $this->db->insert_batch('tbl_capex_detail', $result);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // jika tidak ada capex
            $nilai_detail_capex = $this->input->post('nilai_detail_kedua');
            $nama_uraian = $this->input->post('nama_uraian_kedua');
            $data  = array(
                'nama_uraian' => 'CAPEX',
                'no_urut' => 1.1,
                'id_kontrak' => $id_kontrak,
                'nilai_capex' => $this->input->post('nilai_capex_sum')
            );
            $this->db->insert('tbl_capex', $data);
            $package_id = $this->db->insert_id();
            $result = array();
            foreach ($nama_uraian as $key => $val) {
                $result[] = array(
                    'id_capex' => $package_id,
                    'nama_uraian' => $nama_uraian[$key],
                    'nilai_detail_capex' => $nilai_detail_capex[$key],
                );
            }
            $this->db->insert_batch('tbl_capex_detail', $result);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }

    // new coding
    public function by_id_kontrak($id_kontrak)
    {
        $cek_row_kontrak = $this->Data_kontrak_model->by_id_kontrak($id_kontrak);
        $data = [
            'row_kontrak' => $cek_row_kontrak,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    // Update Nilai Level 1
    public function update_nilai_kontrak_awal_level_1($id_kontrak)
    {
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $this->input->post('nilai_kontrak_awal'),
        ];
        $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    // Edit Level 1
    public function edit_nama_kontrak_level_1($id_kontrak)
    {
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nama_kontrak' => $this->input->post('nama_kontrak'),
        ];
        $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // ========================= BATAS capex =========================
    // LEVEL 2 CAPEX
    // Update Nilai Level 2
    public function update_nilai_level_2_capex($id_capex)
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_I
            // _9
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _9
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII;
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capexX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_capex = $id_capex;
            $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex['nilai_capex'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 3 CAPEX
    // Update Nilai Level 3
    public function update_nilai_level_3_capex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_capex_detail = $this->input->post('id_capex_detail');
            $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_capex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_capex_detail['nilai_detail_capex'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }
    // LEVEL 4 CAPEX
    // Update Nilai Level 4
    public function by_id_detail_capex_1($id_detail_capex_1)
    {
        $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
        $data = [
            'row_capex_detail_1' => $row_capex_detail_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_4_capex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XII
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
            $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_1['nama_uraian_1_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_1['nilai_capex_detail_1'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 5 CAPEX
    // Update Nilai Level 5
    public function by_id_detail_capex_2($id_detail_capex_2)
    {
        $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
        $data = [
            'row_capex_detail_2' => $row_capex_detail_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_5_capex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _2
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _2
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
            $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_2['nama_uraian_2_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_2['nilai_capex_detail_2'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 6 CAPEX
    // Update Nilai Level 6
    public function by_id_detail_capex_3($id_detail_capex_3)
    {
        $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
        $data = [
            'row_capex_detail_3' => $row_capex_detail_3
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_6_capex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _3
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _3
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
            $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_3['nama_uraian_3_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_3['nilai_capex_detail_3'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 7 CAPEX
    // Update Nilai Level 7
    public function by_id_detail_capex_4($id_detail_capex_4)
    {
        $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
        $data = [
            'row_capex_detail_4' => $row_capex_detail_4
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_7_capex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _4
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _4
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
            $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_4['nama_uraian_4_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_4['nilai_capex_detail_4'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 8 CAPEX
    // Update Nilai Level 8
    public function by_id_detail_capex_5($id_detail_capex_5)
    {
        $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
        $data = [
            'row_capex_detail_5' => $row_capex_detail_5
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_8_capex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _5
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _5
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
            $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_5['nama_uraian_5_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_5['nilai_capex_detail_5'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 9 CAPEX
    // Update Nilai Level 9
    public function by_id_detail_capex_6($id_detail_capex_6)
    {
        $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
        $data = [
            'row_capex_detail_6' => $row_capex_detail_6
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_9_capex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _6
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _6
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
            $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_6['nama_uraian_6_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_6['nilai_capex_detail_6'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 10 CAPEX
    // Update Nilai Level 10
    public function by_id_detail_capex_7($id_detail_capex_7)
    {
        $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
        $data = [
            'row_capex_detail_7' => $row_capex_detail_7
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_10_capex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _7
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _7
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
            $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_7['nama_uraian_7_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_7['nilai_capex_detail_7'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 11 CAPEX
    // Update Nilai Level 11
    public function by_id_detail_capex_8($id_detail_capex_8)
    {
        $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
        $data = [
            'row_capex_detail_8' => $row_capex_detail_8
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_11_capex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _8
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _8
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
            $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_8['nama_uraian_8_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_8['nilai_capex_detail_8'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 12 CAPEX
    // Update Nilai Level 12
    public function by_id_detail_capex_9($id_detail_capex_9)
    {
        $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
        $data = [
            'row_capex_detail_9' => $row_capex_detail_9
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


    public function update_nilai_level_12_capex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _9
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _9
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
            $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_capex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_capex_detail_9['nama_uraian_9_capex'],
                'nilai_program_mata_anggran' => $row_capex_detail_9['nilai_capex_detail_9'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }

    // ========================= BATAS opex =========================
    // LEVEL 2 opex
    // Update Nilai Level 2
    public function update_nilai_level_2_opex($id_opex)
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_I
            // _9
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _9
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII;
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opexX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_opex = $id_opex;
            $row_opex = $this->Data_kontrak_model->by_id_opex($id_opex);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex['nilai_opex'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 3 opex
    // Update Nilai Level 3
    public function update_nilai_level_3_opex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_opex_detail = $this->input->post('id_opex_detail');
            $row_opex_detail = $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_opex_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_opex_detail['nilai_detail_opex'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }
    // LEVEL 4 opex
    // Update Nilai Level 4
    public function by_id_detail_opex_1($id_detail_opex_1)
    {
        $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);
        $data = [
            'row_opex_detail_1' => $row_opex_detail_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_4_opex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XII
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
            $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_1['nama_uraian_1_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_1['nilai_opex_detail_1'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 5 opex
    // Update Nilai Level 5
    public function by_id_detail_opex_2($id_detail_opex_2)
    {
        $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);
        $data = [
            'row_opex_detail_2' => $row_opex_detail_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_5_opex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _2
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _2
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
            $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_2['nama_uraian_2_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_2['nilai_opex_detail_2'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 6 opex
    // Update Nilai Level 6
    public function by_id_detail_opex_3($id_detail_opex_3)
    {
        $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);
        $data = [
            'row_opex_detail_3' => $row_opex_detail_3
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_6_opex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _3
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _3
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
            $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_3['nama_uraian_3_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_3['nilai_opex_detail_3'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 7 opex
    // Update Nilai Level 7
    public function by_id_detail_opex_4($id_detail_opex_4)
    {
        $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);
        $data = [
            'row_opex_detail_4' => $row_opex_detail_4
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_7_opex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _4
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _4
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
            $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_4['nama_uraian_4_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_4['nilai_opex_detail_4'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 8 opex
    // Update Nilai Level 8
    public function by_id_detail_opex_5($id_detail_opex_5)
    {
        $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);
        $data = [
            'row_opex_detail_5' => $row_opex_detail_5
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_8_opex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _5
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _5
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
            $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_5['nama_uraian_5_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_5['nilai_opex_detail_5'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 9 opex
    // Update Nilai Level 9
    public function by_id_detail_opex_6($id_detail_opex_6)
    {
        $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);
        $data = [
            'row_opex_detail_6' => $row_opex_detail_6
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_9_opex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _6
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _6
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
            $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_6['nama_uraian_6_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_6['nilai_opex_detail_6'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 10 opex
    // Update Nilai Level 10
    public function by_id_detail_opex_7($id_detail_opex_7)
    {
        $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);
        $data = [
            'row_opex_detail_7' => $row_opex_detail_7
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_10_opex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _7
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _7
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
            $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_7['nama_uraian_7_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_7['nilai_opex_detail_7'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 11 opex
    // Update Nilai Level 11
    public function by_id_detail_opex_8($id_detail_opex_8)
    {
        $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);
        $data = [
            'row_opex_detail_8' => $row_opex_detail_8
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_11_opex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _8
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _8
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
            $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_8['nama_uraian_8_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_8['nilai_opex_detail_8'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 12 opex
    // Update Nilai Level 12
    public function by_id_detail_opex_9($id_detail_opex_9)
    {
        $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);
        $data = [
            'row_opex_detail_9' => $row_opex_detail_9
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


    public function update_nilai_level_12_opex()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _9
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _9
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
            $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_opex_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_opex_detail_9['nama_uraian_9_opex'],
                'nilai_program_mata_anggran' => $row_opex_detail_9['nilai_opex_detail_9'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }

    // ========================= BATAS bua =========================
    // LEVEL 2 bua
    // Update Nilai Level 2
    public function by_id_bua($id_bua)
    {
        $cek_row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
        $data = [
            'row_bua' => $cek_row_bua
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function update_nilai_level_2_bua($id_bua)
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_I
            // _9
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _9
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII;
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_buaX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_bua = $id_bua;
            $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua['nilai_bua'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 3 bua
    // Update Nilai Level 3
    public function update_nilai_level_3_bua()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_bua_detail = $this->input->post('id_bua_detail');
            $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_bua_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_bua_detail['nilai_detail_bua'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }
    // LEVEL 4 bua
    // Update Nilai Level 4
    public function by_id_detail_bua_1($id_detail_bua_1)
    {
        $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);
        $data = [
            'row_bua_detail_1' => $row_bua_detail_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_4_bua()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XII
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
            $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_1['nama_uraian_1_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_1['nilai_bua_detail_1'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 5 bua
    // Update Nilai Level 5
    public function by_id_detail_bua_2($id_detail_bua_2)
    {
        $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);
        $data = [
            'row_bua_detail_2' => $row_bua_detail_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_5_bua()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _2
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _2
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
            $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_2['nama_uraian_2_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_2['nilai_bua_detail_2'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 6 bua
    // Update Nilai Level 6
    public function by_id_detail_bua_3($id_detail_bua_3)
    {
        $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);
        $data = [
            'row_bua_detail_3' => $row_bua_detail_3
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_6_bua()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _3
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _3
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
            $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_3['nama_uraian_3_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_3['nilai_bua_detail_3'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 7 bua
    // Update Nilai Level 7
    public function by_id_detail_bua_4($id_detail_bua_4)
    {
        $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);
        $data = [
            'row_bua_detail_4' => $row_bua_detail_4
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_7_bua()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _4
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _4
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
            $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_4['nama_uraian_4_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_4['nilai_bua_detail_4'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 8 bua
    // Update Nilai Level 8
    public function by_id_detail_bua_5($id_detail_bua_5)
    {
        $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);
        $data = [
            'row_bua_detail_5' => $row_bua_detail_5
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_8_bua()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _5
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _5
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
            $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_5['nama_uraian_5_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_5['nilai_bua_detail_5'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 9 bua
    // Update Nilai Level 9
    public function by_id_detail_bua_6($id_detail_bua_6)
    {
        $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);
        $data = [
            'row_bua_detail_6' => $row_bua_detail_6
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_9_bua()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _6
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _6
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
            $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_6['nama_uraian_6_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_6['nilai_bua_detail_6'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 10 bua
    // Update Nilai Level 10
    public function by_id_detail_bua_7($id_detail_bua_7)
    {
        $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);
        $data = [
            'row_bua_detail_7' => $row_bua_detail_7
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_10_bua()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _7
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _7
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
            $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_7['nama_uraian_7_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_7['nilai_bua_detail_7'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 11 bua
    // Update Nilai Level 11
    public function by_id_detail_bua_8($id_detail_bua_8)
    {
        $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);
        $data = [
            'row_bua_detail_8' => $row_bua_detail_8
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_11_bua()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _8
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _8
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
            $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_8['nama_uraian_8_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_8['nilai_bua_detail_8'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 12 bua
    // Update Nilai Level 12
    public function by_id_detail_bua_9($id_detail_bua_9)
    {
        $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);
        $data = [
            'row_bua_detail_9' => $row_bua_detail_9
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


    public function update_nilai_level_12_bua()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _9
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _9
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
            $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_bua_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_bua_detail_9['nama_uraian_9_bua'],
                'nilai_program_mata_anggran' => $row_bua_detail_9['nilai_bua_detail_9'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }

    // ========================= BATAS sdm =========================
    // LEVEL 2 sdm
    // Update Nilai Level 2
    public function by_id_sdm($id_sdm)
    {
        $cek_row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
        $data = [
            'row_sdm' => $cek_row_sdm
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function update_nilai_level_2_sdm($id_sdm)
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_I
            // _9
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _9
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII;
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdmX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_sdm = $id_sdm;
            $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm['nilai_sdm'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 3 sdm
    // Update Nilai Level 3
    public function update_nilai_level_3_sdm()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_sdm_detail = $this->input->post('id_sdm_detail');
            $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_sdm_detail,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail['nama_uraian'],
                'nilai_program_mata_anggran' => $row_sdm_detail['nilai_detail_sdm'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }
    // LEVEL 4 sdm
    // Update Nilai Level 4
    public function by_id_detail_sdm_1($id_detail_sdm_1)
    {
        $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
        $data = [
            'row_sdm_detail_1' => $row_sdm_detail_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_4_sdm()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XII
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
            $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_1,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_1['nama_uraian_1_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_1['nilai_sdm_detail_1'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 5 sdm
    // Update Nilai Level 5
    public function by_id_detail_sdm_2($id_detail_sdm_2)
    {
        $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
        $data = [
            'row_sdm_detail_2' => $row_sdm_detail_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_5_sdm()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _2
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _2
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
            $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_2,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_2['nama_uraian_2_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_2['nilai_sdm_detail_2'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 6 sdm
    // Update Nilai Level 6
    public function by_id_detail_sdm_3($id_detail_sdm_3)
    {
        $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
        $data = [
            'row_sdm_detail_3' => $row_sdm_detail_3
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_6_sdm()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _3
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _3
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
            $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_3,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_3['nama_uraian_3_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_3['nilai_sdm_detail_3'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 7 sdm
    // Update Nilai Level 7
    public function by_id_detail_sdm_4($id_detail_sdm_4)
    {
        $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
        $data = [
            'row_sdm_detail_4' => $row_sdm_detail_4
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_7_sdm()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _4
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _4
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
            $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_4,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_4['nama_uraian_4_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_4['nilai_sdm_detail_4'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 8 sdm
    // Update Nilai Level 8
    public function by_id_detail_sdm_5($id_detail_sdm_5)
    {
        $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
        $data = [
            'row_sdm_detail_5' => $row_sdm_detail_5
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_8_sdm()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _5
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _5
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
            $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_5,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_5['nama_uraian_5_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_5['nilai_sdm_detail_5'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 9 sdm
    // Update Nilai Level 9
    public function by_id_detail_sdm_6($id_detail_sdm_6)
    {
        $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
        $data = [
            'row_sdm_detail_6' => $row_sdm_detail_6
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_9_sdm()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _6
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _6
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
            $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_6,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_6['nama_uraian_6_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_6['nilai_sdm_detail_6'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 10 sdm
    // Update Nilai Level 10
    public function by_id_detail_sdm_7($id_detail_sdm_7)
    {
        $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
        $data = [
            'row_sdm_detail_7' => $row_sdm_detail_7
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_10_sdm()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _7
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _7
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
            $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_7,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_7['nama_uraian_7_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_7['nilai_sdm_detail_7'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }



    // LEVEL 11 sdm
    // Update Nilai Level 11
    public function by_id_detail_sdm_8($id_detail_sdm_8)
    {
        $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
        $data = [
            'row_sdm_detail_8' => $row_sdm_detail_8
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_11_sdm()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _8
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _8
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
            $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_8,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_8['nama_uraian_8_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_8['nilai_sdm_detail_8'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // LEVEL 12 sdm
    // Update Nilai Level 12
    public function by_id_detail_sdm_9($id_detail_sdm_9)
    {
        $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);
        $data = [
            'row_sdm_detail_9' => $row_sdm_detail_9
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


    public function update_nilai_level_12_sdm()
    {
        $type_add = $this->input->post('type_add');
        $id_kontrak = $this->input->post('id_kontrak');
        if ($type_add == '1') {
            // _add_II
            // _9
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_I'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '2') {
            // _add_II
            // _9
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);;
            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_II'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '3') {
            // _add_III
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_III'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '4') {
            // _add_IV
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_IV'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '5') {
            // _add_V
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_V'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '6') {
            // _add_VI
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_VI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '7') {
            // _add_VII
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_VII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '8') {
            // _add_VIII
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_VIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '9') {
            // _add_IX
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_IX'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '10') {
            // _add_X
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_X'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '11') {
            // _add_XI
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_XI'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '12') {
            // _add_XII
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_XII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type_add == '13') {
            // _add_XIII
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9_add_XIII'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            // _add_XIII
            $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
            $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);

            $data = [
                'id_kontrak' => $id_kontrak,
                'id_checking' => $id_detail_sdm_9,
                'no_add' => $type_add,
                'nama_mata_anggaran' => $row_sdm_detail_9['nama_uraian_9_sdm'],
                'nilai_program_mata_anggran' => $row_sdm_detail_9['nilai_sdm_detail_9'],
            ];
            $this->Data_kontrak_model->create_tbl_list_mata_anggran($data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    // BATAS UNIT PRICE 2
    public function by_id_unit_price_2($id_unit_price_2)
    {
        $row_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);

        $data = [
            'row_unit_price_2' => $row_unit_price_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_3_unit_price()
    {
        $id_unit_price_2 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_2' => $id_unit_price_2
        ];
        $data = [
            'satuan' => $this->input->post('satuan'),
            'kuantitas' => $this->input->post('kuantitas'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'total_harga' => $this->input->post('kuantitas') * $this->input->post('harga_satuan')
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        // end ambil
        $where = [
            'id_unit_price_1' => $id_unit_price_1
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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
    public function tambah_nama_uraian_level_3_unit_price()
    {
        $id_unit_price_2 = $this->input->post('id_unit_price');
        $row_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $row_no_urut = $row_unit_price_2['no_urut'];
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price_3($id_unit_price_2);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_unit_price_2' => $id_unit_price_2,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_unit_price_2' => $id_unit_price_2,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_unit_price_3($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_3_unit_price()
    {
        $id_unit_price_2 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_2' => $id_unit_price_2
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_induk_level_3_unit_price($id_unit_price_2)
    {
        $this->Data_kontrak_model->delete_murni_tbl_unit_price_2($id_unit_price_2);
        // batas
        $id_unit_price_1 = $this->input->post('id_unit_price_1');
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        $where = [
            'id_unit_price_1' => $id_unit_price_1,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        // batas
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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




    // BATAS UNIT PRICE 3
    public function by_id_unit_price_3($id_unit_price_3)
    {
        $row_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);

        $data = [
            'row_unit_price_3' => $row_unit_price_3
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_4_unit_price()
    {
        $id_unit_price_3 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_3' => $id_unit_price_3
        ];
        $data = [
            'satuan' => $this->input->post('satuan'),
            'kuantitas' => $this->input->post('kuantitas'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'total_harga' => $this->input->post('kuantitas') * $this->input->post('harga_satuan')
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        // batas
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        // end ambil
        $where = [
            'id_unit_price_1' => $id_unit_price_1
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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
    public function tambah_nama_uraian_level_4_unit_price()
    {
        $id_unit_price_3 = $this->input->post('id_unit_price');
        $row_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $row_no_urut = $row_unit_price_3['no_urut'];
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price_4($id_unit_price_3);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_unit_price_3' => $id_unit_price_3,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_unit_price_3' => $id_unit_price_3,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_unit_price_4($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_4_unit_price()
    {
        $id_unit_price_3 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_3' => $id_unit_price_3
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_induk_level_4_unit_price($id_unit_price_3)
    {
        $this->Data_kontrak_model->delete_murni_tbl_unit_price_3($id_unit_price_3);
        // batas
        $id_unit_price_2 = $this->input->post('id_unit_price_2');
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        $where = [
            'id_unit_price_1' => $id_unit_price_1,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        // batas
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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


    // BATAS UNIT PRICE 4
    public function by_id_unit_price_4($id_unit_price_4)
    {
        $row_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);

        $data = [
            'row_unit_price_4' => $row_unit_price_4
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_5_unit_price()
    {
        $id_unit_price_4 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_4' => $id_unit_price_4
        ];
        $data = [
            'satuan' => $this->input->post('satuan'),
            'kuantitas' => $this->input->post('kuantitas'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'total_harga' => $this->input->post('kuantitas') * $this->input->post('harga_satuan')
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        // end ambil
        $where = [
            'id_unit_price_1' => $id_unit_price_1
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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
    public function tambah_nama_uraian_level_5_unit_price()
    {
        $id_unit_price_4 = $this->input->post('id_unit_price');
        $row_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $row_no_urut = $row_unit_price_4['no_urut'];
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price_5($id_unit_price_4);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_unit_price_4' => $id_unit_price_4,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_unit_price_4' => $id_unit_price_4,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_unit_price_5($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_5_unit_price()
    {
        $id_unit_price_4 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_4' => $id_unit_price_4
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_induk_level_5_unit_price($id_unit_price_4)
    {
        $this->Data_kontrak_model->delete_murni_tbl_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $this->input->post('id_unit_price_3');
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        // batas
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        $where = [
            'id_unit_price_1' => $id_unit_price_1,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        // batas
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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


    // BATAS UNIT PRICE 5
    public function by_id_unit_price_5($id_unit_price_5)
    {
        $row_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);

        $data = [
            'row_unit_price_5' => $row_unit_price_5
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_6_unit_price()
    {
        $id_unit_price_5 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_5' => $id_unit_price_5
        ];
        $data = [
            'satuan' => $this->input->post('satuan'),
            'kuantitas' => $this->input->post('kuantitas'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'total_harga' => $this->input->post('kuantitas') * $this->input->post('harga_satuan')
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_5($where, $data);
        // batas
        $row_tbl_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);
        $id_unit_price_4 = $row_tbl_unit_price_5['id_unit_price_4'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query_reuslt_tbl_unit_price_5 = $this->db->get()->result_array();
        $total_tbl_unit_price_5 = 0;
        foreach ($query_reuslt_tbl_unit_price_5 as $key => $value_tbl_unit_price_5) {
            $total_tbl_unit_price_5 +=  $value_tbl_unit_price_5['total_harga'];
        };
        $where = [
            'id_unit_price_4' => $id_unit_price_4
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_5,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        // end ambil
        $where = [
            'id_unit_price_1' => $id_unit_price_1
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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
    public function tambah_nama_uraian_level_6_unit_price()
    {
        $id_unit_price_5 = $this->input->post('id_unit_price');
        $row_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);
        $row_no_urut = $row_unit_price_5['no_urut'];
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price_6($id_unit_price_5);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_unit_price_5' => $id_unit_price_5,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_unit_price_5' => $id_unit_price_5,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_unit_price_6($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_6_unit_price()
    {
        $id_unit_price_5 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_5' => $id_unit_price_5
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_5($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_induk_level_6_unit_price($id_unit_price_5)
    {
        $this->Data_kontrak_model->delete_murni_tbl_unit_price_5($id_unit_price_5);
        $id_unit_price_4 = $this->input->post('id_unit_price_4');
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query_reuslt_tbl_unit_price_5 = $this->db->get()->result_array();
        $total_tbl_unit_price_5 = 0;
        foreach ($query_reuslt_tbl_unit_price_5 as $key => $value_tbl_unit_price_5) {
            $total_tbl_unit_price_5 +=  $value_tbl_unit_price_5['total_harga'];
        };
        $where = [
            'id_unit_price_4' => $id_unit_price_4,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_5,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        // batas
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        $where = [
            'id_unit_price_1' => $id_unit_price_1,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        // batas
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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


    // BATAS UNIT PRICE 6
    public function by_id_unit_price_6($id_unit_price_6)
    {
        $row_unit_price_6 = $this->Data_kontrak_model->by_id_unit_price_6($id_unit_price_6);

        $data = [
            'row_unit_price_6' => $row_unit_price_6
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_7_unit_price()
    {
        $id_unit_price_6 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_6' => $id_unit_price_6
        ];
        $data = [
            'satuan' => $this->input->post('satuan'),
            'kuantitas' => $this->input->post('kuantitas'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'total_harga' => $this->input->post('kuantitas') * $this->input->post('harga_satuan')
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_6($where, $data);
        // batas
        $row_tbl_unit_price_6 = $this->Data_kontrak_model->by_id_unit_price_6($id_unit_price_6);
        $id_unit_price_5 = $row_tbl_unit_price_6['id_unit_price_5'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        $query_reuslt_tbl_unit_price_6 = $this->db->get()->result_array();
        $total_tbl_unit_price_6 = 0;
        foreach ($query_reuslt_tbl_unit_price_6 as $key => $value_tbl_unit_price_6) {
            $total_tbl_unit_price_6 +=  $value_tbl_unit_price_6['total_harga'];
        };
        $where = [
            'id_unit_price_5' => $id_unit_price_5
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_6,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_5($where, $data);
        // batas
        $row_tbl_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);
        $id_unit_price_4 = $row_tbl_unit_price_5['id_unit_price_4'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query_reuslt_tbl_unit_price_5 = $this->db->get()->result_array();
        $total_tbl_unit_price_5 = 0;
        foreach ($query_reuslt_tbl_unit_price_5 as $key => $value_tbl_unit_price_5) {
            $total_tbl_unit_price_5 +=  $value_tbl_unit_price_5['total_harga'];
        };
        $where = [
            'id_unit_price_4' => $id_unit_price_4
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_5,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        // end ambil
        $where = [
            'id_unit_price_1' => $id_unit_price_1
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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
    public function tambah_nama_uraian_level_7_unit_price()
    {
        $id_unit_price_6 = $this->input->post('id_unit_price');
        $row_unit_price_6 = $this->Data_kontrak_model->by_id_unit_price_6($id_unit_price_6);
        $row_no_urut = $row_unit_price_6['no_urut'];
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price_7($id_unit_price_6);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_unit_price_6' => $id_unit_price_6,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_unit_price_6' => $id_unit_price_6,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_unit_price_7($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_7_unit_price()
    {
        $id_unit_price_6 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_6' => $id_unit_price_6
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_6($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_induk_level_7_unit_price($id_unit_price_6)
    {
        $this->Data_kontrak_model->delete_murni_tbl_unit_price_6($id_unit_price_6);
        $id_unit_price_5 = $this->input->post('id_unit_price_5');
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        $query_reuslt_tbl_unit_price_6 = $this->db->get()->result_array();
        $total_tbl_unit_price_6 = 0;
        foreach ($query_reuslt_tbl_unit_price_6 as $key => $value_tbl_unit_price_6) {
            $total_tbl_unit_price_6 +=  $value_tbl_unit_price_6['total_harga'];
        };
        $where = [
            'id_unit_price_5' => $id_unit_price_5,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_6,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_5($where, $data);
        // batas
        $row_tbl_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);
        $id_unit_price_4 = $row_tbl_unit_price_5['id_unit_price_4'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query_reuslt_tbl_unit_price_5 = $this->db->get()->result_array();
        $total_tbl_unit_price_5 = 0;
        foreach ($query_reuslt_tbl_unit_price_5 as $key => $value_tbl_unit_price_5) {
            $total_tbl_unit_price_5 +=  $value_tbl_unit_price_5['total_harga'];
        };
        $where = [
            'id_unit_price_4' => $id_unit_price_4,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_5,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        // batas
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        $where = [
            'id_unit_price_1' => $id_unit_price_1,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        // batas
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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

    // BATAS UNIT PRICE 7
    // level_8
    public function by_id_unit_price_7($id_unit_price_7)
    {
        $row_unit_price_7 = $this->Data_kontrak_model->by_id_unit_price_7($id_unit_price_7);

        $data = [
            'row_unit_price_7' => $row_unit_price_7
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_8_unit_price()
    {
        $id_unit_price_7 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_7' => $id_unit_price_7
        ];
        $data = [
            'satuan' => $this->input->post('satuan'),
            'kuantitas' => $this->input->post('kuantitas'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'total_harga' => $this->input->post('kuantitas') * $this->input->post('harga_satuan')
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_7($where, $data);
        // batas
        $row_tbl_unit_price_7 = $this->Data_kontrak_model->by_id_unit_price_7($id_unit_price_7);
        $id_unit_price_6 = $row_tbl_unit_price_7['id_unit_price_6'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_7');
        $this->db->where('tbl_unit_price_7.id_unit_price_6', $id_unit_price_6);
        $query_reuslt_tbl_unit_price_7 = $this->db->get()->result_array();
        $total_tbl_unit_price_7 = 0;
        foreach ($query_reuslt_tbl_unit_price_7 as $key => $value_tbl_unit_price_7) {
            $total_tbl_unit_price_7 +=  $value_tbl_unit_price_7['total_harga'];
        };
        $where = [
            'id_unit_price_6' => $id_unit_price_6
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_7,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_6($where, $data);
        // batas
        $row_tbl_unit_price_6 = $this->Data_kontrak_model->by_id_unit_price_6($id_unit_price_6);
        $id_unit_price_5 = $row_tbl_unit_price_6['id_unit_price_5'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        $query_reuslt_tbl_unit_price_6 = $this->db->get()->result_array();
        $total_tbl_unit_price_6 = 0;
        foreach ($query_reuslt_tbl_unit_price_6 as $key => $value_tbl_unit_price_6) {
            $total_tbl_unit_price_6 +=  $value_tbl_unit_price_6['total_harga'];
        };
        $where = [
            'id_unit_price_5' => $id_unit_price_5
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_6,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_5($where, $data);
        // batas
        $row_tbl_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);
        $id_unit_price_4 = $row_tbl_unit_price_5['id_unit_price_4'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query_reuslt_tbl_unit_price_5 = $this->db->get()->result_array();
        $total_tbl_unit_price_5 = 0;
        foreach ($query_reuslt_tbl_unit_price_5 as $key => $value_tbl_unit_price_5) {
            $total_tbl_unit_price_5 +=  $value_tbl_unit_price_5['total_harga'];
        };
        $where = [
            'id_unit_price_4' => $id_unit_price_4
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_5,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        // end ambil
        $where = [
            'id_unit_price_1' => $id_unit_price_1
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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
    public function tambah_nama_uraian_level_8_unit_price()
    {
        $id_unit_price_7 = $this->input->post('id_unit_price');
        $row_unit_price_7 = $this->Data_kontrak_model->by_id_unit_price_7($id_unit_price_7);
        $row_no_urut = $row_unit_price_7['no_urut'];
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price_8($id_unit_price_7);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_unit_price_7' => $id_unit_price_7,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_unit_price_7' => $id_unit_price_7,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_unit_price_8($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_8_unit_price()
    {
        $id_unit_price_7 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_7' => $id_unit_price_7
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_7($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_induk_level_8_unit_price($id_unit_price_7)
    {
        $this->Data_kontrak_model->delete_murni_tbl_unit_price_7($id_unit_price_7);
        $id_unit_price_6 = $this->input->post('id_unit_price_6');
        $this->db->select('*');
        $this->db->from('tbl_unit_price_7');
        $this->db->where('tbl_unit_price_7.id_unit_price_6', $id_unit_price_6);
        $query_reuslt_tbl_unit_price_7 = $this->db->get()->result_array();
        $total_tbl_unit_price_7 = 0;
        foreach ($query_reuslt_tbl_unit_price_7 as $key => $value_tbl_unit_price_7) {
            $total_tbl_unit_price_7 +=  $value_tbl_unit_price_7['total_harga'];
        };
        $where = [
            'id_unit_price_6' => $id_unit_price_6,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_7,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_6($where, $data);
        // batas
        $row_tbl_unit_price_6 = $this->Data_kontrak_model->by_id_unit_price_6($id_unit_price_6);
        $id_unit_price_5 = $row_tbl_unit_price_6['id_unit_price_5'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        $query_reuslt_tbl_unit_price_6 = $this->db->get()->result_array();
        $total_tbl_unit_price_6 = 0;
        foreach ($query_reuslt_tbl_unit_price_6 as $key => $value_tbl_unit_price_6) {
            $total_tbl_unit_price_6 +=  $value_tbl_unit_price_6['total_harga'];
        };
        $where = [
            'id_unit_price_5' => $id_unit_price_5,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_6,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_5($where, $data);
        // batas
        $row_tbl_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);
        $id_unit_price_4 = $row_tbl_unit_price_5['id_unit_price_4'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query_reuslt_tbl_unit_price_5 = $this->db->get()->result_array();
        $total_tbl_unit_price_5 = 0;
        foreach ($query_reuslt_tbl_unit_price_5 as $key => $value_tbl_unit_price_5) {
            $total_tbl_unit_price_5 +=  $value_tbl_unit_price_5['total_harga'];
        };
        $where = [
            'id_unit_price_4' => $id_unit_price_4,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_5,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        // batas
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        $where = [
            'id_unit_price_1' => $id_unit_price_1,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        // batas
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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


    // BATAS UNIT PRICE 8
    // level_9
    public function by_id_unit_price_8($id_unit_price_8)
    {
        $row_unit_price_8 = $this->Data_kontrak_model->by_id_unit_price_8($id_unit_price_8);

        $data = [
            'row_unit_price_8' => $row_unit_price_8
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_9_unit_price()
    {
        $id_unit_price_8 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_8' => $id_unit_price_8
        ];
        $data = [
            'satuan' => $this->input->post('satuan'),
            'kuantitas' => $this->input->post('kuantitas'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'total_harga' => $this->input->post('kuantitas') * $this->input->post('harga_satuan')
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_8($where, $data);
        // batas
        $row_tbl_unit_price_8 = $this->Data_kontrak_model->by_id_unit_price_8($id_unit_price_8);
        $id_unit_price_7 = $row_tbl_unit_price_8['id_unit_price_7'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_8');
        $this->db->where('tbl_unit_price_8.id_unit_price_7', $id_unit_price_7);
        $query_reuslt_tbl_unit_price_8 = $this->db->get()->result_array();
        $total_tbl_unit_price_8 = 0;
        foreach ($query_reuslt_tbl_unit_price_8 as $key => $value_tbl_unit_price_8) {
            $total_tbl_unit_price_8 +=  $value_tbl_unit_price_8['total_harga'];
        };
        $where = [
            'id_unit_price_7' => $id_unit_price_7
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_8,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_7($where, $data);
        // batas
        $row_tbl_unit_price_7 = $this->Data_kontrak_model->by_id_unit_price_7($id_unit_price_7);
        $id_unit_price_6 = $row_tbl_unit_price_7['id_unit_price_6'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_7');
        $this->db->where('tbl_unit_price_7.id_unit_price_6', $id_unit_price_6);
        $query_reuslt_tbl_unit_price_7 = $this->db->get()->result_array();
        $total_tbl_unit_price_7 = 0;
        foreach ($query_reuslt_tbl_unit_price_7 as $key => $value_tbl_unit_price_7) {
            $total_tbl_unit_price_7 +=  $value_tbl_unit_price_7['total_harga'];
        };
        $where = [
            'id_unit_price_6' => $id_unit_price_6
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_7,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_6($where, $data);
        // batas
        $row_tbl_unit_price_6 = $this->Data_kontrak_model->by_id_unit_price_6($id_unit_price_6);
        $id_unit_price_5 = $row_tbl_unit_price_6['id_unit_price_5'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        $query_reuslt_tbl_unit_price_6 = $this->db->get()->result_array();
        $total_tbl_unit_price_6 = 0;
        foreach ($query_reuslt_tbl_unit_price_6 as $key => $value_tbl_unit_price_6) {
            $total_tbl_unit_price_6 +=  $value_tbl_unit_price_6['total_harga'];
        };
        $where = [
            'id_unit_price_5' => $id_unit_price_5
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_6,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_5($where, $data);
        // batas
        $row_tbl_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);
        $id_unit_price_4 = $row_tbl_unit_price_5['id_unit_price_4'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query_reuslt_tbl_unit_price_5 = $this->db->get()->result_array();
        $total_tbl_unit_price_5 = 0;
        foreach ($query_reuslt_tbl_unit_price_5 as $key => $value_tbl_unit_price_5) {
            $total_tbl_unit_price_5 +=  $value_tbl_unit_price_5['total_harga'];
        };
        $where = [
            'id_unit_price_4' => $id_unit_price_4
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_5,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        // end ambil
        $where = [
            'id_unit_price_1' => $id_unit_price_1
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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
    public function tambah_nama_uraian_level_9_unit_price()
    {
        $id_unit_price_8 = $this->input->post('id_unit_price');
        $row_unit_price_8 = $this->Data_kontrak_model->by_id_unit_price_8($id_unit_price_8);
        $row_no_urut = $row_unit_price_8['no_urut'];
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price_9($id_unit_price_8);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_unit_price_8' => $id_unit_price_8,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_unit_price_8' => $id_unit_price_8,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_unit_price_9($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_9_unit_price()
    {
        $id_unit_price_8 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_8' => $id_unit_price_8
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_8($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_induk_level_9_unit_price($id_unit_price_8)
    {
        $this->Data_kontrak_model->delete_murni_tbl_unit_price_8($id_unit_price_8);
        $id_unit_price_7 = $this->input->post('id_unit_price_7');
        $this->db->select('*');
        $this->db->from('tbl_unit_price_8');
        $this->db->where('tbl_unit_price_8.id_unit_price_7', $id_unit_price_7);
        $query_reuslt_tbl_unit_price_8 = $this->db->get()->result_array();
        $total_tbl_unit_price_8 = 0;
        foreach ($query_reuslt_tbl_unit_price_8 as $key => $value_tbl_unit_price_8) {
            $total_tbl_unit_price_8 +=  $value_tbl_unit_price_8['total_harga'];
        };
        $where = [
            'id_unit_price_7' => $id_unit_price_7,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_8,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_7($where, $data);
        // batas
        $row_tbl_unit_price_7 = $this->Data_kontrak_model->by_id_unit_price_7($id_unit_price_7);
        $id_unit_price_6 = $row_tbl_unit_price_7['id_unit_price_6'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_7');
        $this->db->where('tbl_unit_price_7.id_unit_price_6', $id_unit_price_6);
        $query_reuslt_tbl_unit_price_7 = $this->db->get()->result_array();
        $total_tbl_unit_price_7 = 0;
        foreach ($query_reuslt_tbl_unit_price_7 as $key => $value_tbl_unit_price_7) {
            $total_tbl_unit_price_7 +=  $value_tbl_unit_price_7['total_harga'];
        };
        $where = [
            'id_unit_price_6' => $id_unit_price_6,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_7,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_6($where, $data);
        // batas
        $row_tbl_unit_price_6 = $this->Data_kontrak_model->by_id_unit_price_6($id_unit_price_6);
        $id_unit_price_5 = $row_tbl_unit_price_6['id_unit_price_5'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        $query_reuslt_tbl_unit_price_6 = $this->db->get()->result_array();
        $total_tbl_unit_price_6 = 0;
        foreach ($query_reuslt_tbl_unit_price_6 as $key => $value_tbl_unit_price_6) {
            $total_tbl_unit_price_6 +=  $value_tbl_unit_price_6['total_harga'];
        };
        $where = [
            'id_unit_price_5' => $id_unit_price_5,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_6,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_5($where, $data);
        // batas
        $row_tbl_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);
        $id_unit_price_4 = $row_tbl_unit_price_5['id_unit_price_4'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query_reuslt_tbl_unit_price_5 = $this->db->get()->result_array();
        $total_tbl_unit_price_5 = 0;
        foreach ($query_reuslt_tbl_unit_price_5 as $key => $value_tbl_unit_price_5) {
            $total_tbl_unit_price_5 +=  $value_tbl_unit_price_5['total_harga'];
        };
        $where = [
            'id_unit_price_4' => $id_unit_price_4,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_5,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        // batas
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        $where = [
            'id_unit_price_1' => $id_unit_price_1,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        // batas
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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



    // BATAS UNIT PRICE 9
    // level_10
    public function by_id_unit_price_9($id_unit_price_9)
    {
        $row_unit_price_9 = $this->Data_kontrak_model->by_id_unit_price_9($id_unit_price_9);

        $data = [
            'row_unit_price_9' => $row_unit_price_9
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_10_unit_price()
    {
        $id_unit_price_9 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_9' => $id_unit_price_9
        ];
        $data = [
            'satuan' => $this->input->post('satuan'),
            'kuantitas' => $this->input->post('kuantitas'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'total_harga' => $this->input->post('kuantitas') * $this->input->post('harga_satuan')
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_9($where, $data);
        // batas
        $row_tbl_unit_price_9 = $this->Data_kontrak_model->by_id_unit_price_9($id_unit_price_9);
        $id_unit_price_8 = $row_tbl_unit_price_9['id_unit_price_8'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_9');
        $this->db->where('tbl_unit_price_9.id_unit_price_8', $id_unit_price_8);
        $query_reuslt_tbl_unit_price_9 = $this->db->get()->result_array();
        $total_tbl_unit_price_9 = 0;
        foreach ($query_reuslt_tbl_unit_price_9 as $key => $value_tbl_unit_price_9) {
            $total_tbl_unit_price_9 +=  $value_tbl_unit_price_9['total_harga'];
        };
        $where = [
            'id_unit_price_8' => $id_unit_price_8
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_9,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_8($where, $data);
        // batas
        $row_tbl_unit_price_8 = $this->Data_kontrak_model->by_id_unit_price_8($id_unit_price_8);
        $id_unit_price_7 = $row_tbl_unit_price_8['id_unit_price_7'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_8');
        $this->db->where('tbl_unit_price_8.id_unit_price_7', $id_unit_price_7);
        $query_reuslt_tbl_unit_price_8 = $this->db->get()->result_array();
        $total_tbl_unit_price_8 = 0;
        foreach ($query_reuslt_tbl_unit_price_8 as $key => $value_tbl_unit_price_8) {
            $total_tbl_unit_price_8 +=  $value_tbl_unit_price_8['total_harga'];
        };
        $where = [
            'id_unit_price_7' => $id_unit_price_7
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_8,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_7($where, $data);
        // batas
        $row_tbl_unit_price_7 = $this->Data_kontrak_model->by_id_unit_price_7($id_unit_price_7);
        $id_unit_price_6 = $row_tbl_unit_price_7['id_unit_price_6'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_7');
        $this->db->where('tbl_unit_price_7.id_unit_price_6', $id_unit_price_6);
        $query_reuslt_tbl_unit_price_7 = $this->db->get()->result_array();
        $total_tbl_unit_price_7 = 0;
        foreach ($query_reuslt_tbl_unit_price_7 as $key => $value_tbl_unit_price_7) {
            $total_tbl_unit_price_7 +=  $value_tbl_unit_price_7['total_harga'];
        };
        $where = [
            'id_unit_price_6' => $id_unit_price_6
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_7,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_6($where, $data);
        // batas
        $row_tbl_unit_price_6 = $this->Data_kontrak_model->by_id_unit_price_6($id_unit_price_6);
        $id_unit_price_5 = $row_tbl_unit_price_6['id_unit_price_5'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        $query_reuslt_tbl_unit_price_6 = $this->db->get()->result_array();
        $total_tbl_unit_price_6 = 0;
        foreach ($query_reuslt_tbl_unit_price_6 as $key => $value_tbl_unit_price_6) {
            $total_tbl_unit_price_6 +=  $value_tbl_unit_price_6['total_harga'];
        };
        $where = [
            'id_unit_price_5' => $id_unit_price_5
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_6,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_5($where, $data);
        // batas
        $row_tbl_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);
        $id_unit_price_4 = $row_tbl_unit_price_5['id_unit_price_4'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query_reuslt_tbl_unit_price_5 = $this->db->get()->result_array();
        $total_tbl_unit_price_5 = 0;
        foreach ($query_reuslt_tbl_unit_price_5 as $key => $value_tbl_unit_price_5) {
            $total_tbl_unit_price_5 +=  $value_tbl_unit_price_5['total_harga'];
        };
        $where = [
            'id_unit_price_4' => $id_unit_price_4
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_5,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        // end ambil
        $where = [
            'id_unit_price_1' => $id_unit_price_1
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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
    public function tambah_nama_uraian_level_10_unit_price()
    {
        $id_unit_price_9 = $this->input->post('id_unit_price');
        $row_unit_price_9 = $this->Data_kontrak_model->by_id_unit_price_9($id_unit_price_9);
        $row_no_urut = $row_unit_price_9['no_urut'];
        $buat_no_urut = $this->Data_kontrak_model->cek_no_urut_tbl_unit_price_10($id_unit_price_9);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_unit_price_9' => $id_unit_price_9,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_unit_price_9' => $id_unit_price_9,
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_unit_price_10($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_10_unit_price()
    {
        $id_unit_price_9 = $this->input->post('id_unit_price');
        $where = [
            'id_unit_price_9' => $id_unit_price_9
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_9($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_induk_level_10_unit_price($id_unit_price_9)
    {
        $this->Data_kontrak_model->delete_murni_tbl_unit_price_9($id_unit_price_9);
        $id_unit_price_8 = $this->input->post('id_unit_price_8');
        $this->db->select('*');
        $this->db->from('tbl_unit_price_9');
        $this->db->where('tbl_unit_price_9.id_unit_price_8', $id_unit_price_8);
        $query_reuslt_tbl_unit_price_9 = $this->db->get()->result_array();
        $total_tbl_unit_price_9 = 0;
        foreach ($query_reuslt_tbl_unit_price_9 as $key => $value_tbl_unit_price_9) {
            $total_tbl_unit_price_9 +=  $value_tbl_unit_price_9['total_harga'];
        };
        $where = [
            'id_unit_price_8' => $id_unit_price_8,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_9,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_8($where, $data);
        // batas
        $row_tbl_unit_price_8 = $this->Data_kontrak_model->by_id_unit_price_8($id_unit_price_8);
        $id_unit_price_7 = $row_tbl_unit_price_8['id_unit_price_7'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_8');
        $this->db->where('tbl_unit_price_8.id_unit_price_7', $id_unit_price_7);
        $query_reuslt_tbl_unit_price_8 = $this->db->get()->result_array();
        $total_tbl_unit_price_8 = 0;
        foreach ($query_reuslt_tbl_unit_price_8 as $key => $value_tbl_unit_price_8) {
            $total_tbl_unit_price_8 +=  $value_tbl_unit_price_8['total_harga'];
        };
        $where = [
            'id_unit_price_7' => $id_unit_price_7,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_8,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_7($where, $data);
        // batas
        $row_tbl_unit_price_7 = $this->Data_kontrak_model->by_id_unit_price_7($id_unit_price_7);
        $id_unit_price_6 = $row_tbl_unit_price_7['id_unit_price_6'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_7');
        $this->db->where('tbl_unit_price_7.id_unit_price_6', $id_unit_price_6);
        $query_reuslt_tbl_unit_price_7 = $this->db->get()->result_array();
        $total_tbl_unit_price_7 = 0;
        foreach ($query_reuslt_tbl_unit_price_7 as $key => $value_tbl_unit_price_7) {
            $total_tbl_unit_price_7 +=  $value_tbl_unit_price_7['total_harga'];
        };
        $where = [
            'id_unit_price_6' => $id_unit_price_6,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_7,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_6($where, $data);
        // batas
        $row_tbl_unit_price_6 = $this->Data_kontrak_model->by_id_unit_price_6($id_unit_price_6);
        $id_unit_price_5 = $row_tbl_unit_price_6['id_unit_price_5'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        $query_reuslt_tbl_unit_price_6 = $this->db->get()->result_array();
        $total_tbl_unit_price_6 = 0;
        foreach ($query_reuslt_tbl_unit_price_6 as $key => $value_tbl_unit_price_6) {
            $total_tbl_unit_price_6 +=  $value_tbl_unit_price_6['total_harga'];
        };
        $where = [
            'id_unit_price_5' => $id_unit_price_5,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_6,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_5($where, $data);
        // batas
        $row_tbl_unit_price_5 = $this->Data_kontrak_model->by_id_unit_price_5($id_unit_price_5);
        $id_unit_price_4 = $row_tbl_unit_price_5['id_unit_price_4'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query_reuslt_tbl_unit_price_5 = $this->db->get()->result_array();
        $total_tbl_unit_price_5 = 0;
        foreach ($query_reuslt_tbl_unit_price_5 as $key => $value_tbl_unit_price_5) {
            $total_tbl_unit_price_5 +=  $value_tbl_unit_price_5['total_harga'];
        };
        $where = [
            'id_unit_price_4' => $id_unit_price_4,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_5,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_4($where, $data);
        // batas
        $row_tbl_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
        $id_unit_price_3 = $row_tbl_unit_price_4['id_unit_price_3'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query_reuslt_tbl_unit_price_4 = $this->db->get()->result_array();
        $total_tbl_unit_price_4 = 0;
        foreach ($query_reuslt_tbl_unit_price_4 as $key => $value_tbl_unit_price_4) {
            $total_tbl_unit_price_4 +=  $value_tbl_unit_price_4['total_harga'];
        };
        $where = [
            'id_unit_price_3' => $id_unit_price_3,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_4,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_3($where, $data);
        // batas
        $row_tbl_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
        $id_unit_price_2 = $row_tbl_unit_price_3['id_unit_price_2'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query_reuslt_tbl_unit_price_3 = $this->db->get()->result_array();
        $total_tbl_unit_price_3 = 0;
        foreach ($query_reuslt_tbl_unit_price_3 as $key => $value_tbl_unit_price_3) {
            $total_tbl_unit_price_3 +=  $value_tbl_unit_price_3['total_harga'];
        };
        $where = [
            'id_unit_price_2' => $id_unit_price_2,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_3,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_2($where, $data);
        // batas
        $row_tbl_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_tbl_unit_price_2['id_unit_price_1'];
        // batas
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query_reuslt_tbl_unit_price_2 = $this->db->get()->result_array();
        $total_tbl_unit_price_2 = 0;
        foreach ($query_reuslt_tbl_unit_price_2 as $key => $value_tbl_unit_price_2) {
            $total_tbl_unit_price_2 +=  $value_tbl_unit_price_2['total_harga'];
        };
        $where = [
            'id_unit_price_1' => $id_unit_price_1,
        ];
        $data = [
            'total_harga' => $total_tbl_unit_price_2,
        ];
        $this->Data_kontrak_model->update_ke_tbl_unit_price_1($where, $data);
        // batas
        $row_tbl_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
        $id_unit_price = $row_tbl_unit_price_1['id_unit_price'];
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query_reuslt_tbl_unit_price_1 = $this->db->get()->result_array();
        $total_tbl_unit_price_1 = 0;
        foreach ($query_reuslt_tbl_unit_price_1 as $key => $value_tbl_unit_price_1) {
            $total_tbl_unit_price_1 +=  $value_tbl_unit_price_1['total_harga'];
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

    public function update_nilai_kontrak($id_kontrak)
    {
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'nilai_kontrak_awal' => $this->input->post('grand_total'),
        ];
        $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function get_list_mata_angaran($id_kontrak)
    {
        $resultss = $this->Data_kontrak_model->getdatatable_list_mata_anggran($id_kontrak);
        $data = [];
        $no = $_POST['start'];
        foreach ($resultss as $rs) {
            $row = array();
            $row[] = ++$no;
            $row[] = $rs->nama_mata_anggaran;
            $row[] = $rs->nilai_program_mata_anggran;
            $row[] = '<a href="javascript:;" class="btn btn-danger btn-sm" onClick="byid_mata_anggran(' . "'" . $rs->id_list_mata_anggaran . "','hapus'" . ')"><i class="fas fa fa-times"></i> batal</a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_kontrak_model->count_all_data_mata_anggran($id_kontrak),
            "recordsFiltered" => $this->Data_kontrak_model->count_filtered_data_mata_anggran($id_kontrak),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }


    public function buat_administrasi_penyedia($id_kontrak)
    {
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $data_kontrak = [
            'nama_pekerjaan_program_mata_anggaran' => $this->input->post('nama_pekerjaan_program'),
            'id_kontrak' => $id_kontrak,
            'id_departemen' => $id_departemen,
            'id_area' => $id_area,
            'id_sub_area' => $id_sub_area,
        ];
        $this->Data_kontrak_model->create_detail_program_penyedia($data_kontrak);
        $id_detail_program_penyedia_jasa = $this->db->insert_id();

        $mata_anggran = $this->Data_kontrak_model->get_all_list_mata_anggran($id_kontrak);
        foreach ($mata_anggran as $key => $value) {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'nama_program_mata_anggaran' => $value['nama_mata_anggaran'],
                'nilai_program_mata_anggran' => $value['nilai_program_mata_anggran'],
                'id_checking' => $value['id_checking'],
                'no_add_checking' => $value['no_add'],
            ];
            $this->Data_kontrak_model->add_sub_program($data);
        }

        $this->Data_kontrak_model->delete_tbl_list_mata_anggran($id_kontrak);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function buat_mata_anggran_baru_addendum($id_kontrak)
    {
        $mata_anggran = $this->Data_kontrak_model->get_all_list_mata_anggran($id_kontrak);
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $type_addendum = $this->input->post('type_addendum');
        foreach ($mata_anggran as $key => $value) {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'nama_program_mata_anggaran' => $value['nama_mata_anggaran'],
                'nilai_program_mata_anggran' => $value['nilai_program_mata_anggran'],
                'id_checking' => $value['id_checking'],
                'no_add_checking' => $value['no_add'],
                'status_mata_anggaran_addendum' => 1,
                'addendum_ke' => $type_addendum
            ];
            $this->Data_kontrak_model->add_sub_program($data);
            $data_baru_mata_anggaran = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'id_detail_sub_program_penyedia_jasa' => $this->db->insert_id(),
            ];
            $this->Data_kontrak_model->create_tbl_hps_penyedia_kontrak_1($data_baru_mata_anggaran);
        }

        foreach ($mata_anggran as $key => $value) {
            
        }
        $this->Data_kontrak_model->delete_tbl_list_mata_anggran($id_kontrak);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }



    public function hapus_list_anggaran_all($id_checking)
    {
        $cek_add = $this->input->post('add_cek');
        $this->Data_kontrak_model->delete_list_anggaran($id_checking, $cek_add);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
}
