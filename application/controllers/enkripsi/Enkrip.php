<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Enkrip extends CI_Controller
{
        function __construct()
        {
            parent::__construct();
            $this->load->model('Admin/Data_kontrak_model');
            $this->load->library('uuid');
        }

    public function index()
    {

        //Output a v4 UUID 
        $id = $this->uuid->v4();
        $id = str_replace('-', '', $id);
        $this->db->set('id', $id, FALSE);
        $data['active_kontrak'] = 'active';
        $data['menu_open_kontrak'] = 'menu-open';
        $data['get_enkrip']  = $this->Data_kontrak_model->get_enkrip();
        $this->load->view('template/head_ui');
        $this->load->view('template/sidebar_ui', $data);
        $this->load->view('enkrip', $data);
        $this->load->view('template/footer_ui');
        $this->load->view('area/kontrak_management/danangjs');
    }
    
    public function upload_data()
    {

        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
            'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '?', '!', '@', '#',
            '$', '%', '^', '&', '*', '(', ')', '[', ']', '{', '}', '|', ';', '/', '=', '+'
        );

        shuffle($chars);

        $num_chars = count($chars) - 1;
        $token = '';

        for ($i = 0; $i < $num_chars; $i++) { // <-- $num_chars instead of $len
            $token .= $chars[mt_rand(0, $num_chars)];
        }
        $token;

        $config['upload_path'] = './file_dokumen_penunjang/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 0;
        $config['remove_spaces'] = TRUE;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_asli')) {
            $fileData = $this->upload->data();
            $file_asli = $fileData['file_name'];
            $chiper = "AES-128-ECB";
            $secret = $token;
            $enckrips_string = openssl_encrypt($file_asli, $chiper, $secret);
            $upload = [
                'status' => 1,
                'token' => $token,
                'file_asli' => $enckrips_string,
            ];
            $this->Data_kontrak_model->create_file_enkrip($upload);
            redirect('enkripsi/enkrip');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('upload'));
        }
    }


    public function update_dekrip($id_enkrip)
    {
        $get_row_enkrip = $this->Data_kontrak_model->get_row_enkrip($id_enkrip);
        $chiper = "AES-128-ECB";
        $secret = $get_row_enkrip['token'];
        $dekrip_string = openssl_decrypt($get_row_enkrip['file_asli'], $chiper, $secret);
        $where = [
            'id_enkrip' => $id_enkrip
        ];
        $data = [
            'status' => 2,
            'file_asli' => $dekrip_string,
        ];
        $this->Data_kontrak_model->udapte_enkrip($where, $data);
        redirect('enkripsi/enkrip');
    }

    public function update_enkrip($id_enkrip)
    {
        $get_row_enkrip  = $this->Data_kontrak_model->get_row_enkrip($id_enkrip);
        $chiper = "AES-128-ECB";
        $secret = $get_row_enkrip['token'];
        $enkrip_string = openssl_encrypt($get_row_enkrip['file_asli'], $chiper, $secret);
        $where = [
            'id_enkrip' => $id_enkrip
        ];
        $data = [
            'status' => 1,
            'file_asli' => $enkrip_string,
        ];
        $this->Data_kontrak_model->udapte_enkrip($where, $data);
        redirect('enkripsi/enkrip');
    }
}
