<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
class Laporan_kinerja extends CI_Controller
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
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('laporan_kinerja/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('laporan_kinerja/ajax');
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
            $row[] = $rs->nama_departemen . ' ' . $rs->nama_area . ' ' . $rs->nama_sub_area;
            $row[] = $rs->no_kontrak;
            $row[] = $rs->tahun_kontrak;
            $row[] = $rs->tahun_anggaran;
            $row[] = $rs->jenis_kontrak;
            $row[] = '<div class="input-group mb-3">
            <div class="input-group-prepend">
            <button type="button" class="btn btn-outline-primary btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
               Aksi
            </button>
            <div class="dropdown-menu">
            <a href="' . base_url('laporan_kinerja/buat_laporan_kinerja/') . $rs->id_kontrak . '" class="dropdown-item"><i class="fa fa-file-contract"></i> Kelola Laporan</a>
            </div>
            </div>';

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

    public function by_id_sub_laporan_kinerja($id_detail_sub_program_penyedia_jasa)
    {
        $data = $this->Data_kontrak_model->get_by_id_sub_program($id_detail_sub_program_penyedia_jasa);
        $data_lempar = [
            'data_sub' => $data
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_lempar));
    }



    public function buat_laporan_kinerja($id_kontrak)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['row_kontrak'] = $this->Data_kontrak_model->get_by_id_join($id_kontrak);
        $data['id_departemen'] = $data['row_kontrak']['id_departemen'];
        $data['id_area'] = $data['row_kontrak']['id_area'];
        $data['id_sub_area'] = $data['row_kontrak']['id_sub_area'];
        $data['result_dokumen_laporan'] = $this->Data_kontrak_model->get_result_laporan_kinerja_dokumen($id_kontrak);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('laporan_kinerja/new_laporan_kinerja', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('laporan_kinerja/ajax');
    }

    public function buat_laporan_kinerja2($id_kontrak)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['row_kontrak'] = $this->Data_kontrak_model->get_by_id_join($id_kontrak);
        $data['id_departemen'] = $data['row_kontrak']['id_departemen'];
        $data['id_area'] = $data['row_kontrak']['id_area'];
        $data['id_sub_area'] = $data['row_kontrak']['id_sub_area'];
        $data['result_dokumen_laporan'] = $this->Data_kontrak_model->get_result_laporan_kinerja_dokumen($id_kontrak);
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('laporan_kinerja/buat_laporan_kinerja', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('laporan_kinerja/ajax');
    }

    public function view_laporan_periode($id_laporan_periode)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['get_row_laporan_priode'] = $this->Data_kontrak_model->get_row_periode($id_laporan_periode);
        $id_kontrak = $data['get_row_laporan_priode']['id_kontrak'];
        $data['row_kontrak'] = $this->Data_kontrak_model->get_by_id_join($id_kontrak);
        $data['id_departemen'] = $data['row_kontrak']['id_departemen'];
        $data['id_area'] = $data['row_kontrak']['id_area'];
        $data['id_sub_area'] = $data['row_kontrak']['id_sub_area'];
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar', $data);
        $this->load->view('laporan_kinerja/view_laporan_periode', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('laporan_kinerja/ajax');
    }

    public function hapus_laporan_periode($id_laporan_periode)
    {
        $row_laporan_priode = $this->Data_kontrak_model->get_row_periode($id_laporan_periode);
        $row_program_periode = $this->Data_kontrak_model->get_row_detail_program_periode($id_laporan_periode);
        $this->Data_kontrak_model->delete_laporan_periode($row_laporan_priode['id_laporan_periode']);
        $this->Data_kontrak_model->delete_laporan_periode_detail_program($row_laporan_priode['id_laporan_periode']);
        $this->Data_kontrak_model->delete_laporan_periode_sub_detail_program($row_program_periode['id_detail_program_penyedia_jasa']);
        redirect('laporan_kinerja/buat_laporan_kinerja/' . $row_laporan_priode['id_kontrak']);
    }


    public function buat_excel($id_kontrak)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['row_kontrak'] = $this->Data_kontrak_model->get_by_id_join($id_kontrak);
        $data['id_departemen'] = $data['row_kontrak']['id_departemen'];
        $data['id_area'] = $data['row_kontrak']['id_area'];
        $data['id_sub_area'] = $data['row_kontrak']['id_sub_area'];
        $this->load->view('laporan_kinerja/export_excel', $data);
    }

    public function buat_excel_periode($id_laporan_periode)
    {
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['get_row_laporan_priode'] = $this->Data_kontrak_model->get_row_periode($id_laporan_periode);
        $id_kontrak = $data['get_row_laporan_priode']['id_kontrak'];
        $data['row_kontrak'] = $this->Data_kontrak_model->get_by_id_join($id_kontrak);
        $data['id_departemen'] = $data['row_kontrak']['id_departemen'];
        $data['id_area'] = $data['row_kontrak']['id_area'];
        $data['id_sub_area'] = $data['row_kontrak']['id_sub_area'];
        $this->load->view('laporan_kinerja/export_excel_periode', $data);
    }


    public function update_progres_fisik()
    {
        $where = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
        ];
        $update_capex = [
            'persen_progres_fisik' => $this->input->post('persen_progres_fisik'),
            'nilai_kontrak_km' => $this->input->post('nilai_kontrak_km'),
            'prognosa_beban' => $this->input->post('prognosa_beban'),
        ];
        $this->Data_kontrak_model->update_ke_sub_program($where, $update_capex);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function update_pilih_formula()
    {
        $where = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
        ];
        if ($this->input->post('formula_fee_jmtm') == null) {
            $this->output->set_content_type('application/json')->set_output(json_encode('gagal'));
        } else {
            $update_capex = [
                'formula_fee_jmtm' => $this->input->post('formula_fee_jmtm'),
            ];
            $this->Data_kontrak_model->update_ke_sub_program($where, $update_capex);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }





    public function buat_periode_laporan()
    {
        $id_kontrak = $this->input->post('id_kontrak');
        $tanggal_bulan_periode = $this->input->post('tanggal_bulan_periode');
        $keterangan_periode = $this->input->post('keterangan_periode');
        $data = [
            'id_kontrak' => $id_kontrak,
            'tanggal_bulan_periode' => $tanggal_bulan_periode,
            'keterangan_periode' => $keterangan_periode,
        ];
        $this->Data_kontrak_model->simpan_laporan_periode($data);
        $insert_id = $this->db->insert_id();
        $get_program_by_id_kontrak = $this->Data_kontrak_model->get_program_by_id_kontrak($id_kontrak);
        foreach ($get_program_by_id_kontrak as $key => $value) {
            $data = [
                'id_detail_program_penyedia_jasa' => $value['id_detail_program_penyedia_jasa'],
                'id_laporan_periode' => $insert_id,
                'id_kontrak' => $value['id_kontrak'],
                'no_kontrak_penyedia' => $value['no_kontrak_penyedia'],
                'tanggal_kontrak_program' => $value['tanggal_kontrak_program'],
                'tahun_kontrak_program' => $value['tahun_kontrak_program'],
                'nama_pekerjaan_program_mata_anggaran' => $value['nama_pekerjaan_program_mata_anggaran'],
                'created' => $value['created'],
                'nama_penyedia' => $value['nama_penyedia'],
                'id_departemen' => $value['id_departemen'],
                'id_sub_area' => $value['id_sub_area'],
                'id_area' => $value['id_area'],
                'jenis_pengadaan' => $value['jenis_pengadaan'],
                'nilai_rup' => $value['nilai_rup'],
                'total_kontrak' => $value['total_kontrak'],
                'total_kontrak_addendum_1' => $value['total_kontrak_addendum_1'],
                'total_kontrak_addendum_2' => $value['total_kontrak_addendum_2'],
                'total_kontrak_addendum_3' => $value['total_kontrak_addendum_3'],
                'total_kontrak_addendum_4' => $value['total_kontrak_addendum_4'],
                'total_kontrak_addendum_5' => $value['total_kontrak_addendum_5'],
                'total_kontrak_addendum_6' => $value['total_kontrak_addendum_6'],
                'total_kontrak_addendum_7' => $value['total_kontrak_addendum_7'],
                'total_kontrak_addendum_8' => $value['total_kontrak_addendum_8'],
                'total_kontrak_addendum_9' => $value['total_kontrak_addendum_9'],
                'total_kontrak_addendum_10' => $value['total_kontrak_addendum_10'],
                'total_kontrak_addendum_11' => $value['total_kontrak_addendum_11'],
                'total_kontrak_addendum_12' => $value['total_kontrak_addendum_12'],
                'total_kontrak_addendum_13' => $value['total_kontrak_addendum_13'],
                'total_kontrak_addendum_14' => $value['total_kontrak_addendum_14'],
                'total_kontrak_addendum_15' => $value['total_kontrak_addendum_15'],
                'total_kontrak_addendum_16' => $value['total_kontrak_addendum_16'],
                'total_kontrak_addendum_17' => $value['total_kontrak_addendum_17'],
                'total_kontrak_addendum_18' => $value['total_kontrak_addendum_18'],
                'total_kontrak_addendum_19' => $value['total_kontrak_addendum_19'],
                'total_kontrak_addendum_20' => $value['total_kontrak_addendum_20'],
                'total_kontrak_addendum_21' => $value['total_kontrak_addendum_21'],
                'total_kontrak_addendum_22' => $value['total_kontrak_addendum_22'],
                'total_kontrak_addendum_23' => $value['total_kontrak_addendum_23'],
                'total_kontrak_addendum_24' => $value['total_kontrak_addendum_24'],
                'total_kontrak_addendum_25' => $value['total_kontrak_addendum_25'],
                'total_kontrak_addendum_26' => $value['total_kontrak_addendum_26'],
                'total_kontrak_addendum_27' => $value['total_kontrak_addendum_27'],
                'total_kontrak_addendum_28' => $value['total_kontrak_addendum_28'],
                'total_kontrak_addendum_29' => $value['total_kontrak_addendum_29'],
                'total_kontrak_addendum_30' => $value['total_kontrak_addendum_30'],

            ];
            $this->Data_kontrak_model->simpan_laporan_periode_ke_detail_program($data);
            $id_detail_program_penyedia_jasa = $this->db->insert_id();
            $get_sub_program_by_id_kontrak = $this->Data_kontrak_model->get_sub_program_by_id_kontrak($value['id_detail_program_penyedia_jasa']);
            foreach ($get_sub_program_by_id_kontrak as $key => $value2) {
                $data = [
                    'id_detail_sub_program_penyedia_jasa' => $value['id_detail_sub_program_penyedia_jasa'],
                    'id_detail_program_penyedia_jasa' => $value['id_detail_program_penyedia_jasa'],
                    'nama_kontrak_program' => $value2['nama_kontrak_program'],
                    'data' => $value2['data'],
                    'jenis_pengadaan' => $value2['jenis_pengadaan'],
                    'nilai_rup' => $value2['nilai_rup'],
                    'nilai_hps' => $value2['nilai_hps'],
                    'formula_fee_jmtm' => $value2['formula_fee_jmtm'],
                    'nilai_sub_kontrak_penyedia' => $value2['nilai_sub_kontrak_penyedia'],
                    'nama_program_mata_anggaran' => $value2['nama_program_mata_anggaran'],
                    'nilai_program_mata_anggran' => $value2['nilai_program_mata_anggran'],
                    'id_checking' => $value2['id_checking'],
                    'no_add_checking' => $value2['no_add_checking'],
                    'nilai_addendum_terakhir_fq' => $value2['nilai_addendum_terakhir_fq'],
                    'persen_progres_fisik' => $value2['persen_progres_fisik'],
                    'keterangan_laporan' => $value2['keterangan_laporan'],
                    'nilai_kontrak_km' => $value2['nilai_kontrak_km'],
                    'nilai_kontrak_km' => $value2['nilai_kontrak_km'],
                    'prognosa_beban' => $value2['prognosa_beban'],
                    'keterangan_laporan' => $value2['keterangan_laporan'],
                    'status_mata_anggaran_addendum' => $value2['status_mata_anggaran_addendum'],
                    'nilai_sub_kontrak_penyedia_addendum_1' => $value2['nilai_sub_kontrak_penyedia_addendum_1'],
                    'nilai_sub_kontrak_penyedia_addendum_2' => $value2['nilai_sub_kontrak_penyedia_addendum_2'],
                    'nilai_sub_kontrak_penyedia_addendum_3' => $value2['nilai_sub_kontrak_penyedia_addendum_3'],
                    'nilai_sub_kontrak_penyedia_addendum_4' => $value2['nilai_sub_kontrak_penyedia_addendum_4'],
                    'nilai_sub_kontrak_penyedia_addendum_5' => $value2['nilai_sub_kontrak_penyedia_addendum_5'],
                    'nilai_sub_kontrak_penyedia_addendum_6' => $value2['nilai_sub_kontrak_penyedia_addendum_6'],
                    'nilai_sub_kontrak_penyedia_addendum_7' => $value2['nilai_sub_kontrak_penyedia_addendum_7'],
                    'nilai_sub_kontrak_penyedia_addendum_8' => $value2['nilai_sub_kontrak_penyedia_addendum_8'],
                    'nilai_sub_kontrak_penyedia_addendum_9' => $value2['nilai_sub_kontrak_penyedia_addendum_9'],
                    'nilai_sub_kontrak_penyedia_addendum_10' => $value2['nilai_sub_kontrak_penyedia_addendum_10'],
                    'nilai_sub_kontrak_penyedia_addendum_11' => $value2['nilai_sub_kontrak_penyedia_addendum_11'],
                    'nilai_sub_kontrak_penyedia_addendum_12' => $value2['nilai_sub_kontrak_penyedia_addendum_12'],
                    'nilai_sub_kontrak_penyedia_addendum_13' => $value2['nilai_sub_kontrak_penyedia_addendum_13'],
                    'nilai_sub_kontrak_penyedia_addendum_14' => $value2['nilai_sub_kontrak_penyedia_addendum_14'],
                    'nilai_sub_kontrak_penyedia_addendum_15' => $value2['nilai_sub_kontrak_penyedia_addendum_15'],
                    'nilai_sub_kontrak_penyedia_addendum_16' => $value2['nilai_sub_kontrak_penyedia_addendum_16'],
                    'nilai_sub_kontrak_penyedia_addendum_17' => $value2['nilai_sub_kontrak_penyedia_addendum_17'],
                    'nilai_sub_kontrak_penyedia_addendum_18' => $value2['nilai_sub_kontrak_penyedia_addendum_18'],
                    'nilai_sub_kontrak_penyedia_addendum_19' => $value2['nilai_sub_kontrak_penyedia_addendum_19'],
                    'nilai_sub_kontrak_penyedia_addendum_20' => $value2['nilai_sub_kontrak_penyedia_addendum_20'],
                    'nilai_sub_kontrak_penyedia_addendum_21' => $value2['nilai_sub_kontrak_penyedia_addendum_21'],
                    'nilai_sub_kontrak_penyedia_addendum_22' => $value2['nilai_sub_kontrak_penyedia_addendum_22'],
                    'nilai_sub_kontrak_penyedia_addendum_23' => $value2['nilai_sub_kontrak_penyedia_addendum_23'],
                    'nilai_sub_kontrak_penyedia_addendum_24' => $value2['nilai_sub_kontrak_penyedia_addendum_24'],
                    'nilai_sub_kontrak_penyedia_addendum_25' => $value2['nilai_sub_kontrak_penyedia_addendum_25'],
                    'nilai_sub_kontrak_penyedia_addendum_26' => $value2['nilai_sub_kontrak_penyedia_addendum_26'],
                    'nilai_sub_kontrak_penyedia_addendum_27' => $value2['nilai_sub_kontrak_penyedia_addendum_27'],
                    'nilai_sub_kontrak_penyedia_addendum_28' => $value2['nilai_sub_kontrak_penyedia_addendum_28'],
                    'nilai_sub_kontrak_penyedia_addendum_29' => $value2['nilai_sub_kontrak_penyedia_addendum_29'],
                    'nilai_sub_kontrak_penyedia_addendum_30' => $value2['nilai_sub_kontrak_penyedia_addendum_30'],
                    'addendum_ke' => $value2['addendum_ke'],

                ];
                $this->Data_kontrak_model->simpan_laporan_periode_ke_sub_detail_program($data);
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function update_keterangan()
    {
        $where = [
            'id_detail_sub_program_penyedia_jasa' => $this->input->post('id_detail_sub_program_penyedia_jasa'),
        ];
        $update_capex = [
            'keterangan_laporan' => $this->input->post('keterangan_laporan'),
        ];
        $this->Data_kontrak_model->update_ke_sub_program($where, $update_capex);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function upload_laporan()
    {
        $id_kontrak = $this->input->post('id_kontrak');
        $ket_laporan = $this->input->post('ket_laporan');
        $tanggal_laporan = $this->input->post('tanggal_laporan');
        $config['upload_path'] = './dokumen_excel_laporan_kinerja/';
        $config['allowed_types'] = 'xlsx';
        $config['max_size'] = 0;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_excel_laporan')) {
            $fileData = $this->upload->data();
            $upload = [
                'id_kontrak' => $id_kontrak,
                'ket_laporan' => $ket_laporan,
                'tanggal_laporan' => $tanggal_laporan,
                'file_excel_laporan' => $fileData['file_name'],
            ];
            $this->Data_kontrak_model->upload_laporan_kinerja($upload);
            redirect('laporan_kinerja/buat_laporan_kinerja/' . $id_kontrak);
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('upload'));
        }
    }

    public function hapus_dokumen_kinerja($id_dokumen_laporan_kinerja)
    {
        $row_laporan_kinerja = $this->Data_kontrak_model->get_row_laporan_kinerja_dokumen($id_dokumen_laporan_kinerja);
        $id_kontrak = $row_laporan_kinerja['id_kontrak'];
        $this->Data_kontrak_model->delete_dokumen_laporan_periode($id_dokumen_laporan_kinerja);
        redirect('laporan_kinerja/buat_laporan_kinerja/' . $id_kontrak);
    }
}
