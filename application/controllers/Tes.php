<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Tes extends CI_Controller
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


    public function upload_kualifikasi()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 0;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 0) {
                        $data = array(
                            'kecamatan' => $row->getCellAtIndex(0),
                            'kelurahan' => $row->getCellAtIndex(1),
                            'nkk' => $row->getCellAtIndex(2),
                            'nik' => $row->getCellAtIndex(3),
                            'nama' => $row->getCellAtIndex(4),
                            'tempat_lahir' => $row->getCellAtIndex(5),
                            'tanggal' => $row->getCellAtIndex(6),
                            'sts_kawin' => $row->getCellAtIndex(7),
                            'kelamin' => $row->getCellAtIndex(8),
                            'alamat' => $row->getCellAtIndex(9),
                            'rt' => $row->getCellAtIndex(10),
                            'rw' => $row->getCellAtIndex(11),
                            'tps' => $row->getCellAtIndex(12),
                        );
                        $this->Data_excelisasi_model->insert_kualifikasi($data);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Import');
            }
        } else {
            echo "Error : " . $this->upload->display_errors();
        }
    }

    public function index()
    {
        $this->load->view('export_kbli');
    }
}
