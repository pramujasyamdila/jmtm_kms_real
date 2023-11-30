<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Upload_excel_kontrak extends CI_Controller
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

    public function upload_data_excel_capex()
    {
        $id_capex = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_detail_capex_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_detail_capex_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_detail_capex_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_detail_capex_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_detail_capex_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_detail_capex_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_detail_capex_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_detail_capex_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_detail_capex_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_detail_capex_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_detail_capex_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_detail_capex_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_detail_capex_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_detail_capex_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_detail_capex_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_detail_capex_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_detail_capex_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_detail_capex_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_detail_capex_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_detail_capex_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_detail_capex_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_detail_capex_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_detail_capex_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_detail_capex_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_detail_capex_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_detail_capex_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_detail_capex_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_detail_capex_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_detail_capex_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_detail_capex_add_XXX';
        } else {
            $sen_kevalue = 'nilai_detail_capex';
        }
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_capex' => $id_capex,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_capex_level_2($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_capex'] = $id_capex;
                $data['type_add'] = $type_add;
                $this->load->view('capex_excel/nilai_level_excel_3', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
    public function upload_data_excel_detail_capex_1()
    {
        $id_capex_detail = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_capex_detail_1_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_capex_detail_1_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_capex_detail_1_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_capex_detail_1_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_capex_detail_1_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_capex_detail_1_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_capex_detail_1_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_capex_detail_1_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_capex_detail_1_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_capex_detail_1_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_capex_detail_1_add_XXX';
        } else {
            $sen_kevalue = 'nilai_capex_detail_1';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_capex_detail' => $id_capex_detail,
                            'no_urut_1_capex' => $row->getCellAtIndex(0),
                            'nama_uraian_1_capex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_capex_1($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_capex_detail'] = $id_capex_detail;
                $data['type_add'] = $type_add;
                $this->load->view('capex_excel/nilai_level_excel_4', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_capex_2()
    {
        $id_detail_capex_1 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_capex_detail_2_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_capex_detail_2_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_capex_detail_2_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_capex_detail_2_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_capex_detail_2_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_capex_detail_2_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_capex_detail_2_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_capex_detail_2_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_capex_detail_2_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_capex_detail_2_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_capex_detail_2_add_XXX';
        } else {
            $sen_kevalue = 'nilai_capex_detail_2';
        }
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_capex_1' => $id_detail_capex_1,
                            'no_urut_2_capex' => $row->getCellAtIndex(0),
                            'nama_uraian_2_capex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_capex_2($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_capex_1'] = $id_detail_capex_1;
                $data['type_add'] = $type_add;
                $this->load->view('capex_excel/nilai_level_excel_5', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_capex_3()
    {
        $id_detail_capex_2 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_capex_detail_3_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_capex_detail_3_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_capex_detail_3_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_capex_detail_3_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_capex_detail_3_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_capex_detail_3_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_capex_detail_3_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_capex_detail_3_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_capex_detail_3_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_capex_detail_3_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_capex_detail_3_add_XXX';
        } else {
            $sen_kevalue = 'nilai_capex_detail_3';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_capex_2' => $id_detail_capex_2,
                            'no_urut_3_capex' => $row->getCellAtIndex(0),
                            'nama_uraian_3_capex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_capex_3($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_capex_2'] = $id_detail_capex_2;
                $data['type_add'] = $type_add;
                $this->load->view('capex_excel/nilai_level_excel_6', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_capex_4()
    {
        $id_detail_capex_3 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_capex_detail_4_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_capex_detail_4_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_capex_detail_4_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_capex_detail_4_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_capex_detail_4_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_capex_detail_4_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_capex_detail_4_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_capex_detail_4_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_capex_detail_4_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_capex_detail_4_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_capex_detail_4_add_XXX';
        } else {
            $sen_kevalue = 'nilai_capex_detail_4';
        }


        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_capex_3' => $id_detail_capex_3,
                            'no_urut_4_capex' => $row->getCellAtIndex(0),
                            'nama_uraian_4_capex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_capex_4($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_capex_3'] = $id_detail_capex_3;
                $data['type_add'] = $type_add;
                $this->load->view('capex_excel/nilai_level_excel_7', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_capex_5()
    {
        $id_detail_capex_4 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_capex_detail_5_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_capex_detail_5_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_capex_detail_5_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_capex_detail_5_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_capex_detail_5_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_capex_detail_5_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_capex_detail_5_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_capex_detail_5_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_capex_detail_5_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_capex_detail_5_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_capex_detail_5_add_XXX';
        } else {
            $sen_kevalue = 'nilai_capex_detail_5';
        }
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_capex_4' => $id_detail_capex_4,
                            'no_urut_5_capex' => $row->getCellAtIndex(0),
                            'nama_uraian_5_capex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_capex_5($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_capex_4'] = $id_detail_capex_4;
                $data['type_add'] = $type_add;
                $this->load->view('capex_excel/nilai_level_excel_8', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_capex_6()
    {
        $id_detail_capex_5 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_capex_detail_6_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_capex_detail_6_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_capex_detail_6_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_capex_detail_6_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_capex_detail_6_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_capex_detail_6_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_capex_detail_6_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_capex_detail_6_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_capex_detail_6_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_capex_detail_6_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_capex_detail_6_add_XXX';
        } else {
            $sen_kevalue = 'nilai_capex_detail_6';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_capex_5' => $id_detail_capex_5,
                            'no_urut_6_capex' => $row->getCellAtIndex(0),
                            'nama_uraian_6_capex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_capex_6($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_capex_5'] = $id_detail_capex_5;
                $data['type_add'] = $type_add;
                $this->load->view('capex_excel/nilai_level_excel_9', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_capex_7()
    {
        $id_detail_capex_6 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _7
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_capex_detail_7_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_capex_detail_7_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_capex_detail_7_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_capex_detail_7_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_capex_detail_7_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_capex_detail_7_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_capex_detail_7_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_capex_detail_7_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_capex_detail_7_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_capex_detail_7_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_capex_detail_7_add_XXX';
        } else {
            $sen_kevalue = 'nilai_capex_detail_7';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_capex_6' => $id_detail_capex_6,
                            'no_urut_7_capex' => $row->getCellAtIndex(0),
                            'nama_uraian_7_capex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_capex_7($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_capex_6'] = $id_detail_capex_6;
                $data['type_add'] = $type_add;
                $this->load->view('capex_excel/nilai_level_excel_10', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
    public function upload_data_excel_detail_capex_8()
    {
        $id_detail_capex_7 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _8
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_capex_detail_8_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_capex_detail_8_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_capex_detail_8_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_capex_detail_8_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_capex_detail_8_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_capex_detail_8_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_capex_detail_8_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_capex_detail_8_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_capex_detail_8_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_capex_detail_8_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_capex_detail_8_add_XXX';
        } else {
            $sen_kevalue = 'nilai_capex_detail_8';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_capex_7' => $id_detail_capex_7,
                            'no_urut_8_capex' => $row->getCellAtIndex(0),
                            'nama_uraian_8_capex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_capex_8($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_capex_7'] = $id_detail_capex_7;
                $data['type_add'] = $type_add;
                $this->load->view('capex_excel/nilai_level_excel_11', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_capex_9()
    {
        $id_detail_capex_8 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _9
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_capex_detail_9_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_capex_detail_9_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_capex_detail_9_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_capex_detail_9_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_capex_detail_9_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_capex_detail_9_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_capex_detail_9_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_capex_detail_9_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_capex_detail_9_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_capex_detail_9_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_capex_detail_9_add_XXX';
        } else {
            $sen_kevalue = 'nilai_capex_detail_9';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_capex_8' => $id_detail_capex_8,
                            'no_urut_9_capex' => $row->getCellAtIndex(0),
                            'nama_uraian_9_capex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_capex_8($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_capex_8'] = $id_detail_capex_8;
                $data['type_add'] = $type_add;
                $this->load->view('capex_excel/nilai_level_excel_12', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_opex()
    {
        $id_opex = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_detail_opex_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_detail_opex_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_detail_opex_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_detail_opex_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_detail_opex_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_detail_opex_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_detail_opex_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_detail_opex_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_detail_opex_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_detail_opex_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_detail_opex_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_detail_opex_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_detail_opex_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_detail_opex_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_detail_opex_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_detail_opex_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_detail_opex_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_detail_opex_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_detail_opex_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_detail_opex_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_detail_opex_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_detail_opex_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_detail_opex_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_detail_opex_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_detail_opex_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_detail_opex_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_detail_opex_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_detail_opex_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_detail_opex_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_detail_opex_add_XXX';
        } else {
            $sen_kevalue = 'nilai_detail_opex';
        }
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_opex' => $id_opex,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_opex_level_2($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_opex'] = $id_opex;
                $data['type_add'] = $type_add;
                $this->load->view('opex_excel/nilai_level_excel_3', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
    public function upload_data_excel_detail_opex_1()
    {
        $id_opex_detail = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_opex_detail_1_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_opex_detail_1_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_opex_detail_1_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_opex_detail_1_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_opex_detail_1_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_opex_detail_1_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_opex_detail_1_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_opex_detail_1_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_opex_detail_1_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_opex_detail_1_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_opex_detail_1_add_XXX';
        } else {
            $sen_kevalue = 'nilai_opex_detail_1';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_opex_detail' => $id_opex_detail,
                            'no_urut_1_opex' => $row->getCellAtIndex(0),
                            'nama_uraian_1_opex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_opex_1($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_opex_detail'] = $id_opex_detail;
                $data['type_add'] = $type_add;
                $this->load->view('opex_excel/nilai_level_excel_4', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_opex_2()
    {
        $id_detail_opex_1 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_opex_detail_2_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_opex_detail_2_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_opex_detail_2_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_opex_detail_2_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_opex_detail_2_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_opex_detail_2_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_opex_detail_2_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_opex_detail_2_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_opex_detail_2_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_opex_detail_2_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_opex_detail_2_add_XXX';
        } else {
            $sen_kevalue = 'nilai_opex_detail_2';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_opex_1' => $id_detail_opex_1,
                            'no_urut_2_opex' => $row->getCellAtIndex(0),
                            'nama_uraian_2_opex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_opex_2($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_opex_1'] = $id_detail_opex_1;
                $data['type_add'] = $type_add;
                $this->load->view('opex_excel/nilai_level_excel_5', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_opex_3()
    {
        $id_detail_opex_2 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_opex_detail_3_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_opex_detail_3_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_opex_detail_3_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_opex_detail_3_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_opex_detail_3_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_opex_detail_3_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_opex_detail_3_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_opex_detail_3_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_opex_detail_3_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_opex_detail_3_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_opex_detail_3_add_XXX';
        } else {
            $sen_kevalue = 'nilai_opex_detail_3';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_opex_2' => $id_detail_opex_2,
                            'no_urut_3_opex' => $row->getCellAtIndex(0),
                            'nama_uraian_3_opex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_opex_3($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_opex_2'] = $id_detail_opex_2;
                $data['type_add'] = $type_add;
                $this->load->view('opex_excel/nilai_level_excel_6', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_opex_4()
    {
        $id_detail_opex_3 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_opex_detail_4_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_opex_detail_4_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_opex_detail_4_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_opex_detail_4_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_opex_detail_4_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_opex_detail_4_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_opex_detail_4_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_opex_detail_4_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_opex_detail_4_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_opex_detail_4_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_opex_detail_4_add_XXX';
        } else {
            $sen_kevalue = 'nilai_opex_detail_4';
        }


        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_opex_3' => $id_detail_opex_3,
                            'no_urut_4_opex' => $row->getCellAtIndex(0),
                            'nama_uraian_4_opex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_opex_4($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_opex_3'] = $id_detail_opex_3;
                $data['type_add'] = $type_add;
                $this->load->view('opex_excel/nilai_level_excel_7', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_opex_5()
    {
        $id_detail_opex_4 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_opex_detail_5_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_opex_detail_5_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_opex_detail_5_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_opex_detail_5_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_opex_detail_5_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_opex_detail_5_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_opex_detail_5_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_opex_detail_5_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_opex_detail_5_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_opex_detail_5_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_opex_detail_5_add_XXX';
        } else {
            $sen_kevalue = 'nilai_opex_detail_5';
        }
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_opex_4' => $id_detail_opex_4,
                            'no_urut_5_opex' => $row->getCellAtIndex(0),
                            'nama_uraian_5_opex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_opex_5($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_opex_4'] = $id_detail_opex_4;
                $data['type_add'] = $type_add;
                $this->load->view('opex_excel/nilai_level_excel_8', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_opex_6()
    {
        $id_detail_opex_5 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_opex_detail_6_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_opex_detail_6_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_opex_detail_6_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_opex_detail_6_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_opex_detail_6_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_opex_detail_6_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_opex_detail_6_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_opex_detail_6_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_opex_detail_6_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_opex_detail_6_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_opex_detail_6_add_XXX';
        } else {
            $sen_kevalue = 'nilai_opex_detail_6';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_opex_5' => $id_detail_opex_5,
                            'no_urut_6_opex' => $row->getCellAtIndex(0),
                            'nama_uraian_6_opex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_opex_6($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_opex_5'] = $id_detail_opex_5;
                $data['type_add'] = $type_add;
                $this->load->view('opex_excel/nilai_level_excel_9', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_opex_7()
    {
        $id_detail_opex_6 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _7
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_opex_detail_7_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_opex_detail_7_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_opex_detail_7_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_opex_detail_7_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_opex_detail_7_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_opex_detail_7_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_opex_detail_7_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_opex_detail_7_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_opex_detail_7_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_opex_detail_7_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_opex_detail_7_add_XXX';
        } else {
            $sen_kevalue = 'nilai_opex_detail_7';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_opex_6' => $id_detail_opex_6,
                            'no_urut_7_opex' => $row->getCellAtIndex(0),
                            'nama_uraian_7_opex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_opex_7($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_opex_6'] = $id_detail_opex_6;
                $data['type_add'] = $type_add;
                $this->load->view('opex_excel/nilai_level_excel_10', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
    public function upload_data_excel_detail_opex_8()
    {
        $id_detail_opex_7 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _8
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_opex_detail_8_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_opex_detail_8_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_opex_detail_8_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_opex_detail_8_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_opex_detail_8_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_opex_detail_8_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_opex_detail_8_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_opex_detail_8_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_opex_detail_8_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_opex_detail_8_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_opex_detail_8_add_XXX';
        } else {
            $sen_kevalue = 'nilai_opex_detail_8';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_opex_7' => $id_detail_opex_7,
                            'no_urut_8_opex' => $row->getCellAtIndex(0),
                            'nama_uraian_8_opex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_opex_8($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_opex_7'] = $id_detail_opex_7;
                $data['type_add'] = $type_add;
                $this->load->view('opex_excel/nilai_level_excel_11', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_opex_9()
    {
        $id_detail_opex_8 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _9
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_opex_detail_9_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_opex_detail_9_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_opex_detail_9_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_opex_detail_9_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_opex_detail_9_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_opex_detail_9_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_opex_detail_9_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_opex_detail_9_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_opex_detail_9_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_opex_detail_9_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_opex_detail_9_add_XXX';
        } else {
            $sen_kevalue = 'nilai_opex_detail_9';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_opex_8' => $id_detail_opex_8,
                            'no_urut_9_opex' => $row->getCellAtIndex(0),
                            'nama_uraian_9_opex' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_opex_8($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_opex_8'] = $id_detail_opex_8;
                $data['type_add'] = $type_add;
                $this->load->view('opex_excel/nilai_level_excel_12', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }


    public function upload_data_excel_bua()
    {
        $id_bua = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_detail_bua_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_detail_bua_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_detail_bua_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_detail_bua_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_detail_bua_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_detail_bua_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_detail_bua_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_detail_bua_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_detail_bua_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_detail_bua_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_detail_bua_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_detail_bua_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_detail_bua_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_detail_bua_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_detail_bua_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_detail_bua_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_detail_bua_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_detail_bua_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_detail_bua_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_detail_bua_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_detail_bua_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_detail_bua_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_detail_bua_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_detail_bua_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_detail_bua_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_detail_bua_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_detail_bua_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_detail_bua_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_detail_bua_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_detail_bua_add_XXX';
        } else {
            $sen_kevalue = 'nilai_detail_bua';
        }
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_bua' => $id_bua,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_bua_level_2($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_bua'] = $id_bua;
                $data['type_add'] = $type_add;
                $this->load->view('bua_excel/nilai_level_excel_3', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
    public function upload_data_excel_detail_bua_1()
    {
        $id_bua_detail = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_bua_detail_1_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_bua_detail_1_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_bua_detail_1_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_bua_detail_1_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_bua_detail_1_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_bua_detail_1_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_bua_detail_1_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_bua_detail_1_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_bua_detail_1_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_bua_detail_1_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_bua_detail_1_add_XXX';
        } else {
            $sen_kevalue = 'nilai_bua_detail_1';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_bua_detail' => $id_bua_detail,
                            'no_urut_1_bua' => $row->getCellAtIndex(0),
                            'nama_uraian_1_bua' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_bua_1($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_bua_detail'] = $id_bua_detail;
                $data['type_add'] = $type_add;
                $this->load->view('bua_excel/nilai_level_excel_4', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_bua_2()
    {
        $id_detail_bua_1 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_bua_detail_2_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_bua_detail_2_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_bua_detail_2_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_bua_detail_2_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_bua_detail_2_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_bua_detail_2_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_bua_detail_2_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_bua_detail_2_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_bua_detail_2_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_bua_detail_2_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_bua_detail_2_add_XXX';
        } else {
            $sen_kevalue = 'nilai_bua_detail_2';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_bua_1' => $id_detail_bua_1,
                            'no_urut_2_bua' => $row->getCellAtIndex(0),
                            'nama_uraian_2_bua' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_bua_2($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_bua_1'] = $id_detail_bua_1;
                $data['type_add'] = $type_add;
                $this->load->view('bua_excel/nilai_level_excel_5', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_bua_3()
    {
        $id_detail_bua_2 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_bua_detail_3_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_bua_detail_3_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_bua_detail_3_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_bua_detail_3_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_bua_detail_3_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_bua_detail_3_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_bua_detail_3_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_bua_detail_3_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_bua_detail_3_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_bua_detail_3_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_bua_detail_3_add_XXX';
        } else {
            $sen_kevalue = 'nilai_bua_detail_3';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_bua_2' => $id_detail_bua_2,
                            'no_urut_3_bua' => $row->getCellAtIndex(0),
                            'nama_uraian_3_bua' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_bua_3($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_bua_2'] = $id_detail_bua_2;
                $data['type_add'] = $type_add;
                $this->load->view('bua_excel/nilai_level_excel_6', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_bua_4()
    {
        $id_detail_bua_3 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_bua_detail_4_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_bua_detail_4_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_bua_detail_4_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_bua_detail_4_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_bua_detail_4_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_bua_detail_4_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_bua_detail_4_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_bua_detail_4_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_bua_detail_4_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_bua_detail_4_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_bua_detail_4_add_XXX';
        } else {
            $sen_kevalue = 'nilai_bua_detail_4';
        }


        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_bua_3' => $id_detail_bua_3,
                            'no_urut_4_bua' => $row->getCellAtIndex(0),
                            'nama_uraian_4_bua' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_bua_4($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_bua_3'] = $id_detail_bua_3;
                $data['type_add'] = $type_add;
                $this->load->view('bua_excel/nilai_level_excel_7', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_bua_5()
    {
        $id_detail_bua_4 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_bua_detail_5_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_bua_detail_5_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_bua_detail_5_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_bua_detail_5_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_bua_detail_5_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_bua_detail_5_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_bua_detail_5_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_bua_detail_5_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_bua_detail_5_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_bua_detail_5_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_bua_detail_5_add_XXX';
        } else {
            $sen_kevalue = 'nilai_bua_detail_5';
        }
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_bua_4' => $id_detail_bua_4,
                            'no_urut_5_bua' => $row->getCellAtIndex(0),
                            'nama_uraian_5_bua' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_bua_5($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_bua_4'] = $id_detail_bua_4;
                $data['type_add'] = $type_add;
                $this->load->view('bua_excel/nilai_level_excel_8', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_bua_6()
    {
        $id_detail_bua_5 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_bua_detail_6_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_bua_detail_6_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_bua_detail_6_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_bua_detail_6_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_bua_detail_6_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_bua_detail_6_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_bua_detail_6_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_bua_detail_6_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_bua_detail_6_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_bua_detail_6_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_bua_detail_6_add_XXX';
        } else {
            $sen_kevalue = 'nilai_bua_detail_6';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_bua_5' => $id_detail_bua_5,
                            'no_urut_6_bua' => $row->getCellAtIndex(0),
                            'nama_uraian_6_bua' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_bua_6($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_bua_5'] = $id_detail_bua_5;
                $data['type_add'] = $type_add;
                $this->load->view('bua_excel/nilai_level_excel_9', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_bua_7()
    {
        $id_detail_bua_6 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _7
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_bua_detail_7_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_bua_detail_7_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_bua_detail_7_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_bua_detail_7_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_bua_detail_7_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_bua_detail_7_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_bua_detail_7_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_bua_detail_7_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_bua_detail_7_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_bua_detail_7_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_bua_detail_7_add_XXX';
        } else {
            $sen_kevalue = 'nilai_bua_detail_7';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_bua_6' => $id_detail_bua_6,
                            'no_urut_7_bua' => $row->getCellAtIndex(0),
                            'nama_uraian_7_bua' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_bua_7($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_bua_6'] = $id_detail_bua_6;
                $data['type_add'] = $type_add;
                $this->load->view('bua_excel/nilai_level_excel_10', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
    public function upload_data_excel_detail_bua_8()
    {
        $id_detail_bua_7 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _8
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_bua_detail_8_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_bua_detail_8_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_bua_detail_8_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_bua_detail_8_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_bua_detail_8_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_bua_detail_8_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_bua_detail_8_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_bua_detail_8_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_bua_detail_8_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_bua_detail_8_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_bua_detail_8_add_XXX';
        } else {
            $sen_kevalue = 'nilai_bua_detail_8';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_bua_7' => $id_detail_bua_7,
                            'no_urut_8_bua' => $row->getCellAtIndex(0),
                            'nama_uraian_8_bua' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_bua_8($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_bua_7'] = $id_detail_bua_7;
                $data['type_add'] = $type_add;
                $this->load->view('bua_excel/nilai_level_excel_11', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_bua_9()
    {
        $id_detail_bua_8 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _9
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_bua_detail_9_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_bua_detail_9_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_bua_detail_9_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_bua_detail_9_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_bua_detail_9_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_bua_detail_9_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_bua_detail_9_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_bua_detail_9_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_bua_detail_9_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_bua_detail_9_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_bua_detail_9_add_XXX';
        } else {
            $sen_kevalue = 'nilai_bua_detail_9';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_bua_8' => $id_detail_bua_8,
                            'no_urut_9_bua' => $row->getCellAtIndex(0),
                            'nama_uraian_9_bua' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_bua_8($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_bua_8'] = $id_detail_bua_8;
                $data['type_add'] = $type_add;
                $this->load->view('bua_excel/nilai_level_excel_12', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }



    public function upload_data_excel_sdm()
    {
        $id_sdm = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_detail_sdm_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_detail_sdm_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_detail_sdm_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_detail_sdm_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_detail_sdm_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_detail_sdm_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_detail_sdm_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_detail_sdm_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_detail_sdm_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_detail_sdm_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_detail_sdm_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_detail_sdm_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_detail_sdm_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_detail_sdm_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_detail_sdm_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_detail_sdm_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_detail_sdm_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_detail_sdm_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_detail_sdm_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_detail_sdm_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_detail_sdm_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_detail_sdm_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_detail_sdm_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_detail_sdm_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_detail_sdm_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_detail_sdm_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_detail_sdm_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_detail_sdm_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_detail_sdm_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_detail_sdm_add_XXX';
        } else {
            $sen_kevalue = 'nilai_detail_sdm';
        }
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_sdm' => $id_sdm,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_sdm_level_2($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_sdm'] = $id_sdm;
                $data['type_add'] = $type_add;
                $this->load->view('sdm_excel/nilai_level_excel_3', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
    public function upload_data_excel_detail_sdm_1()
    {
        $id_sdm_detail = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_sdm_detail_1_add_XXX';
        } else {
            $sen_kevalue = 'nilai_sdm_detail_1';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_sdm_detail' => $id_sdm_detail,
                            'no_urut_1_sdm' => $row->getCellAtIndex(0),
                            'nama_uraian_1_sdm' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_sdm_1($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_sdm_detail'] = $id_sdm_detail;
                $data['type_add'] = $type_add;
                $this->load->view('sdm_excel/nilai_level_excel_4', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_sdm_2()
    {
        $id_detail_sdm_1 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_sdm_detail_2_add_XXX';
        } else {
            $sen_kevalue = 'nilai_sdm_detail_2';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_sdm_1' => $id_detail_sdm_1,
                            'no_urut_2_sdm' => $row->getCellAtIndex(0),
                            'nama_uraian_2_sdm' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_sdm_2($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_sdm_1'] = $id_detail_sdm_1;
                $data['type_add'] = $type_add;
                $this->load->view('sdm_excel/nilai_level_excel_5', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_sdm_3()
    {
        $id_detail_sdm_2 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_sdm_detail_3_add_XXX';
        } else {
            $sen_kevalue = 'nilai_sdm_detail_3';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_sdm_2' => $id_detail_sdm_2,
                            'no_urut_3_sdm' => $row->getCellAtIndex(0),
                            'nama_uraian_3_sdm' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_sdm_3($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_sdm_2'] = $id_detail_sdm_2;
                $data['type_add'] = $type_add;
                $this->load->view('sdm_excel/nilai_level_excel_6', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_sdm_4()
    {
        $id_detail_sdm_3 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_sdm_detail_4_add_XXX';
        } else {
            $sen_kevalue = 'nilai_sdm_detail_4';
        }


        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_sdm_3' => $id_detail_sdm_3,
                            'no_urut_4_sdm' => $row->getCellAtIndex(0),
                            'nama_uraian_4_sdm' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_sdm_4($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_sdm_3'] = $id_detail_sdm_3;
                $data['type_add'] = $type_add;
                $this->load->view('sdm_excel/nilai_level_excel_7', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_sdm_5()
    {
        $id_detail_sdm_4 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_sdm_detail_5_add_XXX';
        } else {
            $sen_kevalue = 'nilai_sdm_detail_5';
        }
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_sdm_4' => $id_detail_sdm_4,
                            'no_urut_5_sdm' => $row->getCellAtIndex(0),
                            'nama_uraian_5_sdm' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_sdm_5($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_sdm_4'] = $id_detail_sdm_4;
                $data['type_add'] = $type_add;
                $this->load->view('sdm_excel/nilai_level_excel_8', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_sdm_6()
    {
        $id_detail_sdm_5 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_sdm_detail_6_add_XXX';
        } else {
            $sen_kevalue = 'nilai_sdm_detail_6';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_sdm_5' => $id_detail_sdm_5,
                            'no_urut_6_sdm' => $row->getCellAtIndex(0),
                            'nama_uraian_6_sdm' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_sdm_6($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_sdm_5'] = $id_detail_sdm_5;
                $data['type_add'] = $type_add;
                $this->load->view('sdm_excel/nilai_level_excel_9', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_sdm_7()
    {
        $id_detail_sdm_6 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _7
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_sdm_detail_7_add_XXX';
        } else {
            $sen_kevalue = 'nilai_sdm_detail_7';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_sdm_6' => $id_detail_sdm_6,
                            'no_urut_7_sdm' => $row->getCellAtIndex(0),
                            'nama_uraian_7_sdm' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_sdm_7($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_sdm_6'] = $id_detail_sdm_6;
                $data['type_add'] = $type_add;
                $this->load->view('sdm_excel/nilai_level_excel_10', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
    public function upload_data_excel_detail_sdm_8()
    {
        $id_detail_sdm_7 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _8
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_sdm_detail_8_add_XXX';
        } else {
            $sen_kevalue = 'nilai_sdm_detail_8';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_sdm_7' => $id_detail_sdm_7,
                            'no_urut_8_sdm' => $row->getCellAtIndex(0),
                            'nama_uraian_8_sdm' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_sdm_8($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_sdm_7'] = $id_detail_sdm_7;
                $data['type_add'] = $type_add;
                $this->load->view('sdm_excel/nilai_level_excel_11', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function upload_data_excel_detail_sdm_9()
    {
        $id_detail_sdm_8 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
        $type_add = $this->input->post('type_add_excel');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // _9
        if ($type_add == 1) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_I';
        } else  if ($type_add == 2) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_II';
        } else  if ($type_add == 3) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_III';
        } else  if ($type_add == 4) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_IV';
        } else  if ($type_add == 5) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_V';
        } else  if ($type_add == 6) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_VI';
        } else  if ($type_add == 7) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_VII';
        } else  if ($type_add == 8) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_VIII';
        } else  if ($type_add == 9) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_IX';
        } else  if ($type_add == 10) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_X';
        } else  if ($type_add == 11) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XI';
        } else  if ($type_add == 12) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XII';
        } else  if ($type_add == 13) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XIII';
        } else  if ($type_add == 14) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XIV';
        } else  if ($type_add == 15) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XV';
        } else  if ($type_add == 16) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XVI';
        } else  if ($type_add == 17) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XVII';
        } else  if ($type_add == 18) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XVIII';
        } else  if ($type_add == 19) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XIX';
        } else  if ($type_add == 20) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XX';
        } else  if ($type_add == 21) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XXI';
        } else  if ($type_add == 22) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XXII';
        } else  if ($type_add == 23) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XXIII';
        } else  if ($type_add == 24) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XXIV';
        } else  if ($type_add == 25) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XXV';
        } else  if ($type_add == 26) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XXVI';
        } else  if ($type_add == 27) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XXVII';
        } else  if ($type_add == 28) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XXVIII';
        } else  if ($type_add == 29) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XXIX';
        } else  if ($type_add == 30) {
            $sen_kevalue = 'nilai_sdm_detail_9_add_XXX';
        } else {
            $sen_kevalue = 'nilai_sdm_detail_9';
        }

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $data = array(
                            'id_detail_sdm_8' => $id_detail_sdm_8,
                            'no_urut_9_sdm' => $row->getCellAtIndex(0),
                            'nama_uraian_9_sdm' => $row->getCellAtIndex(1),
                            $sen_kevalue => $row->getCellAtIndex(2),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_tbl_detail_sdm_8($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_detail_sdm_8'] = $id_detail_sdm_8;
                $data['type_add'] = $type_add;
                $this->load->view('sdm_excel/nilai_level_excel_12', $data);
                redirect('admin/data_kontrak/kelola_level/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }


    // INI UNTUK UNIT PRICE
    public function upload_data_excel_unit_price_1()
    {
        $id_unit_price = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price' => $id_unit_price,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_1($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price'] = $id_unit_price;
                $this->load->view('unit_price_excel/nilai_level_excel_3', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }


    public function upload_data_excel_unit_price_2()
    {
        $id_unit_price_1 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price_1' => $id_unit_price_1,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_2($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price_1'] = $id_unit_price_1;
                $this->load->view('unit_price_excel/nilai_level_excel_4', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
    // _3
    // _2
    public function upload_data_excel_unit_price_3()
    {
        $id_unit_price_2 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price_2' => $id_unit_price_2,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_3($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price_2'] = $id_unit_price_2;
                $this->load->view('unit_price_excel/nilai_level_excel_5', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    // _4
    // _3
    public function upload_data_excel_unit_price_4()
    {
        $id_unit_price_3 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price_3' => $id_unit_price_3,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_4($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price_3'] = $id_unit_price_3;
                $this->load->view('unit_price_excel/nilai_level_excel_6', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    // _5
    // _4
    public function upload_data_excel_unit_price_5()
    {
        $id_unit_price_4 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price_4' => $id_unit_price_4,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_5($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price_4'] = $id_unit_price_4;
                $this->load->view('unit_price_excel/nilai_level_excel_6', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }


    // _6
    // _5
    public function upload_data_excel_unit_price_6()
    {
        $id_unit_price_5 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price_5' => $id_unit_price_5,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_6($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price_5'] = $id_unit_price_5;
                $this->load->view('unit_price_excel/nilai_level_excel_7', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }


    // _7
    // _6
    public function upload_data_excel_unit_price_7()
    {
        $id_unit_price_6 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price_6' => $id_unit_price_6,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_7($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price_6'] = $id_unit_price_6;
                $this->load->view('unit_price_excel/nilai_level_excel_8', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }



    // _8
    // _7
    public function upload_data_excel_unit_price_8()
    {
        $id_unit_price_7 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price_7' => $id_unit_price_7,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_8($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price_7'] = $id_unit_price_7;
                $this->load->view('unit_price_excel/nilai_level_excel_9', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }


    // _9
    // _8
    public function upload_data_excel_unit_price_9()
    {
        $id_unit_price_8 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price_8' => $id_unit_price_8,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_9($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price_8'] = $id_unit_price_8;
                $this->load->view('unit_price_excel/nilai_level_excel_10', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }



    // _10
    // _9
    public function upload_data_excel_unit_price_10()
    {
        $id_unit_price_9 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price_9' => $id_unit_price_9,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_10($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price_9'] = $id_unit_price_9;
                $this->load->view('unit_price_excel/nilai_level_excel_11', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    // _11
    // _10
    public function upload_data_excel_unit_price_11()
    {
        $id_unit_price_10 = $this->input->post('id_global_excel');
        $id_kontrak = $this->input->post('id_kontrak');
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
                            'id_unit_price_10' => $id_unit_price_10,
                            'no_urut' => $row->getCellAtIndex(0),
                            'nama_uraian' => $row->getCellAtIndex(1),
                            'satuan' => $row->getCellAtIndex(2),
                            'kuantitas' => $row->getCellAtIndex(3),
                            'harga_satuan' => $row->getCellAtIndex(4),
                            'total_harga' => $row->getCellAtIndex(5),
                        );
                        $this->Data_excelisasi_model->insert_via_excel_unit_price_level_11($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
                $data['id_unit_price_10'] = $id_unit_price_10;
                $this->load->view('unit_price_excel/nilai_level_excel_11', $data);
                redirect('admin/data_kontrak/kelola_level_unit_price/' . $id_kontrak);
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }
}
