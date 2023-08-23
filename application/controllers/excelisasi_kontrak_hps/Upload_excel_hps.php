<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Upload_excel_hps extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'string');
        $this->load->library(['form_validation']);
        $this->load->model('Admin/Data_kontrak_model');
        $this->load->model('Admin/Data_excelisasi_model');
        $this->load->model('Auth_model');
    }


    public function upload_excel_hps_penyedia_1()
    {
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
        $id_detail_sub_program_penyedia_jasa = $this->input->post('id_detail_sub_program_penyedia_jasa');
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
                        $tkdn = $row->getCellAtIndex(6)->getValue();
                        $volume = $row->getCellAtIndex(4)->getValue();
                        $harga_satuan =  $row->getCellAtIndex(5)->getValue();
                        $hitung_harga_satuan_tkdn = $harga_satuan * ($tkdn / 100);
                        $hasil_harga_satuan_tkdn = round($hitung_harga_satuan_tkdn, 2);
                        $hitung_jumlah_harga_tkdn = $volume * $hasil_harga_satuan_tkdn;
                        $hasil_jumlah_harga_tkdn = round($hitung_jumlah_harga_tkdn, 2);
                        $data = array(
                            'id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa,
                            'id_detail_sub_program_penyedia_jasa' => $id_detail_sub_program_penyedia_jasa,
                            'no_urut' => $row->getCellAtIndex(0),
                            'no_hps' => $row->getCellAtIndex(1),
                            'uraian_hps' => $row->getCellAtIndex(2),
                            'satuan_hps' => $row->getCellAtIndex(3),
                            'volume_hps' => $volume,
                            'harga_satuan_hps' => $harga_satuan,
                            'total_harga' => $volume * $harga_satuan,
                            'tkdn' => $tkdn,
                            'harga_satuan_tkdn' => $hasil_harga_satuan_tkdn,
                            'jumlah_harga_tkdn' => $hasil_jumlah_harga_tkdn,

                        );
                        $this->Data_excelisasi_model->insert_via_hps_penyedia_1($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                redirect('admin/administrasi_penyedia/buat_hps/' . $id_detail_program_penyedia_jasa);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_excel_hps_penyedia_2()
    {
        $id_hps_penyedia_1 = $this->input->post('id_hps_penyedia_1');
        $data_logic['id_hps_penyedia_1'] = $this->input->post('id_hps_penyedia_1');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
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
                            'id_hps_penyedia_1' => $id_hps_penyedia_1,
                            'no_urut' => $row->getCellAtIndex(0),
                            'no_hps' => $row->getCellAtIndex(1),
                            'uraian_hps' => $row->getCellAtIndex(2),
                            'satuan_hps' => $row->getCellAtIndex(3),
                            'volume_hps' => $row->getCellAtIndex(4),
                            'harga_satuan_hps' => $row->getCellAtIndex(5),
                            'total_harga' => $row->getCellAtIndex(6)
                        );
                        $this->Data_excelisasi_model->insert_via_hps_penyedia_2($data);
                        $id_refrence_hps = $this->db->insert_id();
                        $data_2 = array(
                            'id_hps_penyedia_kontrak_1' => $id_hps_penyedia_1,
                            'id_refrence_hps' => $id_refrence_hps,
                            'no_urut' => $row->getCellAtIndex(0),
                            'no_hps' => $row->getCellAtIndex(1),
                            'uraian_hps' => $row->getCellAtIndex(2),
                            'satuan_hps' => $row->getCellAtIndex(3),
                            'volume_hps' => $row->getCellAtIndex(4),
                            'harga_satuan_hps' => $row->getCellAtIndex(5),
                            'total_harga' => $row->getCellAtIndex(6),
                            'item_baru' => 'kosong',

                        );
                        $this->Data_excelisasi_model->insert_via_hps_penyedia_kontrak_2($data_2);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $this->load->view('hps_penyedia_level_logic/nilai_level_2_excel', $data_logic);
                redirect('admin/administrasi_penyedia/buat_hps/' . $id_detail_program_penyedia_jasa);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_excel_hps_penyedia_3()
    {
        $id_hps_penyedia_2 = $this->input->post('id_hps_penyedia_2');
        $data_logic['id_hps_penyedia_2'] = $this->input->post('id_hps_penyedia_2');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
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
                            'id_hps_penyedia_2' => $id_hps_penyedia_2,
                            'no_urut' => $row->getCellAtIndex(0),
                            'no_hps' => $row->getCellAtIndex(1),
                            'uraian_hps' => $row->getCellAtIndex(2),
                            'satuan_hps' => $row->getCellAtIndex(3),
                            'volume_hps' => $row->getCellAtIndex(4),
                            'harga_satuan_hps' => $row->getCellAtIndex(5),
                            'total_harga' => $row->getCellAtIndex(6)
                        );
                        $this->Data_excelisasi_model->insert_via_hps_penyedia_3($data);
                        $id_refrence_hps = $this->db->insert_id();
                        $data_2 = array(
                            'id_hps_penyedia_kontrak_2' => $id_hps_penyedia_2,
                            'id_refrence_hps' => $id_refrence_hps,
                            'no_urut' => $row->getCellAtIndex(0),
                            'no_hps' => $row->getCellAtIndex(1),
                            'uraian_hps' => $row->getCellAtIndex(2),
                            'satuan_hps' => $row->getCellAtIndex(3),
                            'volume_hps' => $row->getCellAtIndex(4),
                            'harga_satuan_hps' => $row->getCellAtIndex(5),
                            'total_harga' => $row->getCellAtIndex(6),
                            'item_baru' => 'kosong',

                        );
                        $this->Data_excelisasi_model->insert_via_hps_penyedia_kontrak_3($data_2);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $this->load->view('hps_penyedia_level_logic/nilai_level_4_excel', $data_logic);
                redirect('admin/administrasi_penyedia/buat_hps/' . $id_detail_program_penyedia_jasa);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_excel_hps_penyedia_4()
    {
        $id_hps_penyedia_3 = $this->input->post('id_hps_penyedia_3');
        $data_logic['id_hps_penyedia_3'] = $this->input->post('id_hps_penyedia_3');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
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
                            'id_hps_penyedia_3' => $id_hps_penyedia_3,
                            'no_urut' => $row->getCellAtIndex(0),
                            'no_hps' => $row->getCellAtIndex(1),
                            'uraian_hps' => $row->getCellAtIndex(2),
                            'satuan_hps' => $row->getCellAtIndex(3),
                            'volume_hps' => $row->getCellAtIndex(4),
                            'harga_satuan_hps' => $row->getCellAtIndex(5),
                            'total_harga' => $row->getCellAtIndex(6)
                        );
                        $this->Data_excelisasi_model->insert_via_hps_penyedia_4($data);
                        $id_refrence_hps = $this->db->insert_id();
                        $data_2 = array(
                            'id_hps_penyedia_kontrak_3' => $id_hps_penyedia_3,
                            'id_refrence_hps' => $id_refrence_hps,
                            'no_urut' => $row->getCellAtIndex(0),
                            'no_hps' => $row->getCellAtIndex(1),
                            'uraian_hps' => $row->getCellAtIndex(2),
                            'satuan_hps' => $row->getCellAtIndex(3),
                            'volume_hps' => $row->getCellAtIndex(4),
                            'harga_satuan_hps' => $row->getCellAtIndex(5),
                            'total_harga' => $row->getCellAtIndex(6),
                            'item_baru' => 'kosong',

                        );
                        $this->Data_excelisasi_model->insert_via_hps_penyedia_kontrak_4($data_2);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $this->load->view('hps_penyedia_level_logic/nilai_level_5_excel', $data_logic);
                redirect('admin/administrasi_penyedia/buat_hps/' . $id_detail_program_penyedia_jasa);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_excel_hps_penyedia_5()
    {
        $id_hps_penyedia_4 = $this->input->post('id_hps_penyedia_4');
        $data_logic['id_hps_penyedia_4'] = $this->input->post('id_hps_penyedia_4');
        $id_detail_program_penyedia_jasa = $this->input->post('id_detail_program_penyedia_jasa');
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
                            'id_hps_penyedia_4' => $id_hps_penyedia_4,
                            'no_urut' => $row->getCellAtIndex(0),
                            'no_hps' => $row->getCellAtIndex(1),
                            'uraian_hps' => $row->getCellAtIndex(2),
                            'satuan_hps' => $row->getCellAtIndex(3),
                            'volume_hps' => $row->getCellAtIndex(4),
                            'harga_satuan_hps' => $row->getCellAtIndex(5),
                            'total_harga' => $row->getCellAtIndex(6)
                        );
                        $this->Data_excelisasi_model->insert_via_hps_penyedia_5($data);
                        $id_refrence_hps = $this->db->insert_id();
                        $data_2 = array(
                            'id_hps_penyedia_kontrak_4' => $id_hps_penyedia_4,
                            'id_refrence_hps' => $id_refrence_hps,
                            'no_urut' => $row->getCellAtIndex(0),
                            'no_hps' => $row->getCellAtIndex(1),
                            'uraian_hps' => $row->getCellAtIndex(2),
                            'satuan_hps' => $row->getCellAtIndex(3),
                            'volume_hps' => $row->getCellAtIndex(4),
                            'harga_satuan_hps' => $row->getCellAtIndex(5),
                            'total_harga' => $row->getCellAtIndex(6),
                            'item_baru' => 'kosong',

                        );
                        $this->Data_excelisasi_model->insert_via_hps_penyedia_kontrak_5($data_2);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $this->load->view('hps_penyedia_level_logic/nilai_level_6_excel', $data_logic);
                redirect('admin/administrasi_penyedia/buat_hps/' . $id_detail_program_penyedia_jasa);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
}
