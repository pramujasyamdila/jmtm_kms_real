<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
class Data_kontrak extends CI_Controller
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
        $this->load->view('admin/kontrak_management/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management/ajax');
    }

    function input_total()
    {
        $sub_total = $this->input->post('sub_total');
        $ppn = $this->input->post('ppn');
        $total_ppn = $this->input->post('total');
        $setelah_ppn = $this->input->post('grand_total');

        $id_kontrak = $this->input->post('id_kontrak');

        $data = [
            'sub_total' => $sub_total,
            'ppn' => $ppn,
            'total_ppn' => $total_ppn,
            'setelah_ppn' => $setelah_ppn
        ];

        $where = [
            'id_kontrak' =>  $id_kontrak
        ];

        $output = [
            'sub_total' => 'Rp. ' . number_format($sub_total, 2, ',', '.'),
            'ppn' => 'Rp. ' .  number_format($ppn, 2, ',', '.'),
            'total_ppn' => 'Rp. ' . number_format($total_ppn, 2, ',', '.'),
            'setelah_ppn' => 'Rp. ' . number_format($setelah_ppn, 2, ',', '.'),
        ];
        $this->Data_kontrak_model->update($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
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
                         <a  href="javascript:;" class=" btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','kelola_level_unit_price'" . ')"><i class="fa fa-file-contract"></i> Kelola Level</a>
                         <a  href="javascript:;" class=" btn btn-danger btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','hapus'" . ')"><i class="fas fa fa-trash"></i> Hapus</a>
                         </div>
                         </div>';
                } else {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a "href="javascript:;" class=" btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','kelola_level_unit_price'" . ')"><i class="fa fa-file-contract"></i> Kelola Level</a>
                         <a  href="javascript:;" class=" btn btn-danger btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','hapus'" . ')"><i class="fas fa fa-trash"></i> Hapus</a>
                         </div>
                         </div>';
                }
            } else {

                if ($rs->id_kontrak == 1) {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a  href="javascript:;" class=" btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','kelola_level'" . ')"><i class="fa fa-file-contract"></i> Kelola Level</a>
                         <a  href="javascript:;" class=" btn btn-danger btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','hapus'" . ')"><i class="fas fa fa-trash"></i> Hapus</a>
                         </div>
                         </div>';
                } else {
                    $row[] = '<div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                            Aksi
                         </button>
                         <div class="dropdown-menu">
                         <a  href="javascript:;" class=" btn btn-warning btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','kelola_level'" . ')"><i class="fa fa-file-contract"></i> Kelola Level</a>
                         <a  href="javascript:;" class=" btn btn-danger btn-sm" onClick="byid(' . "'" . $rs->id_kontrak . "','hapus'" . ')"><i class="fas fa fa-trash"></i> Hapus</a>
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

    function delete_kontrak($id)
    {
        $where = [
            'id_kontrak' => $id,
        ];
        $data = [
            'sts_delete' => 1,
        ];
        $this->db->update('mst_kontrak', $data, $where);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
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
        $get_pegawai = $this->Auth_model->get_pegawai();
        if ($cek_no_kontrak_sudah_ada) {
            $this->output->set_content_type('application/json')->set_output(json_encode('sudah_ada'));
        } else {
            if ($this->input->post('jenis_kontrak') == 'Unit Price') {
                $data_kontrak = [
                    'nama_kontrak' => $this->input->post('nama_kontrak'),
                    'tahun_kontrak' =>  $this->input->post('tahun_kontrak'),
                    'id_departemen' => $this->input->post('id_departemen2'),
                    'id_area' => $this->input->post('id_area2'),
                    'id_sub_area' => $this->input->post('id_sub_area2'),
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
                    'id_departemen' => $this->input->post('id_departemen2'),
                    'id_area' => $this->input->post('id_area2'),
                    'id_sub_area' => $this->input->post('id_sub_area2'),
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
                    $data = [
                        'no_adendum' => 'kontrak_awal',
                        'tanggal' => $this->input->post('tanggal_adendum_post_kontrak'),
                        'id_kontrak' => $id_kontrak,
                    ];
                    $this->Data_kontrak_model->add_addendum($data);
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

        $this->load->view('template/head_ui', $data);
        $this->load->view('template/sidebar_ui', $data);
        $this->load->view('admin/kontrak_management/detail_kontrak', $data);
        $this->load->view('template/footer_ui');
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
        $get_pegawai = $this->Auth_model->get_pegawai();
        $data['id_departemen'] = $get_pegawai['id_departemen'];
        $data['id_area'] = $get_pegawai['id_area'];
        $data['id_sub_area'] = $get_pegawai['id_sub_area'];
        $this->load->view('template_stisla/header', $data);
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/kontrak_management/kelola_level', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management/ajax_kelola_level', $data);
    }


    public function kelola_level_unit_price($id_kontrak)
    {
        $data['title'] = 'Dashboard';
        $data['row_kontrak'] = $this->Data_kontrak_model->get_by_id_join($id_kontrak);
        $this->load->view('template_stisla/header', $data);
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('admin/kontrak_management/kelola_level_unit_price', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/kontrak_management/ajax_kelola_level_unit_price', $data);
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

    // BUA BATAS
    public function by_id_bua($id_bua)
    {
        $cek_row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
        $data = [
            'row_bua' => $cek_row_bua
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    // SDM BATAS
    public function by_id_sdm($id_sdm)
    {
        $cek_row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
        $data = [
            'row_sdm' => $cek_row_sdm
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
        $id_opex = $cek_row_opex_detail['id_opex'];
        $result_opex = $this->Data_kontrak_model->result_detail_opex_by_id_opex($id_opex);
        $data = [
            'row_opex_detail' => $cek_row_opex_detail,
            'result_opex' => $result_opex
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
        $this->load->view('template/head_ui');
        $this->load->view('template/sidebar_ui', $data);
        $this->load->view('admin/addendum/index', $data);
        $this->load->view('template/footer_ui');
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
        $data_ke_logic['id_kontrak'] = $this->input->post('id_kontrak_adendum');
        $data_ke_logic['copy_add'] = $this->input->post('copy_add');
        if ($cek_no_add == 'kontrak_awal') {
            $data = [
                'no_adendum' => $this->input->post('no_adendum'),
                'tanggal' => $this->input->post('tanggal'),
                'id_kontrak' => $this->input->post('id_kontrak_adendum'),
            ];
            $this->Data_kontrak_model->add_addendum($data);
            $this->load->view('tidak_ada_add/add_kontrak_awal', $data_ke_logic);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
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
                    $this->load->view('cek_add/copy_add_XIV', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 15) {
                    $this->load->view('cek_add/copy_add_XV', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 16) {
                    $this->load->view('cek_add/copy_add_XVI', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 17) {
                    $this->load->view('cek_add/copy_add_XVII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 18) {
                    $this->load->view('cek_add/copy_add_XVIII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 19) {
                    $this->load->view('cek_add/copy_add_XIX', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 20) {
                    $this->load->view('cek_add/copy_add_XX', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 21) {
                    $this->load->view('cek_add/copy_add_XXI', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 22) {
                    $this->load->view('cek_add/copy_add_XXII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 23) {
                    $this->load->view('cek_add/copy_add_XXIII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 24) {
                    $this->load->view('cek_add/copy_add_XXIV', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 25) {
                    $this->load->view('cek_add/copy_add_XXV', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 26) {
                    $this->load->view('cek_add/copy_add_XXVI', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 27) {
                    $this->load->view('cek_add/copy_add_XXVII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 28) {
                    $this->load->view('cek_add/copy_add_XXVIII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 29) {
                    $this->load->view('cek_add/copy_add_XXIX', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 30) {
                    $this->load->view('cek_add/copy_add_XXX', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                }
            } else {
                if ($cek_no_add == 1) {
                    $this->load->view('tidak_ada_add/add_I', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 2) {
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
                } else if ($cek_no_add == 14) {
                    $this->load->view('tidak_ada_add/add_XIV', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 15) {
                    $this->load->view('tidak_ada_add/add_XV', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 16) {
                    $this->load->view('tidak_ada_add/add_XVI', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 17) {
                    $this->load->view('tidak_ada_add/add_XVII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 18) {
                    $this->load->view('tidak_ada_add/add_XVIII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 19) {
                    $this->load->view('tidak_ada_add/add_XIX', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 20) {
                    $this->load->view('tidak_ada_add/add_XX', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 21) {
                    $this->load->view('tidak_ada_add/add_XXI', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 22) {
                    $this->load->view('tidak_ada_add/add_XXII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 23) {
                    $this->load->view('tidak_ada_add/add_XXIII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 24) {
                    $this->load->view('tidak_ada_add/add_XXIV', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 25) {
                    $this->load->view('tidak_ada_add/add_XXV', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 26) {
                    $this->load->view('tidak_ada_add/add_XXVI', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 27) {
                    $this->load->view('tidak_ada_add/add_XXVII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 28) {
                    $this->load->view('tidak_ada_add/add_XXVIII', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 29) {
                    $this->load->view('tidak_ada_add/add_XXIX', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else if ($cek_no_add == 30) {
                    $this->load->view('tidak_ada_add/add_XXX', $data_ke_logic);
                    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
                } else { }
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

    // ========================= BATASSS CAPEX =========================

    // LEVEL 2 CAPEX
    // Update Nilai Level 2
    public function update_nilai_level_2_capex($id_capex)
    {
        $type_add = $this->input->post('type_add');
        $data['id_capex'] = $id_capex;
        $data['type_add'] = $type_add;
        $this->load->view('capex/nilai_level_2', $data);
    }
    // Tambah Nilai Level 2
    public function tambah_nama_uraian_level_2_capex($id_capex)
    {
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_capex_detail($id_capex);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => 1.1 . '.' . $count,
                'id_capex' => $id_capex,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => 1.1 . '.' . $count,
                'id_capex' => $id_capex,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 3 CAPEX
    // Update Nilai Level 3
    public function update_nilai_level_3_capex()
    {
        $this->load->view('capex/nilai_level_3');
    }
    // Tambah Nilai Level 3
    public function tambah_nama_uraian_level_3_capex()
    {
        $id_capex_detail = $this->input->post('id_capex_detail');
        $row_capex_detail =  $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
        $row_no_urut = $row_capex_detail['no_urut'];

        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_capex_detail_1($id_capex_detail);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_1_capex' => $this->input->post('nama_uraian'),
                'no_urut_1_capex' => $row_no_urut . '.' . $count,
                'id_capex_detail' => $id_capex_detail,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_1_capex' => $this->input->post('nama_uraian'),
                'no_urut_1_capex' => $row_no_urut . '.' . $count,
                'id_capex_detail' => $id_capex_detail,
                'display_order' => $count
            ];
        }


        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_1($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_3_capex()
    {
        $id_capex_detail = $this->input->post('id_capex_detail');
        $where = [
            'id_capex_detail' => $id_capex_detail
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_3_capex($id_capex_detail)
    {
        $this->Data_kontrak_model->delete_tbl_capex_detail($id_capex_detail);
        $data['id_capex'] = $this->input->post('id_capex');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('capex_excel/nilai_level_excel_3', $data);
        $this->Data_kontrak_model->delete_tbl_detail_capex_1($id_capex_detail);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 4 CAPEX
    // Update Nilai Level 4
    public function by_id_detail_capex_1($id_detail_capex_1)
    {
        $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
        $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
        $result_detail_capex_1 = $this->Data_kontrak_model->result_detail_capex_1_by_id_capex_detail($id_capex_detail);
        $data = [
            'row_capex_detail_1' => $row_capex_detail_1,
            'result_detail_capex_1' => $result_detail_capex_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_4_capex()
    {
        $this->load->view('capex/nilai_level_4');
    }
    // Tambah Nilai Level 4
    public function tambah_nama_uraian_level_4_capex()
    {
        $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
        $row_capex_detail =  $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
        $row_no_urut = $row_capex_detail['no_urut_1_capex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_capex_2($id_detail_capex_1);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_2_capex' => $this->input->post('nama_uraian'),
                'no_urut_2_capex' => $row_no_urut . '.' . $count,
                'id_detail_capex_1' => $id_detail_capex_1,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_2_capex' => $this->input->post('nama_uraian'),
                'no_urut_2_capex' => $row_no_urut . '.' . $count,
                'id_detail_capex_1' => $id_detail_capex_1,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_2($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_4_capex()
    {
        $id_detail_capex_1 = $this->input->post('id_detail_capex_1');
        $where = [
            'id_detail_capex_1' => $id_detail_capex_1
        ];
        $data = [
            'nama_uraian_1_capex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_4_capex($id_detail_capex_1)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_capex_1($id_detail_capex_1);
        $data['id_capex_detail'] = $this->input->post('id_capex_detail');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('capex_excel/nilai_level_excel_4', $data);
        $this->Data_kontrak_model->delete_tbl_detail_capex_2($id_detail_capex_1);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 5 CAPEX
    // Update Nilai Level 5`
    public function by_id_detail_capex_2($id_detail_capex_2)
    {
        // 2
        // _1
        $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
        $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
        $result_detail_capex_2 = $this->Data_kontrak_model->result_detail_capex_2_by_id_capex_detail($id_detail_capex_1);
        $data = [
            'row_capex_detail_2' => $row_capex_detail_2,
            'result_detail_capex_2' => $result_detail_capex_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_5_capex()
    {
        $this->load->view('capex/nilai_level_5');
    }
    // Tambah Nilai Level 5
    public function tambah_nama_uraian_level_5_capex()
    {

        $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
        $row_detail_capex_2 =  $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
        $row_no_urut = $row_detail_capex_2['no_urut_2_capex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_capex_3($id_detail_capex_2);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_3_capex' => $this->input->post('nama_uraian'),
                'no_urut_3_capex' => $row_no_urut . '.' . $count,
                'id_detail_capex_2' => $id_detail_capex_2,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_3_capex' => $this->input->post('nama_uraian'),
                'no_urut_3_capex' => $row_no_urut . '.' . $count,
                'id_detail_capex_2' => $id_detail_capex_2,
                'display_order' => $count
            ];
        }

        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_3($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_5_capex()
    {
        $id_detail_capex_2 = $this->input->post('id_detail_capex_2');
        $where = [
            'id_detail_capex_2' => $id_detail_capex_2
        ];
        $data = [
            'nama_uraian_2_capex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_5_capex($id_detail_capex_2)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_capex_2($id_detail_capex_2);
        $data['id_detail_capex_1'] = $this->input->post('id_detail_capex_1');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('capex_excel/nilai_level_excel_5', $data);
        $this->Data_kontrak_model->delete_tbl_detail_capex_3($id_detail_capex_2);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 6 CAPEX
    // Update Nilai Level 6
    public function by_id_detail_capex_3($id_detail_capex_3)
    {
        // 3
        // _2
        $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
        $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
        $result_detail_capex_3 = $this->Data_kontrak_model->result_detail_capex_3_by_id_capex_detail($id_detail_capex_2);
        $data = [
            'row_capex_detail_3' => $row_capex_detail_3,
            'result_detail_capex_3' => $result_detail_capex_3
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_6_capex()
    {
        $this->load->view('capex/nilai_level_6');
    }

    public function tambah_nama_uraian_level_6_capex()
    {
        $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
        $row_detail_capex_3 =  $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
        $row_no_urut = $row_detail_capex_3['no_urut_3_capex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_capex_4($id_detail_capex_3);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_4_capex' => $this->input->post('nama_uraian'),
                'no_urut_4_capex' => $row_no_urut . '.' . $count,
                'id_detail_capex_3' => $id_detail_capex_3,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_4_capex' => $this->input->post('nama_uraian'),
                'no_urut_4_capex' => $row_no_urut . '.' . $count,
                'id_detail_capex_3' => $id_detail_capex_3,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_4($data);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_6_capex()
    {
        $id_detail_capex_3 = $this->input->post('id_detail_capex_3');
        $where = [
            'id_detail_capex_3' => $id_detail_capex_3
        ];
        $data = [
            'nama_uraian_3_capex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_6_capex($id_detail_capex_3)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_capex_3($id_detail_capex_3);
        $data['id_detail_capex_2'] = $this->input->post('id_detail_capex_2');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('capex_excel/nilai_level_excel_6', $data);
        $this->Data_kontrak_model->delete_tbl_detail_capex_4($id_detail_capex_3);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    // LEVEL 7 CAPEX
    // Update Nilai Level 7
    public function by_id_detail_capex_4($id_detail_capex_4)
    {
        // 4
        // _3
        $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
        $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
        $result_detail_capex_4 = $this->Data_kontrak_model->result_detail_capex_4_by_id_capex_detail($id_detail_capex_3);
        $data = [
            'row_capex_detail_4' => $row_capex_detail_4,
            'result_detail_capex_4' => $result_detail_capex_4
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_7_capex()
    {
        $this->load->view('capex/nilai_level_7');
    }

    public function tambah_nama_uraian_level_7_capex()
    {
        $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
        $row_detail_capex_4 =  $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
        $row_no_urut = $row_detail_capex_4['no_urut_4_capex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_capex_5($id_detail_capex_4);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_5_capex' => $this->input->post('nama_uraian'),
                'no_urut_5_capex' => $row_no_urut . '.' . $count,
                'id_detail_capex_4' => $id_detail_capex_4,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_5_capex' => $this->input->post('nama_uraian'),
                'no_urut_5_capex' => $row_no_urut . '.' . $count,
                'id_detail_capex_4' => $id_detail_capex_4,
                'display_order' => $count
            ];
        }


        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_5($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_7_capex()
    {
        $id_detail_capex_4 = $this->input->post('id_detail_capex_4');
        $where = [
            'id_detail_capex_4' => $id_detail_capex_4
        ];
        $data = [
            'nama_uraian_4_capex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_7_capex($id_detail_capex_4)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_capex_4($id_detail_capex_4);
        $data['id_detail_capex_3'] = $this->input->post('id_detail_capex_3');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('capex_excel/nilai_level_excel_7', $data);
        $this->Data_kontrak_model->delete_tbl_detail_capex_5($id_detail_capex_4);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 8 CAPEX
    // Update Nilai Level 8
    public function by_id_detail_capex_5($id_detail_capex_5)
    {
        // 5
        // _4
        $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
        $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
        $result_detail_capex_5 = $this->Data_kontrak_model->result_detail_capex_5_by_id_capex_detail($id_detail_capex_4);
        $data = [
            'row_capex_detail_5' => $row_capex_detail_5,
            'result_detail_capex_5' => $result_detail_capex_5
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_8_capex()
    {
        $this->load->view('capex/nilai_level_8');
        // 46
    }

    public function tambah_nama_uraian_level_8_capex()
    {
        $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
        $row_detail_capex_5 =  $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
        $row_no_urut = $row_detail_capex_5['no_urut_5_capex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_capex_6($id_detail_capex_5);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_6_capex' => $this->input->post('nama_uraian'),
                'no_urut_6_capex' => $row_no_urut . '.' . $count,
                'id_detail_capex_5' => $id_detail_capex_5,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_6_capex' => $this->input->post('nama_uraian'),
                'no_urut_6_capex' => $row_no_urut . '.' . $count,
                'id_detail_capex_5' => $id_detail_capex_5,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_6($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_8_capex()
    {
        $id_detail_capex_5 = $this->input->post('id_detail_capex_5');
        $where = [
            'id_detail_capex_5' => $id_detail_capex_5
        ];
        $data = [
            'nama_uraian_5_capex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_8_capex($id_detail_capex_5)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_capex_5($id_detail_capex_5);
        $data['id_detail_capex_4'] = $this->input->post('id_detail_capex_4');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('capex_excel/nilai_level_excel_8', $data);
        $this->Data_kontrak_model->delete_tbl_detail_capex_6($id_detail_capex_5);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 9 CAPEX
    // Update Nilai Level 9
    public function by_id_detail_capex_6($id_detail_capex_6)
    {
        // 6
        // _5
        $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
        $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
        $result_detail_capex_6 = $this->Data_kontrak_model->result_detail_capex_6_by_id_capex_detail($id_detail_capex_5);
        $data = [
            'row_capex_detail_6' => $row_capex_detail_6,
            'result_detail_capex_6' => $result_detail_capex_6
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_9_capex()
    {
        $this->load->view('capex/nilai_level_9');
        // 47
    }

    public function tambah_nama_uraian_level_9_capex()
    {
        $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
        $row_detail_capex_6 =  $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
        $row_no_urut = $row_detail_capex_6['no_urut_6_capex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_capex_7($id_detail_capex_6);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_capex_6' => $id_detail_capex_6,
                'nama_uraian_7_capex' => $this->input->post('nama_uraian'),
                'no_urut_7_capex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_capex_6' => $id_detail_capex_6,
                'nama_uraian_7_capex' => $this->input->post('nama_uraian'),
                'no_urut_7_capex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_7($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_9_capex()
    {
        $id_detail_capex_6 = $this->input->post('id_detail_capex_6');
        $where = [
            'id_detail_capex_6' => $id_detail_capex_6
        ];
        $data = [
            'nama_uraian_6_capex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_9_capex($id_detail_capex_6)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_capex_6($id_detail_capex_6);
        $data['id_detail_capex_5'] = $this->input->post('id_detail_capex_5');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('capex_excel/nilai_level_excel_9', $data);
        $this->Data_kontrak_model->delete_tbl_detail_capex_7($id_detail_capex_6);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 10 CAPEX
    // Update Nilai Level 10
    public function by_id_detail_capex_7($id_detail_capex_7)
    {
        // 7
        // _6
        $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
        $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
        $result_detail_capex_7 = $this->Data_kontrak_model->result_detail_capex_7_by_id_capex_detail($id_detail_capex_6);
        $data = [
            'row_capex_detail_7' => $row_capex_detail_7,
            'result_detail_capex_7' => $result_detail_capex_7
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_10_capex()
    {
        $this->load->view('capex/nilai_level_10');
        // 48
    }

    public function tambah_nama_uraian_level_10_capex()
    {
        $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
        $row_detail_capex_7 =  $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
        $row_no_urut = $row_detail_capex_7['no_urut_7_capex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_capex_8($id_detail_capex_7);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_capex_7' => $id_detail_capex_7,
                'nama_uraian_8_capex' => $this->input->post('nama_uraian'),
                'no_urut_8_capex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_capex_7' => $id_detail_capex_7,
                'nama_uraian_8_capex' => $this->input->post('nama_uraian'),
                'no_urut_8_capex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_8($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_10_capex()
    {
        $id_detail_capex_7 = $this->input->post('id_detail_capex_7');
        $where = [
            'id_detail_capex_7' => $id_detail_capex_7
        ];
        $data = [
            'nama_uraian_7_capex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_10_capex($id_detail_capex_7)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_capex_7($id_detail_capex_7);
        $data['id_detail_capex_6'] = $this->input->post('id_detail_capex_6');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('capex_excel/nilai_level_excel_10', $data);
        $this->Data_kontrak_model->delete_tbl_detail_capex_8($id_detail_capex_7);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 11 CAPEX
    // Update Nilai Level 11
    public function by_id_detail_capex_8($id_detail_capex_8)
    {
        // 8
        // _7
        $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
        $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
        $result_detail_capex_8 = $this->Data_kontrak_model->result_detail_capex_8_by_id_capex_detail($id_detail_capex_7);
        $data = [
            'row_capex_detail_8' => $row_capex_detail_8,
            'result_detail_capex_8' => $result_detail_capex_8
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_11_capex()
    {
        // 49
        $this->load->view('capex/nilai_level_11');
    }

    public function tambah_nama_uraian_level_11_capex()
    {
        $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
        $row_detail_capex_8 =  $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
        $row_no_urut = $row_detail_capex_8['no_urut_8_capex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_capex_9($id_detail_capex_8);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_capex_8' => $id_detail_capex_8,
                'nama_uraian_9_capex' => $this->input->post('nama_uraian'),
                'no_urut_9_capex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_capex_8' => $id_detail_capex_8,
                'nama_uraian_9_capex' => $this->input->post('nama_uraian'),
                'no_urut_9_capex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_9($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_11_capex()
    {
        $id_detail_capex_8 = $this->input->post('id_detail_capex_8');
        $where = [
            'id_detail_capex_8' => $id_detail_capex_8
        ];
        $data = [
            'nama_uraian_8_capex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_11_capex($id_detail_capex_8)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_capex_8($id_detail_capex_8);
        $data['id_detail_capex_7'] = $this->input->post('id_detail_capex_7');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('capex_excel/nilai_level_excel_11', $data);
        $this->Data_kontrak_model->delete_tbl_detail_capex_9($id_detail_capex_8);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 12 CAPEX
    // Update Nilai Level 12
    public function by_id_detail_capex_9($id_detail_capex_9)
    {
        // 9
        // _8
        $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
        $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
        $result_detail_capex_9 = $this->Data_kontrak_model->result_detail_capex_9_by_id_capex_detail($id_detail_capex_8);
        $data = [
            'row_capex_detail_9' => $row_capex_detail_9,
            'result_detail_capex_9' => $result_detail_capex_9
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_12_capex()
    {
        //  50
        $this->load->view('capex/nilai_level_12');
    }

    public function tambah_nama_uraian_level_12_capex()
    {
        $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
        $row_detail_capex_9 =  $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
        $row_no_urut = $row_detail_capex_9['no_urut_9_capex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_capex_10($id_detail_capex_9);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_capex_9' => $id_detail_capex_9,
                'nama_uraian_10_capex' => $this->input->post('nama_uraian'),
                'no_urut_10_capex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_capex_9' => $id_detail_capex_9,
                'nama_uraian_10_capex' => $this->input->post('nama_uraian'),
                'no_urut_10_capex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_capex_10($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_12_capex()
    {
        $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
        $where = [
            'id_detail_capex_9' => $id_detail_capex_9
        ];
        $data = [
            'nama_uraian_9_capex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_12_capex($id_detail_capex_9)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_capex_9($id_detail_capex_9);
        $data['id_detail_capex_8'] = $this->input->post('id_detail_capex_8');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('capex_excel/nilai_level_excel_12', $data);
        $this->Data_kontrak_model->delete_tbl_detail_capex_10($id_detail_capex_9);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // ========================= BATASSS opex =========================

    // LEVEL 2 opex
    // Update Nilai Level 2
    public function update_nilai_level_2_opex($id_opex)
    {
        $type_add = $this->input->post('type_add');
        $data['id_opex'] = $id_opex;
        $data['type_add'] = $type_add;
        $this->load->view('opex/nilai_level_2', $data);
    }
    // Tambah Nilai Level 2
    public function tambah_nama_uraian_level_2_opex($id_opex)
    {
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_opex_detail($id_opex);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => 1.2 . '.' . $count,
                'id_opex' => $id_opex,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => 1.2 . '.' . $count,
                'id_opex' => $id_opex,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 3 opex
    // Update Nilai Level 3
    public function update_nilai_level_3_opex()
    {
        $this->load->view('opex/nilai_level_3');
    }
    // Tambah Nilai Level 3
    public function tambah_nama_uraian_level_3_opex()
    {
        $id_opex_detail = $this->input->post('id_opex_detail');
        $row_opex_detail =  $this->Data_kontrak_model->by_id_opex_detail($id_opex_detail);
        $row_no_urut = $row_opex_detail['no_urut'];

        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_opex_detail_1($id_opex_detail);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_1_opex' => $this->input->post('nama_uraian'),
                'no_urut_1_opex' => $row_no_urut . '.' . $count,
                'id_opex_detail' => $id_opex_detail,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_1_opex' => $this->input->post('nama_uraian'),
                'no_urut_1_opex' => $row_no_urut . '.' . $count,
                'id_opex_detail' => $id_opex_detail,
                'display_order' => $count
            ];
        }


        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_1($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_3_opex()
    {
        $id_opex_detail = $this->input->post('id_opex_detail');
        $where = [
            'id_opex_detail' => $id_opex_detail
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_opex_detail($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_3_opex($id_opex_detail)
    {
        $this->Data_kontrak_model->delete_tbl_opex_detail($id_opex_detail);
        $data['id_opex'] = $this->input->post('id_opex');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('opex_excel/nilai_level_excel_3', $data);
        $this->Data_kontrak_model->delete_tbl_detail_opex_1($id_opex_detail);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 4 opex
    // Update Nilai Level 4
    public function by_id_detail_opex_1($id_detail_opex_1)
    {
        $row_opex_detail_1 = $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);
        $id_opex_detail = $row_opex_detail_1['id_opex_detail'];
        $result_detail_opex_1 = $this->Data_kontrak_model->result_detail_opex_1_by_id_opex_detail($id_opex_detail);
        $data = [
            'row_opex_detail_1' => $row_opex_detail_1,
            'result_detail_opex_1' => $result_detail_opex_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_4_opex()
    {
        $this->load->view('opex/nilai_level_4');
    }
    // Tambah Nilai Level 4
    public function tambah_nama_uraian_level_4_opex()
    {
        $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
        $row_opex_detail =  $this->Data_kontrak_model->by_id_detail_opex_1($id_detail_opex_1);
        $row_no_urut = $row_opex_detail['no_urut_1_opex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_opex_2($id_detail_opex_1);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_2_opex' => $this->input->post('nama_uraian'),
                'no_urut_2_opex' => $row_no_urut . '.' . $count,
                'id_detail_opex_1' => $id_detail_opex_1,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_2_opex' => $this->input->post('nama_uraian'),
                'no_urut_2_opex' => $row_no_urut . '.' . $count,
                'id_detail_opex_1' => $id_detail_opex_1,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_2($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_4_opex()
    {
        $id_detail_opex_1 = $this->input->post('id_detail_opex_1');
        $where = [
            'id_detail_opex_1' => $id_detail_opex_1
        ];
        $data = [
            'nama_uraian_1_opex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_opex_1($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_4_opex($id_detail_opex_1)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_opex_1($id_detail_opex_1);
        $data['id_opex_detail'] = $this->input->post('id_opex_detail');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('opex_excel/nilai_level_excel_4', $data);
        $this->Data_kontrak_model->delete_tbl_detail_opex_2($id_detail_opex_1);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 5 opex
    // Update Nilai Level 5`
    public function by_id_detail_opex_2($id_detail_opex_2)
    {
        // 2
        // _1
        $row_opex_detail_2 = $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);
        $id_detail_opex_1 = $row_opex_detail_2['id_detail_opex_1'];
        $result_detail_opex_2 = $this->Data_kontrak_model->result_detail_opex_2_by_id_opex_detail($id_detail_opex_1);
        $data = [
            'row_opex_detail_2' => $row_opex_detail_2,
            'result_detail_opex_2' => $result_detail_opex_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_5_opex()
    {
        $this->load->view('opex/nilai_level_5');
    }
    // Tambah Nilai Level 5
    public function tambah_nama_uraian_level_5_opex()
    {

        $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
        $row_detail_opex_2 =  $this->Data_kontrak_model->by_id_detail_opex_2($id_detail_opex_2);
        $row_no_urut = $row_detail_opex_2['no_urut_2_opex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_opex_3($id_detail_opex_2);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_3_opex' => $this->input->post('nama_uraian'),
                'no_urut_3_opex' => $row_no_urut . '.' . $count,
                'id_detail_opex_2' => $id_detail_opex_2,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_3_opex' => $this->input->post('nama_uraian'),
                'no_urut_3_opex' => $row_no_urut . '.' . $count,
                'id_detail_opex_2' => $id_detail_opex_2,
                'display_order' => $count
            ];
        }

        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_3($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_5_opex()
    {
        $id_detail_opex_2 = $this->input->post('id_detail_opex_2');
        $where = [
            'id_detail_opex_2' => $id_detail_opex_2
        ];
        $data = [
            'nama_uraian_2_opex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_opex_2($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_5_opex($id_detail_opex_2)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_opex_2($id_detail_opex_2);
        $data['id_detail_opex_1'] = $this->input->post('id_detail_opex_1');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('opex_excel/nilai_level_excel_5', $data);
        $this->Data_kontrak_model->delete_tbl_detail_opex_3($id_detail_opex_2);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 6 opex
    // Update Nilai Level 6
    public function by_id_detail_opex_3($id_detail_opex_3)
    {
        // 3
        // _2
        $row_opex_detail_3 = $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);
        $id_detail_opex_2 = $row_opex_detail_3['id_detail_opex_2'];
        $result_detail_opex_3 = $this->Data_kontrak_model->result_detail_opex_3_by_id_opex_detail($id_detail_opex_2);
        $data = [
            'row_opex_detail_3' => $row_opex_detail_3,
            'result_detail_opex_3' => $result_detail_opex_3
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_6_opex()
    {
        $this->load->view('opex/nilai_level_6');
    }

    public function tambah_nama_uraian_level_6_opex()
    {
        $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
        $row_detail_opex_3 =  $this->Data_kontrak_model->by_id_detail_opex_3($id_detail_opex_3);
        $row_no_urut = $row_detail_opex_3['no_urut_3_opex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_opex_4($id_detail_opex_3);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_4_opex' => $this->input->post('nama_uraian'),
                'no_urut_4_opex' => $row_no_urut . '.' . $count,
                'id_detail_opex_3' => $id_detail_opex_3,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_4_opex' => $this->input->post('nama_uraian'),
                'no_urut_4_opex' => $row_no_urut . '.' . $count,
                'id_detail_opex_3' => $id_detail_opex_3,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_4($data);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_6_opex()
    {
        $id_detail_opex_3 = $this->input->post('id_detail_opex_3');
        $where = [
            'id_detail_opex_3' => $id_detail_opex_3
        ];
        $data = [
            'nama_uraian_3_opex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_opex_3($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_6_opex($id_detail_opex_3)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_opex_3($id_detail_opex_3);
        $data['id_detail_opex_2'] = $this->input->post('id_detail_opex_2');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('opex_excel/nilai_level_excel_6', $data);
        $this->Data_kontrak_model->delete_tbl_detail_opex_4($id_detail_opex_3);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    // LEVEL 7 opex
    // Update Nilai Level 7
    public function by_id_detail_opex_4($id_detail_opex_4)
    {
        // 4
        // _3
        $row_opex_detail_4 = $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);
        $id_detail_opex_3 = $row_opex_detail_4['id_detail_opex_3'];
        $result_detail_opex_4 = $this->Data_kontrak_model->result_detail_opex_4_by_id_opex_detail($id_detail_opex_3);
        $data = [
            'row_opex_detail_4' => $row_opex_detail_4,
            'result_detail_opex_4' => $result_detail_opex_4
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_7_opex()
    {
        $this->load->view('opex/nilai_level_7');
    }

    public function tambah_nama_uraian_level_7_opex()
    {
        $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
        $row_detail_opex_4 =  $this->Data_kontrak_model->by_id_detail_opex_4($id_detail_opex_4);
        $row_no_urut = $row_detail_opex_4['no_urut_4_opex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_opex_5($id_detail_opex_4);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_5_opex' => $this->input->post('nama_uraian'),
                'no_urut_5_opex' => $row_no_urut . '.' . $count,
                'id_detail_opex_4' => $id_detail_opex_4,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_5_opex' => $this->input->post('nama_uraian'),
                'no_urut_5_opex' => $row_no_urut . '.' . $count,
                'id_detail_opex_4' => $id_detail_opex_4,
                'display_order' => $count
            ];
        }


        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_5($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_7_opex()
    {
        $id_detail_opex_4 = $this->input->post('id_detail_opex_4');
        $where = [
            'id_detail_opex_4' => $id_detail_opex_4
        ];
        $data = [
            'nama_uraian_4_opex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_opex_4($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_7_opex($id_detail_opex_4)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_opex_4($id_detail_opex_4);
        $data['id_detail_opex_3'] = $this->input->post('id_detail_opex_3');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('opex_excel/nilai_level_excel_7', $data);
        $this->Data_kontrak_model->delete_tbl_detail_opex_5($id_detail_opex_4);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 8 opex
    // Update Nilai Level 8
    public function by_id_detail_opex_5($id_detail_opex_5)
    {
        // 5
        // _4
        $row_opex_detail_5 = $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);
        $id_detail_opex_4 = $row_opex_detail_5['id_detail_opex_4'];
        $result_detail_opex_5 = $this->Data_kontrak_model->result_detail_opex_5_by_id_opex_detail($id_detail_opex_4);
        $data = [
            'row_opex_detail_5' => $row_opex_detail_5,
            'result_detail_opex_5' => $result_detail_opex_5
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_8_opex()
    {
        $this->load->view('opex/nilai_level_8');
        // 46
    }

    public function tambah_nama_uraian_level_8_opex()
    {
        $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
        $row_detail_opex_5 =  $this->Data_kontrak_model->by_id_detail_opex_5($id_detail_opex_5);
        $row_no_urut = $row_detail_opex_5['no_urut_5_opex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_opex_6($id_detail_opex_5);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_6_opex' => $this->input->post('nama_uraian'),
                'no_urut_6_opex' => $row_no_urut . '.' . $count,
                'id_detail_opex_5' => $id_detail_opex_5,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_6_opex' => $this->input->post('nama_uraian'),
                'no_urut_6_opex' => $row_no_urut . '.' . $count,
                'id_detail_opex_5' => $id_detail_opex_5,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_6($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_8_opex()
    {
        $id_detail_opex_5 = $this->input->post('id_detail_opex_5');
        $where = [
            'id_detail_opex_5' => $id_detail_opex_5
        ];
        $data = [
            'nama_uraian_5_opex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_opex_5($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_8_opex($id_detail_opex_5)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_opex_5($id_detail_opex_5);
        $data['id_detail_opex_4'] = $this->input->post('id_detail_opex_4');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('opex_excel/nilai_level_excel_8', $data);
        $this->Data_kontrak_model->delete_tbl_detail_opex_6($id_detail_opex_5);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 9 opex
    // Update Nilai Level 9
    public function by_id_detail_opex_6($id_detail_opex_6)
    {
        // 6
        // _5
        $row_opex_detail_6 = $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);
        $id_detail_opex_5 = $row_opex_detail_6['id_detail_opex_5'];
        $result_detail_opex_6 = $this->Data_kontrak_model->result_detail_opex_6_by_id_opex_detail($id_detail_opex_5);
        $data = [
            'row_opex_detail_6' => $row_opex_detail_6,
            'result_detail_opex_6' => $result_detail_opex_6
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_9_opex()
    {
        $this->load->view('opex/nilai_level_9');
        // 47
    }

    public function tambah_nama_uraian_level_9_opex()
    {
        $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
        $row_detail_opex_6 =  $this->Data_kontrak_model->by_id_detail_opex_6($id_detail_opex_6);
        $row_no_urut = $row_detail_opex_6['no_urut_6_opex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_opex_7($id_detail_opex_6);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_opex_6' => $id_detail_opex_6,
                'nama_uraian_7_opex' => $this->input->post('nama_uraian'),
                'no_urut_7_opex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_opex_6' => $id_detail_opex_6,
                'nama_uraian_7_opex' => $this->input->post('nama_uraian'),
                'no_urut_7_opex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_7($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_9_opex()
    {
        $id_detail_opex_6 = $this->input->post('id_detail_opex_6');
        $where = [
            'id_detail_opex_6' => $id_detail_opex_6
        ];
        $data = [
            'nama_uraian_6_opex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_opex_6($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_9_opex($id_detail_opex_6)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_opex_6($id_detail_opex_6);
        $data['id_detail_opex_5'] = $this->input->post('id_detail_opex_5');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('opex_excel/nilai_level_excel_9', $data);
        $this->Data_kontrak_model->delete_tbl_detail_opex_7($id_detail_opex_6);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 10 opex
    // Update Nilai Level 10
    public function by_id_detail_opex_7($id_detail_opex_7)
    {
        // 7
        // _6
        $row_opex_detail_7 = $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);
        $id_detail_opex_6 = $row_opex_detail_7['id_detail_opex_6'];
        $result_detail_opex_7 = $this->Data_kontrak_model->result_detail_opex_7_by_id_opex_detail($id_detail_opex_6);
        $data = [
            'row_opex_detail_7' => $row_opex_detail_7,
            'result_detail_opex_7' => $result_detail_opex_7
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_10_opex()
    {
        $this->load->view('opex/nilai_level_10');
        // 48
    }

    public function tambah_nama_uraian_level_10_opex()
    {
        $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
        $row_detail_opex_7 =  $this->Data_kontrak_model->by_id_detail_opex_7($id_detail_opex_7);
        $row_no_urut = $row_detail_opex_7['no_urut_7_opex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_opex_8($id_detail_opex_7);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_opex_7' => $id_detail_opex_7,
                'nama_uraian_8_opex' => $this->input->post('nama_uraian'),
                'no_urut_8_opex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_opex_7' => $id_detail_opex_7,
                'nama_uraian_8_opex' => $this->input->post('nama_uraian'),
                'no_urut_8_opex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_8($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_10_opex()
    {
        $id_detail_opex_7 = $this->input->post('id_detail_opex_7');
        $where = [
            'id_detail_opex_7' => $id_detail_opex_7
        ];
        $data = [
            'nama_uraian_7_opex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_opex_7($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_10_opex($id_detail_opex_7)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_opex_7($id_detail_opex_7);
        $data['id_detail_opex_6'] = $this->input->post('id_detail_opex_6');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('opex_excel/nilai_level_excel_10', $data);
        $this->Data_kontrak_model->delete_tbl_detail_opex_8($id_detail_opex_7);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 11 opex
    // Update Nilai Level 11
    public function by_id_detail_opex_8($id_detail_opex_8)
    {
        // 8
        // _7
        $row_opex_detail_8 = $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);
        $id_detail_opex_7 = $row_opex_detail_8['id_detail_opex_7'];
        $result_detail_opex_8 = $this->Data_kontrak_model->result_detail_opex_8_by_id_opex_detail($id_detail_opex_7);
        $data = [
            'row_opex_detail_8' => $row_opex_detail_8,
            'result_detail_opex_8' => $result_detail_opex_8
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_11_opex()
    {
        // 49
        $this->load->view('opex/nilai_level_11');
    }

    public function tambah_nama_uraian_level_11_opex()
    {
        $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
        $row_detail_opex_8 =  $this->Data_kontrak_model->by_id_detail_opex_8($id_detail_opex_8);
        $row_no_urut = $row_detail_opex_8['no_urut_8_opex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_opex_9($id_detail_opex_8);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_opex_8' => $id_detail_opex_8,
                'nama_uraian_9_opex' => $this->input->post('nama_uraian'),
                'no_urut_9_opex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_opex_8' => $id_detail_opex_8,
                'nama_uraian_9_opex' => $this->input->post('nama_uraian'),
                'no_urut_9_opex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_9($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_11_opex()
    {
        $id_detail_opex_8 = $this->input->post('id_detail_opex_8');
        $where = [
            'id_detail_opex_8' => $id_detail_opex_8
        ];
        $data = [
            'nama_uraian_8_opex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_opex_8($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_11_opex($id_detail_opex_8)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_opex_8($id_detail_opex_8);
        $data['id_detail_opex_7'] = $this->input->post('id_detail_opex_7');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('opex_excel/nilai_level_excel_11', $data);
        $this->Data_kontrak_model->delete_tbl_detail_opex_9($id_detail_opex_8);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 12 opex
    // Update Nilai Level 12
    public function by_id_detail_opex_9($id_detail_opex_9)
    {
        // 9
        // _8
        $row_opex_detail_9 = $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);
        $id_detail_opex_8 = $row_opex_detail_9['id_detail_opex_8'];
        $result_detail_opex_9 = $this->Data_kontrak_model->result_detail_opex_9_by_id_opex_detail($id_detail_opex_8);
        $data = [
            'row_opex_detail_9' => $row_opex_detail_9,
            'result_detail_opex_9' => $result_detail_opex_9
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_12_opex()
    {
        //  50
        $this->load->view('opex/nilai_level_12');
    }

    public function tambah_nama_uraian_level_12_opex()
    {
        $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
        $row_detail_opex_9 =  $this->Data_kontrak_model->by_id_detail_opex_9($id_detail_opex_9);
        $row_no_urut = $row_detail_opex_9['no_urut_9_opex'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_opex_10($id_detail_opex_9);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_opex_9' => $id_detail_opex_9,
                'nama_uraian_10_opex' => $this->input->post('nama_uraian'),
                'no_urut_10_opex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_opex_9' => $id_detail_opex_9,
                'nama_uraian_10_opex' => $this->input->post('nama_uraian'),
                'no_urut_10_opex' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_opex_10($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_12_opex()
    {
        $id_detail_opex_9 = $this->input->post('id_detail_opex_9');
        $where = [
            'id_detail_opex_9' => $id_detail_opex_9
        ];
        $data = [
            'nama_uraian_9_opex' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_opex_9($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_12_opex($id_detail_opex_9)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_opex_9($id_detail_opex_9);
        $data['id_detail_opex_8'] = $this->input->post('id_detail_opex_8');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('opex_excel/nilai_level_excel_12', $data);
        $this->Data_kontrak_model->delete_tbl_detail_opex_10($id_detail_opex_9);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // ========================= BATASSS bua =========================

    // LEVEL 2 bua
    // Update Nilai Level 2
    public function update_nilai_level_2_bua($id_bua)
    {
        $type_add = $this->input->post('type_add');
        $data['id_bua'] = $id_bua;
        $data['type_add'] = $type_add;
        $this->load->view('bua/nilai_level_2', $data);
    }
    // Tambah Nilai Level 2
    public function tambah_nama_uraian_level_2_bua($id_bua)
    {
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_bua_detail($id_bua);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => 1.3 . '.' . $count,
                'id_bua' => $id_bua,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => 1.3 . '.' . $count,
                'id_bua' => $id_bua,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 3 bua
    // Update Nilai Level 3
    public function update_nilai_level_3_bua()
    {
        $this->load->view('bua/nilai_level_3');
    }
    // Tambah Nilai Level 3
    public function tambah_nama_uraian_level_3_bua()
    {
        $id_bua_detail = $this->input->post('id_bua_detail');
        $row_bua_detail =  $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
        $row_no_urut = $row_bua_detail['no_urut'];

        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_bua_detail_1($id_bua_detail);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_1_bua' => $this->input->post('nama_uraian'),
                'no_urut_1_bua' => $row_no_urut . '.' . $count,
                'id_bua_detail' => $id_bua_detail,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_1_bua' => $this->input->post('nama_uraian'),
                'no_urut_1_bua' => $row_no_urut . '.' . $count,
                'id_bua_detail' => $id_bua_detail,
                'display_order' => $count
            ];
        }


        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua_1($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_3_bua()
    {
        $id_bua_detail = $this->input->post('id_bua_detail');
        $where = [
            'id_bua_detail' => $id_bua_detail
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_3_bua($id_bua_detail)
    {
        $this->Data_kontrak_model->delete_tbl_bua_detail($id_bua_detail);
        $data['id_bua'] = $this->input->post('id_bua');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('bua_excel/nilai_level_excel_3', $data);
        $this->Data_kontrak_model->delete_tbl_detail_bua_1($id_bua_detail);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 4 bua
    // Update Nilai Level 4
    public function by_id_detail_bua_1($id_detail_bua_1)
    {
        $row_bua_detail_1 = $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);
        $id_bua_detail = $row_bua_detail_1['id_bua_detail'];
        $result_detail_bua_1 = $this->Data_kontrak_model->result_detail_bua_1_by_id_bua_detail($id_bua_detail);
        $data = [
            'row_bua_detail_1' => $row_bua_detail_1,
            'result_detail_bua_1' => $result_detail_bua_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_4_bua()
    {
        $this->load->view('bua/nilai_level_4');
    }
    // Tambah Nilai Level 4
    public function tambah_nama_uraian_level_4_bua()
    {
        $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
        $row_bua_detail =  $this->Data_kontrak_model->by_id_detail_bua_1($id_detail_bua_1);
        $row_no_urut = $row_bua_detail['no_urut_1_bua'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_bua_2($id_detail_bua_1);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_2_bua' => $this->input->post('nama_uraian'),
                'no_urut_2_bua' => $row_no_urut . '.' . $count,
                'id_detail_bua_1' => $id_detail_bua_1,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_2_bua' => $this->input->post('nama_uraian'),
                'no_urut_2_bua' => $row_no_urut . '.' . $count,
                'id_detail_bua_1' => $id_detail_bua_1,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua_2($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_4_bua()
    {
        $id_detail_bua_1 = $this->input->post('id_detail_bua_1');
        $where = [
            'id_detail_bua_1' => $id_detail_bua_1
        ];
        $data = [
            'nama_uraian_1_bua' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_bua_1($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_4_bua($id_detail_bua_1)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_bua_1($id_detail_bua_1);
        $data['id_bua_detail'] = $this->input->post('id_bua_detail');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('bua_excel/nilai_level_excel_4', $data);
        $this->Data_kontrak_model->delete_tbl_detail_bua_2($id_detail_bua_1);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 5 bua
    // Update Nilai Level 5`
    public function by_id_detail_bua_2($id_detail_bua_2)
    {
        // 2
        // _1
        $row_bua_detail_2 = $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);
        $id_detail_bua_1 = $row_bua_detail_2['id_detail_bua_1'];
        $result_detail_bua_2 = $this->Data_kontrak_model->result_detail_bua_2_by_id_bua_detail($id_detail_bua_1);
        $data = [
            'row_bua_detail_2' => $row_bua_detail_2,
            'result_detail_bua_2' => $result_detail_bua_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_5_bua()
    {
        $this->load->view('bua/nilai_level_5');
    }
    // Tambah Nilai Level 5
    public function tambah_nama_uraian_level_5_bua()
    {

        $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
        $row_detail_bua_2 =  $this->Data_kontrak_model->by_id_detail_bua_2($id_detail_bua_2);
        $row_no_urut = $row_detail_bua_2['no_urut_2_bua'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_bua_3($id_detail_bua_2);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_3_bua' => $this->input->post('nama_uraian'),
                'no_urut_3_bua' => $row_no_urut . '.' . $count,
                'id_detail_bua_2' => $id_detail_bua_2,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_3_bua' => $this->input->post('nama_uraian'),
                'no_urut_3_bua' => $row_no_urut . '.' . $count,
                'id_detail_bua_2' => $id_detail_bua_2,
                'display_order' => $count
            ];
        }

        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua_3($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_5_bua()
    {
        $id_detail_bua_2 = $this->input->post('id_detail_bua_2');
        $where = [
            'id_detail_bua_2' => $id_detail_bua_2
        ];
        $data = [
            'nama_uraian_2_bua' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_bua_2($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_5_bua($id_detail_bua_2)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_bua_2($id_detail_bua_2);
        $data['id_detail_bua_1'] = $this->input->post('id_detail_bua_1');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('bua_excel/nilai_level_excel_5', $data);
        $this->Data_kontrak_model->delete_tbl_detail_bua_3($id_detail_bua_2);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 6 bua
    // Update Nilai Level 6
    public function by_id_detail_bua_3($id_detail_bua_3)
    {
        // 3
        // _2
        $row_bua_detail_3 = $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);
        $id_detail_bua_2 = $row_bua_detail_3['id_detail_bua_2'];
        $result_detail_bua_3 = $this->Data_kontrak_model->result_detail_bua_3_by_id_bua_detail($id_detail_bua_2);
        $data = [
            'row_bua_detail_3' => $row_bua_detail_3,
            'result_detail_bua_3' => $result_detail_bua_3
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_6_bua()
    {
        $this->load->view('bua/nilai_level_6');
    }

    public function tambah_nama_uraian_level_6_bua()
    {
        $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
        $row_detail_bua_3 =  $this->Data_kontrak_model->by_id_detail_bua_3($id_detail_bua_3);
        $row_no_urut = $row_detail_bua_3['no_urut_3_bua'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_bua_4($id_detail_bua_3);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_4_bua' => $this->input->post('nama_uraian'),
                'no_urut_4_bua' => $row_no_urut . '.' . $count,
                'id_detail_bua_3' => $id_detail_bua_3,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_4_bua' => $this->input->post('nama_uraian'),
                'no_urut_4_bua' => $row_no_urut . '.' . $count,
                'id_detail_bua_3' => $id_detail_bua_3,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua_4($data);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_6_bua()
    {
        $id_detail_bua_3 = $this->input->post('id_detail_bua_3');
        $where = [
            'id_detail_bua_3' => $id_detail_bua_3
        ];
        $data = [
            'nama_uraian_3_bua' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_bua_3($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_6_bua($id_detail_bua_3)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_bua_3($id_detail_bua_3);
        $data['id_detail_bua_2'] = $this->input->post('id_detail_bua_2');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('bua_excel/nilai_level_excel_6', $data);
        $this->Data_kontrak_model->delete_tbl_detail_bua_4($id_detail_bua_3);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    // LEVEL 7 bua
    // Update Nilai Level 7
    public function by_id_detail_bua_4($id_detail_bua_4)
    {
        // 4
        // _3
        $row_bua_detail_4 = $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);
        $id_detail_bua_3 = $row_bua_detail_4['id_detail_bua_3'];
        $result_detail_bua_4 = $this->Data_kontrak_model->result_detail_bua_4_by_id_bua_detail($id_detail_bua_3);
        $data = [
            'row_bua_detail_4' => $row_bua_detail_4,
            'result_detail_bua_4' => $result_detail_bua_4
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_7_bua()
    {
        $this->load->view('bua/nilai_level_7');
    }

    public function tambah_nama_uraian_level_7_bua()
    {
        $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
        $row_detail_bua_4 =  $this->Data_kontrak_model->by_id_detail_bua_4($id_detail_bua_4);
        $row_no_urut = $row_detail_bua_4['no_urut_4_bua'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_bua_5($id_detail_bua_4);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_5_bua' => $this->input->post('nama_uraian'),
                'no_urut_5_bua' => $row_no_urut . '.' . $count,
                'id_detail_bua_4' => $id_detail_bua_4,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_5_bua' => $this->input->post('nama_uraian'),
                'no_urut_5_bua' => $row_no_urut . '.' . $count,
                'id_detail_bua_4' => $id_detail_bua_4,
                'display_order' => $count
            ];
        }


        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua_5($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_7_bua()
    {
        $id_detail_bua_4 = $this->input->post('id_detail_bua_4');
        $where = [
            'id_detail_bua_4' => $id_detail_bua_4
        ];
        $data = [
            'nama_uraian_4_bua' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_bua_4($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_7_bua($id_detail_bua_4)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_bua_4($id_detail_bua_4);
        $data['id_detail_bua_3'] = $this->input->post('id_detail_bua_3');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('bua_excel/nilai_level_excel_7', $data);
        $this->Data_kontrak_model->delete_tbl_detail_bua_5($id_detail_bua_4);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 8 bua
    // Update Nilai Level 8
    public function by_id_detail_bua_5($id_detail_bua_5)
    {
        // 5
        // _4
        $row_bua_detail_5 = $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);
        $id_detail_bua_4 = $row_bua_detail_5['id_detail_bua_4'];
        $result_detail_bua_5 = $this->Data_kontrak_model->result_detail_bua_5_by_id_bua_detail($id_detail_bua_4);
        $data = [
            'row_bua_detail_5' => $row_bua_detail_5,
            'result_detail_bua_5' => $result_detail_bua_5
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_8_bua()
    {
        $this->load->view('bua/nilai_level_8');
        // 46
    }

    public function tambah_nama_uraian_level_8_bua()
    {
        $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
        $row_detail_bua_5 =  $this->Data_kontrak_model->by_id_detail_bua_5($id_detail_bua_5);
        $row_no_urut = $row_detail_bua_5['no_urut_5_bua'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_bua_6($id_detail_bua_5);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_6_bua' => $this->input->post('nama_uraian'),
                'no_urut_6_bua' => $row_no_urut . '.' . $count,
                'id_detail_bua_5' => $id_detail_bua_5,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_6_bua' => $this->input->post('nama_uraian'),
                'no_urut_6_bua' => $row_no_urut . '.' . $count,
                'id_detail_bua_5' => $id_detail_bua_5,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua_6($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_8_bua()
    {
        $id_detail_bua_5 = $this->input->post('id_detail_bua_5');
        $where = [
            'id_detail_bua_5' => $id_detail_bua_5
        ];
        $data = [
            'nama_uraian_5_bua' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_bua_5($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_8_bua($id_detail_bua_5)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_bua_5($id_detail_bua_5);
        $data['id_detail_bua_4'] = $this->input->post('id_detail_bua_4');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('bua_excel/nilai_level_excel_8', $data);
        $this->Data_kontrak_model->delete_tbl_detail_bua_6($id_detail_bua_5);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 9 bua
    // Update Nilai Level 9
    public function by_id_detail_bua_6($id_detail_bua_6)
    {
        // 6
        // _5
        $row_bua_detail_6 = $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);
        $id_detail_bua_5 = $row_bua_detail_6['id_detail_bua_5'];
        $result_detail_bua_6 = $this->Data_kontrak_model->result_detail_bua_6_by_id_bua_detail($id_detail_bua_5);
        $data = [
            'row_bua_detail_6' => $row_bua_detail_6,
            'result_detail_bua_6' => $result_detail_bua_6
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_9_bua()
    {
        $this->load->view('bua/nilai_level_9');
        // 47
    }

    public function tambah_nama_uraian_level_9_bua()
    {
        $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
        $row_detail_bua_6 =  $this->Data_kontrak_model->by_id_detail_bua_6($id_detail_bua_6);
        $row_no_urut = $row_detail_bua_6['no_urut_6_bua'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_bua_7($id_detail_bua_6);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_bua_6' => $id_detail_bua_6,
                'nama_uraian_7_bua' => $this->input->post('nama_uraian'),
                'no_urut_7_bua' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_bua_6' => $id_detail_bua_6,
                'nama_uraian_7_bua' => $this->input->post('nama_uraian'),
                'no_urut_7_bua' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua_7($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_9_bua()
    {
        $id_detail_bua_6 = $this->input->post('id_detail_bua_6');
        $where = [
            'id_detail_bua_6' => $id_detail_bua_6
        ];
        $data = [
            'nama_uraian_6_bua' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_bua_6($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_9_bua($id_detail_bua_6)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_bua_6($id_detail_bua_6);
        $data['id_detail_bua_5'] = $this->input->post('id_detail_bua_5');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('bua_excel/nilai_level_excel_9', $data);
        $this->Data_kontrak_model->delete_tbl_detail_bua_7($id_detail_bua_6);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 10 bua
    // Update Nilai Level 10
    public function by_id_detail_bua_7($id_detail_bua_7)
    {
        // 7
        // _6
        $row_bua_detail_7 = $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);
        $id_detail_bua_6 = $row_bua_detail_7['id_detail_bua_6'];
        $result_detail_bua_7 = $this->Data_kontrak_model->result_detail_bua_7_by_id_bua_detail($id_detail_bua_6);
        $data = [
            'row_bua_detail_7' => $row_bua_detail_7,
            'result_detail_bua_7' => $result_detail_bua_7
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_10_bua()
    {
        $this->load->view('bua/nilai_level_10');
        // 48
    }

    public function tambah_nama_uraian_level_10_bua()
    {
        $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
        $row_detail_bua_7 =  $this->Data_kontrak_model->by_id_detail_bua_7($id_detail_bua_7);
        $row_no_urut = $row_detail_bua_7['no_urut_7_bua'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_bua_8($id_detail_bua_7);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_bua_7' => $id_detail_bua_7,
                'nama_uraian_8_bua' => $this->input->post('nama_uraian'),
                'no_urut_8_bua' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_bua_7' => $id_detail_bua_7,
                'nama_uraian_8_bua' => $this->input->post('nama_uraian'),
                'no_urut_8_bua' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua_8($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_10_bua()
    {
        $id_detail_bua_7 = $this->input->post('id_detail_bua_7');
        $where = [
            'id_detail_bua_7' => $id_detail_bua_7
        ];
        $data = [
            'nama_uraian_7_bua' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_bua_7($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_10_bua($id_detail_bua_7)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_bua_7($id_detail_bua_7);
        $data['id_detail_bua_6'] = $this->input->post('id_detail_bua_6');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('bua_excel/nilai_level_excel_10', $data);
        $this->Data_kontrak_model->delete_tbl_detail_bua_8($id_detail_bua_7);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 11 bua
    // Update Nilai Level 11
    public function by_id_detail_bua_8($id_detail_bua_8)
    {
        // 8
        // _7
        $row_bua_detail_8 = $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);
        $id_detail_bua_7 = $row_bua_detail_8['id_detail_bua_7'];
        $result_detail_bua_8 = $this->Data_kontrak_model->result_detail_bua_8_by_id_bua_detail($id_detail_bua_7);
        $data = [
            'row_bua_detail_8' => $row_bua_detail_8,
            'result_detail_bua_8' => $result_detail_bua_8
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_11_bua()
    {
        // 49
        $this->load->view('bua/nilai_level_11');
    }

    public function tambah_nama_uraian_level_11_bua()
    {
        $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
        $row_detail_bua_8 =  $this->Data_kontrak_model->by_id_detail_bua_8($id_detail_bua_8);
        $row_no_urut = $row_detail_bua_8['no_urut_8_bua'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_bua_9($id_detail_bua_8);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_bua_8' => $id_detail_bua_8,
                'nama_uraian_9_bua' => $this->input->post('nama_uraian'),
                'no_urut_9_bua' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_bua_8' => $id_detail_bua_8,
                'nama_uraian_9_bua' => $this->input->post('nama_uraian'),
                'no_urut_9_bua' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua_9($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_11_bua()
    {
        $id_detail_bua_8 = $this->input->post('id_detail_bua_8');
        $where = [
            'id_detail_bua_8' => $id_detail_bua_8
        ];
        $data = [
            'nama_uraian_8_bua' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_bua_8($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_11_bua($id_detail_bua_8)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_bua_8($id_detail_bua_8);
        $data['id_detail_bua_7'] = $this->input->post('id_detail_bua_7');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('bua_excel/nilai_level_excel_11', $data);
        $this->Data_kontrak_model->delete_tbl_detail_bua_9($id_detail_bua_8);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 12 bua
    // Update Nilai Level 12
    public function by_id_detail_bua_9($id_detail_bua_9)
    {
        // 9
        // _8
        $row_bua_detail_9 = $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);
        $id_detail_bua_8 = $row_bua_detail_9['id_detail_bua_8'];
        $result_detail_bua_9 = $this->Data_kontrak_model->result_detail_bua_9_by_id_bua_detail($id_detail_bua_8);
        $data = [
            'row_bua_detail_9' => $row_bua_detail_9,
            'result_detail_bua_9' => $result_detail_bua_9
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_12_bua()
    {
        //  50
        $this->load->view('bua/nilai_level_12');
    }

    public function tambah_nama_uraian_level_12_bua()
    {
        $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
        $row_detail_bua_9 =  $this->Data_kontrak_model->by_id_detail_bua_9($id_detail_bua_9);
        $row_no_urut = $row_detail_bua_9['no_urut_9_bua'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_bua_10($id_detail_bua_9);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_bua_9' => $id_detail_bua_9,
                'nama_uraian_10_bua' => $this->input->post('nama_uraian'),
                'no_urut_10_bua' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_bua_9' => $id_detail_bua_9,
                'nama_uraian_10_bua' => $this->input->post('nama_uraian'),
                'no_urut_10_bua' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_bua_10($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_12_bua()
    {
        $id_detail_bua_9 = $this->input->post('id_detail_bua_9');
        $where = [
            'id_detail_bua_9' => $id_detail_bua_9
        ];
        $data = [
            'nama_uraian_9_bua' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_bua_9($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_12_bua($id_detail_bua_9)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_bua_9($id_detail_bua_9);
        $data['id_detail_bua_8'] = $this->input->post('id_detail_bua_8');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('bua_excel/nilai_level_excel_12', $data);
        $this->Data_kontrak_model->delete_tbl_detail_bua_10($id_detail_bua_9);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // ========================= BATASSS sdm =========================

    // LEVEL 2 sdm
    // Update Nilai Level 2
    public function update_nilai_level_2_sdm($id_sdm)
    {
        $type_add = $this->input->post('type_add');
        $data['id_sdm'] = $id_sdm;
        $data['type_add'] = $type_add;
        $this->load->view('sdm/nilai_level_2', $data);
    }
    // Tambah Nilai Level 2
    public function tambah_nama_uraian_level_2_sdm($id_sdm)
    {
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_sdm_detail($id_sdm);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => 1.4 . '.' . $count,
                'id_sdm' => $id_sdm,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => 1.4 . '.' . $count,
                'id_sdm' => $id_sdm,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 3 sdm
    // Update Nilai Level 3
    public function update_nilai_level_3_sdm()
    {
        $this->load->view('sdm/nilai_level_3');
    }
    // Tambah Nilai Level 3
    public function tambah_nama_uraian_level_3_sdm()
    {
        $id_sdm_detail = $this->input->post('id_sdm_detail');
        $row_sdm_detail =  $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
        $row_no_urut = $row_sdm_detail['no_urut'];

        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_sdm_detail_1($id_sdm_detail);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_1_sdm' => $this->input->post('nama_uraian'),
                'no_urut_1_sdm' => $row_no_urut . '.' . $count,
                'id_sdm_detail' => $id_sdm_detail,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_1_sdm' => $this->input->post('nama_uraian'),
                'no_urut_1_sdm' => $row_no_urut . '.' . $count,
                'id_sdm_detail' => $id_sdm_detail,
                'display_order' => $count
            ];
        }


        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_1($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_3_sdm()
    {
        $id_sdm_detail = $this->input->post('id_sdm_detail');
        $where = [
            'id_sdm_detail' => $id_sdm_detail
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_3_sdm($id_sdm_detail)
    {
        $this->Data_kontrak_model->delete_tbl_sdm_detail($id_sdm_detail);
        $data['id_sdm'] = $this->input->post('id_sdm');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_3', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_1($id_sdm_detail);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 4 sdm
    // Update Nilai Level 4
    public function by_id_detail_sdm_1($id_detail_sdm_1)
    {
        $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
        $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
        $result_detail_sdm_1 = $this->Data_kontrak_model->result_detail_sdm_1_by_id_sdm_detail($id_sdm_detail);
        $data = [
            'row_sdm_detail_1' => $row_sdm_detail_1,
            'result_detail_sdm_1' => $result_detail_sdm_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_4_sdm()
    {
        $this->load->view('sdm/nilai_level_4');
    }
    // Tambah Nilai Level 4
    public function tambah_nama_uraian_level_4_sdm()
    {
        $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
        $row_sdm_detail =  $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
        $row_no_urut = $row_sdm_detail['no_urut_1_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_2($id_detail_sdm_1);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_2_sdm' => $this->input->post('nama_uraian'),
                'no_urut_2_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_1' => $id_detail_sdm_1,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_2_sdm' => $this->input->post('nama_uraian'),
                'no_urut_2_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_1' => $id_detail_sdm_1,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_2($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_4_sdm()
    {
        $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
        $where = [
            'id_detail_sdm_1' => $id_detail_sdm_1
        ];
        $data = [
            'nama_uraian_1_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_4_sdm($id_detail_sdm_1)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_1($id_detail_sdm_1);
        $data['id_sdm_detail'] = $this->input->post('id_sdm_detail');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_4', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_2($id_detail_sdm_1);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 5 sdm
    // Update Nilai Level 5`
    public function by_id_detail_sdm_2($id_detail_sdm_2)
    {
        // 2
        // _1
        $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
        $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
        $result_detail_sdm_2 = $this->Data_kontrak_model->result_detail_sdm_2_by_id_sdm_detail($id_detail_sdm_1);
        $data = [
            'row_sdm_detail_2' => $row_sdm_detail_2,
            'result_detail_sdm_2' => $result_detail_sdm_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_5_sdm()
    {
        $this->load->view('sdm/nilai_level_5');
    }
    // Tambah Nilai Level 5
    public function tambah_nama_uraian_level_5_sdm()
    {

        $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
        $row_detail_sdm_2 =  $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
        $row_no_urut = $row_detail_sdm_2['no_urut_2_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_3($id_detail_sdm_2);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_3_sdm' => $this->input->post('nama_uraian'),
                'no_urut_3_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_2' => $id_detail_sdm_2,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_3_sdm' => $this->input->post('nama_uraian'),
                'no_urut_3_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_2' => $id_detail_sdm_2,
                'display_order' => $count
            ];
        }

        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_3($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_5_sdm()
    {
        $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
        $where = [
            'id_detail_sdm_2' => $id_detail_sdm_2
        ];
        $data = [
            'nama_uraian_2_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_5_sdm($id_detail_sdm_2)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_2($id_detail_sdm_2);
        $data['id_detail_sdm_1'] = $this->input->post('id_detail_sdm_1');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_5', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_3($id_detail_sdm_2);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 6 sdm
    // Update Nilai Level 6
    public function by_id_detail_sdm_3($id_detail_sdm_3)
    {
        // 3
        // _2
        $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
        $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
        $result_detail_sdm_3 = $this->Data_kontrak_model->result_detail_sdm_3_by_id_sdm_detail($id_detail_sdm_2);
        $data = [
            'row_sdm_detail_3' => $row_sdm_detail_3,
            'result_detail_sdm_3' => $result_detail_sdm_3
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_6_sdm()
    {
        $this->load->view('sdm/nilai_level_6');
    }

    public function tambah_nama_uraian_level_6_sdm()
    {
        $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
        $row_detail_sdm_3 =  $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
        $row_no_urut = $row_detail_sdm_3['no_urut_3_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_4($id_detail_sdm_3);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_4_sdm' => $this->input->post('nama_uraian'),
                'no_urut_4_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_3' => $id_detail_sdm_3,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_4_sdm' => $this->input->post('nama_uraian'),
                'no_urut_4_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_3' => $id_detail_sdm_3,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_4($data);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_6_sdm()
    {
        $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
        $where = [
            'id_detail_sdm_3' => $id_detail_sdm_3
        ];
        $data = [
            'nama_uraian_3_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_6_sdm($id_detail_sdm_3)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_3($id_detail_sdm_3);
        $data['id_detail_sdm_2'] = $this->input->post('id_detail_sdm_2');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_6', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_4($id_detail_sdm_3);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    // LEVEL 7 sdm
    // Update Nilai Level 7
    public function by_id_detail_sdm_4($id_detail_sdm_4)
    {
        // 4
        // _3
        $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
        $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
        $result_detail_sdm_4 = $this->Data_kontrak_model->result_detail_sdm_4_by_id_sdm_detail($id_detail_sdm_3);
        $data = [
            'row_sdm_detail_4' => $row_sdm_detail_4,
            'result_detail_sdm_4' => $result_detail_sdm_4
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_7_sdm()
    {
        $this->load->view('sdm/nilai_level_7');
    }

    public function tambah_nama_uraian_level_7_sdm()
    {
        $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
        $row_detail_sdm_4 =  $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
        $row_no_urut = $row_detail_sdm_4['no_urut_4_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_5($id_detail_sdm_4);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_5_sdm' => $this->input->post('nama_uraian'),
                'no_urut_5_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_4' => $id_detail_sdm_4,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_5_sdm' => $this->input->post('nama_uraian'),
                'no_urut_5_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_4' => $id_detail_sdm_4,
                'display_order' => $count
            ];
        }


        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_5($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_7_sdm()
    {
        $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
        $where = [
            'id_detail_sdm_4' => $id_detail_sdm_4
        ];
        $data = [
            'nama_uraian_4_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_7_sdm($id_detail_sdm_4)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_4($id_detail_sdm_4);
        $data['id_detail_sdm_3'] = $this->input->post('id_detail_sdm_3');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_7', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_5($id_detail_sdm_4);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 8 sdm
    // Update Nilai Level 8
    public function by_id_detail_sdm_5($id_detail_sdm_5)
    {
        // 5
        // _4
        $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
        $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
        $result_detail_sdm_5 = $this->Data_kontrak_model->result_detail_sdm_5_by_id_sdm_detail($id_detail_sdm_4);
        $data = [
            'row_sdm_detail_5' => $row_sdm_detail_5,
            'result_detail_sdm_5' => $result_detail_sdm_5
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_8_sdm()
    {
        $this->load->view('sdm/nilai_level_8');
        // 46
    }

    public function tambah_nama_uraian_level_8_sdm()
    {
        $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
        $row_detail_sdm_5 =  $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
        $row_no_urut = $row_detail_sdm_5['no_urut_5_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_6($id_detail_sdm_5);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_6_sdm' => $this->input->post('nama_uraian'),
                'no_urut_6_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_5' => $id_detail_sdm_5,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_6_sdm' => $this->input->post('nama_uraian'),
                'no_urut_6_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_5' => $id_detail_sdm_5,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_6($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_8_sdm()
    {
        $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
        $where = [
            'id_detail_sdm_5' => $id_detail_sdm_5
        ];
        $data = [
            'nama_uraian_5_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_8_sdm($id_detail_sdm_5)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_5($id_detail_sdm_5);
        $data['id_detail_sdm_4'] = $this->input->post('id_detail_sdm_4');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_8', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_6($id_detail_sdm_5);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 9 sdm
    // Update Nilai Level 9
    public function by_id_detail_sdm_6($id_detail_sdm_6)
    {
        // 6
        // _5
        $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
        $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
        $result_detail_sdm_6 = $this->Data_kontrak_model->result_detail_sdm_6_by_id_sdm_detail($id_detail_sdm_5);
        $data = [
            'row_sdm_detail_6' => $row_sdm_detail_6,
            'result_detail_sdm_6' => $result_detail_sdm_6
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_9_sdm()
    {
        $this->load->view('sdm/nilai_level_9');
        // 47
    }

    public function tambah_nama_uraian_level_9_sdm()
    {
        $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
        $row_detail_sdm_6 =  $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
        $row_no_urut = $row_detail_sdm_6['no_urut_6_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_7($id_detail_sdm_6);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_sdm_6' => $id_detail_sdm_6,
                'nama_uraian_7_sdm' => $this->input->post('nama_uraian'),
                'no_urut_7_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_sdm_6' => $id_detail_sdm_6,
                'nama_uraian_7_sdm' => $this->input->post('nama_uraian'),
                'no_urut_7_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_7($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_9_sdm()
    {
        $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
        $where = [
            'id_detail_sdm_6' => $id_detail_sdm_6
        ];
        $data = [
            'nama_uraian_6_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_9_sdm($id_detail_sdm_6)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_6($id_detail_sdm_6);
        $data['id_detail_sdm_5'] = $this->input->post('id_detail_sdm_5');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_9', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_7($id_detail_sdm_6);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 10 sdm
    // Update Nilai Level 10
    public function by_id_detail_sdm_7($id_detail_sdm_7)
    {
        // 7
        // _6
        $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
        $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
        $result_detail_sdm_7 = $this->Data_kontrak_model->result_detail_sdm_7_by_id_sdm_detail($id_detail_sdm_6);
        $data = [
            'row_sdm_detail_7' => $row_sdm_detail_7,
            'result_detail_sdm_7' => $result_detail_sdm_7
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_10_sdm()
    {
        $this->load->view('sdm/nilai_level_10');
        // 48
    }

    public function tambah_nama_uraian_level_10_sdm()
    {
        $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
        $row_detail_sdm_7 =  $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
        $row_no_urut = $row_detail_sdm_7['no_urut_7_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_8($id_detail_sdm_7);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_sdm_7' => $id_detail_sdm_7,
                'nama_uraian_8_sdm' => $this->input->post('nama_uraian'),
                'no_urut_8_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_sdm_7' => $id_detail_sdm_7,
                'nama_uraian_8_sdm' => $this->input->post('nama_uraian'),
                'no_urut_8_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_8($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_10_sdm()
    {
        $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
        $where = [
            'id_detail_sdm_7' => $id_detail_sdm_7
        ];
        $data = [
            'nama_uraian_7_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_10_sdm($id_detail_sdm_7)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_7($id_detail_sdm_7);
        $data['id_detail_sdm_6'] = $this->input->post('id_detail_sdm_6');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_10', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_8($id_detail_sdm_7);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 11 sdm
    // Update Nilai Level 11
    public function by_id_detail_sdm_8($id_detail_sdm_8)
    {
        // 8
        // _7
        $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
        $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
        $result_detail_sdm_8 = $this->Data_kontrak_model->result_detail_sdm_8_by_id_sdm_detail($id_detail_sdm_7);
        $data = [
            'row_sdm_detail_8' => $row_sdm_detail_8,
            'result_detail_sdm_8' => $result_detail_sdm_8
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_11_sdm()
    {
        // 49
        $this->load->view('sdm/nilai_level_11');
    }

    public function tambah_nama_uraian_level_11_sdm()
    {
        $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
        $row_detail_sdm_8 =  $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
        $row_no_urut = $row_detail_sdm_8['no_urut_8_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_9($id_detail_sdm_8);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_sdm_8' => $id_detail_sdm_8,
                'nama_uraian_9_sdm' => $this->input->post('nama_uraian'),
                'no_urut_9_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_sdm_8' => $id_detail_sdm_8,
                'nama_uraian_9_sdm' => $this->input->post('nama_uraian'),
                'no_urut_9_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_9($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_11_sdm()
    {
        $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
        $where = [
            'id_detail_sdm_8' => $id_detail_sdm_8
        ];
        $data = [
            'nama_uraian_8_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_11_sdm($id_detail_sdm_8)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_8($id_detail_sdm_8);
        $data['id_detail_sdm_7'] = $this->input->post('id_detail_sdm_7');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_11', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_9($id_detail_sdm_8);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 12 sdm
    // Update Nilai Level 12
    public function by_id_detail_sdm_9($id_detail_sdm_9)
    {
        // 9
        // _8
        $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);
        $id_detail_sdm_8 = $row_sdm_detail_9['id_detail_sdm_8'];
        $result_detail_sdm_9 = $this->Data_kontrak_model->result_detail_sdm_9_by_id_sdm_detail($id_detail_sdm_8);
        $data = [
            'row_sdm_detail_9' => $row_sdm_detail_9,
            'result_detail_sdm_9' => $result_detail_sdm_9
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_12_sdm()
    {
        //  50
        $this->load->view('sdm/nilai_level_12');
    }

    public function tambah_nama_uraian_level_12_sdm()
    {
        $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
        $row_detail_sdm_9 =  $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);
        $row_no_urut = $row_detail_sdm_9['no_urut_9_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_10($id_detail_sdm_9);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_sdm_9' => $id_detail_sdm_9,
                'nama_uraian_10_sdm' => $this->input->post('nama_uraian'),
                'no_urut_10_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_sdm_9' => $id_detail_sdm_9,
                'nama_uraian_10_sdm' => $this->input->post('nama_uraian'),
                'no_urut_10_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_10($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_12_sdm()
    {
        $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
        $where = [
            'id_detail_sdm_9' => $id_detail_sdm_9
        ];
        $data = [
            'nama_uraian_9_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_9($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_12_sdm($id_detail_sdm_9)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_9($id_detail_sdm_9);
        $data['id_detail_sdm_8'] = $this->input->post('id_detail_sdm_8');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_12', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_10($id_detail_sdm_9);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
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
        $id_unit_price = $row_unit_price_1['id_unit_price'];
        $result_unit_price_1 = $this->Data_kontrak_model->by_result_unit_price_1($id_unit_price);
        $data = [
            'row_unit_price_1' => $row_unit_price_1,
            'result_unit_price_1' => $result_unit_price_1
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


    // BATAS UNIT PRICE 2
    public function by_id_unit_price_2($id_unit_price_2)
    {
        $row_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
        $id_unit_price_1 = $row_unit_price_2['id_unit_price_1'];
        $result_unit_price_2 = $this->Data_kontrak_model->by_result_unit_price_2($id_unit_price_1);
        $data = [
            'row_unit_price_2' => $row_unit_price_2,
            'result_unit_price_2' => $result_unit_price_2

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
        $id_unit_price_2 = $row_unit_price_3['id_unit_price_2'];
        $result_unit_price_3 = $this->Data_kontrak_model->by_result_unit_price_3($id_unit_price_2);
        $data = [
            'row_unit_price_3' => $row_unit_price_3,
            'result_unit_price_3' => $result_unit_price_3

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
        $id_unit_price_3 = $row_unit_price_4['id_unit_price_3'];
        $result_unit_price_4 = $this->Data_kontrak_model->by_result_unit_price_4($id_unit_price_3);
        $data = [
            'row_unit_price_4' => $row_unit_price_4,
            'result_unit_price_4' => $result_unit_price_4

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
        $id_unit_price_4 = $row_unit_price_5['id_unit_price_4'];
        $result_unit_price_5 = $this->Data_kontrak_model->by_result_unit_price_5($id_unit_price_4);
        $data = [
            'row_unit_price_5' => $row_unit_price_5,
            'result_unit_price_5' => $result_unit_price_5

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
        $id_unit_price_5 = $row_unit_price_6['id_unit_price_5'];
        $result_unit_price_6 = $this->Data_kontrak_model->by_result_unit_price_6($id_unit_price_5);
        $data = [
            'row_unit_price_6' => $row_unit_price_6,
            'result_unit_price_6' => $result_unit_price_6

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
        $id_unit_price_6 = $row_unit_price_7['id_unit_price_6'];
        $result_unit_price_7 = $this->Data_kontrak_model->by_result_unit_price_7($id_unit_price_6);
        $data = [
            'row_unit_price_7' => $row_unit_price_7,
            'result_unit_price_7' => $result_unit_price_7

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
        $id_unit_price_7 = $row_unit_price_8['id_unit_price_7'];
        $result_unit_price_8 = $this->Data_kontrak_model->by_result_unit_price_8($id_unit_price_7);
        $data = [
            'row_unit_price_8' => $row_unit_price_8,
            'result_unit_price_8' => $result_unit_price_8

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
        $id_unit_price_8 = $row_unit_price_9['id_unit_price_8'];
        $result_unit_price_9 = $this->Data_kontrak_model->by_result_unit_price_9($id_unit_price_8);
        $data = [
            'row_unit_price_9' => $row_unit_price_9,
            'result_unit_price_9' => $result_unit_price_9

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



    public function data_get_dok_penunjang($id_kontrak)
    {
        $sts_dokumen = $this->input->post('add');
        $resultss = $this->Data_kontrak_model->get_data_dok_penunjang($id_kontrak, $sts_dokumen);
        $no = $_POST['start'];
        // $total = 0;
        $data = [];
        foreach ($resultss as $angga) {
            $row = array();
            $row[] = ++$no;
            $row[] = $angga->nama_file_dok_penunjang;
            $row[] = '<a href=' . base_url('/file_dokumen_penunjang' . '/' . $angga->file_dokumen_penunjang) . '>' . '<img width="30px" src=' . base_url('assets/pdf.png') . ' >' . '</a>';
            $row[] = '<a href="javascript:;" class="btn btn-danger  btn-block btn-sm" onClick="hapus_dok_penunjang(' . "'" . $angga->id_dokumen_penunjang . "','hapus_dok_penunjang'" . ')">  <i class="fas fa-trash"></i> Hapus</a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_kontrak_model->count_all_get_data_dok_penunjang($id_kontrak, $sts_dokumen),
            "recordsFiltered" => $this->Data_kontrak_model->count_filtered_get_data_dok_penunjang($id_kontrak, $sts_dokumen),
            "data" => $data,
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function add_dok_penunjang()
    {
        $id_kontrak = $this->input->post('id_kontrak');
        $sts_dokumen = $this->input->post('sts_dokumen');
        $nama_file_dok_penunjang = $this->input->post('nama_file_dok_penunjang');
        $config['upload_path'] = './file_dokumen_penunjang/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 0;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_dokumen_penunjang')) {
            $fileData = $this->upload->data();
            $upload = [
                'id_kontrak' => $id_kontrak,
                'sts_dokumen' => $sts_dokumen,
                'nama_file_dok_penunjang' => $nama_file_dok_penunjang,
                'file_dokumen_penunjang' => $fileData['file_name'],
            ];
            $this->Data_kontrak_model->create_dok_penunjang($upload);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('upload'));
        }
    }
    public function hapus_dok_penunjang($id_dokumen_penunjang)
    {
        $this->Data_kontrak_model->deletedata_dok_penunjang($id_dokumen_penunjang);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function pindahkan_turunan_capex()
    {
        $type = $this->input->post('type');
        $no_urut_ubah = $this->input->post('no_urut_ubah');
        if ($type == 1.1) {
            $id_capex_detail = $this->input->post('id_ubah');
            $where = [
                'id_capex_detail' => $id_capex_detail
            ];
            $data = [
                'no_urut' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_capex_detail($where, $data);
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
        } else { }
    }

    //opex
    public function pindahkan_turunan_opex()
    {
        $type = $this->input->post('type');
        $no_urut_ubah = $this->input->post('no_urut_ubah');
        if ($type == 2.1) {
            $id_opex_detail = $this->input->post('id_ubah');
            $where = [
                'id_opex_detail' => $id_opex_detail
            ];
            $data = [
                'no_urut' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_opex_detail($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 2.2) {
            $id_detail_opex_1 = $this->input->post('id_ubah');
            $where = [
                'id_detail_opex_1' => $id_detail_opex_1
            ];
            $data = [
                'no_urut_1_opex' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_opex_1($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 2.3) {
            $id_detail_opex_2 = $this->input->post('id_ubah');
            $where = [
                'id_detail_opex_2' => $id_detail_opex_2
            ];
            $data = [
                'no_urut_2_opex' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_opex_2($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 2.4) {
            $id_detail_opex_3 = $this->input->post('id_ubah');
            $where = [
                'id_detail_opex_3' => $id_detail_opex_3
            ];
            $data = [
                'no_urut_3_opex' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_opex_3($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 2.5) {
            $id_detail_opex_4 = $this->input->post('id_ubah');
            $where = [
                'id_detail_opex_4' => $id_detail_opex_4
            ];
            $data = [
                'no_urut_4_opex' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_opex_4($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 2.6) {
            $id_detail_opex_5 = $this->input->post('id_ubah');
            $where = [
                'id_detail_opex_5' => $id_detail_opex_5
            ];
            $data = [
                'no_urut_5_opex' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_opex_5($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else { }
    }

    //bua
    public function pindahkan_turunan_bua()
    {
        $type = $this->input->post('type');
        $no_urut_ubah = $this->input->post('no_urut_ubah');
        if ($type == 3.1) {
            $id_bua_detail = $this->input->post('id_ubah');
            $where = [
                'id_bua_detail' => $id_bua_detail
            ];
            $data = [
                'no_urut' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_bua_detail($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 3.2) {
            $id_detail_bua_1 = $this->input->post('id_ubah');
            $where = [
                'id_detail_bua_1' => $id_detail_bua_1
            ];
            $data = [
                'no_urut_1_bua' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_bua_1($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 3.3) {
            $id_detail_bua_2 = $this->input->post('id_ubah');
            $where = [
                'id_detail_bua_2' => $id_detail_bua_2
            ];
            $data = [
                'no_urut_2_bua' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_bua_2($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 3.4) {
            $id_detail_bua_3 = $this->input->post('id_ubah');
            $where = [
                'id_detail_bua_3' => $id_detail_bua_3
            ];
            $data = [
                'no_urut_3_bua' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_bua_3($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 3.5) {
            $id_detail_bua_4 = $this->input->post('id_ubah');
            $where = [
                'id_detail_bua_4' => $id_detail_bua_4
            ];
            $data = [
                'no_urut_4_bua' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_bua_4($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 3.6) {
            $id_detail_bua_5 = $this->input->post('id_ubah');
            $where = [
                'id_detail_bua_5' => $id_detail_bua_5
            ];
            $data = [
                'no_urut_5_bua' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_bua_5($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else { }
    }

    //sdm
    public function pindahkan_turunan_sdm()
    {
        $type = $this->input->post('type');
        $no_urut_ubah = $this->input->post('no_urut_ubah');
        if ($type == 4.1) {
            $id_sdm_detail = $this->input->post('id_ubah');
            $where = [
                'id_sdm_detail' => $id_sdm_detail
            ];
            $data = [
                'no_urut' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_sdm_detail($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 4.2) {
            $id_detail_sdm_1 = $this->input->post('id_ubah');
            $where = [
                'id_detail_sdm_1' => $id_detail_sdm_1
            ];
            $data = [
                'no_urut_1_sdm' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_sdm_1($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 4.3) {
            $id_detail_sdm_2 = $this->input->post('id_ubah');
            $where = [
                'id_detail_sdm_2' => $id_detail_sdm_2
            ];
            $data = [
                'no_urut_2_sdm' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_sdm_2($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 4.4) {
            $id_detail_sdm_3 = $this->input->post('id_ubah');
            $where = [
                'id_detail_sdm_3' => $id_detail_sdm_3
            ];
            $data = [
                'no_urut_3_sdm' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_sdm_3($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 4.5) {
            $id_detail_sdm_4 = $this->input->post('id_ubah');
            $where = [
                'id_detail_sdm_4' => $id_detail_sdm_4
            ];
            $data = [
                'no_urut_4_sdm' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_sdm_4($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else if ($type == 4.6) {
            $id_detail_sdm_5 = $this->input->post('id_ubah');
            $where = [
                'id_detail_sdm_5' => $id_detail_sdm_5
            ];
            $data = [
                'no_urut_5_sdm' => $no_urut_ubah,
            ];
            $this->Data_kontrak_model->update_urutan_detail_sdm_5($where, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else { }
    }
    public function update_ppn_kontrak_addendum()
    {
        $id_kontrak =  $this->input->post('id_kontrak');
        $data_addendum =  $this->input->post('data_addendum');
        $ppn_kontrak_addendum =  $this->input->post('ppn_kontrak_addendum');
        $where = [
            'id_kontrak' => $id_kontrak
        ];
        $data = [
            'ppn_kontrak_addendum_' . $data_addendum => $ppn_kontrak_addendum,
        ];
        $this->Data_kontrak_model->update_kontrak($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
}
