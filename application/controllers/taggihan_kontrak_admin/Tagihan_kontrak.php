<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';
error_reporting(0);

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Tagihan_kontrak extends CI_Controller
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
    }
    public function buat_tagihan($id_detail_program_penyedia_jasa)
    {
        $get_pegawai = $this->Auth_model->get_pegawai();
        $data['id_departemen'] = $get_pegawai['id_departemen'];
        $data['id_area'] = $get_pegawai['id_area'];
        $data['id_sub_area'] = $get_pegawai['id_sub_area'];
        $data['row_kontrak'] = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $data['looping_adendum'] = $this->Taggihan_kontrak_admin_model->get_addendum($id_detail_program_penyedia_jasa);
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/index', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax', $data);
    }
    public function by_id_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa)
    {
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);

        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $data = [
            'datakontrak' => $data_tbl_kontrak,
            'get_detail_taggihan' => $data_detail_taggihan,
            'cekkontrak' => $cekkontrak,
            'total_kontrak' => $count,
            'selact_max1' => $select_max_mc1,
            'selact_max2' => $select_max_mc2,
            'vendor_session' => $vendor_session,
            'pegawai' => $pegawai,
            'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
            'no_urut_mc' => $data_urut,
            'jika_ada_um' => $jika_ada_um,
            'row_kontrak' => $row_kontrak
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    // CARI  ADENDUM
    public function get_seacrh_dendum_by_kontrak($id_detail_program_penyedia_jasa = null)
    {
        $result = $this->Taggihan_kontrak_admin_model->GetByKontrakAdendum($id_detail_program_penyedia_jasa);
        $data = [];
        $no = $_POST['start'];
        foreach ($result as $kintek) {
            $row = array();
            $row[] = $kintek->no_addendum;
            $row[] = $kintek->tanggal_addendum;
            $row[] = "Rp " . number_format($kintek->nilai_addendum, 2, ',', '.');
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Taggihan_kontrak_admin_model->count_seacrh_adendum($id_detail_program_penyedia_jasa),
            "recordsFiltered" => $this->Taggihan_kontrak_admin_model->count_filtered_adendum($id_detail_program_penyedia_jasa),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function get_data_traking_mc($id_mc)
    {
        $result = $this->Taggihan_kontrak_admin_model->getdattable_rapot_traking($id_mc);
        $data = [];
        $no = $_POST['start'];
        foreach ($result as $kintek) {
            $row = array();
            $row[] = ++$no;
            $row[] = $kintek->uraian;
            $row[] = $kintek->pic;
            $row[] = $kintek->tanggal_rapot;
            $row[] = $kintek->catatan_rapot;
            $row[] = $kintek->hari_vendor . ' Hari';
            $row[] = $kintek->hari_area . ' Hari';
            $row[] = $kintek->hari_pusat . ' Hari';
            $row[] = $kintek->hari_finance . ' Hari';
            $row[] = $kintek->keterangan_traking;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Taggihan_kontrak_admin_model->count_seacrh_rapot_traking($id_mc),
            "recordsFiltered" => $this->Taggihan_kontrak_admin_model->count_filtered_rapot_traking($id_mc),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
    public function tambah_mc()
    {
        $id_detail_program_penyedia_jasa  = $this->input->post('id_detail_program_penyedia_jasau');
        $jumlah_mc  = $this->input->post('jumlah_mc');
        $tanggal_mc  = $this->input->post('tanggal_mc');
        $jumlah_mcku  = $this->input->post('jumlah_mcku');
        $persen_ppn  = $this->input->post('persen_ppn');
        $cek_um  = $this->input->post('cek_um');
        $no_mc_manipulasi  = $this->input->post('no_mc_manipulasi');
        // retensi
        $sts_retensi  = $this->input->post('sts_retensi');
        $nilai_retensi  = $this->input->post('nilai_retensi');
        $nilai_retensi_tanpa_persen  = $this->input->post('nilai_retensi_tanpa_persen');


        // bobot & denda
        $bobot  = $this->input->post('bobot');
        $denda  = $this->input->post('denda');
        // nilai_uang_muka
        $nilai_uang_muka  = $this->input->post('nilai_uang_muka');
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;
        $startTimeStamp = strtotime($tanggal_mc);
        $endTimeStamp = strtotime(date('Y-m-d'));

        $timeDiff = abs($endTimeStamp - $startTimeStamp);

        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day
        if (!$jumlah_mc) {
            $hasil_setelah_ppn = 0;
            $hasil_ppn_total = 0;
            $jumlah_mc = 0;
        } else {
            if ($persen_ppn == '11') {
                $hitung_persen_total_ppn = $jumlah_mc * 0.11;
            } else {
                $hitung_persen_total_ppn = $jumlah_mc * 0.10;
            }
            $hasil_ppn_total = $hitung_persen_total_ppn;
            $hasil_setelah_ppn = $jumlah_mc + $hasil_ppn_total;
        }


        // and you might want to convert to integer
        $numberDays = intval($numberDays);

        if ($sts_retensi == 1) {
            $total_retensi = $nilai_retensi_tanpa_persen;
        } else {
            $total_retensi = $nilai_retensi;
        }

        if ($cek_um == 'ada') {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'jumlah_mc' => $jumlah_mc,
                'no_mc_manipulasi' => $no_mc_manipulasi,
                'tanggal_mc' => $tanggal_mc,
                'no_mc' => 'um',
                'sd_bulan_lalu' => $jumlah_mc,
                'sd_bulan_ini' => $jumlah_mc,
                'persen_ppn' => $persen_ppn,
                'ppn_total' => $hasil_ppn_total,
                'setelah_ppn' => $hasil_setelah_ppn,
                // retensi
                'nilai_retensi' => $total_retensi,
                'sts_retensi' => $sts_retensi,
                // bobot & denda
                'bobot' => $bobot,
                'denda' => $denda,
                // nilai_uang_muka
                'nilai_uang_muka' => $nilai_uang_muka,
            ];
        } else {
            if ($data_urut == 1) {
                $data = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'jumlah_mc' => $jumlah_mc,
                    'no_mc_manipulasi' => $no_mc_manipulasi,
                    'tanggal_mc' => $tanggal_mc,
                    'no_mc' => $data_urut,
                    'sd_bulan_lalu' => $jumlah_mc,
                    'sd_bulan_ini' => $jumlah_mc,
                    'persen_ppn' => $persen_ppn,
                    'ppn_total' => $hasil_ppn_total,
                    'setelah_ppn' => $hasil_setelah_ppn,
                    // retensi
                    'nilai_retensi' => $total_retensi,
                    'sts_retensi' => $sts_retensi,
                    // bobot & denda
                    'bobot' => $bobot,
                    'denda' => $denda,
                    // nilai_uang_muka
                    'nilai_uang_muka' => $nilai_uang_muka,
                ];
            } else {
                $data = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'jumlah_mc' => $jumlah_mc,
                    'no_mc_manipulasi' => $no_mc_manipulasi,
                    'tanggal_mc' => $tanggal_mc,
                    'no_mc' => $data_urut,
                    'sd_bulan_lalu' => $jumlah_mcku,
                    'persen_ppn' => $persen_ppn,
                    'ppn_total' => $hasil_ppn_total,
                    'setelah_ppn' => $hasil_setelah_ppn,
                    'sd_bulan_ini' => $jumlah_mcku + $jumlah_mc,
                    // retensi
                    'nilai_retensi' => $total_retensi,
                    'sts_retensi' => $sts_retensi,
                    // bobot & denda
                    'bobot' => $bobot,
                    'denda' => $denda,
                    // nilai_uang_muka
                    'nilai_uang_muka' => $nilai_uang_muka,
                ];
            }
        }
        // data
        $this->Taggihan_kontrak_admin_model->insert_mc($data);
        $id_mc = $this->db->insert_id();

        $data_kirim_ke_mc = [
            'id_mc' => $id_mc,
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'id_vendor' => 1,
            'approve_vendor' => 1,
            'jumlah_hari_vendor' => $numberDays,
            'jumlah_hari_area' => 0,
            'jumlah_hari_pusat' => 0,
            'jumlah_hari_finance' => 0,
            'waktu_kirim_vendor' => date('Y-m-d'),
        ];
        $this->Taggihan_kontrak_admin_model->create_file_mc($data_kirim_ke_mc);
        $ambil_mc_edit = $this->Taggihan_kontrak_admin_model->get_only_now_edit($id_mc);
        $ambil_no_mc_edit = $ambil_mc_edit['no_mc'];
        $ambil_kontrak_edit = $ambil_mc_edit['id_detail_program_penyedia_jasa'];
        $data_mc = $this->Taggihan_kontrak_admin_model->generate_update_tambah($ambil_kontrak_edit, $ambil_no_mc_edit);
        $i = 1;
        foreach ($data_mc as $key => $value) {
            // $data_mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($value['id_mc']);
            $data = [
                'no_mc' => $i++,
            ];
            $this->Taggihan_kontrak_admin_model->update_no_mc($value['id_mc'], $data);
        }
        $sd_bulan_ini0 = $data_mc[0]['sd_bulan_ini'];
        // var_dump($data_mc[1]['id_mc']);
        // die;
        if (!isset($data_mc[1])) {
        } else {
            $id_mc1 = $data_mc[1]['id_mc'];
            $jumlah_mc1 = $data_mc[1]['jumlah_mc'];
        }

        if (!isset($data_mc[2])) {
        } else {
            $id_mc2 = $data_mc[2]['id_mc'];
            $jumlah_mc2 = $data_mc[2]['jumlah_mc'];
        }
        if (!isset($data_mc[3])) {
        } else {
            $id_mc3 = $data_mc[3]['id_mc'];
            $jumlah_mc3 = $data_mc[3]['jumlah_mc'];
        }

        if (!isset($data_mc[4])) {
        } else {
            $id_mc4 = $data_mc[4]['id_mc'];
            $jumlah_mc4 = $data_mc[4]['jumlah_mc'];
        }
        if (!isset($data_mc[5])) {
        } else {
            $id_mc5 = $data_mc[5]['id_mc'];
            $jumlah_mc5 = $data_mc[5]['jumlah_mc'];
        }
        if (!isset($data_mc[6])) {
        } else {
            $id_mc6 = $data_mc[6]['id_mc'];
            $jumlah_mc6 = $data_mc[6]['jumlah_mc'];
        }
        if (!isset($data_mc[7])) {
        } else {
            $id_mc7 = $data_mc[7]['id_mc'];
            $jumlah_mc7 = $data_mc[7]['jumlah_mc'];
        }
        if (!isset($data_mc[8])) {
        } else {
            $id_mc8 = $data_mc[8]['id_mc'];
            $jumlah_mc8 = $data_mc[8]['jumlah_mc'];
        }
        if (!isset($data_mc[9])) {
        } else {
            $id_mc9 = $data_mc[9]['id_mc'];
            $jumlah_mc9 = $data_mc[9]['jumlah_mc'];
        }
        if (!isset($data_mc[10])) {
        } else {
            $id_mc10 = $data_mc[10]['id_mc'];
            $jumlah_mc10 = $data_mc[10]['jumlah_mc'];
        }

        // 1
        if (isset($data_mc[1])) {
            $updateAray1 = [
                'sd_bulan_lalu' => $sd_bulan_ini0,
                'jumlah_mc' => $jumlah_mc1,
                'sd_bulan_ini' =>  $sd_bulan_ini0 + $jumlah_mc1,

            ];
            $data_arrayku1 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc1, $updateAray1);
            $mc_real1 = $data_arrayku1['id_mc'];
        } else {
        }
        if (isset($data_mc[2])) {
            $data_row_post_array1 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real1);
            $updateAray2 = [
                'sd_bulan_lalu' => $data_row_post_array1['sd_bulan_ini'],
                'jumlah_mc' => $jumlah_mc2,
                'sd_bulan_ini' =>  $data_row_post_array1['sd_bulan_ini'] + $jumlah_mc2,

            ];
            $data_arrayku2 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc2, $updateAray2);
            $mc_real2 = $data_arrayku2['id_mc'];
        } else {
            // 2
        }
        if (isset($data_mc[3])) {
            // 2
            // 3
            $data_row_post_array2 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real2);
            $updateAray3 = [
                'sd_bulan_lalu' => $data_row_post_array2['sd_bulan_ini'],
                'jumlah_mc' => $jumlah_mc3,
                'sd_bulan_ini' =>  $data_row_post_array2['sd_bulan_ini'] + $jumlah_mc3,

            ];
            $data_arrayku3 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc3, $updateAray3);
            $mc_real3 = $data_arrayku3['id_mc'];
        } else {
            // 3
        }

        if (isset($data_mc[4])) {
            // 1
            // 2
            $data_row_post_array3 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real3);
            $updateAray4 = [
                'sd_bulan_lalu' => $data_row_post_array3['sd_bulan_ini'],
                'jumlah_mc' => $jumlah_mc4,
                'sd_bulan_ini' =>  $data_row_post_array3['sd_bulan_ini'] + $jumlah_mc4,

            ];
            $data_arrayku4 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc4, $updateAray4);
            $mc_real4 = $data_arrayku4['id_mc'];
        } else {

            // 4
        }
        if (isset($data_mc[5])) {
            // 4
            // 5
            $data_row_post_array4 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real4);
            $updateAray5 = [
                'sd_bulan_lalu' => $data_row_post_array4['sd_bulan_ini'],
                'jumlah_mc' => $jumlah_mc5,
                'sd_bulan_ini' =>  $data_row_post_array4['sd_bulan_ini'] + $jumlah_mc5,

            ];
            $data_arrayku5 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc5, $updateAray5);
            $mc_real5 = $data_arrayku5['id_mc'];
        } else {
            // 5
        }
        if (isset($data_mc[6])) {
            // 6
            // 5
            $data_row_post_array5 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real5);
            $updateAray6 = [
                'sd_bulan_lalu' => $data_row_post_array5['sd_bulan_ini'],
                'jumlah_mc' => $jumlah_mc6,
                'sd_bulan_ini' =>  $data_row_post_array5['sd_bulan_ini'] + $jumlah_mc6,

            ];
            $data_arrayku6 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc6, $updateAray6);
            $mc_real6 = $data_arrayku6['id_mc'];
        } else {
            // 6
        }
        if (isset($data_mc[7])) {
            // 7
            // 6
            $data_row_post_array6 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real6);
            $updateAray7 = [
                'sd_bulan_lalu' => $data_row_post_array6['sd_bulan_ini'],
                'jumlah_mc' => $jumlah_mc7,
                'sd_bulan_ini' =>  $data_row_post_array6['sd_bulan_ini'] + $jumlah_mc7,

            ];
            $data_arrayku7 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc7, $updateAray7);
            $mc_real7 = $data_arrayku7['id_mc'];
        } else {
            // 7
        }
        if (isset($data_mc[8])) {
            // 8
            // 7
            $data_row_post_array7 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real7);
            $updateAray8 = [
                'sd_bulan_lalu' => $data_row_post_array7['sd_bulan_ini'],
                'jumlah_mc' => $jumlah_mc8,
                'sd_bulan_ini' =>  $data_row_post_array7['sd_bulan_ini'] + $jumlah_mc8,

            ];
            $data_arrayku8 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc8, $updateAray8);
            $mc_real8 = $data_arrayku8['id_mc'];
        } else {
            // 8
        }
        if (isset($data_mc[9])) {
            // 9
            // 8
            $data_row_post_array8 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real8);
            $updateAray9 = [
                'sd_bulan_lalu' => $data_row_post_array8['sd_bulan_ini'],
                'jumlah_mc' => $jumlah_mc9,
                'sd_bulan_ini' =>  $data_row_post_array8['sd_bulan_ini'] + $jumlah_mc9,

            ];
            $data_arrayku9 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc9, $updateAray9);
            $mc_real9 = $data_arrayku9['id_mc'];
        } else {
            // 9
        }
        if (isset($data_mc[10])) {
            // 10
            // 9
            $data_row_post_array9 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real9);
            $updateAray10 = [
                'sd_bulan_lalu' => $data_row_post_array9['sd_bulan_ini'],
                'jumlah_mc' => $jumlah_mc10,
                'sd_bulan_ini' =>  $data_row_post_array9['sd_bulan_ini'] + $jumlah_mc10,

            ];
            $data_arrayku10 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc10, $updateAray10);
            $mc_real10 = $data_arrayku10['id_mc'];
        } else {
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_mc()
    {
        $id_detail_program_penyedia_jasa  = $this->input->post('id_detail_program_penyedia_jasa');
        $jumlah_mc  = $this->input->post('jumlah_mc');
        $tanggal_mc  = $this->input->post('tanggal_mc');
        $jumlah_mcku  = $this->input->post('jumlah_mc_edit');
        $persen_ppn  = $this->input->post('persen_ppn');
        $cek_um  = $this->input->post('cek_um');
        $data_no_mc  = $this->input->post('data_no_mc');
        $id_mc  = $this->input->post('id_mc');

        // retensi
        $sts_retensi  = $this->input->post('sts_retensi');
        $nilai_retensi  = $this->input->post('nilai_retensi');
        $nilai_retensi_tanpa_persen  = $this->input->post('nilai_retensi_tanpa_persen');


        // bobot & denda
        $bobot  = $this->input->post('bobot_nilai');
        $denda  = $this->input->post('denda');
        // nilai_uang_muka
        $nilai_uang_muka  = $this->input->post('nilai_uang_muka');
        if ($sts_retensi == 1) {
            $total_retensi = $nilai_retensi_tanpa_persen;
        } else {
            $total_retensi = $nilai_retensi;
        }

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;
        $hitung_persen_total_ppn = ($jumlah_mc * $persen_ppn) / 100;
        $hasil_ppn_total = $hitung_persen_total_ppn;
        $hasil_setelah_ppn = $jumlah_mc + $hasil_ppn_total;
        // kondisi generate update
        $ambil_mc_edit = $this->Taggihan_kontrak_admin_model->get_only_now_edit($id_mc);
        $ambil_no_mc_edit = $ambil_mc_edit['no_mc'];
        $ambil_kontrak_edit = $ambil_mc_edit['id_detail_program_penyedia_jasa'];
        // looping by edit 
        if ($cek_um == 'ada') {
            $data = [
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'jumlah_mc' => $jumlah_mc,
                'tanggal_mc' => $tanggal_mc,
                'no_mc' => 'um',
                'sd_bulan_lalu' => $jumlah_mc,
                'sd_bulan_ini' => $jumlah_mc,
                'persen_ppn' => $persen_ppn,
                'ppn_total' => $hasil_ppn_total,
                'setelah_ppn' => $hasil_setelah_ppn,
                // retensi
                'nilai_retensi' => $total_retensi,
                'sts_retensi' => $sts_retensi,
                // bobot & denda
                'bobot' => $bobot,
                'denda' => $denda,
                // nilai_uang_muka
                'nilai_uang_muka' => $nilai_uang_muka,

            ];
            $this->Taggihan_kontrak_admin_model->update_mc($data, $id_mc);
        } else {
            if ($data_no_mc == 'um') {
                $data = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'jumlah_mc' => $jumlah_mc,
                    'tanggal_mc' => $tanggal_mc,
                    'no_mc' => 'um',
                    'sd_bulan_lalu' => $jumlah_mc,
                    'sd_bulan_ini' => $jumlah_mc,
                    'persen_ppn' => $persen_ppn,
                    'ppn_total' => $hasil_ppn_total,
                    'setelah_ppn' => $hasil_setelah_ppn,
                    // retensi
                    'nilai_retensi' => $total_retensi,
                    'sts_retensi' => $sts_retensi,
                    // bobot & denda
                    'bobot' => $bobot,
                    'denda' => $denda,
                    // nilai_uang_muka
                    'nilai_uang_muka' => $nilai_uang_muka,
                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data, $id_mc);
            } else if ($data_no_mc == 1) {
                $data = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'jumlah_mc' => $jumlah_mc,
                    'tanggal_mc' => $tanggal_mc,
                    'no_mc' => $data_no_mc,
                    'sd_bulan_lalu' => $jumlah_mc,
                    'sd_bulan_ini' => $jumlah_mc,
                    'persen_ppn' => $persen_ppn,
                    'ppn_total' => $hasil_ppn_total,
                    'setelah_ppn' => $hasil_setelah_ppn,
                    // retensi
                    'nilai_retensi' => $total_retensi,
                    'sts_retensi' => $sts_retensi,
                    // bobot & denda
                    'bobot' => $bobot,
                    'denda' => $denda,
                    // nilai_uang_muka
                    'nilai_uang_muka' => $nilai_uang_muka,

                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data, $id_mc);
                $data_mc = $this->Taggihan_kontrak_admin_model->generate_update($ambil_kontrak_edit, $ambil_no_mc_edit);
                // array_bulan_ini
                $sd_bulan_ini0 = $data_mc[0]['sd_bulan_ini'];
                // var_dump($data_mc[1]['id_mc']);
                // die;
                if (!isset($data_mc[1])) {
                } else {
                    $id_mc1 = $data_mc[1]['id_mc'];
                    $jumlah_mc1 = $data_mc[1]['jumlah_mc'];
                }

                if (!isset($data_mc[2])) {
                } else {
                    $id_mc2 = $data_mc[2]['id_mc'];
                    $jumlah_mc2 = $data_mc[2]['jumlah_mc'];
                }
                if (!isset($data_mc[3])) {
                } else {
                    $id_mc3 = $data_mc[3]['id_mc'];
                    $jumlah_mc3 = $data_mc[3]['jumlah_mc'];
                }

                if (!isset($data_mc[4])) {
                } else {
                    $id_mc4 = $data_mc[4]['id_mc'];
                    $jumlah_mc4 = $data_mc[4]['jumlah_mc'];
                }
                if (!isset($data_mc[5])) {
                } else {
                    $id_mc5 = $data_mc[5]['id_mc'];
                    $jumlah_mc5 = $data_mc[5]['jumlah_mc'];
                }
                if (!isset($data_mc[6])) {
                } else {
                    $id_mc6 = $data_mc[6]['id_mc'];
                    $jumlah_mc6 = $data_mc[6]['jumlah_mc'];
                }
                if (!isset($data_mc[7])) {
                } else {
                    $id_mc7 = $data_mc[7]['id_mc'];
                    $jumlah_mc7 = $data_mc[7]['jumlah_mc'];
                }
                if (!isset($data_mc[8])) {
                } else {
                    $id_mc8 = $data_mc[8]['id_mc'];
                    $jumlah_mc8 = $data_mc[8]['jumlah_mc'];
                }
                if (!isset($data_mc[9])) {
                } else {
                    $id_mc9 = $data_mc[9]['id_mc'];
                    $jumlah_mc9 = $data_mc[9]['jumlah_mc'];
                }
                if (!isset($data_mc[10])) {
                } else {
                    $id_mc10 = $data_mc[10]['id_mc'];
                    $jumlah_mc10 = $data_mc[10]['jumlah_mc'];
                }
                // 1
                if (isset($data_mc[1])) {
                    $updateAray1 = [
                        'sd_bulan_lalu' => $sd_bulan_ini0,
                        'jumlah_mc' => $jumlah_mc1,
                        'sd_bulan_ini' =>  $sd_bulan_ini0 + $jumlah_mc1,

                    ];
                    $data_arrayku1 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc1, $updateAray1);
                    $mc_real1 = $data_arrayku1['id_mc'];
                } else {
                }
                if (isset($data_mc[2])) {
                    $data_row_post_array1 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real1);
                    $updateAray2 = [
                        'sd_bulan_lalu' => $data_row_post_array1['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc2,
                        'sd_bulan_ini' =>  $data_row_post_array1['sd_bulan_ini'] + $jumlah_mc2,

                    ];
                    $data_arrayku2 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc2, $updateAray2);
                    $mc_real2 = $data_arrayku2['id_mc'];
                } else {
                    // 2
                }
                if (isset($data_mc[3])) {
                    // 2
                    // 3
                    $data_row_post_array2 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real2);
                    $updateAray3 = [
                        'sd_bulan_lalu' => $data_row_post_array2['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc3,
                        'sd_bulan_ini' =>  $data_row_post_array2['sd_bulan_ini'] + $jumlah_mc3,

                    ];
                    $data_arrayku3 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc3, $updateAray3);
                    $mc_real3 = $data_arrayku3['id_mc'];
                } else {
                    // 3
                }

                if (isset($data_mc[4])) {
                    // 1
                    // 2
                    $data_row_post_array3 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real3);
                    $updateAray4 = [
                        'sd_bulan_lalu' => $data_row_post_array3['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc4,
                        'sd_bulan_ini' =>  $data_row_post_array3['sd_bulan_ini'] + $jumlah_mc4,

                    ];
                    $data_arrayku4 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc4, $updateAray4);
                    $mc_real4 = $data_arrayku4['id_mc'];
                } else {

                    // 4
                }
                if (isset($data_mc[5])) {
                    // 4
                    // 5
                    $data_row_post_array4 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real4);
                    $updateAray5 = [
                        'sd_bulan_lalu' => $data_row_post_array4['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc5,
                        'sd_bulan_ini' =>  $data_row_post_array4['sd_bulan_ini'] + $jumlah_mc5,

                    ];
                    $data_arrayku5 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc5, $updateAray5);
                    $mc_real5 = $data_arrayku5['id_mc'];
                } else {
                    // 5
                }
                if (isset($data_mc[6])) {
                    // 6
                    // 5
                    $data_row_post_array5 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real5);
                    $updateAray6 = [
                        'sd_bulan_lalu' => $data_row_post_array5['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc6,
                        'sd_bulan_ini' =>  $data_row_post_array5['sd_bulan_ini'] + $jumlah_mc6,

                    ];
                    $data_arrayku6 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc6, $updateAray6);
                    $mc_real6 = $data_arrayku6['id_mc'];
                } else {
                    // 6
                }
                if (isset($data_mc[7])) {
                    // 7
                    // 6
                    $data_row_post_array6 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real6);
                    $updateAray7 = [
                        'sd_bulan_lalu' => $data_row_post_array6['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc7,
                        'sd_bulan_ini' =>  $data_row_post_array6['sd_bulan_ini'] + $jumlah_mc7,

                    ];
                    $data_arrayku7 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc7, $updateAray7);
                    $mc_real7 = $data_arrayku7['id_mc'];
                } else {
                    // 7
                }
                if (isset($data_mc[8])) {
                    // 8
                    // 7
                    $data_row_post_array7 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real7);
                    $updateAray8 = [
                        'sd_bulan_lalu' => $data_row_post_array7['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc8,
                        'sd_bulan_ini' =>  $data_row_post_array7['sd_bulan_ini'] + $jumlah_mc8,

                    ];
                    $data_arrayku8 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc8, $updateAray8);
                    $mc_real8 = $data_arrayku8['id_mc'];
                } else {
                    // 8
                }
                if (isset($data_mc[9])) {
                    // 9
                    // 8
                    $data_row_post_array8 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real8);
                    $updateAray9 = [
                        'sd_bulan_lalu' => $data_row_post_array8['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc9,
                        'sd_bulan_ini' =>  $data_row_post_array8['sd_bulan_ini'] + $jumlah_mc9,

                    ];
                    $data_arrayku9 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc9, $updateAray9);
                    $mc_real9 = $data_arrayku9['id_mc'];
                } else {
                    // 9
                }
                if (isset($data_mc[10])) {
                    // 10
                    // 9
                    $data_row_post_array9 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real9);
                    $updateAray10 = [
                        'sd_bulan_lalu' => $data_row_post_array9['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc10,
                        'sd_bulan_ini' =>  $data_row_post_array9['sd_bulan_ini'] + $jumlah_mc10,

                    ];
                    $data_arrayku10 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc10, $updateAray10);
                    $mc_real10 = $data_arrayku10['id_mc'];
                } else {
                }
            } else {
                $data = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'jumlah_mc' => $jumlah_mc,
                    'tanggal_mc' => $tanggal_mc,
                    'no_mc' => $data_no_mc,
                    'sd_bulan_lalu' => $jumlah_mcku,
                    'persen_ppn' => $persen_ppn,
                    'ppn_total' => $hasil_ppn_total,
                    'setelah_ppn' => $hasil_setelah_ppn,
                    'sd_bulan_ini' => $jumlah_mcku + $jumlah_mc,
                    // retensi
                    'nilai_retensi' => $total_retensi,
                    'sts_retensi' => $sts_retensi,
                    // bobot & denda
                    'bobot' => $bobot,
                    'denda' => $denda,
                    // nilai_uang_muka
                    'nilai_uang_muka' => $nilai_uang_muka,

                ];

                $this->Taggihan_kontrak_admin_model->update_mc($data, $id_mc);
                $data_mc = $this->Taggihan_kontrak_admin_model->generate_update($ambil_kontrak_edit, $ambil_no_mc_edit);
                // array_bulan_ini
                $sd_bulan_ini0 = $data_mc[0]['sd_bulan_ini'];
                // var_dump($data_mc[1]['id_mc']);
                // die;
                if (!isset($data_mc[1])) {
                } else {
                    $id_mc1 = $data_mc[1]['id_mc'];
                    $jumlah_mc1 = $data_mc[1]['jumlah_mc'];
                }

                if (!isset($data_mc[2])) {
                } else {
                    $id_mc2 = $data_mc[2]['id_mc'];
                    $jumlah_mc2 = $data_mc[2]['jumlah_mc'];
                }
                if (!isset($data_mc[3])) {
                } else {
                    $id_mc3 = $data_mc[3]['id_mc'];
                    $jumlah_mc3 = $data_mc[3]['jumlah_mc'];
                }

                if (!isset($data_mc[4])) {
                } else {
                    $id_mc4 = $data_mc[4]['id_mc'];
                    $jumlah_mc4 = $data_mc[4]['jumlah_mc'];
                }
                if (!isset($data_mc[5])) {
                } else {
                    $id_mc5 = $data_mc[5]['id_mc'];
                    $jumlah_mc5 = $data_mc[5]['jumlah_mc'];
                }
                if (!isset($data_mc[6])) {
                } else {
                    $id_mc6 = $data_mc[6]['id_mc'];
                    $jumlah_mc6 = $data_mc[6]['jumlah_mc'];
                }
                if (!isset($data_mc[7])) {
                } else {
                    $id_mc7 = $data_mc[7]['id_mc'];
                    $jumlah_mc7 = $data_mc[7]['jumlah_mc'];
                }
                if (!isset($data_mc[8])) {
                } else {
                    $id_mc8 = $data_mc[8]['id_mc'];
                    $jumlah_mc8 = $data_mc[8]['jumlah_mc'];
                }
                if (!isset($data_mc[9])) {
                } else {
                    $id_mc9 = $data_mc[9]['id_mc'];
                    $jumlah_mc9 = $data_mc[9]['jumlah_mc'];
                }
                if (!isset($data_mc[10])) {
                } else {
                    $id_mc10 = $data_mc[10]['id_mc'];
                    $jumlah_mc10 = $data_mc[10]['jumlah_mc'];
                }

                // 1
                if (isset($data_mc[1])) {
                    $updateAray1 = [
                        'sd_bulan_lalu' => $sd_bulan_ini0,
                        'jumlah_mc' => $jumlah_mc1,
                        'sd_bulan_ini' =>  $sd_bulan_ini0 + $jumlah_mc1,

                    ];
                    $data_arrayku1 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc1, $updateAray1);
                    $mc_real1 = $data_arrayku1['id_mc'];
                } else {
                }
                if (isset($data_mc[2])) {
                    $data_row_post_array1 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real1);
                    $updateAray2 = [
                        'sd_bulan_lalu' => $data_row_post_array1['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc2,
                        'sd_bulan_ini' =>  $data_row_post_array1['sd_bulan_ini'] + $jumlah_mc2,

                    ];
                    $data_arrayku2 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc2, $updateAray2);
                    $mc_real2 = $data_arrayku2['id_mc'];
                } else {
                    // 2
                }
                if (isset($data_mc[3])) {
                    // 2
                    // 3
                    $data_row_post_array2 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real2);
                    $updateAray3 = [
                        'sd_bulan_lalu' => $data_row_post_array2['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc3,
                        'sd_bulan_ini' =>  $data_row_post_array2['sd_bulan_ini'] + $jumlah_mc3,

                    ];
                    $data_arrayku3 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc3, $updateAray3);
                    $mc_real3 = $data_arrayku3['id_mc'];
                } else {
                    // 3
                }

                if (isset($data_mc[4])) {
                    // 1
                    // 2
                    $data_row_post_array3 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real3);
                    $updateAray4 = [
                        'sd_bulan_lalu' => $data_row_post_array3['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc4,
                        'sd_bulan_ini' =>  $data_row_post_array3['sd_bulan_ini'] + $jumlah_mc4,

                    ];
                    $data_arrayku4 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc4, $updateAray4);
                    $mc_real4 = $data_arrayku4['id_mc'];
                } else {

                    // 4
                }
                if (isset($data_mc[5])) {
                    // 4
                    // 5
                    $data_row_post_array4 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real4);
                    $updateAray5 = [
                        'sd_bulan_lalu' => $data_row_post_array4['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc5,
                        'sd_bulan_ini' =>  $data_row_post_array4['sd_bulan_ini'] + $jumlah_mc5,

                    ];
                    $data_arrayku5 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc5, $updateAray5);
                    $mc_real5 = $data_arrayku5['id_mc'];
                } else {
                    // 5
                }
                if (isset($data_mc[6])) {
                    // 6
                    // 5
                    $data_row_post_array5 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real5);
                    $updateAray6 = [
                        'sd_bulan_lalu' => $data_row_post_array5['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc6,
                        'sd_bulan_ini' =>  $data_row_post_array5['sd_bulan_ini'] + $jumlah_mc6,

                    ];
                    $data_arrayku6 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc6, $updateAray6);
                    $mc_real6 = $data_arrayku6['id_mc'];
                } else {
                    // 6
                }
                if (isset($data_mc[7])) {
                    // 7
                    // 6
                    $data_row_post_array6 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real6);
                    $updateAray7 = [
                        'sd_bulan_lalu' => $data_row_post_array6['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc7,
                        'sd_bulan_ini' =>  $data_row_post_array6['sd_bulan_ini'] + $jumlah_mc7,

                    ];
                    $data_arrayku7 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc7, $updateAray7);
                    $mc_real7 = $data_arrayku7['id_mc'];
                } else {
                    // 7
                }
                if (isset($data_mc[8])) {
                    // 8
                    // 7
                    $data_row_post_array7 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real7);
                    $updateAray8 = [
                        'sd_bulan_lalu' => $data_row_post_array7['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc8,
                        'sd_bulan_ini' =>  $data_row_post_array7['sd_bulan_ini'] + $jumlah_mc8,

                    ];
                    $data_arrayku8 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc8, $updateAray8);
                    $mc_real8 = $data_arrayku8['id_mc'];
                } else {
                    // 8
                }
                if (isset($data_mc[9])) {
                    // 9
                    // 8
                    $data_row_post_array8 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real8);
                    $updateAray9 = [
                        'sd_bulan_lalu' => $data_row_post_array8['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc9,
                        'sd_bulan_ini' =>  $data_row_post_array8['sd_bulan_ini'] + $jumlah_mc9,

                    ];
                    $data_arrayku9 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc9, $updateAray9);
                    $mc_real9 = $data_arrayku9['id_mc'];
                } else {
                    // 9
                }
                if (isset($data_mc[10])) {
                    // 10
                    // 9
                    $data_row_post_array9 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real9);
                    $updateAray10 = [
                        'sd_bulan_lalu' => $data_row_post_array9['sd_bulan_ini'],
                        'jumlah_mc' => $jumlah_mc10,
                        'sd_bulan_ini' =>  $data_row_post_array9['sd_bulan_ini'] + $jumlah_mc10,

                    ];
                    $data_arrayku10 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc10, $updateAray10);
                    $mc_real10 = $data_arrayku10['id_mc'];
                } else {
                }
            }
        }

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function pindahkan_turunan()
    {
        $no_urut_ubah = $this->input->post('no_urut_ubah');
        $id_mc = $this->input->post('id_ubah');
        $data = [
            'no_mc_manipulasi' => $no_urut_ubah,
        ];
        $this->Taggihan_kontrak_admin_model->update_mc($data, $id_mc);
        $ambil_mc_edit = $this->Taggihan_kontrak_admin_model->get_only_now_edit($id_mc);
        $ambil_no_mc_edit = $ambil_mc_edit['no_mc'];
        $ambil_kontrak_edit = $ambil_mc_edit['id_detail_program_penyedia_jasa'];
        $data_mc = $this->Taggihan_kontrak_admin_model->generate_update_pindah($ambil_kontrak_edit, $ambil_no_mc_edit);
        $i = 1;
        foreach ($data_mc as $key => $value) {
            // $data_mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($value['id_mc']);
            $data = [
                'no_mc' => $i++,
            ];
            $this->Taggihan_kontrak_admin_model->update_no_mc($value['id_mc'], $data);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function hapus_traking($id_mc)
    {
        $ambil_mc_edit = $this->Taggihan_kontrak_admin_model->get_only_now_edit($id_mc);
        $ambil_no_mc_edit = $ambil_mc_edit['no_mc'];
        $ambil_kontrak_edit = $ambil_mc_edit['id_detail_program_penyedia_jasa'];
        if ($ambil_no_mc_edit == 'um' || $ambil_no_mc_edit == 1) {
            $this->Taggihan_kontrak_admin_model->hapus_mc($id_mc);
        } else {
            $this->Taggihan_kontrak_admin_model->hapus_mc($id_mc);
            $data_mc = $this->Taggihan_kontrak_admin_model->generate_update_hapus($ambil_kontrak_edit);
            $i = 1;
            foreach ($data_mc as $key => $value) {
                // $data_mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($value['id_mc']);
                $data = [
                    'no_mc' => $i++,
                ];
                $this->Taggihan_kontrak_admin_model->update_no_mc($value['id_mc'], $data);
            }
            $sd_bulan_ini0 = $data_mc[0]['sd_bulan_ini'];
            // var_dump($data_mc[1]['id_mc']);
            // die;
            if (!isset($data_mc[1])) {
            } else {
                $id_mc1 = $data_mc[1]['id_mc'];
                $jumlah_mc1 = $data_mc[1]['jumlah_mc'];
            }

            if (!isset($data_mc[2])) {
            } else {
                $id_mc2 = $data_mc[2]['id_mc'];
                $jumlah_mc2 = $data_mc[2]['jumlah_mc'];
            }
            if (!isset($data_mc[3])) {
            } else {
                $id_mc3 = $data_mc[3]['id_mc'];
                $jumlah_mc3 = $data_mc[3]['jumlah_mc'];
            }

            if (!isset($data_mc[4])) {
            } else {
                $id_mc4 = $data_mc[4]['id_mc'];
                $jumlah_mc4 = $data_mc[4]['jumlah_mc'];
            }
            if (!isset($data_mc[5])) {
            } else {
                $id_mc5 = $data_mc[5]['id_mc'];
                $jumlah_mc5 = $data_mc[5]['jumlah_mc'];
            }
            if (!isset($data_mc[6])) {
            } else {
                $id_mc6 = $data_mc[6]['id_mc'];
                $jumlah_mc6 = $data_mc[6]['jumlah_mc'];
            }
            if (!isset($data_mc[7])) {
            } else {
                $id_mc7 = $data_mc[7]['id_mc'];
                $jumlah_mc7 = $data_mc[7]['jumlah_mc'];
            }
            if (!isset($data_mc[8])) {
            } else {
                $id_mc8 = $data_mc[8]['id_mc'];
                $jumlah_mc8 = $data_mc[8]['jumlah_mc'];
            }
            if (!isset($data_mc[9])) {
            } else {
                $id_mc9 = $data_mc[9]['id_mc'];
                $jumlah_mc9 = $data_mc[9]['jumlah_mc'];
            }
            if (!isset($data_mc[10])) {
            } else {
                $id_mc10 = $data_mc[10]['id_mc'];
                $jumlah_mc10 = $data_mc[10]['jumlah_mc'];
            }

            // 1
            if (isset($data_mc[1])) {
                $updateAray1 = [
                    'sd_bulan_lalu' => $sd_bulan_ini0,
                    'jumlah_mc' => $jumlah_mc1,
                    'sd_bulan_ini' =>  $sd_bulan_ini0 + $jumlah_mc1,

                ];
                $data_arrayku1 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc1, $updateAray1);
                $mc_real1 = $data_arrayku1['id_mc'];
            } else {
            }
            if (isset($data_mc[2])) {
                $data_row_post_array1 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real1);
                $updateAray2 = [
                    'sd_bulan_lalu' => $data_row_post_array1['sd_bulan_ini'],
                    'jumlah_mc' => $jumlah_mc2,
                    'sd_bulan_ini' =>  $data_row_post_array1['sd_bulan_ini'] + $jumlah_mc2,

                ];
                $data_arrayku2 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc2, $updateAray2);
                $mc_real2 = $data_arrayku2['id_mc'];
            } else {
                // 2
            }
            if (isset($data_mc[3])) {
                // 2
                // 3
                $data_row_post_array2 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real2);
                $updateAray3 = [
                    'sd_bulan_lalu' => $data_row_post_array2['sd_bulan_ini'],
                    'jumlah_mc' => $jumlah_mc3,
                    'sd_bulan_ini' =>  $data_row_post_array2['sd_bulan_ini'] + $jumlah_mc3,

                ];
                $data_arrayku3 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc3, $updateAray3);
                $mc_real3 = $data_arrayku3['id_mc'];
            } else {
                // 3
            }

            if (isset($data_mc[4])) {
                // 1
                // 2
                $data_row_post_array3 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real3);
                $updateAray4 = [
                    'sd_bulan_lalu' => $data_row_post_array3['sd_bulan_ini'],
                    'jumlah_mc' => $jumlah_mc4,
                    'sd_bulan_ini' =>  $data_row_post_array3['sd_bulan_ini'] + $jumlah_mc4,

                ];
                $data_arrayku4 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc4, $updateAray4);
                $mc_real4 = $data_arrayku4['id_mc'];
            } else {

                // 4
            }
            if (isset($data_mc[5])) {
                // 4
                // 5
                $data_row_post_array4 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real4);
                $updateAray5 = [
                    'sd_bulan_lalu' => $data_row_post_array4['sd_bulan_ini'],
                    'jumlah_mc' => $jumlah_mc5,
                    'sd_bulan_ini' =>  $data_row_post_array4['sd_bulan_ini'] + $jumlah_mc5,

                ];
                $data_arrayku5 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc5, $updateAray5);
                $mc_real5 = $data_arrayku5['id_mc'];
            } else {
                // 5
            }
            if (isset($data_mc[6])) {
                // 6
                // 5
                $data_row_post_array5 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real5);
                $updateAray6 = [
                    'sd_bulan_lalu' => $data_row_post_array5['sd_bulan_ini'],
                    'jumlah_mc' => $jumlah_mc6,
                    'sd_bulan_ini' =>  $data_row_post_array5['sd_bulan_ini'] + $jumlah_mc6,

                ];
                $data_arrayku6 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc6, $updateAray6);
                $mc_real6 = $data_arrayku6['id_mc'];
            } else {
                // 6
            }
            if (isset($data_mc[7])) {
                // 7
                // 6
                $data_row_post_array6 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real6);
                $updateAray7 = [
                    'sd_bulan_lalu' => $data_row_post_array6['sd_bulan_ini'],
                    'jumlah_mc' => $jumlah_mc7,
                    'sd_bulan_ini' =>  $data_row_post_array6['sd_bulan_ini'] + $jumlah_mc7,

                ];
                $data_arrayku7 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc7, $updateAray7);
                $mc_real7 = $data_arrayku7['id_mc'];
            } else {
                // 7
            }
            if (isset($data_mc[8])) {
                // 8
                // 7
                $data_row_post_array7 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real7);
                $updateAray8 = [
                    'sd_bulan_lalu' => $data_row_post_array7['sd_bulan_ini'],
                    'jumlah_mc' => $jumlah_mc8,
                    'sd_bulan_ini' =>  $data_row_post_array7['sd_bulan_ini'] + $jumlah_mc8,

                ];
                $data_arrayku8 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc8, $updateAray8);
                $mc_real8 = $data_arrayku8['id_mc'];
            } else {
                // 8
            }
            if (isset($data_mc[9])) {
                // 9
                // 8
                $data_row_post_array8 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real8);
                $updateAray9 = [
                    'sd_bulan_lalu' => $data_row_post_array8['sd_bulan_ini'],
                    'jumlah_mc' => $jumlah_mc9,
                    'sd_bulan_ini' =>  $data_row_post_array8['sd_bulan_ini'] + $jumlah_mc9,

                ];
                $data_arrayku9 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc9, $updateAray9);
                $mc_real9 = $data_arrayku9['id_mc'];
            } else {
                // 9
            }
            if (isset($data_mc[10])) {
                // 10
                // 9
                $data_row_post_array9 = $this->Taggihan_kontrak_admin_model->cek_row_mc($mc_real9);
                $updateAray10 = [
                    'sd_bulan_lalu' => $data_row_post_array9['sd_bulan_ini'],
                    'jumlah_mc' => $jumlah_mc10,
                    'sd_bulan_ini' =>  $data_row_post_array9['sd_bulan_ini'] + $jumlah_mc10,

                ];
                $data_arrayku10 = $this->Taggihan_kontrak_admin_model->upadte_aray1($id_mc10, $updateAray10);
                $mc_real10 = $data_arrayku10['id_mc'];
            } else {
            }
            // array_bulan_ini
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // cek row_mc_rapot_dummy
    public function by_id_mc_rapot($id_mc)
    {
        $row_rapot = $this->Taggihan_kontrak_admin_model->cek_row_rapot_dummy($id_mc);
        $data = [
            'row_rapot_dummy' => $row_rapot,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    // cek row_mc
    public function by_id_mc($id_mc)
    {
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);

        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak
            ];
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function upload_file_mc()
    {
        $id_mc = $this->input->post('id_mc_upload');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasau_mc_upload');
        $ket_vendor = $this->input->post('keterangan_upload_mc');

        // jumlah hari waktu upload vendor sampai di approve area 10 hari
        $date = date_create(date('Y-m-d'));
        date_modify($date, '+10 day');

        $config['upload_path'] = './file_maping/file_mc/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 0;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_mc')) {
            $fileData = $this->upload->data();
            $upload = [
                'id_mc' => $id_mc,
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'id_vendor' => 1,
                'ket_vendor' => $ket_vendor,
                'approve_vendor' => 1,
                'awal_aprove_vendor' => date('Y-m-d'),
                'batas_aprove_vendor' => date_format($date, 'Y-m-d'),
                'jumlah_hari_vendor' => 10,
                'file_mc' => $fileData['file_name'],
            ];
            $data = [
                'status_penaggihan' => 1
            ];
            $this->Taggihan_kontrak_admin_model->create_file_mc($upload);
            $this->Taggihan_kontrak_admin_model->update_mc($data, $id_mc);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }


    public function revisi_finance()
    {
        $ket_finance = $this->input->post('ket_finance');
        $id_mc_traking = $this->input->post('id_mc_traking');
        $id_traking = $this->input->post('id_traking');
        $data_penagihan = [
            'status_penaggihan' => 0
        ];
        $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc_traking);
        $this->Taggihan_kontrak_admin_model->delete_mc_traking($id_traking);
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'emiliapramuja0000@gmail.com',
            'smtp_pass' => 'emiliapramsco0000',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('emiliapramuja0000@gmail.com', 'FINANCE APROVEL JMTM');
        // Email penerima
        $this->email->to('anggapramuja0000@gmail.com'); // Ganti dengan email tujuan

        // Subject email
        $this->email->subject('Permintaan Revisi FINANCE JMTM');

        // Isi email
        $this->email->message($ket_finance);

        $this->email->send();
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }



    public function cekdatae()
    {
        $awal_aprove_vendor = "2022-08-10";
        $date = new DateTime($awal_aprove_vendor);
        $date_plus = $date->modify("+10 days");
        echo $date_plus->format("Y-m-d");

        //    $date = date_create($tanggal_mc);
        // date_modify($date, '+' . $numberDays . ' day');
        // date_format($date, 'Y-m-d')
    }

    // update new
    public function kirim_revisi_vendor()
    {
        $tanggal_mc = $this->input->post('tanggal_mc');
        $id_mc = $this->input->post('id_mc');
        $id_traking = $this->input->post('id_traking');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $catatan_rapot = $this->input->post('catatan_rapot');
        $startTimeStamp = strtotime($tanggal_mc);
        $endTimeStamp = strtotime(date('Y-m-d'));
        $timeDiff = abs($endTimeStamp - $startTimeStamp);

        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day

        // and you might want to convert to integer
        $numberDays = intval($numberDays);


        $data_penagihan = [
            'status_terakhir' => 'Vendor Kirim Berkas'
        ];
        $update_mc_traking = [
            'waktu_kirim_vendor' => date('Y-m-d'),
            'approve_vendor' => 1,
            'approve_area' => 0,
            'approve_pusat' => 0,
            'approve_finance' => 0,
            'jumlah_hari_vendor' => $numberDays,
            'jumlah_hari_area' => 0,
            'jumlah_hari_pusat' => 0,
            'jumlah_hari_finance' => 0,
        ];

        $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
        $this->Taggihan_kontrak_admin_model->update_mc_traking($update_mc_traking, $id_traking);


        $data_rapot = [
            'id_mc' => $id_mc,
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'uraian' => 'Vendor Kirim Berkas',
            'pic' => 'Vendor',
            'tanggal_rapot' => date('Y-m-d'),
            'catatan_rapot' => $catatan_rapot,
            'hari_vendor' => $numberDays,
            'hari_area' => 0,
            'hari_pusat' => 0,
            'hari_finance' => 0

        ];
        $this->Taggihan_kontrak_admin_model->create_rapot($data_rapot);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function setujui_area()
    {
        $catatan_rapot = $this->input->post('catatan_rapot');
        $id_mc = $this->input->post('id_mc');
        $id_traking = $this->input->post('id_traking');
        $waktu_kirim_vendor = $this->input->post('waktu_kirim_vendor');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $jumlah_hari_vendor = $this->input->post('jumlah_hari_vendor');
        $startTimeStamp = strtotime($waktu_kirim_vendor);
        $endTimeStamp = strtotime(date('Y-m-d'));

        $timeDiff = abs($endTimeStamp - $startTimeStamp);

        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day

        // and you might want to convert to integer
        $numberDays = intval($numberDays);
        $data_penagihan = [
            'status_terakhir' => 'Area Aprove'
        ];
        $update_mc_traking = [
            'jumlah_hari_area' => $numberDays,
            'jumlah_hari_vendor' => $jumlah_hari_vendor,
            'waktu_kirim_area' => date('Y-m-d'),
            'approve_area' => 1,
            'approve_vendor' => 1
        ];

        $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
        $this->Taggihan_kontrak_admin_model->update_mc_traking($update_mc_traking, $id_traking);
        $data_rapot = [
            'id_mc' => $id_mc,
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'uraian' => 'Area Aprove',
            'pic' => 'Area',
            // 'tanggal_rapot' => date('Y-m-d'),
            'tanggal_rapot' => date('Y-m-d'),
            'catatan_rapot' => $catatan_rapot,
            'hari_vendor' => $jumlah_hari_vendor,
            'hari_area' => $numberDays,
            'hari_pusat' => 0,
            'hari_finance' => 0

        ];
        $this->Taggihan_kontrak_admin_model->create_rapot($data_rapot);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function revisi_area()
    {
        $catatan_rapot = $this->input->post('catatan_rapot');
        $id_mc = $this->input->post('id_mc');
        $id_traking = $this->input->post('id_traking');
        $waktu_kirim_vendor = $this->input->post('waktu_kirim_vendor');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $jumlah_hari_vendor = $this->input->post('jumlah_hari_vendor');
        $startTimeStamp = strtotime($waktu_kirim_vendor);
        $endTimeStamp = strtotime(date('Y-m-d'));

        $timeDiff = abs($endTimeStamp - $startTimeStamp);

        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day

        // and you might want to convert to integer
        $numberDays = intval($numberDays);
        $data_penagihan = [
            'status_terakhir' => 'Revisi Area'
        ];
        $update_mc_traking = [
            'jumlah_hari_area' => $numberDays,
            'jumlah_hari_vendor' => $jumlah_hari_vendor,
            'waktu_kirim_area' => date('Y-m-d'),
            'approve_area' => 1,
            'approve_vendor' => 0
        ];

        $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
        $this->Taggihan_kontrak_admin_model->update_mc_traking($update_mc_traking, $id_traking);
        $data_rapot = [
            'id_mc' => $id_mc,
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'uraian' => 'Area Revisi',
            'pic' => 'Area',
            // 'tanggal_rapot' => date('Y-m-d'),
            'tanggal_rapot' => date('Y-m-d'),
            'catatan_rapot' => $catatan_rapot,
            'hari_vendor' => $jumlah_hari_vendor,
            'hari_area' => $numberDays,
            'hari_pusat' => 0,
            'hari_finance' => 0

        ];
        $this->Taggihan_kontrak_admin_model->create_rapot($data_rapot);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }



    public function revisi_pusat()
    {
        $catatan_rapot = $this->input->post('catatan_rapot');
        $id_mc = $this->input->post('id_mc');
        $id_traking = $this->input->post('id_traking');
        $waktu_kirim_area = $this->input->post('waktu_kirim_area');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasau');
        $jumlah_hari_vendor = $this->input->post('jumlah_hari_vendor');
        $jumlah_hari_area = $this->input->post('jumlah_hari_area');
        $startTimeStamp = strtotime($waktu_kirim_area);
        $endTimeStamp = strtotime(date('Y-m-d'));

        $timeDiff = abs($endTimeStamp - $startTimeStamp);

        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day

        // and you might want to convert to integer
        $numberDays = intval($numberDays);
        $data_penagihan = [
            'status_terakhir' => 'Revisi Pusat'
        ];
        $update_mc_traking = [
            'jumlah_hari_pusat' => $numberDays,
            'jumlah_hari_vendor' => $jumlah_hari_vendor,
            'jumlah_hari_area' => $jumlah_hari_area,
            'waktu_kirim_pusat' => date('Y-m-d'),
            'approve_vendor' => 0,
            'approve_area' => 1,
            'approve_pusat' => 1
        ];

        $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
        $this->Taggihan_kontrak_admin_model->update_mc_traking($update_mc_traking, $id_traking);
        $data_rapot = [
            'id_mc' => $id_mc,
            'id_detail_program_penyediajasa' => $id_detail_program_penyedia_jasa,
            'uraian' => 'Pusat Revisi',
            'pic' => 'Pusat',
            // 'tanggal_rapot' => date('Y-m-d'),
            'tanggal_rapot' => date('Y-m-d'),
            'catatan_rapot' => $catatan_rapot,
            'hari_vendor' => $jumlah_hari_vendor,
            'hari_area' => $jumlah_hari_area,
            'hari_pusat' => $numberDays,
            'hari_finance' => 0

        ];
        $this->Taggihan_kontrak_admin_model->create_rapot($data_rapot);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function setujui_pusat()
    {
        $catatan_rapot = $this->input->post('catatan_rapot');
        $id_mc = $this->input->post('id_mc');
        $id_traking = $this->input->post('id_traking');
        $waktu_kirim_area = $this->input->post('waktu_kirim_area');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasau');
        $jumlah_hari_vendor = $this->input->post('jumlah_hari_vendor');
        $jumlah_hari_area = $this->input->post('jumlah_hari_area');
        $startTimeStamp = strtotime($waktu_kirim_area);
        $endTimeStamp = strtotime(date('Y-m-d'));

        $timeDiff = abs($endTimeStamp - $startTimeStamp);

        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day

        // and you might want to convert to integer
        $numberDays = intval($numberDays);
        $data_penagihan = [
            'status_terakhir' => 'Pusat Aprove'
        ];
        $update_mc_traking = [
            'jumlah_hari_vendor' => $jumlah_hari_vendor,
            'jumlah_hari_area' => $jumlah_hari_area,
            'jumlah_hari_pusat' => $numberDays,
            'waktu_kirim_pusat' => date('Y-m-d'),
            'approve_area' => 1,
            'approve_vendor' => 1,
            'approve_pusat' => 1
        ];

        $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
        $this->Taggihan_kontrak_admin_model->update_mc_traking($update_mc_traking, $id_traking);
        $data_rapot = [
            'id_mc' => $id_mc,
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'uraian' => 'Pusat Aprove',
            'pic' => 'Pusat',
            // 'tanggal_rapot' => date('Y-m-d'),
            'tanggal_rapot' => date('Y-m-d'),
            'catatan_rapot' => $catatan_rapot,
            'hari_vendor' => $jumlah_hari_vendor,
            'hari_area' => $jumlah_hari_area,
            'hari_pusat' => $numberDays,
            'hari_finance' => 0

        ];
        $this->Taggihan_kontrak_admin_model->create_rapot($data_rapot);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function terima_berkas_finance()
    {
        $catatan_rapot = $this->input->post('catatan_rapot');
        $id_mc = $this->input->post('id_mc');
        $id_traking = $this->input->post('id_traking');
        $waktu_kirim_pusat = $this->input->post('waktu_kirim_pusat');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasau');
        $jumlah_hari_vendor = $this->input->post('jumlah_hari_vendor');
        $jumlah_hari_area = $this->input->post('jumlah_hari_area');
        $jumlah_hari_pusat = $this->input->post('jumlah_hari_pusat');
        $startTimeStamp = strtotime($waktu_kirim_pusat);
        $endTimeStamp = strtotime(date('Y-m-d'));

        $timeDiff = abs($endTimeStamp - $startTimeStamp);

        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day

        // and you might want to convert to integer
        $numberDays = intval($numberDays);
        $data_penagihan = [
            'status_terakhir' => 'Diterima Finance'
        ];
        $update_mc_traking = [
            'jumlah_hari_vendor' => $jumlah_hari_vendor,
            'jumlah_hari_area' => $jumlah_hari_area,
            'jumlah_hari_pusat' => $jumlah_hari_pusat,
            'jumlah_hari_finance' => $numberDays,
            'waktu_kirim_finance' => date('Y-m-d'),
            'approve_area' => 1,
            'approve_vendor' => 1,
            'approve_pusat' => 1,
            'approve_finance' => 1
        ];

        $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
        $this->Taggihan_kontrak_admin_model->update_mc_traking($update_mc_traking, $id_traking);
        $data_rapot = [
            'id_mc' => $id_mc,
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'uraian' => 'Pusat Aprove',
            'pic' => 'Pusat',
            // 'tanggal_rapot' => date('Y-m-d'),
            'tanggal_rapot' => date('Y-m-d'),
            'catatan_rapot' => $catatan_rapot,
            'hari_vendor' => $jumlah_hari_vendor,
            'hari_area' => $jumlah_hari_area,
            'hari_pusat' => $jumlah_hari_pusat,
            'hari_finance' => $numberDays

        ];
        $this->Taggihan_kontrak_admin_model->create_rapot($data_rapot);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function pencairan_finance()
    {
        $catatan_rapot = $this->input->post('catatan_rapot');
        $id_mc = $this->input->post('id_mc');
        $id_traking = $this->input->post('id_traking');
        $waktu_kirim_finance = $this->input->post('waktu_kirim_finance');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasau');
        $jumlah_hari_vendor = $this->input->post('jumlah_hari_vendor');
        $jumlah_hari_area = $this->input->post('jumlah_hari_area');
        $jumlah_hari_pusat = $this->input->post('jumlah_hari_pusat');
        $jumlah_hari_finance = $this->input->post('jumlah_hari_finance');
        $startTimeStamp = strtotime($waktu_kirim_finance);
        $endTimeStamp = strtotime(date('Y-m-d'));

        $timeDiff = abs($endTimeStamp - $startTimeStamp);

        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day

        // and you might want to convert to integer
        $numberDays = intval($numberDays);
        $data_penagihan = [
            'status_terakhir' => 'Sudah Pencairan'
        ];
        $update_mc_traking = [
            'jumlah_hari_vendor' => $jumlah_hari_vendor,
            'jumlah_hari_area' => $jumlah_hari_area,
            'jumlah_hari_pusat' => $jumlah_hari_pusat,
            'jumlah_hari_finance' => $jumlah_hari_finance,
            'waktu_kirim_finance' => date('Y-m-d'),
            'approve_area' => 1,
            'approve_vendor' => 1,
            'approve_pusat' => 1,
            'approve_finance' => 1
        ];

        $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
        $this->Taggihan_kontrak_admin_model->update_mc_traking($update_mc_traking, $id_traking);
        $data_rapot = [
            'id_mc' => $id_mc,
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'uraian' => 'Pencairan Finance',
            'pic' => 'Finance',
            // 'tanggal_rapot' => date('Y-m-d'),
            'tanggal_rapot' => date('Y-m-d'),
            'catatan_rapot' => $catatan_rapot,
            'hari_vendor' => $jumlah_hari_vendor,
            'hari_area' => $jumlah_hari_area,
            'hari_pusat' => $jumlah_hari_pusat,
            'hari_finance' => $numberDays

        ];
        $this->Taggihan_kontrak_admin_model->create_rapot($data_rapot);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function kirim_traking()
    {
        $keterangan_traking = $this->input->post('keterangan_traking');
        $tanggal_mc = $this->input->post('tanggal_mc');
        $id_mc = $this->input->post('id_mc');
        $pic = $this->input->post('pic');
        $tanggal_rapot = $this->input->post('tanggal_rapot');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasau');
        $uraian = $this->input->post('uraian');

        if ($pic == 'Vendor') {
            $startTimeStamp = strtotime($tanggal_mc);
            $endTimeStamp = strtotime($tanggal_rapot);
            $timeDiff = abs($endTimeStamp - $startTimeStamp);
            $numberDays = $timeDiff / 86400;
            $numberDays = intval($numberDays);
            $data_penagihan = [
                'status_terakhir' => 'Vendor Kirim Berkas',
                'sts_tanggal_trakhir' => $tanggal_rapot
            ];
            $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
            $data_rapot = [
                'id_mc' => $id_mc,
                'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                'uraian' => 'Vendor Kirim Berkas',
                'pic' => $pic,
                'tanggal_rapot' => $tanggal_rapot,
                'catatan_rapot' => 'Vendor Kirim Berkas',
                'hari_vendor' => $numberDays,

            ];
        } else if ($pic == 'Area') {
            $cek_rapot =  $this->Taggihan_kontrak_admin_model->cek_rapot($id_detail_program_penyedia_jasa, $id_mc);
            if ($cek_rapot) {
                $cek_uraian =  $this->Taggihan_kontrak_admin_model->cek_rapot_uraian_trakhir($id_detail_program_penyedia_jasa, $id_mc);
                if ($cek_uraian['uraian'] == 'Revisi Area') {
                    $tanggal_rapot_trakhir = $cek_rapot['tanggal_rapot'];
                    $startTimeStamp = strtotime($tanggal_mc);
                    $endTimeStamp = strtotime($tanggal_rapot);
                    $timeDiff = abs($endTimeStamp - $startTimeStamp);
                    $numberDays = $timeDiff / 86400;
                    $numberDays = intval($numberDays);
                } else {
                    $hari_vendor = $cek_rapot['hari_vendor'];
                    $hari_area = $cek_rapot['hari_area'];
                    $tanggal_rapot_trakhir = $cek_rapot['tanggal_rapot'];
                    $startTimeStamp = strtotime($tanggal_rapot_trakhir);
                    $endTimeStamp = strtotime($tanggal_rapot);
                    $timeDiff = abs($endTimeStamp - $startTimeStamp);
                    $numberDays = $timeDiff / 86400;
                    $numberDays = intval($numberDays);
                }
            } else {
                $hari_vendor = 0;
                $hari_area = 0;
                $tanggal_rapot_trakhir = $tanggal_mc;
                $startTimeStamp = strtotime($tanggal_rapot_trakhir);
                $endTimeStamp = strtotime($tanggal_rapot);
                $timeDiff = abs($endTimeStamp - $startTimeStamp);
                $numberDays = $timeDiff / 86400;
                $numberDays = intval($numberDays);
            }
            if ($uraian == 'Terima') {
                if ($cek_rapot['uraian'] == 'Revisi Area') {
                    $data_penagihan = [
                        'status_terakhir' => 'Berkas Diterima Area',
                        'sts_tanggal_trakhir' => $tanggal_rapot
                    ];
                    $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
                    $data_rapot = [
                        'id_mc' => $id_mc,
                        'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                        'uraian' => 'Berkas Diterima Area',
                        'pic' => $pic,
                        'tanggal_rapot' => $tanggal_rapot,
                        'catatan_rapot' => 'Berkas Diterima Area',
                        'hari_vendor' => $numberDays,
                        'hari_area' => 0,
                        'hari_pusat' => 0,
                        'hari_finance' => 0

                    ];
                } else {
                    $data_penagihan = [
                        'status_terakhir' => 'Berkas Diterima Area',
                        'sts_tanggal_trakhir' => $tanggal_rapot
                    ];
                    $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);

                    $data_rapot = [
                        'id_mc' => $id_mc,
                        'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                        'uraian' => 'Diterima Area',
                        'pic' => $pic,
                        'tanggal_rapot' => $tanggal_rapot,
                        'catatan_rapot' => 'Berkas Diterima Area',
                        'hari_vendor' => $hari_vendor,
                        'hari_area' => $hari_area,
                        'hari_pusat' => 0,
                        'hari_finance' => 0

                    ];
                }
            } else if ($uraian == 'Aprove') {
                $data_penagihan = [
                    'status_terakhir' => 'Aprove Area',
                    'sts_tanggal_trakhir' => $tanggal_rapot
                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
                $data_rapot = [
                    'id_mc' => $id_mc,
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'uraian' => 'Aprove Area',
                    'pic' => $pic,
                    'tanggal_rapot' => $tanggal_rapot,
                    'catatan_rapot' => 'Aprove Area',
                    'hari_vendor' => $hari_vendor,
                    'hari_area' => $numberDays,
                    'hari_pusat' => 0,
                    'hari_finance' => 0

                ];
            } else {
                $data_penagihan = [
                    'status_terakhir' => 'Revisi Area',
                    'sts_tanggal_trakhir' => $tanggal_rapot
                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
                $data_rapot = [
                    'id_mc' => $id_mc,
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'uraian' => 'Revisi Area',
                    'pic' => $pic,
                    'tanggal_rapot' => $tanggal_rapot,
                    'catatan_rapot' => 'Revisi Area',
                    'hari_vendor' => $hari_vendor,
                    'hari_area' => $numberDays,
                    'hari_pusat' => 0,
                    'hari_finance' => 0,
                    'keterangan_traking' => $keterangan_traking,

                ];
            }
        } else if ($pic == 'Pusat') {
            $cek_rapot =  $this->Taggihan_kontrak_admin_model->cek_rapot($id_detail_program_penyedia_jasa, $id_mc);
            if ($cek_rapot) {
                $cek_uraian =  $this->Taggihan_kontrak_admin_model->cek_rapot_uraian_trakhir($id_detail_program_penyedia_jasa, $id_mc);
                if ($cek_uraian['uraian'] == 'Revisi Pusat') {
                    $tanggal_rapot_trakhir = $cek_rapot['tanggal_rapot'];
                    $startTimeStamp = strtotime($tanggal_mc);
                    $endTimeStamp = strtotime($tanggal_rapot);
                    $timeDiff = abs($endTimeStamp - $startTimeStamp);
                    $numberDays = $timeDiff / 86400;
                    $numberDays = intval($numberDays);
                } else {
                    $hari_vendor = $cek_rapot['hari_vendor'];
                    $hari_area = $cek_rapot['hari_area'];
                    $hari_pusat = $cek_rapot['hari_pusat'];
                    $tanggal_rapot_trakhir = $cek_rapot['tanggal_rapot'];
                    $startTimeStamp = strtotime($tanggal_rapot_trakhir);
                    $endTimeStamp = strtotime($tanggal_rapot);
                    $timeDiff = abs($endTimeStamp - $startTimeStamp);
                    $numberDays = $timeDiff / 86400;
                    $numberDays = intval($numberDays);
                }
            } else {
                $hari_vendor = 0;
                $hari_area = 0;
                $hari_pusat = 0;
                $tanggal_rapot_trakhir = $tanggal_mc;
                $startTimeStamp = strtotime($tanggal_rapot_trakhir);
                $endTimeStamp = strtotime($tanggal_rapot);
                $timeDiff = abs($endTimeStamp - $startTimeStamp);
                $numberDays = $timeDiff / 86400;
                $numberDays = intval($numberDays);
            }

            if ($uraian == 'Terima') {
                if ($cek_uraian['uraian'] == 'Revisi Pusat') {
                    $data_penagihan = [
                        'status_terakhir' => 'Berkas Diterima Pusat',
                        'sts_tanggal_trakhir' => $tanggal_rapot
                    ];
                    $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
                    $data_rapot = [
                        'id_mc' => $id_mc,
                        'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                        'uraian' => 'Diterima Pusat',
                        'pic' => $pic,
                        'tanggal_rapot' => $tanggal_rapot,
                        'catatan_rapot' => 'Berkas Diterima Pusat',
                        'hari_vendor' => $numberDays,
                        'hari_area' => 0,
                        'hari_pusat' => 0,
                        'hari_finance' => 0

                    ];
                } else {
                    $data_penagihan = [
                        'status_terakhir' => 'Berkas Diterima Pusat',
                        'sts_tanggal_trakhir' => $tanggal_rapot
                    ];
                    $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
                    $data_rapot = [
                        'id_mc' => $id_mc,
                        'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                        'uraian' => 'Diterima Pusat',
                        'pic' => $pic,
                        'tanggal_rapot' => $tanggal_rapot,
                        'catatan_rapot' => 'Berkas Diterima Pusat',
                        'hari_vendor' => $hari_vendor,
                        'hari_area' => $hari_area,
                        'hari_pusat' => 0,
                        'hari_finance' => 0

                    ];
                }
            } else if ($uraian == 'Aprove') {
                $data_penagihan = [
                    'status_terakhir' => 'Aprove Pusat',
                    'sts_tanggal_trakhir' => $tanggal_rapot
                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
                $data_rapot = [
                    'id_mc' => $id_mc,
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'uraian' => 'Aprove Pusat',
                    'pic' => $pic,
                    'tanggal_rapot' => $tanggal_rapot,
                    'catatan_rapot' => 'Aprove Pusat',
                    'hari_vendor' => $hari_vendor,
                    'hari_area' => $hari_area,
                    'hari_pusat' => $numberDays,
                    'hari_finance' => 0

                ];
            } else {
                $data_penagihan = [
                    'status_terakhir' => 'Revisi Pusat',
                    'sts_tanggal_trakhir' => $tanggal_rapot
                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
                $data_rapot = [
                    'id_mc' => $id_mc,
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'uraian' => 'Revisi Pusat',
                    'pic' => $pic,
                    'tanggal_rapot' => $tanggal_rapot,
                    'catatan_rapot' => 'Revisi Pusat',
                    'hari_vendor' => $hari_vendor,
                    'hari_area' => $hari_area,
                    'hari_pusat' => $numberDays,
                    'hari_finance' => 0,
                    'keterangan_traking' => $keterangan_traking,

                ];
            }
        } else if ($pic == 'Finance') {
            $cek_rapot =  $this->Taggihan_kontrak_admin_model->cek_rapot($id_detail_program_penyedia_jasa, $id_mc);

            if ($cek_rapot) {
                $hari_vendor = $cek_rapot['hari_vendor'];
                $hari_area = $cek_rapot['hari_area'];
                $hari_pusat = $cek_rapot['hari_pusat'];
                $hari_finance = $cek_rapot['hari_finance'];
                $tanggal_rapot_trakhir = $cek_rapot['tanggal_rapot'];
                $startTimeStamp = strtotime($tanggal_rapot_trakhir);
                $endTimeStamp = strtotime($tanggal_rapot);
                $timeDiff = abs($endTimeStamp - $startTimeStamp);
                $numberDays = $timeDiff / 86400;
                $numberDays = intval($numberDays);
            } else {
                $hari_vendor = 0;
                $hari_area = 0;
                $hari_pusat = 0;
                $hari_finance = 0;
                $tanggal_rapot_trakhir = $tanggal_mc;
                $startTimeStamp = strtotime($tanggal_rapot_trakhir);
                $endTimeStamp = strtotime($tanggal_rapot);
                $timeDiff = abs($endTimeStamp - $startTimeStamp);
                $numberDays = $timeDiff / 86400;
                $numberDays = intval($numberDays);
            }

            if ($uraian == 'Terima') {
                $data_penagihan = [
                    'status_terakhir' => 'Berkas Diterima Finance',
                    'sts_tanggal_trakhir' => $tanggal_rapot
                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
                $data_rapot = [
                    'id_mc' => $id_mc,
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'uraian' => 'Diterima Finance',
                    'pic' => $pic,
                    'tanggal_rapot' => $tanggal_rapot,
                    'catatan_rapot' => 'Diterima Finance',
                    'hari_vendor' => $hari_vendor,
                    'hari_area' => $hari_area,
                    'hari_pusat' => $hari_pusat,
                    'hari_finance' => $numberDays

                ];
            } else if ($uraian == 'Pencairan') {
                $data_penagihan = [
                    'status_terakhir' => 'Pencairan',
                    'sts_tanggal_trakhir' => $tanggal_rapot
                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
                $data_rapot = [
                    'id_mc' => $id_mc,
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'uraian' => 'Pencairan',
                    'pic' => $pic,
                    'tanggal_rapot' => $tanggal_rapot,
                    'catatan_rapot' => 'Pencairan',
                    'hari_vendor' => $hari_vendor,
                    'hari_area' => $hari_area,
                    'hari_pusat' => $hari_pusat,
                    'hari_finance' => $numberDays

                ];
            } else {
                $data_penagihan = [
                    'status_terakhir' => 'Revisi Finance',
                    'sts_tanggal_trakhir' => $tanggal_rapot
                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
                $data_rapot = [
                    'id_mc' => $id_mc,
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                    'uraian' => 'Revisi Finance',
                    'pic' => $pic,
                    'tanggal_rapot' => $tanggal_rapot,
                    'catatan_rapot' => 'Revisi Finance',
                    'hari_vendor' => $hari_vendor,
                    'hari_area' => 0,
                    'hari_pusat' => 0,
                    'hari_finance' => 0,
                    'keterangan_traking' => $keterangan_traking,

                ];
            }
        }

        $this->Taggihan_kontrak_admin_model->create_rapot($data_rapot);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function pencairan_grafik()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasau');
        $row_perogram =  $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $id_mc = $this->input->post('id_mc');
        $sts_tanggal_trakhir = $this->input->post('sts_tanggal_trakhir');
        $catatan = $this->input->post('catatan');
        $setelah_ppn = $this->input->post('setelah_ppn');
        $get_pegawai = $this->Auth_model->get_pegawai();
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        $data = [
            'id_mc' => $id_mc,
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'tanggal_cair' => $sts_tanggal_trakhir,
            'nilai_grafik' => $setelah_ppn,
            'catatan' => $catatan,
            'id_departemen' => $row_perogram['id_departemen'],
            'id_area' => $row_perogram['id_area'],
            'id_sub_area' => $row_perogram['id_sub_area'],
            'id_kontrak' => $row_perogram['id_kontrak'],
        ];
        $this->Taggihan_kontrak_admin_model->create_grafik($data);
        $data_penagihan = [
            'status_pencairan' => 1,
        ];
        $this->Taggihan_kontrak_admin_model->update_mc($data_penagihan, $id_mc);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }




    public function kelola_mc($id_mc)
    {
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_nilai_kontrak_mc_1($id_detail_program_penyedia_jasa, $id_mc);
        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $result_sub_program  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);

        // result addendumn =
        $addendum_result = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        }
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/kelola_mc', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax', $data);
    }



    public function get_data_nilai_kontrak_mc($id_detail_program_penyedia_jasa)
    {
        $cek_kontrak_penyedia = $this->input->post('cek_kontrak_penyedia');
        $id_mc = $this->input->post('id_mc');
        $resultss = $this->Taggihan_kontrak_admin_model->getdatatable_kontrak_mc($id_detail_program_penyedia_jasa, $cek_kontrak_penyedia, $id_mc);
        $data = [];
        $no = $_POST['start'];
        foreach ($resultss as $rs) {
            $row = array();
            $row[] = $rs->no_nilai_kontrak_mc;
            $row[] = $rs->uraian_nilai_kontrak_mc;
            $row[] = $rs->satuan_nilai_kontrak_mc;
            $row[] = $rs->volume_nilai_kontrak_mc;
            $row[] =  "Rp " . number_format($rs->harga_satuan_nilai_kontrak_mc, 2, ',', '.');
            $row[] =  "Rp " . number_format($rs->total_satuan_nilai_kontrak_mc, 2, ',', '.');
            if ($rs->sts_nilai_kontrak_mc == 'nilai kontrak awal') {
                $row[] = 'Kontrak Awal';
            } else {
                $row[] = $rs->sts_nilai_kontrak_mc;
            }
            $row[] = '<a href="javascript:;" class="btn btn-warning btn-sm" onClick="EditNilaiKontrak(' . "'" . $rs->id_nilai_kontrak_mc . "','edit'" . ')"> <i class="bi bi-pencil-square"></i> Edit</a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Taggihan_kontrak_admin_model->count_all_data_kontrak_mc($id_detail_program_penyedia_jasa, $cek_kontrak_penyedia, $id_mc),
            "recordsFiltered" => $this->Taggihan_kontrak_admin_model->count_filtered_data_kontrak_mc($id_detail_program_penyedia_jasa, $cek_kontrak_penyedia, $id_mc),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function get_data_nilai_kontrak_mc_jika_ada($id_detail_program_penyedia_jasa)
    {
        $id_mc = $this->input->post('id_mc');
        $resultss = $this->Taggihan_kontrak_admin_model->getdatatable_kontrak_mc_jika_ada($id_detail_program_penyedia_jasa, $id_mc);
        $data = [];
        $no = $_POST['start'];
        foreach ($resultss as $rs) {
            $row = array();
            $row[] = $rs->no_nilai_kontrak_mc;
            $row[] = $rs->uraian_nilai_kontrak_mc;
            $row[] = $rs->satuan_nilai_kontrak_mc;
            $row[] = $rs->volume_nilai_kontrak_mc;
            $row[] =  "Rp " . number_format($rs->harga_satuan_nilai_kontrak_mc, 2, ',', '.');
            $row[] =  "Rp " . number_format($rs->total_satuan_nilai_kontrak_mc, 2, ',', '.');
            if ($rs->sts_nilai_kontrak_mc == 'nilai kontrak awal') {
                $row[] = 'Kontrak Awal';
            } else {
                $row[] = $rs->sts_nilai_kontrak_mc;
            }
            $row[] = '<a href="javascript:;" class="btn btn-warning btn-sm" onClick="EditNilaiKontrak(' . "'" . $rs->id_nilai_kontrak_mc . "','edit'" . ')"> <i class="bi bi-pencil-square"></i> Edit</a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Taggihan_kontrak_admin_model->count_all_data_kontrak_mc_jika_ada($id_detail_program_penyedia_jasa, $id_mc),
            "recordsFiltered" => $this->Taggihan_kontrak_admin_model->count_filtered_data_kontrak_mc_jika_ada($id_detail_program_penyedia_jasa, $id_mc),
            "data" => $data
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function by_id_mc_nilai_kontrak($id_nilai_kontrak_mc)
    {

        $row_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->get_row_kontrak_nilai_kontrak_mc($id_nilai_kontrak_mc);
        $data = [
            'row_nilai_kontrak_mc' => $row_nilai_kontrak_mc,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function Simpan_nilai_kontrak()
    {
        $id_nilai_kontrak_mc = $this->input->post('id_nilai_kontrak_mc');
        $no_nilai_kontrak_mc =  $this->input->post('no_nilai_kontrak_mc');
        $uraian_nilai_kontrak_mc =  $this->input->post('uraian_nilai_kontrak_mc');
        $satuan_nilai_kontrak_mc =  $this->input->post('satuan_nilai_kontrak_mc');
        $volume_nilai_kontrak_mc =  $this->input->post('volume_nilai_kontrak_mc');
        $harga_satuan_nilai_kontrak_mc =  $this->input->post('harga_satuan_nilai_kontrak_mc');
        if ($harga_satuan_nilai_kontrak_mc == null) {
            $total_harga = '';
        } else {
            $total_harga = $volume_nilai_kontrak_mc *  $harga_satuan_nilai_kontrak_mc;
        }
        $where = [
            'id_nilai_kontrak_mc' => $id_nilai_kontrak_mc,
        ];
        $data = [
            'no_nilai_kontrak_mc' => $no_nilai_kontrak_mc,
            'uraian_nilai_kontrak_mc' => $uraian_nilai_kontrak_mc,
            'volume_nilai_kontrak_mc' => $volume_nilai_kontrak_mc,
            'satuan_nilai_kontrak_mc' => $satuan_nilai_kontrak_mc,
            'harga_satuan_nilai_kontrak_mc' => $harga_satuan_nilai_kontrak_mc,
            'total_satuan_nilai_kontrak_mc' => $total_harga,
        ];
        $this->Taggihan_kontrak_admin_model->update_nilai_kontrak_mc($data, $where);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function get_by_id_excel($id_sub)
    {

        $sub = $this->Taggihan_kontrak_admin_model->get_sub_program($id_sub);
        $data = [
            'sub' => $sub,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


    public function uploaddata()
    {

        $id_detail_program_penyedia_jasa_excel = $this->input->post('id_detail_program_penyedia_jasa_excel');
        $id_detail_sub_program_penyedia_jasa_excel = $this->input->post('id_detail_sub_program_penyedia_jasa_excel');
        $id_mc_excel = $this->input->post('id_mc_excel');
        $this->Taggihan_kontrak_admin_model->delete_kontrak_nilai_kontrak_mc_by_excel($id_detail_program_penyedia_jasa_excel, $id_detail_sub_program_penyedia_jasa_excel, $id_mc_excel);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {

            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'no_nilai_kontrak_mc' => $row->getCellAtIndex(0),
                            'uraian_nilai_kontrak_mc' => $row->getCellAtIndex(1),
                            'satuan_nilai_kontrak_mc' => $row->getCellAtIndex(2),
                            'volume_nilai_kontrak_mc' => $row->getCellAtIndex(3),
                            'harga_satuan_nilai_kontrak_mc' => $row->getCellAtIndex(4),
                            'total_satuan_nilai_kontrak_mc' => $row->getCellAtIndex(5),
                            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa_excel,
                            'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa_excel,
                            'id_mc' => $id_mc_excel,
                        );
                        $this->Taggihan_kontrak_admin_model->insert_via_excel_nilai_kontrak($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                redirect('taggihan_kontrak_admin/tagihan_kontrak/kelola_mc/' . $id_mc_excel);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
    public function generate_nilai_kontrak($id_detail_program_penyedia_jasa)
    {
        $cek_kontrak_penyedia = $this->input->post('cek_kontrak_penyedia');
        $id_mc = $this->input->post('id_mc');
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_hps_penyedia_kontrak_mc_1($id_mc, $cek_kontrak_penyedia);
        if ($cek_nilai_kontrak_mc) {
            $this->output->set_content_type('application/json')->set_output(json_encode('sudah_ada'));
        } else {
            $this->Taggihan_kontrak_admin_model->delete_hps_penyedia_kontrak_mc_1($id_mc);
            $this->Taggihan_kontrak_admin_model->delete_hps_penyedia_kontrak_mc_2($id_mc);
            $this->Taggihan_kontrak_admin_model->delete_hps_penyedia_kontrak_mc_3($id_mc);
            $this->Taggihan_kontrak_admin_model->delete_hps_penyedia_kontrak_mc_4($id_mc);
            $this->Taggihan_kontrak_admin_model->delete_hps_penyedia_kontrak_mc_5($id_mc);
            if ($cek_kontrak_penyedia == 'nilai kontrak awal') {
                $data_mc_udpate = [
                    'sts_mc_nilai' => 'kontrak_awal',
                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data_mc_udpate, $id_mc);
                $this->db->select('*');
                $this->db->from('tbl_hps_penyedia_kontrak_1');
                $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
                $this->db->where('tbl_hps_penyedia_kontrak_1.item_baru', 'kosong');
                $query_tbl_hps = $this->db->get();
                foreach ($query_tbl_hps->result_array() as $key => $value_hps_penyedia_kontrak_1) {
                    $id_hps_penyedia_kontrak_1 = $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'];
                    $data = [
                        'id_mc' => $id_mc,
                        'id_detail_program_penyedia_jasa' => $value_hps_penyedia_kontrak_1['id_detail_program_penyedia_jasa'],
                        'id_detail_sub_program_penyedia_jasa' => $value_hps_penyedia_kontrak_1['id_detail_sub_program_penyedia_jasa'],
                        'no_urut' => $value_hps_penyedia_kontrak_1['no_urut'],
                        'no_hps' => $value_hps_penyedia_kontrak_1['no_hps'],
                        'uraian_hps' => $value_hps_penyedia_kontrak_1['uraian_hps'],
                        'satuan_hps' => $value_hps_penyedia_kontrak_1['satuan_hps'],
                        'volume_hps' => null,
                        'harga_satuan_hps' => $value_hps_penyedia_kontrak_1['harga_satuan_hps'],
                        'total_harga' => null,
                        'id_refrence_hps' => $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'],
                        'sts_mc_nilai' => 'kontrak_awal',
                    ];
                    $this->Taggihan_kontrak_admin_model->create_hps_penyedia_kontrak_mc_1($data);
                    $id_insert_hps_penyedia_kontrak_mc_1 = $this->db->insert_id();
                    // batas tbl_hps_penyedia_kontrak_2
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_2');
                    $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);
                    $this->db->where('tbl_hps_penyedia_kontrak_2.item_baru', 'kosong');
                    $query_tbl_hps_penyedia_kontrak_2 = $this->db->get();
                    foreach ($query_tbl_hps_penyedia_kontrak_2->result_array() as $key => $value_hps_penyedia_kontrak_2) {
                        $id_hps_penyedia_kontrak_2 = $value_hps_penyedia_kontrak_2['id_hps_penyedia_kontrak_2'];
                        $data = [
                            'id_hps_penyedia_kontrak_mc_1' => $id_insert_hps_penyedia_kontrak_mc_1,
                            'id_mc' => $id_mc,
                            'no_urut' => $value_hps_penyedia_kontrak_2['no_urut'],
                            'no_hps' => $value_hps_penyedia_kontrak_2['no_hps'],
                            'uraian_hps' => $value_hps_penyedia_kontrak_2['uraian_hps'],
                            'satuan_hps' => $value_hps_penyedia_kontrak_2['satuan_hps'],
                            'volume_hps' => null,
                            'harga_satuan_hps' => $value_hps_penyedia_kontrak_2['harga_satuan_hps'],
                            'total_harga' => null,
                            'sts_mc_nilai' => 'kontrak_awal',
                            'id_refrence_hps' => $value_hps_penyedia_kontrak_2['id_hps_penyedia_kontrak_2'],
                        ];
                        $this->Taggihan_kontrak_admin_model->create_hps_penyedia_kontrak_mc_2($data);
                        $id_insert_hps_penyedia_kontrak_mc_2 = $this->db->insert_id();
                        // batas tbl_hps_penyedia_kontrak_3
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_3');
                        $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
                        $this->db->where('tbl_hps_penyedia_kontrak_3.item_baru', 'kosong');
                        $query_tbl_hps_penyedia_kontrak_3 = $this->db->get();
                        foreach ($query_tbl_hps_penyedia_kontrak_3->result_array() as $key => $value_hps_penyedia_kontrak_3) {
                            $id_hps_penyedia_kontrak_3 = $value_hps_penyedia_kontrak_3['id_hps_penyedia_kontrak_3'];
                            $data = [
                                'id_hps_penyedia_kontrak_mc_2' => $id_insert_hps_penyedia_kontrak_mc_2,
                                'id_mc' => $id_mc,
                                'no_urut' => $value_hps_penyedia_kontrak_3['no_urut'],
                                'no_hps' => $value_hps_penyedia_kontrak_3['no_hps'],
                                'uraian_hps' => $value_hps_penyedia_kontrak_3['uraian_hps'],
                                'satuan_hps' => $value_hps_penyedia_kontrak_3['satuan_hps'],
                                'volume_hps' => null,
                                'harga_satuan_hps' => $value_hps_penyedia_kontrak_3['harga_satuan_hps'],
                                'total_harga' => null,
                                'sts_mc_nilai' => 'kontrak_awal',
                                'id_refrence_hps' => $value_hps_penyedia_kontrak_3['id_hps_penyedia_kontrak_3'],
                            ];
                            $this->Taggihan_kontrak_admin_model->create_hps_penyedia_kontrak_mc_3($data);
                            // batas tbl_hps_penyedia_kontrak_4
                            $id_insert_hps_penyedia_kontrak_mc_3 = $this->db->insert_id();
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_4');
                            $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
                            $this->db->where('tbl_hps_penyedia_kontrak_4.item_baru', 'kosong');
                            $query_tbl_hps_penyedia_kontrak_4 = $this->db->get();
                            foreach ($query_tbl_hps_penyedia_kontrak_4->result_array() as $key => $value_hps_penyedia_kontrak_4) {
                                $id_hps_penyedia_kontrak_4 = $value_hps_penyedia_kontrak_4['id_hps_penyedia_kontrak_4'];
                                $data = [
                                    'id_hps_penyedia_kontrak_mc_3' => $id_insert_hps_penyedia_kontrak_mc_3,
                                    'id_mc' => $id_mc,
                                    'no_urut' => $value_hps_penyedia_kontrak_4['no_urut'],
                                    'no_hps' => $value_hps_penyedia_kontrak_4['no_hps'],
                                    'uraian_hps' => $value_hps_penyedia_kontrak_4['uraian_hps'],
                                    'satuan_hps' => $value_hps_penyedia_kontrak_4['satuan_hps'],
                                    'volume_hps' => null,
                                    'harga_satuan_hps' => $value_hps_penyedia_kontrak_4['harga_satuan_hps'],
                                    'total_harga' => null,
                                    'sts_mc_nilai' => 'kontrak_awal',
                                    'id_refrence_hps' => $value_hps_penyedia_kontrak_4['id_hps_penyedia_kontrak_4'],
                                ];
                                $this->Taggihan_kontrak_admin_model->create_hps_penyedia_kontrak_mc_4($data);
                                // batas tbl_hps_penyedia_kontrak_5
                                $id_insert_hps_penyedia_kontrak_mc_4 = $this->db->insert_id();
                                $this->db->select('*');
                                $this->db->from('tbl_hps_penyedia_kontrak_5');
                                $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
                                $this->db->where('tbl_hps_penyedia_kontrak_5.item_baru', 'kosong');
                                $query_tbl_hps_penyedia_kontrak_5 = $this->db->get();
                                foreach ($query_tbl_hps_penyedia_kontrak_5->result_array() as $key => $value_hps_penyedia_kontrak_5) {
                                    $data = [
                                        'id_hps_penyedia_kontrak_mc_4' => $id_insert_hps_penyedia_kontrak_mc_4,
                                        'id_mc' => $id_mc,
                                        'no_urut' => $value_hps_penyedia_kontrak_5['no_urut'],
                                        'no_hps' => $value_hps_penyedia_kontrak_5['no_hps'],
                                        'uraian_hps' => $value_hps_penyedia_kontrak_5['uraian_hps'],
                                        'satuan_hps' => $value_hps_penyedia_kontrak_5['satuan_hps'],
                                        'volume_hps' => null,
                                        'harga_satuan_hps' => $value_hps_penyedia_kontrak_5['harga_satuan_hps'],
                                        'total_harga' => null,
                                        'sts_mc_nilai' => 'kontrak_awal',
                                        'id_refrence_hps' => $value_hps_penyedia_kontrak_5['id_hps_penyedia_kontrak_5'],
                                    ];
                                    $this->Taggihan_kontrak_admin_model->create_hps_penyedia_kontrak_mc_5($data);
                                }
                            }
                        }
                    }
                }
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
                $data_mc_udpate = [
                    'sts_mc_nilai' => '_addendum_' . $cek_kontrak_penyedia,
                ];
                $this->Taggihan_kontrak_admin_model->update_mc($data_mc_udpate, $id_mc);
                $this->db->select('*');
                $this->db->from('tbl_hps_penyedia_kontrak_1');
                $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
                $this->db->where('tbl_hps_penyedia_kontrak_1.uraian_hps' . '_addendum_' . $cek_kontrak_penyedia . ' !=', NULL);
                $query_tbl_hps = $this->db->get();
                foreach ($query_tbl_hps->result_array() as $key => $value_hps_penyedia_kontrak_1) {
                    $id_hps_penyedia_kontrak_1 = $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'];
                    $data = [
                        'id_mc' => $id_mc,
                        'id_detail_program_penyedia_jasa' => $value_hps_penyedia_kontrak_1['id_detail_program_penyedia_jasa'],
                        'id_detail_sub_program_penyedia_jasa' => $value_hps_penyedia_kontrak_1['id_detail_sub_program_penyedia_jasa'],
                        'no_urut_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_1['no_urut'],
                        'no_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_1['no_hps'],
                        'uraian_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_1['uraian_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                        'satuan_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_1['satuan_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                        'volume_hps_addendum_' . $cek_kontrak_penyedia . '' => null,
                        'harga_satuan_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_1['harga_satuan_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                        'total_harga_addendum_' . $cek_kontrak_penyedia . '' => null,
                        'sts_mc_nilai' => 'addendum_' . $cek_kontrak_penyedia . '',
                        'id_refrence_hps' => $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'],
                    ];
                    $this->Taggihan_kontrak_admin_model->create_hps_penyedia_kontrak_mc_1($data);
                    $id_insert_hps_penyedia_kontrak_mc_1 = $this->db->insert_id();
                    // batas tbl_hps_penyedia_kontrak_2
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_2');
                    $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);
                    $this->db->where('tbl_hps_penyedia_kontrak_2.uraian_hps' . '_addendum_' . $cek_kontrak_penyedia . ' !=', NULL);
                    $query_tbl_hps_penyedia_kontrak_2 = $this->db->get();
                    foreach ($query_tbl_hps_penyedia_kontrak_2->result_array() as $key => $value_hps_penyedia_kontrak_2) {
                        $id_hps_penyedia_kontrak_2 = $value_hps_penyedia_kontrak_2['id_hps_penyedia_kontrak_2'];
                        $data = [
                            'id_hps_penyedia_kontrak_mc_1' => $id_insert_hps_penyedia_kontrak_mc_1,
                            'id_mc' => $id_mc,
                            'no_urut_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_2['no_urut'],
                            'no_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_2['no_hps'],
                            'uraian_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_2['uraian_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                            'satuan_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_2['satuan_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                            'volume_hps_addendum_' . $cek_kontrak_penyedia . '' => null,
                            'harga_satuan_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_2['harga_satuan_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                            'total_harga_addendum_' . $cek_kontrak_penyedia . '' => null,
                            'sts_mc_nilai' => 'addendum_' . $cek_kontrak_penyedia . '',
                            'id_refrence_hps' => $value_hps_penyedia_kontrak_2['id_hps_penyedia_kontrak_2'],
                        ];
                        $this->Taggihan_kontrak_admin_model->create_hps_penyedia_kontrak_mc_2($data);
                        $id_insert_hps_penyedia_kontrak_mc_2 = $this->db->insert_id();
                        // batas tbl_hps_penyedia_kontrak_3
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_3');
                        $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
                        $this->db->where('tbl_hps_penyedia_kontrak_3.uraian_hps' . '_addendum_' . $cek_kontrak_penyedia . ' !=', NULL);
                        $query_tbl_hps_penyedia_kontrak_3 = $this->db->get();
                        foreach ($query_tbl_hps_penyedia_kontrak_3->result_array() as $key => $value_hps_penyedia_kontrak_3) {
                            $id_hps_penyedia_kontrak_3 = $value_hps_penyedia_kontrak_3['id_hps_penyedia_kontrak_3'];
                            $data = [
                                'id_hps_penyedia_kontrak_mc_2' => $id_insert_hps_penyedia_kontrak_mc_2,
                                'id_mc' => $id_mc,
                                'no_urut_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_3['no_urut'],
                                'no_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_3['no_hps'],
                                'uraian_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_3['uraian_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                                'satuan_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_3['satuan_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                                'volume_hps_addendum_' . $cek_kontrak_penyedia . '' => null,
                                'harga_satuan_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_3['harga_satuan_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                                'total_harga_addendum_' . $cek_kontrak_penyedia . '' => null,
                                'sts_mc_nilai' => 'addendum_' . $cek_kontrak_penyedia . '',
                                'id_refrence_hps' => $value_hps_penyedia_kontrak_3['id_hps_penyedia_kontrak_3'],
                            ];
                            $this->Taggihan_kontrak_admin_model->create_hps_penyedia_kontrak_mc_3($data);
                            $id_insert_hps_penyedia_kontrak_mc_3 = $this->db->insert_id();
                            // batas tbl_hps_penyedia_kontrak_4
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_4');
                            $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
                            $this->db->where('tbl_hps_penyedia_kontrak_4.uraian_hps' . '_addendum_' . $cek_kontrak_penyedia . ' !=', NULL);
                            $query_tbl_hps_penyedia_kontrak_4 = $this->db->get();
                            foreach ($query_tbl_hps_penyedia_kontrak_4->result_array() as $key => $value_hps_penyedia_kontrak_4) {
                                $id_hps_penyedia_kontrak_4 = $value_hps_penyedia_kontrak_4['id_hps_penyedia_kontrak_4'];
                                $data = [
                                    'id_hps_penyedia_kontrak_mc_3' => $id_insert_hps_penyedia_kontrak_mc_3,
                                    'id_mc' => $id_mc,
                                    'no_urut_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_4['no_urut'],
                                    'no_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_4['no_hps'],
                                    'uraian_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_4['uraian_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                                    'satuan_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_4['satuan_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                                    'volume_hps_addendum_' . $cek_kontrak_penyedia . '' => null,
                                    'harga_satuan_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_4['harga_satuan_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                                    'total_harga_addendum_' . $cek_kontrak_penyedia . '' => null,
                                    'sts_mc_nilai' => 'addendum_' . $cek_kontrak_penyedia . '',
                                    'id_refrence_hps' => $value_hps_penyedia_kontrak_4['id_hps_penyedia_kontrak_4'],
                                ];
                                $this->Taggihan_kontrak_admin_model->create_hps_penyedia_kontrak_mc_4($data);
                                $id_insert_hps_penyedia_kontrak_mc_4 = $this->db->insert_id();
                                // batas tbl_hps_penyedia_kontrak_5
                                $this->db->select('*');
                                $this->db->from('tbl_hps_penyedia_kontrak_5');
                                $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
                                $this->db->where('tbl_hps_penyedia_kontrak_5.uraian_hps' . '_addendum_' . $cek_kontrak_penyedia . ' !=', NULL);
                                $query_tbl_hps_penyedia_kontrak_5 = $this->db->get();
                                foreach ($query_tbl_hps_penyedia_kontrak_5->result_array() as $key => $value_hps_penyedia_kontrak_5) {
                                    $data = [
                                        'id_hps_penyedia_kontrak_mc_4' => $id_insert_hps_penyedia_kontrak_mc_4,
                                        'id_mc' => $id_mc,
                                        'no_urut_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_5['no_urut'],
                                        'no_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_5['no_hps'],
                                        'uraian_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_5['uraian_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                                        'satuan_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_5['satuan_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                                        'volume_hps_addendum_' . $cek_kontrak_penyedia . '' => null,
                                        'harga_satuan_hps_addendum_' . $cek_kontrak_penyedia . '' => $value_hps_penyedia_kontrak_5['harga_satuan_hps_' . 'addendum_' . $cek_kontrak_penyedia . ''],
                                        'total_harga_addendum_' . $cek_kontrak_penyedia . '' => null,
                                        'sts_mc_nilai' => 'addendum_' . $cek_kontrak_penyedia . '',
                                        'id_refrence_hps' => $value_hps_penyedia_kontrak_5['id_hps_penyedia_kontrak_5'],
                                    ];
                                    $this->Taggihan_kontrak_admin_model->create_hps_penyedia_kontrak_mc_5($data);
                                }
                            }
                        }
                    }
                }
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            }
        }
    }

    public function update_nilai_mc($id_detail_program_penyedia_jasa)
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $cek_kontrak_penyedia = $this->input->post('cek_kontrak_penyedia');
        $id_mc = $this->input->post('id_mc');
        if ($cek_kontrak_penyedia == 'nilai kontrak awal' || $cek_kontrak_penyedia == null) {
            $this->db->select('*');
            $this->db->from('tbl_hps_penyedia_kontrak_mc_1');
            $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_mc', $id_mc);
            $query_tbl_hps = $this->db->get();
            $total_hps_penyedia_kontrak_mc_1 = 0;
            $total_hps_penyedia_kontrak_mc_2 = 0;
            $total_hps_penyedia_kontrak_mc_3 = 0;
            $total_hps_penyedia_kontrak_mc_4 = 0;
            $total_hps_penyedia_kontrak_mc_5 = 0;
            foreach ($query_tbl_hps->result_array() as $key => $value_hps_penyedia_kontrak_mc_1) {
                $total_hps_penyedia_kontrak_mc_1 += $value_hps_penyedia_kontrak_mc_1['total_harga'];
                $id_hps_penyedia_kontrak_mc_1 = $value_hps_penyedia_kontrak_mc_1['id_refrence_hps'];
                // batas tbl_hps_penyedia_kontrak_mc_2
                $this->db->select('*');
                $this->db->from('tbl_hps_penyedia_kontrak_mc_2');
                $this->db->where('tbl_hps_penyedia_kontrak_mc_2.id_hps_penyedia_kontrak_mc_1', $id_hps_penyedia_kontrak_mc_1);
                $this->db->where('tbl_hps_penyedia_kontrak_mc_2.harga_satuan_hps !=', null);
                $query_tbl_hps_penyedia_kontrak_mc_2 = $this->db->get();
                foreach ($query_tbl_hps_penyedia_kontrak_mc_2->result_array() as $key => $value_hps_penyedia_kontrak_mc_2) {
                    $total_hps_penyedia_kontrak_mc_2 += $value_hps_penyedia_kontrak_mc_2['total_harga'];
                    $id_hps_penyedia_kontrak_mc_2 = $value_hps_penyedia_kontrak_mc_2['id_refrence_hps'];
                    // batas tbl_hps_penyedia_kontrak_mc_3
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_mc_3');
                    $this->db->where('tbl_hps_penyedia_kontrak_mc_3.id_hps_penyedia_kontrak_mc_2', $id_hps_penyedia_kontrak_mc_2);
                    $this->db->where('tbl_hps_penyedia_kontrak_mc_3.harga_satuan_hps !=', null);
                    $query_tbl_hps_penyedia_kontrak_mc_3 = $this->db->get();
                    foreach ($query_tbl_hps_penyedia_kontrak_mc_3->result_array() as $key => $value_hps_penyedia_kontrak_mc_3) {
                        $total_hps_penyedia_kontrak_mc_3 += $value_hps_penyedia_kontrak_mc_3['total_harga'];
                        $id_hps_penyedia_kontrak_mc_3 = $value_hps_penyedia_kontrak_mc_3['id_refrence_hps'];
                        // batas tbl_hps_penyedia_kontrak_mc_4
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_mc_4');
                        $this->db->where('tbl_hps_penyedia_kontrak_mc_4.id_hps_penyedia_kontrak_mc_3', $id_hps_penyedia_kontrak_mc_3);
                        $this->db->where('tbl_hps_penyedia_kontrak_mc_4.harga_satuan_hps !=', null);
                        $query_tbl_hps_penyedia_kontrak_mc_4 = $this->db->get();
                        foreach ($query_tbl_hps_penyedia_kontrak_mc_4->result_array() as $key => $value_hps_penyedia_kontrak_mc_4) {
                            $total_hps_penyedia_kontrak_mc_4 += $value_hps_penyedia_kontrak_mc_4['total_harga'];
                            $id_hps_penyedia_kontrak_mc_4 = $value_hps_penyedia_kontrak_mc_4['id_refrence_hps'];
                            // batas tbl_hps_penyedia_kontrak_mc_5
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_mc_5');
                            $this->db->where('tbl_hps_penyedia_kontrak_mc_5.id_hps_penyedia_kontrak_mc_4', $id_hps_penyedia_kontrak_mc_4);
                            $this->db->where('tbl_hps_penyedia_kontrak_mc_5.harga_satuan_hps !=', null);
                            $query_tbl_hps_penyedia_kontrak_mc_5 = $this->db->get();
                            foreach ($query_tbl_hps_penyedia_kontrak_mc_5->result_array() as $key => $value_hps_penyedia_kontrak_mc_5) {
                                $total_hps_penyedia_kontrak_mc_5 += $value_hps_penyedia_kontrak_mc_5['total_harga'];
                            }
                        }
                    }
                }
            }
            $data_mc_udpate = [
                'jumlah_mc' =>  $total_hps_penyedia_kontrak_mc_1,
            ];
            $this->Taggihan_kontrak_admin_model->update_mc($data_mc_udpate, $id_mc);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        } else {
            $this->db->select('*');
            $this->db->from('tbl_hps_penyedia_kontrak_mc_1');
            $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_mc', $id_mc);
            $query_tbl_hps = $this->db->get();
            $total_hps_penyedia_kontrak_mc_1 = 0;
            $total_hps_penyedia_kontrak_mc_2 = 0;
            $total_hps_penyedia_kontrak_mc_3 = 0;
            $total_hps_penyedia_kontrak_mc_4 = 0;
            $total_hps_penyedia_kontrak_mc_5 = 0;
            foreach ($query_tbl_hps->result_array() as $key => $value_hps_penyedia_kontrak_mc_1) {
                $total_hps_penyedia_kontrak_mc_1 += $value_hps_penyedia_kontrak_mc_1['total_harga_addendum_' . $cek_kontrak_penyedia . ''];
                $id_hps_penyedia_kontrak_mc_1 = $value_hps_penyedia_kontrak_mc_1['id_refrence_hps'];
                // batas tbl_hps_penyedia_kontrak_mc_2
                $this->db->select('*');
                $this->db->from('tbl_hps_penyedia_kontrak_mc_2');
                $this->db->where('tbl_hps_penyedia_kontrak_mc_2.id_hps_penyedia_kontrak_mc_1', $id_hps_penyedia_kontrak_mc_1);

                $query_tbl_hps_penyedia_kontrak_mc_2 = $this->db->get();
                foreach ($query_tbl_hps_penyedia_kontrak_mc_2->result_array() as $key => $value_hps_penyedia_kontrak_mc_2) {
                    $total_hps_penyedia_kontrak_mc_2 += $value_hps_penyedia_kontrak_mc_2['total_harga_addendum_' . $cek_kontrak_penyedia . ''];
                    $id_hps_penyedia_kontrak_mc_2 = $value_hps_penyedia_kontrak_mc_2['id_refrence_hps'];
                    // batas tbl_hps_penyedia_kontrak_mc_3
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_mc_3');
                    $this->db->where('tbl_hps_penyedia_kontrak_mc_3.id_hps_penyedia_kontrak_mc_2', $id_hps_penyedia_kontrak_mc_2);
                    $query_tbl_hps_penyedia_kontrak_mc_3 = $this->db->get();
                    foreach ($query_tbl_hps_penyedia_kontrak_mc_3->result_array() as $key => $value_hps_penyedia_kontrak_mc_3) {
                        $total_hps_penyedia_kontrak_mc_3 += $value_hps_penyedia_kontrak_mc_3['total_harga_addendum_' . $cek_kontrak_penyedia . ''];
                        $id_hps_penyedia_kontrak_mc_3 = $value_hps_penyedia_kontrak_mc_3['id_refrence_hps'];
                        // batas tbl_hps_penyedia_kontrak_mc_4
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_mc_4');
                        $this->db->where('tbl_hps_penyedia_kontrak_mc_4.id_hps_penyedia_kontrak_mc_3', $id_hps_penyedia_kontrak_mc_3);
                        $query_tbl_hps_penyedia_kontrak_mc_4 = $this->db->get();
                        foreach ($query_tbl_hps_penyedia_kontrak_mc_4->result_array() as $key => $value_hps_penyedia_kontrak_mc_4) {
                            $total_hps_penyedia_kontrak_mc_4 += $value_hps_penyedia_kontrak_mc_4['total_harga_addendum_' . $cek_kontrak_penyedia . ''];
                            $id_hps_penyedia_kontrak_mc_4 = $value_hps_penyedia_kontrak_mc_4['id_refrence_hps'];
                            // batas tbl_hps_penyedia_kontrak_mc_5
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_mc_5');
                            $this->db->where('tbl_hps_penyedia_kontrak_mc_5.id_hps_penyedia_kontrak_mc_4', $id_hps_penyedia_kontrak_mc_4);
                            $query_tbl_hps_penyedia_kontrak_mc_5 = $this->db->get();
                            foreach ($query_tbl_hps_penyedia_kontrak_mc_5->result_array() as $key => $value_hps_penyedia_kontrak_mc_5) {
                                $total_hps_penyedia_kontrak_mc_5 += $value_hps_penyedia_kontrak_mc_5['total_harga_addendum_' . $cek_kontrak_penyedia . ''];
                            }
                        }
                    }
                }
            }
            $data_mc_udpate = [
                'jumlah_mc' =>  $total_hps_penyedia_kontrak_mc_1,
            ];
            $this->Taggihan_kontrak_admin_model->update_mc($data_mc_udpate, $id_mc);
            $this->output->set_content_type('application/json')->set_output(json_encode('success'));
        }
    }
    public function update_bobot_permata_anggaran($id_detail_program_penyedia_jasa)
    {
        $cek_kontrak_penyedia = $this->input->post('cek_kontrak_penyedia');
        $id_mc = $this->input->post('id_mc');
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $jumlah_mc = $mc_row['jumlah_mc'];
        if ($cek_kontrak_penyedia == 'nilai kontrak awal') {
            $this->db->select('*');
            $this->db->from('tbl_hps_penyedia_kontrak_mc_1');
            $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_mc', $id_mc);
            $query_tbl_hps = $this->db->get();
            foreach ($query_tbl_hps->result_array() as $key => $value_hps_penyedia_kontrak_mc_1) {
                $id_hps_penyedia_kontrak_mc_1 = $value_hps_penyedia_kontrak_mc_1['id_refrence_hps'];
                $total_harga_penyedia_kontrak_mc_1 = $value_hps_penyedia_kontrak_mc_1['total_harga'];
                $hasil_bobot_hps_penyedia_kontrak_mc_1 = (($total_harga_penyedia_kontrak_mc_1 / $jumlah_mc) * 100) / 100;
                if ($total_harga_penyedia_kontrak_mc_1 == null || $total_harga_penyedia_kontrak_mc_1 == 0) {
                    $data = [
                        'bobot_hps_mc' => 0,
                    ];
                } else {
                    $data = [
                        'bobot_hps_mc' => round($hasil_bobot_hps_penyedia_kontrak_mc_1),
                    ];
                }


                $this->Taggihan_kontrak_admin_model->update_bobot_hps_penyedia_kontrak_mc_1($data, $id_mc);
                // batas tbl_hps_penyedia_kontrak_mc_2
                $this->db->select('*');
                $this->db->from('tbl_hps_penyedia_kontrak_mc_2');
                $this->db->where('tbl_hps_penyedia_kontrak_mc_2.id_hps_penyedia_kontrak_mc_1', $id_hps_penyedia_kontrak_mc_1);
                $query_tbl_hps_penyedia_kontrak_mc_2 = $this->db->get();
                foreach ($query_tbl_hps_penyedia_kontrak_mc_2->result_array() as $key => $value_hps_penyedia_kontrak_mc_2) {
                    $id_hps_penyedia_kontrak_mc_2 = $value_hps_penyedia_kontrak_mc_2['id_refrence_hps'];
                    $total_harga_penyedia_kontrak_mc_2 = $value_hps_penyedia_kontrak_mc_2['total_harga'];
                    $hasil_bobot_hps_penyedia_kontrak_mc_2 = (($total_harga_penyedia_kontrak_mc_2 / $jumlah_mc) * 100) / 100;
                    if ($total_harga_penyedia_kontrak_mc_2 == null || $total_harga_penyedia_kontrak_mc_2 == 0) {
                        $data = [
                            'bobot_hps_mc' => 0,
                        ];
                    } else {
                        $data = [
                            'bobot_hps_mc' => round($hasil_bobot_hps_penyedia_kontrak_mc_2),
                        ];
                    }
                    $this->Taggihan_kontrak_admin_model->update_bobot_hps_penyedia_kontrak_mc_2($data, $id_hps_penyedia_kontrak_mc_1);
                    // batas tbl_hps_penyedia_kontrak_mc_3
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_mc_3');
                    $this->db->where('tbl_hps_penyedia_kontrak_mc_3.id_hps_penyedia_kontrak_mc_2', $id_hps_penyedia_kontrak_mc_2);
                    $query_tbl_hps_penyedia_kontrak_mc_3 = $this->db->get();
                    foreach ($query_tbl_hps_penyedia_kontrak_mc_3->result_array() as $key => $value_hps_penyedia_kontrak_mc_3) {
                        $id_hps_penyedia_kontrak_mc_3 = $value_hps_penyedia_kontrak_mc_3['id_refrence_hps'];
                        $total_harga_penyedia_kontrak_mc_3 = $value_hps_penyedia_kontrak_mc_3['total_harga'];
                        $hasil_bobot_hps_penyedia_kontrak_mc_3 = (($total_harga_penyedia_kontrak_mc_3 / $jumlah_mc) * 100) / 100;
                        if ($total_harga_penyedia_kontrak_mc_3 == null || $total_harga_penyedia_kontrak_mc_3 == 0) {
                            $data = [
                                'bobot_hps_mc' => 0,
                            ];
                        } else {
                            $data = [
                                'bobot_hps_mc' => round($hasil_bobot_hps_penyedia_kontrak_mc_3),
                            ];
                        }
                        $this->Taggihan_kontrak_admin_model->update_bobot_hps_penyedia_kontrak_mc_3($data, $id_hps_penyedia_kontrak_mc_2);
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_mc_4');
                        $this->db->where('tbl_hps_penyedia_kontrak_mc_4.id_hps_penyedia_kontrak_mc_3', $id_hps_penyedia_kontrak_mc_3);
                        $query_tbl_hps_penyedia_kontrak_mc_4 = $this->db->get();
                        foreach ($query_tbl_hps_penyedia_kontrak_mc_4->result_array() as $key => $value_hps_penyedia_kontrak_mc_4) {
                            $id_hps_penyedia_kontrak_mc_4 = $value_hps_penyedia_kontrak_mc_4['id_refrence_hps'];
                            $total_harga_penyedia_kontrak_mc_4 = $value_hps_penyedia_kontrak_mc_4['total_harga'];
                            $hasil_bobot_hps_penyedia_kontrak_mc_4 = (($total_harga_penyedia_kontrak_mc_4 / $jumlah_mc) * 100) / 100;
                            if ($total_harga_penyedia_kontrak_mc_4 == null || $total_harga_penyedia_kontrak_mc_4 == 0) {
                                $data = [
                                    'bobot_hps_mc' => 0,
                                ];
                            } else {
                                $data = [
                                    'bobot_hps_mc' => round($hasil_bobot_hps_penyedia_kontrak_mc_4),
                                ];
                            }
                            $this->Taggihan_kontrak_admin_model->update_bobot_hps_penyedia_kontrak_mc_4($data, $id_hps_penyedia_kontrak_mc_3);
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_mc_5');
                            $this->db->where('tbl_hps_penyedia_kontrak_mc_5.id_hps_penyedia_kontrak_mc_4', $id_hps_penyedia_kontrak_mc_4);
                            $query_tbl_hps_penyedia_kontrak_mc_5 = $this->db->get();
                            foreach ($query_tbl_hps_penyedia_kontrak_mc_5->result_array() as $key => $value_hps_penyedia_kontrak_mc_5) {
                                $id_hps_penyedia_kontrak_mc_5 = $value_hps_penyedia_kontrak_mc_5['id_refrence_hps'];
                                $total_harga_penyedia_kontrak_mc_5 = $value_hps_penyedia_kontrak_mc_5['total_harga'];
                                $hasil_bobot_hps_penyedia_kontrak_mc_5 = (($total_harga_penyedia_kontrak_mc_5 / $jumlah_mc) * 100) / 100;
                                if ($total_harga_penyedia_kontrak_mc_5 == null || $total_harga_penyedia_kontrak_mc_5 == 0) {
                                    $data = [
                                        'bobot_hps_mc' => 0,
                                    ];
                                } else {
                                    $data = [
                                        'bobot_hps_mc' => round($hasil_bobot_hps_penyedia_kontrak_mc_5),
                                    ];
                                }
                                $this->Taggihan_kontrak_admin_model->update_bobot_hps_penyedia_kontrak_mc_5($data, $id_hps_penyedia_kontrak_mc_4);
                            }
                        }
                    }
                }
            }
        } else {
            $this->db->select('*');
            $this->db->from('tbl_hps_penyedia_kontrak_mc_1');
            $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_mc', $id_mc);
            $query_tbl_hps = $this->db->get();
            foreach ($query_tbl_hps->result_array() as $key => $value_hps_penyedia_kontrak_mc_1) {
                $id_hps_penyedia_kontrak_mc_1 = $value_hps_penyedia_kontrak_mc_1['id_refrence_hps'];
                $total_harga_penyedia_kontrak_mc_1 = $value_hps_penyedia_kontrak_mc_1['total_harga_addendum_' . $cek_kontrak_penyedia . ''];
                $hasil_bobot_hps_penyedia_kontrak_mc_1 = (($total_harga_penyedia_kontrak_mc_1 / $jumlah_mc) * 100) / 100;
                if ($total_harga_penyedia_kontrak_mc_1 == null || $total_harga_penyedia_kontrak_mc_1 == 0) {
                    $data = [
                        'bobot_hps_mc' => 0,
                    ];
                } else {
                    $data = [
                        'bobot_hps_mc' => round($hasil_bobot_hps_penyedia_kontrak_mc_1),
                    ];
                }
                $this->Taggihan_kontrak_admin_model->update_bobot_hps_penyedia_kontrak_mc_1($data, $id_mc);
                // batas tbl_hps_penyedia_kontrak_mc_2
                $this->db->select('*');
                $this->db->from('tbl_hps_penyedia_kontrak_mc_2');
                $this->db->where('tbl_hps_penyedia_kontrak_mc_2.id_hps_penyedia_kontrak_mc_1', $id_hps_penyedia_kontrak_mc_1);
                $query_tbl_hps_penyedia_kontrak_mc_2 = $this->db->get();
                foreach ($query_tbl_hps_penyedia_kontrak_mc_2->result_array() as $key => $value_hps_penyedia_kontrak_mc_2) {
                    $id_hps_penyedia_kontrak_mc_2 = $value_hps_penyedia_kontrak_mc_2['id_refrence_hps'];
                    $total_harga_penyedia_kontrak_mc_2 = $value_hps_penyedia_kontrak_mc_2['total_harga_addendum_' . $cek_kontrak_penyedia . ''];
                    $hasil_bobot_hps_penyedia_kontrak_mc_2 = (($total_harga_penyedia_kontrak_mc_2 / $jumlah_mc) * 100) / 100;
                    if ($total_harga_penyedia_kontrak_mc_2 == null || $total_harga_penyedia_kontrak_mc_2 == 0) {
                        $data = [
                            'bobot_hps_mc' => 0,
                        ];
                    } else {
                        $data = [
                            'bobot_hps_mc' => round($hasil_bobot_hps_penyedia_kontrak_mc_2),
                        ];
                    }
                    $this->Taggihan_kontrak_admin_model->update_bobot_hps_penyedia_kontrak_mc_2($data, $id_hps_penyedia_kontrak_mc_1);
                    // batas tbl_hps_penyedia_kontrak_mc_3
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_mc_3');
                    $this->db->where('tbl_hps_penyedia_kontrak_mc_3.id_hps_penyedia_kontrak_mc_2', $id_hps_penyedia_kontrak_mc_2);
                    $query_tbl_hps_penyedia_kontrak_mc_3 = $this->db->get();
                    foreach ($query_tbl_hps_penyedia_kontrak_mc_3->result_array() as $key => $value_hps_penyedia_kontrak_mc_3) {
                        $id_hps_penyedia_kontrak_mc_3 = $value_hps_penyedia_kontrak_mc_3['id_refrence_hps'];
                        $total_harga_penyedia_kontrak_mc_3 = $value_hps_penyedia_kontrak_mc_3['total_harga_addendum_' . $cek_kontrak_penyedia . ''];
                        $hasil_bobot_hps_penyedia_kontrak_mc_3 = (($total_harga_penyedia_kontrak_mc_3 / $jumlah_mc) * 100) / 100;
                        if ($total_harga_penyedia_kontrak_mc_3 == null || $total_harga_penyedia_kontrak_mc_3 == 0) {
                            $data = [
                                'bobot_hps_mc' => 0,
                            ];
                        } else {
                            $data = [
                                'bobot_hps_mc' => round($hasil_bobot_hps_penyedia_kontrak_mc_3),
                            ];
                        }
                        $this->Taggihan_kontrak_admin_model->update_bobot_hps_penyedia_kontrak_mc_3($data, $id_hps_penyedia_kontrak_mc_2);
                        // batas tbl_hps_penyedia_kontrak_mc_4
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_mc_4');
                        $this->db->where('tbl_hps_penyedia_kontrak_mc_4.id_hps_penyedia_kontrak_mc_3', $id_hps_penyedia_kontrak_mc_3);
                        $query_tbl_hps_penyedia_kontrak_mc_4 = $this->db->get();
                        foreach ($query_tbl_hps_penyedia_kontrak_mc_4->result_array() as $key => $value_hps_penyedia_kontrak_mc_4) {
                            $id_hps_penyedia_kontrak_mc_4 = $value_hps_penyedia_kontrak_mc_4['id_refrence_hps'];
                            $total_harga_penyedia_kontrak_mc_4 = $value_hps_penyedia_kontrak_mc_4['total_harga_addendum_' . $cek_kontrak_penyedia . ''];
                            $hasil_bobot_hps_penyedia_kontrak_mc_4 = (($total_harga_penyedia_kontrak_mc_4 / $jumlah_mc) * 100) / 100;
                            if ($total_harga_penyedia_kontrak_mc_4 == null || $total_harga_penyedia_kontrak_mc_4 == 0) {
                                $data = [
                                    'bobot_hps_mc' => 0,
                                ];
                            } else {
                                $data = [
                                    'bobot_hps_mc' => round($hasil_bobot_hps_penyedia_kontrak_mc_4),
                                ];
                            }
                            $this->Taggihan_kontrak_admin_model->update_bobot_hps_penyedia_kontrak_mc_4($data, $id_hps_penyedia_kontrak_mc_3);
                            // batas tbl_hps_penyedia_kontrak_mc_5
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_mc_5');
                            $this->db->where('tbl_hps_penyedia_kontrak_mc_5.id_hps_penyedia_kontrak_mc_4', $id_hps_penyedia_kontrak_mc_4);
                            $query_tbl_hps_penyedia_kontrak_mc_5 = $this->db->get();
                            foreach ($query_tbl_hps_penyedia_kontrak_mc_5->result_array() as $key => $value_hps_penyedia_kontrak_mc_5) {
                                $id_hps_penyedia_kontrak_mc_5 = $value_hps_penyedia_kontrak_mc_5['id_refrence_hps'];
                                $total_harga_penyedia_kontrak_mc_5 = $value_hps_penyedia_kontrak_mc_5['total_harga_addendum_' . $cek_kontrak_penyedia . ''];
                                $hasil_bobot_hps_penyedia_kontrak_mc_5 = (($total_harga_penyedia_kontrak_mc_5 / $jumlah_mc) * 100) / 100;
                                if ($total_harga_penyedia_kontrak_mc_5 == null || $total_harga_penyedia_kontrak_mc_5 == 0) {
                                    $data = [
                                        'bobot_hps_mc' => 0,
                                    ];
                                } else {
                                    $data = [
                                        'bobot_hps_mc' => round($hasil_bobot_hps_penyedia_kontrak_mc_5),
                                    ];
                                }
                                $this->Taggihan_kontrak_admin_model->update_bobot_hps_penyedia_kontrak_mc_5($data, $id_hps_penyedia_kontrak_mc_4);
                            }
                        }
                    }
                }
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function get_hps_penyedia_kontrak_mc_1()
    {
        $id_hps_penyedia_kontrak_mc_1 = $this->input->post('id_hps_penyedia_kontrak_mc_1');
        $get_hps_penyedia_kontrak_mc_1 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_1($id_hps_penyedia_kontrak_mc_1);
        $data = [
            'get_hps_penyedia_kontrak_mc_1' => $get_hps_penyedia_kontrak_mc_1,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    // 2
    public function get_hps_penyedia_kontrak_mc_2()
    {
        $id_hps_penyedia_kontrak_mc_2 = $this->input->post('id_hps_penyedia_kontrak_mc_2');
        $get_hps_penyedia_kontrak_mc_2 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_2($id_hps_penyedia_kontrak_mc_2);
        $data = [
            'get_hps_penyedia_kontrak_mc_2' => $get_hps_penyedia_kontrak_mc_2,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    // 3
    public function get_hps_penyedia_kontrak_mc_3()
    {
        $id_hps_penyedia_kontrak_mc_3 = $this->input->post('id_hps_penyedia_kontrak_mc_3');
        $get_hps_penyedia_kontrak_mc_3 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_3($id_hps_penyedia_kontrak_mc_3);
        $data = [
            'get_hps_penyedia_kontrak_mc_3' => $get_hps_penyedia_kontrak_mc_3,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    // 5
    public function get_hps_penyedia_kontrak_mc_5()
    {
        $id_hps_penyedia_kontrak_mc_5 = $this->input->post('id_hps_penyedia_kontrak_mc_5');
        $get_hps_penyedia_kontrak_mc_5 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_5($id_hps_penyedia_kontrak_mc_5);
        $data = [
            'get_hps_penyedia_kontrak_mc_5' => $get_hps_penyedia_kontrak_mc_5,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function edit_hps_penyedia_kontrak_1()
    {
        $id_hps_penyedia_kontrak_mc_1 = $this->input->post('id_hps_penyedia_kontrak_mc_1');
        $data_logic['id_hps_penyedia_kontrak_mc_1'] = $this->input->post('id_hps_penyedia_kontrak_mc_1');
        $data_logic['type_add'] = $this->input->post('type_add');
        $type_add = $this->input->post('type_add');
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
        if ($type_add == 'kontrak_awal') {
            $id_where_hps_penyedia_kontrak_mc_1 = [
                'id_hps_penyedia_kontrak_mc_1' => $id_hps_penyedia_kontrak_mc_1
            ];
            $data = [
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_1($data, $id_where_hps_penyedia_kontrak_mc_1);
        } else {
            $id_where_hps_penyedia_kontrak_mc_1 = [
                'id_hps_penyedia_kontrak_mc_1' => $id_hps_penyedia_kontrak_mc_1
            ];
            $data = [
                'uraian_hps_addendum_' . $type_add . '' => $uraian_hps,
                'no_hps_addendum_' . $type_add . '' => $no_hps,
                'volume_hps_addendum_' . $type_add . '' => $volume_hps,
                'satuan_hps_addendum_' . $type_add . '' => $satuan_hps,
                'harga_satuan_hps_addendum_' . $type_add . '' => $harga_satuan,
                'total_harga_addendum_' . $type_add . '' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_1($data, $id_where_hps_penyedia_kontrak_mc_1);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    public function edit_hps_penyedia_kontrak_mc_2_addendum()
    {
        // _1
        $data_logic['id_hps_penyedia_kontrak_mc_1'] = $this->input->post('id_hps_penyedia_kontrak_mc_1');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_mc_1 = $this->input->post('id_hps_penyedia_kontrak_mc_1');
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
        if ($add == 'kontrak_awal') {
            $id_where_hps_penyedia_kontrak_mc_1 = [
                'id_hps_penyedia_kontrak_mc_1' => $id_hps_penyedia_kontrak_mc_1
            ];
            $data = [
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_1($data, $id_where_hps_penyedia_kontrak_mc_1);
        } else {
            $id_where_hps_penyedia_kontrak_mc_1 = [
                'id_hps_penyedia_kontrak_mc_1' => $id_hps_penyedia_kontrak_mc_1
            ];
            $data = [
                'no_hps_addendum_' . $add . '' => $no_hps,
                'uraian_hps_addendum_' . $add . '' => $uraian_hps,
                'volume_hps_addendum_' . $add . '' => $volume_hps,
                'satuan_hps_addendum_' . $add . '' => $satuan_hps,
                'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
                'total_harga_addendum_' . $add . '' => $total_harga
            ];

            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_1($data, $id_where_hps_penyedia_kontrak_mc_1);
        }
        $this->load->view('hps_penyedia_kontrak_mc_logic/nilai_level_1', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_mc_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_mc_jasa'),
            'id_detail_program_penyedia_kontrak_mc_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_mc_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function edit_hps_penyedia_kontrak_mc_3_addendum()
    {
        // _2
        $data_logic['id_hps_penyedia_kontrak_mc_2'] = $this->input->post('id_hps_penyedia_kontrak_mc_2');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_mc_2 = $this->input->post('id_hps_penyedia_kontrak_mc_2');
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
        // 2
        if ($add == 'kontrak_awal') {
            $id_where_hps_penyedia_kontrak_mc_2 = [
                'id_hps_penyedia_kontrak_mc_2' => $id_hps_penyedia_kontrak_mc_2
            ];
            $data = [
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_2($data, $id_where_hps_penyedia_kontrak_mc_2);
        } else {
            $id_where_hps_penyedia_kontrak_mc_2 = [
                'id_hps_penyedia_kontrak_mc_2' => $id_hps_penyedia_kontrak_mc_2
            ];
            $data = [
                'no_hps_addendum_' . $add . '' => $no_hps,
                'uraian_hps_addendum_' . $add . '' => $uraian_hps,
                'volume_hps_addendum_' . $add . '' => $volume_hps,
                'satuan_hps_addendum_' . $add . '' => $satuan_hps,
                'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
                'total_harga_addendum_' . $add . '' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_2($data, $id_where_hps_penyedia_kontrak_mc_2);
        }
        $this->load->view('hps_penyedia_kontrak_mc_logic/nilai_level_3', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_mc_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_mc_jasa'),
            'id_detail_program_penyedia_kontrak_mc_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_mc_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function edit_hps_penyedia_kontrak_mc_4_addendum()
    {
        // _3
        $data_logic['id_hps_penyedia_kontrak_mc_3'] = $this->input->post('id_hps_penyedia_kontrak_mc_3');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_mc_3 = $this->input->post('id_hps_penyedia_kontrak_mc_3');
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
        // 3
        if ($add == 0) {
            $id_where_hps_penyedia_kontrak_mc_3 = [
                'id_hps_penyedia_kontrak_mc_3' => $id_hps_penyedia_kontrak_mc_3
            ];
            $data = [
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_3($data, $id_where_hps_penyedia_kontrak_mc_3);
        } else {
            $id_where_hps_penyedia_kontrak_mc_3 = [
                'id_hps_penyedia_kontrak_mc_3' => $id_hps_penyedia_kontrak_mc_3
            ];
            $data = [
                'no_hps_addendum_' . $add . '' => $no_hps,
                'uraian_hps_addendum_' . $add . '' => $uraian_hps,
                'volume_hps_addendum_' . $add . '' => $volume_hps,
                'satuan_hps_addendum_' . $add . '' => $satuan_hps,
                'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
                'total_harga_addendum_' . $add . '' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_3($data, $id_where_hps_penyedia_kontrak_mc_3);
        }
        $this->load->view('hps_penyedia_kontrak_mc_logic/nilai_level_4', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_mc_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_mc_jasa'),
            'id_detail_program_penyedia_kontrak_mc_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_mc_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function edit_hps_penyedia_kontrak_mc_5_addendum()
    {
        // _4
        $data_logic['id_hps_penyedia_kontrak_mc_4'] = $this->input->post('id_hps_penyedia_kontrak_mc_4');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_mc_4 = $this->input->post('id_hps_penyedia_kontrak_mc_4');
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
        // 4
        if ($add == 'kontrak_awal') {
            $id_where_hps_penyedia_kontrak_mc_4 = [
                'id_hps_penyedia_kontrak_mc_4' => $id_hps_penyedia_kontrak_mc_4
            ];
            $data = [
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_4($data, $id_where_hps_penyedia_kontrak_mc_4);
        } else {
            $id_where_hps_penyedia_kontrak_mc_4 = [
                'id_hps_penyedia_kontrak_mc_4' => $id_hps_penyedia_kontrak_mc_4
            ];
            $data = [
                'no_hps_addendum_' . $add . '' => $no_hps,
                'uraian_hps_addendum_' . $add . '' => $uraian_hps,
                'volume_hps_addendum_' . $add . '' => $volume_hps,
                'satuan_hps_addendum_' . $add . '' => $satuan_hps,
                'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
                'total_harga_addendum_' . $add . '' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_4($data, $id_where_hps_penyedia_kontrak_mc_4);
        }
        $this->load->view('hps_penyedia_kontrak_mc_logic/nilai_level_5', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_mc_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_mc_jasa'),
            'id_detail_program_penyedia_kontrak_mc_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_mc_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function edit_hps_penyedia_kontrak_mc_6_addendum()
    {
        // _5
        $data_logic['id_hps_penyedia_kontrak_mc_5'] = $this->input->post('id_hps_penyedia_kontrak_mc_5');
        $data_logic['type_add'] = $this->input->post('type_add');
        $id_hps_penyedia_kontrak_mc_5 = $this->input->post('id_hps_penyedia_kontrak_mc_5');
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
        // 5
        if ($add == 'kontrak_awal') {
            $id_where_hps_penyedia_kontrak_mc_5 = [
                'id_hps_penyedia_kontrak_mc_5' => $id_hps_penyedia_kontrak_mc_5
            ];
            $data = [
                'uraian_hps' => $uraian_hps,
                'no_hps' => $no_hps,
                'volume_hps' => $volume_hps,
                'satuan_hps' => $satuan_hps,
                'harga_satuan_hps' => $harga_satuan,
                'total_harga' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_5($data, $id_where_hps_penyedia_kontrak_mc_5);
        } else {
            $id_where_hps_penyedia_kontrak_mc_5 = [
                'id_hps_penyedia_kontrak_mc_5' => $id_hps_penyedia_kontrak_mc_5
            ];
            $data = [
                'no_hps_addendum_' . $add . '' => $no_hps,
                'uraian_hps_addendum_' . $add . '' => $uraian_hps,
                'volume_hps_addendum_' . $add . '' => $volume_hps,
                'satuan_hps_addendum_' . $add . '' => $satuan_hps,
                'harga_satuan_hps_addendum_' . $add . '' => $harga_satuan,
                'total_harga_addendum_' . $add . '' => $total_harga
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_5($data, $id_where_hps_penyedia_kontrak_mc_5);
        }
        $this->load->view('hps_penyedia_kontrak_mc_logic/nilai_level_6', $data_logic);
        $data_update = [
            'id_detail_sub_program_penyedia_kontrak_mc_jasa' => $this->input->post('id_detail_sub_program_penyedia_kontrak_mc_jasa'),
            'id_detail_program_penyedia_kontrak_mc_jasa' => $this->input->post('id_detail_program_penyedia_kontrak_mc_jasa'),
            'success' => 'success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data_update));
    }

    public function detail_mc_dokumen($id_detail_program_penyedia_jasa)
    {
        $data['row_kontrak'] = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $data['looping_adendum'] = $this->Taggihan_kontrak_admin_model->get_addendum($id_detail_program_penyedia_jasa);
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/dokumen_tata_cara_pembayaran', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax_dokumen_tata_cara_pembayaran', $data);
    }



    public function tata_cara_pembayaran($id_mc)
    {
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_nilai_kontrak_mc_1($id_detail_program_penyedia_jasa, $id_mc);
        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $result_sub_program  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);

        // result addendumn =
        $addendum_result = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        }
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/kelola_format_dokumen', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax_dokumen_tata_cara_pembayaran', $data);
    }


    // dokumen tata cara pembayaran
    public function ceklist_dokumen($id_mc)
    {
        $cek_dokumen_ceklist = $this->Taggihan_kontrak_admin_model->get_dokumen_ceklist_row($id_mc);
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_nilai_kontrak_mc_1($id_detail_program_penyedia_jasa, $id_mc);
        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $result_sub_program  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);

        // result addendumn =
        $addendum_result = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        }
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/dokumen/ceklist_pembayaran', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax_dokumen_tata_cara_pembayaran', $data);
    }





    public function simpan_update_ceklist_dokumen()
    {
        // _5
        $id_mc = $this->input->post('id_mc');
        $cek_dokumen_ceklist = $this->Taggihan_kontrak_admin_model->get_dokumen_ceklist_row($id_mc);
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $kelompok  = $this->input->post('kelompok');
        $pml  = $this->input->post('pml');
        $sts_tersedia_sertifikat_pembayaran  = $this->input->post('sts_tersedia_sertifikat_pembayaran');
        $keterangan_sertifikat_pembayaran  = $this->input->post('keterangan_sertifikat_pembayaran');
        $sts_tersedia_surat_permohonan_pembayaran  = $this->input->post('sts_tersedia_surat_permohonan_pembayaran');
        $no_surat_permohonan_pembayaran  = $this->input->post('no_surat_permohonan_pembayaran');
        $tgl_surat_permohonan_pembayaran  = $this->input->post('tgl_surat_permohonan_pembayaran');
        $sts_tersedia_kwitansi_pembayaran  = $this->input->post('sts_tersedia_kwitansi_pembayaran');
        $no_surat_kwitansi_pembayaran  = $this->input->post('no_surat_kwitansi_pembayaran');
        $tgl_surat_kwitansi_pembayaran  = $this->input->post('tgl_surat_kwitansi_pembayaran');
        $sts_tersedia_faktur_pajak_1  = $this->input->post('sts_tersedia_faktur_pajak_1');
        $keterangan_faktur_pajak_1  = $this->input->post('keterangan_faktur_pajak_1');
        $sts_tersedia_sppt_1  = $this->input->post('sts_tersedia_sppt_1');
        $keterangan_sppst_1  = $this->input->post('keterangan_sppst_1');
        $sts_tersedia_faktur_pajak_2  = $this->input->post('sts_tersedia_faktur_pajak_2');
        $keterangan_faktur_pajak_2 = $this->input->post('keterangan_faktur_pajak_2');
        $sts_tersedia_sppt_2 = $this->input->post('sts_tersedia_sppt_2');
        $no_surat_sppt_2 = $this->input->post('no_surat_sppt_2');
        $tgl_surat_sppt_2 = $this->input->post('tgl_surat_sppt_2');
        $sts_tersedia_bapp = $this->input->post('sts_tersedia_bapp');
        $no_surat_bapp = $this->input->post('no_surat_bapp');
        $tgl_surat_bapp = $this->input->post('tgl_surat_bapp');
        $sts_tersedia_mc_backup_1 = $this->input->post('sts_tersedia_mc_backup_1');
        $keterangan_mc_backup_1 = $this->input->post('keterangan_mc_backup_1');
        $sts_tersedia_referensi_bank_1 = $this->input->post('sts_tersedia_referensi_bank_1');
        $keterangan_referensi_bank_1 = $this->input->post('keterangan_referensi_bank_1');
        $sts_tersedia_bastp = $this->input->post('sts_tersedia_bastp');
        $no_surat_bastp = $this->input->post('no_surat_bastp');
        $tgl_surat_bastp = $this->input->post('tgl_surat_bastp');
        $sts_tersedia_npwp_1 = $this->input->post('sts_tersedia_npwp_1');
        $keterangan_npwp_1 = $this->input->post('keterangan_npwp_1');
        $sts_tersedia_sppkp_1 = $this->input->post('sts_tersedia_sppkp_1');
        $keterangan_sppkp_1 = $this->input->post('keterangan_sppkp_1');
        $sts_tersedia_ba_progres_fisik = $this->input->post('sts_tersedia_ba_progres_fisik');
        $tgl_surat_ba_progres_fisik = $this->input->post('tgl_surat_ba_progres_fisik');
        $sts_tersedia_mc_backup_2 = $this->input->post('sts_tersedia_mc_backup_2');
        $tgl_surat_mc_backup_2 = $this->input->post('tgl_surat_mc_backup_2');
        $sts_tersedia_referensi_bank_2 = $this->input->post('sts_tersedia_referensi_bank_2');
        $keterangan_referensi_bank_2 = $this->input->post('keterangan_referensi_bank_2');
        $sts_tersedia_ktp = $this->input->post('sts_tersedia_ktp');
        $keterangan_ktp = $this->input->post('keterangan_ktp');
        $sts_tersedia_npwp_2 = $this->input->post('sts_tersedia_npwp_2');
        $keterangan_npwp_2 = $this->input->post('keterangan_npwp_2');
        $sts_tersedia_sppkp_2 = $this->input->post('sts_tersedia_sppkp_2');
        $keterangan_sppkp_2 = $this->input->post('keterangan_sppkp_2');
        $sts_tersedia_sbu = $this->input->post('sts_tersedia_sbu');
        $keterangan_sbu = $this->input->post('keterangan_sbu');
        $sts_tersedia_kontrak_jasa_pemborongan = $this->input->post('sts_tersedia_kontrak_jasa_pemborongan');
        $keterangan_kontrak_jasa_pemborongan = $this->input->post('keterangan_kontrak_jasa_pemborongan');
        $sts_tersedia_addendum = $this->input->post('sts_tersedia_addendum');
        $keterangan_addendum = $this->input->post('keterangan_addendum');
        $sts_tersedia_spmk = $this->input->post('sts_tersedia_spmk');
        $keterangan_spmk = $this->input->post('keterangan_spmk');
        $tgl_dokumen_ceklist = $this->input->post('tgl_dokumen_ceklist');
        if ($cek_dokumen_ceklist) {
            $where = [
                'id_mc' => $id_mc
            ];
        } else {
        }

        $data = [
            'id_mc' => $id_mc,
            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
            'kelompok' => $kelompok,
            'pml' => $pml,
            'sts_tersedia_sertifikat_pembayaran' => $sts_tersedia_sertifikat_pembayaran,
            'keterangan_sertifikat_pembayaran' => $keterangan_sertifikat_pembayaran,
            'sts_tersedia_surat_permohonan_pembayaran' => $sts_tersedia_surat_permohonan_pembayaran,
            'no_surat_permohonan_pembayaran' => $no_surat_permohonan_pembayaran,
            'tgl_surat_permohonan_pembayaran' => $tgl_surat_permohonan_pembayaran,
            'sts_tersedia_kwitansi_pembayaran' => $sts_tersedia_kwitansi_pembayaran,
            'no_surat_kwitansi_pembayaran' => $no_surat_kwitansi_pembayaran,
            'tgl_surat_kwitansi_pembayaran' => $tgl_surat_kwitansi_pembayaran,

            'sts_tersedia_faktur_pajak_1' => $sts_tersedia_faktur_pajak_1,
            'keterangan_faktur_pajak_1' => $keterangan_faktur_pajak_1,
            'sts_tersedia_sppt_1' => $sts_tersedia_sppt_1,
            'keterangan_sppst_1' => $keterangan_sppst_1,
            'sts_tersedia_faktur_pajak_2' => $sts_tersedia_faktur_pajak_2,

            'keterangan_faktur_pajak_2' => $keterangan_faktur_pajak_2,
            'sts_tersedia_sppt_2' => $sts_tersedia_sppt_2,
            'no_surat_sppt_2' => $no_surat_sppt_2,
            'tgl_surat_sppt_2' => $tgl_surat_sppt_2,
            'sts_tersedia_bapp' => $sts_tersedia_bapp,
            'no_surat_bapp' => $no_surat_bapp,
            'tgl_surat_bapp' => $tgl_surat_bapp,
            'sts_tersedia_mc_backup_1' => $sts_tersedia_mc_backup_1,
            'keterangan_mc_backup_1' => $keterangan_mc_backup_1,
            'sts_tersedia_referensi_bank_1' => $sts_tersedia_referensi_bank_1,
            'keterangan_referensi_bank_1' => $keterangan_referensi_bank_1,
            'sts_tersedia_bastp' => $sts_tersedia_bastp,
            'no_surat_bastp' => $no_surat_bastp,
            'tgl_surat_bastp' => $tgl_surat_bastp,
            'sts_tersedia_npwp_1' => $sts_tersedia_npwp_1,
            'keterangan_npwp_1' => $keterangan_npwp_1,
            'sts_tersedia_sppkp_1' => $sts_tersedia_sppkp_1,
            'keterangan_sppkp_1' => $keterangan_sppkp_1,
            'sts_tersedia_ba_progres_fisik' => $sts_tersedia_ba_progres_fisik,
            'tgl_surat_ba_progres_fisik' => $tgl_surat_ba_progres_fisik,
            'sts_tersedia_mc_backup_2' => $sts_tersedia_mc_backup_2,
            'tgl_surat_mc_backup_2' => $tgl_surat_mc_backup_2,
            'sts_tersedia_referensi_bank_2' => $sts_tersedia_referensi_bank_2,
            'keterangan_referensi_bank_2' => $keterangan_referensi_bank_2,
            'sts_tersedia_ktp' => $sts_tersedia_ktp,
            'keterangan_ktp' => $keterangan_ktp,
            'sts_tersedia_npwp_2' => $sts_tersedia_npwp_2,
            'keterangan_npwp_2' => $keterangan_npwp_2,
            'sts_tersedia_sppkp_2' => $sts_tersedia_sppkp_2,
            'keterangan_sppkp_2' => $keterangan_sppkp_2,
            'sts_tersedia_sbu' => $sts_tersedia_sbu,
            'keterangan_sbu' => $keterangan_sbu,
            'sts_tersedia_kontrak_jasa_pemborongan' => $sts_tersedia_kontrak_jasa_pemborongan,
            'keterangan_kontrak_jasa_pemborongan' => $keterangan_kontrak_jasa_pemborongan,
            'sts_tersedia_addendum' => $sts_tersedia_addendum,
            'keterangan_addendum' => $keterangan_addendum,
            'sts_tersedia_spmk' => $sts_tersedia_spmk,
            'keterangan_spmk' => $keterangan_spmk,
            'tgl_dokumen_ceklist' => $tgl_dokumen_ceklist,

        ];
        if ($cek_dokumen_ceklist) {
            $where = [
                'id_mc' => $id_mc
            ];
            $this->Taggihan_kontrak_admin_model->update_tbl_dokumen_ceklist($data, $where);
        } else {
            $where = [
                'id_mc' => $id_mc
            ];
            $this->Taggihan_kontrak_admin_model->create_tbl_dokumen_ceklist($data);
        }
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    public function sertifikat_pembayaran_dokumen($id_mc)
    {
        $cek_dokumen_ceklist = $this->Taggihan_kontrak_admin_model->get_dokumen_ceklist_row($id_mc);
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_nilai_kontrak_mc_1($id_detail_program_penyedia_jasa, $id_mc);
        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $result_sub_program  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);

        // result addendumn =
        $addendum_result = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        }
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/dokumen/sertifikat_pembayaran', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax_dokumen_tata_cara_pembayaran', $data);
    }

    public function kwitansi_pembayaran_dokumen($id_mc)
    {
        $cek_dokumen_ceklist = $this->Taggihan_kontrak_admin_model->get_dokumen_ceklist_row($id_mc);
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_nilai_kontrak_mc_1($id_detail_program_penyedia_jasa, $id_mc);
        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $result_sub_program  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);

        // result addendumn =
        $addendum_result = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        }
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/dokumen/kwitansi_pembayaran', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax_dokumen_tata_cara_pembayaran', $data);
    }

    public function bapp_pembayaran_dokumen($id_mc)
    {
        $cek_dokumen_ceklist = $this->Taggihan_kontrak_admin_model->get_dokumen_ceklist_row($id_mc);
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_nilai_kontrak_mc_1($id_detail_program_penyedia_jasa, $id_mc);
        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $result_sub_program  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);

        // result addendumn =
        $addendum_result = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        }
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/dokumen/bapp', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax_dokumen_tata_cara_pembayaran', $data);
    }

    public function bastp_pembayaran_dokumen($id_mc)
    {
        $cek_dokumen_ceklist = $this->Taggihan_kontrak_admin_model->get_dokumen_ceklist_row($id_mc);
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_nilai_kontrak_mc_1($id_detail_program_penyedia_jasa, $id_mc);
        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $result_sub_program  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);

        // result addendumn =
        $addendum_result = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        }
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/dokumen/bastp', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax_dokumen_tata_cara_pembayaran', $data);
    }
    public function ba_pembayaran_dokumen($id_mc)
    {
        $cek_dokumen_ceklist = $this->Taggihan_kontrak_admin_model->get_dokumen_ceklist_row($id_mc);
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_nilai_kontrak_mc_1($id_detail_program_penyedia_jasa, $id_mc);
        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $result_sub_program  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);

        // result addendumn =
        $addendum_result = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        }
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/dokumen/ba', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax_dokumen_tata_cara_pembayaran', $data);
    }

    public function mc_1_pembayaran_dokumen($id_mc)
    {
        $cek_dokumen_ceklist = $this->Taggihan_kontrak_admin_model->get_dokumen_ceklist_row($id_mc);
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_nilai_kontrak_mc_1($id_detail_program_penyedia_jasa, $id_mc);
        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $result_sub_program  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);

        // result addendumn =
        $addendum_result = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        }
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/dokumen/mc_1', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax_dokumen_tata_cara_pembayaran', $data);
    }

    public function detail_mc_pembayaran_dokumen($id_mc)
    {
        $cek_dokumen_ceklist = $this->Taggihan_kontrak_admin_model->get_dokumen_ceklist_row($id_mc);
        $mc_row = $this->Taggihan_kontrak_admin_model->cek_row_mc($id_mc);
        $row_traking = $this->Taggihan_kontrak_admin_model->cek_mc_traking($id_mc);
        $get_traking_vendor = $this->Taggihan_kontrak_admin_model->get_traking_vendor($id_mc);
        $get_traking_area = $this->Taggihan_kontrak_admin_model->get_traking_area($id_mc);
        $get_traking_pusat = $this->Taggihan_kontrak_admin_model->get_traking_pusat($id_mc);
        $get_traking_finance = $this->Taggihan_kontrak_admin_model->get_traking_finance($id_mc);
        $get_traking_data = $this->Taggihan_kontrak_admin_model->get_traking_data($id_mc);

        $id_detail_program_penyedia_jasa = $mc_row['id_detail_program_penyedia_jasa'];
        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $tanggal_mc = $mc_row['tanggal_mc'];
        $date = date_create($tanggal_mc);
        date_modify($date, '+10 day');

        // ini untuk edit mc 
        $data_tbl_kontrak = $this->Taggihan_kontrak_admin_model->GetByIdKontrak($id_detail_program_penyedia_jasa);
        $data_detail_taggihan = $this->Taggihan_kontrak_admin_model->GetByIdKontrakDetail($id_detail_program_penyedia_jasa);
        $count = $this->db->query("SELECT COUNT(id_detail_program_penyedia_jasa) AS total  FROM tbl_mc WHERE id_detail_program_penyedia_jasa = '$id_detail_program_penyedia_jasa'")->row();

        $cekkontrak = $this->Taggihan_kontrak_admin_model->cekKontrak($id_detail_program_penyedia_jasa);

        $cek_pertama_mc_apa = $this->Taggihan_kontrak_admin_model->cek_pertama_mc_apa($id_detail_program_penyedia_jasa);
        $vendor_session = $this->session->userdata('id_vendor');
        $pegawai = $this->session->userdata('id_departemen');

        $get_kode_mc = $this->Taggihan_kontrak_admin_model->get_kode_mc($id_detail_program_penyedia_jasa);
        $urutku = $get_kode_mc + 1;
        $data_urut = $urutku++;

        $jika_ada_um = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
        $select_max_mc1 = $this->Taggihan_kontrak_admin_model->get_last_mc($id_detail_program_penyedia_jasa);

        $select_max_mc2 = $this->Taggihan_kontrak_admin_model->get_last_mc_jumlah($id_detail_program_penyedia_jasa);
        $cek_nilai_kontrak_mc = $this->Taggihan_kontrak_admin_model->cek_nilai_kontrak_mc_1($id_detail_program_penyedia_jasa, $id_mc);
        $row_kontrak = $this->Taggihan_kontrak_admin_model->get_row_kontrak($id_detail_program_penyedia_jasa);
        $result_sub_program  = $this->Data_kontrak_model->get_sub_program($id_detail_program_penyedia_jasa);

        // result addendumn =
        $addendum_result = $this->Data_kontrak_model->get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa);
        if ($mc_row['no_mc'] == 'um') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else  if ($mc_row['no_mc'] == '1') {
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        } else {
            $kontrak_sebelum_edit = $mc_row['id_detail_program_penyedia_jasa'];
            $no_mc_sebelum_edit = (int)$mc_row['no_mc'] - 1;
            $data_mc_sebelum_row_edit = $this->Taggihan_kontrak_admin_model->get_last_edit($kontrak_sebelum_edit, $no_mc_sebelum_edit);
            $jika_ada_um_edit = $this->Taggihan_kontrak_admin_model->get_cek_um($id_detail_program_penyedia_jasa);
            $data = [
                'row_mc' => $mc_row,
                'row_dokumen_ceklist' => $cek_dokumen_ceklist,
                'traking' => $row_traking,
                'data_selesai' =>  date_format($date, 'Y-m-d'),
                'get_traking_vendor' => $get_traking_vendor,
                'get_traking_area' => $get_traking_area,
                'get_traking_pusat' => $get_traking_pusat,
                'get_traking_finance' => $get_traking_finance,
                'get_traking_data' => $get_traking_data,
                'no_urut_mc' => $data_urut,
                'total_mc_sebelum_edit' => $data_mc_sebelum_row_edit,
                'jika_ada_um_edit' => $jika_ada_um_edit,
                'datakontrak' => $data_tbl_kontrak,
                'get_detail_taggihan' => $data_detail_taggihan,
                'cekkontrak' => $cekkontrak,
                'total_kontrak' => $count,
                'selact_max1' => $select_max_mc1,
                'selact_max2' => $select_max_mc2,
                'vendor_session' => $vendor_session,
                'pegawai' => $pegawai,
                'cek_pertama_mc_apa' => $cek_pertama_mc_apa,
                'no_urut_mc' => $data_urut,
                'jika_ada_um' => $jika_ada_um,
                'row_kontrak' => $row_kontrak,
                'cek_nilai_kontrak_mc' => $cek_nilai_kontrak_mc,
                'result_sub_program' => $result_sub_program,
                'addendum_result' => $addendum_result
            ];
        }
        $data['title'] = 'Dashboard';
        $this->load->view('template_stisla/header');
        $this->load->view('template_stisla/sidebar');
        $this->load->view('admin/Tagihan_kontrak_admin/dokumen/detail_progress_pembayaran', $data);
        $this->load->view('template_stisla/footer');
        $this->load->view('admin/Tagihan_kontrak_admin/ajax_dokumen_tata_cara_pembayaran', $data);
    }
    public function data_get_dokumen_mc($id_detail_program_penyedia_jasa)
    {
        $type = $this->input->post('type');
        $resultss = $this->Tagihan_kontrak_model->get_data_dok_mc($id_detail_program_penyedia_jasa, $type);
        $no = $_POST['start'];
        // $total = 0;
        $data = [];
        foreach ($resultss as $angga) {
            $row = array();
            $row[] = ++$no;
            if ($type == 'file_refrensi_bank_mc') {
                $row[] = $angga->nama_file_refrensi_bank_mc;
                $row[] = '<a href=' . base_url('/file_dokumen_mc' . '/' . $angga->file_refrensi_bank_mc) . '>' . '<img width="30px" src=' . base_url('assets/pdf.png') . ' >' . '</a>';
            } else  if ($type == 'file_ktp_mc') {
                $row[] = $angga->nama_file_ktp_mc;
                $row[] = '<a href=' . base_url('/file_dokumen_mc' . '/' . $angga->file_ktp_mc) . '>' . '<img width="30px" src=' . base_url('assets/pdf.png') . ' >' . '</a>';
            } else  if ($type == 'file_npwp_mc') {
                $row[] = $angga->nama_file_npwp_mc;
                $row[] = '<a href=' . base_url('/file_dokumen_mc' . '/' . $angga->file_npwp_mc) . '>' . '<img width="30px" src=' . base_url('assets/pdf.png') . ' >' . '</a>';
            } else  if ($type == 'file_sppkp_mc') {
                $row[] = $angga->nama_file_sppkp_mc;
                $row[] = '<a href=' . base_url('/file_dokumen_mc' . '/' . $angga->file_sppkp_mc) . '>' . '<img width="30px" src=' . base_url('assets/pdf.png') . ' >' . '</a>';
            } else  if ($type == 'file_sbu_mc') {
                $row[] = $angga->nama_file_sbu_mc;
                $row[] = '<a href=' . base_url('/file_dokumen_mc' . '/' . $angga->file_sbu_mc) . '>' . '<img width="30px" src=' . base_url('assets/pdf.png') . ' >' . '</a>';
            } else  if ($type == 'file_kontrak_jasa_pemborongan_mc') {
                $row[] = $angga->nama_file_kontrak_jasa_pemborongan_mc;
                $row[] = '<a href=' . base_url('/file_dokumen_mc' . '/' . $angga->file_kontrak_jasa_pemborongan_mc) . '>' . '<img width="30px" src=' . base_url('assets/pdf.png') . ' >' . '</a>';
            } else  if ($type == 'file_addendum_mc') {
                $row[] = $angga->nama_file_addendum_mc;
                $row[] = '<a href=' . base_url('/file_dokumen_mc' . '/' . $angga->file_addendum_mc) . '>' . '<img width="30px" src=' . base_url('assets/pdf.png') . ' >' . '</a>';
            } else  if ($type == 'file_spmk_mc') {
                $row[] = $angga->nama_file_spmk_mc;
                $row[] = '<a href=' . base_url('/file_dokumen_mc' . '/' . $angga->file_spmk_mc) . '>' . '<img width="30px" src=' . base_url('assets/pdf.png') . ' >' . '</a>';
            } else {
            }
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Tagihan_kontrak_model->count_all_get_data_dok_mc($id_detail_program_penyedia_jasa, $type),
            "recordsFiltered" => $this->Tagihan_kontrak_model->count_filtered_get_data_dok_mc($id_detail_program_penyedia_jasa, $type),
            "data" => $data,
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function add_dok_mc()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $type = $this->input->post('type');
        $nama_file_dok_mc = $this->input->post('nama_file_dok_mc');
        $config['upload_path'] = './file_dokumen_mc/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);

        if ($type == 'file_refrensi_bank_mc') {
            if ($this->upload->do_upload('file_dokumen_mc')) {
                $fileData = $this->upload->data();
                $where = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                ];
                $upload = [
                    'nama_file_refrensi_bank_mc' => $nama_file_dok_mc,
                    'file_refrensi_bank_mc' => $fileData['file_name'],
                ];
                $this->Data_kontrak_model->update_rup($where, $upload);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('upload'));
            }
        } else  if ($type == 'file_ktp_mc') {
            if ($this->upload->do_upload('file_dokumen_mc')) {
                $fileData = $this->upload->data();
                $where = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                ];
                $upload = [
                    'nama_file_ktp_mc' => $nama_file_dok_mc,
                    'file_ktp_mc' => $fileData['file_name'],
                ];
                $this->Data_kontrak_model->update_rup($where, $upload);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('upload'));
            }
        } else  if ($type == 'file_npwp_mc') {
            if ($this->upload->do_upload('file_dokumen_mc')) {
                $fileData = $this->upload->data();
                $where = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                ];
                $upload = [
                    'nama_file_npwp_mc' => $nama_file_dok_mc,
                    'file_npwp_mc' => $fileData['file_name'],
                ];
                $this->Data_kontrak_model->update_rup($where, $upload);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('upload'));
            }
        } else  if ($type == 'file_sppkp_mc') {
            if ($this->upload->do_upload('file_dokumen_mc')) {
                $fileData = $this->upload->data();
                $where = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                ];
                $upload = [
                    'nama_file_sppkp_mc' => $nama_file_dok_mc,
                    'file_sppkp_mc' => $fileData['file_name'],
                ];
                $this->Data_kontrak_model->update_rup($where, $upload);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('upload'));
            }
        } else  if ($type == 'file_sbu_mc') {
            if ($this->upload->do_upload('file_dokumen_mc')) {
                $fileData = $this->upload->data();
                $where = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                ];
                $upload = [
                    'nama_file_sbu_mc' => $nama_file_dok_mc,
                    'file_sbu_mc' => $fileData['file_name'],
                ];
                $this->Data_kontrak_model->update_rup($where, $upload);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('upload'));
            }
        } else  if ($type == 'file_kontrak_jasa_pemborongan_mc') {
            if ($this->upload->do_upload('file_dokumen_mc')) {
                $fileData = $this->upload->data();
                $where = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                ];
                $upload = [
                    'nama_file_kontrak_jasa_pemborongan_mc' => $nama_file_dok_mc,
                    'file_kontrak_jasa_pemborongan_mc' => $fileData['file_name'],
                ];
                $this->Data_kontrak_model->update_rup($where, $upload);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('upload'));
            }
        } else  if ($type == 'file_addendum_mc') {
            if ($this->upload->do_upload('file_dokumen_mc')) {
                $fileData = $this->upload->data();
                $where = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                ];
                $upload = [
                    'nama_file_addendum_mc' => $nama_file_dok_mc,
                    'file_addendum_mc' => $fileData['file_name'],
                ];
                $this->Data_kontrak_model->update_rup($where, $upload);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('upload'));
            }
        } else  if ($type == 'file_spmk_mc') {
            if ($this->upload->do_upload('file_dokumen_mc')) {
                $fileData = $this->upload->data();
                $where = [
                    'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                ];
                $upload = [
                    'nama_file_spmk_mc' => $nama_file_dok_mc,
                    'file_spmk_mc' => $fileData['file_name'],
                ];
                $this->Data_kontrak_model->update_rup($where, $upload);
                $this->output->set_content_type('application/json')->set_output(json_encode('success'));
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('upload'));
            }
        } else {
        }
    }

    public function upload_excel()
    {
        $inisial_add = $this->input->post('type_add');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 2;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 3) {
                        $count_6 = $row->getCellAtIndex(6)->getValue();
                        $count_7 = $row->getCellAtIndex(7)->getValue();
                        $gelobal_id_get_cell = $row->getCellAtIndex(1);
                        $global_type_level = $row->getCellAtIndex(0);
                        if ($row->getCellAtIndex(0) == 'level 1') {
                            $where = array(
                                'id_hps_penyedia_kontrak_mc_1' => $row->getCellAtIndex(1),
                            );
                        } else if ($row->getCellAtIndex(0) == 'level 2') {
                            $where = array(
                                'id_hps_penyedia_kontrak_mc_2' => $row->getCellAtIndex(1),
                            );
                        } else if ($row->getCellAtIndex(0) == 'level 3') {
                            $where = array(
                                'id_hps_penyedia_kontrak_mc_3' => $row->getCellAtIndex(1),
                            );
                        } else if ($row->getCellAtIndex(0) == 'level 4') {
                            $where = array(
                                'id_hps_penyedia_kontrak_mc_4' => $row->getCellAtIndex(1),
                            );
                        } else {
                            $where = array(
                                'id_hps_penyedia_kontrak_mc_5' => $row->getCellAtIndex(1),
                            );
                        }
                        if ($inisial_add == 'kontrak_awal') {
                            $data = array(
                                'volume_hps' => $row->getCellAtIndex(6),
                                'total_harga' => (float)$count_6 * (float)$count_7,
                            );
                        } else {
                            $data = array(
                                'volume_hps' . $inisial_add  => $row->getCellAtIndex(6),
                                'total_harga' . $inisial_add => (float)$count_6 * (float)$count_7,
                            );
                        }
                        if ($row->getCellAtIndex(0) == 'level 1') {
                            $this->Data_excelisasi_model->update_ke_tbl_hps_penyedia_kontrak_mc_1($where, $data);
                        } else if ($row->getCellAtIndex(0) == 'level 2') {
                            $this->Data_excelisasi_model->update_ke_tbl_hps_penyedia_kontrak_mc_2($where, $data);
                        } else if ($row->getCellAtIndex(0) == 'level 3') {
                            $this->Data_excelisasi_model->update_ke_tbl_hps_penyedia_kontrak_mc_3($where, $data);
                        } else if ($row->getCellAtIndex(0) == 'level 4') {
                            $this->Data_excelisasi_model->update_ke_tbl_hps_penyedia_kontrak_mc_4($where, $data);
                        } else {
                            $this->Data_excelisasi_model->update_ke_tbl_hps_penyedia_kontrak_mc_5($where, $data);
                        }
                    }
                    $numRow++;

                    // $gelobal_id_get_cell;
                    $data_kirim_excel_hps['gelobal_id_get_cell'] = $gelobal_id_get_cell;
                    $data_kirim_excel_hps['inisial_add'] = $inisial_add;
                    $data_kirim_excel_hps['global_type_level'] = $global_type_level;
                    $this->load->view('excel_mc/index', $data_kirim_excel_hps);
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                redirect('taggihan_kontrak_admin/tagihan_kontrak/kelola_mc/' . $this->input->post('id_mc'));
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
}
